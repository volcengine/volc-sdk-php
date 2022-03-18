<?php

use Volc\Service\Vod\Models\Request\VodUpdateSpaceUploadConfigRequest;
use Volc\Service\Vod\Models\Response\VodUpdateSpaceUploadConfigResponse;
use Volc\Service\Vod\Vod;


$client = Vod::getInstance();
$client->setAccessKey("your ak");
$client->setSecretKey("your sk");

$req = new VodUpdateSpaceUploadConfigRequest();
$req->setSpaceName("your space name");
$req->setConfigKey("your config key");
$req->setConfigValue("your config value");
$response = new VodUpdateSpaceUploadConfigResponse();
try {
    $response = $client->UpdateSpaceUploadConfig($req);
} catch (Exception $e) {
    echo $e, "\n";
} catch (Throwable $e) {
    echo $e, "\n";
}
if ($response->getResponseMetadata()->getError() != null) {
    print_r($response->getResponseMetadata()->getError());
}
