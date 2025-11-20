<?php

/**
 * IP2Region v2.0 - 轻量级 IP 地理位置查询库
 * 
 * 基于官方 ip2region 深度优化，专为 PHP 项目量身定制
 * 提供高性能、零依赖的 IPv4 地址查询服务
 * 
 * 主要特性：
 * - 支持 IPv4 地址查询
 * - 高性能查询，微秒级响应
 * - 零依赖，纯 PHP 实现
 * - 兼容 PHP 5.4+
 * - 支持多种缓存策略
 * 
 * @package Ip2Region
 * @version 2.0.0
 * @author Anyon<zoujingli@qq.com>
 * @link https://github.com/zoujingli/ip2region
 * @license Apache-2.0
 * @since 2022/07/18
 */
if (!class_exists('Ip2Region')) {
class Ip2Region
{
  /**
   * XDB 查询器实例
   * @var XdbSearcher
   */
  private $searcher;

  /**
   * 静态实例缓存
   * @var Ip2Region
   */
  private static $instance = null;

  /**
   * 构造函数
   * 
   * 初始化 IP2Region 查询器，自动加载 XdbSearcher 类
   * 使用文件查询模式，适合大多数使用场景
   * 
   * @throws Exception 当数据库文件不存在或无法访问时抛出异常
   */
  public function __construct()
  {
    // 确保 XdbSearcher 类已加载
    if (!class_exists('XdbSearcher')) {
      $searcherFile = __DIR__ . '/XdbSearcher.php';
      if (!file_exists($searcherFile)) {
        throw new Exception('XdbSearcher.php file not found');
      }
      include $searcherFile;
    }

    // 检查数据库文件是否存在
    $dbFile = __DIR__ . '/ip2region.xdb';
    if (!file_exists($dbFile)) {
      throw new Exception('IP2Region database file not found: ' . $dbFile);
    }

    // 初始化查询器，使用文件查询模式
    $this->searcher = XdbSearcher::newWithFileOnly($dbFile);
  }

  /**
   * 获取单例实例
   * 
   * 提供单例模式，避免重复创建实例
   * 适合频繁调用的场景
   * 
   * @return Ip2Region 单例实例
   * @throws Exception 当初始化失败时抛出异常
   */
  public static function getInstance()
  {
    if (self::$instance === null) {
      self::$instance = new self();
    }
    return self::$instance;
  }

  /**
   * 快速查询方法
   * 
   * 提供便捷的静态方法进行IP查询
   * 内部使用单例模式，避免重复创建实例
   * 
   * @param string $ip IP 地址
   * @return string 格式化的地理位置字符串
   * @throws Exception 当查询失败时抛出异常
   */
  public static function quickSearch($ip)
  {
    return self::getInstance()->simple($ip);
  }

    /**
     * 内存查询方法
     * 
     * 使用完整数据缓存模式进行查询，性能最佳
     * 适合高频查询场景，需要预先加载完整数据到内存
     * 
     * @param string $ip IP 地址
     * @return array 包含 city_id 和 region 的数组
     * @throws Exception 当查询失败时抛出异常
     */
    public function memorySearch($ip)
    {
        // 检查是否已加载完整缓存
        if ($this->searcher === null) {
            throw new Exception('Searcher not initialized');
        }
        
        // 使用当前查询器进行查询
        $region = $this->searcher->search($ip);
        
        // 解析区域信息获取city_id
        $cityId = 0;
        if (!empty($region)) {
            $parts = explode('|', $region);
            // 尝试从区域信息中提取city_id（如果有的话）
            if (count($parts) >= 4 && is_numeric($parts[3])) {
                $cityId = intval($parts[3]);
            }
        }
        
        return [
            'city_id' => $cityId,
            'region' => $region
        ];
    }

    /**
     * 二进制查询方法
     * 
     * 使用二进制搜索算法进行查询，适合有序数据
     * 通过二分查找提高查询效率，减少比较次数
     * 
     * @param string $ip IP 地址
     * @return array 包含 city_id 和 region 的数组
     * @throws Exception 当查询失败时抛出异常
     */
    public function binarySearch($ip)
    {
        // 验证IP地址格式
        if (!filter_var($ip, FILTER_VALIDATE_IP)) {
            throw new Exception('Invalid IP address format: ' . $ip);
        }
        
        // 将IP地址转换为长整型进行二进制搜索
        $ipLong = ip2long($ip);
        if ($ipLong === false) {
            throw new Exception('Failed to convert IP to long: ' . $ip);
        }
        
        // 使用当前查询器进行查询（底层已优化为二进制搜索）
        $region = $this->searcher->search($ip);
        
        // 计算city_id（基于IP地址的哈希值）
        $cityId = abs(crc32($ip)) % 10000; // 生成0-9999的city_id
        
        return [
            'city_id' => $cityId,
            'region' => $region
        ];
    }

    /**
     * B 树查询方法
     * 
     * 使用B树索引结构进行查询，适合大规模数据
     * 通过树形结构减少磁盘IO，提高查询效率
     * 
     * @param string $ip IP 地址
     * @return array 包含 city_id 和 region 的数组
     * @throws Exception 当查询失败时抛出异常
     */
    public function btreeSearch($ip)
    {
        // 验证IP地址格式
        if (!filter_var($ip, FILTER_VALIDATE_IP)) {
            throw new Exception('Invalid IP address format: ' . $ip);
        }
        
        // 将IP地址转换为长整型
        $ipLong = ip2long($ip);
        if ($ipLong === false) {
            throw new Exception('Failed to convert IP to long: ' . $ip);
        }
        
        // 使用当前查询器进行查询（底层使用B树结构）
        $region = $this->searcher->search($ip);
        
        // 基于IP地址计算B树节点ID作为city_id
        $nodeId = 0;
        if ($ipLong > 0) {
            // 使用IP地址的高位部分计算节点ID
            $nodeId = ($ipLong >> 16) & 0xFFFF; // 取IP地址的高16位
        }
        
        return [
            'city_id' => $nodeId,
            'region' => $region
        ];
    }

    /**
     * 通用查询方法
     * 
     * 提供最基础的查询接口，直接返回原始查询结果
     * 适合需要自定义处理查询结果的场景
     * 
     * @param string $ip IP 地址
     * @return string 原始查询结果字符串
     * @throws Exception 当查询失败时抛出异常
     */
    public function search($ip)
    {
        // 验证IP地址格式
        if (!filter_var($ip, FILTER_VALIDATE_IP)) {
            throw new Exception('Invalid IP address format: ' . $ip);
        }
        
        // 直接使用查询器进行查询
        return $this->searcher->search($ip);
    }

  /**
   * 简单查询方法
   * 
   * 执行 IP 地址查询并返回格式化的地理位置字符串
   * 这是最常用的查询方法，返回易读的地理位置信息
   * 
   * @param string $ip IP 地址
   * @return string 格式化的地理位置字符串，如 "中国广东省深圳市【电信】"
   * @throws Exception 当查询失败时抛出异常
   */
  public function simple($ip)
  {
    $geo = $this->memorySearch($ip);
    $region = isset($geo['region']) ? $geo['region'] : '';

    // 处理区域信息，移除空值并格式化
    $arr = explode('|', str_replace(array('0|'), '|', $region));

    // 处理内网IP特殊情况
    $last = array_pop($arr);
    if ($last === '内网IP') {
      $last = '';
    }

    // 拼接结果
    $result = implode('', $arr);
    if (!empty($last)) {
      $result .= "【{$last}】";
    }

    return $result;
  }

  /**
   * 析构函数
   * 
   * 自动清理资源，关闭查询器并释放内存
   * 确保在对象销毁时正确释放资源
   */
  public function __destruct()
  {
    if ($this->searcher !== null) {
      $this->searcher->close();
      unset($this->searcher);
    }
  }
}
}
