<?php
require('../../vendor/autoload.php');

use Volc\Service\Vod\Models\Request\VodUpdateMediaInfoRequest;
use Volc\Service\Vod\Models\Response\VodUpdateMediaInfoResponse;
use Volc\Service\Vod\Vod;

$client = Vod::getInstance();
// call below method if you dont set ak and sk in ～/.vcloud/config
// $client->setAccessKey("");
// $client->setSecretKey("");

$vid = "vid";
$title = "title";
$desc = "desc";
$tags = "tag1,tag2";
$classificationId = 0;

echo "\n修改媒资信息\n";

$req = new VodUpdateMediaInfoRequest();
$req->setVid($vid);
$req->setTitleUnwrapped($title);
$req->setDescriptionUnwrapped($desc);
$req->setTagsUnwrapped($tags);
$req->setClassificationIdUnwrapped($classificationId);
$response = new VodUpdateMediaInfoResponse();
try {
    $response = $client->updateMediaInfo($req);
} catch (Throwable $e) {
    print($e);
}

if ($response->getResponseMetadata()->getError() != null) {
    print_r($response->getResponseMetadata()->getError());
}

echo $response->serializeToJsonString();
