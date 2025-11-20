<?php

namespace AlibabaCloud\Dysmsapi\V20180501;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method BatchSendMessageToGlobe batchSendMessageToGlobe(array $options = [])
 * @method ConversionData conversionData(array $options = [])
 * @method QueryMessage queryMessage(array $options = [])
 * @method SendMessageToGlobe sendMessageToGlobe(array $options = [])
 * @method SendMessageWithTemplate sendMessageWithTemplate(array $options = [])
 * @method SmsConversion smsConversion(array $options = [])
 */
class DysmsapiApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'Dysmsapi';

    /** @var string */
    public $version = '2018-05-01';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'dysms';
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getFrom()
 * @method $this withFrom($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getMessage()
 * @method $this withMessage($value)
 * @method string getValidityPeriod()
 * @method $this withValidityPeriod($value)
 * @method string getTo()
 * @method $this withTo($value)
 * @method string getChannelId()
 * @method $this withChannelId($value)
 */
class BatchSendMessageToGlobe extends Rpc
{
}

/**
 * @method string getReportTime()
 * @method string getConversionRate()
 */
class ConversionData extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withReportTime($value)
    {
        $this->data['ReportTime'] = $value;
        $this->options['form_params']['ReportTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withConversionRate($value)
    {
        $this->data['ConversionRate'] = $value;
        $this->options['form_params']['ConversionRate'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getMessageId()
 * @method $this withMessageId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class QueryMessage extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getFrom()
 * @method $this withFrom($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getMessage()
 * @method $this withMessage($value)
 * @method string getValidityPeriod()
 * @method $this withValidityPeriod($value)
 * @method string getTo()
 * @method $this withTo($value)
 * @method string getChannelId()
 * @method $this withChannelId($value)
 */
class SendMessageToGlobe extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSmsUpExtendCode()
 * @method $this withSmsUpExtendCode($value)
 * @method string getFrom()
 * @method $this withFrom($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getValidityPeriod()
 * @method $this withValidityPeriod($value)
 * @method string getTo()
 * @method $this withTo($value)
 * @method string getTemplateCode()
 * @method $this withTemplateCode($value)
 * @method string getChannelId()
 * @method $this withChannelId($value)
 * @method string getTemplateParam()
 * @method $this withTemplateParam($value)
 */
class SendMessageWithTemplate extends Rpc
{
}

/**
 * @method string getConversionTime()
 * @method $this withConversionTime($value)
 * @method string getMessageId()
 * @method $this withMessageId($value)
 * @method string getDelivered()
 * @method $this withDelivered($value)
 * @method string getTo()
 * @method $this withTo($value)
 */
class SmsConversion extends Rpc
{
}
