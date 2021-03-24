<?php

use Volc\Models\Vod\Request\VodDeleteTranscodesRequest;
use Volc\Models\Vod\Response\VodDeleteTranscodesResponse;
use Volc\Service\Vod\Vod;

require('../vendor/autoload.php');

$client = Vod::getInstance();
// call below method if you dont set ak and sk in ～/.vcloud/config
// $client->setAccessKey("");
// $client->setSecretKey("");

$vids = "vid";
$fileIds = "fileId1,fileId2";
$callBackArgs = "CallBackArgs";

echo "\n指定转码视频批量删除\n";

$req = new VodDeleteTranscodesRequest();
$req->setVid($vids);
$req->setFileIds($fileIds);
$req->setCallbackArgs($callBackArgs);

$response = new VodDeleteTranscodesResponse();
try {
    $response = $client->deleteTranscodes($req);
} catch (Throwable $e) {
    print($e);
}

if ($response->getResponseMetadata()->getError() != null) {
    print_r($response->getResponseMetadata()->getError());
}

echo $response->serializeToJsonString();