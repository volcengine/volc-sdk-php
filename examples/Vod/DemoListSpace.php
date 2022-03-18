<?php

use Volc\Service\Vod\Models\Request\VodListSpaceRequest;
use Volc\Service\Vod\Models\Response\VodListSpaceResponse;
use Volc\Service\Vod\Vod;


$client = Vod::getInstance();
$client->setAccessKey("your ak");
$client->setSecretKey("your sk");

$req = new VodListSpaceRequest();
$response = new VodListSpaceResponse();
try {
    $response = $client->listSpace($req);
} catch (Exception $e) {
    echo $e, "\n";
} catch (Throwable $e) {
    echo $e, "\n";
}
if ($response->getResponseMetadata()->getError() != null) {
    print_r($response->getResponseMetadata()->getError());
}
