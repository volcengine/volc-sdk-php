<?php
require('../../vendor/autoload.php');
use Volc\Service\ImageX;

$client = ImageX::getInstance();

// call below method if you dont set ak and sk in ～/.volc/config
$client->setAccessKey("xx");
$client->setSecretKey("xx");

$params = array();
$params["ServiceId"] = "xx";
$params["Class"] = "class";
$params["Refine"] = true;
$params["StoreUri"] = "xx";
$params["OutFormat"] = "out format";


$response = $client->getSegmentImage($params);
print_r($response);