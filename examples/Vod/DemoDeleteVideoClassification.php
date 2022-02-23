<?php

use Volc\Service\Vod\Models\Business\VodDeleteVideoClassificationData;
use Volc\Service\Vod\Models\Request\VodDeleteVideoClassificationRequest;
use Volc\Service\Vod\Vod;

require('../../vendor/autoload.php');

$client = Vod::getInstance();
// call below method if you dont set ak and sk in ～/.vcloud/config
// $client->setAccessKey("");
// $client->setSecretKey("");

$space = "space";
$classificationId = 1;

$req = new VodDeleteVideoClassificationRequest();
$req->setSpaceName($space);
$req->setClassificationId($classificationId);
$response = new VodDeleteVideoClassificationData();
try {
    $response = $client->deleteVideoClassification($req);
} catch (Throwable $e) {
    print($e);
}

if ($response->getResponseMetadata()->getError() != null) {
    print_r($response->getResponseMetadata()->getError());
}

echo $response->serializeToJsonString();
