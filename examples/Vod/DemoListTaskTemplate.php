// Code generated by protoc-gen-volcengine-sdk
// source: listTaskTemplate
// DO NOT EDIT!
<?php
require('../../vendor/autoload.php');

$client = Volc\Service\Vod\Vod::getInstance();
$client->setAccessKey('your ak');
$client->setSecretKey('your sk');

$request = new Volc\Service\Vod\Models\Request\VodListTaskTemplateRequest();
$request->setSpaceName("your SpaceName");
$request->setTemplateId("your TemplateId");
$request->setName("your Name");
$request->setTaskType("your TaskType");
$request->setType("your Type");
$request->setLimit(0);
$request->setOffset(0);
$request->setOrderByKey("your OrderByKey");
$request->setOrder("your Order");


$response = new Volc\Service\Vod\Models\Response\VodListTaskTemplateResponse();
try {
    $response = $client->listTaskTemplate($request);
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
