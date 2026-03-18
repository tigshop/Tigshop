# Alipay\OpenAPISDK\ZhimaCustomerJobworthInfoApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**query()**](ZhimaCustomerJobworthInfoApi.md#query) | **GET** /v3/zhima/customer/jobworth/info/query | 职得工作证信息查询


## `query()`

```php
query($userName, $connKey, $certNo, $userId, $openId, $backUrl, $certType, $kaVisitorId, $visitorType, $visitorName, $companyCertificate, $visitorUrl, $hasButton, $hasNumber, $hasQrCode, $hasHtml, $jobId, $industryId, $cloudResumeScene): \Alipay\OpenAPISDK\Model\ZhimaCustomerJobworthInfoQueryResponseModel
```

职得工作证信息查询

查询用户职得工作证信息 查询方式3选1，都设置时uid优先 1、支付宝uid查询：user_id 2、身份证+姓名查询：cert_type+cert_no 3、智能简历场景：conn_key

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\ZhimaCustomerJobworthInfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

// 初始化alipay参数
$alipayConfig = new \Alipay\OpenAPISDK\Util\Model\AlipayConfig();
$alipayConfig->setAppId('app_id');
$alipayConfig->setPrivateKey('private_key');
// 密钥模式
$alipayConfig->setAlipayPublicKey('alipay_public_key');
// 证书模式
// $alipayConfig->setAppCertPath('../appCertPublicKey.crt');
// $alipayConfig->setAlipayPublicCertPath('../alipayCertPublicKey_RSA2.crt');
// $alipayConfig->setRootCertPath('../alipayRootCert.crt');
$alipayConfig->setEncryptKey('encrypt_key');
$alipayConfigUtil = new \Alipay\OpenAPISDK\Util\AlipayConfigUtil($alipayConfig);
$apiInstance->setAlipayConfigUtil($alipayConfigUtil);

$userName = 张三; // string | 姓名
$connKey = ttest11234; // string | 外部订单号，zhima.credit.payafteruse.creditagreement.sign的入参 out_agreement_no智能简历场景支持只传该值
$certNo = 42011719880304XXXX; // string | 证件号 ，根据cert_type类型设置对应证件号码，选择身份证校验时必传
$userId = 2088XXXXXXXX; // string | 蚂蚁统一会员ID ，为2088开头的唯一标识 选择支付宝uid检验时必传，支付宝uid或身份证+身份证类型 查询2选1，都设置时uid优先
$openId = 074a1CcTG1LelxKe4xQC0zgNdId0nxi95b5lsNpazWYoCo5; // string | 蚂蚁统一会员ID ，为2088开头的唯一标识 选择支付宝uid检验时必传，支付宝uid或身份证+身份证类型 查询2选1，都设置时uid优先
$backUrl = www.123.com; // string | 若用户没有开通工作证或者芝麻，成功开通后回跳的链接 ，支持http或schema地址
$certType = 0:身份证1:护照2:台湾同胞回乡证3:港澳居民往来内地通行证4:台湾居民通行证5:港澳居民通行证; // string | 证件类型 ，枚举值： 0:身份证1:护照2:台湾同胞回乡证3:港澳居民往来内地通行证4:台湾居民通行证5:港澳居民通行证 选择身份证校验时必传，支付宝uid或身份证+身份证类型 查询2选1，都设置时uid优先
$kaVisitorId = xxx; // string | 商户内部的唯一id如果是需要返回h5页面必填
$visitorType = P; // string | 访问类型 C = company  or P = person 如果是需要返回h5页面必填
$visitorName = 访客名称; // string | 商户侧配置访客名称 如果是需要返回h5页面必填
$companyCertificate = xxxx; // string | 公司社会统一代码h5页面访客展示使用
$visitorUrl = xxxx; // string | 上传图片接口返回的id
$hasButton = true; // bool | 在h5页面是否展示底部跳转按钮
$hasNumber = true; // bool | true or false 是否展示
$hasQrCode = true; // bool | 是否展示二维码
$hasHtml = true; // bool | 是否需要返回h5页面
$jobId = 05A00; // string | 对外使用的jobid
$industryId = 05A21; // string | 行业描述ID
$cloudResumeScene = GREEN_HIRE; // string | 子场景

try {
    $result = $apiInstance->query($userName, $connKey, $certNo, $userId, $openId, $backUrl, $certType, $kaVisitorId, $visitorType, $visitorName, $companyCertificate, $visitorUrl, $hasButton, $hasNumber, $hasQrCode, $hasHtml, $jobId, $industryId, $cloudResumeScene);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZhimaCustomerJobworthInfoApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userName** | **string**| 姓名 | [optional]
 **connKey** | **string**| 外部订单号，zhima.credit.payafteruse.creditagreement.sign的入参 out_agreement_no智能简历场景支持只传该值 | [optional]
 **certNo** | **string**| 证件号 ，根据cert_type类型设置对应证件号码，选择身份证校验时必传 | [optional]
 **userId** | **string**| 蚂蚁统一会员ID ，为2088开头的唯一标识 选择支付宝uid检验时必传，支付宝uid或身份证+身份证类型 查询2选1，都设置时uid优先 | [optional]
 **openId** | **string**| 蚂蚁统一会员ID ，为2088开头的唯一标识 选择支付宝uid检验时必传，支付宝uid或身份证+身份证类型 查询2选1，都设置时uid优先 | [optional]
 **backUrl** | **string**| 若用户没有开通工作证或者芝麻，成功开通后回跳的链接 ，支持http或schema地址 | [optional]
 **certType** | **string**| 证件类型 ，枚举值： 0:身份证1:护照2:台湾同胞回乡证3:港澳居民往来内地通行证4:台湾居民通行证5:港澳居民通行证 选择身份证校验时必传，支付宝uid或身份证+身份证类型 查询2选1，都设置时uid优先 | [optional]
 **kaVisitorId** | **string**| 商户内部的唯一id如果是需要返回h5页面必填 | [optional]
 **visitorType** | **string**| 访问类型 C &#x3D; company  or P &#x3D; person 如果是需要返回h5页面必填 | [optional]
 **visitorName** | **string**| 商户侧配置访客名称 如果是需要返回h5页面必填 | [optional]
 **companyCertificate** | **string**| 公司社会统一代码h5页面访客展示使用 | [optional]
 **visitorUrl** | **string**| 上传图片接口返回的id | [optional]
 **hasButton** | **bool**| 在h5页面是否展示底部跳转按钮 | [optional]
 **hasNumber** | **bool**| true or false 是否展示 | [optional]
 **hasQrCode** | **bool**| 是否展示二维码 | [optional]
 **hasHtml** | **bool**| 是否需要返回h5页面 | [optional]
 **jobId** | **string**| 对外使用的jobid | [optional]
 **industryId** | **string**| 行业描述ID | [optional]
 **cloudResumeScene** | **string**| 子场景 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\ZhimaCustomerJobworthInfoQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
