<?php

use Volc\Service\Vms\DataCenter;

require('../../../vendor/autoload.php');
require('../../../src/Service/Vms/DataCenter.php');

$client = DataCenter::getInstance();
$client->setAccessKey("your ak");
$client->setSecretKey("your sk");

$body = [
    'CallId' => 'CallId123',
];

$response = $client->QueryAudioRecordFileUrl($body);
echo $response;