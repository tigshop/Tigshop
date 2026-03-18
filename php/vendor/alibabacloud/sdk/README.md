English | [简体中文](/README-zh-CN.md)

# Alibaba Cloud SDK for PHP
[![Latest Stable Version](https://poser.pugx.org/alibabacloud/sdk/v/stable)](https://packagist.org/packages/alibabacloud/sdk)
[![composer.lock](https://poser.pugx.org/alibabacloud/sdk/composerlock)](https://packagist.org/packages/alibabacloud/sdk)
[![Total Downloads](https://poser.pugx.org/alibabacloud/sdk/downloads)](https://packagist.org/packages/alibabacloud/sdk)
[![License](https://poser.pugx.org/alibabacloud/sdk/license)](https://packagist.org/packages/alibabacloud/sdk)
[![codecov](https://codecov.io/gh/aliyun/openapi-sdk-php/branch/master/graph/badge.svg)](https://codecov.io/gh/aliyun/openapi-sdk-php)
[![Travis Build Status](https://travis-ci.org/aliyun/openapi-sdk-php.svg?branch=master)](https://travis-ci.org/aliyun/openapi-sdk-php)
[![Appveyor Build Status](https://ci.appveyor.com/api/projects/status/mddt341e3hpju1nw/branch/master?svg=true)](https://ci.appveyor.com/project/aliyun/openapi-sdk-php/branch/master)

![AlibabaCloud](https://aliyunsdk-pages.alicdn.com/icons/AlibabaCloud.svg)

Alibaba Cloud SDK for PHP is a development kit that supports quick access to products, dependency on [Alibaba Cloud Client for PHP][client].

## Release Notes

We developed a new kernel on the principle of `eliminating known issues` and `compatible with old grammar`, adding the following features:
- [Support Composer][packagist]
- [Support for multiple client and client profiles][clients]
- [Result is a powerful object][result]
- [More flexible configuration per request][request]

## Prerequisites

Your system will need to meet the [Prerequisites](/docs/en-US/0-Prerequisites.md), including having PHP >= 5.5. We highly recommend having it compiled with the cURL extension and cURL 7.16.2+.

## Installation

If Composer is already [installed globally on your system](https://getcomposer.org/doc/00-intro.md#globally), run the following in the base directory of your project to install Alibaba Cloud SDK for PHP as a dependency:

```bash
composer require alibabacloud/sdk
```

Please see the [Installation](/docs/en-US/1-Installation.md) for more detailed information about installing through Composer and other ways.

## Troubleshoot

[Troubleshoot](https://next.api.aliyun.com/troubleshoot?source=github_sdk) Provide OpenAPI diagnosis service to help developers locate quickly and provide solutions for developers through `RequestID` or `error message`.

## Online Demo

[Alibaba Cloud OpenAPI Developer Portal](https://next.api.aliyun.com) provides the ability to call the cloud product OpenAPI online, and dynamically generate SDK Example code and quick retrieval interface, which can significantly reduce the difficulty of using the cloud API.

## Quick Examples

Before you begin, you need to sign up for an Alibaba Cloud account and retrieve your [Credentials](https://usercenter.console.aliyun.com/#/manage/ak). Before request, please [Understanding the Clients][clients], after request, please [Understanding the Result][result].

> Currently, only some Alibaba Cloud products are supported, [Supported Products](/SUPPORTED-EN.md), For products that are not supported, you can use [Alibaba Cloud Client for PHP][request] to initiate custom requests, and you can use [Alibaba Cloud OpenAPI Developer Portal](https://next.api.aliyun.com/) to generate Alibaba Cloud Client for PHP code online.

```php
<?php

use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Client\Exception\ClientException;
use AlibabaCloud\Client\Exception\ServerException;
use AlibabaCloud\Ecs\Ecs;

// Set up a global client
AlibabaCloud::accessKeyClient('foo', 'bar')
            ->regionId('cn-hangzhou')
            ->asDefaultClient();

try {
    // Access product APIs
    $request = Ecs::v20140526()->describeRegions();
    
    // Set options/parameters and execute request
    $result = $request->withResourceType('type') // API parameter
                      ->withInstanceChargeType('type') // API parameter
                      ->client('client1') // Specify the client for send
                      ->debug(true) // Enable the debug will output detailed information
                      ->connectTimeout(0.01) // Throw an exception when Connection timeout 
                      ->timeout(0.01) // Throw an exception when timeout 
                      ->request(); // Execution request

    // Can also Set by passing in an array
    $options = [
                   'debug'           => true,
                   'connect_timeout' => 0.01,
                   'timeout'         => 0.01,
                   'query'           => [
                       'ResourceType' => 'type',
                       'InstanceChargeType' => 'type',
                   ],
               ];
    
    // Settings priority
    $result2 = Ecs::v20140526()
                  ->describeRegions($options)
                  ->options([
                                'query' => [
                                    'Key'      => 'I will overwrite this value in constructor',
                                    'new'      => 'I am new value',
                                ],
                            ])
                  ->options([
                                'query' => [
                                    'Key' => 'I will overwrite the previous value',
                                    'bar' => 'I am new value',
                                ],
                            ])
                  ->debug(false) // Overwrite the true of the former
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

## Issues

[Opening an Issue](https://github.com/aliyun/openapi-sdk-php/issues/new/choose), Issues not conforming to the guidelines may be closed immediately.

## Changelog

Detailed changes for each release are documented in the [release notes](/CHANGELOG.md).

## Contribution

Please make sure to read the [Contributing Guide](/CONTRIBUTING.md) before making a pull request.

## References

- [Alibaba Cloud Regions & Endpoints][endpoints]
- [Alibaba Cloud OpenAPI Developer Portal][open-api]
- [Packagist][packagist]
- [Composer][composer]
- [Guzzle Documentation][guzzle-docs]
- [Latest Release][latest-release]

## License

[Apache-2.0](/LICENSE.md)

Copyright (c) 2009-present, Alibaba Cloud All rights reserved.

[open-api]: https://next.api.aliyun.com
[latest-release]: https://github.com/aliyun/openapi-sdk-php
[guzzle-docs]: http://docs.guzzlephp.org/en/stable/request-options.html
[composer]: http://getcomposer.org
[packagist]: https://packagist.org/packages/alibabacloud/sdk
[client]: https://github.com/aliyun/openapi-sdk-php-client/blob/master/README.md
[clients]: https://github.com/aliyun/openapi-sdk-php-client/blob/master/docs/en-US/2-Client.md
[request]: https://github.com/aliyun/openapi-sdk-php-client/blob/master/docs/en-US/3-Request.md
[result]: https://github.com/aliyun/openapi-sdk-php-client/blob/master/docs/en-US/4-Result.md
[ak]: https://usercenter.console.aliyun.com/?spm=5176.doc52740.2.3.QKZk8w#/manage/ak
[home]: https://home.console.aliyun.com/?spm=5176.doc52740.2.4.QKZk8w
[cURL]: http://php.net/manual/en/book.curl.php
[OPCache]: http://php.net/manual/en/book.opcache.php
[xdebug]: http://xdebug.org
[OpenSSL]: http://php.net/manual/en/book.openssl.php
[aliyun]: https://www.aliyun.com
[alibabacloud]: https://www.alibabacloud.com
[endpoints]: https://developer.aliyun.com/endpoints
