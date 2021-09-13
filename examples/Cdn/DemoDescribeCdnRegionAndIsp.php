<?php

use Volc\Service\Cdn\Cdn;

require('../../vendor/autoload.php');

$client = Cdn::getInstance();

$ak = 'your ak';
$sk = 'your sk';
$client->setAccessKey($ak);
$client->setSecretKey($sk);

$body = [
    'Isps' => [['Code' => 'CT', 'Name' => '中国电信'], ['Code' => 'CM', 'Name' => '中国移动']],
    'Regions' => [['Code' => 'BJ', 'Name' => '北京'], ['Code' => 'AH', 'Name' => '安徽']]
];

$response = $client->describeCdnRegionAndIsp(['json' => $body]);
var_dump($response);
