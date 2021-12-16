<?php

namespace Volc\Service;

use Volc\Base\V4Curl;

class Cdn extends V4Curl
{

    protected $apiList = [
        'SubmitRefreshTask' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'SubmitRefreshTask',
                    'Version' => '2021-03-01',
                ],
            ]
        ],
        'SubmitPreloadTask' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'SubmitPreloadTask',
                    'Version' => '2021-03-01',
                ],
            ]
        ],
        'DescribeContentTasks' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'DescribeContentTasks',
                    'Version' => '2021-03-01',
                ],
            ]
        ],
        'DescribeContentQuota' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'DescribeContentQuota',
                    'Version' => '2021-03-01',
                ],
            ]
        ],
        'DescribeCdnData' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'timeout' => 60.0,
                'query' => [
                    'Action' => 'DescribeCdnData',
                    'Version' => '2021-03-01',
                ],
            ]
        ],
        'DescribeCdnOriginData' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'timeout' => 60.0,
                'query' => [
                    'Action' => 'DescribeCdnOriginData',
                    'Version' => '2021-03-01',
                ],
            ]
        ],
        'DescribeCdnRegionAndIsp' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'timeout' => 60.0,
                'query' => [
                    'Action' => 'DescribeCdnRegionAndIsp',
                    'Version' => '2021-03-01',
                ],
            ]
        ],
        'DescribeCdnDomainTopData' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'timeout' => 60.0,
                'query' => [
                    'Action' => 'DescribeCdnDomainTopData',
                    'Version' => '2021-03-01',
                ],
            ]
        ],
        'DescribeCdnDataDetail' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'timeout' => 60.0,
                'query' => [
                    'Action' => 'DescribeCdnDataDetail',
                    'Version' => '2021-03-01',
                ],
            ]
        ],
        'DescribeCdnAccountingData' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'timeout' => 60.0,
                'query' => [
                    'Action' => 'DescribeCdnAccountingData',
                    'Version' => '2021-03-01',
                ],
            ]
        ],
        'DescribeCdnAccessLog' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'timeout' => 60.0,
                'query' => [
                    'Action' => 'DescribeCdnAccessLog',
                    'Version' => '2021-03-01',
                ],
            ]
        ],
        'StartCdnDomain' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'StartCdnDomain',
                    'Version' => '2021-03-01',
                ],
            ]
        ],
        'StopCdnDomain' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'StopCdnDomain',
                    'Version' => '2021-03-01',
                ],
            ]
        ],
        'DeleteCdnDomain' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'DeleteCdnDomain',
                    'Version' => '2021-03-01',
                ],
            ]
        ],
        'ListCdnDomains' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'ListCdnDomains',
                    'Version' => '2021-03-01',
                ],
            ]
        ],
        'DescribeCdnUpperIp' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'timeout' => 60.0,
                'query' => [
                    'Action' => 'DescribeCdnUpperIp',
                    'Version' => '2021-03-01',
                ],
            ]
        ],
    ];

    public function __construct()
    {
        $this->region = func_get_arg(0);
        parent::__construct($this->region);
    }

    protected function getConfig(string $region = 'cn-north-1')
    {
        return [
            'host' => "https://cdn.volcengineapi.com",
            'config' => [
                'timeout' => 30.0,
                'headers' => [
                    'Accept' => 'application/json'
                ],
                'v4_credentials' => [
                    'region' => $region,
                    'service' => 'CDN',
                ],
            ],
        ];
    }

    public function requestWithRetry(string $api, array $configs): string
    {
        try {
            $response = $this->request($api, $configs);
            return $response->getBody()->getContents();
        } catch (\Exception $e) {
            $response = $this->request($api, $configs);
            return $response->getBody()->getContents();
        }
    }

    public function submitRefreshTask(array $query = []): string
    {
        return $this->requestWithRetry("SubmitRefreshTask", $query);
    }

    public function submitPreloadTask(array $query = []): string
    {
        return $this->requestWithRetry("SubmitPreloadTask", $query);
    }

    public function describeContentTasks(array $query = []): string
    {
        return $this->requestWithRetry("DescribeContentTasks", $query);
    }

    public function describeContentQuota(): string
    {
        return $this->requestWithRetry("DescribeContentQuota", []);
    }

    public function describeCdnData(array $query = []): string
    {
        return $this->requestWithRetry("DescribeCdnData", $query);
    }

    public function describeCdnOriginData(array $query = []): string
    {
        return $this->requestWithRetry("DescribeCdnOriginData", $query);
    }

    public function describeCdnRegionAndIsp(array $query = []): string
    {
        return $this->requestWithRetry("DescribeCdnRegionAndIsp", $query);
    }

    public function describeCdnDataDetail(array $query = []): string
    {
        return $this->requestWithRetry("DescribeCdnDataDetail", $query);
    }

    public function describeCdnDomainTopData(array $query = []): string
    {
        return $this->requestWithRetry("DescribeCdnDomainTopData", $query);
    }

    public function describeCdnAccountingData(array $query = []): string
    {
        return $this->requestWithRetry("DescribeCdnAccountingData", $query);
    }

    public function describeCdnAccessLog(array $query = []): string
    {
        return $this->requestWithRetry("DescribeCdnAccessLog", $query);
    }

    public function startCdnDomain(array $query = []): string
    {
        return $this->requestWithRetry("StartCdnDomain", $query);
    }

    public function stopCdnDomain(array $query = []): string
    {
        return $this->requestWithRetry("StopCdnDomain", $query);
    }

    public function deleteCdnDomain(array $query = []): string
    {
        return $this->requestWithRetry("DeleteCdnDomain", $query);
    }

    public function listCdnDomains(array $query = []): string
    {
        return $this->requestWithRetry("ListCdnDomains", $query);
    }

    public function describeCdnUpperIp(array $query = []): string
    {
        return $this->requestWithRetry("DescribeCdnUpperIp", $query);
    }
}


