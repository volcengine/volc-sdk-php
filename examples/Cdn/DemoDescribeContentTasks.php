<?php

use Volc\Service\Cdn;

require('../../vendor/autoload.php');

$client = Cdn::getInstance();

$ak = 'your ak';
$sk = 'your sk';
$client->setAccessKey($ak);
$client->setSecretKey($sk);

$response = $client->describeContentTasks(['json' => [
    "PageNum" => 1,
    'PageSize' => 10,
    'TaskType' => 'refresh_file'
]]);

var_dump($response);
