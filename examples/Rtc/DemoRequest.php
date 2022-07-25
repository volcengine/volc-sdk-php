<?php

use Volc\Service\Rtc;

require('../../vendor/autoload.php');

$client = Rtc::getInstance();

$ak = 'Your_AK';
$sk = 'Your_SK';
$client->setAccessKey($ak);
$client->setSecretKey($sk);

// 参数规范参考: https://guzzle-cn.readthedocs.io/zh_CN/latest/request-options.html#query
// ListApps - POST 请求
$body = [
    'Reverse' => 1,
    'Offset' => '0',
    'Limit' => '10',
];
$response = $client->listApps(['json' => $body]);
echo "listApps result:\n";
echo $response;
echo "\n";

// ListRoomInformation - GET 请求
$body = [
    'AppId' => 'Your_AppId',
    'StartTime' => '2022-04-22T12:00:00+08:00',
    'EndTime' => '2022-05-22T12:59:00+08:00'
];

$response = $client->listRoomInformation(['query' => $body]);
echo "listRooms result:\n";
echo $response;
echo "\n";