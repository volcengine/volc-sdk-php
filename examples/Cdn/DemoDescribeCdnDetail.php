<?php

use Volc\Service\Cdn;

require('../../vendor/autoload.php');

$client = Cdn::getInstance();

$ak = 'ak';
$sk = 'sk';
$client->setAccessKey($ak);
$client->setSecretKey($sk);

$now = time();
$body = [
    'StartTime' => $now - 3600,
    'EndTime' => $now,
    'Domain' => 'example.com',
    'Metric' => "bandwidth",
    'Interval' => '5min',
    'Protocol' => 'http',
    'IpVersion' => 'ipv4'
];

$response = $client->describeCdnDataDetail($body);
var_dump($response);
