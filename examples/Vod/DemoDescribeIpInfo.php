<?php
require('../../vendor/autoload.php');

use Volc\Service\Vod\Models\Request\VodDescribeIPInfoRequest;
use Volc\Service\Vod\Models\Response\VodDescribeIPInfoResponse;
use Volc\Service\Vod\Vod;


$client = Vod::getInstance();
$client->setAccessKey("your ak");
$client->setSecretKey("your sk");

$req = new VodDescribeIPInfoRequest();
$response = new VodDescribeIPInfoResponse();
try {
    $req->setIps("your ips");
    $response = $client->describeIPInfo($req);
} catch (Exception $e) {
    echo $e, "\n";
} catch (Throwable $e) {
    echo $e, "\n";
}
if ($response->getResponseMetadata()->getError() != null) {
    print_r($response->getResponseMetadata()->getError());
} else {
    print_r($response->serializeToJsonString());
}

