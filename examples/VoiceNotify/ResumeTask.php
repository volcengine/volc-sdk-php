<?php

use Volc\Service\VoiceNotify;

require('../../../vendor/autoload.php');

$client = VoiceNotify::getInstance();
$client->setAccessKey("***REMOVED***");
$client->setSecretKey("***REMOVED***");

$response = $client->ResumeTask("ecb1be9b71974916a529b936702783cb");
echo $response;