// Code generated by protoc-gen-volcengine-sdk
// source: describeVodSpaceSubtitleStatisData
// DO NOT EDIT!
<?php
require('../../vendor/autoload.php');

$client = Volc\Service\Vod\Vod::getInstance();
$client->setAccessKey('your ak');
$client->setSecretKey('your sk');

$request = new Volc\Service\Vod\Models\Request\DescribeVodSpaceSubtitleStatisDataRequest();
$request->setSpaceList("your SpaceList");
$request->setStartTime("your StartTime");
$request->setEndTime("your EndTime");
$request->setSubtitleType("your SubtitleType");
$request->setTaskStageList("your TaskStageList");
$request->setAggregation(0);
$request->setDetailFieldList("your DetailFieldList");


$response = new Volc\Service\Vod\Models\Response\DescribeVodSpaceSubtitleStatisDataResponse();
try {
    $response = $client->describeVodSpaceSubtitleStatisData($request);
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
