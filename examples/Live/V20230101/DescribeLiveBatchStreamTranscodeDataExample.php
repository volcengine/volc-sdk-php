<?php
include_once(__DIR__ . '/../../../vendor/autoload.php');

use Volc\Service\Live\V20230101\Live;

$client = Live::getInstance();

// call below method if you dont set ak and sk in ~/.volc/config
$client->setAccessKey("ak");
$client->setSecretKey("sk");

$body = [];

$response = $client->describeLiveBatchStreamTranscodeData($body);
print_r($response);
