<?php

require('../../../vendor/autoload.php');
use Volc\Service\VoiceNotify;

$client = VoiceNotify::getInstance();

$client->setAccessKey("***REMOVED***");
$client->setSecretKey("***REMOVED***");

$response = $client->DeleteResourceByKey("9b39e17fb12444c78f20d6551469a6f0");
echo $response;
