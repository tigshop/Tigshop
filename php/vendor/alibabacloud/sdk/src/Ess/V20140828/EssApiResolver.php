<?php

namespace AlibabaCloud\Ess\V20140828;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AttachDBInstances attachDBInstances(array $options = [])
 * @method AttachInstances attachInstances(array $options = [])
 * @method AttachLoadBalancers attachLoadBalancers(array $options = [])
 * @method AttachVServerGroups attachVServerGroups(array $options = [])
 * @method CompleteLifecycleAction completeLifecycleAction(array $options = [])
 * @method CreateAlarm createAlarm(array $options = [])
 * @method CreateLifecycleHook createLifecycleHook(array $options = [])
 * @method CreateNotificationConfiguration createNotificationConfiguration(array $options = [])
 * @method CreateScalingConfiguration createScalingConfiguration(array $options = [])
 * @method CreateScalingGroup createScalingGroup(array $options = [])
 * @method CreateScalingRule createScalingRule(array $options = [])
 * @method CreateScheduledTask createScheduledTask(array $options = [])
 * @method DeactivateScalingConfiguration deactivateScalingConfiguration(array $options = [])
 * @method DeleteAlarm deleteAlarm(array $options = [])
 * @method DeleteLifecycleHook deleteLifecycleHook(array $options = [])
 * @method DeleteNotificationConfiguration deleteNotificationConfiguration(array $options = [])
 * @method DeleteScalingConfiguration deleteScalingConfiguration(array $options = [])
 * @method DeleteScalingGroup deleteScalingGroup(array $options = [])
 * @method DeleteScalingRule deleteScalingRule(array $options = [])
 * @method DeleteScheduledTask deleteScheduledTask(array $options = [])
 * @method DescribeAlarms describeAlarms(array $options = [])
 * @method DescribeLifecycleActions describeLifecycleActions(array $options = [])
 * @method DescribeLifecycleHooks describeLifecycleHooks(array $options = [])
 * @method DescribeLimitation describeLimitation(array $options = [])
 * @method DescribeNotificationConfigurations describeNotificationConfigurations(array $options = [])
 * @method DescribeNotificationTypes describeNotificationTypes(array $options = [])
 * @method DescribeRegions describeRegions(array $options = [])
 * @method DescribeScalingActivities describeScalingActivities(array $options = [])
 * @method DescribeScalingActivityDetail describeScalingActivityDetail(array $options = [])
 * @method DescribeScalingConfigurations describeScalingConfigurations(array $options = [])
 * @method DescribeScalingGroups describeScalingGroups(array $options = [])
 * @method DescribeScalingInstances describeScalingInstances(array $options = [])
 * @method DescribeScalingRules describeScalingRules(array $options = [])
 * @method DescribeScheduledTasks describeScheduledTasks(array $options = [])
 * @method DetachDBInstances detachDBInstances(array $options = [])
 * @method DetachInstances detachInstances(array $options = [])
 * @method DetachLoadBalancers detachLoadBalancers(array $options = [])
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
 * @method string getLoadBalancerWeight6()
 * @method string getLoadBalancerWeight11()
 * @method string getLoadBalancerWeight7()
 * @method string getLoadBalancerWeight12()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getLoadBalancerWeight8()
 * @method string getLoadBalancerWeight9()
 * @method string getLoadBalancerWeight10()
 * @method string getLoadBalancerWeight2()
 * @method string getLoadBalancerWeight15()
 * @method string getLoadBalancerWeight3()
 * @method string getLoadBalancerWeight16()
 * @method string getLoadBalancerWeight4()
 * @method string getLoadBalancerWeight13()
 * @method string getLoadBalancerWeight5()
 * @method string getLoadBalancerWeight14()
 * @method string getLoadBalancerWeight1()
 * @method string getInstanceId1()
 * @method string getLoadBalancerWeight20()
 * @method string getInstanceId3()
 * @method string getInstanceId2()
 * @method string getInstanceId5()
 * @method string getInstanceId4()
 * @method string getInstanceId7()
 * @method string getInstanceId6()
 * @method string getInstanceId9()
 * @method string getInstanceId8()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getLoadBalancerWeight19()
 * @method string getLoadBalancerWeight17()
 * @method string getLoadBalancerWeight18()
 * @method string getInstanceId10()
 * @method string getInstanceId12()
 * @method string getInstanceId11()
 * @method string getScalingGroupId()
 * @method $this withScalingGroupId($value)
 * @method string getInstanceId20()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEntrusted()
 * @method $this withEntrusted($value)
 * @method string getInstanceId18()
 * @method string getInstanceId17()
 * @method string getInstanceId19()
 * @method string getInstanceId14()
 * @method string getInstanceId13()
 * @method string getInstanceId16()
 * @method string getInstanceId15()
 */
class AttachInstances extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLoadBalancerWeight6($value)
    {
        $this->data['LoadBalancerWeight6'] = $value;
        $this->options['query']['LoadBalancerWeight.6'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLoadBalancerWeight11($value)
    {
        $this->data['LoadBalancerWeight11'] = $value;
        $this->options['query']['LoadBalancerWeight.11'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLoadBalancerWeight7($value)
    {
        $this->data['LoadBalancerWeight7'] = $value;
        $this->options['query']['LoadBalancerWeight.7'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLoadBalancerWeight12($value)
    {
        $this->data['LoadBalancerWeight12'] = $value;
        $this->options['query']['LoadBalancerWeight.12'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLoadBalancerWeight8($value)
    {
        $this->data['LoadBalancerWeight8'] = $value;
        $this->options['query']['LoadBalancerWeight.8'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLoadBalancerWeight9($value)
    {
        $this->data['LoadBalancerWeight9'] = $value;
        $this->options['query']['LoadBalancerWeight.9'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLoadBalancerWeight10($value)
    {
        $this->data['LoadBalancerWeight10'] = $value;
        $this->options['query']['LoadBalancerWeight.10'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLoadBalancerWeight2($value)
    {
        $this->data['LoadBalancerWeight2'] = $value;
        $this->options['query']['LoadBalancerWeight.2'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLoadBalancerWeight15($value)
    {
        $this->data['LoadBalancerWeight15'] = $value;
        $this->options['query']['LoadBalancerWeight.15'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLoadBalancerWeight3($value)
    {
        $this->data['LoadBalancerWeight3'] = $value;
        $this->options['query']['LoadBalancerWeight.3'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLoadBalancerWeight16($value)
    {
        $this->data['LoadBalancerWeight16'] = $value;
        $this->options['query']['LoadBalancerWeight.16'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLoadBalancerWeight4($value)
    {
        $this->data['LoadBalancerWeight4'] = $value;
        $this->options['query']['LoadBalancerWeight.4'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLoadBalancerWeight13($value)
    {
        $this->data['LoadBalancerWeight13'] = $value;
        $this->options['query']['LoadBalancerWeight.13'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLoadBalancerWeight5($value)
    {
        $this->data['LoadBalancerWeight5'] = $value;
        $this->options['query']['LoadBalancerWeight.5'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLoadBalancerWeight14($value)
    {
        $this->data['LoadBalancerWeight14'] = $value;
        $this->options['query']['LoadBalancerWeight.14'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLoadBalancerWeight1($value)
    {
        $this->data['LoadBalancerWeight1'] = $value;
        $this->options['query']['LoadBalancerWeight.1'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId1($value)
    {
        $this->data['InstanceId1'] = $value;
        $this->options['query']['InstanceId.1'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLoadBalancerWeight20($value)
    {
        $this->data['LoadBalancerWeight20'] = $value;
        $this->options['query']['LoadBalancerWeight.20'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId3($value)
    {
        $this->data['InstanceId3'] = $value;
        $this->options['query']['InstanceId.3'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId2($value)
    {
        $this->data['InstanceId2'] = $value;
        $this->options['query']['InstanceId.2'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId5($value)
    {
        $this->data['InstanceId5'] = $value;
        $this->options['query']['InstanceId.5'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId4($value)
    {
        $this->data['InstanceId4'] = $value;
        $this->options['query']['InstanceId.4'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId7($value)
    {
        $this->data['InstanceId7'] = $value;
        $this->options['query']['InstanceId.7'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId6($value)
    {
        $this->data['InstanceId6'] = $value;
        $this->options['query']['InstanceId.6'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId9($value)
    {
        $this->data['InstanceId9'] = $value;
        $this->options['query']['InstanceId.9'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId8($value)
    {
        $this->data['InstanceId8'] = $value;
        $this->options['query']['InstanceId.8'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLoadBalancerWeight19($value)
    {
        $this->data['LoadBalancerWeight19'] = $value;
        $this->options['query']['LoadBalancerWeight.19'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLoadBalancerWeight17($value)
    {
        $this->data['LoadBalancerWeight17'] = $value;
        $this->options['query']['LoadBalancerWeight.17'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLoadBalancerWeight18($value)
    {
        $this->data['LoadBalancerWeight18'] = $value;
        $this->options['query']['LoadBalancerWeight.18'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId10($value)
    {
        $this->data['InstanceId10'] = $value;
        $this->options['query']['InstanceId.10'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId12($value)
    {
        $this->data['InstanceId12'] = $value;
        $this->options['query']['InstanceId.12'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId11($value)
    {
        $this->data['InstanceId11'] = $value;
        $this->options['query']['InstanceId.11'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId20($value)
    {
        $this->data['InstanceId20'] = $value;
        $this->options['query']['InstanceId.20'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId18($value)
    {
        $this->data['InstanceId18'] = $value;
        $this->options['query']['InstanceId.18'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId17($value)
    {
        $this->data['InstanceId17'] = $value;
        $this->options['query']['InstanceId.17'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId19($value)
    {
        $this->data['InstanceId19'] = $value;
        $this->options['query']['InstanceId.19'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId14($value)
    {
        $this->data['InstanceId14'] = $value;
        $this->options['query']['InstanceId.14'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId13($value)
    {
        $this->data['InstanceId13'] = $value;
        $this->options['query']['InstanceId.13'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId16($value)
    {
        $this->data['InstanceId16'] = $value;
        $this->options['query']['InstanceId.16'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId15($value)
    {
        $this->data['InstanceId15'] = $value;
        $this->options['query']['InstanceId.15'] = $value;

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
 * @method array getLoadBalancer()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class AttachLoadBalancers extends Rpc
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
 * @method string getSecurityEnhancementStrategy()
 * @method $this withSecurityEnhancementStrategy($value)
 * @method string getKeyPairName()
 * @method $this withKeyPairName($value)
 * @method array getSpotPriceLimit()
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getPrivatePoolOptionsMatchCriteria()
 * @method string getHostName()
 * @method $this withHostName($value)
 * @method string getPassword()
 * @method $this withPassword($value)
 * @method string getInstanceDescription()
 * @method $this withInstanceDescription($value)
 * @method string getSystemDiskAutoSnapshotPolicyId()
 * @method string getPrivatePoolOptionsId()
 * @method string getIpv6AddressCount()
 * @method $this withIpv6AddressCount($value)
 * @method string getCpu()
 * @method $this withCpu($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getScalingConfigurationName()
 * @method $this withScalingConfigurationName($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getSpotStrategy()
 * @method $this withSpotStrategy($value)
 * @method string getInstanceName()
 * @method $this withInstanceName($value)
 * @method string getInternetChargeType()
 * @method $this withInternetChargeType($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getInternetMaxBandwidthIn()
 * @method $this withInternetMaxBandwidthIn($value)
 * @method string getAffinity()
 * @method $this withAffinity($value)
 * @method string getImageId()
 * @method $this withImageId($value)
 * @method string getMemory()
 * @method $this withMemory($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getScalingGroupId()
 * @method $this withScalingGroupId($value)
 * @method array getInstanceTypes()
 * @method string getIoOptimized()
 * @method $this withIoOptimized($value)
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getInternetMaxBandwidthOut()
 * @method $this withInternetMaxBandwidthOut($value)
 * @method string getSystemDiskCategory()
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getPasswordInherit()
 * @method $this withPasswordInherit($value)
 * @method string getImageName()
 * @method $this withImageName($value)
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
 * @method string getDedicatedHostId()
 * @method $this withDedicatedHostId($value)
 * @method string getCreditSpecification()
 * @method $this withCreditSpecification($value)
 * @method array getSecurityGroupIds()
 * @method array getDataDisk()
 * @method string getLoadBalancerWeight()
 * @method $this withLoadBalancerWeight($value)
 * @method string getSystemDiskSize()
 * @method string getImageFamily()
 * @method $this withImageFamily($value)
 * @method string getSystemDiskDescription()
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
    public function withSystemDiskDiskName($value)
    {
        $this->data['SystemDiskDiskName'] = $value;
        $this->options['query']['SystemDisk.DiskName'] = $value;

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
			if(isset($depth1Value['DiskName'])){
				$this->options['query']['DataDisk.' . ($depth1 + 1) . '.DiskName'] = $depth1Value['DiskName'];
			}
			if(isset($depth1Value['SnapshotId'])){
				$this->options['query']['DataDisk.' . ($depth1 + 1) . '.SnapshotId'] = $depth1Value['SnapshotId'];
			}
			if(isset($depth1Value['Size'])){
				$this->options['query']['DataDisk.' . ($depth1 + 1) . '.Size'] = $depth1Value['Size'];
			}
			if(isset($depth1Value['Encrypted'])){
				$this->options['query']['DataDisk.' . ($depth1 + 1) . '.Encrypted'] = $depth1Value['Encrypted'];
			}
			if(isset($depth1Value['AutoSnapshotPolicyId'])){
				$this->options['query']['DataDisk.' . ($depth1 + 1) . '.AutoSnapshotPolicyId'] = $depth1Value['AutoSnapshotPolicyId'];
			}
			if(isset($depth1Value['Description'])){
				$this->options['query']['DataDisk.' . ($depth1 + 1) . '.Description'] = $depth1Value['Description'];
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
}

/**
 * @method array getVSwitchIds()
 * @method string getSpotInstanceRemedy()
 * @method $this withSpotInstanceRemedy($value)
 * @method string getScaleOutAmountCheck()
 * @method $this withScaleOutAmountCheck($value)
 * @method array getTag()
 * @method string getDefaultCooldown()
 * @method $this withDefaultCooldown($value)
 * @method string getMultiAZPolicy()
 * @method $this withMultiAZPolicy($value)
 * @method string getDBInstanceIds()
 * @method $this withDBInstanceIds($value)
 * @method string getLaunchTemplateId()
 * @method $this withLaunchTemplateId($value)
 * @method string getDesiredCapacity()
 * @method $this withDesiredCapacity($value)
 * @method string getCompensateWithOnDemand()
 * @method $this withCompensateWithOnDemand($value)
 * @method string getMinSize()
 * @method $this withMinSize($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
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
 * @method string getOnDemandBaseCapacity()
 * @method $this withOnDemandBaseCapacity($value)
 * @method string getOnDemandPercentageAboveBaseCapacity()
 * @method $this withOnDemandPercentageAboveBaseCapacity($value)
 * @method string getRemovalPolicy1()
 * @method string getRemovalPolicy2()
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
 * @method array getStepAdjustment()
 * @method string getScalingGroupId()
 * @method $this withScalingGroupId($value)
 * @method string getDisableScaleIn()
 * @method $this withDisableScaleIn($value)
 * @method string getInitialMaxSize()
 * @method $this withInitialMaxSize($value)
 * @method string getScalingRuleName()
 * @method $this withScalingRuleName($value)
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
     * @param array $stepAdjustment
     *
     * @return $this
     */
	public function withStepAdjustment(array $stepAdjustment)
	{
	    $this->data['StepAdjustment'] = $stepAdjustment;
		foreach ($stepAdjustment as $depth1 => $depth1Value) {
			if(isset($depth1Value['MetricIntervalLowerBound'])){
				$this->options['query']['StepAdjustment.' . ($depth1 + 1) . '.MetricIntervalLowerBound'] = $depth1Value['MetricIntervalLowerBound'];
			}
			if(isset($depth1Value['MetricIntervalUpperBound'])){
				$this->options['query']['StepAdjustment.' . ($depth1 + 1) . '.MetricIntervalUpperBound'] = $depth1Value['MetricIntervalUpperBound'];
			}
			if(isset($depth1Value['ScalingAdjustment'])){
				$this->options['query']['StepAdjustment.' . ($depth1 + 1) . '.ScalingAdjustment'] = $depth1Value['ScalingAdjustment'];
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
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getScalingGroupId()
 * @method $this withScalingGroupId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getNotificationArn()
 * @method $this withNotificationArn($value)
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
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getScalingRuleId()
 * @method $this withScalingRuleId($value)
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
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getScalingGroupId()
 * @method $this withScalingGroupId($value)
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
 * @method string getScalingActivityId9()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getScalingActivityId5()
 * @method string getScalingActivityId6()
 * @method string getScalingGroupId()
 * @method $this withScalingGroupId($value)
 * @method string getScalingActivityId7()
 * @method string getScalingActivityId8()
 * @method string getScalingActivityId1()
 * @method string getScalingActivityId2()
 * @method string getScalingActivityId3()
 * @method string getScalingActivityId4()
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getStatusCode()
 * @method $this withStatusCode($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getScalingActivityId11()
 * @method string getScalingActivityId10()
 * @method string getScalingActivityId13()
 * @method string getScalingActivityId12()
 * @method string getScalingActivityId15()
 * @method string getScalingActivityId14()
 * @method string getScalingActivityId17()
 * @method string getScalingActivityId16()
 * @method string getScalingActivityId19()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getScalingActivityId18()
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getScalingActivityId20()
 */
class DescribeScalingActivities extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingActivityId9($value)
    {
        $this->data['ScalingActivityId9'] = $value;
        $this->options['query']['ScalingActivityId.9'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingActivityId5($value)
    {
        $this->data['ScalingActivityId5'] = $value;
        $this->options['query']['ScalingActivityId.5'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingActivityId6($value)
    {
        $this->data['ScalingActivityId6'] = $value;
        $this->options['query']['ScalingActivityId.6'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingActivityId7($value)
    {
        $this->data['ScalingActivityId7'] = $value;
        $this->options['query']['ScalingActivityId.7'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingActivityId8($value)
    {
        $this->data['ScalingActivityId8'] = $value;
        $this->options['query']['ScalingActivityId.8'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingActivityId1($value)
    {
        $this->data['ScalingActivityId1'] = $value;
        $this->options['query']['ScalingActivityId.1'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingActivityId2($value)
    {
        $this->data['ScalingActivityId2'] = $value;
        $this->options['query']['ScalingActivityId.2'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingActivityId3($value)
    {
        $this->data['ScalingActivityId3'] = $value;
        $this->options['query']['ScalingActivityId.3'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingActivityId4($value)
    {
        $this->data['ScalingActivityId4'] = $value;
        $this->options['query']['ScalingActivityId.4'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingActivityId11($value)
    {
        $this->data['ScalingActivityId11'] = $value;
        $this->options['query']['ScalingActivityId.11'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingActivityId10($value)
    {
        $this->data['ScalingActivityId10'] = $value;
        $this->options['query']['ScalingActivityId.10'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingActivityId13($value)
    {
        $this->data['ScalingActivityId13'] = $value;
        $this->options['query']['ScalingActivityId.13'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingActivityId12($value)
    {
        $this->data['ScalingActivityId12'] = $value;
        $this->options['query']['ScalingActivityId.12'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingActivityId15($value)
    {
        $this->data['ScalingActivityId15'] = $value;
        $this->options['query']['ScalingActivityId.15'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingActivityId14($value)
    {
        $this->data['ScalingActivityId14'] = $value;
        $this->options['query']['ScalingActivityId.14'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingActivityId17($value)
    {
        $this->data['ScalingActivityId17'] = $value;
        $this->options['query']['ScalingActivityId.17'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingActivityId16($value)
    {
        $this->data['ScalingActivityId16'] = $value;
        $this->options['query']['ScalingActivityId.16'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingActivityId19($value)
    {
        $this->data['ScalingActivityId19'] = $value;
        $this->options['query']['ScalingActivityId.19'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingActivityId18($value)
    {
        $this->data['ScalingActivityId18'] = $value;
        $this->options['query']['ScalingActivityId.18'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingActivityId20($value)
    {
        $this->data['ScalingActivityId20'] = $value;
        $this->options['query']['ScalingActivityId.20'] = $value;

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
 * @method string getScalingConfigurationId6()
 * @method string getScalingConfigurationId7()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getScalingConfigurationId4()
 * @method string getScalingConfigurationId5()
 * @method string getScalingGroupId()
 * @method $this withScalingGroupId($value)
 * @method string getScalingConfigurationId8()
 * @method string getScalingConfigurationId9()
 * @method string getScalingConfigurationId10()
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getScalingConfigurationName2()
 * @method string getScalingConfigurationName3()
 * @method string getScalingConfigurationName1()
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getScalingConfigurationId2()
 * @method string getScalingConfigurationId3()
 * @method string getScalingConfigurationId1()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getScalingConfigurationName6()
 * @method string getScalingConfigurationName7()
 * @method string getScalingConfigurationName4()
 * @method string getScalingConfigurationName5()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getScalingConfigurationName8()
 * @method string getScalingConfigurationName9()
 * @method string getScalingConfigurationName10()
 */
class DescribeScalingConfigurations extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingConfigurationId6($value)
    {
        $this->data['ScalingConfigurationId6'] = $value;
        $this->options['query']['ScalingConfigurationId.6'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingConfigurationId7($value)
    {
        $this->data['ScalingConfigurationId7'] = $value;
        $this->options['query']['ScalingConfigurationId.7'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingConfigurationId4($value)
    {
        $this->data['ScalingConfigurationId4'] = $value;
        $this->options['query']['ScalingConfigurationId.4'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingConfigurationId5($value)
    {
        $this->data['ScalingConfigurationId5'] = $value;
        $this->options['query']['ScalingConfigurationId.5'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingConfigurationId8($value)
    {
        $this->data['ScalingConfigurationId8'] = $value;
        $this->options['query']['ScalingConfigurationId.8'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingConfigurationId9($value)
    {
        $this->data['ScalingConfigurationId9'] = $value;
        $this->options['query']['ScalingConfigurationId.9'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingConfigurationId10($value)
    {
        $this->data['ScalingConfigurationId10'] = $value;
        $this->options['query']['ScalingConfigurationId.10'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingConfigurationName2($value)
    {
        $this->data['ScalingConfigurationName2'] = $value;
        $this->options['query']['ScalingConfigurationName.2'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingConfigurationName3($value)
    {
        $this->data['ScalingConfigurationName3'] = $value;
        $this->options['query']['ScalingConfigurationName.3'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingConfigurationName1($value)
    {
        $this->data['ScalingConfigurationName1'] = $value;
        $this->options['query']['ScalingConfigurationName.1'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingConfigurationId2($value)
    {
        $this->data['ScalingConfigurationId2'] = $value;
        $this->options['query']['ScalingConfigurationId.2'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingConfigurationId3($value)
    {
        $this->data['ScalingConfigurationId3'] = $value;
        $this->options['query']['ScalingConfigurationId.3'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingConfigurationId1($value)
    {
        $this->data['ScalingConfigurationId1'] = $value;
        $this->options['query']['ScalingConfigurationId.1'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingConfigurationName6($value)
    {
        $this->data['ScalingConfigurationName6'] = $value;
        $this->options['query']['ScalingConfigurationName.6'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingConfigurationName7($value)
    {
        $this->data['ScalingConfigurationName7'] = $value;
        $this->options['query']['ScalingConfigurationName.7'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingConfigurationName4($value)
    {
        $this->data['ScalingConfigurationName4'] = $value;
        $this->options['query']['ScalingConfigurationName.4'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingConfigurationName5($value)
    {
        $this->data['ScalingConfigurationName5'] = $value;
        $this->options['query']['ScalingConfigurationName.5'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingConfigurationName8($value)
    {
        $this->data['ScalingConfigurationName8'] = $value;
        $this->options['query']['ScalingConfigurationName.8'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingConfigurationName9($value)
    {
        $this->data['ScalingConfigurationName9'] = $value;
        $this->options['query']['ScalingConfigurationName.9'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingConfigurationName10($value)
    {
        $this->data['ScalingConfigurationName10'] = $value;
        $this->options['query']['ScalingConfigurationName.10'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getScalingGroupId10()
 * @method string getScalingGroupId12()
 * @method string getScalingGroupId13()
 * @method string getScalingGroupId14()
 * @method string getScalingGroupId15()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getScalingGroupName20()
 * @method string getScalingGroupName19()
 * @method string getScalingGroupId20()
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
 * @method string getScalingGroupId2()
 * @method string getScalingGroupId1()
 * @method string getScalingGroupId6()
 * @method string getScalingGroupId16()
 * @method string getScalingGroupName7()
 * @method string getScalingGroupName11()
 * @method string getScalingGroupId5()
 * @method string getScalingGroupId17()
 * @method string getScalingGroupName8()
 * @method string getScalingGroupName10()
 * @method string getScalingGroupId4()
 * @method string getScalingGroupId18()
 * @method string getScalingGroupName9()
 * @method string getScalingGroupId3()
 * @method string getScalingGroupId19()
 * @method string getScalingGroupName3()
 * @method string getScalingGroupName15()
 * @method string getScalingGroupId9()
 * @method string getScalingGroupName4()
 * @method string getScalingGroupName14()
 * @method string getScalingGroupId8()
 * @method string getScalingGroupName5()
 * @method string getScalingGroupName13()
 * @method string getScalingGroupId7()
 * @method string getScalingGroupName6()
 * @method string getScalingGroupName12()
 */
class DescribeScalingGroups extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingGroupId10($value)
    {
        $this->data['ScalingGroupId10'] = $value;
        $this->options['query']['ScalingGroupId.10'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingGroupId12($value)
    {
        $this->data['ScalingGroupId12'] = $value;
        $this->options['query']['ScalingGroupId.12'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingGroupId13($value)
    {
        $this->data['ScalingGroupId13'] = $value;
        $this->options['query']['ScalingGroupId.13'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingGroupId14($value)
    {
        $this->data['ScalingGroupId14'] = $value;
        $this->options['query']['ScalingGroupId.14'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingGroupId15($value)
    {
        $this->data['ScalingGroupId15'] = $value;
        $this->options['query']['ScalingGroupId.15'] = $value;

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
    public function withScalingGroupId20($value)
    {
        $this->data['ScalingGroupId20'] = $value;
        $this->options['query']['ScalingGroupId.20'] = $value;

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
    public function withScalingGroupId2($value)
    {
        $this->data['ScalingGroupId2'] = $value;
        $this->options['query']['ScalingGroupId.2'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingGroupId1($value)
    {
        $this->data['ScalingGroupId1'] = $value;
        $this->options['query']['ScalingGroupId.1'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingGroupId6($value)
    {
        $this->data['ScalingGroupId6'] = $value;
        $this->options['query']['ScalingGroupId.6'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingGroupId16($value)
    {
        $this->data['ScalingGroupId16'] = $value;
        $this->options['query']['ScalingGroupId.16'] = $value;

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
    public function withScalingGroupId5($value)
    {
        $this->data['ScalingGroupId5'] = $value;
        $this->options['query']['ScalingGroupId.5'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingGroupId17($value)
    {
        $this->data['ScalingGroupId17'] = $value;
        $this->options['query']['ScalingGroupId.17'] = $value;

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
    public function withScalingGroupId4($value)
    {
        $this->data['ScalingGroupId4'] = $value;
        $this->options['query']['ScalingGroupId.4'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingGroupId18($value)
    {
        $this->data['ScalingGroupId18'] = $value;
        $this->options['query']['ScalingGroupId.18'] = $value;

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
    public function withScalingGroupId3($value)
    {
        $this->data['ScalingGroupId3'] = $value;
        $this->options['query']['ScalingGroupId.3'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingGroupId19($value)
    {
        $this->data['ScalingGroupId19'] = $value;
        $this->options['query']['ScalingGroupId.19'] = $value;

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
    public function withScalingGroupId9($value)
    {
        $this->data['ScalingGroupId9'] = $value;
        $this->options['query']['ScalingGroupId.9'] = $value;

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
    public function withScalingGroupId8($value)
    {
        $this->data['ScalingGroupId8'] = $value;
        $this->options['query']['ScalingGroupId.8'] = $value;

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
    public function withScalingGroupId7($value)
    {
        $this->data['ScalingGroupId7'] = $value;
        $this->options['query']['ScalingGroupId.7'] = $value;

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
 * @method string getCreationType()
 * @method $this withCreationType($value)
 * @method string getInstanceId1()
 * @method string getInstanceId3()
 * @method string getInstanceId2()
 * @method string getInstanceId5()
 * @method string getInstanceId4()
 * @method string getInstanceId7()
 * @method string getInstanceId6()
 * @method string getInstanceId9()
 * @method string getInstanceId8()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getScalingConfigurationId()
 * @method $this withScalingConfigurationId($value)
 * @method string getHealthStatus()
 * @method $this withHealthStatus($value)
 * @method string getInstanceId10()
 * @method string getInstanceId12()
 * @method string getInstanceId11()
 * @method string getScalingGroupId()
 * @method $this withScalingGroupId($value)
 * @method string getLifecycleState()
 * @method $this withLifecycleState($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getInstanceId20()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getInstanceId18()
 * @method string getInstanceId17()
 * @method string getInstanceId19()
 * @method string getInstanceId14()
 * @method string getInstanceId13()
 * @method string getInstanceId16()
 * @method string getInstanceId15()
 */
class DescribeScalingInstances extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId1($value)
    {
        $this->data['InstanceId1'] = $value;
        $this->options['query']['InstanceId.1'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId3($value)
    {
        $this->data['InstanceId3'] = $value;
        $this->options['query']['InstanceId.3'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId2($value)
    {
        $this->data['InstanceId2'] = $value;
        $this->options['query']['InstanceId.2'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId5($value)
    {
        $this->data['InstanceId5'] = $value;
        $this->options['query']['InstanceId.5'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId4($value)
    {
        $this->data['InstanceId4'] = $value;
        $this->options['query']['InstanceId.4'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId7($value)
    {
        $this->data['InstanceId7'] = $value;
        $this->options['query']['InstanceId.7'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId6($value)
    {
        $this->data['InstanceId6'] = $value;
        $this->options['query']['InstanceId.6'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId9($value)
    {
        $this->data['InstanceId9'] = $value;
        $this->options['query']['InstanceId.9'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId8($value)
    {
        $this->data['InstanceId8'] = $value;
        $this->options['query']['InstanceId.8'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId10($value)
    {
        $this->data['InstanceId10'] = $value;
        $this->options['query']['InstanceId.10'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId12($value)
    {
        $this->data['InstanceId12'] = $value;
        $this->options['query']['InstanceId.12'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId11($value)
    {
        $this->data['InstanceId11'] = $value;
        $this->options['query']['InstanceId.11'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId20($value)
    {
        $this->data['InstanceId20'] = $value;
        $this->options['query']['InstanceId.20'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId18($value)
    {
        $this->data['InstanceId18'] = $value;
        $this->options['query']['InstanceId.18'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId17($value)
    {
        $this->data['InstanceId17'] = $value;
        $this->options['query']['InstanceId.17'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId19($value)
    {
        $this->data['InstanceId19'] = $value;
        $this->options['query']['InstanceId.19'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId14($value)
    {
        $this->data['InstanceId14'] = $value;
        $this->options['query']['InstanceId.14'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId13($value)
    {
        $this->data['InstanceId13'] = $value;
        $this->options['query']['InstanceId.13'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId16($value)
    {
        $this->data['InstanceId16'] = $value;
        $this->options['query']['InstanceId.16'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId15($value)
    {
        $this->data['InstanceId15'] = $value;
        $this->options['query']['InstanceId.15'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getScalingRuleId10()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getScalingRuleAri1()
 * @method string getScalingRuleAri2()
 * @method string getScalingRuleAri3()
 * @method string getScalingRuleAri4()
 * @method string getScalingRuleAri5()
 * @method string getScalingRuleAri6()
 * @method string getScalingRuleAri7()
 * @method string getScalingRuleAri8()
 * @method string getShowAlarmRules()
 * @method $this withShowAlarmRules($value)
 * @method string getScalingRuleName1()
 * @method string getScalingRuleName2()
 * @method string getScalingRuleName3()
 * @method string getScalingRuleName4()
 * @method string getScalingRuleName5()
 * @method string getScalingGroupId()
 * @method $this withScalingGroupId($value)
 * @method string getScalingRuleName6()
 * @method string getScalingRuleName7()
 * @method string getScalingRuleName8()
 * @method string getScalingRuleAri9()
 * @method string getScalingRuleName9()
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getScalingRuleType()
 * @method $this withScalingRuleType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getScalingRuleName10()
 * @method string getScalingRuleId8()
 * @method string getScalingRuleId9()
 * @method string getScalingRuleAri10()
 * @method string getScalingRuleId4()
 * @method string getScalingRuleId5()
 * @method string getScalingRuleId6()
 * @method string getScalingRuleId7()
 * @method string getScalingRuleId1()
 * @method string getScalingRuleId2()
 * @method string getScalingRuleId3()
 */
class DescribeScalingRules extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingRuleId10($value)
    {
        $this->data['ScalingRuleId10'] = $value;
        $this->options['query']['ScalingRuleId.10'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingRuleAri1($value)
    {
        $this->data['ScalingRuleAri1'] = $value;
        $this->options['query']['ScalingRuleAri.1'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingRuleAri2($value)
    {
        $this->data['ScalingRuleAri2'] = $value;
        $this->options['query']['ScalingRuleAri.2'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingRuleAri3($value)
    {
        $this->data['ScalingRuleAri3'] = $value;
        $this->options['query']['ScalingRuleAri.3'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingRuleAri4($value)
    {
        $this->data['ScalingRuleAri4'] = $value;
        $this->options['query']['ScalingRuleAri.4'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingRuleAri5($value)
    {
        $this->data['ScalingRuleAri5'] = $value;
        $this->options['query']['ScalingRuleAri.5'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingRuleAri6($value)
    {
        $this->data['ScalingRuleAri6'] = $value;
        $this->options['query']['ScalingRuleAri.6'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingRuleAri7($value)
    {
        $this->data['ScalingRuleAri7'] = $value;
        $this->options['query']['ScalingRuleAri.7'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingRuleAri8($value)
    {
        $this->data['ScalingRuleAri8'] = $value;
        $this->options['query']['ScalingRuleAri.8'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingRuleName1($value)
    {
        $this->data['ScalingRuleName1'] = $value;
        $this->options['query']['ScalingRuleName.1'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingRuleName2($value)
    {
        $this->data['ScalingRuleName2'] = $value;
        $this->options['query']['ScalingRuleName.2'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingRuleName3($value)
    {
        $this->data['ScalingRuleName3'] = $value;
        $this->options['query']['ScalingRuleName.3'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingRuleName4($value)
    {
        $this->data['ScalingRuleName4'] = $value;
        $this->options['query']['ScalingRuleName.4'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingRuleName5($value)
    {
        $this->data['ScalingRuleName5'] = $value;
        $this->options['query']['ScalingRuleName.5'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingRuleName6($value)
    {
        $this->data['ScalingRuleName6'] = $value;
        $this->options['query']['ScalingRuleName.6'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingRuleName7($value)
    {
        $this->data['ScalingRuleName7'] = $value;
        $this->options['query']['ScalingRuleName.7'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingRuleName8($value)
    {
        $this->data['ScalingRuleName8'] = $value;
        $this->options['query']['ScalingRuleName.8'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingRuleAri9($value)
    {
        $this->data['ScalingRuleAri9'] = $value;
        $this->options['query']['ScalingRuleAri.9'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingRuleName9($value)
    {
        $this->data['ScalingRuleName9'] = $value;
        $this->options['query']['ScalingRuleName.9'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingRuleName10($value)
    {
        $this->data['ScalingRuleName10'] = $value;
        $this->options['query']['ScalingRuleName.10'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingRuleId8($value)
    {
        $this->data['ScalingRuleId8'] = $value;
        $this->options['query']['ScalingRuleId.8'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingRuleId9($value)
    {
        $this->data['ScalingRuleId9'] = $value;
        $this->options['query']['ScalingRuleId.9'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingRuleAri10($value)
    {
        $this->data['ScalingRuleAri10'] = $value;
        $this->options['query']['ScalingRuleAri.10'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingRuleId4($value)
    {
        $this->data['ScalingRuleId4'] = $value;
        $this->options['query']['ScalingRuleId.4'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingRuleId5($value)
    {
        $this->data['ScalingRuleId5'] = $value;
        $this->options['query']['ScalingRuleId.5'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingRuleId6($value)
    {
        $this->data['ScalingRuleId6'] = $value;
        $this->options['query']['ScalingRuleId.6'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingRuleId7($value)
    {
        $this->data['ScalingRuleId7'] = $value;
        $this->options['query']['ScalingRuleId.7'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingRuleId1($value)
    {
        $this->data['ScalingRuleId1'] = $value;
        $this->options['query']['ScalingRuleId.1'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingRuleId2($value)
    {
        $this->data['ScalingRuleId2'] = $value;
        $this->options['query']['ScalingRuleId.2'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingRuleId3($value)
    {
        $this->data['ScalingRuleId3'] = $value;
        $this->options['query']['ScalingRuleId.3'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getScheduledAction2()
 * @method string getScheduledAction1()
 * @method string getScheduledAction6()
 * @method string getScheduledAction5()
 * @method string getScheduledAction4()
 * @method string getScheduledAction3()
 * @method string getScheduledAction9()
 * @method string getScheduledAction8()
 * @method string getScheduledAction7()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getScheduledTaskName20()
 * @method string getScheduledTaskName19()
 * @method string getScheduledTaskName18()
 * @method string getScheduledTaskId20()
 * @method string getScalingGroupId()
 * @method $this withScalingGroupId($value)
 * @method string getScheduledTaskName13()
 * @method string getScheduledTaskName12()
 * @method string getScheduledTaskName11()
 * @method string getScheduledTaskName10()
 * @method string getScheduledTaskName17()
 * @method string getScheduledTaskName16()
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getScheduledTaskName15()
 * @method string getScheduledTaskName14()
 * @method string getScheduledTaskId2()
 * @method string getScheduledTaskId1()
 * @method string getScheduledTaskId4()
 * @method string getScheduledTaskId18()
 * @method string getScheduledTaskId3()
 * @method string getScheduledTaskId19()
 * @method string getScheduledTaskId6()
 * @method string getScheduledTaskId5()
 * @method string getScheduledTaskId8()
 * @method string getScheduledTaskName9()
 * @method string getScheduledAction20()
 * @method string getScheduledTaskId7()
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getScheduledTaskId12()
 * @method string getScheduledTaskName7()
 * @method string getScheduledTaskId9()
 * @method string getScheduledTaskId13()
 * @method string getScheduledTaskName8()
 * @method string getScheduledTaskId10()
 * @method string getScheduledTaskName5()
 * @method string getScheduledTaskId11()
 * @method string getScheduledTaskName6()
 * @method string getScheduledTaskId16()
 * @method string getScheduledTaskName3()
 * @method string getScheduledTaskId17()
 * @method string getScheduledTaskName4()
 * @method string getScheduledTaskId14()
 * @method string getScheduledTaskName1()
 * @method string getScheduledTaskId15()
 * @method string getScheduledTaskName2()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getScheduledAction18()
 * @method string getScheduledAction19()
 * @method string getScheduledAction16()
 * @method string getScheduledAction17()
 * @method string getScheduledAction14()
 * @method string getScheduledAction15()
 * @method string getScheduledAction12()
 * @method string getScheduledAction13()
 * @method string getScheduledAction10()
 * @method string getScheduledAction11()
 */
class DescribeScheduledTasks extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScheduledAction2($value)
    {
        $this->data['ScheduledAction2'] = $value;
        $this->options['query']['ScheduledAction.2'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScheduledAction1($value)
    {
        $this->data['ScheduledAction1'] = $value;
        $this->options['query']['ScheduledAction.1'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScheduledAction6($value)
    {
        $this->data['ScheduledAction6'] = $value;
        $this->options['query']['ScheduledAction.6'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScheduledAction5($value)
    {
        $this->data['ScheduledAction5'] = $value;
        $this->options['query']['ScheduledAction.5'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScheduledAction4($value)
    {
        $this->data['ScheduledAction4'] = $value;
        $this->options['query']['ScheduledAction.4'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScheduledAction3($value)
    {
        $this->data['ScheduledAction3'] = $value;
        $this->options['query']['ScheduledAction.3'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScheduledAction9($value)
    {
        $this->data['ScheduledAction9'] = $value;
        $this->options['query']['ScheduledAction.9'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScheduledAction8($value)
    {
        $this->data['ScheduledAction8'] = $value;
        $this->options['query']['ScheduledAction.8'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScheduledAction7($value)
    {
        $this->data['ScheduledAction7'] = $value;
        $this->options['query']['ScheduledAction.7'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScheduledTaskName20($value)
    {
        $this->data['ScheduledTaskName20'] = $value;
        $this->options['query']['ScheduledTaskName.20'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScheduledTaskName19($value)
    {
        $this->data['ScheduledTaskName19'] = $value;
        $this->options['query']['ScheduledTaskName.19'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScheduledTaskName18($value)
    {
        $this->data['ScheduledTaskName18'] = $value;
        $this->options['query']['ScheduledTaskName.18'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScheduledTaskId20($value)
    {
        $this->data['ScheduledTaskId20'] = $value;
        $this->options['query']['ScheduledTaskId.20'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScheduledTaskName13($value)
    {
        $this->data['ScheduledTaskName13'] = $value;
        $this->options['query']['ScheduledTaskName.13'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScheduledTaskName12($value)
    {
        $this->data['ScheduledTaskName12'] = $value;
        $this->options['query']['ScheduledTaskName.12'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScheduledTaskName11($value)
    {
        $this->data['ScheduledTaskName11'] = $value;
        $this->options['query']['ScheduledTaskName.11'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScheduledTaskName10($value)
    {
        $this->data['ScheduledTaskName10'] = $value;
        $this->options['query']['ScheduledTaskName.10'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScheduledTaskName17($value)
    {
        $this->data['ScheduledTaskName17'] = $value;
        $this->options['query']['ScheduledTaskName.17'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScheduledTaskName16($value)
    {
        $this->data['ScheduledTaskName16'] = $value;
        $this->options['query']['ScheduledTaskName.16'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScheduledTaskName15($value)
    {
        $this->data['ScheduledTaskName15'] = $value;
        $this->options['query']['ScheduledTaskName.15'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScheduledTaskName14($value)
    {
        $this->data['ScheduledTaskName14'] = $value;
        $this->options['query']['ScheduledTaskName.14'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScheduledTaskId2($value)
    {
        $this->data['ScheduledTaskId2'] = $value;
        $this->options['query']['ScheduledTaskId.2'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScheduledTaskId1($value)
    {
        $this->data['ScheduledTaskId1'] = $value;
        $this->options['query']['ScheduledTaskId.1'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScheduledTaskId4($value)
    {
        $this->data['ScheduledTaskId4'] = $value;
        $this->options['query']['ScheduledTaskId.4'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScheduledTaskId18($value)
    {
        $this->data['ScheduledTaskId18'] = $value;
        $this->options['query']['ScheduledTaskId.18'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScheduledTaskId3($value)
    {
        $this->data['ScheduledTaskId3'] = $value;
        $this->options['query']['ScheduledTaskId.3'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScheduledTaskId19($value)
    {
        $this->data['ScheduledTaskId19'] = $value;
        $this->options['query']['ScheduledTaskId.19'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScheduledTaskId6($value)
    {
        $this->data['ScheduledTaskId6'] = $value;
        $this->options['query']['ScheduledTaskId.6'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScheduledTaskId5($value)
    {
        $this->data['ScheduledTaskId5'] = $value;
        $this->options['query']['ScheduledTaskId.5'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScheduledTaskId8($value)
    {
        $this->data['ScheduledTaskId8'] = $value;
        $this->options['query']['ScheduledTaskId.8'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScheduledTaskName9($value)
    {
        $this->data['ScheduledTaskName9'] = $value;
        $this->options['query']['ScheduledTaskName.9'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScheduledAction20($value)
    {
        $this->data['ScheduledAction20'] = $value;
        $this->options['query']['ScheduledAction.20'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScheduledTaskId7($value)
    {
        $this->data['ScheduledTaskId7'] = $value;
        $this->options['query']['ScheduledTaskId.7'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScheduledTaskId12($value)
    {
        $this->data['ScheduledTaskId12'] = $value;
        $this->options['query']['ScheduledTaskId.12'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScheduledTaskName7($value)
    {
        $this->data['ScheduledTaskName7'] = $value;
        $this->options['query']['ScheduledTaskName.7'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScheduledTaskId9($value)
    {
        $this->data['ScheduledTaskId9'] = $value;
        $this->options['query']['ScheduledTaskId.9'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScheduledTaskId13($value)
    {
        $this->data['ScheduledTaskId13'] = $value;
        $this->options['query']['ScheduledTaskId.13'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScheduledTaskName8($value)
    {
        $this->data['ScheduledTaskName8'] = $value;
        $this->options['query']['ScheduledTaskName.8'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScheduledTaskId10($value)
    {
        $this->data['ScheduledTaskId10'] = $value;
        $this->options['query']['ScheduledTaskId.10'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScheduledTaskName5($value)
    {
        $this->data['ScheduledTaskName5'] = $value;
        $this->options['query']['ScheduledTaskName.5'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScheduledTaskId11($value)
    {
        $this->data['ScheduledTaskId11'] = $value;
        $this->options['query']['ScheduledTaskId.11'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScheduledTaskName6($value)
    {
        $this->data['ScheduledTaskName6'] = $value;
        $this->options['query']['ScheduledTaskName.6'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScheduledTaskId16($value)
    {
        $this->data['ScheduledTaskId16'] = $value;
        $this->options['query']['ScheduledTaskId.16'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScheduledTaskName3($value)
    {
        $this->data['ScheduledTaskName3'] = $value;
        $this->options['query']['ScheduledTaskName.3'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScheduledTaskId17($value)
    {
        $this->data['ScheduledTaskId17'] = $value;
        $this->options['query']['ScheduledTaskId.17'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScheduledTaskName4($value)
    {
        $this->data['ScheduledTaskName4'] = $value;
        $this->options['query']['ScheduledTaskName.4'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScheduledTaskId14($value)
    {
        $this->data['ScheduledTaskId14'] = $value;
        $this->options['query']['ScheduledTaskId.14'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScheduledTaskName1($value)
    {
        $this->data['ScheduledTaskName1'] = $value;
        $this->options['query']['ScheduledTaskName.1'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScheduledTaskId15($value)
    {
        $this->data['ScheduledTaskId15'] = $value;
        $this->options['query']['ScheduledTaskId.15'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScheduledTaskName2($value)
    {
        $this->data['ScheduledTaskName2'] = $value;
        $this->options['query']['ScheduledTaskName.2'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScheduledAction18($value)
    {
        $this->data['ScheduledAction18'] = $value;
        $this->options['query']['ScheduledAction.18'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScheduledAction19($value)
    {
        $this->data['ScheduledAction19'] = $value;
        $this->options['query']['ScheduledAction.19'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScheduledAction16($value)
    {
        $this->data['ScheduledAction16'] = $value;
        $this->options['query']['ScheduledAction.16'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScheduledAction17($value)
    {
        $this->data['ScheduledAction17'] = $value;
        $this->options['query']['ScheduledAction.17'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScheduledAction14($value)
    {
        $this->data['ScheduledAction14'] = $value;
        $this->options['query']['ScheduledAction.14'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScheduledAction15($value)
    {
        $this->data['ScheduledAction15'] = $value;
        $this->options['query']['ScheduledAction.15'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScheduledAction12($value)
    {
        $this->data['ScheduledAction12'] = $value;
        $this->options['query']['ScheduledAction.12'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScheduledAction13($value)
    {
        $this->data['ScheduledAction13'] = $value;
        $this->options['query']['ScheduledAction.13'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScheduledAction10($value)
    {
        $this->data['ScheduledAction10'] = $value;
        $this->options['query']['ScheduledAction.10'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScheduledAction11($value)
    {
        $this->data['ScheduledAction11'] = $value;
        $this->options['query']['ScheduledAction.11'] = $value;

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
 * @method string getScalingGroupId()
 * @method $this withScalingGroupId($value)
 * @method string getDecreaseDesiredCapacity()
 * @method $this withDecreaseDesiredCapacity($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method array getInstanceId()
 * @method string getDetachOption()
 * @method $this withDetachOption($value)
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
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getScalingGroupId()
 * @method $this withScalingGroupId($value)
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
 * @method string getLoadBalancerWeight6()
 * @method string getLoadBalancerWeight11()
 * @method string getLoadBalancerWeight7()
 * @method string getLoadBalancerWeight12()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getLoadBalancerWeight8()
 * @method string getLoadBalancerWeight9()
 * @method string getLoadBalancerWeight10()
 * @method string getLoadBalancerWeight2()
 * @method string getLoadBalancerWeight15()
 * @method string getLoadBalancerWeight3()
 * @method string getLoadBalancerWeight16()
 * @method string getLoadBalancerWeight4()
 * @method string getLoadBalancerWeight13()
 * @method string getLoadBalancerWeight5()
 * @method string getLoadBalancerWeight14()
 * @method string getActiveScalingConfigurationId()
 * @method $this withActiveScalingConfigurationId($value)
 * @method string getLoadBalancerWeight1()
 * @method string getInstanceId1()
 * @method string getLoadBalancerWeight20()
 * @method string getInstanceId3()
 * @method string getLaunchTemplateId()
 * @method $this withLaunchTemplateId($value)
 * @method string getInstanceId2()
 * @method string getInstanceId5()
 * @method string getInstanceId4()
 * @method string getInstanceId7()
 * @method string getInstanceId6()
 * @method string getInstanceId9()
 * @method string getInstanceId8()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getLoadBalancerWeight19()
 * @method string getLoadBalancerWeight17()
 * @method string getLoadBalancerWeight18()
 * @method string getInstanceId10()
 * @method string getInstanceId12()
 * @method string getInstanceId11()
 * @method string getScalingGroupId()
 * @method $this withScalingGroupId($value)
 * @method string getInstanceId20()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getLaunchTemplateVersion()
 * @method $this withLaunchTemplateVersion($value)
 * @method string getInstanceId18()
 * @method string getInstanceId17()
 * @method string getInstanceId19()
 * @method string getInstanceId14()
 * @method string getInstanceId13()
 * @method string getInstanceId16()
 * @method string getInstanceId15()
 */
class EnableScalingGroup extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLoadBalancerWeight6($value)
    {
        $this->data['LoadBalancerWeight6'] = $value;
        $this->options['query']['LoadBalancerWeight.6'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLoadBalancerWeight11($value)
    {
        $this->data['LoadBalancerWeight11'] = $value;
        $this->options['query']['LoadBalancerWeight.11'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLoadBalancerWeight7($value)
    {
        $this->data['LoadBalancerWeight7'] = $value;
        $this->options['query']['LoadBalancerWeight.7'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLoadBalancerWeight12($value)
    {
        $this->data['LoadBalancerWeight12'] = $value;
        $this->options['query']['LoadBalancerWeight.12'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLoadBalancerWeight8($value)
    {
        $this->data['LoadBalancerWeight8'] = $value;
        $this->options['query']['LoadBalancerWeight.8'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLoadBalancerWeight9($value)
    {
        $this->data['LoadBalancerWeight9'] = $value;
        $this->options['query']['LoadBalancerWeight.9'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLoadBalancerWeight10($value)
    {
        $this->data['LoadBalancerWeight10'] = $value;
        $this->options['query']['LoadBalancerWeight.10'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLoadBalancerWeight2($value)
    {
        $this->data['LoadBalancerWeight2'] = $value;
        $this->options['query']['LoadBalancerWeight.2'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLoadBalancerWeight15($value)
    {
        $this->data['LoadBalancerWeight15'] = $value;
        $this->options['query']['LoadBalancerWeight.15'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLoadBalancerWeight3($value)
    {
        $this->data['LoadBalancerWeight3'] = $value;
        $this->options['query']['LoadBalancerWeight.3'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLoadBalancerWeight16($value)
    {
        $this->data['LoadBalancerWeight16'] = $value;
        $this->options['query']['LoadBalancerWeight.16'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLoadBalancerWeight4($value)
    {
        $this->data['LoadBalancerWeight4'] = $value;
        $this->options['query']['LoadBalancerWeight.4'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLoadBalancerWeight13($value)
    {
        $this->data['LoadBalancerWeight13'] = $value;
        $this->options['query']['LoadBalancerWeight.13'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLoadBalancerWeight5($value)
    {
        $this->data['LoadBalancerWeight5'] = $value;
        $this->options['query']['LoadBalancerWeight.5'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLoadBalancerWeight14($value)
    {
        $this->data['LoadBalancerWeight14'] = $value;
        $this->options['query']['LoadBalancerWeight.14'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLoadBalancerWeight1($value)
    {
        $this->data['LoadBalancerWeight1'] = $value;
        $this->options['query']['LoadBalancerWeight.1'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId1($value)
    {
        $this->data['InstanceId1'] = $value;
        $this->options['query']['InstanceId.1'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLoadBalancerWeight20($value)
    {
        $this->data['LoadBalancerWeight20'] = $value;
        $this->options['query']['LoadBalancerWeight.20'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId3($value)
    {
        $this->data['InstanceId3'] = $value;
        $this->options['query']['InstanceId.3'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId2($value)
    {
        $this->data['InstanceId2'] = $value;
        $this->options['query']['InstanceId.2'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId5($value)
    {
        $this->data['InstanceId5'] = $value;
        $this->options['query']['InstanceId.5'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId4($value)
    {
        $this->data['InstanceId4'] = $value;
        $this->options['query']['InstanceId.4'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId7($value)
    {
        $this->data['InstanceId7'] = $value;
        $this->options['query']['InstanceId.7'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId6($value)
    {
        $this->data['InstanceId6'] = $value;
        $this->options['query']['InstanceId.6'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId9($value)
    {
        $this->data['InstanceId9'] = $value;
        $this->options['query']['InstanceId.9'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId8($value)
    {
        $this->data['InstanceId8'] = $value;
        $this->options['query']['InstanceId.8'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLoadBalancerWeight19($value)
    {
        $this->data['LoadBalancerWeight19'] = $value;
        $this->options['query']['LoadBalancerWeight.19'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLoadBalancerWeight17($value)
    {
        $this->data['LoadBalancerWeight17'] = $value;
        $this->options['query']['LoadBalancerWeight.17'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLoadBalancerWeight18($value)
    {
        $this->data['LoadBalancerWeight18'] = $value;
        $this->options['query']['LoadBalancerWeight.18'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId10($value)
    {
        $this->data['InstanceId10'] = $value;
        $this->options['query']['InstanceId.10'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId12($value)
    {
        $this->data['InstanceId12'] = $value;
        $this->options['query']['InstanceId.12'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId11($value)
    {
        $this->data['InstanceId11'] = $value;
        $this->options['query']['InstanceId.11'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId20($value)
    {
        $this->data['InstanceId20'] = $value;
        $this->options['query']['InstanceId.20'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId18($value)
    {
        $this->data['InstanceId18'] = $value;
        $this->options['query']['InstanceId.18'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId17($value)
    {
        $this->data['InstanceId17'] = $value;
        $this->options['query']['InstanceId.17'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId19($value)
    {
        $this->data['InstanceId19'] = $value;
        $this->options['query']['InstanceId.19'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId14($value)
    {
        $this->data['InstanceId14'] = $value;
        $this->options['query']['InstanceId.14'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId13($value)
    {
        $this->data['InstanceId13'] = $value;
        $this->options['query']['InstanceId.13'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId16($value)
    {
        $this->data['InstanceId16'] = $value;
        $this->options['query']['InstanceId.16'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId15($value)
    {
        $this->data['InstanceId15'] = $value;
        $this->options['query']['InstanceId.15'] = $value;

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
 * @method string getKeyPairName()
 * @method $this withKeyPairName($value)
 * @method array getSpotPriceLimit()
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getPrivatePoolOptionsMatchCriteria()
 * @method string getHostName()
 * @method $this withHostName($value)
 * @method string getInstanceDescription()
 * @method $this withInstanceDescription($value)
 * @method string getSystemDiskAutoSnapshotPolicyId()
 * @method string getPrivatePoolOptionsId()
 * @method string getIpv6AddressCount()
 * @method $this withIpv6AddressCount($value)
 * @method string getCpu()
 * @method $this withCpu($value)
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
 * @method string getInstanceName()
 * @method $this withInstanceName($value)
 * @method string getInternetChargeType()
 * @method $this withInternetChargeType($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getAffinity()
 * @method $this withAffinity($value)
 * @method string getImageId()
 * @method $this withImageId($value)
 * @method string getMemory()
 * @method $this withMemory($value)
 * @method string getIoOptimized()
 * @method $this withIoOptimized($value)
 * @method array getInstanceTypes()
 * @method string getInternetMaxBandwidthOut()
 * @method $this withInternetMaxBandwidthOut($value)
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getSystemDiskCategory()
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getPasswordInherit()
 * @method $this withPasswordInherit($value)
 * @method string getImageName()
 * @method $this withImageName($value)
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
 * @method string getDedicatedHostId()
 * @method $this withDedicatedHostId($value)
 * @method string getCreditSpecification()
 * @method $this withCreditSpecification($value)
 * @method array getSecurityGroupIds()
 * @method array getDataDisk()
 * @method string getLoadBalancerWeight()
 * @method $this withLoadBalancerWeight($value)
 * @method string getSystemDiskSize()
 * @method string getImageFamily()
 * @method $this withImageFamily($value)
 * @method string getSystemDiskDescription()
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
    public function withSystemDiskDiskName($value)
    {
        $this->data['SystemDiskDiskName'] = $value;
        $this->options['query']['SystemDisk.DiskName'] = $value;

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
			if(isset($depth1Value['DiskName'])){
				$this->options['query']['DataDisk.' . ($depth1 + 1) . '.DiskName'] = $depth1Value['DiskName'];
			}
			if(isset($depth1Value['SnapshotId'])){
				$this->options['query']['DataDisk.' . ($depth1 + 1) . '.SnapshotId'] = $depth1Value['SnapshotId'];
			}
			if(isset($depth1Value['Size'])){
				$this->options['query']['DataDisk.' . ($depth1 + 1) . '.Size'] = $depth1Value['Size'];
			}
			if(isset($depth1Value['Encrypted'])){
				$this->options['query']['DataDisk.' . ($depth1 + 1) . '.Encrypted'] = $depth1Value['Encrypted'];
			}
			if(isset($depth1Value['AutoSnapshotPolicyId'])){
				$this->options['query']['DataDisk.' . ($depth1 + 1) . '.AutoSnapshotPolicyId'] = $depth1Value['AutoSnapshotPolicyId'];
			}
			if(isset($depth1Value['Description'])){
				$this->options['query']['DataDisk.' . ($depth1 + 1) . '.Description'] = $depth1Value['Description'];
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
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getScalingGroupId()
 * @method $this withScalingGroupId($value)
 * @method array getVSwitchIds()
 * @method string getActiveScalingConfigurationId()
 * @method $this withActiveScalingConfigurationId($value)
 * @method string getOnDemandBaseCapacity()
 * @method $this withOnDemandBaseCapacity($value)
 * @method string getOnDemandPercentageAboveBaseCapacity()
 * @method $this withOnDemandPercentageAboveBaseCapacity($value)
 * @method string getSpotInstanceRemedy()
 * @method $this withSpotInstanceRemedy($value)
 * @method string getScaleOutAmountCheck()
 * @method $this withScaleOutAmountCheck($value)
 * @method string getDefaultCooldown()
 * @method $this withDefaultCooldown($value)
 * @method string getRemovalPolicy1()
 * @method string getRemovalPolicy2()
 * @method string getHealthCheckType()
 * @method $this withHealthCheckType($value)
 * @method string getLaunchTemplateId()
 * @method $this withLaunchTemplateId($value)
 * @method string getDesiredCapacity()
 * @method $this withDesiredCapacity($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getScalingGroupName()
 * @method $this withScalingGroupName($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getCompensateWithOnDemand()
 * @method $this withCompensateWithOnDemand($value)
 * @method string getSpotInstancePools()
 * @method $this withSpotInstancePools($value)
 * @method string getMinSize()
 * @method $this withMinSize($value)
 * @method string getGroupDeletionProtection()
 * @method $this withGroupDeletionProtection($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getLaunchTemplateVersion()
 * @method $this withLaunchTemplateVersion($value)
 * @method string getMaxSize()
 * @method $this withMaxSize($value)
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
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method array getStepAdjustment()
 * @method string getDisableScaleIn()
 * @method $this withDisableScaleIn($value)
 * @method string getScalingRuleId()
 * @method $this withScalingRuleId($value)
 * @method string getInitialMaxSize()
 * @method $this withInitialMaxSize($value)
 * @method string getScalingRuleName()
 * @method $this withScalingRuleName($value)
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
     * @param array $stepAdjustment
     *
     * @return $this
     */
	public function withStepAdjustment(array $stepAdjustment)
	{
	    $this->data['StepAdjustment'] = $stepAdjustment;
		foreach ($stepAdjustment as $depth1 => $depth1Value) {
			if(isset($depth1Value['MetricIntervalLowerBound'])){
				$this->options['query']['StepAdjustment.' . ($depth1 + 1) . '.MetricIntervalLowerBound'] = $depth1Value['MetricIntervalLowerBound'];
			}
			if(isset($depth1Value['MetricIntervalUpperBound'])){
				$this->options['query']['StepAdjustment.' . ($depth1 + 1) . '.MetricIntervalUpperBound'] = $depth1Value['MetricIntervalUpperBound'];
			}
			if(isset($depth1Value['ScalingAdjustment'])){
				$this->options['query']['StepAdjustment.' . ($depth1 + 1) . '.ScalingAdjustment'] = $depth1Value['ScalingAdjustment'];
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
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getScalingGroupId()
 * @method $this withScalingGroupId($value)
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
 * @method string getScalingGroupId()
 * @method $this withScalingGroupId($value)
 * @method string getDecreaseDesiredCapacity()
 * @method $this withDecreaseDesiredCapacity($value)
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
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getScalingGroupId()
 * @method $this withScalingGroupId($value)
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
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getOnlyCheck()
 * @method $this withOnlyCheck($value)
 * @method string getUid()
 * @method $this withUid($value)
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
