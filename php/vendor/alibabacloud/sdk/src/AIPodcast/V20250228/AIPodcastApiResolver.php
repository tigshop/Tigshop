<?php

namespace AlibabaCloud\AIPodcast\V20250228;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method PodcastTaskResultQuery podcastTaskResultQuery(array $options = [])
 * @method PodcastTaskSubmit podcastTaskSubmit(array $options = [])
 */
class AIPodcastApiResolver extends ApiResolver
{
}

class Roa extends \AlibabaCloud\Client\Resolver\Roa
{
    /** @var string */
    public $product = 'AIPodcast';

    /** @var string */
    public $version = '2025-02-28';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    protected $scheme = 'https';
}

/**
 * @method string getAppId()
 * @method string getTaskId()
 * @method string getWorkspaceId()
 */
class PodcastTaskResultQuery extends Roa
{
    /** @var string */
    public $pathPattern = '/podcast/task';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['form_params']['appId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTaskId($value)
    {
        $this->data['TaskId'] = $value;
        $this->options['form_params']['taskId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWorkspaceId($value)
    {
        $this->data['WorkspaceId'] = $value;
        $this->options['form_params']['workspaceId'] = $value;

        return $this;
    }
}

/**
 * @method string getAtmosphere()
 * @method string getSourceLang()
 * @method string getCounts()
 * @method string getFileUrls()
 * @method string getText()
 * @method string getVoices()
 * @method string getAppId()
 * @method string getTopic()
 * @method string getStyle()
 * @method string getWorkspaceId()
 */
class PodcastTaskSubmit extends Roa
{
    /** @var string */
    public $pathPattern = '/podcast/task/submit';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAtmosphere($value)
    {
        $this->data['Atmosphere'] = $value;
        $this->options['form_params']['atmosphere'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSourceLang($value)
    {
        $this->data['SourceLang'] = $value;
        $this->options['form_params']['sourceLang'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCounts($value)
    {
        $this->data['Counts'] = $value;
        $this->options['form_params']['counts'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFileUrls($value)
    {
        $this->data['FileUrls'] = $value;
        $this->options['form_params']['fileUrls'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withText($value)
    {
        $this->data['Text'] = $value;
        $this->options['form_params']['text'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVoices($value)
    {
        $this->data['Voices'] = $value;
        $this->options['form_params']['voices'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['form_params']['appId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTopic($value)
    {
        $this->data['Topic'] = $value;
        $this->options['form_params']['topic'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStyle($value)
    {
        $this->data['Style'] = $value;
        $this->options['form_params']['style'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWorkspaceId($value)
    {
        $this->data['WorkspaceId'] = $value;
        $this->options['form_params']['workspaceId'] = $value;

        return $this;
    }
}
