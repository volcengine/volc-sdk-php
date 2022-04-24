<?php

use Volc\Service\Cdn;

require('../../vendor/autoload.php');

$client = Cdn::getInstance();

$ak = 'your ak';
$sk = 'your sk';
$client->setAccessKey($ak);
$client->setSecretKey($sk);

$body = ['Domain' => 'example.com'];
$response = $client->describeCdnRegionAndIsp($body);
var_dump($response);
