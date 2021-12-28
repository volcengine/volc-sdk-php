<?php
require('../vendor/autoload.php');

use GuzzleHttp\Psr7\Utils;
use Volc\Service\Iam;

$client = Iam::getInstance();
// call below method if you dont set ak and sk in ～/.volc/config

$client->setAccessKey("***REMOVED***");
$client->setSaecretKey("***REMOVED***");

//echo "\nDemo 1\n";
//$response = $client->listUsers([]);
//echo $response;

$sign = new \Volc\Base\SignatureV4();
$credentials = [];
$credentials['region'] = 'cn-north-1';
$credentials['service'] = 'iam';
$credentials['ak'] = '***REMOVED***';
$credentials['sk'] = '***REMOVED***';

$req = new \Volc\Base\Model\SignParam();
$req->setDate(new DateTime("20211110T201554Z"));
$req->setHeaderList(["Accept"=>["application/json"], "Host"=>["open.volcengineapi.com"]]);
$req->setHost("open.volcengineapi.com");
$req->setPath("/");
$req->setIsSignUrl(false);
$req->setMethod("GET");
$req->setQueryList(["Action"=>["ListUsers"], "Version"=>["2018-01-01"], "Limit"=>["10"], "Offset"=>["0"], 'adkjfs_aaa' =>['adfsd']]);
$s = Utils::streamFor("");
$req->setPyloadHash(Utils::hash($s,"sha256"));

$resp = $sign->signOnly($req, $credentials);
echo $resp;


echo "\nDemo 2\n";
$response = $client->listUsers(['query' => ['Limit' => 10, 'Offset' => 0, 'adkjfs_aaa' =>'adfsd']]);
echo $response;

echo "\nDemo 3\n";
//$response = $client->listUsers(['v4_credentials'=>['ak'=>"$ak", 'sk'=>$sk], 'query'=>['Limit'=>10, 'Offset'=>0]]);
//echo $response;
