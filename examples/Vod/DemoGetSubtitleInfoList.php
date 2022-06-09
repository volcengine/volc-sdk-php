<?php
require('../../vendor/autoload.php');

use Volc\Service\Vod\Models\Request\VodGetSubtitleInfoListRequest;
use Volc\Service\Vod\Models\Response\VodGetSubtitleInfoListResponse;
use Volc\Service\Vod\Vod;

$client = Vod::getInstance();
// call below method if you dont set ak and sk in ～/.vcloud/config
// $client->setAccessKey("");
// $client->setSecretKey("");

$vid = "vid";
$fileIds = "fileId1,fileId2";
$formats = "format1,format2";
$languages = "l1,l2";
$languageIds = "lId1,lId2";
$subtitleIds = "s1,s2";
$status = "status1,status2";
$title = "title";
$tags = "tag";
$ssl = "ssl";
$offset = "offset";
$pageSize = "pageSize";

echo "\n获取字幕信息\n";

$req = new VodGetSubtitleInfoListRequest();
$req->setVid($vid);
$req->setFileIds($fileIds);
$req->setFormats($formats);
$req->setLanguages($languages);
$req->setLanguageIds($languageIds);
$req->setSubtitleIds($subtitleIds);
$req->setStatus($status);
$req->setTitle($title);
$req->setTag($tags);
$req->setSsl($ssl);
$req->setOffset($offset);
$req->setPageSize($pageSize);

$response = new VodGetSubtitleInfoListResponse();
try {
    $response = $client->getSubtitleInfoList($req);
} catch (Throwable $e) {
    print($e);
}

if ($response->getResponseMetadata()->getError() != null) {
    print_r($response->getResponseMetadata()->getError());
}

echo $response->serializeToJsonString();