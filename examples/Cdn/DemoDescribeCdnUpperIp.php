<?php

use Volc\Service\Cdn;

require('../../vendor/autoload.php');

$client = Cdn::getInstance();

$ak = 'your ak';
$sk = 'your sk';
$client->setAccessKey($ak);
$client->setSecretKey($sk);

$body = [
    "Domain" => "www.yourdomain.com",
    "IpVersion" => "1.1.1.1,114.114.114.114" // Allow empty
];

$response = $client->describeCdnUpperIp(['json' => $body]);
var_dump($response);
