<?php
require('../../vendor/autoload.php');

use Volc\Service\Vod\Models\Request\VodAddCallbackSubscriptionRequest;
use Volc\Service\Vod\Models\Response\VodAddCallbackSubscriptionResponse;
use Volc\Service\Vod\Vod;

$client = Vod::getInstance();
$client->setAccessKey('your ak');
$client->setSecretKey('your sk');

$request = new VodAddCallbackSubscriptionRequest();
$request->setSpaceName("your space name");
$request->setUrl("your callback subscription url");

$response = new VodAddCallbackSubscriptionResponse();
try {
    $response = $client->addCallbackSubscription($request);
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

