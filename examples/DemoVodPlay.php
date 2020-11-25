<?php
require('../vendor/autoload.php');

use Volc\Models\Vod\Request\VodGetOriginalPlayInfoRequest;
use Volc\Models\Vod\Response\VodGetOriginalPlayInfoResponse;
use Volc\Models\Vod\Request\VodGetPlayInfoRequest;
use Volc\Models\Vod\Response\VodGetPlayInfoResponse;
use Volc\Service\Vod\Vod;


$client = Vod::getInstance();
// $client->setAccessKey("");
// $client->setSecretKey("");

$vid = "v0c2c369007abu04ru8riko30uo9n73g";
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


echo "\n获取源片播放地址\n";
$req2 = new VodGetOriginalPlayInfoRequest();
$req2->setVid($vid);
$req2->setSsl('1');
$response2 = new VodGetOriginalPlayInfoResponse();
try {
    $response2 = $client->getOriginalPlayInfo($req2);
} catch (Exception $e) {
    echo $e, "\n";
}
if ($response2->getResponseMetadata()->getError() != null ){
    print_r($response2->getResponseMetadata()->getError());
}
echo $response2->getResult()->getMainPlayUrl();

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