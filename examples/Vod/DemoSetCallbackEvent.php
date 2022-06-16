<?php
require('../../vendor/autoload.php');

use Volc\Service\Vod\Models\Request\VodSetCallbackEventRequest;
use Volc\Service\Vod\Models\Response\VodSetCallbackEventResponse;
use Volc\Service\Vod\Vod;

$client = Vod::getInstance();
$client->setAccessKey('your ak');
$client->setSecretKey('your sk');

$request = new VodSetCallbackEventRequest();
$request->setSpaceName("your space name");
$request->setEvents("your event");
$request->setAuthEnabled("your auth enabled: 1 or 0");
$request->setPrivateKey("your private key");

$response = new VodSetCallbackEventResponse();
try {
    $response = $client->setCallbackEvent($request);
} catch (Exception $e) {
    echo $e, "\n";
} catch (Throwable $e) {
    echo $e, "\n";
}
if ($response->getResponseMetadata()->getError() != null) {
    print_r($response->getResponseMetadata()->getError());
}
echo $response->serializeToJsonString();
echo "\n";

