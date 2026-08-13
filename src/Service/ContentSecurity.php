<?php


namespace Volc\Service;

use Volc\Base\V4Curl;

/**
 * ContentSecurity 服务对应内容安全审核专家能力，域名 contentservice.zijieapi.com。
 */
class ContentSecurity extends V4Curl
{
    protected function getConfig(string $region)
    {
        switch ($region) {
            case 'cn-north-1':
                $config = [
                    'host' => 'https://contentservice.zijieapi.com',
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
                throw new \Exception(sprintf("content security not support region, %s", $region));
        }
        return $config;
    }


    protected $apiList = [
        'TextModeration' => [
            'url' => '/openapi/v1/rc_llm/text_moderation',
            'method' => 'POST',
            'config' => [
                'timeout' => 300.0,
                'query' => [
                    'Action' => 'TextModeration',
                    'Version' => '2022-08-26',
                ],
            ]
        ],
        'AsyncTextModeration' => [
            'url' => '/openapi/v1/rc_llm/async_text_moderation',
            'method' => 'POST',
            'config' => [
                'timeout' => 10.0,
                'query' => [
                    'Action' => 'AsyncTextModeration',
                    'Version' => '2022-08-26',
                ],
            ]
        ],
        'TextModerationResult' => [
            'url' => '/openapi/v1/rc_llm/text_moderation_result',
            'method' => 'GET',
            'config' => [
                'timeout' => 10.0,
                'query' => [
                    'Action' => 'TextModerationResult',
                    'Version' => '2022-08-26',
                ],
            ]
        ],
        'MultiModeration' => [
            'url' => '/openapi/v1/rc_llm/multi_moderation',
            'method' => 'POST',
            'config' => [
                'timeout' => 300.0,
                'query' => [
                    'Action' => 'MultiModeration',
                    'Version' => '2022-08-26',
                ],
            ]
        ],
        'AsyncMultiModeration' => [
            'url' => '/openapi/v1/rc_llm/async_multi_moderation',
            'method' => 'POST',
            'config' => [
                'timeout' => 10.0,
                'query' => [
                    'Action' => 'AsyncMultiModeration',
                    'Version' => '2022-08-26',
                ],
            ]
        ],
        'MultiModerationResult' => [
            'url' => '/openapi/v1/rc_llm/multi_moderation_result',
            'method' => 'GET',
            'config' => [
                'timeout' => 10.0,
                'query' => [
                    'Action' => 'MultiModerationResult',
                    'Version' => '2022-08-26',
                ],
            ]
        ],
        'CustomRisk' => [
            'url' => '/openapi/v1/rc_llm/custom_risk',
            'method' => 'POST',
            'config' => [
                'timeout' => 300.0,
                'query' => [
                    'Action' => 'CustomRisk',
                    'Version' => '2022-08-26',
                ],
            ]
        ],
        'AsyncCustomRisk' => [
            'url' => '/openapi/v1/rc_llm/async_custom_risk',
            'method' => 'POST',
            'config' => [
                'timeout' => 10.0,
                'query' => [
                    'Action' => 'AsyncCustomRisk',
                    'Version' => '2022-08-26',
                ],
            ]
        ],
        'CustomRiskResult' => [
            'url' => '/openapi/v1/rc_llm/custom_risk_result',
            'method' => 'GET',
            'config' => [
                'timeout' => 10.0,
                'query' => [
                    'Action' => 'CustomRiskResult',
                    'Version' => '2022-08-26',
                ],
            ]
        ],
        'ImageTextLiteModeration' => [
            'url' => '/openapi/v1/rc_llm/image_text_lite_moderation',
            'method' => 'POST',
            'config' => [
                'timeout' => 300.0,
                'query' => [
                    'Action' => 'ImageTextLiteModeration',
                    'Version' => '2022-08-26',
                ],
            ]
        ],
        'AudioLiteModeration' => [
            'url' => '/openapi/v1/rc_llm/audio_lite_moderation',
            'method' => 'POST',
            'config' => [
                'timeout' => 300.0,
                'query' => [
                    'Action' => 'AudioLiteModeration',
                    'Version' => '2022-08-26',
                ],
            ]
        ],
        'AsyncAudioLiteModeration' => [
            'url' => '/openapi/v1/rc_llm/async_audio_lite_moderation',
            'method' => 'POST',
            'config' => [
                'timeout' => 10.0,
                'query' => [
                    'Action' => 'AsyncAudioLiteModeration',
                    'Version' => '2022-04-01',
                ],
            ]
        ],
        'AudioLiteModerationResult' => [
            'url' => '/openapi/v1/rc_llm/audio_lite_moderation_result',
            'method' => 'GET',
            'config' => [
                'timeout' => 10.0,
                'query' => [
                    'Action' => 'AudioLiteModerationResult',
                    'Version' => '2022-04-01',
                ],
            ]
        ],
        'AsyncVideoLiteModeration' => [
            'url' => '/openapi/v1/rc_llm/async_video_lite_moderation',
            'method' => 'POST',
            'config' => [
                'timeout' => 10.0,
                'query' => [
                    'Action' => 'AsyncVideoLiteModeration',
                    'Version' => '2022-04-01',
                ],
            ]
        ],
        'VideoLiteModerationResult' => [
            'url' => '/openapi/v1/rc_llm/video_lite_moderation_result',
            'method' => 'GET',
            'config' => [
                'timeout' => 10.0,
                'query' => [
                    'Action' => 'VideoLiteModerationResult',
                    'Version' => '2022-04-01',
                ],
            ]
        ],
    ];

    private $customerTimeout = 0;

    protected function requestWithRetry(string $api, array $configs): string
    {
        if ($this->customerTimeout != 0) {
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

    public function TextModeration(int $appId, string $service, string $parameters): string
    {
        $commitBody = array();
        $commitBody["AppId"] = $appId;
        $commitBody["Service"] = $service;
        $commitBody["Parameters"] = $parameters;
        $commitReq = [
            "json" => $commitBody
        ];
        return $this->requestWithRetry("TextModeration", $commitReq);
    }

    public function AsyncTextModeration(int $appId, string $service, string $parameters): string
    {
        $commitBody = array();
        $commitBody["AppId"] = $appId;
        $commitBody["Service"] = $service;
        $commitBody["Parameters"] = $parameters;
        $commitReq = [
            "json" => $commitBody
        ];
        return $this->requestWithRetry("AsyncTextModeration", $commitReq);
    }

    public function TextModerationResult(int $appId, string $service, string $dataId): string
    {
        $commitBody = array();
        $commitBody["AppId"] = $appId;
        $commitBody["Service"] = $service;
        $commitBody["DataId"] = $dataId;
        $commitReq = [
            "query" => $commitBody
        ];
        return $this->requestWithRetry("TextModerationResult", $commitReq);
    }

    public function MultiModeration(int $appId, string $service, string $parameters): string
    {
        $commitBody = array();
        $commitBody["AppId"] = $appId;
        $commitBody["Service"] = $service;
        $commitBody["Parameters"] = $parameters;
        $commitReq = [
            "json" => $commitBody
        ];
        return $this->requestWithRetry("MultiModeration", $commitReq);
    }

    public function AsyncMultiModeration(int $appId, string $service, string $parameters): string
    {
        $commitBody = array();
        $commitBody["AppId"] = $appId;
        $commitBody["Service"] = $service;
        $commitBody["Parameters"] = $parameters;
        $commitReq = [
            "json" => $commitBody
        ];
        return $this->requestWithRetry("AsyncMultiModeration", $commitReq);
    }

    public function MultiModerationResult(int $appId, string $service, string $dataId): string
    {
        $commitBody = array();
        $commitBody["AppId"] = $appId;
        $commitBody["Service"] = $service;
        $commitBody["DataId"] = $dataId;
        $commitReq = [
            "query" => $commitBody
        ];
        return $this->requestWithRetry("MultiModerationResult", $commitReq);
    }

    public function CustomRisk(int $appId, string $service, string $parameters): string
    {
        $commitBody = array();
        $commitBody["AppId"] = $appId;
        $commitBody["Service"] = $service;
        $commitBody["Parameters"] = $parameters;
        $commitReq = [
            "json" => $commitBody
        ];
        return $this->requestWithRetry("CustomRisk", $commitReq);
    }

    public function AsyncCustomRisk(int $appId, string $service, string $parameters): string
    {
        $commitBody = array();
        $commitBody["AppId"] = $appId;
        $commitBody["Service"] = $service;
        $commitBody["Parameters"] = $parameters;
        $commitReq = [
            "json" => $commitBody
        ];
        return $this->requestWithRetry("AsyncCustomRisk", $commitReq);
    }

    public function CustomRiskResult(int $appId, string $service, string $dataId): string
    {
        $commitBody = array();
        $commitBody["AppId"] = $appId;
        $commitBody["Service"] = $service;
        $commitBody["DataId"] = $dataId;
        $commitReq = [
            "query" => $commitBody
        ];
        return $this->requestWithRetry("CustomRiskResult", $commitReq);
    }

    public function ImageTextLiteModeration(int $appId, string $service, string $parameters): string
    {
        $commitBody = array();
        $commitBody["AppId"] = $appId;
        $commitBody["Service"] = $service;
        $commitBody["Parameters"] = $parameters;
        $commitReq = [
            "json" => $commitBody
        ];
        return $this->requestWithRetry("ImageTextLiteModeration", $commitReq);
    }

    public function AudioLiteModeration(int $appId, string $service, string $parameters): string
    {
        $commitBody = array();
        $commitBody["AppId"] = $appId;
        $commitBody["Service"] = $service;
        $commitBody["Parameters"] = $parameters;
        $commitReq = [
            "json" => $commitBody
        ];
        return $this->requestWithRetry("AudioLiteModeration", $commitReq);
    }

    public function AsyncAudioLiteModeration(int $appId, string $service, string $parameters): string
    {
        $commitBody = array();
        $commitBody["AppId"] = $appId;
        $commitBody["Service"] = $service;
        $commitBody["Parameters"] = $parameters;
        $commitReq = [
            "json" => $commitBody
        ];
        return $this->requestWithRetry("AsyncAudioLiteModeration", $commitReq);
    }

    public function AudioLiteModerationResult(int $appId, string $service, string $dataId): string
    {
        $commitBody = array();
        $commitBody["AppId"] = $appId;
        $commitBody["Service"] = $service;
        $commitBody["DataId"] = $dataId;
        $commitReq = [
            "query" => $commitBody
        ];
        return $this->requestWithRetry("AudioLiteModerationResult", $commitReq);
    }

    public function AsyncVideoLiteModeration(int $appId, string $service, string $parameters): string
    {
        $commitBody = array();
        $commitBody["AppId"] = $appId;
        $commitBody["Service"] = $service;
        $commitBody["Parameters"] = $parameters;
        $commitReq = [
            "json" => $commitBody
        ];
        return $this->requestWithRetry("AsyncVideoLiteModeration", $commitReq);
    }

    public function VideoLiteModerationResult(int $appId, string $service, string $dataId): string
    {
        $commitBody = array();
        $commitBody["AppId"] = $appId;
        $commitBody["Service"] = $service;
        $commitBody["DataId"] = $dataId;
        $commitReq = [
            "query" => $commitBody
        ];
        return $this->requestWithRetry("VideoLiteModerationResult", $commitReq);
    }
}
