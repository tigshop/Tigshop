# Alipay\OpenAPISDK\AlipayFundAccountbookApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**create()**](AlipayFundAccountbookApi.md#create) | **POST** /v3/alipay/fund/accountbook/create | 资金记账本开通
[**query()**](AlipayFundAccountbookApi.md#query) | **GET** /v3/alipay/fund/accountbook/query | 资金记账本的信息查询


## `create()`

```php
create($alipayFundAccountbookCreateModel): \Alipay\OpenAPISDK\Model\AlipayFundAccountbookCreateResponseModel
```

资金记账本开通

资金记账本开通

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayFundAccountbookApi(
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

$alipayFundAccountbookCreateModel = new \Alipay\OpenAPISDK\Model\AlipayFundAccountbookCreateModel(); // \Alipay\OpenAPISDK\Model\AlipayFundAccountbookCreateModel

try {
    $result = $apiInstance->create($alipayFundAccountbookCreateModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayFundAccountbookApi->create: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayFundAccountbookCreateModel** | **\Alipay\OpenAPISDK\Model\AlipayFundAccountbookCreateModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayFundAccountbookCreateResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `query()`

```php
query($accountBookId, $merchantUserId, $sceneCode, $extInfo): \Alipay\OpenAPISDK\Model\AlipayFundAccountbookQueryResponseModel
```

资金记账本的信息查询

资金记账本的信息查询

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayFundAccountbookApi(
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

$accountBookId = 2088001409188095; // string | 记账账簿id
$merchantUserId = 243893499; // string | 商户会员的唯一标识，如果传入account_book_id此字段必传并比对一致性。
$sceneCode = SATF_FUND_BOOK; // string | 资金记账本的开通场景码
$extInfo = {"agreement_no":"2019000000000"}; // string | JSON格式，传递业务扩展参数

try {
    $result = $apiInstance->query($accountBookId, $merchantUserId, $sceneCode, $extInfo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayFundAccountbookApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountBookId** | **string**| 记账账簿id | [optional]
 **merchantUserId** | **string**| 商户会员的唯一标识，如果传入account_book_id此字段必传并比对一致性。 | [optional]
 **sceneCode** | **string**| 资金记账本的开通场景码 | [optional]
 **extInfo** | **string**| JSON格式，传递业务扩展参数 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayFundAccountbookQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
