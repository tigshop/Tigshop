<?php

namespace AlibabaCloud\Sophonsoar\V20220728;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method BatchModifyInstanceStatus batchModifyInstanceStatus(array $options = [])
 * @method ComparePlaybooks comparePlaybooks(array $options = [])
 * @method ConvertPlaybook convertPlaybook(array $options = [])
 * @method CreatePlaybook createPlaybook(array $options = [])
 * @method DebugPlaybook debugPlaybook(array $options = [])
 * @method DeleteComponentAsset deleteComponentAsset(array $options = [])
 * @method DeletePlaybook deletePlaybook(array $options = [])
 * @method DescribeComponentAssetForm describeComponentAssetForm(array $options = [])
 * @method DescribeComponentAssets describeComponentAssets(array $options = [])
 * @method DescribeComponentList describeComponentList(array $options = [])
 * @method DescribeComponentPlaybook describeComponentPlaybook(array $options = [])
 * @method DescribeComponentsJs describeComponentsJs(array $options = [])
 * @method DescribeDistinctReleases describeDistinctReleases(array $options = [])
 * @method DescribeEnumItems describeEnumItems(array $options = [])
 * @method DescribeExecutePlaybooks describeExecutePlaybooks(array $options = [])
 * @method DescribeField describeField(array $options = [])
 * @method DescribeLatestRecordSchema describeLatestRecordSchema(array $options = [])
 * @method DescribeNodeParamTags describeNodeParamTags(array $options = [])
 * @method DescribeNodeUsedInfos describeNodeUsedInfos(array $options = [])
 * @method DescribePlaybook describePlaybook(array $options = [])
 * @method DescribePlaybookInputOutput describePlaybookInputOutput(array $options = [])
 * @method DescribePlaybookMetrics describePlaybookMetrics(array $options = [])
 * @method DescribePlaybookNodesOutput describePlaybookNodesOutput(array $options = [])
 * @method DescribePlaybookNumberMetrics describePlaybookNumberMetrics(array $options = [])
 * @method DescribePlaybookReleases describePlaybookReleases(array $options = [])
 * @method DescribePlaybooks describePlaybooks(array $options = [])
 * @method DescribePopApi describePopApi(array $options = [])
 * @method DescribeProcessTaskCount describeProcessTaskCount(array $options = [])
 * @method DescribeProcessTasks describeProcessTasks(array $options = [])
 * @method DescriberPython3ScriptLogs describerPython3ScriptLogs(array $options = [])
 * @method DescribeSoarRecordActionOutputList describeSoarRecordActionOutputList(array $options = [])
 * @method DescribeSoarRecordInOutput describeSoarRecordInOutput(array $options = [])
 * @method DescribeSoarRecords describeSoarRecords(array $options = [])
 * @method DescribeSoarTaskAndActions describeSoarTaskAndActions(array $options = [])
 * @method DescribeSophonCommands describeSophonCommands(array $options = [])
 * @method ModifyComponentAsset modifyComponentAsset(array $options = [])
 * @method ModifyPlaybook modifyPlaybook(array $options = [])
 * @method ModifyPlaybookInputOutput modifyPlaybookInputOutput(array $options = [])
 * @method ModifyPlaybookInstanceStatus modifyPlaybookInstanceStatus(array $options = [])
 * @method PublishPlaybook publishPlaybook(array $options = [])
 * @method QueryTreeData queryTreeData(array $options = [])
 * @method RenamePlaybookNode renamePlaybookNode(array $options = [])
 * @method RevertPlaybookRelease revertPlaybookRelease(array $options = [])
 * @method RunPython3Script runPython3Script(array $options = [])
 * @method TriggerPlaybook triggerPlaybook(array $options = [])
 * @method TriggerProcessTask triggerProcessTask(array $options = [])
 * @method TriggerSophonPlaybook triggerSophonPlaybook(array $options = [])
 * @method VerifyPlaybook verifyPlaybook(array $options = [])
 * @method VerifyPythonFile verifyPythonFile(array $options = [])
 */
class SophonsoarApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'sophonsoar';

    /** @var string */
    public $version = '2022-07-28';

    /** @var string */
    protected $scheme = 'https';
}

/**
 * @method string getRoleFor()
 * @method $this withRoleFor($value)
 * @method string getActive()
 * @method string getPlaybookUuid()
 * @method string getRoleType()
 * @method $this withRoleType($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class BatchModifyInstanceStatus extends Rpc
{

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withActive($value)
    {
        $this->data['Active'] = $value;
        $this->options['form_params']['Active'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPlaybookUuid($value)
    {
        $this->data['PlaybookUuid'] = $value;
        $this->options['form_params']['PlaybookUuid'] = $value;

        return $this;
    }
}

/**
 * @method string getOldPlaybookReleaseId()
 * @method $this withOldPlaybookReleaseId($value)
 * @method string getNewPlaybookReleaseId()
 * @method $this withNewPlaybookReleaseId($value)
 * @method string getRoleFor()
 * @method $this withRoleFor($value)
 * @method string getPlaybookUuid()
 * @method $this withPlaybookUuid($value)
 * @method string getRoleType()
 * @method $this withRoleType($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class ComparePlaybooks extends Rpc
{

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getRoleFor()
 * @method $this withRoleFor($value)
 * @method string getTaskflow()
 * @method string getRoleType()
 * @method $this withRoleType($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class ConvertPlaybook extends Rpc
{

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTaskflow($value)
    {
        $this->data['Taskflow'] = $value;
        $this->options['form_params']['Taskflow'] = $value;

        return $this;
    }
}

/**
 * @method string getRoleFor()
 * @method $this withRoleFor($value)
 * @method string getTaskflowType()
 * @method string getDescription()
 * @method string getDisplayName()
 * @method string getRoleType()
 * @method $this withRoleType($value)
 * @method string getLang()
 */
class CreatePlaybook extends Rpc
{

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTaskflowType($value)
    {
        $this->data['TaskflowType'] = $value;
        $this->options['form_params']['TaskflowType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDescription($value)
    {
        $this->data['Description'] = $value;
        $this->options['form_params']['Description'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDisplayName($value)
    {
        $this->data['DisplayName'] = $value;
        $this->options['form_params']['DisplayName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLang($value)
    {
        $this->data['Lang'] = $value;
        $this->options['form_params']['Lang'] = $value;

        return $this;
    }
}

/**
 * @method string getRoleFor()
 * @method $this withRoleFor($value)
 * @method string getTaskflow()
 * @method string getPlaybookUuid()
 * @method string getRecord()
 * @method string getRoleType()
 * @method $this withRoleType($value)
 * @method string getLang()
 */
class DebugPlaybook extends Rpc
{

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTaskflow($value)
    {
        $this->data['Taskflow'] = $value;
        $this->options['form_params']['Taskflow'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPlaybookUuid($value)
    {
        $this->data['PlaybookUuid'] = $value;
        $this->options['form_params']['PlaybookUuid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRecord($value)
    {
        $this->data['Record'] = $value;
        $this->options['form_params']['Record'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLang($value)
    {
        $this->data['Lang'] = $value;
        $this->options['form_params']['Lang'] = $value;

        return $this;
    }
}

/**
 * @method string getRoleFor()
 * @method $this withRoleFor($value)
 * @method string getAssetId()
 * @method $this withAssetId($value)
 * @method string getRoleType()
 * @method $this withRoleType($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DeleteComponentAsset extends Rpc
{

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getRoleFor()
 * @method $this withRoleFor($value)
 * @method string getPlaybookUuid()
 * @method string getRoleType()
 * @method $this withRoleType($value)
 * @method string getLang()
 */
class DeletePlaybook extends Rpc
{

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPlaybookUuid($value)
    {
        $this->data['PlaybookUuid'] = $value;
        $this->options['form_params']['PlaybookUuid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLang($value)
    {
        $this->data['Lang'] = $value;
        $this->options['form_params']['Lang'] = $value;

        return $this;
    }
}

/**
 * @method string getRoleFor()
 * @method $this withRoleFor($value)
 * @method string getComponentName()
 * @method $this withComponentName($value)
 * @method string getRoleType()
 * @method $this withRoleType($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeComponentAssetForm extends Rpc
{
}

/**
 * @method string getRoleFor()
 * @method $this withRoleFor($value)
 * @method string getComponentName()
 * @method $this withComponentName($value)
 * @method string getRoleType()
 * @method $this withRoleType($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeComponentAssets extends Rpc
{
}

/**
 * @method string getRoleFor()
 * @method $this withRoleFor($value)
 * @method string getPlaybookUuid()
 * @method $this withPlaybookUuid($value)
 * @method string getRoleType()
 * @method $this withRoleType($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeComponentList extends Rpc
{
}

/**
 * @method string getRoleFor()
 * @method $this withRoleFor($value)
 * @method string getPlaybookUuid()
 * @method $this withPlaybookUuid($value)
 * @method string getRoleType()
 * @method $this withRoleType($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeComponentPlaybook extends Rpc
{
}

/**
 * @method string getRoleFor()
 * @method $this withRoleFor($value)
 * @method string getRoleType()
 * @method $this withRoleType($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeComponentsJs extends Rpc
{
}

/**
 * @method string getTaskflowMd5()
 * @method $this withTaskflowMd5($value)
 * @method string getRoleFor()
 * @method $this withRoleFor($value)
 * @method string getPlaybookUuid()
 * @method $this withPlaybookUuid($value)
 * @method string getRoleType()
 * @method $this withRoleType($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeDistinctReleases extends Rpc
{
}

/**
 * @method string getRoleFor()
 * @method $this withRoleFor($value)
 * @method string getEnumType()
 * @method $this withEnumType($value)
 * @method string getRoleType()
 * @method $this withRoleType($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeEnumItems extends Rpc
{
}

/**
 * @method string getPlaybookName()
 * @method $this withPlaybookName($value)
 * @method string getParamType()
 * @method $this withParamType($value)
 * @method string getRoleFor()
 * @method $this withRoleFor($value)
 * @method string getInputMode()
 * @method $this withInputMode($value)
 * @method string getCheckTag()
 * @method $this withCheckTag($value)
 * @method string getSource()
 * @method $this withSource($value)
 * @method string getUuid()
 * @method $this withUuid($value)
 * @method string getRoleType()
 * @method $this withRoleType($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeExecutePlaybooks extends Rpc
{

    /** @var string */
    public $scheme = 'http';
}

/**
 * @method string getQueryKey()
 * @method $this withQueryKey($value)
 * @method string getRoleFor()
 * @method $this withRoleFor($value)
 * @method string getRoleType()
 * @method $this withRoleType($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeField extends Rpc
{
}

/**
 * @method string getRoleFor()
 * @method $this withRoleFor($value)
 * @method string getPlaybookUuid()
 * @method $this withPlaybookUuid($value)
 * @method string getRoleType()
 * @method $this withRoleType($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeLatestRecordSchema extends Rpc
{
}

/**
 * @method string getRoleFor()
 * @method $this withRoleFor($value)
 * @method string getNodeName()
 * @method $this withNodeName($value)
 * @method string getPlaybookUuid()
 * @method $this withPlaybookUuid($value)
 * @method string getRoleType()
 * @method $this withRoleType($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeNodeParamTags extends Rpc
{
}

/**
 * @method string getRoleFor()
 * @method $this withRoleFor($value)
 * @method string getNodeName()
 * @method $this withNodeName($value)
 * @method string getPlaybookUuid()
 * @method $this withPlaybookUuid($value)
 * @method string getRoleType()
 * @method $this withRoleType($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeNodeUsedInfos extends Rpc
{
}

/**
 * @method string getTaskflowMd5()
 * @method $this withTaskflowMd5($value)
 * @method string getRoleFor()
 * @method $this withRoleFor($value)
 * @method string getDebugFlag()
 * @method $this withDebugFlag($value)
 * @method string getPlaybookUuid()
 * @method $this withPlaybookUuid($value)
 * @method string getRoleType()
 * @method $this withRoleType($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribePlaybook extends Rpc
{
}

/**
 * @method string getRoleFor()
 * @method $this withRoleFor($value)
 * @method string getModelName()
 * @method $this withModelName($value)
 * @method string getPlaybookUuid()
 * @method $this withPlaybookUuid($value)
 * @method string getModelCode()
 * @method $this withModelCode($value)
 * @method string getRoleType()
 * @method $this withRoleType($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribePlaybookInputOutput extends Rpc
{
}

/**
 * @method string getRoleFor()
 * @method $this withRoleFor($value)
 * @method string getPlaybookUuid()
 * @method $this withPlaybookUuid($value)
 * @method string getRoleType()
 * @method $this withRoleType($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribePlaybookMetrics extends Rpc
{
}

/**
 * @method string getRoleFor()
 * @method $this withRoleFor($value)
 * @method string getNodeName()
 * @method $this withNodeName($value)
 * @method string getPlaybookUuid()
 * @method $this withPlaybookUuid($value)
 * @method string getRoleType()
 * @method $this withRoleType($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribePlaybookNodesOutput extends Rpc
{
}

/**
 * @method string getRoleFor()
 * @method $this withRoleFor($value)
 * @method string getRoleType()
 * @method $this withRoleType($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribePlaybookNumberMetrics extends Rpc
{

    /** @var string */
    public $scheme = 'http';
}

/**
 * @method string getRoleFor()
 * @method $this withRoleFor($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPlaybookUuid()
 * @method $this withPlaybookUuid($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getRoleType()
 * @method $this withRoleType($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribePlaybookReleases extends Rpc
{
}

/**
 * @method string getRoleFor()
 * @method $this withRoleFor($value)
 * @method string getEndMillis()
 * @method $this withEndMillis($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPlaybookUuids()
 * @method $this withPlaybookUuids($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getRoleType()
 * @method $this withRoleType($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getOrder()
 * @method $this withOrder($value)
 * @method string getParamTypes()
 * @method $this withParamTypes($value)
 * @method string getActive()
 * @method $this withActive($value)
 * @method string getOwnType()
 * @method $this withOwnType($value)
 * @method string getSort()
 * @method $this withSort($value)
 * @method string getStartMillis()
 * @method $this withStartMillis($value)
 * @method string getPlaybookUuid()
 * @method $this withPlaybookUuid($value)
 * @method string getName()
 * @method $this withName($value)
 */
class DescribePlaybooks extends Rpc
{
}

/**
 * @method string getPopCode()
 * @method $this withPopCode($value)
 * @method string getRoleFor()
 * @method $this withRoleFor($value)
 * @method string getApiVersion()
 * @method $this withApiVersion($value)
 * @method string getEnv()
 * @method $this withEnv($value)
 * @method string getApiName()
 * @method $this withApiName($value)
 * @method string getRoleType()
 * @method $this withRoleType($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribePopApi extends Rpc
{
}

/**
 * @method array getEntityUuidList()
 * @method string getRoleFor()
 * @method $this withRoleFor($value)
 * @method string getRoleType()
 * @method $this withRoleType($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeProcessTaskCount extends Rpc
{

    /**
     * @param array $entityUuidList
     *
     * @return $this
     */
	public function withEntityUuidList(array $entityUuidList)
	{
	    $this->data['EntityUuidList'] = $entityUuidList;
		foreach ($entityUuidList as $i => $iValue) {
			$this->options['query']['EntityUuidList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getEntityKey()
 * @method $this withEntityKey($value)
 * @method string getRoleFor()
 * @method $this withRoleFor($value)
 * @method string getEntityName()
 * @method $this withEntityName($value)
 * @method string getTaskName()
 * @method $this withTaskName($value)
 * @method string getYunCode()
 * @method $this withYunCode($value)
 * @method string getSource()
 * @method $this withSource($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getTaskStatus()
 * @method $this withTaskStatus($value)
 * @method string getProcessRemoveEnd()
 * @method $this withProcessRemoveEnd($value)
 * @method string getParamContent()
 * @method $this withParamContent($value)
 * @method string getScope()
 * @method $this withScope($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getTriggerSource()
 * @method $this withTriggerSource($value)
 * @method string getProcessRemoveStart()
 * @method $this withProcessRemoveStart($value)
 * @method string getRoleType()
 * @method $this withRoleType($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 * @method string getOrderField()
 * @method $this withOrderField($value)
 * @method string getDirection()
 * @method $this withDirection($value)
 * @method string getSceneCode()
 * @method $this withSceneCode($value)
 * @method string getProcessActionStart()
 * @method $this withProcessActionStart($value)
 * @method string getProcessActionEnd()
 * @method $this withProcessActionEnd($value)
 * @method string getProcessStrategyUuid()
 * @method $this withProcessStrategyUuid($value)
 * @method string getEntityType()
 * @method $this withEntityType($value)
 * @method string getEntityUuid()
 * @method $this withEntityUuid($value)
 * @method string getEventUuid()
 * @method $this withEventUuid($value)
 */
class DescribeProcessTasks extends Rpc
{

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getRoleFor()
 * @method $this withRoleFor($value)
 * @method string getRequestUuid()
 * @method $this withRequestUuid($value)
 * @method string getRoleType()
 * @method $this withRoleType($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescriberPython3ScriptLogs extends Rpc
{
}

/**
 * @method string getActionUuid()
 * @method $this withActionUuid($value)
 * @method string getRoleFor()
 * @method $this withRoleFor($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getRoleType()
 * @method $this withRoleType($value)
 * @method string getQueryValue()
 * @method $this withQueryValue($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeSoarRecordActionOutputList extends Rpc
{
}

/**
 * @method string getActionUuid()
 * @method $this withActionUuid($value)
 * @method string getRoleFor()
 * @method $this withRoleFor($value)
 * @method string getRoleType()
 * @method $this withRoleType($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeSoarRecordInOutput extends Rpc
{
}

/**
 * @method string getTaskflowMd5()
 * @method $this withTaskflowMd5($value)
 * @method string getRoleFor()
 * @method $this withRoleFor($value)
 * @method string getTaskType()
 * @method $this withTaskType($value)
 * @method string getEndMillis()
 * @method $this withEndMillis($value)
 * @method string getStartMillis()
 * @method $this withStartMillis($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getTaskStatus()
 * @method $this withTaskStatus($value)
 * @method string getPlaybookUuid()
 * @method $this withPlaybookUuid($value)
 * @method string getRequestUuid()
 * @method $this withRequestUuid($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getRoleType()
 * @method $this withRoleType($value)
 * @method string getTriggerUser()
 * @method $this withTriggerUser($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeSoarRecords extends Rpc
{
}

/**
 * @method string getRoleFor()
 * @method $this withRoleFor($value)
 * @method string getRequestUuid()
 * @method $this withRequestUuid($value)
 * @method string getRoleType()
 * @method $this withRoleType($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeSoarTaskAndActions extends Rpc
{
}

/**
 * @method string getActionType()
 * @method $this withActionType($value)
 * @method string getRoleFor()
 * @method $this withRoleFor($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getRoleType()
 * @method $this withRoleType($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeSophonCommands extends Rpc
{

    /** @var string */
    public $scheme = 'http';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getRoleFor()
 * @method $this withRoleFor($value)
 * @method string getRoleType()
 * @method $this withRoleType($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getAssetConfig()
 * @method $this withAssetConfig($value)
 */
class ModifyComponentAsset extends Rpc
{

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getRoleFor()
 * @method $this withRoleFor($value)
 * @method string getTaskflow()
 * @method string getDescription()
 * @method string getPlaybookUuid()
 * @method string getDisplayName()
 * @method string getRoleType()
 * @method $this withRoleType($value)
 * @method string getLang()
 */
class ModifyPlaybook extends Rpc
{

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTaskflow($value)
    {
        $this->data['Taskflow'] = $value;
        $this->options['form_params']['Taskflow'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDescription($value)
    {
        $this->data['Description'] = $value;
        $this->options['form_params']['Description'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPlaybookUuid($value)
    {
        $this->data['PlaybookUuid'] = $value;
        $this->options['form_params']['PlaybookUuid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDisplayName($value)
    {
        $this->data['DisplayName'] = $value;
        $this->options['form_params']['DisplayName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLang($value)
    {
        $this->data['Lang'] = $value;
        $this->options['form_params']['Lang'] = $value;

        return $this;
    }
}

/**
 * @method string getParamType()
 * @method string getRoleFor()
 * @method $this withRoleFor($value)
 * @method string getInputParams()
 * @method string getOutputParams()
 * @method string getPlaybookUuid()
 * @method string getExeConfig()
 * @method string getRoleType()
 * @method $this withRoleType($value)
 * @method string getLang()
 */
class ModifyPlaybookInputOutput extends Rpc
{

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withParamType($value)
    {
        $this->data['ParamType'] = $value;
        $this->options['form_params']['ParamType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInputParams($value)
    {
        $this->data['InputParams'] = $value;
        $this->options['form_params']['InputParams'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOutputParams($value)
    {
        $this->data['OutputParams'] = $value;
        $this->options['form_params']['OutputParams'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPlaybookUuid($value)
    {
        $this->data['PlaybookUuid'] = $value;
        $this->options['form_params']['PlaybookUuid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExeConfig($value)
    {
        $this->data['ExeConfig'] = $value;
        $this->options['form_params']['ExeConfig'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLang($value)
    {
        $this->data['Lang'] = $value;
        $this->options['form_params']['Lang'] = $value;

        return $this;
    }
}

/**
 * @method string getRoleFor()
 * @method $this withRoleFor($value)
 * @method string getActive()
 * @method string getPlaybookUuid()
 * @method string getRoleType()
 * @method $this withRoleType($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class ModifyPlaybookInstanceStatus extends Rpc
{

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withActive($value)
    {
        $this->data['Active'] = $value;
        $this->options['form_params']['Active'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPlaybookUuid($value)
    {
        $this->data['PlaybookUuid'] = $value;
        $this->options['form_params']['PlaybookUuid'] = $value;

        return $this;
    }
}

/**
 * @method string getRoleFor()
 * @method $this withRoleFor($value)
 * @method string getDescription()
 * @method string getPlaybookUuid()
 * @method string getRoleType()
 * @method $this withRoleType($value)
 * @method string getLang()
 */
class PublishPlaybook extends Rpc
{

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDescription($value)
    {
        $this->data['Description'] = $value;
        $this->options['form_params']['Description'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPlaybookUuid($value)
    {
        $this->data['PlaybookUuid'] = $value;
        $this->options['form_params']['PlaybookUuid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLang($value)
    {
        $this->data['Lang'] = $value;
        $this->options['form_params']['Lang'] = $value;

        return $this;
    }
}

/**
 * @method string getRoleFor()
 * @method $this withRoleFor($value)
 * @method string getRoleType()
 * @method $this withRoleType($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class QueryTreeData extends Rpc
{
}

/**
 * @method string getRoleFor()
 * @method $this withRoleFor($value)
 * @method string getNewNodeName()
 * @method $this withNewNodeName($value)
 * @method string getOldNodeName()
 * @method $this withOldNodeName($value)
 * @method string getPlaybookUuid()
 * @method $this withPlaybookUuid($value)
 * @method string getRoleType()
 * @method $this withRoleType($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class RenamePlaybookNode extends Rpc
{

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getRoleFor()
 * @method $this withRoleFor($value)
 * @method string getPlaybookUuid()
 * @method string getPlayReleaseId()
 * @method string getIsPublish()
 * @method string getRoleType()
 * @method $this withRoleType($value)
 * @method string getLang()
 */
class RevertPlaybookRelease extends Rpc
{

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPlaybookUuid($value)
    {
        $this->data['PlaybookUuid'] = $value;
        $this->options['form_params']['PlaybookUuid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPlayReleaseId($value)
    {
        $this->data['PlayReleaseId'] = $value;
        $this->options['form_params']['PlayReleaseId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIsPublish($value)
    {
        $this->data['IsPublish'] = $value;
        $this->options['form_params']['IsPublish'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLang($value)
    {
        $this->data['Lang'] = $value;
        $this->options['form_params']['Lang'] = $value;

        return $this;
    }
}

/**
 * @method string getRoleFor()
 * @method $this withRoleFor($value)
 * @method string getParams()
 * @method string getNodeName()
 * @method string getPlaybookUuid()
 * @method string getRoleType()
 * @method $this withRoleType($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getPythonScript()
 */
class RunPython3Script extends Rpc
{

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withParams($value)
    {
        $this->data['Params'] = $value;
        $this->options['form_params']['Params'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNodeName($value)
    {
        $this->data['NodeName'] = $value;
        $this->options['form_params']['NodeName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPlaybookUuid($value)
    {
        $this->data['PlaybookUuid'] = $value;
        $this->options['form_params']['PlaybookUuid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPythonScript($value)
    {
        $this->data['PythonScript'] = $value;
        $this->options['form_params']['PythonScript'] = $value;

        return $this;
    }
}

/**
 * @method string getRoleFor()
 * @method $this withRoleFor($value)
 * @method string getInputParam()
 * @method string getPlaybookUuid()
 * @method string getRoleType()
 * @method $this withRoleType($value)
 * @method string getLang()
 */
class TriggerPlaybook extends Rpc
{

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInputParam($value)
    {
        $this->data['InputParam'] = $value;
        $this->options['form_params']['InputParam'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPlaybookUuid($value)
    {
        $this->data['PlaybookUuid'] = $value;
        $this->options['form_params']['PlaybookUuid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLang($value)
    {
        $this->data['Lang'] = $value;
        $this->options['form_params']['Lang'] = $value;

        return $this;
    }
}

/**
 * @method string getActionType()
 * @method $this withActionType($value)
 * @method string getRoleFor()
 * @method $this withRoleFor($value)
 * @method string getRoleType()
 * @method $this withRoleType($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getTaskId()
 */
class TriggerProcessTask extends Rpc
{

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTaskId($value)
    {
        $this->data['TaskId'] = $value;
        $this->options['form_params']['TaskId'] = $value;

        return $this;
    }
}

/**
 * @method string getRoleFor()
 * @method $this withRoleFor($value)
 * @method string getInputParams()
 * @method $this withInputParams($value)
 * @method string getCommandName()
 * @method $this withCommandName($value)
 * @method string getSophonTaskId()
 * @method $this withSophonTaskId($value)
 * @method string getTriggerType()
 * @method $this withTriggerType($value)
 * @method string getUuid()
 * @method $this withUuid($value)
 * @method string getTriggerSource()
 * @method $this withTriggerSource($value)
 * @method string getRoleType()
 * @method $this withRoleType($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class TriggerSophonPlaybook extends Rpc
{

    /** @var string */
    public $scheme = 'http';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getRoleFor()
 * @method $this withRoleFor($value)
 * @method string getTaskFlow()
 * @method string getPlaybookUuid()
 * @method string getRoleType()
 * @method $this withRoleType($value)
 * @method string getLang()
 */
class VerifyPlaybook extends Rpc
{

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTaskFlow($value)
    {
        $this->data['TaskFlow'] = $value;
        $this->options['form_params']['TaskFlow'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPlaybookUuid($value)
    {
        $this->data['PlaybookUuid'] = $value;
        $this->options['form_params']['PlaybookUuid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLang($value)
    {
        $this->data['Lang'] = $value;
        $this->options['form_params']['Lang'] = $value;

        return $this;
    }
}

/**
 * @method string getRoleFor()
 * @method $this withRoleFor($value)
 * @method string getContent()
 * @method string getRoleType()
 * @method $this withRoleType($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class VerifyPythonFile extends Rpc
{

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContent($value)
    {
        $this->data['Content'] = $value;
        $this->options['form_params']['Content'] = $value;

        return $this;
    }
}
