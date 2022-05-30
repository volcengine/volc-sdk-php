<?php
require('../../vendor/autoload.php');

use Volc\Service\Vod\Models\Business\VodCreateVideoClassificationData;
use Volc\Service\Vod\Models\Request\VodCreateVideoClassificationRequest;
use Volc\Service\Vod\Vod;

$client = Vod::getInstance();
// call below method if you dont set ak and sk in ～/.vcloud/config
// $client->setAccessKey("");
// $client->setSecretKey("");

$space = "space";
$level = 1;
$parentId = 0;
$classification = "classification";

$req = new VodCreateVideoClassificationRequest();
$req->setSpaceName($space);
$req->setLevel($level);
$req->setParentId($parentId);
$req->setClassification($classification);
$response = new VodCreateVideoClassificationData();
try {
    $response = $client->createVideoClassification($req);
} catch (Throwable $e) {
    print($e);
}

if ($response->getResponseMetadata()->getError() != null) {
    print_r($response->getResponseMetadata()->getError());
}

echo $response->serializeToJsonString();
