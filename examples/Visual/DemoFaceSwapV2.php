<?php
require('../../../vendor/autoload.php');
use Volc\Service\Visual;

$client = Visual::getInstance();
// call below method if you dont set ak and sk in ～/.volc/config

$client->setAccessKey($ak);
$client->setSecretKey($sk);

echo "\nDemo FaceSwapV2\n";

$body = [
    "req_key" => "face_swap3_3", #算法名称 注意3.0版本req_key传faceswap | | 3.3版本req_key传face_swap3_3
    #输入换脸和模板图片链接数组，换脸图在前（最多三张），模板图在后（最多一张）
    "image_urls"=> [
        "https://xxx",
        "https://xxx",
        "https://xxx"
    ],
     "face_type"=>"l2r", #获取人脸位置的方式，支持以下三种模式：l2r:根据人脸中心点从左往右的序号获取，t2b:根据人脸中心点从上往下的序号获取，area:根据人脸面积从大到小的序号获取（默认）
    #素材图、模板图的人脸位置信息
    "merge_infos"=>[[

              "location"=> 1,
            "template_location"=>1
        ],
        [
            "location"=> 1,
            "template_location"=>2
        ]

    ],
    #水印信息
     "logo_info"=>[
         "add_logo"=> false, #是否添加水印。True为添加，False不添加。默认不添加
         "position"=> 0, #水印的位置，取值如下：0-右下角,1-左下角,2-左上角,3-右上角,默认0
         "language"=> 0, #水印的语言，取值如下：0-中文（AI生成）,1-英文（Generated by AI）,默认0
         "opacity"=> 0.3 #水印的不透明度，取值范围0-1，1表示完全不透明，默认0.3
     ],
     "do_risk"=> false, #是否需要审核（对模板图和素材图都生效）。True为需要，False不需要（默认）。
     "source_similarity"=> "1" #人脸相似度: 范围[0~1]，越大越相似.0: 与原模板一致,1: 与目标图片最大相似度。默认1（此参数不进行调节的效果）

];
$response = $client->FaceSwapV2(['json' => $body]);
echo $response;

