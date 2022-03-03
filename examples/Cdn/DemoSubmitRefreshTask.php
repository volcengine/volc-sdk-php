<?php

use Volc\Service\Cdn;

require('../../vendor/autoload.php');

$client = Cdn::getInstance();

$ak = 'your ak';
$sk = 'your sk';
$client->setAccessKey($ak);
$client->setSecretKey($sk);

$body = [
    'Type' => 'file',
    'Urls' => 'http://yourdomain.com/1.txt\nhttp://yourdomain.com/2.jpg'
];

$response = $client->submitRefreshTask($body);
var_dump($response);
