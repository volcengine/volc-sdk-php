<?php


namespace Volc\Service;

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

    //OpenAPI 配置: 主要是method、Action、version
    protected $apiList = [
        'ListApps' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'ListApps',
                    'Version' => '2020-12-01',
                ]
            ]
        ],
        'ListRooms' => [
            'url' => '/',
            'method' => 'get',
            'config' => [
                'query' => [
                    'Action' => 'ListRooms',
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

    public function listApps(array $query = []): string
    {
        return $this->requestWithRetry("ListApps", $query);
    }

    public function listRooms(array $query = []): string
    {
        return $this->requestWithRetry("ListRooms", $query);
    }
}