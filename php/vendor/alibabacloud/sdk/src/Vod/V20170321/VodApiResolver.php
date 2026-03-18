<?php

namespace AlibabaCloud\Vod\V20170321;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AddAITemplate addAITemplate(array $options = [])
 * @method AddCategory addCategory(array $options = [])
 * @method AddEditingProject addEditingProject(array $options = [])
 * @method AddEditingProjectMaterials addEditingProjectMaterials(array $options = [])
 * @method AddTranscodeTemplateGroup addTranscodeTemplateGroup(array $options = [])
 * @method AddVodDomain addVodDomain(array $options = [])
 * @method AddVodStorageForApp addVodStorageForApp(array $options = [])
 * @method AddVodTemplate addVodTemplate(array $options = [])
 * @method AddWatermark addWatermark(array $options = [])
 * @method AttachAppPolicyToIdentity attachAppPolicyToIdentity(array $options = [])
 * @method BatchSetVodDomainConfigs batchSetVodDomainConfigs(array $options = [])
 * @method BatchStartVodDomain batchStartVodDomain(array $options = [])
 * @method BatchStopVodDomain batchStopVodDomain(array $options = [])
 * @method CancelUrlUploadJobs cancelUrlUploadJobs(array $options = [])
 * @method CreateAppInfo createAppInfo(array $options = [])
 * @method CreateAudit createAudit(array $options = [])
 * @method CreateUploadAttachedMedia createUploadAttachedMedia(array $options = [])
 * @method CreateUploadImage createUploadImage(array $options = [])
 * @method CreateUploadVideo createUploadVideo(array $options = [])
 * @method DecryptKMSDataKey decryptKMSDataKey(array $options = [])
 * @method DeleteAIImageInfos deleteAIImageInfos(array $options = [])
 * @method DeleteAITemplate deleteAITemplate(array $options = [])
 * @method DeleteAppInfo deleteAppInfo(array $options = [])
 * @method DeleteAttachedMedia deleteAttachedMedia(array $options = [])
 * @method DeleteCategory deleteCategory(array $options = [])
 * @method DeleteDynamicImage deleteDynamicImage(array $options = [])
 * @method DeleteEditingProject deleteEditingProject(array $options = [])
 * @method DeleteEditingProjectMaterials deleteEditingProjectMaterials(array $options = [])
 * @method DeleteImage deleteImage(array $options = [])
 * @method DeleteMessageCallback deleteMessageCallback(array $options = [])
 * @method DeleteMezzanines deleteMezzanines(array $options = [])
 * @method DeleteMultipartUpload deleteMultipartUpload(array $options = [])
 * @method DeleteStream deleteStream(array $options = [])
 * @method DeleteTranscodeTemplateGroup deleteTranscodeTemplateGroup(array $options = [])
 * @method DeleteVideo deleteVideo(array $options = [])
 * @method DeleteVodDomain deleteVodDomain(array $options = [])
 * @method DeleteVodSpecificConfig deleteVodSpecificConfig(array $options = [])
 * @method DeleteVodTemplate deleteVodTemplate(array $options = [])
 * @method DeleteWatermark deleteWatermark(array $options = [])
 * @method DescribePlayTopVideos describePlayTopVideos(array $options = [])
 * @method DescribePlayUserAvg describePlayUserAvg(array $options = [])
 * @method DescribePlayUserTotal describePlayUserTotal(array $options = [])
 * @method DescribePlayVideoStatis describePlayVideoStatis(array $options = [])
 * @method DescribeVodAIData describeVodAIData(array $options = [])
 * @method DescribeVodCertificateList describeVodCertificateList(array $options = [])
 * @method DescribeVodDomainBpsData describeVodDomainBpsData(array $options = [])
 * @method DescribeVodDomainBpsDataByLayer describeVodDomainBpsDataByLayer(array $options = [])
 * @method DescribeVodDomainCertificateInfo describeVodDomainCertificateInfo(array $options = [])
 * @method DescribeVodDomainConfigs describeVodDomainConfigs(array $options = [])
 * @method DescribeVodDomainDetail describeVodDomainDetail(array $options = [])
 * @method DescribeVodDomainHitRateData describeVodDomainHitRateData(array $options = [])
 * @method DescribeVodDomainLog describeVodDomainLog(array $options = [])
 * @method DescribeVodDomainMax95BpsData describeVodDomainMax95BpsData(array $options = [])
 * @method DescribeVodDomainQpsData describeVodDomainQpsData(array $options = [])
 * @method DescribeVodDomainRealTimeBpsData describeVodDomainRealTimeBpsData(array $options = [])
 * @method DescribeVodDomainRealTimeByteHitRateData describeVodDomainRealTimeByteHitRateData(array $options = [])
 * @method DescribeVodDomainRealTimeDetailData describeVodDomainRealTimeDetailData(array $options = [])
 * @method DescribeVodDomainRealTimeHttpCodeData describeVodDomainRealTimeHttpCodeData(array $options = [])
 * @method DescribeVodDomainRealTimeQpsData describeVodDomainRealTimeQpsData(array $options = [])
 * @method DescribeVodDomainRealTimeReqHitRateData describeVodDomainRealTimeReqHitRateData(array $options = [])
 * @method DescribeVodDomainRealTimeTrafficData describeVodDomainRealTimeTrafficData(array $options = [])
 * @method DescribeVodDomainReqHitRateData describeVodDomainReqHitRateData(array $options = [])
 * @method DescribeVodDomainSrcBpsData describeVodDomainSrcBpsData(array $options = [])
 * @method DescribeVodDomainSrcTrafficData describeVodDomainSrcTrafficData(array $options = [])
 * @method DescribeVodDomainTrafficData describeVodDomainTrafficData(array $options = [])
 * @method DescribeVodDomainUsageData describeVodDomainUsageData(array $options = [])
 * @method DescribeVodMediaPlayData describeVodMediaPlayData(array $options = [])
 * @method DescribeVodRangeDataByLocateAndIspService describeVodRangeDataByLocateAndIspService(array $options = [])
 * @method DescribeVodRefreshQuota describeVodRefreshQuota(array $options = [])
 * @method DescribeVodRefreshTasks describeVodRefreshTasks(array $options = [])
 * @method DescribeVodStorageData describeVodStorageData(array $options = [])
 * @method DescribeVodTieringStorageData describeVodTieringStorageData(array $options = [])
 * @method DescribeVodTieringStorageRetrievalData describeVodTieringStorageRetrievalData(array $options = [])
 * @method DescribeVodTranscodeData describeVodTranscodeData(array $options = [])
 * @method DescribeVodUserDomains describeVodUserDomains(array $options = [])
 * @method DescribeVodVerifyContent describeVodVerifyContent(array $options = [])
 * @method DetachAppPolicyFromIdentity detachAppPolicyFromIdentity(array $options = [])
 * @method GenerateDownloadSecretKey generateDownloadSecretKey(array $options = [])
 * @method GenerateKMSDataKey generateKMSDataKey(array $options = [])
 * @method GetAIImageJobs getAIImageJobs(array $options = [])
 * @method GetAIMediaAuditJob getAIMediaAuditJob(array $options = [])
 * @method GetAITemplate getAITemplate(array $options = [])
 * @method GetAIVideoTagResult getAIVideoTagResult(array $options = [])
 * @method GetAppInfos getAppInfos(array $options = [])
 * @method GetAttachedMediaInfo getAttachedMediaInfo(array $options = [])
 * @method GetAuditHistory getAuditHistory(array $options = [])
 * @method GetCategories getCategories(array $options = [])
 * @method GetDefaultAITemplate getDefaultAITemplate(array $options = [])
 * @method GetDigitalWatermarkExtractResult getDigitalWatermarkExtractResult(array $options = [])
 * @method GetEditingProject getEditingProject(array $options = [])
 * @method GetEditingProjectMaterials getEditingProjectMaterials(array $options = [])
 * @method GetImageInfo getImageInfo(array $options = [])
 * @method GetImageInfos getImageInfos(array $options = [])
 * @method GetMediaAuditAudioResultDetail getMediaAuditAudioResultDetail(array $options = [])
 * @method GetMediaAuditResult getMediaAuditResult(array $options = [])
 * @method GetMediaAuditResultDetail getMediaAuditResultDetail(array $options = [])
 * @method GetMediaAuditResultTimeline getMediaAuditResultTimeline(array $options = [])
 * @method GetMediaDNAResult getMediaDNAResult(array $options = [])
 * @method GetMediaRefreshJobs getMediaRefreshJobs(array $options = [])
 * @method GetMessageCallback getMessageCallback(array $options = [])
 * @method GetMezzanineInfo getMezzanineInfo(array $options = [])
 * @method GetPlayInfo getPlayInfo(array $options = [])
 * @method GetTranscodeSummary getTranscodeSummary(array $options = [])
 * @method GetTranscodeTask getTranscodeTask(array $options = [])
 * @method GetTranscodeTemplateGroup getTranscodeTemplateGroup(array $options = [])
 * @method GetUploadDetails getUploadDetails(array $options = [])
 * @method GetURLUploadInfos getURLUploadInfos(array $options = [])
 * @method GetVideoInfo getVideoInfo(array $options = [])
 * @method GetVideoInfos getVideoInfos(array $options = [])
 * @method GetVideoList getVideoList(array $options = [])
 * @method GetVideoPlayAuth getVideoPlayAuth(array $options = [])
 * @method GetVodTemplate getVodTemplate(array $options = [])
 * @method GetWatermark getWatermark(array $options = [])
 * @method ListAIImageInfo listAIImageInfo(array $options = [])
 * @method ListAIJob listAIJob(array $options = [])
 * @method ListAITemplate listAITemplate(array $options = [])
 * @method ListAppInfo listAppInfo(array $options = [])
 * @method ListAppPoliciesForIdentity listAppPoliciesForIdentity(array $options = [])
 * @method ListAuditSecurityIp listAuditSecurityIp(array $options = [])
 * @method ListDynamicImage listDynamicImage(array $options = [])
 * @method ListLiveRecordVideo listLiveRecordVideo(array $options = [])
 * @method ListSnapshots listSnapshots(array $options = [])
 * @method ListTranscodeTask listTranscodeTask(array $options = [])
 * @method ListTranscodeTemplateGroup listTranscodeTemplateGroup(array $options = [])
 * @method ListVodTemplate listVodTemplate(array $options = [])
 * @method ListWatermark listWatermark(array $options = [])
 * @method MoveAppResource moveAppResource(array $options = [])
 * @method PreloadVodObjectCaches preloadVodObjectCaches(array $options = [])
 * @method ProduceEditingProjectVideo produceEditingProjectVideo(array $options = [])
 * @method RefreshMediaPlayUrls refreshMediaPlayUrls(array $options = [])
 * @method RefreshUploadVideo refreshUploadVideo(array $options = [])
 * @method RefreshVodObjectCaches refreshVodObjectCaches(array $options = [])
 * @method RegisterMedia registerMedia(array $options = [])
 * @method RestoreMedia restoreMedia(array $options = [])
 * @method SearchEditingProject searchEditingProject(array $options = [])
 * @method SearchMedia searchMedia(array $options = [])
 * @method SetAuditSecurityIp setAuditSecurityIp(array $options = [])
 * @method SetCrossdomainContent setCrossdomainContent(array $options = [])
 * @method SetDefaultAITemplate setDefaultAITemplate(array $options = [])
 * @method SetDefaultTranscodeTemplateGroup setDefaultTranscodeTemplateGroup(array $options = [])
 * @method SetDefaultWatermark setDefaultWatermark(array $options = [])
 * @method SetEditingProjectMaterials setEditingProjectMaterials(array $options = [])
 * @method SetMessageCallback setMessageCallback(array $options = [])
 * @method SetVodDomainCertificate setVodDomainCertificate(array $options = [])
 * @method SubmitAIImageAuditJob submitAIImageAuditJob(array $options = [])
 * @method SubmitAIImageJob submitAIImageJob(array $options = [])
 * @method SubmitAIJob submitAIJob(array $options = [])
 * @method SubmitAIMediaAuditJob submitAIMediaAuditJob(array $options = [])
 * @method SubmitDigitalWatermarkExtractJob submitDigitalWatermarkExtractJob(array $options = [])
 * @method SubmitDynamicImageJob submitDynamicImageJob(array $options = [])
 * @method SubmitMediaDNADeleteJob submitMediaDNADeleteJob(array $options = [])
 * @method SubmitPreprocessJobs submitPreprocessJobs(array $options = [])
 * @method SubmitSnapshotJob submitSnapshotJob(array $options = [])
 * @method SubmitTranscodeJobs submitTranscodeJobs(array $options = [])
 * @method SubmitWorkflowJob submitWorkflowJob(array $options = [])
 * @method UpdateAITemplate updateAITemplate(array $options = [])
 * @method UpdateAppInfo updateAppInfo(array $options = [])
 * @method UpdateAttachedMediaInfos updateAttachedMediaInfos(array $options = [])
 * @method UpdateCategory updateCategory(array $options = [])
 * @method UpdateEditingProject updateEditingProject(array $options = [])
 * @method UpdateImageInfos updateImageInfos(array $options = [])
 * @method UpdateMediaStorageClass updateMediaStorageClass(array $options = [])
 * @method UpdateTranscodeTemplateGroup updateTranscodeTemplateGroup(array $options = [])
 * @method UpdateVideoInfo updateVideoInfo(array $options = [])
 * @method UpdateVideoInfos updateVideoInfos(array $options = [])
 * @method UpdateVodDomain updateVodDomain(array $options = [])
 * @method UpdateVodTemplate updateVodTemplate(array $options = [])
 * @method UpdateWatermark updateWatermark(array $options = [])
 * @method UploadMediaByURL uploadMediaByURL(array $options = [])
 * @method UploadStreamByURL uploadStreamByURL(array $options = [])
 * @method VerifyVodDomainOwner verifyVodDomainOwner(array $options = [])
 */
class VodApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'vod';

    /** @var string */
    public $version = '2017-03-21';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'vod';
}

/**
 * @method string getTemplateConfig()
 * @method $this withTemplateConfig($value)
 * @method string getTemplateType()
 * @method $this withTemplateType($value)
 * @method string getTemplateName()
 * @method $this withTemplateName($value)
 */
class AddAITemplate extends Rpc
{
}

/**
 * @method string getType()
 * @method $this withType($value)
 * @method string getParentId()
 * @method $this withParentId($value)
 * @method string getCateName()
 * @method $this withCateName($value)
 */
class AddCategory extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getTitle()
 * @method $this withTitle($value)
 * @method string getCoverURL()
 * @method $this withCoverURL($value)
 * @method string getDivision()
 * @method $this withDivision($value)
 * @method string getDuration()
 * @method $this withDuration($value)
 * @method string getFEExtend()
 * @method $this withFEExtend($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTimeline()
 * @method $this withTimeline($value)
 */
class AddEditingProject extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getMaterialType()
 * @method $this withMaterialType($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getMaterialIds()
 * @method $this withMaterialIds($value)
 */
class AddEditingProjectMaterials extends Rpc
{
}

/**
 * @method string getTranscodeTemplateList()
 * @method $this withTranscodeTemplateList($value)
 * @method string getTranscodeTemplateGroupId()
 * @method $this withTranscodeTemplateGroupId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class AddTranscodeTemplateGroup extends Rpc
{
}

/**
 * @method string getSources()
 * @method $this withSources($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getScope()
 * @method $this withScope($value)
 * @method string getTopLevelDomain()
 * @method $this withTopLevelDomain($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getCheckUrl()
 * @method $this withCheckUrl($value)
 */
class AddVodDomain extends Rpc
{
}

/**
 * @method string getResourceRealOwnerId()
 * @method $this withResourceRealOwnerId($value)
 * @method string getStorageType()
 * @method $this withStorageType($value)
 * @method string getStorageLocation()
 * @method $this withStorageLocation($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class AddVodStorageForApp extends Rpc
{
}

/**
 * @method string getSubTemplateType()
 * @method $this withSubTemplateType($value)
 * @method string getTemplateConfig()
 * @method $this withTemplateConfig($value)
 * @method string getTemplateType()
 * @method $this withTemplateType($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class AddVodTemplate extends Rpc
{
}

/**
 * @method string getType()
 * @method $this withType($value)
 * @method string getWatermarkConfig()
 * @method $this withWatermarkConfig($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getFileUrl()
 * @method $this withFileUrl($value)
 */
class AddWatermark extends Rpc
{
}

/**
 * @method string getPolicyNames()
 * @method $this withPolicyNames($value)
 * @method string getResourceRealOwnerId()
 * @method $this withResourceRealOwnerId($value)
 * @method string getIdentityName()
 * @method $this withIdentityName($value)
 * @method string getIdentityType()
 * @method $this withIdentityType($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class AttachAppPolicyToIdentity extends Rpc
{
}

/**
 * @method string getFunctions()
 * @method $this withFunctions($value)
 * @method string getDomainNames()
 * @method $this withDomainNames($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class BatchSetVodDomainConfigs extends Rpc
{
}

/**
 * @method string getDomainNames()
 * @method $this withDomainNames($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class BatchStartVodDomain extends Rpc
{
}

/**
 * @method string getDomainNames()
 * @method $this withDomainNames($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class BatchStopVodDomain extends Rpc
{
}

/**
 * @method string getJobIds()
 * @method $this withJobIds($value)
 * @method string getUploadUrls()
 * @method $this withUploadUrls($value)
 */
class CancelUrlUploadJobs extends Rpc
{
}

/**
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getResourceRealOwnerId()
 * @method $this withResourceRealOwnerId($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 */
class CreateAppInfo extends Rpc
{
}

/**
 * @method string getAuditContent()
 * @method $this withAuditContent($value)
 */
class CreateAudit extends Rpc
{
}

/**
 * @method string getIcon()
 * @method $this withIcon($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getFileSize()
 * @method $this withFileSize($value)
 * @method string getTitle()
 * @method $this withTitle($value)
 * @method string getBusinessType()
 * @method $this withBusinessType($value)
 * @method string getStorageLocation()
 * @method $this withStorageLocation($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getCateId()
 * @method $this withCateId($value)
 * @method string getCateIds()
 * @method $this withCateIds($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getMediaExt()
 * @method $this withMediaExt($value)
 * @method string getFileName()
 * @method $this withFileName($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class CreateUploadAttachedMedia extends Rpc
{
}

/**
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getTitle()
 * @method $this withTitle($value)
 * @method string getStorageLocation()
 * @method $this withStorageLocation($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getCateId()
 * @method $this withCateId($value)
 * @method string getImageType()
 * @method $this withImageType($value)
 * @method string getImageExt()
 * @method $this withImageExt($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getOriginalFileName()
 * @method $this withOriginalFileName($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class CreateUploadImage extends Rpc
{
}

/**
 * @method string getTranscodeMode()
 * @method $this withTranscodeMode($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getFileSize()
 * @method $this withFileSize($value)
 * @method string getTitle()
 * @method $this withTitle($value)
 * @method string getStorageLocation()
 * @method $this withStorageLocation($value)
 * @method string getCoverURL()
 * @method $this withCoverURL($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getCateId()
 * @method $this withCateId($value)
 * @method string getWorkflowId()
 * @method $this withWorkflowId($value)
 * @method string getCustomMediaInfo()
 * @method $this withCustomMediaInfo($value)
 * @method string getIP()
 * @method $this withIP($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getFileName()
 * @method $this withFileName($value)
 * @method string getTemplateGroupId()
 * @method $this withTemplateGroupId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class CreateUploadVideo extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceRealOwnerId()
 * @method $this withResourceRealOwnerId($value)
 * @method string getKmsRegionId()
 * @method $this withKmsRegionId($value)
 * @method string getCipherText()
 * @method $this withCipherText($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DecryptKMSDataKey extends Rpc
{
}

/**
 * @method string getAIImageInfoIds()
 * @method $this withAIImageInfoIds($value)
 */
class DeleteAIImageInfos extends Rpc
{
}

/**
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 */
class DeleteAITemplate extends Rpc
{
}

/**
 * @method string getResourceRealOwnerId()
 * @method $this withResourceRealOwnerId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class DeleteAppInfo extends Rpc
{
}

/**
 * @method string getMediaIds()
 * @method $this withMediaIds($value)
 */
class DeleteAttachedMedia extends Rpc
{
}

/**
 * @method string getCateId()
 * @method $this withCateId($value)
 */
class DeleteCategory extends Rpc
{
}

/**
 * @method string getVideoId()
 * @method $this withVideoId($value)
 * @method string getDynamicImageIds()
 * @method $this withDynamicImageIds($value)
 */
class DeleteDynamicImage extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getProjectIds()
 * @method $this withProjectIds($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteEditingProject extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getMaterialType()
 * @method $this withMaterialType($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getMaterialIds()
 * @method $this withMaterialIds($value)
 */
class DeleteEditingProjectMaterials extends Rpc
{
}

/**
 * @method string getImageURLs()
 * @method $this withImageURLs($value)
 * @method string getImageType()
 * @method $this withImageType($value)
 * @method string getVideoId()
 * @method $this withVideoId($value)
 * @method string getDeleteImageType()
 * @method $this withDeleteImageType($value)
 * @method string getImageIds()
 * @method $this withImageIds($value)
 */
class DeleteImage extends Rpc
{
}

/**
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getResourceRealOwnerId()
 * @method $this withResourceRealOwnerId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class DeleteMessageCallback extends Rpc
{
}

/**
 * @method string getForce()
 * @method $this withForce($value)
 * @method string getVideoIds()
 * @method $this withVideoIds($value)
 */
class DeleteMezzanines extends Rpc
{
}

/**
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getResourceRealOwnerId()
 * @method $this withResourceRealOwnerId($value)
 * @method string getMediaId()
 * @method $this withMediaId($value)
 * @method string getMediaType()
 * @method $this withMediaType($value)
 */
class DeleteMultipartUpload extends Rpc
{
}

/**
 * @method string getVideoId()
 * @method $this withVideoId($value)
 * @method string getJobIds()
 * @method $this withJobIds($value)
 */
class DeleteStream extends Rpc
{
}

/**
 * @method string getTranscodeTemplateIds()
 * @method $this withTranscodeTemplateIds($value)
 * @method string getTranscodeTemplateGroupId()
 * @method $this withTranscodeTemplateGroupId($value)
 * @method string getForceDelGroup()
 * @method $this withForceDelGroup($value)
 */
class DeleteTranscodeTemplateGroup extends Rpc
{
}

/**
 * @method string getVideoIds()
 * @method $this withVideoIds($value)
 */
class DeleteVideo extends Rpc
{
}

/**
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class DeleteVodDomain extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getEnv()
 * @method $this withEnv($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getConfigId()
 * @method $this withConfigId($value)
 */
class DeleteVodSpecificConfig extends Rpc
{
}

/**
 * @method string getVodTemplateId()
 * @method $this withVodTemplateId($value)
 */
class DeleteVodTemplate extends Rpc
{
}

/**
 * @method string getWatermarkId()
 * @method $this withWatermarkId($value)
 */
class DeleteWatermark extends Rpc
{
}

/**
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getBizDate()
 * @method $this withBizDate($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 */
class DescribePlayTopVideos extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribePlayUserAvg extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribePlayUserTotal extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getVideoId()
 * @method $this withVideoId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribePlayVideoStatis extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getAIType()
 * @method $this withAIType($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 */
class DescribeVodAIData extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class DescribeVodCertificateList extends Rpc
{
}

/**
 * @method string getLocationNameEn()
 * @method $this withLocationNameEn($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getIspNameEn()
 * @method $this withIspNameEn($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 */
class DescribeVodDomainBpsData extends Rpc
{
}

/**
 * @method string getLocationNameEn()
 * @method $this withLocationNameEn($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getIspNameEn()
 * @method $this withIspNameEn($value)
 * @method string getLayer()
 * @method $this withLayer($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 */
class DescribeVodDomainBpsDataByLayer extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeVodDomainCertificateInfo extends Rpc
{
}

/**
 * @method string getFunctionNames()
 * @method $this withFunctionNames($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class DescribeVodDomainConfigs extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class DescribeVodDomainDetail extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 */
class DescribeVodDomainHitRateData extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeVodDomainLog extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getCycle()
 * @method $this withCycle($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTimePoint()
 * @method $this withTimePoint($value)
 */
class DescribeVodDomainMax95BpsData extends Rpc
{

    /** @var string */
    public $scheme = 'https';

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getLocationNameEn()
 * @method $this withLocationNameEn($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getIspNameEn()
 * @method $this withIspNameEn($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 */
class DescribeVodDomainQpsData extends Rpc
{
}

/**
 * @method string getLocationNameEn()
 * @method $this withLocationNameEn($value)
 * @method string getIspNameEn()
 * @method $this withIspNameEn($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeVodDomainRealTimeBpsData extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeVodDomainRealTimeByteHitRateData extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getLocationNameEn()
 * @method $this withLocationNameEn($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getIspNameEn()
 * @method $this withIspNameEn($value)
 * @method string getMerge()
 * @method $this withMerge($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getMergeLocIsp()
 * @method $this withMergeLocIsp($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getField()
 * @method $this withField($value)
 */
class DescribeVodDomainRealTimeDetailData extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getLocationNameEn()
 * @method $this withLocationNameEn($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getIspNameEn()
 * @method $this withIspNameEn($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeVodDomainRealTimeHttpCodeData extends Rpc
{
}

/**
 * @method string getLocationNameEn()
 * @method $this withLocationNameEn($value)
 * @method string getIspNameEn()
 * @method $this withIspNameEn($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeVodDomainRealTimeQpsData extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeVodDomainRealTimeReqHitRateData extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getLocationNameEn()
 * @method $this withLocationNameEn($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getIspNameEn()
 * @method $this withIspNameEn($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeVodDomainRealTimeTrafficData extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 */
class DescribeVodDomainReqHitRateData extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 */
class DescribeVodDomainSrcBpsData extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 */
class DescribeVodDomainSrcTrafficData extends Rpc
{
}

/**
 * @method string getLocationNameEn()
 * @method $this withLocationNameEn($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getIspNameEn()
 * @method $this withIspNameEn($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 */
class DescribeVodDomainTrafficData extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getArea()
 * @method $this withArea($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getField()
 * @method $this withField($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 */
class DescribeVodDomainUsageData extends Rpc
{
}

/**
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPlayDate()
 * @method $this withPlayDate($value)
 * @method string getOs()
 * @method $this withOs($value)
 * @method string getMediaId()
 * @method $this withMediaId($value)
 * @method string getOrderName()
 * @method $this withOrderName($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 * @method string getTerminalType()
 * @method $this withTerminalType($value)
 * @method string getOrderType()
 * @method $this withOrderType($value)
 */
class DescribeVodMediaPlayData extends Rpc
{
}

/**
 * @method string getLocationNameEn()
 * @method $this withLocationNameEn($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getIspNameEn()
 * @method $this withIspNameEn($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeVodRangeDataByLocateAndIspService extends Rpc
{
}

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class DescribeVodRefreshQuota extends Rpc
{
}

/**
 * @method string getObjectPath()
 * @method $this withObjectPath($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getObjectType()
 * @method $this withObjectType($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeVodRefreshTasks extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getStorage()
 * @method $this withStorage($value)
 * @method string getStorageType()
 * @method $this withStorageType($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 */
class DescribeVodStorageData extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getSplitBy()
 * @method $this withSplitBy($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getStorageClass()
 * @method $this withStorageClass($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 */
class DescribeVodTieringStorageData extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getSplitBy()
 * @method $this withSplitBy($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getStorageClass()
 * @method $this withStorageClass($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 */
class DescribeVodTieringStorageRetrievalData extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getStorage()
 * @method $this withStorage($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getSpecification()
 * @method $this withSpecification($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 */
class DescribeVodTranscodeData extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getCheckDomainShow()
 * @method $this withCheckDomainShow($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getCdnType()
 * @method $this withCdnType($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method array getTag()
 * @method string getFuncFilter()
 * @method $this withFuncFilter($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getFuncId()
 * @method $this withFuncId($value)
 * @method string getDomainStatus()
 * @method $this withDomainStatus($value)
 * @method string getDomainSearchType()
 * @method $this withDomainSearchType($value)
 */
class DescribeVodUserDomains extends Rpc
{

    /**
     * @param array $tag
     *
     * @return $this
     */
	public function withTag(array $tag)
	{
	    $this->data['Tag'] = $tag;
		foreach ($tag as $depth1 => $depth1Value) {
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeVodVerifyContent extends Rpc
{
}

/**
 * @method string getIdentityType()
 * @method $this withIdentityType($value)
 * @method string getPolicyNames()
 * @method $this withPolicyNames($value)
 * @method string getIdentityName()
 * @method $this withIdentityName($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class DetachAppPolicyFromIdentity extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAppDecryptKey()
 * @method $this withAppDecryptKey($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getAppIdentification()
 * @method $this withAppIdentification($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class GenerateDownloadSecretKey extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceRealOwnerId()
 * @method $this withResourceRealOwnerId($value)
 * @method string getKmsRegionId()
 * @method $this withKmsRegionId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class GenerateKMSDataKey extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getJobIds()
 * @method $this withJobIds($value)
 */
class GetAIImageJobs extends Rpc
{
}

/**
 * @method string getJobId()
 * @method $this withJobId($value)
 */
class GetAIMediaAuditJob extends Rpc
{
}

/**
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 */
class GetAITemplate extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getMediaId()
 * @method $this withMediaId($value)
 */
class GetAIVideoTagResult extends Rpc
{
}

/**
 * @method string getResourceRealOwnerId()
 * @method $this withResourceRealOwnerId($value)
 * @method string getAppIds()
 * @method $this withAppIds($value)
 */
class GetAppInfos extends Rpc
{
}

/**
 * @method string getResourceRealOwnerId()
 * @method $this withResourceRealOwnerId($value)
 * @method string getOutputType()
 * @method $this withOutputType($value)
 * @method string getMediaIds()
 * @method $this withMediaIds($value)
 * @method string getAuthTimeout()
 * @method $this withAuthTimeout($value)
 */
class GetAttachedMediaInfo extends Rpc
{
}

/**
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getVideoId()
 * @method $this withVideoId($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getSortBy()
 * @method $this withSortBy($value)
 */
class GetAuditHistory extends Rpc
{
}

/**
 * @method string getType()
 * @method $this withType($value)
 * @method string getCateId()
 * @method $this withCateId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getSortBy()
 * @method $this withSortBy($value)
 */
class GetCategories extends Rpc
{
}

/**
 * @method string getTemplateType()
 * @method $this withTemplateType($value)
 */
class GetDefaultAITemplate extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getExtractType()
 * @method $this withExtractType($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getMediaId()
 * @method $this withMediaId($value)
 */
class GetDigitalWatermarkExtractResult extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getFEExtendFlag()
 * @method $this withFEExtendFlag($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class GetEditingProject extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getMaterialType()
 * @method $this withMaterialType($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class GetEditingProjectMaterials extends Rpc
{
}

/**
 * @method string getImageId()
 * @method $this withImageId($value)
 * @method string getOutputType()
 * @method $this withOutputType($value)
 * @method string getAuthTimeout()
 * @method $this withAuthTimeout($value)
 */
class GetImageInfo extends Rpc
{
}

/**
 * @method string getOutputType()
 * @method $this withOutputType($value)
 * @method string getAuthTimeout()
 * @method $this withAuthTimeout($value)
 * @method string getImageIds()
 * @method $this withImageIds($value)
 */
class GetImageInfos extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getMediaId()
 * @method $this withMediaId($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 */
class GetMediaAuditAudioResultDetail extends Rpc
{
}

/**
 * @method string getMediaId()
 * @method $this withMediaId($value)
 */
class GetMediaAuditResult extends Rpc
{
}

/**
 * @method string getMediaId()
 * @method $this withMediaId($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 */
class GetMediaAuditResultDetail extends Rpc
{
}

/**
 * @method string getMediaId()
 * @method $this withMediaId($value)
 */
class GetMediaAuditResultTimeline extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getMediaId()
 * @method $this withMediaId($value)
 */
class GetMediaDNAResult extends Rpc
{
}

/**
 * @method string getMediaRefreshJobId()
 * @method $this withMediaRefreshJobId($value)
 * @method string getMediaId()
 * @method $this withMediaId($value)
 */
class GetMediaRefreshJobs extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getResourceRealOwnerId()
 * @method $this withResourceRealOwnerId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class GetMessageCallback extends Rpc
{
}

/**
 * @method string getOutputType()
 * @method $this withOutputType($value)
 * @method string getAuthTimeout()
 * @method $this withAuthTimeout($value)
 * @method string getVideoId()
 * @method $this withVideoId($value)
 * @method string getPreviewSegment()
 * @method $this withPreviewSegment($value)
 * @method string getAdditionType()
 * @method $this withAdditionType($value)
 */
class GetMezzanineInfo extends Rpc
{
}

/**
 * @method string getFormats()
 * @method $this withFormats($value)
 * @method string getChannel()
 * @method $this withChannel($value)
 * @method string getDigitalWatermarkType()
 * @method $this withDigitalWatermarkType($value)
 * @method string getPlayerVersion()
 * @method $this withPlayerVersion($value)
 * @method string getRand()
 * @method $this withRand($value)
 * @method string getTrace()
 * @method $this withTrace($value)
 * @method string getReAuthInfo()
 * @method $this withReAuthInfo($value)
 * @method string getPlayConfig()
 * @method $this withPlayConfig($value)
 * @method string getOutputType()
 * @method $this withOutputType($value)
 * @method string getDefinition()
 * @method $this withDefinition($value)
 * @method string getAuthTimeout()
 * @method $this withAuthTimeout($value)
 * @method string getStreamType()
 * @method $this withStreamType($value)
 * @method string getVideoId()
 * @method $this withVideoId($value)
 * @method string getResultType()
 * @method $this withResultType($value)
 * @method string getAdditionType()
 * @method $this withAdditionType($value)
 * @method string getAuthInfo()
 * @method $this withAuthInfo($value)
 */
class GetPlayInfo extends Rpc
{
}

/**
 * @method string getVideoIds()
 * @method $this withVideoIds($value)
 */
class GetTranscodeSummary extends Rpc
{
}

/**
 * @method string getTranscodeTaskId()
 * @method $this withTranscodeTaskId($value)
 */
class GetTranscodeTask extends Rpc
{
}

/**
 * @method string getTranscodeTemplateGroupId()
 * @method $this withTranscodeTemplateGroupId($value)
 */
class GetTranscodeTemplateGroup extends Rpc
{
}

/**
 * @method string getResourceRealOwnerId()
 * @method $this withResourceRealOwnerId($value)
 * @method string getMediaIds()
 * @method $this withMediaIds($value)
 * @method string getMediaType()
 * @method $this withMediaType($value)
 */
class GetUploadDetails extends Rpc
{
}

/**
 * @method string getJobIds()
 * @method $this withJobIds($value)
 * @method string getUploadURLs()
 * @method $this withUploadURLs($value)
 */
class GetURLUploadInfos extends Rpc
{
}

/**
 * @method string getVideoId()
 * @method $this withVideoId($value)
 * @method string getAdditionType()
 * @method $this withAdditionType($value)
 * @method string getResultTypes()
 * @method $this withResultTypes($value)
 */
class GetVideoInfo extends Rpc
{
}

/**
 * @method string getAdditionType()
 * @method $this withAdditionType($value)
 * @method string getVideoIds()
 * @method $this withVideoIds($value)
 */
class GetVideoInfos extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getStorageLocation()
 * @method $this withStorageLocation($value)
 * @method string getCateId()
 * @method $this withCateId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getSortBy()
 * @method $this withSortBy($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class GetVideoList extends Rpc
{
}

/**
 * @method string getReAuthInfo()
 * @method $this withReAuthInfo($value)
 * @method string getPlayConfig()
 * @method $this withPlayConfig($value)
 * @method string getVideoId()
 * @method $this withVideoId($value)
 * @method string getApiVersion()
 * @method $this withApiVersion($value)
 * @method string getAuthInfoTimeout()
 * @method $this withAuthInfoTimeout($value)
 */
class GetVideoPlayAuth extends Rpc
{
}

/**
 * @method string getVodTemplateId()
 * @method $this withVodTemplateId($value)
 */
class GetVodTemplate extends Rpc
{
}

/**
 * @method string getWatermarkId()
 * @method $this withWatermarkId($value)
 */
class GetWatermark extends Rpc
{
}

/**
 * @method string getVideoId()
 * @method $this withVideoId($value)
 */
class ListAIImageInfo extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getJobIds()
 * @method $this withJobIds($value)
 */
class ListAIJob extends Rpc
{
}

/**
 * @method string getTemplateType()
 * @method $this withTemplateType($value)
 */
class ListAITemplate extends Rpc
{
}

/**
 * @method string getResourceRealOwnerId()
 * @method $this withResourceRealOwnerId($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getTag()
 * @method $this withTag($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ListAppInfo extends Rpc
{
}

/**
 * @method string getIdentityType()
 * @method $this withIdentityType($value)
 * @method string getIdentityName()
 * @method $this withIdentityName($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class ListAppPoliciesForIdentity extends Rpc
{
}

/**
 * @method string getSecurityGroupName()
 * @method $this withSecurityGroupName($value)
 */
class ListAuditSecurityIp extends Rpc
{
}

/**
 * @method string getVideoId()
 * @method $this withVideoId($value)
 */
class ListDynamicImage extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 * @method string getQueryType()
 * @method $this withQueryType($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getSortBy()
 * @method $this withSortBy($value)
 */
class ListLiveRecordVideo extends Rpc
{
}

/**
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getAuthTimeout()
 * @method $this withAuthTimeout($value)
 * @method string getVideoId()
 * @method $this withVideoId($value)
 * @method string getSnapshotType()
 * @method $this withSnapshotType($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 */
class ListSnapshots extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getVideoId()
 * @method $this withVideoId($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 */
class ListTranscodeTask extends Rpc
{
}

/**
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListTranscodeTemplateGroup extends Rpc
{
}

/**
 * @method string getTemplateType()
 * @method $this withTemplateType($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class ListVodTemplate extends Rpc
{
}

/**
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListWatermark extends Rpc
{
}

/**
 * @method string getResourceRealOwnerId()
 * @method $this withResourceRealOwnerId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getTargetAppId()
 * @method $this withTargetAppId($value)
 * @method string getResourceIds()
 * @method $this withResourceIds($value)
 */
class MoveAppResource extends Rpc
{
}

/**
 * @method string getObjectPath()
 * @method $this withObjectPath($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getL2Preload()
 * @method $this withL2Preload($value)
 * @method string getArea()
 * @method $this withArea($value)
 * @method string getWithHeader()
 * @method $this withWithHeader($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class PreloadVodObjectCaches extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getTitle()
 * @method $this withTitle($value)
 * @method string getCoverURL()
 * @method $this withCoverURL($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getProduceConfig()
 * @method $this withProduceConfig($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getMediaMetadata()
 * @method $this withMediaMetadata($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getTimeline()
 * @method $this withTimeline($value)
 */
class ProduceEditingProjectVideo extends Rpc
{
}

/**
 * @method string getFormats()
 * @method $this withFormats($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getMediaIds()
 * @method $this withMediaIds($value)
 * @method string getDefinitions()
 * @method $this withDefinitions($value)
 * @method string getStreamType()
 * @method $this withStreamType($value)
 * @method string getTaskType()
 * @method $this withTaskType($value)
 * @method string getSliceFlag()
 * @method $this withSliceFlag($value)
 * @method string getResultType()
 * @method $this withResultType($value)
 * @method string getSliceCount()
 * @method $this withSliceCount($value)
 */
class RefreshMediaPlayUrls extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getVideoId()
 * @method $this withVideoId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class RefreshUploadVideo extends Rpc
{
}

/**
 * @method string getObjectPath()
 * @method $this withObjectPath($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getObjectType()
 * @method $this withObjectType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getForce()
 * @method $this withForce($value)
 */
class RefreshVodObjectCaches extends Rpc
{
}

/**
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getTemplateGroupId()
 * @method $this withTemplateGroupId($value)
 * @method string getRegisterMetadatas()
 * @method $this withRegisterMetadatas($value)
 * @method string getWorkflowId()
 * @method $this withWorkflowId($value)
 */
class RegisterMedia extends Rpc
{
}

/**
 * @method string getRestoreTier()
 * @method $this withRestoreTier($value)
 * @method string getRestoreDays()
 * @method $this withRestoreDays($value)
 * @method string getScope()
 * @method $this withScope($value)
 * @method string getMediaIds()
 * @method $this withMediaIds($value)
 */
class RestoreMedia extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getTitle()
 * @method $this withTitle($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getSortBy()
 * @method $this withSortBy($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class SearchEditingProject extends Rpc
{
}

/**
 * @method string getSessionId()
 * @method $this withSessionId($value)
 * @method string getScrollToken()
 * @method $this withScrollToken($value)
 * @method string getSearchType()
 * @method $this withSearchType($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getResultTypes()
 * @method $this withResultTypes($value)
 * @method string getMatch()
 * @method $this withMatch($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getSortBy()
 * @method $this withSortBy($value)
 * @method string getFields()
 * @method $this withFields($value)
 */
class SearchMedia extends Rpc
{
}

/**
 * @method string getSecurityGroupName()
 * @method $this withSecurityGroupName($value)
 * @method string getOperateMode()
 * @method $this withOperateMode($value)
 * @method string getIps()
 * @method $this withIps($value)
 */
class SetAuditSecurityIp extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceRealOwnerId()
 * @method $this withResourceRealOwnerId($value)
 * @method string getContent()
 * @method $this withContent($value)
 * @method string getStorageLocation()
 * @method $this withStorageLocation($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class SetCrossdomainContent extends Rpc
{
}

/**
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 */
class SetDefaultAITemplate extends Rpc
{
}

/**
 * @method string getTranscodeTemplateGroupId()
 * @method $this withTranscodeTemplateGroupId($value)
 */
class SetDefaultTranscodeTemplateGroup extends Rpc
{
}

/**
 * @method string getWatermarkId()
 * @method $this withWatermarkId($value)
 */
class SetDefaultWatermark extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getMaterialIds()
 * @method $this withMaterialIds($value)
 */
class SetEditingProjectMaterials extends Rpc
{
}

/**
 * @method string getAuthKey()
 * @method $this withAuthKey($value)
 * @method string getResourceRealOwnerId()
 * @method $this withResourceRealOwnerId($value)
 * @method string getCallbackType()
 * @method $this withCallbackType($value)
 * @method string getCallbackSwitch()
 * @method $this withCallbackSwitch($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEventTypeList()
 * @method $this withEventTypeList($value)
 * @method string getMnsQueueName()
 * @method $this withMnsQueueName($value)
 * @method string getMnsEndpoint()
 * @method $this withMnsEndpoint($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getAuthSwitch()
 * @method $this withAuthSwitch($value)
 * @method string getCallbackURL()
 * @method $this withCallbackURL($value)
 */
class SetMessageCallback extends Rpc
{
}

/**
 * @method string getSSLProtocol()
 * @method $this withSSLProtocol($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getSSLPri()
 * @method $this withSSLPri($value)
 * @method string getCertName()
 * @method $this withCertName($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSSLPub()
 * @method $this withSSLPub($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 */
class SetVodDomainCertificate extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getMediaId()
 * @method $this withMediaId($value)
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 * @method string getMediaAuditConfiguration()
 * @method $this withMediaAuditConfiguration($value)
 */
class SubmitAIImageAuditJob extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAIPipelineId()
 * @method $this withAIPipelineId($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getVideoId()
 * @method $this withVideoId($value)
 * @method string getAITemplateId()
 * @method $this withAITemplateId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class SubmitAIImageJob extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getTypes()
 * @method $this withTypes($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getMediaId()
 * @method $this withMediaId($value)
 * @method string getInput()
 * @method $this withInput($value)
 * @method string getConfig()
 * @method $this withConfig($value)
 */
class SubmitAIJob extends Rpc
{
}

/**
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getMediaId()
 * @method $this withMediaId($value)
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 * @method string getMediaAuditConfiguration()
 * @method $this withMediaAuditConfiguration($value)
 * @method string getMediaType()
 * @method $this withMediaType($value)
 */
class SubmitAIMediaAuditJob extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getExtractType()
 * @method $this withExtractType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getMediaId()
 * @method $this withMediaId($value)
 */
class SubmitDigitalWatermarkExtractJob extends Rpc
{
}

/**
 * @method string getDynamicImageTemplateId()
 * @method $this withDynamicImageTemplateId($value)
 * @method string getVideoId()
 * @method $this withVideoId($value)
 * @method string getOverrideParams()
 * @method $this withOverrideParams($value)
 */
class SubmitDynamicImageJob extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getFpDBId()
 * @method $this withFpDBId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getMediaId()
 * @method $this withMediaId($value)
 */
class SubmitMediaDNADeleteJob extends Rpc
{
}

/**
 * @method string getVideoId()
 * @method $this withVideoId($value)
 * @method string getPreprocessType()
 * @method $this withPreprocessType($value)
 */
class SubmitPreprocessJobs extends Rpc
{
}

/**
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getSpecifiedOffsetTime()
 * @method $this withSpecifiedOffsetTime($value)
 * @method string getSpriteSnapshotConfig()
 * @method $this withSpriteSnapshotConfig($value)
 * @method string getSpecifiedOffsetTimes()
 * @method $this withSpecifiedOffsetTimes($value)
 * @method string getSnapshotTemplateId()
 * @method $this withSnapshotTemplateId($value)
 * @method string getHeight()
 * @method $this withHeight($value)
 * @method string getCount()
 * @method $this withCount($value)
 * @method string getVideoId()
 * @method $this withVideoId($value)
 * @method string getWidth()
 * @method $this withWidth($value)
 * @method string getFileUrl()
 * @method $this withFileUrl($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 */
class SubmitSnapshotJob extends Rpc
{
}

/**
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getVideoId()
 * @method $this withVideoId($value)
 * @method string getOverrideParams()
 * @method $this withOverrideParams($value)
 * @method string getPriority()
 * @method $this withPriority($value)
 * @method string getPipelineId()
 * @method $this withPipelineId($value)
 * @method string getTemplateGroupId()
 * @method $this withTemplateGroupId($value)
 * @method string getFileUrl()
 * @method $this withFileUrl($value)
 * @method string getEncryptConfig()
 * @method $this withEncryptConfig($value)
 */
class SubmitTranscodeJobs extends Rpc
{
}

/**
 * @method string getMediaId()
 * @method $this withMediaId($value)
 * @method string getFileUrl()
 * @method $this withFileUrl($value)
 * @method string getWorkflowId()
 * @method $this withWorkflowId($value)
 */
class SubmitWorkflowJob extends Rpc
{
}

/**
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 * @method string getTemplateConfig()
 * @method $this withTemplateConfig($value)
 * @method string getTemplateName()
 * @method $this withTemplateName($value)
 */
class UpdateAITemplate extends Rpc
{
}

/**
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getResourceRealOwnerId()
 * @method $this withResourceRealOwnerId($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class UpdateAppInfo extends Rpc
{
}

/**
 * @method string getUpdateContent()
 * @method $this withUpdateContent($value)
 * @method string getResourceRealOwnerId()
 * @method $this withResourceRealOwnerId($value)
 */
class UpdateAttachedMediaInfos extends Rpc
{
}

/**
 * @method string getCateId()
 * @method $this withCateId($value)
 * @method string getCateName()
 * @method $this withCateName($value)
 */
class UpdateCategory extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getTitle()
 * @method $this withTitle($value)
 * @method string getCoverURL()
 * @method $this withCoverURL($value)
 * @method string getDuration()
 * @method $this withDuration($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getFEExtend()
 * @method $this withFEExtend($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTimeline()
 * @method $this withTimeline($value)
 */
class UpdateEditingProject extends Rpc
{
}

/**
 * @method string getUpdateContent()
 * @method $this withUpdateContent($value)
 * @method string getResourceRealOwnerId()
 * @method $this withResourceRealOwnerId($value)
 */
class UpdateImageInfos extends Rpc
{
}

/**
 * @method string getRestoreTier()
 * @method $this withRestoreTier($value)
 * @method string getScope()
 * @method $this withScope($value)
 * @method string getMediaIds()
 * @method $this withMediaIds($value)
 * @method string getStorageClass()
 * @method $this withStorageClass($value)
 * @method string getAllowUpdateWithoutTimeLimit()
 * @method $this withAllowUpdateWithoutTimeLimit($value)
 */
class UpdateMediaStorageClass extends Rpc
{
}

/**
 * @method string getTranscodeTemplateList()
 * @method $this withTranscodeTemplateList($value)
 * @method string getTranscodeTemplateGroupId()
 * @method $this withTranscodeTemplateGroupId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getLocked()
 * @method $this withLocked($value)
 */
class UpdateTranscodeTemplateGroup extends Rpc
{
}

/**
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getTitle()
 * @method $this withTitle($value)
 * @method string getCoverURL()
 * @method $this withCoverURL($value)
 * @method string getDownloadSwitch()
 * @method $this withDownloadSwitch($value)
 * @method string getCateId()
 * @method $this withCateId($value)
 * @method string getCustomMediaInfo()
 * @method $this withCustomMediaInfo($value)
 * @method string getVideoId()
 * @method $this withVideoId($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class UpdateVideoInfo extends Rpc
{
}

/**
 * @method string getUpdateContent()
 * @method $this withUpdateContent($value)
 */
class UpdateVideoInfos extends Rpc
{
}

/**
 * @method string getTopLevelDomain()
 * @method $this withTopLevelDomain($value)
 * @method string getSources()
 * @method $this withSources($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class UpdateVodDomain extends Rpc
{
}

/**
 * @method string getTemplateConfig()
 * @method $this withTemplateConfig($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getVodTemplateId()
 * @method $this withVodTemplateId($value)
 */
class UpdateVodTemplate extends Rpc
{
}

/**
 * @method string getWatermarkConfig()
 * @method $this withWatermarkConfig($value)
 * @method string getWatermarkId()
 * @method $this withWatermarkId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class UpdateWatermark extends Rpc
{
}

/**
 * @method string getMessageCallback()
 * @method $this withMessageCallback($value)
 * @method string getSessionId()
 * @method $this withSessionId($value)
 * @method string getStorageLocation()
 * @method $this withStorageLocation($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getWorkflowId()
 * @method $this withWorkflowId($value)
 * @method string getS3UploadInfo()
 * @method $this withS3UploadInfo($value)
 * @method string getPriority()
 * @method $this withPriority($value)
 * @method string getTemplateGroupId()
 * @method $this withTemplateGroupId($value)
 * @method string getUploadMetadatas()
 * @method $this withUploadMetadatas($value)
 * @method string getUploadURLs()
 * @method $this withUploadURLs($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class UploadMediaByURL extends Rpc
{
}

/**
 * @method string getFileExtension()
 * @method $this withFileExtension($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getHDRType()
 * @method $this withHDRType($value)
 * @method string getDefinition()
 * @method $this withDefinition($value)
 * @method string getStreamURL()
 * @method $this withStreamURL($value)
 * @method string getMediaId()
 * @method $this withMediaId($value)
 */
class UploadStreamByURL extends Rpc
{
}

/**
 * @method string getVerifyType()
 * @method $this withVerifyType($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class VerifyVodDomainOwner extends Rpc
{
}
