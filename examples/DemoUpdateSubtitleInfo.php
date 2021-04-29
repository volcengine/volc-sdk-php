<?php

use Volc\Models\Vod\Request\VodUpdateSubtitleInfoRequest;
use Volc\Models\Vod\Response\VodUpdateSubtitleInfoResponse;
use Volc\Service\Vod\Vod;

require('../vendor/autoload.php');

$client = Vod::getInstance();
// call below method if you dont set ak and sk in ～/.vcloud/config
// $client->setAccessKey("");
// $client->setSecretKey("");

$vid = "vid";
$fileIds = "fileId1,fileId2";
$formats = "format1,format2";
$languages = "l1,l2";
$status = "status";
$title = "title";
$tag = "tag";

echo "\n更新字幕信息\n";

$req = new VodUpdateSubtitleInfoRequest();
$req->setVid($vid);
$req->setFileId($fileIds);
$req->setFormat($formats);
$req->setLanguage($languages);
$req->setTitleUnwrapped($title);
$req->setTagUnwrapped($tag);

$response = new VodUpdateSubtitleInfoResponse();
try {
    $response = $client->updateSubtitleInfo($req);
} catch (Throwable $e) {
    print($e);
}

if ($response->getResponseMetadata()->getError() != null) {
    print_r($response->getResponseMetadata()->getError());
}

echo $response->serializeToJsonString();