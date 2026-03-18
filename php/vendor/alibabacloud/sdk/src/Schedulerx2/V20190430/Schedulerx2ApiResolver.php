<?php

namespace AlibabaCloud\Schedulerx2\V20190430;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method BatchDeleteJobs batchDeleteJobs(array $options = [])
 * @method BatchDeleteRouteStrategy batchDeleteRouteStrategy(array $options = [])
 * @method BatchDisableJobs batchDisableJobs(array $options = [])
 * @method BatchEnableJobs batchEnableJobs(array $options = [])
 * @method CreateAppGroup createAppGroup(array $options = [])
 * @method CreateJob createJob(array $options = [])
 * @method CreateNamespace createNamespace(array $options = [])
 * @method CreateRouteStrategy createRouteStrategy(array $options = [])
 * @method CreateWorkflow createWorkflow(array $options = [])
 * @method DeleteAppGroup deleteAppGroup(array $options = [])
 * @method DeleteJob deleteJob(array $options = [])
 * @method DeleteRouteStrategy deleteRouteStrategy(array $options = [])
 * @method DeleteWorkflow deleteWorkflow(array $options = [])
 * @method DescribeRegions describeRegions(array $options = [])
 * @method DesignateWorkers designateWorkers(array $options = [])
 * @method DisableJob disableJob(array $options = [])
 * @method DisableWorkflow disableWorkflow(array $options = [])
 * @method EnableJob enableJob(array $options = [])
 * @method EnableWorkflow enableWorkflow(array $options = [])
 * @method ExecuteJob executeJob(array $options = [])
 * @method ExecuteWorkflow executeWorkflow(array $options = [])
 * @method GetAppGroup getAppGroup(array $options = [])
 * @method GetJobInfo getJobInfo(array $options = [])
 * @method GetJobInstance getJobInstance(array $options = [])
 * @method GetJobInstanceList getJobInstanceList(array $options = [])
 * @method GetLog getLog(array $options = [])
 * @method GetOverview getOverview(array $options = [])
 * @method GetWorkerList getWorkerList(array $options = [])
 * @method GetWorkFlow getWorkFlow(array $options = [])
 * @method GetWorkflowInstance getWorkflowInstance(array $options = [])
 * @method GrantPermission grantPermission(array $options = [])
 * @method ListGroups listGroups(array $options = [])
 * @method ListJobs listJobs(array $options = [])
 * @method ListNamespaces listNamespaces(array $options = [])
 * @method ListWorkflowInstance listWorkflowInstance(array $options = [])
 * @method RerunJob rerunJob(array $options = [])
 * @method RetryJobInstance retryJobInstance(array $options = [])
 * @method RevokePermission revokePermission(array $options = [])
 * @method SetJobInstanceSuccess setJobInstanceSuccess(array $options = [])
 * @method SetWfInstanceSuccess setWfInstanceSuccess(array $options = [])
 * @method StopInstance stopInstance(array $options = [])
 * @method UpdateAppGroup updateAppGroup(array $options = [])
 * @method UpdateJob updateJob(array $options = [])
 * @method UpdateWorkflow updateWorkflow(array $options = [])
 * @method UpdateWorkflowDag updateWorkflowDag(array $options = [])
 */
class Schedulerx2ApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'schedulerx2';

    /** @var string */
    public $version = '2019-04-30';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'schedulerx2';
}

/**
 * @method string getNamespaceSource()
 * @method $this withNamespaceSource($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method array getJobIdList()
 * @method string getNamespace()
 * @method $this withNamespace($value)
 */
class BatchDeleteJobs extends Rpc
{

    /**
     * @param array $jobIdList
     *
     * @return $this
     */
	public function withJobIdList(array $jobIdList)
	{
	    $this->data['JobIdList'] = $jobIdList;
		foreach ($jobIdList as $i => $iValue) {
			$this->options['form_params']['JobIdList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method array getJobIdList()
 * @method string getNamespace()
 * @method $this withNamespace($value)
 * @method array getStrategyIdList()
 */
class BatchDeleteRouteStrategy extends Rpc
{

    /**
     * @param array $jobIdList
     *
     * @return $this
     */
	public function withJobIdList(array $jobIdList)
	{
	    $this->data['JobIdList'] = $jobIdList;
		foreach ($jobIdList as $i => $iValue) {
			$this->options['form_params']['JobIdList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $strategyIdList
     *
     * @return $this
     */
	public function withStrategyIdList(array $strategyIdList)
	{
	    $this->data['StrategyIdList'] = $strategyIdList;
		foreach ($strategyIdList as $i => $iValue) {
			$this->options['form_params']['StrategyIdList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getNamespaceSource()
 * @method $this withNamespaceSource($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method array getJobIdList()
 * @method string getNamespace()
 * @method $this withNamespace($value)
 */
class BatchDisableJobs extends Rpc
{

    /**
     * @param array $jobIdList
     *
     * @return $this
     */
	public function withJobIdList(array $jobIdList)
	{
	    $this->data['JobIdList'] = $jobIdList;
		foreach ($jobIdList as $i => $iValue) {
			$this->options['form_params']['JobIdList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getNamespaceSource()
 * @method $this withNamespaceSource($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method array getJobIdList()
 * @method string getNamespace()
 * @method $this withNamespace($value)
 */
class BatchEnableJobs extends Rpc
{

    /**
     * @param array $jobIdList
     *
     * @return $this
     */
	public function withJobIdList(array $jobIdList)
	{
	    $this->data['JobIdList'] = $jobIdList;
		foreach ($jobIdList as $i => $iValue) {
			$this->options['form_params']['JobIdList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getNamespaceName()
 * @method $this withNamespaceName($value)
 * @method string getNamespaceSource()
 * @method $this withNamespaceSource($value)
 * @method string getScheduleBusyWorkers()
 * @method $this withScheduleBusyWorkers($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getAlarmJson()
 * @method $this withAlarmJson($value)
 * @method string getMonitorContactsJson()
 * @method $this withMonitorContactsJson($value)
 * @method string getMaxJobs()
 * @method $this withMaxJobs($value)
 * @method string getMetricsThresholdJson()
 * @method $this withMetricsThresholdJson($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getAppType()
 * @method $this withAppType($value)
 * @method string getAppVersion()
 * @method $this withAppVersion($value)
 * @method string getMonitorConfigJson()
 * @method $this withMonitorConfigJson($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 * @method string getXattrs()
 * @method $this withXattrs($value)
 * @method string getEnableLog()
 * @method $this withEnableLog($value)
 * @method string getAppKey()
 * @method $this withAppKey($value)
 */
class CreateAppGroup extends Rpc
{

    /** @var string */
    public $scheme = 'https';

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getAttemptInterval()
 * @method string getFailTimes()
 * @method string getConsumerSize()
 * @method string getJarUrl()
 * @method string getGroupId()
 * @method string getDataOffset()
 * @method string getTaskMaxAttempt()
 * @method string getDispatcherSize()
 * @method string getJobType()
 * @method string getTaskAttemptInterval()
 * @method string getExecuteMode()
 * @method string getTimeExpression()
 * @method string getTimeoutEnable()
 * @method array getContactInfo()
 * @method string getName()
 * @method string getTimeType()
 * @method string getParameters()
 * @method string getStatus()
 * @method string getNamespaceSource()
 * @method string getTimezone()
 * @method string getDescription()
 * @method string getContent()
 * @method string getTimeout()
 * @method string getTimeoutKillEnable()
 * @method string getPageSize()
 * @method string getCalendar()
 * @method string getFailEnable()
 * @method string getSendChannel()
 * @method string getMaxAttempt()
 * @method string getMissWorkerEnable()
 * @method string getSuccessNoticeEnable()
 * @method string getQueueSize()
 * @method string getClassName()
 * @method string getNamespace()
 * @method string getXAttrs()
 * @method string getMaxConcurrency()
 */
class CreateJob extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAttemptInterval($value)
    {
        $this->data['AttemptInterval'] = $value;
        $this->options['form_params']['AttemptInterval'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFailTimes($value)
    {
        $this->data['FailTimes'] = $value;
        $this->options['form_params']['FailTimes'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withConsumerSize($value)
    {
        $this->data['ConsumerSize'] = $value;
        $this->options['form_params']['ConsumerSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJarUrl($value)
    {
        $this->data['JarUrl'] = $value;
        $this->options['form_params']['JarUrl'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupId($value)
    {
        $this->data['GroupId'] = $value;
        $this->options['form_params']['GroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDataOffset($value)
    {
        $this->data['DataOffset'] = $value;
        $this->options['form_params']['DataOffset'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTaskMaxAttempt($value)
    {
        $this->data['TaskMaxAttempt'] = $value;
        $this->options['form_params']['TaskMaxAttempt'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDispatcherSize($value)
    {
        $this->data['DispatcherSize'] = $value;
        $this->options['form_params']['DispatcherSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJobType($value)
    {
        $this->data['JobType'] = $value;
        $this->options['form_params']['JobType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTaskAttemptInterval($value)
    {
        $this->data['TaskAttemptInterval'] = $value;
        $this->options['form_params']['TaskAttemptInterval'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExecuteMode($value)
    {
        $this->data['ExecuteMode'] = $value;
        $this->options['form_params']['ExecuteMode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTimeExpression($value)
    {
        $this->data['TimeExpression'] = $value;
        $this->options['form_params']['TimeExpression'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTimeoutEnable($value)
    {
        $this->data['TimeoutEnable'] = $value;
        $this->options['form_params']['TimeoutEnable'] = $value;

        return $this;
    }

    /**
     * @param array $contactInfo
     *
     * @return $this
     */
	public function withContactInfo(array $contactInfo)
	{
	    $this->data['ContactInfo'] = $contactInfo;
		foreach ($contactInfo as $depth1 => $depth1Value) {
			if(isset($depth1Value['Ding'])){
				$this->options['form_params']['ContactInfo.' . ($depth1 + 1) . '.Ding'] = $depth1Value['Ding'];
			}
			if(isset($depth1Value['UserPhone'])){
				$this->options['form_params']['ContactInfo.' . ($depth1 + 1) . '.UserPhone'] = $depth1Value['UserPhone'];
			}
			if(isset($depth1Value['UserMail'])){
				$this->options['form_params']['ContactInfo.' . ($depth1 + 1) . '.UserMail'] = $depth1Value['UserMail'];
			}
			if(isset($depth1Value['UserName'])){
				$this->options['form_params']['ContactInfo.' . ($depth1 + 1) . '.UserName'] = $depth1Value['UserName'];
			}
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withName($value)
    {
        $this->data['Name'] = $value;
        $this->options['form_params']['Name'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTimeType($value)
    {
        $this->data['TimeType'] = $value;
        $this->options['form_params']['TimeType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withParameters($value)
    {
        $this->data['Parameters'] = $value;
        $this->options['form_params']['Parameters'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStatus($value)
    {
        $this->data['Status'] = $value;
        $this->options['form_params']['Status'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNamespaceSource($value)
    {
        $this->data['NamespaceSource'] = $value;
        $this->options['form_params']['NamespaceSource'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTimezone($value)
    {
        $this->data['Timezone'] = $value;
        $this->options['form_params']['Timezone'] = $value;

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
    public function withContent($value)
    {
        $this->data['Content'] = $value;
        $this->options['form_params']['Content'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTimeout($value)
    {
        $this->data['Timeout'] = $value;
        $this->options['form_params']['Timeout'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTimeoutKillEnable($value)
    {
        $this->data['TimeoutKillEnable'] = $value;
        $this->options['form_params']['TimeoutKillEnable'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['form_params']['PageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCalendar($value)
    {
        $this->data['Calendar'] = $value;
        $this->options['form_params']['Calendar'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFailEnable($value)
    {
        $this->data['FailEnable'] = $value;
        $this->options['form_params']['FailEnable'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSendChannel($value)
    {
        $this->data['SendChannel'] = $value;
        $this->options['form_params']['SendChannel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMaxAttempt($value)
    {
        $this->data['MaxAttempt'] = $value;
        $this->options['form_params']['MaxAttempt'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMissWorkerEnable($value)
    {
        $this->data['MissWorkerEnable'] = $value;
        $this->options['form_params']['MissWorkerEnable'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSuccessNoticeEnable($value)
    {
        $this->data['SuccessNoticeEnable'] = $value;
        $this->options['form_params']['SuccessNoticeEnable'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withQueueSize($value)
    {
        $this->data['QueueSize'] = $value;
        $this->options['form_params']['QueueSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClassName($value)
    {
        $this->data['ClassName'] = $value;
        $this->options['form_params']['ClassName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNamespace($value)
    {
        $this->data['Namespace'] = $value;
        $this->options['form_params']['Namespace'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withXAttrs($value)
    {
        $this->data['XAttrs'] = $value;
        $this->options['form_params']['XAttrs'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMaxConcurrency($value)
    {
        $this->data['MaxConcurrency'] = $value;
        $this->options['form_params']['MaxConcurrency'] = $value;

        return $this;
    }
}

/**
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getSource()
 * @method $this withSource($value)
 * @method string getUid()
 * @method $this withUid($value)
 * @method string getName()
 * @method $this withName($value)
 */
class CreateNamespace extends Rpc
{
}

/**
 * @method string getType()
 * @method $this withType($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getStrategyContent()
 * @method $this withStrategyContent($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class CreateRouteStrategy extends Rpc
{
}

/**
 * @method string getNamespaceSource()
 * @method string getTimezone()
 * @method string getDescription()
 * @method string getGroupId()
 * @method string getTimeExpression()
 * @method string getNamespace()
 * @method string getName()
 * @method string getMaxConcurrency()
 * @method string getTimeType()
 */
class CreateWorkflow extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNamespaceSource($value)
    {
        $this->data['NamespaceSource'] = $value;
        $this->options['form_params']['NamespaceSource'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTimezone($value)
    {
        $this->data['Timezone'] = $value;
        $this->options['form_params']['Timezone'] = $value;

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
    public function withGroupId($value)
    {
        $this->data['GroupId'] = $value;
        $this->options['form_params']['GroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTimeExpression($value)
    {
        $this->data['TimeExpression'] = $value;
        $this->options['form_params']['TimeExpression'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNamespace($value)
    {
        $this->data['Namespace'] = $value;
        $this->options['form_params']['Namespace'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withName($value)
    {
        $this->data['Name'] = $value;
        $this->options['form_params']['Name'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMaxConcurrency($value)
    {
        $this->data['MaxConcurrency'] = $value;
        $this->options['form_params']['MaxConcurrency'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTimeType($value)
    {
        $this->data['TimeType'] = $value;
        $this->options['form_params']['TimeType'] = $value;

        return $this;
    }
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getDeleteJobs()
 * @method $this withDeleteJobs($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 */
class DeleteAppGroup extends Rpc
{
}

/**
 * @method string getNamespaceSource()
 * @method $this withNamespaceSource($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 */
class DeleteJob extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 * @method string getStrategyId()
 * @method $this withStrategyId($value)
 */
class DeleteRouteStrategy extends Rpc
{
}

/**
 * @method string getNamespaceSource()
 * @method $this withNamespaceSource($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 * @method string getWorkflowId()
 * @method $this withWorkflowId($value)
 */
class DeleteWorkflow extends Rpc
{

    /** @var string */
    public $scheme = 'https';

    /** @var string */
    public $method = 'GET';
}

class DescribeRegions extends Rpc
{
}

/**
 * @method string getNamespaceSource()
 * @method $this withNamespaceSource($value)
 * @method string getTransferable()
 * @method $this withTransferable($value)
 * @method string getDesignateType()
 * @method $this withDesignateType($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getWorkers()
 * @method $this withWorkers($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getLabels()
 * @method $this withLabels($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 */
class DesignateWorkers extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getNamespaceSource()
 * @method $this withNamespaceSource($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 */
class DisableJob extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getNamespaceSource()
 * @method $this withNamespaceSource($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 * @method string getWorkflowId()
 * @method $this withWorkflowId($value)
 */
class DisableWorkflow extends Rpc
{

    /** @var string */
    public $scheme = 'https';

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getNamespaceSource()
 * @method $this withNamespaceSource($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 */
class EnableJob extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getNamespaceSource()
 * @method $this withNamespaceSource($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 * @method string getWorkflowId()
 * @method $this withWorkflowId($value)
 */
class EnableWorkflow extends Rpc
{

    /** @var string */
    public $scheme = 'https';

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getNamespaceSource()
 * @method $this withNamespaceSource($value)
 * @method string getCheckJobStatus()
 * @method $this withCheckJobStatus($value)
 * @method string getDesignateType()
 * @method $this withDesignateType($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getWorker()
 * @method $this withWorker($value)
 * @method string getInstanceParameters()
 * @method $this withInstanceParameters($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getLabel()
 * @method $this withLabel($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 */
class ExecuteJob extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getNamespaceSource()
 * @method $this withNamespaceSource($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 * @method string getWorkflowId()
 * @method $this withWorkflowId($value)
 * @method string getInstanceParameters()
 * @method $this withInstanceParameters($value)
 */
class ExecuteWorkflow extends Rpc
{

    /** @var string */
    public $scheme = 'https';

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 */
class GetAppGroup extends Rpc
{
}

/**
 * @method string getNamespaceSource()
 * @method $this withNamespaceSource($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 * @method string getJobName()
 * @method $this withJobName($value)
 */
class GetJobInfo extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getNamespaceSource()
 * @method $this withNamespaceSource($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 * @method string getJobInstanceId()
 * @method $this withJobInstanceId($value)
 */
class GetJobInstance extends Rpc
{

    /** @var string */
    public $scheme = 'https';

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getNamespaceSource()
 * @method $this withNamespaceSource($value)
 * @method string getStartTimestamp()
 * @method $this withStartTimestamp($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getEndTimestamp()
 * @method $this withEndTimestamp($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class GetJobInstanceList extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getNamespaceSource()
 * @method $this withNamespaceSource($value)
 * @method string getLine()
 * @method $this withLine($value)
 * @method string getStartTimestamp()
 * @method $this withStartTimestamp($value)
 * @method string getEndTimestamp()
 * @method $this withEndTimestamp($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 * @method string getOffset()
 * @method $this withOffset($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getReverse()
 * @method $this withReverse($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 * @method string getJobInstanceId()
 * @method $this withJobInstanceId($value)
 */
class GetLog extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getMetricType()
 * @method $this withMetricType($value)
 * @method string getNamespaceSource()
 * @method $this withNamespaceSource($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOperate()
 * @method $this withOperate($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 */
class GetOverview extends Rpc
{
}

/**
 * @method string getNamespaceSource()
 * @method $this withNamespaceSource($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 */
class GetWorkerList extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getNamespaceSource()
 * @method $this withNamespaceSource($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 * @method string getWorkflowId()
 * @method $this withWorkflowId($value)
 */
class GetWorkFlow extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getNamespaceSource()
 * @method $this withNamespaceSource($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getWfInstanceId()
 * @method $this withWfInstanceId($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 * @method string getWorkflowId()
 * @method $this withWorkflowId($value)
 */
class GetWorkflowInstance extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getNamespaceSource()
 * @method $this withNamespaceSource($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getGrantOption()
 * @method $this withGrantOption($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 * @method string getUserName()
 * @method $this withUserName($value)
 */
class GrantPermission extends Rpc
{
}

/**
 * @method string getNamespaceSource()
 * @method $this withNamespaceSource($value)
 * @method string getAppGroupName()
 * @method $this withAppGroupName($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 */
class ListGroups extends Rpc
{
}

/**
 * @method string getNamespaceSource()
 * @method $this withNamespaceSource($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 * @method string getJobName()
 * @method $this withJobName($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ListJobs extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getNamespaceName()
 * @method $this withNamespaceName($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 */
class ListNamespaces extends Rpc
{
}

/**
 * @method string getNamespaceSource()
 * @method $this withNamespaceSource($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 * @method string getWorkflowId()
 * @method $this withWorkflowId($value)
 */
class ListWorkflowInstance extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getNamespaceSource()
 * @method string getDataTime()
 * @method string getStartDate()
 * @method string getJobId()
 * @method string getGroupId()
 * @method string getEndDate()
 * @method string getNamespace()
 */
class RerunJob extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNamespaceSource($value)
    {
        $this->data['NamespaceSource'] = $value;
        $this->options['form_params']['NamespaceSource'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDataTime($value)
    {
        $this->data['DataTime'] = $value;
        $this->options['form_params']['DataTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStartDate($value)
    {
        $this->data['StartDate'] = $value;
        $this->options['form_params']['StartDate'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJobId($value)
    {
        $this->data['JobId'] = $value;
        $this->options['form_params']['JobId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupId($value)
    {
        $this->data['GroupId'] = $value;
        $this->options['form_params']['GroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEndDate($value)
    {
        $this->data['EndDate'] = $value;
        $this->options['form_params']['EndDate'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNamespace($value)
    {
        $this->data['Namespace'] = $value;
        $this->options['form_params']['Namespace'] = $value;

        return $this;
    }
}

/**
 * @method string getNamespaceSource()
 * @method $this withNamespaceSource($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 * @method string getJobInstanceId()
 * @method $this withJobInstanceId($value)
 */
class RetryJobInstance extends Rpc
{
}

/**
 * @method string getNamespaceSource()
 * @method $this withNamespaceSource($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 */
class RevokePermission extends Rpc
{
}

/**
 * @method string getNamespaceSource()
 * @method $this withNamespaceSource($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 * @method string getJobInstanceId()
 * @method $this withJobInstanceId($value)
 */
class SetJobInstanceSuccess extends Rpc
{
}

/**
 * @method string getNamespaceSource()
 * @method $this withNamespaceSource($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getWfInstanceId()
 * @method $this withWfInstanceId($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 * @method string getWorkflowId()
 * @method $this withWorkflowId($value)
 */
class SetWfInstanceSuccess extends Rpc
{
}

/**
 * @method string getNamespaceSource()
 * @method $this withNamespaceSource($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 */
class StopInstance extends Rpc
{

    /** @var string */
    public $scheme = 'https';

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getAlarmJson()
 * @method $this withAlarmJson($value)
 * @method string getAppGroupId()
 * @method $this withAppGroupId($value)
 * @method string getMaxJobs()
 * @method $this withMaxJobs($value)
 * @method string getMetricsThresholdJson()
 * @method $this withMetricsThresholdJson($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getAppVersion()
 * @method $this withAppVersion($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 * @method string getXattrs()
 * @method $this withXattrs($value)
 * @method string getMaxConcurrency()
 * @method $this withMaxConcurrency($value)
 */
class UpdateAppGroup extends Rpc
{
}

/**
 * @method string getAttemptInterval()
 * @method string getFailTimes()
 * @method string getJobId()
 * @method string getConsumerSize()
 * @method string getJarUrl()
 * @method string getGroupId()
 * @method string getTaskMaxAttempt()
 * @method string getDataOffset()
 * @method string getDispatcherSize()
 * @method string getTaskAttemptInterval()
 * @method string getExecuteMode()
 * @method string getTimeExpression()
 * @method string getTimeoutEnable()
 * @method array getContactInfo()
 * @method string getName()
 * @method string getTimeType()
 * @method string getParameters()
 * @method string getTemplate()
 * @method string getNamespaceSource()
 * @method string getTimezone()
 * @method string getDescription()
 * @method string getContent()
 * @method string getTimeout()
 * @method string getTimeoutKillEnable()
 * @method string getPageSize()
 * @method string getTaskDispatchMode()
 * @method string getCalendar()
 * @method string getFailEnable()
 * @method string getSendChannel()
 * @method string getMaxAttempt()
 * @method string getMissWorkerEnable()
 * @method string getSuccessNoticeEnable()
 * @method string getQueueSize()
 * @method string getClassName()
 * @method string getNamespace()
 * @method string getXAttrs()
 * @method string getMaxConcurrency()
 */
class UpdateJob extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAttemptInterval($value)
    {
        $this->data['AttemptInterval'] = $value;
        $this->options['form_params']['AttemptInterval'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFailTimes($value)
    {
        $this->data['FailTimes'] = $value;
        $this->options['form_params']['FailTimes'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJobId($value)
    {
        $this->data['JobId'] = $value;
        $this->options['form_params']['JobId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withConsumerSize($value)
    {
        $this->data['ConsumerSize'] = $value;
        $this->options['form_params']['ConsumerSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJarUrl($value)
    {
        $this->data['JarUrl'] = $value;
        $this->options['form_params']['JarUrl'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupId($value)
    {
        $this->data['GroupId'] = $value;
        $this->options['form_params']['GroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTaskMaxAttempt($value)
    {
        $this->data['TaskMaxAttempt'] = $value;
        $this->options['form_params']['TaskMaxAttempt'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDataOffset($value)
    {
        $this->data['DataOffset'] = $value;
        $this->options['form_params']['DataOffset'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDispatcherSize($value)
    {
        $this->data['DispatcherSize'] = $value;
        $this->options['form_params']['DispatcherSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTaskAttemptInterval($value)
    {
        $this->data['TaskAttemptInterval'] = $value;
        $this->options['form_params']['TaskAttemptInterval'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExecuteMode($value)
    {
        $this->data['ExecuteMode'] = $value;
        $this->options['form_params']['ExecuteMode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTimeExpression($value)
    {
        $this->data['TimeExpression'] = $value;
        $this->options['form_params']['TimeExpression'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTimeoutEnable($value)
    {
        $this->data['TimeoutEnable'] = $value;
        $this->options['form_params']['TimeoutEnable'] = $value;

        return $this;
    }

    /**
     * @param array $contactInfo
     *
     * @return $this
     */
	public function withContactInfo(array $contactInfo)
	{
	    $this->data['ContactInfo'] = $contactInfo;
		foreach ($contactInfo as $depth1 => $depth1Value) {
			if(isset($depth1Value['Ding'])){
				$this->options['form_params']['ContactInfo.' . ($depth1 + 1) . '.Ding'] = $depth1Value['Ding'];
			}
			if(isset($depth1Value['UserPhone'])){
				$this->options['form_params']['ContactInfo.' . ($depth1 + 1) . '.UserPhone'] = $depth1Value['UserPhone'];
			}
			if(isset($depth1Value['UserMail'])){
				$this->options['form_params']['ContactInfo.' . ($depth1 + 1) . '.UserMail'] = $depth1Value['UserMail'];
			}
			if(isset($depth1Value['UserName'])){
				$this->options['form_params']['ContactInfo.' . ($depth1 + 1) . '.UserName'] = $depth1Value['UserName'];
			}
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withName($value)
    {
        $this->data['Name'] = $value;
        $this->options['form_params']['Name'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTimeType($value)
    {
        $this->data['TimeType'] = $value;
        $this->options['form_params']['TimeType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withParameters($value)
    {
        $this->data['Parameters'] = $value;
        $this->options['form_params']['Parameters'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTemplate($value)
    {
        $this->data['Template'] = $value;
        $this->options['form_params']['Template'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNamespaceSource($value)
    {
        $this->data['NamespaceSource'] = $value;
        $this->options['form_params']['NamespaceSource'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTimezone($value)
    {
        $this->data['Timezone'] = $value;
        $this->options['form_params']['Timezone'] = $value;

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
    public function withContent($value)
    {
        $this->data['Content'] = $value;
        $this->options['form_params']['Content'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTimeout($value)
    {
        $this->data['Timeout'] = $value;
        $this->options['form_params']['Timeout'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTimeoutKillEnable($value)
    {
        $this->data['TimeoutKillEnable'] = $value;
        $this->options['form_params']['TimeoutKillEnable'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['form_params']['PageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTaskDispatchMode($value)
    {
        $this->data['TaskDispatchMode'] = $value;
        $this->options['form_params']['TaskDispatchMode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCalendar($value)
    {
        $this->data['Calendar'] = $value;
        $this->options['form_params']['Calendar'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFailEnable($value)
    {
        $this->data['FailEnable'] = $value;
        $this->options['form_params']['FailEnable'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSendChannel($value)
    {
        $this->data['SendChannel'] = $value;
        $this->options['form_params']['SendChannel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMaxAttempt($value)
    {
        $this->data['MaxAttempt'] = $value;
        $this->options['form_params']['MaxAttempt'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMissWorkerEnable($value)
    {
        $this->data['MissWorkerEnable'] = $value;
        $this->options['form_params']['MissWorkerEnable'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSuccessNoticeEnable($value)
    {
        $this->data['SuccessNoticeEnable'] = $value;
        $this->options['form_params']['SuccessNoticeEnable'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withQueueSize($value)
    {
        $this->data['QueueSize'] = $value;
        $this->options['form_params']['QueueSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClassName($value)
    {
        $this->data['ClassName'] = $value;
        $this->options['form_params']['ClassName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNamespace($value)
    {
        $this->data['Namespace'] = $value;
        $this->options['form_params']['Namespace'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withXAttrs($value)
    {
        $this->data['XAttrs'] = $value;
        $this->options['form_params']['XAttrs'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMaxConcurrency($value)
    {
        $this->data['MaxConcurrency'] = $value;
        $this->options['form_params']['MaxConcurrency'] = $value;

        return $this;
    }
}

/**
 * @method string getNamespaceSource()
 * @method string getDescription()
 * @method string getWorkflowId()
 * @method string getGroupId()
 * @method string getTimeExpression()
 * @method string getNamespace()
 * @method string getName()
 * @method string getTimeType()
 */
class UpdateWorkflow extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNamespaceSource($value)
    {
        $this->data['NamespaceSource'] = $value;
        $this->options['form_params']['NamespaceSource'] = $value;

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
    public function withWorkflowId($value)
    {
        $this->data['WorkflowId'] = $value;
        $this->options['form_params']['WorkflowId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupId($value)
    {
        $this->data['GroupId'] = $value;
        $this->options['form_params']['GroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTimeExpression($value)
    {
        $this->data['TimeExpression'] = $value;
        $this->options['form_params']['TimeExpression'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNamespace($value)
    {
        $this->data['Namespace'] = $value;
        $this->options['form_params']['Namespace'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withName($value)
    {
        $this->data['Name'] = $value;
        $this->options['form_params']['Name'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTimeType($value)
    {
        $this->data['TimeType'] = $value;
        $this->options['form_params']['TimeType'] = $value;

        return $this;
    }
}

/**
 * @method string getDagJson()
 * @method string getNamespaceSource()
 * @method string getGroupId()
 * @method string getNamespace()
 * @method string getWorkflowId()
 */
class UpdateWorkflowDag extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDagJson($value)
    {
        $this->data['DagJson'] = $value;
        $this->options['form_params']['DagJson'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNamespaceSource($value)
    {
        $this->data['NamespaceSource'] = $value;
        $this->options['form_params']['NamespaceSource'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupId($value)
    {
        $this->data['GroupId'] = $value;
        $this->options['form_params']['GroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNamespace($value)
    {
        $this->data['Namespace'] = $value;
        $this->options['form_params']['Namespace'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWorkflowId($value)
    {
        $this->data['WorkflowId'] = $value;
        $this->options['form_params']['WorkflowId'] = $value;

        return $this;
    }
}
