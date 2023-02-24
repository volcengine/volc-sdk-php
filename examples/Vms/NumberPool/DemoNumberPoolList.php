<?php

use Volc\Service\Vms\NumberPool;

require('../../../vendor/autoload.php');
require('../../../src/Service/Vms/NumberPool.php');

$client = NumberPool::getInstance();
$client->setAccessKey("your ak");
$client->setSecretKey("your sk");

$body = [
    'ServiceType' => '100',
    'SubServiceType' => '101',
    'Limit' => '5',
    'Offset' => '0',
];

$response = $client->NumberPoolList($body);
echo $response;