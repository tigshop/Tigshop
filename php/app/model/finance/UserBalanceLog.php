<?php
//**---------------------------------------------------------------------+
//** 模型文件 -- 余额日志
//**---------------------------------------------------------------------+
//** 版权所有：江西佰商科技有限公司. 官网：https://www.tigshop.com
//**---------------------------------------------------------------------+
//** 作者：Tigshop团队，yq@tigshop.com
//**---------------------------------------------------------------------+
//** 提示：Tigshop商城系统为非免费商用系统，未经授权，严禁使用、修改、发布
//**---------------------------------------------------------------------+

namespace app\model\finance;

use app\model\user\User;
use think\Model;
use utils\Time;
use utils\Util;

class UserBalanceLog extends Model
{
    protected $pk = 'log_id';
    protected $table = 'user_balance_log';
    protected $createTime = "change_time";
    protected $autoWriteTimestamp = true;

    // 关联用户
    public function user()
    {
        return $this->hasOne(User::class, 'user_id', 'user_id')
            ->bind(["username", "after_balance" => "balance"]);
    }

    //变动类型
    const CHANGE_TYPE_INCREASE = 1;
    const CHANGE_TYPE_DECREASE = 2;
    const CHANGE_TYPE_OTHER = 99;
    const CHANGE_TYPE_NAME = [
        self::CHANGE_TYPE_INCREASE => '增加',
        self::CHANGE_TYPE_DECREASE => '减少',
        self::CHANGE_TYPE_OTHER => '其他',
    ];


    public function getChangeTypeNameAttr($value, $data)
    {
        return Util::lang(self::CHANGE_TYPE_NAME[$data["change_type"]]) ?? "";
    }

    public function getChangeTimeAttr($value)
    {
        return Time::format($value);
    }

    public function getChangeDescAttr($value, $data)
    {

        if (php_sapi_name() != 'cli' && !empty(request()->header('X-Locale-Code'))) {
            $cache = Util::lang($value);
            if ($cache) {
                return $cache;
            } else {
                return $value;
            }
        } else {
            return $value;
        }
    }


    // 操作时间检索
    public function scopeChangeTime($query, $value)
    {
        if (!empty($value)) {
            list($start_date, $end_date) = $value;
            $start_date = Time::toTime($start_date);
            $end_date = Time::toTime($end_date) + 86400;
            $value = [$start_date, $end_date];
            return $query->whereTime("change_time", 'between', $value);
        }
    }

    // 变动前的余额
    public function getBeforeBalanceAttr($value, $data)
    {

        if(empty($this->user)){
            return 0;
        }
        $balance =  $this->user->balance;
        return $data['change_type'] == self::CHANGE_TYPE_INCREASE ? Util::number_format_convert($balance - $data['balance']) : Util::number_format_convert($balance + $data['balance']);
    }

    // 变动前的冻结余额
    public function getBeforeFrozenBalanceAttr($value, $data)
    {
        if(empty($this->user)){
            return 0;
        }
        $frozen_balance = $this->user->frozen_balance;
        return $data['change_type'] == self::CHANGE_TYPE_INCREASE ? Util::number_format_convert($frozen_balance - $data['frozen_balance']) : Util::number_format_convert($frozen_balance + $data['frozen_balance']);
    }

}
