<?php

use Volc\Service\Vms\NumberPool;

require('../../../vendor/autoload.php');
require('../../../src/Service/Vms/NumberPool.php');

$client = NumberPool::getInstance();
$client->setAccessKey("your ak");
$client->setSecretKey("your sk");

$body = [
    'NumberList' => 'xxx',
    'EnableCode' => '2',
];

$response = $client->EnableOrDisableNumber($body);
echo $response;