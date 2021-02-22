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
                'timeout' => 10.0,
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
    ];
}
