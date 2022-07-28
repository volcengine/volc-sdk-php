<?php
require('../../vendor/autoload.php');

use Volc\Service\Vod\Models\Request\VodDescribeVodSpaceStorageDataRequest;
use Volc\Service\Vod\Models\Response\VodDescribeVodSpaceStorageDataResponse;
use Volc\Service\Vod\Vod;


$client = Vod::getInstance();
$client->setAccessKey("your ak");
$client->setSecretKey("your sk");

$req = new VodDescribeVodSpaceStorageDataRequest();
$req->setSpaceList("your space1, your space2");
$req->setStartTime("startTime");
$req->setEndTime("endTime");
$req->setAggregation(86400);
$req->setType("Type");

$response = new VodDescribeVodSpaceStorageDataResponse();
try {
    $response = $client->describeVodSpaceStorageData($req);
} catch (Exception $e) {
    echo $e, "\n";
} catch (Throwable $e) {
    echo $e, "\n";
}
if ($response->getResponseMetadata()->getError() != null) {
    print_r($response->getResponseMetadata()->getError());
} else {
    echo $response->getResult()->serializeToString();
}
