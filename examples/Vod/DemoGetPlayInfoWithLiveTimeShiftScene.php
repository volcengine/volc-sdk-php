<?php

use Volc\Service\Vod\Models\Request\VodGetPlayInfoWithLiveTimeShiftSceneRequest;
use Volc\Service\Vod\Models\Response\VodGetPlayInfoWithLiveTimeShiftSceneResponse;
use Volc\Service\Vod\Vod;


$client = Vod::getInstance();
$client->setAccessKey("your ak");
$client->setSecretKey("your sk");

$req = new VodGetPlayInfoWithLiveTimeShiftSceneRequest();
$req->setSpaceName("your space name");
$req->setExpireTimestamp("your time stamp");
$req->setNeedComposeBucketName("1");
$req->setSsl("1");
$req->setStoreUris("your store uris");
$response = new VodGetPlayInfoWithLiveTimeShiftSceneResponse();
try {
    $response = $client->GetPlayInfoWithLiveTimeShiftScene($req);
} catch (Exception $e) {
    echo $e, "\n";
} catch (Throwable $e) {
    echo $e, "\n";
}
if ($response->getResponseMetadata()->getError() != null) {
    print_r($response->getResponseMetadata()->getError());
}
