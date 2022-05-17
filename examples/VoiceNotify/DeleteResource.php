<?php
use Volc\Service\Notify;

require('../../../vendor/autoload.php');

$client = Notify::getInstance();
$client->setAccessKey("***REMOVED***");
$client->setSecretKey("***REMOVED***");

$response = $client->DeleteResourceByKey("9b39e17fb12444c78f20d6551469a6f0");
echo $response;
