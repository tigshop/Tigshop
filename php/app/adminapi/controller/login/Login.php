<?php
//**---------------------------------------------------------------------+
//** 后台控制器文件 -- 登录
//**---------------------------------------------------------------------+
//** 版权所有：江西佰商科技有限公司. 官网：https://www.tigshop.com
//**---------------------------------------------------------------------+
//** 作者：Tigshop团队，yq@tigshop.com
//**---------------------------------------------------------------------+
//** 提示：Tigshop商城系统为非免费商用系统，未经授权，严禁使用、修改、发布
//**---------------------------------------------------------------------+

namespace app\adminapi\controller\login;

use app\BaseController;
use app\service\admin\authority\AccessTokenService;
use app\service\admin\authority\AdminUserService;
use app\service\admin\captcha\CaptchaService;
use app\service\admin\common\sms\SmsService;
use think\App;
use think\facade\Cache;
use think\Response;

/**
 * 品牌控制器
 */
class Login extends BaseController
{
    protected AdminUserService $adminUserService;
    private bool $isAdd = false;

    /**
     * 构造函数
     *
     * @param App $app
     * @param AdminUserService $brandService
     */
    public function __construct(App $app, AdminUserService $adminUserService)
    {
        parent::__construct($app);
        $this->adminUserService = $adminUserService;
    }

    /**
     * 管理员登录操作
     *
     * @return Response
     */
    public function signin(): Response
    {
        $login_type =$this->request->all('login_type', 'password');
        //校验csrf
        $csrfToken = request()->header('X-CSRF-Token');
        if ($csrfToken && !Cache::get($csrfToken)) {
            return $this->error('页面已过期，请刷新后重试！');
        }
        if ($login_type == 'password') {
            // 密码登录
            $username =$this->request->all('username', '');
            $password =$this->request->all('password', '');
            if (empty($username)) {
                return $this->error('用户名不能为空');
            }
            $verifyToken = empty($this->request->all('verify_token', '')) ? '' : $this->request->all('verify_token', '');
            // 行为验证码
            app(CaptchaService::class)->setTag('adminSignin:' . $username)
                ->setToken($verifyToken)
                ->setAllowNoCheckTimes(3) //3次内无需判断
                ->verification();
            $user = $this->adminUserService->getAdminUserByPassword($username, $password);

            if (isPasswordTooSimple($password)) {
                Cache::set('password_too_simple:' . $user->admin_id, 1, 60 * 60 * 24);
            } else {
                Cache::delete('password_too_simple:' . $user->admin_id);
            }
        } elseif ($login_type == 'mobile') {
            // 手机登录
            $mobile = $username =$this->request->all('mobile', '');
            $mobile_code =$this->request->all('mobile_code', '');
            $user = $this->adminUserService->getAdminUserByMobile($mobile, $mobile_code);
        }
        if (!$user) {
            return $this->error('账户或密码错误！');
        }
        // CSRF token 仅在登录成功后消费，避免“输错一次密码后 token 被提前删除”导致后续一直提示登录错误
        if ($csrfToken) {
            Cache::delete($csrfToken);
        }
        $this->adminUserService->setLogin($user->admin_id);
        $token = app(AccessTokenService::class)->setApp('admin')->setId($user->admin_id)->createToken();

        return $this->success([
            'token' => $token,
            'admin_type'=> $user->admin_type
        ]);
    }

    /**
     * 获取验证码
     * @return Response
     * @throws \exceptions\ApiException
     */
    public function sendMobileCode(): Response
    {
        $mobile =$this->request->all('mobile', '');
        if (!$mobile) {
            return $this->error('手机号不能为空');
        }
        // 行为验证码
        app(CaptchaService::class)->setTag('mobileCode:' . $mobile)
            ->setToken($this->request->all('verify_token', ''))
            ->verification();

        try {
            app(SmsService::class)->sendCode($mobile);
            return $this->success();
        } catch (\Exception $e) {
            return $this->error('发送失败！' . $e->getMessage());
        }
    }
}
