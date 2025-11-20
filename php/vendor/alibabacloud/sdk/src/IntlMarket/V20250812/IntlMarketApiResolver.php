<?php

namespace AlibabaCloud\IntlMarket\V20250812;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method CreateOrder createOrder(array $options = [])
 * @method DescribePrice describePrice(array $options = [])
 */
class IntlMarketApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'IntlMarket';

    /** @var string */
    public $version = '2025-08-12';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    protected $scheme = 'https';
}

/**
 * @method string getOrderSouce()
 * @method $this withOrderSouce($value)
 * @method string getCommodity()
 * @method $this withCommodity($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPaymentType()
 * @method $this withPaymentType($value)
 * @method string getOrderType()
 * @method $this withOrderType($value)
 */
class CreateOrder extends Rpc
{
}

/**
 * @method string getCommodity()
 * @method $this withCommodity($value)
 * @method string getOrderType()
 * @method $this withOrderType($value)
 */
class DescribePrice extends Rpc
{
}
