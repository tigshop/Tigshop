<?php
//**---------------------------------------------------------------------+
//** 后台控制器文件 -- 账号管理
//**---------------------------------------------------------------------+
//** 版权所有：江西佰商科技有限公司. 官网：https://www.tigshop.com
//**---------------------------------------------------------------------+
//** 作者：Tigshop团队，yq@tigshop.com
//**---------------------------------------------------------------------+
//** 提示：Tigshop商城系统为非免费商用系统，未经授权，严禁使用、修改、发布
//**---------------------------------------------------------------------+

namespace app\adminapi\controller\admin;

use app\adminapi\AdminBaseController;
use app\model\authority\AdminUserVendor;
use app\model\merchant\AdminUserShop;
use app\service\admin\account\AdminAccountService;
use app\service\admin\authority\AdminUserService;
use think\App;

class AdminAccount extends AdminBaseController
{

    protected AdminAccountService $adminAccountService;

    /**
     * 构造方法
     * @param AdminAccountService $adminAccountService
     */
    public function __construct(App $app, AdminAccountService $adminAccountServicece)
    {
        parent::__construct($app);
        $this->adminAccountService = new AdminAccountService();
    }

    /**
     * 根据店铺或供应商ID查询主账号信息
     * @return \think\Response
     */
    public function getMainAccount()
    {


        $admin_id = $this->request->get('admin_id/d', 0);

        $id = $this->request->get('id/d', 0);

        $type = $this->request->get('type/s', '');

        $mainAccount = $this->adminAccountService->getMainAccountByShopOrVendorId($admin_id, $id, $type);

        return $this->success($mainAccount);

    }


    /**
     * 根据主账号ID和类型查询账号列表
     * @return \think\Response
     */
    public function pageShopOrVendor()
    {
        $filter = $this->request->only([
            'keyword' => '',
            'page/d' => 1,
            'size/d' => 15,
            'sort_field' => 'add_time',
            'sort_order' => 'desc',
            'admin_id' => 0,
            'type' => '',
        ], 'get');

        if (!in_array($filter['type'], ['vendor', 'shop'])) {
            return $this->error('类型参数错误，只支持shop或vendor');
        }

        $list = $this->adminAccountService->pageShopOrVendor($filter);
        return $this->success($list);

    }

    /**
     * 根据主账号ID和店铺ID/供应商ID绑定账号
     * @return \think\Response
     */
    public function bindMainAccount()
    {

        $filter = $this->request->only([
            'type' => '',
            'id/d' => 0,
            'admin_data' => [],
        ], 'post');

        if (!in_array($filter['type'], ['vendor', 'shop'])) {
            return $this->error('类型参数错误，只支持shop或vendor');
        }

        $res = $this->adminAccountService->bindMainAccount($filter);
        if (!$res) {
            return $this->error('操作失败');
        }
        return $this->success();
    }

    /**
     * 修改主账号信息
     * @return \think\Response
     */
    public function updateMainAccount()
    {
        $filter = $this->request->only([
            'username' => '',
            'admin_id/d' => 0,
            'mobile' => '',
            'email' => '',
        ], 'post');

        if ($filter['admin_id'] <= 0) {
            return $this->error('无效的主账号ID');
        }

        if (empty($filter['username']) || empty($filter['mobile'])) {
            return $this->error('手机号/用户名不能为空');
        }

        $res = $this->adminAccountService->updateMainAccount($filter);
        if (!$res) {
            return $this->error('操作失败');
        }
        return $this->success();
    }

    /**
     * 修改主账号密码
     * @return \think\Response
     */
    public function updateMainAccountPwd()
    {
        $filter = $this->request->only([
            'admin_id/d' => 0,
            'password' => '',
            'pwd_confirm' => '',
        ], 'post');

        if ($filter['id'] <= 0) {
            return $this->error('无效的ID');
        }

        if ($filter['password'] != $filter['pwd_confirm']) {
            return $this->error('两次输入密码不一致');
        }

        $res = $this->adminAccountService->updateMainAccountPwd($filter);
        if (!$res) {
            return $this->error('操作失败');
        }
        return $this->success();


    }

    /**
     * 账号管理列表
     * @return \think\Response
     */
    public function pageAdminUser()
    {
        $filter = $this->request->only([
            'keyword' => '',
            'page/d' => 1,
            'size/d' => 15,
            'sort_field' => 'admin_id',
            'sort_order' => 'desc',
        ], 'get');

        $filterResult = app(AdminUserService::class)->getFilterList($filter);
        if (empty($filterResult)) {
            return $this->success([
                'records' => [],
                'total' => 0,
            ]);
        }

        $total = app(AdminUserService::class)->getFilterCount($filter);
        $adminIds = array_column($filterResult->toArray(), 'admin_id');

        $shopArr = AdminUserShop::whereIn('admin_id', $adminIds)->field('admin_id,count(1) as num')->group('admin_id')->select()->toArray();
        $shopArr = array_column($shopArr, 'num', 'admin_id');


        $vendorArr = AdminUserVendor::whereIn('admin_id', $adminIds)->field('admin_id,count(1) as num')->group('admin_id')->select()->toArray();
        $vendorArr = array_column($vendorArr, 'num', 'admin_id');

        $list = [];
        foreach ($filterResult as $key => $value) {
            $list[$key]['shop_count'] = $shopArr[$value['admin_id']] ?? 0;
            $list[$key]['vendor_count'] = $vendorArr[$value['admin_id']] ?? 0;
            $list[$key]['admin_id'] = $value['admin_id'];
            $list[$key]['username'] = $value['username'];
            $list[$key]['mobile'] = $value['mobile'] ?? '';
            $list[$key]['email'] = $value['email'] ?? '';
            $list[$key]['add_time'] = $value['add_time'];
            $list[$key]['avatar'] = $value['avatar'];
        }
        return $this->success([
            'records' => $list,
            'total' => $total,
        ]);

    }


}