<?php

use Volc\Models\Vod\Request\VodGetMediaInfosRequest;
use Volc\Service\Vod\Vod;

require('../vendor/autoload.php');

$client = Vod::getInstance();
// call below method if you dont set ak and sk in ～/.vcloud/config
// $client->setAccessKey("");
// $client->setSecretKey("");

$vids = "vid1,vid2";

echo "\n修改发布状态\n";

$req = new VodGetMediaInfosRequest();
$req->setVids($vids);

try {
    $response = $client->getMediaInfos($req);
} catch (Throwable $e) {
    print($e);
}

echo $response->serializeToJsonString();