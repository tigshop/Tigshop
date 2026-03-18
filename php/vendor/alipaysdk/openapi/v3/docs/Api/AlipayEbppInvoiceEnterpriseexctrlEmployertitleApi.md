# Alipay\OpenAPISDK\AlipayEbppInvoiceEnterpriseexctrlEmployertitleApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**batchquery()**](AlipayEbppInvoiceEnterpriseexctrlEmployertitleApi.md#batchquery) | **POST** /v3/alipay/ebpp/invoice/enterpriseexctrl/employertitle/batchquery | 批量查询企业抬头
[**create()**](AlipayEbppInvoiceEnterpriseexctrlEmployertitleApi.md#create) | **POST** /v3/alipay/ebpp/invoice/enterpriseexctrl/employertitle/create | 新增企业抬头
[**modify()**](AlipayEbppInvoiceEnterpriseexctrlEmployertitleApi.md#modify) | **PUT** /v3/alipay/ebpp/invoice/enterpriseexctrl/employertitle | 修改企业抬头
[**query()**](AlipayEbppInvoiceEnterpriseexctrlEmployertitleApi.md#query) | **GET** /v3/alipay/ebpp/invoice/enterpriseexctrl/employertitle/query | 查询企业抬头


## `batchquery()`

```php
batchquery($alipayEbppInvoiceEnterpriseexctrlEmployertitleBatchqueryModel): \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceEnterpriseexctrlEmployertitleBatchqueryResponseModel
```

批量查询企业抬头

分页查询企业抬头列表

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayEbppInvoiceEnterpriseexctrlEmployertitleApi(
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

$alipayEbppInvoiceEnterpriseexctrlEmployertitleBatchqueryModel = new \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceEnterpriseexctrlEmployertitleBatchqueryModel(); // \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceEnterpriseexctrlEmployertitleBatchqueryModel

try {
    $result = $apiInstance->batchquery($alipayEbppInvoiceEnterpriseexctrlEmployertitleBatchqueryModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayEbppInvoiceEnterpriseexctrlEmployertitleApi->batchquery: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayEbppInvoiceEnterpriseexctrlEmployertitleBatchqueryModel** | **\Alipay\OpenAPISDK\Model\AlipayEbppInvoiceEnterpriseexctrlEmployertitleBatchqueryModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayEbppInvoiceEnterpriseexctrlEmployertitleBatchqueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `create()`

```php
create($alipayEbppInvoiceEnterpriseexctrlEmployertitleCreateModel): \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceEnterpriseexctrlEmployertitleCreateResponseModel
```

新增企业抬头

新增一条企业开票抬头

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayEbppInvoiceEnterpriseexctrlEmployertitleApi(
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

$alipayEbppInvoiceEnterpriseexctrlEmployertitleCreateModel = new \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceEnterpriseexctrlEmployertitleCreateModel(); // \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceEnterpriseexctrlEmployertitleCreateModel

try {
    $result = $apiInstance->create($alipayEbppInvoiceEnterpriseexctrlEmployertitleCreateModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayEbppInvoiceEnterpriseexctrlEmployertitleApi->create: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayEbppInvoiceEnterpriseexctrlEmployertitleCreateModel** | **\Alipay\OpenAPISDK\Model\AlipayEbppInvoiceEnterpriseexctrlEmployertitleCreateModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayEbppInvoiceEnterpriseexctrlEmployertitleCreateResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `modify()`

```php
modify($alipayEbppInvoiceEnterpriseexctrlEmployertitleModifyModel): \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceEnterpriseexctrlEmployertitleModifyResponseModel
```

修改企业抬头

修改企业开票抬头

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayEbppInvoiceEnterpriseexctrlEmployertitleApi(
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

$alipayEbppInvoiceEnterpriseexctrlEmployertitleModifyModel = new \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceEnterpriseexctrlEmployertitleModifyModel(); // \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceEnterpriseexctrlEmployertitleModifyModel

try {
    $result = $apiInstance->modify($alipayEbppInvoiceEnterpriseexctrlEmployertitleModifyModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayEbppInvoiceEnterpriseexctrlEmployertitleApi->modify: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayEbppInvoiceEnterpriseexctrlEmployertitleModifyModel** | **\Alipay\OpenAPISDK\Model\AlipayEbppInvoiceEnterpriseexctrlEmployertitleModifyModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayEbppInvoiceEnterpriseexctrlEmployertitleModifyResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `query()`

```php
query($accountId, $enterpriseId, $agreementNo, $titleId): \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceEnterpriseexctrlEmployertitleQueryResponseModel
```

查询企业抬头

根据抬头ID查询企业抬头详情

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayEbppInvoiceEnterpriseexctrlEmployertitleApi(
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

$accountId = 2088000194958956; // string | 企业共同账户id
$enterpriseId = 2088123412341234; // string | 企业id
$agreementNo = 20215425001181407500; // string | 授权签约协议号
$titleId = 2022110200152710030000000003; // string | 抬头ID

try {
    $result = $apiInstance->query($accountId, $enterpriseId, $agreementNo, $titleId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayEbppInvoiceEnterpriseexctrlEmployertitleApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **string**| 企业共同账户id | [optional]
 **enterpriseId** | **string**| 企业id | [optional]
 **agreementNo** | **string**| 授权签约协议号 | [optional]
 **titleId** | **string**| 抬头ID | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayEbppInvoiceEnterpriseexctrlEmployertitleQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
