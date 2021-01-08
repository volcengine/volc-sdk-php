<?php
namespace Volc\Service;
use Volc\Base\V4Curl;

class AdBlocker extends V4Curl
{
    protected function getConfig(string $region)
    {
        switch ($region) {
            case 'cn-north-1':
                $config = [
                    'host' => 'https://open.volcengineapi.com',
                    'config' => [
                        'timeout' => 5.0,
                        'headers' => [
                            'Accept' => 'application/json'
                        ],
                        'v4_credentials' => [
                            'region' => 'cn-north-1',
                            'service' => 'AdBlocker',
                        ],
                    ],
                ];
                break;
            case 'ap-singapore-1':
                $config = [
                    'host' => 'https://open-ap-singapore-1.volcengineapi.com',
                    'config' => [
                        'timeout' => 5.0,
                        'headers' => [
                            'Accept' => 'application/json'
                        ],
                        'v4_credentials' => [
                            'region' => 'ap-singapore-1',
                            'service' => 'AdBlocker',
                        ],
                    ],
                ];
                break;
            case 'us-east-1':
                $config = [
                    'host' => 'https://open-us-east-1.volcengineapi.com',
                    'config' => [
                        'timeout' => 5.0,
                        'headers' => [
                            'Accept' => 'application/json'
                        ],
                        'v4_credentials' => [
                            'region' => 'us-east-1',
                            'service' => 'AdBlocker',
                        ],
                    ],
                ];
                break;
            default:
                throw new \Exception(sprintf("AdBlocker not support region, %s", $region));
        }
        return $config;
    }


    protected $apiList = [
        'AdBlock' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'AdBlock',
                    'Version' => '2021-01-06',
                ],
            ]
        ],
    ];

    public function adBlock(int $appId, string $service, string $parameters)
    {
        $commitBody = array();
        $commitBody["app_id"] = $appId;
        $commitBody["service"] = $service;
        $commitBody["parameters"] = $parameters;
        $commitReq = [
            "json" => $commitBody
        ];
        $response = $this->request('AdBlock', $commitReq);
        return (string) $response->getBody();
    }
}