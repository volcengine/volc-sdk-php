<?php
require('../../vendor/autoload.php');

use Volc\Service\Vod\Models\Request\VodUpdateSubtitleStatusRequest;
use Volc\Service\Vod\Models\Response\VodUpdateSubtitleStatusResponse;
use Volc\Service\Vod\Vod;

$client = Vod::getInstance();
// call below method if you dont set ak and sk in ～/.vcloud/config
// $client->setAccessKey("");
// $client->setSecretKey("");

$vid = "vid";
$fileIds = "fileId1,fileId2";
$formats = "format1,format2";
$languages = "language1,language2";
$status = "status";

echo "\n更新字幕状态\n";

$req = new VodUpdateSubtitleStatusRequest();
$req->setVid($vid);
$req->setFileIds($fileIds);
$req->setFormats($formats);
$req->setLanguages($languages);
$req->setStatus($status);

$response = new VodUpdateSubtitleStatusResponse();
try {
    $response = $client->updateSubtitleStatus($req);
} catch (Throwable $e) {
    print($e);
}

if ($response->getResponseMetadata()->getError() != null) {
    print_r($response->getResponseMetadata()->getError());
}

echo $response->serializeToJsonString();