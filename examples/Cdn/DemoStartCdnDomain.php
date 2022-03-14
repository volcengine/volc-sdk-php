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
    'Domain' => 'sdk-online.cdn-test.bytedance.com'
];

$response = $client->startCdnDomain($body);
var_dump($response);
