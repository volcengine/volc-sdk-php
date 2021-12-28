<?php

use Volc\Service\Live;

require('../../vendor/autoload.php');

$client = Live::getInstance();

$ak = 'your ak';
$sk = 'your sk';
$client->setAccessKey($ak);
$client->setSecretKey($sk);