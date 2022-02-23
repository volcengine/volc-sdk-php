<?php

use Volc\Service\Vod\Models\Business\VodUpdateVideoClassificationData;
use Volc\Service\Vod\Models\Request\VodUpdateVideoClassificationRequest;
use Volc\Service\Vod\Vod;

require('../../vendor/autoload.php');

$client = Vod::getInstance();
// call below method if you dont set ak and sk in ～/.vcloud/config
// $client->setAccessKey("");
// $client->setSecretKey("");

$space = "space";
$classificationId = 1;
$classification = "classification";

$req = new VodUpdateVideoClassificationRequest();
$req->setSpaceName($space);
$req->setClassificationId($classificationId);
$req->setClassification($classification);
$response = new VodUpdateVideoClassificationData();
try {
    $response = $client->updateVideoClassification($req);
} catch (Throwable $e) {
    print($e);
}

if ($response->getResponseMetadata()->getError() != null) {
    print_r($response->getResponseMetadata()->getError());
}

echo $response->serializeToJsonString();
