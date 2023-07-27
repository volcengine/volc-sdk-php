// Code generated by protoc-gen-volcengine-sdk
// source: updateMediaStorageClass
// DO NOT EDIT!
<?php
require('../../vendor/autoload.php');

$client = Volc\Service\Vod\Vod::getInstance();
$client->setAccessKey('your ak');
$client->setSecretKey('your sk');

$request = new Volc\Service\Vod\Models\Request\VodUpdateMediaStorageClassRequest();
$request->setVids("your Vids");
$request->setStorageClass("your StorageClass");
$request->setCallbackArgs("your CallbackArgs");
$request->setFileIds("your FileIds");


$response = new Volc\Service\Vod\Models\Response\VodUpdateMediaStorageClassResponse();
try {
    $response = $client->updateMediaStorageClass($request);
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
