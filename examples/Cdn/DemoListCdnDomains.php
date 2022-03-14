<?php

use Volc\Service\Cdn;

require('../../vendor/autoload.php');

$client = Cdn::getInstance();

$ak = 'ak';
$sk = 'sk';
$client->setAccessKey($ak);
$client->setSecretKey($sk);

$now = time();
$body = [
    'Domain' => 'www.yourdomain.com',
    'ServiceType' => 'web',
    'ResourceTag' => 'key:val',
    'PageNum' => 3,
    'PageSize' => 50
];

$response = $client->listCdnDomains($body);
var_dump($response);
