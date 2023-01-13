<?php

use Volc\Service\Notify;

require('../../vendor/autoload.php');
require('../../src/Service/Notify.php');

$client = Notify::getInstance();
$client->setAccessKey("");
$client->setSecretKey("");


$response = $client->OpenUpdateResource("asdasd","test.123");
echo $response;