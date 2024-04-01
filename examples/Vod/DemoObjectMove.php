<?php
require('../../vendor/autoload.php');

use Volc\Service\Vod\Upload\VodUpload;

$client = VodUpload::getInstance();
$client->setAccessKey('your ak');
$client->setSecretKey('your sk');

$request = new Volc\Service\Vod\Models\Request\VodSubmitMoveObjectTaskRequest();
$request->setSourceSpace("your SourceSpace");
$request->setSourceFileName("your SourceFileName");
$request->setTargetSpace("your TargetSpace");
$request->setTargetFileName("your TargetFileName");
$request->setSaveSourceObject(false);
$request->setForceOverwrite(false);

$response = new Volc\Service\Vod\Models\Response\VodQueryMoveObjectTaskInfoResponse();
try {
    $response = $client->moveObjectCrossSpace($request, 0);
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
