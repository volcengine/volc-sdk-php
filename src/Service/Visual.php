<?php

namespace Volc\Service;

use Volc\Base\V4Curl;

class Visual extends V4Curl
{
    protected function getConfig(string $region = '')
    {
        return [
            'host' => 'https://visual.volcengineapi.com',
            'config' => [
                'timeout' => 60.0,
                'headers' => [
                    'Accept' => 'application/json'
                ],
                'v4_credentials' => [
                    'region' => 'cn-north-1',
                    'service' => 'cv',
                ],
            ],
        ];
    }

    public function JPCartoon(array $query = [])
    {
        $response = $this->request('JPCartoon', $query);
        return $response->getBody();
    }

    public function FaceSwap(array $query = [])
    {
        $response = $this->request('FaceSwap', $query);
        return $response->getBody();
    }

    public function HumanSegment(array $query = [])
    {
        $response = $this->request('HumanSegment', $query);
        return $response->getBody();
    }

    public function GeneralSegment(array $query = [])
    {
        $response = $this->request('GeneralSegment', $query);
        return $response->getBody();
    }

    public function EnhancePhoto(array $query = [])
    {
        $response = $this->request('EnhancePhoto', $query);
        return $response->getBody();
    }

    public function ConvertPhoto(array $query = [])
    {
        $response = $this->request('ConvertPhoto', $query);
        return $response->getBody();
    }

    public function TGameCartoon(array $query = [])
    {
        $response = $this->request('TGameCartoon', $query);
        return $response->getBody();
    }

    public function AllAgeGeneration(array $query = [])
    {
        $response = $this->request('AllAgeGeneration', $query);
        return $response->getBody();
    }

    public function FaceFusionMovieSubmitTask(array $query = [])
    {
        $response = $this->request('FaceFusionMovieSubmitTask', $query);
        return $response->getBody();
    }

    public function FaceFusionMovieGetResult(array $query = [])
    {
        $response = $this->request('FaceFusionMovieGetResult', $query);
        return $response->getBody();
    }

    public function FaceFusionMovieSync(array $query = [])
    {
        $response = $this->request('FaceFusionMovieSync', $query);
        return $response->getBody();
    }

    public function T2ILDM(array $query = [])
    {
        $response = $this->request('T2ILDM', $query);
        return $response->getBody();
    }

    public function Img2ImgStyle(array $query = [])
    {
        $response = $this->request('Img2ImgStyle', $query);
        return $response->getBody();
    }

    public function Img2ImgAnime(array $query = [])
    {
        $response = $this->request('Img2ImgAnime', $query);
        return $response->getBody();
    }

    public function CertToken(array $query = [])
    {
        $response = $this->request('CertToken', $query);
        return $response->getBody();
    }

    public function CertVerify(array $query = [])
    {
        $response = $this->request('CertVerify', $query);
        return $response->getBody();
    }

    public function CertVerifyQuery(array $query = [])
    {
        $response = $this->request('CertVerifyQuery', $query);
        return $response->getBody();
    }

    public function CertConfigInit(array $query = [])
    {
        $response = $this->request('CertConfigInit', $query);
        return $response->getBody();
    }

    public function OCRNormal(array $query = [])
    {
        $response = $this->request('OCRNormal', $query);
        return $response->getBody();
    }

    public function IDCard(array $query = [])
    {
        $response = $this->request('IDCard', $query);
        return $response->getBody();
    }

    public function BankCard(array $query = [])
    {
        $response = $this->request('BankCard', $query);
        return $response->getBody();
    }

    public function FacePretty(array $query = [])
    {
        $response = $this->request('FacePretty', $query);
        return $response->getBody();
    }

    public function PotraitEffect(array $query = [])
    {
        $response = $this->request('PotraitEffect', $query);
        return $response->getBody();
    }

    public function SetAPI($action, $version)
    {
        $addApi = [
            $action => [
                'url' => '/',
                'method' => 'post',
                'config' => [
                    'query' => [
                        'Action' => $action,
                        'Version' => $version,
                    ],
                ],
            ],
        ];
        $this->apiList = array_merge($this->apiList, $addApi);
    }

    public function CallAPI($action, array $query = [])
    {
        $response = $this->request($action, $query);
        return $response->getBody();
    }

    public function HairSegment(array $query = [])
    {
        $response = $this->request('HairSegment', $query);
        return $response->getBody();
    }

    public function DollyZoom(array $query = [])
    {
        $response = $this->request('DollyZoom', $query);
        return $response->getBody();
    }

    public function Img2Video3D(array $query = [])
    {
        $response = $this->request('Img2Video3D', $query);
        return $response->getBody();
    }
    public function HairStyle(array $query = [])
    {
        $response = $this->request('HairStyle', $query);
        return $response->getBody();
    }
    public function HairStyleV2(array $query = [])
    {
        $response = $this->request('HairStyleV2', $query);
        return $response->getBody();
    }
    public function ImageAnimation(array $query = [])
    {
        $response = $this->request('ImageAnimation', $query);
        return $response->getBody();
    }
    public function EmoticonEdit(array $query = [])
    {
        $response = $this->request('EmoticonEdit', $query);
        return $response->getBody();
    }
    public function EmotionPortrait(array $query = [])
    {
        $response = $this->request('EmotionPortrait', $query);
        return $response->getBody();
    }
    public function EyeClose2Open(array $query = [])
    {
        $response = $this->request('EyeClose2Open', $query);
        return $response->getBody();
    }
    public function TupoCartoon(array $query = [])
    {
        $response = $this->request('TupoCartoon', $query);
        return $response->getBody();
    }
    public function DistortionFree(array $query = [])
    {
        $response = $this->request('DistortionFree', $query);
        return $response->getBody();
    }
    public function BodyDetection(array $query = [])
    {
        $response = $this->request('BodyDetection', $query);
        return $response->getBody();
    }
    public function ImageFlow(array $query = [])
    {
        $response = $this->request('ImageFlow', $query);
        return $response->getBody();
    }
    public function ImageScoreV2(array $query = [])
    {
        $response = $this->request('ImageScoreV2', $query);
        return $response->getBody();
    }
    public function CarPlateDetection(array $query = [])
    {
        $response = $this->request('CarPlateDetection', $query);
        return $response->getBody();
    }
    public function CarDetection(array $query = [])
    {
        $response = $this->request('CarDetection', $query);
        return $response->getBody();
    }
    public function EntityDetect(array $query = [])
    {
        $response = $this->request('EntityDetect', $query);
        return $response->getBody();
    }
    public function GoodsDetect(array $query = [])
    {
        $response = $this->request('GoodsDetect', $query);
        return $response->getBody();
    }
    public function PoemMaterial(array $query = [])
    {
        $response = $this->request('PoemMaterial', $query);
        return $response->getBody();
    }
    public function CarSegment(array $query = [])
    {
        $response = $this->request('CarSegment', $query);
        return $response->getBody();
    }
    public function SkySegment(array $query = [])
    {
        $response = $this->request('SkySegment', $query);
        return $response->getBody();
    }
    public function GoodsSegment(array $query = [])
    {
        $response = $this->request('SkySegment', $query);
        return $response->getBody();
    }
    public function ImageCorrection(array $query = [])
    {
        $response = $this->request('ImageCorrection', $query);
        return $response->getBody();
    }
    public function ImageStyleConversion(array $query = [])
    {
        $response = $this->request('ImageStyleConversion', $query);
        return $response->getBody();
    }
    public function ImageCut(array $query = [])
    {
        $response = $this->request('ImageCut', $query);
        return $response->getBody();
    }
    public function StretchRecovery(array $query = [])
    {
        $response = $this->request('StretchRecovery', $query);
        return $response->getBody();
    }
    public function EnhancePhotoV2(array $query = [])
    {
        $response = $this->request('EnhancePhotoV2', $query);
        return $response->getBody();
    }
    public function ConvertPhotoV2(array $query = [])
    {
        $response = $this->request('ConvertPhotoV2', $query);
        return $response->getBody();
    }
    public function OverResolutionV2(array $query = [])
    {
        $response = $this->request('OverResolutionV2', $query);
        return $response->getBody();
    }
    protected $apiList = [
        'JPCartoon' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'JPCartoon',
                    'Version' => '2020-08-26',
                ],
            ],
        ],
        'OverResolutionV2' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'OverResolutionV2',
                    'Version' => '2022-08-31',
                ],
                'header' => [
                    'Content-Type' => 'application/json',
                ]
            ],
        ],
        'ConvertPhotoV2' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'ConvertPhotoV2',
                    'Version' => '2022-08-31',
                ],
                'header' => [
                    'Content-Type' => 'application/json',
                ]
            ],
        ],
        'EnhancePhotoV2' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'EnhancePhotoV2',
                    'Version' => '2022-08-31',
                ],
                'header' => [
                    'Content-Type' => 'application/json',
                ]
            ],
        ],
        'StretchRecovery' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'StretchRecovery',
                    'Version' => '2020-08-26',
                ],
            ],
        ],
        'ImageCut' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'ImageCut',
                    'Version' => '2020-08-26',
                ],
            ],
        ],
        'ImageStyleConversion' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'ImageStyleConversion',
                    'Version' => '2020-08-26',
                ],
            ],
        ],
        'ImageCorrection' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'ImageCorrection',
                    'Version' => '2022-08-31',
                ],
                'header' => [
                    'Content-Type' => 'application/json',
                ]
            ],
        ],
        'GoodsSegment' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'GoodsSegment',
                    'Version' => '2020-08-26',
                ],
            ],
        ],
        'SkySegment' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'SkySegment',
                    'Version' => '2020-08-26',
                ],
            ],
        ],
        'CarSegment' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'CarSegment',
                    'Version' => '2020-08-26',
                ],
            ],
        ],
        'PoemMaterial' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'PoemMaterial',
                    'Version' => '2020-08-26',
                ],
            ],
        ],
        'GoodsDetect' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'GoodsDetect',
                    'Version' => '2020-08-26',
                ],
            ],
        ],
        'EntityDetect' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'EntityDetect',
                    'Version' => '2020-08-26',
                ],
            ],
        ],
        'CarDetection' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'CarDetection',
                    'Version' => '2020-08-26',
                ],
            ],
        ],
        'CarPlateDetection' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'CarPlateDetection',
                    'Version' => '2020-08-26',
                ],
            ],
        ],
        'ImageScoreV2' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'ImageScoreV2',
                    'Version' => '2022-08-31',
                ],
                'header' => [
                    'Content-Type' => 'application/json',
                ]
            ],
        ],
        'ImageFlow' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'ImageFlow',
                    'Version' => '2020-08-26',
                ],
            ],
        ],
        'BodyDetection' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'BodyDetection',
                    'Version' => '2022-08-31',
                ],
                'header' => [
                    'Content-Type' => 'application/json',
                ]
            ],
        ],
        'DistortionFree' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'DistortionFree',
                    'Version' => '2020-08-26',
                ],
            ],
        ],
        'TupoCartoon' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'TupoCartoon',
                    'Version' => '2022-08-31',
                ],
                'header' => [
                    'Content-Type' => 'application/json',
                ]
            ],
        ],
        'EyeClose2Open' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'EyeClose2Open',
                    'Version' => '2020-08-26',
                ],
            ],
        ],
        'EmotionPortrait' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'EmotionPortrait',
                    'Version' => '2022-08-31',
                ],
                'header' => [
                    'Content-Type' => 'application/json',
                ]
            ],
        ],
        'ImageAnimation' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'ImageAnimation',
                    'Version' => '2020-08-26',
                ],
            ],
        ],
        'EmoticonEdit' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'EmoticonEdit',
                    'Version' => '2020-08-26',
                ],
            ],
        ],
        'HairStyle' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'HairStyle',
                    'Version' => '2020-08-26',
                ],
            ],
        ],
        'HairStyleV2' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'HairStyle',
                    'Version' => '2022-08-31',
                ],
                'header' => [
                    'Content-Type' => 'application/json',
                ]
            ],
        ],
        'Img2Video3D' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'Img2Video3D',
                    'Version' => '2022-08-31',
                ],
                'header' => [
                    'Content-Type' => 'application/json',
                ]
            ],
        ],
        'HairSegment' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'HairSegment',
                    'Version' => '2020-08-26',
                ],
            ],
        ],
        'DollyZoom' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'DollyZoom',
                    'Version' => '2020-08-26',
                ],
            ],
        ],
        'FaceSwap' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'FaceSwap',
                    'Version' => '2020-08-26',
                ],
            ],
        ],
        'HumanSegment' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'HumanSegment',
                    'Version' => '2020-08-26',
                ],
            ],
        ],
        'GeneralSegment' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'GeneralSegment',
                    'Version' => '2020-08-26',
                ],
            ],
        ],
        'EnhancePhoto' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'EnhancePhoto',
                    'Version' => '2020-08-26',
                ],
            ],
        ],
        'ConvertPhoto' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'ConvertPhoto',
                    'Version' => '2020-08-26',
                ],
            ],
        ],
        'TGameCartoon' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => '3DGameCartoon',
                    'Version' => '2020-08-26',
                ],
            ],
        ],
        'AllAgeGeneration' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'AllAgeGeneration',
                    'Version' => '2022-08-31',
                ],
                'header' => [
                    'Content-Type' => 'application/json',
                ],
            ],
        ],
        'FaceFusionMovieSubmitTask' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'FaceFusionMovieSubmitTask',
                    'Version' => '2022-08-31',
                ],
                'header' => [
                    'Content-Type' => 'application/json',
                ],
            ],
        ],
        'FaceFusionMovieGetResult' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'FaceFusionMovieGetResult',
                    'Version' => '2022-08-31',
                ],
                'header' => [
                    'Content-Type' => 'application/json',
                ],
            ],
        ],
        'FaceFusionMovieSync' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'FaceFusionMovie',
                    'Version' => '2022-08-31',
                ],
                'header' => [
                    'Content-Type' => 'application/json',
                ],
            ],
        ],
        'T2ILDM' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'T2ILDM',
                    'Version' => '2022-08-31',
                ],
                'header' => [
                    'Content-Type' => 'application/json',
                ],
            ],
        ],
        'Img2ImgStyle' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'Img2ImgStyle',
                    'Version' => '2022-08-31',
                ],
                'header' => [
                    'Content-Type' => 'application/json',
                ],
            ],
        ],
        'Img2ImgAnime' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'Img2ImgAnime',
                    'Version' => '2022-08-31',
                ],
                'header' => [
                    'Content-Type' => 'application/json',
                ],
            ],
        ],
        'CertToken' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'CertToken',
                    'Version' => '2022-08-31',
                ],
                'header' => [
                    'Content-Type' => 'application/json',
                ],
            ],
        ],
        'CertVerify' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'CertVerify',
                    'Version' => '2022-08-31',
                ],
                'header' => [
                    'Content-Type' => 'application/json',
                ],
            ],
        ],
        'CertVerifyQuery' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'CertVerifyQuery',
                    'Version' => '2022-08-31',
                ],
                'header' => [
                    'Content-Type' => 'application/json',
                ],
            ],
        ],
        'CertConfigInit' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'CertConfigInit',
                    'Version' => '2022-08-31',
                ],
                'header' => [
                    'Content-Type' => 'application/json',
                ],
            ],
        ],

        'OCRNormal' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'OCRNormal',
                    'Version' => '2020-08-26',
                ],
            ],
        ],
        'IDCard' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'IDCard',
                    'Version' => '2020-08-26',
                ],
            ],
        ],
        'BankCard' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'BankCard',
                    'Version' => '2020-08-26',
                ],
            ],
        ],
        'FacePretty' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'FacePretty',
                    'Version' => '2020-08-26',
                ],
            ],
        ],
        'PotraitEffect' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'PotraitEffect',
                    'Version' => '2020-08-26',
                ],
            ],
        ],
    ];
}
