<?php

namespace Volc\Service;

use Volc\Base\V4Curl;

class Live extends V4Curl
{
    protected $apiList = [
        'ListCommonTransPresetDetail' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'ListCommonTransPresetDetail',
                    'Version' => '2020-08-01',
                ],
            ]
        ],
        'UpdateCallback' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'UpdateCallback',
                    'Version' => '2020-08-01',
                ],
            ]
        ],
        'DescribeCallback' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'DescribeCallback',
                    'Version' => '2020-08-01',
                ],
            ]
        ],
        'DeleteCallback' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'DeleteCallback',
                    'Version' => '2020-08-01',
                ],
            ]
        ],
        'CreateDomain' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'CreateDomain',
                    'Version' => '2020-08-01',
                ],
            ]
        ],
        'DeleteDomain' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'DeleteDomain',
                    'Version' => '2020-08-01',
                ],
            ]
        ],
        'ListDomainDetail' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'ListDomainDetail',
                    'Version' => '2020-08-01',
                ],
            ]
        ],
        'DescribeDomain' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'DescribeDomain',
                    'Version' => '2020-08-01',
                ],
            ]
        ],
        'EnableDomain' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'EnableDomain',
                    'Version' => '2020-08-01',
                ],
            ]
        ],
        'DisableDomain' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'DisableDomain',
                    'Version' => '2020-08-01',
                ],
            ]
        ],
        'ManagerPullPushDomainBind' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'ManagerPullPushDomainBind',
                    'Version' => '2020-08-01',
                ],
            ]
        ],
        'UpdateAuthKey' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'UpdateAuthKey',
                    'Version' => '2020-08-01',
                ],
            ]
        ],
        'EnableAuth' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'EnableAuth',
                    'Version' => '2020-08-01',
                ],
            ]
        ],
        'DisableAuth' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'DisableAuth',
                    'Version' => '2020-08-01',
                ],
            ]
        ],
        'DescribeAuth' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'DescribeAuth',
                    'Version' => '2020-08-01',
                ],
            ]
        ],
        'ForbidStream' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'ForbidStream',
                    'Version' => '2020-08-01',
                ],
            ]
        ],
        'ResumeStream' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'ResumeStream',
                    'Version' => '2020-08-01',
                ],
            ]
        ],
        'ListCert' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'ListCert',
                    'Version' => '2020-08-01',
                ],
            ]
        ],
        'CreateCert' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'CreateCert',
                    'Version' => '2020-08-01',
                ],
            ]
        ],
        'DescribeCertDetailSecret' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'DescribeCertDetailSecret',
                    'Version' => '2020-08-01',
                ],
            ]
        ],
        'UpdateCert' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'UpdateCert',
                    'Version' => '2020-08-01',
                ],
            ]
        ],
        'BindCert' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'BindCert',
                    'Version' => '2020-08-01',
                ],
            ]
        ],
        'UnbindCert' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'UnbindCert',
                    'Version' => '2020-08-01',
                ],
            ]
        ],
        'DeleteCert' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'DeleteCert',
                    'Version' => '2020-08-01',
                ],
            ]
        ],
        'UpdateReferer' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'UpdateReferer',
                    'Version' => '2020-08-01',
                ],
            ]
        ],
        'DeleteReferer' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'DeleteReferer',
                    'Version' => '2020-08-01',
                ],
            ]
        ],
        'DescribeReferer' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'DescribeReferer',
                    'Version' => '2020-08-01',
                ],
            ]
        ],
        'CreateRecordPreset' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'CreateRecordPreset',
                    'Version' => '2020-08-01',
                ],
            ]
        ],
        'UpdateRecordPreset' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'UpdateRecordPreset',
                    'Version' => '2020-08-01',
                ],
            ]
        ],
        'DeleteRecordPreset' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'DeleteRecordPreset',
                    'Version' => '2020-08-01',
                ],
            ]
        ],
        'ListVhostRecordPreset' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'ListVhostRecordPreset',
                    'Version' => '2020-08-01',
                ],
            ]
        ],
        'CreateTranscodePreset' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'CreateTranscodePreset',
                    'Version' => '2020-08-01',
                ],
            ]
        ],
        'UpdateTranscodePreset' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'UpdateTranscodePreset',
                    'Version' => '2020-08-01',
                ],
            ]
        ],
        'DeleteTranscodePreset' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'DeleteTranscodePreset',
                    'Version' => '2020-08-01',
                ],
            ]
        ],
        'ListVhostTransCodePreset' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'ListVhostTransCodePreset',
                    'Version' => '2020-08-01',
                ],
            ]
        ],
        'CreateSnapshotPreset' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'CreateSnapshotPreset',
                    'Version' => '2020-08-01',
                ],
            ]
        ],
        'UpdateSnapshotPreset' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'UpdateSnapshotPreset',
                    'Version' => '2020-08-01',
                ],
            ]
        ],
        'DeleteSnapshotPreset' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'DeleteSnapshotPreset',
                    'Version' => '2020-08-01',
                ],
            ]
        ],
        'ListVhostSnapshotPreset' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'ListVhostSnapshotPreset',
                    'Version' => '2020-08-01',
                ],
            ]
        ],
    ];

    public function __construct()
    {
        $this->region = func_get_arg(0);
        parent::__construct($this->region);
    }

    protected function getConfig(string $region = 'cn-north-1'): array
    {
        return [
            'host' => "https://live.volcengineapi.com",
            'config' => [
                'timeout' => 30.0,
                'headers' => [
                    'Accept' => 'application/json'
                ],
                'v4_credentials' => [
                    'region' => $region,
                    'service' => 'live',
                ],
            ],
        ];
    }

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

    public function listCommonTransPresetDetail(array $query = []): string
    {
        return $this->requestWithRetry("ListCommonTransPresetDetail", $query);
    }

    public function updateCallback(array $query = []): string
    {
        return $this->requestWithRetry("UpdateCallback", $query);
    }

    public function describeCallback(array $query = []): string
    {
        return $this->requestWithRetry("DescribeCallback", $query);
    }

    public function deleteCallback(array $query = []): string
    {
        return $this->requestWithRetry("DescribeCallback", $query);
    }

    public function createDomain(array $query = []): string
    {
        return $this->requestWithRetry("CreateDomain", $query);
    }

    public function deleteDomain(array $query = []): string
    {
        return $this->requestWithRetry("DeleteDomain", $query);
    }

    public function listDomainDetail(array $query = []): string
    {
        return $this->requestWithRetry("ListDomainDetail", $query);
    }

    public function describeDomain(array $query = []): string
    {
        return $this->requestWithRetry("DescribeDomain", $query);
    }

    public function enableDomain(array $query = []): string
    {
        return $this->requestWithRetry("EnableDomain", $query);
    }

    public function disableDomain(array $query = []): string
    {
        return $this->requestWithRetry("DisableDomain", $query);
    }

    public function managerPullPushDomainBind(array $query = []): string
    {
        return $this->requestWithRetry("ManagerPullPushDomainBind", $query);
    }

    public function updateAuthKey(array $query = []): string
    {
        return $this->requestWithRetry("UpdateAuthKey", $query);
    }

    public function enableAuth(array $query = []): string
    {
        return $this->requestWithRetry("EnableAuth", $query);
    }

    public function disableAuth(array $query = []): string
    {
        return $this->requestWithRetry("DisableAuth", $query);
    }

    public function describeAuth(array $query = []): string
    {
        return $this->requestWithRetry("DescribeAuth", $query);
    }

    public function forbidStream(array $query = []): string
    {
        return $this->requestWithRetry("ForbidStream", $query);
    }

    public function resumeStream(array $query = []): string
    {
        return $this->requestWithRetry("ResumeStream", $query);
    }

    public function listCert(array $query = []): string
    {
        return $this->requestWithRetry("ListCert", $query);
    }

    public function createCert(array $query = []): string
    {
        return $this->requestWithRetry("CreateCert", $query);
    }

    public function describeCertDetailSecret(array $query = []): string
    {
        return $this->requestWithRetry("DescribeCertDetailSecret", $query);
    }

    public function updateCert(array $query = []): string
    {
        return $this->requestWithRetry("UpdateCert", $query);
    }

    public function bindCert(array $query = []): string
    {
        return $this->requestWithRetry("BindCert", $query);
    }

    public function unbindCert(array $query = []): string
    {
        return $this->requestWithRetry("UnbindCert", $query);
    }

    public function deleteCert(array $query = []): string
    {
        return $this->requestWithRetry("DeleteCert", $query);
    }

    public function updateReferer(array $query = []): string
    {
        return $this->requestWithRetry("UpdateReferer", $query);
    }

    public function deleteReferer(array $query = []): string
    {
        return $this->requestWithRetry("DeleteReferer", $query);
    }

    public function describeReferer(array $query = []): string
    {
        return $this->requestWithRetry("DescribeReferer", $query);
    }

    public function createRecordPreset(array $query = []): string
    {
        return $this->requestWithRetry("CreateRecordPreset", $query);
    }

    public function updateRecordPreset(array $query = []): string
    {
        return $this->requestWithRetry("UpdateRecordPreset", $query);
    }

    public function deleteRecordPreset(array $query = []): string
    {
        return $this->requestWithRetry("DeleteRecordPreset", $query);
    }

    public function listVhostRecordPreset(array $query = []): string
    {
        return $this->requestWithRetry("ListVhostRecordPreset", $query);
    }

    public function createTranscodePreset(array $query = []): string
    {
        return $this->requestWithRetry("CreateTranscodePreset", $query);
    }

    public function updateTranscodePreset(array $query = []): string
    {
        return $this->requestWithRetry("UpdateTranscodePreset", $query);
    }

    public function deleteTranscodePreset(array $query = []): string
    {
        return $this->requestWithRetry("DeleteTranscodePreset", $query);
    }

    public function listVhostTransCodePreset(array $query = []): string
    {
        return $this->requestWithRetry("ListVhostTransCodePreset", $query);
    }

    public function createSnapshotPreset(array $query = []): string
    {
        return $this->requestWithRetry("CreateSnapshotPreset", $query);
    }

    public function updateSnapshotPreset(array $query = []): string
    {
        return $this->requestWithRetry("UpdateSnapshotPreset", $query);
    }

    public function deleteSnapshotPreset(array $query = []): string
    {
        return $this->requestWithRetry("DeleteSnapshotPreset", $query);
    }

    public function listVhostSnapshotPreset(array $query = []): string
    {
        return $this->requestWithRetry("ListVhostSnapshotPreset", $query);
    }
}
