<?php
require('../../vendor/autoload.php');

use Volc\Service\Vod\Models\Request\VodGetAllPlayInfoRequest;
use Volc\Service\Vod\Models\Response\VodGetAllPlayInfoResponse;
use Volc\Service\Vod\Vod;


$client = Vod::getInstance();
// $client->setAccessKey("");
// $client->setSecretKey("");

$req = new VodGetAllPlayInfoRequest();
$req->setVids("your Vids");
$req->setFormats("your Formats");
$req->setCodecs("your Codecs");
$req->setDefinitions("your Definitions");
$req->setFileTypes("your FileTypes");
$req->setLogoTypes("your LogoTypes");
$req->setNeedEncryptStream("your NeedEncryptStream");
$req->setSsl("your Ssl");
$req->setNeedThumbs("your NeedThumbs");
$req->setNeedBarrageMask("your NeedBarrageMask");
$req->setCdnType("your CdnType");
$req->setUnionInfo("your UnionInfo");
$req->setPlayScene("your PlayScene");
$req->setDrmExpireTimestamp("your DrmExpireTimestamp");
$req->setHDRType("your HDRType");
$req->setKeyFrameAlignmentVersion("your KeyFrameAlignmentVersion");
$req->setUserAction("your UserAction");
$req->setQuality("your Quality");
$response = new VodGetAllPlayInfoResponse();
try {
    $response = $client->getAllPlayInfo($req);
} catch (Exception $e) {
    echo $e, "\n";
} catch (Throwable $e) {
    echo $e, "\n";
}
if ($response->getResponseMetadata()->getError() != null) {
    print_r($response->getResponseMetadata()->getError());
}
echo $response->getResult()->serializeToJsonString();
