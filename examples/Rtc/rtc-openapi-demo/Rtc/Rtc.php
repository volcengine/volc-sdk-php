<?php

// RTC API 管理类
// 1. $apiList 新增API配置
// 2. 添加对应action的方法
namespace YourProject\Rtc;

use Volc\Base\V4Curl;

class Rtc extends V4Curl
{
    public function __construct()
    {
        $this->region = func_get_arg(0);
        parent::__construct($this->region);
    }

    protected function getConfig(string $region = 'cn-north-1')
    {
        //公共配置
        return [
            'host' => "https://rtc.volcengineapi.com",
            'config' => [
                'timeout' => 10.0,
                'headers' => [
                    'Accept' => 'application/json'
                ],
                'v4_credentials' => [
                    'region' => $region,
                    'service' => 'rtc',
                ],
            ],
        ];
    }

    // ===API 配置===
    // 格式固定，变量是 method、Action、Version
    // 最外层 key 和 Action 保持一致
    protected $apiList = [
        'ListIndicators' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'ListIndicators',
                    'Version' => '2020-12-01',
                ]
            ]
        ],
        'ListRoomInformation' => [
            'url' => '/',
            'method' => 'get',
            'config' => [
                'query' => [
                    'Action' => 'ListRoomInformation',
                    'Version' => '2020-12-01',
                ]
            ]
        ]
    ];

    public function requestWithRetry(string $api, array $configs): string
    {
        try {
            $response = $this->request($api, $configs);
            return (string)$response->getBody();
        } catch (\Exception $e) {
            $response = $this->request($api, $configs);
            return (string)$response->getBody();
        }
    }

    // ===API 方法===
    public function listIndicators(array $query = []): string
    {
        return $this->requestWithRetry("ListIndicators", $query);
    }

    public function listRoomInformation(array $query = []): string
    {
        return $this->requestWithRetry("ListRoomInformation", $query);
    }
}