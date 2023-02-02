<?php

namespace Volc\Service;

use ArrayObject;
use Exception;
use Volc\Base\V4Curl;

class Vms extends V4Curl
{

    /**
     * @throws Exception
     */
    protected function getConfig(string $region): array
    {
        switch ($region){
            case 'cn-north-1':
                $config = [
                    'host' => 'https://cloud-vms.volcengineapi.com',
                    'config' => [
                        'timeout' => 10.0,
                        'headers' => [
                            'Accept' => 'application/json'
                        ],
                        'v4_credentials' => [
                            'region' => 'cn-north-1',
                            'service' => 'volc_risk_http',
                        ],
                    ],
                ];
                break;
            default:
                throw new Exception(sprintf("This region not support now, %s", $region));
        }
        return $config;
    }

    protected $apiList = [
        'QueryCanCall' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'QueryCanCall',
                    'Version' => '2021-01-01',
                ],
            ]
        ],
    ];

    protected function requestWithRetry(string $api, array $configs): string
    {
        try {
            $response = $this->request($api, $configs);
            return (string)$response->getBody();
        }
        catch (Exception $e)
        {
            $response = $this->request($api, $configs);
            return (string)$response->getBody();
        }
    }

    public function QueryCanCall(array $data = []): string
    {
        if (empty($data)){
            $data = new ArrayObject();
        }
        return $this->requestWithRetry("QueryCanCall", ['form_params' => $data]);
    }
}