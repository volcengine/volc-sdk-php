<?php

use Volc\Service\Vms\NumberPool;

require('../../../vendor/autoload.php');
require('../../../src/Service/Vms/NumberPool.php');

$client = NumberPool::getInstance();
$client->setAccessKey("your ak");
$client->setSecretKey("your sk");

$body = [
    'Name' => 'siptest-chV1',
    'ServiceType' => '100',
    'SubServiceType' => '101',
    'NumberPoolNo' => 'todo'
];

$response = $client->UpdateNumberPool($body);
echo $response;