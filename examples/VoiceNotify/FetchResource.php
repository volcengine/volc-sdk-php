<?php


use Volc\Service\Notify;

require('../../../vendor/autoload.php');
require('../../src/Service/Notify.php');

$client = Notify::getInstance();
$client->setAccessKey("***REMOVED***");
$client->setSecretKey("***REMOVED***");


$body = [
    'Url'=>'http://upload.kuaidihelp.com/ivr_voice_new/2021_12/3355798202112171127415813.wav',
    'Name'=>'测试快宝',
];

$response = $client->FetchResource($body);
echo $response;