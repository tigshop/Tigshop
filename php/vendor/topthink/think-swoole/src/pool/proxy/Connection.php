<?php

namespace think\swoole\pool\proxy;

use Psr\SimpleCache\CacheInterface;
use think\db\BaseQuery;
use think\db\ConnectionInterface;
use think\DbManager;
use think\swoole\pool\Proxy;

/**
 * Class Connection
 * @package think\swoole\pool\db
 * @property ConnectionInterface $handler
 */
class Connection extends Proxy implements ConnectionInterface
{

    /**
     * 获取当前连接器类对应的Query类
     * @access public
     * @return string
     */
    public function getQueryClass(): string
    {
        return $this->__call(__FUNCTION__, func_get_args());
    }

    /**
     * 连接数据库方法
     * @access public
     * @param array $config 接参数
     * @param integer $linkNum 连接序号
     * @return mixed
     */
    public function connect(array $config = [], $linkNum = 0)
    {
        return $this->__call(__FUNCTION__, func_get_args());
    }

    /**
     * 设置当前的数据库Db对象
     * @access public
     * @param DbManager $db
     * @return void
     */
    public function setDb(DbManager $db)
    {
        return $this->__call(__FUNCTION__, func_get_args());
    }

    /**
     * 设置当前的缓存对象
     * @access public
     * @param CacheInterface $cache
     * @return void
     */
    public function setCache(CacheInterface $cache)
    {
        return $this->__call(__FUNCTION__, func_get_args());
    }

    /**
     * 获取数据库的配置参数
     * @access public
     * @param string $config 配置名称
     * @return mixed
     */
    public function getConfig(string $config = '')
    {
        return $this->__call(__FUNCTION__, func_get_args());
    }

    /**
     * 关闭数据库（或者重新连接）
     * @access public
     */
    public function close()
    {
        return $this->__call(__FUNCTION__, func_get_args());
    }

    /**
     * 查找单条记录
     * @access public
     * @param BaseQuery $query 查询对象
     * @return array
     */
    public function find(BaseQuery $query): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
    }

    /**
     * 查找记录
     * @access public
     * @param BaseQuery $query 查询对象
     * @return array
     */
    public function select(BaseQuery $query): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
    }

    /**
     * 插入记录
     * @access public
     * @param BaseQuery $query 查询对象
     * @param boolean $getLastInsID 返回自增主键
     * @return mixed
     */
    public function insert(BaseQuery $query, bool $getLastInsID = false)
    {
        return $this->__call(__FUNCTION__, func_get_args());
    }

    /**
     * 批量插入记录
     * @access public
     * @param BaseQuery $query 查询对象
     * @param mixed $dataSet 数据集
     * @return integer
     * @throws \Exception
     * @throws \Throwable
     */
    public function insertAll(BaseQuery $query, array $dataSet = []): int
    {
        return $this->__call(__FUNCTION__, func_get_args());
    }

    /**
     * 更新记录
     * @access public
     * @param BaseQuery $query 查询对象
     * @return integer
     */
    public function update(BaseQuery $query): int
    {
        return $this->__call(__FUNCTION__, func_get_args());
    }

    /**
     * 删除记录
     * @access public
     * @param BaseQuery $query 查询对象
     * @return int
     */
    public function delete(BaseQuery $query): int
    {
        return $this->__call(__FUNCTION__, func_get_args());
    }

    /**
     * 得到某个字段的值
     * @access public
     * @param BaseQuery $query 查询对象
     * @param string $field 字段名
     * @param mixed $default 默认值
     * @return mixed
     */
    public function value(BaseQuery $query, string $field, $default = null)
    {
        return $this->__call(__FUNCTION__, func_get_args());
    }

    /**
     * 得到某个列的数组
     * @access public
     * @param BaseQuery $query 查询对象
     * @param string|array $column 字段名 多个字段用逗号分隔
     * @param string $key 索引
     * @return array
     */
    public function column(BaseQuery $query, $column, string $key = ''): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
    }

    /**
     * 执行数据库事务
     * @access public
     * @param callable $callback 数据操作方法回调
     * @return mixed
     * @throws \Throwable
     */
    public function transaction(callable $callback)
    {
        return $this->__call(__FUNCTION__, func_get_args());
    }

    /**
     * 启动事务
     * @access public
     * @return void
     * @throws \Exception
     */
    public function startTrans()
    {
        return $this->__call(__FUNCTION__, func_get_args());
    }

    /**
     * 用于非自动提交状态下面的查询提交
     * @access public
     * @return void
     */
    public function commit()
    {
        return $this->__call(__FUNCTION__, func_get_args());
    }

    /**
     * 事务回滚
     * @access public
     * @return void
     */
    public function rollback()
    {
        return $this->__call(__FUNCTION__, func_get_args());
    }

    /**
     * 获取最近一次查询的sql语句
     * @access public
     * @return string
     */
    public function getLastSql(): string
    {
        return $this->__call(__FUNCTION__, func_get_args());
    }

    public function table($table)
    {
        return $this->__call(__FUNCTION__, func_get_args());
    }

    public function name($name)
    {
        return $this->__call(__FUNCTION__, func_get_args());
    }

    public function getLastInsID(BaseQuery $query, string $sequence = null)
    {
        return $this->__call(__FUNCTION__, func_get_args());
    }

    public function getTableFields(string $tableName): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
    }
}
