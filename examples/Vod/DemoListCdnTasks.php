<?php
require('../../vendor/autoload.php');

use Volc\Service\Vod\Models\Request\VodListCdnTasksRequest;
use Volc\Service\Vod\Models\Response\VodListCdnTasksResponse;
use Volc\Service\Vod\Vod;

$client = Vod::getInstance();
$client->setAccessKey("your ak");
$client->setSecretKey("your sk");

$req = new VodListCdnTasksRequest();
$response = new VodListCdnTasksResponse();
try {
    $req->setSpaceName("your space name");
    $req->setTaskId("your task id");
    $req->setDomainName("your domain");
    $req->setTaskType("your task type");
    $req->setStatus("your status");
    $req->setStartTimestamp(0);
    $req->setEndTimestamp(0);
    $req->setPageNum(1);
    $req->setPageSize(10);
    $response = $client->listCdnTasks($req);
} catch (Exception $e) {
    echo $e, "\n";
} catch (Throwable $e) {
    echo $e, "\n";
}
if ($response->getResponseMetadata()->getError() != null) {
    print_r($response->getResponseMetadata()->getError());
} else {
    echo $response->getResult()->serializeToString();
}

