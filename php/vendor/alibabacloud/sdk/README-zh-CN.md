[English](/README.md) | 简体中文

# Alibaba Cloud SDK for PHP
[![Latest Stable Version](https://poser.pugx.org/alibabacloud/sdk/v/stable)](https://packagist.org/packages/alibabacloud/sdk)
[![composer.lock](https://poser.pugx.org/alibabacloud/sdk/composerlock)](https://packagist.org/packages/alibabacloud/sdk)
[![Total Downloads](https://poser.pugx.org/alibabacloud/sdk/downloads)](https://packagist.org/packages/alibabacloud/sdk)
[![License](https://poser.pugx.org/alibabacloud/sdk/license)](https://packagist.org/packages/alibabacloud/sdk)
[![codecov](https://codecov.io/gh/aliyun/openapi-sdk-php/branch/master/graph/badge.svg)](https://codecov.io/gh/aliyun/openapi-sdk-php)
[![Travis Build Status](https://travis-ci.org/aliyun/openapi-sdk-php.svg?branch=master)](https://travis-ci.org/aliyun/openapi-sdk-php)
[![Appveyor Build Status](https://ci.appveyor.com/api/projects/status/mddt341e3hpju1nw/branch/master?svg=true)](https://ci.appveyor.com/project/aliyun/openapi-sdk-php/branch/master)

![AlibabaCloud](https://aliyunsdk-pages.alicdn.com/icons/AlibabaCloud.svg)

Alibaba Cloud SDK for PHP 是支持产品快捷访问的开发包，由 [Alibaba Cloud Client for PHP][client] 提供底层支持。

## 发行说明

我们在 `消除已知问题` 和 `兼容旧语法` 的原则上开发了新内核，增加了如下特性：

- [支持 Composer][packagist]
- [支持多客户端和客户端配置文件][clients]
- [结果是一个强大的对象][result]
- [每一个请求配置更加灵活][request]

## 先决条件

您的系统需要满足[先决条件](/docs/zh-CN/0-Prerequisites.md)，包括 PHP >= 5.5。 我们强烈建议使用cURL扩展，并使用 TLS 后端编译 cURL 7.16.2+。

## 安装依赖

如果已在系统上[全局安装 Composer](https://getcomposer.org/doc/00-intro.md#globally)，请直接在项目目录中运行以下内容来安装 Alibaba Cloud SDK for PHP 作为依赖项：

```bash
composer require alibabacloud/sdk
```

请看[安装](/docs/zh-CN/1-Installation.md)有关通过 Composer 和其他方式安装的详细信息。

## 使用诊断

[Troubleshoot](https://next.api.aliyun.com/troubleshoot?source=github_sdk) 提供 OpenAPI 使用诊断服务，通过 `RequestID` 或 `报错信息` ，帮助开发者快速定位，为开发者提供解决方案。

## 在线示例

[阿里云 OpenAPI 开发者门户](https://next.api.aliyun.com/) 提供在线调用阿里云产品，并动态生成 SDK 代码和快速检索接口等能力，能显著降低使用云 API 的难度。

## 快速使用

在您开始之前，您需要注册阿里云帐户并获取您的[凭证](https://usercenter.console.aliyun.com/#/manage/ak)。请求之前，请[了解使用客户端][clients]，请求之后，请[了解结果对象][result]。

> 目前仅支持部分阿里云产品，[已支持产品列表](/SUPPORTED.md)，对于没有支持的产品，您可使用 [Alibaba Cloud Client for PHP][request] 发起自定义请求，还可使用 [阿里云 OpenAPI 开发者门户](https://next.api.aliyun.com/) 在线生成 Alibaba Cloud Client for PHP 代码。

```php
<?php

use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Client\Exception\ClientException;
use AlibabaCloud\Client\Exception\ServerException;
use AlibabaCloud\Ecs\Ecs;

// 设置全局客户端
AlibabaCloud::accessKeyClient('foo', 'bar')
            ->regionId('cn-hangzhou')
            ->asDefaultClient();

try {
    // 访问产品 APIs
    $request = Ecs::v20140526()->describeRegions();
    
    // 设置选项/参数并执行请求
    $result = $request->withResourceType('type') // API 的参数
                      ->withInstanceChargeType('type') // API 的参数
                      ->client('client1') // 指定发送客户端，否则使用全局客户端
                      ->debug(true) // 开启调试会输出详细信息
                      ->connectTimeout(0.01) // 连接超时会抛出异常
                      ->timeout(0.01) // 超时会抛出异常
                      ->request(); // 执行请求
    
    // 也可以传入数组设置
    $options = [
                   'debug'           => true,
                   'connect_timeout' => 0.01,
                   'timeout'         => 0.01,
                   'query'           => [
                       'ResourceType' => 'type',
                       'InstanceChargeType' => 'type',
                   ],
               ];

    // 设置的优先级
    $result2 = Ecs::v20140526()
                  ->describeRegions($options)
                  ->options([
                                'query' => [
                                    'Key'      => '我会覆盖构造函数的这个值',
                                    'new'      => '我是新增的值',
                                ],
                            ])
                  ->options([
                                'query' => [
                                    'Key' => '我会覆盖以前的值',
                                    'bar' => '我是新增的值',
                                ],
                            ])
                  ->debug(false) // 最后调用的会覆盖前者
                  ->request();
    
} catch (ClientException $exception) {
    echo $exception->getMessage(). PHP_EOL;
} catch (ServerException $exception) {
    echo $exception->getMessage() . PHP_EOL;
    echo $exception->getErrorCode(). PHP_EOL;
    echo $exception->getRequestId(). PHP_EOL;
    echo $exception->getErrorMessage(). PHP_EOL;
}
```

## 问题

[提交 Issue](https://github.com/aliyun/openapi-sdk-php/issues/new/choose)，不符合指南的问题可能会立即关闭。

## 发布日志

每个版本的详细更改记录在[发行说明](/CHANGELOG.md)中。

## 贡献

提交 Pull Request 之前请阅读[贡献指南](/CONTRIBUTING.md)。

## 相关

- [阿里云服务 Regions & Endpoints][endpoints]
- [阿里云 OpenAPI 开发者门户][open-api]
- [Packagist][packagist]
- [Composer][composer]
- [Guzzle中文文档][guzzle-docs]
- [Latest Release][latest-release]

## 许可证

[Apache-2.0](/LICENSE.md)

Copyright (c) 2009-present, Alibaba Cloud All rights reserved.

[open-api]: https://next.api.aliyun.com/
[latest-release]: https://github.com/aliyun/openapi-sdk-php
[guzzle-docs]: https://guzzle-cn.readthedocs.io/zh_CN/latest/request-options.html
[composer]: http://getcomposer.org
[packagist]: https://packagist.org/packages/alibabacloud/sdk
[client]: https://github.com/aliyun/openapi-sdk-php-client/blob/master/README-zh-CN.md
[clients]: https://github.com/aliyun/openapi-sdk-php-client/blob/master/docs/zh-CN/2-Client.md
[request]: https://github.com/aliyun/openapi-sdk-php-client/blob/master/docs/zh-CN/3-Request.md
[result]: https://github.com/aliyun/openapi-sdk-php-client/blob/master/docs/zh-CN/4-Result.md
[ak]: https://usercenter.console.aliyun.com/?spm=5176.doc52740.2.3.QKZk8w#/manage/ak
[home]: https://home.console.aliyun.com/?spm=5176.doc52740.2.4.QKZk8w
[cURL]: http://php.net/manual/en/book.curl.php
[OPCache]: http://php.net/manual/en/book.opcache.php
[xdebug]: http://xdebug.org
[OpenSSL]: http://php.net/manual/en/book.openssl.php
[aliyun]: https://www.aliyun.com
[alibabacloud]: https://www.alibabacloud.com
[endpoints]: https://developer.aliyun.com/endpoints
