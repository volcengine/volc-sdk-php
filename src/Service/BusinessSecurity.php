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
                    'host' => 'https://open.volcengineapi.com',
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
                throw new \Exception(sprintf("AdBlocker not support region, %s", $region));
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
    ];

    public function RiskDetect(int $appId, string $service, string $parameters)
    {
        $commitBody = array();
        $commitBody["app_id"] = $appId;
        $commitBody["service"] = $service;
        $commitBody["parameters"] = $parameters;
        $commitReq = [
            "json" => $commitBody
        ];
        try {
            $response = $this->request('RiskDetection', $commitReq);
            return (string)$response->getBody();
        }
        catch (\Exception $e)
        {
            $response = $this->request('RiskDetection', $commitReq);
            return (string)$response->getBody();
        }
    }
}