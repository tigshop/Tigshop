<?php
/**
 * IP2Region v2.0 测试文件
 * 
 * 测试重新实现的查询方法，展示不同算法的特点
 * 运行方式: php _test.php
 * 
 * @author Anyon <zoujingli@qq.com>
 * @version 2.0.0
 */

// 建议使用 php _test.php 命令行运行测试文件

require 'vendor/autoload.php';

$ip2region = new Ip2Region();

echo "===========================================" . PHP_EOL;
echo "IP2Region v2.0 查询方法测试" . PHP_EOL;
echo "===========================================" . PHP_EOL;

// 测试固定IP地址（使用真实IP）
$testIPs = array(
    '61.142.118.231' => '中国广东省深圳市电信',
    '202.96.134.133' => '中国北京北京市联通',
    '180.76.76.76' => '中国北京北京市百度',
    '114.114.114.114' => '中国江苏省南京市114DNS',
    '223.5.5.5' => '中国浙江省杭州市阿里云DNS',
    '101.226.4.6' => '中国上海上海市腾讯DNS',
    '119.29.29.29' => '中国广东省深圳市腾讯DNS',
    '182.254.116.116' => '中国广东省深圳市腾讯云'
);

echo PHP_EOL . "【固定IP测试】" . PHP_EOL;
foreach ($testIPs as $ip => $desc) {
    echo PHP_EOL . "测试IP: {$ip} ({$desc})" . PHP_EOL;
    echo "----------------------------------------" . PHP_EOL;
    
    // 测试所有查询方法
    echo "1. memorySearch (内存查询): ";
    $result = $ip2region->memorySearch($ip);
    echo "city_id={$result['city_id']}, region={$result['region']}" . PHP_EOL;
    
    echo "2. binarySearch (二进制查询): ";
    $result = $ip2region->binarySearch($ip);
    echo "city_id={$result['city_id']}, region={$result['region']}" . PHP_EOL;
    
    echo "3. btreeSearch (B树查询): ";
    $result = $ip2region->btreeSearch($ip);
    echo "city_id={$result['city_id']}, region={$result['region']}" . PHP_EOL;
    
    echo "4. search (通用查询): ";
    echo $ip2region->search($ip) . PHP_EOL;
    
    echo "5. simple (简单查询): ";
    echo $ip2region->simple($ip) . PHP_EOL;
    
    echo "6. ip2region函数 (通用查询): ";
    echo ip2region($ip) . PHP_EOL;
}

// 随机IP测试
echo PHP_EOL . "【随机IP测试】" . PHP_EOL;
for ($i = 0; $i < 5; $i++) {
    testRandomIP();
}

// ip2region函数测试
echo PHP_EOL . "【ip2region函数测试】" . PHP_EOL;
testIp2regionFunction();

// 错误处理测试
echo PHP_EOL . "【错误处理测试】" . PHP_EOL;
testErrorHandling();

echo PHP_EOL . "===========================================" . PHP_EOL;
echo "测试完成！" . PHP_EOL;
echo "===========================================" . PHP_EOL;

function getIp()
{
    $ip_long = array(
        array('607649792', '608174079'), // 36.56.0.0-36.63.255.255
        array('1038614528', '1039007743'), // 61.232.0.0-61.237.255.255
        array('1783627776', '1784676351'), // 106.80.0.0-106.95.255.255
        array('2035023872', '2035154943'), // 121.76.0.0-121.77.255.255
        array('2078801920', '2079064063'), // 123.232.0.0-123.235.255.255
        array('-1950089216', '-1948778497'), // 139.196.0.0-139.215.255.255
        array('-1425539072', '-1425014785'), // 171.8.0.0-171.15.255.255
        array('-1236271104', '-1235419137'), // 182.80.0.0-182.92.255.255
        array('-770113536', '-768606209'), // 210.25.0.0-210.47.255.255
        array('-569376768', '-564133889'), // 222.16.0.0-222.95.255.255
    );
    $rkey = mt_rand(0, 9);
    return long2ip(mt_rand($ip_long[$rkey][0], $ip_long[$rkey][1]));
}

function testRandomIP()
{
    $ip = getIp();
    global $ip2region;

    echo PHP_EOL . "随机IP: {$ip}" . PHP_EOL;
    echo "----------------------------------------" . PHP_EOL;
    
    // 测试主要查询方法
    echo "memorySearch: city_id=" . $ip2region->memorySearch($ip)['city_id'] . PHP_EOL;
    echo "binarySearch: city_id=" . $ip2region->binarySearch($ip)['city_id'] . PHP_EOL;
    echo "btreeSearch: city_id=" . $ip2region->btreeSearch($ip)['city_id'] . PHP_EOL;
    echo "simple: " . $ip2region->simple($ip) . PHP_EOL;
    echo "ip2region函数: " . ip2region($ip) . PHP_EOL;
}

function testIp2regionFunction()
{
    $testIP = '61.142.118.231';
    echo PHP_EOL . "测试IP: {$testIP} (中国广东省深圳市)" . PHP_EOL;
    echo "----------------------------------------" . PHP_EOL;
    
    // 测试所有ip2region函数的方法
    echo "1. ip2region('{$testIP}'): " . ip2region($testIP) . PHP_EOL;
    echo "2. ip2region('{$testIP}', 'memory'): " . json_encode(ip2region($testIP, 'memory'), JSON_UNESCAPED_UNICODE) . PHP_EOL;
    echo "3. ip2region('{$testIP}', 'binary'): " . json_encode(ip2region($testIP, 'binary'), JSON_UNESCAPED_UNICODE) . PHP_EOL;
    echo "4. ip2region('{$testIP}', 'btree'): " . json_encode(ip2region($testIP, 'btree'), JSON_UNESCAPED_UNICODE) . PHP_EOL;
    echo "5. ip2region('{$testIP}', 'search'): " . ip2region($testIP, 'search') . PHP_EOL;
    echo "6. ip2region('{$testIP}', 'simple'): " . ip2region($testIP, 'simple') . PHP_EOL;
    
    // 测试不同真实IP
    $testIPs = array(
        '202.96.134.133' => '中国北京北京市联通',
        '180.76.76.76' => '中国北京北京市百度',
        '101.226.4.6' => '中国上海上海市腾讯DNS'
    );
    foreach ($testIPs as $ip => $desc) {
        echo PHP_EOL . "测试IP: {$ip} ({$desc})" . PHP_EOL;
        echo "  ip2region(): " . ip2region($ip) . PHP_EOL;
        echo "  ip2region('memory'): city_id=" . ip2region($ip, 'memory')['city_id'] . PHP_EOL;
        echo "  ip2region('binary'): city_id=" . ip2region($ip, 'binary')['city_id'] . PHP_EOL;
        echo "  ip2region('btree'): city_id=" . ip2region($ip, 'btree')['city_id'] . PHP_EOL;
    }
}

function testErrorHandling()
{
    global $ip2region;
    
    $invalidIPs = array(
        'invalid-ip',
        '256.256.256.256',
        'not-an-ip',
        '192.168.1.999'
    );
    
    foreach ($invalidIPs as $ip) {
        echo PHP_EOL . "测试无效IP: {$ip}" . PHP_EOL;
        try {
            $ip2region->binarySearch($ip);
            echo "错误: 应该抛出异常但没有" . PHP_EOL;
        } catch (Exception $e) {
            echo "正确: " . $e->getMessage() . PHP_EOL;
        }
    }
    
    // 测试ip2region函数的错误处理
    echo PHP_EOL . "测试ip2region函数错误处理:" . PHP_EOL;
    try {
        ip2region('invalid-ip');
        echo "错误: 应该抛出异常但没有" . PHP_EOL;
    } catch (Exception $e) {
        echo "正确: " . $e->getMessage() . PHP_EOL;
    }
}