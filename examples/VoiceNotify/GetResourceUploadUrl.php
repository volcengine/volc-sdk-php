<?php



use Volc\Service\Notify;

require('../../../vendor/autoload.php');

$client = Notify::getInstance();
$client->setAccessKey("***REMOVED***");
$client->setSecretKey("***REMOVED***");


$body = [
    'FileName'=>'测试的文件.mp3'
];

$response = $client->GetResourceUploadUrl(['json' => $body]);
echo $response;