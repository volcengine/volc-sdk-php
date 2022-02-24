<?php

use Volc\Service\Cdn;

require('../../vendor/autoload.php');

$client = Cdn::getInstance();

$ak = 'your ak';
$sk = 'your sk';
$client->setAccessKey($ak);
$client->setSecretKey($sk);

$response = $client->describeCdnUpperIp(['json' => ['Domain' => 'example.com']]);
var_dump($response);
