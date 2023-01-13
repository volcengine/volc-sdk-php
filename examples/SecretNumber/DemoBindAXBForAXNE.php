<?php
use Volc\Service\SecretNumber;

require('../../vendor/autoload.php');
require('../../src/Service/SecretNumber.php');

$client = SecretNumber::getInstance();
$client->setAccessKey("your ak");
$client->setSecretKey("your sk");

$body = [
    'NumberPoolNo' => 'NP167091951102821491',
    'ParentSubId' => 'S16729859759534216e440',
    'EnableDuration' => 360,
    'PhoneNoB' => '18900000001',
];

$response = $client->BindAXBForAXNE($body);
echo $response;