<?php
require('../vendor/autoload.php');

use Volc\Models\Vod\Business\VodUrlUploadURLSet;
use Volc\Models\Vod\Request\VodUrlUploadRequest;
use Volc\Models\Vod\Response\VodUrlUploadResponse;
use Volc\Service\Vod\Vod;


$client = Vod::getInstance();
$client->setAccessKey('your ak');
$client->setSecretKey('your sk');

$spaceName = "your space";


$urlSet = new VodUrlUploadURLSet();
$urlSet->setSourceUrl("url");

$request = new VodUrlUploadRequest();
$request->setSpaceName($spaceName);
$request->setURLSets([$urlSet]);

$response = new VodUrlUploadResponse();
try {
    $response = $client->uploadMediaByUrl($request);
} catch (Exception $e) {
    echo $e, "\n";
} catch (Throwable $e) {
    echo $e, "\n";
}
if ($response->getResponseMetadata()->getError() != null) {
    print_r($response->getResponseMetadata()->getError());
}
echo $response->serializeToJsonString();
echo "\n";
echo $response->getResult()->getData()[0]->getSourceUrl();
echo "\n";
echo $response->getResult()->getData()[0]->getJobId();