<?php


use Volc\Service\VoiceNotify;

require('../../../vendor/autoload.php');

$client = VoiceNotify::getInstance();
$client->setAccessKey("***REMOVED***");
$client->setSecretKey("***REMOVED***");


$body = [
    'State'=>0,
    'Type'=>0,
];

$response = $client->QueryResource(['json' => $body]);
echo $response;