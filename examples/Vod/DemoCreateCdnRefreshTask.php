<?php

use Volc\Service\Vod\Models\Request\VodCreateCdnRefreshTaskRequest;
use Volc\Service\Vod\Models\Response\VodCreateCdnRefreshTaskResponse;
use Volc\Service\Vod\Vod;


$client = Vod::getInstance();
$client->setAccessKey("your ak");
$client->setSecretKey("your sk");

$req = new VodCreateCdnRefreshTaskRequest();
$req->setSpaceName("your space name");
$req->setType("type");
$req->setUrls("urls");
$response = new VodCreateCdnRefreshTaskResponse();
try {
$response = $client->createCdnRefreshTask($req);
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