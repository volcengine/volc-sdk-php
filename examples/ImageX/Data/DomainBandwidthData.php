<?php
include_once(__DIR__ . '/../../../vendor/autoload.php');

use Volc\Service\ImageX;
use Volc\Service\ImageX\ImageXData;

$client = ImageX::getInstance();

// call below method if you dont set ak and sk in ～/.volc/config
$client->setAccessKey("ak");
$client->setSecretKey("sk");

ImageXData::AddDataModule($client);

$body = [
    'StartTime' => "2023-01-21T00:00:00+08:00",
    'EndTime' => "2023-01-28T00:00:00+08:00",
    'Interval' => "300",
];

$response = ImageXData::describeImageXDomainBandwidthData($client, $body);
print_r($response);
