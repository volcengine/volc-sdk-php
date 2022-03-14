<?php

use Volc\Service\Cdn;

require('../../vendor/autoload.php');

$client = Cdn::getInstance();

$ak = 'ak';
$sk = 'sk';
$client->setAccessKey($ak);
$client->setSecretKey($sk);


$response = $client->listResourceTags();
var_dump($response);
