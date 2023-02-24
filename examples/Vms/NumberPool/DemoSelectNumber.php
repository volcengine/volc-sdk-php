<?php

use Volc\Service\Vms\NumberPool;

require('../../../vendor/autoload.php');
require('../../../src/Service/Vms/NumberPool.php');

$client = NumberPool::getInstance();
$client->setAccessKey("your ak");
$client->setSecretKey("your sk");

$body = [
    'NumberPoolNo' => 'xxx',
];

$response = $client->SelectNumber($body);
echo $response;