<?php

namespace Volc\Service\ImageX;

use Exception;

class ImageXData
{
    /**
     * @param $service ImageX
     * @return void
     */
    static public function AddDataModule($service)
    {
        foreach (["DescribeImageXDomainTrafficData",
                     "DescribeImageXDomainBandwidthData",
                     "DescribeImageXBucketUsage",
                     "DescribeImageXRequestCntUsage",
                     "DescribeImageXBaseOpUsage",
                     "DescribeImageXCompressUsage",
                     "DescribeImageXEdgeRequest",
                     "DescribeImageXHitRateTrafficData",
                     "DescribeImageXHitRateRequestData",
                     "DescribeImageXCDNTopRequestData",
                     "DescribeImageXSummary",
                     "DescribeImageXEdgeRequestBandwidth",
                     "DescribeImageXEdgeRequestTraffic",
                     "DescribeImageXEdgeRequestRegions",
                 ] as $v) {
            $service->apiList[$v] = [
                'method' => 'get',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => $v,
                        'Version' => '2018-08-01',
                    ],
                ],
            ];
        }
        foreach (["DescribeImageXMirrorRequestTraffic",
                     "DescribeImageXMirrorRequestBandwidth",
                     "DescribeImageXMirrorRequestHttpCodeByTime",
                     "DescribeImageXMirrorRequestHttpCodeOverview",
                 ] as $v) {
            $service->apiList[$v] = [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => $v,
                        'Version' => '2018-08-01',
                    ],
                ],
            ];
        }
    }

    /**
     * @param $service ImageX
     * @param $query array
     * @return array
     * @throws Exception
     */
    static public function describeImageXDomainTrafficData($service, $query)
    {
        $query["Action"] = "DescribeImageXDomainTrafficData";
        $query["Version"] = "2018-08-01";
        $queryStr = http_build_query($query);
        $response = $service->request('DescribeImageXDomainTrafficData', ['query' => $queryStr]);
        $responseBody = json_decode((string)$response->getBody(), true);
        if (isset($responseBody["ResponseMetadata"]["Error"])) {
            throw new Exception(sprintf("DescribeImageXDomainTrafficData: request id %s error %s", $responseBody["ResponseMetadata"]["RequestId"], $responseBody["ResponseMetadata"]["Error"]["Message"]));
        }
        return $responseBody["Result"];
    }

    /**
     * @param $service ImageX
     * @param $query array
     * @return array
     * @throws Exception
     */
    static public function describeImageXDomainBandwidthData($service, $query)
    {
        $query["Action"] = "DescribeImageXDomainBandwidthData";
        $query["Version"] = "2018-08-01";
        $queryStr = http_build_query($query);
        $response = $service->request('DescribeImageXDomainBandwidthData', ['query' => $queryStr]);
        $responseBody = json_decode((string)$response->getBody(), true);
        if (isset($responseBody["ResponseMetadata"]["Error"])) {
            throw new Exception(sprintf("DescribeImageXDomainBandwidthData: request id %s error %s", $responseBody["ResponseMetadata"]["RequestId"], $responseBody["ResponseMetadata"]["Error"]["Message"]));
        }
        return $responseBody["Result"];
    }

    /**
     * @param $service ImageX
     * @param $query array
     * @return array
     * @throws Exception
     */
    static public function describeImageXBucketUsage($service, $query)
    {
        $query["Action"] = "DescribeImageXBucketUsage";
        $query["Version"] = "2018-08-01";
        $queryStr = http_build_query($query);
        $response = $service->request('DescribeImageXBucketUsage', ['query' => $queryStr]);
        $responseBody = json_decode((string)$response->getBody(), true);
        if (isset($responseBody["ResponseMetadata"]["Error"])) {
            throw new Exception(sprintf("DescribeImageXBucketUsage: request id %s error %s", $responseBody["ResponseMetadata"]["RequestId"], $responseBody["ResponseMetadata"]["Error"]["Message"]));
        }
        return $responseBody["Result"];
    }

    /**
     * @param $service ImageX
     * @param $query array
     * @return array
     * @throws Exception
     */
    static public function describeImageXRequestCntUsage($service, $query)
    {
        $query["Action"] = "DescribeImageXRequestCntUsage";
        $query["Version"] = "2018-08-01";
        $queryStr = http_build_query($query);
        $response = $service->request('DescribeImageXRequestCntUsage', ['query' => $queryStr]);
        $responseBody = json_decode((string)$response->getBody(), true);
        if (isset($responseBody["ResponseMetadata"]["Error"])) {
            throw new Exception(sprintf("DescribeImageXRequestCntUsage: request id %s error %s", $responseBody["ResponseMetadata"]["RequestId"], $responseBody["ResponseMetadata"]["Error"]["Message"]));
        }
        return $responseBody["Result"];
    }

    /**
     * @param $service ImageX
     * @param $query array
     * @return array
     * @throws Exception
     */
    static public function describeImageXBaseOpUsage($service, $query)
    {
        $query["Action"] = "DescribeImageXBaseOpUsage";
        $query["Version"] = "2018-08-01";
        $queryStr = http_build_query($query);
        $response = $service->request('DescribeImageXBaseOpUsage', ['query' => $queryStr]);
        $responseBody = json_decode((string)$response->getBody(), true);
        if (isset($responseBody["ResponseMetadata"]["Error"])) {
            throw new Exception(sprintf("DescribeImageXBaseOpUsage: request id %s error %s", $responseBody["ResponseMetadata"]["RequestId"], $responseBody["ResponseMetadata"]["Error"]["Message"]));
        }
        return $responseBody["Result"];
    }

    /**
     * @param $service ImageX
     * @param $query array
     * @return array
     * @throws Exception
     */
    static public function describeImageXCompressUsage($service, $query)
    {
        $query["Action"] = "DescribeImageXCompressUsage";
        $query["Version"] = "2018-08-01";
        $queryStr = http_build_query($query);
        $response = $service->request('DescribeImageXCompressUsage', ['query' => $queryStr]);
        $responseBody = json_decode((string)$response->getBody(), true);
        if (isset($responseBody["ResponseMetadata"]["Error"])) {
            throw new Exception(sprintf("DescribeImageXCompressUsage: request id %s error %s", $responseBody["ResponseMetadata"]["RequestId"], $responseBody["ResponseMetadata"]["Error"]["Message"]));
        }
        return $responseBody["Result"];
    }

    /**
     * @param $service ImageX
     * @param $query array
     * @return array
     * @throws Exception
     */
    static public function describeImageXEdgeRequest($service, $query)
    {
        $query["Action"] = "DescribeImageXEdgeRequest";
        $query["Version"] = "2018-08-01";
        $queryStr = http_build_query($query);
        $response = $service->request('DescribeImageXEdgeRequest', ['query' => $queryStr]);
        $responseBody = json_decode((string)$response->getBody(), true);
        if (isset($responseBody["ResponseMetadata"]["Error"])) {
            throw new Exception(sprintf("DescribeImageXEdgeRequest: request id %s error %s", $responseBody["ResponseMetadata"]["RequestId"], $responseBody["ResponseMetadata"]["Error"]["Message"]));
        }
        return $responseBody["Result"];
    }

    /**
     * @param $service ImageX
     * @param $query array
     * @return array
     * @throws Exception
     */
    static public function describeImageXHitRateTrafficData($service, $query)
    {
        $query["Action"] = "DescribeImageXHitRateTrafficData";
        $query["Version"] = "2018-08-01";
        $queryStr = http_build_query($query);
        $response = $service->request('DescribeImageXHitRateTrafficData', ['query' => $queryStr]);
        $responseBody = json_decode((string)$response->getBody(), true);
        if (isset($responseBody["ResponseMetadata"]["Error"])) {
            throw new Exception(sprintf("DescribeImageXHitRateTrafficData: request id %s error %s", $responseBody["ResponseMetadata"]["RequestId"], $responseBody["ResponseMetadata"]["Error"]["Message"]));
        }
        return $responseBody["Result"];
    }

    /**
     * @param $service ImageX
     * @param $query array
     * @return array
     * @throws Exception
     */
    static public function describeImageXHitRateRequestData($service, $query)
    {
        $query["Action"] = "DescribeImageXHitRateRequestData";
        $query["Version"] = "2018-08-01";
        $queryStr = http_build_query($query);
        $response = $service->request('DescribeImageXHitRateRequestData', ['query' => $queryStr]);
        $responseBody = json_decode((string)$response->getBody(), true);
        if (isset($responseBody["ResponseMetadata"]["Error"])) {
            throw new Exception(sprintf("DescribeImageXHitRateRequestData: request id %s error %s", $responseBody["ResponseMetadata"]["RequestId"], $responseBody["ResponseMetadata"]["Error"]["Message"]));
        }
        return $responseBody["Result"];
    }

    /**
     * @param $service ImageX
     * @param $query array
     * @return array
     * @throws Exception
     */
    static public function describeImageXCDNTopRequestData($service, $query)
    {
        $query["Action"] = "DescribeImageXCDNTopRequestData";
        $query["Version"] = "2018-08-01";
        $queryStr = http_build_query($query);
        $response = $service->request('DescribeImageXCDNTopRequestData', ['query' => $queryStr]);
        $responseBody = json_decode((string)$response->getBody(), true);
        if (isset($responseBody["ResponseMetadata"]["Error"])) {
            throw new Exception(sprintf("DescribeImageXCDNTopRequestData: request id %s error %s", $responseBody["ResponseMetadata"]["RequestId"], $responseBody["ResponseMetadata"]["Error"]["Message"]));
        }
        return $responseBody["Result"];
    }

    /**
     * @param $service ImageX
     * @param $query array
     * @return array
     * @throws Exception
     */
    static public function describeImageXSummary($service, $query)
    {
        $query["Action"] = "DescribeImageXSummary";
        $query["Version"] = "2018-08-01";
        $queryStr = http_build_query($query);
        $response = $service->request('DescribeImageXSummary', ['query' => $queryStr]);
        $responseBody = json_decode((string)$response->getBody(), true);
        if (isset($responseBody["ResponseMetadata"]["Error"])) {
            throw new Exception(sprintf("DescribeImageXSummary: request id %s error %s", $responseBody["ResponseMetadata"]["RequestId"], $responseBody["ResponseMetadata"]["Error"]["Message"]));
        }
        return $responseBody["Result"];
    }

    /**
     * @param $service ImageX
     * @param $query array
     * @return array
     * @throws Exception
     */
    static public function describeImageXEdgeRequestBandwidth($service, $query)
    {
        $query["Action"] = "DescribeImageXEdgeRequestBandwidth";
        $query["Version"] = "2018-08-01";
        $queryStr = http_build_query($query);
        $response = $service->request('DescribeImageXEdgeRequestBandwidth', ['query' => $queryStr]);
        $responseBody = json_decode((string)$response->getBody(), true);
        if (isset($responseBody["ResponseMetadata"]["Error"])) {
            throw new Exception(sprintf("DescribeImageXEdgeRequestBandwidth: request id %s error %s", $responseBody["ResponseMetadata"]["RequestId"], $responseBody["ResponseMetadata"]["Error"]["Message"]));
        }
        return $responseBody["Result"];
    }

    /**
     * @param $service ImageX
     * @param $query array
     * @return array
     * @throws Exception
     */
    static public function describeImageXEdgeRequestTraffic($service, $query)
    {
        $query["Action"] = "DescribeImageXEdgeRequestTraffic";
        $query["Version"] = "2018-08-01";
        $queryStr = http_build_query($query);
        $response = $service->request('DescribeImageXEdgeRequestTraffic', ['query' => $queryStr]);
        $responseBody = json_decode((string)$response->getBody(), true);
        if (isset($responseBody["ResponseMetadata"]["Error"])) {
            throw new Exception(sprintf("DescribeImageXEdgeRequestTraffic: request id %s error %s", $responseBody["ResponseMetadata"]["RequestId"], $responseBody["ResponseMetadata"]["Error"]["Message"]));
        }
        return $responseBody["Result"];
    }

    /**
     * @param $service ImageX
     * @param $query array
     * @return array
     * @throws Exception
     */
    static public function describeImageXEdgeRequestRegions($service, $query)
    {
        $query["Action"] = "DescribeImageXEdgeRequestRegions";
        $query["Version"] = "2018-08-01";
        $queryStr = http_build_query($query);
        $response = $service->request('DescribeImageXEdgeRequestRegions', ['query' => $queryStr]);
        $responseBody = json_decode((string)$response->getBody(), true);
        if (isset($responseBody["ResponseMetadata"]["Error"])) {
            throw new Exception(sprintf("DescribeImageXEdgeRequestRegions: request id %s error %s", $responseBody["ResponseMetadata"]["RequestId"], $responseBody["ResponseMetadata"]["Error"]["Message"]));
        }
        return $responseBody["Result"];
    }

    /**
     * @param $service ImageX
     * @param $body array
     * @return array
     * @throws Exception
     */
    static public function describeImageXMirrorRequestTraffic($service, $body)
    {
        $query["Action"] = "DescribeImageXMirrorRequestTraffic";
        $query["Version"] = "2018-08-01";
        $queryStr = http_build_query($query);
        $response = $service->request('DescribeImageXMirrorRequestTraffic', ['query' => $queryStr, 'json' => $body]);
        $responseBody = json_decode((string)$response->getBody(), true);
        if (isset($responseBody["ResponseMetadata"]["Error"])) {
            throw new Exception(sprintf("DescribeImageXMirrorRequestTraffic: request id %s error %s", $responseBody["ResponseMetadata"]["RequestId"], $responseBody["ResponseMetadata"]["Error"]["Message"]));
        }
        return $responseBody["Result"];
    }

    /**
     * @param $service ImageX
     * @param $body array
     * @return array
     * @throws Exception
     */
    static public function describeImageXMirrorRequestBandwidth($service, $body)
    {
        $query["Action"] = "DescribeImageXMirrorRequestBandwidth";
        $query["Version"] = "2018-08-01";
        $queryStr = http_build_query($query);
        $response = $service->request('DescribeImageXMirrorRequestBandwidth', ['query' => $queryStr, 'json' => $body]);
        $responseBody = json_decode((string)$response->getBody(), true);
        if (isset($responseBody["ResponseMetadata"]["Error"])) {
            throw new Exception(sprintf("DescribeImageXMirrorRequestBandwidth: request id %s error %s", $responseBody["ResponseMetadata"]["RequestId"], $responseBody["ResponseMetadata"]["Error"]["Message"]));
        }
        return $responseBody["Result"];
    }

    /**
     * @param $service ImageX
     * @param $body array
     * @return array
     * @throws Exception
     */
    static public function describeImageXMirrorRequestHttpCodeByTime($service, $body)
    {
        $query["Action"] = "DescribeImageXMirrorRequestHttpCodeByTime";
        $query["Version"] = "2018-08-01";
        $queryStr = http_build_query($query);
        $response = $service->request('DescribeImageXMirrorRequestHttpCodeByTime', ['query' => $queryStr, 'json' => $body]);
        $responseBody = json_decode((string)$response->getBody(), true);
        if (isset($responseBody["ResponseMetadata"]["Error"])) {
            throw new Exception(sprintf("DescribeImageXMirrorRequestHttpCodeByTime: request id %s error %s", $responseBody["ResponseMetadata"]["RequestId"], $responseBody["ResponseMetadata"]["Error"]["Message"]));
        }
        return $responseBody["Result"];
    }

    /**
     * @param $service ImageX
     * @param $body array
     * @return array
     * @throws Exception
     */
    static public function describeImageXMirrorRequestHttpCodeOverview($service, $body)
    {
        $query["Action"] = "DescribeImageXMirrorRequestHttpCodeOverview";
        $query["Version"] = "2018-08-01";
        $queryStr = http_build_query($query);
        $response = $service->request('DescribeImageXMirrorRequestHttpCodeOverview', ['query' => $queryStr, 'json' => $body]);
        $responseBody = json_decode((string)$response->getBody(), true);
        if (isset($responseBody["ResponseMetadata"]["Error"])) {
            throw new Exception(sprintf("DescribeImageXMirrorRequestHttpCodeOverview: request id %s error %s", $responseBody["ResponseMetadata"]["RequestId"], $responseBody["ResponseMetadata"]["Error"]["Message"]));
        }
        return $responseBody["Result"];
    }

}
