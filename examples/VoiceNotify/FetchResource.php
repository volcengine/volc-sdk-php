<?php


use Volc\Service\VoiceNotify;

require('../../../vendor/autoload.php');

$client = VoiceNotify::getInstance();
$client->setAccessKey("***REMOVED***");
$client->setSecretKey("***REMOVED***");


$body = [
    'url'=>'公网url，使用前需要申请正向代理',
    'Name'=>'测试',
];

$response = $client->FetchResource(['json' => $body]);
echo $response;