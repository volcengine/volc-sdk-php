<?php


namespace Volc\Service\Vod\Upload;


use Exception;
use GuzzleHttp\Client;
use Throwable;
use Volc\Models\Vod\Business\VodStoreInfo;
use Volc\Models\Vod\Request\VodApplyUploadInfoRequest;
use Volc\Models\Vod\Request\VodCommitUploadInfoRequest;
use Volc\Models\Vod\Request\VodUploadMediaRequest;
use Volc\Models\Vod\Response\VodCommitUploadInfoResponse;
use Volc\Service\Vod\Vod;

class VodUpload extends Vod
{
    public function uploadMedia(VodUploadMediaRequest $vodUploadMediaRequest): VodCommitUploadInfoResponse
    {
        $applyRequest = new VodApplyUploadInfoRequest();
        $applyRequest->setSpaceName($vodUploadMediaRequest->getSpaceName());
        $resp = $this->upload($applyRequest, $vodUploadMediaRequest->getFilePath());
        if ($resp[0] != 0) {
            return $resp[1];
        }
        $request = new VodCommitUploadInfoRequest();
        $request->setSpaceName($vodUploadMediaRequest->getSpaceName());
        $request->setSessionKey($resp[2]);
        $request->setCallbackArgs($vodUploadMediaRequest->getCallbackArgs());
        $request->setFunctions($vodUploadMediaRequest->getFunctions());
        try {
            return $this->commitUploadInfo($request);
        } catch (Throwable $e) {
            throw e;
        }
    }

    public function upload(VodApplyUploadInfoRequest $applyRequest, string $filePath)
    {
        if (!file_exists($filePath)) {
            return array(-1, "file not exists", "", "");
        }
        try {
            $response = $this->applyUploadInfo($applyRequest);
        } catch (Throwable $e) {
            return array(-1, $e->getMessage(), "", "");
        }
        if ($response->getResponseMetadata()->getError() != null) {
            print_r($response->getResponseMetadata()->getError());
        }

        $uploadAddress = $response->getResult()->getData()->getUploadAddress();

        $uploadHost = $uploadAddress->getUploadHosts()[0];
        $oid = $uploadAddress->getStoreInfos()[0]->getStoreUri();
        $session = $uploadAddress->getSessionKey();

        $respCode = $this->uploadFile($uploadHost, $uploadAddress->getStoreInfos()[0], $filePath);
        if ($respCode != 0) {
            return array(-1, "upload " . $filePath . " error", "", "");
        }

        return array(0, "", $session, $oid);
    }

    public function uploadFile(string $uploadHost, VodStoreInfo $storeInfo, string $filePath)
    {
        if (!file_exists($filePath)) {
            return -1;
        }
        $content = file_get_contents($filePath);
        $crc32 = dechex(crc32($content));

        $body = fopen($filePath, "r");
        $tosClient = new Client([
            'base_uri' => "http://" . $uploadHost,
            'timeout' => 5.0,
        ]);

        $response = $tosClient->request('PUT', $storeInfo->getStoreUri(), ["body" => $body, "headers" => ['Authorization' => $storeInfo->getAuth(), 'Content-CRC32' => $crc32]]);
        $uploadResponse = json_decode((string)$response->getBody(), true);
        if (!isset($uploadResponse["success"]) || $uploadResponse["success"] != 0) {
            return -2;
        }
        return 0;
    }

}