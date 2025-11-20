<?php

namespace AlibabaCloud\Dms\V20250414;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method CreateAirflowLoginToken createAirflowLoginToken(array $options = [])
 */
class DmsApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'Dms';

    /** @var string */
    public $version = '2025-04-14';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    protected $scheme = 'https';
}

/**
 * @method string getAirflowId()
 * @method $this withAirflowId($value)
 */
class CreateAirflowLoginToken extends Rpc
{
}
