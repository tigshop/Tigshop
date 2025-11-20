
<h1><p align="center">JWT-AUTH</p></h1>
<p align="center"> thinkphp的jwt（JSON Web Token）身份验证包。支持Header、Cookie、Param等多种传参方式。包含：验证、验证并且自动刷新等多种中间件。</p>

[thinkphp6.0的demo下载](https://gitee.com/thans/jwt-auth/attach_files/306748/download)

## 支持Swoole

## 环境要求

1. php ~8.1.0 || ~8.2.0
2. thinkphp ^5.1.10 || ^6.0.0 || ^8.0.0

> 2.x 要求 PHP 8.1 以上，8.0及以下请使用1.x

## 说明
> 目前支持如下三大类型加密方式：RSA,HASH,DSA。再各分256、384、512位。
默认是HS256，即hash 256位加密。

>需要修改加密方式，请修改参数：ALGO，参数选项：
* HS256
    > 备注：hash 256位
* HS384
    > 备注：hash 384位
* HS512
    > 备注：hash 512位
* RS256
    > 备注：rsa 256位
* RS384
    > 备注：rsa 384位
* RS512
    > 备注：rsa 512位
* ES256
    > 备注：dsa 256位
* ES384
    > 备注：dsa 384位
* ES512
    > 备注：dsa 512位

> 重要：RSA和DSA 都是非对称加密方式，除了修改参数ALGO外，需要配置：PUBLIC_KEY、PRIVATE_KEY两个参数，
> 这两个参数**只支持**密钥文件路径。如果密钥设置了密码，请配置好参数：PASSWORD

## 安装

第一步:

```shell
$ composer require thans/tp-jwt-auth
```


第二步:

```shell
$ php think jwt:create
```
此举将生成jwt.php和.env配置文件。不推荐直接修改jwt.php
同时，env中会随机生成secret。请不要随意更新secret，也请保障secret安全。


## 使用方式

对于需要验证的路由或者模块添加中间件：
```php
 thans\jwt\middleware\JWTAuth::class,
```

示例：

```php
use thans\jwt\facade\JWTAuth;

$token = JWTAuth::builder(['uid' => 1]);//参数为用户认证的信息，请自行添加

JWTAuth::auth();//token验证

JWTAuth::refresh();//刷新token，会将旧token加入黑名单

$tokenStr = JWTAuth::token()->get(); //可以获取请求中的完整token字符串

$payload = JWTAuth::auth(); //可验证token, 并获取token中的payload部分
$uid = $payload['uid']; //可以继而获取payload里自定义的字段，比如uid

```
token刷新说明：

> token默认有效期为60秒，如果需要修改请修改env文件。
> refresh_ttl为刷新token有效期参数，单位为分钟。默认有效期14天。
> token过期后，旧token将会被加入黑名单。
> 如果需要自动刷新，请使用中间件  thans\jwt\middleware\JWTAuthAndRefresh::class,
> 自动刷新后会通过header返回，请保存好。（注意，此中间件过期后第一次访问正常，第二次进入黑名单。）


token传参方式如下：

> 可通过jwt.php配置文件内token_mode参数来调整参数接收方式及优先级
> token_mode默认值为['header', 'cookie', 'param'];

> 在某些前后端分离的情况下可选择取消cookie接收方式来避免token冲突

- 将token加入到url中作为参数。键名为token
- 将token加入到cookie。键名为token
- 将token加入header，如下：Authorization:bearer token值
- 以上三种方式，任选其一即可。推荐加入header中。

#### 其他操作
1. 拉黑Token JWTAuth::invalidate($token);
2. 查询Token是否黑名单 JWTAuth::validate($token);

#### 常见问题
- 使用RSA256方式的时候，请使用文本形式。如下：

## 联系&打赏

[打赏名单](SUPPORT.md)

![image](https://img.thans.cn/wechat.jpg)

## 参考与借鉴

https://github.com/tymondesigns/jwt-auth

## 感谢

- jwt-auth
- php
- lcobucci/jwt
- thinkphp

## 下一步

- 支持动态配置

## License

MIT
