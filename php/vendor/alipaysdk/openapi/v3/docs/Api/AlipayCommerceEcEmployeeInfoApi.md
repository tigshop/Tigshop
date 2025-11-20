# Alipay\OpenAPISDK\AlipayCommerceEcEmployeeInfoApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**modify()**](AlipayCommerceEcEmployeeInfoApi.md#modify) | **PUT** /v3/alipay/commerce/ec/employee/info | 修改员工基础信息
[**query()**](AlipayCommerceEcEmployeeInfoApi.md#query) | **GET** /v3/alipay/commerce/ec/employee/info/query | 查询员工详情


## `modify()`

```php
modify($alipayCommerceEcEmployeeInfoModifyModel): \Alipay\OpenAPISDK\Model\AlipayCommerceEcEmployeeInfoModifyResponseModel
```

修改员工基础信息

修改员工基础信息

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayCommerceEcEmployeeInfoApi(
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

$alipayCommerceEcEmployeeInfoModifyModel = new \Alipay\OpenAPISDK\Model\AlipayCommerceEcEmployeeInfoModifyModel(); // \Alipay\OpenAPISDK\Model\AlipayCommerceEcEmployeeInfoModifyModel

try {
    $result = $apiInstance->modify($alipayCommerceEcEmployeeInfoModifyModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayCommerceEcEmployeeInfoApi->modify: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayCommerceEcEmployeeInfoModifyModel** | **\Alipay\OpenAPISDK\Model\AlipayCommerceEcEmployeeInfoModifyModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayCommerceEcEmployeeInfoModifyResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `query()`

```php
query($enterpriseId, $openId, $userId, $employeeId, $mobile, $alipayLogonId, $employeeCertType, $employeeCertNo, $employeeEmail): \Alipay\OpenAPISDK\Model\AlipayCommerceEcEmployeeInfoQueryResponseModel
```

查询员工详情

根据员工id或员工uid查询企业下某个员工的详细信息

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayCommerceEcEmployeeInfoApi(
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

$enterpriseId = 2088441363102941; // string | 企业id
$openId = 074a1CcTG1LelxKe4xQC0zgNdId0nxi95b5lsNpazWYoCo5; // string | 蚂蚁统一会员ID
$userId = 2088501304519332; // string | 支付宝用户ID
$employeeId = 2284200000000000; // string | 员工id
$mobile = 134XXXX2526; // string | 员工手机号码
$alipayLogonId = 134xxxx2526; // string | 支付宝登录号（手机号或邮箱）
$employeeCertType = IDENTITY_CARD; // string | 员工证件类型
$employeeCertNo = 220000000000000000; // string | 员工证件号码
$employeeEmail = 123@xxx.com; // string | 员工邮箱

try {
    $result = $apiInstance->query($enterpriseId, $openId, $userId, $employeeId, $mobile, $alipayLogonId, $employeeCertType, $employeeCertNo, $employeeEmail);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayCommerceEcEmployeeInfoApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **string**| 企业id | [optional]
 **openId** | **string**| 蚂蚁统一会员ID | [optional]
 **userId** | **string**| 支付宝用户ID | [optional]
 **employeeId** | **string**| 员工id | [optional]
 **mobile** | **string**| 员工手机号码 | [optional]
 **alipayLogonId** | **string**| 支付宝登录号（手机号或邮箱） | [optional]
 **employeeCertType** | **string**| 员工证件类型 | [optional]
 **employeeCertNo** | **string**| 员工证件号码 | [optional]
 **employeeEmail** | **string**| 员工邮箱 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayCommerceEcEmployeeInfoQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
