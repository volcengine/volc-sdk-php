<?php

namespace Volc\Service\ImageX\V2;

/**
 * @method array UpdateImageDomainVolcOrigin(array $query, array $json)
 * @method array DelDomain(array $query, array $json)
 * @method array AddDomainV1(array $query, array $json)
 * @method array UpdateImageDomainIPAuth(array $query, array $json)
 * @method array UpdateRefer(array $query, array $json)
 * @method array UpdateImageDomainUaAccess(array $query, array $json)
 * @method array UpdateHttps(array $query, array $json)
 * @method array UpdateImageDomainDownloadSpeedLimit(array $query, array $json)
 * @method array UpdateResponseHeader(array $query, array $json)
 * @method array UpdateImageDomainAreaAccess(array $query, array $json)
 * @method array UpdateDomainAdaptiveFmt(array $query, array $json)
 * @method array UpdateImageDomainConfig(array $query, array $json)
 * @method array UpdateAdvance(array $query, array $json)
 * @method array UpdateImageDomainBandwidthLimit(array $query, array $json)
 * @method array UpdateSlimConfig(array $query, array $json)
 * @method array SetDefaultDomain(array $json)
 * @method array DescribeImageVolcCdnAccessLog(array $query, array $json)
 * @method array VerifyDomainOwner(array $query, array $json)
 * @method array GetResponseHeaderValidateKeys()
 * @method array GetDomainConfig(array $query)
 * @method array GetDomainOwnerVerifyContent(array $query)
 * @method array GetServiceDomains(array $query)
 * @method array DeleteImageMonitorRules(array $query, array $json)
 * @method array DeleteImageMonitorRecords(array $query, array $json)
 * @method array CreateImageMonitorRule(array $query, array $json)
 * @method array UpdateImageMonitorRule(array $query, array $json)
 * @method array UpdateImageMonitorRuleStatus(array $query, array $json)
 * @method array GetImageAlertRecords(array $query, array $json)
 * @method array GetImageMonitorRules(array $query)
 * @method array CreateImageSettingRule(array $query, array $json)
 * @method array DeleteImageSettingRule(array $query, array $json)
 * @method array UpdateImageSettingRulePriority(array $query, array $json)
 * @method array UpdateImageSettingRule(array $query, array $json)
 * @method array GetImageSettings(array $query)
 * @method array GetImageSettingRuleHistory(array $query)
 * @method array GetImageSettingRules(array $query)
 * @method array CreateImageMigrateTask(array $json)
 * @method array DeleteImageMigrateTask(array $query)
 * @method array ExportFailedMigrateTask(array $query)
 * @method array UpdateImageTaskStrategy(array $json)
 * @method array TerminateImageMigrateTask(array $query)
 * @method array GetVendorBuckets(array $json)
 * @method array GetImageMigrateTasks(array $query)
 * @method array RerunImageMigrateTask(array $query)
 * @method array GetImageAddOnTag(array $query)
 * @method array DescribeImageXCubeUsage(array $query)
 * @method array DescribeImageXSourceRequestBandwidth(array $query)
 * @method array DescribeImageXSourceRequestTraffic(array $query)
 * @method array DescribeImageXSourceRequest(array $query)
 * @method array DescribeImageXStorageUsage(array $query)
 * @method array DescribeImageXBucketRetrievalUsage(array $query)
 * @method array DescribeImageXAIRequestCntUsage(array $query)
 * @method array DescribeImageXSummary(array $query)
 * @method array DescribeImageXDomainTrafficData(array $query)
 * @method array DescribeImageXDomainBandwidthData(array $query)
 * @method array DescribeImageXDomainBandwidthNinetyFiveData(array $query)
 * @method array DescribeImageXBucketUsage(array $query)
 * @method array DescribeImageXBillingRequestCntUsage(array $query)
 * @method array DescribeImageXRequestCntUsage(array $query)
 * @method array DescribeImageXBaseOpUsage(array $query)
 * @method array DescribeImageXCompressUsage(array $query)
 * @method array DescribeImageXScreenshotUsage(array $query)
 * @method array DescribeImageXVideoClipDurationUsage(array $query)
 * @method array DescribeImageXMultiCompressUsage(array $query)
 * @method array DescribeImageXEdgeRequest(array $query)
 * @method array DescribeImageXEdgeRequestBandwidth(array $query)
 * @method array DescribeImageXEdgeRequestTraffic(array $query)
 * @method array DescribeImageXEdgeRequestRegions(array $query)
 * @method array DescribeImageXMirrorRequestHttpCodeByTime(array $json)
 * @method array DescribeImageXMirrorRequestHttpCodeOverview(array $json)
 * @method array DescribeImageXMirrorRequestTraffic(array $json)
 * @method array DescribeImageXMirrorRequestBandwidth(array $json)
 * @method array DescribeImageXServerQPSUsage(array $query)
 * @method array DescribeImageXHitRateTrafficData(array $query)
 * @method array DescribeImageXHitRateRequestData(array $query)
 * @method array DescribeImageXCDNTopRequestData(array $query)
 * @method array DescribeImageXHeifEncodeFileInSizeByTime(array $query, array $json)
 * @method array DescribeImageXHeifEncodeFileOutSizeByTime(array $query, array $json)
 * @method array DescribeImageXHeifEncodeSuccessCountByTime(array $query, array $json)
 * @method array DescribeImageXHeifEncodeSuccessRateByTime(array $query, array $json)
 * @method array DescribeImageXHeifEncodeDurationByTime(array $query, array $json)
 * @method array DescribeImageXHeifEncodeErrorCodeByTime(array $query, array $json)
 * @method array DescribeImageXExceedResolutionRatioAll(array $json)
 * @method array DescribeImageXExceedFileSize(array $json)
 * @method array DescribeImageXExceedCountByTime(array $json)
 * @method array DescribeImageXServiceQuality(array $query)
 * @method array GetImageXQueryApps(array $query)
 * @method array GetImageXQueryRegions(array $query)
 * @method array GetImageXQueryDims(array $query)
 * @method array GetImageXQueryVals(array $query)
 * @method array DescribeImageXUploadCountByTime(array $json)
 * @method array DescribeImageXUploadDuration(array $json)
 * @method array DescribeImageXUploadSuccessRateByTime(array $json)
 * @method array DescribeImageXUploadFileSize(array $json)
 * @method array DescribeImageXUploadErrorCodeByTime(array $json)
 * @method array DescribeImageXUploadErrorCodeAll(array $json)
 * @method array DescribeImageXUploadSpeed(array $json)
 * @method array DescribeImageXUploadSegmentSpeedByTime(array $json)
 * @method array DescribeImageXCdnSuccessRateByTime(array $json)
 * @method array DescribeImageXCdnSuccessRateAll(array $json)
 * @method array DescribeImageXCdnErrorCodeByTime(array $json)
 * @method array DescribeImageXCdnErrorCodeAll(array $json)
 * @method array DescribeImageXCdnDurationDetailByTime(array $json)
 * @method array DescribeImageXCdnDurationAll(array $json)
 * @method array DescribeImageXCdnReuseRateByTime(array $json)
 * @method array DescribeImageXCdnReuseRateAll(array $json)
 * @method array DescribeImageXCdnProtocolRateByTime(array $json)
 * @method array DescribeImageXClientFailureRate(array $json)
 * @method array DescribeImageXClientDecodeSuccessRateByTime(array $json)
 * @method array DescribeImageXClientDecodeDurationByTime(array $json)
 * @method array DescribeImageXClientQueueDurationByTime(array $json)
 * @method array DescribeImageXClientErrorCodeByTime(array $json)
 * @method array DescribeImageXClientErrorCodeAll(array $json)
 * @method array DescribeImageXClientLoadDuration(array $json)
 * @method array DescribeImageXClientLoadDurationAll(array $json)
 * @method array DescribeImageXClientSdkVerByTime(array $json)
 * @method array DescribeImageXClientFileSize(array $json)
 * @method array DescribeImageXClientTopFileSize(array $json)
 * @method array DescribeImageXClientCountByTime(array $json)
 * @method array DescribeImageXClientQualityRateByTime(array $json)
 * @method array DescribeImageXClientTopQualityURL(array $json)
 * @method array DescribeImageXClientDemotionRateByTime(array $json)
 * @method array DescribeImageXClientTopDemotionURL(array $json)
 * @method array DescribeImageXClientScoreByTime(array $json)
 * @method array DescribeImageXSensibleCountByTime(array $json)
 * @method array DescribeImageXSensibleCacheHitRateByTime(array $json)
 * @method array DescribeImageXSensibleTopSizeURL(array $json)
 * @method array DescribeImageXSensibleTopResolutionURL(array $json)
 * @method array DescribeImageXSensibleTopRamURL(array $json)
 * @method array DescribeImageXSensibleTopUnknownURL(array $json)
 * @method array CreateBatchProcessTask(array $query, array $json)
 * @method array GetBatchProcessResult(array $query, array $json)
 * @method array GetBatchTaskInfo(array $query)
 * @method array AIProcess(array $query, array $json)
 * @method array CreateImageAITask(array $query, array $json)
 * @method array GetImageAITasks(array $query)
 * @method array GetImageAIDetails(array $query)
 * @method array UpdateImageResourceStatus(array $query, array $json)
 * @method array UpdateFileStorageClass(array $query, array $json)
 * @method array GetImageStorageFiles(array $query)
 * @method array DeleteImageUploadFiles(array $query, array $json)
 * @method array CreateFileRestore(array $query, array $json)
 * @method array UpdateImageUploadFiles(array $query, array $json)
 * @method array CommitImageUpload(array $query, array $json)
 * @method array UpdateImageFileCT(array $query, array $json)
 * @method array ApplyVpcUploadInfo(array $query)
 * @method array ApplyImageUpload(array $query)
 * @method array GetImageUploadFile(array $query)
 * @method array GetImageUploadFiles(array $query)
 * @method array GetImageUpdateFiles(array $query)
 * @method array PreviewImageUploadFile(array $query)
 * @method array GetImageEraseResult(array $json)
 * @method array GetImageService(array $query)
 * @method array GetAllImageServices(array $query)
 * @method array CreateImageCompressTask(array $query, array $json)
 * @method array FetchImageUrl(array $json)
 * @method array UpdateImageStorageTTL(array $json)
 * @method array GetCompressTaskInfo(array $query)
 * @method array GetUrlFetchTask(array $query)
 * @method array GetResourceURL(array $query)
 * @method array CreateImageFromUri(array $query, array $json)
 * @method array UpdateImageFileKey(array $query, array $json)
 * @method array CreateImageContentTask(array $query, array $json)
 * @method array GetImageContentTaskDetail(array $json)
 * @method array GetImageContentBlockList(array $query, array $json)
 * @method array CreateImageTranscodeQueue(array $json)
 * @method array DeleteImageTranscodeQueue(array $json)
 * @method array UpdateImageTranscodeQueue(array $json)
 * @method array UpdateImageTranscodeQueueStatus(array $json)
 * @method array GetImageTranscodeQueues(array $query)
 * @method array CreateImageTranscodeTask(array $json)
 * @method array GetImageTranscodeDetails(array $query)
 * @method array CreateImageTranscodeCallback(array $json)
 * @method array DeleteImageTranscodeDetail(array $json)
 * @method array GetImagePSDetection(array $query, array $json)
 * @method array GetImageSuperResolutionResult(array $json)
 * @method array GetDenoisingImage(array $query, array $json)
 * @method array GetImageDuplicateDetection(array $query, array $json)
 * @method array GetImageOCRV2(array $query, array $json)
 * @method array GetImageBgFillResult(array $json)
 * @method array GetSegmentImage(array $query, array $json)
 * @method array GetImageSmartCropResult(array $json)
 * @method array GetImageComicResult(array $json)
 * @method array GetImageEnhanceResult(array $json)
 * @method array GetImageQuality(array $query, array $json)
 * @method array GetLicensePlateDetection(array $query, array $json)
 * @method array GetPrivateImageType(array $query, array $json)
 * @method array CreateCVImageGenerateTask(array $query, array $json)
 * @method array CreateHiddenWatermarkImage(array $query, array $json)
 * @method array CreateHmExtractTask(array $query, array $json)
 * @method array UpdateImageExifData(array $query, array $json)
 * @method array GetImageDetectResult(array $query, array $json)
 * @method array GetCVImageGenerateResult(array $query, array $json)
 * @method array CreateImageHmExtract(array $query)
 * @method array GetCVTextGenerateImage(array $query, array $json)
 * @method array GetCVImageGenerateTask(array $query, array $json)
 * @method array CreateImageHmEmbed(array $json)
 * @method array GetCVAnimeGenerateImage(array $query, array $json)
 * @method array GetComprehensiveEnhanceImage(array $json)
 * @method array GetImageAiGenerateTask(array $query)
 * @method array GetProductAIGCResult(array $query, array $json)
 * @method array GetImageEraseModels(array $query)
 * @method array GetDedupTaskStatus(array $query)
 * @method array GetImageHmExtractTaskInfo(array $query, array $json)
 * @method array CreateImageService(array $json)
 * @method array DeleteImageService(array $query)
 * @method array UpdateImageAuthKey(array $query, array $json)
 * @method array UpdateResEventRule(array $query, array $json)
 * @method array UpdateServiceName(array $query, array $json)
 * @method array UpdateStorageRules(array $query, array $json)
 * @method array UpdateStorageRulesV2(array $query, array $json)
 * @method array UpdateImageObjectAccess(array $query, array $json)
 * @method array UpdateImageUploadOverwrite(array $query, array $json)
 * @method array UpdateImageMirrorConf(array $query, array $json)
 * @method array GetImageServiceSubscription(array $query)
 * @method array GetImageAuthKey(array $query)
 * @method array CreateImageAnalyzeTask(array $json)
 * @method array DeleteImageAnalyzeTaskRun(array $json)
 * @method array DeleteImageAnalyzeTask(array $json)
 * @method array UpdateImageAnalyzeTaskStatus(array $json)
 * @method array UpdateImageAnalyzeTask(array $json)
 * @method array GetImageAnalyzeTasks(array $query)
 * @method array GetImageAnalyzeResult(array $query)
 * @method array DeleteImageElements(array $query, array $json)
 * @method array DeleteImageBackgroundColors(array $query, array $json)
 * @method array DeleteImageStyle(array $query, array $json)
 * @method array CreateImageStyle(array $query, array $json)
 * @method array UpdateImageStyleMeta(array $query, array $json)
 * @method array AddImageElements(array $query, array $json)
 * @method array AddImageBackgroundColors(array $query, array $json)
 * @method array UpdateImageStyle(array $query, array $json)
 * @method array GetImageFonts(array $query)
 * @method array GetImageElements(array $query)
 * @method array GetImageBackgroundColors(array $query)
 * @method array GetImageStyles(array $query)
 * @method array GetImageStyleDetail(array $query)
 * @method array GetImageStyleResult(array $query, array $json)
 * @method array DownloadCert(array $query)
 * @method array GetImageAllDomainCert(array $query)
 * @method array GetCertInfo(array $query)
 * @method array GetAllCerts(array $query)
 * @method array CreateImageTemplate(array $query, array $json)
 * @method array DeleteTemplatesFromBin(array $query, array $json)
 * @method array DeleteImageTemplate(array $query, array $json)
 * @method array CreateImageTemplatesByImport(array $query, array $json)
 * @method array CreateTemplatesFromBin(array $query, array $json)
 * @method array GetImageTemplate(array $query)
 * @method array GetTemplatesFromBin(array $query)
 * @method array GetAllImageTemplates(array $query)
 * @method array CreateImageAuditTask(array $json)
 * @method array DeleteImageAuditResult(array $json)
 * @method array GetSyncAuditResult(array $query, array $json)
 * @method array UpdateImageAuditTaskStatus(array $json)
 * @method array UpdateImageAuditTask(array $json)
 * @method array UpdateAuditImageStatus(array $json)
 * @method array GetImageAuditTasks(array $query)
 * @method array GetImageAuditResult(array $query)
 * @method array GetAuditEntrysCount(array $query)
 * @method array CreateImageRetryAuditTask(array $json)
 */
trait ImagexTrait
{
}
