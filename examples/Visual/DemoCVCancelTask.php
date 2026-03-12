<?php
require('../../vendor/autoload.php');

use Volc\Service\Visual;

$client = Visual::getInstance();
// call below method if you dont set ak and sk in ～/.volc/config
$client->setAccessKey('');
$client->setSecretKey('==');

echo "\nDemo CVSync2AsyncGetResult\n";

// 特别注意：body完整入参请参考不同接口的请求body部分
$body = [
    "req_key" => "xxx",
    "task_id" => "123456",
];

$response = $client->CVCancelTask(['json' => $body]);
echo $response;

