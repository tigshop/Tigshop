<?php
//**---------------------------------------------------------------------+
//** 服务层文件 -- 余额日志
//**---------------------------------------------------------------------+
//** 版权所有：江西佰商科技有限公司. 官网：https://www.tigshop.com
//**---------------------------------------------------------------------+
//** 作者：Tigshop团队，yq@tigshop.com
//**---------------------------------------------------------------------+
//** 提示：Tigshop商城系统为非免费商用系统，未经授权，严禁使用、修改、发布
//**---------------------------------------------------------------------+

namespace app\service\admin\finance;

use app\model\finance\UserBalanceLog;
use app\model\user\User;
use app\service\common\BaseService;
use exceptions\ApiException;

/**
 * 余额日志服务类
 */
class UserBalanceLogService extends BaseService
{
    public function __construct()
    {
    }

    /**
     * 获取筛选结果
     *
     * @param array $filter
     * @return array
     */
    public function getFilterResult(array $filter): array
    {
        $query = $this->filterQuery($filter)->with(["user"])->append(["change_type_name", "before_balance", "before_frozen_balance"]);
        $result = $query->page($filter['page'], $filter['size'])->select();
        return $result->toArray();
    }

    /**
     * 获取筛选结果数量
     *
     * @param array $filter
     * @return int
     */
    public function getFilterCount(array $filter): int
    {
        $query = $this->filterQuery($filter);
        $count = $query->count();
        return $count;
    }

    /**
     * 筛选查询
     *
     * @param array $filter
     * @return object
     */
    public function filterQuery(array $filter): object
    {
        $query = UserBalanceLog::query();
        // 处理筛选条件

        if (isset($filter['keyword']) && !empty($filter['keyword'])) {
            $query->where('change_desc', 'like', '%' . $filter['keyword'] . '%');
        }
        if(isset($filter['username']) && !empty($filter['username'])){
            $query->hasWhere('user',function ($query) use ($filter){
                $query->where('username', 'like', '%' . $filter['username'] . '%');
            });
        }
        if (isset($filter['user_id']) && !empty($filter['user_id'])) {
            $query->where('user_id', $filter['user_id']);
        }
        if (isset($filter['balance'])) {
            $query->where('balance', '>', 0);
        }
        if (isset($filter['frozen_balance'])) {
            $query->where('frozen_balance', '>', 0);
        }
        if (isset($filter['sort_field'], $filter['sort_order']) && !empty($filter['sort_field']) && !empty($filter['sort_order'])) {
            $query->order($filter['sort_field'], $filter['sort_order']);
        }
        return $query;
    }

    /**
     * 删除余额日志
     *
     * @param int $id
     * @return bool
     */
    public function deleteUserBalanceLog(int $id): bool
    {
        if (!$id) {
            throw new ApiException(/** LANG */'#id错误');
        }
        $result = UserBalanceLog::destroy($id);
        return $result !== false;
    }

    /**
     * 账户变动
     * @param int $user_id
     * @param array $data
     * @return void
     */
    public function accountChange(int $user_id, array $data = [])
    {


        // 更新用户信息
        $user_info = User::find($user_id);
        $user_info->balance = $data["change_type"] == 1 ? $user_info->balance + $data["balance"] : $user_info->balance - $data["balance"];
        $frozen_balance = $user_info->frozen_balance;
        $user_info->frozen_balance = $data["change_type"] == 1 ? $user_info->frozen_balance + $data["frozen_balance"] : $user_info->frozen_balance - $data["frozen_balance"];

        // 记录余额日志
        $user_balance_log = [
            "user_id" => $user_id,
            "balance" => isset($data["balance"]) ? $data["balance"] : "0.00",
            "frozen_balance" => isset($data["frozen_balance"]) ? $data["frozen_balance"] : "0.00",
            "change_desc" => isset($data["change_desc"]) ? $data["change_desc"] : "",
            "change_type" => isset($data["change_type"]) ? $data["change_type"] : 99,
            "new_balance" => $user_info->balance,
            "new_frozen_balance" => $user_info->balance,
            'before_frozen_balance' => $frozen_balance,
            'after_frozen_balance' => $user_info->frozen_balance,

        ];
        UserBalanceLog::create($user_balance_log);
        $user_info->save();
    }

}
