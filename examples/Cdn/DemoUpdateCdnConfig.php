<?php

use Volc\Service\Cdn;

require('../../vendor/autoload.php');

$client = Cdn::getInstance();

$ak = 'your ak';
$sk = 'your sk';
$client->setAccessKey($ak);
$client->setSecretKey($sk);

$now = time();
$body = [
    'Domain' => 'sdk-online.cdn-test.example.com',
    'Origin' => [
        [
            'OriginAction' => [
                'OriginLines' => [
                    [
                        'OriginType' => 'primary',
                        'InstanceType' => 'ip',
                        'Address' => '1.1.1.1',
                        'HttpPort' => '80',
                        'HttpsPort' => '443',
                        'Weight' => '100'
                    ]
                ]
            ]
        ]
    ],
    'OriginProtocol' => 'HTTP'
];

$response = $client->updateCdnConfig($body);
var_dump($response);
