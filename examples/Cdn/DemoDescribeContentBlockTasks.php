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
    'TaskType' => 'block_url',
    'StartTime' => $now - 86400,
    'EndTime' => $now
];

$response = $client->describeContentBlockTasks($body);
var_dump($response);
