<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: volcengine/vod/business/vod_upload.proto

namespace Volc\Service\Vod\Models\GPBMetadata;

class VodUpload
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
�-
(volcengine/vod/business/vod_upload.protoVolcengine.Vod.Models.Business"�
VodUrlUploadURLSet
	SourceUrl (	
CallbackArgs (	
Md5 (	

TemplateId (	
Title (	
Description (	
Tags (	
Category (	
FileName	 (	
ClassificationId
 (
StorageClass (
FileExtension (	
UrlEncryptionAlgorithm (	
EnableLowPriority (b
CustomURLHeaders (2H.Volcengine.Vod.Models.Business.VodUrlUploadURLSet.CustomURLHeadersEntry7
CustomURLHeadersEntry
key (	
value (	:8"M
VodUrlResponseData7
Data (2).Volcengine.Vod.Models.Business.ValuePair"-
	ValuePair
JobId (	
	SourceUrl (	"R
VodQueryDataB
Data (24.Volcengine.Vod.Models.Business.VodQueryUploadResult"p
VodQueryUploadResult@
MediaInfoList (2).Volcengine.Vod.Models.Business.VodURLSet
NotExistJobIds (	"^
VodCommitDataM
Data (2?.Volcengine.Vod.Models.Business.VodCommitUploadInfoResponseData"�
VodCommitUploadInfoResponseData
Vid (	A

SourceInfo (2-.Volcengine.Vod.Models.Business.VodSourceInfo
	PosterUri (	
CallbackArgs (	
Mid (	"�
	VodURLSet
	RequestId (	
JobId (	
	SourceUrl (	
State (	
Vid (	
	SpaceName (	
	AccountId (	A

SourceInfo (2-.Volcengine.Vod.Models.Business.VodSourceInfo
CallbackArgs	 (	"`
VodApplyUploadInfoResultD
Data (26.Volcengine.Vod.Models.Business.VodApplyUploadInfoData"�
VodApplyUploadInfoDataG
UploadAddress (20.Volcengine.Vod.Models.Business.VodUploadAddressZ
CandidateUploadAddresses (28.Volcengine.Vod.Models.Business.CandidateUploadAddresses"�
VodUploadAddress@

StoreInfos (2,.Volcengine.Vod.Models.Business.VodStoreInfo
UploadHosts (	C
UploadHeader (2-.Volcengine.Vod.Models.Business.VodHeaderPair

SessionKey (	"�
CandidateUploadAddressesJ
MainUploadAddresses (2-.Volcengine.Vod.Models.Business.UploadAddressL
BackupUploadAddresses (2-.Volcengine.Vod.Models.Business.UploadAddressN
FallbackUploadAddresses (2-.Volcengine.Vod.Models.Business.UploadAddress".
VodStoreInfo
StoreUri (	
Auth (	"+
VodHeaderPair
Key (	
Value (	"b
VodCommitUploadInfoResultE
Data (27.Volcengine.Vod.Models.Business.VodCommitUploadInfoData"�
VodCommitUploadInfoData
Vid (	
	PosterUri (	A

SourceInfo (2-.Volcengine.Vod.Models.Business.VodSourceInfo
Mid (	"�
VodUploadFunctionInput
SnapshotTime (
Title (	
Tags (	
Description (	
Category (	

RecordType (
Format (	
ClassificationId (

TemplateId	 (	
Vid
 (	
Fid (	
Language (	
StoreUri (	
Source (	
Tag (	
AutoPublish (

ActionType (	
IsHlsIndexOnly (
HlsMediaSize (	"h
VodUploadFunction
Name (	E
Input (26.Volcengine.Vod.Models.Business.VodUploadFunctionInput"�
CommitUploadInfoParam
	SpaceName (	
CallbackArgs (	

SessionKey (	D
	Functions (21.Volcengine.Vod.Models.Business.VodUploadFunction
GetMetaMode (	
VodUploadSource (	"�
CommitRequestBodyJson
	SpaceName (	

SessionKey (	
CallbackArgs (	
	Functions (	
GetMetaMode (	
VodUploadSource (	"�
ApplyUploadInfoParam
	SpaceName (	
FileType (	

SessionKey (	
FileSize (
	MediaType (	
TosKeys (	
FileExtension (	

FilePrefix (	
FlushUploadMode	 (
Md5
 (	
StorageClass (
ClientNetWorkModee (	
ClientIDCModef (	"�
CommitResponse
Vid (	
Mid (	A

SourceInfo (2-.Volcengine.Vod.Models.Business.VodSourceInfo
	PosterUri (	
CallbackArgs (	")
VodUploadOptionInfo

TemplateId (	"�
VodUploadCallbackData
Code (	
Message (	
CallbackArgs (	
Vid (	
Mid (	
	SpaceName (	A

SourceInfo (2-.Volcengine.Vod.Models.Business.VodSourceInfo
	PosterUri (	G

OptionInfo	 (23.Volcengine.Vod.Models.Business.VodUploadOptionInfo"�
CallbackResponse
	RequestId (	
Version (	
	EventTime (	
	EventType (	C
Data (25.Volcengine.Vod.Models.Business.VodUploadCallbackData"+
	StoreInfo
StoreUri (	
Auth (	"(

HeaderPair
Key (	
Value (	"�
UploadAddress=

StoreInfos (2).Volcengine.Vod.Models.Business.StoreInfo
UploadHosts (	@
UploadHeader (2*.Volcengine.Vod.Models.Business.HeaderPair

SessionKey (	"�
FlushUploadResult
FlushUpload (
Vid (	
Mid (	A

SourceInfo (2-.Volcengine.Vod.Models.Business.VodSourceInfo
	PosterUri (	
CallbackArgs (	"�
ApplyResponseD
UploadAddress (2-.Volcengine.Vod.Models.Business.UploadAddressL
FlushUploadResult (21.Volcengine.Vod.Models.Business.FlushUploadResult
SDKParam (	"�
SubmitMoveObjectTaskParam
SourceSpace (	
SourceFileName (	
TargetSpace (	
TargetFileName (	
SaveSourceObject (
ForceOverwrite ("m
VodSubmitMoveObjectTaskRespDataJ
Data (2<.Volcengine.Vod.Models.Business.SubmitMoveObjectTaskRespData"X
SubmitMoveObjectTaskRespData
TaskId (	
SourceSpace (	
TargetSpace (	"X
QueryMoveObjectTaskInfoParam
TaskId (	
SourceSpace (	
TargetSpace (	"r
!VodQueryMoveObjectTaskInfoResDataM
Data (2?.Volcengine.Vod.Models.Business.QueryMoveObjectTaskInfoRespData"�
QueryMoveObjectTaskInfoRespData
TaskId (	
SourceSpace (	
TargetSpace (	
State (	
TaskRunResult (	*B
StorageClassType
Default 
Standard
Archive
IAB�
)com.volcengine.service.vod.model.businessB	VodUploadPZAgithub.com/volcengine/volc-sdk-golang/service/vod/models/business��� � Volc\\Service\\Vod\\Models\\Business�#Volc\\Service\\Vod\\Models\\GPBMetadatabproto3'
        , true);

        static::$is_initialized = true;
    }
}

