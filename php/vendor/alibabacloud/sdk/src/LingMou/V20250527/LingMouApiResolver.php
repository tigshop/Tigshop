<?php

namespace AlibabaCloud\LingMou\V20250527;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method CloseChatInstanceSessions closeChatInstanceSessions(array $options = [])
 * @method CreateChatSession createChatSession(array $options = [])
 * @method QueryChatInstanceSessions queryChatInstanceSessions(array $options = [])
 */
class LingMouApiResolver extends ApiResolver
{
}

class Roa extends \AlibabaCloud\Client\Resolver\Roa
{
    /** @var string */
    public $product = 'LingMou';

    /** @var string */
    public $version = '2025-05-27';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    protected $scheme = 'https';
}

/**
 * @method string getInstanceId()
 * @method string getSessionIds()
 */
class CloseChatInstanceSessions extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/chat/instances/[instanceId]/sessions/close';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->pathParameters['instanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSessionIds($value)
    {
        $this->data['SessionIds'] = $value;
        $this->options['form_params']['sessionIds'] = $value;

        return $this;
    }
}

/**
 * @method string getLicense()
 * @method string getInstanceId()
 * @method string getId()
 * @method string getPlatform()
 */
class CreateChatSession extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/chat/init/[id]';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLicense($value)
    {
        $this->data['License'] = $value;
        $this->options['query']['license'] = $value;

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
        $this->options['query']['instanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withId($value)
    {
        $this->data['Id'] = $value;
        $this->pathParameters['id'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPlatform($value)
    {
        $this->data['Platform'] = $value;
        $this->options['query']['platform'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method string getSessionIds()
 */
class QueryChatInstanceSessions extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/chat/instances/[instanceId]/sessions';

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->pathParameters['instanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSessionIds($value)
    {
        $this->data['SessionIds'] = $value;
        $this->options['query']['sessionIds'] = $value;

        return $this;
    }
}
