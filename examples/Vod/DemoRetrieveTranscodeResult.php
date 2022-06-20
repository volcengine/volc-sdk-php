<?php
require('../../vendor/autoload.php');

use Volc\Service\Vod\Models\Request\VodRetrieveTranscodeResultRequest;
use Volc\Service\Vod\Models\Response\VodRetrieveTranscodeResultResponse;
use Volc\Service\Vod\Vod;

$client = Vod::getInstance();
$client->setAccessKey('your ak');
$client->setSecretKey('your sk');

$request = new VodRetrieveTranscodeResultRequest();
$request->setVid("your vid");
$request->setResultType("your result_type");

$response = new VodRetrieveTranscodeResultResponse();
try {
    $response = $client->retrieveTranscodeResult($request);
} catch (Exception $e) {
    echo $e, "\n";
} catch (Throwable $e) {
    echo $e, "\n";
}
if ($response->getResponseMetadata()->getError() != null) {
    echo $response->getResponseMetadata()->getError()->serializeToJsonString();
    return;
}
echo $response->getResult()->getRunId(), "\n";
