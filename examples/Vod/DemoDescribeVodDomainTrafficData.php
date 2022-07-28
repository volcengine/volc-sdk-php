<?php
require('../../vendor/autoload.php');

use Volc\Service\Vod\Models\Request\VodDescribeVodDomainTrafficDataRequest;
use Volc\Service\Vod\Models\Response\VodDescribeVodDomainTrafficDataResponse;
use Volc\Service\Vod\Vod;


$client = Vod::getInstance();
$client->setAccessKey("your ak");
$client->setSecretKey("your sk");

$req = new VodDescribeVodDomainTrafficDataRequest();
$req->setDomainList("your domain1, your domain2");
$req->setStartTime("startTime");
$req->setEndTime("endTime");
$req->setAggregation(300);
$req->setTrafficType("trafficType");

$response = new VodDescribeVodDomainTrafficDataResponse();
try {
    $response = $client->describeVodDomainTrafficData($req);
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

