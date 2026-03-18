<?php

namespace AlibabaCloud\Mseap\V20210118;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method ActivateLicense activateLicense(array $options = [])
 * @method CallbackTask callbackTask(array $options = [])
 * @method DescribeAgreementStatus describeAgreementStatus(array $options = [])
 * @method GenerateUploadFilePolicyForPartner generateUploadFilePolicyForPartner(array $options = [])
 * @method GetNodeByFlowId getNodeByFlowId(array $options = [])
 * @method GetNodeByTemplateId getNodeByTemplateId(array $options = [])
 * @method GetProxyByType getProxyByType(array $options = [])
 * @method GetRedisValue getRedisValue(array $options = [])
 * @method GetVariable getVariable(array $options = [])
 * @method IdentifyCode identifyCode(array $options = [])
 * @method PullRpaModel pullRpaModel(array $options = [])
 * @method PullTask pullTask(array $options = [])
 * @method PushRpaTask pushRpaTask(array $options = [])
 * @method PushRpaTaskDetail pushRpaTaskDetail(array $options = [])
 * @method SetRedisValue setRedisValue(array $options = [])
 * @method UpdateAgreementStatus updateAgreementStatus(array $options = [])
 */
class MseapApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'mseap';

    /** @var string */
    public $version = '2021-01-18';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getLicenseNo()
 * @method $this withLicenseNo($value)
 * @method string getBizType()
 * @method $this withBizType($value)
 * @method string getLicensePublisher()
 * @method $this withLicensePublisher($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getLicenseCode()
 * @method $this withLicenseCode($value)
 */
class ActivateLicense extends Rpc
{
}

/**
 * @method string getUserCallerParentId()
 * @method $this withUserCallerParentId($value)
 * @method string getOutTaskId()
 * @method $this withOutTaskId($value)
 * @method string getApiType()
 * @method $this withApiType($value)
 * @method string getUserMfaPresent()
 * @method $this withUserMfaPresent($value)
 * @method string getUserKp()
 * @method $this withUserKp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 * @method string getUserCallerType()
 * @method $this withUserCallerType($value)
 * @method string getTaskType()
 * @method $this withTaskType($value)
 * @method string getUserSecurityToken()
 * @method $this withUserSecurityToken($value)
 * @method string getUserAccessKeyId()
 * @method $this withUserAccessKeyId($value)
 * @method string getOrderId()
 * @method $this withOrderId($value)
 * @method string getAliyunKp()
 * @method $this withAliyunKp($value)
 * @method string getUserBid()
 * @method $this withUserBid($value)
 * @method string getOriginalRequest()
 * @method $this withOriginalRequest($value)
 * @method string getPrincipalKey()
 * @method $this withPrincipalKey($value)
 * @method string getUserCallerSecurityTransport()
 * @method $this withUserCallerSecurityTransport($value)
 * @method string getBizCode()
 * @method $this withBizCode($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getTaskData()
 * @method $this withTaskData($value)
 * @method string getBid()
 * @method $this withBid($value)
 */
class CallbackTask extends Rpc
{
}

/**
 * @method string getAgreementCode()
 * @method $this withAgreementCode($value)
 */
class DescribeAgreementStatus extends Rpc
{
}

/**
 * @method string getFileType()
 * @method $this withFileType($value)
 * @method string getBizType()
 * @method $this withBizType($value)
 * @method string getFileName()
 * @method $this withFileName($value)
 */
class GenerateUploadFilePolicyForPartner extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getUserCallerParentId()
 * @method $this withUserCallerParentId($value)
 * @method string getApiType()
 * @method $this withApiType($value)
 * @method string getUserMfaPresent()
 * @method $this withUserMfaPresent($value)
 * @method string getUserKp()
 * @method $this withUserKp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getUserCallerType()
 * @method $this withUserCallerType($value)
 * @method string getUserSecurityToken()
 * @method $this withUserSecurityToken($value)
 * @method string getUserAccessKeyId()
 * @method $this withUserAccessKeyId($value)
 * @method string getAliyunKp()
 * @method $this withAliyunKp($value)
 * @method string getUserBid()
 * @method $this withUserBid($value)
 * @method string getOriginalRequest()
 * @method $this withOriginalRequest($value)
 * @method string getUserCallerSecurityTransport()
 * @method $this withUserCallerSecurityTransport($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getBid()
 * @method $this withBid($value)
 * @method string getFlowId()
 * @method $this withFlowId($value)
 */
class GetNodeByFlowId extends Rpc
{
}

/**
 * @method string getUserCallerParentId()
 * @method $this withUserCallerParentId($value)
 * @method string getApiType()
 * @method $this withApiType($value)
 * @method string getUserMfaPresent()
 * @method $this withUserMfaPresent($value)
 * @method string getUserKp()
 * @method $this withUserKp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getUserCallerType()
 * @method $this withUserCallerType($value)
 * @method string getUserSecurityToken()
 * @method $this withUserSecurityToken($value)
 * @method string getUserAccessKeyId()
 * @method $this withUserAccessKeyId($value)
 * @method string getAliyunKp()
 * @method $this withAliyunKp($value)
 * @method string getUserBid()
 * @method $this withUserBid($value)
 * @method string getOriginalRequest()
 * @method $this withOriginalRequest($value)
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 * @method string getUserCallerSecurityTransport()
 * @method $this withUserCallerSecurityTransport($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getBid()
 * @method $this withBid($value)
 */
class GetNodeByTemplateId extends Rpc
{
}

/**
 * @method string getUserCallerParentId()
 * @method $this withUserCallerParentId($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getApiType()
 * @method $this withApiType($value)
 * @method string getUserMfaPresent()
 * @method $this withUserMfaPresent($value)
 * @method string getUserKp()
 * @method $this withUserKp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getUserCallerType()
 * @method $this withUserCallerType($value)
 * @method string getUserSecurityToken()
 * @method $this withUserSecurityToken($value)
 * @method string getUserAccessKeyId()
 * @method $this withUserAccessKeyId($value)
 * @method string getAliyunKp()
 * @method $this withAliyunKp($value)
 * @method string getUserBid()
 * @method $this withUserBid($value)
 * @method string getOriginalRequest()
 * @method $this withOriginalRequest($value)
 * @method string getUserCallerSecurityTransport()
 * @method $this withUserCallerSecurityTransport($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getBid()
 * @method $this withBid($value)
 */
class GetProxyByType extends Rpc
{
}

/**
 * @method string getUserCallerParentId()
 * @method $this withUserCallerParentId($value)
 * @method string getApiType()
 * @method $this withApiType($value)
 * @method string getTimeout()
 * @method $this withTimeout($value)
 * @method string getUserMfaPresent()
 * @method $this withUserMfaPresent($value)
 * @method string getUserKp()
 * @method $this withUserKp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getValue()
 * @method $this withValue($value)
 * @method string getKey()
 * @method $this withKey($value)
 * @method string getUserCallerType()
 * @method $this withUserCallerType($value)
 * @method string getUserSecurityToken()
 * @method $this withUserSecurityToken($value)
 * @method string getUserAccessKeyId()
 * @method $this withUserAccessKeyId($value)
 * @method string getAliyunKp()
 * @method $this withAliyunKp($value)
 * @method string getUserBid()
 * @method $this withUserBid($value)
 * @method string getOriginalRequest()
 * @method $this withOriginalRequest($value)
 * @method string getUserCallerSecurityTransport()
 * @method $this withUserCallerSecurityTransport($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getBid()
 * @method $this withBid($value)
 */
class GetRedisValue extends Rpc
{
}

/**
 * @method string getUserCallerParentId()
 * @method $this withUserCallerParentId($value)
 * @method string getApiType()
 * @method $this withApiType($value)
 * @method string getUserMfaPresent()
 * @method $this withUserMfaPresent($value)
 * @method string getUserKp()
 * @method $this withUserKp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getUserCallerType()
 * @method $this withUserCallerType($value)
 * @method string getUserSecurityToken()
 * @method $this withUserSecurityToken($value)
 * @method string getUserAccessKeyId()
 * @method $this withUserAccessKeyId($value)
 * @method string getAliyunKp()
 * @method $this withAliyunKp($value)
 * @method string getUserBid()
 * @method $this withUserBid($value)
 * @method string getOriginalRequest()
 * @method $this withOriginalRequest($value)
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 * @method string getUserCallerSecurityTransport()
 * @method $this withUserCallerSecurityTransport($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getBid()
 * @method $this withBid($value)
 */
class GetVariable extends Rpc
{
}

/**
 * @method string getData()
 * @method $this withData($value)
 * @method string getUserCallerParentId()
 * @method $this withUserCallerParentId($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getApiType()
 * @method $this withApiType($value)
 * @method string getUserMfaPresent()
 * @method $this withUserMfaPresent($value)
 * @method string getUserKp()
 * @method $this withUserKp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getUserCallerType()
 * @method $this withUserCallerType($value)
 * @method string getUserSecurityToken()
 * @method $this withUserSecurityToken($value)
 * @method string getUserAccessKeyId()
 * @method $this withUserAccessKeyId($value)
 * @method string getAliyunKp()
 * @method $this withAliyunKp($value)
 * @method string getUserBid()
 * @method $this withUserBid($value)
 * @method string getOriginalRequest()
 * @method $this withOriginalRequest($value)
 * @method string getLabel()
 * @method $this withLabel($value)
 * @method string getUserCallerSecurityTransport()
 * @method $this withUserCallerSecurityTransport($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getBid()
 * @method $this withBid($value)
 */
class IdentifyCode extends Rpc
{
}

/**
 * @method string getUserCallerParentId()
 * @method $this withUserCallerParentId($value)
 * @method string getApiType()
 * @method $this withApiType($value)
 * @method string getUserMfaPresent()
 * @method $this withUserMfaPresent($value)
 * @method string getUserKp()
 * @method $this withUserKp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getUserCallerType()
 * @method $this withUserCallerType($value)
 * @method string getUserSecurityToken()
 * @method $this withUserSecurityToken($value)
 * @method string getUserAccessKeyId()
 * @method $this withUserAccessKeyId($value)
 * @method string getAliyunKp()
 * @method $this withAliyunKp($value)
 * @method string getUserBid()
 * @method $this withUserBid($value)
 * @method string getOriginalRequest()
 * @method $this withOriginalRequest($value)
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getBid()
 * @method $this withBid($value)
 */
class PullRpaModel extends Rpc
{
}

/**
 * @method string getUserCallerParentId()
 * @method $this withUserCallerParentId($value)
 * @method string getApiType()
 * @method $this withApiType($value)
 * @method string getUserMfaPresent()
 * @method $this withUserMfaPresent($value)
 * @method string getUserKp()
 * @method $this withUserKp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getUserCallerType()
 * @method $this withUserCallerType($value)
 * @method string getTaskType()
 * @method $this withTaskType($value)
 * @method string getUserSecurityToken()
 * @method $this withUserSecurityToken($value)
 * @method string getUserAccessKeyId()
 * @method $this withUserAccessKeyId($value)
 * @method string getOrderId()
 * @method $this withOrderId($value)
 * @method string getAliyunKp()
 * @method $this withAliyunKp($value)
 * @method string getUserBid()
 * @method $this withUserBid($value)
 * @method string getOriginalRequest()
 * @method $this withOriginalRequest($value)
 * @method string getPrincipalKey()
 * @method $this withPrincipalKey($value)
 * @method string getUserCallerSecurityTransport()
 * @method $this withUserCallerSecurityTransport($value)
 * @method string getBizCode()
 * @method $this withBizCode($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getBid()
 * @method $this withBid($value)
 */
class PullTask extends Rpc
{
}

/**
 * @method string getRequest()
 * @method $this withRequest($value)
 * @method string getUserCallerParentId()
 * @method $this withUserCallerParentId($value)
 * @method string getApiType()
 * @method $this withApiType($value)
 * @method string getUserMfaPresent()
 * @method $this withUserMfaPresent($value)
 * @method string getUserKp()
 * @method $this withUserKp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 * @method string getUserCallerType()
 * @method $this withUserCallerType($value)
 * @method string getUserSecurityToken()
 * @method $this withUserSecurityToken($value)
 * @method string getUserAccessKeyId()
 * @method $this withUserAccessKeyId($value)
 * @method string getModelId()
 * @method $this withModelId($value)
 * @method string getAliyunKp()
 * @method $this withAliyunKp($value)
 * @method string getUserBid()
 * @method $this withUserBid($value)
 * @method string getOriginalRequest()
 * @method $this withOriginalRequest($value)
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getBid()
 * @method $this withBid($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class PushRpaTask extends Rpc
{
}

/**
 * @method string getUserCallerParentId()
 * @method $this withUserCallerParentId($value)
 * @method string getApiType()
 * @method $this withApiType($value)
 * @method string getModelDetailId()
 * @method $this withModelDetailId($value)
 * @method string getUserKp()
 * @method $this withUserKp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 * @method string getUserCallerType()
 * @method $this withUserCallerType($value)
 * @method string getUserSecurityToken()
 * @method $this withUserSecurityToken($value)
 * @method string getUserAccessKeyId()
 * @method $this withUserAccessKeyId($value)
 * @method string getAliyunKp()
 * @method $this withAliyunKp($value)
 * @method string getUserBid()
 * @method $this withUserBid($value)
 * @method string getOriginalRequest()
 * @method $this withOriginalRequest($value)
 * @method string getInputScreenshot()
 * @method $this withInputScreenshot($value)
 * @method string getInputData()
 * @method $this withInputData($value)
 * @method string getOutputData()
 * @method $this withOutputData($value)
 * @method string getInputHtml()
 * @method $this withInputHtml($value)
 * @method string getTaskDetailId()
 * @method $this withTaskDetailId($value)
 * @method string getOutputHtml()
 * @method $this withOutputHtml($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getBid()
 * @method $this withBid($value)
 * @method string getOutputScreenshot()
 * @method $this withOutputScreenshot($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class PushRpaTaskDetail extends Rpc
{
}

/**
 * @method string getUserCallerParentId()
 * @method $this withUserCallerParentId($value)
 * @method string getApiType()
 * @method $this withApiType($value)
 * @method string getTimeout()
 * @method $this withTimeout($value)
 * @method string getUserMfaPresent()
 * @method $this withUserMfaPresent($value)
 * @method string getUserKp()
 * @method $this withUserKp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getValue()
 * @method $this withValue($value)
 * @method string getKey()
 * @method $this withKey($value)
 * @method string getUserCallerType()
 * @method $this withUserCallerType($value)
 * @method string getUserSecurityToken()
 * @method $this withUserSecurityToken($value)
 * @method string getUserAccessKeyId()
 * @method $this withUserAccessKeyId($value)
 * @method string getAliyunKp()
 * @method $this withAliyunKp($value)
 * @method string getUserBid()
 * @method $this withUserBid($value)
 * @method string getOriginalRequest()
 * @method $this withOriginalRequest($value)
 * @method string getRequestId()
 * @method $this withRequestId($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getBid()
 * @method $this withBid($value)
 */
class SetRedisValue extends Rpc
{
}

/**
 * @method string getAgreementCode()
 * @method $this withAgreementCode($value)
 */
class UpdateAgreementStatus extends Rpc
{
}
