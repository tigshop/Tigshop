# Alipay\OpenAPISDK\AlipayEbppInvoiceExpensecontrolQuotaApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**create()**](AlipayEbppInvoiceExpensecontrolQuotaApi.md#create) | **POST** /v3/alipay/ebpp/invoice/expensecontrol/quota/create | 创建余额/点券
[**modify()**](AlipayEbppInvoiceExpensecontrolQuotaApi.md#modify) | **POST** /v3/alipay/ebpp/invoice/expensecontrol/quota/modify | 修改余额/点券
[**query()**](AlipayEbppInvoiceExpensecontrolQuotaApi.md#query) | **POST** /v3/alipay/ebpp/invoice/expensecontrol/quota/query | 查询余额/点券


## `create()`

```php
create($alipayEbppInvoiceExpensecontrolQuotaCreateModel): \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceExpensecontrolQuotaCreateResponseModel
```

创建余额/点券

创建余额或者点券

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayEbppInvoiceExpensecontrolQuotaApi(
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

$alipayEbppInvoiceExpensecontrolQuotaCreateModel = new \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceExpensecontrolQuotaCreateModel(); // \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceExpensecontrolQuotaCreateModel

try {
    $result = $apiInstance->create($alipayEbppInvoiceExpensecontrolQuotaCreateModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayEbppInvoiceExpensecontrolQuotaApi->create: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayEbppInvoiceExpensecontrolQuotaCreateModel** | **\Alipay\OpenAPISDK\Model\AlipayEbppInvoiceExpensecontrolQuotaCreateModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayEbppInvoiceExpensecontrolQuotaCreateResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `modify()`

```php
modify($alipayEbppInvoiceExpensecontrolQuotaModifyModel): \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceExpensecontrolQuotaModifyResponseModel
```

修改余额/点券

修改余额或点券对应的额度，可用于增加额度、减少额度、删除额度等操作。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayEbppInvoiceExpensecontrolQuotaApi(
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

$alipayEbppInvoiceExpensecontrolQuotaModifyModel = new \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceExpensecontrolQuotaModifyModel(); // \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceExpensecontrolQuotaModifyModel

try {
    $result = $apiInstance->modify($alipayEbppInvoiceExpensecontrolQuotaModifyModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayEbppInvoiceExpensecontrolQuotaApi->modify: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayEbppInvoiceExpensecontrolQuotaModifyModel** | **\Alipay\OpenAPISDK\Model\AlipayEbppInvoiceExpensecontrolQuotaModifyModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayEbppInvoiceExpensecontrolQuotaModifyResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `query()`

```php
query($alipayEbppInvoiceExpensecontrolQuotaQueryModel): \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceExpensecontrolQuotaQueryResponseModel
```

查询余额/点券

查询余额或者点券

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayEbppInvoiceExpensecontrolQuotaApi(
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

$alipayEbppInvoiceExpensecontrolQuotaQueryModel = new \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceExpensecontrolQuotaQueryModel(); // \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceExpensecontrolQuotaQueryModel

try {
    $result = $apiInstance->query($alipayEbppInvoiceExpensecontrolQuotaQueryModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayEbppInvoiceExpensecontrolQuotaApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayEbppInvoiceExpensecontrolQuotaQueryModel** | **\Alipay\OpenAPISDK\Model\AlipayEbppInvoiceExpensecontrolQuotaQueryModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayEbppInvoiceExpensecontrolQuotaQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
