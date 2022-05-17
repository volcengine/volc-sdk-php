<?php



use Volc\Service\VoiceNotify;

require('../../../vendor/autoload.php');

$client = VoiceNotify::getInstance();
$client->setAccessKey("***REMOVED***");
$client->setSecretKey("***REMOVED***");


$body = [
    'Name'=>'公网url，使用前需要申请正向代理',
    'TtsTemplateContent'=>'测试',
    'Remark'=>"测试",
    'TtsOption'=>'{\"loop\":0,\"loop_interval\":0,\"speed\":10,\"volume\":10,\"pitch\":10,\"voice_type\":\"BV001_streaming\",\"lang\":\"ch\",\"voice\":\"other\"}'
];

$response = $client->CreateTtsResource(['json' => $body]);
echo $response;
