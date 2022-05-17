<?php



use Volc\Service\Notify;

require('../../../vendor/autoload.php');
require('../../src/Service/Notify.php');

$client = Notify::getInstance();
$client->setAccessKey("***REMOVED***");
$client->setSecretKey("***REMOVED***");


$body = [
    'FileName'=>'mytest.mp3'
];

$response = $client->GetResourceUploadUrl($body);
echo $response;