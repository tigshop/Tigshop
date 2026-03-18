# Alipay\OpenAPISDK\AlipayDataDataserviceAdPromotepageApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**batchquery()**](AlipayDataDataserviceAdPromotepageApi.md#batchquery) | **GET** /v3/alipay/data/dataservice/ad/promotepage/batchquery | 自建推广页列表批量查询
[**download()**](AlipayDataDataserviceAdPromotepageApi.md#download) | **GET** /v3/alipay/data/dataservice/ad/promotepage/download | 自建推广页留资数据查询


## `batchquery()`

```php
batchquery($bizToken, $principalTag, $type, $pageNo, $pageSize): \Alipay\OpenAPISDK\Model\AlipayDataDataserviceAdPromotepageBatchqueryResponseModel
```

自建推广页列表批量查询

用于获取指定商家的自建推广页列表

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayDataDataserviceAdPromotepageApi(
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

$bizToken = HYjofejnnlp89730202bcklHH; // string | 代理商访问灯火平台的token
$principalTag = yfvbv133498; // string | 商家标志
$type = COLLECT_INFO; // string | 推广页类型：COLLECT_INFO -  免费留资；TRADE - 付费留资； OPERATION_PAID - 运营商付费留资；待扩展
$pageNo = 1; // int | 分页参数之页数，从1开始
$pageSize = 100; // int | 分页参数之每页大小，最大1000

try {
    $result = $apiInstance->batchquery($bizToken, $principalTag, $type, $pageNo, $pageSize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayDataDataserviceAdPromotepageApi->batchquery: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bizToken** | **string**| 代理商访问灯火平台的token | [optional]
 **principalTag** | **string**| 商家标志 | [optional]
 **type** | **string**| 推广页类型：COLLECT_INFO -  免费留资；TRADE - 付费留资； OPERATION_PAID - 运营商付费留资；待扩展 | [optional]
 **pageNo** | **int**| 分页参数之页数，从1开始 | [optional]
 **pageSize** | **int**| 分页参数之每页大小，最大1000 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayDataDataserviceAdPromotepageBatchqueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `download()`

```php
download($startDate, $endDate, $pageNo, $pageSize, $bizToken, $principalTag, $promotePageId): \Alipay\OpenAPISDK\Model\AlipayDataDataserviceAdPromotepageDownloadResponseModel
```

自建推广页留资数据查询

用于获取指定商家指定推广页的留资数据，注意调用频次小于20qps

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayDataDataserviceAdPromotepageApi(
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

$startDate = 2020-12-12; // string | 留资开始日期，格式：yyyy-mm-dd，不能早于30天前
$endDate = 2020-12-13; // string | 留资结束日期，格式：yyyy-mm-dd；不能晚于当天
$pageNo = 1; // int | 分页参数之页数，从1开始
$pageSize = 100; // int | 分页参数之每页大小，最大1000
$bizToken = HYjofejnnlp89730202bcklHH; // string | 代理商访问灯火平台的token
$principalTag = yfvbv133498; // string | 商家标志
$promotePageId = 79900056; // int | 推广页id

try {
    $result = $apiInstance->download($startDate, $endDate, $pageNo, $pageSize, $bizToken, $principalTag, $promotePageId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayDataDataserviceAdPromotepageApi->download: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **startDate** | **string**| 留资开始日期，格式：yyyy-mm-dd，不能早于30天前 | [optional]
 **endDate** | **string**| 留资结束日期，格式：yyyy-mm-dd；不能晚于当天 | [optional]
 **pageNo** | **int**| 分页参数之页数，从1开始 | [optional]
 **pageSize** | **int**| 分页参数之每页大小，最大1000 | [optional]
 **bizToken** | **string**| 代理商访问灯火平台的token | [optional]
 **principalTag** | **string**| 商家标志 | [optional]
 **promotePageId** | **int**| 推广页id | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayDataDataserviceAdPromotepageDownloadResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
