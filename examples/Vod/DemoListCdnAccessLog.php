<?php
require('../../vendor/autoload.php');

use Volc\Service\Vod\Models\Request\VodListCdnAccessLogRequest;
use Volc\Service\Vod\Models\Response\VodListCdnAccessLogResponse;
use Volc\Service\Vod\Vod;


$client = Vod::getInstance();
$client->setAccessKey("your ak");
$client->setSecretKey("your sk");

$req = new VodListCdnAccessLogRequest();
$response = new VodListCdnAccessLogResponse();
try {
    $req->setSpaceName("your space name");
    $req->setDomains("your domain");
    $req->setStartTimestamp(0);
    $req->setEndTimestamp(0);
    $response = $client->listCdnAccessLog($req);
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

