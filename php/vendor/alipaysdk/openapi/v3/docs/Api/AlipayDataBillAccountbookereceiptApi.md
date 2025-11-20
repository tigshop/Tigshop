# Alipay\OpenAPISDK\AlipayDataBillAccountbookereceiptApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apply()**](AlipayDataBillAccountbookereceiptApi.md#apply) | **POST** /v3/alipay/data/bill/accountbookereceipt/apply | 申请子账本电子回单(incubating)
[**query()**](AlipayDataBillAccountbookereceiptApi.md#query) | **GET** /v3/alipay/data/bill/accountbookereceipt/query | 查询子账本电子回单状态(incubating)


## `apply()`

```php
apply($alipayDataBillAccountbookereceiptApplyModel): \Alipay\OpenAPISDK\Model\AlipayDataBillAccountbookereceiptApplyResponseModel
```

申请子账本电子回单(incubating)

申请子账本电子回单（子账本业务定制接口）

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayDataBillAccountbookereceiptApi(
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

$alipayDataBillAccountbookereceiptApplyModel = new \Alipay\OpenAPISDK\Model\AlipayDataBillAccountbookereceiptApplyModel(); // \Alipay\OpenAPISDK\Model\AlipayDataBillAccountbookereceiptApplyModel

try {
    $result = $apiInstance->apply($alipayDataBillAccountbookereceiptApplyModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayDataBillAccountbookereceiptApi->apply: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayDataBillAccountbookereceiptApplyModel** | **\Alipay\OpenAPISDK\Model\AlipayDataBillAccountbookereceiptApplyModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayDataBillAccountbookereceiptApplyResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `query()`

```php
query($fileId, $agreementNo, $agreementType): \Alipay\OpenAPISDK\Model\AlipayDataBillAccountbookereceiptQueryResponseModel
```

查询子账本电子回单状态(incubating)

电子签章申请分两个步骤： 1、使用alipay.data.bill.ereceipt.apply创建申请，并获取file_id信息。 2、等待一段时间后，使用file_id查询alipay.data.bill.ereceipt.query申请信息。 单个申请建议每5分钟查询一次状态。汇总回单建议30分钟查询一次

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayDataBillAccountbookereceiptApi(
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

$fileId = 12345; // string | 根据申请id查询状态。申请接口可以参考alipay.data.bill.ereceiptagent.apply
$agreementNo = 20205215001418078112; // string | 协议号，根据不同业务协议类型，传入对应类型的协议号，用于isv授权检查并获取商户信息。如果业务类型未指定，则使用默认类型对应的协议号。
$agreementType = FUND_SAFT_SIGN_WITHHOLDING_P; // string | 根据不同业务协议类型，传入不同参数。传入协议产品码（personal_product_code，通过协议查询接口、协议签约通知响应参数获取），不填的话默认按照示例值传入

try {
    $result = $apiInstance->query($fileId, $agreementNo, $agreementType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayDataBillAccountbookereceiptApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fileId** | **string**| 根据申请id查询状态。申请接口可以参考alipay.data.bill.ereceiptagent.apply | [optional]
 **agreementNo** | **string**| 协议号，根据不同业务协议类型，传入对应类型的协议号，用于isv授权检查并获取商户信息。如果业务类型未指定，则使用默认类型对应的协议号。 | [optional]
 **agreementType** | **string**| 根据不同业务协议类型，传入不同参数。传入协议产品码（personal_product_code，通过协议查询接口、协议签约通知响应参数获取），不填的话默认按照示例值传入 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayDataBillAccountbookereceiptQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
