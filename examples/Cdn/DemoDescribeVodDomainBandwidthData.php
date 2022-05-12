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
    'DomainLiat' => 'www.yourdomain1.com,www.yourdomain2.com',
    'StartTime' => 'start time',
    'EndTime' => 'end time',
    'Aggregation' => 3600,
    'BandwidthType' => ''
];

$response = $client->listCdnDomains($body);
var_dump($response);
