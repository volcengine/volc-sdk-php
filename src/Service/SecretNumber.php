<?php

namespace Volc\Service;

use ArrayObject;
use Exception;
use Volc\Base\V4Curl;

class SecretNumber extends V4Curl
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
                            'service' => 'volc_secret_number',
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
        'BindAXB' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'BindAXB',
                    'Version' => '2020-09-01',
                ],
            ]
        ],

        'SelectNumberAndBindAXB' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'SelectNumberAndBindAXB',
                    'Version' => '2020-09-01',
                ],
            ]
        ],

        'UnbindAXB' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'UnbindAXB',
                    'Version' => '2020-09-01',
                ],
            ]
        ],

        'QuerySubscription' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'QuerySubscription',
                    'Version' => '2020-09-01',
                ],
            ]
        ],

        'QuerySubscriptionForList' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'QuerySubscriptionForList',
                    'Version' => '2020-09-01',
                ],
            ]
        ],

        'UpgradeAXToAXB' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'UpgradeAXToAXB',
                    'Version' => '2020-09-01',
                ],
            ]
        ],

        'UpdateAXB' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'UpdateAXB',
                    'Version' => '2020-09-01',
                ],
            ]
        ],

        'BindAXN' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'BindAXN',
                    'Version' => '2020-09-01',
                ],
            ]
        ],

        'UpdateAXN' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'UpdateAXN',
                    'Version' => '2020-09-01',
                ],
            ]
        ],

        'UnbindAXN' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'UnbindAXN',
                    'Version' => '2020-09-01',
                ],
            ]
        ],

        'Click2Call' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'Click2Call',
                    'Version' => '2021-09-01',
                ],
            ]
        ],

        'Click2CallLite' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'Click2CallLite',
                    'Version' => '2021-09-01',
                ],
            ]
        ],

        'SelectNumberAndBindAXN' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'SelectNumberAndBindAXN',
                    'Version' => '2020-09-01',
                ],
            ]
        ],

        'BindAXNE' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'BindAXNE',
                    'Version' => '2020-09-01',
                ],
            ]
        ],

        'UnbindAXNE' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'UnbindAXNE',
                    'Version' => '2020-09-01',
                ],
            ]
        ],

        'UpdateAXNE' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'UpdateAXNE',
                    'Version' => '2020-09-01',
                ],
            ]
        ],

        'BindAXBForAXNE' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'BindAXBForAXNE',
                    'Version' => '2020-09-01',
                ],
            ]
        ],

        'BindAXYB' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'BindAXYB',
                    'Version' => '2020-09-01',
                ],
            ]
        ],

        'BindYBForAXYB' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'BindYBForAXYB',
                    'Version' => '2020-09-01',
                ],
            ]
        ],

        'UpdateAXYB' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'UpdateAXYB',
                    'Version' => '2020-09-01',
                ],
            ]
        ],

        'UnbindAXYB' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'UnbindAXYB',
                    'Version' => '2020-09-01',
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

    public function BindAXB(array $data = []): string
    {
        if (empty($data)){
            $data = new ArrayObject();
        }
        return $this->requestWithRetry("BindAXB", ['form_params' => $data]);
    }

    public function SelectNumberAndBindAXB(array $data = []): string
    {
        if (empty($data)){
            $data = new ArrayObject();
        }
        return $this->requestWithRetry("SelectNumberAndBindAXB", ['form_params' => $data]);
    }

    public function UnbindAXB(array $data = []): string
    {
        if (empty($data)){
            $data = new ArrayObject();
        }
        return $this->requestWithRetry("UnbindAXB", ['form_params' => $data]);
    }

    public function QuerySubscription(array $data = []): string
    {
        if (empty($data)){
            $data = new ArrayObject();
        }
        return $this->requestWithRetry("QuerySubscription", ['form_params' => $data]);
    }

    public function QuerySubscriptionForList(array $data = []): string
    {
        if (empty($data)){
            $data = new ArrayObject();
        }
        return $this->requestWithRetry("QuerySubscriptionForList", ['form_params' => $data]);
    }

    public function UpgradeAXToAXB(array $data = []): string
    {
        if (empty($data)){
            $data = new ArrayObject();
        }
        return $this->requestWithRetry("UpgradeAXToAXB", ['form_params' => $data]);
    }

    public function UpdateAXB(array $data = []): string
    {
        if (empty($data)){
            $data = new ArrayObject();
        }
        return $this->requestWithRetry("UpdateAXB", ['form_params' => $data]);
    }

    public function BindAXN(array $data = []): string
    {
        if (empty($data)){
            $data = new ArrayObject();
        }
        return $this->requestWithRetry("BindAXN", ['form_params' => $data]);
    }

    public function UpdateAXN(array $data = []): string
    {
        if (empty($data)){
            $data = new ArrayObject();
        }
        return $this->requestWithRetry("UpdateAXN", ['form_params' => $data]);
    }

    public function UnbindAXN(array $data = []): string
    {
        if (empty($data)){
            $data = new ArrayObject();
        }
        return $this->requestWithRetry("UnbindAXN", ['form_params' => $data]);
    }

    public function Click2Call(array $data = []): string
    {
        if (empty($data)){
            $data = new ArrayObject();
        }
        return $this->requestWithRetry("Click2Call", ['form_params' => $data]);
    }

    public function Click2CallLite(array $data = []): string
    {
        if (empty($data)){
            $data = new ArrayObject();
        }
        return $this->requestWithRetry("Click2CallLite", ['form_params' => $data]);
    }

    public function SelectNumberAndBindAXN(array $data = []): string
    {
        if (empty($data)){
            $data = new ArrayObject();
        }
        return $this->requestWithRetry("SelectNumberAndBindAXN", ['form_params' => $data]);
    }

    public function BindAXNE(array $data = []): string
    {
        if (empty($data)){
            $data = new ArrayObject();
        }
        return $this->requestWithRetry("BindAXNE", ['form_params' => $data]);
    }

    public function UnbindAXNE(array $data = []): string
    {
        if (empty($data)){
            $data = new ArrayObject();
        }
        return $this->requestWithRetry("UnbindAXNE", ['form_params' => $data]);
    }

    public function UpdateAXNE(array $data = []): string
    {
        if (empty($data)){
            $data = new ArrayObject();
        }
        return $this->requestWithRetry("UpdateAXNE", ['form_params' => $data]);
    }

    public function BindAXBForAXNE(array $data = []): string
    {
        if (empty($data)){
            $data = new ArrayObject();
        }
        return $this->requestWithRetry("BindAXBForAXNE", ['form_params' => $data]);
    }

    public function BindAXYB(array $data = []): string
    {
        if (empty($data)){
            $data = new ArrayObject();
        }
        return $this->requestWithRetry("BindAXYB", ['form_params' => $data]);
    }

    public function BindYBForAXYB(array $data = []): string
    {
        if (empty($data)){
            $data = new ArrayObject();
        }
        return $this->requestWithRetry("BindYBForAXYB", ['form_params' => $data]);
    }

    public function UpdateAXYB(array $data = []): string
    {
        if (empty($data)){
            $data = new ArrayObject();
        }
        return $this->requestWithRetry("UpdateAXYB", ['form_params' => $data]);
    }

    public function UnbindAXYB(array $data = []): string
    {
        if (empty($data)){
            $data = new ArrayObject();
        }
        return $this->requestWithRetry("UnbindAXYB", ['form_params' => $data]);
    }
}