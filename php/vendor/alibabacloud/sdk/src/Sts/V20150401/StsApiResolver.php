<?php

namespace AlibabaCloud\Sts\V20150401;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AssumeRole assumeRole(array $options = [])
 * @method AssumeRoleWithOIDC assumeRoleWithOIDC(array $options = [])
 * @method AssumeRoleWithSAML assumeRoleWithSAML(array $options = [])
 * @method GetCallerIdentity getCallerIdentity(array $options = [])
 */
class StsApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'Sts';

    /** @var string */
    public $version = '2015-04-01';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    protected $scheme = 'https';
}

/**
 * @method string getExternalId()
 * @method $this withExternalId($value)
 * @method string getRoleSessionName()
 * @method $this withRoleSessionName($value)
 * @method string getPolicy()
 * @method $this withPolicy($value)
 * @method string getRoleArn()
 * @method $this withRoleArn($value)
 * @method string getDurationSeconds()
 * @method $this withDurationSeconds($value)
 */
class AssumeRole extends Rpc
{
}

/**
 * @method string getRoleArn()
 * @method $this withRoleArn($value)
 * @method string getRoleSessionName()
 * @method $this withRoleSessionName($value)
 * @method string getOIDCToken()
 * @method $this withOIDCToken($value)
 * @method string getDurationSeconds()
 * @method $this withDurationSeconds($value)
 * @method string getOIDCProviderArn()
 * @method $this withOIDCProviderArn($value)
 * @method string getPolicy()
 * @method $this withPolicy($value)
 */
class AssumeRoleWithOIDC extends Rpc
{
}

/**
 * @method string getSAMLAssertion()
 * @method $this withSAMLAssertion($value)
 * @method string getRoleArn()
 * @method $this withRoleArn($value)
 * @method string getSAMLProviderArn()
 * @method $this withSAMLProviderArn($value)
 * @method string getDurationSeconds()
 * @method $this withDurationSeconds($value)
 * @method string getPolicy()
 * @method $this withPolicy($value)
 */
class AssumeRoleWithSAML extends Rpc
{
}

class GetCallerIdentity extends Rpc
{
}
