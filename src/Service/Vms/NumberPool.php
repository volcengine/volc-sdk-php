<?php

namespace Volc\Service\Vms;

use ArrayObject;
use Exception;
use Volc\Base\V4Curl;

class NumberPool extends V4Curl
{

    /**
     * @throws Exception
     */
    protected function getConfig(string $region): array
    {
        // TODO: Implement getConfig() method.
        switch ($region) {
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
                            'service' => 'comm_number_pool',
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
        'NumberPoolList' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'NumberPoolList',
                    'Version' => '2020-09-01',
                ],
            ]
        ],

        'NumberList' => [
            'url' => '/',
            'method' => 'get',
            'config' => [
                'query' => [
                    'Action' => 'NumberList',
                    'Version' => '2020-09-01',
                ],
            ]
        ],

        'CreateNumberPool' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'CreateNumberPool',
                    'Version' => '2020-09-01',
                ],
            ]
        ],

        'UpdateNumberPool' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'UpdateNumberPool',
                    'Version' => '2020-09-01',
                ],
            ]
        ],

        'EnableOrDisableNumber' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'EnableOrDisableNumber',
                    'Version' => '2021-01-01',
                ],
            ]
        ],

        'SelectNumber' => [
            'url' => '/',
            'method' => 'get',
            'config' => [
                'query' => [
                    'Action' => 'SelectNumber',
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
        } catch (Exception $e) {
            $response = $this->request($api, $configs);
            return (string)$response->getBody();
        }
    }

    public function NumberPoolList(array $data = []): string
    {
        if (empty($data)) {
            $data = new ArrayObject();
        }
        return $this->requestWithRetry("NumberPoolList", ['form_params' => $data]);
    }

    public function NumberList(array $data = []): string
    {
        if (empty($data)) {
            $data = new ArrayObject();
        }
        return $this->requestWithRetry("NumberList", ['query' => $data]);
    }

    public function CreateNumberPool(array $data = []): string
    {
        if (empty($data)) {
            $data = new ArrayObject();
        }
        return $this->requestWithRetry("CreateNumberPool", ['form_params' => $data]);
    }

    public function UpdateNumberPool(array $data = []): string
    {
        if (empty($data)) {
            $data = new ArrayObject();
        }
        return $this->requestWithRetry("UpdateNumberPool", ['form_params' => $data]);
    }

    public function EnableOrDisableNumber(array $data = []): string
    {
        if (empty($data)) {
            $data = new ArrayObject();
        }
        return $this->requestWithRetry("EnableOrDisableNumber", ['form_params' => $data]);
    }

    public function SelectNumber(array $data = []): string
    {
        if (empty($data)) {
            $data = new ArrayObject();
        }
        return $this->requestWithRetry("SelectNumber", ['query' => $data]);
    }
}