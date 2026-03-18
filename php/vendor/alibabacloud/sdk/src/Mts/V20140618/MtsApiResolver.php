<?php

namespace AlibabaCloud\Mts\V20140618;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method ActivateMediaWorkflow activateMediaWorkflow(array $options = [])
 * @method AddMedia addMedia(array $options = [])
 * @method AddMediaTag addMediaTag(array $options = [])
 * @method AddMediaWorkflow addMediaWorkflow(array $options = [])
 * @method AddPipeline addPipeline(array $options = [])
 * @method AddSmarttagTemplate addSmarttagTemplate(array $options = [])
 * @method AddTemplate addTemplate(array $options = [])
 * @method AddWaterMarkTemplate addWaterMarkTemplate(array $options = [])
 * @method BindInputBucket bindInputBucket(array $options = [])
 * @method BindOutputBucket bindOutputBucket(array $options = [])
 * @method CancelJob cancelJob(array $options = [])
 * @method CreateCustomEntity createCustomEntity(array $options = [])
 * @method CreateCustomGroup createCustomGroup(array $options = [])
 * @method CreateFpShotDB createFpShotDB(array $options = [])
 * @method DeactivateMediaWorkflow deactivateMediaWorkflow(array $options = [])
 * @method DeleteCustomEntity deleteCustomEntity(array $options = [])
 * @method DeleteCustomGroup deleteCustomGroup(array $options = [])
 * @method DeleteCustomView deleteCustomView(array $options = [])
 * @method DeleteMedia deleteMedia(array $options = [])
 * @method DeleteMediaTag deleteMediaTag(array $options = [])
 * @method DeleteMediaWorkflow deleteMediaWorkflow(array $options = [])
 * @method DeletePipeline deletePipeline(array $options = [])
 * @method DeleteSmarttagTemplate deleteSmarttagTemplate(array $options = [])
 * @method DeleteTemplate deleteTemplate(array $options = [])
 * @method DeleteWaterMarkTemplate deleteWaterMarkTemplate(array $options = [])
 * @method ImAudit imAudit(array $options = [])
 * @method ImportFpShotJob importFpShotJob(array $options = [])
 * @method ListAllMediaBucket listAllMediaBucket(array $options = [])
 * @method ListCustomEntities listCustomEntities(array $options = [])
 * @method ListCustomGroups listCustomGroups(array $options = [])
 * @method ListCustomPersons listCustomPersons(array $options = [])
 * @method ListCustomViews listCustomViews(array $options = [])
 * @method ListFpShotDB listFpShotDB(array $options = [])
 * @method ListFpShotFiles listFpShotFiles(array $options = [])
 * @method ListFpShotImportJob listFpShotImportJob(array $options = [])
 * @method ListJob listJob(array $options = [])
 * @method ListMediaWorkflowExecutions listMediaWorkflowExecutions(array $options = [])
 * @method QueryAnalysisJobList queryAnalysisJobList(array $options = [])
 * @method QueryCopyrightExtractJob queryCopyrightExtractJob(array $options = [])
 * @method QueryCopyrightJob queryCopyrightJob(array $options = [])
 * @method QueryFpDBDeleteJobList queryFpDBDeleteJobList(array $options = [])
 * @method QueryFpFileDeleteJobList queryFpFileDeleteJobList(array $options = [])
 * @method QueryFpShotJobList queryFpShotJobList(array $options = [])
 * @method QueryIProductionJob queryIProductionJob(array $options = [])
 * @method QueryJobList queryJobList(array $options = [])
 * @method QueryMediaCensorJobDetail queryMediaCensorJobDetail(array $options = [])
 * @method QueryMediaCensorJobList queryMediaCensorJobList(array $options = [])
 * @method QueryMediaInfoJobList queryMediaInfoJobList(array $options = [])
 * @method QueryMediaList queryMediaList(array $options = [])
 * @method QueryMediaListByURL queryMediaListByURL(array $options = [])
 * @method QueryMediaWorkflowExecutionList queryMediaWorkflowExecutionList(array $options = [])
 * @method QueryMediaWorkflowList queryMediaWorkflowList(array $options = [])
 * @method QueryPipelineList queryPipelineList(array $options = [])
 * @method QuerySmarttagJob querySmarttagJob(array $options = [])
 * @method QuerySmarttagTemplateList querySmarttagTemplateList(array $options = [])
 * @method QuerySnapshotJobList querySnapshotJobList(array $options = [])
 * @method QueryTemplateList queryTemplateList(array $options = [])
 * @method QueryTraceAbJob queryTraceAbJob(array $options = [])
 * @method QueryTraceExtractJob queryTraceExtractJob(array $options = [])
 * @method QueryTraceM3u8Job queryTraceM3u8Job(array $options = [])
 * @method QueryWaterMarkTemplateList queryWaterMarkTemplateList(array $options = [])
 * @method RegisterCustomFace registerCustomFace(array $options = [])
 * @method RegisterCustomView registerCustomView(array $options = [])
 * @method SearchMediaWorkflow searchMediaWorkflow(array $options = [])
 * @method SearchPipeline searchPipeline(array $options = [])
 * @method SearchTemplate searchTemplate(array $options = [])
 * @method SearchWaterMarkTemplate searchWaterMarkTemplate(array $options = [])
 * @method SubmitAnalysisJob submitAnalysisJob(array $options = [])
 * @method SubmitCopyrightExtractJob submitCopyrightExtractJob(array $options = [])
 * @method SubmitCopyrightJob submitCopyrightJob(array $options = [])
 * @method SubmitFpDBDeleteJob submitFpDBDeleteJob(array $options = [])
 * @method SubmitFpFileDeleteJob submitFpFileDeleteJob(array $options = [])
 * @method SubmitFpShotJob submitFpShotJob(array $options = [])
 * @method SubmitImageCopyright submitImageCopyright(array $options = [])
 * @method SubmitIProductionJob submitIProductionJob(array $options = [])
 * @method SubmitJobs submitJobs(array $options = [])
 * @method SubmitMediaCensorJob submitMediaCensorJob(array $options = [])
 * @method SubmitMediaInfoJob submitMediaInfoJob(array $options = [])
 * @method SubmitSmarttagJob submitSmarttagJob(array $options = [])
 * @method SubmitSnapshotJob submitSnapshotJob(array $options = [])
 * @method SubmitTraceAbJob submitTraceAbJob(array $options = [])
 * @method SubmitTraceExtractJob submitTraceExtractJob(array $options = [])
 * @method SubmitTraceM3u8Job submitTraceM3u8Job(array $options = [])
 * @method TagCustomPerson tagCustomPerson(array $options = [])
 * @method UnbindInputBucket unbindInputBucket(array $options = [])
 * @method UnbindOutputBucket unbindOutputBucket(array $options = [])
 * @method UnregisterCustomFace unregisterCustomFace(array $options = [])
 * @method UpdateMedia updateMedia(array $options = [])
 * @method UpdateMediaCategory updateMediaCategory(array $options = [])
 * @method UpdateMediaCover updateMediaCover(array $options = [])
 * @method UpdateMediaPublishState updateMediaPublishState(array $options = [])
 * @method UpdateMediaWorkflow updateMediaWorkflow(array $options = [])
 * @method UpdateMediaWorkflowTriggerMode updateMediaWorkflowTriggerMode(array $options = [])
 * @method UpdatePipeline updatePipeline(array $options = [])
 * @method UpdateSmarttagTemplate updateSmarttagTemplate(array $options = [])
 * @method UpdateTemplate updateTemplate(array $options = [])
 * @method UpdateWaterMarkTemplate updateWaterMarkTemplate(array $options = [])
 */
class MtsApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'Mts';

    /** @var string */
    public $version = '2014-06-18';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'mts';
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
 * @method string getMediaWorkflowId()
 * @method $this withMediaWorkflowId($value)
 */
class ActivateMediaWorkflow extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getTitle()
 * @method $this withTitle($value)
 * @method string getInputUnbind()
 * @method $this withInputUnbind($value)
 * @method string getCoverURL()
 * @method $this withCoverURL($value)
 * @method string getCateId()
 * @method $this withCateId($value)
 * @method string getMediaWorkflowId()
 * @method $this withMediaWorkflowId($value)
 * @method string getMediaWorkflowUserData()
 * @method $this withMediaWorkflowUserData($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOverrideParams()
 * @method $this withOverrideParams($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getFileURL()
 * @method $this withFileURL($value)
 */
class AddMedia extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTag()
 * @method $this withTag($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getMediaId()
 * @method $this withMediaId($value)
 */
class AddMediaTag extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getTopology()
 * @method $this withTopology($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTriggerMode()
 * @method $this withTriggerMode($value)
 * @method string getName()
 * @method $this withName($value)
 */
class AddMediaWorkflow extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getRole()
 * @method $this withRole($value)
 * @method string getSpeed()
 * @method $this withSpeed($value)
 * @method string getExtendConfig()
 * @method $this withExtendConfig($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getNotifyConfig()
 * @method $this withNotifyConfig($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getSpeedLevel()
 * @method $this withSpeedLevel($value)
 */
class AddPipeline extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getKnowledgeConfig()
 * @method $this withKnowledgeConfig($value)
 * @method string getIndustry()
 * @method $this withIndustry($value)
 * @method string getLabelVersion()
 * @method $this withLabelVersion($value)
 * @method string getScene()
 * @method $this withScene($value)
 * @method string getFaceCustomParamsConfig()
 * @method $this withFaceCustomParamsConfig($value)
 * @method string getTemplateName()
 * @method $this withTemplateName($value)
 * @method string getIsDefault()
 * @method $this withIsDefault($value)
 * @method string getFaceCategoryIds()
 * @method $this withFaceCategoryIds($value)
 * @method string getKeywordConfig()
 * @method $this withKeywordConfig($value)
 * @method string getLandmarkGroupIds()
 * @method $this withLandmarkGroupIds($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getObjectGroupIds()
 * @method $this withObjectGroupIds($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAnalyseTypes()
 * @method $this withAnalyseTypes($value)
 * @method string getLabelType()
 * @method $this withLabelType($value)
 */
class AddSmarttagTemplate extends Rpc
{
}

/**
 * @method string getContainer()
 * @method $this withContainer($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getVideo()
 * @method $this withVideo($value)
 * @method string getTransConfig()
 * @method $this withTransConfig($value)
 * @method string getAudio()
 * @method $this withAudio($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getMuxConfig()
 * @method $this withMuxConfig($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class AddTemplate extends Rpc
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
 * @method string getName()
 * @method $this withName($value)
 * @method string getConfig()
 * @method $this withConfig($value)
 */
class AddWaterMarkTemplate extends Rpc
{
}

/**
 * @method string getReferer()
 * @method $this withReferer($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDepositorCredentials()
 * @method $this withDepositorCredentials($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getBucket()
 * @method $this withBucket($value)
 * @method string getRoleArn()
 * @method $this withRoleArn($value)
 */
class BindInputBucket extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDepositorCredentials()
 * @method $this withDepositorCredentials($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getBucket()
 * @method $this withBucket($value)
 * @method string getRoleArn()
 * @method $this withRoleArn($value)
 */
class BindOutputBucket extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CancelJob extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAlgorithm()
 * @method $this withAlgorithm($value)
 * @method string getCustomGroupId()
 * @method $this withCustomGroupId($value)
 * @method string getCustomEntityName()
 * @method $this withCustomEntityName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getCustomEntityInfo()
 * @method $this withCustomEntityInfo($value)
 */
class CreateCustomEntity extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCustomGroupName()
 * @method $this withCustomGroupName($value)
 * @method string getAlgorithm()
 * @method $this withAlgorithm($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getCustomGroupDescription()
 * @method $this withCustomGroupDescription($value)
 */
class CreateCustomGroup extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getModelId()
 * @method $this withModelId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getConfig()
 * @method $this withConfig($value)
 */
class CreateFpShotDB extends Rpc
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
 * @method string getMediaWorkflowId()
 * @method $this withMediaWorkflowId($value)
 */
class DeactivateMediaWorkflow extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAlgorithm()
 * @method $this withAlgorithm($value)
 * @method string getCustomGroupId()
 * @method $this withCustomGroupId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getCustomEntityId()
 * @method $this withCustomEntityId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteCustomEntity extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAlgorithm()
 * @method $this withAlgorithm($value)
 * @method string getCustomGroupId()
 * @method $this withCustomGroupId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteCustomGroup extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCustomViewId()
 * @method $this withCustomViewId($value)
 * @method string getAlgorithm()
 * @method $this withAlgorithm($value)
 * @method string getCustomGroupId()
 * @method $this withCustomGroupId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getCustomEntityId()
 * @method $this withCustomEntityId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteCustomView extends Rpc
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
 * @method string getMediaIds()
 * @method $this withMediaIds($value)
 */
class DeleteMedia extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTag()
 * @method $this withTag($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getMediaId()
 * @method $this withMediaId($value)
 */
class DeleteMediaTag extends Rpc
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
 * @method string getMediaWorkflowId()
 * @method $this withMediaWorkflowId($value)
 */
class DeleteMediaWorkflow extends Rpc
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
 * @method string getPipelineId()
 * @method $this withPipelineId($value)
 */
class DeletePipeline extends Rpc
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
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 */
class DeleteSmarttagTemplate extends Rpc
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
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 */
class DeleteTemplate extends Rpc
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
 * @method string getWaterMarkTemplateId()
 * @method $this withWaterMarkTemplateId($value)
 */
class DeleteWaterMarkTemplate extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getImages()
 * @method $this withImages($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getBizType()
 * @method $this withBizType($value)
 * @method string getContents()
 * @method $this withContents($value)
 * @method string getScenes()
 * @method $this withScenes($value)
 */
class ImAudit extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getFpDBId()
 * @method $this withFpDBId($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getFpImportConfig()
 * @method $this withFpImportConfig($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPipelineId()
 * @method $this withPipelineId($value)
 * @method string getInput()
 * @method $this withInput($value)
 */
class ImportFpShotJob extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getNextPageToken()
 * @method $this withNextPageToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getMaximumPageSize()
 * @method $this withMaximumPageSize($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ListAllMediaBucket extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getAlgorithm()
 * @method $this withAlgorithm($value)
 * @method string getCustomGroupId()
 * @method $this withCustomGroupId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ListCustomEntities extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getAlgorithm()
 * @method $this withAlgorithm($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ListCustomGroups extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPersonId()
 * @method $this withPersonId($value)
 * @method string getCategoryId()
 * @method $this withCategoryId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ListCustomPersons extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getAlgorithm()
 * @method $this withAlgorithm($value)
 * @method string getCustomGroupId()
 * @method $this withCustomGroupId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getCustomEntityId()
 * @method $this withCustomEntityId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ListCustomViews extends Rpc
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
 * @method string getFpDBIds()
 * @method $this withFpDBIds($value)
 */
class ListFpShotDB extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getFpDBId()
 * @method $this withFpDBId($value)
 * @method string getNextPageToken()
 * @method $this withNextPageToken($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
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
 */
class ListFpShotFiles extends Rpc
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
class ListFpShotImportJob extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getNextPageToken()
 * @method $this withNextPageToken($value)
 * @method string getStartOfJobCreatedTimeRange()
 * @method $this withStartOfJobCreatedTimeRange($value)
 * @method string getState()
 * @method $this withState($value)
 * @method string getEndOfJobCreatedTimeRange()
 * @method $this withEndOfJobCreatedTimeRange($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getMaximumPageSize()
 * @method $this withMaximumPageSize($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPipelineId()
 * @method $this withPipelineId($value)
 */
class ListJob extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getNextPageToken()
 * @method $this withNextPageToken($value)
 * @method string getMediaWorkflowId()
 * @method $this withMediaWorkflowId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getMaximumPageSize()
 * @method $this withMaximumPageSize($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getMediaWorkflowName()
 * @method $this withMediaWorkflowName($value)
 * @method string getInputFileURL()
 * @method $this withInputFileURL($value)
 */
class ListMediaWorkflowExecutions extends Rpc
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
 * @method string getAnalysisJobIds()
 * @method $this withAnalysisJobIds($value)
 */
class QueryAnalysisJobList extends Rpc
{
}

/**
 * @method string getJobId()
 * @method $this withJobId($value)
 */
class QueryCopyrightExtractJob extends Rpc
{
}

/**
 * @method string getLevel()
 * @method $this withLevel($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getCreateTimeEnd()
 * @method $this withCreateTimeEnd($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCreateTimeStart()
 * @method $this withCreateTimeStart($value)
 */
class QueryCopyrightJob extends Rpc
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
class QueryFpDBDeleteJobList extends Rpc
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
class QueryFpFileDeleteJobList extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getNextPageToken()
 * @method $this withNextPageToken($value)
 * @method string getStartOfJobCreatedTimeRange()
 * @method $this withStartOfJobCreatedTimeRange($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getState()
 * @method $this withState($value)
 * @method string getEndOfJobCreatedTimeRange()
 * @method $this withEndOfJobCreatedTimeRange($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getMaximumPageSize()
 * @method $this withMaximumPageSize($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPipelineId()
 * @method $this withPipelineId($value)
 * @method string getPrimaryKeyList()
 * @method $this withPrimaryKeyList($value)
 * @method string getJobIds()
 * @method $this withJobIds($value)
 */
class QueryFpShotJobList extends Rpc
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
 * @method string getJobId()
 * @method $this withJobId($value)
 */
class QueryIProductionJob extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getIncludePipelineInfo()
 * @method $this withIncludePipelineInfo($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getJobIds()
 * @method $this withJobIds($value)
 */
class QueryJobList extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getNextPageToken()
 * @method $this withNextPageToken($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getMaximumPageSize()
 * @method $this withMaximumPageSize($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class QueryMediaCensorJobDetail extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getNextPageToken()
 * @method $this withNextPageToken($value)
 * @method string getStartOfJobCreatedTimeRange()
 * @method $this withStartOfJobCreatedTimeRange($value)
 * @method string getState()
 * @method $this withState($value)
 * @method string getEndOfJobCreatedTimeRange()
 * @method $this withEndOfJobCreatedTimeRange($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getMaximumPageSize()
 * @method $this withMaximumPageSize($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPipelineId()
 * @method $this withPipelineId($value)
 * @method string getJobIds()
 * @method $this withJobIds($value)
 */
class QueryMediaCensorJobList extends Rpc
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
 * @method string getMediaInfoJobIds()
 * @method $this withMediaInfoJobIds($value)
 */
class QueryMediaInfoJobList extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getIncludeSummaryList()
 * @method $this withIncludeSummaryList($value)
 * @method string getMediaIds()
 * @method $this withMediaIds($value)
 * @method string getIncludePlayList()
 * @method $this withIncludePlayList($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getIncludeSnapshotList()
 * @method $this withIncludeSnapshotList($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getIncludeMediaInfo()
 * @method $this withIncludeMediaInfo($value)
 */
class QueryMediaList extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getIncludeSummaryList()
 * @method $this withIncludeSummaryList($value)
 * @method string getFileURLs()
 * @method $this withFileURLs($value)
 * @method string getIncludePlayList()
 * @method $this withIncludePlayList($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getIncludeSnapshotList()
 * @method $this withIncludeSnapshotList($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getIncludeMediaInfo()
 * @method $this withIncludeMediaInfo($value)
 */
class QueryMediaListByURL extends Rpc
{
}

/**
 * @method string getRunIds()
 * @method $this withRunIds($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class QueryMediaWorkflowExecutionList extends Rpc
{
}

/**
 * @method string getMediaWorkflowIds()
 * @method $this withMediaWorkflowIds($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class QueryMediaWorkflowList extends Rpc
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
 * @method string getPipelineIds()
 * @method $this withPipelineIds($value)
 */
class QueryPipelineList extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getParams()
 * @method $this withParams($value)
 */
class QuerySmarttagJob extends Rpc
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
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 */
class QuerySmarttagTemplateList extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getNextPageToken()
 * @method $this withNextPageToken($value)
 * @method string getStartOfJobCreatedTimeRange()
 * @method $this withStartOfJobCreatedTimeRange($value)
 * @method string getState()
 * @method $this withState($value)
 * @method string getEndOfJobCreatedTimeRange()
 * @method $this withEndOfJobCreatedTimeRange($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getSnapshotJobIds()
 * @method $this withSnapshotJobIds($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getMaximumPageSize()
 * @method $this withMaximumPageSize($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPipelineId()
 * @method $this withPipelineId($value)
 */
class QuerySnapshotJobList extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTemplateIds()
 * @method $this withTemplateIds($value)
 * @method string getForFrontend()
 * @method $this withForFrontend($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class QueryTemplateList extends Rpc
{
}

/**
 * @method string getMediaId()
 * @method $this withMediaId($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 */
class QueryTraceAbJob extends Rpc
{
}

/**
 * @method string getJobId()
 * @method $this withJobId($value)
 */
class QueryTraceExtractJob extends Rpc
{
}

/**
 * @method string getLevel()
 * @method $this withLevel($value)
 * @method string getMessageId()
 * @method $this withMessageId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getCreateTimeEnd()
 * @method $this withCreateTimeEnd($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCreateTimeStart()
 * @method $this withCreateTimeStart($value)
 */
class QueryTraceM3u8Job extends Rpc
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
 * @method string getWaterMarkTemplateIds()
 * @method $this withWaterMarkTemplateIds($value)
 */
class QueryWaterMarkTemplateList extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPersonId()
 * @method $this withPersonId($value)
 * @method string getCategoryId()
 * @method $this withCategoryId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getImageUrl()
 * @method $this withImageUrl($value)
 */
class RegisterCustomFace extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAlgorithm()
 * @method $this withAlgorithm($value)
 * @method string getCustomGroupId()
 * @method $this withCustomGroupId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getCustomEntityId()
 * @method $this withCustomEntityId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getImageUrl()
 * @method $this withImageUrl($value)
 */
class RegisterCustomView extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getStateList()
 * @method $this withStateList($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class SearchMediaWorkflow extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getState()
 * @method $this withState($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class SearchPipeline extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getForFrontend()
 * @method $this withForFrontend($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getState()
 * @method $this withState($value)
 * @method string getNamePrefix()
 * @method $this withNamePrefix($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 */
class SearchTemplate extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getState()
 * @method $this withState($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class SearchWaterMarkTemplate extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAnalysisConfig()
 * @method $this withAnalysisConfig($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPriority()
 * @method $this withPriority($value)
 * @method string getPipelineId()
 * @method $this withPipelineId($value)
 * @method string getInput()
 * @method $this withInput($value)
 */
class SubmitAnalysisJob extends Rpc
{
}

/**
 * @method string getParams()
 * @method $this withParams($value)
 * @method string getUrl()
 * @method $this withUrl($value)
 * @method string getInput()
 * @method $this withInput($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getCallBack()
 * @method $this withCallBack($value)
 */
class SubmitCopyrightExtractJob extends Rpc
{
}

/**
 * @method string getVisibleMessage()
 * @method $this withVisibleMessage($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getOutput()
 * @method $this withOutput($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getLevel()
 * @method $this withLevel($value)
 * @method string getMessage()
 * @method $this withMessage($value)
 * @method string getParams()
 * @method $this withParams($value)
 * @method string getUrl()
 * @method $this withUrl($value)
 * @method string getInput()
 * @method $this withInput($value)
 * @method string getTotalTime()
 * @method $this withTotalTime($value)
 * @method string getCallBack()
 * @method $this withCallBack($value)
 */
class SubmitCopyrightJob extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getFpDBId()
 * @method $this withFpDBId($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPipelineId()
 * @method $this withPipelineId($value)
 * @method string getDelType()
 * @method $this withDelType($value)
 */
class SubmitFpDBDeleteJob extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getFpDBId()
 * @method $this withFpDBId($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getPrimaryKeys()
 * @method $this withPrimaryKeys($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPipelineId()
 * @method $this withPipelineId($value)
 * @method string getFileIds()
 * @method $this withFileIds($value)
 */
class SubmitFpFileDeleteJob extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getFpShotConfig()
 * @method $this withFpShotConfig($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPipelineId()
 * @method $this withPipelineId($value)
 * @method string getInput()
 * @method $this withInput($value)
 */
class SubmitFpShotJob extends Rpc
{
}

/**
 * @method string getLevel()
 * @method $this withLevel($value)
 * @method string getMessage()
 * @method $this withMessage($value)
 * @method string getParams()
 * @method $this withParams($value)
 * @method string getUrl()
 * @method $this withUrl($value)
 * @method string getOutput()
 * @method $this withOutput($value)
 * @method string getInput()
 * @method $this withInput($value)
 */
class SubmitImageCopyright extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJobParams()
 * @method $this withJobParams($value)
 * @method string getOutput()
 * @method $this withOutput($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getFunctionName()
 * @method $this withFunctionName($value)
 * @method string getNotifyUrl()
 * @method $this withNotifyUrl($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getModelId()
 * @method $this withModelId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPipelineId()
 * @method $this withPipelineId($value)
 * @method string getInput()
 * @method $this withInput($value)
 * @method string getScheduleParams()
 * @method $this withScheduleParams($value)
 */
class SubmitIProductionJob extends Rpc
{
}

/**
 * @method string getOutputs()
 * @method $this withOutputs($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getOutputLocation()
 * @method $this withOutputLocation($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPipelineId()
 * @method $this withPipelineId($value)
 * @method string getInput()
 * @method $this withInput($value)
 * @method string getOutputBucket()
 * @method $this withOutputBucket($value)
 */
class SubmitJobs extends Rpc
{
}

/**
 * @method string getExternalUrl()
 * @method $this withExternalUrl($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getTitle()
 * @method $this withTitle($value)
 * @method string getVideoCensorConfig()
 * @method $this withVideoCensorConfig($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getCoverImages()
 * @method $this withCoverImages($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPipelineId()
 * @method $this withPipelineId($value)
 * @method string getInput()
 * @method $this withInput($value)
 * @method string getBarrages()
 * @method $this withBarrages($value)
 */
class SubmitMediaCensorJob extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPipelineId()
 * @method $this withPipelineId($value)
 * @method string getInput()
 * @method $this withInput($value)
 * @method string getAsync()
 * @method $this withAsync($value)
 */
class SubmitMediaInfoJob extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTitle()
 * @method $this withTitle($value)
 * @method string getContent()
 * @method $this withContent($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getNotifyUrl()
 * @method $this withNotifyUrl($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getParams()
 * @method $this withParams($value)
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 * @method string getPriority()
 * @method $this withPriority($value)
 * @method string getPipelineId()
 * @method $this withPipelineId($value)
 * @method string getContentType()
 * @method $this withContentType($value)
 * @method string getInput()
 * @method $this withInput($value)
 * @method string getContentAddr()
 * @method $this withContentAddr($value)
 */
class SubmitSmarttagJob extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSnapshotConfig()
 * @method $this withSnapshotConfig($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPipelineId()
 * @method $this withPipelineId($value)
 * @method string getInput()
 * @method $this withInput($value)
 */
class SubmitSnapshotJob extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getOutput()
 * @method $this withOutput($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getCipherBase64ed()
 * @method $this withCipherBase64ed($value)
 * @method string getLevel()
 * @method $this withLevel($value)
 * @method string getUrl()
 * @method $this withUrl($value)
 * @method string getInput()
 * @method $this withInput($value)
 * @method string getTotalTime()
 * @method $this withTotalTime($value)
 * @method string getCallBack()
 * @method $this withCallBack($value)
 */
class SubmitTraceAbJob extends Rpc
{
}

/**
 * @method string getParams()
 * @method $this withParams($value)
 * @method string getUrl()
 * @method $this withUrl($value)
 * @method string getInput()
 * @method $this withInput($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getCallBack()
 * @method $this withCallBack($value)
 */
class SubmitTraceExtractJob extends Rpc
{
}

/**
 * @method string getMediaId()
 * @method $this withMediaId($value)
 * @method string getParams()
 * @method $this withParams($value)
 * @method string getOutput()
 * @method $this withOutput($value)
 * @method string getTrace()
 * @method $this withTrace($value)
 * @method string getKeyUri()
 * @method $this withKeyUri($value)
 */
class SubmitTraceM3u8Job extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPersonDescription()
 * @method $this withPersonDescription($value)
 * @method string getCategoryDescription()
 * @method $this withCategoryDescription($value)
 * @method string getPersonId()
 * @method $this withPersonId($value)
 * @method string getCategoryId()
 * @method $this withCategoryId($value)
 * @method string getPersonName()
 * @method $this withPersonName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getCategoryName()
 * @method $this withCategoryName($value)
 */
class TagCustomPerson extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDepositorCredentials()
 * @method $this withDepositorCredentials($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getBucket()
 * @method $this withBucket($value)
 * @method string getRoleArn()
 * @method $this withRoleArn($value)
 */
class UnbindInputBucket extends Rpc
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
 * @method string getBucket()
 * @method $this withBucket($value)
 */
class UnbindOutputBucket extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPersonId()
 * @method $this withPersonId($value)
 * @method string getCategoryId()
 * @method $this withCategoryId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getFaceId()
 * @method $this withFaceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class UnregisterCustomFace extends Rpc
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
 * @method string getCateId()
 * @method $this withCateId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getMediaId()
 * @method $this withMediaId($value)
 * @method string getTags()
 * @method $this withTags($value)
 */
class UpdateMedia extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCateId()
 * @method $this withCateId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getMediaId()
 * @method $this withMediaId($value)
 */
class UpdateMediaCategory extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCoverURL()
 * @method $this withCoverURL($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getMediaId()
 * @method $this withMediaId($value)
 */
class UpdateMediaCover extends Rpc
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
 * @method string getPublish()
 * @method $this withPublish($value)
 */
class UpdateMediaPublishState extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getMediaWorkflowId()
 * @method $this withMediaWorkflowId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getTopology()
 * @method $this withTopology($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTriggerMode()
 * @method $this withTriggerMode($value)
 * @method string getName()
 * @method $this withName($value)
 */
class UpdateMediaWorkflow extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getMediaWorkflowId()
 * @method $this withMediaWorkflowId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTriggerMode()
 * @method $this withTriggerMode($value)
 */
class UpdateMediaWorkflowTriggerMode extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getRole()
 * @method $this withRole($value)
 * @method string getState()
 * @method $this withState($value)
 * @method string getExtendConfig()
 * @method $this withExtendConfig($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getNotifyConfig()
 * @method $this withNotifyConfig($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPipelineId()
 * @method $this withPipelineId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class UpdatePipeline extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getKnowledgeConfig()
 * @method $this withKnowledgeConfig($value)
 * @method string getIndustry()
 * @method $this withIndustry($value)
 * @method string getLabelVersion()
 * @method $this withLabelVersion($value)
 * @method string getScene()
 * @method $this withScene($value)
 * @method string getFaceCustomParamsConfig()
 * @method $this withFaceCustomParamsConfig($value)
 * @method string getTemplateName()
 * @method $this withTemplateName($value)
 * @method string getIsDefault()
 * @method $this withIsDefault($value)
 * @method string getFaceCategoryIds()
 * @method $this withFaceCategoryIds($value)
 * @method string getKeywordConfig()
 * @method $this withKeywordConfig($value)
 * @method string getLandmarkGroupIds()
 * @method $this withLandmarkGroupIds($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getObjectGroupIds()
 * @method $this withObjectGroupIds($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 * @method string getAnalyseTypes()
 * @method $this withAnalyseTypes($value)
 * @method string getLabelType()
 * @method $this withLabelType($value)
 */
class UpdateSmarttagTemplate extends Rpc
{
}

/**
 * @method string getContainer()
 * @method $this withContainer($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getVideo()
 * @method $this withVideo($value)
 * @method string getTransConfig()
 * @method $this withTransConfig($value)
 * @method string getAudio()
 * @method $this withAudio($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getMuxConfig()
 * @method $this withMuxConfig($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class UpdateTemplate extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getWaterMarkTemplateId()
 * @method $this withWaterMarkTemplateId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getConfig()
 * @method $this withConfig($value)
 */
class UpdateWaterMarkTemplate extends Rpc
{
}
