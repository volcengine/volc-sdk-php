<?php
require('../../vendor/autoload.php');

use Volc\Service\Vod\Vod;
use Volc\Service\Vod\Upload\UploadPolicy;

$client = Vod::getInstance();
// call below method if you dont set ak and sk in ～/.vcloud/config
// $client->setAccessKey($ak);
// $client->setSecretKey($sk);

$expire = 60*60; // 请求的签名有效期

echo "\nSTS2鉴权签名\n";
// 使用 $spaces 来限制限制允许上传的空间
//$spaces = [''];
// 使用 $keyPtn 来限制上传的FileName路径
//     如: "test/*" 表示上传的文件必须包含 "test/" 前缀
//$keyPtn = '';
// 使用 $uploadPolicy来设置上传策略
//$uploadPolicy = new UploadPolicy();
//$uploadPolicy->ContentTypeBlackList = ['content-type1','content-type2'];
//$uploadPolicy->ContentTypeWhiteList = ['content-type1','content-type2'];
//$uploadPolicy->FileSizeUpLimit = 'file size';
//$uploadPolicy->FileSizeBottomLimit = 'file size';
//$response = $client->getUploadVideoAuthWithExpiredTime($expire, $spaces, $keyPtn, $uploadPolicy);
$response = $client->getUploadVideoAuthWithExpiredTime($expire);
echo json_encode($response);

echo "\nSTS2鉴权签名，过期时间默认1小时\n";
$vid = "";
$response = $client->getUploadVideoAuth();
echo json_encode($response);