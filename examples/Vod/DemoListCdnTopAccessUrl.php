<?php

use Volc\Service\Vod\Models\Request\VodListCdnTopAccessUrlRequest;
use Volc\Service\Vod\Models\Response\VodListCdnTopAccessUrlResponse;
use Volc\Service\Vod\Vod;


$client = Vod::getInstance();
$client->setAccessKey("your ak");
$client->setSecretKey("your sk");

$req = new VodListCdnTopAccessUrlRequest();
$response = new VodListCdnTopAccessUrlResponse();
try {
    $req->setSpaceName("your space name");
    $req->setDomains("your domain");
    $req->setStartTimestamp(0);
    $req->setEndTimestamp(0);
    $req->setSortType("your sort type");
    $response = $client->listCdnTopAccessUrl($req);
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

