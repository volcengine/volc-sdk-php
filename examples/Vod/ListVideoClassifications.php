<?php

use Volc\Service\Vod\Models\Business\VodListVideoClassificationDatas;
use Volc\Service\Vod\Models\Request\VodListVideoClassificationRequests;
use Volc\Service\Vod\Vod;

require('../../vendor/autoload.php');

$client = Vod::getInstance();
// call below method if you dont set ak and sk in ～/.vcloud/config
// $client->setAccessKey("");
// $client->setSecretKey("");

$space = "space";
$classificationId = 1;

$req = new VodListVideoClassificationRequests();
$req->setSpaceName($space);
$req->setClassificationId($classificationId);
$response = new VodListVideoClassificationDatas();
try {
    $response = $client->listVideoClassifications($req);
} catch (Throwable $e) {
    print($e);
}

if ($response->getResponseMetadata()->getError() != null) {
    print_r($response->getResponseMetadata()->getError());
}

echo $response->serializeToJsonString();
