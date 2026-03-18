# OpenAPIClient-php

支付宝开放平台v3协议文档

For more information, please visit [https://openhome.alipay.com/developmentDocument.htm](https://openhome.alipay.com/developmentDocument.htm).

## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "require": {
    "alipaysdk/openapi": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Alipay\OpenAPISDK\Api\AlipayTradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

// 设置alipayConfig参数
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

$model = new AlipayTradePayModel();
$model->setOutTradeNo('20210817010101001');
$model->setTotalAmount('0.011');
$model->setSubject('测试商品');
$model->setScene('bar_code');
$model->setAuthCode('28763443825664394');

try {
    $result = $this->apiInstance->pay($model);
    print_r($result);
} catch (ApiException $e) {
    echo 'Exception when calling AlipayTradeApi->pay: ', $e->getMessage(), PHP_EOL;
    echo 'body: ', $e->getResponseBody(), PHP_EOL;
    echo 'header: ', $e->getResponseHeaders(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://openapi.alipay.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AliosOpenAutoInfoApi* | [**query**](docs/Api/AliosOpenAutoInfoApi.md#query) | **GET** /v3/alios/open/auto/info/query | 查询阿里车的车辆信息
*AlipayBossFncInvoiceApi* | [**apply**](docs/Api/AlipayBossFncInvoiceApi.md#apply) | **POST** /v3/alipay/boss/fnc/invoice/apply | 应收开票申请(根据账单申请)
*AlipayBossFncInvoiceApi* | [**batchquery**](docs/Api/AlipayBossFncInvoiceApi.md#batchquery) | **POST** /v3/alipay/boss/fnc/invoice/batchquery | 应收发票综合查询
*AlipayBossFncInvoiceApi* | [**query**](docs/Api/AlipayBossFncInvoiceApi.md#query) | **GET** /v3/alipay/boss/fnc/invoice/query | 根据发票ID查询发票信息
*AlipayBossFncInvoicereceiptApi* | [**batchquery**](docs/Api/AlipayBossFncInvoicereceiptApi.md#batchquery) | **POST** /v3/alipay/boss/fnc/invoicereceipt/batchquery | 根据月账单号集合和来源查询开票单据及金额汇总
*AlipayBossFncInvoicereceiptApi* | [**create**](docs/Api/AlipayBossFncInvoicereceiptApi.md#create) | **POST** /v3/alipay/boss/fnc/invoicereceipt/create | 账单变更同步接口月帐单创建消息同步
*AlipayBossFncUserinvoiceinfoApi* | [**create**](docs/Api/AlipayBossFncUserinvoiceinfoApi.md#create) | **POST** /v3/alipay/boss/fnc/userinvoiceinfo/create | 新增客户开票资料
*AlipayBossFncUserinvoiceinfoApi* | [**modify**](docs/Api/AlipayBossFncUserinvoiceinfoApi.md#modify) | **POST** /v3/alipay/boss/fnc/userinvoiceinfo/modify | 修改用户开票资料
*AlipayBossFncUserinvoiceinfoApi* | [**query**](docs/Api/AlipayBossFncUserinvoiceinfoApi.md#query) | **GET** /v3/alipay/boss/fnc/userinvoiceinfo/query | 根据PID获取相关的开票资料
*AlipayCommerceCityfacilitatorStationApi* | [**query**](docs/Api/AlipayCommerceCityfacilitatorStationApi.md#query) | **GET** /v3/alipay/commerce/cityfacilitator/station/query | 地铁购票站点数据查询
*AlipayCommerceCityfacilitatorVoucherApi* | [**batchquery**](docs/Api/AlipayCommerceCityfacilitatorVoucherApi.md#batchquery) | **POST** /v3/alipay/commerce/cityfacilitator/voucher/batchquery | 地铁购票订单批量查询
*AlipayCommerceCityfacilitatorVoucherApi* | [**generate**](docs/Api/AlipayCommerceCityfacilitatorVoucherApi.md#generate) | **POST** /v3/alipay/commerce/cityfacilitator/voucher/generate | 地铁购票核销码发码
*AlipayCommerceCityfacilitatorVoucherApi* | [**refund**](docs/Api/AlipayCommerceCityfacilitatorVoucherApi.md#refund) | **POST** /v3/alipay/commerce/cityfacilitator/voucher/refund | 地铁购票发码退款
*AlipayCommerceEcBalanceDownloadurlApi* | [**query**](docs/Api/AlipayCommerceEcBalanceDownloadurlApi.md#query) | **GET** /v3/alipay/commerce/ec/balance/downloadurl/query | 对账单文件下载接口
*AlipayCommerceEcBalancePeriodApi* | [**modify**](docs/Api/AlipayCommerceEcBalancePeriodApi.md#modify) | **POST** /v3/alipay/commerce/ec/balance/period/modify | 企业码月对账单账期修改
*AlipayCommerceEcConsumeDetailApi* | [**query**](docs/Api/AlipayCommerceEcConsumeDetailApi.md#query) | **POST** /v3/alipay/commerce/ec/consume/detail/query | 企业码账单详情查询
*AlipayCommerceEcDepartmentApi* | [**create**](docs/Api/AlipayCommerceEcDepartmentApi.md#create) | **POST** /v3/alipay/commerce/ec/department | 企业部门创建
*AlipayCommerceEcDepartmentApi* | [**delete**](docs/Api/AlipayCommerceEcDepartmentApi.md#delete) | **POST** /v3/alipay/commerce/ec/department/delete | 企业部门删除
*AlipayCommerceEcDepartmentInfoApi* | [**modify**](docs/Api/AlipayCommerceEcDepartmentInfoApi.md#modify) | **PUT** /v3/alipay/commerce/ec/department | 企业部门信息修改
*AlipayCommerceEcDepartmentInfoApi* | [**query**](docs/Api/AlipayCommerceEcDepartmentInfoApi.md#query) | **GET** /v3/alipay/commerce/ec/department/info/query | 查询部门详情
*AlipayCommerceEcDepartmentSublistApi* | [**query**](docs/Api/AlipayCommerceEcDepartmentSublistApi.md#query) | **GET** /v3/alipay/commerce/ec/department/sublist/query | 查询子部门id列表
*AlipayCommerceEcEmployeeApi* | [**add**](docs/Api/AlipayCommerceEcEmployeeApi.md#add) | **POST** /v3/alipay/commerce/ec/employee/add | 添加员工
*AlipayCommerceEcEmployeeApi* | [**delete**](docs/Api/AlipayCommerceEcEmployeeApi.md#delete) | **POST** /v3/alipay/commerce/ec/employee/delete | 删除员工
*AlipayCommerceEcEmployeeIdlistApi* | [**query**](docs/Api/AlipayCommerceEcEmployeeIdlistApi.md#query) | **GET** /v3/alipay/commerce/ec/employee/idlist/query | 查询部门下员工id列表
*AlipayCommerceEcEmployeeInfoApi* | [**modify**](docs/Api/AlipayCommerceEcEmployeeInfoApi.md#modify) | **PUT** /v3/alipay/commerce/ec/employee/info | 修改员工基础信息
*AlipayCommerceEcEmployeeInfoApi* | [**query**](docs/Api/AlipayCommerceEcEmployeeInfoApi.md#query) | **GET** /v3/alipay/commerce/ec/employee/info/query | 查询员工详情
*AlipayCommerceEcEmployeeInviteApi* | [**query**](docs/Api/AlipayCommerceEcEmployeeInviteApi.md#query) | **GET** /v3/alipay/commerce/ec/employee/invite | 获取员工签约激活链接
*AlipayCommerceEcEmployeeTitleApi* | [**create**](docs/Api/AlipayCommerceEcEmployeeTitleApi.md#create) | **POST** /v3/alipay/commerce/ec/employee/title | 新增员工抬头关系
*AlipayCommerceEcEmployeeTitleApi* | [**delete**](docs/Api/AlipayCommerceEcEmployeeTitleApi.md#delete) | **POST** /v3/alipay/commerce/ec/employee/title/delete | 删除员工抬头信息
*AlipayCommerceEcEmployeeTitleApi* | [**modify**](docs/Api/AlipayCommerceEcEmployeeTitleApi.md#modify) | **PUT** /v3/alipay/commerce/ec/employee/title | 修改员工抬头信息
*AlipayCommerceEcEnterpriseApi* | [**create**](docs/Api/AlipayCommerceEcEnterpriseApi.md#create) | **POST** /v3/alipay/commerce/ec/enterprise/create | 企业签约注册
*AlipayCommerceEcEnterpriseApi* | [**delete**](docs/Api/AlipayCommerceEcEnterpriseApi.md#delete) | **POST** /v3/alipay/commerce/ec/enterprise/delete | 企业注销
*AlipayCommerceEcEnterpriseApi* | [**unsign**](docs/Api/AlipayCommerceEcEnterpriseApi.md#unsign) | **GET** /v3/alipay/commerce/ec/enterprise/unsignurl | 企业解约
*AlipayCommerceEcEnterpriseAddressApi* | [**add**](docs/Api/AlipayCommerceEcEnterpriseAddressApi.md#add) | **POST** /v3/alipay/commerce/ec/enterprise/address | 企业地址添加
*AlipayCommerceEcEnterpriseAddressApi* | [**modify**](docs/Api/AlipayCommerceEcEnterpriseAddressApi.md#modify) | **PUT** /v3/alipay/commerce/ec/enterprise/address | 企业地址修改
*AlipayCommerceEcEnterpriseAddressApi* | [**query**](docs/Api/AlipayCommerceEcEnterpriseAddressApi.md#query) | **GET** /v3/alipay/commerce/ec/enterprise/address | 企业地址查询
*AlipayCommerceEcEnterpriseAgreementApi* | [**query**](docs/Api/AlipayCommerceEcEnterpriseAgreementApi.md#query) | **GET** /v3/alipay/commerce/ec/enterprise/agreement | 查询企业签约企业码信息
*AlipayCommerceEcEnterpriseInfoApi* | [**modify**](docs/Api/AlipayCommerceEcEnterpriseInfoApi.md#modify) | **PUT** /v3/alipay/commerce/ec/enterprise | 修改企业基础信息
*AlipayCommerceEcEnterpriseInfoApi* | [**query**](docs/Api/AlipayCommerceEcEnterpriseInfoApi.md#query) | **GET** /v3/alipay/commerce/ec/enterprise/info | 查询企业详情
*AlipayCommerceEcJointaccountbillDetailApi* | [**batchquery**](docs/Api/AlipayCommerceEcJointaccountbillDetailApi.md#batchquery) | **GET** /v3/alipay/commerce/ec/jointaccountbill/detail/batchquery | 企业账单批量分页查询
*AlipayCommerceEcUserEnterpriseApi* | [**query**](docs/Api/AlipayCommerceEcUserEnterpriseApi.md#query) | **GET** /v3/alipay/commerce/ec/user/enterprise | 用户企业列表
*AlipayCommerceEducateCampusInstitutionsApi* | [**add**](docs/Api/AlipayCommerceEducateCampusInstitutionsApi.md#add) | **POST** /v3/alipay/commerce/educate/campus/institutions/add | 入驻学校信息
*AlipayCommerceEducateCampusInstitutionsApi* | [**query**](docs/Api/AlipayCommerceEducateCampusInstitutionsApi.md#query) | **GET** /v3/alipay/commerce/educate/campus/institutions/query | 查询学校信息
*AlipayCommerceEducateSchoolcardOrderApi* | [**sync**](docs/Api/AlipayCommerceEducateSchoolcardOrderApi.md#sync) | **POST** /v3/alipay/commerce/educate/schoolcard/order/sync | 校园卡支付订单数据同步
*AlipayCommerceIotDeviceReportApi* | [**upload**](docs/Api/AlipayCommerceIotDeviceReportApi.md#upload) | **POST** /v3/alipay/commerce/iot/device/report/upload | 设备检测报告上传
*AlipayCommerceIotSdarttoolMessageApi* | [**query**](docs/Api/AlipayCommerceIotSdarttoolMessageApi.md#query) | **GET** /v3/alipay/commerce/iot/sdarttool/message/query | 消息查询
*AlipayCommerceIotSdarttoolMessageApi* | [**send**](docs/Api/AlipayCommerceIotSdarttoolMessageApi.md#send) | **POST** /v3/alipay/commerce/iot/sdarttool/message/send | IOT消息服务
*AlipayCommerceLogisticsInvoiceIstdwaybillApi* | [**create**](docs/Api/AlipayCommerceLogisticsInvoiceIstdwaybillApi.md#create) | **POST** /v3/alipay/commerce/logistics/invoice/istdwaybill/create | 开即时配送订单发票
*AlipayCommerceLogisticsInvoiceIstdwaybillApi* | [**query**](docs/Api/AlipayCommerceLogisticsInvoiceIstdwaybillApi.md#query) | **GET** /v3/alipay/commerce/logistics/invoice/istdwaybill/query | 查询即时配送订单的开票结果
*AlipayCommerceLogisticsLogisticscompanyInstantdeliveryApi* | [**query**](docs/Api/AlipayCommerceLogisticsLogisticscompanyInstantdeliveryApi.md#query) | **GET** /v3/alipay/commerce/logistics/logisticscompany/instantdelivery/query | 查询支付宝支持的即时配送公司
*AlipayCommerceLogisticsOrderInstantdeliveryApi* | [**cancel**](docs/Api/AlipayCommerceLogisticsOrderInstantdeliveryApi.md#cancel) | **POST** /v3/alipay/commerce/logistics/order/instantdelivery/cancel | 取消即时配送订单
*AlipayCommerceLogisticsOrderInstantdeliveryApi* | [**create**](docs/Api/AlipayCommerceLogisticsOrderInstantdeliveryApi.md#create) | **POST** /v3/alipay/commerce/logistics/order/instantdelivery/create | 下即时配送订单
*AlipayCommerceLogisticsOrderInstantdeliveryApi* | [**precreate**](docs/Api/AlipayCommerceLogisticsOrderInstantdeliveryApi.md#precreate) | **POST** /v3/alipay/commerce/logistics/order/instantdelivery/precreate | 预下即时配送订单
*AlipayCommerceLogisticsOrderIstdcancelApi* | [**preconsult**](docs/Api/AlipayCommerceLogisticsOrderIstdcancelApi.md#preconsult) | **POST** /v3/alipay/commerce/logistics/order/istdcancel/preconsult | 预取消即时配送订单
*AlipayCommerceLogisticsOrderIstdretryApi* | [**create**](docs/Api/AlipayCommerceLogisticsOrderIstdretryApi.md#create) | **POST** /v3/alipay/commerce/logistics/order/istdretry/create | 重下即时配送订单
*AlipayCommerceLogisticsWaybillIstddetailApi* | [**query**](docs/Api/AlipayCommerceLogisticsWaybillIstddetailApi.md#query) | **GET** /v3/alipay/commerce/logistics/waybill/istddetail/query | 查询即时配送运单详情
*AlipayCommerceOperationActivityMerchantApi* | [**modify**](docs/Api/AlipayCommerceOperationActivityMerchantApi.md#modify) | **POST** /v3/alipay/commerce/operation/activity/merchant/modify | 商户签约信息修改
*AlipayCommerceOperationActivityMerchantApi* | [**sign**](docs/Api/AlipayCommerceOperationActivityMerchantApi.md#sign) | **POST** /v3/alipay/commerce/operation/activity/merchant/sign | 商户签约活动
*AlipayCommerceOperationActivityMerchantApi* | [**unsign**](docs/Api/AlipayCommerceOperationActivityMerchantApi.md#unsign) | **POST** /v3/alipay/commerce/operation/activity/merchant/unsign | 活动商户解约
*AlipayCommerceOperationBankActivityApi* | [**query**](docs/Api/AlipayCommerceOperationBankActivityApi.md#query) | **GET** /v3/alipay/commerce/operation/bank/activity/query | 银行活动信息查询
*AlipayCommerceTransportChargerChargerbindinfoApi* | [**sync**](docs/Api/AlipayCommerceTransportChargerChargerbindinfoApi.md#sync) | **POST** /v3/alipay/commerce/transport/charger/chargerbindinfo/sync | 充电运营商同步用户绑定充电桩信息接口
*AlipayCommerceTransportParkingEnterinfoApi* | [**sync**](docs/Api/AlipayCommerceTransportParkingEnterinfoApi.md#sync) | **POST** /v3/alipay/commerce/transport/parking/enterinfo/sync | 停车入场模板消息配置
*AlipayCommerceTransportParkingExitinfoApi* | [**sync**](docs/Api/AlipayCommerceTransportParkingExitinfoApi.md#sync) | **POST** /v3/alipay/commerce/transport/parking/exitinfo/sync | 停车离场消息模板配置
*AlipayCommerceTransportParkingPaymentinfoApi* | [**sync**](docs/Api/AlipayCommerceTransportParkingPaymentinfoApi.md#sync) | **POST** /v3/alipay/commerce/transport/parking/paymentinfo/sync | 停车支付模板消息配置
*AlipayDataBillAccountbookereceiptApi* | [**apply**](docs/Api/AlipayDataBillAccountbookereceiptApi.md#apply) | **POST** /v3/alipay/data/bill/accountbookereceipt/apply | 申请子账本电子回单(incubating)
*AlipayDataBillAccountbookereceiptApi* | [**query**](docs/Api/AlipayDataBillAccountbookereceiptApi.md#query) | **GET** /v3/alipay/data/bill/accountbookereceipt/query | 查询子账本电子回单状态(incubating)
*AlipayDataBillAccountlogApi* | [**query**](docs/Api/AlipayDataBillAccountlogApi.md#query) | **GET** /v3/alipay/data/bill/accountlog/query | 支付宝商家账户账务明细查询
*AlipayDataBillBailApi* | [**query**](docs/Api/AlipayDataBillBailApi.md#query) | **GET** /v3/alipay/data/bill/bail/query | 支付宝商家账户保证金查询
*AlipayDataBillBalanceApi* | [**query**](docs/Api/AlipayDataBillBalanceApi.md#query) | **GET** /v3/alipay/data/bill/balance/query | 支付宝商家账户当前余额查询
*AlipayDataBillBalancehisApi* | [**query**](docs/Api/AlipayDataBillBalancehisApi.md#query) | **GET** /v3/alipay/data/bill/balancehis/query | 支付宝商家账户历史余额查询
*AlipayDataBillBizfundagentApi* | [**query**](docs/Api/AlipayDataBillBizfundagentApi.md#query) | **GET** /v3/alipay/data/bill/bizfundagent/query | ISV代理商户资金业务账单查询
*AlipayDataBillBuyApi* | [**query**](docs/Api/AlipayDataBillBuyApi.md#query) | **GET** /v3/alipay/data/bill/buy/query | 支付宝商家账户买入交易查询
*AlipayDataBillEreceiptApi* | [**apply**](docs/Api/AlipayDataBillEreceiptApi.md#apply) | **POST** /v3/alipay/data/bill/ereceipt/apply | 申请电子回单(incubating)
*AlipayDataBillEreceiptApi* | [**query**](docs/Api/AlipayDataBillEreceiptApi.md#query) | **GET** /v3/alipay/data/bill/ereceipt/query | 查询电子回单状态(incubating)
*AlipayDataBillEreceiptagentApi* | [**apply**](docs/Api/AlipayDataBillEreceiptagentApi.md#apply) | **POST** /v3/alipay/data/bill/ereceiptagent/apply | ISV代理商户申请电子回单
*AlipayDataBillSellApi* | [**query**](docs/Api/AlipayDataBillSellApi.md#query) | **GET** /v3/alipay/data/bill/sell/query | 支付宝商家账户卖出交易查询
*AlipayDataBillTransferApi* | [**query**](docs/Api/AlipayDataBillTransferApi.md#query) | **GET** /v3/alipay/data/bill/transfer/query | 支付宝商家账户充值，转账，提现查询
*AlipayDataBillTransferaccountbookApi* | [**query**](docs/Api/AlipayDataBillTransferaccountbookApi.md#query) | **GET** /v3/alipay/data/bill/transferaccountbook/query | 子账本充提转账单查询(incubating)
*AlipayDataDataserviceAdConversionApi* | [**upload**](docs/Api/AlipayDataDataserviceAdConversionApi.md#upload) | **POST** /v3/alipay/data/dataservice/ad/conversion/upload | 转化数据回传
*AlipayDataDataserviceAdPromotepageApi* | [**batchquery**](docs/Api/AlipayDataDataserviceAdPromotepageApi.md#batchquery) | **GET** /v3/alipay/data/dataservice/ad/promotepage/batchquery | 自建推广页列表批量查询
*AlipayDataDataserviceAdPromotepageApi* | [**download**](docs/Api/AlipayDataDataserviceAdPromotepageApi.md#download) | **GET** /v3/alipay/data/dataservice/ad/promotepage/download | 自建推广页留资数据查询
*AlipayDataDataserviceBillDownloadurlApi* | [**query**](docs/Api/AlipayDataDataserviceBillDownloadurlApi.md#query) | **GET** /v3/alipay/data/dataservice/bill/downloadurl/query | 查询对账单下载地址
*AlipayEbppBillApi* | [**add**](docs/Api/AlipayEbppBillApi.md#add) | **POST** /v3/alipay/ebpp/bill/add | 创建账单
*AlipayEbppBillApi* | [**get**](docs/Api/AlipayEbppBillApi.md#get) | **GET** /v3/alipay/ebpp/bill/get | 查询账单
*AlipayEbppInvoiceApi* | [**sycn**](docs/Api/AlipayEbppInvoiceApi.md#sycn) | **POST** /v3/alipay/ebpp/invoice/sycn | 发票信息同步至支付宝
*AlipayEbppInvoiceApplyInvApi* | [**upload**](docs/Api/AlipayEbppInvoiceApplyInvApi.md#upload) | **PUT** /v3/alipay/ebpp/invoice/apply/inv/upload | 发票回传
*AlipayEbppInvoiceApplyResultApi* | [**sync**](docs/Api/AlipayEbppInvoiceApplyResultApi.md#sync) | **POST** /v3/alipay/ebpp/invoice/apply/result/sync | ISV向支付宝同步发票申请结果
*AlipayEbppInvoiceApplyStatusApi* | [**notify**](docs/Api/AlipayEbppInvoiceApplyStatusApi.md#notify) | **PUT** /v3/alipay/ebpp/invoice/apply/status/notify | 发票申请状态变更
*AlipayEbppInvoiceApplystatusApi* | [**query**](docs/Api/AlipayEbppInvoiceApplystatusApi.md#query) | **POST** /v3/alipay/ebpp/invoice/applystatus/query | 根据外部订单号查询开票状态
*AlipayEbppInvoiceAuthApi* | [**sign**](docs/Api/AlipayEbppInvoiceAuthApi.md#sign) | **POST** /v3/alipay/ebpp/invoice/auth/sign | 发票授权关系签约
*AlipayEbppInvoiceAuthApi* | [**unsign**](docs/Api/AlipayEbppInvoiceAuthApi.md#unsign) | **POST** /v3/alipay/ebpp/invoice/auth/unsign | 发票授权关系解约
*AlipayEbppInvoiceDetailOutputApi* | [**query**](docs/Api/AlipayEbppInvoiceDetailOutputApi.md#query) | **POST** /v3/alipay/ebpp/invoice/detail/output/query | 获取发票详细信息
*AlipayEbppInvoiceEcorderOrderApi* | [**query**](docs/Api/AlipayEbppInvoiceEcorderOrderApi.md#query) | **GET** /v3/alipay/ebpp/invoice/ecorder/order/query | 企业码订单查询
*AlipayEbppInvoiceEinvpackageApi* | [**query**](docs/Api/AlipayEbppInvoiceEinvpackageApi.md#query) | **GET** /v3/alipay/ebpp/invoice/einvpackage/query | 查询用户发票包的明细信息
*AlipayEbppInvoiceEnterpriseMerchantrelationApi* | [**create**](docs/Api/AlipayEbppInvoiceEnterpriseMerchantrelationApi.md#create) | **POST** /v3/alipay/ebpp/invoice/enterprise/merchantrelation/create | 创建企业商户关系
*AlipayEbppInvoiceEnterpriseconsumeConsumeApi* | [**batchquery**](docs/Api/AlipayEbppInvoiceEnterpriseconsumeConsumeApi.md#batchquery) | **POST** /v3/alipay/ebpp/invoice/enterpriseconsume/consume/batchquery | 企业因公账单查询
*AlipayEbppInvoiceEnterpriseconsumeDetailApi* | [**query**](docs/Api/AlipayEbppInvoiceEnterpriseconsumeDetailApi.md#query) | **GET** /v3/alipay/ebpp/invoice/enterpriseconsume/detail/query | 凭证详情查询接口
*AlipayEbppInvoiceEnterpriseconsumeEnterpriseopenruleApi* | [**create**](docs/Api/AlipayEbppInvoiceEnterpriseconsumeEnterpriseopenruleApi.md#create) | **POST** /v3/alipay/ebpp/invoice/enterpriseconsume/enterpriseopenrule/create | 新增开票规则
*AlipayEbppInvoiceEnterpriseconsumeEnterpriseopenruleApi* | [**modify**](docs/Api/AlipayEbppInvoiceEnterpriseconsumeEnterpriseopenruleApi.md#modify) | **POST** /v3/alipay/ebpp/invoice/enterpriseconsume/enterpriseopenrule/modify | 修改开票规则
*AlipayEbppInvoiceEnterpriseconsumeEnterpriseopenruleApi* | [**query**](docs/Api/AlipayEbppInvoiceEnterpriseconsumeEnterpriseopenruleApi.md#query) | **GET** /v3/alipay/ebpp/invoice/enterpriseconsume/enterpriseopenrule/query | 查询开票规则
*AlipayEbppInvoiceEnterpriseconsumeOpenrulerelationApi* | [**create**](docs/Api/AlipayEbppInvoiceEnterpriseconsumeOpenrulerelationApi.md#create) | **POST** /v3/alipay/ebpp/invoice/enterpriseconsume/openrulerelation/create | 新增开票规则并绑定费控规则
*AlipayEbppInvoiceEnterpriseconsumeRelatedetailApi* | [**query**](docs/Api/AlipayEbppInvoiceEnterpriseconsumeRelatedetailApi.md#query) | **GET** /v3/alipay/ebpp/invoice/enterpriseconsume/relatedetail/query | 合花账单关联详情查询
*AlipayEbppInvoiceEnterpriseconsumeSummaryinvoicedetailApi* | [**query**](docs/Api/AlipayEbppInvoiceEnterpriseconsumeSummaryinvoicedetailApi.md#query) | **GET** /v3/alipay/ebpp/invoice/enterpriseconsume/summaryinvoicedetail/query | 查询汇总发票详情
*AlipayEbppInvoiceEnterpriseexctrlEmployertitleApi* | [**batchquery**](docs/Api/AlipayEbppInvoiceEnterpriseexctrlEmployertitleApi.md#batchquery) | **POST** /v3/alipay/ebpp/invoice/enterpriseexctrl/employertitle/batchquery | 批量查询企业抬头
*AlipayEbppInvoiceEnterpriseexctrlEmployertitleApi* | [**create**](docs/Api/AlipayEbppInvoiceEnterpriseexctrlEmployertitleApi.md#create) | **POST** /v3/alipay/ebpp/invoice/enterpriseexctrl/employertitle/create | 新增企业抬头
*AlipayEbppInvoiceEnterpriseexctrlEmployertitleApi* | [**modify**](docs/Api/AlipayEbppInvoiceEnterpriseexctrlEmployertitleApi.md#modify) | **PUT** /v3/alipay/ebpp/invoice/enterpriseexctrl/employertitle | 修改企业抬头
*AlipayEbppInvoiceEnterpriseexctrlEmployertitleApi* | [**query**](docs/Api/AlipayEbppInvoiceEnterpriseexctrlEmployertitleApi.md#query) | **GET** /v3/alipay/ebpp/invoice/enterpriseexctrl/employertitle/query | 查询企业抬头
*AlipayEbppInvoiceExpenseProgressApi* | [**sync**](docs/Api/AlipayEbppInvoiceExpenseProgressApi.md#sync) | **POST** /v3/alipay/ebpp/invoice/expense/progress/sync | 发票报销处理进度同步
*AlipayEbppInvoiceExpensecomsueOutsourceApi* | [**notify**](docs/Api/AlipayEbppInvoiceExpensecomsueOutsourceApi.md#notify) | **POST** /v3/alipay/ebpp/invoice/expensecomsue/outsource/notify | 同步外部额度变更（交易形式）
*AlipayEbppInvoiceExpensecontrolAggregationApi* | [**create**](docs/Api/AlipayEbppInvoiceExpensecontrolAggregationApi.md#create) | **POST** /v3/alipay/ebpp/invoice/expensecontrol/aggregation/create | 创建费控规则聚合关系
*AlipayEbppInvoiceExpensecontrolIssuebatchApi* | [**cancel**](docs/Api/AlipayEbppInvoiceExpensecontrolIssuebatchApi.md#cancel) | **POST** /v3/alipay/ebpp/invoice/expensecontrol/issuebatch/cancel | 作废额度发放
*AlipayEbppInvoiceExpensecontrolIssuebatchApi* | [**create**](docs/Api/AlipayEbppInvoiceExpensecontrolIssuebatchApi.md#create) | **POST** /v3/alipay/ebpp/invoice/expensecontrol/issuebatch/create | 手动发放额度接口
*AlipayEbppInvoiceExpensecontrolQuotaApi* | [**create**](docs/Api/AlipayEbppInvoiceExpensecontrolQuotaApi.md#create) | **POST** /v3/alipay/ebpp/invoice/expensecontrol/quota/create | 创建余额/点券
*AlipayEbppInvoiceExpensecontrolQuotaApi* | [**modify**](docs/Api/AlipayEbppInvoiceExpensecontrolQuotaApi.md#modify) | **POST** /v3/alipay/ebpp/invoice/expensecontrol/quota/modify | 修改余额/点券
*AlipayEbppInvoiceExpensecontrolQuotaApi* | [**query**](docs/Api/AlipayEbppInvoiceExpensecontrolQuotaApi.md#query) | **POST** /v3/alipay/ebpp/invoice/expensecontrol/quota/query | 查询余额/点券
*AlipayEbppInvoiceExpenserulesEmployeeApi* | [**query**](docs/Api/AlipayEbppInvoiceExpenserulesEmployeeApi.md#query) | **GET** /v3/alipay/ebpp/invoice/expenserules/employee/query | 查询费控规则员工
*AlipayEbppInvoiceExpenserulesEmployeerulesApi* | [**query**](docs/Api/AlipayEbppInvoiceExpenserulesEmployeerulesApi.md#query) | **GET** /v3/alipay/ebpp/invoice/expenserules/employeerules/query | 查询员工绑定的所有费控规则
*AlipayEbppInvoiceExpenserulesGroupemployeeApi* | [**modify**](docs/Api/AlipayEbppInvoiceExpenserulesGroupemployeeApi.md#modify) | **POST** /v3/alipay/ebpp/invoice/expenserules/groupemployee/modify | 修改费控规则员工
*AlipayEbppInvoiceExpenserulesProjectemployeeApi* | [**modify**](docs/Api/AlipayEbppInvoiceExpenserulesProjectemployeeApi.md#modify) | **POST** /v3/alipay/ebpp/invoice/expenserules/projectemployee/modify | 修改项目的员工列表
*AlipayEbppInvoiceExpenserulesProjectinfoApi* | [**modify**](docs/Api/AlipayEbppInvoiceExpenserulesProjectinfoApi.md#modify) | **POST** /v3/alipay/ebpp/invoice/expenserules/projectinfo/modify | 修改项目基础信息
*AlipayEbppInvoiceExpenserulesProjectruleApi* | [**create**](docs/Api/AlipayEbppInvoiceExpenserulesProjectruleApi.md#create) | **POST** /v3/alipay/ebpp/invoice/expenserules/projectrule/create | 创建项目费控规则
*AlipayEbppInvoiceExpenserulesProjectruleApi* | [**query**](docs/Api/AlipayEbppInvoiceExpenserulesProjectruleApi.md#query) | **GET** /v3/alipay/ebpp/invoice/expenserules/projectrule/query | 查询项目费控规则
*AlipayEbppInvoiceExpenserulesProjectrulesApi* | [**modify**](docs/Api/AlipayEbppInvoiceExpenserulesProjectrulesApi.md#modify) | **POST** /v3/alipay/ebpp/invoice/expenserules/projectrules/modify | 修改项目费控规则
*AlipayEbppInvoiceExpenserulesSceneruleApi* | [**create**](docs/Api/AlipayEbppInvoiceExpenserulesSceneruleApi.md#create) | **POST** /v3/alipay/ebpp/invoice/expenserules/scenerule/create | 创建费控规则
*AlipayEbppInvoiceExpenserulesSceneruleApi* | [**modify**](docs/Api/AlipayEbppInvoiceExpenserulesSceneruleApi.md#modify) | **POST** /v3/alipay/ebpp/invoice/expenserules/scenerule/modify | 修改费控规则
*AlipayEbppInvoiceExpenserulesSceneruleApi* | [**query**](docs/Api/AlipayEbppInvoiceExpenserulesSceneruleApi.md#query) | **GET** /v3/alipay/ebpp/invoice/expenserules/scenerule/query | 查询费控规则信息
*AlipayEbppInvoiceExpensesceneMerchantApi* | [**query**](docs/Api/AlipayEbppInvoiceExpensesceneMerchantApi.md#query) | **GET** /v3/alipay/ebpp/invoice/expensescene/merchant/query | 查询企业可用商户信息
*AlipayEbppInvoiceFileOutputApi* | [**query**](docs/Api/AlipayEbppInvoiceFileOutputApi.md#query) | **GET** /v3/alipay/ebpp/invoice/file/output/query | 获取电子发票原文件
*AlipayEbppInvoiceInfoApi* | [**send**](docs/Api/AlipayEbppInvoiceInfoApi.md#send) | **POST** /v3/alipay/ebpp/invoice/info/send | 发票信息回传接口（新版）
*AlipayEbppInvoiceInstitutionApi* | [**create**](docs/Api/AlipayEbppInvoiceInstitutionApi.md#create) | **POST** /v3/alipay/ebpp/invoice/institution/create | 制度新增
*AlipayEbppInvoiceInstitutionApi* | [**delete**](docs/Api/AlipayEbppInvoiceInstitutionApi.md#delete) | **DELETE** /v3/alipay/ebpp/invoice/institution/delete | 制度删除
*AlipayEbppInvoiceInstitutionApi* | [**modify**](docs/Api/AlipayEbppInvoiceInstitutionApi.md#modify) | **POST** /v3/alipay/ebpp/invoice/institution/modify | 制度编辑
*AlipayEbppInvoiceInstitutionDetailinfoApi* | [**query**](docs/Api/AlipayEbppInvoiceInstitutionDetailinfoApi.md#query) | **GET** /v3/alipay/ebpp/invoice/institution/detailinfo/query | 制度详情查询
*AlipayEbppInvoiceInstitutionExpenseruleApi* | [**create**](docs/Api/AlipayEbppInvoiceInstitutionExpenseruleApi.md#create) | **POST** /v3/alipay/ebpp/invoice/institution/expenserule/create | 创建费控使用规则
*AlipayEbppInvoiceInstitutionExpenseruleApi* | [**delete**](docs/Api/AlipayEbppInvoiceInstitutionExpenseruleApi.md#delete) | **POST** /v3/alipay/ebpp/invoice/institution/expenserule/delete | 删除使用规则
*AlipayEbppInvoiceInstitutionExpenseruleApi* | [**modify**](docs/Api/AlipayEbppInvoiceInstitutionExpenseruleApi.md#modify) | **POST** /v3/alipay/ebpp/invoice/institution/expenserule/modify | 编辑使用规则
*AlipayEbppInvoiceInstitutionPageinfoApi* | [**query**](docs/Api/AlipayEbppInvoiceInstitutionPageinfoApi.md#query) | **GET** /v3/alipay/ebpp/invoice/institution/pageinfo/query | 费控制度分页查询
*AlipayEbppInvoiceInstitutionScopeApi* | [**modify**](docs/Api/AlipayEbppInvoiceInstitutionScopeApi.md#modify) | **POST** /v3/alipay/ebpp/invoice/institution/scope/modify | 修改制度下适配范围
*AlipayEbppInvoiceInstitutionScopepageinfoApi* | [**query**](docs/Api/AlipayEbppInvoiceInstitutionScopepageinfoApi.md#query) | **GET** /v3/alipay/ebpp/invoice/institution/scopepageinfo/query | 分页查询制度下人员
*AlipayEbppInvoiceIssueruleApi* | [**create**](docs/Api/AlipayEbppInvoiceIssueruleApi.md#create) | **POST** /v3/alipay/ebpp/invoice/issuerule/create | 新增发放规则
*AlipayEbppInvoiceIssueruleApi* | [**delete**](docs/Api/AlipayEbppInvoiceIssueruleApi.md#delete) | **POST** /v3/alipay/ebpp/invoice/issuerule/delete | 删除发放规则
*AlipayEbppInvoiceIssueruleApi* | [**modify**](docs/Api/AlipayEbppInvoiceIssueruleApi.md#modify) | **POST** /v3/alipay/ebpp/invoice/issuerule/modify | 编辑发放规则
*AlipayEbppInvoiceIsvtokenReimApi* | [**apply**](docs/Api/AlipayEbppInvoiceIsvtokenReimApi.md#apply) | **POST** /v3/alipay/ebpp/invoice/isvtoken/reim/apply | 获取报销授权令牌
*AlipayEbppInvoiceListExpenseApi* | [**sync**](docs/Api/AlipayEbppInvoiceListExpenseApi.md#sync) | **POST** /v3/alipay/ebpp/invoice/list/expense/sync | 报销状态批量同步开放接口
*AlipayEbppInvoiceMerchantEnterstatusApi* | [**query**](docs/Api/AlipayEbppInvoiceMerchantEnterstatusApi.md#query) | **GET** /v3/alipay/ebpp/invoice/merchant/enterstatus/query | 商户入驻流程状态查询
*AlipayEbppInvoiceMerchantlistEnterApi* | [**apply**](docs/Api/AlipayEbppInvoiceMerchantlistEnterApi.md#apply) | **POST** /v3/alipay/ebpp/invoice/merchantlist/enter/apply | 商户批量入驻申请接口
*AlipayEbppInvoiceOrderApi* | [**query**](docs/Api/AlipayEbppInvoiceOrderApi.md#query) | **GET** /v3/alipay/ebpp/invoice/order/query | 根据外部订单号查询发票信息
*AlipayEbppInvoiceSyncSimpleApi* | [**send**](docs/Api/AlipayEbppInvoiceSyncSimpleApi.md#send) | **POST** /v3/alipay/ebpp/invoice/sync/simple/send | 简单模式发票回传接口
*AlipayEbppInvoiceTaxnoApi* | [**batchquery**](docs/Api/AlipayEbppInvoiceTaxnoApi.md#batchquery) | **POST** /v3/alipay/ebpp/invoice/taxno/batchquery | 获取指定企业的发票要素列表
*AlipayEbppInvoiceTitleDynamicApi* | [**get**](docs/Api/AlipayEbppInvoiceTitleDynamicApi.md#get) | **GET** /v3/alipay/ebpp/invoice/title/dynamic/get | 根据动态码查询发票抬头
*AlipayEbppInvoiceTitleListApi* | [**get**](docs/Api/AlipayEbppInvoiceTitleListApi.md#get) | **GET** /v3/alipay/ebpp/invoice/title/list/get | 获取指定用户所有的有效抬头列表
*AlipayEbppInvoiceTokenApi* | [**batchquery**](docs/Api/AlipayEbppInvoiceTokenApi.md#batchquery) | **GET** /v3/alipay/ebpp/invoice/token/batchquery | 根据查询令牌获取发票要素列表
*AlipayEbppPdeductApi* | [**pay**](docs/Api/AlipayEbppPdeductApi.md#pay) | **POST** /v3/alipay/ebpp/pdeduct/pay | 公共事业缴费直连代扣扣款支付接口
*AlipayEbppPdeductAsyncApi* | [**pay**](docs/Api/AlipayEbppPdeductAsyncApi.md#pay) | **POST** /v3/alipay/ebpp/pdeduct/async/pay | 公共事业缴费直连代扣异步扣款支付接口
*AlipayEbppPdeductBillPayApi* | [**status**](docs/Api/AlipayEbppPdeductBillPayApi.md#status) | **GET** /v3/alipay/ebpp/pdeduct/bill/pay/status | 缴费直连代扣订单支付状态查询
*AlipayEbppPdeductSignApi* | [**add**](docs/Api/AlipayEbppPdeductSignApi.md#add) | **POST** /v3/alipay/ebpp/pdeduct/sign/add | 缴费直连代扣签约
*AlipayEbppPdeductSignApi* | [**cancel**](docs/Api/AlipayEbppPdeductSignApi.md#cancel) | **POST** /v3/alipay/ebpp/pdeduct/sign/cancel | 缴费直连代扣取消签约
*AlipayEbppPdeductSignApi* | [**query**](docs/Api/AlipayEbppPdeductSignApi.md#query) | **GET** /v3/alipay/ebpp/pdeduct/sign/query | 直连代扣协议查询接口
*AlipayEbppPdeductSignApi* | [**validate**](docs/Api/AlipayEbppPdeductSignApi.md#validate) | **POST** /v3/alipay/ebpp/pdeduct/sign/validate | 缴费直连代扣签约前置校验
*AlipayEcoContractSignflowsApi* | [**create**](docs/Api/AlipayEcoContractSignflowsApi.md#create) | **POST** /v3/alipay/eco/contract/signflows/create | 创建电子合同签署流程(E签宝)
*AlipayEcoDocTemplateApi* | [**create**](docs/Api/AlipayEcoDocTemplateApi.md#create) | **POST** /v3/alipay/eco/doc/template/create | 创建合同模板（E签宝）
*AlipayEcoDoctemplateSettingurlApi* | [**query**](docs/Api/AlipayEcoDoctemplateSettingurlApi.md#query) | **GET** /v3/alipay/eco/doctemplate/settingurl/query | 获取合同模板设置地址（E签宝）
*AlipayEcoEduKtBillingApi* | [**modify**](docs/Api/AlipayEcoEduKtBillingApi.md#modify) | **POST** /v3/alipay/eco/edu/kt/billing/modify | 教育缴费账单状态同步接口
*AlipayEcoEduKtBillingApi* | [**query**](docs/Api/AlipayEcoEduKtBillingApi.md#query) | **GET** /v3/alipay/eco/edu/kt/billing/query | 缴费账单查询
*AlipayEcoEduKtBillingApi* | [**send**](docs/Api/AlipayEcoEduKtBillingApi.md#send) | **POST** /v3/alipay/eco/edu/kt/billing/send | 教育缴费账单发送接口
*AlipayEcoEduKtParentApi* | [**query**](docs/Api/AlipayEcoEduKtParentApi.md#query) | **GET** /v3/alipay/eco/edu/kt/parent/query | 查询学生家长状态接口
*AlipayEcoEduKtSchoolinfoApi* | [**modify**](docs/Api/AlipayEcoEduKtSchoolinfoApi.md#modify) | **POST** /v3/alipay/eco/edu/kt/schoolinfo/modify | 教育缴费学校信息录入接口
*AlipayEcoEduKtStudentApi* | [**modify**](docs/Api/AlipayEcoEduKtStudentApi.md#modify) | **POST** /v3/alipay/eco/edu/kt/student/modify | 学生信息更新
*AlipayEcoFilePathApi* | [**query**](docs/Api/AlipayEcoFilePathApi.md#query) | **GET** /v3/alipay/eco/file/path/query | 获取文件直传地址（E签宝）
*AlipayEcoMycarParkingChargeinfoApi* | [**sync**](docs/Api/AlipayEcoMycarParkingChargeinfoApi.md#sync) | **POST** /v3/alipay/eco/mycar/parking/chargeinfo/sync | 停车场价格信息同步
*AlipayEcoMycarParkingCharginginfoApi* | [**sync**](docs/Api/AlipayEcoMycarParkingCharginginfoApi.md#sync) | **POST** /v3/alipay/eco/mycar/parking/charginginfo/sync | 车辆停车计费接口
*AlipayEcoMycarParkingConfigApi* | [**query**](docs/Api/AlipayEcoMycarParkingConfigApi.md#query) | **GET** /v3/alipay/eco/mycar/parking/config/query | ISV系统配置查询接口
*AlipayEcoMycarParkingConfigApi* | [**set**](docs/Api/AlipayEcoMycarParkingConfigApi.md#set) | **POST** /v3/alipay/eco/mycar/parking/config/set | 停车ISV系统配置接口
*AlipayEcoMycarParkingEnterinfoApi* | [**sync**](docs/Api/AlipayEcoMycarParkingEnterinfoApi.md#sync) | **POST** /v3/alipay/eco/mycar/parking/enterinfo/sync | 车辆驶入接口
*AlipayEcoMycarParkingExitinfoApi* | [**sync**](docs/Api/AlipayEcoMycarParkingExitinfoApi.md#sync) | **POST** /v3/alipay/eco/mycar/parking/exitinfo/sync | 车辆驶出接口
*AlipayEcoMycarParkingOrderApi* | [**sync**](docs/Api/AlipayEcoMycarParkingOrderApi.md#sync) | **POST** /v3/alipay/eco/mycar/parking/order/sync | 订单同步接口
*AlipayEcoMycarParkingOrderApi* | [**update**](docs/Api/AlipayEcoMycarParkingOrderApi.md#update) | **POST** /v3/alipay/eco/mycar/parking/order/update | 订单更新接口
*AlipayEcoMycarParkingOvertimecharginginfoApi* | [**sync**](docs/Api/AlipayEcoMycarParkingOvertimecharginginfoApi.md#sync) | **POST** /v3/alipay/eco/mycar/parking/overtimecharginginfo/sync | 车辆停车超时重计费接口
*AlipayEcoMycarParkingParkinglotbizApi* | [**transfer**](docs/Api/AlipayEcoMycarParkingParkinglotbizApi.md#transfer) | **POST** /v3/alipay/eco/mycar/parking/parkinglotbiz/transfer | 车场业务归属配置
*AlipayEcoMycarParkingParkinglotinfoApi* | [**create**](docs/Api/AlipayEcoMycarParkingParkinglotinfoApi.md#create) | **POST** /v3/alipay/eco/mycar/parking/parkinglotinfo/create | 录入停车场信息
*AlipayEcoMycarParkingParkinglotinfoApi* | [**query**](docs/Api/AlipayEcoMycarParkingParkinglotinfoApi.md#query) | **GET** /v3/alipay/eco/mycar/parking/parkinglotinfo/query | 停车场信息查询
*AlipayEcoMycarParkingParkinglotinfoApi* | [**update**](docs/Api/AlipayEcoMycarParkingParkinglotinfoApi.md#update) | **POST** /v3/alipay/eco/mycar/parking/parkinglotinfo/update | 修改停车场信息
*AlipayEcoMycarParkingPaymentinfoApi* | [**sync**](docs/Api/AlipayEcoMycarParkingPaymentinfoApi.md#sync) | **POST** /v3/alipay/eco/mycar/parking/paymentinfo/sync | 车辆停车缴费接口
*AlipayEcoMycarParkingSpaceinfoApi* | [**sync**](docs/Api/AlipayEcoMycarParkingSpaceinfoApi.md#sync) | **POST** /v3/alipay/eco/mycar/parking/spaceinfo/sync | 停车场车位信息同步
*AlipayEcoMycarParkingVehicleApi* | [**query**](docs/Api/AlipayEcoMycarParkingVehicleApi.md#query) | **GET** /v3/alipay/eco/mycar/parking/vehicle/query | 车牌查询接口
*AlipayEcoSignFlowApi* | [**cancel**](docs/Api/AlipayEcoSignFlowApi.md#cancel) | **POST** /v3/alipay/eco/sign/flow/cancel | 签署流程撤销（E签宝）
*AlipayEcoSignFlowApi* | [**create**](docs/Api/AlipayEcoSignFlowApi.md#create) | **POST** /v3/alipay/eco/sign/flow/create | 创建流程（E签宝）
*AlipayEcoSignFlowApi* | [**finish**](docs/Api/AlipayEcoSignFlowApi.md#finish) | **POST** /v3/alipay/eco/sign/flow/finish | 签署流程归档
*AlipayEcoSignFlowApi* | [**query**](docs/Api/AlipayEcoSignFlowApi.md#query) | **GET** /v3/alipay/eco/sign/flow/query | 签署流程查询（E签宝）
*AlipayEcoSignflowsDetailApi* | [**query**](docs/Api/AlipayEcoSignflowsDetailApi.md#query) | **GET** /v3/alipay/eco/signflows/detail/query | 获取签署流程合同与附件的下载地址（E签宝）
*AlipayEcoSignflowsUrlApi* | [**query**](docs/Api/AlipayEcoSignflowsUrlApi.md#query) | **GET** /v3/alipay/eco/signflows/url/query | 获取签署地址
*AlipayFundAccountApi* | [**query**](docs/Api/AlipayFundAccountApi.md#query) | **GET** /v3/alipay/fund/account/query | 支付宝资金账户资产查询接口
*AlipayFundAccountbookApi* | [**create**](docs/Api/AlipayFundAccountbookApi.md#create) | **POST** /v3/alipay/fund/accountbook/create | 资金记账本开通
*AlipayFundAccountbookApi* | [**query**](docs/Api/AlipayFundAccountbookApi.md#query) | **GET** /v3/alipay/fund/accountbook/query | 资金记账本的信息查询
*AlipayFundAccountbookNotifyApi* | [**query**](docs/Api/AlipayFundAccountbookNotifyApi.md#query) | **GET** /v3/alipay/fund/accountbook/notify/query | 记账本通知订阅关系查询接口
*AlipayFundAccountbookNotifyApi* | [**subscribe**](docs/Api/AlipayFundAccountbookNotifyApi.md#subscribe) | **POST** /v3/alipay/fund/accountbook/notify/subscribe | 记账本通知订阅接口
*AlipayFundAccountbookNotifyApi* | [**unsubscribe**](docs/Api/AlipayFundAccountbookNotifyApi.md#unsubscribe) | **POST** /v3/alipay/fund/accountbook/notify/unsubscribe | 记账本通知取消订阅接口
*AlipayFundAgreementQuotaApi* | [**modify**](docs/Api/AlipayFundAgreementQuotaApi.md#modify) | **POST** /v3/alipay/fund/agreement/quota/modify | 额度设置接口
*AlipayFundAgreementQuotaApi* | [**query**](docs/Api/AlipayFundAgreementQuotaApi.md#query) | **POST** /v3/alipay/fund/agreement/quota/query | 额度查询接口
*AlipayFundAuthOperationApi* | [**cancel**](docs/Api/AlipayFundAuthOperationApi.md#cancel) | **POST** /v3/alipay/fund/auth/operation/cancel | 资金授权撤销接口
*AlipayFundAuthOperationDetailApi* | [**query**](docs/Api/AlipayFundAuthOperationDetailApi.md#query) | **POST** /v3/alipay/fund/auth/operation/detail/query | 资金授权操作查询接口
*AlipayFundAuthOrderApi* | [**freeze**](docs/Api/AlipayFundAuthOrderApi.md#freeze) | **POST** /v3/alipay/fund/auth/order/freeze | 资金授权冻结接口
*AlipayFundAuthOrderApi* | [**unfreeze**](docs/Api/AlipayFundAuthOrderApi.md#unfreeze) | **POST** /v3/alipay/fund/auth/order/unfreeze | 资金授权解冻接口
*AlipayFundAuthOrderAppApi* | [**freeze**](docs/Api/AlipayFundAuthOrderAppApi.md#freeze) | **POST** /v3/alipay/fund/auth/order/app/freeze | 线上资金授权冻结接口
*AlipayFundAuthOrderVoucherApi* | [**create**](docs/Api/AlipayFundAuthOrderVoucherApi.md#create) | **POST** /v3/alipay/fund/auth/order/voucher/create | 资金授权发码接口
*AlipayFundEnterprisepayApi* | [**sign**](docs/Api/AlipayFundEnterprisepayApi.md#sign) | **POST** /v3/alipay/fund/enterprisepay/sign | 因公付企业签约
*AlipayFundEnterprisepayApi* | [**unsign**](docs/Api/AlipayFundEnterprisepayApi.md#unsign) | **POST** /v3/alipay/fund/enterprisepay/unsign | 因公付企业解约
*AlipayFundEnterprisepayGroupApi* | [**add**](docs/Api/AlipayFundEnterprisepayGroupApi.md#add) | **POST** /v3/alipay/fund/enterprisepay/group/add | 因公付新增账户下群组
*AlipayFundEnterprisepayGroupApi* | [**delete**](docs/Api/AlipayFundEnterprisepayGroupApi.md#delete) | **DELETE** /v3/alipay/fund/enterprisepay/group/delete | 因公付删除账户下群组
*AlipayFundEnterprisepayGroupApi* | [**modify**](docs/Api/AlipayFundEnterprisepayGroupApi.md#modify) | **POST** /v3/alipay/fund/enterprisepay/group/modify | 因公付更新账户下群组
*AlipayFundEnterprisepayGroupApi* | [**query**](docs/Api/AlipayFundEnterprisepayGroupApi.md#query) | **GET** /v3/alipay/fund/enterprisepay/group/query | 因公付查询账户下群组
*AlipayFundEnterprisepayMemberApi* | [**modify**](docs/Api/AlipayFundEnterprisepayMemberApi.md#modify) | **POST** /v3/alipay/fund/enterprisepay/member/modify | 因公付更新员工资金协议
*AlipayFundJointaccountBillApi* | [**query**](docs/Api/AlipayFundJointaccountBillApi.md#query) | **GET** /v3/alipay/fund/jointaccount/bill/query | 因公付账单查询
*AlipayFundJointaccountDetailApi* | [**query**](docs/Api/AlipayFundJointaccountDetailApi.md#query) | **GET** /v3/alipay/fund/jointaccount/detail/query | 共享资金-查询账户详情
*AlipayFundJointaccountListApi* | [**query**](docs/Api/AlipayFundJointaccountListApi.md#query) | **GET** /v3/alipay/fund/jointaccount/list/query | 企业查询代付账户列表
*AlipayFundJointaccountMemberApi* | [**batchquery**](docs/Api/AlipayFundJointaccountMemberApi.md#batchquery) | **POST** /v3/alipay/fund/jointaccount/member/batchquery | 企业批量查询员工信息（分页）
*AlipayFundJointaccountMemberApi* | [**bind**](docs/Api/AlipayFundJointaccountMemberApi.md#bind) | **POST** /v3/alipay/fund/jointaccount/member/bind | 因公付邀请员工
*AlipayFundJointaccountMemberApi* | [**consult**](docs/Api/AlipayFundJointaccountMemberApi.md#consult) | **POST** /v3/alipay/fund/jointaccount/member/consult | 员企关系咨询
*AlipayFundJointaccountMemberApi* | [**query**](docs/Api/AlipayFundJointaccountMemberApi.md#query) | **GET** /v3/alipay/fund/jointaccount/member/query | 企业查询员工列表
*AlipayFundJointaccountMemberApi* | [**unbind**](docs/Api/AlipayFundJointaccountMemberApi.md#unbind) | **POST** /v3/alipay/fund/jointaccount/member/unbind | 企业删除员工
*AlipayFundJointaccountMemberruleApi* | [**modify**](docs/Api/AlipayFundJointaccountMemberruleApi.md#modify) | **POST** /v3/alipay/fund/jointaccount/memberrule/modify | 企业设置员工规则
*AlipayFundJointaccountQuotaApi* | [**query**](docs/Api/AlipayFundJointaccountQuotaApi.md#query) | **GET** /v3/alipay/fund/jointaccount/quota/query | 查询账户额度详情
*AlipayFundJointaccountRuleApi* | [**modify**](docs/Api/AlipayFundJointaccountRuleApi.md#modify) | **POST** /v3/alipay/fund/jointaccount/rule/modify | 企业账户规则设置
*AlipayFundJointaccountSignApi* | [**query**](docs/Api/AlipayFundJointaccountSignApi.md#query) | **GET** /v3/alipay/fund/jointaccount/sign/query | 企业签约结果查询
*AlipayFundJointaccountTradeApi* | [**query**](docs/Api/AlipayFundJointaccountTradeApi.md#query) | **GET** /v3/alipay/fund/jointaccount/trade/query | 共同账户交易查询
*AlipayFundTransApi* | [**pay**](docs/Api/AlipayFundTransApi.md#pay) | **POST** /v3/alipay/fund/trans/pay | 资金支付接口
*AlipayFundTransApi* | [**refund**](docs/Api/AlipayFundTransApi.md#refund) | **POST** /v3/alipay/fund/trans/refund | 资金退回接口
*AlipayFundTransCommonApi* | [**query**](docs/Api/AlipayFundTransCommonApi.md#query) | **GET** /v3/alipay/fund/trans/common/query | 转账业务单据查询接口
*AlipayFundTransOrderApi* | [**query**](docs/Api/AlipayFundTransOrderApi.md#query) | **GET** /v3/alipay/fund/trans/order/query | 查询转账订单接口
*AlipayFundTransPayeeBindApi* | [**query**](docs/Api/AlipayFundTransPayeeBindApi.md#query) | **GET** /v3/alipay/fund/trans/payee/bind/query | 资金收款账号绑定关系查询
*AlipayFundTransToaccountApi* | [**transfer**](docs/Api/AlipayFundTransToaccountApi.md#transfer) | **POST** /v3/alipay/fund/trans/toaccount/transfer | 单笔转账到支付宝账户接口
*AlipayFundTransUniApi* | [**transfer**](docs/Api/AlipayFundTransUniApi.md#transfer) | **POST** /v3/alipay/fund/trans/uni/transfer | 单笔转账接口
*AlipayFundUsertradeApi* | [**batchquery**](docs/Api/AlipayFundUsertradeApi.md#batchquery) | **POST** /v3/alipay/fund/usertrade/batchquery | 用户交易数据查询
*AlipayIserviceCcmAgentApi* | [**create**](docs/Api/AlipayIserviceCcmAgentApi.md#create) | **POST** /v3/alipay/iservice/ccm/agent/create | 新增客服接口
*AlipayIserviceCcmAgentApi* | [**delete**](docs/Api/AlipayIserviceCcmAgentApi.md#delete) | **DELETE** /v3/alipay/iservice/ccm/agent/delete | 删除客服接口
*AlipayIserviceCcmAgentApi* | [**get**](docs/Api/AlipayIserviceCcmAgentApi.md#get) | **GET** /v3/alipay/iservice/ccm/agent/get | 查询客服详情
*AlipayIserviceCcmAgentApi* | [**modify**](docs/Api/AlipayIserviceCcmAgentApi.md#modify) | **POST** /v3/alipay/iservice/ccm/agent/modify | 更新客服接口
*AlipayIserviceCcmAgentApi* | [**query**](docs/Api/AlipayIserviceCcmAgentApi.md#query) | **POST** /v3/alipay/iservice/ccm/agent/query | 客服查询接口
*AlipayIserviceCcmAgentSchedulelogApi* | [**query**](docs/Api/AlipayIserviceCcmAgentSchedulelogApi.md#query) | **POST** /v3/alipay/iservice/ccm/agent/schedulelog/query | 查询客服状态变更流水日志
*AlipayIserviceCcmFunctionApi* | [**query**](docs/Api/AlipayIserviceCcmFunctionApi.md#query) | **GET** /v3/alipay/iservice/ccm/function/query | 列出所有的功能点
*AlipayIserviceCcmInstanceApi* | [**create**](docs/Api/AlipayIserviceCcmInstanceApi.md#create) | **POST** /v3/alipay/iservice/ccm/instance/create | 创建租户实例
*AlipayIserviceCcmInstanceApi* | [**get**](docs/Api/AlipayIserviceCcmInstanceApi.md#get) | **GET** /v3/alipay/iservice/ccm/instance/get | 查询单个租户实例（数据权限）
*AlipayIserviceCcmInstanceApi* | [**query**](docs/Api/AlipayIserviceCcmInstanceApi.md#query) | **GET** /v3/alipay/iservice/ccm/instance/query | 列出所有的租户实例（数据权限）
*AlipayIserviceCcmIsvApi* | [**initialize**](docs/Api/AlipayIserviceCcmIsvApi.md#initialize) | **POST** /v3/alipay/iservice/ccm/isv/initialize | ccm isv注册接口
*AlipayIserviceCcmOlsChatrecordApi* | [**query**](docs/Api/AlipayIserviceCcmOlsChatrecordApi.md#query) | **GET** /v3/alipay/iservice/ccm/ols/chatrecord/query | 查询某通在线服务的聊天记录
*AlipayIserviceCcmRobotAvatarbaseApi* | [**query**](docs/Api/AlipayIserviceCcmRobotAvatarbaseApi.md#query) | **POST** /v3/alipay/iservice/ccm/robot/avatarbase/query | 虚拟数字人开放接口调用
*AlipayIserviceCcmRoleApi* | [**create**](docs/Api/AlipayIserviceCcmRoleApi.md#create) | **POST** /v3/alipay/iservice/ccm/role/create | 创建角色
*AlipayIserviceCcmRoleApi* | [**delete**](docs/Api/AlipayIserviceCcmRoleApi.md#delete) | **DELETE** /v3/alipay/iservice/ccm/role/delete | 删除角色
*AlipayIserviceCcmRoleApi* | [**get**](docs/Api/AlipayIserviceCcmRoleApi.md#get) | **GET** /v3/alipay/iservice/ccm/role/get | 获取角色详情
*AlipayIserviceCcmRoleApi* | [**modify**](docs/Api/AlipayIserviceCcmRoleApi.md#modify) | **POST** /v3/alipay/iservice/ccm/role/modify | 更新角色
*AlipayIserviceCcmRolePageApi* | [**query**](docs/Api/AlipayIserviceCcmRolePageApi.md#query) | **GET** /v3/alipay/iservice/ccm/role/page/query | 分页查询角色
*AlipayIserviceCcmServiceApi* | [**buy**](docs/Api/AlipayIserviceCcmServiceApi.md#buy) | **POST** /v3/alipay/iservice/ccm/service/buy | 租户开通isv服务接口
*AlipayIserviceCcmServiceApi* | [**close**](docs/Api/AlipayIserviceCcmServiceApi.md#close) | **POST** /v3/alipay/iservice/ccm/service/close | 关闭租户开通的isv服务接口
*AlipayIserviceCcmServiceApi* | [**initialize**](docs/Api/AlipayIserviceCcmServiceApi.md#initialize) | **POST** /v3/alipay/iservice/ccm/service/initialize | isv服务初始化接口
*AlipayIserviceCcmServicerecordApi* | [**create**](docs/Api/AlipayIserviceCcmServicerecordApi.md#create) | **POST** /v3/alipay/iservice/ccm/servicerecord/create | 创建服务记录
*AlipayIserviceCcmServicerecordApi* | [**modify**](docs/Api/AlipayIserviceCcmServicerecordApi.md#modify) | **POST** /v3/alipay/iservice/ccm/servicerecord/modify | 变更服务记录
*AlipayIserviceCcmSwArticleApi* | [**batchquery**](docs/Api/AlipayIserviceCcmSwArticleApi.md#batchquery) | **POST** /v3/alipay/iservice/ccm/sw/article/batchquery | 知识库-问答-批量查询
*AlipayIserviceCcmSwArticleApi* | [**create**](docs/Api/AlipayIserviceCcmSwArticleApi.md#create) | **PUT** /v3/alipay/iservice/ccm/sw/article/create | 知识库-问答-创建
*AlipayIserviceCcmSwArticleApi* | [**delete**](docs/Api/AlipayIserviceCcmSwArticleApi.md#delete) | **DELETE** /v3/alipay/iservice/ccm/sw/article/delete | 知识库-问答-删除
*AlipayIserviceCcmSwArticleApi* | [**get**](docs/Api/AlipayIserviceCcmSwArticleApi.md#get) | **GET** /v3/alipay/iservice/ccm/sw/article/get | 知识库-问答-获取
*AlipayIserviceCcmSwArticleApi* | [**modify**](docs/Api/AlipayIserviceCcmSwArticleApi.md#modify) | **PATCH** /v3/alipay/iservice/ccm/sw/article/modify | 知识库-问答-修改
*AlipayIserviceCcmSwKnowledgeApi* | [**modify**](docs/Api/AlipayIserviceCcmSwKnowledgeApi.md#modify) | **POST** /v3/alipay/iservice/ccm/sw/knowledge/modify | 知识库问答管理
*AlipayIserviceCcmSwLibraryApi* | [**batchquery**](docs/Api/AlipayIserviceCcmSwLibraryApi.md#batchquery) | **GET** /v3/alipay/iservice/ccm/sw/library/batchquery | 知识库-库-批量查询
*AlipayIserviceCcmSwLibraryApi* | [**create**](docs/Api/AlipayIserviceCcmSwLibraryApi.md#create) | **PUT** /v3/alipay/iservice/ccm/sw/library/create | 知识库-库-创建
*AlipayIserviceCcmSwLibraryApi* | [**delete**](docs/Api/AlipayIserviceCcmSwLibraryApi.md#delete) | **DELETE** /v3/alipay/iservice/ccm/sw/library/delete | 知识库-库-删除
*AlipayIserviceCcmSwLibraryApi* | [**modify**](docs/Api/AlipayIserviceCcmSwLibraryApi.md#modify) | **PATCH** /v3/alipay/iservice/ccm/sw/library/modify | 知识库-库-修改
*AlipayIserviceCcmSwOrderApi* | [**sync**](docs/Api/AlipayIserviceCcmSwOrderApi.md#sync) | **POST** /v3/alipay/iservice/ccm/sw/order/sync | 商品订单同步
*AlipayIserviceCcmSwSpuApi* | [**sync**](docs/Api/AlipayIserviceCcmSwSpuApi.md#sync) | **POST** /v3/alipay/iservice/ccm/sw/spu/sync | 商品库-商品信息同步
*AlipayIserviceCcmSwTreeApi* | [**batchquery**](docs/Api/AlipayIserviceCcmSwTreeApi.md#batchquery) | **GET** /v3/alipay/iservice/ccm/sw/tree/batchquery | 知识库-类目-批量查询
*AlipayIserviceCcmSwTreeApi* | [**create**](docs/Api/AlipayIserviceCcmSwTreeApi.md#create) | **PUT** /v3/alipay/iservice/ccm/sw/tree/create | 知识库-类目-创建
*AlipayIserviceCcmSwTreeApi* | [**delete**](docs/Api/AlipayIserviceCcmSwTreeApi.md#delete) | **DELETE** /v3/alipay/iservice/ccm/sw/tree/delete | 知识库-类目-删除
*AlipayIserviceCcmSwTreeApi* | [**get**](docs/Api/AlipayIserviceCcmSwTreeApi.md#get) | **GET** /v3/alipay/iservice/ccm/sw/tree/get | 知识库-类目-获取
*AlipayIserviceCcmSwTreeApi* | [**modify**](docs/Api/AlipayIserviceCcmSwTreeApi.md#modify) | **PATCH** /v3/alipay/iservice/ccm/sw/tree/modify | 知识库-类目-修改
*AlipayIserviceCcmSwTreeApi* | [**publish**](docs/Api/AlipayIserviceCcmSwTreeApi.md#publish) | **PUT** /v3/alipay/iservice/ccm/sw/tree/publish | 知识库-类目-发布
*AlipayIserviceCcmSwTreecategoryApi* | [**batchquery**](docs/Api/AlipayIserviceCcmSwTreecategoryApi.md#batchquery) | **GET** /v3/alipay/iservice/ccm/sw/treecategory/batchquery | 知识库-节点-批量查询
*AlipayIserviceCcmSwTreecategoryApi* | [**create**](docs/Api/AlipayIserviceCcmSwTreecategoryApi.md#create) | **PUT** /v3/alipay/iservice/ccm/sw/treecategory/create | 知识库-节点-创建
*AlipayIserviceCcmSwTreecategoryApi* | [**delete**](docs/Api/AlipayIserviceCcmSwTreecategoryApi.md#delete) | **DELETE** /v3/alipay/iservice/ccm/sw/treecategory/delete | 知识库-节点-删除
*AlipayIserviceCcmSwTreecategoryApi* | [**modify**](docs/Api/AlipayIserviceCcmSwTreecategoryApi.md#modify) | **PATCH** /v3/alipay/iservice/ccm/sw/treecategory/modify | 知识库-节点-修改
*AlipayMarketingActivityApi* | [**batchquery**](docs/Api/AlipayMarketingActivityApi.md#batchquery) | **POST** /v3/alipay/marketing/activity/batchquery | 条件查询活动列表
*AlipayMarketingActivityApi* | [**consult**](docs/Api/AlipayMarketingActivityApi.md#consult) | **POST** /v3/alipay/marketing/activity/consult | 活动领取咨询接口
*AlipayMarketingActivityApi* | [**query**](docs/Api/AlipayMarketingActivityApi.md#query) | **GET** /v3/alipay/marketing/activity/{activity_id} | 查询活动详情
*AlipayMarketingActivityAppApi* | [**batchquery**](docs/Api/AlipayMarketingActivityAppApi.md#batchquery) | **GET** /v3/alipay/marketing/activity/{activity_id}/app/batchquery | 查询活动可用小程序
*AlipayMarketingActivityDeliveryApi* | [**create**](docs/Api/AlipayMarketingActivityDeliveryApi.md#create) | **POST** /v3/alipay/marketing/delivery | 创建推广计划
*AlipayMarketingActivityDeliveryApi* | [**query**](docs/Api/AlipayMarketingActivityDeliveryApi.md#query) | **POST** /v3/alipay/marketing/delivery/{delivery_id}/query | 查询推广计划
*AlipayMarketingActivityDeliveryApi* | [**stop**](docs/Api/AlipayMarketingActivityDeliveryApi.md#stop) | **PATCH** /v3/alipay/marketing/delivery/{delivery_id}/stop | 停止推广计划
*AlipayMarketingActivityDeliverychannelApi* | [**query**](docs/Api/AlipayMarketingActivityDeliverychannelApi.md#query) | **POST** /v3/alipay/marketing/activity/deliverychannel/query | 查询可推广渠道
*AlipayMarketingActivityGoodsApi* | [**batchquery**](docs/Api/AlipayMarketingActivityGoodsApi.md#batchquery) | **GET** /v3/alipay/marketing/activity/{activity_id}/goods/batchquery | 查询活动适用商品
*AlipayMarketingActivityMerchantApi* | [**batchquery**](docs/Api/AlipayMarketingActivityMerchantApi.md#batchquery) | **GET** /v3/alipay/marketing/activity/{activity_id}/merchant/batchquery | 查询活动可用商户
*AlipayMarketingActivityOrdervoucherApi* | [**append**](docs/Api/AlipayMarketingActivityOrdervoucherApi.md#append) | **PATCH** /v3/alipay/marketing/ordervoucher/activity/{activity_id}/append | 修改商家券活动发券数量上限
*AlipayMarketingActivityOrdervoucherApi* | [**associate**](docs/Api/AlipayMarketingActivityOrdervoucherApi.md#associate) | **POST** /v3/alipay/marketing/activity/ordervoucher/associate | 关联订单信息
*AlipayMarketingActivityOrdervoucherApi* | [**callUse**](docs/Api/AlipayMarketingActivityOrdervoucherApi.md#calluse) | **POST** /v3/alipay/marketing/ordervoucher/activity/{activity_id}/voucher/{voucher_code}/use | 同步券核销状态
*AlipayMarketingActivityOrdervoucherApi* | [**codecount**](docs/Api/AlipayMarketingActivityOrdervoucherApi.md#codecount) | **GET** /v3/alipay/marketing/ordervoucher/activity/{activity_id}/voucher/codecount | 统计商家券券码数量
*AlipayMarketingActivityOrdervoucherApi* | [**codedeposit**](docs/Api/AlipayMarketingActivityOrdervoucherApi.md#codedeposit) | **POST** /v3/alipay/marketing/ordervoucher/activity/{activity_id}/voucher/codedeposit | 同步商家券券码
*AlipayMarketingActivityOrdervoucherApi* | [**create**](docs/Api/AlipayMarketingActivityOrdervoucherApi.md#create) | **POST** /v3/alipay/marketing/ordervoucher/activity | 创建商家券活动
*AlipayMarketingActivityOrdervoucherApi* | [**disassociate**](docs/Api/AlipayMarketingActivityOrdervoucherApi.md#disassociate) | **POST** /v3/alipay/marketing/activity/ordervoucher/disassociate | 取消关联订单信息
*AlipayMarketingActivityOrdervoucherApi* | [**modify**](docs/Api/AlipayMarketingActivityOrdervoucherApi.md#modify) | **PATCH** /v3/alipay/marketing/ordervoucher/activity/{activity_id} | 修改商家券活动基本信息
*AlipayMarketingActivityOrdervoucherApi* | [**query**](docs/Api/AlipayMarketingActivityOrdervoucherApi.md#query) | **GET** /v3/alipay/marketing/activity/ordervoucher/query | 查询商家券活动
*AlipayMarketingActivityOrdervoucherApi* | [**refund**](docs/Api/AlipayMarketingActivityOrdervoucherApi.md#refund) | **POST** /v3/alipay/marketing/ordervoucher/activity/{activity_id}/voucher/{voucher_code}/refund | 取消券核销状态
*AlipayMarketingActivityOrdervoucherApi* | [**stop**](docs/Api/AlipayMarketingActivityOrdervoucherApi.md#stop) | **PATCH** /v3/alipay/marketing/ordervoucher/activity/{activity_id}/stop | 停止商家券活动
*AlipayMarketingActivityShopApi* | [**batchquery**](docs/Api/AlipayMarketingActivityShopApi.md#batchquery) | **GET** /v3/alipay/marketing/activity/{activity_id}/shop/batchquery | 查询活动可用门店
*AlipayMarketingActivityUserApi* | [**batchqueryvoucher**](docs/Api/AlipayMarketingActivityUserApi.md#batchqueryvoucher) | **GET** /v3/alipay/marketing/activity/ordervoucher/user/batchqueryvoucher | 条件查询用户券
*AlipayMarketingActivityUserApi* | [**queryvoucher**](docs/Api/AlipayMarketingActivityUserApi.md#queryvoucher) | **GET** /v3/alipay/marketing/activity/ordervoucher/user/voucher | 查询用户券详情
*AlipayMarketingActivityVoucherApi* | [**append**](docs/Api/AlipayMarketingActivityVoucherApi.md#append) | **POST** /v3/alipay/marketing/activity/voucher/append | 追加支付券预算
*AlipayMarketingActivityVoucherApi* | [**create**](docs/Api/AlipayMarketingActivityVoucherApi.md#create) | **POST** /v3/alipay/marketing/activity/voucher/create | 创建支付券
*AlipayMarketingActivityVoucherApi* | [**modify**](docs/Api/AlipayMarketingActivityVoucherApi.md#modify) | **POST** /v3/alipay/marketing/activity/voucher/modify | 修改支付券基本信息
*AlipayMarketingActivityVoucherApi* | [**publish**](docs/Api/AlipayMarketingActivityVoucherApi.md#publish) | **POST** /v3/alipay/marketing/activity/voucher/publish | 激活支付券
*AlipayMarketingActivityVoucherApi* | [**query**](docs/Api/AlipayMarketingActivityVoucherApi.md#query) | **GET** /v3/alipay/marketing/activity/voucher/query | 查询支付券详情
*AlipayMarketingActivityVoucherApi* | [**send**](docs/Api/AlipayMarketingActivityVoucherApi.md#send) | **POST** /v3/alipay/marketing/activity/voucher/send | 发放支付券
*AlipayMarketingActivityVoucherApi* | [**stop**](docs/Api/AlipayMarketingActivityVoucherApi.md#stop) | **POST** /v3/alipay/marketing/activity/voucher/stop | 停止支付券
*AlipayMarketingActivityVoucherpackageApi* | [**batchquery**](docs/Api/AlipayMarketingActivityVoucherpackageApi.md#batchquery) | **POST** /v3/alipay/marketing/activity/voucherpackage/batchquery | 券包批量查询
*AlipayMarketingActivityVoucherpackageApi* | [**consult**](docs/Api/AlipayMarketingActivityVoucherpackageApi.md#consult) | **POST** /v3/alipay/marketing/activity/voucherpackage/consult | 券包购买咨询
*AlipayMarketingActivityVoucherpackageApi* | [**query**](docs/Api/AlipayMarketingActivityVoucherpackageApi.md#query) | **GET** /v3/alipay/marketing/activity/voucherpackage/query | 券包详情查询
*AlipayMarketingCampaignCashApi* | [**create**](docs/Api/AlipayMarketingCampaignCashApi.md#create) | **POST** /v3/alipay/marketing/campaign/cash/create | 创建现金活动
*AlipayMarketingCampaignCashApi* | [**trigger**](docs/Api/AlipayMarketingCampaignCashApi.md#trigger) | **POST** /v3/alipay/marketing/campaign/cash/trigger | 触发现金红包活动
*AlipayMarketingCampaignCashDetailApi* | [**query**](docs/Api/AlipayMarketingCampaignCashDetailApi.md#query) | **GET** /v3/alipay/marketing/campaign/cash/detail/query | 现金活动详情查询
*AlipayMarketingCampaignCashListApi* | [**query**](docs/Api/AlipayMarketingCampaignCashListApi.md#query) | **GET** /v3/alipay/marketing/campaign/cash/list/query | 现金活动列表查询
*AlipayMarketingCampaignCashStatusApi* | [**modify**](docs/Api/AlipayMarketingCampaignCashStatusApi.md#modify) | **POST** /v3/alipay/marketing/campaign/cash/status/modify | 更改现金活动状态
*AlipayMarketingCampaignOrderVoucherApi* | [**consult**](docs/Api/AlipayMarketingCampaignOrderVoucherApi.md#consult) | **POST** /v3/alipay/marketing/campaign/order/voucher/consult | 订单优惠前置咨询
*AlipayMarketingCardApi* | [**delete**](docs/Api/AlipayMarketingCardApi.md#delete) | **DELETE** /v3/alipay/marketing/card/delete | 会员卡删卡
*AlipayMarketingCardApi* | [**open**](docs/Api/AlipayMarketingCardApi.md#open) | **POST** /v3/alipay/marketing/card/open | 会员卡开卡
*AlipayMarketingCardApi* | [**query**](docs/Api/AlipayMarketingCardApi.md#query) | **POST** /v3/alipay/marketing/card/query | 会员卡查询
*AlipayMarketingCardApi* | [**update**](docs/Api/AlipayMarketingCardApi.md#update) | **POST** /v3/alipay/marketing/card/update | 会员卡更新
*AlipayMarketingCardActivateformApi* | [**query**](docs/Api/AlipayMarketingCardActivateformApi.md#query) | **GET** /v3/alipay/marketing/card/activateform/query | 查询用户提交的会员卡表单信息
*AlipayMarketingCardActivateurlApi* | [**apply**](docs/Api/AlipayMarketingCardActivateurlApi.md#apply) | **POST** /v3/alipay/marketing/card/activateurl/apply | 获取会员卡领卡投放链接
*AlipayMarketingCardBenefitApi* | [**create**](docs/Api/AlipayMarketingCardBenefitApi.md#create) | **POST** /v3/alipay/marketing/card/benefit/create | 会员卡模板外部权益创建
*AlipayMarketingCardBenefitApi* | [**delete**](docs/Api/AlipayMarketingCardBenefitApi.md#delete) | **DELETE** /v3/alipay/marketing/card/benefit/delete | 会员卡模板外部权益删除
*AlipayMarketingCardBenefitApi* | [**modify**](docs/Api/AlipayMarketingCardBenefitApi.md#modify) | **POST** /v3/alipay/marketing/card/benefit/modify | 会员卡模板外部权益修改
*AlipayMarketingCardBenefitApi* | [**query**](docs/Api/AlipayMarketingCardBenefitApi.md#query) | **GET** /v3/alipay/marketing/card/benefit/query | 会员卡模板外部权益查询
*AlipayMarketingCardConsumeApi* | [**sync**](docs/Api/AlipayMarketingCardConsumeApi.md#sync) | **POST** /v3/alipay/marketing/card/consume/sync | 会员卡消费记录同步
*AlipayMarketingCardFormtemplateApi* | [**set**](docs/Api/AlipayMarketingCardFormtemplateApi.md#set) | **POST** /v3/alipay/marketing/card/formtemplate/set | 会员卡开卡表单模板配置
*AlipayMarketingCardMessageApi* | [**notify**](docs/Api/AlipayMarketingCardMessageApi.md#notify) | **POST** /v3/alipay/marketing/card/message/notify | 会员卡消息通知
*AlipayMarketingCardTemplateApi* | [**batchquery**](docs/Api/AlipayMarketingCardTemplateApi.md#batchquery) | **POST** /v3/alipay/marketing/card/template/batchquery | 会员卡模板批量查询
*AlipayMarketingCardTemplateApi* | [**create**](docs/Api/AlipayMarketingCardTemplateApi.md#create) | **POST** /v3/alipay/marketing/card/template/create | 会员卡模板创建
*AlipayMarketingCardTemplateApi* | [**modify**](docs/Api/AlipayMarketingCardTemplateApi.md#modify) | **POST** /v3/alipay/marketing/card/template/modify | 会员卡模板修改
*AlipayMarketingCardTemplateApi* | [**query**](docs/Api/AlipayMarketingCardTemplateApi.md#query) | **GET** /v3/alipay/marketing/card/template/query | 会员卡模板查询接口
*AlipayMarketingMaterialApi* | [**create**](docs/Api/AlipayMarketingMaterialApi.md#create) | **POST** /v3/alipay/marketing/material/create | 创建支付宝素材
*AlipayMarketingMaterialImageApi* | [**upload**](docs/Api/AlipayMarketingMaterialImageApi.md#upload) | **POST** /v3/alipay/marketing/material/image | 营销图片资源上传接口
*AlipayMarketingRecruitEnrollApi* | [**close**](docs/Api/AlipayMarketingRecruitEnrollApi.md#close) | **POST** /v3/alipay/marketing/recruit/enroll/close | 下线报名
*AlipayMarketingRecruitEnrollApi* | [**create**](docs/Api/AlipayMarketingRecruitEnrollApi.md#create) | **POST** /v3/alipay/marketing/recruit/enroll/create | 招商报名提交
*AlipayMarketingRecruitEnrollApi* | [**query**](docs/Api/AlipayMarketingRecruitEnrollApi.md#query) | **GET** /v3/alipay/marketing/recruit/enroll/query | 报名详情查询
*AlipayMarketingRecruitPlanApi* | [**query**](docs/Api/AlipayMarketingRecruitPlanApi.md#query) | **POST** /v3/alipay/marketing/recruit/plan/query | 招商方案详情查询
*AlipayMarketingRecruitPlanlistApi* | [**query**](docs/Api/AlipayMarketingRecruitPlanlistApi.md#query) | **POST** /v3/alipay/marketing/recruit/planlist/query | 查询可报名的方案列表
*AlipayMerchantAnchorInfoApi* | [**query**](docs/Api/AlipayMerchantAnchorInfoApi.md#query) | **GET** /v3/alipay/merchant/anchor/query | 查询主播信息
*AlipayMerchantImageApi* | [**upload**](docs/Api/AlipayMerchantImageApi.md#upload) | **POST** /v3/alipay/merchant/image/upload | 商户上传处理图片
*AlipayMerchantIndirectAuthorderApi* | [**close**](docs/Api/AlipayMerchantIndirectAuthorderApi.md#close) | **PUT** /v3/alipay/merchant/indirect/authorder/close | 商家认证申请单撤销
*AlipayMerchantIndirectAuthorderApi* | [**create**](docs/Api/AlipayMerchantIndirectAuthorderApi.md#create) | **POST** /v3/alipay/merchant/indirect/authorder/create | 商家认证申请单提交
*AlipayMerchantIndirectAuthorderApi* | [**querystatus**](docs/Api/AlipayMerchantIndirectAuthorderApi.md#querystatus) | **POST** /v3/alipay/merchant/indirect/authorder/querystatus | 查询商家认证申请单状态
*AlipayMerchantIndirectSmidbindApi* | [**query**](docs/Api/AlipayMerchantIndirectSmidbindApi.md#query) | **GET** /v3/alipay/merchant/indirect/smidbind/query | 获取商家认证状态
*AlipayMerchantIotDeviceApi* | [**bind**](docs/Api/AlipayMerchantIotDeviceApi.md#bind) | **POST** /v3/alipay/merchant/iot/device/bind | IoT设备绑定门店
*AlipayMerchantIotDeviceApi* | [**query**](docs/Api/AlipayMerchantIotDeviceApi.md#query) | **GET** /v3/alipay/merchant/iot/device/query | IoT设备绑定关系查询
*AlipayMerchantIotDeviceApi* | [**verify**](docs/Api/AlipayMerchantIotDeviceApi.md#verify) | **POST** /v3/alipay/merchant/iot/device/verify | IoT设备绑定校验
*AlipayMerchantItemFileApi* | [**upload**](docs/Api/AlipayMerchantItemFileApi.md#upload) | **POST** /v3/alipay/merchant/item/file/upload | 商品文件上传接口
*AlipayMerchantLiveChannelApi* | [**query**](docs/Api/AlipayMerchantLiveChannelApi.md#query) | **GET** /v3/alipay/merchant/live/channel/query | 渠道信息查询
*AlipayMerchantLiveItemplanApi* | [**modify**](docs/Api/AlipayMerchantLiveItemplanApi.md#modify) | **POST** /v3/alipay/merchant/live/itemplan/modify | 支付宝货品推广计划创建
*AlipayMerchantOrderApi* | [**sync**](docs/Api/AlipayMerchantOrderApi.md#sync) | **POST** /v3/alipay/merchant/order/sync | 订单数据同步接口
*AlipayMerchantTradecomplainApi* | [**batchquery**](docs/Api/AlipayMerchantTradecomplainApi.md#batchquery) | **POST** /v3/alipay/merchant/tradecomplain/batchquery | 查询交易投诉列表
*AlipayMerchantTradecomplainApi* | [**query**](docs/Api/AlipayMerchantTradecomplainApi.md#query) | **GET** /v3/alipay/merchant/tradecomplain/{complain_event_id} | 查询单条交易投诉详情
*AlipayMerchantTradecomplainFeedbackApi* | [**submit**](docs/Api/AlipayMerchantTradecomplainFeedbackApi.md#submit) | **POST** /v3/alipay/merchant/tradecomplain/feedback | 商家处理交易投诉
*AlipayMerchantTradecomplainReplyApi* | [**submit**](docs/Api/AlipayMerchantTradecomplainReplyApi.md#submit) | **POST** /v3/alipay/merchant/tradecomplain/reply | 商家留言回复
*AlipayMerchantTradecomplainSupplementApi* | [**submit**](docs/Api/AlipayMerchantTradecomplainSupplementApi.md#submit) | **POST** /v3/alipay/merchant/tradecomplain/supplement | 商家补充凭证
*AlipayMobilePublicFollowApi* | [**callList**](docs/Api/AlipayMobilePublicFollowApi.md#calllist) | **GET** /v3/alipay/mobile/public/follow/list | 获取关注者列表
*AlipayMobilePublicInfoApi* | [**query**](docs/Api/AlipayMobilePublicInfoApi.md#query) | **GET** /v3/alipay/mobile/public/info/query | 服务窗基础信息查询接口
*AlipayMobilePublicMenuApi* | [**add**](docs/Api/AlipayMobilePublicMenuApi.md#add) | **POST** /v3/alipay/mobile/public/menu/add | 创建菜单
*AlipayMobilePublicMenuApi* | [**get**](docs/Api/AlipayMobilePublicMenuApi.md#get) | **GET** /v3/alipay/mobile/public/menu/get | 查询菜单
*AlipayMobilePublicMenuApi* | [**update**](docs/Api/AlipayMobilePublicMenuApi.md#update) | **POST** /v3/alipay/mobile/public/menu/update | 更新菜单
*AlipayMobilePublicMessageCustomApi* | [**send**](docs/Api/AlipayMobilePublicMessageCustomApi.md#send) | **POST** /v3/alipay/mobile/public/message/custom/send | 异步单发消息
*AlipayMobilePublicMessageSingleApi* | [**send**](docs/Api/AlipayMobilePublicMessageSingleApi.md#send) | **POST** /v3/alipay/mobile/public/message/single/send | 单发模板消息
*AlipayMobilePublicMessageTotalApi* | [**send**](docs/Api/AlipayMobilePublicMessageTotalApi.md#send) | **POST** /v3/alipay/mobile/public/message/total/send | 群发消息
*AlipayMobilePublicQrcodeApi* | [**create**](docs/Api/AlipayMobilePublicQrcodeApi.md#create) | **POST** /v3/alipay/mobile/public/qrcode/create | 生成带参数的二维码
*AlipayMobilePublicShortlinkApi* | [**create**](docs/Api/AlipayMobilePublicShortlinkApi.md#create) | **POST** /v3/alipay/mobile/public/shortlink/create | 服务窗短链自主生成接口
*AlipayMobilePublicTemplateMessageApi* | [**delete**](docs/Api/AlipayMobilePublicTemplateMessageApi.md#delete) | **POST** /v3/alipay/mobile/public/template/message/delete | 模板消息删除接口
*AlipayMobilePublicTemplateMessageApi* | [**get**](docs/Api/AlipayMobilePublicTemplateMessageApi.md#get) | **GET** /v3/alipay/mobile/public/template/message/get | 模板消息领取接口
*AlipayMobilePublicTemplateMessageApi* | [**query**](docs/Api/AlipayMobilePublicTemplateMessageApi.md#query) | **POST** /v3/alipay/mobile/public/template/message/query | 模板消息查询接口
*AlipayMobileStdPublicMessageCustomApi* | [**send**](docs/Api/AlipayMobileStdPublicMessageCustomApi.md#send) | **POST** /v3/alipay/mobile/std/public/message/custom/send | 异步单发消息
*AlipayOfflineMarketApplyorderApi* | [**batchquery**](docs/Api/AlipayOfflineMarketApplyorderApi.md#batchquery) | **POST** /v3/alipay/offline/market/applyorder/batchquery | 业务流水批量查询接口
*AlipayOfflineMarketShopApi* | [**batchquery**](docs/Api/AlipayOfflineMarketShopApi.md#batchquery) | **POST** /v3/alipay/offline/market/shop/batchquery | 查询商户的门店编号列表
*AlipayOfflineMarketShopApi* | [**create**](docs/Api/AlipayOfflineMarketShopApi.md#create) | **POST** /v3/alipay/offline/market/shop/create | 创建门店信息
*AlipayOfflineMarketShopApi* | [**modify**](docs/Api/AlipayOfflineMarketShopApi.md#modify) | **POST** /v3/alipay/offline/market/shop/modify | 修改门店信息
*AlipayOfflineMarketShopApi* | [**querydetail**](docs/Api/AlipayOfflineMarketShopApi.md#querydetail) | **GET** /v3/alipay/offline/market/shop/querydetail | 查询单个门店信息接口
*AlipayOfflineMarketShopCategoryApi* | [**query**](docs/Api/AlipayOfflineMarketShopCategoryApi.md#query) | **GET** /v3/alipay/offline/market/shop/category/query | 门店类目配置查询接口
*AlipayOfflineMarketShopSummaryApi* | [**batchquery**](docs/Api/AlipayOfflineMarketShopSummaryApi.md#batchquery) | **POST** /v3/alipay/offline/market/shop/summary/batchquery | 门店摘要信息批量查询接口
*AlipayOfflineMaterialImageApi* | [**upload**](docs/Api/AlipayOfflineMaterialImageApi.md#upload) | **POST** /v3/alipay/offline/material/image/upload | 上传门店照片和视频接口
*AlipayOpenAgentApi* | [**cancel**](docs/Api/AlipayOpenAgentApi.md#cancel) | **POST** /v3/alipay/open/agent/cancel | 取消代商户签约、创建应用事务
*AlipayOpenAgentApi* | [**confirm**](docs/Api/AlipayOpenAgentApi.md#confirm) | **POST** /v3/alipay/open/agent/confirm | 提交代商户签约、创建应用事务
*AlipayOpenAgentApi* | [**create**](docs/Api/AlipayOpenAgentApi.md#create) | **POST** /v3/alipay/open/agent/create | 开启代商户签约、创建应用事务
*AlipayOpenAgentCommonApi* | [**sign**](docs/Api/AlipayOpenAgentCommonApi.md#sign) | **POST** /v3/alipay/open/agent/common/sign | 代签约产品通用接口
*AlipayOpenAgentCommonsignApi* | [**confirm**](docs/Api/AlipayOpenAgentCommonsignApi.md#confirm) | **POST** /v3/alipay/open/agent/commonsign/confirm | 代商户签约，提交信息确认接口
*AlipayOpenAgentFacetofaceApi* | [**sign**](docs/Api/AlipayOpenAgentFacetofaceApi.md#sign) | **POST** /v3/alipay/open/agent/facetoface/sign | 代签约当面付产品
*AlipayOpenAgentMiniApi* | [**create**](docs/Api/AlipayOpenAgentMiniApi.md#create) | **POST** /v3/alipay/open/agent/mini/create | 代商家创建小程序应用
*AlipayOpenAgentMobilepayApi* | [**sign**](docs/Api/AlipayOpenAgentMobilepayApi.md#sign) | **POST** /v3/alipay/open/agent/mobilepay/sign | 代签约APP支付产品
*AlipayOpenAgentOfflinepaymentApi* | [**sign**](docs/Api/AlipayOpenAgentOfflinepaymentApi.md#sign) | **POST** /v3/alipay/open/agent/offlinepayment/sign | 代签约当面付快捷版产品
*AlipayOpenAgentOrderApi* | [**query**](docs/Api/AlipayOpenAgentOrderApi.md#query) | **GET** /v3/alipay/open/agent/order/query | 查询申请单状态
*AlipayOpenAgentSignstatusApi* | [**query**](docs/Api/AlipayOpenAgentSignstatusApi.md#query) | **POST** /v3/alipay/open/agent/signstatus/query | 查询商户某个产品的签约状态
*AlipayOpenAppApiApi* | [**query**](docs/Api/AlipayOpenAppApiApi.md#query) | **GET** /v3/alipay/open/app/api/query | 查询应用可申请的接口出参敏感字段列表
*AlipayOpenAppApiFieldApi* | [**apply**](docs/Api/AlipayOpenAppApiFieldApi.md#apply) | **POST** /v3/alipay/open/app/api/field/apply | 申请获取接口用户敏感信息字段
*AlipayOpenAppApiFieldApi* | [**query**](docs/Api/AlipayOpenAppApiFieldApi.md#query) | **GET** /v3/alipay/open/app/api/field/query | 用户信息申请记录查询
*AlipayOpenAppApiSceneApi* | [**query**](docs/Api/AlipayOpenAppApiSceneApi.md#query) | **GET** /v3/alipay/open/app/api/scene/query | 查询接口字段使用场景
*AlipayOpenAppMembersApi* | [**create**](docs/Api/AlipayOpenAppMembersApi.md#create) | **POST** /v3/alipay/open/app/members/create | 应用添加成员
*AlipayOpenAppMembersApi* | [**delete**](docs/Api/AlipayOpenAppMembersApi.md#delete) | **DELETE** /v3/alipay/open/app/members/delete | 应用删除成员
*AlipayOpenAppMembersApi* | [**query**](docs/Api/AlipayOpenAppMembersApi.md#query) | **GET** /v3/alipay/open/app/members/query | 应用查询成员列表
*AlipayOpenAppMessagetemplateSubscribeApi* | [**query**](docs/Api/AlipayOpenAppMessagetemplateSubscribeApi.md#query) | **POST** /v3/alipay/open/app/messagetemplate/subscribe/query | 模板订阅关系查询
*AlipayOpenAppMiniTemplatemessageApi* | [**send**](docs/Api/AlipayOpenAppMiniTemplatemessageApi.md#send) | **POST** /v3/alipay/open/app/mini/templatemessage/send | 小程序发送模板消息
*AlipayOpenAppQrcodeApi* | [**create**](docs/Api/AlipayOpenAppQrcodeApi.md#create) | **POST** /v3/alipay/open/app/qrcode/create | 小程序生成推广二维码接口
*AlipayOpenAppServiceApi* | [**apply**](docs/Api/AlipayOpenAppServiceApi.md#apply) | **POST** /v3/alipay/open/app/service/apply | 服务提报申请
*AlipayOpenAppServiceApi* | [**delete**](docs/Api/AlipayOpenAppServiceApi.md#delete) | **DELETE** /v3/alipay/open/app/service/delete | 服务失效接口
*AlipayOpenAppServiceApi* | [**query**](docs/Api/AlipayOpenAppServiceApi.md#query) | **GET** /v3/alipay/open/app/service/query | 服务查询
*AlipayOpenAppServiceListApi* | [**query**](docs/Api/AlipayOpenAppServiceListApi.md#query) | **GET** /v3/alipay/open/app/service/list/query | 服务批量查询
*AlipayOpenAppServiceSchemaApi* | [**query**](docs/Api/AlipayOpenAppServiceSchemaApi.md#query) | **GET** /v3/alipay/open/app/service/schema/query | 服务schema下发
*AlipayOpenAuthAppAesApi* | [**get**](docs/Api/AlipayOpenAuthAppAesApi.md#get) | **GET** /v3/alipay/open/auth/app/aes/get | 授权应用aes密钥查询
*AlipayOpenAuthAppAesApi* | [**set**](docs/Api/AlipayOpenAuthAppAesApi.md#set) | **POST** /v3/alipay/open/auth/app/aes/set | 授权应用aes密钥设置
*AlipayOpenAuthTokenApi* | [**app**](docs/Api/AlipayOpenAuthTokenApi.md#app) | **POST** /v3/alipay/open/auth/token/app | 换取应用授权令牌
*AlipayOpenAuthTokenAppApi* | [**query**](docs/Api/AlipayOpenAuthTokenAppApi.md#query) | **GET** /v3/alipay/open/auth/token/app/query | 查询某个应用授权AppAuthToken的授权信息
*AlipayOpenAuthUserauthRelationshipApi* | [**query**](docs/Api/AlipayOpenAuthUserauthRelationshipApi.md#query) | **GET** /v3/alipay/open/auth/userauth/relationship/query | 用户授权关系查询
*AlipayOpenBizApi* | [**create**](docs/Api/AlipayOpenBizApi.md#create) | **POST** /v3/alipay/open/biz/create | bizcontent测试12
*AlipayOpenFeeAdjustApi* | [**apply**](docs/Api/AlipayOpenFeeAdjustApi.md#apply) | **POST** /v3/alipay/open/fee/adjust/apply | 特殊费率申请
*AlipayOpenFileApi* | [**upload**](docs/Api/AlipayOpenFileApi.md#upload) | **POST** /v3/alipay/open/file/upload | 支付宝文件上传接口
*AlipayOpenInstantdeliveryAccountApi* | [**create**](docs/Api/AlipayOpenInstantdeliveryAccountApi.md#create) | **POST** /v3/alipay/open/instantdelivery/account/create | 即时配送商家账户创建
*AlipayOpenInstantdeliveryAccountApi* | [**query**](docs/Api/AlipayOpenInstantdeliveryAccountApi.md#query) | **GET** /v3/alipay/open/instantdelivery/account/query | 即时配送商家账户查询
*AlipayOpenInstantdeliveryMerchantagreementApi* | [**query**](docs/Api/AlipayOpenInstantdeliveryMerchantagreementApi.md#query) | **GET** /v3/alipay/open/instantdelivery/merchantagreement/query | 协议签署查询api
*AlipayOpenInstantdeliveryMerchantagreementApi* | [**sign**](docs/Api/AlipayOpenInstantdeliveryMerchantagreementApi.md#sign) | **POST** /v3/alipay/open/instantdelivery/merchantagreement/sign | 即时配送中商家代扣协议签署
*AlipayOpenInstantdeliveryMerchantshopApi* | [**batchquery**](docs/Api/AlipayOpenInstantdeliveryMerchantshopApi.md#batchquery) | **POST** /v3/alipay/open/instantdelivery/merchantshop/batchquery | 即时配送商家门店分页查询
*AlipayOpenInstantdeliveryMerchantshopApi* | [**create**](docs/Api/AlipayOpenInstantdeliveryMerchantshopApi.md#create) | **POST** /v3/alipay/open/instantdelivery/merchantshop/create | 即时配送商家门店创建
*AlipayOpenInstantdeliveryMerchantshopApi* | [**modify**](docs/Api/AlipayOpenInstantdeliveryMerchantshopApi.md#modify) | **POST** /v3/alipay/open/instantdelivery/merchantshop/modify | 即时配送商家门店更新
*AlipayOpenInstantdeliveryMerchantshopApi* | [**query**](docs/Api/AlipayOpenInstantdeliveryMerchantshopApi.md#query) | **GET** /v3/alipay/open/instantdelivery/merchantshop/query | 即时配送商家门店详情查询
*AlipayOpenInviteOrderApi* | [**query**](docs/Api/AlipayOpenInviteOrderApi.md#query) | **GET** /v3/alipay/open/invite/order/query | 查询签约申请单状态
*AlipayOpenMiniAppdeployByappidApi* | [**query**](docs/Api/AlipayOpenMiniAppdeployByappidApi.md#query) | **GET** /v3/alipay/open/mini/appdeploy/byappid/query | 根据APPID分页查询小程序发布信息
*AlipayOpenMiniAppdeployByappversionApi* | [**query**](docs/Api/AlipayOpenMiniAppdeployByappversionApi.md#query) | **GET** /v3/alipay/open/mini/appdeploy/byappversion/query | 通过版本查询小程序发布
*AlipayOpenMiniAppdeployBydeployversionApi* | [**query**](docs/Api/AlipayOpenMiniAppdeployBydeployversionApi.md#query) | **GET** /v3/alipay/open/mini/appdeploy/bydeployversion/query | 根据发布版本查询小程序发布信息
*AlipayOpenMiniBaseinfoApi* | [**modify**](docs/Api/AlipayOpenMiniBaseinfoApi.md#modify) | **POST** /v3/alipay/open/mini/baseinfo/modify | 小程序修改基础信息
*AlipayOpenMiniBaseinfoApi* | [**query**](docs/Api/AlipayOpenMiniBaseinfoApi.md#query) | **GET** /v3/alipay/open/mini/baseinfo/query | 查询小程序基础信息
*AlipayOpenMiniBaseinfoNameApi* | [**check**](docs/Api/AlipayOpenMiniBaseinfoNameApi.md#check) | **GET** /v3/alipay/open/mini/baseinfo/name/check | 小程序名称检测
*AlipayOpenMiniCategoryApi* | [**query**](docs/Api/AlipayOpenMiniCategoryApi.md#query) | **GET** /v3/alipay/open/mini/category/query | 小程序类目树查询
*AlipayOpenMiniCategoryRequireApi* | [**query**](docs/Api/AlipayOpenMiniCategoryRequireApi.md#query) | **POST** /v3/alipay/open/mini/category/require/query | 查询类目所需资质信息
*AlipayOpenMiniExperienceApi* | [**cancel**](docs/Api/AlipayOpenMiniExperienceApi.md#cancel) | **POST** /v3/alipay/open/mini/experience/cancel | 小程序取消体验版
*AlipayOpenMiniExperienceApi* | [**create**](docs/Api/AlipayOpenMiniExperienceApi.md#create) | **POST** /v3/alipay/open/mini/experience/create | 小程序生成体验版
*AlipayOpenMiniExperienceApi* | [**query**](docs/Api/AlipayOpenMiniExperienceApi.md#query) | **GET** /v3/alipay/open/mini/experience/query | 小程序体验版状态查询接口
*AlipayOpenMiniIndividualBusinessApi* | [**certify**](docs/Api/AlipayOpenMiniIndividualBusinessApi.md#certify) | **POST** /v3/alipay/open/mini/individual/business/certify | 个人账户升级为个体工商户
*AlipayOpenMiniInnerExperienceApi* | [**cancel**](docs/Api/AlipayOpenMiniInnerExperienceApi.md#cancel) | **POST** /v3/alipay/open/mini/inner/experience/cancel | 内部链路取消体验版
*AlipayOpenMiniInnerMembersApi* | [**add**](docs/Api/AlipayOpenMiniInnerMembersApi.md#add) | **POST** /v3/alipay/open/mini/inner/members/add | 内部链路添加开发成员
*AlipayOpenMiniInnerMembersApi* | [**delete**](docs/Api/AlipayOpenMiniInnerMembersApi.md#delete) | **DELETE** /v3/alipay/open/mini/inner/members/delete | 内部链路删除开发成员
*AlipayOpenMiniInnerMembersApi* | [**query**](docs/Api/AlipayOpenMiniInnerMembersApi.md#query) | **GET** /v3/alipay/open/mini/inner/members/query | 内部链路查询开发成员
*AlipayOpenMiniInnerappApi* | [**create**](docs/Api/AlipayOpenMiniInnerappApi.md#create) | **POST** /v3/alipay/open/mini/innerapp/create | 内部链路小程序创建
*AlipayOpenMiniInnerappPluginApi* | [**order**](docs/Api/AlipayOpenMiniInnerappPluginApi.md#order) | **POST** /v3/alipay/open/mini/innerapp/plugin/order | 小程序代商户订购插件
*AlipayOpenMiniInnerappPluginrelationApi* | [**query**](docs/Api/AlipayOpenMiniInnerappPluginrelationApi.md#query) | **POST** /v3/alipay/open/mini/innerapp/pluginrelation/query | 查询插件引用关系
*AlipayOpenMiniInnerappPluginserviceApi* | [**publish**](docs/Api/AlipayOpenMiniInnerappPluginserviceApi.md#publish) | **POST** /v3/alipay/open/mini/innerapp/pluginservice/publish | 插件发布能力中心
*AlipayOpenMiniInnerappPluginsyncmodeApi* | [**modify**](docs/Api/AlipayOpenMiniInnerappPluginsyncmodeApi.md#modify) | **POST** /v3/alipay/open/mini/innerapp/pluginsyncmode/modify | 修改插件继承模式
*AlipayOpenMiniInnerappPluginuseconfigApi* | [**cancel**](docs/Api/AlipayOpenMiniInnerappPluginuseconfigApi.md#cancel) | **POST** /v3/alipay/open/mini/innerapp/pluginuseconfig/cancel | 撤销插件端版本配置灰度
*AlipayOpenMiniInnerappPluginuseconfigApi* | [**online**](docs/Api/AlipayOpenMiniInnerappPluginuseconfigApi.md#online) | **POST** /v3/alipay/open/mini/innerapp/pluginuseconfig/online | 上线插件使用端版本配置
*AlipayOpenMiniInnerappPluginuseconfigApi* | [**upgrade**](docs/Api/AlipayOpenMiniInnerappPluginuseconfigApi.md#upgrade) | **POST** /v3/alipay/open/mini/innerapp/pluginuseconfig/upgrade | 灰度端版本配置
*AlipayOpenMiniInnerappServiceApi* | [**publish**](docs/Api/AlipayOpenMiniInnerappServiceApi.md#publish) | **POST** /v3/alipay/open/mini/innerapp/service/publish | 小程序模板发布服务市场
*AlipayOpenMiniInnerappServiceApi* | [**query**](docs/Api/AlipayOpenMiniInnerappServiceApi.md#query) | **GET** /v3/alipay/open/mini/innerapp/service/query | 小程序服务市场搜索
*AlipayOpenMiniInnerbaseinfoApi* | [**query**](docs/Api/AlipayOpenMiniInnerbaseinfoApi.md#query) | **GET** /v3/alipay/open/mini/innerbaseinfo/query | 内部小程序-应用信息查询
*AlipayOpenMiniInnerbaseinfoApplogoApi* | [**upload**](docs/Api/AlipayOpenMiniInnerbaseinfoApplogoApi.md#upload) | **POST** /v3/alipay/open/mini/innerbaseinfo/applogo/upload | 内部小程序-小程序logo图片上传
*AlipayOpenMiniInnerversionApi* | [**online**](docs/Api/AlipayOpenMiniInnerversionApi.md#online) | **POST** /v3/alipay/open/mini/innerversion/online | 内部小程序-上架
*AlipayOpenMiniInnerversionApi* | [**sync**](docs/Api/AlipayOpenMiniInnerversionApi.md#sync) | **POST** /v3/alipay/open/mini/innerversion/sync | 小程序包信息推送
*AlipayOpenMiniInnerversionApi* | [**upgrade**](docs/Api/AlipayOpenMiniInnerversionApi.md#upgrade) | **POST** /v3/alipay/open/mini/innerversion/upgrade | 升级模板实例化小程序
*AlipayOpenMiniInnerversionApi* | [**upload**](docs/Api/AlipayOpenMiniInnerversionApi.md#upload) | **POST** /v3/alipay/open/mini/innerversion/upload | 内部小程序-打包构建
*AlipayOpenMiniInnerversionAuditApi* | [**cancel**](docs/Api/AlipayOpenMiniInnerversionAuditApi.md#cancel) | **POST** /v3/alipay/open/mini/innerversion/audit/cancel | 内部链路撤销审核
*AlipayOpenMiniInnerversionAuditApi* | [**submit**](docs/Api/AlipayOpenMiniInnerversionAuditApi.md#submit) | **POST** /v3/alipay/open/mini/innerversion/audit/submit | 小程序版本提交审核
*AlipayOpenMiniInnerversionBackdevApi* | [**publish**](docs/Api/AlipayOpenMiniInnerversionBackdevApi.md#publish) | **POST** /v3/alipay/open/mini/innerversion/backdev/publish | 内部链路小程序退回开发
*AlipayOpenMiniInnerversionBetaApi* | [**confirm**](docs/Api/AlipayOpenMiniInnerversionBetaApi.md#confirm) | **POST** /v3/alipay/open/mini/innerversion/beta/confirm | 确认邀测结果
*AlipayOpenMiniInnerversionBetainfoApi* | [**query**](docs/Api/AlipayOpenMiniInnerversionBetainfoApi.md#query) | **GET** /v3/alipay/open/mini/innerversion/betainfo/query | 查看可邀测状态接口
*AlipayOpenMiniInnerversionBuildauditApi* | [**submit**](docs/Api/AlipayOpenMiniInnerversionBuildauditApi.md#submit) | **POST** /v3/alipay/open/mini/innerversion/buildaudit/submit | 内部链路小程序构建并提审
*AlipayOpenMiniInnerversionConditionApi* | [**batchquery**](docs/Api/AlipayOpenMiniInnerversionConditionApi.md#batchquery) | **POST** /v3/alipay/open/mini/innerversion/condition/batchquery | 根据状态批量查询版本信息
*AlipayOpenMiniInnerversionContentApi* | [**rollback**](docs/Api/AlipayOpenMiniInnerversionContentApi.md#rollback) | **POST** /v3/alipay/open/mini/innerversion/content/rollback | 内部链路回滚版本
*AlipayOpenMiniInnerversionGrayApi* | [**finish**](docs/Api/AlipayOpenMiniInnerversionGrayApi.md#finish) | **POST** /v3/alipay/open/mini/innerversion/gray/finish | 内部链路结束灰度
*AlipayOpenMiniInnerversionGrayApi* | [**publish**](docs/Api/AlipayOpenMiniInnerversionGrayApi.md#publish) | **POST** /v3/alipay/open/mini/innerversion/gray/publish | 内部链路小程序灰度上架
*AlipayOpenMiniInnerversionInfoApi* | [**delete**](docs/Api/AlipayOpenMiniInnerversionInfoApi.md#delete) | **DELETE** /v3/alipay/open/mini/innerversion/info/delete | 内部链路删除版本
*AlipayOpenMiniInnerversionInfoApi* | [**query**](docs/Api/AlipayOpenMiniInnerversionInfoApi.md#query) | **GET** /v3/alipay/open/mini/innerversion/info/query | 内部链路小程序版本信息查询
*AlipayOpenMiniInnerversionInstantiationApi* | [**query**](docs/Api/AlipayOpenMiniInnerversionInstantiationApi.md#query) | **GET** /v3/alipay/open/mini/innerversion/instantiation/query | 小程序实例化关系查询
*AlipayOpenMiniInnerversionLastApi* | [**query**](docs/Api/AlipayOpenMiniInnerversionLastApi.md#query) | **GET** /v3/alipay/open/mini/innerversion/last/query | 内部链路查询最新版本号
*AlipayOpenMiniInnerversionModelforofflineApi* | [**query**](docs/Api/AlipayOpenMiniInnerversionModelforofflineApi.md#query) | **GET** /v3/alipay/open/mini/innerversion/modelforoffline/query | 小程序线上版本包数据同步线下场景查询
*AlipayOpenMiniInnerversionNobuildApi* | [**upload**](docs/Api/AlipayOpenMiniInnerversionNobuildApi.md#upload) | **POST** /v3/alipay/open/mini/innerversion/nobuild/upload | 手淘小程序产物包免构建版本上传
*AlipayOpenMiniInnerversionOfflineApi* | [**publish**](docs/Api/AlipayOpenMiniInnerversionOfflineApi.md#publish) | **POST** /v3/alipay/open/mini/innerversion/offline/publish | 内部链路小程序下架
*AlipayOpenMiniInnerversionOnlineApi* | [**publish**](docs/Api/AlipayOpenMiniInnerversionOnlineApi.md#publish) | **POST** /v3/alipay/open/mini/innerversion/online/publish | 内部链路小程序上架
*AlipayOpenMiniInnerversionPackageApi* | [**create**](docs/Api/AlipayOpenMiniInnerversionPackageApi.md#create) | **POST** /v3/alipay/open/mini/innerversion/package/create | 单独构建包信息
*AlipayOpenMiniInnerversionTemplatedApi* | [**upload**](docs/Api/AlipayOpenMiniInnerversionTemplatedApi.md#upload) | **POST** /v3/alipay/open/mini/innerversion/templated/upload | 基于模板构建版本
*AlipayOpenMiniInnerversionUploadstatusApi* | [**query**](docs/Api/AlipayOpenMiniInnerversionUploadstatusApi.md#query) | **GET** /v3/alipay/open/mini/innerversion/uploadstatus/query | 多端小程序-查询构建状态
*AlipayOpenMiniIsvApi* | [**create**](docs/Api/AlipayOpenMiniIsvApi.md#create) | **POST** /v3/alipay/open/mini/isv/create | isv服务商代商户创建小程序
*AlipayOpenMiniIsvApi* | [**query**](docs/Api/AlipayOpenMiniIsvApi.md#query) | **GET** /v3/alipay/open/mini/isv/query | isv查询代商家创建小程序记录
*AlipayOpenMiniIsvFastregisterApi* | [**create**](docs/Api/AlipayOpenMiniIsvFastregisterApi.md#create) | **POST** /v3/alipay/open/mini/isv/fastregister/create | ISV代创建试用小程序
*AlipayOpenMiniIsvFastregisterApi* | [**query**](docs/Api/AlipayOpenMiniIsvFastregisterApi.md#query) | **GET** /v3/alipay/open/mini/isv/fastregister/query | 查询试用小程序
*AlipayOpenMiniMiniappBrandApi* | [**cancel**](docs/Api/AlipayOpenMiniMiniappBrandApi.md#cancel) | **POST** /v3/alipay/open/mini/miniapp/brand/cancel | 小程序品牌提交认证后取消品牌认证
*AlipayOpenMiniMiniappBrandApi* | [**query**](docs/Api/AlipayOpenMiniMiniappBrandApi.md#query) | **GET** /v3/alipay/open/mini/miniapp/brand/query | 小程序品牌提交认证后查询品牌审核结果以及商户已有品牌
*AlipayOpenMiniMiniappBrandApi* | [**submit**](docs/Api/AlipayOpenMiniMiniappBrandApi.md#submit) | **POST** /v3/alipay/open/mini/miniapp/brand/submit | 小程序品牌提交认证
*AlipayOpenMiniMiniappBrandApi* | [**upload**](docs/Api/AlipayOpenMiniMiniappBrandApi.md#upload) | **POST** /v3/alipay/open/mini/miniapp/brand/upload | 小程序品牌提交认证时上传用户资质以及身份信息
*AlipayOpenMiniMiniappServiceconfigApi* | [**modify**](docs/Api/AlipayOpenMiniMiniappServiceconfigApi.md#modify) | **POST** /v3/alipay/open/mini/miniapp/serviceconfig/modify | 小程序设置客服方式
*AlipayOpenMiniQrcodeApi* | [**bind**](docs/Api/AlipayOpenMiniQrcodeApi.md#bind) | **POST** /v3/alipay/open/mini/qrcode/bind | 关联普通二维码
*AlipayOpenMiniQrcodeApi* | [**query**](docs/Api/AlipayOpenMiniQrcodeApi.md#query) | **GET** /v3/alipay/open/mini/qrcode/query | 查询普通二维码
*AlipayOpenMiniQrcodeApi* | [**unbind**](docs/Api/AlipayOpenMiniQrcodeApi.md#unbind) | **POST** /v3/alipay/open/mini/qrcode/unbind | 删除已关联普通二维码
*AlipayOpenMiniResourcePromotionsourceApi* | [**notify**](docs/Api/AlipayOpenMiniResourcePromotionsourceApi.md#notify) | **POST** /v3/alipay/open/mini/resource/promotionsource/notify | 提供给淘联盟推广位信息接口
*AlipayOpenMiniResourceRecordApi* | [**notify**](docs/Api/AlipayOpenMiniResourceRecordApi.md#notify) | **POST** /v3/alipay/open/mini/resource/record/notify | 提供给淘联盟备案信息接口
*AlipayOpenMiniSafedomainApi* | [**create**](docs/Api/AlipayOpenMiniSafedomainApi.md#create) | **POST** /v3/alipay/open/mini/safedomain/create | 小程序添加域白名单
*AlipayOpenMiniSafedomainApi* | [**delete**](docs/Api/AlipayOpenMiniSafedomainApi.md#delete) | **DELETE** /v3/alipay/open/mini/safedomain/delete | 小程序删除域白名单
*AlipayOpenMiniTemplateMarketingApi* | [**create**](docs/Api/AlipayOpenMiniTemplateMarketingApi.md#create) | **POST** /v3/alipay/open/mini/template/marketing/create | 小程序消息运营位创建
*AlipayOpenMiniTemplateUsageApi* | [**query**](docs/Api/AlipayOpenMiniTemplateUsageApi.md#query) | **GET** /v3/alipay/open/mini/template/usage/query | 查询使用模板的小程序列表
*AlipayOpenMiniTemplatemessageUsertemplateApi* | [**apply**](docs/Api/AlipayOpenMiniTemplatemessageUsertemplateApi.md#apply) | **POST** /v3/alipay/open/mini/templatemessage/usertemplate/apply | 小程序模板消息申请
*AlipayOpenMiniTemplatemsgMaketingApi* | [**batchquery**](docs/Api/AlipayOpenMiniTemplatemsgMaketingApi.md#batchquery) | **POST** /v3/alipay/open/mini/templatemsg/maketing/batchquery | 小程序模板消息营销投放详情分页批量查询
*AlipayOpenMiniTemplatemsgMaketingstatusApi* | [**modify**](docs/Api/AlipayOpenMiniTemplatemsgMaketingstatusApi.md#modify) | **POST** /v3/alipay/open/mini/templatemsg/maketingstatus/modify | 小程序模板消息营销投放详情状态修改
*AlipayOpenMiniTemplatemsgTinypayswitchApi* | [**confirm**](docs/Api/AlipayOpenMiniTemplatemsgTinypayswitchApi.md#confirm) | **POST** /v3/alipay/open/mini/templatemsg/tinypayswitch/confirm | 小程序支付消息确认接口
*AlipayOpenMiniTipsDeliveryApi* | [**batchquery**](docs/Api/AlipayOpenMiniTipsDeliveryApi.md#batchquery) | **POST** /v3/alipay/open/mini/tips/delivery/batchquery | 小程序收藏引导投放活动配置批量查询
*AlipayOpenMiniTipsDeliveryApi* | [**create**](docs/Api/AlipayOpenMiniTipsDeliveryApi.md#create) | **POST** /v3/alipay/open/mini/tips/delivery/create | 小程序收藏引导投放活动配置创建
*AlipayOpenMiniTipsDeliveryApi* | [**modify**](docs/Api/AlipayOpenMiniTipsDeliveryApi.md#modify) | **POST** /v3/alipay/open/mini/tips/delivery/modify | 小程序收藏引导投放活动修改
*AlipayOpenMiniTipsDeliveryApi* | [**query**](docs/Api/AlipayOpenMiniTipsDeliveryApi.md#query) | **GET** /v3/alipay/open/mini/tips/delivery/query | 小程序收藏引导投放活动详情查询
*AlipayOpenMiniTipsStatisticApi* | [**query**](docs/Api/AlipayOpenMiniTipsStatisticApi.md#query) | **GET** /v3/alipay/open/mini/tips/statistic/query | 小程序收藏引导汇总数据查询
*AlipayOpenMiniVersionApi* | [**delete**](docs/Api/AlipayOpenMiniVersionApi.md#delete) | **POST** /v3/alipay/open/mini/version/delete | 小程序删除版本
*AlipayOpenMiniVersionApi* | [**offline**](docs/Api/AlipayOpenMiniVersionApi.md#offline) | **POST** /v3/alipay/open/mini/version/offline | 小程序下架
*AlipayOpenMiniVersionApi* | [**online**](docs/Api/AlipayOpenMiniVersionApi.md#online) | **POST** /v3/alipay/open/mini/version/online | 小程序上架
*AlipayOpenMiniVersionApi* | [**rollback**](docs/Api/AlipayOpenMiniVersionApi.md#rollback) | **POST** /v3/alipay/open/mini/version/rollback | 小程序回滚
*AlipayOpenMiniVersionApi* | [**upload**](docs/Api/AlipayOpenMiniVersionApi.md#upload) | **POST** /v3/alipay/open/mini/version/upload | 小程序基于模板上传版本
*AlipayOpenMiniVersionAuditApi* | [**apply**](docs/Api/AlipayOpenMiniVersionAuditApi.md#apply) | **POST** /v3/alipay/open/mini/version/audit/apply | 小程序提交审核
*AlipayOpenMiniVersionAuditApi* | [**cancel**](docs/Api/AlipayOpenMiniVersionAuditApi.md#cancel) | **POST** /v3/alipay/open/mini/version/audit/cancel | 小程序撤销审核
*AlipayOpenMiniVersionAuditedApi* | [**cancel**](docs/Api/AlipayOpenMiniVersionAuditedApi.md#cancel) | **POST** /v3/alipay/open/mini/version/audited/cancel | 小程序退回开发
*AlipayOpenMiniVersionBuildApi* | [**query**](docs/Api/AlipayOpenMiniVersionBuildApi.md#query) | **GET** /v3/alipay/open/mini/version/build/query | 小程序查询版本构建状态
*AlipayOpenMiniVersionDetailApi* | [**query**](docs/Api/AlipayOpenMiniVersionDetailApi.md#query) | **GET** /v3/alipay/open/mini/version/detail/query | 小程序版本详情查询
*AlipayOpenMiniVersionGrayApi* | [**cancel**](docs/Api/AlipayOpenMiniVersionGrayApi.md#cancel) | **POST** /v3/alipay/open/mini/version/gray/cancel | 小程序结束灰度
*AlipayOpenMiniVersionGrayApi* | [**online**](docs/Api/AlipayOpenMiniVersionGrayApi.md#online) | **POST** /v3/alipay/open/mini/version/gray/online | 小程序灰度上架
*AlipayOpenMiniVersionListApi* | [**query**](docs/Api/AlipayOpenMiniVersionListApi.md#query) | **GET** /v3/alipay/open/mini/version/list/query | 小程序版本列表查询
*AlipayOpenMiniWidgetDataApi* | [**sync**](docs/Api/AlipayOpenMiniWidgetDataApi.md#sync) | **POST** /v3/alipay/open/mini/widget/data/sync | 小程序橱窗数据同步
*AlipayOpenMiniWidgetGoodsApi* | [**modify**](docs/Api/AlipayOpenMiniWidgetGoodsApi.md#modify) | **PATCH** /v3/alipay/open/mini/widget/goods/modify | 小部件商品修改
*AlipayOpenMiniWidgetGoodsApi* | [**query**](docs/Api/AlipayOpenMiniWidgetGoodsApi.md#query) | **GET** /v3/alipay/open/mini/widget/goods/query | 小部件商品查询
*AlipayOpenMiniWidgetGoodsApi* | [**upload**](docs/Api/AlipayOpenMiniWidgetGoodsApi.md#upload) | **POST** /v3/alipay/open/mini/widget/goods/upload | 小部件商品上传
*AlipayOpenPublicAccountApi* | [**create**](docs/Api/AlipayOpenPublicAccountApi.md#create) | **POST** /v3/alipay/open/public/account/create | 添加绑定商户会员号
*AlipayOpenPublicAccountApi* | [**delete**](docs/Api/AlipayOpenPublicAccountApi.md#delete) | **DELETE** /v3/alipay/open/public/account/delete | 解除绑定商户会员号
*AlipayOpenPublicAccountApi* | [**query**](docs/Api/AlipayOpenPublicAccountApi.md#query) | **GET** /v3/alipay/open/public/account/query | 查询绑定商户会员号
*AlipayOpenPublicAccountApi* | [**reset**](docs/Api/AlipayOpenPublicAccountApi.md#reset) | **POST** /v3/alipay/open/public/account/reset | 重新设置绑定商家会员号
*AlipayOpenPublicAdvertApi* | [**batchquery**](docs/Api/AlipayOpenPublicAdvertApi.md#batchquery) | **POST** /v3/alipay/open/public/advert/batchquery | 生活号广告位查询接口
*AlipayOpenPublicAdvertApi* | [**create**](docs/Api/AlipayOpenPublicAdvertApi.md#create) | **POST** /v3/alipay/open/public/advert/create | 生活号广告位添加接口
*AlipayOpenPublicAdvertApi* | [**delete**](docs/Api/AlipayOpenPublicAdvertApi.md#delete) | **DELETE** /v3/alipay/open/public/advert/delete | 生活号广告位删除接口
*AlipayOpenPublicAdvertApi* | [**modify**](docs/Api/AlipayOpenPublicAdvertApi.md#modify) | **POST** /v3/alipay/open/public/advert/modify | 生活号广告位修改接口
*AlipayOpenPublicArticlesummaryDataApi* | [**batchquery**](docs/Api/AlipayOpenPublicArticlesummaryDataApi.md#batchquery) | **POST** /v3/alipay/open/public/articlesummary/data/batchquery | 图文分析-按时间查询数据接口
*AlipayOpenPublicContactFollowApi* | [**batchquery**](docs/Api/AlipayOpenPublicContactFollowApi.md#batchquery) | **POST** /v3/alipay/open/public/contact/follow/batchquery | 查询服务窗联系人关注列表
*AlipayOpenPublicDefaultExtensionApi* | [**create**](docs/Api/AlipayOpenPublicDefaultExtensionApi.md#create) | **POST** /v3/alipay/open/public/default/extension/create | 默认扩展区创建接口
*AlipayOpenPublicFollowApi* | [**batchquery**](docs/Api/AlipayOpenPublicFollowApi.md#batchquery) | **POST** /v3/alipay/open/public/follow/batchquery | 获取关注者列表
*AlipayOpenPublicGroupApi* | [**batchquery**](docs/Api/AlipayOpenPublicGroupApi.md#batchquery) | **POST** /v3/alipay/open/public/group/batchquery | 查询用户分组列表
*AlipayOpenPublicGroupApi* | [**create**](docs/Api/AlipayOpenPublicGroupApi.md#create) | **POST** /v3/alipay/open/public/group/create | 用户分组创建接口
*AlipayOpenPublicGroupApi* | [**delete**](docs/Api/AlipayOpenPublicGroupApi.md#delete) | **DELETE** /v3/alipay/open/public/group/delete | 用户分组删除接口
*AlipayOpenPublicGroupApi* | [**modify**](docs/Api/AlipayOpenPublicGroupApi.md#modify) | **POST** /v3/alipay/open/public/group/modify | 用户分组修改接口
*AlipayOpenPublicGroupCrowdApi* | [**query**](docs/Api/AlipayOpenPublicGroupCrowdApi.md#query) | **POST** /v3/alipay/open/public/group/crowd/query | 人群数量查询
*AlipayOpenPublicInfoApi* | [**modify**](docs/Api/AlipayOpenPublicInfoApi.md#modify) | **POST** /v3/alipay/open/public/info/modify | 生活号基础信息修改接口
*AlipayOpenPublicInfoApi* | [**query**](docs/Api/AlipayOpenPublicInfoApi.md#query) | **GET** /v3/alipay/open/public/info/query | 生活号基础信息查询接口
*AlipayOpenPublicLabelApi* | [**create**](docs/Api/AlipayOpenPublicLabelApi.md#create) | **POST** /v3/alipay/open/public/label/create | 公众号标签管理-添加标签
*AlipayOpenPublicLabelApi* | [**query**](docs/Api/AlipayOpenPublicLabelApi.md#query) | **GET** /v3/alipay/open/public/label/query | 公众号标签管理-查询标签
*AlipayOpenPublicLabelUserApi* | [**query**](docs/Api/AlipayOpenPublicLabelUserApi.md#query) | **GET** /v3/alipay/open/public/label/user/query | 公众号标签管理-查询用户标签
*AlipayOpenPublicLifeAboardApi* | [**apply**](docs/Api/AlipayOpenPublicLifeAboardApi.md#apply) | **POST** /v3/alipay/open/public/life/aboard/apply | 上架生活号
*AlipayOpenPublicLifeAgentcreateApi* | [**query**](docs/Api/AlipayOpenPublicLifeAgentcreateApi.md#query) | **GET** /v3/alipay/open/public/life/agentcreate/query | isv代创建生活号申请状态查询接口
*AlipayOpenPublicLifeDebarkApi* | [**apply**](docs/Api/AlipayOpenPublicLifeDebarkApi.md#apply) | **POST** /v3/alipay/open/public/life/debark/apply | 下架生活号
*AlipayOpenPublicLifeLabelApi* | [**batchquery**](docs/Api/AlipayOpenPublicLifeLabelApi.md#batchquery) | **POST** /v3/alipay/open/public/life/label/batchquery | 标签批量查询接口
*AlipayOpenPublicLifeLabelApi* | [**create**](docs/Api/AlipayOpenPublicLifeLabelApi.md#create) | **POST** /v3/alipay/open/public/life/label/create | 创建标签接口
*AlipayOpenPublicLifeLabelApi* | [**delete**](docs/Api/AlipayOpenPublicLifeLabelApi.md#delete) | **DELETE** /v3/alipay/open/public/life/label/delete | 标签删除接口
*AlipayOpenPublicLifeLabelApi* | [**modify**](docs/Api/AlipayOpenPublicLifeLabelApi.md#modify) | **POST** /v3/alipay/open/public/life/label/modify | 标签修改接口
*AlipayOpenPublicLifeMsgApi* | [**recall**](docs/Api/AlipayOpenPublicLifeMsgApi.md#recall) | **POST** /v3/alipay/open/public/life/msg/recall | 生活号消息撤回接口
*AlipayOpenPublicLifeMsgApi* | [**send**](docs/Api/AlipayOpenPublicLifeMsgApi.md#send) | **POST** /v3/alipay/open/public/life/msg/send | 生活号广播消息发送接口
*AlipayOpenPublicMatchuserLabelApi* | [**create**](docs/Api/AlipayOpenPublicMatchuserLabelApi.md#create) | **POST** /v3/alipay/open/public/matchuser/label/create | 用户打标接口
*AlipayOpenPublicMatchuserLabelApi* | [**delete**](docs/Api/AlipayOpenPublicMatchuserLabelApi.md#delete) | **POST** /v3/alipay/open/public/matchuser/label/delete | 用户取消标签接口
*AlipayOpenPublicMenuApi* | [**batchquery**](docs/Api/AlipayOpenPublicMenuApi.md#batchquery) | **POST** /v3/alipay/open/public/menu/batchquery | 菜单列表查询接口
*AlipayOpenPublicMenuApi* | [**create**](docs/Api/AlipayOpenPublicMenuApi.md#create) | **POST** /v3/alipay/open/public/menu/create | 默认菜单创建接口
*AlipayOpenPublicMenuApi* | [**modify**](docs/Api/AlipayOpenPublicMenuApi.md#modify) | **POST** /v3/alipay/open/public/menu/modify | 默认菜单更新接口
*AlipayOpenPublicMenuApi* | [**query**](docs/Api/AlipayOpenPublicMenuApi.md#query) | **GET** /v3/alipay/open/public/menu/query | 公众服务平台查询菜单
*AlipayOpenPublicMenuDataApi* | [**batchquery**](docs/Api/AlipayOpenPublicMenuDataApi.md#batchquery) | **POST** /v3/alipay/open/public/menu/data/batchquery | 菜单分析数据查询接口
*AlipayOpenPublicMessageContentApi* | [**create**](docs/Api/AlipayOpenPublicMessageContentApi.md#create) | **POST** /v3/alipay/open/public/message/content/create | 创建图文消息内容接口
*AlipayOpenPublicMessageContentApi* | [**modify**](docs/Api/AlipayOpenPublicMessageContentApi.md#modify) | **POST** /v3/alipay/open/public/message/content/modify | 更新图文消息内容接口
*AlipayOpenPublicMessageCustomApi* | [**send**](docs/Api/AlipayOpenPublicMessageCustomApi.md#send) | **POST** /v3/alipay/open/public/message/custom/send | 异步单发消息
*AlipayOpenPublicMessageGroupApi* | [**send**](docs/Api/AlipayOpenPublicMessageGroupApi.md#send) | **POST** /v3/alipay/open/public/message/group/send | 分组消息发送接口
*AlipayOpenPublicMessageLabelApi* | [**send**](docs/Api/AlipayOpenPublicMessageLabelApi.md#send) | **POST** /v3/alipay/open/public/message/label/send | 根据标签组发消息接口
*AlipayOpenPublicMessageSingleApi* | [**send**](docs/Api/AlipayOpenPublicMessageSingleApi.md#send) | **POST** /v3/alipay/open/public/message/single/send | 单发模板消息
*AlipayOpenPublicMessageTotalApi* | [**send**](docs/Api/AlipayOpenPublicMessageTotalApi.md#send) | **POST** /v3/alipay/open/public/message/total/send | 群发消息
*AlipayOpenPublicPayeeBindApi* | [**create**](docs/Api/AlipayOpenPublicPayeeBindApi.md#create) | **POST** /v3/alipay/open/public/payee/bind/create | 添加收款账号接口
*AlipayOpenPublicPayeeBindApi* | [**delete**](docs/Api/AlipayOpenPublicPayeeBindApi.md#delete) | **DELETE** /v3/alipay/open/public/payee/bind/delete | 解绑收款账号接口
*AlipayOpenPublicPersonalizedExtensionApi* | [**batchquery**](docs/Api/AlipayOpenPublicPersonalizedExtensionApi.md#batchquery) | **POST** /v3/alipay/open/public/personalized/extension/batchquery | 扩展区批量查询接口
*AlipayOpenPublicPersonalizedExtensionApi* | [**create**](docs/Api/AlipayOpenPublicPersonalizedExtensionApi.md#create) | **POST** /v3/alipay/open/public/personalized/extension/create | 个性化扩展区创建接口
*AlipayOpenPublicPersonalizedExtensionApi* | [**delete**](docs/Api/AlipayOpenPublicPersonalizedExtensionApi.md#delete) | **DELETE** /v3/alipay/open/public/personalized/extension/delete | 扩展区删除接口
*AlipayOpenPublicPersonalizedMenuApi* | [**create**](docs/Api/AlipayOpenPublicPersonalizedMenuApi.md#create) | **POST** /v3/alipay/open/public/personalized/menu/create | 个性化菜单创建
*AlipayOpenPublicPersonalizedMenuApi* | [**delete**](docs/Api/AlipayOpenPublicPersonalizedMenuApi.md#delete) | **DELETE** /v3/alipay/open/public/personalized/menu/delete | 个性化菜单删除
*AlipayOpenPublicQrcodeApi* | [**create**](docs/Api/AlipayOpenPublicQrcodeApi.md#create) | **POST** /v3/alipay/open/public/qrcode/create | 带参推广二维码接口
*AlipayOpenPublicSettingCategoryApi* | [**query**](docs/Api/AlipayOpenPublicSettingCategoryApi.md#query) | **GET** /v3/alipay/open/public/setting/category/query | 生活号查询行业设置接口
*AlipayOpenPublicShortlinkApi* | [**create**](docs/Api/AlipayOpenPublicShortlinkApi.md#create) | **POST** /v3/alipay/open/public/shortlink/create | 服务窗短链自主生成接口
*AlipayOpenPublicSinglearticleDataApi* | [**batchquery**](docs/Api/AlipayOpenPublicSinglearticleDataApi.md#batchquery) | **POST** /v3/alipay/open/public/singlearticle/data/batchquery | 图文分析-按文章查询数据接口
*AlipayOpenPublicTemplateMessageApi* | [**get**](docs/Api/AlipayOpenPublicTemplateMessageApi.md#get) | **GET** /v3/alipay/open/public/template/message/get | 消息模板领取接口
*AlipayOpenPublicTemplateMessageIndustryApi* | [**modify**](docs/Api/AlipayOpenPublicTemplateMessageIndustryApi.md#modify) | **POST** /v3/alipay/open/public/template/message/industry/modify | 模板消息行业设置修改接口
*AlipayOpenPublicTopicApi* | [**batchquery**](docs/Api/AlipayOpenPublicTopicApi.md#batchquery) | **POST** /v3/alipay/open/public/topic/batchquery | 营销位查询接口
*AlipayOpenPublicTopicApi* | [**create**](docs/Api/AlipayOpenPublicTopicApi.md#create) | **POST** /v3/alipay/open/public/topic/create | 营销位添加接口
*AlipayOpenPublicTopicApi* | [**delete**](docs/Api/AlipayOpenPublicTopicApi.md#delete) | **DELETE** /v3/alipay/open/public/topic/delete | 营销位删除接口
*AlipayOpenPublicTopicApi* | [**modify**](docs/Api/AlipayOpenPublicTopicApi.md#modify) | **POST** /v3/alipay/open/public/topic/modify | 营销位修改接口
*AlipayOpenPublicUserDataApi* | [**batchquery**](docs/Api/AlipayOpenPublicUserDataApi.md#batchquery) | **POST** /v3/alipay/open/public/user/data/batchquery | 用户分析数据查询接口
*AlipayOpenPublicUserFollowApi* | [**query**](docs/Api/AlipayOpenPublicUserFollowApi.md#query) | **GET** /v3/alipay/open/public/user/follow/query | 查询用户是否已经关注了生活号
*AlipayOpenSearchAbilityApi* | [**batchquery**](docs/Api/AlipayOpenSearchAbilityApi.md#batchquery) | **POST** /v3/alipay/open/search/ability/batchquery | 搜索运营列表分页查询
*AlipayOpenSearchAppkeywordApi* | [**apply**](docs/Api/AlipayOpenSearchAppkeywordApi.md#apply) | **POST** /v3/alipay/open/search/appkeyword/apply | 提报搜索关键词
*AlipayOpenSearchAppkeywordApi* | [**batchquery**](docs/Api/AlipayOpenSearchAppkeywordApi.md#batchquery) | **GET** /v3/alipay/open/search/appkeyword/batchquery | 查询小程序已配置关键词
*AlipayOpenSearchAppkeywordApi* | [**delete**](docs/Api/AlipayOpenSearchAppkeywordApi.md#delete) | **POST** /v3/alipay/open/search/appkeyword/delete | 删除搜索关键词
*AlipayOpenSearchAppkeywordApi* | [**querystatus**](docs/Api/AlipayOpenSearchAppkeywordApi.md#querystatus) | **GET** /v3/alipay/open/search/appkeyword/querystatus | 查询小程序搜索关键词的审核工单的状态
*AlipayOpenSearchAppkeywordquotaApi* | [**query**](docs/Api/AlipayOpenSearchAppkeywordquotaApi.md#query) | **GET** /v3/alipay/open/search/appkeywordquota/query | 查询小程序可配置关键词数
*AlipayOpenSearchBaseorderApi* | [**modify**](docs/Api/AlipayOpenSearchBaseorderApi.md#modify) | **POST** /v3/alipay/open/search/baseorder/modify | 搜索运营提报基础信息工单
*AlipayOpenSearchBoxApi* | [**apply**](docs/Api/AlipayOpenSearchBoxApi.md#apply) | **POST** /v3/alipay/open/search/box/apply | 申请创建搜索直达配置
*AlipayOpenSearchBoxApi* | [**batchquery**](docs/Api/AlipayOpenSearchBoxApi.md#batchquery) | **POST** /v3/alipay/open/search/box/batchquery | 批量查询搜索直达配置列表
*AlipayOpenSearchBoxApi* | [**consult**](docs/Api/AlipayOpenSearchBoxApi.md#consult) | **POST** /v3/alipay/open/search/box/consult | 搜索直达创建预校验
*AlipayOpenSearchBoxApi* | [**modify**](docs/Api/AlipayOpenSearchBoxApi.md#modify) | **POST** /v3/alipay/open/search/box/modify | 修改搜索直达配置
*AlipayOpenSearchBoxApi* | [**offline**](docs/Api/AlipayOpenSearchBoxApi.md#offline) | **POST** /v3/alipay/open/search/box/offline | 下架搜索直达
*AlipayOpenSearchBoxApi* | [**online**](docs/Api/AlipayOpenSearchBoxApi.md#online) | **POST** /v3/alipay/open/search/box/online | 上架搜索直达
*AlipayOpenSearchBoxApi* | [**query**](docs/Api/AlipayOpenSearchBoxApi.md#query) | **GET** /v3/alipay/open/search/box/query | 查询搜索直达配置详情
*AlipayOpenSearchBoxactivityApi* | [**apply**](docs/Api/AlipayOpenSearchBoxactivityApi.md#apply) | **POST** /v3/alipay/open/search/boxactivity/apply | 申请创建搜索直达活动配置
*AlipayOpenSearchBoxactivityApi* | [**batchquery**](docs/Api/AlipayOpenSearchBoxactivityApi.md#batchquery) | **POST** /v3/alipay/open/search/boxactivity/batchquery | 批量查询搜索直达活动配置
*AlipayOpenSearchBoxactivityApi* | [**modify**](docs/Api/AlipayOpenSearchBoxactivityApi.md#modify) | **POST** /v3/alipay/open/search/boxactivity/modify | 修改搜索直达活动配置
*AlipayOpenSearchBoxactivityApi* | [**offline**](docs/Api/AlipayOpenSearchBoxactivityApi.md#offline) | **POST** /v3/alipay/open/search/boxactivity/offline | 下架搜索直达活动
*AlipayOpenSearchBoxactivityApi* | [**query**](docs/Api/AlipayOpenSearchBoxactivityApi.md#query) | **GET** /v3/alipay/open/search/boxactivity/query | 查询搜索直达活动配置详情
*AlipayOpenSearchOrderdetailApi* | [**query**](docs/Api/AlipayOpenSearchOrderdetailApi.md#query) | **POST** /v3/alipay/open/search/orderdetail/query | 查询搜索服务工单的详细信息
*AlipayOpenSearchServiceorderApi* | [**batchquery**](docs/Api/AlipayOpenSearchServiceorderApi.md#batchquery) | **POST** /v3/alipay/open/search/serviceorder/batchquery | 搜索运营服务查询接口
*AlipayOpenSearchSubservicekeywordApi* | [**apply**](docs/Api/AlipayOpenSearchSubservicekeywordApi.md#apply) | **POST** /v3/alipay/open/search/subservicekeyword/apply | 提报服务关键词
*AlipayOpenSearchSubservicekeywordApi* | [**batchquery**](docs/Api/AlipayOpenSearchSubservicekeywordApi.md#batchquery) | **GET** /v3/alipay/open/search/subservicekeyword/batchquery | 服务关键词批量查询接口
*AlipayOpenSearchSubservicekeywordApi* | [**delete**](docs/Api/AlipayOpenSearchSubservicekeywordApi.md#delete) | **POST** /v3/alipay/open/search/subservicekeyword/delete | 删除服务关键词
*AlipayOpenSearchSubservicekeywordApi* | [**querystatus**](docs/Api/AlipayOpenSearchSubservicekeywordApi.md#querystatus) | **GET** /v3/alipay/open/search/subservicekeyword/querystatus | 查询小程序服务关键词的审核工单的状态
*AlipayOpenServicemarketCommodityShopApi* | [**offline**](docs/Api/AlipayOpenServicemarketCommodityShopApi.md#offline) | **POST** /v3/alipay/open/servicemarket/commodity/shop/offline | 门店插件下架操作
*AlipayOpenServicemarketCommodityShopApi* | [**online**](docs/Api/AlipayOpenServicemarketCommodityShopApi.md#online) | **POST** /v3/alipay/open/servicemarket/commodity/shop/online | 门店插件上架操作
*AlipayOpenServicemarketOrderApi* | [**accept**](docs/Api/AlipayOpenServicemarketOrderApi.md#accept) | **POST** /v3/alipay/open/servicemarket/order/accept | 服务商接单操作
*AlipayOpenServicemarketOrderApi* | [**create**](docs/Api/AlipayOpenServicemarketOrderApi.md#create) | **POST** /v3/alipay/open/servicemarket/order/create | 服务市场代订购小程序
*AlipayOpenServicemarketOrderApi* | [**notify**](docs/Api/AlipayOpenServicemarketOrderApi.md#notify) | **POST** /v3/alipay/open/servicemarket/order/notify | 服务市场商户确认订购通知
*AlipayOpenServicemarketOrderApi* | [**query**](docs/Api/AlipayOpenServicemarketOrderApi.md#query) | **GET** /v3/alipay/open/servicemarket/order/query | 服务市场订单明细查询
*AlipayOpenServicemarketOrderApi* | [**reject**](docs/Api/AlipayOpenServicemarketOrderApi.md#reject) | **POST** /v3/alipay/open/servicemarket/order/reject | 服务商拒绝接单
*AlipayOpenServicemarketOrderItemApi* | [**cancel**](docs/Api/AlipayOpenServicemarketOrderItemApi.md#cancel) | **POST** /v3/alipay/open/servicemarket/order/item/cancel | 服务订单明细实施项单项取消
*AlipayOpenServicemarketOrderItemApi* | [**complete**](docs/Api/AlipayOpenServicemarketOrderItemApi.md#complete) | **POST** /v3/alipay/open/servicemarket/order/item/complete | 服务商完成订单内单个明细实施项
*AlipayOpenServicemarketOrderItemApi* | [**confirm**](docs/Api/AlipayOpenServicemarketOrderItemApi.md#confirm) | **POST** /v3/alipay/open/servicemarket/order/item/confirm | 服务商代商家确认实施完成
*AlipayOpenServicemarketPromotiontaskRelationApi* | [**query**](docs/Api/AlipayOpenServicemarketPromotiontaskRelationApi.md#query) | **GET** /v3/alipay/open/servicemarket/promotiontask/relation/query | 服务商推广关系查询
*AlipayOpenSpBlueseaactivityApi* | [**create**](docs/Api/AlipayOpenSpBlueseaactivityApi.md#create) | **POST** /v3/alipay/open/sp/blueseaactivity/create | 服务商返佣活动报名申请
*AlipayOpenSpBlueseaactivityApi* | [**modify**](docs/Api/AlipayOpenSpBlueseaactivityApi.md#modify) | **POST** /v3/alipay/open/sp/blueseaactivity/modify | 服务商返佣活动申请单修改
*AlipayOpenSpBlueseaactivityApi* | [**query**](docs/Api/AlipayOpenSpBlueseaactivityApi.md#query) | **GET** /v3/alipay/open/sp/blueseaactivity/query | 服务商返佣活动申请单详情查询
*AlipayOpenSpImageApi* | [**upload**](docs/Api/AlipayOpenSpImageApi.md#upload) | **POST** /v3/alipay/open/sp/image/upload | 图片上传接口
*AlipayOpenSpIsvBillApi* | [**sync**](docs/Api/AlipayOpenSpIsvBillApi.md#sync) | **POST** /v3/alipay/open/sp/isv/bill/sync | 服务商账单数据回传
*AlipayOpenSpIsvOperationApi* | [**sync**](docs/Api/AlipayOpenSpIsvOperationApi.md#sync) | **POST** /v3/alipay/open/sp/isv/operation/sync | 服务商作业结果数据回传
*AlipayOpenSpIsvRelationApi* | [**query**](docs/Api/AlipayOpenSpIsvRelationApi.md#query) | **GET** /v3/alipay/open/sp/isv/relation/query | spcenter服务商推广关系查询
*AlipayOpenSpIsvSalesApi* | [**sync**](docs/Api/AlipayOpenSpIsvSalesApi.md#sync) | **POST** /v3/alipay/open/sp/isv/sales/sync | 商户销售数据回传接口
*AlipayOpenSpIsvSignauthApi* | [**create**](docs/Api/AlipayOpenSpIsvSignauthApi.md#create) | **POST** /v3/alipay/open/sp/isv/signauth/create | 创建签约授权一体化订单
*AlipayOpenSpIsvSignauthApi* | [**query**](docs/Api/AlipayOpenSpIsvSignauthApi.md#query) | **GET** /v3/alipay/open/sp/isv/signauth/query | 查询签约授权一体化订单状态详情
*AlipayOpenSpLeadsExpandApi* | [**create**](docs/Api/AlipayOpenSpLeadsExpandApi.md#create) | **POST** /v3/alipay/open/sp/leads/expand/create | 在线写入商机库
*AlipayOpenSpMerchantInconsistentApi* | [**approve**](docs/Api/AlipayOpenSpMerchantInconsistentApi.md#approve) | **POST** /v3/alipay/open/sp/merchant/inconsistent/approve | 非同人商家进件资料审批
*AlipayOpenSpOperationApi* | [**apply**](docs/Api/AlipayOpenSpOperationApi.md#apply) | **POST** /v3/alipay/open/sp/operation/apply | 向商户发起代运营操作
*AlipayOpenSpOperationQrcodeApi* | [**query**](docs/Api/AlipayOpenSpOperationQrcodeApi.md#query) | **GET** /v3/alipay/open/sp/operation/qrcode/query | 查询代运营授权或者账号绑定二维码
*AlipayOpenSpOperationResultApi* | [**query**](docs/Api/AlipayOpenSpOperationResultApi.md#query) | **GET** /v3/alipay/open/sp/operation/result/query | 查询服务商代运营操作结果
*AlipayOpenSpOpporDetailApi* | [**query**](docs/Api/AlipayOpenSpOpporDetailApi.md#query) | **GET** /v3/alipay/open/sp/oppor/detail/query | 商机作业详情查询
*AlipayOpenSpOpporFeedbackApi* | [**modify**](docs/Api/AlipayOpenSpOpporFeedbackApi.md#modify) | **POST** /v3/alipay/open/sp/oppor/feedback/modify | 商机拓展完成
*AlipayOpenSpOpporPageApi* | [**query**](docs/Api/AlipayOpenSpOpporPageApi.md#query) | **GET** /v3/alipay/open/sp/oppor/page/query | 商机作业列表查询
*AlipayOpenViolationViolationdetailApi* | [**query**](docs/Api/AlipayOpenViolationViolationdetailApi.md#query) | **GET** /v3/alipay/open/violation/violationdetail/query | 违规记录详情查询
*AlipayOpenViolationViolationeventApi* | [**batchquery**](docs/Api/AlipayOpenViolationViolationeventApi.md#batchquery) | **POST** /v3/alipay/open/violation/violationevent/batchquery | 违规记录列表查询
*AlipayPcreditHuabeiAuthAccumulationApi* | [**query**](docs/Api/AlipayPcreditHuabeiAuthAccumulationApi.md#query) | **GET** /v3/alipay/pcredit/huabei/auth/accumulation/query | 花芝轻会员周期累计数据查询
*AlipayPcreditHuabeiAuthAgreementApi* | [**close**](docs/Api/AlipayPcreditHuabeiAuthAgreementApi.md#close) | **PUT** /v3/alipay/pcredit/huabei/auth/agreement/close | 花芝协议关闭接口
*AlipayPcreditHuabeiAuthAgreementApi* | [**query**](docs/Api/AlipayPcreditHuabeiAuthAgreementApi.md#query) | **GET** /v3/alipay/pcredit/huabei/auth/agreement/query | 花芝轻会员协议查询接口
*AlipayPcreditHuabeiAuthOrderApi* | [**query**](docs/Api/AlipayPcreditHuabeiAuthOrderApi.md#query) | **GET** /v3/alipay/pcredit/huabei/auth/order/query | 花呗先享订单查询接口
*AlipayPcreditHuabeiAuthOrderApi* | [**unfreeze**](docs/Api/AlipayPcreditHuabeiAuthOrderApi.md#unfreeze) | **PUT** /v3/alipay/pcredit/huabei/auth/order/unfreeze | 花呗先享解冻或解约接口
*AlipayPcreditHuabeiAuthRefundApi* | [**apply**](docs/Api/AlipayPcreditHuabeiAuthRefundApi.md#apply) | **PUT** /v3/alipay/pcredit/huabei/auth/refund/apply | 花芝结算扣款费用逆向退款申请
*AlipayPcreditHuabeiAuthSettleApi* | [**apply**](docs/Api/AlipayPcreditHuabeiAuthSettleApi.md#apply) | **PUT** /v3/alipay/pcredit/huabei/auth/settle/apply | 花芝轻会员结算申请
*AlipaySecurityDataSssApi* | [**create**](docs/Api/AlipaySecurityDataSssApi.md#create) | **POST** /v3/alipay/security/data/sss/create/{a} | 文档回归测试勿动openapi_openid_post多场景
*AlipaySecurityProdSssApi* | [**query**](docs/Api/AlipaySecurityProdSssApi.md#query) | **POST** /v3/alipay/security/prod/sss/query/{bbb} | 金柚测试3.0接口
*AlipaySecurityRiskCustomerriskApi* | [**send**](docs/Api/AlipaySecurityRiskCustomerriskApi.md#send) | **POST** /v3/alipay/security/risk/customerrisk/send | 商户数据同步
*AlipaySecurityRiskVerifyidentityMiniappApi* | [**confirm**](docs/Api/AlipaySecurityRiskVerifyidentityMiniappApi.md#confirm) | **POST** /v3/alipay/security/risk/verifyidentity/miniapp/confirm | 小程序核验服务结果确认接口
*AlipaySocialBaseContentlibStandardcontentApi* | [**batchquery**](docs/Api/AlipaySocialBaseContentlibStandardcontentApi.md#batchquery) | **POST** /v3/alipay/social/base/contentlib/standardcontent/batchquery | 内容批量查询接口
*AlipaySystemOauthApi* | [**token**](docs/Api/AlipaySystemOauthApi.md#token) | **POST** /v3/alipay/system/oauth/token | 换取授权访问令牌
*AlipayTradeApi* | [**cancel**](docs/Api/AlipayTradeApi.md#cancel) | **POST** /v3/alipay/trade/cancel | 统一收单交易撤销接口
*AlipayTradeApi* | [**close**](docs/Api/AlipayTradeApi.md#close) | **POST** /v3/alipay/trade/close | 统一收单交易关闭接口
*AlipayTradeApi* | [**create**](docs/Api/AlipayTradeApi.md#create) | **POST** /v3/alipay/trade/create | 统一收单交易创建接口
*AlipayTradeApi* | [**pay**](docs/Api/AlipayTradeApi.md#pay) | **POST** /v3/alipay/trade/pay | 统一收单交易支付接口
*AlipayTradeApi* | [**precreate**](docs/Api/AlipayTradeApi.md#precreate) | **POST** /v3/alipay/trade/precreate | 统一收单线下交易预创建
*AlipayTradeApi* | [**query**](docs/Api/AlipayTradeApi.md#query) | **POST** /v3/alipay/trade/query | 统一收单交易查询
*AlipayTradeApi* | [**refund**](docs/Api/AlipayTradeApi.md#refund) | **POST** /v3/alipay/trade/refund | 统一收单交易退款接口
*AlipayTradeAdvanceApi* | [**consult**](docs/Api/AlipayTradeAdvanceApi.md#consult) | **GET** /v3/alipay/trade/advance/consult | 订单咨询服务
*AlipayTradeApplepayAuthenticationApi* | [**submit**](docs/Api/AlipayTradeApplepayAuthenticationApi.md#submit) | **POST** /v3/alipay/trade/applepay/authentication/submit | ApplePay支付鉴权提交
*AlipayTradeBatchApi* | [**settle**](docs/Api/AlipayTradeBatchApi.md#settle) | **POST** /v3/alipay/trade/batch/settle | 批量结算
*AlipayTradeBatchApi* | [**transfer**](docs/Api/AlipayTradeBatchApi.md#transfer) | **POST** /v3/alipay/trade/batch/transfer | 请款分账
*AlipayTradeBatchSettleApi* | [**query**](docs/Api/AlipayTradeBatchSettleApi.md#query) | **POST** /v3/alipay/trade/batch/settle/query | 批量结算查询
*AlipayTradeBatchTransferApi* | [**query**](docs/Api/AlipayTradeBatchTransferApi.md#query) | **GET** /v3/alipay/trade/batch/transfer/query | 请款分账查询接口
*AlipayTradeCustomsApi* | [**callDeclare**](docs/Api/AlipayTradeCustomsApi.md#calldeclare) | **POST** /v3/alipay/trade/customs/declare | 统一收单报关接口
*AlipayTradeCustomsApi* | [**query**](docs/Api/AlipayTradeCustomsApi.md#query) | **GET** /v3/alipay/trade/customs/query | 查询报关详细信息
*AlipayTradeFastpayRefundApi* | [**query**](docs/Api/AlipayTradeFastpayRefundApi.md#query) | **POST** /v3/alipay/trade/fastpay/refund/query | 统一收单交易退款查询
*AlipayTradeOrderApi* | [**pay**](docs/Api/AlipayTradeOrderApi.md#pay) | **POST** /v3/alipay/trade/order/pay | 统一收单交易订单支付接口
*AlipayTradeOrderApi* | [**settle**](docs/Api/AlipayTradeOrderApi.md#settle) | **POST** /v3/alipay/trade/order/settle | 统一收单交易结算接口
*AlipayTradeOrderSettleApi* | [**query**](docs/Api/AlipayTradeOrderSettleApi.md#query) | **GET** /v3/alipay/trade/order/settle/query | 交易分账查询接口
*AlipayTradeOrderinfoApi* | [**sync**](docs/Api/AlipayTradeOrderinfoApi.md#sync) | **POST** /v3/alipay/trade/orderinfo/sync | 支付宝订单信息同步接口
*AlipayTradeOverseasApi* | [**settle**](docs/Api/AlipayTradeOverseasApi.md#settle) | **POST** /v3/alipay/trade/overseas/settle | 统一境内收单跨境结算接口
*AlipayTradeRefundApi* | [**apply**](docs/Api/AlipayTradeRefundApi.md#apply) | **POST** /v3/alipay/trade/refund/apply | 异步退款受理接口
*AlipayTradeRoyaltyRateApi* | [**query**](docs/Api/AlipayTradeRoyaltyRateApi.md#query) | **GET** /v3/alipay/trade/royalty/rate/query | 分账比例查询
*AlipayTradeRoyaltyRelationApi* | [**batchquery**](docs/Api/AlipayTradeRoyaltyRelationApi.md#batchquery) | **POST** /v3/alipay/trade/royalty/relation/batchquery | 分账关系查询
*AlipayTradeRoyaltyRelationApi* | [**bind**](docs/Api/AlipayTradeRoyaltyRelationApi.md#bind) | **POST** /v3/alipay/trade/royalty/relation/bind | 分账关系绑定
*AlipayTradeRoyaltyRelationApi* | [**unbind**](docs/Api/AlipayTradeRoyaltyRelationApi.md#unbind) | **POST** /v3/alipay/trade/royalty/relation/unbind | 分账关系解绑
*AlipayTradeSettleApi* | [**confirm**](docs/Api/AlipayTradeSettleApi.md#confirm) | **POST** /v3/alipay/trade/settle/confirm | 统一收单确认结算接口
*AlipayTradeSettleReceivablesApi* | [**query**](docs/Api/AlipayTradeSettleReceivablesApi.md#query) | **POST** /v3/alipay/trade/settle/receivables/query | 待结算查询
*AlipayUserAgreementApi* | [**migrate**](docs/Api/AlipayUserAgreementApi.md#migrate) | **POST** /v3/alipay/user/agreement/migrate | 代扣协议迁移
*AlipayUserAgreementApi* | [**query**](docs/Api/AlipayUserAgreementApi.md#query) | **GET** /v3/alipay/user/agreement/query | 支付宝个人代扣协议查询接口
*AlipayUserAgreementApi* | [**transfer**](docs/Api/AlipayUserAgreementApi.md#transfer) | **POST** /v3/alipay/user/agreement/transfer | 协议由普通通用代扣协议产品转移到周期扣协议产品
*AlipayUserAgreementApi* | [**unsign**](docs/Api/AlipayUserAgreementApi.md#unsign) | **POST** /v3/alipay/user/agreement/unsign | 支付宝个人代扣协议解约接口
*AlipayUserAgreementExecutionplanApi* | [**modify**](docs/Api/AlipayUserAgreementExecutionplanApi.md#modify) | **POST** /v3/alipay/user/agreement/executionplan/modify | 周期性扣款协议执行计划修改接口
*AlipayUserAgreementPermissionApi* | [**create**](docs/Api/AlipayUserAgreementPermissionApi.md#create) | **POST** /v3/alipay/user/agreement/permission/create | 支付宝协议支付许可创建、服务变更接口
*AlipayUserAgreementUserverifyApi* | [**apply**](docs/Api/AlipayUserAgreementUserverifyApi.md#apply) | **POST** /v3/alipay/user/agreement/userverify/apply | 协议用户一致性验证
*AlipayUserAgreementUserverifyApi* | [**query**](docs/Api/AlipayUserAgreementUserverifyApi.md#query) | **GET** /v3/alipay/user/agreement/userverify/query | 用户协议鉴权查询结果
*AlipayUserAlipaypointApi* | [**send**](docs/Api/AlipayUserAlipaypointApi.md#send) | **POST** /v3/alipay/user/alipaypoint/send | 集分宝发放接口
*AlipayUserAlipaypointBudgetlibApi* | [**query**](docs/Api/AlipayUserAlipaypointBudgetlibApi.md#query) | **GET** /v3/alipay/user/alipaypoint/budgetlib/query | 查询集分宝预算库详情
*AlipayUserCertdocCertverifyApi* | [**consult**](docs/Api/AlipayUserCertdocCertverifyApi.md#consult) | **GET** /v3/alipay/user/certdoc/certverify/consult | 实名证件信息比对验证咨询
*AlipayUserCertdocCertverifyApi* | [**preconsult**](docs/Api/AlipayUserCertdocCertverifyApi.md#preconsult) | **POST** /v3/alipay/user/certdoc/certverify/preconsult | 实名证件信息比对验证预咨询
*AlipayUserCertifyOpenApi* | [**initialize**](docs/Api/AlipayUserCertifyOpenApi.md#initialize) | **POST** /v3/alipay/user/certify/open/initialize | 身份认证初始化服务
*AlipayUserCertifyOpenApi* | [**query**](docs/Api/AlipayUserCertifyOpenApi.md#query) | **GET** /v3/alipay/user/certify/open/query | 身份认证记录查询
*AlipayUserInfoApi* | [**share**](docs/Api/AlipayUserInfoApi.md#share) | **POST** /v3/alipay/user/info/share | 支付宝会员授权信息查询接口
*AlipayUserTwostageCommonApi* | [**callUse**](docs/Api/AlipayUserTwostageCommonApi.md#calluse) | **POST** /v3/alipay/user/twostage/common/use | 通用当面付二阶段接口
*AlipayUserTwostageIndirectApi* | [**callUse**](docs/Api/AlipayUserTwostageIndirectApi.md#calluse) | **POST** /v3/alipay/user/twostage/indirect/use | 双联二阶段
*AlipayUserUserinfoApi* | [**share**](docs/Api/AlipayUserUserinfoApi.md#share) | **POST** /v3/alipay/user/userinfo/share | 支付宝钱包用户信息共享
*AntMerchantExpandApprecommendAccountApi* | [**create**](docs/Api/AntMerchantExpandApprecommendAccountApi.md#create) | **POST** /v3/ant/merchant/expand/apprecommend/account/create | 关联账号和小程序
*AntMerchantExpandApprecommendAccountApi* | [**delete**](docs/Api/AntMerchantExpandApprecommendAccountApi.md#delete) | **DELETE** /v3/ant/merchant/expand/apprecommend/account/delete | 取消关联账号和小程序
*AntMerchantExpandApprecommendAccountApi* | [**query**](docs/Api/AntMerchantExpandApprecommendAccountApi.md#query) | **GET** /v3/ant/merchant/expand/apprecommend/account/query | 查询已关联指定APP的账号列表
*AntMerchantExpandApprecommendAvailableApi* | [**query**](docs/Api/AntMerchantExpandApprecommendAvailableApi.md#query) | **GET** /v3/ant/merchant/expand/apprecommend/available/query | 查询可关联APP的账号列表
*AntMerchantExpandIndirectImageApi* | [**upload**](docs/Api/AntMerchantExpandIndirectImageApi.md#upload) | **POST** /v3/ant/merchant/indirect/image | 图片上传
*AntMerchantExpandInfoApi* | [**query**](docs/Api/AntMerchantExpandInfoApi.md#query) | **GET** /v3/ant/merchant/expand/info/query | 蚂蚁商户信息查询接口
*AntMerchantExpandItemApi* | [**create**](docs/Api/AntMerchantExpandItemApi.md#create) | **POST** /v3/ant/merchant/expand/item/create | 商品创建接口
*AntMerchantExpandItemApi* | [**delete**](docs/Api/AntMerchantExpandItemApi.md#delete) | **DELETE** /v3/ant/merchant/expand/item/delete | 商品删除接口
*AntMerchantExpandItemApi* | [**modify**](docs/Api/AntMerchantExpandItemApi.md#modify) | **POST** /v3/ant/merchant/expand/item/modify | 商品修改接口
*AntMerchantExpandItemApi* | [**query**](docs/Api/AntMerchantExpandItemApi.md#query) | **GET** /v3/ant/merchant/expand/item/query | 商品查询接口
*AntMerchantExpandItemOpenApi* | [**batchquery**](docs/Api/AntMerchantExpandItemOpenApi.md#batchquery) | **POST** /v3/ant/merchant/expand/item/open/batchquery | 批量查询商品接口
*AntMerchantExpandItemOpenApi* | [**create**](docs/Api/AntMerchantExpandItemOpenApi.md#create) | **POST** /v3/ant/merchant/expand/item/open/create | 创建商品接口
*AntMerchantExpandItemOpenApi* | [**delete**](docs/Api/AntMerchantExpandItemOpenApi.md#delete) | **DELETE** /v3/ant/merchant/expand/item/open/delete | 删除商品接口
*AntMerchantExpandItemOpenApi* | [**modify**](docs/Api/AntMerchantExpandItemOpenApi.md#modify) | **POST** /v3/ant/merchant/expand/item/open/modify | 修改商品接口
*AntMerchantExpandItemOpenApi* | [**query**](docs/Api/AntMerchantExpandItemOpenApi.md#query) | **GET** /v3/ant/merchant/expand/item/open/query | 查询商品接口
*AntMerchantExpandItemStatusApi* | [**modify**](docs/Api/AntMerchantExpandItemStatusApi.md#modify) | **POST** /v3/ant/merchant/expand/item/status/modify | 商品状态修改接口
*AntMerchantExpandMccApi* | [**query**](docs/Api/AntMerchantExpandMccApi.md#query) | **GET** /v3/ant/merchant/mcc/query | 商户mcc信息查询
*AntMerchantExpandOrderApi* | [**query**](docs/Api/AntMerchantExpandOrderApi.md#query) | **GET** /v3/ant/merchant/order/{order_id} | 商户申请单查询
*AntMerchantExpandShopApi* | [**close**](docs/Api/AntMerchantExpandShopApi.md#close) | **PATCH** /v3/ant/merchant/shop/close | 蚂蚁店铺关闭
*AntMerchantExpandShopApi* | [**consult**](docs/Api/AntMerchantExpandShopApi.md#consult) | **POST** /v3/ant/merchant/expand/shop/consult | 蚂蚁店铺创建咨询
*AntMerchantExpandShopApi* | [**create**](docs/Api/AntMerchantExpandShopApi.md#create) | **POST** /v3/ant/merchant/shop | 蚂蚁店铺创建
*AntMerchantExpandShopApi* | [**modify**](docs/Api/AntMerchantExpandShopApi.md#modify) | **PATCH** /v3/ant/merchant/shop | 修改蚂蚁店铺
*AntMerchantExpandShopApi* | [**query**](docs/Api/AntMerchantExpandShopApi.md#query) | **GET** /v3/ant/merchant/shop | 店铺查询接口
*AntMerchantExpandShopPageApi* | [**query**](docs/Api/AntMerchantExpandShopPageApi.md#query) | **GET** /v3/ant/merchant/shop/pagequery | 店铺分页查询接口
*AntMerchantExpandShopReceiptaccountApi* | [**save**](docs/Api/AntMerchantExpandShopReceiptaccountApi.md#save) | **POST** /v3/ant/merchant/expand/shop/receiptaccount/save | 店铺增加收单账号
*DatadigitalFincloudGeneralsaasFaceCertifyApi* | [**initialize**](docs/Api/DatadigitalFincloudGeneralsaasFaceCertifyApi.md#initialize) | **POST** /v3/datadigital/fincloud/generalsaas/face/certify/initialize | 跳转支付宝人脸核身初始化
*DatadigitalFincloudGeneralsaasFaceCertifyApi* | [**query**](docs/Api/DatadigitalFincloudGeneralsaasFaceCertifyApi.md#query) | **GET** /v3/datadigital/fincloud/generalsaas/face/certify/query | 跳转支付宝人脸核身查询记录
*DatadigitalFincloudGeneralsaasFaceCertifyApi* | [**verify**](docs/Api/DatadigitalFincloudGeneralsaasFaceCertifyApi.md#verify) | **POST** /v3/datadigital/fincloud/generalsaas/face/certify/verify | 跳转支付宝人脸核身开始认证
*DatadigitalFincloudGeneralsaasFaceCheckApi* | [**initialize**](docs/Api/DatadigitalFincloudGeneralsaasFaceCheckApi.md#initialize) | **POST** /v3/datadigital/fincloud/generalsaas/face/check/initialize | 活体检测初始化
*DatadigitalFincloudGeneralsaasFaceCheckApi* | [**query**](docs/Api/DatadigitalFincloudGeneralsaasFaceCheckApi.md#query) | **GET** /v3/datadigital/fincloud/generalsaas/face/check/query | 活体检测结果查询
*DatadigitalFincloudGeneralsaasFaceSourceApi* | [**certify**](docs/Api/DatadigitalFincloudGeneralsaasFaceSourceApi.md#certify) | **POST** /v3/datadigital/fincloud/generalsaas/face/source/certify | 纯服务端人脸核身
*DatadigitalFincloudGeneralsaasFaceVerificationApi* | [**initialize**](docs/Api/DatadigitalFincloudGeneralsaasFaceVerificationApi.md#initialize) | **POST** /v3/datadigital/fincloud/generalsaas/face/verification/initialize | 人脸核身初始化
*DatadigitalFincloudGeneralsaasFaceVerificationApi* | [**query**](docs/Api/DatadigitalFincloudGeneralsaasFaceVerificationApi.md#query) | **GET** /v3/datadigital/fincloud/generalsaas/face/verification/query | 人脸核身结果查询
*DatadigitalFincloudGeneralsaasOcrMobileApi* | [**initialize**](docs/Api/DatadigitalFincloudGeneralsaasOcrMobileApi.md#initialize) | **POST** /v3/datadigital/fincloud/generalsaas/ocr/mobile/initialize | App端OCR初始化
*DatadigitalFincloudGeneralsaasOcrServerApi* | [**detect**](docs/Api/DatadigitalFincloudGeneralsaasOcrServerApi.md#detect) | **POST** /v3/datadigital/fincloud/generalsaas/ocr/server/detect | 服务端OCR
*MonitorHeartbeatApi* | [**syn**](docs/Api/MonitorHeartbeatApi.md#syn) | **POST** /v3/monitor/heartbeat/syn | 验签接口
*ZhimaCreditPayafteruseCreditagreementApi* | [**query**](docs/Api/ZhimaCreditPayafteruseCreditagreementApi.md#query) | **GET** /v3/zhima/credit/payafteruse/creditagreement/query | 查询服务开通/授权信息
*ZhimaCreditPayafteruseCreditagreementApi* | [**transfer**](docs/Api/ZhimaCreditPayafteruseCreditagreementApi.md#transfer) | **POST** /v3/zhima/credit/payafteruse/creditagreement/transfer | 芝麻信用服务授权
*ZhimaCreditPayafteruseCreditbizorderApi* | [**finish**](docs/Api/ZhimaCreditPayafteruseCreditbizorderApi.md#finish) | **POST** /v3/zhima/credit/payafteruse/creditbizorder/finish | 结束信用服务订单
*ZhimaCreditPayafteruseCreditbizorderApi* | [**order**](docs/Api/ZhimaCreditPayafteruseCreditbizorderApi.md#order) | **POST** /v3/zhima/credit/payafteruse/creditbizorder/order | 芝麻信用服务下单（免用户确认场景）
*ZhimaCreditPayafteruseCreditbizorderApi* | [**query**](docs/Api/ZhimaCreditPayafteruseCreditbizorderApi.md#query) | **GET** /v3/zhima/credit/payafteruse/creditbizorder/query | 信用服务订单查询
*ZhimaCreditPeZmgoAgreementApi* | [**query**](docs/Api/ZhimaCreditPeZmgoAgreementApi.md#query) | **GET** /v3/zhima/credit/pe/zmgo/agreement/query | 芝麻Go协议查询接口
*ZhimaCreditPeZmgoAgreementApi* | [**unsign**](docs/Api/ZhimaCreditPeZmgoAgreementApi.md#unsign) | **POST** /v3/zhima/credit/pe/zmgo/agreement/unsign | 芝麻GO协议解约
*ZhimaCreditPeZmgoBizoptApi* | [**close**](docs/Api/ZhimaCreditPeZmgoBizoptApi.md#close) | **POST** /v3/zhima/credit/pe/zmgo/bizopt/close | 芝麻GO签约关单
*ZhimaCreditPeZmgoCumulationApi* | [**sync**](docs/Api/ZhimaCreditPeZmgoCumulationApi.md#sync) | **POST** /v3/zhima/credit/pe/zmgo/cumulation/sync | 芝麻go用户数据回传
*ZhimaCreditPeZmgoPreorderApi* | [**create**](docs/Api/ZhimaCreditPeZmgoPreorderApi.md#create) | **PUT** /v3/zhima/credit/pe/zmgo/preorder/create | 芝麻GO签约预创单
*ZhimaCreditPeZmgoSettleApi* | [**apply**](docs/Api/ZhimaCreditPeZmgoSettleApi.md#apply) | **POST** /v3/zhima/credit/pe/zmgo/settle/apply | 芝麻GO结算申请
*ZhimaCreditPeZmgoSettleApi* | [**refund**](docs/Api/ZhimaCreditPeZmgoSettleApi.md#refund) | **POST** /v3/zhima/credit/pe/zmgo/settle/refund | 芝麻GO结算退款接口
*ZhimaCreditPeZmgoSettleApi* | [**unfreeze**](docs/Api/ZhimaCreditPeZmgoSettleApi.md#unfreeze) | **PUT** /v3/zhima/credit/pe/zmgo/settle/unfreeze | 芝麻GO解冻接口
*ZhimaCustomerJobworthAuthenticationApi* | [**query**](docs/Api/ZhimaCustomerJobworthAuthenticationApi.md#query) | **GET** /v3/zhima/customer/jobworth/authentication | 职得身份认证查询接口
*ZhimaCustomerJobworthCloudresumeApi* | [**query**](docs/Api/ZhimaCustomerJobworthCloudresumeApi.md#query) | **GET** /v3/zhima/customer/jobworth/cloudresume/query | 智能简历基本数据查询
*ZhimaCustomerJobworthInfoApi* | [**query**](docs/Api/ZhimaCustomerJobworthInfoApi.md#query) | **GET** /v3/zhima/customer/jobworth/info/query | 职得工作证信息查询
*ZhimaCustomerJobworthJobdataApi* | [**add**](docs/Api/ZhimaCustomerJobworthJobdataApi.md#add) | **POST** /v3/zhima/customer/jobworth/jobdata/add | 工作证职业数据回流接口
*ZhimaCustomerJobworthPictureApi* | [**upload**](docs/Api/ZhimaCustomerJobworthPictureApi.md#upload) | **POST** /v3/zhima/customer/jobworth/picture/upload | 职得工作证图片上传
*ZhimaCustomerJobworthPositionApi* | [**add**](docs/Api/ZhimaCustomerJobworthPositionApi.md#add) | **POST** /v3/zhima/customer/jobworth/position/add | 职得工作证岗位收集
*ZhimaMerchantSubsidiariesApi* | [**apply**](docs/Api/ZhimaMerchantSubsidiariesApi.md#apply) | **POST** /v3/zhima/merchant/subsidiaries/apply | 子商户信息添加
*ZhimaMerchantSubsidiariesApi* | [**close**](docs/Api/ZhimaMerchantSubsidiariesApi.md#close) | **POST** /v3/zhima/merchant/subsidiaries/close | 关闭子商户信息工单
*ZhimaMerchantZmgoCumulateApi* | [**query**](docs/Api/ZhimaMerchantZmgoCumulateApi.md#query) | **GET** /v3/zhima/merchant/zmgo/cumulate/query | 商家芝麻GO累计数据查询接口
*ZhimaMerchantZmgoCumulateApi* | [**sync**](docs/Api/ZhimaMerchantZmgoCumulateApi.md#sync) | **POST** /v3/zhima/merchant/zmgo/cumulate/sync | 商家芝麻GO累计数据回传接口
*ZhimaMerchantZmgoTemplateApi* | [**create**](docs/Api/ZhimaMerchantZmgoTemplateApi.md#create) | **POST** /v3/zhima/merchant/zmgo/template/create | 商户创建芝麻GO模板接口
*ZhimaMerchantZmgoTemplateApi* | [**query**](docs/Api/ZhimaMerchantZmgoTemplateApi.md#query) | **GET** /v3/zhima/merchant/zmgo/template/query | 芝麻GO模板查询
*ZolozAuthenticationCustomerFacemanageApi* | [**create**](docs/Api/ZolozAuthenticationCustomerFacemanageApi.md#create) | **POST** /v3/zoloz/authentication/customer/facemanage/create | 热脸入库
*ZolozAuthenticationCustomerFacemanageApi* | [**delete**](docs/Api/ZolozAuthenticationCustomerFacemanageApi.md#delete) | **POST** /v3/zoloz/authentication/customer/facemanage/delete | 热脸出库
*ZolozAuthenticationCustomerFtokenApi* | [**query**](docs/Api/ZolozAuthenticationCustomerFtokenApi.md#query) | **POST** /v3/zoloz/authentication/customer/ftoken/query | 查询刷脸结果信息接口
*ZolozAuthenticationCustomerSmilepayApi* | [**initialize**](docs/Api/ZolozAuthenticationCustomerSmilepayApi.md#initialize) | **POST** /v3/zoloz/authentication/customer/smilepay/initialize | 人脸刷脸付初始化
*ZolozAuthenticationSmilepayApi* | [**initialize**](docs/Api/ZolozAuthenticationSmilepayApi.md#initialize) | **POST** /v3/zoloz/authentication/smilepay/initialize | 刷脸支付初始化

## Authorization
All endpoints do not require authorization.
## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `2024-10-16`
    - Package version: `3.0.19`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
