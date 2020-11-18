<?php

use Volc\Models\Vod\Request\VodUpdateMediaInfoRequest;
use Volc\Service\Vod\Vod;

require('../vendor/autoload.php');

$client = Vod::getInstance();
// call below method if you dont set ak and sk in ～/.vcloud/config
// $client->setAccessKey("");
// $client->setSecretKey("");

$vid = "vid";
$title = "title";
$tags = "tag1,tag2";

echo "\n修改发布状态\n";

$req = new VodUpdateMediaInfoRequest();
$req->setVid($vid);
$req->setTitleUnwrapped($title);
$req->setTagsUnwrapped($tags);
try {
    $response = $client->updateMediaInfo($req);
} catch (Throwable $e) {
    print($e);
}

echo $response->serializeToJsonString();
