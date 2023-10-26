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
