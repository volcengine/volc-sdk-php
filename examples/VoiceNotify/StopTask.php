<?php


use Volc\Service\Notify;

require('../../../vendor/autoload.php');

$client = Notify::getInstance();
$client->setAccessKey("***REMOVED***");
$client->setSecretKey("***REMOVED***");

$response = $client->StopTask("ecb1be9b71974916a529b936702783cb");
echo $response;