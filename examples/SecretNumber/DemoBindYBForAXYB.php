<?php
use Volc\Service\SecretNumber;

require('../../vendor/autoload.php');
require('../../src/Service/SecretNumber.php');

$client = SecretNumber::getInstance();
$client->setAccessKey("your ak");
$client->setSecretKey("your sk");

$body = [
    'NumberPoolNo' => 'S16722126795817211a93e',
    'ParentSubId' => '13700000005',
    'PhoneNoB' => '13500000001',
    'EnableDuration' => 600,
];

$response = $client->BindYBForAXYB($body);
echo $response;