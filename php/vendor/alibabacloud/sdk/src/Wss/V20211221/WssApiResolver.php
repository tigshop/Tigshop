<?php

namespace AlibabaCloud\Wss\V20211221;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method DescribeDeliveryAddress describeDeliveryAddress(array $options = [])
 * @method DescribePackageDeductions describePackageDeductions(array $options = [])
 */
class WssApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'wss';

    /** @var string */
    public $version = '2021-12-21';

    /** @var string */
    public $method = 'POST';
}

class DescribeDeliveryAddress extends Rpc
{
}

/**
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method array getPackageIds()
 * @method array getInstanceIds()
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class DescribePackageDeductions extends Rpc
{

    /**
     * @param array $packageIds
     *
     * @return $this
     */
	public function withPackageIds(array $packageIds)
	{
	    $this->data['PackageIds'] = $packageIds;
		foreach ($packageIds as $i => $iValue) {
			$this->options['query']['PackageIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

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
