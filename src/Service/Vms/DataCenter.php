<?php

namespace Volc\Service\Vms;

use ArrayObject;
use Exception;
use Volc\Base\V4Curl;

class DataCenter extends V4Curl
{

    /**
     * @throws Exception
     */
    protected function getConfig(string $region): array
    {
        // TODO: Implement getConfig() method.
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
                            'service' => 'volc_datacenter_http',
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
        'QueryCallRecordMsg' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'QueryCallRecordMsg',
                    'Version' => '2022-01-01',
                ],
            ]
        ],

        'QueryAudioRecordFileUrl' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'QueryAudioRecordFileUrl',
                    'Version' => '2020-09-01',
                ],
            ]
        ],

        'QueryAudioRecordToTextFileUrl' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'QueryAudioRecordToTextFileUrl',
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

    public function QueryCallRecordMsg(array $data = []): string
    {
        if (empty($data)){
            $data = new ArrayObject();
        }
        return $this->requestWithRetry("QueryCallRecordMsg", ['form_params' => $data]);
    }

    public function QueryAudioRecordFileUrl(array $data = []): string
    {
        if (empty($data)){
            $data = new ArrayObject();
        }
        return $this->requestWithRetry("QueryAudioRecordFileUrl", ['form_params' => $data]);
    }

    public function QueryAudioRecordToTextFileUrl(array $data = []): string
    {
        if (empty($data)){
            $data = new ArrayObject();
        }
        return $this->requestWithRetry("QueryAudioRecordToTextFileUrl", ['form_params' => $data]);
    }
}