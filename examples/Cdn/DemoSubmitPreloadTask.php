<?php

use Volc\Service\Cdn;

require('../../vendor/autoload.php');

$client = Cdn::getInstance();

$ak = 'ak';
$sk = 'sk';
$client->setAccessKey($ak);
$client->setSecretKey($sk);

$body = [
    'Urls' => 'http://yourdomain.com/1.txt\nhttp://yourdomain.com/2.jpg'
];

$response = $client->submitPreloadTask(['json' => $body]);
var_dump($response);
