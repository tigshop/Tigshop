<?php

namespace AlibabaCloud\Dypnsapi\V20170525;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method CheckSmsVerifyCode checkSmsVerifyCode(array $options = [])
 * @method CreateSchemeConfig createSchemeConfig(array $options = [])
 * @method CreateVerifyScheme createVerifyScheme(array $options = [])
 * @method DeleteVerifyScheme deleteVerifyScheme(array $options = [])
 * @method DescribeVerifyScheme describeVerifyScheme(array $options = [])
 * @method GetAuthorizationUrl getAuthorizationUrl(array $options = [])
 * @method GetAuthToken getAuthToken(array $options = [])
 * @method GetFusionAuthToken getFusionAuthToken(array $options = [])
 * @method GetMobile getMobile(array $options = [])
 * @method GetPhoneWithToken getPhoneWithToken(array $options = [])
 * @method GetSmsAuthTokens getSmsAuthTokens(array $options = [])
 * @method JyCreateVerifyScheme jyCreateVerifyScheme(array $options = [])
 * @method JyQueryAppInfoBySceneCode jyQueryAppInfoBySceneCode(array $options = [])
 * @method QueryGateVerifyBillingPublic queryGateVerifyBillingPublic(array $options = [])
 * @method QueryGateVerifyStatisticPublic queryGateVerifyStatisticPublic(array $options = [])
 * @method QuerySendDetails querySendDetails(array $options = [])
 * @method SendSmsVerifyCode sendSmsVerifyCode(array $options = [])
 * @method VerifyMobile verifyMobile(array $options = [])
 * @method VerifyPhoneWithToken verifyPhoneWithToken(array $options = [])
 * @method VerifySmsCode verifySmsCode(array $options = [])
 * @method VerifyWithFusionAuthToken verifyWithFusionAuthToken(array $options = [])
 */
class DypnsapiApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'Dypnsapi';

    /** @var string */
    public $version = '2017-05-25';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'dypnsapi';
}

/**
 * @method string getCaseAuthPolicy()
 * @method $this withCaseAuthPolicy($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCountryCode()
 * @method $this withCountryCode($value)
 * @method string getPhoneNumber()
 * @method $this withPhoneNumber($value)
 * @method string getExtendFunction()
 * @method $this withExtendFunction($value)
 * @method string getVerifyCode()
 * @method $this withVerifyCode($value)
 * @method string getRouteName()
 * @method $this withRouteName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSchemeName()
 * @method $this withSchemeName($value)
 * @method string getOutId()
 * @method $this withOutId($value)
 */
class CheckSmsVerifyCode extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAndroidPackageSign()
 * @method $this withAndroidPackageSign($value)
 * @method string getPlatform()
 * @method $this withPlatform($value)
 * @method string getH5Url()
 * @method $this withH5Url($value)
 * @method string getIosBundleId()
 * @method $this withIosBundleId($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getRouteName()
 * @method $this withRouteName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getH5Origin()
 * @method $this withH5Origin($value)
 * @method string getSchemeName()
 * @method $this withSchemeName($value)
 * @method string getAndroidPackageName()
 * @method $this withAndroidPackageName($value)
 */
class CreateSchemeConfig extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getOrigin()
 * @method $this withOrigin($value)
 * @method string getBundleId()
 * @method $this withBundleId($value)
 * @method string getAuthType()
 * @method $this withAuthType($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getIpWhiteList()
 * @method $this withIpWhiteList($value)
 * @method string getRouteName()
 * @method $this withRouteName($value)
 * @method string getEmail()
 * @method $this withEmail($value)
 * @method string getPackSign()
 * @method $this withPackSign($value)
 * @method string getPackName()
 * @method $this withPackName($value)
 * @method string getCuApiCode()
 * @method $this withCuApiCode($value)
 * @method string getSceneType()
 * @method $this withSceneType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getCtApiCode()
 * @method $this withCtApiCode($value)
 * @method string getOsType()
 * @method $this withOsType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getUrl()
 * @method $this withUrl($value)
 * @method string getCmApiCode()
 * @method $this withCmApiCode($value)
 * @method string getSchemeName()
 * @method $this withSchemeName($value)
 * @method string getSmsSignName()
 * @method $this withSmsSignName($value)
 */
class CreateVerifyScheme extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSchemeCode()
 * @method $this withSchemeCode($value)
 * @method string getCustomerId()
 * @method $this withCustomerId($value)
 */
class DeleteVerifyScheme extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSchemeCode()
 * @method $this withSchemeCode($value)
 * @method string getCustomerId()
 * @method $this withCustomerId($value)
 */
class DescribeVerifyScheme extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getSchemeId()
 * @method $this withSchemeId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPhoneNo()
 * @method $this withPhoneNo($value)
 * @method string getEndDate()
 * @method $this withEndDate($value)
 */
class GetAuthorizationUrl extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getOrigin()
 * @method $this withOrigin($value)
 * @method string getSceneCode()
 * @method $this withSceneCode($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getUrl()
 * @method $this withUrl($value)
 */
class GetAuthToken extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getBundleId()
 * @method $this withBundleId($value)
 * @method string getPlatform()
 * @method $this withPlatform($value)
 * @method string getSchemeCode()
 * @method $this withSchemeCode($value)
 * @method string getRouteName()
 * @method $this withRouteName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getPackageName()
 * @method $this withPackageName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPackageSign()
 * @method $this withPackageSign($value)
 * @method string getDurationSeconds()
 * @method $this withDurationSeconds($value)
 */
class GetFusionAuthToken extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getAccessToken()
 * @method $this withAccessToken($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getOutId()
 * @method $this withOutId($value)
 */
class GetMobile extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getProductCode()
 * @method $this withProductCode($value)
 * @method string getSpToken()
 * @method $this withSpToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class GetPhoneWithToken extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getProductCode()
 * @method $this withProductCode($value)
 * @method string getBundleId()
 * @method $this withBundleId($value)
 * @method string getSignName()
 * @method $this withSignName($value)
 * @method string getSceneCode()
 * @method $this withSceneCode($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getSmsCodeExpire()
 * @method $this withSmsCodeExpire($value)
 * @method string getPackageName()
 * @method $this withPackageName($value)
 * @method string getOsType()
 * @method $this withOsType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSmsTemplateCode()
 * @method $this withSmsTemplateCode($value)
 * @method string getExpire()
 * @method $this withExpire($value)
 */
class GetSmsAuthTokens extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getBundleId()
 * @method $this withBundleId($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getPackSign()
 * @method $this withPackSign($value)
 * @method string getPackName()
 * @method $this withPackName($value)
 * @method string getCuApiCode()
 * @method $this withCuApiCode($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getCtApiCode()
 * @method $this withCtApiCode($value)
 * @method string getOsType()
 * @method $this withOsType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getCmApiCode()
 * @method $this withCmApiCode($value)
 * @method string getSchemeName()
 * @method $this withSchemeName($value)
 */
class JyCreateVerifyScheme extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSceneCode()
 * @method $this withSceneCode($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class JyQueryAppInfoBySceneCode extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAuthenticationType()
 * @method $this withAuthenticationType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getProdCode()
 * @method $this withProdCode($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getMonth()
 * @method $this withMonth($value)
 */
class QueryGateVerifyBillingPublic extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAuthenticationType()
 * @method $this withAuthenticationType($value)
 * @method string getStartDate()
 * @method $this withStartDate($value)
 * @method string getSceneCode()
 * @method $this withSceneCode($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getProdCode()
 * @method $this withProdCode($value)
 * @method string getOsType()
 * @method $this withOsType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getEndDate()
 * @method $this withEndDate($value)
 */
class QueryGateVerifyStatisticPublic extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPhoneNumber()
 * @method $this withPhoneNumber($value)
 * @method string getExtendFunction()
 * @method $this withExtendFunction($value)
 * @method string getSendDate()
 * @method $this withSendDate($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getRouteName()
 * @method $this withRouteName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class QuerySendDetails extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCountryCode()
 * @method $this withCountryCode($value)
 * @method string getPhoneNumber()
 * @method $this withPhoneNumber($value)
 * @method string getExtendFunction()
 * @method $this withExtendFunction($value)
 * @method string getSmsUpExtendCode()
 * @method $this withSmsUpExtendCode($value)
 * @method string getSignName()
 * @method $this withSignName($value)
 * @method string getRouteName()
 * @method $this withRouteName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getValidTime()
 * @method $this withValidTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getReturnVerifyCode()
 * @method $this withReturnVerifyCode($value)
 * @method string getCodeType()
 * @method $this withCodeType($value)
 * @method string getSchemeName()
 * @method $this withSchemeName($value)
 * @method string getDuplicatePolicy()
 * @method $this withDuplicatePolicy($value)
 * @method string getOutId()
 * @method $this withOutId($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 * @method string getTemplateCode()
 * @method $this withTemplateCode($value)
 * @method string getTemplateParam()
 * @method $this withTemplateParam($value)
 * @method string getCodeLength()
 * @method $this withCodeLength($value)
 */
class SendSmsVerifyCode extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPhoneNumber()
 * @method $this withPhoneNumber($value)
 * @method string getAccessCode()
 * @method $this withAccessCode($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getOutId()
 * @method $this withOutId($value)
 */
class VerifyMobile extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getPhoneNumber()
 * @method $this withPhoneNumber($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSpToken()
 * @method $this withSpToken($value)
 */
class VerifyPhoneWithToken extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getProductCode()
 * @method $this withProductCode($value)
 * @method string getSmsToken()
 * @method $this withSmsToken($value)
 * @method string getPhoneNumber()
 * @method $this withPhoneNumber($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSmsCode()
 * @method $this withSmsCode($value)
 */
class VerifySmsCode extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getExtendFunction()
 * @method $this withExtendFunction($value)
 * @method string getRouteName()
 * @method $this withRouteName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getVerifyToken()
 * @method $this withVerifyToken($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class VerifyWithFusionAuthToken extends Rpc
{
}
