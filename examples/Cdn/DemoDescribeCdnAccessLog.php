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
    'StartTime' => $now - 86400,
    'EndTime' => $now,
    'Domain' => 'my.com',
    'PageSize' => 100,
    'PageNum' => 1
];

$response = $client->describeCdnAccessLog($body);
var_dump($response);
