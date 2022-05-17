<?php

use Volc\Service\VoiceNotify;

require('../../../vendor/autoload.php');

$client = VoiceNotify::getInstance();
$client->setAccessKey("***REMOVED***");
$client->setSecretKey("***REMOVED***");


$body = [
    'List' => [
        'Phone'=>'your phone',
        'Resource' => '9b39e17fb12444c78f20d6551469a6f0',
        'NumberPoolNo'=>'NP162213338604093530',
        'NumberType'=>0,
        'TriggerTime'=>'2022-03-12 19:18:00',
        'Type'=>0,
        'SingleOpenId'=>'9b39e17fb12444c78f20d6551469a6e1',
    ]
];

$response = $client->SingleBatchAppend(['json' => $body]);
echo $response;