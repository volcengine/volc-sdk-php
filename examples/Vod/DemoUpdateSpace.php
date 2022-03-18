<?php

use Volc\Service\Vod\Models\Request\VodUpdateSpaceRequest;
use Volc\Service\Vod\Models\Response\VodUpdateSpaceResponse;
use Volc\Service\Vod\Vod;


$client = Vod::getInstance();
$client->setAccessKey("your ak");
$client->setSecretKey("your sk");

$req = new VodUpdateSpaceRequest();
$req->setSpaceName("your space name");
$req->setDescription("your desc");
$response = new VodUpdateSpaceResponse();
try {
    $response = $client->UpdateSpace($req);
} catch (Exception $e) {
    echo $e, "\n";
} catch (Throwable $e) {
    echo $e, "\n";
}
if ($response->getResponseMetadata()->getError() != null) {
    print_r($response->getResponseMetadata()->getError());
}
