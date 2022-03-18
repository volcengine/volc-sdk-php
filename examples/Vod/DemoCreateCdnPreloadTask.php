<?php

use Volc\Service\Vod\Models\Request\VodCreateCdnPreloadTaskRequest;
use Volc\Service\Vod\Models\Response\VodCreateCdnPreloadTaskResponse;
use Volc\Service\Vod\Vod;


$client = Vod::getInstance();
$client->setAccessKey("your ak");
$client->setSecretKey("your sk");

$req = new VodCreateCdnPreloadTaskRequest();
$req->setSpaceName("your space name");
$req->setUrls("urls");
$response = new VodCreateCdnPreloadTaskResponse();
try {
$response = $client->createCdnPreloadTask($req);
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