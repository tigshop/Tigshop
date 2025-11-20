<?php

namespace AlibabaCloud\AIMath\V20241114;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method GenAnalysis genAnalysis(array $options = [])
 * @method GenStep genStep(array $options = [])
 * @method GlobalConfirm globalConfirm(array $options = [])
 * @method UpdateAnalysis updateAnalysis(array $options = [])
 * @method UpdateStep updateStep(array $options = [])
 */
class AIMathApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'AIMath';

    /** @var string */
    public $version = '2024-11-14';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    protected $scheme = 'https';
}

/**
 * @method string getExerciseContent()
 */
class GenAnalysis extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExerciseContent($value)
    {
        $this->data['ExerciseContent'] = $value;
        $this->options['form_params']['ExerciseContent'] = $value;

        return $this;
    }
}

/**
 * @method string getExerciseCode()
 */
class GenStep extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExerciseCode($value)
    {
        $this->data['ExerciseCode'] = $value;
        $this->options['form_params']['ExerciseCode'] = $value;

        return $this;
    }
}

/**
 * @method string getTag()
 * @method string getExerciseCode()
 */
class GlobalConfirm extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag($value)
    {
        $this->data['Tag'] = $value;
        $this->options['form_params']['Tag'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExerciseCode($value)
    {
        $this->data['ExerciseCode'] = $value;
        $this->options['form_params']['ExerciseCode'] = $value;

        return $this;
    }
}

/**
 * @method string getContent()
 * @method string getContentCode()
 * @method string getExerciseCode()
 */
class UpdateAnalysis extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContent($value)
    {
        $this->data['Content'] = $value;
        $this->options['form_params']['Content'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContentCode($value)
    {
        $this->data['ContentCode'] = $value;
        $this->options['form_params']['ContentCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExerciseCode($value)
    {
        $this->data['ExerciseCode'] = $value;
        $this->options['form_params']['ExerciseCode'] = $value;

        return $this;
    }
}

/**
 * @method string getContent()
 * @method string getContentCode()
 * @method string getExerciseCode()
 */
class UpdateStep extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContent($value)
    {
        $this->data['Content'] = $value;
        $this->options['form_params']['Content'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContentCode($value)
    {
        $this->data['ContentCode'] = $value;
        $this->options['form_params']['ContentCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExerciseCode($value)
    {
        $this->data['ExerciseCode'] = $value;
        $this->options['form_params']['ExerciseCode'] = $value;

        return $this;
    }
}
