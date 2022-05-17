<?php


use Volc\Service\VoiceNotify;

require('../../../vendor/autoload.php');

$client = VoiceNotify::getInstance();
$client->setAccessKey("***REMOVED***");
$client->setSecretKey("***REMOVED***");


$body = [
    'FileName'=>'测试的文件.mp3'
];

$response = $client->CommitResourceUpload(['json' => $body]);
echo $response;