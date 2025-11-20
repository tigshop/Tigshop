<?php

namespace AlibabaCloud\Ess\V20140828;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AttachAlbServerGroups attachAlbServerGroups(array $options = [])
 * @method AttachDBInstances attachDBInstances(array $options = [])
 * @method AttachInstances attachInstances(array $options = [])
 * @method AttachLoadBalancers attachLoadBalancers(array $options = [])
 * @method AttachServerGroups attachServerGroups(array $options = [])
 * @method AttachVServerGroups attachVServerGroups(array $options = [])
 * @method ChangeResourceGroup changeResourceGroup(array $options = [])
 * @method CompleteLifecycleAction completeLifecycleAction(array $options = [])
 * @method CreateAlarm createAlarm(array $options = [])
 * @method CreateEciScalingConfiguration createEciScalingConfiguration(array $options = [])
 * @method CreateLifecycleHook createLifecycleHook(array $options = [])
 * @method CreateNotificationConfiguration createNotificationConfiguration(array $options = [])
 * @method CreateScalingConfiguration createScalingConfiguration(array $options = [])
 * @method CreateScalingGroup createScalingGroup(array $options = [])
 * @method CreateScalingRule createScalingRule(array $options = [])
 * @method CreateScheduledTask createScheduledTask(array $options = [])
 * @method DeactivateScalingConfiguration deactivateScalingConfiguration(array $options = [])
 * @method DeleteAlarm deleteAlarm(array $options = [])
 * @method DeleteEciScalingConfiguration deleteEciScalingConfiguration(array $options = [])
 * @method DeleteLifecycleHook deleteLifecycleHook(array $options = [])
 * @method DeleteNotificationConfiguration deleteNotificationConfiguration(array $options = [])
 * @method DeleteScalingConfiguration deleteScalingConfiguration(array $options = [])
 * @method DeleteScalingGroup deleteScalingGroup(array $options = [])
 * @method DeleteScalingRule deleteScalingRule(array $options = [])
 * @method DeleteScheduledTask deleteScheduledTask(array $options = [])
 * @method DescribeAlarms describeAlarms(array $options = [])
 * @method DescribeEciScalingConfigurations describeEciScalingConfigurations(array $options = [])
 * @method DescribeElasticStrength describeElasticStrength(array $options = [])
 * @method DescribeLifecycleActions describeLifecycleActions(array $options = [])
 * @method DescribeLifecycleHooks describeLifecycleHooks(array $options = [])
 * @method DescribeLimitation describeLimitation(array $options = [])
 * @method DescribeNotificationConfigurations describeNotificationConfigurations(array $options = [])
 * @method DescribeNotificationTypes describeNotificationTypes(array $options = [])
 * @method DescribePatternTypes describePatternTypes(array $options = [])
 * @method DescribeRegions describeRegions(array $options = [])
 * @method DescribeScalingActivities describeScalingActivities(array $options = [])
 * @method DescribeScalingActivityDetail describeScalingActivityDetail(array $options = [])
 * @method DescribeScalingConfigurations describeScalingConfigurations(array $options = [])
 * @method DescribeScalingGroups describeScalingGroups(array $options = [])
 * @method DescribeScalingInstances describeScalingInstances(array $options = [])
 * @method DescribeScalingRules describeScalingRules(array $options = [])
 * @method DescribeScheduledTasks describeScheduledTasks(array $options = [])
 * @method DetachAlbServerGroups detachAlbServerGroups(array $options = [])
 * @method DetachDBInstances detachDBInstances(array $options = [])
 * @method DetachInstances detachInstances(array $options = [])
 * @method DetachLoadBalancers detachLoadBalancers(array $options = [])
 * @method DetachServerGroups detachServerGroups(array $options = [])
 * @method DetachVServerGroups detachVServerGroups(array $options = [])
 * @method DisableAlarm disableAlarm(array $options = [])
 * @method DisableScalingGroup disableScalingGroup(array $options = [])
 * @method EnableAlarm enableAlarm(array $options = [])
 * @method EnableScalingGroup enableScalingGroup(array $options = [])
 * @method EnterStandby enterStandby(array $options = [])
 * @method ExecuteScalingRule executeScalingRule(array $options = [])
 * @method ExitStandby exitStandby(array $options = [])
 * @method ListTagKeys listTagKeys(array $options = [])
 * @method ListTagResources listTagResources(array $options = [])
 * @method ListTagValues listTagValues(array $options = [])
 * @method ModifyAlarm modifyAlarm(array $options = [])
 * @method ModifyEciScalingConfiguration modifyEciScalingConfiguration(array $options = [])
 * @method ModifyInstanceAttribute modifyInstanceAttribute(array $options = [])
 * @method ModifyLifecycleHook modifyLifecycleHook(array $options = [])
 * @method ModifyNotificationConfiguration modifyNotificationConfiguration(array $options = [])
 * @method ModifyScalingConfiguration modifyScalingConfiguration(array $options = [])
 * @method ModifyScalingGroup modifyScalingGroup(array $options = [])
 * @method ModifyScalingRule modifyScalingRule(array $options = [])
 * @method ModifyScheduledTask modifyScheduledTask(array $options = [])
 * @method RebalanceInstances rebalanceInstances(array $options = [])
 * @method RecordLifecycleActionHeartbeat recordLifecycleActionHeartbeat(array $options = [])
 * @method RemoveInstances removeInstances(array $options = [])
 * @method ResumeProcesses resumeProcesses(array $options = [])
 * @method ScaleWithAdjustment scaleWithAdjustment(array $options = [])
 * @method SetGroupDeletionProtection setGroupDeletionProtection(array $options = [])
 * @method SetInstanceHealth setInstanceHealth(array $options = [])
 * @method SetInstancesProtection setInstancesProtection(array $options = [])
 * @method SuspendProcesses suspendProcesses(array $options = [])
 * @method TagResources tagResources(array $options = [])
 * @method UntagResources untagResources(array $options = [])
 * @method VerifyAuthentication verifyAuthentication(array $options = [])
 * @method VerifyUser verifyUser(array $options = [])
 */
class EssApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'Ess';

    /** @var string */
    public $version = '2014-08-28';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'ess';
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getScalingGroupId()
 * @method $this withScalingGroupId($value)
 * @method string getForceAttach()
 * @method $this withForceAttach($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method array getAlbServerGroup()
 */
class AttachAlbServerGroups extends Rpc
{

    /**
     * @param array $albServerGroup
     *
     * @return $this
     */
	public function withAlbServerGroup(array $albServerGroup)
	{
	    $this->data['AlbServerGroup'] = $albServerGroup;
		foreach ($albServerGroup as $depth1 => $depth1Value) {
			if(isset($depth1Value['AlbServerGroupId'])){
				$this->options['query']['AlbServerGroup.' . ($depth1 + 1) . '.AlbServerGroupId'] = $depth1Value['AlbServerGroupId'];
			}
			if(isset($depth1Value['Port'])){
				$this->options['query']['AlbServerGroup.' . ($depth1 + 1) . '.Port'] = $depth1Value['Port'];
			}
			if(isset($depth1Value['Weight'])){
				$this->options['query']['AlbServerGroup.' . ($depth1 + 1) . '.Weight'] = $depth1Value['Weight'];
			}
		}

		return $this;
    }
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getScalingGroupId()
 * @method $this withScalingGroupId($value)
 * @method string getForceAttach()
 * @method $this withForceAttach($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getAttachMode()
 * @method $this withAttachMode($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method array getDBInstance()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class AttachDBInstances extends Rpc
{

    /**
     * @param array $dBInstance
     *
     * @return $this
     */
	public function withDBInstance(array $dBInstance)
	{
	    $this->data['DBInstance'] = $dBInstance;
		foreach ($dBInstance as $i => $iValue) {
			$this->options['query']['DBInstance.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getScalingGroupId()
 * @method $this withScalingGroupId($value)
 * @method string getIgnoreInvalidInstance()
 * @method $this withIgnoreInvalidInstance($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getEntrusted()
 * @method $this withEntrusted($value)
 * @method array getInstanceId()
 * @method array getLoadBalancerWeight()
 * @method string getLifecycleHook()
 * @method $this withLifecycleHook($value)
 */
class AttachInstances extends Rpc
{

    /**
     * @param array $instanceId
     *
     * @return $this
     */
	public function withInstanceId(array $instanceId)
	{
	    $this->data['InstanceId'] = $instanceId;
		foreach ($instanceId as $i => $iValue) {
			$this->options['query']['InstanceId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $loadBalancerWeight
     *
     * @return $this
     */
	public function withLoadBalancerWeight(array $loadBalancerWeight)
	{
	    $this->data['LoadBalancerWeight'] = $loadBalancerWeight;
		foreach ($loadBalancerWeight as $i => $iValue) {
			$this->options['query']['LoadBalancerWeight.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getScalingGroupId()
 * @method $this withScalingGroupId($value)
 * @method string getForceAttach()
 * @method $this withForceAttach($value)
 * @method array getLoadBalancerConfig()
 * @method array getLoadBalancer()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAsync()
 * @method $this withAsync($value)
 */
class AttachLoadBalancers extends Rpc
{

    /**
     * @param array $loadBalancerConfig
     *
     * @return $this
     */
	public function withLoadBalancerConfig(array $loadBalancerConfig)
	{
	    $this->data['LoadBalancerConfig'] = $loadBalancerConfig;
		foreach ($loadBalancerConfig as $depth1 => $depth1Value) {
			if(isset($depth1Value['LoadBalancerId'])){
				$this->options['query']['LoadBalancerConfig.' . ($depth1 + 1) . '.LoadBalancerId'] = $depth1Value['LoadBalancerId'];
			}
			if(isset($depth1Value['Weight'])){
				$this->options['query']['LoadBalancerConfig.' . ($depth1 + 1) . '.Weight'] = $depth1Value['Weight'];
			}
		}

		return $this;
    }

    /**
     * @param array $loadBalancer
     *
     * @return $this
     */
	public function withLoadBalancer(array $loadBalancer)
	{
	    $this->data['LoadBalancer'] = $loadBalancer;
		foreach ($loadBalancer as $i => $iValue) {
			$this->options['query']['LoadBalancer.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getScalingGroupId()
 * @method $this withScalingGroupId($value)
 * @method string getForceAttach()
 * @method $this withForceAttach($value)
 * @method array getServerGroup()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class AttachServerGroups extends Rpc
{

    /**
     * @param array $serverGroup
     *
     * @return $this
     */
	public function withServerGroup(array $serverGroup)
	{
	    $this->data['ServerGroup'] = $serverGroup;
		foreach ($serverGroup as $depth1 => $depth1Value) {
			if(isset($depth1Value['ServerGroupId'])){
				$this->options['query']['ServerGroup.' . ($depth1 + 1) . '.ServerGroupId'] = $depth1Value['ServerGroupId'];
			}
			if(isset($depth1Value['Port'])){
				$this->options['query']['ServerGroup.' . ($depth1 + 1) . '.Port'] = $depth1Value['Port'];
			}
			if(isset($depth1Value['Weight'])){
				$this->options['query']['ServerGroup.' . ($depth1 + 1) . '.Weight'] = $depth1Value['Weight'];
			}
			if(isset($depth1Value['Type'])){
				$this->options['query']['ServerGroup.' . ($depth1 + 1) . '.Type'] = $depth1Value['Type'];
			}
		}

		return $this;
    }
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getScalingGroupId()
 * @method $this withScalingGroupId($value)
 * @method string getForceAttach()
 * @method $this withForceAttach($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method array getVServerGroup()
 */
class AttachVServerGroups extends Rpc
{

    /**
     * @param array $vServerGroup
     *
     * @return $this
     */
	public function withVServerGroup(array $vServerGroup)
	{
	    $this->data['VServerGroup'] = $vServerGroup;
		foreach ($vServerGroup as $depth1 => $depth1Value) {
			if(isset($depth1Value['LoadBalancerId'])){
				$this->options['query']['VServerGroup.' . ($depth1 + 1) . '.LoadBalancerId'] = $depth1Value['LoadBalancerId'];
			}
			foreach ($depth1Value['VServerGroupAttribute'] as $depth2 => $depth2Value) {
				if(isset($depth2Value['VServerGroupId'])){
					$this->options['query']['VServerGroup.' . ($depth1 + 1) . '.VServerGroupAttribute.' . ($depth2 + 1) . '.VServerGroupId'] = $depth2Value['VServerGroupId'];
				}
				if(isset($depth2Value['Port'])){
					$this->options['query']['VServerGroup.' . ($depth1 + 1) . '.VServerGroupAttribute.' . ($depth2 + 1) . '.Port'] = $depth2Value['Port'];
				}
				if(isset($depth2Value['Weight'])){
					$this->options['query']['VServerGroup.' . ($depth1 + 1) . '.VServerGroupAttribute.' . ($depth2 + 1) . '.Weight'] = $depth2Value['Weight'];
				}
			}
		}

		return $this;
    }
}

/**
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getNewResourceGroupId()
 * @method $this withNewResourceGroupId($value)
 */
class ChangeResourceGroup extends Rpc
{
}

/**
 * @method string getLifecycleActionToken()
 * @method $this withLifecycleActionToken($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getLifecycleHookId()
 * @method $this withLifecycleHookId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getLifecycleActionResult()
 * @method $this withLifecycleActionResult($value)
 */
class CompleteLifecycleAction extends Rpc
{
}

/**
 * @method string getMetricType()
 * @method $this withMetricType($value)
 * @method string getScalingGroupId()
 * @method $this withScalingGroupId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getExpressionsLogicOperator()
 * @method $this withExpressionsLogicOperator($value)
 * @method array getAlarmAction()
 * @method string getThreshold()
 * @method $this withThreshold($value)
 * @method string getEffective()
 * @method $this withEffective($value)
 * @method string getEvaluationCount()
 * @method $this withEvaluationCount($value)
 * @method string getMetricName()
 * @method $this withMetricName($value)
 * @method array getDimension()
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method array getExpression()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getComparisonOperator()
 * @method $this withComparisonOperator($value)
 * @method string getStatistics()
 * @method $this withStatistics($value)
 */
class CreateAlarm extends Rpc
{

    /**
     * @param array $alarmAction
     *
     * @return $this
     */
	public function withAlarmAction(array $alarmAction)
	{
	    $this->data['AlarmAction'] = $alarmAction;
		foreach ($alarmAction as $i => $iValue) {
			$this->options['query']['AlarmAction.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $dimension
     *
     * @return $this
     */
	public function withDimension(array $dimension)
	{
	    $this->data['Dimension'] = $dimension;
		foreach ($dimension as $depth1 => $depth1Value) {
			if(isset($depth1Value['DimensionValue'])){
				$this->options['query']['Dimension.' . ($depth1 + 1) . '.DimensionValue'] = $depth1Value['DimensionValue'];
			}
			if(isset($depth1Value['DimensionKey'])){
				$this->options['query']['Dimension.' . ($depth1 + 1) . '.DimensionKey'] = $depth1Value['DimensionKey'];
			}
		}

		return $this;
    }

    /**
     * @param array $expression
     *
     * @return $this
     */
	public function withExpression(array $expression)
	{
	    $this->data['Expression'] = $expression;
		foreach ($expression as $depth1 => $depth1Value) {
			if(isset($depth1Value['Period'])){
				$this->options['query']['Expression.' . ($depth1 + 1) . '.Period'] = $depth1Value['Period'];
			}
			if(isset($depth1Value['Threshold'])){
				$this->options['query']['Expression.' . ($depth1 + 1) . '.Threshold'] = $depth1Value['Threshold'];
			}
			if(isset($depth1Value['MetricName'])){
				$this->options['query']['Expression.' . ($depth1 + 1) . '.MetricName'] = $depth1Value['MetricName'];
			}
			if(isset($depth1Value['ComparisonOperator'])){
				$this->options['query']['Expression.' . ($depth1 + 1) . '.ComparisonOperator'] = $depth1Value['ComparisonOperator'];
			}
			if(isset($depth1Value['Statistics'])){
				$this->options['query']['Expression.' . ($depth1 + 1) . '.Statistics'] = $depth1Value['Statistics'];
			}
		}

		return $this;
    }
}

/**
 * @method array getContainer()
 * @method array getNtpServer()
 * @method string getSpotPriceLimit()
 * @method $this withSpotPriceLimit($value)
 * @method string getEnableSls()
 * @method $this withEnableSls($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getHostName()
 * @method $this withHostName($value)
 * @method string getActiveDeadlineSeconds()
 * @method $this withActiveDeadlineSeconds($value)
 * @method string getEgressBandwidth()
 * @method $this withEgressBandwidth($value)
 * @method array getDnsConfigSearch()
 * @method array getHostAliase()
 * @method string getImageSnapshotId()
 * @method $this withImageSnapshotId($value)
 * @method array getTag()
 * @method string getCpuOptionsThreadsPerCore()
 * @method $this withCpuOptionsThreadsPerCore($value)
 * @method string getDataCachePL()
 * @method $this withDataCachePL($value)
 * @method string getIpv6AddressCount()
 * @method $this withIpv6AddressCount($value)
 * @method string getCpu()
 * @method $this withCpu($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getScalingConfigurationName()
 * @method $this withScalingConfigurationName($value)
 * @method string getSpotStrategy()
 * @method $this withSpotStrategy($value)
 * @method array getVolume()
 * @method string getInstanceFamilyLevel()
 * @method $this withInstanceFamilyLevel($value)
 * @method array getDnsConfigOption()
 * @method string getEphemeralStorage()
 * @method $this withEphemeralStorage($value)
 * @method string getDataCacheProvisionedIops()
 * @method $this withDataCacheProvisionedIops($value)
 * @method string getEipBandwidth()
 * @method $this withEipBandwidth($value)
 * @method string getGpuDriverVersion()
 * @method $this withGpuDriverVersion($value)
 * @method string getCostOptimization()
 * @method $this withCostOptimization($value)
 * @method string getDataCacheBurstingEnabled()
 * @method $this withDataCacheBurstingEnabled($value)
 * @method string getMemory()
 * @method $this withMemory($value)
 * @method string getScalingGroupId()
 * @method $this withScalingGroupId($value)
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getIngressBandwidth()
 * @method $this withIngressBandwidth($value)
 * @method string getDnsPolicy()
 * @method $this withDnsPolicy($value)
 * @method array getSecurityContextSysctl()
 * @method string getDataCacheBucket()
 * @method $this withDataCacheBucket($value)
 * @method array getDnsConfigNameServer()
 * @method array getInitContainer()
 * @method array getInstanceType()
 * @method string getTerminationGracePeriodSeconds()
 * @method $this withTerminationGracePeriodSeconds($value)
 * @method array getImageRegistryCredential()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getRestartPolicy()
 * @method $this withRestartPolicy($value)
 * @method string getCpuOptionsCore()
 * @method $this withCpuOptionsCore($value)
 * @method string getRamRoleName()
 * @method $this withRamRoleName($value)
 * @method array getAcrRegistryInfo()
 * @method string getAutoMatchImageCache()
 * @method $this withAutoMatchImageCache($value)
 * @method string getLoadBalancerWeight()
 * @method $this withLoadBalancerWeight($value)
 * @method string getContainerGroupName()
 * @method $this withContainerGroupName($value)
 * @method string getAutoCreateEip()
 * @method $this withAutoCreateEip($value)
 */
class CreateEciScalingConfiguration extends Rpc
{

    /**
     * @param array $container
     *
     * @return $this
     */
	public function withContainer(array $container)
	{
	    $this->data['Container'] = $container;
		foreach ($container as $depth1 => $depth1Value) {
			if(isset($depth1Value['Stdin'])){
				$this->options['query']['Container.' . ($depth1 + 1) . '.Stdin'] = $depth1Value['Stdin'];
			}
			foreach ($depth1Value['LivenessProbeExecCommand'] as $i => $iValue) {
				$this->options['query']['Container.' . ($depth1 + 1) . '.LivenessProbe.Exec.Command.' . ($i + 1)] = $iValue;
			}
			if(isset($depth1Value['LifecyclePostStartHandlerHttpGetPort'])){
				$this->options['query']['Container.' . ($depth1 + 1) . '.LifecyclePostStartHandlerHttpGetPort'] = $depth1Value['LifecyclePostStartHandlerHttpGetPort'];
			}
			if(isset($depth1Value['WorkingDir'])){
				$this->options['query']['Container.' . ($depth1 + 1) . '.WorkingDir'] = $depth1Value['WorkingDir'];
			}
			if(isset($depth1Value['ReadinessProbeHttpGetPort'])){
				$this->options['query']['Container.' . ($depth1 + 1) . '.ReadinessProbe.HttpGet.Port'] = $depth1Value['ReadinessProbeHttpGetPort'];
			}
			if(isset($depth1Value['LivenessProbeHttpGetPort'])){
				$this->options['query']['Container.' . ($depth1 + 1) . '.LivenessProbe.HttpGet.Port'] = $depth1Value['LivenessProbeHttpGetPort'];
			}
			if(isset($depth1Value['LifecyclePreStopHandlerTcpSocketPort'])){
				$this->options['query']['Container.' . ($depth1 + 1) . '.LifecyclePreStopHandlerTcpSocketPort'] = $depth1Value['LifecyclePreStopHandlerTcpSocketPort'];
			}
			foreach ($depth1Value['VolumeMount'] as $depth2 => $depth2Value) {
				if(isset($depth2Value['MountPath'])){
					$this->options['query']['Container.' . ($depth1 + 1) . '.VolumeMount.' . ($depth2 + 1) . '.MountPath'] = $depth2Value['MountPath'];
				}
				if(isset($depth2Value['ReadOnly'])){
					$this->options['query']['Container.' . ($depth1 + 1) . '.VolumeMount.' . ($depth2 + 1) . '.ReadOnly'] = $depth2Value['ReadOnly'];
				}
				if(isset($depth2Value['MountPropagation'])){
					$this->options['query']['Container.' . ($depth1 + 1) . '.VolumeMount.' . ($depth2 + 1) . '.MountPropagation'] = $depth2Value['MountPropagation'];
				}
				if(isset($depth2Value['Name'])){
					$this->options['query']['Container.' . ($depth1 + 1) . '.VolumeMount.' . ($depth2 + 1) . '.Name'] = $depth2Value['Name'];
				}
				if(isset($depth2Value['SubPath'])){
					$this->options['query']['Container.' . ($depth1 + 1) . '.VolumeMount.' . ($depth2 + 1) . '.SubPath'] = $depth2Value['SubPath'];
				}
			}
			if(isset($depth1Value['Image'])){
				$this->options['query']['Container.' . ($depth1 + 1) . '.Image'] = $depth1Value['Image'];
			}
			foreach ($depth1Value['LifecyclePostStartHandlerExec'] as $i => $iValue) {
				$this->options['query']['Container.' . ($depth1 + 1) . '.LifecyclePostStartHandlerExec.' . ($i + 1)] = $iValue;
			}
			if(isset($depth1Value['Cpu'])){
				$this->options['query']['Container.' . ($depth1 + 1) . '.Cpu'] = $depth1Value['Cpu'];
			}
			if(isset($depth1Value['ReadinessProbeHttpGetPath'])){
				$this->options['query']['Container.' . ($depth1 + 1) . '.ReadinessProbe.HttpGet.Path'] = $depth1Value['ReadinessProbeHttpGetPath'];
			}
			if(isset($depth1Value['Gpu'])){
				$this->options['query']['Container.' . ($depth1 + 1) . '.Gpu'] = $depth1Value['Gpu'];
			}
			if(isset($depth1Value['StdinOnce'])){
				$this->options['query']['Container.' . ($depth1 + 1) . '.StdinOnce'] = $depth1Value['StdinOnce'];
			}
			if(isset($depth1Value['LifecyclePostStartHandlerTcpSocketHost'])){
				$this->options['query']['Container.' . ($depth1 + 1) . '.LifecyclePostStartHandlerTcpSocketHost'] = $depth1Value['LifecyclePostStartHandlerTcpSocketHost'];
			}
			if(isset($depth1Value['LivenessProbeSuccessThreshold'])){
				$this->options['query']['Container.' . ($depth1 + 1) . '.LivenessProbe.SuccessThreshold'] = $depth1Value['LivenessProbeSuccessThreshold'];
			}
			if(isset($depth1Value['SecurityContextRunAsUser'])){
				$this->options['query']['Container.' . ($depth1 + 1) . '.SecurityContext.RunAsUser'] = $depth1Value['SecurityContextRunAsUser'];
			}
			if(isset($depth1Value['LivenessProbePeriodSeconds'])){
				$this->options['query']['Container.' . ($depth1 + 1) . '.LivenessProbe.PeriodSeconds'] = $depth1Value['LivenessProbePeriodSeconds'];
			}
			if(isset($depth1Value['LivenessProbeInitialDelaySeconds'])){
				$this->options['query']['Container.' . ($depth1 + 1) . '.LivenessProbe.InitialDelaySeconds'] = $depth1Value['LivenessProbeInitialDelaySeconds'];
			}
			foreach ($depth1Value['Port'] as $depth2 => $depth2Value) {
				if(isset($depth2Value['Protocol'])){
					$this->options['query']['Container.' . ($depth1 + 1) . '.Port.' . ($depth2 + 1) . '.Protocol'] = $depth2Value['Protocol'];
				}
				if(isset($depth2Value['Port'])){
					$this->options['query']['Container.' . ($depth1 + 1) . '.Port.' . ($depth2 + 1) . '.Port'] = $depth2Value['Port'];
				}
			}
			if(isset($depth1Value['Name'])){
				$this->options['query']['Container.' . ($depth1 + 1) . '.Name'] = $depth1Value['Name'];
			}
			if(isset($depth1Value['LifecyclePreStopHandlerTcpSocketHost'])){
				$this->options['query']['Container.' . ($depth1 + 1) . '.LifecyclePreStopHandlerTcpSocketHost'] = $depth1Value['LifecyclePreStopHandlerTcpSocketHost'];
			}
			if(isset($depth1Value['SecurityContextReadOnlyRootFilesystem'])){
				$this->options['query']['Container.' . ($depth1 + 1) . '.SecurityContext.ReadOnlyRootFilesystem'] = $depth1Value['SecurityContextReadOnlyRootFilesystem'];
			}
			if(isset($depth1Value['LifecyclePreStopHandlerHttpGetHost'])){
				$this->options['query']['Container.' . ($depth1 + 1) . '.LifecyclePreStopHandlerHttpGetHost'] = $depth1Value['LifecyclePreStopHandlerHttpGetHost'];
			}
			if(isset($depth1Value['Memory'])){
				$this->options['query']['Container.' . ($depth1 + 1) . '.Memory'] = $depth1Value['Memory'];
			}
			if(isset($depth1Value['LifecyclePreStopHandlerHttpGetScheme'])){
				$this->options['query']['Container.' . ($depth1 + 1) . '.LifecyclePreStopHandlerHttpGetScheme'] = $depth1Value['LifecyclePreStopHandlerHttpGetScheme'];
			}
			if(isset($depth1Value['LifecyclePostStartHandlerTcpSocketPort'])){
				$this->options['query']['Container.' . ($depth1 + 1) . '.LifecyclePostStartHandlerTcpSocketPort'] = $depth1Value['LifecyclePostStartHandlerTcpSocketPort'];
			}
			if(isset($depth1Value['LifecyclePreStopHandlerHttpGetPath'])){
				$this->options['query']['Container.' . ($depth1 + 1) . '.LifecyclePreStopHandlerHttpGetPath'] = $depth1Value['LifecyclePreStopHandlerHttpGetPath'];
			}
			if(isset($depth1Value['LifecyclePostStartHandlerHttpGetHost'])){
				$this->options['query']['Container.' . ($depth1 + 1) . '.LifecyclePostStartHandlerHttpGetHost'] = $depth1Value['LifecyclePostStartHandlerHttpGetHost'];
			}
			if(isset($depth1Value['ReadinessProbeFailureThreshold'])){
				$this->options['query']['Container.' . ($depth1 + 1) . '.ReadinessProbe.FailureThreshold'] = $depth1Value['ReadinessProbeFailureThreshold'];
			}
			foreach ($depth1Value['Arg'] as $i => $iValue) {
				$this->options['query']['Container.' . ($depth1 + 1) . '.Arg.' . ($i + 1)] = $iValue;
			}
			if(isset($depth1Value['ReadinessProbeSuccessThreshold'])){
				$this->options['query']['Container.' . ($depth1 + 1) . '.ReadinessProbe.SuccessThreshold'] = $depth1Value['ReadinessProbeSuccessThreshold'];
			}
			if(isset($depth1Value['LifecyclePostStartHandlerHttpGetPath'])){
				$this->options['query']['Container.' . ($depth1 + 1) . '.LifecyclePostStartHandlerHttpGetPath'] = $depth1Value['LifecyclePostStartHandlerHttpGetPath'];
			}
			foreach ($depth1Value['LifecyclePreStopHandlerExec'] as $i => $iValue) {
				$this->options['query']['Container.' . ($depth1 + 1) . '.LifecyclePreStopHandlerExec.' . ($i + 1)] = $iValue;
			}
			foreach ($depth1Value['SecurityContextCapabilityAdd'] as $i => $iValue) {
				$this->options['query']['Container.' . ($depth1 + 1) . '.SecurityContext.Capability.Add.' . ($i + 1)] = $iValue;
			}
			if(isset($depth1Value['ReadinessProbeInitialDelaySeconds'])){
				$this->options['query']['Container.' . ($depth1 + 1) . '.ReadinessProbe.InitialDelaySeconds'] = $depth1Value['ReadinessProbeInitialDelaySeconds'];
			}
			foreach ($depth1Value['ReadinessProbeExecCommand'] as $i => $iValue) {
				$this->options['query']['Container.' . ($depth1 + 1) . '.ReadinessProbe.Exec.Command.' . ($i + 1)] = $iValue;
			}
			if(isset($depth1Value['ReadinessProbeHttpGetScheme'])){
				$this->options['query']['Container.' . ($depth1 + 1) . '.ReadinessProbe.HttpGet.Scheme'] = $depth1Value['ReadinessProbeHttpGetScheme'];
			}
			if(isset($depth1Value['LifecyclePreStopHandlerHttpGetPort'])){
				$this->options['query']['Container.' . ($depth1 + 1) . '.LifecyclePreStopHandlerHttpGetPort'] = $depth1Value['LifecyclePreStopHandlerHttpGetPort'];
			}
			if(isset($depth1Value['ImagePullPolicy'])){
				$this->options['query']['Container.' . ($depth1 + 1) . '.ImagePullPolicy'] = $depth1Value['ImagePullPolicy'];
			}
			foreach ($depth1Value['Command'] as $i => $iValue) {
				$this->options['query']['Container.' . ($depth1 + 1) . '.Command.' . ($i + 1)] = $iValue;
			}
			if(isset($depth1Value['LivenessProbeHttpGetPath'])){
				$this->options['query']['Container.' . ($depth1 + 1) . '.LivenessProbe.HttpGet.Path'] = $depth1Value['LivenessProbeHttpGetPath'];
			}
			if(isset($depth1Value['LifecyclePostStartHandlerHttpGetScheme'])){
				$this->options['query']['Container.' . ($depth1 + 1) . '.LifecyclePostStartHandlerHttpGetScheme'] = $depth1Value['LifecyclePostStartHandlerHttpGetScheme'];
			}
			if(isset($depth1Value['LivenessProbeTimeoutSeconds'])){
				$this->options['query']['Container.' . ($depth1 + 1) . '.LivenessProbe.TimeoutSeconds'] = $depth1Value['LivenessProbeTimeoutSeconds'];
			}
			if(isset($depth1Value['LivenessProbeTcpSocketPort'])){
				$this->options['query']['Container.' . ($depth1 + 1) . '.LivenessProbe.TcpSocket.Port'] = $depth1Value['LivenessProbeTcpSocketPort'];
			}
			if(isset($depth1Value['ReadinessProbePeriodSeconds'])){
				$this->options['query']['Container.' . ($depth1 + 1) . '.ReadinessProbe.PeriodSeconds'] = $depth1Value['ReadinessProbePeriodSeconds'];
			}
			foreach ($depth1Value['EnvironmentVar'] as $depth2 => $depth2Value) {
				if(isset($depth2Value['FieldRefFieldPath'])){
					$this->options['query']['Container.' . ($depth1 + 1) . '.EnvironmentVar.' . ($depth2 + 1) . '.FieldRefFieldPath'] = $depth2Value['FieldRefFieldPath'];
				}
				if(isset($depth2Value['Value'])){
					$this->options['query']['Container.' . ($depth1 + 1) . '.EnvironmentVar.' . ($depth2 + 1) . '.Value'] = $depth2Value['Value'];
				}
				if(isset($depth2Value['Key'])){
					$this->options['query']['Container.' . ($depth1 + 1) . '.EnvironmentVar.' . ($depth2 + 1) . '.Key'] = $depth2Value['Key'];
				}
			}
			if(isset($depth1Value['Tty'])){
				$this->options['query']['Container.' . ($depth1 + 1) . '.Tty'] = $depth1Value['Tty'];
			}
			if(isset($depth1Value['LivenessProbeFailureThreshold'])){
				$this->options['query']['Container.' . ($depth1 + 1) . '.LivenessProbe.FailureThreshold'] = $depth1Value['LivenessProbeFailureThreshold'];
			}
			if(isset($depth1Value['ReadinessProbeTimeoutSeconds'])){
				$this->options['query']['Container.' . ($depth1 + 1) . '.ReadinessProbe.TimeoutSeconds'] = $depth1Value['ReadinessProbeTimeoutSeconds'];
			}
			if(isset($depth1Value['ReadinessProbeTcpSocketPort'])){
				$this->options['query']['Container.' . ($depth1 + 1) . '.ReadinessProbe.TcpSocket.Port'] = $depth1Value['ReadinessProbeTcpSocketPort'];
			}
			if(isset($depth1Value['LivenessProbeHttpGetScheme'])){
				$this->options['query']['Container.' . ($depth1 + 1) . '.LivenessProbe.HttpGet.Scheme'] = $depth1Value['LivenessProbeHttpGetScheme'];
			}
		}

		return $this;
    }

    /**
     * @param array $ntpServer
     *
     * @return $this
     */
	public function withNtpServer(array $ntpServer)
	{
	    $this->data['NtpServer'] = $ntpServer;
		foreach ($ntpServer as $i => $iValue) {
			$this->options['query']['NtpServer.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $dnsConfigSearch
     *
     * @return $this
     */
	public function withDnsConfigSearch(array $dnsConfigSearch)
	{
	    $this->data['DnsConfigSearch'] = $dnsConfigSearch;
		foreach ($dnsConfigSearch as $i => $iValue) {
			$this->options['query']['DnsConfigSearch.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $hostAliase
     *
     * @return $this
     */
	public function withHostAliase(array $hostAliase)
	{
	    $this->data['HostAliase'] = $hostAliase;
		foreach ($hostAliase as $depth1 => $depth1Value) {
			foreach ($depth1Value['Hostname'] as $i => $iValue) {
				$this->options['query']['HostAliase.' . ($depth1 + 1) . '.Hostname.' . ($i + 1)] = $iValue;
			}
			if(isset($depth1Value['Ip'])){
				$this->options['query']['HostAliase.' . ($depth1 + 1) . '.Ip'] = $depth1Value['Ip'];
			}
		}

		return $this;
    }

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

    /**
     * @param array $volume
     *
     * @return $this
     */
	public function withVolume(array $volume)
	{
	    $this->data['Volume'] = $volume;
		foreach ($volume as $depth1 => $depth1Value) {
			if(isset($depth1Value['DiskVolumeFsType'])){
				$this->options['query']['Volume.' . ($depth1 + 1) . '.DiskVolume.FsType'] = $depth1Value['DiskVolumeFsType'];
			}
			if(isset($depth1Value['EmptyDirVolumeSizeLimit'])){
				$this->options['query']['Volume.' . ($depth1 + 1) . '.EmptyDirVolume.SizeLimit'] = $depth1Value['EmptyDirVolumeSizeLimit'];
			}
			if(isset($depth1Value['NFSVolumePath'])){
				$this->options['query']['Volume.' . ($depth1 + 1) . '.NFSVolume.Path'] = $depth1Value['NFSVolumePath'];
			}
			if(isset($depth1Value['DiskVolumeDiskId'])){
				$this->options['query']['Volume.' . ($depth1 + 1) . '.DiskVolume.DiskId'] = $depth1Value['DiskVolumeDiskId'];
			}
			if(isset($depth1Value['FlexVolumeFsType'])){
				$this->options['query']['Volume.' . ($depth1 + 1) . '.FlexVolume.FsType'] = $depth1Value['FlexVolumeFsType'];
			}
			if(isset($depth1Value['Type'])){
				$this->options['query']['Volume.' . ($depth1 + 1) . '.Type'] = $depth1Value['Type'];
			}
			if(isset($depth1Value['FlexVolumeDriver'])){
				$this->options['query']['Volume.' . ($depth1 + 1) . '.FlexVolume.Driver'] = $depth1Value['FlexVolumeDriver'];
			}
			if(isset($depth1Value['FlexVolumeOptions'])){
				$this->options['query']['Volume.' . ($depth1 + 1) . '.FlexVolume.Options'] = $depth1Value['FlexVolumeOptions'];
			}
			if(isset($depth1Value['NFSVolumeServer'])){
				$this->options['query']['Volume.' . ($depth1 + 1) . '.NFSVolume.Server'] = $depth1Value['NFSVolumeServer'];
			}
			if(isset($depth1Value['EmptyDirVolumeMedium'])){
				$this->options['query']['Volume.' . ($depth1 + 1) . '.EmptyDirVolume.Medium'] = $depth1Value['EmptyDirVolumeMedium'];
			}
			if(isset($depth1Value['HostPathVolumePath'])){
				$this->options['query']['Volume.' . ($depth1 + 1) . '.HostPathVolume.Path'] = $depth1Value['HostPathVolumePath'];
			}
			if(isset($depth1Value['Name'])){
				$this->options['query']['Volume.' . ($depth1 + 1) . '.Name'] = $depth1Value['Name'];
			}
			foreach ($depth1Value['ConfigFileVolumeConfigFileToPath'] as $depth2 => $depth2Value) {
				if(isset($depth2Value['Mode'])){
					$this->options['query']['Volume.' . ($depth1 + 1) . '.ConfigFileVolumeConfigFileToPath.' . ($depth2 + 1) . '.Mode'] = $depth2Value['Mode'];
				}
				if(isset($depth2Value['Path'])){
					$this->options['query']['Volume.' . ($depth1 + 1) . '.ConfigFileVolumeConfigFileToPath.' . ($depth2 + 1) . '.Path'] = $depth2Value['Path'];
				}
				if(isset($depth2Value['Content'])){
					$this->options['query']['Volume.' . ($depth1 + 1) . '.ConfigFileVolumeConfigFileToPath.' . ($depth2 + 1) . '.Content'] = $depth2Value['Content'];
				}
			}
			if(isset($depth1Value['DiskVolumeDiskSize'])){
				$this->options['query']['Volume.' . ($depth1 + 1) . '.DiskVolume.DiskSize'] = $depth1Value['DiskVolumeDiskSize'];
			}
			if(isset($depth1Value['ConfigFileVolumeDefaultMode'])){
				$this->options['query']['Volume.' . ($depth1 + 1) . '.ConfigFileVolumeDefaultMode'] = $depth1Value['ConfigFileVolumeDefaultMode'];
			}
			if(isset($depth1Value['HostPathVolumeType'])){
				$this->options['query']['Volume.' . ($depth1 + 1) . '.HostPathVolume.Type'] = $depth1Value['HostPathVolumeType'];
			}
			if(isset($depth1Value['NFSVolumeReadOnly'])){
				$this->options['query']['Volume.' . ($depth1 + 1) . '.NFSVolume.ReadOnly'] = $depth1Value['NFSVolumeReadOnly'];
			}
		}

		return $this;
    }

    /**
     * @param array $dnsConfigOption
     *
     * @return $this
     */
	public function withDnsConfigOption(array $dnsConfigOption)
	{
	    $this->data['DnsConfigOption'] = $dnsConfigOption;
		foreach ($dnsConfigOption as $depth1 => $depth1Value) {
			if(isset($depth1Value['Name'])){
				$this->options['query']['DnsConfigOption.' . ($depth1 + 1) . '.Name'] = $depth1Value['Name'];
			}
			if(isset($depth1Value['Value'])){
				$this->options['query']['DnsConfigOption.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
		}

		return $this;
    }

    /**
     * @param array $securityContextSysctl
     *
     * @return $this
     */
	public function withSecurityContextSysctl(array $securityContextSysctl)
	{
	    $this->data['SecurityContextSysctl'] = $securityContextSysctl;
		foreach ($securityContextSysctl as $depth1 => $depth1Value) {
			if(isset($depth1Value['Name'])){
				$this->options['query']['SecurityContextSysctl.' . ($depth1 + 1) . '.Name'] = $depth1Value['Name'];
			}
			if(isset($depth1Value['Value'])){
				$this->options['query']['SecurityContextSysctl.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
		}

		return $this;
    }

    /**
     * @param array $dnsConfigNameServer
     *
     * @return $this
     */
	public function withDnsConfigNameServer(array $dnsConfigNameServer)
	{
	    $this->data['DnsConfigNameServer'] = $dnsConfigNameServer;
		foreach ($dnsConfigNameServer as $i => $iValue) {
			$this->options['query']['DnsConfigNameServer.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $initContainer
     *
     * @return $this
     */
	public function withInitContainer(array $initContainer)
	{
	    $this->data['InitContainer'] = $initContainer;
		foreach ($initContainer as $depth1 => $depth1Value) {
			if(isset($depth1Value['Image'])){
				$this->options['query']['InitContainer.' . ($depth1 + 1) . '.Image'] = $depth1Value['Image'];
			}
			foreach ($depth1Value['InitContainerEnvironmentVar'] as $depth2 => $depth2Value) {
				if(isset($depth2Value['FieldRefFieldPath'])){
					$this->options['query']['InitContainer.' . ($depth1 + 1) . '.InitContainerEnvironmentVar.' . ($depth2 + 1) . '.FieldRefFieldPath'] = $depth2Value['FieldRefFieldPath'];
				}
				if(isset($depth2Value['Value'])){
					$this->options['query']['InitContainer.' . ($depth1 + 1) . '.InitContainerEnvironmentVar.' . ($depth2 + 1) . '.Value'] = $depth2Value['Value'];
				}
				if(isset($depth2Value['Key'])){
					$this->options['query']['InitContainer.' . ($depth1 + 1) . '.InitContainerEnvironmentVar.' . ($depth2 + 1) . '.Key'] = $depth2Value['Key'];
				}
			}
			foreach ($depth1Value['SecurityContextCapabilityAdd'] as $i => $iValue) {
				$this->options['query']['InitContainer.' . ($depth1 + 1) . '.SecurityContext.Capability.Add.' . ($i + 1)] = $iValue;
			}
			if(isset($depth1Value['Memory'])){
				$this->options['query']['InitContainer.' . ($depth1 + 1) . '.Memory'] = $depth1Value['Memory'];
			}
			if(isset($depth1Value['WorkingDir'])){
				$this->options['query']['InitContainer.' . ($depth1 + 1) . '.WorkingDir'] = $depth1Value['WorkingDir'];
			}
			if(isset($depth1Value['Cpu'])){
				$this->options['query']['InitContainer.' . ($depth1 + 1) . '.Cpu'] = $depth1Value['Cpu'];
			}
			if(isset($depth1Value['Gpu'])){
				$this->options['query']['InitContainer.' . ($depth1 + 1) . '.Gpu'] = $depth1Value['Gpu'];
			}
			if(isset($depth1Value['ImagePullPolicy'])){
				$this->options['query']['InitContainer.' . ($depth1 + 1) . '.ImagePullPolicy'] = $depth1Value['ImagePullPolicy'];
			}
			foreach ($depth1Value['Command'] as $i => $iValue) {
				$this->options['query']['InitContainer.' . ($depth1 + 1) . '.Command.' . ($i + 1)] = $iValue;
			}
			if(isset($depth1Value['SecurityContextRunAsUser'])){
				$this->options['query']['InitContainer.' . ($depth1 + 1) . '.SecurityContext.RunAsUser'] = $depth1Value['SecurityContextRunAsUser'];
			}
			foreach ($depth1Value['InitContainerPort'] as $depth2 => $depth2Value) {
				if(isset($depth2Value['Protocol'])){
					$this->options['query']['InitContainer.' . ($depth1 + 1) . '.InitContainerPort.' . ($depth2 + 1) . '.Protocol'] = $depth2Value['Protocol'];
				}
				if(isset($depth2Value['Port'])){
					$this->options['query']['InitContainer.' . ($depth1 + 1) . '.InitContainerPort.' . ($depth2 + 1) . '.Port'] = $depth2Value['Port'];
				}
			}
			foreach ($depth1Value['Arg'] as $i => $iValue) {
				$this->options['query']['InitContainer.' . ($depth1 + 1) . '.Arg.' . ($i + 1)] = $iValue;
			}
			if(isset($depth1Value['Name'])){
				$this->options['query']['InitContainer.' . ($depth1 + 1) . '.Name'] = $depth1Value['Name'];
			}
			foreach ($depth1Value['InitContainerVolumeMount'] as $depth2 => $depth2Value) {
				if(isset($depth2Value['MountPath'])){
					$this->options['query']['InitContainer.' . ($depth1 + 1) . '.InitContainerVolumeMount.' . ($depth2 + 1) . '.MountPath'] = $depth2Value['MountPath'];
				}
				if(isset($depth2Value['ReadOnly'])){
					$this->options['query']['InitContainer.' . ($depth1 + 1) . '.InitContainerVolumeMount.' . ($depth2 + 1) . '.ReadOnly'] = $depth2Value['ReadOnly'];
				}
				if(isset($depth2Value['MountPropagation'])){
					$this->options['query']['InitContainer.' . ($depth1 + 1) . '.InitContainerVolumeMount.' . ($depth2 + 1) . '.MountPropagation'] = $depth2Value['MountPropagation'];
				}
				if(isset($depth2Value['Name'])){
					$this->options['query']['InitContainer.' . ($depth1 + 1) . '.InitContainerVolumeMount.' . ($depth2 + 1) . '.Name'] = $depth2Value['Name'];
				}
				if(isset($depth2Value['SubPath'])){
					$this->options['query']['InitContainer.' . ($depth1 + 1) . '.InitContainerVolumeMount.' . ($depth2 + 1) . '.SubPath'] = $depth2Value['SubPath'];
				}
			}
			if(isset($depth1Value['SecurityContextReadOnlyRootFilesystem'])){
				$this->options['query']['InitContainer.' . ($depth1 + 1) . '.SecurityContext.ReadOnlyRootFilesystem'] = $depth1Value['SecurityContextReadOnlyRootFilesystem'];
			}
		}

		return $this;
    }

    /**
     * @param array $instanceType
     *
     * @return $this
     */
	public function withInstanceType(array $instanceType)
	{
	    $this->data['InstanceType'] = $instanceType;
		foreach ($instanceType as $i => $iValue) {
			$this->options['query']['InstanceType.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $imageRegistryCredential
     *
     * @return $this
     */
	public function withImageRegistryCredential(array $imageRegistryCredential)
	{
	    $this->data['ImageRegistryCredential'] = $imageRegistryCredential;
		foreach ($imageRegistryCredential as $depth1 => $depth1Value) {
			if(isset($depth1Value['Server'])){
				$this->options['query']['ImageRegistryCredential.' . ($depth1 + 1) . '.Server'] = $depth1Value['Server'];
			}
			if(isset($depth1Value['Password'])){
				$this->options['query']['ImageRegistryCredential.' . ($depth1 + 1) . '.Password'] = $depth1Value['Password'];
			}
			if(isset($depth1Value['UserName'])){
				$this->options['query']['ImageRegistryCredential.' . ($depth1 + 1) . '.UserName'] = $depth1Value['UserName'];
			}
		}

		return $this;
    }

    /**
     * @param array $acrRegistryInfo
     *
     * @return $this
     */
	public function withAcrRegistryInfo(array $acrRegistryInfo)
	{
	    $this->data['AcrRegistryInfo'] = $acrRegistryInfo;
		foreach ($acrRegistryInfo as $depth1 => $depth1Value) {
			if(isset($depth1Value['InstanceName'])){
				$this->options['query']['AcrRegistryInfo.' . ($depth1 + 1) . '.InstanceName'] = $depth1Value['InstanceName'];
			}
			if(isset($depth1Value['InstanceId'])){
				$this->options['query']['AcrRegistryInfo.' . ($depth1 + 1) . '.InstanceId'] = $depth1Value['InstanceId'];
			}
			if(isset($depth1Value['RegionId'])){
				$this->options['query']['AcrRegistryInfo.' . ($depth1 + 1) . '.RegionId'] = $depth1Value['RegionId'];
			}
			foreach ($depth1Value['Domain'] as $i => $iValue) {
				$this->options['query']['AcrRegistryInfo.' . ($depth1 + 1) . '.Domain.' . ($i + 1)] = $iValue;
			}
		}

		return $this;
    }
}

/**
 * @method string getDefaultResult()
 * @method $this withDefaultResult($value)
 * @method string getHeartbeatTimeout()
 * @method $this withHeartbeatTimeout($value)
 * @method string getScalingGroupId()
 * @method $this withScalingGroupId($value)
 * @method string getLifecycleTransition()
 * @method $this withLifecycleTransition($value)
 * @method string getLifecycleHookName()
 * @method $this withLifecycleHookName($value)
 * @method string getNotificationArn()
 * @method $this withNotificationArn($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getNotificationMetadata()
 * @method $this withNotificationMetadata($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CreateLifecycleHook extends Rpc
{
}

/**
 * @method string getScalingGroupId()
 * @method $this withScalingGroupId($value)
 * @method string getTimeZone()
 * @method $this withTimeZone($value)
 * @method string getNotificationArn()
 * @method $this withNotificationArn($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method array getNotificationType()
 */
class CreateNotificationConfiguration extends Rpc
{

    /**
     * @param array $notificationType
     *
     * @return $this
     */
	public function withNotificationType(array $notificationType)
	{
	    $this->data['NotificationType'] = $notificationType;
		foreach ($notificationType as $i => $iValue) {
			$this->options['query']['NotificationType.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getHpcClusterId()
 * @method $this withHpcClusterId($value)
 * @method string getSecurityOptions()
 * @method $this withSecurityOptions($value)
 * @method string getSecurityEnhancementStrategy()
 * @method $this withSecurityEnhancementStrategy($value)
 * @method string getKeyPairName()
 * @method $this withKeyPairName($value)
 * @method array getSpotPriceLimit()
 * @method string getDeletionProtection()
 * @method $this withDeletionProtection($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getPrivatePoolOptionsMatchCriteria()
 * @method string getHostName()
 * @method $this withHostName($value)
 * @method string getPassword()
 * @method $this withPassword($value)
 * @method string getInstanceDescription()
 * @method $this withInstanceDescription($value)
 * @method string getStorageSetPartitionNumber()
 * @method $this withStorageSetPartitionNumber($value)
 * @method array getCustomPriorities()
 * @method string getSystemDiskAutoSnapshotPolicyId()
 * @method string getPrivatePoolOptionsId()
 * @method string getImageOptionsLoginAsNonRoot()
 * @method string getIpv6AddressCount()
 * @method $this withIpv6AddressCount($value)
 * @method string getCpu()
 * @method $this withCpu($value)
 * @method array getSystemDiskCategories()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getScalingConfigurationName()
 * @method $this withScalingConfigurationName($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getSpotStrategy()
 * @method $this withSpotStrategy($value)
 * @method string getCpuOptions()
 * @method $this withCpuOptions($value)
 * @method string getSystemDiskBurstingEnabled()
 * @method string getInstanceName()
 * @method $this withInstanceName($value)
 * @method string getInternetChargeType()
 * @method $this withInternetChargeType($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getInternetMaxBandwidthIn()
 * @method $this withInternetMaxBandwidthIn($value)
 * @method array getInstancePatternInfo()
 * @method string getAffinity()
 * @method $this withAffinity($value)
 * @method array getNetworkInterfaces()
 * @method string getImageId()
 * @method $this withImageId($value)
 * @method string getMemory()
 * @method $this withMemory($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getSpotInterruptionBehavior()
 * @method $this withSpotInterruptionBehavior($value)
 * @method string getScalingGroupId()
 * @method $this withScalingGroupId($value)
 * @method string getIoOptimized()
 * @method $this withIoOptimized($value)
 * @method array getInstanceTypes()
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getInternetMaxBandwidthOut()
 * @method $this withInternetMaxBandwidthOut($value)
 * @method string getSystemDiskKMSKeyId()
 * @method string getSystemDiskCategory()
 * @method string getSystemDiskPerformanceLevel()
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getPasswordInherit()
 * @method $this withPasswordInherit($value)
 * @method string getResourcePoolOptions()
 * @method $this withResourcePoolOptions($value)
 * @method string getImageName()
 * @method $this withImageName($value)
 * @method string getHttpEndpoint()
 * @method $this withHttpEndpoint($value)
 * @method string getDedicatedHostClusterId()
 * @method $this withDedicatedHostClusterId($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getSchedulerOptions()
 * @method $this withSchedulerOptions($value)
 * @method string getDeploymentSetId()
 * @method $this withDeploymentSetId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getTenancy()
 * @method $this withTenancy($value)
 * @method string getSystemDiskDiskName()
 * @method string getRamRoleName()
 * @method $this withRamRoleName($value)
 * @method string getSystemDiskEncryptAlgorithm()
 * @method string getDedicatedHostId()
 * @method $this withDedicatedHostId($value)
 * @method string getCreditSpecification()
 * @method $this withCreditSpecification($value)
 * @method string getSpotDuration()
 * @method $this withSpotDuration($value)
 * @method array getSecurityGroupIds()
 * @method array getDataDisk()
 * @method array getInstanceTypeOverride()
 * @method string getSystemDiskProvisionedIops()
 * @method string getLoadBalancerWeight()
 * @method $this withLoadBalancerWeight($value)
 * @method string getStorageSetId()
 * @method $this withStorageSetId($value)
 * @method string getSystemDiskSize()
 * @method string getImageFamily()
 * @method $this withImageFamily($value)
 * @method string getHttpTokens()
 * @method $this withHttpTokens($value)
 * @method string getSystemDiskDescription()
 * @method string getSystemDiskEncrypted()
 */
class CreateScalingConfiguration extends Rpc
{

    /**
     * @param array $spotPriceLimit
     *
     * @return $this
     */
	public function withSpotPriceLimit(array $spotPriceLimit)
	{
	    $this->data['SpotPriceLimit'] = $spotPriceLimit;
		foreach ($spotPriceLimit as $depth1 => $depth1Value) {
			if(isset($depth1Value['InstanceType'])){
				$this->options['query']['SpotPriceLimit.' . ($depth1 + 1) . '.InstanceType'] = $depth1Value['InstanceType'];
			}
			if(isset($depth1Value['PriceLimit'])){
				$this->options['query']['SpotPriceLimit.' . ($depth1 + 1) . '.PriceLimit'] = $depth1Value['PriceLimit'];
			}
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPrivatePoolOptionsMatchCriteria($value)
    {
        $this->data['PrivatePoolOptionsMatchCriteria'] = $value;
        $this->options['query']['PrivatePoolOptions.MatchCriteria'] = $value;

        return $this;
    }

    /**
     * @param array $customPriorities
     *
     * @return $this
     */
	public function withCustomPriorities(array $customPriorities)
	{
	    $this->data['CustomPriorities'] = $customPriorities;
		foreach ($customPriorities as $depth1 => $depth1Value) {
			if(isset($depth1Value['VswitchId'])){
				$this->options['query']['CustomPriorities.' . ($depth1 + 1) . '.VswitchId'] = $depth1Value['VswitchId'];
			}
			if(isset($depth1Value['InstanceType'])){
				$this->options['query']['CustomPriorities.' . ($depth1 + 1) . '.InstanceType'] = $depth1Value['InstanceType'];
			}
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSystemDiskAutoSnapshotPolicyId($value)
    {
        $this->data['SystemDiskAutoSnapshotPolicyId'] = $value;
        $this->options['query']['SystemDisk.AutoSnapshotPolicyId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPrivatePoolOptionsId($value)
    {
        $this->data['PrivatePoolOptionsId'] = $value;
        $this->options['query']['PrivatePoolOptions.Id'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageOptionsLoginAsNonRoot($value)
    {
        $this->data['ImageOptionsLoginAsNonRoot'] = $value;
        $this->options['query']['ImageOptions.LoginAsNonRoot'] = $value;

        return $this;
    }

    /**
     * @param array $systemDiskCategories
     *
     * @return $this
     */
	public function withSystemDiskCategories(array $systemDiskCategories)
	{
	    $this->data['SystemDiskCategories'] = $systemDiskCategories;
		foreach ($systemDiskCategories as $i => $iValue) {
			$this->options['query']['SystemDiskCategories.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSystemDiskBurstingEnabled($value)
    {
        $this->data['SystemDiskBurstingEnabled'] = $value;
        $this->options['query']['SystemDisk.BurstingEnabled'] = $value;

        return $this;
    }

    /**
     * @param array $instancePatternInfo
     *
     * @return $this
     */
	public function withInstancePatternInfo(array $instancePatternInfo)
	{
	    $this->data['InstancePatternInfo'] = $instancePatternInfo;
		foreach ($instancePatternInfo as $depth1 => $depth1Value) {
			foreach ($depth1Value['InstanceCategories'] as $i => $iValue) {
				$this->options['query']['InstancePatternInfo.' . ($depth1 + 1) . '.InstanceCategories.' . ($i + 1)] = $iValue;
			}
			if(isset($depth1Value['Memory'])){
				$this->options['query']['InstancePatternInfo.' . ($depth1 + 1) . '.Memory'] = $depth1Value['Memory'];
			}
			if(isset($depth1Value['MaximumCpuCoreCount'])){
				$this->options['query']['InstancePatternInfo.' . ($depth1 + 1) . '.MaximumCpuCoreCount'] = $depth1Value['MaximumCpuCoreCount'];
			}
			if(isset($depth1Value['MaxPrice'])){
				$this->options['query']['InstancePatternInfo.' . ($depth1 + 1) . '.MaxPrice'] = $depth1Value['MaxPrice'];
			}
			if(isset($depth1Value['MinimumGpuAmount'])){
				$this->options['query']['InstancePatternInfo.' . ($depth1 + 1) . '.MinimumGpuAmount'] = $depth1Value['MinimumGpuAmount'];
			}
			if(isset($depth1Value['MaximumGpuAmount'])){
				$this->options['query']['InstancePatternInfo.' . ($depth1 + 1) . '.MaximumGpuAmount'] = $depth1Value['MaximumGpuAmount'];
			}
			if(isset($depth1Value['MaximumMemorySize'])){
				$this->options['query']['InstancePatternInfo.' . ($depth1 + 1) . '.MaximumMemorySize'] = $depth1Value['MaximumMemorySize'];
			}
			if(isset($depth1Value['MinimumInitialCredit'])){
				$this->options['query']['InstancePatternInfo.' . ($depth1 + 1) . '.MinimumInitialCredit'] = $depth1Value['MinimumInitialCredit'];
			}
			foreach ($depth1Value['ExcludedInstanceType'] as $i => $iValue) {
				$this->options['query']['InstancePatternInfo.' . ($depth1 + 1) . '.ExcludedInstanceType.' . ($i + 1)] = $iValue;
			}
			if(isset($depth1Value['MinimumEniIpv6AddressQuantity'])){
				$this->options['query']['InstancePatternInfo.' . ($depth1 + 1) . '.MinimumEniIpv6AddressQuantity'] = $depth1Value['MinimumEniIpv6AddressQuantity'];
			}
			if(isset($depth1Value['MinimumEniPrivateIpAddressQuantity'])){
				$this->options['query']['InstancePatternInfo.' . ($depth1 + 1) . '.MinimumEniPrivateIpAddressQuantity'] = $depth1Value['MinimumEniPrivateIpAddressQuantity'];
			}
			if(isset($depth1Value['BurstablePerformance'])){
				$this->options['query']['InstancePatternInfo.' . ($depth1 + 1) . '.BurstablePerformance'] = $depth1Value['BurstablePerformance'];
			}
			foreach ($depth1Value['PhysicalProcessorModels'] as $i => $iValue) {
				$this->options['query']['InstancePatternInfo.' . ($depth1 + 1) . '.PhysicalProcessorModels.' . ($i + 1)] = $iValue;
			}
			if(isset($depth1Value['MinimumCpuCoreCount'])){
				$this->options['query']['InstancePatternInfo.' . ($depth1 + 1) . '.MinimumCpuCoreCount'] = $depth1Value['MinimumCpuCoreCount'];
			}
			foreach ($depth1Value['GpuSpecs'] as $i => $iValue) {
				$this->options['query']['InstancePatternInfo.' . ($depth1 + 1) . '.GpuSpecs.' . ($i + 1)] = $iValue;
			}
			if(isset($depth1Value['MinimumEniQuantity'])){
				$this->options['query']['InstancePatternInfo.' . ($depth1 + 1) . '.MinimumEniQuantity'] = $depth1Value['MinimumEniQuantity'];
			}
			if(isset($depth1Value['MinimumMemorySize'])){
				$this->options['query']['InstancePatternInfo.' . ($depth1 + 1) . '.MinimumMemorySize'] = $depth1Value['MinimumMemorySize'];
			}
			if(isset($depth1Value['Cores'])){
				$this->options['query']['InstancePatternInfo.' . ($depth1 + 1) . '.Cores'] = $depth1Value['Cores'];
			}
			if(isset($depth1Value['InstanceFamilyLevel'])){
				$this->options['query']['InstancePatternInfo.' . ($depth1 + 1) . '.InstanceFamilyLevel'] = $depth1Value['InstanceFamilyLevel'];
			}
			foreach ($depth1Value['InstanceTypeFamilies'] as $i => $iValue) {
				$this->options['query']['InstancePatternInfo.' . ($depth1 + 1) . '.InstanceTypeFamilies.' . ($i + 1)] = $iValue;
			}
			if(isset($depth1Value['MinimumBaselineCredit'])){
				$this->options['query']['InstancePatternInfo.' . ($depth1 + 1) . '.MinimumBaselineCredit'] = $depth1Value['MinimumBaselineCredit'];
			}
			foreach ($depth1Value['CpuArchitectures'] as $i => $iValue) {
				$this->options['query']['InstancePatternInfo.' . ($depth1 + 1) . '.CpuArchitectures.' . ($i + 1)] = $iValue;
			}
			foreach ($depth1Value['Architecture'] as $i => $iValue) {
				$this->options['query']['InstancePatternInfo.' . ($depth1 + 1) . '.Architecture.' . ($i + 1)] = $iValue;
			}
		}

		return $this;
    }

    /**
     * @param array $networkInterfaces
     *
     * @return $this
     */
	public function withNetworkInterfaces(array $networkInterfaces)
	{
	    $this->data['NetworkInterfaces'] = $networkInterfaces;
		foreach ($networkInterfaces as $depth1 => $depth1Value) {
			if(isset($depth1Value['Ipv6AddressCount'])){
				$this->options['query']['NetworkInterfaces.' . ($depth1 + 1) . '.Ipv6AddressCount'] = $depth1Value['Ipv6AddressCount'];
			}
			if(isset($depth1Value['InstanceType'])){
				$this->options['query']['NetworkInterfaces.' . ($depth1 + 1) . '.InstanceType'] = $depth1Value['InstanceType'];
			}
			foreach ($depth1Value['SecurityGroupIds'] as $i => $iValue) {
				$this->options['query']['NetworkInterfaces.' . ($depth1 + 1) . '.SecurityGroupIds.' . ($i + 1)] = $iValue;
			}
			if(isset($depth1Value['NetworkInterfaceTrafficMode'])){
				$this->options['query']['NetworkInterfaces.' . ($depth1 + 1) . '.NetworkInterfaceTrafficMode'] = $depth1Value['NetworkInterfaceTrafficMode'];
			}
		}

		return $this;
    }

    /**
     * @param array $instanceTypes
     *
     * @return $this
     */
	public function withInstanceTypes(array $instanceTypes)
	{
	    $this->data['InstanceTypes'] = $instanceTypes;
		foreach ($instanceTypes as $i => $iValue) {
			$this->options['query']['InstanceTypes.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSystemDiskKMSKeyId($value)
    {
        $this->data['SystemDiskKMSKeyId'] = $value;
        $this->options['query']['SystemDisk.KMSKeyId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSystemDiskCategory($value)
    {
        $this->data['SystemDiskCategory'] = $value;
        $this->options['query']['SystemDisk.Category'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSystemDiskPerformanceLevel($value)
    {
        $this->data['SystemDiskPerformanceLevel'] = $value;
        $this->options['query']['SystemDisk.PerformanceLevel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSystemDiskDiskName($value)
    {
        $this->data['SystemDiskDiskName'] = $value;
        $this->options['query']['SystemDisk.DiskName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSystemDiskEncryptAlgorithm($value)
    {
        $this->data['SystemDiskEncryptAlgorithm'] = $value;
        $this->options['query']['SystemDisk.EncryptAlgorithm'] = $value;

        return $this;
    }

    /**
     * @param array $securityGroupIds
     *
     * @return $this
     */
	public function withSecurityGroupIds(array $securityGroupIds)
	{
	    $this->data['SecurityGroupIds'] = $securityGroupIds;
		foreach ($securityGroupIds as $i => $iValue) {
			$this->options['query']['SecurityGroupIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $dataDisk
     *
     * @return $this
     */
	public function withDataDisk(array $dataDisk)
	{
	    $this->data['DataDisk'] = $dataDisk;
		foreach ($dataDisk as $depth1 => $depth1Value) {
			if(isset($depth1Value['SnapshotId'])){
				$this->options['query']['DataDisk.' . ($depth1 + 1) . '.SnapshotId'] = $depth1Value['SnapshotId'];
			}
			if(isset($depth1Value['PerformanceLevel'])){
				$this->options['query']['DataDisk.' . ($depth1 + 1) . '.PerformanceLevel'] = $depth1Value['PerformanceLevel'];
			}
			if(isset($depth1Value['AutoSnapshotPolicyId'])){
				$this->options['query']['DataDisk.' . ($depth1 + 1) . '.AutoSnapshotPolicyId'] = $depth1Value['AutoSnapshotPolicyId'];
			}
			if(isset($depth1Value['Description'])){
				$this->options['query']['DataDisk.' . ($depth1 + 1) . '.Description'] = $depth1Value['Description'];
			}
			if(isset($depth1Value['BurstingEnabled'])){
				$this->options['query']['DataDisk.' . ($depth1 + 1) . '.BurstingEnabled'] = $depth1Value['BurstingEnabled'];
			}
			if(isset($depth1Value['DiskName'])){
				$this->options['query']['DataDisk.' . ($depth1 + 1) . '.DiskName'] = $depth1Value['DiskName'];
			}
			if(isset($depth1Value['ProvisionedIops'])){
				$this->options['query']['DataDisk.' . ($depth1 + 1) . '.ProvisionedIops'] = $depth1Value['ProvisionedIops'];
			}
			if(isset($depth1Value['Encrypted'])){
				$this->options['query']['DataDisk.' . ($depth1 + 1) . '.Encrypted'] = $depth1Value['Encrypted'];
			}
			if(isset($depth1Value['Size'])){
				$this->options['query']['DataDisk.' . ($depth1 + 1) . '.Size'] = $depth1Value['Size'];
			}
			foreach ($depth1Value['Categories'] as $i => $iValue) {
				$this->options['query']['DataDisk.' . ($depth1 + 1) . '.Categories.' . ($i + 1)] = $iValue;
			}
			if(isset($depth1Value['Category'])){
				$this->options['query']['DataDisk.' . ($depth1 + 1) . '.Category'] = $depth1Value['Category'];
			}
			if(isset($depth1Value['KMSKeyId'])){
				$this->options['query']['DataDisk.' . ($depth1 + 1) . '.KMSKeyId'] = $depth1Value['KMSKeyId'];
			}
			if(isset($depth1Value['Device'])){
				$this->options['query']['DataDisk.' . ($depth1 + 1) . '.Device'] = $depth1Value['Device'];
			}
			if(isset($depth1Value['DeleteWithInstance'])){
				$this->options['query']['DataDisk.' . ($depth1 + 1) . '.DeleteWithInstance'] = $depth1Value['DeleteWithInstance'];
			}
		}

		return $this;
    }

    /**
     * @param array $instanceTypeOverride
     *
     * @return $this
     */
	public function withInstanceTypeOverride(array $instanceTypeOverride)
	{
	    $this->data['InstanceTypeOverride'] = $instanceTypeOverride;
		foreach ($instanceTypeOverride as $depth1 => $depth1Value) {
			if(isset($depth1Value['WeightedCapacity'])){
				$this->options['query']['InstanceTypeOverride.' . ($depth1 + 1) . '.WeightedCapacity'] = $depth1Value['WeightedCapacity'];
			}
			if(isset($depth1Value['InstanceType'])){
				$this->options['query']['InstanceTypeOverride.' . ($depth1 + 1) . '.InstanceType'] = $depth1Value['InstanceType'];
			}
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSystemDiskProvisionedIops($value)
    {
        $this->data['SystemDiskProvisionedIops'] = $value;
        $this->options['query']['SystemDisk.ProvisionedIops'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSystemDiskSize($value)
    {
        $this->data['SystemDiskSize'] = $value;
        $this->options['query']['SystemDisk.Size'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSystemDiskDescription($value)
    {
        $this->data['SystemDiskDescription'] = $value;
        $this->options['query']['SystemDisk.Description'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSystemDiskEncrypted($value)
    {
        $this->data['SystemDiskEncrypted'] = $value;
        $this->options['query']['SystemDisk.Encrypted'] = $value;

        return $this;
    }
}

/**
 * @method string getAzBalance()
 * @method $this withAzBalance($value)
 * @method array getVSwitchIds()
 * @method string getMaxInstanceLifetime()
 * @method $this withMaxInstanceLifetime($value)
 * @method string getSpotInstanceRemedy()
 * @method $this withSpotInstanceRemedy($value)
 * @method string getScaleOutAmountCheck()
 * @method $this withScaleOutAmountCheck($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getGroupType()
 * @method $this withGroupType($value)
 * @method string getSyncAlarmRuleToCms()
 * @method $this withSyncAlarmRuleToCms($value)
 * @method string getCustomPolicyARN()
 * @method $this withCustomPolicyARN($value)
 * @method array getTag()
 * @method string getStopInstanceTimeout()
 * @method $this withStopInstanceTimeout($value)
 * @method string getDefaultCooldown()
 * @method $this withDefaultCooldown($value)
 * @method array getHealthCheckTypes()
 * @method string getContainerGroupId()
 * @method $this withContainerGroupId($value)
 * @method string getMultiAZPolicy()
 * @method $this withMultiAZPolicy($value)
 * @method string getDBInstanceIds()
 * @method $this withDBInstanceIds($value)
 * @method string getLaunchTemplateId()
 * @method $this withLaunchTemplateId($value)
 * @method string getDesiredCapacity()
 * @method $this withDesiredCapacity($value)
 * @method array getServerGroup()
 * @method array getLaunchTemplateOverride()
 * @method string getCompensateWithOnDemand()
 * @method $this withCompensateWithOnDemand($value)
 * @method string getCapacityOptions()
 * @method $this withCapacityOptions($value)
 * @method string getMinSize()
 * @method $this withMinSize($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method array getAlbServerGroup()
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getMaxSize()
 * @method $this withMaxSize($value)
 * @method array getLifecycleHook()
 * @method string getLoadBalancerIds()
 * @method $this withLoadBalancerIds($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method array getSystemTag()
 * @method array getLoadBalancerConfig()
 * @method string getOnDemandBaseCapacity()
 * @method $this withOnDemandBaseCapacity($value)
 * @method string getOnDemandPercentageAboveBaseCapacity()
 * @method $this withOnDemandPercentageAboveBaseCapacity($value)
 * @method string getSpotAllocationStrategy()
 * @method $this withSpotAllocationStrategy($value)
 * @method string getRemovalPolicy1()
 * @method string getRemovalPolicy2()
 * @method string getRemovalPolicy3()
 * @method string getHealthCheckType()
 * @method $this withHealthCheckType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getScalingGroupName()
 * @method $this withScalingGroupName($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getSpotInstancePools()
 * @method $this withSpotInstancePools($value)
 * @method array getDBInstance()
 * @method string getGroupDeletionProtection()
 * @method $this withGroupDeletionProtection($value)
 * @method string getLaunchTemplateVersion()
 * @method $this withLaunchTemplateVersion($value)
 * @method string getScalingPolicy()
 * @method $this withScalingPolicy($value)
 * @method string getAllocationStrategy()
 * @method $this withAllocationStrategy($value)
 * @method array getVServerGroup()
 */
class CreateScalingGroup extends Rpc
{

    /**
     * @param array $vSwitchIds
     *
     * @return $this
     */
	public function withVSwitchIds(array $vSwitchIds)
	{
	    $this->data['VSwitchIds'] = $vSwitchIds;
		foreach ($vSwitchIds as $i => $iValue) {
			$this->options['query']['VSwitchIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $tag
     *
     * @return $this
     */
	public function withTag(array $tag)
	{
	    $this->data['Tag'] = $tag;
		foreach ($tag as $depth1 => $depth1Value) {
			if(isset($depth1Value['Propagate'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Propagate'] = $depth1Value['Propagate'];
			}
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }

    /**
     * @param array $healthCheckTypes
     *
     * @return $this
     */
	public function withHealthCheckTypes(array $healthCheckTypes)
	{
	    $this->data['HealthCheckTypes'] = $healthCheckTypes;
		foreach ($healthCheckTypes as $i => $iValue) {
			$this->options['query']['HealthCheckTypes.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $serverGroup
     *
     * @return $this
     */
	public function withServerGroup(array $serverGroup)
	{
	    $this->data['ServerGroup'] = $serverGroup;
		foreach ($serverGroup as $depth1 => $depth1Value) {
			if(isset($depth1Value['ServerGroupId'])){
				$this->options['query']['ServerGroup.' . ($depth1 + 1) . '.ServerGroupId'] = $depth1Value['ServerGroupId'];
			}
			if(isset($depth1Value['Port'])){
				$this->options['query']['ServerGroup.' . ($depth1 + 1) . '.Port'] = $depth1Value['Port'];
			}
			if(isset($depth1Value['Weight'])){
				$this->options['query']['ServerGroup.' . ($depth1 + 1) . '.Weight'] = $depth1Value['Weight'];
			}
			if(isset($depth1Value['Type'])){
				$this->options['query']['ServerGroup.' . ($depth1 + 1) . '.Type'] = $depth1Value['Type'];
			}
		}

		return $this;
    }

    /**
     * @param array $launchTemplateOverride
     *
     * @return $this
     */
	public function withLaunchTemplateOverride(array $launchTemplateOverride)
	{
	    $this->data['LaunchTemplateOverride'] = $launchTemplateOverride;
		foreach ($launchTemplateOverride as $depth1 => $depth1Value) {
			if(isset($depth1Value['WeightedCapacity'])){
				$this->options['query']['LaunchTemplateOverride.' . ($depth1 + 1) . '.WeightedCapacity'] = $depth1Value['WeightedCapacity'];
			}
			if(isset($depth1Value['InstanceType'])){
				$this->options['query']['LaunchTemplateOverride.' . ($depth1 + 1) . '.InstanceType'] = $depth1Value['InstanceType'];
			}
			if(isset($depth1Value['SpotPriceLimit'])){
				$this->options['query']['LaunchTemplateOverride.' . ($depth1 + 1) . '.SpotPriceLimit'] = $depth1Value['SpotPriceLimit'];
			}
		}

		return $this;
    }

    /**
     * @param array $albServerGroup
     *
     * @return $this
     */
	public function withAlbServerGroup(array $albServerGroup)
	{
	    $this->data['AlbServerGroup'] = $albServerGroup;
		foreach ($albServerGroup as $depth1 => $depth1Value) {
			if(isset($depth1Value['AlbServerGroupId'])){
				$this->options['query']['AlbServerGroup.' . ($depth1 + 1) . '.AlbServerGroupId'] = $depth1Value['AlbServerGroupId'];
			}
			if(isset($depth1Value['Port'])){
				$this->options['query']['AlbServerGroup.' . ($depth1 + 1) . '.Port'] = $depth1Value['Port'];
			}
			if(isset($depth1Value['Weight'])){
				$this->options['query']['AlbServerGroup.' . ($depth1 + 1) . '.Weight'] = $depth1Value['Weight'];
			}
		}

		return $this;
    }

    /**
     * @param array $lifecycleHook
     *
     * @return $this
     */
	public function withLifecycleHook(array $lifecycleHook)
	{
	    $this->data['LifecycleHook'] = $lifecycleHook;
		foreach ($lifecycleHook as $depth1 => $depth1Value) {
			if(isset($depth1Value['DefaultResult'])){
				$this->options['query']['LifecycleHook.' . ($depth1 + 1) . '.DefaultResult'] = $depth1Value['DefaultResult'];
			}
			if(isset($depth1Value['LifecycleHookName'])){
				$this->options['query']['LifecycleHook.' . ($depth1 + 1) . '.LifecycleHookName'] = $depth1Value['LifecycleHookName'];
			}
			if(isset($depth1Value['HeartbeatTimeout'])){
				$this->options['query']['LifecycleHook.' . ($depth1 + 1) . '.HeartbeatTimeout'] = $depth1Value['HeartbeatTimeout'];
			}
			if(isset($depth1Value['NotificationArn'])){
				$this->options['query']['LifecycleHook.' . ($depth1 + 1) . '.NotificationArn'] = $depth1Value['NotificationArn'];
			}
			if(isset($depth1Value['NotificationMetadata'])){
				$this->options['query']['LifecycleHook.' . ($depth1 + 1) . '.NotificationMetadata'] = $depth1Value['NotificationMetadata'];
			}
			if(isset($depth1Value['LifecycleTransition'])){
				$this->options['query']['LifecycleHook.' . ($depth1 + 1) . '.LifecycleTransition'] = $depth1Value['LifecycleTransition'];
			}
		}

		return $this;
    }

    /**
     * @param array $systemTag
     *
     * @return $this
     */
	public function withSystemTag(array $systemTag)
	{
	    $this->data['SystemTag'] = $systemTag;
		foreach ($systemTag as $depth1 => $depth1Value) {
			if(isset($depth1Value['Scope'])){
				$this->options['query']['SystemTag.' . ($depth1 + 1) . '.Scope'] = $depth1Value['Scope'];
			}
			if(isset($depth1Value['Value'])){
				$this->options['query']['SystemTag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['SystemTag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
			if(isset($depth1Value['Spread'])){
				$this->options['query']['SystemTag.' . ($depth1 + 1) . '.Spread'] = $depth1Value['Spread'];
			}
		}

		return $this;
    }

    /**
     * @param array $loadBalancerConfig
     *
     * @return $this
     */
	public function withLoadBalancerConfig(array $loadBalancerConfig)
	{
	    $this->data['LoadBalancerConfig'] = $loadBalancerConfig;
		foreach ($loadBalancerConfig as $depth1 => $depth1Value) {
			if(isset($depth1Value['LoadBalancerId'])){
				$this->options['query']['LoadBalancerConfig.' . ($depth1 + 1) . '.LoadBalancerId'] = $depth1Value['LoadBalancerId'];
			}
			if(isset($depth1Value['Weight'])){
				$this->options['query']['LoadBalancerConfig.' . ($depth1 + 1) . '.Weight'] = $depth1Value['Weight'];
			}
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRemovalPolicy1($value)
    {
        $this->data['RemovalPolicy1'] = $value;
        $this->options['query']['RemovalPolicy.1'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRemovalPolicy2($value)
    {
        $this->data['RemovalPolicy2'] = $value;
        $this->options['query']['RemovalPolicy.2'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRemovalPolicy3($value)
    {
        $this->data['RemovalPolicy3'] = $value;
        $this->options['query']['RemovalPolicy.3'] = $value;

        return $this;
    }

    /**
     * @param array $dBInstance
     *
     * @return $this
     */
	public function withDBInstance(array $dBInstance)
	{
	    $this->data['DBInstance'] = $dBInstance;
		foreach ($dBInstance as $depth1 => $depth1Value) {
			if(isset($depth1Value['DBInstanceId'])){
				$this->options['query']['DBInstance.' . ($depth1 + 1) . '.DBInstanceId'] = $depth1Value['DBInstanceId'];
			}
			if(isset($depth1Value['Type'])){
				$this->options['query']['DBInstance.' . ($depth1 + 1) . '.Type'] = $depth1Value['Type'];
			}
			if(isset($depth1Value['AttachMode'])){
				$this->options['query']['DBInstance.' . ($depth1 + 1) . '.AttachMode'] = $depth1Value['AttachMode'];
			}
		}

		return $this;
    }

    /**
     * @param array $vServerGroup
     *
     * @return $this
     */
	public function withVServerGroup(array $vServerGroup)
	{
	    $this->data['VServerGroup'] = $vServerGroup;
		foreach ($vServerGroup as $depth1 => $depth1Value) {
			if(isset($depth1Value['LoadBalancerId'])){
				$this->options['query']['VServerGroup.' . ($depth1 + 1) . '.LoadBalancerId'] = $depth1Value['LoadBalancerId'];
			}
			foreach ($depth1Value['VServerGroupAttribute'] as $depth2 => $depth2Value) {
				if(isset($depth2Value['VServerGroupId'])){
					$this->options['query']['VServerGroup.' . ($depth1 + 1) . '.VServerGroupAttribute.' . ($depth2 + 1) . '.VServerGroupId'] = $depth2Value['VServerGroupId'];
				}
				if(isset($depth2Value['Port'])){
					$this->options['query']['VServerGroup.' . ($depth1 + 1) . '.VServerGroupAttribute.' . ($depth2 + 1) . '.Port'] = $depth2Value['Port'];
				}
				if(isset($depth2Value['Weight'])){
					$this->options['query']['VServerGroup.' . ($depth1 + 1) . '.VServerGroupAttribute.' . ($depth2 + 1) . '.Weight'] = $depth2Value['Weight'];
				}
			}
		}

		return $this;
    }
}

/**
 * @method string getMetricType()
 * @method $this withMetricType($value)
 * @method array getAlarmDimension()
 * @method array getStepAdjustment()
 * @method string getScalingGroupId()
 * @method $this withScalingGroupId($value)
 * @method string getDisableScaleIn()
 * @method $this withDisableScaleIn($value)
 * @method string getInitialMaxSize()
 * @method $this withInitialMaxSize($value)
 * @method string getScalingRuleName()
 * @method $this withScalingRuleName($value)
 * @method string getHybridMonitorNamespace()
 * @method $this withHybridMonitorNamespace($value)
 * @method string getCooldown()
 * @method $this withCooldown($value)
 * @method string getPredictiveValueBehavior()
 * @method $this withPredictiveValueBehavior($value)
 * @method string getScaleInEvaluationCount()
 * @method $this withScaleInEvaluationCount($value)
 * @method string getScalingRuleType()
 * @method $this withScalingRuleType($value)
 * @method string getMetricName()
 * @method $this withMetricName($value)
 * @method string getPredictiveScalingMode()
 * @method $this withPredictiveScalingMode($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getAdjustmentValue()
 * @method $this withAdjustmentValue($value)
 * @method string getEstimatedInstanceWarmup()
 * @method $this withEstimatedInstanceWarmup($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getPredictiveTaskBufferTime()
 * @method $this withPredictiveTaskBufferTime($value)
 * @method string getAdjustmentType()
 * @method $this withAdjustmentType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPredictiveValueBuffer()
 * @method $this withPredictiveValueBuffer($value)
 * @method array getHybridMetrics()
 * @method string getScaleOutEvaluationCount()
 * @method $this withScaleOutEvaluationCount($value)
 * @method string getMinAdjustmentMagnitude()
 * @method $this withMinAdjustmentMagnitude($value)
 * @method string getTargetValue()
 * @method $this withTargetValue($value)
 */
class CreateScalingRule extends Rpc
{

    /**
     * @param array $alarmDimension
     *
     * @return $this
     */
	public function withAlarmDimension(array $alarmDimension)
	{
	    $this->data['AlarmDimension'] = $alarmDimension;
		foreach ($alarmDimension as $depth1 => $depth1Value) {
			if(isset($depth1Value['DimensionValue'])){
				$this->options['query']['AlarmDimension.' . ($depth1 + 1) . '.DimensionValue'] = $depth1Value['DimensionValue'];
			}
			if(isset($depth1Value['DimensionKey'])){
				$this->options['query']['AlarmDimension.' . ($depth1 + 1) . '.DimensionKey'] = $depth1Value['DimensionKey'];
			}
		}

		return $this;
    }

    /**
     * @param array $stepAdjustment
     *
     * @return $this
     */
	public function withStepAdjustment(array $stepAdjustment)
	{
	    $this->data['StepAdjustment'] = $stepAdjustment;
		foreach ($stepAdjustment as $depth1 => $depth1Value) {
			if(isset($depth1Value['MetricIntervalUpperBound'])){
				$this->options['query']['StepAdjustment.' . ($depth1 + 1) . '.MetricIntervalUpperBound'] = $depth1Value['MetricIntervalUpperBound'];
			}
			if(isset($depth1Value['MetricIntervalLowerBound'])){
				$this->options['query']['StepAdjustment.' . ($depth1 + 1) . '.MetricIntervalLowerBound'] = $depth1Value['MetricIntervalLowerBound'];
			}
			if(isset($depth1Value['ScalingAdjustment'])){
				$this->options['query']['StepAdjustment.' . ($depth1 + 1) . '.ScalingAdjustment'] = $depth1Value['ScalingAdjustment'];
			}
		}

		return $this;
    }

    /**
     * @param array $hybridMetrics
     *
     * @return $this
     */
	public function withHybridMetrics(array $hybridMetrics)
	{
	    $this->data['HybridMetrics'] = $hybridMetrics;
		foreach ($hybridMetrics as $depth1 => $depth1Value) {
			if(isset($depth1Value['Statistic'])){
				$this->options['query']['HybridMetrics.' . ($depth1 + 1) . '.Statistic'] = $depth1Value['Statistic'];
			}
			if(isset($depth1Value['Expression'])){
				$this->options['query']['HybridMetrics.' . ($depth1 + 1) . '.Expression'] = $depth1Value['Expression'];
			}
			if(isset($depth1Value['Id'])){
				$this->options['query']['HybridMetrics.' . ($depth1 + 1) . '.Id'] = $depth1Value['Id'];
			}
			if(isset($depth1Value['MetricName'])){
				$this->options['query']['HybridMetrics.' . ($depth1 + 1) . '.MetricName'] = $depth1Value['MetricName'];
			}
			foreach ($depth1Value['Dimensions'] as $depth2 => $depth2Value) {
				if(isset($depth2Value['DimensionValue'])){
					$this->options['query']['HybridMetrics.' . ($depth1 + 1) . '.Dimensions.' . ($depth2 + 1) . '.DimensionValue'] = $depth2Value['DimensionValue'];
				}
				if(isset($depth2Value['DimensionKey'])){
					$this->options['query']['HybridMetrics.' . ($depth1 + 1) . '.Dimensions.' . ($depth2 + 1) . '.DimensionKey'] = $depth2Value['DimensionKey'];
				}
			}
		}

		return $this;
    }
}

/**
 * @method string getScheduledAction()
 * @method $this withScheduledAction($value)
 * @method string getMaxValue()
 * @method $this withMaxValue($value)
 * @method string getScalingGroupId()
 * @method $this withScalingGroupId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getRecurrenceEndTime()
 * @method $this withRecurrenceEndTime($value)
 * @method string getLaunchTime()
 * @method $this withLaunchTime($value)
 * @method string getDesiredCapacity()
 * @method $this withDesiredCapacity($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRecurrenceValue()
 * @method $this withRecurrenceValue($value)
 * @method string getLaunchExpirationTime()
 * @method $this withLaunchExpirationTime($value)
 * @method string getMinValue()
 * @method $this withMinValue($value)
 * @method string getScheduledTaskName()
 * @method $this withScheduledTaskName($value)
 * @method string getTaskEnabled()
 * @method $this withTaskEnabled($value)
 * @method string getRecurrenceType()
 * @method $this withRecurrenceType($value)
 */
class CreateScheduledTask extends Rpc
{
}

/**
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getScalingConfigurationId()
 * @method $this withScalingConfigurationId($value)
 */
class DeactivateScalingConfiguration extends Rpc
{
}

/**
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAlarmTaskId()
 * @method $this withAlarmTaskId($value)
 */
class DeleteAlarm extends Rpc
{
}

/**
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getScalingConfigurationId()
 * @method $this withScalingConfigurationId($value)
 */
class DeleteEciScalingConfiguration extends Rpc
{
}

/**
 * @method string getScalingGroupId()
 * @method $this withScalingGroupId($value)
 * @method string getLifecycleHookName()
 * @method $this withLifecycleHookName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getLifecycleHookId()
 * @method $this withLifecycleHookId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteLifecycleHook extends Rpc
{
}

/**
 * @method string getScalingGroupId()
 * @method $this withScalingGroupId($value)
 * @method string getNotificationArn()
 * @method $this withNotificationArn($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteNotificationConfiguration extends Rpc
{
}

/**
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getScalingConfigurationId()
 * @method $this withScalingConfigurationId($value)
 */
class DeleteScalingConfiguration extends Rpc
{
}

/**
 * @method string getScalingGroupId()
 * @method $this withScalingGroupId($value)
 * @method string getForceDelete()
 * @method $this withForceDelete($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteScalingGroup extends Rpc
{
}

/**
 * @method string getScalingRuleId()
 * @method $this withScalingRuleId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteScalingRule extends Rpc
{
}

/**
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getScheduledTaskId()
 * @method $this withScheduledTaskId($value)
 */
class DeleteScheduledTask extends Rpc
{
}

/**
 * @method string getMetricType()
 * @method $this withMetricType($value)
 * @method string getScalingGroupId()
 * @method $this withScalingGroupId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getState()
 * @method $this withState($value)
 * @method string getMetricName()
 * @method $this withMetricName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAlarmTaskId()
 * @method $this withAlarmTaskId($value)
 * @method string getIsEnable()
 * @method $this withIsEnable($value)
 */
class DescribeAlarms extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getScalingGroupId()
 * @method $this withScalingGroupId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method array getScalingConfigurationName()
 * @method array getScalingConfigurationId()
 */
class DescribeEciScalingConfigurations extends Rpc
{

    /**
     * @param array $scalingConfigurationName
     *
     * @return $this
     */
	public function withScalingConfigurationName(array $scalingConfigurationName)
	{
	    $this->data['ScalingConfigurationName'] = $scalingConfigurationName;
		foreach ($scalingConfigurationName as $i => $iValue) {
			$this->options['query']['ScalingConfigurationName.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $scalingConfigurationId
     *
     * @return $this
     */
	public function withScalingConfigurationId(array $scalingConfigurationId)
	{
	    $this->data['ScalingConfigurationId'] = $scalingConfigurationId;
		foreach ($scalingConfigurationId as $i => $iValue) {
			$this->options['query']['ScalingConfigurationId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getImageId()
 * @method $this withImageId($value)
 * @method array getDataDiskCategories()
 * @method string getScalingGroupId()
 * @method $this withScalingGroupId($value)
 * @method array getVSwitchIds()
 * @method array getInstanceTypes()
 * @method string getImageName()
 * @method $this withImageName($value)
 * @method array getScalingGroupIds()
 * @method string getIpv6AddressCount()
 * @method $this withIpv6AddressCount($value)
 * @method array getSystemDiskCategories()
 * @method string getSpotStrategy()
 * @method $this withSpotStrategy($value)
 * @method string getPriorityStrategy()
 * @method $this withPriorityStrategy($value)
 * @method string getImageFamily()
 * @method $this withImageFamily($value)
 */
class DescribeElasticStrength extends Rpc
{

    /** @var string */
    public $method = 'GET';

    /**
     * @param array $dataDiskCategories
     *
     * @return $this
     */
	public function withDataDiskCategories(array $dataDiskCategories)
	{
	    $this->data['DataDiskCategories'] = $dataDiskCategories;
		foreach ($dataDiskCategories as $i => $iValue) {
			$this->options['query']['DataDiskCategories.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $vSwitchIds
     *
     * @return $this
     */
	public function withVSwitchIds(array $vSwitchIds)
	{
	    $this->data['VSwitchIds'] = $vSwitchIds;
		foreach ($vSwitchIds as $i => $iValue) {
			$this->options['query']['VSwitchIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $instanceTypes
     *
     * @return $this
     */
	public function withInstanceTypes(array $instanceTypes)
	{
	    $this->data['InstanceTypes'] = $instanceTypes;
		foreach ($instanceTypes as $i => $iValue) {
			$this->options['query']['InstanceTypes.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $scalingGroupIds
     *
     * @return $this
     */
	public function withScalingGroupIds(array $scalingGroupIds)
	{
	    $this->data['ScalingGroupIds'] = $scalingGroupIds;
		foreach ($scalingGroupIds as $i => $iValue) {
			$this->options['query']['ScalingGroupIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $systemDiskCategories
     *
     * @return $this
     */
	public function withSystemDiskCategories(array $systemDiskCategories)
	{
	    $this->data['SystemDiskCategories'] = $systemDiskCategories;
		foreach ($systemDiskCategories as $i => $iValue) {
			$this->options['query']['SystemDiskCategories.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getLifecycleActionStatus()
 * @method $this withLifecycleActionStatus($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getScalingActivityId()
 * @method $this withScalingActivityId($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class DescribeLifecycleActions extends Rpc
{
}

/**
 * @method string getScalingGroupId()
 * @method $this withScalingGroupId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getLifecycleHookName()
 * @method $this withLifecycleHookName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method array getLifecycleHookId()
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLifecycleHooks extends Rpc
{

    /**
     * @param array $lifecycleHookId
     *
     * @return $this
     */
	public function withLifecycleHookId(array $lifecycleHookId)
	{
	    $this->data['LifecycleHookId'] = $lifecycleHookId;
		foreach ($lifecycleHookId as $i => $iValue) {
			$this->options['query']['LifecycleHookId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLimitation extends Rpc
{
}

/**
 * @method string getScalingGroupId()
 * @method $this withScalingGroupId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeNotificationConfigurations extends Rpc
{
}

/**
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeNotificationTypes extends Rpc
{
}

/**
 * @method string getMaximumCpuCoreCount()
 * @method $this withMaximumCpuCoreCount($value)
 * @method string getMaximumGpuAmount()
 * @method $this withMaximumGpuAmount($value)
 * @method string getMaximumMemorySize()
 * @method $this withMaximumMemorySize($value)
 * @method string getMinimumCpuCoreCount()
 * @method $this withMinimumCpuCoreCount($value)
 * @method string getCores()
 * @method $this withCores($value)
 * @method array getInstanceTypeFamilies()
 * @method string getMinimumBaselineCredit()
 * @method $this withMinimumBaselineCredit($value)
 * @method array getCpuArchitectures()
 * @method array getInstanceCategories()
 * @method string getMaxPrice()
 * @method $this withMaxPrice($value)
 * @method string getMinimumGpuAmount()
 * @method $this withMinimumGpuAmount($value)
 * @method string getBurstablePerformance()
 * @method $this withBurstablePerformance($value)
 * @method array getPhysicalProcessorModels()
 * @method string getSpotStrategy()
 * @method $this withSpotStrategy($value)
 * @method array getVSwitchId()
 * @method string getMinimumEniQuantity()
 * @method $this withMinimumEniQuantity($value)
 * @method string getMinimumMemorySize()
 * @method $this withMinimumMemorySize($value)
 * @method string getInstanceFamilyLevel()
 * @method $this withInstanceFamilyLevel($value)
 * @method array getZoneId()
 * @method array getMemoryList()
 * @method string getMemory()
 * @method $this withMemory($value)
 * @method string getMinimumEniIpv6AddressQuantity()
 * @method $this withMinimumEniIpv6AddressQuantity($value)
 * @method array getCoresList()
 * @method array getArchitecture()
 * @method string getMinimumInitialCredit()
 * @method $this withMinimumInitialCredit($value)
 * @method array getExcludedInstanceType()
 * @method string getMinimumEniPrivateIpAddressQuantity()
 * @method $this withMinimumEniPrivateIpAddressQuantity($value)
 * @method array getGpuSpecs()
 * @method string getChannelId()
 * @method $this withChannelId($value)
 */
class DescribePatternTypes extends Rpc
{

    /** @var string */
    public $method = 'GET';

    /**
     * @param array $instanceTypeFamilies
     *
     * @return $this
     */
	public function withInstanceTypeFamilies(array $instanceTypeFamilies)
	{
	    $this->data['InstanceTypeFamilies'] = $instanceTypeFamilies;
		foreach ($instanceTypeFamilies as $i => $iValue) {
			$this->options['query']['InstanceTypeFamilies.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $cpuArchitectures
     *
     * @return $this
     */
	public function withCpuArchitectures(array $cpuArchitectures)
	{
	    $this->data['CpuArchitectures'] = $cpuArchitectures;
		foreach ($cpuArchitectures as $i => $iValue) {
			$this->options['query']['CpuArchitectures.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $instanceCategories
     *
     * @return $this
     */
	public function withInstanceCategories(array $instanceCategories)
	{
	    $this->data['InstanceCategories'] = $instanceCategories;
		foreach ($instanceCategories as $i => $iValue) {
			$this->options['query']['InstanceCategories.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $physicalProcessorModels
     *
     * @return $this
     */
	public function withPhysicalProcessorModels(array $physicalProcessorModels)
	{
	    $this->data['PhysicalProcessorModels'] = $physicalProcessorModels;
		foreach ($physicalProcessorModels as $i => $iValue) {
			$this->options['query']['PhysicalProcessorModels.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $vSwitchId
     *
     * @return $this
     */
	public function withVSwitchId(array $vSwitchId)
	{
	    $this->data['VSwitchId'] = $vSwitchId;
		foreach ($vSwitchId as $i => $iValue) {
			$this->options['query']['VSwitchId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $zoneId
     *
     * @return $this
     */
	public function withZoneId(array $zoneId)
	{
	    $this->data['ZoneId'] = $zoneId;
		foreach ($zoneId as $i => $iValue) {
			$this->options['query']['ZoneId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $memoryList
     *
     * @return $this
     */
	public function withMemoryList(array $memoryList)
	{
	    $this->data['MemoryList'] = $memoryList;
		foreach ($memoryList as $i => $iValue) {
			$this->options['query']['MemoryList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $coresList
     *
     * @return $this
     */
	public function withCoresList(array $coresList)
	{
	    $this->data['CoresList'] = $coresList;
		foreach ($coresList as $i => $iValue) {
			$this->options['query']['CoresList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $architecture
     *
     * @return $this
     */
	public function withArchitecture(array $architecture)
	{
	    $this->data['Architecture'] = $architecture;
		foreach ($architecture as $i => $iValue) {
			$this->options['query']['Architecture.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $excludedInstanceType
     *
     * @return $this
     */
	public function withExcludedInstanceType(array $excludedInstanceType)
	{
	    $this->data['ExcludedInstanceType'] = $excludedInstanceType;
		foreach ($excludedInstanceType as $i => $iValue) {
			$this->options['query']['ExcludedInstanceType.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $gpuSpecs
     *
     * @return $this
     */
	public function withGpuSpecs(array $gpuSpecs)
	{
	    $this->data['GpuSpecs'] = $gpuSpecs;
		foreach ($gpuSpecs as $i => $iValue) {
			$this->options['query']['GpuSpecs.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class DescribeRegions extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getScalingGroupId()
 * @method $this withScalingGroupId($value)
 * @method string getInstanceRefreshTaskId()
 * @method $this withInstanceRefreshTaskId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getStatusCode()
 * @method $this withStatusCode($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method array getScalingActivityId()
 */
class DescribeScalingActivities extends Rpc
{

    /**
     * @param array $scalingActivityId
     *
     * @return $this
     */
	public function withScalingActivityId(array $scalingActivityId)
	{
	    $this->data['ScalingActivityId'] = $scalingActivityId;
		foreach ($scalingActivityId as $i => $iValue) {
			$this->options['query']['ScalingActivityId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getScalingActivityId()
 * @method $this withScalingActivityId($value)
 */
class DescribeScalingActivityDetail extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getScalingGroupId()
 * @method $this withScalingGroupId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method array getScalingConfigurationName()
 * @method array getScalingConfigurationId()
 */
class DescribeScalingConfigurations extends Rpc
{

    /**
     * @param array $scalingConfigurationName
     *
     * @return $this
     */
	public function withScalingConfigurationName(array $scalingConfigurationName)
	{
	    $this->data['ScalingConfigurationName'] = $scalingConfigurationName;
		foreach ($scalingConfigurationName as $i => $iValue) {
			$this->options['query']['ScalingConfigurationName.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $scalingConfigurationId
     *
     * @return $this
     */
	public function withScalingConfigurationId(array $scalingConfigurationId)
	{
	    $this->data['ScalingConfigurationId'] = $scalingConfigurationId;
		foreach ($scalingConfigurationId as $i => $iValue) {
			$this->options['query']['ScalingConfigurationId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getGroupType()
 * @method $this withGroupType($value)
 * @method array getTag()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method array getScalingGroupId()
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getScalingGroupName20()
 * @method string getScalingGroupName19()
 * @method string getScalingGroupName18()
 * @method string getScalingGroupName17()
 * @method string getScalingGroupName16()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getScalingGroupName()
 * @method $this withScalingGroupName($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getScalingGroupName1()
 * @method string getScalingGroupName2()
 * @method string getScalingGroupName7()
 * @method string getScalingGroupName11()
 * @method string getScalingGroupName8()
 * @method string getScalingGroupName10()
 * @method string getScalingGroupName9()
 * @method string getScalingGroupName3()
 * @method string getScalingGroupName15()
 * @method string getScalingGroupName4()
 * @method string getScalingGroupName14()
 * @method string getScalingGroupName5()
 * @method string getScalingGroupName13()
 * @method string getScalingGroupName6()
 * @method string getScalingGroupName12()
 */
class DescribeScalingGroups extends Rpc
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

    /**
     * @param array $scalingGroupId
     *
     * @return $this
     */
	public function withScalingGroupId(array $scalingGroupId)
	{
	    $this->data['ScalingGroupId'] = $scalingGroupId;
		foreach ($scalingGroupId as $i => $iValue) {
			$this->options['query']['ScalingGroupId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingGroupName20($value)
    {
        $this->data['ScalingGroupName20'] = $value;
        $this->options['query']['ScalingGroupName.20'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingGroupName19($value)
    {
        $this->data['ScalingGroupName19'] = $value;
        $this->options['query']['ScalingGroupName.19'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingGroupName18($value)
    {
        $this->data['ScalingGroupName18'] = $value;
        $this->options['query']['ScalingGroupName.18'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingGroupName17($value)
    {
        $this->data['ScalingGroupName17'] = $value;
        $this->options['query']['ScalingGroupName.17'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingGroupName16($value)
    {
        $this->data['ScalingGroupName16'] = $value;
        $this->options['query']['ScalingGroupName.16'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingGroupName1($value)
    {
        $this->data['ScalingGroupName1'] = $value;
        $this->options['query']['ScalingGroupName.1'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingGroupName2($value)
    {
        $this->data['ScalingGroupName2'] = $value;
        $this->options['query']['ScalingGroupName.2'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingGroupName7($value)
    {
        $this->data['ScalingGroupName7'] = $value;
        $this->options['query']['ScalingGroupName.7'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingGroupName11($value)
    {
        $this->data['ScalingGroupName11'] = $value;
        $this->options['query']['ScalingGroupName.11'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingGroupName8($value)
    {
        $this->data['ScalingGroupName8'] = $value;
        $this->options['query']['ScalingGroupName.8'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingGroupName10($value)
    {
        $this->data['ScalingGroupName10'] = $value;
        $this->options['query']['ScalingGroupName.10'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingGroupName9($value)
    {
        $this->data['ScalingGroupName9'] = $value;
        $this->options['query']['ScalingGroupName.9'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingGroupName3($value)
    {
        $this->data['ScalingGroupName3'] = $value;
        $this->options['query']['ScalingGroupName.3'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingGroupName15($value)
    {
        $this->data['ScalingGroupName15'] = $value;
        $this->options['query']['ScalingGroupName.15'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingGroupName4($value)
    {
        $this->data['ScalingGroupName4'] = $value;
        $this->options['query']['ScalingGroupName.4'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingGroupName14($value)
    {
        $this->data['ScalingGroupName14'] = $value;
        $this->options['query']['ScalingGroupName.14'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingGroupName5($value)
    {
        $this->data['ScalingGroupName5'] = $value;
        $this->options['query']['ScalingGroupName.5'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingGroupName13($value)
    {
        $this->data['ScalingGroupName13'] = $value;
        $this->options['query']['ScalingGroupName.13'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingGroupName6($value)
    {
        $this->data['ScalingGroupName6'] = $value;
        $this->options['query']['ScalingGroupName.6'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingGroupName12($value)
    {
        $this->data['ScalingGroupName12'] = $value;
        $this->options['query']['ScalingGroupName.12'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getScalingGroupId()
 * @method $this withScalingGroupId($value)
 * @method string getLifecycleState()
 * @method $this withLifecycleState($value)
 * @method string getCreationType()
 * @method $this withCreationType($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getScalingActivityId()
 * @method $this withScalingActivityId($value)
 * @method array getCreationTypes()
 * @method string getScalingConfigurationId()
 * @method $this withScalingConfigurationId($value)
 * @method array getInstanceId()
 * @method string getHealthStatus()
 * @method $this withHealthStatus($value)
 * @method array getLifecycleStates()
 */
class DescribeScalingInstances extends Rpc
{

    /**
     * @param array $creationTypes
     *
     * @return $this
     */
	public function withCreationTypes(array $creationTypes)
	{
	    $this->data['CreationTypes'] = $creationTypes;
		foreach ($creationTypes as $i => $iValue) {
			$this->options['query']['CreationTypes.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $instanceId
     *
     * @return $this
     */
	public function withInstanceId(array $instanceId)
	{
	    $this->data['InstanceId'] = $instanceId;
		foreach ($instanceId as $i => $iValue) {
			$this->options['query']['InstanceId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $lifecycleStates
     *
     * @return $this
     */
	public function withLifecycleStates(array $lifecycleStates)
	{
	    $this->data['LifecycleStates'] = $lifecycleStates;
		foreach ($lifecycleStates as $i => $iValue) {
			$this->options['query']['LifecycleStates.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getScalingGroupId()
 * @method $this withScalingGroupId($value)
 * @method array getScalingRuleId()
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method array getScalingRuleName()
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getScalingRuleType()
 * @method $this withScalingRuleType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method array getScalingRuleAri()
 * @method string getShowAlarmRules()
 * @method $this withShowAlarmRules($value)
 */
class DescribeScalingRules extends Rpc
{

    /**
     * @param array $scalingRuleId
     *
     * @return $this
     */
	public function withScalingRuleId(array $scalingRuleId)
	{
	    $this->data['ScalingRuleId'] = $scalingRuleId;
		foreach ($scalingRuleId as $i => $iValue) {
			$this->options['query']['ScalingRuleId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $scalingRuleName
     *
     * @return $this
     */
	public function withScalingRuleName(array $scalingRuleName)
	{
	    $this->data['ScalingRuleName'] = $scalingRuleName;
		foreach ($scalingRuleName as $i => $iValue) {
			$this->options['query']['ScalingRuleName.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $scalingRuleAri
     *
     * @return $this
     */
	public function withScalingRuleAri(array $scalingRuleAri)
	{
	    $this->data['ScalingRuleAri'] = $scalingRuleAri;
		foreach ($scalingRuleAri as $i => $iValue) {
			$this->options['query']['ScalingRuleAri.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method array getScheduledAction()
 * @method string getScalingGroupId()
 * @method $this withScalingGroupId($value)
 * @method string getTaskName()
 * @method $this withTaskName($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRecurrenceValue()
 * @method $this withRecurrenceValue($value)
 * @method array getScheduledTaskName()
 * @method string getTaskEnabled()
 * @method $this withTaskEnabled($value)
 * @method array getScheduledTaskId()
 * @method string getRecurrenceType()
 * @method $this withRecurrenceType($value)
 */
class DescribeScheduledTasks extends Rpc
{

    /**
     * @param array $scheduledAction
     *
     * @return $this
     */
	public function withScheduledAction(array $scheduledAction)
	{
	    $this->data['ScheduledAction'] = $scheduledAction;
		foreach ($scheduledAction as $i => $iValue) {
			$this->options['query']['ScheduledAction.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $scheduledTaskName
     *
     * @return $this
     */
	public function withScheduledTaskName(array $scheduledTaskName)
	{
	    $this->data['ScheduledTaskName'] = $scheduledTaskName;
		foreach ($scheduledTaskName as $i => $iValue) {
			$this->options['query']['ScheduledTaskName.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $scheduledTaskId
     *
     * @return $this
     */
	public function withScheduledTaskId(array $scheduledTaskId)
	{
	    $this->data['ScheduledTaskId'] = $scheduledTaskId;
		foreach ($scheduledTaskId as $i => $iValue) {
			$this->options['query']['ScheduledTaskId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getScalingGroupId()
 * @method $this withScalingGroupId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method array getAlbServerGroup()
 * @method string getForceDetach()
 * @method $this withForceDetach($value)
 */
class DetachAlbServerGroups extends Rpc
{

    /**
     * @param array $albServerGroup
     *
     * @return $this
     */
	public function withAlbServerGroup(array $albServerGroup)
	{
	    $this->data['AlbServerGroup'] = $albServerGroup;
		foreach ($albServerGroup as $depth1 => $depth1Value) {
			if(isset($depth1Value['AlbServerGroupId'])){
				$this->options['query']['AlbServerGroup.' . ($depth1 + 1) . '.AlbServerGroupId'] = $depth1Value['AlbServerGroupId'];
			}
			if(isset($depth1Value['Port'])){
				$this->options['query']['AlbServerGroup.' . ($depth1 + 1) . '.Port'] = $depth1Value['Port'];
			}
		}

		return $this;
    }
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getScalingGroupId()
 * @method $this withScalingGroupId($value)
 * @method string getRemoveSecurityGroup()
 * @method $this withRemoveSecurityGroup($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method array getDBInstance()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getForceDetach()
 * @method $this withForceDetach($value)
 */
class DetachDBInstances extends Rpc
{

    /**
     * @param array $dBInstance
     *
     * @return $this
     */
	public function withDBInstance(array $dBInstance)
	{
	    $this->data['DBInstance'] = $dBInstance;
		foreach ($dBInstance as $i => $iValue) {
			$this->options['query']['DBInstance.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getScalingGroupId()
 * @method $this withScalingGroupId($value)
 * @method string getDecreaseDesiredCapacity()
 * @method $this withDecreaseDesiredCapacity($value)
 * @method string getIgnoreInvalidInstance()
 * @method $this withIgnoreInvalidInstance($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDetachOption()
 * @method $this withDetachOption($value)
 * @method array getInstanceId()
 * @method string getLifecycleHook()
 * @method $this withLifecycleHook($value)
 */
class DetachInstances extends Rpc
{

    /**
     * @param array $instanceId
     *
     * @return $this
     */
	public function withInstanceId(array $instanceId)
	{
	    $this->data['InstanceId'] = $instanceId;
		foreach ($instanceId as $i => $iValue) {
			$this->options['query']['InstanceId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getScalingGroupId()
 * @method $this withScalingGroupId($value)
 * @method array getLoadBalancer()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAsync()
 * @method $this withAsync($value)
 * @method string getForceDetach()
 * @method $this withForceDetach($value)
 */
class DetachLoadBalancers extends Rpc
{

    /**
     * @param array $loadBalancer
     *
     * @return $this
     */
	public function withLoadBalancer(array $loadBalancer)
	{
	    $this->data['LoadBalancer'] = $loadBalancer;
		foreach ($loadBalancer as $i => $iValue) {
			$this->options['query']['LoadBalancer.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getScalingGroupId()
 * @method $this withScalingGroupId($value)
 * @method array getServerGroup()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getForceDetach()
 * @method $this withForceDetach($value)
 */
class DetachServerGroups extends Rpc
{

    /**
     * @param array $serverGroup
     *
     * @return $this
     */
	public function withServerGroup(array $serverGroup)
	{
	    $this->data['ServerGroup'] = $serverGroup;
		foreach ($serverGroup as $depth1 => $depth1Value) {
			if(isset($depth1Value['ServerGroupId'])){
				$this->options['query']['ServerGroup.' . ($depth1 + 1) . '.ServerGroupId'] = $depth1Value['ServerGroupId'];
			}
			if(isset($depth1Value['Port'])){
				$this->options['query']['ServerGroup.' . ($depth1 + 1) . '.Port'] = $depth1Value['Port'];
			}
			if(isset($depth1Value['Type'])){
				$this->options['query']['ServerGroup.' . ($depth1 + 1) . '.Type'] = $depth1Value['Type'];
			}
		}

		return $this;
    }
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getScalingGroupId()
 * @method $this withScalingGroupId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getForceDetach()
 * @method $this withForceDetach($value)
 * @method array getVServerGroup()
 */
class DetachVServerGroups extends Rpc
{

    /**
     * @param array $vServerGroup
     *
     * @return $this
     */
	public function withVServerGroup(array $vServerGroup)
	{
	    $this->data['VServerGroup'] = $vServerGroup;
		foreach ($vServerGroup as $depth1 => $depth1Value) {
			if(isset($depth1Value['LoadBalancerId'])){
				$this->options['query']['VServerGroup.' . ($depth1 + 1) . '.LoadBalancerId'] = $depth1Value['LoadBalancerId'];
			}
			foreach ($depth1Value['VServerGroupAttribute'] as $depth2 => $depth2Value) {
				if(isset($depth2Value['VServerGroupId'])){
					$this->options['query']['VServerGroup.' . ($depth1 + 1) . '.VServerGroupAttribute.' . ($depth2 + 1) . '.VServerGroupId'] = $depth2Value['VServerGroupId'];
				}
				if(isset($depth2Value['Port'])){
					$this->options['query']['VServerGroup.' . ($depth1 + 1) . '.VServerGroupAttribute.' . ($depth2 + 1) . '.Port'] = $depth2Value['Port'];
				}
			}
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAlarmTaskId()
 * @method $this withAlarmTaskId($value)
 */
class DisableAlarm extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getScalingGroupId()
 * @method $this withScalingGroupId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DisableScalingGroup extends Rpc
{
}

/**
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAlarmTaskId()
 * @method $this withAlarmTaskId($value)
 */
class EnableAlarm extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getScalingGroupId()
 * @method $this withScalingGroupId($value)
 * @method string getActiveScalingConfigurationId()
 * @method $this withActiveScalingConfigurationId($value)
 * @method string getLaunchTemplateId()
 * @method $this withLaunchTemplateId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method array getLaunchTemplateOverride()
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getLaunchTemplateVersion()
 * @method $this withLaunchTemplateVersion($value)
 * @method array getInstanceId()
 * @method array getLoadBalancerWeight()
 */
class EnableScalingGroup extends Rpc
{

    /**
     * @param array $launchTemplateOverride
     *
     * @return $this
     */
	public function withLaunchTemplateOverride(array $launchTemplateOverride)
	{
	    $this->data['LaunchTemplateOverride'] = $launchTemplateOverride;
		foreach ($launchTemplateOverride as $depth1 => $depth1Value) {
			if(isset($depth1Value['WeightedCapacity'])){
				$this->options['query']['LaunchTemplateOverride.' . ($depth1 + 1) . '.WeightedCapacity'] = $depth1Value['WeightedCapacity'];
			}
			if(isset($depth1Value['InstanceType'])){
				$this->options['query']['LaunchTemplateOverride.' . ($depth1 + 1) . '.InstanceType'] = $depth1Value['InstanceType'];
			}
		}

		return $this;
    }

    /**
     * @param array $instanceId
     *
     * @return $this
     */
	public function withInstanceId(array $instanceId)
	{
	    $this->data['InstanceId'] = $instanceId;
		foreach ($instanceId as $i => $iValue) {
			$this->options['query']['InstanceId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $loadBalancerWeight
     *
     * @return $this
     */
	public function withLoadBalancerWeight(array $loadBalancerWeight)
	{
	    $this->data['LoadBalancerWeight'] = $loadBalancerWeight;
		foreach ($loadBalancerWeight as $i => $iValue) {
			$this->options['query']['LoadBalancerWeight.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getScalingGroupId()
 * @method $this withScalingGroupId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAsync()
 * @method $this withAsync($value)
 * @method array getInstanceId()
 */
class EnterStandby extends Rpc
{

    /**
     * @param array $instanceId
     *
     * @return $this
     */
	public function withInstanceId(array $instanceId)
	{
	    $this->data['InstanceId'] = $instanceId;
		foreach ($instanceId as $i => $iValue) {
			$this->options['query']['InstanceId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getBreachThreshold()
 * @method $this withBreachThreshold($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getMetricValue()
 * @method $this withMetricValue($value)
 * @method string getScalingRuleAri()
 * @method $this withScalingRuleAri($value)
 */
class ExecuteScalingRule extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getScalingGroupId()
 * @method $this withScalingGroupId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAsync()
 * @method $this withAsync($value)
 * @method array getInstanceId()
 */
class ExitStandby extends Rpc
{

    /**
     * @param array $instanceId
     *
     * @return $this
     */
	public function withInstanceId(array $instanceId)
	{
	    $this->data['InstanceId'] = $instanceId;
		foreach ($instanceId as $i => $iValue) {
			$this->options['query']['InstanceId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 */
class ListTagKeys extends Rpc
{
}

/**
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method array getTag()
 * @method array getResourceId()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 */
class ListTagResources extends Rpc
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

    /**
     * @param array $resourceId
     *
     * @return $this
     */
	public function withResourceId(array $resourceId)
	{
	    $this->data['ResourceId'] = $resourceId;
		foreach ($resourceId as $i => $iValue) {
			$this->options['query']['ResourceId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getKey()
 * @method $this withKey($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 */
class ListTagValues extends Rpc
{
}

/**
 * @method string getMetricType()
 * @method $this withMetricType($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getExpressionsLogicOperator()
 * @method $this withExpressionsLogicOperator($value)
 * @method array getAlarmAction()
 * @method string getThreshold()
 * @method $this withThreshold($value)
 * @method string getEffective()
 * @method $this withEffective($value)
 * @method string getEvaluationCount()
 * @method $this withEvaluationCount($value)
 * @method string getMetricName()
 * @method $this withMetricName($value)
 * @method array getDimension()
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method array getExpression()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAlarmTaskId()
 * @method $this withAlarmTaskId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getComparisonOperator()
 * @method $this withComparisonOperator($value)
 * @method string getStatistics()
 * @method $this withStatistics($value)
 */
class ModifyAlarm extends Rpc
{

    /**
     * @param array $alarmAction
     *
     * @return $this
     */
	public function withAlarmAction(array $alarmAction)
	{
	    $this->data['AlarmAction'] = $alarmAction;
		foreach ($alarmAction as $i => $iValue) {
			$this->options['query']['AlarmAction.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $dimension
     *
     * @return $this
     */
	public function withDimension(array $dimension)
	{
	    $this->data['Dimension'] = $dimension;
		foreach ($dimension as $depth1 => $depth1Value) {
			if(isset($depth1Value['DimensionValue'])){
				$this->options['query']['Dimension.' . ($depth1 + 1) . '.DimensionValue'] = $depth1Value['DimensionValue'];
			}
			if(isset($depth1Value['DimensionKey'])){
				$this->options['query']['Dimension.' . ($depth1 + 1) . '.DimensionKey'] = $depth1Value['DimensionKey'];
			}
		}

		return $this;
    }

    /**
     * @param array $expression
     *
     * @return $this
     */
	public function withExpression(array $expression)
	{
	    $this->data['Expression'] = $expression;
		foreach ($expression as $depth1 => $depth1Value) {
			if(isset($depth1Value['Period'])){
				$this->options['query']['Expression.' . ($depth1 + 1) . '.Period'] = $depth1Value['Period'];
			}
			if(isset($depth1Value['Threshold'])){
				$this->options['query']['Expression.' . ($depth1 + 1) . '.Threshold'] = $depth1Value['Threshold'];
			}
			if(isset($depth1Value['MetricName'])){
				$this->options['query']['Expression.' . ($depth1 + 1) . '.MetricName'] = $depth1Value['MetricName'];
			}
			if(isset($depth1Value['ComparisonOperator'])){
				$this->options['query']['Expression.' . ($depth1 + 1) . '.ComparisonOperator'] = $depth1Value['ComparisonOperator'];
			}
			if(isset($depth1Value['Statistics'])){
				$this->options['query']['Expression.' . ($depth1 + 1) . '.Statistics'] = $depth1Value['Statistics'];
			}
		}

		return $this;
    }
}

/**
 * @method array getContainer()
 * @method array getNtpServer()
 * @method string getSpotPriceLimit()
 * @method $this withSpotPriceLimit($value)
 * @method string getEnableSls()
 * @method $this withEnableSls($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getHostName()
 * @method $this withHostName($value)
 * @method string getActiveDeadlineSeconds()
 * @method $this withActiveDeadlineSeconds($value)
 * @method string getEgressBandwidth()
 * @method $this withEgressBandwidth($value)
 * @method array getDnsConfigSearch()
 * @method array getHostAliase()
 * @method string getImageSnapshotId()
 * @method $this withImageSnapshotId($value)
 * @method array getTag()
 * @method string getCpuOptionsThreadsPerCore()
 * @method $this withCpuOptionsThreadsPerCore($value)
 * @method string getDataCachePL()
 * @method $this withDataCachePL($value)
 * @method string getIpv6AddressCount()
 * @method $this withIpv6AddressCount($value)
 * @method string getCpu()
 * @method $this withCpu($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getScalingConfigurationName()
 * @method $this withScalingConfigurationName($value)
 * @method string getScalingConfigurationId()
 * @method $this withScalingConfigurationId($value)
 * @method string getSpotStrategy()
 * @method $this withSpotStrategy($value)
 * @method array getVolume()
 * @method string getInstanceFamilyLevel()
 * @method $this withInstanceFamilyLevel($value)
 * @method array getDnsConfigOption()
 * @method string getContainersUpdateType()
 * @method $this withContainersUpdateType($value)
 * @method string getEphemeralStorage()
 * @method $this withEphemeralStorage($value)
 * @method string getDataCacheProvisionedIops()
 * @method $this withDataCacheProvisionedIops($value)
 * @method string getEipBandwidth()
 * @method $this withEipBandwidth($value)
 * @method string getGpuDriverVersion()
 * @method $this withGpuDriverVersion($value)
 * @method string getCostOptimization()
 * @method $this withCostOptimization($value)
 * @method string getDataCacheBurstingEnabled()
 * @method $this withDataCacheBurstingEnabled($value)
 * @method string getMemory()
 * @method $this withMemory($value)
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getIngressBandwidth()
 * @method $this withIngressBandwidth($value)
 * @method string getDnsPolicy()
 * @method $this withDnsPolicy($value)
 * @method array getSecurityContextSysctl()
 * @method string getDataCacheBucket()
 * @method $this withDataCacheBucket($value)
 * @method array getDnsConfigNameServer()
 * @method array getInitContainer()
 * @method array getInstanceType()
 * @method string getTerminationGracePeriodSeconds()
 * @method $this withTerminationGracePeriodSeconds($value)
 * @method array getImageRegistryCredential()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getRestartPolicy()
 * @method $this withRestartPolicy($value)
 * @method string getCpuOptionsCore()
 * @method $this withCpuOptionsCore($value)
 * @method string getRamRoleName()
 * @method $this withRamRoleName($value)
 * @method array getAcrRegistryInfo()
 * @method string getAutoMatchImageCache()
 * @method $this withAutoMatchImageCache($value)
 * @method string getLoadBalancerWeight()
 * @method $this withLoadBalancerWeight($value)
 * @method string getContainerGroupName()
 * @method $this withContainerGroupName($value)
 * @method string getAutoCreateEip()
 * @method $this withAutoCreateEip($value)
 */
class ModifyEciScalingConfiguration extends Rpc
{

    /**
     * @param array $container
     *
     * @return $this
     */
	public function withContainer(array $container)
	{
	    $this->data['Container'] = $container;
		foreach ($container as $depth1 => $depth1Value) {
			if(isset($depth1Value['Stdin'])){
				$this->options['query']['Container.' . ($depth1 + 1) . '.Stdin'] = $depth1Value['Stdin'];
			}
			foreach ($depth1Value['LivenessProbeExecCommand'] as $i => $iValue) {
				$this->options['query']['Container.' . ($depth1 + 1) . '.LivenessProbe.Exec.Command.' . ($i + 1)] = $iValue;
			}
			if(isset($depth1Value['LifecyclePostStartHandlerHttpGetPort'])){
				$this->options['query']['Container.' . ($depth1 + 1) . '.LifecyclePostStartHandlerHttpGetPort'] = $depth1Value['LifecyclePostStartHandlerHttpGetPort'];
			}
			if(isset($depth1Value['WorkingDir'])){
				$this->options['query']['Container.' . ($depth1 + 1) . '.WorkingDir'] = $depth1Value['WorkingDir'];
			}
			if(isset($depth1Value['ReadinessProbeHttpGetPort'])){
				$this->options['query']['Container.' . ($depth1 + 1) . '.ReadinessProbe.HttpGet.Port'] = $depth1Value['ReadinessProbeHttpGetPort'];
			}
			if(isset($depth1Value['LivenessProbeHttpGetPort'])){
				$this->options['query']['Container.' . ($depth1 + 1) . '.LivenessProbe.HttpGet.Port'] = $depth1Value['LivenessProbeHttpGetPort'];
			}
			if(isset($depth1Value['LifecyclePreStopHandlerTcpSocketPort'])){
				$this->options['query']['Container.' . ($depth1 + 1) . '.LifecyclePreStopHandlerTcpSocketPort'] = $depth1Value['LifecyclePreStopHandlerTcpSocketPort'];
			}
			foreach ($depth1Value['VolumeMount'] as $depth2 => $depth2Value) {
				if(isset($depth2Value['MountPath'])){
					$this->options['query']['Container.' . ($depth1 + 1) . '.VolumeMount.' . ($depth2 + 1) . '.MountPath'] = $depth2Value['MountPath'];
				}
				if(isset($depth2Value['ReadOnly'])){
					$this->options['query']['Container.' . ($depth1 + 1) . '.VolumeMount.' . ($depth2 + 1) . '.ReadOnly'] = $depth2Value['ReadOnly'];
				}
				if(isset($depth2Value['MountPropagation'])){
					$this->options['query']['Container.' . ($depth1 + 1) . '.VolumeMount.' . ($depth2 + 1) . '.MountPropagation'] = $depth2Value['MountPropagation'];
				}
				if(isset($depth2Value['Name'])){
					$this->options['query']['Container.' . ($depth1 + 1) . '.VolumeMount.' . ($depth2 + 1) . '.Name'] = $depth2Value['Name'];
				}
				if(isset($depth2Value['SubPath'])){
					$this->options['query']['Container.' . ($depth1 + 1) . '.VolumeMount.' . ($depth2 + 1) . '.SubPath'] = $depth2Value['SubPath'];
				}
			}
			if(isset($depth1Value['Image'])){
				$this->options['query']['Container.' . ($depth1 + 1) . '.Image'] = $depth1Value['Image'];
			}
			foreach ($depth1Value['LifecyclePostStartHandlerExec'] as $i => $iValue) {
				$this->options['query']['Container.' . ($depth1 + 1) . '.LifecyclePostStartHandlerExec.' . ($i + 1)] = $iValue;
			}
			if(isset($depth1Value['Cpu'])){
				$this->options['query']['Container.' . ($depth1 + 1) . '.Cpu'] = $depth1Value['Cpu'];
			}
			if(isset($depth1Value['ReadinessProbeHttpGetPath'])){
				$this->options['query']['Container.' . ($depth1 + 1) . '.ReadinessProbe.HttpGet.Path'] = $depth1Value['ReadinessProbeHttpGetPath'];
			}
			if(isset($depth1Value['Gpu'])){
				$this->options['query']['Container.' . ($depth1 + 1) . '.Gpu'] = $depth1Value['Gpu'];
			}
			if(isset($depth1Value['StdinOnce'])){
				$this->options['query']['Container.' . ($depth1 + 1) . '.StdinOnce'] = $depth1Value['StdinOnce'];
			}
			if(isset($depth1Value['LifecyclePostStartHandlerTcpSocketHost'])){
				$this->options['query']['Container.' . ($depth1 + 1) . '.LifecyclePostStartHandlerTcpSocketHost'] = $depth1Value['LifecyclePostStartHandlerTcpSocketHost'];
			}
			if(isset($depth1Value['LivenessProbeSuccessThreshold'])){
				$this->options['query']['Container.' . ($depth1 + 1) . '.LivenessProbe.SuccessThreshold'] = $depth1Value['LivenessProbeSuccessThreshold'];
			}
			if(isset($depth1Value['SecurityContextRunAsUser'])){
				$this->options['query']['Container.' . ($depth1 + 1) . '.SecurityContext.RunAsUser'] = $depth1Value['SecurityContextRunAsUser'];
			}
			if(isset($depth1Value['LivenessProbePeriodSeconds'])){
				$this->options['query']['Container.' . ($depth1 + 1) . '.LivenessProbe.PeriodSeconds'] = $depth1Value['LivenessProbePeriodSeconds'];
			}
			if(isset($depth1Value['LivenessProbeInitialDelaySeconds'])){
				$this->options['query']['Container.' . ($depth1 + 1) . '.LivenessProbe.InitialDelaySeconds'] = $depth1Value['LivenessProbeInitialDelaySeconds'];
			}
			foreach ($depth1Value['Port'] as $depth2 => $depth2Value) {
				if(isset($depth2Value['Protocol'])){
					$this->options['query']['Container.' . ($depth1 + 1) . '.Port.' . ($depth2 + 1) . '.Protocol'] = $depth2Value['Protocol'];
				}
				if(isset($depth2Value['Port'])){
					$this->options['query']['Container.' . ($depth1 + 1) . '.Port.' . ($depth2 + 1) . '.Port'] = $depth2Value['Port'];
				}
			}
			if(isset($depth1Value['Name'])){
				$this->options['query']['Container.' . ($depth1 + 1) . '.Name'] = $depth1Value['Name'];
			}
			if(isset($depth1Value['LifecyclePreStopHandlerTcpSocketHost'])){
				$this->options['query']['Container.' . ($depth1 + 1) . '.LifecyclePreStopHandlerTcpSocketHost'] = $depth1Value['LifecyclePreStopHandlerTcpSocketHost'];
			}
			if(isset($depth1Value['SecurityContextReadOnlyRootFilesystem'])){
				$this->options['query']['Container.' . ($depth1 + 1) . '.SecurityContext.ReadOnlyRootFilesystem'] = $depth1Value['SecurityContextReadOnlyRootFilesystem'];
			}
			if(isset($depth1Value['LifecyclePreStopHandlerHttpGetHost'])){
				$this->options['query']['Container.' . ($depth1 + 1) . '.LifecyclePreStopHandlerHttpGetHost'] = $depth1Value['LifecyclePreStopHandlerHttpGetHost'];
			}
			if(isset($depth1Value['Memory'])){
				$this->options['query']['Container.' . ($depth1 + 1) . '.Memory'] = $depth1Value['Memory'];
			}
			if(isset($depth1Value['LifecyclePreStopHandlerHttpGetScheme'])){
				$this->options['query']['Container.' . ($depth1 + 1) . '.LifecyclePreStopHandlerHttpGetScheme'] = $depth1Value['LifecyclePreStopHandlerHttpGetScheme'];
			}
			if(isset($depth1Value['LifecyclePostStartHandlerTcpSocketPort'])){
				$this->options['query']['Container.' . ($depth1 + 1) . '.LifecyclePostStartHandlerTcpSocketPort'] = $depth1Value['LifecyclePostStartHandlerTcpSocketPort'];
			}
			if(isset($depth1Value['LifecyclePreStopHandlerHttpGetPath'])){
				$this->options['query']['Container.' . ($depth1 + 1) . '.LifecyclePreStopHandlerHttpGetPath'] = $depth1Value['LifecyclePreStopHandlerHttpGetPath'];
			}
			if(isset($depth1Value['LifecyclePostStartHandlerHttpGetHost'])){
				$this->options['query']['Container.' . ($depth1 + 1) . '.LifecyclePostStartHandlerHttpGetHost'] = $depth1Value['LifecyclePostStartHandlerHttpGetHost'];
			}
			if(isset($depth1Value['ReadinessProbeFailureThreshold'])){
				$this->options['query']['Container.' . ($depth1 + 1) . '.ReadinessProbe.FailureThreshold'] = $depth1Value['ReadinessProbeFailureThreshold'];
			}
			foreach ($depth1Value['Arg'] as $i => $iValue) {
				$this->options['query']['Container.' . ($depth1 + 1) . '.Arg.' . ($i + 1)] = $iValue;
			}
			if(isset($depth1Value['ReadinessProbeSuccessThreshold'])){
				$this->options['query']['Container.' . ($depth1 + 1) . '.ReadinessProbe.SuccessThreshold'] = $depth1Value['ReadinessProbeSuccessThreshold'];
			}
			if(isset($depth1Value['LifecyclePostStartHandlerHttpGetPath'])){
				$this->options['query']['Container.' . ($depth1 + 1) . '.LifecyclePostStartHandlerHttpGetPath'] = $depth1Value['LifecyclePostStartHandlerHttpGetPath'];
			}
			foreach ($depth1Value['LifecyclePreStopHandlerExec'] as $i => $iValue) {
				$this->options['query']['Container.' . ($depth1 + 1) . '.LifecyclePreStopHandlerExec.' . ($i + 1)] = $iValue;
			}
			foreach ($depth1Value['SecurityContextCapabilityAdd'] as $i => $iValue) {
				$this->options['query']['Container.' . ($depth1 + 1) . '.SecurityContext.Capability.Add.' . ($i + 1)] = $iValue;
			}
			if(isset($depth1Value['ReadinessProbeInitialDelaySeconds'])){
				$this->options['query']['Container.' . ($depth1 + 1) . '.ReadinessProbe.InitialDelaySeconds'] = $depth1Value['ReadinessProbeInitialDelaySeconds'];
			}
			foreach ($depth1Value['ReadinessProbeExecCommand'] as $i => $iValue) {
				$this->options['query']['Container.' . ($depth1 + 1) . '.ReadinessProbe.Exec.Command.' . ($i + 1)] = $iValue;
			}
			if(isset($depth1Value['ReadinessProbeHttpGetScheme'])){
				$this->options['query']['Container.' . ($depth1 + 1) . '.ReadinessProbe.HttpGet.Scheme'] = $depth1Value['ReadinessProbeHttpGetScheme'];
			}
			if(isset($depth1Value['LifecyclePreStopHandlerHttpGetPort'])){
				$this->options['query']['Container.' . ($depth1 + 1) . '.LifecyclePreStopHandlerHttpGetPort'] = $depth1Value['LifecyclePreStopHandlerHttpGetPort'];
			}
			if(isset($depth1Value['ImagePullPolicy'])){
				$this->options['query']['Container.' . ($depth1 + 1) . '.ImagePullPolicy'] = $depth1Value['ImagePullPolicy'];
			}
			foreach ($depth1Value['Command'] as $i => $iValue) {
				$this->options['query']['Container.' . ($depth1 + 1) . '.Command.' . ($i + 1)] = $iValue;
			}
			if(isset($depth1Value['LivenessProbeHttpGetPath'])){
				$this->options['query']['Container.' . ($depth1 + 1) . '.LivenessProbe.HttpGet.Path'] = $depth1Value['LivenessProbeHttpGetPath'];
			}
			if(isset($depth1Value['LifecyclePostStartHandlerHttpGetScheme'])){
				$this->options['query']['Container.' . ($depth1 + 1) . '.LifecyclePostStartHandlerHttpGetScheme'] = $depth1Value['LifecyclePostStartHandlerHttpGetScheme'];
			}
			if(isset($depth1Value['LivenessProbeTimeoutSeconds'])){
				$this->options['query']['Container.' . ($depth1 + 1) . '.LivenessProbe.TimeoutSeconds'] = $depth1Value['LivenessProbeTimeoutSeconds'];
			}
			if(isset($depth1Value['LivenessProbeTcpSocketPort'])){
				$this->options['query']['Container.' . ($depth1 + 1) . '.LivenessProbe.TcpSocket.Port'] = $depth1Value['LivenessProbeTcpSocketPort'];
			}
			if(isset($depth1Value['ReadinessProbePeriodSeconds'])){
				$this->options['query']['Container.' . ($depth1 + 1) . '.ReadinessProbe.PeriodSeconds'] = $depth1Value['ReadinessProbePeriodSeconds'];
			}
			foreach ($depth1Value['EnvironmentVar'] as $depth2 => $depth2Value) {
				if(isset($depth2Value['FieldRefFieldPath'])){
					$this->options['query']['Container.' . ($depth1 + 1) . '.EnvironmentVar.' . ($depth2 + 1) . '.FieldRef.FieldPath'] = $depth2Value['FieldRefFieldPath'];
				}
				if(isset($depth2Value['Value'])){
					$this->options['query']['Container.' . ($depth1 + 1) . '.EnvironmentVar.' . ($depth2 + 1) . '.Value'] = $depth2Value['Value'];
				}
				if(isset($depth2Value['Key'])){
					$this->options['query']['Container.' . ($depth1 + 1) . '.EnvironmentVar.' . ($depth2 + 1) . '.Key'] = $depth2Value['Key'];
				}
			}
			if(isset($depth1Value['Tty'])){
				$this->options['query']['Container.' . ($depth1 + 1) . '.Tty'] = $depth1Value['Tty'];
			}
			if(isset($depth1Value['LivenessProbeFailureThreshold'])){
				$this->options['query']['Container.' . ($depth1 + 1) . '.LivenessProbe.FailureThreshold'] = $depth1Value['LivenessProbeFailureThreshold'];
			}
			if(isset($depth1Value['ReadinessProbeTimeoutSeconds'])){
				$this->options['query']['Container.' . ($depth1 + 1) . '.ReadinessProbe.TimeoutSeconds'] = $depth1Value['ReadinessProbeTimeoutSeconds'];
			}
			if(isset($depth1Value['ReadinessProbeTcpSocketPort'])){
				$this->options['query']['Container.' . ($depth1 + 1) . '.ReadinessProbe.TcpSocket.Port'] = $depth1Value['ReadinessProbeTcpSocketPort'];
			}
			if(isset($depth1Value['LivenessProbeHttpGetScheme'])){
				$this->options['query']['Container.' . ($depth1 + 1) . '.LivenessProbe.HttpGet.Scheme'] = $depth1Value['LivenessProbeHttpGetScheme'];
			}
		}

		return $this;
    }

    /**
     * @param array $ntpServer
     *
     * @return $this
     */
	public function withNtpServer(array $ntpServer)
	{
	    $this->data['NtpServer'] = $ntpServer;
		foreach ($ntpServer as $i => $iValue) {
			$this->options['query']['NtpServer.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $dnsConfigSearch
     *
     * @return $this
     */
	public function withDnsConfigSearch(array $dnsConfigSearch)
	{
	    $this->data['DnsConfigSearch'] = $dnsConfigSearch;
		foreach ($dnsConfigSearch as $i => $iValue) {
			$this->options['query']['DnsConfigSearch.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $hostAliase
     *
     * @return $this
     */
	public function withHostAliase(array $hostAliase)
	{
	    $this->data['HostAliase'] = $hostAliase;
		foreach ($hostAliase as $depth1 => $depth1Value) {
			foreach ($depth1Value['Hostname'] as $i => $iValue) {
				$this->options['query']['HostAliase.' . ($depth1 + 1) . '.Hostname.' . ($i + 1)] = $iValue;
			}
			if(isset($depth1Value['Ip'])){
				$this->options['query']['HostAliase.' . ($depth1 + 1) . '.Ip'] = $depth1Value['Ip'];
			}
		}

		return $this;
    }

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

    /**
     * @param array $volume
     *
     * @return $this
     */
	public function withVolume(array $volume)
	{
	    $this->data['Volume'] = $volume;
		foreach ($volume as $depth1 => $depth1Value) {
			if(isset($depth1Value['DiskVolumeFsType'])){
				$this->options['query']['Volume.' . ($depth1 + 1) . '.DiskVolume.FsType'] = $depth1Value['DiskVolumeFsType'];
			}
			if(isset($depth1Value['EmptyDirVolumeSizeLimit'])){
				$this->options['query']['Volume.' . ($depth1 + 1) . '.EmptyDirVolume.SizeLimit'] = $depth1Value['EmptyDirVolumeSizeLimit'];
			}
			if(isset($depth1Value['NFSVolumePath'])){
				$this->options['query']['Volume.' . ($depth1 + 1) . '.NFSVolume.Path'] = $depth1Value['NFSVolumePath'];
			}
			if(isset($depth1Value['DiskVolumeDiskId'])){
				$this->options['query']['Volume.' . ($depth1 + 1) . '.DiskVolume.DiskId'] = $depth1Value['DiskVolumeDiskId'];
			}
			if(isset($depth1Value['FlexVolumeFsType'])){
				$this->options['query']['Volume.' . ($depth1 + 1) . '.FlexVolume.FsType'] = $depth1Value['FlexVolumeFsType'];
			}
			if(isset($depth1Value['Type'])){
				$this->options['query']['Volume.' . ($depth1 + 1) . '.Type'] = $depth1Value['Type'];
			}
			if(isset($depth1Value['FlexVolumeDriver'])){
				$this->options['query']['Volume.' . ($depth1 + 1) . '.FlexVolume.Driver'] = $depth1Value['FlexVolumeDriver'];
			}
			if(isset($depth1Value['FlexVolumeOptions'])){
				$this->options['query']['Volume.' . ($depth1 + 1) . '.FlexVolume.Options'] = $depth1Value['FlexVolumeOptions'];
			}
			if(isset($depth1Value['NFSVolumeServer'])){
				$this->options['query']['Volume.' . ($depth1 + 1) . '.NFSVolume.Server'] = $depth1Value['NFSVolumeServer'];
			}
			if(isset($depth1Value['EmptyDirVolumeMedium'])){
				$this->options['query']['Volume.' . ($depth1 + 1) . '.EmptyDirVolume.Medium'] = $depth1Value['EmptyDirVolumeMedium'];
			}
			if(isset($depth1Value['HostPathVolumePath'])){
				$this->options['query']['Volume.' . ($depth1 + 1) . '.HostPathVolume.Path'] = $depth1Value['HostPathVolumePath'];
			}
			if(isset($depth1Value['Name'])){
				$this->options['query']['Volume.' . ($depth1 + 1) . '.Name'] = $depth1Value['Name'];
			}
			foreach ($depth1Value['ConfigFileVolumeConfigFileToPath'] as $depth2 => $depth2Value) {
				if(isset($depth2Value['Mode'])){
					$this->options['query']['Volume.' . ($depth1 + 1) . '.ConfigFileVolumeConfigFileToPath.' . ($depth2 + 1) . '.Mode'] = $depth2Value['Mode'];
				}
				if(isset($depth2Value['Path'])){
					$this->options['query']['Volume.' . ($depth1 + 1) . '.ConfigFileVolumeConfigFileToPath.' . ($depth2 + 1) . '.Path'] = $depth2Value['Path'];
				}
				if(isset($depth2Value['Content'])){
					$this->options['query']['Volume.' . ($depth1 + 1) . '.ConfigFileVolumeConfigFileToPath.' . ($depth2 + 1) . '.Content'] = $depth2Value['Content'];
				}
			}
			if(isset($depth1Value['DiskVolumeDiskSize'])){
				$this->options['query']['Volume.' . ($depth1 + 1) . '.DiskVolume.DiskSize'] = $depth1Value['DiskVolumeDiskSize'];
			}
			if(isset($depth1Value['ConfigFileVolumeDefaultMode'])){
				$this->options['query']['Volume.' . ($depth1 + 1) . '.ConfigFileVolumeDefaultMode'] = $depth1Value['ConfigFileVolumeDefaultMode'];
			}
			if(isset($depth1Value['HostPathVolumeType'])){
				$this->options['query']['Volume.' . ($depth1 + 1) . '.HostPathVolume.Type'] = $depth1Value['HostPathVolumeType'];
			}
			if(isset($depth1Value['NFSVolumeReadOnly'])){
				$this->options['query']['Volume.' . ($depth1 + 1) . '.NFSVolume.ReadOnly'] = $depth1Value['NFSVolumeReadOnly'];
			}
		}

		return $this;
    }

    /**
     * @param array $dnsConfigOption
     *
     * @return $this
     */
	public function withDnsConfigOption(array $dnsConfigOption)
	{
	    $this->data['DnsConfigOption'] = $dnsConfigOption;
		foreach ($dnsConfigOption as $depth1 => $depth1Value) {
			if(isset($depth1Value['Name'])){
				$this->options['query']['DnsConfigOption.' . ($depth1 + 1) . '.Name'] = $depth1Value['Name'];
			}
			if(isset($depth1Value['Value'])){
				$this->options['query']['DnsConfigOption.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
		}

		return $this;
    }

    /**
     * @param array $securityContextSysctl
     *
     * @return $this
     */
	public function withSecurityContextSysctl(array $securityContextSysctl)
	{
	    $this->data['SecurityContextSysctl'] = $securityContextSysctl;
		foreach ($securityContextSysctl as $depth1 => $depth1Value) {
			if(isset($depth1Value['Name'])){
				$this->options['query']['SecurityContextSysctl.' . ($depth1 + 1) . '.Name'] = $depth1Value['Name'];
			}
			if(isset($depth1Value['Value'])){
				$this->options['query']['SecurityContextSysctl.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
		}

		return $this;
    }

    /**
     * @param array $dnsConfigNameServer
     *
     * @return $this
     */
	public function withDnsConfigNameServer(array $dnsConfigNameServer)
	{
	    $this->data['DnsConfigNameServer'] = $dnsConfigNameServer;
		foreach ($dnsConfigNameServer as $i => $iValue) {
			$this->options['query']['DnsConfigNameServer.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $initContainer
     *
     * @return $this
     */
	public function withInitContainer(array $initContainer)
	{
	    $this->data['InitContainer'] = $initContainer;
		foreach ($initContainer as $depth1 => $depth1Value) {
			if(isset($depth1Value['Image'])){
				$this->options['query']['InitContainer.' . ($depth1 + 1) . '.Image'] = $depth1Value['Image'];
			}
			foreach ($depth1Value['InitContainerEnvironmentVar'] as $depth2 => $depth2Value) {
				if(isset($depth2Value['FieldRefFieldPath'])){
					$this->options['query']['InitContainer.' . ($depth1 + 1) . '.InitContainerEnvironmentVar.' . ($depth2 + 1) . '.FieldRef.FieldPath'] = $depth2Value['FieldRefFieldPath'];
				}
				if(isset($depth2Value['Value'])){
					$this->options['query']['InitContainer.' . ($depth1 + 1) . '.InitContainerEnvironmentVar.' . ($depth2 + 1) . '.Value'] = $depth2Value['Value'];
				}
				if(isset($depth2Value['Key'])){
					$this->options['query']['InitContainer.' . ($depth1 + 1) . '.InitContainerEnvironmentVar.' . ($depth2 + 1) . '.Key'] = $depth2Value['Key'];
				}
			}
			foreach ($depth1Value['SecurityContextCapabilityAdd'] as $i => $iValue) {
				$this->options['query']['InitContainer.' . ($depth1 + 1) . '.SecurityContext.Capability.Add.' . ($i + 1)] = $iValue;
			}
			if(isset($depth1Value['Memory'])){
				$this->options['query']['InitContainer.' . ($depth1 + 1) . '.Memory'] = $depth1Value['Memory'];
			}
			if(isset($depth1Value['WorkingDir'])){
				$this->options['query']['InitContainer.' . ($depth1 + 1) . '.WorkingDir'] = $depth1Value['WorkingDir'];
			}
			if(isset($depth1Value['Cpu'])){
				$this->options['query']['InitContainer.' . ($depth1 + 1) . '.Cpu'] = $depth1Value['Cpu'];
			}
			if(isset($depth1Value['Gpu'])){
				$this->options['query']['InitContainer.' . ($depth1 + 1) . '.Gpu'] = $depth1Value['Gpu'];
			}
			if(isset($depth1Value['ImagePullPolicy'])){
				$this->options['query']['InitContainer.' . ($depth1 + 1) . '.ImagePullPolicy'] = $depth1Value['ImagePullPolicy'];
			}
			foreach ($depth1Value['Command'] as $i => $iValue) {
				$this->options['query']['InitContainer.' . ($depth1 + 1) . '.Command.' . ($i + 1)] = $iValue;
			}
			if(isset($depth1Value['SecurityContextRunAsUser'])){
				$this->options['query']['InitContainer.' . ($depth1 + 1) . '.SecurityContext.RunAsUser'] = $depth1Value['SecurityContextRunAsUser'];
			}
			foreach ($depth1Value['InitContainerPort'] as $depth2 => $depth2Value) {
				if(isset($depth2Value['Protocol'])){
					$this->options['query']['InitContainer.' . ($depth1 + 1) . '.InitContainerPort.' . ($depth2 + 1) . '.Protocol'] = $depth2Value['Protocol'];
				}
				if(isset($depth2Value['Port'])){
					$this->options['query']['InitContainer.' . ($depth1 + 1) . '.InitContainerPort.' . ($depth2 + 1) . '.Port'] = $depth2Value['Port'];
				}
			}
			foreach ($depth1Value['Arg'] as $i => $iValue) {
				$this->options['query']['InitContainer.' . ($depth1 + 1) . '.Arg.' . ($i + 1)] = $iValue;
			}
			if(isset($depth1Value['Name'])){
				$this->options['query']['InitContainer.' . ($depth1 + 1) . '.Name'] = $depth1Value['Name'];
			}
			foreach ($depth1Value['InitContainerVolumeMount'] as $depth2 => $depth2Value) {
				if(isset($depth2Value['MountPath'])){
					$this->options['query']['InitContainer.' . ($depth1 + 1) . '.InitContainerVolumeMount.' . ($depth2 + 1) . '.MountPath'] = $depth2Value['MountPath'];
				}
				if(isset($depth2Value['ReadOnly'])){
					$this->options['query']['InitContainer.' . ($depth1 + 1) . '.InitContainerVolumeMount.' . ($depth2 + 1) . '.ReadOnly'] = $depth2Value['ReadOnly'];
				}
				if(isset($depth2Value['MountPropagation'])){
					$this->options['query']['InitContainer.' . ($depth1 + 1) . '.InitContainerVolumeMount.' . ($depth2 + 1) . '.MountPropagation'] = $depth2Value['MountPropagation'];
				}
				if(isset($depth2Value['Name'])){
					$this->options['query']['InitContainer.' . ($depth1 + 1) . '.InitContainerVolumeMount.' . ($depth2 + 1) . '.Name'] = $depth2Value['Name'];
				}
				if(isset($depth2Value['SubPath'])){
					$this->options['query']['InitContainer.' . ($depth1 + 1) . '.InitContainerVolumeMount.' . ($depth2 + 1) . '.SubPath'] = $depth2Value['SubPath'];
				}
			}
			if(isset($depth1Value['SecurityContextReadOnlyRootFilesystem'])){
				$this->options['query']['InitContainer.' . ($depth1 + 1) . '.SecurityContext.ReadOnlyRootFilesystem'] = $depth1Value['SecurityContextReadOnlyRootFilesystem'];
			}
		}

		return $this;
    }

    /**
     * @param array $instanceType
     *
     * @return $this
     */
	public function withInstanceType(array $instanceType)
	{
	    $this->data['InstanceType'] = $instanceType;
		foreach ($instanceType as $i => $iValue) {
			$this->options['query']['InstanceType.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $imageRegistryCredential
     *
     * @return $this
     */
	public function withImageRegistryCredential(array $imageRegistryCredential)
	{
	    $this->data['ImageRegistryCredential'] = $imageRegistryCredential;
		foreach ($imageRegistryCredential as $depth1 => $depth1Value) {
			if(isset($depth1Value['Server'])){
				$this->options['query']['ImageRegistryCredential.' . ($depth1 + 1) . '.Server'] = $depth1Value['Server'];
			}
			if(isset($depth1Value['Password'])){
				$this->options['query']['ImageRegistryCredential.' . ($depth1 + 1) . '.Password'] = $depth1Value['Password'];
			}
			if(isset($depth1Value['UserName'])){
				$this->options['query']['ImageRegistryCredential.' . ($depth1 + 1) . '.UserName'] = $depth1Value['UserName'];
			}
		}

		return $this;
    }

    /**
     * @param array $acrRegistryInfo
     *
     * @return $this
     */
	public function withAcrRegistryInfo(array $acrRegistryInfo)
	{
	    $this->data['AcrRegistryInfo'] = $acrRegistryInfo;
		foreach ($acrRegistryInfo as $depth1 => $depth1Value) {
			if(isset($depth1Value['InstanceName'])){
				$this->options['query']['AcrRegistryInfo.' . ($depth1 + 1) . '.InstanceName'] = $depth1Value['InstanceName'];
			}
			if(isset($depth1Value['InstanceId'])){
				$this->options['query']['AcrRegistryInfo.' . ($depth1 + 1) . '.InstanceId'] = $depth1Value['InstanceId'];
			}
			if(isset($depth1Value['RegionId'])){
				$this->options['query']['AcrRegistryInfo.' . ($depth1 + 1) . '.RegionId'] = $depth1Value['RegionId'];
			}
			foreach ($depth1Value['Domain'] as $i => $iValue) {
				$this->options['query']['AcrRegistryInfo.' . ($depth1 + 1) . '.Domain.' . ($i + 1)] = $iValue;
			}
		}

		return $this;
    }
}

/**
 * @method string getScalingGroupId()
 * @method $this withScalingGroupId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getEntrusted()
 * @method $this withEntrusted($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method array getInstanceIds()
 */
class ModifyInstanceAttribute extends Rpc
{

    /**
     * @param array $instanceIds
     *
     * @return $this
     */
	public function withInstanceIds(array $instanceIds)
	{
	    $this->data['InstanceIds'] = $instanceIds;
		foreach ($instanceIds as $i => $iValue) {
			$this->options['query']['InstanceIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getDefaultResult()
 * @method $this withDefaultResult($value)
 * @method string getHeartbeatTimeout()
 * @method $this withHeartbeatTimeout($value)
 * @method string getScalingGroupId()
 * @method $this withScalingGroupId($value)
 * @method string getLifecycleTransition()
 * @method $this withLifecycleTransition($value)
 * @method string getLifecycleHookName()
 * @method $this withLifecycleHookName($value)
 * @method string getNotificationArn()
 * @method $this withNotificationArn($value)
 * @method string getLifecycleHookStatus()
 * @method $this withLifecycleHookStatus($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getLifecycleHookId()
 * @method $this withLifecycleHookId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getNotificationMetadata()
 * @method $this withNotificationMetadata($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyLifecycleHook extends Rpc
{
}

/**
 * @method string getScalingGroupId()
 * @method $this withScalingGroupId($value)
 * @method string getTimeZone()
 * @method $this withTimeZone($value)
 * @method string getNotificationArn()
 * @method $this withNotificationArn($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method array getNotificationType()
 */
class ModifyNotificationConfiguration extends Rpc
{

    /**
     * @param array $notificationType
     *
     * @return $this
     */
	public function withNotificationType(array $notificationType)
	{
	    $this->data['NotificationType'] = $notificationType;
		foreach ($notificationType as $i => $iValue) {
			$this->options['query']['NotificationType.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getHpcClusterId()
 * @method $this withHpcClusterId($value)
 * @method string getSecurityOptions()
 * @method $this withSecurityOptions($value)
 * @method string getKeyPairName()
 * @method $this withKeyPairName($value)
 * @method array getSpotPriceLimit()
 * @method string getDeletionProtection()
 * @method $this withDeletionProtection($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getPrivatePoolOptionsMatchCriteria()
 * @method string getHostName()
 * @method $this withHostName($value)
 * @method string getPassword()
 * @method $this withPassword($value)
 * @method string getInstanceDescription()
 * @method $this withInstanceDescription($value)
 * @method string getStorageSetPartitionNumber()
 * @method $this withStorageSetPartitionNumber($value)
 * @method array getCustomPriorities()
 * @method string getSystemDiskAutoSnapshotPolicyId()
 * @method string getPrivatePoolOptionsId()
 * @method string getImageOptionsLoginAsNonRoot()
 * @method string getIpv6AddressCount()
 * @method $this withIpv6AddressCount($value)
 * @method string getCpu()
 * @method $this withCpu($value)
 * @method array getSystemDiskCategories()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getScalingConfigurationName()
 * @method $this withScalingConfigurationName($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getScalingConfigurationId()
 * @method $this withScalingConfigurationId($value)
 * @method string getSpotStrategy()
 * @method $this withSpotStrategy($value)
 * @method string getCpuOptions()
 * @method $this withCpuOptions($value)
 * @method string getSystemDiskBurstingEnabled()
 * @method string getInstanceName()
 * @method $this withInstanceName($value)
 * @method string getInternetChargeType()
 * @method $this withInternetChargeType($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getInternetMaxBandwidthIn()
 * @method $this withInternetMaxBandwidthIn($value)
 * @method array getInstancePatternInfo()
 * @method string getAffinity()
 * @method $this withAffinity($value)
 * @method array getNetworkInterfaces()
 * @method string getImageId()
 * @method $this withImageId($value)
 * @method string getMemory()
 * @method $this withMemory($value)
 * @method string getSpotInterruptionBehavior()
 * @method $this withSpotInterruptionBehavior($value)
 * @method string getIoOptimized()
 * @method $this withIoOptimized($value)
 * @method array getInstanceTypes()
 * @method string getInternetMaxBandwidthOut()
 * @method $this withInternetMaxBandwidthOut($value)
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getSystemDiskKMSKeyId()
 * @method string getSystemDiskCategory()
 * @method string getSystemDiskPerformanceLevel()
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getPasswordInherit()
 * @method $this withPasswordInherit($value)
 * @method string getResourcePoolOptions()
 * @method $this withResourcePoolOptions($value)
 * @method string getImageName()
 * @method $this withImageName($value)
 * @method string getHttpEndpoint()
 * @method $this withHttpEndpoint($value)
 * @method string getDedicatedHostClusterId()
 * @method $this withDedicatedHostClusterId($value)
 * @method string getOverride()
 * @method $this withOverride($value)
 * @method string getSchedulerOptions()
 * @method $this withSchedulerOptions($value)
 * @method string getDeploymentSetId()
 * @method $this withDeploymentSetId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getTenancy()
 * @method $this withTenancy($value)
 * @method string getSystemDiskDiskName()
 * @method string getRamRoleName()
 * @method $this withRamRoleName($value)
 * @method string getSystemDiskEncryptAlgorithm()
 * @method string getDedicatedHostId()
 * @method $this withDedicatedHostId($value)
 * @method string getCreditSpecification()
 * @method $this withCreditSpecification($value)
 * @method string getSpotDuration()
 * @method $this withSpotDuration($value)
 * @method array getSecurityGroupIds()
 * @method array getDataDisk()
 * @method array getInstanceTypeOverride()
 * @method string getSystemDiskProvisionedIops()
 * @method string getLoadBalancerWeight()
 * @method $this withLoadBalancerWeight($value)
 * @method string getStorageSetId()
 * @method $this withStorageSetId($value)
 * @method string getSystemDiskSize()
 * @method string getImageFamily()
 * @method $this withImageFamily($value)
 * @method string getHttpTokens()
 * @method $this withHttpTokens($value)
 * @method string getSystemDiskDescription()
 * @method string getSystemDiskEncrypted()
 */
class ModifyScalingConfiguration extends Rpc
{

    /**
     * @param array $spotPriceLimit
     *
     * @return $this
     */
	public function withSpotPriceLimit(array $spotPriceLimit)
	{
	    $this->data['SpotPriceLimit'] = $spotPriceLimit;
		foreach ($spotPriceLimit as $depth1 => $depth1Value) {
			if(isset($depth1Value['InstanceType'])){
				$this->options['query']['SpotPriceLimit.' . ($depth1 + 1) . '.InstanceType'] = $depth1Value['InstanceType'];
			}
			if(isset($depth1Value['PriceLimit'])){
				$this->options['query']['SpotPriceLimit.' . ($depth1 + 1) . '.PriceLimit'] = $depth1Value['PriceLimit'];
			}
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPrivatePoolOptionsMatchCriteria($value)
    {
        $this->data['PrivatePoolOptionsMatchCriteria'] = $value;
        $this->options['query']['PrivatePoolOptions.MatchCriteria'] = $value;

        return $this;
    }

    /**
     * @param array $customPriorities
     *
     * @return $this
     */
	public function withCustomPriorities(array $customPriorities)
	{
	    $this->data['CustomPriorities'] = $customPriorities;
		foreach ($customPriorities as $depth1 => $depth1Value) {
			if(isset($depth1Value['VswitchId'])){
				$this->options['query']['CustomPriorities.' . ($depth1 + 1) . '.VswitchId'] = $depth1Value['VswitchId'];
			}
			if(isset($depth1Value['InstanceType'])){
				$this->options['query']['CustomPriorities.' . ($depth1 + 1) . '.InstanceType'] = $depth1Value['InstanceType'];
			}
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSystemDiskAutoSnapshotPolicyId($value)
    {
        $this->data['SystemDiskAutoSnapshotPolicyId'] = $value;
        $this->options['query']['SystemDisk.AutoSnapshotPolicyId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPrivatePoolOptionsId($value)
    {
        $this->data['PrivatePoolOptionsId'] = $value;
        $this->options['query']['PrivatePoolOptions.Id'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageOptionsLoginAsNonRoot($value)
    {
        $this->data['ImageOptionsLoginAsNonRoot'] = $value;
        $this->options['query']['ImageOptions.LoginAsNonRoot'] = $value;

        return $this;
    }

    /**
     * @param array $systemDiskCategories
     *
     * @return $this
     */
	public function withSystemDiskCategories(array $systemDiskCategories)
	{
	    $this->data['SystemDiskCategories'] = $systemDiskCategories;
		foreach ($systemDiskCategories as $i => $iValue) {
			$this->options['query']['SystemDiskCategories.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSystemDiskBurstingEnabled($value)
    {
        $this->data['SystemDiskBurstingEnabled'] = $value;
        $this->options['query']['SystemDisk.BurstingEnabled'] = $value;

        return $this;
    }

    /**
     * @param array $instancePatternInfo
     *
     * @return $this
     */
	public function withInstancePatternInfo(array $instancePatternInfo)
	{
	    $this->data['InstancePatternInfo'] = $instancePatternInfo;
		foreach ($instancePatternInfo as $depth1 => $depth1Value) {
			foreach ($depth1Value['InstanceCategories'] as $i => $iValue) {
				$this->options['query']['InstancePatternInfo.' . ($depth1 + 1) . '.InstanceCategories.' . ($i + 1)] = $iValue;
			}
			if(isset($depth1Value['Memory'])){
				$this->options['query']['InstancePatternInfo.' . ($depth1 + 1) . '.Memory'] = $depth1Value['Memory'];
			}
			if(isset($depth1Value['MaximumCpuCoreCount'])){
				$this->options['query']['InstancePatternInfo.' . ($depth1 + 1) . '.MaximumCpuCoreCount'] = $depth1Value['MaximumCpuCoreCount'];
			}
			if(isset($depth1Value['MaxPrice'])){
				$this->options['query']['InstancePatternInfo.' . ($depth1 + 1) . '.MaxPrice'] = $depth1Value['MaxPrice'];
			}
			if(isset($depth1Value['MinimumGpuAmount'])){
				$this->options['query']['InstancePatternInfo.' . ($depth1 + 1) . '.MinimumGpuAmount'] = $depth1Value['MinimumGpuAmount'];
			}
			if(isset($depth1Value['MaximumGpuAmount'])){
				$this->options['query']['InstancePatternInfo.' . ($depth1 + 1) . '.MaximumGpuAmount'] = $depth1Value['MaximumGpuAmount'];
			}
			if(isset($depth1Value['MaximumMemorySize'])){
				$this->options['query']['InstancePatternInfo.' . ($depth1 + 1) . '.MaximumMemorySize'] = $depth1Value['MaximumMemorySize'];
			}
			if(isset($depth1Value['MinimumInitialCredit'])){
				$this->options['query']['InstancePatternInfo.' . ($depth1 + 1) . '.MinimumInitialCredit'] = $depth1Value['MinimumInitialCredit'];
			}
			foreach ($depth1Value['ExcludedInstanceType'] as $i => $iValue) {
				$this->options['query']['InstancePatternInfo.' . ($depth1 + 1) . '.ExcludedInstanceType.' . ($i + 1)] = $iValue;
			}
			if(isset($depth1Value['MinimumEniIpv6AddressQuantity'])){
				$this->options['query']['InstancePatternInfo.' . ($depth1 + 1) . '.MinimumEniIpv6AddressQuantity'] = $depth1Value['MinimumEniIpv6AddressQuantity'];
			}
			if(isset($depth1Value['MinimumEniPrivateIpAddressQuantity'])){
				$this->options['query']['InstancePatternInfo.' . ($depth1 + 1) . '.MinimumEniPrivateIpAddressQuantity'] = $depth1Value['MinimumEniPrivateIpAddressQuantity'];
			}
			if(isset($depth1Value['BurstablePerformance'])){
				$this->options['query']['InstancePatternInfo.' . ($depth1 + 1) . '.BurstablePerformance'] = $depth1Value['BurstablePerformance'];
			}
			foreach ($depth1Value['PhysicalProcessorModels'] as $i => $iValue) {
				$this->options['query']['InstancePatternInfo.' . ($depth1 + 1) . '.PhysicalProcessorModels.' . ($i + 1)] = $iValue;
			}
			if(isset($depth1Value['MinimumCpuCoreCount'])){
				$this->options['query']['InstancePatternInfo.' . ($depth1 + 1) . '.MinimumCpuCoreCount'] = $depth1Value['MinimumCpuCoreCount'];
			}
			foreach ($depth1Value['GpuSpecs'] as $i => $iValue) {
				$this->options['query']['InstancePatternInfo.' . ($depth1 + 1) . '.GpuSpecs.' . ($i + 1)] = $iValue;
			}
			if(isset($depth1Value['MinimumEniQuantity'])){
				$this->options['query']['InstancePatternInfo.' . ($depth1 + 1) . '.MinimumEniQuantity'] = $depth1Value['MinimumEniQuantity'];
			}
			if(isset($depth1Value['MinimumMemorySize'])){
				$this->options['query']['InstancePatternInfo.' . ($depth1 + 1) . '.MinimumMemorySize'] = $depth1Value['MinimumMemorySize'];
			}
			if(isset($depth1Value['Cores'])){
				$this->options['query']['InstancePatternInfo.' . ($depth1 + 1) . '.Cores'] = $depth1Value['Cores'];
			}
			if(isset($depth1Value['InstanceFamilyLevel'])){
				$this->options['query']['InstancePatternInfo.' . ($depth1 + 1) . '.InstanceFamilyLevel'] = $depth1Value['InstanceFamilyLevel'];
			}
			foreach ($depth1Value['InstanceTypeFamilies'] as $i => $iValue) {
				$this->options['query']['InstancePatternInfo.' . ($depth1 + 1) . '.InstanceTypeFamilies.' . ($i + 1)] = $iValue;
			}
			if(isset($depth1Value['MinimumBaselineCredit'])){
				$this->options['query']['InstancePatternInfo.' . ($depth1 + 1) . '.MinimumBaselineCredit'] = $depth1Value['MinimumBaselineCredit'];
			}
			foreach ($depth1Value['CpuArchitectures'] as $i => $iValue) {
				$this->options['query']['InstancePatternInfo.' . ($depth1 + 1) . '.CpuArchitectures.' . ($i + 1)] = $iValue;
			}
			foreach ($depth1Value['Architecture'] as $i => $iValue) {
				$this->options['query']['InstancePatternInfo.' . ($depth1 + 1) . '.Architecture.' . ($i + 1)] = $iValue;
			}
		}

		return $this;
    }

    /**
     * @param array $networkInterfaces
     *
     * @return $this
     */
	public function withNetworkInterfaces(array $networkInterfaces)
	{
	    $this->data['NetworkInterfaces'] = $networkInterfaces;
		foreach ($networkInterfaces as $depth1 => $depth1Value) {
			if(isset($depth1Value['Ipv6AddressCount'])){
				$this->options['query']['NetworkInterfaces.' . ($depth1 + 1) . '.Ipv6AddressCount'] = $depth1Value['Ipv6AddressCount'];
			}
			if(isset($depth1Value['InstanceType'])){
				$this->options['query']['NetworkInterfaces.' . ($depth1 + 1) . '.InstanceType'] = $depth1Value['InstanceType'];
			}
			foreach ($depth1Value['SecurityGroupIds'] as $i => $iValue) {
				$this->options['query']['NetworkInterfaces.' . ($depth1 + 1) . '.SecurityGroupIds.' . ($i + 1)] = $iValue;
			}
			if(isset($depth1Value['NetworkInterfaceTrafficMode'])){
				$this->options['query']['NetworkInterfaces.' . ($depth1 + 1) . '.NetworkInterfaceTrafficMode'] = $depth1Value['NetworkInterfaceTrafficMode'];
			}
		}

		return $this;
    }

    /**
     * @param array $instanceTypes
     *
     * @return $this
     */
	public function withInstanceTypes(array $instanceTypes)
	{
	    $this->data['InstanceTypes'] = $instanceTypes;
		foreach ($instanceTypes as $i => $iValue) {
			$this->options['query']['InstanceTypes.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSystemDiskKMSKeyId($value)
    {
        $this->data['SystemDiskKMSKeyId'] = $value;
        $this->options['query']['SystemDisk.KMSKeyId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSystemDiskCategory($value)
    {
        $this->data['SystemDiskCategory'] = $value;
        $this->options['query']['SystemDisk.Category'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSystemDiskPerformanceLevel($value)
    {
        $this->data['SystemDiskPerformanceLevel'] = $value;
        $this->options['query']['SystemDisk.PerformanceLevel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSystemDiskDiskName($value)
    {
        $this->data['SystemDiskDiskName'] = $value;
        $this->options['query']['SystemDisk.DiskName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSystemDiskEncryptAlgorithm($value)
    {
        $this->data['SystemDiskEncryptAlgorithm'] = $value;
        $this->options['query']['SystemDisk.EncryptAlgorithm'] = $value;

        return $this;
    }

    /**
     * @param array $securityGroupIds
     *
     * @return $this
     */
	public function withSecurityGroupIds(array $securityGroupIds)
	{
	    $this->data['SecurityGroupIds'] = $securityGroupIds;
		foreach ($securityGroupIds as $i => $iValue) {
			$this->options['query']['SecurityGroupIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $dataDisk
     *
     * @return $this
     */
	public function withDataDisk(array $dataDisk)
	{
	    $this->data['DataDisk'] = $dataDisk;
		foreach ($dataDisk as $depth1 => $depth1Value) {
			if(isset($depth1Value['SnapshotId'])){
				$this->options['query']['DataDisk.' . ($depth1 + 1) . '.SnapshotId'] = $depth1Value['SnapshotId'];
			}
			if(isset($depth1Value['PerformanceLevel'])){
				$this->options['query']['DataDisk.' . ($depth1 + 1) . '.PerformanceLevel'] = $depth1Value['PerformanceLevel'];
			}
			if(isset($depth1Value['AutoSnapshotPolicyId'])){
				$this->options['query']['DataDisk.' . ($depth1 + 1) . '.AutoSnapshotPolicyId'] = $depth1Value['AutoSnapshotPolicyId'];
			}
			if(isset($depth1Value['Description'])){
				$this->options['query']['DataDisk.' . ($depth1 + 1) . '.Description'] = $depth1Value['Description'];
			}
			if(isset($depth1Value['BurstingEnabled'])){
				$this->options['query']['DataDisk.' . ($depth1 + 1) . '.BurstingEnabled'] = $depth1Value['BurstingEnabled'];
			}
			if(isset($depth1Value['DiskName'])){
				$this->options['query']['DataDisk.' . ($depth1 + 1) . '.DiskName'] = $depth1Value['DiskName'];
			}
			if(isset($depth1Value['ProvisionedIops'])){
				$this->options['query']['DataDisk.' . ($depth1 + 1) . '.ProvisionedIops'] = $depth1Value['ProvisionedIops'];
			}
			if(isset($depth1Value['Encrypted'])){
				$this->options['query']['DataDisk.' . ($depth1 + 1) . '.Encrypted'] = $depth1Value['Encrypted'];
			}
			if(isset($depth1Value['Size'])){
				$this->options['query']['DataDisk.' . ($depth1 + 1) . '.Size'] = $depth1Value['Size'];
			}
			foreach ($depth1Value['Categories'] as $i => $iValue) {
				$this->options['query']['DataDisk.' . ($depth1 + 1) . '.Categories.' . ($i + 1)] = $iValue;
			}
			if(isset($depth1Value['Category'])){
				$this->options['query']['DataDisk.' . ($depth1 + 1) . '.Category'] = $depth1Value['Category'];
			}
			if(isset($depth1Value['KMSKeyId'])){
				$this->options['query']['DataDisk.' . ($depth1 + 1) . '.KMSKeyId'] = $depth1Value['KMSKeyId'];
			}
			if(isset($depth1Value['Device'])){
				$this->options['query']['DataDisk.' . ($depth1 + 1) . '.Device'] = $depth1Value['Device'];
			}
			if(isset($depth1Value['DeleteWithInstance'])){
				$this->options['query']['DataDisk.' . ($depth1 + 1) . '.DeleteWithInstance'] = $depth1Value['DeleteWithInstance'];
			}
		}

		return $this;
    }

    /**
     * @param array $instanceTypeOverride
     *
     * @return $this
     */
	public function withInstanceTypeOverride(array $instanceTypeOverride)
	{
	    $this->data['InstanceTypeOverride'] = $instanceTypeOverride;
		foreach ($instanceTypeOverride as $depth1 => $depth1Value) {
			if(isset($depth1Value['WeightedCapacity'])){
				$this->options['query']['InstanceTypeOverride.' . ($depth1 + 1) . '.WeightedCapacity'] = $depth1Value['WeightedCapacity'];
			}
			if(isset($depth1Value['InstanceType'])){
				$this->options['query']['InstanceTypeOverride.' . ($depth1 + 1) . '.InstanceType'] = $depth1Value['InstanceType'];
			}
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSystemDiskProvisionedIops($value)
    {
        $this->data['SystemDiskProvisionedIops'] = $value;
        $this->options['query']['SystemDisk.ProvisionedIops'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSystemDiskSize($value)
    {
        $this->data['SystemDiskSize'] = $value;
        $this->options['query']['SystemDisk.Size'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSystemDiskDescription($value)
    {
        $this->data['SystemDiskDescription'] = $value;
        $this->options['query']['SystemDisk.Description'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSystemDiskEncrypted($value)
    {
        $this->data['SystemDiskEncrypted'] = $value;
        $this->options['query']['SystemDisk.Encrypted'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAzBalance()
 * @method $this withAzBalance($value)
 * @method array getVSwitchIds()
 * @method string getMaxInstanceLifetime()
 * @method $this withMaxInstanceLifetime($value)
 * @method string getActiveScalingConfigurationId()
 * @method $this withActiveScalingConfigurationId($value)
 * @method string getSpotInstanceRemedy()
 * @method $this withSpotInstanceRemedy($value)
 * @method string getScaleOutAmountCheck()
 * @method $this withScaleOutAmountCheck($value)
 * @method string getCustomPolicyARN()
 * @method $this withCustomPolicyARN($value)
 * @method string getStopInstanceTimeout()
 * @method $this withStopInstanceTimeout($value)
 * @method string getDefaultCooldown()
 * @method $this withDefaultCooldown($value)
 * @method array getHealthCheckTypes()
 * @method string getMultiAZPolicy()
 * @method $this withMultiAZPolicy($value)
 * @method string getLaunchTemplateId()
 * @method $this withLaunchTemplateId($value)
 * @method string getDesiredCapacity()
 * @method $this withDesiredCapacity($value)
 * @method array getLaunchTemplateOverride()
 * @method string getCompensateWithOnDemand()
 * @method $this withCompensateWithOnDemand($value)
 * @method string getCapacityOptions()
 * @method $this withCapacityOptions($value)
 * @method string getMinSize()
 * @method $this withMinSize($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getMaxSize()
 * @method $this withMaxSize($value)
 * @method string getScalingGroupId()
 * @method $this withScalingGroupId($value)
 * @method string getOnDemandBaseCapacity()
 * @method $this withOnDemandBaseCapacity($value)
 * @method string getOnDemandPercentageAboveBaseCapacity()
 * @method $this withOnDemandPercentageAboveBaseCapacity($value)
 * @method string getSpotAllocationStrategy()
 * @method $this withSpotAllocationStrategy($value)
 * @method string getDisableDesiredCapacity()
 * @method $this withDisableDesiredCapacity($value)
 * @method string getRemovalPolicy1()
 * @method string getRemovalPolicy2()
 * @method string getRemovalPolicy3()
 * @method string getHealthCheckType()
 * @method $this withHealthCheckType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getScalingGroupName()
 * @method $this withScalingGroupName($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getSpotInstancePools()
 * @method $this withSpotInstancePools($value)
 * @method string getGroupDeletionProtection()
 * @method $this withGroupDeletionProtection($value)
 * @method string getLaunchTemplateVersion()
 * @method $this withLaunchTemplateVersion($value)
 * @method string getScalingPolicy()
 * @method $this withScalingPolicy($value)
 * @method string getAllocationStrategy()
 * @method $this withAllocationStrategy($value)
 */
class ModifyScalingGroup extends Rpc
{

    /**
     * @param array $vSwitchIds
     *
     * @return $this
     */
	public function withVSwitchIds(array $vSwitchIds)
	{
	    $this->data['VSwitchIds'] = $vSwitchIds;
		foreach ($vSwitchIds as $i => $iValue) {
			$this->options['query']['VSwitchIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $healthCheckTypes
     *
     * @return $this
     */
	public function withHealthCheckTypes(array $healthCheckTypes)
	{
	    $this->data['HealthCheckTypes'] = $healthCheckTypes;
		foreach ($healthCheckTypes as $i => $iValue) {
			$this->options['query']['HealthCheckTypes.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $launchTemplateOverride
     *
     * @return $this
     */
	public function withLaunchTemplateOverride(array $launchTemplateOverride)
	{
	    $this->data['LaunchTemplateOverride'] = $launchTemplateOverride;
		foreach ($launchTemplateOverride as $depth1 => $depth1Value) {
			if(isset($depth1Value['WeightedCapacity'])){
				$this->options['query']['LaunchTemplateOverride.' . ($depth1 + 1) . '.WeightedCapacity'] = $depth1Value['WeightedCapacity'];
			}
			if(isset($depth1Value['InstanceType'])){
				$this->options['query']['LaunchTemplateOverride.' . ($depth1 + 1) . '.InstanceType'] = $depth1Value['InstanceType'];
			}
			if(isset($depth1Value['SpotPriceLimit'])){
				$this->options['query']['LaunchTemplateOverride.' . ($depth1 + 1) . '.SpotPriceLimit'] = $depth1Value['SpotPriceLimit'];
			}
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRemovalPolicy1($value)
    {
        $this->data['RemovalPolicy1'] = $value;
        $this->options['query']['RemovalPolicy.1'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRemovalPolicy2($value)
    {
        $this->data['RemovalPolicy2'] = $value;
        $this->options['query']['RemovalPolicy.2'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRemovalPolicy3($value)
    {
        $this->data['RemovalPolicy3'] = $value;
        $this->options['query']['RemovalPolicy.3'] = $value;

        return $this;
    }
}

/**
 * @method string getMetricType()
 * @method $this withMetricType($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method array getAlarmDimension()
 * @method array getStepAdjustment()
 * @method string getDisableScaleIn()
 * @method $this withDisableScaleIn($value)
 * @method string getScalingRuleId()
 * @method $this withScalingRuleId($value)
 * @method string getInitialMaxSize()
 * @method $this withInitialMaxSize($value)
 * @method string getScalingRuleName()
 * @method $this withScalingRuleName($value)
 * @method string getHybridMonitorNamespace()
 * @method $this withHybridMonitorNamespace($value)
 * @method string getCooldown()
 * @method $this withCooldown($value)
 * @method string getPredictiveValueBehavior()
 * @method $this withPredictiveValueBehavior($value)
 * @method string getScaleInEvaluationCount()
 * @method $this withScaleInEvaluationCount($value)
 * @method string getMetricName()
 * @method $this withMetricName($value)
 * @method string getPredictiveScalingMode()
 * @method $this withPredictiveScalingMode($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getAdjustmentValue()
 * @method $this withAdjustmentValue($value)
 * @method string getEstimatedInstanceWarmup()
 * @method $this withEstimatedInstanceWarmup($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getPredictiveTaskBufferTime()
 * @method $this withPredictiveTaskBufferTime($value)
 * @method string getAdjustmentType()
 * @method $this withAdjustmentType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPredictiveValueBuffer()
 * @method $this withPredictiveValueBuffer($value)
 * @method array getHybridMetrics()
 * @method string getScaleOutEvaluationCount()
 * @method $this withScaleOutEvaluationCount($value)
 * @method string getMinAdjustmentMagnitude()
 * @method $this withMinAdjustmentMagnitude($value)
 * @method string getTargetValue()
 * @method $this withTargetValue($value)
 */
class ModifyScalingRule extends Rpc
{

    /**
     * @param array $alarmDimension
     *
     * @return $this
     */
	public function withAlarmDimension(array $alarmDimension)
	{
	    $this->data['AlarmDimension'] = $alarmDimension;
		foreach ($alarmDimension as $depth1 => $depth1Value) {
			if(isset($depth1Value['DimensionValue'])){
				$this->options['query']['AlarmDimension.' . ($depth1 + 1) . '.DimensionValue'] = $depth1Value['DimensionValue'];
			}
			if(isset($depth1Value['DimensionKey'])){
				$this->options['query']['AlarmDimension.' . ($depth1 + 1) . '.DimensionKey'] = $depth1Value['DimensionKey'];
			}
		}

		return $this;
    }

    /**
     * @param array $stepAdjustment
     *
     * @return $this
     */
	public function withStepAdjustment(array $stepAdjustment)
	{
	    $this->data['StepAdjustment'] = $stepAdjustment;
		foreach ($stepAdjustment as $depth1 => $depth1Value) {
			if(isset($depth1Value['MetricIntervalUpperBound'])){
				$this->options['query']['StepAdjustment.' . ($depth1 + 1) . '.MetricIntervalUpperBound'] = $depth1Value['MetricIntervalUpperBound'];
			}
			if(isset($depth1Value['MetricIntervalLowerBound'])){
				$this->options['query']['StepAdjustment.' . ($depth1 + 1) . '.MetricIntervalLowerBound'] = $depth1Value['MetricIntervalLowerBound'];
			}
			if(isset($depth1Value['ScalingAdjustment'])){
				$this->options['query']['StepAdjustment.' . ($depth1 + 1) . '.ScalingAdjustment'] = $depth1Value['ScalingAdjustment'];
			}
		}

		return $this;
    }

    /**
     * @param array $hybridMetrics
     *
     * @return $this
     */
	public function withHybridMetrics(array $hybridMetrics)
	{
	    $this->data['HybridMetrics'] = $hybridMetrics;
		foreach ($hybridMetrics as $depth1 => $depth1Value) {
			if(isset($depth1Value['Statistic'])){
				$this->options['query']['HybridMetrics.' . ($depth1 + 1) . '.Statistic'] = $depth1Value['Statistic'];
			}
			if(isset($depth1Value['Expression'])){
				$this->options['query']['HybridMetrics.' . ($depth1 + 1) . '.Expression'] = $depth1Value['Expression'];
			}
			if(isset($depth1Value['Id'])){
				$this->options['query']['HybridMetrics.' . ($depth1 + 1) . '.Id'] = $depth1Value['Id'];
			}
			if(isset($depth1Value['MetricName'])){
				$this->options['query']['HybridMetrics.' . ($depth1 + 1) . '.MetricName'] = $depth1Value['MetricName'];
			}
			foreach ($depth1Value['Dimensions'] as $depth2 => $depth2Value) {
				if(isset($depth2Value['DimensionValue'])){
					$this->options['query']['HybridMetrics.' . ($depth1 + 1) . '.Dimensions.' . ($depth2 + 1) . '.DimensionValue'] = $depth2Value['DimensionValue'];
				}
				if(isset($depth2Value['DimensionKey'])){
					$this->options['query']['HybridMetrics.' . ($depth1 + 1) . '.Dimensions.' . ($depth2 + 1) . '.DimensionKey'] = $depth2Value['DimensionKey'];
				}
			}
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getScheduledAction()
 * @method $this withScheduledAction($value)
 * @method string getMaxValue()
 * @method $this withMaxValue($value)
 * @method string getScalingGroupId()
 * @method $this withScalingGroupId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getRecurrenceEndTime()
 * @method $this withRecurrenceEndTime($value)
 * @method string getLaunchTime()
 * @method $this withLaunchTime($value)
 * @method string getDesiredCapacity()
 * @method $this withDesiredCapacity($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRecurrenceValue()
 * @method $this withRecurrenceValue($value)
 * @method string getLaunchExpirationTime()
 * @method $this withLaunchExpirationTime($value)
 * @method string getMinValue()
 * @method $this withMinValue($value)
 * @method string getScheduledTaskName()
 * @method $this withScheduledTaskName($value)
 * @method string getTaskEnabled()
 * @method $this withTaskEnabled($value)
 * @method string getScheduledTaskId()
 * @method $this withScheduledTaskId($value)
 * @method string getRecurrenceType()
 * @method $this withRecurrenceType($value)
 */
class ModifyScheduledTask extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getScalingGroupId()
 * @method $this withScalingGroupId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class RebalanceInstances extends Rpc
{
}

/**
 * @method string getLifecycleActionToken()
 * @method string getHeartbeatTimeout()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getLifecycleHookId()
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class RecordLifecycleActionHeartbeat extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLifecycleActionToken($value)
    {
        $this->data['LifecycleActionToken'] = $value;
        $this->options['query']['lifecycleActionToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withHeartbeatTimeout($value)
    {
        $this->data['HeartbeatTimeout'] = $value;
        $this->options['query']['heartbeatTimeout'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLifecycleHookId($value)
    {
        $this->data['LifecycleHookId'] = $value;
        $this->options['query']['lifecycleHookId'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getScalingGroupId()
 * @method $this withScalingGroupId($value)
 * @method string getLifecycleHookContext()
 * @method $this withLifecycleHookContext($value)
 * @method string getDecreaseDesiredCapacity()
 * @method $this withDecreaseDesiredCapacity($value)
 * @method string getIgnoreInvalidInstance()
 * @method $this withIgnoreInvalidInstance($value)
 * @method string getStopInstanceTimeout()
 * @method $this withStopInstanceTimeout($value)
 * @method string getRemovePolicy()
 * @method $this withRemovePolicy($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method array getInstanceId()
 */
class RemoveInstances extends Rpc
{

    /**
     * @param array $instanceId
     *
     * @return $this
     */
	public function withInstanceId(array $instanceId)
	{
	    $this->data['InstanceId'] = $instanceId;
		foreach ($instanceId as $i => $iValue) {
			$this->options['query']['InstanceId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getScalingGroupId()
 * @method $this withScalingGroupId($value)
 * @method array getProcess()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ResumeProcesses extends Rpc
{

    /**
     * @param array $process
     *
     * @return $this
     */
	public function withProcess(array $process)
	{
	    $this->data['Process'] = $process;
		foreach ($process as $i => $iValue) {
			$this->options['query']['Process.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getScalingGroupId()
 * @method $this withScalingGroupId($value)
 * @method string getLifecycleHookContext()
 * @method $this withLifecycleHookContext($value)
 * @method array getInstanceType()
 * @method string getSyncActivity()
 * @method $this withSyncActivity($value)
 * @method array getAllocation()
 * @method string getAdjustmentValue()
 * @method $this withAdjustmentValue($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getActivityMetadata()
 * @method $this withActivityMetadata($value)
 * @method string getAdjustmentType()
 * @method $this withAdjustmentType($value)
 * @method string getParallelTask()
 * @method $this withParallelTask($value)
 * @method string getOverrides()
 * @method $this withOverrides($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSpotStrategy()
 * @method $this withSpotStrategy($value)
 * @method array getVSwitchId()
 * @method string getMinAdjustmentMagnitude()
 * @method $this withMinAdjustmentMagnitude($value)
 */
class ScaleWithAdjustment extends Rpc
{

    /**
     * @param array $instanceType
     *
     * @return $this
     */
	public function withInstanceType(array $instanceType)
	{
	    $this->data['InstanceType'] = $instanceType;
		foreach ($instanceType as $i => $iValue) {
			$this->options['query']['InstanceType.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $allocation
     *
     * @return $this
     */
	public function withAllocation(array $allocation)
	{
	    $this->data['Allocation'] = $allocation;
		foreach ($allocation as $depth1 => $depth1Value) {
			foreach ($depth1Value['VSwitchId'] as $i => $iValue) {
				$this->options['query']['Allocation.' . ($depth1 + 1) . '.VSwitchId.' . ($i + 1)] = $iValue;
			}
			if(isset($depth1Value['Count'])){
				$this->options['query']['Allocation.' . ($depth1 + 1) . '.Count'] = $depth1Value['Count'];
			}
		}

		return $this;
    }

    /**
     * @param array $vSwitchId
     *
     * @return $this
     */
	public function withVSwitchId(array $vSwitchId)
	{
	    $this->data['VSwitchId'] = $vSwitchId;
		foreach ($vSwitchId as $i => $iValue) {
			$this->options['query']['VSwitchId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getScalingGroupId()
 * @method $this withScalingGroupId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getGroupDeletionProtection()
 * @method $this withGroupDeletionProtection($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class SetGroupDeletionProtection extends Rpc
{
}

/**
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getHealthStatus()
 * @method $this withHealthStatus($value)
 */
class SetInstanceHealth extends Rpc
{
}

/**
 * @method string getScalingGroupId()
 * @method $this withScalingGroupId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method array getInstanceId()
 * @method string getProtectedFromScaleIn()
 * @method $this withProtectedFromScaleIn($value)
 */
class SetInstancesProtection extends Rpc
{

    /**
     * @param array $instanceId
     *
     * @return $this
     */
	public function withInstanceId(array $instanceId)
	{
	    $this->data['InstanceId'] = $instanceId;
		foreach ($instanceId as $i => $iValue) {
			$this->options['query']['InstanceId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getScalingGroupId()
 * @method $this withScalingGroupId($value)
 * @method array getProcess()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class SuspendProcesses extends Rpc
{

    /**
     * @param array $process
     *
     * @return $this
     */
	public function withProcess(array $process)
	{
	    $this->data['Process'] = $process;
		foreach ($process as $i => $iValue) {
			$this->options['query']['Process.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method array getTag()
 * @method array getResourceId()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 */
class TagResources extends Rpc
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
			if(isset($depth1Value['Propagate'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Propagate'] = $depth1Value['Propagate'];
			}
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }

    /**
     * @param array $resourceId
     *
     * @return $this
     */
	public function withResourceId(array $resourceId)
	{
	    $this->data['ResourceId'] = $resourceId;
		foreach ($resourceId as $i => $iValue) {
			$this->options['query']['ResourceId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getAll()
 * @method $this withAll($value)
 * @method array getResourceId()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method array getTagKey()
 */
class UntagResources extends Rpc
{

    /**
     * @param array $resourceId
     *
     * @return $this
     */
	public function withResourceId(array $resourceId)
	{
	    $this->data['ResourceId'] = $resourceId;
		foreach ($resourceId as $i => $iValue) {
			$this->options['query']['ResourceId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $tagKey
     *
     * @return $this
     */
	public function withTagKey(array $tagKey)
	{
	    $this->data['TagKey'] = $tagKey;
		foreach ($tagKey as $i => $iValue) {
			$this->options['query']['TagKey.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getUid()
 * @method $this withUid($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getOnlyCheck()
 * @method $this withOnlyCheck($value)
 */
class VerifyAuthentication extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class VerifyUser extends Rpc
{
}
