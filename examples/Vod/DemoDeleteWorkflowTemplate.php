// Code generated by protoc-gen-volcengine-sdk
// source: deleteWorkflowTemplate
// DO NOT EDIT!
<?php
require('../../vendor/autoload.php');

$client = Volc\Service\Vod\Vod::getInstance();
$client->setAccessKey('your ak');
$client->setSecretKey('your sk');

$request = new Volc\Service\Vod\Models\Request\VodDeleteWorkflowTemplateRequest();
$request->setTemplateId("your TemplateId");


$response = new Volc\Service\Vod\Models\Response\VodDeleteWorkflowTemplateResponse();
try {
    $response = $client->deleteWorkflowTemplate($request);
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
