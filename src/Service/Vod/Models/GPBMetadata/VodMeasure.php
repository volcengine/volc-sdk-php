<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: volcengine/vod/business/vod_measure.proto

namespace Volc\Service\Vod\Models\GPBMetadata;

class VodMeasure
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�D
)volcengine/vod/business/vod_measure.protoVolcengine.Vod.Models.Business"<
DescribeVodSpaceTranscodeItem
Name (	
Value ("�
%DescribeVodSpaceTranscodeDetailTVUnit
Time (	X
TranscodeItemList (2=.Volcengine.Vod.Models.Business.DescribeVodSpaceTranscodeItem"�
DescribeVodSpaceTranscodeDetail
Space (	
	TaskStage (	
Total (a
TranscodeUsageList (2E.Volcengine.Vod.Models.Business.DescribeVodSpaceTranscodeDetailTVUnit"�
#DescribeVodSpaceTranscodeDataResult
	SpaceList (	
	StartTime (	
EndTime (	
TranscodeType (	
Specification (	
TaskStageList (	
Aggregation (
DetailFieldList (	

RegionList	 (	
TotalTranscodeData
 (]
TotalTranscodeDataList (2=.Volcengine.Vod.Models.Business.DescribeVodSpaceTranscodeItem`
TranscodeDataDetailList (2?.Volcengine.Vod.Models.Business.DescribeVodSpaceTranscodeDetail"B
 DescribeVodSpaceAIStatisDataItem
Time (	
Duration ("�
"DescribeVodSpaceAIStatisDataDetail
Space (	
	TaskStage (	Y
AiUsageDataList (2@.Volcengine.Vod.Models.Business.DescribeVodSpaceAIStatisDataItem"�
"DescribeVodSpaceAIStatisDataResult
	SpaceList (	
	StartTime (	
EndTime (	
MediaAiType (	
TaskStageList (	
Aggregation (
DetailFieldList (	

RegionList (	
TotalAiUsageData	 (Y
AiUsageDataList
 (2@.Volcengine.Vod.Models.Business.DescribeVodSpaceAIStatisDataItema
AiUsageDataDetailList (2B.Volcengine.Vod.Models.Business.DescribeVodSpaceAIStatisDataDetail"E
&DescribeVodSpaceSubtitleStatisDataItem
Time (	
Usage ("�
(DescribeVodSpaceSubtitleStatisDataDetail
Space (	
	TaskStage (	e
SubtitleUsageDataList (2F.Volcengine.Vod.Models.Business.DescribeVodSpaceSubtitleStatisDataItem"�
(DescribeVodSpaceSubtitleStatisDataResult
	SpaceList (	
	StartTime (	
EndTime (	
SubtitleType (	
TaskStageList (	
Aggregation (
DetailFieldList (	

RegionList (	
TotalSubtitleUsageData	 (e
SubtitleUsageDataList
 (2F.Volcengine.Vod.Models.Business.DescribeVodSpaceSubtitleStatisDataItemm
SubtitleUsageDataDetailList (2H.Volcengine.Vod.Models.Business.DescribeVodSpaceSubtitleStatisDataDetail"C
$DescribeVodSpaceDetectStatisDataItem
Time (	
Usage ("�
&DescribeVodSpaceDetectStatisDataDetail
Space (	
	TaskStage (	a
DetectUsageDataList (2D.Volcengine.Vod.Models.Business.DescribeVodSpaceDetectStatisDataItem"�
&DescribeVodSpaceDetectStatisDataResult
	SpaceList (	
	StartTime (	
EndTime (	

DetectType (	
TaskStageList (	
Aggregation (
DetailFieldList (	

RegionList (	
TotalDetectUsageData	 (a
DetectUsageDataList
 (2D.Volcengine.Vod.Models.Business.DescribeVodSpaceDetectStatisDataItemi
DetectUsageDataDetailList (2F.Volcengine.Vod.Models.Business.DescribeVodSpaceDetectStatisDataDetail":
DescribeVodSnapshotDataItem
Time (	
Count ("�
DescribeVodSnapshotDataDetail
Space (	
	TaskStage (	
Total (	U
SnapshotDataList (2;.Volcengine.Vod.Models.Business.DescribeVodSnapshotDataItem"�
DescribeVodSnapshotDataResult
	SpaceList (	
	StartTime (	
EndTime (	
SnapshotType (	
TaskStageList (	
Aggregation (
DetailFieldList (	

RegionList (	
TotalSnapshotData	 (U
SnapshotDataList
 (2;.Volcengine.Vod.Models.Business.DescribeVodSnapshotDataItem]
SnapshotDetailDataList (2=.Volcengine.Vod.Models.Business.DescribeVodSnapshotDataDetail"�
%DescribeVodSpaceWorkflowTranscodeInfo
TemplateType (	
FileType (	
Duration (
Codec (	
Remux (

Definition (	
Width (
Height (
Slice	 (
IsLowPriority
 ("c
$DescribeVodSpaceWorkflowSnapshotInfo
TemplateType (	
Number (
IsLowPriority ("h
\'DescribeVodSpaceWorkflowEnhanceExecInfo
TemplateType (	
Duration (
IsLowPriority ("t
#DescribeVodSpaceWorkflowVideoAIInfo
TemplateType (	
Duration (
Number (
IsLowPriority ("�
DescribeVodSpaceWorkflowDetail
RunId (	
Vid (	

TemplateId (	
	SpaceName (	
Status (	
	StartTime (	
EndTime (	\\
TranscodeInfo (2E.Volcengine.Vod.Models.Business.DescribeVodSpaceWorkflowTranscodeInfoZ
SnapshotInfo	 (2D.Volcengine.Vod.Models.Business.DescribeVodSpaceWorkflowSnapshotInfo`
EnhanceExecInfo
 (2G.Volcengine.Vod.Models.Business.DescribeVodSpaceWorkflowEnhanceExecInfoX
VideoAIInfo (2C.Volcengine.Vod.Models.Business.DescribeVodSpaceWorkflowVideoAIInfo"�
(DescribeVodSpaceWorkflowDetailDataResult
Region (	
Space (	
	StartTime (	
EndTime (	
PageSize (
PageNum (
Total (Z
WorkflowDetailData (2>.Volcengine.Vod.Models.Business.DescribeVodSpaceWorkflowDetail"�
DescribeVodSpaceEditDetail
Time (	
	OutputVid (	
Space (	
Codec (	

Definition (	
Duration ("�
$DescribeVodSpaceEditDetailDataResult
Region (	
Space (	
	StartTime (	
EndTime (	
PageSize (
PageNum (
Total (R
EditDetailData (2:.Volcengine.Vod.Models.Business.DescribeVodSpaceEditDetail"W
"DescribeVodPlayFileLogByDomainItem
Date (	
Domain (	
DownloadUrl (	"�
$DescribeVodPlayFileLogByDomainResult
	StartTime (	
EndTime (	

DomainList (	T
FileList (2B.Volcengine.Vod.Models.Business.DescribeVodPlayFileLogByDomainItem"�
DescribeVodEnhanceImageDataItem
Time (	

SR (
VFI (

SDREnhance (
SDR2HDR (
AudioDenose ("�
!DescribeVodEnhanceImageDataResult
	SpaceList (	
	StartTime (	
EndTime (	
TaskTypeList (	
TaskStageList (	
Aggregation (

RegionList (	
TotalEnhanceImagData (Y
EnhanceImageList	 (2?.Volcengine.Vod.Models.Business.DescribeVodEnhanceImageDataItem"D
"DescribeVodSpaceEditStatisDataItem
Name (	
Duration ("�
&DescribeVodSpaceEditStatisDetailTVUnit
Time (	]
EditUsageItemList (2B.Volcengine.Vod.Models.Business.DescribeVodSpaceEditStatisDataItem"�
$DescribeVodSpaceEditStatisDataDetail
Space (	a
EditUsageDataList (2F.Volcengine.Vod.Models.Business.DescribeVodSpaceEditStatisDetailTVUnit"�
$DescribeVodSpaceEditStatisDataResult
	SpaceList (	
	StartTime (	
EndTime (	
Specification (	
Aggregation (
DetailFieldList (	

RegionList (	
TotalEditUsageData (b
TotalEditUsageDataList	 (2B.Volcengine.Vod.Models.Business.DescribeVodSpaceEditStatisDataIteme
EditUsageDataDetailList
 (2D.Volcengine.Vod.Models.Business.DescribeVodSpaceEditStatisDataDetail"�
DescribeVodPlayedStatisDataItem
Vid (	
Name (	
Size (
Duration (

CreateTime (	
	PlayCount (
Traffic ("�
!DescribeVodPlayedStatisDataResult
Space (	
	StartTime (	
EndTime (	
VidList (	
	OrderType (	V
PlayStatInfos (2?.Volcengine.Vod.Models.Business.DescribeVodPlayedStatisDataItem"�
#DescribeVodMostPlayedStatisDataItem
Vid (	
Name (	
Size (
Duration (

CreateTime (	
	PlayCount (
Traffic ("�
%DescribeVodMostPlayedStatisDataResult
Space (	
	StartTime (	
EndTime (	
	OrderType (	
TopN (Z
PlayStatInfos (2C.Volcengine.Vod.Models.Business.DescribeVodMostPlayedStatisDataItem"?
 DescribeVodRealtimeMediaDataItem
Time (	
Count ("�
"DescribeVodRealtimeMediaDataDetail
Space (	
Total (_
RealtimeMediaDataList (2@.Volcengine.Vod.Models.Business.DescribeVodRealtimeMediaDataItem"�
"DescribeVodRealtimeMediaDataResult
	SpaceList (	
	StartTime (	
EndTime (	
ProcessType (	
Aggregation (
DetailFieldList (	
TotalRealtimeMediaData (_
RealtimeMediaDataList (2@.Volcengine.Vod.Models.Business.DescribeVodRealtimeMediaDataItemg
RealtimeMediaDetailDataList	 (2B.Volcengine.Vod.Models.Business.DescribeVodRealtimeMediaDataDetail"�
&DescribeVodRealtimeMediaDetailDataItem
TraceId (	
	StartTime (	
EndTime (	
FileName (	
Command (	
ResponseCode (	"�
(DescribeVodRealtimeMediaDetailDataResult
Region (	
Space (	
	StartTime (	
EndTime (	
PageSize (
PageNum (
Total (g
RealtimeMediaDetailData (2F.Volcengine.Vod.Models.Business.DescribeVodRealtimeMediaDetailDataItemB�
)com.volcengine.service.vod.model.businessB
VodMeasurePZAgithub.com/volcengine/volc-sdk-golang/service/vod/models/business��� Volc\\Service\\Vod\\Models\\Business�#Volc\\Service\\Vod\\Models\\GPBMetadatabproto3'
        , true);

        static::$is_initialized = true;
    }
}

