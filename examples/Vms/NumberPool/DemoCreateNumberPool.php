<?php

use Volc\Service\Vms\NumberPool;

require('../../../vendor/autoload.php');
require('../../../src/Service/Vms/NumberPool.php');

$client = NumberPool::getInstance();
$client->setAccessKey("your ak");
$client->setSecretKey("your sk");

$body = [
    'Name' => 'siptest-ch',
    'ServiceType' => '100',
    'SubServiceType' => '101',
];

$response = $client->CreateNumberPool($body);
echo $response;