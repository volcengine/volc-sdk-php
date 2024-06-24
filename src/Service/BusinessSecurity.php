<?php


namespace Volc\Service;

use Volc\Base\V4Curl;

class BusinessSecurity extends V4Curl
{
    protected function getConfig(string $region)
    {
        switch ($region) {
            case 'cn-north-1':
                $config = [
                    'host' => 'https://riskcontrol.volcengineapi.com',
                    'config' => [
                        'timeout' => 5.0,
                        'headers' => [
                            'Accept' => 'application/json'
                        ],
                        'v4_credentials' => [
                            'region' => 'cn-north-1',
                            'service' => 'BusinessSecurity',
                        ],
                    ],
                ];
                break;
            default:
                throw new \Exception(sprintf("business security not support region, %s", $region));
        }
        return $config;
    }

    protected $apiList = [
        'RiskDetection' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'RiskDetection',
                    'Version' => '2021-02-02',
                ],
            ]
        ],
        'AsyncRiskDetection' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'AsyncRiskDetection',
                    'Version' => '2021-02-25',
                ],
            ]
        ],
        'RiskResult' => [
            'url' => '/',
            'method' => 'get',
            'config' => [
                'query' => [
                    'Action' => 'RiskResult',
                    'Version' => '2021-03-10',
                ],
            ]
        ],
        'ElementVerify' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'ElementVerify',
                    'Version' => '2021-11-23',
                ],
            ]
        ],
        'ElementVerifyV2' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'ElementVerify',
                    'Version' => '2022-04-13',
                ],
            ]
        ],
        'MobileStatus' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'MobileStatus',
                    'Version' => '2020-12-25',
                ],
            ]
        ],
        'MobileStatusV2' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'MobileStatus',
                    'Version' => '2022-04-13',
                ],
            ]
        ],
        'ImageContentRisk' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'ImageContentRisk',
                    'Version' => '2021-11-29',
                ],
            ]
        ],
        'ImageContentRiskV2' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'ImageContentRiskV2',
                    'Version' => '2021-11-29',
                ],
            ]
        ],
        'AsyncImageRisk' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'AsyncImageRisk',
                    'Version' => '2021-11-29',
                ],
            ]
        ],
        'AsyncImageRiskV2' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'AsyncImageRisk',
                    'Version' => '2022-08-26',
                ],
            ]
        ],
        'GetImageResult' => [
            'url' => '/',
            'method' => 'get',
            'config' => [
                'query' => [
                    'Action' => 'GetImageResult',
                    'Version' => '2021-11-29',
                ],
            ]
        ],
        'GetImageResultV2' => [
            'url' => '/',
            'method' => 'get',
            'config' => [
                'query' => [
                    'Action' => 'ImageResult',
                    'Version' => '2022-08-26',
                ],
            ]
        ],
        'TextRisk' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'TextRisk',
                    'Version' => '2022-01-26',
                ],
            ]
        ],
        'AsyncAudioRisk' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'AsyncAudioRisk',
                    'Version' => '2022-04-01',
                ],
            ]
        ],
        'AudioResult' => [
            'url' => '/',
            'method' => 'get',
            'config' => [
                'query' => [
                    'Action' => 'GetAudioResult',
                    'Version' => '2022-04-01',
                ],
            ]
        ],
        'AudioRisk' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'AudioRisk',
                    'Version' => '2022-04-01',
                ],
            ]
        ],
        'AsyncVideoRisk' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'AsyncVideoRisk',
                    'Version' => '2021-11-29',
                ],
            ]
        ],
        'VideoResult' => [
            'url' => '/',
            'method' => 'get',
            'config' => [
                'query' => [
                    'Action' => 'VideoResult',
                    'Version' => '2022-08-26',
                ],
            ]
        ],
        'AsyncLiveAudioRisk' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'AsyncLiveAudioRisk',
                    'Version' => '2022-04-25',
                ],
            ]
        ],
        'AudioLiveResult' => [
            'url' => '/',
            'method' => 'get',
            'config' => [
                'query' => [
                    'Action' => 'GetAudioLiveResult',
                    'Version' => '2022-04-25',
                ],
            ]
        ],
        'AsyncLiveVideoRisk' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'AsyncLiveVideoRisk',
                    'Version' => '2022-04-25',
                ],
            ]
        ],
        'GetVideoLiveResult' => [
            'url' => '/',
            'method' => 'get',
            'config' => [
                'query' => [
                    'Action' => 'GetVideoLiveResult',
                    'Version' => '2022-04-25',
                ],
            ]
        ],
        'TextSliceRisk' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'TextSliceRisk',
                    'Version' => '2022-11-07',
                ],
            ]
        ],
        'CloseVideoLiveRisk' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'CloseVideoLive',
                    'Version' => '2022-04-25',
                ],
            ]
        ],
        'CloseAudioLiveRisk' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'CloseAudioLive',
                    'Version' => '2022-04-25',
                ],
            ]
        ],
        'SimpleRiskStat' => [
            'url' => '/',
            'method' => 'get',
            'config' => [
                'query' => [
                    'Action' => 'SimpleRiskStat',
                    'Version' => '2022-12-23',
                ],
            ]
        ],
        'ContentRiskStat' => [
            'url' => '/',
            'method' => 'get',
            'config' => [
                'query' => [
                    'Action' => 'ContentRiskStat',
                    'Version' => '2022-12-23',
                ],
            ]
        ],
    ];

    private $customerTimeout = 0;

    protected function requestWithRetry(string $api, array $configs): string
    {
        if ($this->customerTimeout != 0)
        {
            $configs["timeout"] = $this->customerTimeout;
        }
        try {
            $response = $this->request($api, $configs);
            return (string)$response->getBody();
        } catch (\Exception $e) {
            $response = $this->request($api, $configs);
            return (string)$response->getBody();
        }
    }

    public function SetCustomerTimeout(int $timeout)
    {
        $this->customerTimeout = &$timeout;
    }

    public function RiskDetect(int $appId, string $service, string $parameters): string
    {
        $commitBody = array();
        $commitBody["AppId"] = $appId;
        $commitBody["Service"] = $service;
        $commitBody["Parameters"] = $parameters;
        $commitReq = [
            "json" => $commitBody
        ];
        return $this->requestWithRetry("RiskDetection", $commitReq);
    }

    public function AsyncRiskDetect(int $appId, string $service, string $parameters): string
    {
        $commitBody = array();
        $commitBody["AppId"] = $appId;
        $commitBody["Service"] = $service;
        $commitBody["Parameters"] = $parameters;
        $commitReq = [
            "json" => $commitBody
        ];
        return $this->requestWithRetry("AsyncRiskDetection", $commitReq);
    }

    public function RiskResult(int $appId, string $service, int $startTime, int $endTime, int $pageSize, int $pageNum): string
    {
        $commitBody = array();
        $commitBody["AppId"] = $appId;
        $commitBody["Service"] = $service;
        $commitBody["StartTime"] = $startTime;
        $commitBody["EndTime"] = $endTime;
        $commitBody["PageSize"] = $pageSize;
        $commitBody["PageNum"] = $pageNum;
        $commitReq = [
            "query" => $commitBody
        ];
        return $this->requestWithRetry("RiskResult", $commitReq);
    }

    public function ElementVerifyV2(int $appId, string $service, string $parameters): string
    {
        $commitBody = array();
        $commitBody["AppId"] = $appId;
        $commitBody["Service"] = $service;
        $commitBody["Parameters"] = $parameters;
        $commitReq = [
            "json" => $commitBody
        ];
        return $this->requestWithRetry("ElementVerifyV2", $commitReq);
    }



    public function MobileStatusV2(int $appId, string $service, string $parameters): string
    {
        $commitBody = array();
        $commitBody["AppId"] = $appId;
        $commitBody["Service"] = $service;
        $commitBody["Parameters"] = $parameters;
        $commitReq = [
            "json" => $commitBody
        ];
        return $this->requestWithRetry("MobileStatusV2", $commitReq);
    }

    // Deprecated use ImageContentRiskV2 replace
    public function ImageContentRisk(int $appId, string $service, string $parameters): string
    {
        $commitBody = array();
        $commitBody["AppId"] = $appId;
        $commitBody["Service"] = $service;
        $commitBody["Parameters"] = $parameters;
        $commitReq = [
            "json" => $commitBody
        ];
        return $this->requestWithRetry("ImageContentRisk", $commitReq);
    }

    public function ImageContentRiskV2(int $appId, string $service, string $parameters): string
    {
        $commitBody = array();
        $commitBody["AppId"] = $appId;
        $commitBody["Service"] = $service;
        $commitBody["Parameters"] = $parameters;
        $commitReq = [
            "json" => $commitBody
        ];
        return $this->requestWithRetry("ImageContentRiskV2", $commitReq);
    }

    public function AsyncImageRisk(int $appId, string $service, string $parameters): string
    {
        $commitBody = array();
        $commitBody["AppId"] = $appId;
        $commitBody["Service"] = $service;
        $commitBody["Parameters"] = $parameters;
        $commitReq = [
            "json" => $commitBody
        ];
        return $this->requestWithRetry("AsyncImageRisk", $commitReq);
    }

    public function AsyncImageRiskV2(int $appId, string $service, string $parameters): string
    {
        $commitBody = array();
        $commitBody["AppId"] = $appId;
        $commitBody["Service"] = $service;
        $commitBody["Parameters"] = $parameters;
        $commitReq = [
            "json" => $commitBody
        ];
        return $this->requestWithRetry("AsyncImageRiskV2", $commitReq);
    }

    public function GetImageResult(int $appId, string $service, string $dataId): string
    {
        $commitBody = array();
        $commitBody["AppId"] = $appId;
        $commitBody["Service"] = $service;
        $commitBody["DataId"] = $dataId;
        $commitReq = [
            "query" => $commitBody
        ];
        return $this->requestWithRetry("GetImageResult", $commitReq);
    }

    public function GetImageResultV2(int $appId, string $service, string $dataId): string
    {
        $commitBody = array();
        $commitBody["AppId"] = $appId;
        $commitBody["Service"] = $service;
        $commitBody["DataId"] = $dataId;
        $commitReq = [
            "query" => $commitBody
        ];
        return $this->requestWithRetry("GetImageResultV2", $commitReq);
    }

    // Deprecated use TextSliceRisk replace
    public function TextRisk(int $appId, string $service, string $parameters): string
    {
        $commitBody = array();
        $commitBody["AppId"] = $appId;
        $commitBody["Service"] = $service;
        $commitBody["Parameters"] = $parameters;
        $commitReq = [
            "json" => $commitBody
        ];
        return $this->requestWithRetry("TextRisk", $commitReq);
    }

    public function AsyncAudioRisk(int $appId, string $service, string $parameters): string
    {
        $commitBody = array();
        $commitBody["AppId"] = $appId;
        $commitBody["Service"] = $service;
        $commitBody["Parameters"] = $parameters;
        $commitReq = [
            "json" => $commitBody
        ];
        return $this->requestWithRetry("AsyncAudioRisk", $commitReq);
    }

    public function AsyncLiveAudioRisk(int $appId, string $service, string $parameters): string
    {
        $commitBody = array();
        $commitBody["AppId"] = $appId;
        $commitBody["Service"] = $service;
        $commitBody["Parameters"] = $parameters;
        $commitReq = [
            "json" => $commitBody
        ];
        return $this->requestWithRetry("AsyncLiveAudioRisk", $commitReq);
    }

    public function GetAudioResult(int $appId, string $service, string $dataId): string
    {
        $commitBody = array();
        $commitBody["AppId"] = $appId;
        $commitBody["Service"] = $service;
        $commitBody["DataId"] = $dataId;
        $commitReq = [
            "query" => $commitBody
        ];
        return $this->requestWithRetry("AudioResult", $commitReq);
    }

    public function AudioRisk(int $appId, string $service, string $parameters): string
    {
        $commitBody = array();
        $commitBody["AppId"] = $appId;
        $commitBody["Service"] = $service;
        $commitBody["Parameters"] = $parameters;
        $commitReq = [
            "json" => $commitBody
        ];
        return $this->requestWithRetry("AudioRisk", $commitReq);
    }

    public function GetAudioLiveResult(int $appId, string $service, string $dataId): string
    {
        $commitBody = array();
        $commitBody["AppId"] = $appId;
        $commitBody["Service"] = $service;
        $commitBody["DataId"] = $dataId;
        $commitReq = [
            "query" => $commitBody
        ];
        return $this->requestWithRetry("GetAudioLiveResult", $commitReq);
    }

    public function AsyncVideoRisk(int $appId, string $service, string $parameters): string
    {
        $commitBody = array();
        $commitBody["AppId"] = $appId;
        $commitBody["Service"] = $service;
        $commitBody["Parameters"] = $parameters;
        $commitReq = [
            "json" => $commitBody
        ];
        return $this->requestWithRetry("AsyncVideoRisk", $commitReq);
    }

    public function AsyncLiveVideoRisk(int $appId, string $service, string $parameters): string
    {
        $commitBody = array();
        $commitBody["AppId"] = $appId;
        $commitBody["Service"] = $service;
        $commitBody["Parameters"] = $parameters;
        $commitReq = [
            "json" => $commitBody
        ];
        return $this->requestWithRetry("AsyncLiveVideoRisk", $commitReq);
    }

    public function GetVideoResult(int $appId, string $service, string $dataId): string
    {
        $commitBody = array();
        $commitBody["AppId"] = $appId;
        $commitBody["Service"] = $service;
        $commitBody["DataId"] = $dataId;
        $commitReq = [
            "query" => $commitBody
        ];
        return $this->requestWithRetry("VideoResult", $commitReq);
    }

    public function GetVideoLiveResult(int $appId, string $service, string $dataId): string
    {
        $commitBody = array();
        $commitBody["AppId"] = $appId;
        $commitBody["Service"] = $service;
        $commitBody["DataId"] = $dataId;
        $commitReq = [
            "query" => $commitBody
        ];
        return $this->requestWithRetry("GetVideoLiveResult", $commitReq);
    }

    public function TextSliceRisk(int $appId, string $service, string $parameters): string
    {
        $commitBody = array();
        $commitBody["AppId"] = $appId;
        $commitBody["Service"] = $service;
        $commitBody["Parameters"] = $parameters;
        $commitReq = [
            "json" => $commitBody
        ];
        return $this->requestWithRetry("TextSliceRisk", $commitReq);
    }

    public function CloseVideoLiveRisk(int $appId, string $service, string $dataId): string
    {
        $commitBody = array();
        $commitBody["AppId"] = $appId;
        $commitBody["Service"] = $service;
        $commitBody["DataId"] = $dataId;
        $commitReq = [
            "json" => $commitBody
        ];
        return $this->requestWithRetry("CloseVideoLiveRisk", $commitReq);
    }

    public function CloseAudioLiveRisk(int $appId, string $service, string $dataId): string
    {
        $commitBody = array();
        $commitBody["AppId"] = $appId;
        $commitBody["Service"] = $service;
        $commitBody["DataId"] = $dataId;
        $commitReq = [
            "json" => $commitBody
        ];
        return $this->requestWithRetry("CloseAudioLiveRisk", $commitReq);
    }

    public function SimpleRiskStat(int $appId, string $service, string $parameters, string $product, string $unitType): string
    {
        $commitBody = array();
        if ($appId != 0) {
            $commitBody["AppId"] = $appId;
        }
        if ($service != "") {
            $commitBody["Service"] = $service;
        }
        $commitBody["Product"] = $product;
        $commitBody["UnitType"] = $unitType;
        $commitBody["Parameters"] = $parameters;
        $commitReq = [
            "query" => $commitBody
        ];
        return $this->requestWithRetry("SimpleRiskStat", $commitReq);
    }

    public function ContentRiskStat(int $appId, string $service, string $parameters, string $product, string $unitType): string
    {
        $commitBody = array();
        if ($appId != 0) {
            $commitBody["AppId"] = $appId;
        }
        if ($service != "") {
            $commitBody["Service"] = $service;
        }
        $commitBody["Product"] = $product;
        $commitBody["UnitType"] = $unitType;
        $commitBody["Parameters"] = $parameters;
        $commitReq = [
            "query" => $commitBody
        ];
        return $this->requestWithRetry("ContentRiskStat", $commitReq);
    }
}