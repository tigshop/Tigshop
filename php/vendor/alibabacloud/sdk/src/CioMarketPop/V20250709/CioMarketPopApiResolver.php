<?php

namespace AlibabaCloud\CioMarketPop\V20250709;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method GetEveryOneSellsFormList getEveryOneSellsFormList(array $options = [])
 */
class CioMarketPopApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'CioMarketPop';

    /** @var string */
    public $version = '2025-07-09';

    /** @var string */
    protected $scheme = 'https';
}

/**
 * @method string getAuth()
 * @method $this withAuth($value)
 */
class GetEveryOneSellsFormList extends Rpc
{
}
