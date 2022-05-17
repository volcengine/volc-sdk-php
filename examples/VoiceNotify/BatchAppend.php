<?php

use Volc\Service\Notify;

require('../../../vendor/autoload.php');

$client = Notify::getInstance();
$client->setAccessKey("***REMOVED***");
$client->setSecretKey("***REMOVED***");

$body = [
    'TaskOpenId' => '106d2984fbf0480480cbc8b98d609592',
    'PhoneList' => [
        [
            'Phone' => 'your phone',
        ]
    ],
];

$response = $client->BatchAppend(['json' => $body]);
echo $response;

