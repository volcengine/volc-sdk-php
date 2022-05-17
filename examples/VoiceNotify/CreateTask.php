<?php

use Volc\Service\VoiceNotify;

require('../../../vendor/autoload.php');

$client = VoiceNotify::getInstance();
$client->setAccessKey("***REMOVED***");
$client->setSecretKey("***REMOVED***");

$body = [
    'Name' => '你好',
    'Resource' => '9b39e17fb12444c78f20d6551469a6f0',
    'Type' => 0,
    'NumberPoolNo' => 'NP162213338604093530',
    'Concurrency' => 2,
    'PhoneList' => [
        [
            'Phone' => 'your phone',
        ]
    ],
    'StartTime' => '2022-03-01 00:00:00',
    'EndTime' => '2022-03-01 00:00:00',
    'SelectNumberRule' => 5,
];

$response = $client->CreateTask(['json' => $body]);
echo $response;

