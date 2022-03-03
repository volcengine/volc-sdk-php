<?php

use Volc\Service\Cdn;

require('../../vendor/autoload.php');

$client = Cdn::getInstance();

$ak = 'ak';
$sk = 'sk';
$client->setAccessKey($ak);
$client->setSecretKey($sk);

$body = [
    'Resources' => ['www.example1.com', 'www.example2.com'],
    'ResourceTags' => [
        ['Key' => 'userKey', 'Value' => 'userValue']
    ]
];

$response = $client->updateResourceTags($body);
var_dump($response);
