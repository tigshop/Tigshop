<?php

namespace AlibabaCloud\WebsiteBuild\V20250429;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method CreateLogoTask createLogoTask(array $options = [])
 * @method GetCreateLogoTask getCreateLogoTask(array $options = [])
 * @method OperateAppInstanceForPartner operateAppInstanceForPartner(array $options = [])
 * @method OperateAppServiceForPartner operateAppServiceForPartner(array $options = [])
 * @method SearchImage searchImage(array $options = [])
 * @method SyncAppInstanceForPartner syncAppInstanceForPartner(array $options = [])
 */
class WebsiteBuildApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'WebsiteBuild';

    /** @var string */
    public $version = '2025-04-29';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    protected $scheme = 'https';
}

/**
 * @method string getNegativePrompt()
 * @method $this withNegativePrompt($value)
 * @method string getPrompt()
 * @method $this withPrompt($value)
 * @method string getParameters()
 * @method $this withParameters($value)
 * @method string getLogoVersion()
 * @method $this withLogoVersion($value)
 */
class CreateLogoTask extends Rpc
{
}

/**
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class GetCreateLogoTask extends Rpc
{
}

/**
 * @method string getExtend()
 * @method $this withExtend($value)
 * @method string getOperateEvent()
 * @method $this withOperateEvent($value)
 */
class OperateAppInstanceForPartner extends Rpc
{
}

/**
 * @method string getExtend()
 * @method $this withExtend($value)
 * @method string getServiceType()
 * @method $this withServiceType($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getOperateEvent()
 * @method $this withOperateEvent($value)
 */
class OperateAppServiceForPartner extends Rpc
{
}

/**
 * @method string getHasPerson()
 * @method $this withHasPerson($value)
 * @method string getMaxWidth()
 * @method $this withMaxWidth($value)
 * @method string getOssKey()
 * @method $this withOssKey($value)
 * @method string getImageCategory()
 * @method $this withImageCategory($value)
 * @method string getMaxHeight()
 * @method $this withMaxHeight($value)
 * @method string getImageRatio()
 * @method $this withImageRatio($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getText()
 * @method $this withText($value)
 * @method string getColorHex()
 * @method $this withColorHex($value)
 * @method string getMinHeight()
 * @method $this withMinHeight($value)
 * @method string getStart()
 * @method $this withStart($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getSize()
 * @method $this withSize($value)
 * @method string getMinWidth()
 * @method $this withMinWidth($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class SearchImage extends Rpc
{
}

/**
 * @method string getAppInstance()
 * @method $this withAppInstance($value)
 * @method string getSourceBizId()
 * @method $this withSourceBizId($value)
 * @method string getOperator()
 * @method $this withOperator($value)
 * @method string getEventType()
 * @method $this withEventType($value)
 * @method string getSourceType()
 * @method $this withSourceType($value)
 */
class SyncAppInstanceForPartner extends Rpc
{
}
