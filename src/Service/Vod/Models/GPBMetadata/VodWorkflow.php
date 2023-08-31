<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: volcengine/vod/business/vod_workflow.proto

namespace Volc\Service\Vod\Models\GPBMetadata;

class VodWorkflow
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \Volc\Service\Vod\Models\GPBMetadata\VodCommon::initOnce();
        $pool->internalAddGeneratedFile(
            '
�l
*volcengine/vod/business/vod_workflow.protoVolcengine.Vod.Models.Business(volcengine/vod/business/vod_common.proto"\'
VodStartWorkflowResult
RunId (	"1
	DirectUrl
FileName (	

BucketName (	"�
WorkflowParamsF
OverrideParams (2..Volcengine.Vod.Models.Business.OverrideParamsP
	Condition (2=.Volcengine.Vod.Models.Business.WorkflowParams.ConditionEntry0
ConditionEntry
key (	
value (:8"�
OverrideParams:
Logo (2,.Volcengine.Vod.Models.Business.LogoOverrideN
TranscodeVideo (26.Volcengine.Vod.Models.Business.TranscodeVideoOverrideN
TranscodeAudio (26.Volcengine.Vod.Models.Business.TranscodeAudioOverrideB
Snapshot (20.Volcengine.Vod.Models.Business.SnapshotOverride@
Enhance (2/.Volcengine.Vod.Models.Business.EnhanceOverride"�
LogoOverride

TemplateId (	D
Vars (26.Volcengine.Vod.Models.Business.LogoOverride.VarsEntry+
	VarsEntry
key (	
value (	:8"�
TranscodeVideoOverride

TemplateId (	2
Clip (2$.Volcengine.Vod.Models.Business.Clip
OutputIndex (
FileName (	"*
Clip
	StartTime (
EndTime ("r
TranscodeAudioOverride

TemplateId (	2
Clip (2$.Volcengine.Vod.Models.Business.Clip
FileName (	"�
SnapshotOverride

TemplateId (	

OffsetTime (
OffsetTimeList (
FileName (	
	FileIndex (	
SampleOffsets ("8
EnhanceOverride
StorageMode (	
FileName (	"�
TranscodeResult
Vid (	>

Inspection (2*.Volcengine.Vod.Models.Business.InspectionE
CategoryTags (2/.Volcengine.Vod.Models.Business.CategoryTagInfo"�

Inspection8
Quality (2\'.Volcengine.Vod.Models.Business.Quality:
DeLogo (2*.Volcengine.Vod.Models.Business.DeLogoInfo"�
Quality=
Visual (2-.Volcengine.Vod.Models.Business.VisualQuality>

VolumeInfo (2*.Volcengine.Vod.Models.Business.VolumeInfo"q

DeLogoInfo
AnchorWidth (
AnchorHeight (
PosX (
PosY (
SizeX (
SizeY ("|
VisualQuality
VQScore (
Contrast (
Colorfulness (

Brightness (
Texture (
Noise ("S

VolumeInfo
Loudness (
Peak (

MeanVolume (
	MaxVolume ("�
CategoryTagInfo
TagId (
Prob (
TagName (	
Level (S

ParentInfo (2?.Volcengine.Vod.Models.Business.CategoryTagInfo.ParentInfoEntry1
ParentInfoEntry
key (	
value (	:8"�
VodListWorkflowExecutionResult?
Data (21.Volcengine.Vod.Models.Business.WorkflowExecution

TotalCount (
PageSize (
Offset ("�
WorkflowExecution
RunId (	
Vid (	

TemplateId (	
TemplateName (	
	SpaceName (	
Status (	

TaskListId (	
EnableLowPriority (
	JobSource	 (	.

CreateTime
 (2.google.protobuf.Timestamp-
	StartTime (2.google.protobuf.Timestamp+
EndTime (2.google.protobuf.Timestamp=
Input (2..Volcengine.Vod.Models.Business.WorkflowParams
Priority (
CallbackArgs (	?
TasksDetail (2*.Volcengine.Vod.Models.Business.TaskDetail<
	DirectUrl (2).Volcengine.Vod.Models.Business.DirectUrl"�
#VodGetWorkflowExecutionDetailResult
RunId (	
Vid (	

TemplateId (	
	SpaceName (	
Status (	

TaskListId (	
EnableLowPriority (
	JobSource	 (	>
Stages
 (2..Volcengine.Vod.Models.Business.ExecutionStage.

CreateTime (2.google.protobuf.Timestamp-
	StartTime (2.google.protobuf.Timestamp+
EndTime (2.google.protobuf.Timestamp<
	DirectUrl (2).Volcengine.Vod.Models.Business.DirectUrl"�
ExecutionStage
DisplayName (	@
StageDetail (2+.Volcengine.Vod.Models.Business.StageDetail-
	StartTime (2.google.protobuf.Timestamp+
EndTime (2.google.protobuf.Timestamp"�
StageDetail

Id (	
DisplayName (	
Type (	

TemplateId (	;
Status (2+.Volcengine.Vod.Models.Business.StageStatus
	ErrorCode (
Message (	-
	StartTime (2.google.protobuf.Timestamp+
EndTime	 (2.google.protobuf.Timestamp"�

TaskDetail
DisplayName (	

TemplateId (	;
Status (2+.Volcengine.Vod.Models.Business.StageStatus
Progress (-
	StartTime	 (2.google.protobuf.Timestamp+
EndTime
 (2.google.protobuf.Timestamp"W
SnapshotParamsPoster
Format (	
StoreUri (	
Width (
Height ("X
SnapshotParamsDynpost
Format (	
StoreUri (	
Width (
Height ("Z
SnapshotParamsAIDynpost
Format (	
StoreUri (	
Width (
Height ("_
SnapshotParamsAnimatedPoster
Format (	
StoreUri (	
Width (
Height ("�
SnapshotParamsSprite
Format (	
	StoreUris (	
	CellWidth (

CellHeight (
ImgXLen (
ImgYLen (
Interval (

CaptureNum ("�
SnapshotParamsSample
Format (	
	StoreUris (	
Width (
Height (
Interval (

CaptureNum (
Duration (
IndexUri (	
Offsets	 ("�
SnapshotResult
Type (	F
Poster (24.Volcengine.Vod.Models.Business.SnapshotParamsPosterH H
Dynpost (25.Volcengine.Vod.Models.Business.SnapshotParamsDynpostH V
AnimatedPoster (2<.Volcengine.Vod.Models.Business.SnapshotParamsAnimatedPosterH L
	AIDynpost (27.Volcengine.Vod.Models.Business.SnapshotParamsAIDynpostH F
Sprite (24.Volcengine.Vod.Models.Business.SnapshotParamsSpriteH F
Sample (24.Volcengine.Vod.Models.Business.SnapshotParamsSampleH B
SnapshotParams"�
VodWorkflowResult<
	DirectUrl (2).Volcengine.Vod.Models.Business.DirectUrl
Vid (	
RunId (	
	SpaceName (	

TemplateId (	
CallbackArgs (	
Status (	H
TranscodeInfos (20.Volcengine.Vod.Models.Business.VodTranscodeInfoA
	Snapshots	 (2..Volcengine.Vod.Models.Business.SnapshotResult"�
TaskTemplate

TemplateId (	
	SpaceName (	
Name (	
Description (	
Type (	
CommitId	 (	
Hash (	-
	CreatedAt (2.google.protobuf.Timestamp-
	UpdatedAt (2.google.protobuf.Timestamp
TaskType (	Z
TranscodeVideoTaskParams (28.Volcengine.Vod.Models.Business.TranscodeVideoTaskParamsJ
ByteHDTaskParams (20.Volcengine.Vod.Models.Business.ByteHDTaskParamsZ
TranscodeAudioTaskParams (28.Volcengine.Vod.Models.Business.TranscodeAudioTaskParamsN
SnapshotTaskParams (22.Volcengine.Vod.Models.Business.SnapshotTaskParams"�
TranscodeVideoTaskParams
TranscodeTemplateType (	
	Container (	4
Video (2%.Volcengine.Vod.Models.Business.Video4
Audio (2%.Volcengine.Vod.Models.Business.Audio
DisableAudio (
Quality (	
Vladder (	
UserTag (	
Encrypt	 (>

Encryption
 (2*.Volcengine.Vod.Models.Business.Encryption8
Segment (2\'.Volcengine.Vod.Models.Business.Segment6
Volume (2&.Volcengine.Vod.Models.Business.Volume"�
ByteHDTaskParams
	Container (	4
Video (2%.Volcengine.Vod.Models.Business.Video4
Audio (2%.Volcengine.Vod.Models.Business.Audio
DisableAudio (
Quality (	
Vladder (	
UserTag (	
Encrypt (>

Encryption	 (2*.Volcengine.Vod.Models.Business.Encryption8
Segment
 (2\'.Volcengine.Vod.Models.Business.Segment6
Volume (2&.Volcengine.Vod.Models.Business.Volume"�
TranscodeAudioTaskParams
	Container (	4
Audio (2%.Volcengine.Vod.Models.Business.Audio
Quality (	
UserTag (	
Encrypt (>

Encryption (2*.Volcengine.Vod.Models.Business.Encryption8
Segment (2\'.Volcengine.Vod.Models.Business.Segment6
Volume (2&.Volcengine.Vod.Models.Business.Volume"�
SnapshotTaskParams
Type (	R
PosterSnapshotParams (24.Volcengine.Vod.Models.Business.PosterSnapshotParamsT
DynpostSnapshotParams (25.Volcengine.Vod.Models.Business.DynpostSnapshotParamsb
AnimatedPosterSnapshotParams (2<.Volcengine.Vod.Models.Business.AnimatedPosterSnapshotParamsR
SpriteSnapshotParams (24.Volcengine.Vod.Models.Business.SpriteSnapshotParamsR
SampleSnapshotParams (24.Volcengine.Vod.Models.Business.SampleSnapshotParams"}
PosterSnapshotParams
Format (	
ResAdapt (
ResLimit (
Width (
Height (

OffsetTime ("�
DynpostSnapshotParams
Format (	
ResAdapt (
ResLimit (
Width (
Height (

OffsetTime (
Duration (

CaptureFps (
Speed	 ("�
AnimatedPosterSnapshotParams
Format (	
ResAdapt (
ResLimit (
Width (
Height (

OffsetTime (

CaptureFps (

CaptureNum ("�
SpriteSnapshotParams
Format (	
	CellWidth (

CellHeight (
ImgXLen (
ImgYLen (
Interval (

OffsetTime (

CaptureNum ("�
SampleSnapshotParams
Format (	
ResAdapt (
ResLimit (
Width (
Height (

CaptureNum (
CaptureMode (
Interval (
OutMode	 (	
FillType
 (	
Offsets ("[
VodTaskTemplateResultB
TaskTemplate (2,.Volcengine.Vod.Models.Business.TaskTemplate"�
VodListTaskTemplateResult
Limit (
Offset (
Total (:
Data (2,.Volcengine.Vod.Models.Business.TaskTemplate"�
WorkflowTemplate

TemplateId (	
	SpaceName (	
Name (	
Description (	
Type (	-
	CreatedAt (2.google.protobuf.Timestamp-
	UpdatedAt (2.google.protobuf.Timestamp
CommitId (	<

Activities (2(.Volcengine.Vod.Models.Business.Activity"�
Activity

ActivityId (	
Name (	
Description (	
Type (	J
SnapshotActivity (20.Volcengine.Vod.Models.Business.SnapshotActivity@
EndActivity (2+.Volcengine.Vod.Models.Business.EndActivityL
TranscodeActivity (21.Volcengine.Vod.Models.Business.TranscodeActivity"�
TranscodeActivity

TemplateId (	P
Enhance (2?.Volcengine.Vod.Models.Business.TranscodeActivity.EnhanceParamsJ
Logo (2<.Volcengine.Vod.Models.Business.TranscodeActivity.LogoParams
FileName (	@
Parallel (2..Volcengine.Vod.Models.Business.ParallelParams<
	Condition (2).Volcengine.Vod.Models.Business.Condition4
EnhanceParams

TemplateId (	
Version (	 

LogoParams

TemplateId (	4
SubtitleParams
Language (	
FontType (	"v
SnapshotActivity

TemplateId (	
FileName (	<
	Condition (2).Volcengine.Vod.Models.Business.Condition"%
EndActivity
TranscodeEvent (	"g
VodWorkflowTemplateResultJ
WorkflowTemplate (20.Volcengine.Vod.Models.Business.WorkflowTemplate"�
VodListWorkflowTemplateResult
Limit (
Offset (
Total (>
Data (20.Volcengine.Vod.Models.Business.WorkflowTemplate"�
LogoTemplate

TemplateId (	
	SpaceName (	
Name (	
Description (	
Type (	-
	CreatedAt	 (2.google.protobuf.Timestamp-
	UpdatedAt
 (2.google.protobuf.Timestamp
Hash (	
LogoType (	8
Logos (2).Volcengine.Vod.Models.Business.AdaptLogo<
Concats (2+.Volcengine.Vod.Models.Business.AdaptConcatK
HiddenWatermark (22.Volcengine.Vod.Models.Business.HiddenWatermarkAdd"�
	AdaptLogo>

AnchorSize (2*.Volcengine.Vod.Models.Business.AnchorSize=
Logos (2..Volcengine.Vod.Models.Business.LogoDefinition"+

AnchorSize
Width (
Height ("�
ImageLogoDefinition
Mid (	
	StartTime (
EndTime (
Locate (	
PosX (
PosY (
SizeX (
sizeY ("�
VideoLogoDefinition
Mid (	
	StartTime (
EndTime (
	LoopTimes (

RepeatLast (
Locate (	
PosX (
PosY (
SizeX	 (
sizeY
 ("�
TextLogoDefinition
Content (	
FontType (	
FontSize (
	FontColor (	
	StartTime (
EndTime (
Locate (	
PosX (
PosY	 (
SizeX
 (
sizeY ("�
LogoDefinition
Type (	P
ImageLogoDefinition (23.Volcengine.Vod.Models.Business.ImageLogoDefinitionP
VideoLogoDefinition (23.Volcengine.Vod.Models.Business.VideoLogoDefinitionN
TextLogoDefinition (22.Volcengine.Vod.Models.Business.TextLogoDefinition"=

FontShadow
Color (	
OffsetX (
OffsetY ("�
AdaptConcat>

AnchorSize (2*.Volcengine.Vod.Models.Business.AnchorSizeA
Concats (20.Volcengine.Vod.Models.Business.ConcatDefinition"?
ConcatDefinition
Type (	
Mid (	
Position (	"3
HiddenWatermarkAdd
Content (	
Type (	"�
VodListWatermarkResponseResult
Limit (
Offset (
Total (:
Data (2,.Volcengine.Vod.Models.Business.LogoTemplate"�
Video
Res (	
	ScaleType (
	ScaleMode (

ScaleWidth (
ScaleHeight (

ScaleShort (
	ScaleLong (
Codec	 (	
RateControlMode
 (	

MaxBitrate (
Bitrate (
Crf (
MaxFps (
Vsync (	
Fps (
HDRMode ("�
Audio
Codec (	

SampleRate (
RateControlMode (	
Bitrate (
MinRate (
MaxRate (
Channels (
Profile (	"9
Segment
Format (	
Type (	
Duration ("�
	Condition
ResRange (	
LongResRange (	
DurationRange (	
FpsRange (	
BitrateRange (	
AudioBitrateRange (	
FileType (	
VQScoreRange (	
VideoDurationRange	 (	
AudioDurationRange
 (	
UserCondition (	"!
ParallelParams
Enabled ("

Encryption
Vendor (	"j
Volume
Method (	
IntegratedLoudness (
TruePeak (
Volume (

VolumeTime (*z
StageStatus
Unknown 
	Scheduled
Running
Canceled
TimedOut
Skipped
	Completed

FailedB�
)com.volcengine.service.vod.model.businessBVodWorkflowPZAgithub.com/volcengine/volc-sdk-golang/service/vod/models/business��� Volc\\Service\\Vod\\Models\\Business�#Volc\\Service\\Vod\\Models\\GPBMetadatabproto3'
        , true);

        static::$is_initialized = true;
    }
}

