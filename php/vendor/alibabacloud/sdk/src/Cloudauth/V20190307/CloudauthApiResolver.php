<?php

namespace AlibabaCloud\Cloudauth\V20190307;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AIGCFaceVerify aIGCFaceVerify(array $options = [])
 * @method BankMetaVerify bankMetaVerify(array $options = [])
 * @method CompareFaces compareFaces(array $options = [])
 * @method CompareFaceVerify compareFaceVerify(array $options = [])
 * @method ContrastFaceVerify contrastFaceVerify(array $options = [])
 * @method CreateAuthKey createAuthKey(array $options = [])
 * @method CreateVerifySetting createVerifySetting(array $options = [])
 * @method CredentialProductVerifyV2 credentialProductVerifyV2(array $options = [])
 * @method CredentialVerify credentialVerify(array $options = [])
 * @method CredentialVerifyV2 credentialVerifyV2(array $options = [])
 * @method DeepfakeDetect deepfakeDetect(array $options = [])
 * @method DeleteFaceVerifyResult deleteFaceVerifyResult(array $options = [])
 * @method DescribeCardVerify describeCardVerify(array $options = [])
 * @method DescribeDeviceInfo describeDeviceInfo(array $options = [])
 * @method DescribeFaceGuardRisk describeFaceGuardRisk(array $options = [])
 * @method DescribeFaceVerify describeFaceVerify(array $options = [])
 * @method DescribeOssUploadToken describeOssUploadToken(array $options = [])
 * @method DescribePageFaceVerifyData describePageFaceVerifyData(array $options = [])
 * @method DescribeSmartStatisticsPageList describeSmartStatisticsPageList(array $options = [])
 * @method DescribeVerifyResult describeVerifyResult(array $options = [])
 * @method DescribeVerifySDK describeVerifySDK(array $options = [])
 * @method DescribeVerifyToken describeVerifyToken(array $options = [])
 * @method DetectFaceAttributes detectFaceAttributes(array $options = [])
 * @method Id2MetaPeriodVerify id2MetaPeriodVerify(array $options = [])
 * @method Id2MetaStandardVerify id2MetaStandardVerify(array $options = [])
 * @method Id2MetaVerify id2MetaVerify(array $options = [])
 * @method Id2MetaVerifyWithOCR id2MetaVerifyWithOCR(array $options = [])
 * @method InitCardVerify initCardVerify(array $options = [])
 * @method InitFaceVerify initFaceVerify(array $options = [])
 * @method InsertWhiteListSetting insertWhiteListSetting(array $options = [])
 * @method LivenessFaceVerify livenessFaceVerify(array $options = [])
 * @method Mobile2MetaVerify mobile2MetaVerify(array $options = [])
 * @method Mobile3MetaDetailStandardVerify mobile3MetaDetailStandardVerify(array $options = [])
 * @method Mobile3MetaDetailVerify mobile3MetaDetailVerify(array $options = [])
 * @method Mobile3MetaSimpleStandardVerify mobile3MetaSimpleStandardVerify(array $options = [])
 * @method Mobile3MetaSimpleVerify mobile3MetaSimpleVerify(array $options = [])
 * @method MobileDetect mobileDetect(array $options = [])
 * @method MobileOnlineStatus mobileOnlineStatus(array $options = [])
 * @method MobileOnlineTime mobileOnlineTime(array $options = [])
 * @method ModifyDeviceInfo modifyDeviceInfo(array $options = [])
 * @method PageQueryWhiteListSetting pageQueryWhiteListSetting(array $options = [])
 * @method RemoveWhiteListSetting removeWhiteListSetting(array $options = [])
 * @method Vehicle5ItemQuery vehicle5ItemQuery(array $options = [])
 * @method VehicleInsureQuery vehicleInsureQuery(array $options = [])
 * @method VehicleMetaVerify vehicleMetaVerify(array $options = [])
 * @method VehicleMetaVerifyV2 vehicleMetaVerifyV2(array $options = [])
 * @method VehicleQuery vehicleQuery(array $options = [])
 * @method VerifyMaterial verifyMaterial(array $options = [])
 */
class CloudauthApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'Cloudauth';

    /** @var string */
    public $version = '2019-03-07';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    protected $scheme = 'https';

    /** @var string */
    public $serviceCode = 'cloudauth';
}

/**
 * @method string getProductCode()
 * @method $this withProductCode($value)
 * @method string getOssObjectName()
 * @method $this withOssObjectName($value)
 * @method string getFaceContrastPicture()
 * @method string getOuterOrderNo()
 * @method $this withOuterOrderNo($value)
 * @method string getFaceContrastPictureUrl()
 * @method $this withFaceContrastPictureUrl($value)
 * @method string getSceneId()
 * @method $this withSceneId($value)
 * @method string getOssBucketName()
 * @method $this withOssBucketName($value)
 */
class AIGCFaceVerify extends Rpc
{

    /** @var string */
    public $scheme = 'http';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFaceContrastPicture($value)
    {
        $this->data['FaceContrastPicture'] = $value;
        $this->options['form_params']['FaceContrastPicture'] = $value;

        return $this;
    }
}

/**
 * @method string getParamType()
 * @method $this withParamType($value)
 * @method string getVerifyMode()
 * @method $this withVerifyMode($value)
 * @method string getIdentityType()
 * @method $this withIdentityType($value)
 * @method string getMobile()
 * @method $this withMobile($value)
 * @method string getIdentifyNum()
 * @method $this withIdentifyNum($value)
 * @method string getProductType()
 * @method $this withProductType($value)
 * @method string getBankCard()
 * @method $this withBankCard($value)
 * @method string getUserName()
 * @method $this withUserName($value)
 */
class BankMetaVerify extends Rpc
{
}

/**
 * @method string getSourceImageType()
 * @method string getTargetImageType()
 * @method string getTargetImageValue()
 * @method string getBizType()
 * @method string getSourceImageValue()
 */
class CompareFaces extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSourceImageType($value)
    {
        $this->data['SourceImageType'] = $value;
        $this->options['form_params']['SourceImageType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTargetImageType($value)
    {
        $this->data['TargetImageType'] = $value;
        $this->options['form_params']['TargetImageType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTargetImageValue($value)
    {
        $this->data['TargetImageValue'] = $value;
        $this->options['form_params']['TargetImageValue'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizType($value)
    {
        $this->data['BizType'] = $value;
        $this->options['form_params']['BizType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSourceImageValue($value)
    {
        $this->data['SourceImageValue'] = $value;
        $this->options['form_params']['SourceImageValue'] = $value;

        return $this;
    }
}

/**
 * @method string getProductCode()
 * @method string getTargetCertifyId()
 * @method string getTargetFaceContrastPicture()
 * @method string getTargetOssBucketName()
 * @method string getOuterOrderNo()
 * @method string getSourceFaceContrastPicture()
 * @method string getSourceCertifyId()
 * @method string getTargetFaceContrastPictureUrl()
 * @method string getSourceOssObjectName()
 * @method string getSourceOssBucketName()
 * @method string getTargetOssObjectName()
 * @method string getSceneId()
 * @method string getSourceFaceContrastPictureUrl()
 * @method string getCrop()
 */
class CompareFaceVerify extends Rpc
{

    /** @var string */
    public $scheme = 'http';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProductCode($value)
    {
        $this->data['ProductCode'] = $value;
        $this->options['form_params']['ProductCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTargetCertifyId($value)
    {
        $this->data['TargetCertifyId'] = $value;
        $this->options['form_params']['TargetCertifyId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTargetFaceContrastPicture($value)
    {
        $this->data['TargetFaceContrastPicture'] = $value;
        $this->options['form_params']['TargetFaceContrastPicture'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTargetOssBucketName($value)
    {
        $this->data['TargetOssBucketName'] = $value;
        $this->options['form_params']['TargetOssBucketName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOuterOrderNo($value)
    {
        $this->data['OuterOrderNo'] = $value;
        $this->options['form_params']['OuterOrderNo'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSourceFaceContrastPicture($value)
    {
        $this->data['SourceFaceContrastPicture'] = $value;
        $this->options['form_params']['SourceFaceContrastPicture'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSourceCertifyId($value)
    {
        $this->data['SourceCertifyId'] = $value;
        $this->options['form_params']['SourceCertifyId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTargetFaceContrastPictureUrl($value)
    {
        $this->data['TargetFaceContrastPictureUrl'] = $value;
        $this->options['form_params']['TargetFaceContrastPictureUrl'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSourceOssObjectName($value)
    {
        $this->data['SourceOssObjectName'] = $value;
        $this->options['form_params']['SourceOssObjectName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSourceOssBucketName($value)
    {
        $this->data['SourceOssBucketName'] = $value;
        $this->options['form_params']['SourceOssBucketName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTargetOssObjectName($value)
    {
        $this->data['TargetOssObjectName'] = $value;
        $this->options['form_params']['TargetOssObjectName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSceneId($value)
    {
        $this->data['SceneId'] = $value;
        $this->options['form_params']['SceneId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSourceFaceContrastPictureUrl($value)
    {
        $this->data['SourceFaceContrastPictureUrl'] = $value;
        $this->options['form_params']['SourceFaceContrastPictureUrl'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCrop($value)
    {
        $this->data['Crop'] = $value;
        $this->options['form_params']['Crop'] = $value;

        return $this;
    }
}

/**
 * @method string getProductCode()
 * @method string getFaceContrastPicture()
 * @method string getDeviceToken()
 * @method string getUserId()
 * @method string getCertifyId()
 * @method string getEncryptType()
 * @method string getCertNo()
 * @method string getOuterOrderNo()
 * @method string getCertType()
 * @method string getFaceContrastPictureUrl()
 * @method string getModel()
 * @method $this withModel($value)
 * @method string getOssObjectName()
 * @method string getCertName()
 * @method string getIp()
 * @method string getMobile()
 * @method string getFaceContrastFile()
 * @method string getSceneId()
 * @method string getOssBucketName()
 * @method string getCrop()
 */
class ContrastFaceVerify extends Rpc
{

    /** @var string */
    public $scheme = 'http';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProductCode($value)
    {
        $this->data['ProductCode'] = $value;
        $this->options['form_params']['ProductCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFaceContrastPicture($value)
    {
        $this->data['FaceContrastPicture'] = $value;
        $this->options['form_params']['FaceContrastPicture'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeviceToken($value)
    {
        $this->data['DeviceToken'] = $value;
        $this->options['form_params']['DeviceToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserId($value)
    {
        $this->data['UserId'] = $value;
        $this->options['form_params']['UserId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCertifyId($value)
    {
        $this->data['CertifyId'] = $value;
        $this->options['form_params']['CertifyId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEncryptType($value)
    {
        $this->data['EncryptType'] = $value;
        $this->options['form_params']['EncryptType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCertNo($value)
    {
        $this->data['CertNo'] = $value;
        $this->options['form_params']['CertNo'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOuterOrderNo($value)
    {
        $this->data['OuterOrderNo'] = $value;
        $this->options['form_params']['OuterOrderNo'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCertType($value)
    {
        $this->data['CertType'] = $value;
        $this->options['form_params']['CertType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFaceContrastPictureUrl($value)
    {
        $this->data['FaceContrastPictureUrl'] = $value;
        $this->options['form_params']['FaceContrastPictureUrl'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOssObjectName($value)
    {
        $this->data['OssObjectName'] = $value;
        $this->options['form_params']['OssObjectName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCertName($value)
    {
        $this->data['CertName'] = $value;
        $this->options['form_params']['CertName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIp($value)
    {
        $this->data['Ip'] = $value;
        $this->options['form_params']['Ip'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMobile($value)
    {
        $this->data['Mobile'] = $value;
        $this->options['form_params']['Mobile'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFaceContrastFile($value)
    {
        $this->data['FaceContrastFile'] = $value;
        $this->options['form_params']['FaceContrastFile'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSceneId($value)
    {
        $this->data['SceneId'] = $value;
        $this->options['form_params']['SceneId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOssBucketName($value)
    {
        $this->data['OssBucketName'] = $value;
        $this->options['form_params']['OssBucketName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCrop($value)
    {
        $this->data['Crop'] = $value;
        $this->options['form_params']['Crop'] = $value;

        return $this;
    }
}

/**
 * @method string getUserDeviceId()
 * @method $this withUserDeviceId($value)
 * @method string getTest()
 * @method $this withTest($value)
 * @method string getBizType()
 * @method $this withBizType($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getAuthYears()
 * @method $this withAuthYears($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class CreateAuthKey extends Rpc
{

    /** @var string */
    public $scheme = 'http';
}

/**
 * @method string getGuideStep()
 * @method $this withGuideStep($value)
 * @method string getResultStep()
 * @method $this withResultStep($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getSolution()
 * @method $this withSolution($value)
 * @method string getBizName()
 * @method $this withBizName($value)
 * @method string getBizType()
 * @method $this withBizType($value)
 * @method string getPrivacyStep()
 * @method $this withPrivacyStep($value)
 */
class CreateVerifySetting extends Rpc
{

    /** @var string */
    public $scheme = 'http';
}

/**
 * @method string getProductCode()
 * @method $this withProductCode($value)
 * @method string getCredType()
 * @method $this withCredType($value)
 * @method string getImageFile()
 * @method string getCredName()
 * @method $this withCredName($value)
 * @method string getMerchantId()
 * @method $this withMerchantId($value)
 * @method string getImageUrl()
 * @method $this withImageUrl($value)
 */
class CredentialProductVerifyV2 extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageFile($value)
    {
        $this->data['ImageFile'] = $value;
        $this->options['form_params']['ImageFile'] = $value;

        return $this;
    }
}

/**
 * @method string getProductCode()
 * @method $this withProductCode($value)
 * @method string getIsOCR()
 * @method $this withIsOCR($value)
 * @method string getIsCheck()
 * @method $this withIsCheck($value)
 * @method string getImageContext()
 * @method string getCredType()
 * @method $this withCredType($value)
 * @method string getPromptModel()
 * @method $this withPromptModel($value)
 * @method string getIdentifyNum()
 * @method $this withIdentifyNum($value)
 * @method string getCredName()
 * @method $this withCredName($value)
 * @method string getMerchantId()
 * @method $this withMerchantId($value)
 * @method string getMerchantDetail()
 * @method $this withMerchantDetail($value)
 * @method string getImageUrl()
 * @method $this withImageUrl($value)
 * @method string getCertNum()
 * @method $this withCertNum($value)
 * @method string getPrompt()
 * @method $this withPrompt($value)
 * @method string getUserName()
 * @method $this withUserName($value)
 */
class CredentialVerify extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageContext($value)
    {
        $this->data['ImageContext'] = $value;
        $this->options['form_params']['ImageContext'] = $value;

        return $this;
    }
}

/**
 * @method string getProductCode()
 * @method $this withProductCode($value)
 * @method string getIsOcr()
 * @method $this withIsOcr($value)
 * @method string getIsCheck()
 * @method $this withIsCheck($value)
 * @method string getImageContext()
 * @method string getCredType()
 * @method $this withCredType($value)
 * @method string getImageFile()
 * @method string getPromptModel()
 * @method $this withPromptModel($value)
 * @method string getIdentifyNum()
 * @method $this withIdentifyNum($value)
 * @method string getCredName()
 * @method $this withCredName($value)
 * @method string getMerchantId()
 * @method $this withMerchantId($value)
 * @method string getMerchantDetail()
 * @method $this withMerchantDetail($value)
 * @method string getImageUrl()
 * @method $this withImageUrl($value)
 * @method string getCertNum()
 * @method $this withCertNum($value)
 * @method string getPrompt()
 * @method $this withPrompt($value)
 * @method string getUserName()
 * @method $this withUserName($value)
 */
class CredentialVerifyV2 extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageContext($value)
    {
        $this->data['ImageContext'] = $value;
        $this->options['form_params']['ImageContext'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageFile($value)
    {
        $this->data['ImageFile'] = $value;
        $this->options['form_params']['ImageFile'] = $value;

        return $this;
    }
}

/**
 * @method string getFaceBase64()
 * @method string getOuterOrderNo()
 * @method $this withOuterOrderNo($value)
 * @method string getFaceUrl()
 * @method $this withFaceUrl($value)
 * @method string getFaceInputType()
 * @method $this withFaceInputType($value)
 */
class DeepfakeDetect extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFaceBase64($value)
    {
        $this->data['FaceBase64'] = $value;
        $this->options['form_params']['FaceBase64'] = $value;

        return $this;
    }
}

/**
 * @method string getDeleteAfterQuery()
 * @method $this withDeleteAfterQuery($value)
 * @method string getCertifyId()
 * @method $this withCertifyId($value)
 */
class DeleteFaceVerifyResult extends Rpc
{
}

/**
 * @method string getCertifyId()
 * @method $this withCertifyId($value)
 */
class DescribeCardVerify extends Rpc
{
}

/**
 * @method string getUserDeviceId()
 * @method $this withUserDeviceId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getExpiredStartDay()
 * @method $this withExpiredStartDay($value)
 * @method string getTotalCount()
 * @method $this withTotalCount($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getDeviceId()
 * @method $this withDeviceId($value)
 * @method string getBizType()
 * @method $this withBizType($value)
 * @method string getExpiredEndDay()
 * @method $this withExpiredEndDay($value)
 */
class DescribeDeviceInfo extends Rpc
{

    /** @var string */
    public $scheme = 'http';
}

/**
 * @method string getProductCode()
 * @method $this withProductCode($value)
 * @method string getDeviceToken()
 * @method $this withDeviceToken($value)
 * @method string getOuterOrderNo()
 * @method $this withOuterOrderNo($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class DescribeFaceGuardRisk extends Rpc
{
}

/**
 * @method string getCertifyId()
 * @method $this withCertifyId($value)
 * @method string getPictureReturnType()
 * @method $this withPictureReturnType($value)
 * @method string getSceneId()
 * @method $this withSceneId($value)
 */
class DescribeFaceVerify extends Rpc
{

    /** @var string */
    public $scheme = 'http';
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DescribeOssUploadToken extends Rpc
{

    /** @var string */
    public $scheme = 'http';
}

/**
 * @method string getProductCode()
 * @method $this withProductCode($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getStartDate()
 * @method $this withStartDate($value)
 * @method string getEndDate()
 * @method $this withEndDate($value)
 * @method string getSceneId()
 * @method $this withSceneId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class DescribePageFaceVerifyData extends Rpc
{

    /** @var string */
    public $scheme = 'http';
}

/**
 * @method string getStartDate()
 * @method $this withStartDate($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getEndDate()
 * @method $this withEndDate($value)
 * @method string getServiceCode()
 * @method $this withServiceCode($value)
 * @method string getSceneId()
 * @method $this withSceneId($value)
 */
class DescribeSmartStatisticsPageList extends Rpc
{

    /** @var string */
    public $scheme = 'http';
}

/**
 * @method string getBizType()
 * @method $this withBizType($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class DescribeVerifyResult extends Rpc
{

    /** @var string */
    public $scheme = 'http';
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class DescribeVerifySDK extends Rpc
{

    /** @var string */
    public $scheme = 'http';
}

/**
 * @method string getFaceRetainedImageUrl()
 * @method $this withFaceRetainedImageUrl($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getCallbackSeed()
 * @method $this withCallbackSeed($value)
 * @method string getUserIp()
 * @method $this withUserIp($value)
 * @method string getIdCardBackImageUrl()
 * @method $this withIdCardBackImageUrl($value)
 * @method string getIdCardNumber()
 * @method $this withIdCardNumber($value)
 * @method string getIdCardFrontImageUrl()
 * @method $this withIdCardFrontImageUrl($value)
 * @method string getBizType()
 * @method $this withBizType($value)
 * @method string getPassedRedirectUrl()
 * @method $this withPassedRedirectUrl($value)
 * @method string getUserRegistTime()
 * @method $this withUserRegistTime($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getUserPhoneNumber()
 * @method $this withUserPhoneNumber($value)
 * @method string getCallbackUrl()
 * @method $this withCallbackUrl($value)
 * @method string getFailedRedirectUrl()
 * @method $this withFailedRedirectUrl($value)
 */
class DescribeVerifyToken extends Rpc
{

    /** @var string */
    public $scheme = 'http';
}

/**
 * @method string getBizType()
 * @method string getMaterialValue()
 */
class DetectFaceAttributes extends Rpc
{

    /** @var string */
    public $scheme = 'http';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizType($value)
    {
        $this->data['BizType'] = $value;
        $this->options['form_params']['BizType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMaterialValue($value)
    {
        $this->data['MaterialValue'] = $value;
        $this->options['form_params']['MaterialValue'] = $value;

        return $this;
    }
}

/**
 * @method string getParamType()
 * @method string getValidityStartDate()
 * @method string getValidityEndDate()
 * @method string getIdentifyNum()
 * @method string getUserName()
 */
class Id2MetaPeriodVerify extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withParamType($value)
    {
        $this->data['ParamType'] = $value;
        $this->options['form_params']['ParamType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withValidityStartDate($value)
    {
        $this->data['ValidityStartDate'] = $value;
        $this->options['form_params']['ValidityStartDate'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withValidityEndDate($value)
    {
        $this->data['ValidityEndDate'] = $value;
        $this->options['form_params']['ValidityEndDate'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIdentifyNum($value)
    {
        $this->data['IdentifyNum'] = $value;
        $this->options['form_params']['IdentifyNum'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserName($value)
    {
        $this->data['UserName'] = $value;
        $this->options['form_params']['UserName'] = $value;

        return $this;
    }
}

/**
 * @method string getParamType()
 * @method string getIdentifyNum()
 * @method string getUserName()
 */
class Id2MetaStandardVerify extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withParamType($value)
    {
        $this->data['ParamType'] = $value;
        $this->options['form_params']['ParamType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIdentifyNum($value)
    {
        $this->data['IdentifyNum'] = $value;
        $this->options['form_params']['IdentifyNum'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserName($value)
    {
        $this->data['UserName'] = $value;
        $this->options['form_params']['UserName'] = $value;

        return $this;
    }
}

/**
 * @method string getParamType()
 * @method string getIdentifyNum()
 * @method string getUserName()
 */
class Id2MetaVerify extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withParamType($value)
    {
        $this->data['ParamType'] = $value;
        $this->options['form_params']['ParamType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIdentifyNum($value)
    {
        $this->data['IdentifyNum'] = $value;
        $this->options['form_params']['IdentifyNum'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserName($value)
    {
        $this->data['UserName'] = $value;
        $this->options['form_params']['UserName'] = $value;

        return $this;
    }
}

/**
 * @method string getCertNationalUrl()
 * @method string getCertFile()
 * @method string getCertUrl()
 * @method string getCertNationalFile()
 */
class Id2MetaVerifyWithOCR extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCertNationalUrl($value)
    {
        $this->data['CertNationalUrl'] = $value;
        $this->options['form_params']['CertNationalUrl'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCertFile($value)
    {
        $this->data['CertFile'] = $value;
        $this->options['form_params']['CertFile'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCertUrl($value)
    {
        $this->data['CertUrl'] = $value;
        $this->options['form_params']['CertUrl'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCertNationalFile($value)
    {
        $this->data['CertNationalFile'] = $value;
        $this->options['form_params']['CertNationalFile'] = $value;

        return $this;
    }
}

/**
 * @method string getDocScanMode()
 * @method $this withDocScanMode($value)
 * @method string getVerifyMeta()
 * @method $this withVerifyMeta($value)
 * @method string getPictureSave()
 * @method $this withPictureSave($value)
 * @method string getMerchantBizId()
 * @method $this withMerchantBizId($value)
 * @method string getModel()
 * @method $this withModel($value)
 * @method string getCardPageNumber()
 * @method $this withCardPageNumber($value)
 * @method string getCardType()
 * @method $this withCardType($value)
 * @method string getMetaInfo()
 * @method $this withMetaInfo($value)
 * @method string getCallbackToken()
 * @method $this withCallbackToken($value)
 * @method string getCallbackUrl()
 * @method $this withCallbackUrl($value)
 */
class InitCardVerify extends Rpc
{
}

/**
 * @method string getFaceContrastPicture()
 * @method string getReadImg()
 * @method $this withReadImg($value)
 * @method string getRarelyCharacters()
 * @method $this withRarelyCharacters($value)
 * @method string getVoluntaryCustomizedContent()
 * @method $this withVoluntaryCustomizedContent($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getEncryptType()
 * @method $this withEncryptType($value)
 * @method string getMode()
 * @method $this withMode($value)
 * @method string getOuterOrderNo()
 * @method $this withOuterOrderNo($value)
 * @method string getFaceContrastPictureUrl()
 * @method $this withFaceContrastPictureUrl($value)
 * @method string getModel()
 * @method string getCertifyUrlStyle()
 * @method $this withCertifyUrlStyle($value)
 * @method string getMetaInfo()
 * @method $this withMetaInfo($value)
 * @method string getCameraSelection()
 * @method $this withCameraSelection($value)
 * @method string getValidityDate()
 * @method $this withValidityDate($value)
 * @method string getCertName()
 * @method $this withCertName($value)
 * @method string getIp()
 * @method $this withIp($value)
 * @method string getSceneId()
 * @method $this withSceneId($value)
 * @method string getOssBucketName()
 * @method $this withOssBucketName($value)
 * @method string getCrop()
 * @method string getCertifyUrlType()
 * @method $this withCertifyUrlType($value)
 * @method string getBirthday()
 * @method $this withBirthday($value)
 * @method string getExperienceCode()
 * @method $this withExperienceCode($value)
 * @method string getProductCode()
 * @method $this withProductCode($value)
 * @method string getVideoEvidence()
 * @method $this withVideoEvidence($value)
 * @method string getCertifyId()
 * @method $this withCertifyId($value)
 * @method string getCertNo()
 * @method $this withCertNo($value)
 * @method string getCertType()
 * @method $this withCertType($value)
 * @method string getSuitableType()
 * @method $this withSuitableType($value)
 * @method string getOssObjectName()
 * @method $this withOssObjectName($value)
 * @method string getAppQualityCheck()
 * @method $this withAppQualityCheck($value)
 * @method string getMobile()
 * @method $this withMobile($value)
 * @method string getFaceGuardOutput()
 * @method $this withFaceGuardOutput($value)
 * @method string getAuthId()
 * @method string getProcedurePriority()
 * @method $this withProcedurePriority($value)
 * @method string getCallbackToken()
 * @method $this withCallbackToken($value)
 * @method string getUiCustomUrl()
 * @method $this withUiCustomUrl($value)
 * @method string getReturnUrl()
 * @method $this withReturnUrl($value)
 * @method string getCallbackUrl()
 * @method $this withCallbackUrl($value)
 */
class InitFaceVerify extends Rpc
{

    /** @var string */
    public $scheme = 'http';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFaceContrastPicture($value)
    {
        $this->data['FaceContrastPicture'] = $value;
        $this->options['form_params']['FaceContrastPicture'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withModel($value)
    {
        $this->data['Model'] = $value;
        $this->options['form_params']['Model'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCrop($value)
    {
        $this->data['Crop'] = $value;
        $this->options['form_params']['Crop'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAuthId($value)
    {
        $this->data['AuthId'] = $value;
        $this->options['form_params']['AuthId'] = $value;

        return $this;
    }
}

/**
 * @method string getValidDay()
 * @method $this withValidDay($value)
 * @method string getRemark()
 * @method $this withRemark($value)
 * @method string getCertifyId()
 * @method $this withCertifyId($value)
 * @method string getCertNo()
 * @method $this withCertNo($value)
 * @method string getServiceCode()
 * @method $this withServiceCode($value)
 * @method string getSceneId()
 * @method $this withSceneId($value)
 */
class InsertWhiteListSetting extends Rpc
{
}

/**
 * @method string getProductCode()
 * @method string getFaceContrastPicture()
 * @method string getDeviceToken()
 * @method string getUserId()
 * @method string getCertifyId()
 * @method string getOuterOrderNo()
 * @method string getFaceContrastPictureUrl()
 * @method string getModel()
 * @method $this withModel($value)
 * @method string getOssObjectName()
 * @method string getIp()
 * @method string getMobile()
 * @method string getSceneId()
 * @method string getOssBucketName()
 * @method string getCrop()
 */
class LivenessFaceVerify extends Rpc
{

    /** @var string */
    public $scheme = 'http';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProductCode($value)
    {
        $this->data['ProductCode'] = $value;
        $this->options['form_params']['ProductCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFaceContrastPicture($value)
    {
        $this->data['FaceContrastPicture'] = $value;
        $this->options['form_params']['FaceContrastPicture'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeviceToken($value)
    {
        $this->data['DeviceToken'] = $value;
        $this->options['form_params']['DeviceToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserId($value)
    {
        $this->data['UserId'] = $value;
        $this->options['form_params']['UserId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCertifyId($value)
    {
        $this->data['CertifyId'] = $value;
        $this->options['form_params']['CertifyId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOuterOrderNo($value)
    {
        $this->data['OuterOrderNo'] = $value;
        $this->options['form_params']['OuterOrderNo'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFaceContrastPictureUrl($value)
    {
        $this->data['FaceContrastPictureUrl'] = $value;
        $this->options['form_params']['FaceContrastPictureUrl'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOssObjectName($value)
    {
        $this->data['OssObjectName'] = $value;
        $this->options['form_params']['OssObjectName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIp($value)
    {
        $this->data['Ip'] = $value;
        $this->options['form_params']['Ip'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMobile($value)
    {
        $this->data['Mobile'] = $value;
        $this->options['form_params']['Mobile'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSceneId($value)
    {
        $this->data['SceneId'] = $value;
        $this->options['form_params']['SceneId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOssBucketName($value)
    {
        $this->data['OssBucketName'] = $value;
        $this->options['form_params']['OssBucketName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCrop($value)
    {
        $this->data['Crop'] = $value;
        $this->options['form_params']['Crop'] = $value;

        return $this;
    }
}

/**
 * @method string getParamType()
 * @method string getMobile()
 * @method string getUserName()
 */
class Mobile2MetaVerify extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withParamType($value)
    {
        $this->data['ParamType'] = $value;
        $this->options['form_params']['ParamType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMobile($value)
    {
        $this->data['Mobile'] = $value;
        $this->options['form_params']['Mobile'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserName($value)
    {
        $this->data['UserName'] = $value;
        $this->options['form_params']['UserName'] = $value;

        return $this;
    }
}

/**
 * @method string getParamType()
 * @method string getMobile()
 * @method string getIdentifyNum()
 * @method string getUserName()
 */
class Mobile3MetaDetailStandardVerify extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withParamType($value)
    {
        $this->data['ParamType'] = $value;
        $this->options['form_params']['ParamType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMobile($value)
    {
        $this->data['Mobile'] = $value;
        $this->options['form_params']['Mobile'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIdentifyNum($value)
    {
        $this->data['IdentifyNum'] = $value;
        $this->options['form_params']['IdentifyNum'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserName($value)
    {
        $this->data['UserName'] = $value;
        $this->options['form_params']['UserName'] = $value;

        return $this;
    }
}

/**
 * @method string getParamType()
 * @method string getMobile()
 * @method string getIdentifyNum()
 * @method string getUserName()
 */
class Mobile3MetaDetailVerify extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withParamType($value)
    {
        $this->data['ParamType'] = $value;
        $this->options['form_params']['ParamType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMobile($value)
    {
        $this->data['Mobile'] = $value;
        $this->options['form_params']['Mobile'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIdentifyNum($value)
    {
        $this->data['IdentifyNum'] = $value;
        $this->options['form_params']['IdentifyNum'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserName($value)
    {
        $this->data['UserName'] = $value;
        $this->options['form_params']['UserName'] = $value;

        return $this;
    }
}

/**
 * @method string getParamType()
 * @method string getMobile()
 * @method string getIdentifyNum()
 * @method string getUserName()
 */
class Mobile3MetaSimpleStandardVerify extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withParamType($value)
    {
        $this->data['ParamType'] = $value;
        $this->options['form_params']['ParamType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMobile($value)
    {
        $this->data['Mobile'] = $value;
        $this->options['form_params']['Mobile'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIdentifyNum($value)
    {
        $this->data['IdentifyNum'] = $value;
        $this->options['form_params']['IdentifyNum'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserName($value)
    {
        $this->data['UserName'] = $value;
        $this->options['form_params']['UserName'] = $value;

        return $this;
    }
}

/**
 * @method string getParamType()
 * @method string getMobile()
 * @method string getIdentifyNum()
 * @method string getUserName()
 */
class Mobile3MetaSimpleVerify extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withParamType($value)
    {
        $this->data['ParamType'] = $value;
        $this->options['form_params']['ParamType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMobile($value)
    {
        $this->data['Mobile'] = $value;
        $this->options['form_params']['Mobile'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIdentifyNum($value)
    {
        $this->data['IdentifyNum'] = $value;
        $this->options['form_params']['IdentifyNum'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserName($value)
    {
        $this->data['UserName'] = $value;
        $this->options['form_params']['UserName'] = $value;

        return $this;
    }
}

/**
 * @method string getParamType()
 * @method string getMobiles()
 */
class MobileDetect extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withParamType($value)
    {
        $this->data['ParamType'] = $value;
        $this->options['form_params']['ParamType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMobiles($value)
    {
        $this->data['Mobiles'] = $value;
        $this->options['form_params']['Mobiles'] = $value;

        return $this;
    }
}

/**
 * @method string getParamType()
 * @method string getMobile()
 */
class MobileOnlineStatus extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withParamType($value)
    {
        $this->data['ParamType'] = $value;
        $this->options['form_params']['ParamType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMobile($value)
    {
        $this->data['Mobile'] = $value;
        $this->options['form_params']['Mobile'] = $value;

        return $this;
    }
}

/**
 * @method string getParamType()
 * @method string getMobile()
 */
class MobileOnlineTime extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withParamType($value)
    {
        $this->data['ParamType'] = $value;
        $this->options['form_params']['ParamType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMobile($value)
    {
        $this->data['Mobile'] = $value;
        $this->options['form_params']['Mobile'] = $value;

        return $this;
    }
}

/**
 * @method string getUserDeviceId()
 * @method $this withUserDeviceId($value)
 * @method string getDuration()
 * @method $this withDuration($value)
 * @method string getExpiredDay()
 * @method $this withExpiredDay($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getDeviceId()
 * @method $this withDeviceId($value)
 * @method string getBizType()
 * @method $this withBizType($value)
 */
class ModifyDeviceInfo extends Rpc
{

    /** @var string */
    public $scheme = 'http';
}

/**
 * @method string getValidEndDate()
 * @method $this withValidEndDate($value)
 * @method string getCertifyId()
 * @method $this withCertifyId($value)
 * @method string getCertNo()
 * @method $this withCertNo($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getServiceCode()
 * @method $this withServiceCode($value)
 * @method string getSceneId()
 * @method $this withSceneId($value)
 * @method string getValidStartDate()
 * @method $this withValidStartDate($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class PageQueryWhiteListSetting extends Rpc
{
}

/**
 * @method string getServiceCode()
 * @method $this withServiceCode($value)
 * @method string getIds()
 * @method $this withIds($value)
 */
class RemoveWhiteListSetting extends Rpc
{
}

/**
 * @method string getVehicleType()
 * @method $this withVehicleType($value)
 * @method string getParamType()
 * @method $this withParamType($value)
 * @method string getVehicleNum()
 * @method $this withVehicleNum($value)
 */
class Vehicle5ItemQuery extends Rpc
{
}

/**
 * @method string getVehicleType()
 * @method $this withVehicleType($value)
 * @method string getParamType()
 * @method $this withParamType($value)
 * @method string getVehicleNum()
 * @method $this withVehicleNum($value)
 * @method string getVin()
 * @method $this withVin($value)
 */
class VehicleInsureQuery extends Rpc
{
}

/**
 * @method string getVehicleType()
 * @method $this withVehicleType($value)
 * @method string getParamType()
 * @method $this withParamType($value)
 * @method string getVehicleNum()
 * @method $this withVehicleNum($value)
 * @method string getIdentifyNum()
 * @method $this withIdentifyNum($value)
 * @method string getVerifyMetaType()
 * @method $this withVerifyMetaType($value)
 * @method string getUserName()
 * @method $this withUserName($value)
 */
class VehicleMetaVerify extends Rpc
{
}

/**
 * @method string getVehicleType()
 * @method $this withVehicleType($value)
 * @method string getParamType()
 * @method $this withParamType($value)
 * @method string getVehicleNum()
 * @method $this withVehicleNum($value)
 * @method string getIdentifyNum()
 * @method $this withIdentifyNum($value)
 * @method string getVerifyMetaType()
 * @method $this withVerifyMetaType($value)
 * @method string getUserName()
 * @method $this withUserName($value)
 */
class VehicleMetaVerifyV2 extends Rpc
{
}

/**
 * @method string getVehicleType()
 * @method $this withVehicleType($value)
 * @method string getParamType()
 * @method $this withParamType($value)
 * @method string getVehicleNum()
 * @method $this withVehicleNum($value)
 */
class VehicleQuery extends Rpc
{
}

/**
 * @method string getFaceImageUrl()
 * @method $this withFaceImageUrl($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getIdCardBackImageUrl()
 * @method $this withIdCardBackImageUrl($value)
 * @method string getIdCardNumber()
 * @method $this withIdCardNumber($value)
 * @method string getIdCardFrontImageUrl()
 * @method $this withIdCardFrontImageUrl($value)
 * @method string getBizType()
 * @method $this withBizType($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class VerifyMaterial extends Rpc
{

    /** @var string */
    public $scheme = 'http';
}
