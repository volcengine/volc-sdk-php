// Code generated by protoc-gen-volcengine-sdk
// source: submitDirectEditTaskAsync
// DO NOT EDIT!
<?php
require('../../vendor/autoload.php');

$client = Volc\Service\Vod\Vod::getInstance();
$client->setAccessKey('your ak');
$client->setSecretKey('your sk');

$request = new Volc\Service\Vod\Models\Request\VodSubmitDirectEditTaskAsyncRequest();
$request->setUploader("your Uploader");
$request->setApplication("your Application");
$request->setEditParam();
$request->setPriority(0);
$request->setCallbackUri("your CallbackUri");
$request->setCallbackArgs("your CallbackArgs");


$response = new Volc\Service\Vod\Models\Response\VodSubmitDirectEditTaskAsyncResponse();
try {
    $response = $client->submitDirectEditTaskAsync($request);
} catch (Exception $e) {
    echo $e, "\n";
} catch (Throwable $e) {
    echo $e, "\n";
}
if ($response != null && $response->getResponseMetadata() != null && $response->getResponseMetadata()->getError() != null) {
    echo $response->getResponseMetadata()->getError()->serializeToJsonString(), "\n";
} else {
    echo $response->serializeToJsonString(), "\n";
}
