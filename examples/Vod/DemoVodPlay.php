<?php
require('../../vendor/autoload.php');

use Volc\Service\Vod\Models\Request\VodGetPlayInfoRequest;
use Volc\Service\Vod\Models\Response\VodGetPlayInfoResponse;
use Volc\Service\Vod\Vod;


$client = Vod::getInstance();
// $client->setAccessKey("");
// $client->setSecretKey("");

$vid = "v02c70ba0000bv6524d4mkgqqb51jegg";
$expire = 60; // 请求的签名有效期


echo "\nstaging 获取播放地址\n";
$req = new VodGetPlayInfoRequest();
$req->setVid($vid);
$req->setSsl('1');
$response = new VodGetPlayInfoResponse();
try {
    $response = $client->getPlayInfo($req);
} catch (Exception $e) {
    echo $e, "\n";
} catch (Throwable $e) {
    echo $e, "\n";
}
if ($response->getResponseMetadata()->getError() != null ){
    print_r($response->getResponseMetadata()->getError());
}
echo $response->getResult()->getPlayInfoList()[0]->getMainPlayUrl();

echo "\n获取PlayAuthToken\n";
$req3 = new VodGetPlayInfoRequest();
$req3->setVid($vid);
try {
    $response3 = $client->getPlayAuthToken($req3);
} catch (Exception $e) {
    echo $e, "\n";
} catch (Throwable $e) {
    echo $e, "\n";
}
echo $response3;