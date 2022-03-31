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
    'Metric' => 'status_5xx',
    'Item' => 'domain',
];

$response = $client->describeEdgeTopStatusCode($body);
var_dump($response);
