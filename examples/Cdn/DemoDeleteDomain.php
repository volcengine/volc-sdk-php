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
    'DomainName' => 'www.yourdomain.com'
];

$response = $client->deleteCdnDomain(['json' => $body]);
var_dump($response);
