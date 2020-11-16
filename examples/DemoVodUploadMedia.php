<?php
require('../vendor/autoload.php');

use Volc\Models\Vod\Request\VodUploadMediaRequest;
use Volc\Models\Vod\Response\VodCommitUploadInfoResponse;
use Volc\Service\Vod\Upload\Functions;
use Volc\Service\Vod\Upload\VodUpload;

$client = VodUpload::getInstance();
$client->setAccessKey('your ak');
$client->setSecretKey('your sk');

$space = 'your space';
$filePath = "file path";

Functions::addGetMetaFunc();
Functions::addSnapshotTimeFunc(2.1);
$functions = Functions::getFunctionsString();

$request = new VodUploadMediaRequest();
$request->setSpaceName($space);
$request->setFilePath($filePath);
$request->setFunctions($functions);
$request->setCallbackArgs("my callback");

$response = new VodCommitUploadInfoResponse();
try {
    $response = $client->uploadMedia($request);
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

echo $response->getResult()->getData()->getVid(), "\n";
echo $response->getResult()->getData()->getPosterUri(), "\n";
echo $response->getResult()->getData()->getSourceInfo()->getWidth(), "\n";
echo $response->getResult()->getData()->getSourceInfo()->getHeight(), "\n";


