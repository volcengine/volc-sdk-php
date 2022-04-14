<?php

use Volc\Service\Vod\Models\Request\VodListSnapshotsRequest;
use Volc\Service\Vod\Models\Response\VodListSnapshotsResponse;
use Volc\Service\Vod\Vod;

require('../../vendor/autoload.php');

$client = Vod::getInstance();
// call below method if you dont set ak and sk in ～/.vcloud/config
// $client->setAccessKey("");
// $client->setSecretKey("");

$vid = "your vid";

$req = new VodListSnapshotsRequest();
$req->setVid($vid);
$response = new VodListSnapshotsResponse();
try {
    $response = $client->listSnapshots($req);
} catch (Throwable $e) {
    print($e);
}

if ($response->getResponseMetadata()->getError() != null) {
    print_r($response->getResponseMetadata()->getError());
}

echo $response->serializeToJsonString();
