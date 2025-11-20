<?php

namespace AlibabaCloud\AnyTrans\V20250707;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method BatchTranslate batchTranslate(array $options = [])
 * @method GetDocTranslateTask getDocTranslateTask(array $options = [])
 * @method GetHtmlTranslateTask getHtmlTranslateTask(array $options = [])
 * @method GetImageTranslateTask getImageTranslateTask(array $options = [])
 * @method GetLongTextTranslateTask getLongTextTranslateTask(array $options = [])
 * @method SubmitDocTranslateTask submitDocTranslateTask(array $options = [])
 * @method SubmitHtmlTranslateTask submitHtmlTranslateTask(array $options = [])
 * @method SubmitImageTranslateTask submitImageTranslateTask(array $options = [])
 * @method SubmitLongTextTranslateTask submitLongTextTranslateTask(array $options = [])
 * @method TextTranslate textTranslate(array $options = [])
 */
class AnyTransApiResolver extends ApiResolver
{
}

class Roa extends \AlibabaCloud\Client\Resolver\Roa
{
    /** @var string */
    public $product = 'AnyTrans';

    /** @var string */
    public $version = '2025-07-07';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    protected $scheme = 'https';
}

/**
 * @method string getExt()
 * @method string getSourceLanguage()
 * @method string getFormat()
 * @method string getScene()
 * @method string getTargetLanguage()
 * @method string getText()
 * @method string getWorkspaceId()
 */
class BatchTranslate extends Roa
{
    /** @var string */
    public $pathPattern = '/anytrans/translate/batch';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExt($value)
    {
        $this->data['Ext'] = $value;
        $this->options['form_params']['ext'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSourceLanguage($value)
    {
        $this->data['SourceLanguage'] = $value;
        $this->options['form_params']['sourceLanguage'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFormat($value)
    {
        $this->data['Format'] = $value;
        $this->options['form_params']['format'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScene($value)
    {
        $this->data['Scene'] = $value;
        $this->options['form_params']['scene'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTargetLanguage($value)
    {
        $this->data['TargetLanguage'] = $value;
        $this->options['form_params']['targetLanguage'] = $value;

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
    public function withWorkspaceId($value)
    {
        $this->data['WorkspaceId'] = $value;
        $this->options['form_params']['workspaceId'] = $value;

        return $this;
    }
}

/**
 * @method string getTaskId()
 * @method string getWorkspaceId()
 */
class GetDocTranslateTask extends Roa
{
    /** @var string */
    public $pathPattern = '/anytrans/translate/doc/get';

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
 * @method string getTaskId()
 * @method string getWorkspaceId()
 */
class GetHtmlTranslateTask extends Roa
{
    /** @var string */
    public $pathPattern = '/anytrans/translate/html/get';

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
 * @method string getTaskId()
 * @method string getWorkspaceId()
 */
class GetImageTranslateTask extends Roa
{
    /** @var string */
    public $pathPattern = '/anytrans/translate/image/get';

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
 * @method string getTaskId()
 * @method string getWorkspaceId()
 */
class GetLongTextTranslateTask extends Roa
{
    /** @var string */
    public $pathPattern = '/anytrans/translate/longText/get';

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
 * @method string getExt()
 * @method string getSourceLanguage()
 * @method string getFormat()
 * @method string getScene()
 * @method string getTargetLanguage()
 * @method string getText()
 * @method string getWorkspaceId()
 */
class SubmitDocTranslateTask extends Roa
{
    /** @var string */
    public $pathPattern = '/anytrans/translate/doc/submit';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExt($value)
    {
        $this->data['Ext'] = $value;
        $this->options['form_params']['ext'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSourceLanguage($value)
    {
        $this->data['SourceLanguage'] = $value;
        $this->options['form_params']['sourceLanguage'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFormat($value)
    {
        $this->data['Format'] = $value;
        $this->options['form_params']['format'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScene($value)
    {
        $this->data['Scene'] = $value;
        $this->options['form_params']['scene'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTargetLanguage($value)
    {
        $this->data['TargetLanguage'] = $value;
        $this->options['form_params']['targetLanguage'] = $value;

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
    public function withWorkspaceId($value)
    {
        $this->data['WorkspaceId'] = $value;
        $this->options['form_params']['workspaceId'] = $value;

        return $this;
    }
}

/**
 * @method string getExt()
 * @method string getSourceLanguage()
 * @method string getFormat()
 * @method string getScene()
 * @method string getTargetLanguage()
 * @method string getText()
 * @method string getWorkspaceId()
 */
class SubmitHtmlTranslateTask extends Roa
{
    /** @var string */
    public $pathPattern = '/anytrans/translate/html/submit';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExt($value)
    {
        $this->data['Ext'] = $value;
        $this->options['form_params']['ext'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSourceLanguage($value)
    {
        $this->data['SourceLanguage'] = $value;
        $this->options['form_params']['sourceLanguage'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFormat($value)
    {
        $this->data['Format'] = $value;
        $this->options['form_params']['format'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScene($value)
    {
        $this->data['Scene'] = $value;
        $this->options['form_params']['scene'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTargetLanguage($value)
    {
        $this->data['TargetLanguage'] = $value;
        $this->options['form_params']['targetLanguage'] = $value;

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
    public function withWorkspaceId($value)
    {
        $this->data['WorkspaceId'] = $value;
        $this->options['form_params']['workspaceId'] = $value;

        return $this;
    }
}

/**
 * @method string getExt()
 * @method string getSourceLanguage()
 * @method string getFormat()
 * @method string getScene()
 * @method string getText()
 * @method string getTargetLanguage()
 * @method string getWorkspaceId()
 */
class SubmitImageTranslateTask extends Roa
{
    /** @var string */
    public $pathPattern = '/anytrans/translate/image/submit';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExt($value)
    {
        $this->data['Ext'] = $value;
        $this->options['form_params']['ext'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSourceLanguage($value)
    {
        $this->data['SourceLanguage'] = $value;
        $this->options['form_params']['sourceLanguage'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFormat($value)
    {
        $this->data['Format'] = $value;
        $this->options['form_params']['format'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScene($value)
    {
        $this->data['Scene'] = $value;
        $this->options['form_params']['scene'] = $value;

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
    public function withTargetLanguage($value)
    {
        $this->data['TargetLanguage'] = $value;
        $this->options['form_params']['targetLanguage'] = $value;

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
 * @method string getExt()
 * @method string getSourceLanguage()
 * @method string getFormat()
 * @method string getScene()
 * @method string getTargetLanguage()
 * @method string getText()
 * @method string getWorkspaceId()
 */
class SubmitLongTextTranslateTask extends Roa
{
    /** @var string */
    public $pathPattern = '/anytrans/translate/longText/submit';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExt($value)
    {
        $this->data['Ext'] = $value;
        $this->options['form_params']['ext'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSourceLanguage($value)
    {
        $this->data['SourceLanguage'] = $value;
        $this->options['form_params']['sourceLanguage'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFormat($value)
    {
        $this->data['Format'] = $value;
        $this->options['form_params']['format'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScene($value)
    {
        $this->data['Scene'] = $value;
        $this->options['form_params']['scene'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTargetLanguage($value)
    {
        $this->data['TargetLanguage'] = $value;
        $this->options['form_params']['targetLanguage'] = $value;

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
    public function withWorkspaceId($value)
    {
        $this->data['WorkspaceId'] = $value;
        $this->options['form_params']['workspaceId'] = $value;

        return $this;
    }
}

/**
 * @method string getExt()
 * @method string getSourceLanguage()
 * @method string getFormat()
 * @method string getScene()
 * @method string getTargetLanguage()
 * @method string getText()
 * @method string getWorkspaceId()
 */
class TextTranslate extends Roa
{
    /** @var string */
    public $pathPattern = '/anytrans/translate/text';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExt($value)
    {
        $this->data['Ext'] = $value;
        $this->options['form_params']['ext'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSourceLanguage($value)
    {
        $this->data['SourceLanguage'] = $value;
        $this->options['form_params']['sourceLanguage'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFormat($value)
    {
        $this->data['Format'] = $value;
        $this->options['form_params']['format'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScene($value)
    {
        $this->data['Scene'] = $value;
        $this->options['form_params']['scene'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTargetLanguage($value)
    {
        $this->data['TargetLanguage'] = $value;
        $this->options['form_params']['targetLanguage'] = $value;

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
    public function withWorkspaceId($value)
    {
        $this->data['WorkspaceId'] = $value;
        $this->options['form_params']['workspaceId'] = $value;

        return $this;
    }
}
