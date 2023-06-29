<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: vod/business/vod_cdn.proto

namespace Volc\Service\Vod\Models\GPBMetadata;

class VodCdn
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \Volc\Service\Vod\Models\GPBMetadata\VodCommon::initOnce();
        $pool->internalAddGeneratedFile(
            '
�!
vod/business/vod_cdn.protoVolcengine.Vod.Models.Business"�
VodDomainConfigInfo
	SpaceName (	P
PlayInstanceInfo (26.Volcengine.Vod.Models.Business.VodDomainInstanceInfosQ
ImageInstanceInfo (26.Volcengine.Vod.Models.Business.VodDomainInstanceInfos
DefaultPlayDomain (	
Total (
Offset ("�
VodDomainInstanceInfosL
ByteInstances (25.Volcengine.Vod.Models.Business.VodDomainInstanceInfoM
OtherInstances (25.Volcengine.Vod.Models.Business.VodDomainInstanceInfo"�
VodDomainInstanceInfo

InstanceId (	?
Domains (2..Volcengine.Vod.Models.Business.VodDomainoInfo
CanSelfEditing (
ConfigStatus (	"�
VodDomainoInfo
Domain (	
Cname (	
ConfigStatus (	
CnameStatus (	
Status (	M
Certificate (28.Volcengine.Vod.Models.Business.VodDomainCertificateInfo

CreateTime (	

UpdateTime (	
Region	 (	D
Sources
 (23.Volcengine.Vod.Models.Business.VodDomainSourceInfo

LockStatus (	
	CDNStatus (	"�
VodDomainCertificateInfo
CertificateId (	
CertificateName (	
CertificatePub (	
CertificatePri (	
HttpsStatus (	
	ExpiredAt (	"(
VodCreateCdnTaskResult
TaskId (	"�
VodContentInfo
ItemId (	
Url (	
Status (	
TaskType (	
CreateTimestamp (
TaskId (	
Message (	"�
VodCdnTaskResult

TotalCount (
PageNum (
PageSize (D
ContentInfos (2..Volcengine.Vod.Models.Business.VodContentInfo"
VodCdnAccessLogElement
DownloadUrl (	
FileSize (
FileName (	
StartTimestamp (
EndTimestamp ("n
VodCdnAccessLogInfo
Domain (	G
LogList (26.Volcengine.Vod.Models.Business.VodCdnAccessLogElement"^
VodListCdnAccessLogResultA
Logs (23.Volcengine.Vod.Models.Business.VodCdnAccessLogInfo"B
VodCdnTopAccessUrlElement
Url (	

Pv (
Flux ("k
VodListCdnTopAccessUrlResultK
UrlInfos (29.Volcengine.Vod.Models.Business.VodCdnTopAccessUrlElement"3
VodBandwidthData
Time (	
	Bandwidth ("�
\'VodDescribeVodDomainBandwidthDataResult

DomainList (	
	StartTime (	
EndTime (	
Aggregation (
BandwidthType (	
PeakBandwidth (
PeakBandwidthTime (	K
BandwidthDataList (20.Volcengine.Vod.Models.Business.VodBandwidthData"�
VodCdnStatisticsData
Name (	
Metric (	
DataType (	8
Points (2(.Volcengine.Vod.Models.Business.VodPoint
Region (	
Isp (	
BillingRegion (	"�
VodCdnStatisticsCommonResultC
Datas (24.Volcengine.Vod.Models.Business.VodCdnStatisticsData
NoPermissionDomains (	"H
VodCdnIpInfo

Ip (	
CdnIp (
Location (	
Isp (	"V
VodDescribeIpInfoResult;
Infos (2,.Volcengine.Vod.Models.Business.VodCdnIpInfo"/
VodTrafficData
Time (	
Traffic ("�
%VodDescribeVodDomainTrafficDataResult

DomainList (	
	StartTime (	
EndTime (	
Aggregation (
TrafficType (	
TotalTraffic (G
TrafficDataList (2..Volcengine.Vod.Models.Business.VodTrafficData"�
VodDomainSourceInfoU
SourceStationType (2:.Volcengine.Vod.Models.Business.VodDomainSourceStationTypec
SourceStationAddressType (2A.Volcengine.Vod.Models.Business.VodDomainSourceStationAddressType
Origin (	I
Bucket (29.Volcengine.Vod.Models.Business.VodDomainOriginBucketInfo"_
VodDomainOriginBucketInfo

BucketName (	
BucketSourceType (	
BucketRegion (	"+
VodSubmitBlockTasksResult
TaskID (	"�
VodGetContentBlockTasksResult
Total (
PageNum (
PageSize (9
Data (2+.Volcengine.Vod.Models.Business.ContentTask"`
ContentTask
Url (	
Status (	
TaskType (	

CreateTime (
TaskID (	*�
VodDomainSourceStationType\'
#UndefinedVodDomainSourceStationType !
VodVodDomainSourceStationType(
$ThirdPartyVodDomainSourceStationType*�
!VodDomainSourceStationAddressType.
*UndefinedVodDomainSourceStationAddressType +
\'DomainVodDomainSourceStationAddressType\'
#IPVodDomainSourceStationAddressTypeB�
)com.volcengine.service.vod.model.businessBVodCdnPZAgithub.com/volcengine/volc-sdk-golang/service/vod/models/business��� � Volc\\Service\\Vod\\Models\\Business�#Volc\\Service\\Vod\\Models\\GPBMetadatabproto3'
        , true);

        static::$is_initialized = true;
    }
}

