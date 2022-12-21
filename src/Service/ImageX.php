<?php

namespace Volc\Service;

use GuzzleHttp\Handler\CurlHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use Volc\Base\V4Curl;
use GuzzleHttp\Client;
use Volc\Service\ImageX\ImageXConfig;
use Volc\Service\ImageX\ImageXUtil;

const ResourceServiceIdTRN = "trn:ImageX:*:*:ServiceId/%s";
const ResourceStoreKeyTRN = "trn:ImageX:*:*:StoreKeys/%s";

class ImageX extends V4Curl
{
    const MinChunkSize = 1024 * 1024 * 20;
    const LargeFileSize = 1024 * 1024 * 1024;

    /**
     * @throws \Exception
     */
    protected function getConfig(string $region)
    {
        if (!isset(ImageXConfig::region[$region])) {
            throw new \Exception(sprintf("ImageX not support region, %s", $region));
        }
        return ImageXConfig::region[$region];
    }

    protected $apiList = ImageXConfig::apiList;

    public function applyUploadImage(array $query)
    {
        $response = $this->request('ApplyImageUpload', $query);
        return (string)$response->getBody();
    }

    public function commitUploadImage(array $query)
    {
        $response = $this->request('CommitImageUpload', $query);
        return (string)$response->getBody();
    }

    public function updateImageUrls($serviceID, $urls, $action = 0)
    {
        $config = [
            "query" => ["ServiceId" => $serviceID],
            "json" => [
                "Action" => $action,
                "ImageUrls" => $urls,
            ],
        ];
        $response = $this->request('UpdateImageUploadFiles', $config);
        return (string)$response->getBody();
    }

    public function upload(string $uploadHost, $storeInfo, string $file)
    {
        /** @noinspection PhpUnusedLocalVariableInspection */
        $fileResource = null;
        /** @noinspection PhpUnusedLocalVariableInspection */
        $fileSize = 0;

        if (file_exists($file)) {
            // 如果传入是一个文件
            $fileResource = fopen($file, 'rb');
            if ($fileResource === false) {
                return -1;
            }

            $fileSize = filesize($file);
            if ($fileSize === false) {
                return -1;
            }
        } else {
            return -1;
        }

        if ($fileSize == 0) {
            return -1;
        }

        if ($fileSize <= static::MinChunkSize) {
            $content = stream_get_contents($fileResource);
            if (strlen($content) != $fileSize) {
                return $this->directUpload($uploadHost, $storeInfo, $content);
            }
        } else {
            $isLargeFile = $fileSize > static::LargeFileSize;
            $handlerStack = HandlerStack::create(new CurlHandler());
            $handlerStack->push(Middleware::retry(ImageXUtil::retryDecider(), ImageXUtil::retryDelay()));
            $client = new Client([
                'base_uri' => "https://" . $uploadHost,
                'timeout' => $isLargeFile ? 600.0 : 30.0,
                'handler' => $handlerStack,
            ]);

            return $this->chunkUpload($storeInfo, $fileResource, $fileSize, $client);
        }

        return 0;
    }

    /**
     * @param array $storeInfo
     * @param resource $fileResource
     * @param int $fileSize
     * @param Client $httpClient
     * @return int
     */
    private function chunkUpload(array $storeInfo, $fileResource, int $fileSize, Client $httpClient)
    {
        $isLargeFile = $fileSize > static::LargeFileSize;
        $uploadID = $this->initUploadPart($storeInfo, $isLargeFile, $httpClient);
        if ($uploadID == "") {
            return -1;
        }

        $num = floor($fileSize /  static::MinChunkSize);
        $lastNum = $num - 1;
        $checkSum = [];
        for ($i = 0; $i < $lastNum; $i++) {
            $data = stream_get_contents($fileResource,  static::MinChunkSize, $i *  static::MinChunkSize);
            $partNumber = $i;
            if ($isLargeFile) {
                $partNumber = $partNumber + 1;
            }
            $crc32 = $this->uploadPart($storeInfo, $uploadID, $partNumber, $data, $isLargeFile, $httpClient);
            if ($crc32 == "") {
                return -1;
            }
            $checkSum[] = $crc32;
        }
        $maxLength = $fileSize - $lastNum *  static::MinChunkSize;
        $data = stream_get_contents($fileResource, $maxLength, $lastNum *  static::MinChunkSize);
        if ($isLargeFile) {
            $lastNum = $lastNum + 1;
        }
        $crc32 = $this->uploadPart($storeInfo, $uploadID, $lastNum, $data, $isLargeFile, $httpClient);
        if ($crc32 == "") {
            return -1;
        }
        $checkSum[] = $crc32;
        return $this->uploadMergePart($storeInfo, $uploadID, $checkSum, $isLargeFile, $httpClient);
    }

    private function initUploadPart(array $storeInfo, bool $isLargeFile, Client $httpClient)
    {
        $headers = ['Authorization' => $storeInfo["Auth"]];
        if ($isLargeFile) {
            $headers[] = ['X-Storage-Mode' => 'gateway'];
        }
        $response = $httpClient->put( $storeInfo["StoreUri"] . '?uploads', ['headers' => $headers]);
        $initUploadResponse = json_decode((string)$response->getBody(), true);
        if (!isset($initUploadResponse["success"]) || $initUploadResponse["success"] != 0) {
            return "";
        }
        return $initUploadResponse['payload']['uploadID'];
    }

    private function uploadPart(array $storeInfo, string $uploadID, int $partNumber, $data, bool $isLargeFile, Client $client): string
    {
        $uri = sprintf("%s?partNumber=%d&uploadID=%s", $storeInfo["StoreUri"] , $partNumber, $uploadID);
        $crc32 = sprintf("%08x", crc32($data));
        $headers = ['Authorization' => ['Authorization' => $storeInfo["Auth"]], 'Content-CRC32' => $crc32];
        if ($isLargeFile) {
            $headers[] = ['X-Storage-Mode' => 'gateway'];
        }
        $response = $client->put($uri, ['headers' => $headers, 'body' => $data]);
        $uploadPartResponse = json_decode((string)$response->getBody(), true);
        if (!isset($uploadPartResponse["success"]) || $uploadPartResponse["success"] != 0) {
            return "";
        }
        return $crc32;
    }

    private function uploadMergePart(array $storeInfo, string $uploadID, array $checkSum, bool $isLargeFile, Client $client): int
    {
        $uri = sprintf("%s?uploadID=%s", $storeInfo["StoreUri"], $uploadID);
        $m = [];
        for ($i = 0; $i < count($checkSum); $i++) {
            $no = $i;
            if ($isLargeFile) {
                $no = $i + 1;
            }
            $m[] = sprintf("%d:%s", $no, $checkSum[$i]);
        }
        $body = implode(",", $m);
        $headers = ['Authorization' =>  $storeInfo["Auth"]];
        if ($isLargeFile) {
            $headers[] = ['X-Storage-Mode' => 'gateway'];
        }
        $response = $client->put($uri, ['headers' => $headers, 'body' => $body]);
        $uploadPartResponse = json_decode((string)$response->getBody(), true);
        if (!isset($uploadPartResponse["success"]) || $uploadPartResponse["success"] != 0) {
            return -1;
        }
        return 0;
    }

    private function directUpload(string $uploadHost, array $storeInfo, $content)
    {
        $crc32 = sprintf("%08x", crc32($content));
        $tosClient = new Client([
            'base_uri' => "https://" . $uploadHost,
            'timeout' => 5.0,
        ]);
        $response = $tosClient->request('PUT', $storeInfo["StoreUri"], ["body" => $content, "headers" => ['Authorization' => $storeInfo["Auth"], 'Content-CRC32' => $crc32]]);
        $uploadResponse = json_decode((string)$response->getBody(), true);
        if (!isset($uploadResponse["success"]) || $uploadResponse["success"] != 0) {
            return -2;
        }
        return 0;
    }

    public function uploadImages(array $params = [], array $filePaths = [])
    {
        if (!isset($params["ServiceId"])) {
            return "uploadImages: no ServiceId found";
        }
        $params["UploadNum"] = count($filePaths);

        $applyParams = array();
        $applyParams["Action"] = "ApplyImageUpload";
        $applyParams["Version"] = "2018-08-01";
        $applyParams["ServiceId"] = $params["ServiceId"];
        if (isset($params["SessionKey"])) {
            $applyParams["SessionKey"] = $params["SessionKey"];
        }
        $applyParams["UploadNum"] = $params["UploadNum"];
        if (isset($params["StoreKeys"]) && count($params["StoreKeys"]) != $params["UploadNum"]) {
            return "uploadImages: no StoreKeys found or StoreKeys size is unmatch";
        }
        $applyParams["StoreKeys"] = array();
        $queryStr = http_build_query($applyParams);
        if (isset($params["StoreKeys"]) && is_array($params["StoreKeys"])) {
            foreach ($params["StoreKeys"] as $key => $value) {
                $queryStr = $queryStr . "&StoreKeys=" . urlencode($value);
            }
        }

        $response = $this->applyUploadImage(['query' => $queryStr]);
        $applyResponse = json_decode($response, true);
        if (isset($applyResponse["ResponseMetadata"]["Error"])) {
            return sprintf("uploadImages: request id %s error %s", $applyResponse["ResponseMetadata"]["RequestId"], $applyResponse["ResponseMetadata"]["Error"]["Message"]);
        }

        $uploadAddr = $applyResponse['Result']['UploadAddress'];
        if (count($uploadAddr['UploadHosts']) == 0) {
            return "uploadImages: no upload host found";
        }
        $uploadHost = $uploadAddr['UploadHosts'][0];
        if (count($uploadAddr['StoreInfos']) != $params["UploadNum"]) {
            return "uploadImages: store infos num != upload num";
        }

        for ($i = 0; $i < count($filePaths); ++$i) {
            $respCode = $this->upload($uploadHost, $uploadAddr['StoreInfos'][$i], $filePaths[$i]);
            if ($respCode != 0) {
                return "upload " . $filePaths[$i] . " error";
            }
        }

        $commitParams = array();
        $commitParams["ServiceId"] = $params["ServiceId"];
        $commitBody = array();
        $commitBody["SessionKey"] = $uploadAddr['SessionKey'];
        if (isset($params["OptionInfos"])) {
            $commitBody["OptionInfos"] = $params["OptionInfos"];
        }
        if (isset($params["Functions"])) {
            $commitBody["Functions"] = $params["Functions"];
        }
        $commitReq = [
            "query" => $commitParams,
            "json" => $commitBody,
        ];

        $response = $this->commitUploadImage($commitReq);
        return (string)$response;
    }

    public function getUploadAuthToken($query)
    {
        $token = [
            "Version" => 'v1',
        ];

        $url = $this->getRequestUrl("ApplyImageUpload", $query);
        $m = parse_url($url);
        $token["ApplyUploadToken"] = $m["query"];

        $url = $this->getRequestUrl("CommitImageUpload", $query);
        $m = parse_url($url);
        $token["CommitUploadToken"] = $m["query"];

        return base64_encode(json_encode($token));
    }

    public function getUploadAuth(array $serviceIDList, int $expire = 3600, string $keyPtn = '')
    {
        $applyRes = [];
        $commitRes = [];
        if (sizeof($serviceIDList) == 0) {
            $applyRes[] = sprintf(ResourceServiceIdTRN, "*");
            $commitRes[] = sprintf(ResourceServiceIdTRN, "*");
        } else {
            foreach ($serviceIDList as $serviceID) {
                $applyRes[] = sprintf(ResourceServiceIdTRN, $serviceID);
                $commitRes[] = sprintf(ResourceServiceIdTRN, $serviceID);
            }
        }
        $applyRes[] = sprintf(ResourceStoreKeyTRN, $keyPtn);

        $policy = [
            'Statement' => [
                $this->newAllowStatement(['ImageX:ApplyImageUpload'], $applyRes),
                $this->newAllowStatement(['ImageX:CommitImageUpload'], $commitRes),
            ],
        ];

        return $this->signSts2($policy, $expire);
    }

    public function deleteImages(string $serviceID, array $uris = [])
    {
        $response = $this->request('DeleteImageUploadFiles', ['query' => ['ServiceId' => $serviceID], 'json' => ['StoreUris' => $uris]]);
        return (string)$response->getBody();
    }

    public function requestImageX(string $action, array $config = [])
    {
        $response = $this->request($action, $config);
        return (string)$response->getBody();
    }

    public function getImageOCR(array $params = [])
    {
        $params["Action"] = "GetImageOCR";
        $params["Version"] = "2018-08-01";
        $queryStr = http_build_query($params);
        $response = $this->request('GetImageOCR', ['query' => $queryStr]);
        $ocrResponse = json_decode((string)$response->getBody(), true);
        if (isset($ocrResponse["ResponseMetadata"]["Error"])) {
            return sprintf("getImageOCR: request id %s error %s", $ocrResponse["ResponseMetadata"]["RequestId"], $ocrResponse["ResponseMetadata"]["Error"]["Message"]);
        }
        return $ocrResponse["Result"];
    }

    public function getSegmentImage(array $params = [])
    {
        $params["Action"] = "GetSegmentImage";
        $params["Version"] = "2018-08-01";
        $queryStr = http_build_query($params);
        $response = $this->request('GetSegmentImage', ['query' => $queryStr, 'json' => $params]);
        $segmentResponse = json_decode((string)$response->getBody(), true);
        if (isset($segmentResponse["ResponseMetadata"]["Error"])) {
            return sprintf("getSegmentImage: request id %s error %s", $segmentResponse["ResponseMetadata"]["RequestId"], $segmentResponse["ResponseMetadata"]["Error"]["Message"]);
        }
        return $segmentResponse["Result"];
    }

}