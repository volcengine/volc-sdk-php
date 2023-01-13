<?php
use Volc\Service\SecretNumber;

require('../../vendor/autoload.php');
require('../../src/Service/SecretNumber.php');

$client = SecretNumber::getInstance();
$client->setAccessKey("your ak");
$client->setSecretKey("your sk");

$body = [
    'NumberPoolNo' => 'NP167091934402820309',
    'SubId' => 'S16729852979534c6e4719',
];

$response = $client->UnbindAXYB($body);
echo $response;