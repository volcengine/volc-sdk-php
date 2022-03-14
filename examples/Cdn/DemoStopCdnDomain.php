<?php

use Volc\Service\Cdn;

require('../../vendor/autoload.php');

$client = Cdn::getInstance();

$ak = 'your ak';
$sk = 'your sk';
$client->setAccessKey($ak);
$client->setSecretKey($sk);

$now = time();
$body = [
    'Domain' => 'sdk-online.cdn-test.bytedance.com'
];

$response = $client->stopCdnDomain($body);
var_dump($response);
