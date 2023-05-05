<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: vod/business/vod_media.proto

namespace Volc\Service\Vod\Models\GPBMetadata;

class VodMedia
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
�0
vod/business/vod_media.protoVolcengine.Vod.Models.Business"�
VodMediaBasicInfo
	SpaceName (	
Vid (	
Title (	
Description (	
	PosterUri (	
PublishStatus (	
Tags (	

CreateTime (	I
Classification	 (21.Volcengine.Vod.Models.Business.VodClassification
TosStorageClass
 (	
VodUploadSource (	"�
VodMediaInfoD
	BasicInfo (21.Volcengine.Vod.Models.Business.VodMediaBasicInfoA

SourceInfo (2-.Volcengine.Vod.Models.Business.VodSourceInfoH
TranscodeInfos (20.Volcengine.Vod.Models.Business.VodTranscodeInfo"q
VodGetMediaInfosDataC
MediaInfoList (2,.Volcengine.Vod.Models.Business.VodMediaInfo
NotExistVids (	"2
VodStoreUriGroup
Vid (	
	StoreUris (	"u
VodGetRecPosterDataH
StoreUriGroups (20.Volcengine.Vod.Models.Business.VodStoreUriGroup
NotExistVids (	"*
VodDeleteMediaData
NotExistVids (	"2
VodDeleteTranscodesData
NotExistFileIds (	"�
VodGetMediaListData
	SpaceName (	C
MediaInfoList (2,.Volcengine.Vod.Models.Business.VodMediaInfo

TotalCount (
Offset (
PageSize ("6
VodUpdateSubtitleStatusData
NotExistFileIds (	"p
VodFileSubtitleInfo
FileId (	I
SubtitleInfoList (2/.Volcengine.Vod.Models.Business.VodSubtitleInfo"�
VodGetSubtitleInfoListData
Vid (	Q
FileSubtitleInfoList (23.Volcengine.Vod.Models.Business.VodFileSubtitleInfo
NotExistFileIds (	

TotalCount (
Offset (
PageSize ("q
VodFrameDataForAudit
StoreUri (	
FrameNumber (
CutTimeMill (
Width (
Height ("b
VodGetFramesForAuditResultD
Frames (24.Volcengine.Vod.Models.Business.VodFrameDataForAudit"�
VodBetterFrameDataForAudit
StoreUri (	
FrameNumber (
CutTimeMill (
Width (
Height (
	CoverRate (
LBPHashCode ("n
 VodGetBetterFramesForAuditResultJ
Frames (2:.Volcengine.Vod.Models.Business.VodBetterFrameDataForAudit"J
VodAudioInfoForAudit
StoreUri (	
Duration (
Format (	"h
VodGetAudioInfoForAuditResultG
	AudioInfo (24.Volcengine.Vod.Models.Business.VodAudioInfoForAudit"n
VodASRUtteranceWordForAudit
Text (	
StartTimeMill (
EndTimeMill (
BlankDuration ("�
VodASRUtteranceForAudit
Text (	
StartTimeMill (
EndTimeMill (J
Words (2;.Volcengine.Vod.Models.Business.VodASRUtteranceWordForAudit
Language (	

SpeechRate (">
VodASRLanguageDetailForAudit
Prob (
Language (	"�
VodASRInfoForAudit
Text (	K

Utterances (27.Volcengine.Vod.Models.Business.VodASRUtteranceForAudit
Language (	U
LanguageDetails (2<.Volcengine.Vod.Models.Business.VodASRLanguageDetailForAudit

SpeechRate (
Volume ("r
.VodGetAutomaticSpeechRecognitionForAuditResult@
Info (22.Volcengine.Vod.Models.Business.VodASRInfoForAudit"S
VodAEDTimeRangeForAudit
StartTimeMill (
EndTimeMill (
Prob ("�
VodAEDEventItemForAudit
Event (	
UttProb (K

TimeRanges (27.Volcengine.Vod.Models.Business.VodAEDTimeRangeForAudit"a
VodAEDInfoForAuditK

EventItems (27.Volcengine.Vod.Models.Business.VodAEDEventItemForAudit"k
\'VodGetAudioEventDetectionForAuditResult@
Info (22.Volcengine.Vod.Models.Business.VodAEDInfoForAudit"<
 VodCreateVideoClassificationData
ClassificationId ("�
VodClassification
	SpaceName (	
ClassificationId (
Level (
Classification (	
ParentClassificationId (L
SubClassification (21.Volcengine.Vod.Models.Business.VodClassificationQ
SubClassificationTrees (21.Volcengine.Vod.Models.Business.VodClassification
	CreatedAt (	"m
VodVideoClassificationsDataN
ClassificationTrees (21.Volcengine.Vod.Models.Business.VodClassification"[
VodSnapshot
Format (	
Height (
Width (
StoreUri (	
Url (	"�
VodSpriteSnapshot
Format (	
ImgXLen (
ImgYLen (
	CellWidth (

CellHeight (
Interval (

CaptureNum (
	StoreUris (	
Urls	 (	"�
VodSamplePosterSnapshot
	StoreUris (	
ImgNum (
	CellWidth (

CellHeight (
Interval (
Format (	
Duration (
Urls (	
LargeSnapshotUri	 (	 
LargeSnapshotDownloadUrl
 (	
LargeSnapshotFillType (	"�
VodSnapshotData
	SpaceName (	
Vid (	D
PosterSnapshots (2+.Volcengine.Vod.Models.Business.VodSnapshotE
DynpostSnapshots (2+.Volcengine.Vod.Models.Business.VodSnapshotL
AnimatedPosterSnapshots (2+.Volcengine.Vod.Models.Business.VodSnapshotG
AiDynpostSnapshots (2+.Volcengine.Vod.Models.Business.VodSnapshotJ
SpriteSnapshots (21.Volcengine.Vod.Models.Business.VodSpriteSnapshotW
VSamplePosterSnapshots (27.Volcengine.Vod.Models.Business.VodSamplePosterSnapshot"�
VodGetFileListData
IsTruncated (
CommonPrefixes (	
FileSum (
NextStarter (	E
FileBasicInfos (2-.Volcengine.Vod.Models.Business.FileBasicInfo"Z
FileBasicInfo
FileName (	
Size (
StorageClass (	
UpdatedTime (	"6
VodUpdateMediaStorageClassData
NotExistVids (	"b
VodSubmitBlockMediaTaskResult
NotExistVids (	
BlockedVids (	
UnblockingVids (	"d
VodSubmitUnblockMediaTaskResult
NotExistVids (	
UnblockedVids (	
BlockingVids (	"�
VodQueryMediaBlockStatusResult
NotExistVids (	L
MediaBlockStatuses (20.Volcengine.Vod.Models.Business.MediaBlockStatus"/
MediaBlockStatus
Vid (	
Status (	*�
 VodFrameExtractingOptionForAudit-
)UndefinedVodFrameExtractingOptionForAudit \'
#FpsVodFrameExtractingOptionForAudit2
.NumberOfFramesVodFrameExtractingOptionForAudit,
(CutTimesVodFrameExtractingOptionForAudit:
6FpsLimitNumberOfFramesVodFrameExtractingOptionForAudit6
2OnlyFirstLastFrameVodFrameExtractingOptionForAuditB�
)com.volcengine.service.vod.model.businessBVodMediaPZAgithub.com/volcengine/volc-sdk-golang/service/vod/models/business��� � Volc\\Service\\Vod\\Models\\Business�#Volc\\Service\\Vod\\Models\\GPBMetadatabproto3'
        , true);

        static::$is_initialized = true;
    }
}

