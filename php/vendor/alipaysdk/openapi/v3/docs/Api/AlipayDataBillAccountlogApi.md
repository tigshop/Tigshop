# Alipay\OpenAPISDK\AlipayDataBillAccountlogApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**query()**](AlipayDataBillAccountlogApi.md#query) | **GET** /v3/alipay/data/bill/accountlog/query | 支付宝商家账户账务明细查询


## `query()`

```php
query($startTime, $endTime, $alipayOrderNo, $merchantOrderNo, $pageNo, $pageSize, $transCode, $agreementNo, $agreementProductCode, $billUserId): \Alipay\OpenAPISDK\Model\AlipayDataBillAccountlogQueryResponseModel
```

支付宝商家账户账务明细查询

为支付宝商家提供支付宝账户的账务流水信息，供对账使用。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayDataBillAccountlogApi(
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

$startTime = 2019-01-01 00:00:00; // string | 账务流水创建时间的起始范围
$endTime = 2019-01-02 00:00:00; // string | 账务流水创建时间的结束范围。与起始时间间隔不超过31天。查询结果为起始时间至结束时间的左闭右开区间
$alipayOrderNo = 20190101***; // string | 支付宝订单号，通过支付宝订单号精确查询相关的流水明细，商户订单号与支付宝订单号互斥
$merchantOrderNo = TX***; // string | 商户订单号，通过商户订单号精确查询相关的流水明细，商户订单号与支付宝订单号互斥
$pageNo = 1; // string | 分页号，从1开始
$pageSize = 2000; // string | 分页大小1000-2000，默认2000
$transCode = 101101,301101; // string | 账务的类型代码，特殊场景下使用
$agreementNo = 20215606000635888888; // string | 协议授权码，特殊场景下使用
$agreementProductCode = FUND_SIGN_WITHHOLDING; // string | 协议产品码。特殊场景下使用
$billUserId = 2088123456789012; // string | 指定用户做账单查询

try {
    $result = $apiInstance->query($startTime, $endTime, $alipayOrderNo, $merchantOrderNo, $pageNo, $pageSize, $transCode, $agreementNo, $agreementProductCode, $billUserId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayDataBillAccountlogApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **startTime** | **string**| 账务流水创建时间的起始范围 | [optional]
 **endTime** | **string**| 账务流水创建时间的结束范围。与起始时间间隔不超过31天。查询结果为起始时间至结束时间的左闭右开区间 | [optional]
 **alipayOrderNo** | **string**| 支付宝订单号，通过支付宝订单号精确查询相关的流水明细，商户订单号与支付宝订单号互斥 | [optional]
 **merchantOrderNo** | **string**| 商户订单号，通过商户订单号精确查询相关的流水明细，商户订单号与支付宝订单号互斥 | [optional]
 **pageNo** | **string**| 分页号，从1开始 | [optional]
 **pageSize** | **string**| 分页大小1000-2000，默认2000 | [optional]
 **transCode** | **string**| 账务的类型代码，特殊场景下使用 | [optional]
 **agreementNo** | **string**| 协议授权码，特殊场景下使用 | [optional]
 **agreementProductCode** | **string**| 协议产品码。特殊场景下使用 | [optional]
 **billUserId** | **string**| 指定用户做账单查询 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayDataBillAccountlogQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
