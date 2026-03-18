<?php
//**---------------------------------------------------------------------+
//** 服务层文件 -- 会员
//**---------------------------------------------------------------------+
//** 版权所有：江西佰商科技有限公司. 官网：https://www.tigshop.com
//**---------------------------------------------------------------------+
//** 作者：Tigshop团队，yq@tigshop.com
//**---------------------------------------------------------------------+
//** 提示：Tigshop商城系统为非免费商用系统，未经授权，严禁使用、修改、发布
//**---------------------------------------------------------------------+

namespace app\service\admin\user;

use app\model\finance\RefundApply;
use app\model\finance\UserBalanceLog;
use app\model\order\Order;
use app\model\product\Product;
use app\model\user\User;
use app\model\user\UserGrowthPointsLog;
use app\model\user\UserPointsLog;
use app\model\user\UserRank;
use app\service\admin\authority\AccessTokenService;
use app\service\admin\common\email\EmailService;
use app\service\admin\common\sms\SmsService;
use app\service\common\BaseService;
use app\validate\user\UserValidate;
use exceptions\ApiException;
use log\AdminLog;
use think\facade\Cache;
use think\facade\Db;
use utils\Config;
use utils\Time;
use utils\Util;

/**
 * 会员服务类
 */
class UserService extends BaseService
{
    protected User $userModel;
    protected UserValidate $userValidate;

    public function __construct(User $userModel)
    {
        $this->userModel = $userModel;
    }

    /**
     * 获取筛选结果
     *
     * @param array $filter
     * @return array
     */
    public function getFilterResult(array $filter): array
    {
        $query = $this->filterQuery($filter)->with(["user_rank"])->append(['from_tag_name']);
        if (isset($filter['is_page']) && $filter["is_page"]) {
            $result = $query->field("user_id,username,nickname")->select();
        } else {
            $result = $query->page($filter['page'], $filter['size'])->select();
        }
        foreach ($result as $key => $value) {
            //重新统计消费次数
            $result[$key]['order_count'] = Order::where('user_id', $value['user_id'])->where('pay_status', 2)->count();
            //统计售后成功次数
            $refund_apply_success = RefundApply::where('user_id', $value['user_id'])->where('refund_status', 2)->count();
            $count = $result[$key]['order_count'] - $refund_apply_success;
            $result[$key]['order_count'] = max($count, 0);
            //重新统计消费金额
            $result[$key]['order_amount'] = Order::where('user_id', $value['user_id'])->where('pay_status',
                2)->sum('total_amount');
            //统计售后成功金额
            $refund = RefundApply::where('user_id', $value['user_id'])->where('refund_status',
                2)->field([
                'SUM(online_balance) AS total_online',
                'SUM(offline_balance) AS total_offline',
                'SUM(refund_balance) AS total_refund'
            ])->find();
            if($refund) {
                $totalOnline = $refund->total_online ?? '0';
                $totalOffline = $refund->total_offline ?? '0';
                $totalRefund = $refund->total_refund ?? '0';
                $amount = bcadd($totalOnline, $totalOffline, 2);
                $res_amount = bcadd($amount, $totalRefund, 2);
                $sub = bcsub( $result[$key]['order_amount'], $res_amount, 2);
                $result[$key]['order_amount'] = max($sub, 0);
            }

        }
        return $result->toArray();
    }

    /**
     * 重置次数和金额
     * @param $user_id
     * @param $amount
     * @return void
     */
    public function resetUserOrderCountAndAmount($user_id, $amount)
    {
        $user = User::where('user_id', $user_id)->find();
        if($user->order_count - 1 < 0) {
            $user->order_count = 0;
        } else {
            $user->order_count = $user->order_count - 1;
        }
        if(bcsub($user->order_amount, $amount,2) < 0) {
            $user->order_amount = 0;
        } else {
            $user->order_amount = bcsub($user->order_amount, $amount,2);
        }
        $user->save();
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
    protected function filterQuery(array $filter): object
    {
        $query = User::query();
        // 处理筛选条件

        if (isset($filter['keyword']) && !empty($filter['keyword'])) {
            $query->where(function ($query) use ($filter) {
                $query->where('username', 'like', '%' . $filter['keyword'] . '%')
                    ->whereOr('mobile', 'like', '%' . $filter['keyword'] . '%')
                    ->whereOr('email', 'like', '%' . $filter['keyword'] . '%');
            });
        }

        // 来源筛选
        if (isset($filter['from_tag']) && $filter["from_tag"] > 0) {
            $query->where('from_tag', $filter['from_tag']);
        }

        // 会员等级
        if (isset($filter['rank_id']) && $filter["rank_id"] > 0) {
            $query->where('rank_id', $filter['rank_id']);
        }

        // 可用金额
        if (isset($filter['balance']) && !empty($filter["balance"])) {
            $query->where('balance', '>', $filter["balance"]);
        }

        // 积分检索
        if (isset($filter['points_gt']) && !empty($filter["points_gt"])) {
            $query->where('points', '>', $filter["points_gt"]);
        }

        // 注册时间
        if (isset($filter['reg_time']) && !empty($filter['reg_time'])) {
            $filter['reg_time'] = is_array($filter['reg_time']) ? $filter['reg_time'] : explode(',', $filter['reg_time']);
            list($start_date, $end_date) = $filter['reg_time'];
            $start_date = Time::toTime($start_date);
            $end_date = Time::toTime($end_date) + 86400;
            $query->whereTime('reg_time', "between", [$start_date, $end_date]);
        }

        if (isset($filter['points_lt']) && !empty($filter["points_lt"])) {
            $query->where('points', '<', $filter["points_lt"]);
        }

        //查询分销员用有的会员id
        if(isset($filter['user_ids']) && !empty($filter['user_ids'])) {
            $user_ids = explode(',', $filter['user_ids']);
            $query->whereIn('user_id', $user_ids);
        }


        if (isset($filter['sort_field'], $filter['sort_order']) && !empty($filter['sort_field']) && !empty($filter['sort_order'])) {
            $query->order($filter['sort_field'], $filter['sort_order']);
        }
        return $query;
    }

    /**
     * 获取详情
     *
     * @param int $id
     * @return array
     * @throws ApiException
     */
    public function getDetail(int $id): array
    {
        $result = User::with(["user_rank",
            "user_address" => function ($query) {
                $query->where("is_default", 1)->field("address_id,user_id,consignee,mobile,telephone,email,region_ids,address,is_default");
            },
        ])->where('user_id', $id)->append(['from_tag_name'])->find();

        if (!$result) {
            throw new ApiException(Util::lang('会员不存在'));
        }

        return $result->toArray();
    }

    /**
     * 获取名称
     *
     * @param int $id
     * @return string|null
     */
    public function getName(int $id): ?string
    {
        return User::where('user_id', $id)->value('username');
    }

    /**
     * 执行会员添加或更新
     *
     * @param int $id
     * @param array $data
     * @param bool $isAdd
     * @return int|bool
     * @throws ApiException
     */
    public function updateUser(int $id, array $data, bool $isAdd = false)
    {
        if ($id) {
            $user = $this->getDetail($id);
            if (substr($user['mobile'], 0, 3) . '****' . substr($user['mobile'], 7, 6) == $data['mobile']) {
                $data['mobile'] = $user['mobile'];
            }
        }

        validate(UserValidate::class)->only(array_keys($data))->check($data);

        $arr = [

            "email" => $data["email"],
            "password" => !empty($data["password"]) ? password_hash($data["password"], PASSWORD_DEFAULT) : "",
            "rank_id" => $data["rank_id"],
        ];

        if (!empty($data['mobile'])) {
            $arr["mobile"] = $data["mobile"];
        }
        if (isset($data['wechat_img']) && !empty($data['wechat_img'])) $arr['wechat_img'] = $data['wechat_img'];
        if (isset($data['username'])) $arr['username'] = $data['username'];
        if (isset($data['avatar'])) $arr['avatar'] = $data['avatar'];
        if ($isAdd) {
            if (empty($data['password']) || empty($data['pwd_confirm'])) {
                throw new ApiException('密码或确认密码不能为空');
            }
        }
        if ($data["password"] != $data["pwd_confirm"]) {
            throw new ApiException('两次密码不一致');
        }

        if ($isAdd) {
            $arr['reg_time'] = Time::now();
            $arr['email_validated'] = 0;
            $arr['mobile_validated'] = 0;
            $result = User::create($arr);
            AdminLog::add('新增会员:' . $data['username']);
            return $result->getKey();
        } else {
            if (!$id) {
                throw new ApiException('#id错误');
            }
            if (empty($data['password'])) unset($arr['password']);
            $result = User::where('user_id', $id)->save($arr);
            AdminLog::add('更新会员:' . $this->getName($id));

            return $result !== false;
        }
    }

    /**
     * 更新单个字段
     *
     * @param int $id
     * @param array $data
     * @return int|bool
     * @throws ApiException
     */
    public function updateUserField(int $id, array $data)
    {
        validate(UserValidate::class)->only(array_keys($data))->check($data);
        if (!$id) {
            throw new ApiException('#id错误');
        }
        $result = User::where('user_id', $id)->save($data);
        AdminLog::add('更新会员:' . $this->getName($id));
        return $result !== false;
    }

    /**
     * 删除会员
     *
     * @param int $id
     * @return bool
     */
    public function deleteUser(int $id): bool
    {
        if (!$id) {
            throw new ApiException('#id错误');
        }
        $get_name = $this->getName($id);
        $result = User::destroy($id);

        if ($result) {
            AdminLog::add('删除会员:' . $get_name);
        }

        return $result !== false;
    }

	/**
	 * 批量操作
	 * @param int $id
	 * @param string $type
	 * @param int $rank_id
	 * @return bool
	 * @throws ApiException
	 */
	public function batchOperation(int $id,string $type,int $rank_id = 0):bool
	{
		$user = User::find($id);
		if (empty($id) || empty($user)) {
			throw new ApiException(/** LANG */'#id错误');
		}
		switch ($type) {
			case "del":
				$result = $this->deleteUser($id);
				break;
			case "set_rank":
				$result = $user->save(['rank_id' => $rank_id]);
				break;
		}
		return $result !== false;
	}

    /**
     * 根据账号密码获取会员信息
     *
     * @param string $username
     * @param string $password
     * @return array
     */
    public function getUserByPassword(string $username, string $password): array
    {
        if (!$username || !$password) {
            throw new ApiException(Util::lang('用户名或密码不能为空'));
        }
		$item = $this->userModel->where("username|mobile|email", $username)->find();

        if (!$item || !$item['password'] || !password_verify($password, $item['password'])) {
            throw new ApiException(Util::lang('账号名与密码不匹配，请重新输入'));
        }
        return $this->getDetail($item['user_id']);
    }

    /**
     * 根据手机短信获取会员信息
     *
     * @param string $mobile
     * @param string $mobile_code
     * @return array
     */
    public function getUserByMobileCode(string $mobile, string $mobile_code): array
    {
        if (empty($mobile)) {
            throw new ApiException(Util::lang('手机号不能为空'));
        }
        if (empty($mobile_code)) {
            throw new ApiException(Util::lang('短信验证码不能为空'));
        }
        if (app(SmsService::class)->checkCode($mobile, $mobile_code) == false) {
            throw new ApiException(Util::lang('短信验证码错误或已过期，请重试'));
        }
        $item = $this->userModel->where('mobile', $mobile)->find();
        if (!$item) {
            // 不存在 -- 创建用户
            $data = [
                'mobile' => $mobile,
                'username' => app(UserRegistService::class)->generateUsername(),
                'mobile_validated' => 1,
                'nickname' => $mobile,
                'reg_time' => Time::now(),
                'last_ip' => Util::getUserIp(),
                'from_tag' => $this->getUserFromTag(),
            ];
            $user = User::create($data);
            return $this->getDetail($user->getKey());
        }
        return $this->getDetail($item['user_id']);
    }

    /**
     * 根据邮箱获取会员信息
     * @param string $email
     * @param string $email_code
     * @return array
     * @throws ApiException
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\DbException
     * @throws \think\db\exception\ModelNotFoundException
     */
    public function getUserByEmailCode(string $email, string $email_code): array
    {
        if (empty($mobile)) {
            throw new ApiException(Util::lang('邮箱不能为空'));
        }
        if (empty($mobile_code)) {
            throw new ApiException(Util::lang('邮箱验证码不能为空'));
        }
        if (!app(EmailService::class)->checkCode($email, $email_code)) {
            throw new ApiException(Util::lang('邮箱验证码错误或已过期，请重试'));
        }
        $item = $this->userModel->where('email', $mobile)->find();
        if (!$item) {
            // 不存在 -- 创建用户
            $data = [
                'email' => $email,
                'username' => app(UserRegistService::class)->generateUsername(),
                'email_validated' => 1,
                'nickname' => $email,
                'reg_time' => Time::now(),
                'last_ip' => Util::getUserIp(),
                'from_tag' => $this->getUserFromTag(),
            ];
            $user = User::create($data);
            return $this->getDetail($user->getKey());
        }
        return $this->getDetail($item['user_id']);
    }

    /**
     * 手机验证
     * @param string $mobile
     * @param string $code
     * @param string $event
     * @return string
     * @throws ApiException
     */
    public function mobileValidate(string $mobile,string $code,string $event): string
    {
        if (empty($mobile)) {
            throw new ApiException(/** LANG */Util::lang('手机号不能为空'));
        }
        if (empty($code)) {
            throw new ApiException(/** LANG */Util::lang('请输入验证码'));
        }
        if (app(SmsService::class)->checkCode($mobile, $code, $event) == false) {
            throw new ApiException(/** LANG */Util::lang('短信验证码错误或已过期，请重试'));
        }

        if (User::where("mobile", $mobile)->count() == 0) {
            throw new ApiException(/** LANG */Util::lang('该手机号未注册账号'));
        }

        $user = User::where("mobile", $mobile)->find();

        // 缓存验证标识
        $mobile_key = md5($mobile) . "_" . $user->user_id;
        $data = [
            "mobile" => $mobile,
            "user_id" => $user->user_id,
        ];
        Cache::set($mobile_key, $data, 600);
        return $mobile_key;
    }

    public function emailValidate(string $email,string $code,string $event): string
    {
        if (empty($email)) {
            throw new ApiException(/** LANG */Util::lang('邮箱不能为空'));
        }
        if (empty($code)) {
            throw new ApiException(/** LANG */Util::lang('请输入验证码'));
        }

        if(!app(EmailService::class)->checkCode($email, $code, $event)){
            throw new ApiException(/** LANG */Util::lang('邮箱验证码错误或已过期，请重试'));
        }

        if (User::where("email", $email)->count() == 0) {
            throw new ApiException(/** LANG */Util::lang('该邮箱未注册账号'));
        }
        $user = User::where("email", $email)->find();
        // 缓存验证标识
        $email_key = md5($email) . "_" . $user->user_id;
        $data = [
            "email" => $email,
            "user_id" => $user->user_id,
        ];
        Cache::set($email_key, $data, 600);
        return $email_key;

    }

    /**
     * 忘记密码 -- 修改密码
     * @param array $data
     * @return bool
     */
    public function modifyPassword(array $data): bool
    {
        if (!Cache::has($data['mobile_key'])) {
            throw new ApiException(/** LANG */Util::lang('页面超时，请返回重新获取短信验证码。'));
        }
        $user_data = Cache::get($data['mobile_key']);
        $user = User::find($user_data['user_id']);
        $result = $user->save(['password' => password_hash($data["password"], PASSWORD_DEFAULT),'mobile_validated' => 1]);
        return $result !== false;
    }


    /**
     * 获取用户中对应的用户端类型
     * @return int
     */
    public function getUserFromTag(): int
    {
        $from_tag = Util::getClientType();
        $tag = 0;
        if (!empty($from_tag)) {
            switch ($from_tag) {
                case "pc":
                    $tag = User::FROM_TAG_PC;
                    break;
                case "wechat":
                    // 公众号
                    $tag = User::FROM_TAG_WECHAT;
                    break;
                case "h5":
                    $tag = User::FROM_TAG_H5;
                    break;
                case "miniProgram":
                    // 小程序
                    $tag = User::FROM_TAG_MINI_PROGRAM;
                    break;
                case "android":
                    $tag = User::FROM_TAG_ANDROID;
                    break;
                case "ios":
                    $tag = User::FROM_TAG_IOS;
                    break;
            }
        }
        return $tag;
    }

    /**
     * 根据手机号获取会员
     * @param string $mobile
     * @return array
     * @throws ApiException
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\DbException
     * @throws \think\db\exception\ModelNotFoundException
     */
    public function getUserByMobile(string $mobile): array
    {
        $item = $this->userModel->where('mobile', $mobile)->find();
        if (!$item) {
            return [];
        }
        return $this->getDetail($item['user_id']);
    }

    /**
     * 会员登录操作
     *
     * @param int $user_id
     * @param bool $token_login
     * @return array
     */
    public function setLogin(int $user_id, bool $form_login = true): bool
    {
        if (empty($user_id)) {
            throw new ApiException(Util::lang('#uId错误'));
        }
        if (!User::find($user_id)) {
            throw new ApiException('token用户无效,请重新登录', 401);
        }
        request()->userId = $user_id;
        return true;
    }

    /**
     * 获取token
     *
     * @param integer $user_id
     * @return string
     */
    public function getLoginToken(int $user_id): string
    {
        $token = app(AccessTokenService::class)->setApp('app')->setId($user_id)->createToken();
        return $token;
    }

    // 处理会员默认头像
    public function getUserAvatar(string $avatar = ''): string
    {
        return $avatar ? $avatar : Config::get('defaultAvatar');
    }

    /**
     * 资金管理
     * @param int $user_id
     * @param array $data
     * @return bool
     * @throws ApiException
     */
    public function fundManagement(int $user_id, array $data)
    {
        if (empty($data["change_desc"])) {
            throw new ApiException('请填写资金变动说明');
        }
        if (array_sum([$data["balance"], $data["frozen_balance"], $data["points"], $data["growth_points"]]) == 0) {
            throw new ApiException('没有帐户变动');
        }

        // 账户资金变动
        $res = $this->changesInFunds($user_id, $data);
        return $res;
    }

    /**
     * 账户资金变动
     * @param int $user_id
     * @param array $data
     * @return mixed
     * @throws ApiException
     */
    public function changesInFunds(int $user_id, array $data): mixed
    {
        Db::startTrans();
        try {
            $user = User::find($user_id);
            if (empty($user)) {
                throw new ApiException('用户不存在');
            }
            // 用户资金日志
            $user_balance_log = [
                "user_id" => $user_id,
                "change_desc" => $data["change_desc"],
            ];

            // 添加对应的日志
            if (isset($data["balance"]) && !empty($data["balance"])) {
                $user_balance_log["balance"] = $data["balance"];
                $user_balance_log["change_type"] = $data["type_balance"];
                $user_balance_log["after_frozen_balance"] = 0;
                $user_balance_log["before_frozen_balance"] = 0;
                UserBalanceLog::create($user_balance_log);
            }

            if (isset($data["frozen_balance"]) && !empty($data["frozen_balance"])) {
                if (isset($user_balance_log["balance"])) {
                    unset($user_balance_log["balance"]);
                }
                $user_balance_log["frozen_balance"] = $data["frozen_balance"];
                $user_balance_log["change_type"] = $data["type_frozen_balance"];
                $user_balance_log["after_frozen_balance"] = $data["frozen_balance"];
                $user_balance_log["before_frozen_balance"] = 0;
                UserBalanceLog::create($user_balance_log);
                $user_balance_log["balance"] = $data["frozen_balance"];
                $user_balance_log["frozen_balance"] = 0;
                $user_balance_log["after_frozen_balance"] = 0;
                $user_balance_log["before_frozen_balance"] = $data["frozen_balance"];
                $user_balance_log["change_type"] = $data["type_frozen_balance"] == 1 ? 2 : 1;

                UserBalanceLog::create($user_balance_log);
            }

            if (isset($data["points"]) && !empty($data["points"])) {
                $user_balance_log["points"] = $data["points"];
                $user_balance_log["change_type"] = $data["type_points"];
                UserPointsLog::create($user_balance_log);
            }
            if (isset($data["growth_points"]) && !empty($data["growth_points"])) {
                $user_balance_log["points"] = $data["growth_points"];
                $user_balance_log["change_type"] = $data["type_growth_points"];
                UserGrowthPointsLog::create($user_balance_log);
            }

            // 更新用户资金信息
            $this->updateUserFunds($user_id, $data);

            DB::commit();

            // 根据用户积分判断是否升级用户等级
            $res = $this->updateUserRank($user_id);

            return $res !== false;
        } catch (\Exception $e) {
            // 回滚数据库事务
            DB::rollBack();
            throw new ApiException($e->getMessage());
        }
    }

    /**
     * 更新用户资金信息
     * @param User $user
     * @param array $data
     * @return void
     */
    public function updateUserFunds(int $user_id, array $data): void
    {
        foreach (['balance', 'points', 'growth_points'] as $field) {
            if (!isset($data[$field]) || $data[$field] == 0) {
                continue;
            }
            $this->adjustUserFunds($user_id, $field, $data[$field], $data["type_{$field}"]);
        }
        if (isset($data['frozen_balance']) && $data['frozen_balance'] > 0) {
            if ($data["type_frozen_balance"] == 1) {
                User::where("user_id", $user_id)
                    ->inc('frozen_balance', $data["frozen_balance"])
                    ->dec('balance', $data["frozen_balance"])
                    ->update();
            } else {
                User::where("user_id", $user_id)
                    ->dec('frozen_balance', $data["frozen_balance"])
                    ->inc('balance', $data["frozen_balance"])
                    ->update();
            }
        }
    }

    /**
     * 更新用户资金信息--执行
     * @param int $user_id
     * @param string $field
     * @param string $amount
     * @param int $type
     * @return bool
     */
    public function adjustUserFunds(int $user_id, string $field, string $amount, int $type): bool
    {
        // 根据$type增加或减少资金
        if ($type == 1) {
            return User::where("user_id", $user_id)->inc($field, $amount)->update();
        } else {
            return User::where("user_id", $user_id)->dec($field, $amount)->update();
        }
    }

    /**
     * 根据用户积分判断是否升级用户等级
     * @param int $user_id
     * @return true
     * @throws ApiException
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\DbException
     * @throws \think\db\exception\ModelNotFoundException
     */
    public function updateUserRank(int $user_id)
    {
        if(!config("app.IS_PRO")){
            return true;
        }
        $user = User::find($user_id);
        if (empty($user)) {
            throw new ApiException('用户不存在');
        }
        $user_rank_original = UserRank::findOrEmpty($user->rank_id);
        // 排除固定等级用户
        if ($user_rank_original->rank_type == 2) {
            return true;
        }
        $user_rank_current = UserRank::where('min_growth_points', '<=', $user->points)
            ->where("rank_type", 1)
            ->order("min_growth_points", "desc")
            ->limit(1)
            ->find();

        if (!empty($user_rank_current) && $user_rank_current->rank_id != $user->rank_id) {
            $user->rank_id = $user_rank_current->rank_id;
            return $user->save();
        }
        return true;
    }

    /**
     * 添加商品记录到用户
     * @param $product_id
     * @return bool
     */
    public function addProductHistory(int $user_id, int $product_id): bool
    {
        Product::where('product_id', $product_id)->inc('click_count')->save();
        $user = User::find($user_id);
        if (!$user) {
            return true;
        }
        $history_product_ids = [];
        if ($user['history_product_ids']) {
            $history_product_ids = json_decode($user['history_product_ids'], true);
        }
        array_unshift($history_product_ids, $product_id);
        $history_product_ids = array_slice(array_unique($history_product_ids), 0, 20);
        $user->history_product_ids = json_encode($history_product_ids);
        return $user->save();
    }

    /**
     * 判断是否是新人
     * @param int $user_id
     * @return bool
     */
    public function isNew(int $user_id): bool
    {
        $count = Order::where('user_id', $user_id)->where('pay_status', '>', 0)->count();
        return !$count;
    }

    /**
     * 获取用户会员等级
     * @param int $user_id
     * @return int
     */
    public function getUserRankId(int $user_id): int
    {
        return User::where('user_id', $user_id)->value('rank_id') ?? 0;
    }

    /**
     * 扣除积分
     * @param int $point
     * @param int $user_id
     * @return bool
     */
    public function decPoints(int $point, int $user_id, string $change_desc = '减积分'): bool
    {
        $log = [
            "user_id" => $user_id,
            "points" => $point,
            "change_type" => 2,
            "change_desc" => $change_desc,
        ];
        UserPointsLog::create($log);
        return User::where('user_id', $user_id)->dec('points', $point)->save();
    }

    /**
     * 增加积分
     * @param int $point
     * @param int $user_id
     * @return bool
     */
    public function incPoints(
        int $point,
        int $user_id,
        string $change_desc = '加积分',
        string $relation_type = '',
        int $relation_id = 0
    ): bool
    {
        $log = [
            "user_id" => $user_id,
            "points" => $point,
            "change_type" => 1,
            "change_desc" => $change_desc,
            'relation_type' => $relation_type,
            'relation_id' => $relation_id,
        ];
        UserPointsLog::create($log);
        return User::where('user_id', $user_id)->inc('points', $point)->save();
    }

    /**
     * 扣除余额
     * @param float $balance
     * @param int $user_id
     * @param string $change_desc
     * @return bool
     */
    public function decBalance(float $balance, int $user_id, string $change_desc = '减余额'): bool
    {
   //     $result = User::where('user_id', $user_id)->dec('balance', $balance)->save();
        $user_info = User::find($user_id);
        $user_info->balance = $user_info->balance - $balance;
        $user_balance_log = [
            "user_id" => $user_id,
            "change_desc" => $change_desc,
            "balance" => $balance,
            "change_type" => 2,
            "new_balance" => $user_info->balance,
            "new_frozen_balance" => $user_info->frozen_balance,
            'after_frozen_balance' => $user_info->frozen_balance,
            'before_frozen_balance' => $user_info->frozen_balance,
        ];
        UserBalanceLog::create($user_balance_log);
        $user_info->save();
        return true;
    }


    /**
     * 加余额
     * @param float $balance
     * @param int $user_id
     * @param string $change_desc
     * @return bool
     */
    public function incBalance(float $balance, int $user_id, string $change_desc = '加余额'): bool
    {
      //  $result = User::where('user_id', $user_id)->inc('balance', $balance)->save();
        $user_info = User::find($user_id);
        $user_info->balance = $user_info->balance + $balance;
        $user_balance_log = [
            "user_id" => $user_id,
            "change_desc" => $change_desc,
            "balance" => $balance,
            "change_type" => 1,
            "new_balance" => $user_info->balance,
            "new_frozen_balance" => $user_info->frozen_balance,
            'after_frozen_balance' => $user_info->frozen_balance,
            'before_frozen_balance' => $user_info->frozen_balance,
        ];
        UserBalanceLog::create($user_balance_log);
        $user_info->save();
        return true;
    }

    /**
     * 扣除冻结余额
     * @param float $frozen_balance
     * @param int $user_id
     * @param string $change_desc
     * @return bool
     */
    public function decFrozenBalance(float $frozen_balance, int $user_id, string $change_desc = '减冻结余额'): bool
    {
      //  $result = User::where('user_id', $user_id)->dec('frozen_balance', $frozen_balance)->save();
        $user_info = User::find($user_id);
        $old_frozen_balance = $user_info->frozen_balance;
        $user_info->frozen_balance = $user_info->frozen_balance - $frozen_balance;
        $user_balance_log = [
            "user_id" => $user_id,
            "change_desc" => $change_desc,
            "frozen_balance" => $frozen_balance,
            "change_type" => 2,
            "new_balance" => $user_info->balance,
            "new_frozen_balance" => $user_info->frozen_balance,
            'after_frozen_balance' => $user_info->frozen_balance,
            'before_frozen_balance' => $old_frozen_balance,
        ];
        UserBalanceLog::create($user_balance_log);
        $user_info->save();
        return true;
    }

    /**
     * 增加冻结余额
     * @param float $frozen_balance
     * @param int $user_id
     * @param string $change_desc
     * @return bool
     */
    public function incFrozenBalance(float $frozen_balance, int $user_id, string $change_desc = '增加冻结余额'): bool
    {
     //   $result = User::where('user_id', $user_id)->inc('frozen_balance', $frozen_balance)->save();
        $user_info = User::find($user_id);
        $old_frozen_balance = $user_info->frozen_balance;
        $user_info->frozen_balance = $user_info->frozen_balance + $frozen_balance;
        $user_balance_log = [
            "user_id" => $user_id,
            "change_desc" => $change_desc,
            "frozen_balance" => $frozen_balance,
            "change_type" => 1,
            "new_balance" => $user_info->balance,
            "new_frozen_balance" => $user_info->frozen_balance,
            'after_frozen_balance' => $user_info->frozen_balance,
            'before_frozen_balance' => $old_frozen_balance,
        ];
        UserBalanceLog::create($user_balance_log);
        $user_info->save();
        return true;
    }

    /**
     * 获取用户推荐人id
     * @param int $user_id
     * @return int
     */
    public function getUserReferrerId(int $user_id): int
    {
        $referrer_user_id = $this->userModel->where('user_id', $user_id)->value('referrer_user_id');
        if (empty($referrer_user_id)) return 0;

        return $referrer_user_id;
    }

}
