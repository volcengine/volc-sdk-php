<?php

use Volc\Models\Vod\Request\VodGetMediaInfosRequest;
use Volc\Models\Vod\Response\VodGetMediaInfosResponse;
use Volc\Service\Vod\Vod;

require('../vendor/autoload.php');

$client = Vod::getInstance();
// call below method if you dont set ak and sk in ～/.vcloud/config
// $client->setAccessKey("");
// $client->setSecretKey("");

$vids = "vid1,vid2";

echo "\n获取媒资信息\n";

$req = new VodGetMediaInfosRequest();
$req->setVids($vids);

$response = new VodGetMediaInfosResponse();
try {
    $response = $client->getMediaInfos($req);
} catch (Throwable $e) {
    print($e);
}

if ($response->getResponseMetadata()->getError() != null) {
    print_r($response->getResponseMetadata()->getError());
}

echo $response->serializeToJsonString();