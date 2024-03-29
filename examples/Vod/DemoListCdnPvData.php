// Code generated by protoc-gen-volcengine-sdk
// source: listCdnPvData
// DO NOT EDIT!
<?php
require('../../vendor/autoload.php');

$client = Volc\Service\Vod\Vod::getInstance();
$client->setAccessKey('your ak');
$client->setSecretKey('your sk');

$request = new Volc\Service\Vod\Models\Request\VodListCdnPvDataRequest();
$request->setDomains("your Domains");
$request->setInterval("your Interval");
$request->setStartTimestamp(0);
$request->setEndTimestamp(0);
$request->setDataType("your DataType");
$request->setNeedDetail(false);


$response = new Volc\Service\Vod\Models\Response\VodCdnStatisticsCommonResponse();
try {
    $response = $client->listCdnPvData($request);
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
