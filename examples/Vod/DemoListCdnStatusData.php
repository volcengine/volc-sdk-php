<?php
require('../../vendor/autoload.php');

use Volc\Service\Vod\Models\Request\VodListCdnStatusDataRequest;
use Volc\Service\Vod\Models\Response\VodCdnStatisticsCommonResponse;
use Volc\Service\Vod\Vod;


$client = Vod::getInstance();
$client->setAccessKey("your ak");
$client->setSecretKey("your sk");

$req = new VodListCdnStatusDataRequest();
$response = new VodCdnStatisticsCommonResponse();
try {
    $req->setDomains("your domain");
    $req->setStartTimestamp(0);
    $req->setEndTimestamp(0);
    $req->setDataType("your data type");
    $req->setInterval("your interval");
    $req->setMetric("your metric");
    $response = $client->listCdnStatusData($req);
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

