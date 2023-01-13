<?php
use Volc\Service\SecretNumber;

require('../../vendor/autoload.php');
require('../../src/Service/SecretNumber.php');

$client = SecretNumber::getInstance();
$client->setAccessKey("your ak");
$client->setSecretKey("your sk");

$body = [
    'NumberPoolNo' => 'NP166375725010908111',
    'PhoneNoA' => '13700000005',
    'UserData' => 'this is my user data',
    'CityCode' => '010',
    'ExpireTime' => '1675996797',
    'YbEnableDuration' => 600,
    'NumberPoolNoY' => 'NP166265127202826653',
];

$response = $client->BindAXYB($body);
echo $response;