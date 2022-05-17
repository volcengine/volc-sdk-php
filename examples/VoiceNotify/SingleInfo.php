<?php


use Volc\Service\VoiceNotify;

require('../../../vendor/autoload.php');

$client = VoiceNotify::getInstance();
$client->setAccessKey("***REMOVED***");
$client->setSecretKey("***REMOVED***");



$response = $client->SingleInfo('9b39e17fb12444c78f20d6551469a6e1');
echo $response;