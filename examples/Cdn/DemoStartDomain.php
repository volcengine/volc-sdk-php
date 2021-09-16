<?php

use Volc\Service\Cdn\Cdn;

require('../../vendor/autoload.php');

$client = Cdn::getInstance();

$ak = 'your ak';
$sk = 'your sk';
$client->setAccessKey($ak);
$client->setSecretKey($sk);

$now = time();
$body = [
    'DomainName' => 'www.yourdomain.com'
];

$response = $client->startCdnDomain(['json' => $body]);
var_dump($response);
