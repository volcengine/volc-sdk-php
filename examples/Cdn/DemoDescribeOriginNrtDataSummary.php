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
    'Metric' => 'pv',
    'Domain' => 'my.com',
    'Interval' => '5min',
    'Aggregate' => 'aggregate'
];

$response = $client->describeOriginNrtDataSummary($body);
var_dump($response);
