<?php

use Volc\Models\Vod\Request\VodDeleteMediaRequest;
use Volc\Models\Vod\Response\VodDeleteMediaResponse;
use Volc\Service\Vod\Vod;

require('../vendor/autoload.php');

$client = Vod::getInstance();
// call below method if you dont set ak and sk in ～/.vcloud/config
// $client->setAccessKey("");
// $client->setSecretKey("");

$vids = "vid1,vid2";
$callBackArgs = "CallBackArgs";

echo "\n视频批量删除\n";

$req = new VodDeleteMediaRequest();
$req->setVids($vids);
$req->setCallbackArgs($callBackArgs);

$response = new VodDeleteMediaResponse();
try {
    $response = $client->deleteMedia($req);
} catch (Throwable $e) {
    print($e);
}

if ($response->getResponseMetadata()->getError() != null) {
    print_r($response->getResponseMetadata()->getError());
}

echo $response->serializeToJsonString();