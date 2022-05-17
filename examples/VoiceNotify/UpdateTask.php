<?php
use Volc\Service\Notify;

require('../../../vendor/autoload.php');

$client = Notify::getInstance();
$client->setAccessKey("***REMOVED***");
$client->setSecretKey("***REMOVED***");


$body = [
    'TaskOpenId' => '106d2984fbf0480480cbc8b98d609592',
    'Concurrency'=> 3,
    'StartTime' => '2022-03-02 00:00:00',
    'EndTime' => '2022-03-13 01:30:00',
    'Recall' => 1,
];

$response = $client->UpdateTask(['json' => $body]);
echo $response;