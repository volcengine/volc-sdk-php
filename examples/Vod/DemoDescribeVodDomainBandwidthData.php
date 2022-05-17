<?php

use Volc\Service\Vod\Models\Request\VodDescribeVodDomainBandwidthDataRequest;
use Volc\Service\Vod\Models\Response\VodDescribeVodDomainBandwidthDataRequest;
use Volc\Service\Vod\Vod;


$client = Vod::getInstance();
$client->setAccessKey("your ak");
$client->setSecretKey("your sk");

$req = new VodDescribeVodDomainBandwidthDataRequest();
$req->setDomainList("your domain1, your domain2");
$req->setStartTime("startTime");
$req->setEndTime("endTime");
$req->setAggregation(300);
$req->setBandwidthType("bandwidthType");

$response = new VodDescribeVodDomainBandwidthDataRequest();
try {
    $response = $client->describeVodDomainBandwidthData($req);
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
