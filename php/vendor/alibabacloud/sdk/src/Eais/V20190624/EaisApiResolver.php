<?php

namespace AlibabaCloud\Eais\V20190624;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AttachEai attachEai(array $options = [])
 * @method AttachEaisEi attachEaisEi(array $options = [])
 * @method ChangeResourceGroup changeResourceGroup(array $options = [])
 * @method CreateEai createEai(array $options = [])
 * @method CreateEaiEci createEaiEci(array $options = [])
 * @method CreateEaiEcs createEaiEcs(array $options = [])
 * @method CreateEaiJupyter createEaiJupyter(array $options = [])
 * @method CreateEaisEi createEaisEi(array $options = [])
 * @method DeleteEai deleteEai(array $options = [])
 * @method DeleteEaiAll deleteEaiAll(array $options = [])
 * @method DeleteEaisEi deleteEaisEi(array $options = [])
 * @method DescribeEais describeEais(array $options = [])
 * @method DescribeRegions describeRegions(array $options = [])
 * @method DetachEai detachEai(array $options = [])
 * @method DetachEaisEi detachEaisEi(array $options = [])
 * @method GetInstanceMetrics getInstanceMetrics(array $options = [])
 * @method ListTagResources listTagResources(array $options = [])
 * @method StartEaiJupyter startEaiJupyter(array $options = [])
 * @method StartEaisEi startEaisEi(array $options = [])
 * @method StopEaiJupyter stopEaiJupyter(array $options = [])
 * @method StopEaisEi stopEaisEi(array $options = [])
 * @method TagResources tagResources(array $options = [])
 * @method UntagResources untagResources(array $options = [])
 */
class EaisApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'eais';

    /** @var string */
    public $version = '2019-06-24';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'eais';
}

/**
 * @method string getClientInstanceId()
 * @method $this withClientInstanceId($value)
 * @method string getElasticAcceleratedInstanceId()
 * @method $this withElasticAcceleratedInstanceId($value)
 */
class AttachEai extends Rpc
{
}

/**
 * @method string getEiInstanceType()
 * @method $this withEiInstanceType($value)
 * @method string getClientInstanceId()
 * @method $this withClientInstanceId($value)
 * @method string getEiInstanceId()
 * @method $this withEiInstanceId($value)
 */
class AttachEaisEi extends Rpc
{
}

/**
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getResourceRegionId()
 * @method $this withResourceRegionId($value)
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getService()
 * @method $this withService($value)
 */
class ChangeResourceGroup extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method array getTag()
 * @method string getImage()
 * @method $this withImage($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getInstanceName()
 * @method $this withInstanceName($value)
 */
class CreateEai extends Rpc
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
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getEci()
 * @method $this withEci($value)
 * @method string getEaisType()
 * @method $this withEaisType($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getEaisName()
 * @method $this withEaisName($value)
 * @method array getTag()
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 */
class CreateEaiEci extends Rpc
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
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getEaisType()
 * @method $this withEaisType($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getEcs()
 * @method $this withEcs($value)
 * @method string getEaisName()
 * @method $this withEaisName($value)
 * @method array getTag()
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 */
class CreateEaiEcs extends Rpc
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
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getEaisType()
 * @method $this withEaisType($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getEaisName()
 * @method $this withEaisName($value)
 * @method array getTag()
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getEnvironmentVar()
 * @method $this withEnvironmentVar($value)
 */
class CreateEaiJupyter extends Rpc
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
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method array getTag()
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getInstanceName()
 * @method $this withInstanceName($value)
 */
class CreateEaisEi extends Rpc
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
 * @method string getElasticAcceleratedInstanceId()
 * @method $this withElasticAcceleratedInstanceId($value)
 * @method string getForce()
 * @method $this withForce($value)
 */
class DeleteEai extends Rpc
{
}

/**
 * @method string getClientInstanceId()
 * @method $this withClientInstanceId($value)
 * @method string getElasticAcceleratedInstanceId()
 * @method $this withElasticAcceleratedInstanceId($value)
 */
class DeleteEaiAll extends Rpc
{
}

/**
 * @method string getEiInstanceId()
 * @method $this withEiInstanceId($value)
 * @method string getForce()
 * @method $this withForce($value)
 */
class DeleteEaisEi extends Rpc
{
}

/**
 * @method string getElasticAcceleratedInstanceIds()
 * @method $this withElasticAcceleratedInstanceIds($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method array getTag()
 * @method string getClientInstanceId()
 * @method $this withClientInstanceId($value)
 * @method string getInstanceName()
 * @method $this withInstanceName($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeEais extends Rpc
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

class DescribeRegions extends Rpc
{
}

/**
 * @method string getElasticAcceleratedInstanceId()
 * @method $this withElasticAcceleratedInstanceId($value)
 */
class DetachEai extends Rpc
{
}

/**
 * @method string getEiInstanceId()
 * @method $this withEiInstanceId($value)
 */
class DetachEaisEi extends Rpc
{
}

/**
 * @method string getMetricType()
 * @method $this withMetricType($value)
 * @method string getTimeStep()
 * @method $this withTimeStep($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class GetInstanceMetrics extends Rpc
{
}

/**
 * @method array getResourceId()
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method array getTag()
 */
class ListTagResources extends Rpc
{

    /** @var string */
    public $scheme = 'https';

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
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class StartEaiJupyter extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getEiInstanceId()
 * @method $this withEiInstanceId($value)
 */
class StartEaisEi extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class StopEaiJupyter extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getEiInstanceId()
 * @method $this withEiInstanceId($value)
 */
class StopEaisEi extends Rpc
{
}

/**
 * @method array getResourceId()
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method array getTag()
 */
class TagResources extends Rpc
{

    /** @var string */
    public $scheme = 'https';

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
 * @method string getAll()
 * @method $this withAll($value)
 * @method array getResourceId()
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method array getTagKey()
 */
class UntagResources extends Rpc
{

    /** @var string */
    public $scheme = 'https';

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
