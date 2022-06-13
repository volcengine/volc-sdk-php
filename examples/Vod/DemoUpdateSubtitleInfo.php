<?php
require('../../vendor/autoload.php');

use Volc\Service\Vod\Models\Request\VodUpdateSubtitleInfoRequest;
use Volc\Service\Vod\Models\Response\VodUpdateSubtitleInfoResponse;
use Volc\Service\Vod\Vod;

$client = Vod::getInstance();
// call below method if you dont set ak and sk in ～/.vcloud/config
// $client->setAccessKey("");
// $client->setSecretKey("");

$vid = "vid";
$fileId = "fileId";
$format = "format";
$language = "language";
$title = "title";
$tag = "tag";

echo "\n更新字幕信息\n";

$req = new VodUpdateSubtitleInfoRequest();
$req->setVid($vid);
$req->setFileId($fileId);
$req->setFormat($format);
$req->setLanguage($language);
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