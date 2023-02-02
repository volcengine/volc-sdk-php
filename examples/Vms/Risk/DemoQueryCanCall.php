<?php

use Volc\Service\Vms\Risk;

require('../../../vendor/autoload.php');
require('../../../src/Service/Vms/Risk.php');

$client = Risk::getInstance();
$client->setAccessKey("your ak");
$client->setSecretKey("your sk");

$body = [
    'CustomerNumberList' => 'Number1,Number2',
    'BusinessLineId' => '2000000001',
    'CallType' => '1',
];

$response = $client->QueryCanCall($body);
echo $response;