cos-php-sdk-v5 Upgrade Guide
====================
2.6.15 to 2.6.16
---------
1. header：x-ci-* 写入签名
2. 补充音视频转码、创建数据集、文档异步处理任务参数
3. 调整人脸特效功能处理detect-url公网图片链接时的请求方式

2.6.14 to 2.6.15
---------
1. 通过API使用极智压缩
2. 图片单次审核同步接口使用URL方式报错问题修复
3. 补充文件提交文件解压任务UnCompressKey参数

2.6.13 to 2.6.14
---------
修复部分问题

2.6.12 to 2.6.13
---------
修复部分问题

2.6.11 to 2.6.12
---------
1. 盲水印支持版本参数
2. 更新sts-sdk demo
3. 压缩包预览
4. hls加密
5. 视频明水印
6. 图片水印支持spacing参数

2.6.10 to 2.6.11
---------
1. 创建数据集
2. 查询数据集
3. 列出数据集
4. 更新数据集
5. 删除数据集
6. 绑定存储桶与数据集
7. 解绑存储桶与数据集
8. 查询数据集与存储桶的绑定关系
9. 查询绑定关系列表
10. 更新元数据索引 
11. 删除元数据索引
12. 创建元数据索引
13. 查询元数据索引
14. 人脸搜索
15. 简单查询
16. 图像检索

2.6.9 to 2.6.10
---------
1. 安全特性

2.6.8 to 2.6.9
---------
1. 开通智能语音服务
2. 查询智能语音服务
3. 关闭智能语音服务
4. 更新智能语音队列
5. 查询智能语音队列
6. 创建音频降噪模板
7. 更新音频降噪模板
8. 提交听歌识曲任务
9. 提交音乐评分任务

2.6.7 to 2.6.8
---------
1. 实时文字翻译
2. 图片标签
3. Logo、游戏场景、人体、宠物、卡证识别
4. 创建、更新视频目标检测模板
5. 提交视频目标检测任务、视频人像抠图任务
6. 关闭AI内容识别服务

2.6.6 to 2.6.7
---------
修复部分问题

2.6.5 to 2.6.6
---------
修复部分问题

2.6.4 to 2.6.5
---------
1. 文字水印支持scatype、spcent参数
2. 支持提交画质增强任务
3. 创建/更新画质增强模板

2.6.3 to 2.6.4
---------
1. 媒体处理转码任务支持闲时转码
2. 搜索图片处理队列
3. 更新图片处理队列
4. 查询图片处理服务状态
5. 查询 AI 内容识别服务状态
6. 开通 AI 内容识别
7. 搜索 AI 内容识别队列
8. 更新 AI 内容识别队列
9. 创建音视频转码 pro 模板
10. 更新音视频转码 pro 模板
11. 创建语音合成模板
12. 更新语音合成模板
13. 创建智能封面模板
14. 更新智能封面模板
15. 创建语音识别模板
16. 更新语音识别模板
17. 提交一个语音合成任务
18. 提交一个翻译任务
19. 提交一个语音识别任务
20. 提交一个分词任务

2.6.2 to 2.6.3
---------
1. 直播审核支持转存到cos存储桶
2. 网页审核支持BizType参数
3. 批量图片审核接口支持加密图片审核
4. 支持加密视频审核
5. 桶文件审核时支持冻结操作
6. 媒体处理、文档预览、文档审核队列ID允许为空

2.6.1 to 2.6.2
---------
修复部分问题

2.6.0 to 2.6.1
---------
1. 多文件打包压缩
2. 文件哈希值计算
3. 文件解压

2.5.6 to 2.6.0
---------
1. 通用文字识别接口
2. 取消存量任务
3. 触发批量存量任务
4. 新增动图模板
5. 新增拼接模板
6. 新增极速高清转码模板
7. 新增图片处理模板
8. 新增截图模板
9. 新增超分辨率模板
10. 新增转码模板
11. 新增精彩集锦模板
12. 新增视频增强模板
13. 新增人声分离模板
14. 新增水印模板
15. 删除工作流
16. 查询存量任务
17. 批量拉取存量任务
18. 查询模版列表
19. 搜索工作流
20. 获取工作流实例详情
21. 获取工作流实例列表
22. 手动触发工作流
23. 更新动图模板
24. 更新拼接模板
25. 更新极速高清转码模板
26. 更新图片处理模板
27. 更新截图模板
28. 更新超分辨率模板
29. 更新转码模板
30. 更新精彩集锦模板
31. 更新视频增强模板
32. 更新人声分离模板
33. 更新水印模板
34. 提交音频降噪任务
35. 图片水印修复
36. 图片处理参数使用demo
37. 开通以图搜图
38. 添加图库图片
39. 图片搜索接口
40. 删除图库图片
41. 绑定数据万象服务
42. 查询数据万象服务
43. 解绑数据万象服务
44. 查询防盗链
45. 设置防盗链
46. 开通原图保护
47. 查询原图保护状态
48. 关闭原图保护
49. 人脸检测
50. 人脸特效
51. 身份证识别
52. 身份证识别-上传时处理
53. 获取数字验证码
54. 获取动作顺序
55. 查询文档预览开通状态
56. 更新文档转码队列
57. 图片审核新增异步审核参数Async，新增部分审核结果参数
58. 媒体处理任务接口新增UserData、JobLevel、CallBackFormat、CallBackType、CallBackMqConfig参数
59. 图片批量审核新增Content参数，可以提交经过base64编码的图片文件内容进行审核
60. 提交视频质量评分任务
61. 提交音视频流分离任务
2.5.5 to 2.5.6
---------
- 创建SDRtoHDR任务	
- 创建添加数字水印任务	
- 创建提取数字水印任务	
- 创建超分任务	
- 创建视频标签	
- 创建图片处理任务	
- 创建转封装任务	
- 审核各接口参数修改
- 直播流审核接口
- 取消直播流审核接口
- 修复全球加速region不存在的问题

2.5.4 to 2.5.5
---------
- fix signHost type error

2.5.3 to 2.5.4
---------
- 新增查询是否开通媒体处理接口
- 新增获取pm3u8签名接口
- 新增查询队列列表接口
- 新增更新队列接口
- 新增查询任务接口
- 新增创建多任务接口
- 新增创建截图任务接口
- 新增创建转码任务接口
- 新增创建动图任务接口
- 新增创建拼接任务接口
- 新增创建智能封面任务接口
- 新增创建视频增强任务接口
- 新增创建精彩集锦任务接口
- 新增创建人声分离任务接口
- 修复signHost值获取不到的问题

2.5.2 to 2.5.3
---------
- 增加ETag的兼容逻辑，防止因为特殊框架或者网关规则导致etag undefined

2.5.1 to 2.5.2
---------
- 修复预签名中Headers参数无效的问题

2.5.0 to 2.5.1
---------
- 万象相关接口的DetectType审核类型参数可选
- 万象内容审核接口增加DataId自定义业务标识
- 新增万象网页审核任务相关接口
- 新增部分参数校验
- 修复PHP8.1中将null传递给不可为空的内部函数的问题

2.4.4 to 2.5.0
---------
- 万象支持病毒检测、人声分离任务接口
- 万象转码任务支持多个水印参数/多任务接口/查询接口/列表接口
- 修复签名长期存在的bug
- 修复copy接口404问题，copyObject示例添加注释
- 审核接口增加仅支持https的说明

2.4.3 to 2.4.4
---------
- 修复图片水印签名问题

2.4.2 to 2.4.3
---------
- 优化审核接口返回相关字段
- 增加host开关功能
- GetObject接口支持万象自定义样式
- 修复ip的host bug

2.4.1 to 2.4.2
---------
- 修复图片处理相关接口403签名不对的bug

2.4.0 to 2.4.1
---------
- 增加桶Bucket、GetBucket对应Sample详细注解
- 对部分传入参数进行检查
- 添加doesObjectExist、doesBucketExist对应Sample
- 调整整体项目架构，修复composer依赖问题
- 调整UT

2.3.4 to 2.4.0
---------
- 新增文档转码功能，包括提交、查询、拉取文档预览任务
- 丰富头域参数说明
- 修复预签名中将万象参数作为key报错问题
- 调整travis与action，后续版本保证多版本测试正常

2.3.3 to 2.3.4
---------
- 修复laravel8中guzzlehttp/psr7报错问题,后续重新整理依赖
- 修复putBucketAccelerate接口与目前API不一致的问题

2.3.2 to 2.3.3
---------
- 修复laravel8中guzzlehttp/psr7报错问题
- 清理无用代码

2.3.1 to 2.3.2
---------
- 新增视频截帧，视频信息查询示例
- 新增PUT/GET Bucket Referer示例
- 对于相应接口添加CRC返回信息
- 修复图片审核中ci-process param出现两次的问题
- 修复PHP5.6 版本的依赖问题
- 根据PHP版本自动composer install guzzle6.x或guzzle7

2.3.0 to 2.3.1
---------
- 修复文本检测的返回格式
- 修复sample中的问题
- 新增视频、文本、文档、音频检测
- 新增媒体转码、截图、拼接

2.2.3 to 2.3.0
---------
- 新增图片审核，视频审核，音频审核，文本审核，文档审核接口
- 新增单链接限速demo
- 暴露getPresigned接口Headers和Params参数接口
- 补充textDetect UT
- 修复stream_for废弃问题
- 修复x-cos头检测逻辑问题
- 修复UT部分bug

2.2.2 to 2.2.3
- 在putObejct中新增x-cos-tagging头
- 修复`GetObjectWithoutSign`bug

2.2.1 to 2.2.2
----------
新增appendObject SDK，包括sample,service,test
增加无签名对象下载地址 SDK，包括sample,service,test
增加全球加速相关配置参数
将COS_SECRETID修改为SECRETID、COS_SECRETKEY修改为SECRETKEY，防止混淆
修复部分逻辑代码bug
修复部分拼写错误
- Add `AppendObject` interface
- Add `GetObjectWithoutSign` interface
- Add `allow_accelerate` param to client
- Change const name `COS_SECRETID->SECRETID` `COS_SECRETKEY->SECRETKEY`
- Fix `getPresigned` interface
- Fix typo

2.2.0 to 2.2.1
----------
- Add `PutObjectTagging` interface
- Add `GetObjectTagging` interface
- Add `DeleteObjectTagging` interface

2.1.6 to 2.2.0
----------
- `PutObject` interface supports ci image process
- `GetObject` interface supports ci image process
- Add `ImageInfo` interface, which is used for get image info
- Add `ImageExif` interface, which is used for get image exif
- Add `ImageAve` interface, which is used for get image ave
- Add `ImageProcess` interface, which is used for data processing on cloud
- Add `Qrcode` interface, which is used for qrcode recognition
- Add `QrcodeGenerate` interface, which is used for generate qrcode
- Add `DetectLabel` interface, which is used for detect image label
- Add `PutBucketImageStyle` interface, which is used for add bucket image style
- Add `GetBucketImageStyle` interface, which is used for get bucket image style
- Add `DeleteBucketImageStyle` interface, which is used for delete bucket image style
- Add `PutBucketGuetzli` interface, which is used for open bucket guetzli state
- Add `GetBucketGuetzli` interface, which is used for get bucket guetzli state
- Add `DeleteBucketGuetzli` interface, which is used for close bucket guetzli state

2.1.5 to 2.1.6
----------
- Add `allow_redirects` parameter
- Fix `selectObjectContent` interface

2.1.3 to 2.1.5
----------
- The `download` interface supports breakpoint
- Rename `getPresignetUrl` to `getPresignedUrl`

2.1.2 to 2.1.3
----------
- Add `download` interface, which is used for concurrent block download
- Add callback of `upload` and `download` progress
- Fix request retry

2.1.1 to 2.1.2
----------
- The interface supports custom parameters
- Fix `ListBucketInventoryConfigurations`

2.1.0 to 2.1.1
----------
- Fix bug of urlencode when calculating signature

2.0.9 to 2.1.0
----------
- `upload` support upload with multithread
- Add `retry` params for interface retry
- Support add customer header
- Signature will restrict part of the header and all parameters
- Fix `listBuckets` with `doamin`

2.0.8 to 2.0.9
----------
- Fix bug of `listObjectVersions`
- Update `getObject` with param of `saveas`

2.0.7 to 2.0.8
----------
- Fix presigned url when using tmpSecretId/tmpSecretKey/Token

2.0.6 to 2.0.7
----------
- Fix response of `ListParts`

2.0.5 to 2.0.6
----------
- Support Domain
- Add Select Object Content Interface
- Add Traffic Limit
- Fix bug of object endswith /

2.0.4 to 2.0.5
----------
- Fix bug when upload object with metadata

2.0.3 to 2.0.4
----------
- Fix bug when using ip-port

2.0.2 to 2.0.3
----------
- Fix path parse bug with /0/

2.0.1 to 2.0.2
----------
- Fix bug of `putObject` with `fopen`
- Add ut


2.0.0 to 2.0.1
----------
- Add interface of inventory/tagging/logging
- Fix bug of some interface with query string


1.3 to 2.0
----------
cos-php-sdk-v5 now uses [GuzzleHttp] for HTTP message.
Due to fact, it depending on PHP >= 5.6.

- Use the `Qcloud\Cos\Client\getPresignetUrl()` method instead of the `Qcloud\Cos\Command\createPresignedUrl()`

v2:
```php
$signedUrl = $cosClient->getPresignetUrl($method='putObject',
                                         $args=['Bucket'=>'examplebucket-1250000000', 'Key'=>'exampleobject', 'Body'=>''],
                                         $expires='+30 minutes');
```

v1:
```php
$command = $cosClient->getCommand('putObject', array(
    'Bucket' => "examplebucket-1250000000",
    'Key' => "exampleobject",
    'Body' => '', 
));
$signedUrl = $command->createPresignedUrl('+30 minutes');
```

- `$copSource` parameters of the `Qcloud\Cos\Client\Copy` interface are no longer compatible with older versions.

v2:

```php
$result = $cosClient->copy( 
    $bucket = '<srcBucket>', 
    $Key = '<srcKey>', 
    $copySorce = array(
        'Region' => '<sourceRegion>', 
        'Bucket' => '<sourceBucket>', 
        'Key' => '<sourceKey>', 
    )
);
```

v1:
```php
$result = $cosClient->Copy(
    $bucket = '<srcBucket>',
    $key = '<srcKey>', 
    $copysource = '<sourceBucket>.cos.<sourceRegion>.myqcloud.com/<sourceKey>'
);
```
- Now when uploading files with using `open()` to upload stream, if the local file does not exist, a 0 byte file will be uploaded without throwing an exception, only a warning.

