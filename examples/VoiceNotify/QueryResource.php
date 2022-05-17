<?php

use Volc\Service\Notify;

require('../../../vendor/autoload.php');

$client = Notify::getInstance();
$client->setAccessKey("***REMOVED***");
$client->setSecretKey("***REMOVED***");


$body = [
    'State'=>0,
    'Type'=>0,
];

$response = $client->QueryResource(['json' => $body]);
echo $response;