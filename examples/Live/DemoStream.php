<?php

include 'DemoBase.php';
global $client;

$body = [
    'Domain' => 'domain1',
    'App' => 'app',
    'Stream' => 'stream',
    'EndTime' => '2021-03-23 14:49:58',
];

$response = $client->forbidStream(['json' => $body]);
echo $response;
echo '<br>';

$body = [
    'Domain' => 'domain1',
    'App' => 'app',
    'Stream' => 'stream',
];

$response = $client->resumeStream(['json' => $body]);
echo $response;
echo '<br>';
