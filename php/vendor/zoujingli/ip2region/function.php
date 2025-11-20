<?php
/**
 * IP2Region v2.0 通用函数
 * 
 * 提供便捷的IP查询函数接口，与V3.0版本保持接口一致
 * 
 * @package Ip2Region
 * @version 2.0.0
 * @author Anyon <zoujingli@qq.com>
 * @link https://github.com/zoujingli/ip2region
 * @license Apache-2.0
 * @since 2022/07/18
 */

// 确保Ip2Region类已加载
if (!class_exists('Ip2Region')) {
    require_once __DIR__ . '/Ip2Region.php';
}

/**
 * 通用IP查询函数
 * 
 * 提供最便捷的IP查询接口，支持多种查询方式
 * 这是V2.0版本的通用查询函数，与V3.0保持接口一致
 * 
 * @param string $ip IP地址
 * @param string $method 查询方法，支持：memory, binary, btree, search, simple
 * @return mixed 查询结果，根据方法不同返回不同格式
 * @throws Exception 当IP地址无效或查询失败时抛出异常
 * 
 * @example
 * // 简单查询
 * echo ip2region('8.8.8.8'); // 美国【Level3】
 * 
 * // 指定查询方法
 * $result = ip2region('8.8.8.8', 'memory'); // ['city_id' => 0, 'region' => '美国|0|0|Level3']
 * $result = ip2region('8.8.8.8', 'binary'); // ['city_id' => 7869, 'region' => '美国|0|0|Level3']
 * $result = ip2region('8.8.8.8', 'btree');  // ['city_id' => 2056, 'region' => '美国|0|0|Level3']
 * $result = ip2region('8.8.8.8', 'search'); // 美国|0|0|Level3
 * $result = ip2region('8.8.8.8', 'simple'); // 美国【Level3】
 */
if (!function_exists('ip2region')) {
    function ip2region($ip, $method = 'simple')
    {
        // 验证IP地址格式
        if (!filter_var($ip, FILTER_VALIDATE_IP)) {
            throw new Exception('Invalid IP address format: ' . $ip);
        }
        
        // 创建查询器实例
        $ip2region = new Ip2Region();
        
        // 根据方法名调用相应的查询方法
        switch (strtolower($method)) {
            case 'memory':
                return $ip2region->memorySearch($ip);
                
            case 'binary':
                return $ip2region->binarySearch($ip);
                
            case 'btree':
                return $ip2region->btreeSearch($ip);
                
            case 'search':
                return $ip2region->search($ip);
                
            case 'simple':
            default:
                return $ip2region->simple($ip);
        }
    }
}
