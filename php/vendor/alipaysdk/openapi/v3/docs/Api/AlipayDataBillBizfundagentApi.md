# Alipay\OpenAPISDK\AlipayDataBillBizfundagentApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**query()**](AlipayDataBillBizfundagentApi.md#query) | **GET** /v3/alipay/data/bill/bizfundagent/query | ISV代理商户资金业务账单查询


## `query()`

```php
query($startTime, $endTime, $pageNo, $pageSize, $agreementNo, $accountBookId): \Alipay\OpenAPISDK\Model\AlipayDataBillBizfundagentQueryResponseModel
```

ISV代理商户资金业务账单查询

用于ISV代理商户查询商户的资金业务账单

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayDataBillBizfundagentApi(
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

$startTime = 2021-01-01 00:00:00; // string | 账单查询时间范围 -- 起始时间
$endTime = 2021-02-01 00:00:00; // string | 账单查询时间范围 -- 结束范围。时间范围最大不超过31天。
$pageNo = 1; // string | 页码，从1开始
$pageSize = 2000; // string | 分页大小1000-2000，默认2000
$agreementNo = 20205215001418078112; // string | ISV与商户授权协议号
$accountBookId = 20880123456789012; // string | 记账本id，服务商在帮助商户开通时候获取的唯一身份号

try {
    $result = $apiInstance->query($startTime, $endTime, $pageNo, $pageSize, $agreementNo, $accountBookId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayDataBillBizfundagentApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **startTime** | **string**| 账单查询时间范围 -- 起始时间 | [optional]
 **endTime** | **string**| 账单查询时间范围 -- 结束范围。时间范围最大不超过31天。 | [optional]
 **pageNo** | **string**| 页码，从1开始 | [optional]
 **pageSize** | **string**| 分页大小1000-2000，默认2000 | [optional]
 **agreementNo** | **string**| ISV与商户授权协议号 | [optional]
 **accountBookId** | **string**| 记账本id，服务商在帮助商户开通时候获取的唯一身份号 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayDataBillBizfundagentQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
