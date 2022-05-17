<?php

use Volc\Service\Notify;

require('../../../vendor/autoload.php');
require('../../src/Service/Notify.php');

$client = Notify::getInstance();
$client->setAccessKey("***REMOVED***");
$client->setSecretKey("***REMOVED***");


$body = [
   'Type' => 0,
];

$response = $client->QueryResource($body);
echo $response;