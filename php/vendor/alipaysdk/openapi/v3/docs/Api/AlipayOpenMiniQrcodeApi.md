# Alipay\OpenAPISDK\AlipayOpenMiniQrcodeApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**bind()**](AlipayOpenMiniQrcodeApi.md#bind) | **POST** /v3/alipay/open/mini/qrcode/bind | 关联普通二维码
[**query()**](AlipayOpenMiniQrcodeApi.md#query) | **GET** /v3/alipay/open/mini/qrcode/query | 查询普通二维码
[**unbind()**](AlipayOpenMiniQrcodeApi.md#unbind) | **POST** /v3/alipay/open/mini/qrcode/unbind | 删除已关联普通二维码


## `bind()`

```php
bind($alipayOpenMiniQrcodeBindModel): \Alipay\OpenAPISDK\Model\AlipayOpenMiniQrcodeBindResponseModel
```

关联普通二维码

商户可不需更换线下二维码，通过该接口完成配置后，用户用支付宝扫描普通二维码时打开小程序并跳转到指定页面，普通二维码关联小程序最多可设置20条规则。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenMiniQrcodeApi(
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

$alipayOpenMiniQrcodeBindModel = new \Alipay\OpenAPISDK\Model\AlipayOpenMiniQrcodeBindModel(); // \Alipay\OpenAPISDK\Model\AlipayOpenMiniQrcodeBindModel

try {
    $result = $apiInstance->bind($alipayOpenMiniQrcodeBindModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenMiniQrcodeApi->bind: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayOpenMiniQrcodeBindModel** | **\Alipay\OpenAPISDK\Model\AlipayOpenMiniQrcodeBindModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOpenMiniQrcodeBindResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `query()`

```php
query($pageNo, $pageSize): \Alipay\OpenAPISDK\Model\AlipayOpenMiniQrcodeQueryResponseModel
```

查询普通二维码

通过appId查询商户关联的普通二维码路由信息

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenMiniQrcodeApi(
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

$pageNo = 1; // int | 页码
$pageSize = 10; // int | 每页条数，最大为10

try {
    $result = $apiInstance->query($pageNo, $pageSize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenMiniQrcodeApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageNo** | **int**| 页码 | [optional]
 **pageSize** | **int**| 每页条数，最大为10 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOpenMiniQrcodeQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `unbind()`

```php
unbind($alipayOpenMiniQrcodeUnbindModel): object
```

删除已关联普通二维码

删除已关联普通二维码

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenMiniQrcodeApi(
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

$alipayOpenMiniQrcodeUnbindModel = new \Alipay\OpenAPISDK\Model\AlipayOpenMiniQrcodeUnbindModel(); // \Alipay\OpenAPISDK\Model\AlipayOpenMiniQrcodeUnbindModel

try {
    $result = $apiInstance->unbind($alipayOpenMiniQrcodeUnbindModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenMiniQrcodeApi->unbind: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayOpenMiniQrcodeUnbindModel** | **\Alipay\OpenAPISDK\Model\AlipayOpenMiniQrcodeUnbindModel**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
