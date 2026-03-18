<?php

require dirname(__FILE__, 2) . '/vendor/autoload.php';

$secretId = "SECRETID"; //替换为用户的 secretId，请登录访问管理控制台进行查看和管理，https://console.cloud.tencent.com/cam/capi
$secretKey = "SECRETKEY"; //替换为用户的 secretKey，请登录访问管理控制台进行查看和管理，https://console.cloud.tencent.com/cam/capi
$region = "ap-beijing"; //替换为用户的 region，已创建桶归属的region可以在控制台查看，https://console.cloud.tencent.com/cos5/bucket
$cosClient = new Qcloud\Cos\Client(
    array(
        'region' => $region,
        'scheme' => 'https', // 审核时必须为https
        'credentials' => array(
            'secretId' => $secretId,
            'secretKey' => $secretKey)));
try {
    //存储桶图片审核
    $result = $cosClient->detectImage(array(
        'Bucket' => 'examplebucket-125000000', //存储桶名称，由BucketName-Appid 组成，可以在COS控制台查看 https://console.cloud.tencent.com/cos5/bucket
        'Key' => 'test.png', // 桶文件
        'ci-process' => 'sensitive-content-recognition',
//        'BizType' => '', // 可选 定制化策略，不传走默认策略
//        'Interval' => 5, // 可选 审核 GIF 时使用 截帧的间隔
//        'MaxFrames' => 5, // 可选 针对 GIF 动图审核的最大截帧数量，需大于0。
//        'LargeImageDetect' => '',
//        'DataId' => '',
//        'Async' => '',
//        'Callback' => '',
    ));
    // 请求成功
    print_r($result);


    //图片链接审核
    $imgUrl = 'https://test.jpg';
    $result = $cosClient->detectImage(array(
        'Bucket' => 'examplebucket-125000000', //存储桶名称，由BucketName-Appid 组成，可以在COS控制台查看 https://console.cloud.tencent.com/cos5/bucket
        'Key' => '/', // 链接图片资源路径写 / 即可
        'ci-process' => 'sensitive-content-recognition',
        'DetectUrl' => $imgUrl,
//        'BizType' => '', // 可选 定制化策略，不传走默认策略
//        'Interval' => 5, // 可选 审核 GIF 时使用 截帧的间隔
//        'MaxFrames' => 5, // 可选 针对 GIF 动图审核的最大截帧数量，需大于0。
//        'LargeImageDetect' => '',
//        'DataId' => '',
//        'Async' => '',
//        'Callback' => '',
    ));
    // 请求成功
    print_r($result);
} catch (\Exception $e) {
    // 请求失败
    echo($e);
}
