<?php

use Volc\Service\Vms\DataCenter;

require('../../../vendor/autoload.php');
require('../../../src/Service/Vms/DataCenter.php');

$client = DataCenter::getInstance();
$client->setAccessKey("your ak");
$client->setSecretKey("your sk");

$body = [
    'CallIdList' => 'CallId1,CallId2,CallId3',
];

$response = $client->QueryAudioRecordToTextFileUrl($body);
echo $response;