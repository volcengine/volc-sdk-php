<?php
require('../vendor/autoload.php');

use Volc\Models\Vod\Request\VodUpdateMediaPublishStatusRequest;
use Volc\Service\Vod\Vod;

$client = Vod::getInstance();
// call below method if you dont set ak and sk in ～/.vcloud/config
// $client->setAccessKey("");
// $client->setSecretKey("");

$vid = "vid";
$status = "Published";

echo "\n修改发布状态\n";

$req = new VodUpdateMediaPublishStatusRequest();
$req->setVid($vid);
$req->setStatus($status);
try {
    $response = $client->updateMediaPublishStatus($req);
} catch (Throwable $e) {
    print($e);
}
echo $response->serializeToJsonString();