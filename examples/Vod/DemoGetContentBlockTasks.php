// Code generated by protoc-gen-volcengine-sdk
// source: getContentBlockTasks
// DO NOT EDIT!
<?php
require('../../vendor/autoload.php');

$client = Volc\Service\Vod\Vod::getInstance();
$client->setAccessKey('your ak');
$client->setSecretKey('your sk');

$request = new Volc\Service\Vod\Models\Request\VodGetContentBlockTasksRequest();
$request->setUrl("your Url");
$request->setDomain("your Domain");
$request->setTaskID("your TaskID");
$request->setTaskType("your TaskType");
$request->setStatus("your Status");
$request->setStartTime(0);
$request->setEndTime(0);
$request->setPageNum(0);
$request->setPageSize(0);


$response = new Volc\Service\Vod\Models\Response\VodGetContentBlockTasksResponse();
try {
    $response = $client->getContentBlockTasks($request);
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