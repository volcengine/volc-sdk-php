<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: volcengine/vod/business/vod_cdn.proto

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
�4
%volcengine/vod/business/vod_cdn.protoVolcengine.Vod.Models.Business"�
VodDomainConfigInfo
	SpaceName (	P
PlayInstanceInfo (26.Volcengine.Vod.Models.Business.VodDomainInstanceInfosQ
ImageInstanceInfo (26.Volcengine.Vod.Models.Business.VodDomainInstanceInfos
DefaultPlayDomain (	
Total (
Offset ("�
VodDomainInstanceInfosL
ByteInstances (25.Volcengine.Vod.Models.Business.VodDomainInstanceInfoM
OtherInstances (25.Volcengine.Vod.Models.Business.VodDomainInstanceInfo"X
VodDomainInstanceInfo?
Domains (2..Volcengine.Vod.Models.Business.VodDomainoInfo"�
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
	CdnStatus (	"�
VodDomainCertificateInfo
CertificateId (	
CertificateName (	
CertificatePub (	
CertificatePri (	
HttpsStatus (	
	ExpiredAt (	&
CertificateCenterCertificateId (	"(
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
UrlInfos (29.Volcengine.Vod.Models.Business.VodCdnTopAccessUrlElement"8
VodCdnTopAccessElement
ItemKey (	
Value ("f
VodListCdnTopAccessResultI
	ItemInfos (26.Volcengine.Vod.Models.Business.VodCdnTopAccessElement"3
VodBandwidthData
Time (	
	Bandwidth ("�
\'VodDescribeVodDomainBandwidthDataResult

DomainList (	
DomainInSpaceList (	
	StartTime (	
EndTime (	
Aggregation (
BandwidthType (	
Area (	

RegionList (	
PeakBandwidth	 (
PeakBandwidthTime
 (	
Peak95Bandwidth (
Peak95BandwidthTime (	K
BandwidthDataList (20.Volcengine.Vod.Models.Business.VodBandwidthData"�
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
Traffic ("�
%VodDescribeVodDomainTrafficDataResult

DomainList (	
DomainInSpaceList (	
	StartTime (	
EndTime (	
Aggregation (
TrafficType (	
Area (	

RegionList (	
TotalTraffic	 (G
TrafficDataList
 (2..Volcengine.Vod.Models.Business.VodTrafficData"�
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
TaskID (	"
IPv6
Switch ("�

OriginLine
Address (	
HttpPort (	
	HttpsPort (	
InstanceType (	

OriginHost (	

OriginType (	
Weight (	"O
OriginAction?
OriginLines (2*.Volcengine.Vod.Models.Business.OriginLine"S
CdnOriginRuleB
OriginAction (2,.Volcengine.Vod.Models.Business.OriginAction"w
VodResponseHeaderInstance
Action (	
Key (	
	ValueType (	
AccessOriginControl (
Value (	"u
VodResponseHeaderActionZ
ResponseHeaderInstances (29.Volcengine.Vod.Models.Business.VodResponseHeaderInstance"n
VodResponseHeaderRuleU
ResponseHeaderAction (27.Volcengine.Vod.Models.Business.VodResponseHeaderAction"i
VodResponseHeaderControlM
ResponseHeader (25.Volcengine.Vod.Models.Business.VodResponseHeaderRule"j
VodDomainConfigW
ResponseHeaderControl (28.Volcengine.Vod.Models.Business.VodResponseHeaderControl"q
VodDomainBasicInfo
Domain (	
Cname (	
ConfigStatus (	

CreateTime (	

LockStatus (	"�
VodDescribeDomainConfigResult
	SpaceName (	B
Domain (22.Volcengine.Vod.Models.Business.VodDomainBasicInfo?
Config (2/.Volcengine.Vod.Models.Business.VodDomainConfig"�
VodPCDNDomainConfigInfo
	SpaceName (	T
PCDNInstanceInfo (2:.Volcengine.Vod.Models.Business.VodPCDNDomainInstanceInfos
Total (
Offset ("`
VodPCDNDomainInstanceInfosB
Domains (21.Volcengine.Vod.Models.Business.VodPCDNDomainInfo"[
VodPCDNDomainInfo
Domain (	
Status (	

CreateTime (	

UpdateTime (	"H
VodVerifyDomainOwnerResult
VerifyResult (
ErrorMessage (	"O
VodDomainDNSVerifyInfo
Host (	

RecordType (	
RecordValue (	"c
VodDomainFileVerifyInfo
VerifyDomains (	
VerifyFileName (	
VerifyFileContent (	"�
$VodDescribeDomainVerifyContentResult

NeedVerify (M
DNSVerifyInfo (26.Volcengine.Vod.Models.Business.VodDomainDNSVerifyInfoO
FileVerifyInfo (27.Volcengine.Vod.Models.Business.VodDomainFileVerifyInfo*�
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

