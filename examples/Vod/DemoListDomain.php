<?php

use Volc\Service\Vod\Models\Request\VodListDomainRequest;
use Volc\Service\Vod\Models\Response\VodListDomainResponse;
use Volc\Service\Vod\Vod;


$client = Vod::getInstance();
$client->setAccessKey("your ak");
$client->setSecretKey("your sk");

$req = new VodListDomainRequest();
$response = new VodListDomainResponse();
try {
    $response = $client->listDomain($req);
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

