<?php

namespace AlibabaCloud\MarketplaceIntl\V20221230;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method DescribePushMeteringData describePushMeteringData(array $options = [])
 * @method DescribeSellerInstances describeSellerInstances(array $options = [])
 * @method NoticeInstanceUser noticeInstanceUser(array $options = [])
 * @method PushMeteringData pushMeteringData(array $options = [])
 */
class MarketplaceIntlApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'marketplaceIntl';

    /** @var string */
    public $version = '2022-12-30';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    protected $scheme = 'https';
}

/**
 * @method string getPushOrderBizId()
 * @method $this withPushOrderBizId($value)
 */
class DescribePushMeteringData extends Rpc
{
}

/**
 * @method string getInstanceStatus()
 * @method $this withInstanceStatus($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageIndex()
 * @method $this withPageIndex($value)
 */
class DescribeSellerInstances extends Rpc
{
}

/**
 * @method string getNoticeParam()
 * @method string getInstanceId()
 * @method string getNoticeType()
 */
class NoticeInstanceUser extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNoticeParam($value)
    {
        $this->data['NoticeParam'] = $value;
        $this->options['form_params']['NoticeParam'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNoticeType($value)
    {
        $this->data['NoticeType'] = $value;
        $this->options['form_params']['NoticeType'] = $value;

        return $this;
    }
}

/**
 * @method array getMeteringData()
 * @method string getGmtCreate()
 */
class PushMeteringData extends Rpc
{

    /** @var string */
    public $scheme = 'http';

    /**
     * @param array $meteringData
     *
     * @return $this
     */
	public function withMeteringData(array $meteringData)
	{
	    $this->data['MeteringData'] = $meteringData;
		foreach ($meteringData as $depth1 => $depth1Value) {
			if(isset($depth1Value['MeteringAssist'])){
				$this->options['form_params']['MeteringData.' . ($depth1 + 1) . '.MeteringAssist'] = $depth1Value['MeteringAssist'];
			}
			if(isset($depth1Value['PushOrderBizId'])){
				$this->options['form_params']['MeteringData.' . ($depth1 + 1) . '.PushOrderBizId'] = $depth1Value['PushOrderBizId'];
			}
			if(isset($depth1Value['InstanceId'])){
				$this->options['form_params']['MeteringData.' . ($depth1 + 1) . '.InstanceId'] = $depth1Value['InstanceId'];
			}
			if(isset($depth1Value['EndTime'])){
				$this->options['form_params']['MeteringData.' . ($depth1 + 1) . '.EndTime'] = $depth1Value['EndTime'];
			}
			if(isset($depth1Value['StartTime'])){
				$this->options['form_params']['MeteringData.' . ($depth1 + 1) . '.StartTime'] = $depth1Value['StartTime'];
			}
			if(isset($depth1Value['MeteringEntity'])){
				$this->options['form_params']['MeteringData.' . ($depth1 + 1) . '.MeteringEntity'] = $depth1Value['MeteringEntity'];
			}
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGmtCreate($value)
    {
        $this->data['GmtCreate'] = $value;
        $this->options['form_params']['GmtCreate'] = $value;

        return $this;
    }
}
