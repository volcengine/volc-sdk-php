// Code generated by protoc-gen-volcengine-sdk
// source: describeRelaySourceV2
// DO NOT EDIT!
<?php
require('../../vendor/autoload.php');

$client = Volc\Service\Live\Live::getInstance();
$client->setAccessKey('');
$client->setSecretKey('');

$request = new Volc\Service\Live\Models\Request\DescribeRelaySourceRequest();
$request->setVhost("");


$response = new Volc\Service\Live\Models\Response\DescribeRelaySourceResponse();
try {
    $response = $client->describeRelaySourceV2($request);
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
