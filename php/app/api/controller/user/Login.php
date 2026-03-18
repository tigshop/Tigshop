<?php
//**---------------------------------------------------------------------+
//** 通用接口控制器文件 -- 会员登录
//**---------------------------------------------------------------------+
//** 版权所有：江西佰商科技有限公司. 官网：https://www.tigshop.com
//**---------------------------------------------------------------------+
//** 作者：Tigshop团队，yq@tigshop.com
//**---------------------------------------------------------------------+
//** 提示：Tigshop商城系统为非免费商用系统，未经授权，严禁使用、修改、发布
//**---------------------------------------------------------------------+

namespace app\api\controller\user;

use app\api\IndexBaseController;
use app\service\admin\captcha\CaptchaService;
use app\service\admin\common\email\EmailService;
use app\service\admin\common\sms\SmsService;
use app\service\admin\oauth\UserAuthorizeService;
use app\service\admin\oauth\WechatOAuthService;
use app\service\admin\user\UserRegistService;
use app\service\admin\user\UserService;
use exceptions\ApiException;
use think\App;
use think\facade\Cache;
use think\Response;
use utils\Config;
use utils\Config as UtilsConfig;
use utils\Util;

/**
 * 会员登录控制器
 */
class Login extends IndexBaseController
{
    /**
     * 构造函数
     *
     * @param App $app
     */
    public function __construct(App $app)
    {
        parent::__construct($app);
    }

    /**
     * 获取快捷登录的选项--目前只有微信快捷登录
     * @return Response
     */
    public function getQuickLoginSetting(): Response
    {
        $wechat_login = 0;
        switch (Util::getClientType()) {
            case 'pc':
            case 'wechat':
            $wechat_login = Config::get("openWechatOauth");
                break;
            case 'miniProgram':
                $wechat_login = 1;
                break;
            default:
                break;
        }
        $show_oauth = $wechat_login ? 1 : 0;
        return $this->success([
            'wechat_login' => $wechat_login,
            'show_oauth' => $show_oauth,
        ]);
    }

    /**
     * 会员登录操作
     * @return Response
     * @throws \exceptions\ApiException
     */
    public function signin(): Response
    {
        //校验csrf
        $csrfToken = request()->header('X-CSRF-Token','');
        if ($csrfToken && !Cache::get($csrfToken)) {
            return $this->error(Util::lang('页面已过期，请刷新后重试！'));
        }
        $login_type = $this->request->all('login_type', 'password');
        if ($login_type == 'password') {
            // 密码登录
            $username = $this->request->all('username', '');
            $password = $this->request->all('password', '');
            if (empty($username)) {
                return $this->error(Util::lang('用户名不能为空'));
            }
            // 行为验证码
            app(CaptchaService::class)->setTag('userSignin:' . $username)
                ->setToken($this->request->all('verify_token', ''))
                ->setAllowNoCheckTimes(3) //3次内无需判断
                ->verification();
            $user = app(UserService::class)->getUserByPassword($username, $password);
        } elseif ($login_type == 'mobile') {
            // 手机登录
            $mobile = $this->request->all('mobile', '');
            $mobile_code = $this->request->all('mobile_code', '');
            $user = app(UserService::class)->getUserByMobileCode($mobile, $mobile_code);
        } elseif($login_type == 'email') {
            $email = $this->request->all('email', '');
            $email_code = $this->request->all('email_code', '');
            $user = app(UserService::class)->getUserByEmailCode($email, $email_code);
        }
        if (!$user) {
            return $this->error(Util::lang('账户名或密码错误！'));
        }
        if (isset($user['status']) && $user['status'] != 1) {
            return $this->error(Util::lang('您的账号已被禁用！'));
        }

        if ($csrfToken) {
            Cache::delete($csrfToken);
        }
        app(UserService::class)->setLogin($user['user_id']);
        $token = app(UserService::class)->getLoginToken($user['user_id']);
        return $this->success([
            'token' => $token,
        ]);
    }

    /**
     * 获取验证码
     * @throws \exceptions\ApiException
     */
    public function sendMobileCode(): Response
    {
        $mobile = $this->request->all('mobile', '');
        $event = $this->request->all('event', 'login');
        if (!$mobile) {
            return $this->error(Util::lang('手机号不能为空'));
        }
        // 行为验证码
        app(CaptchaService::class)->setTag('mobileCode:' . $mobile)
            ->setToken($this->request->all('verify_token', ''))
            ->verification();

        try {
            app(SmsService::class)->sendCode($mobile, $event);
            return $this->success(Util::lang('发送成功！'));
        } catch (\Exception $e) {
            return $this->error(Util::lang('发送失败！') . $e->getMessage());
        }
    }


    /**
     * 发送邮箱验证码
     * @return Response
     * @throws ApiException
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\DbException
     * @throws \think\db\exception\ModelNotFoundException
     */
    public function sendEmailCode(): Response
    {
        $email = $this->request->all('email', '');
        $event = $this->request->all('event', 'login');
        if (!$email) {
            return $this->error(Util::lang('邮箱不能为空'));
        }

        // 行为验证码
        app(CaptchaService::class)->setTag('emailCode:' . $email)
            ->setToken($this->request->all('verify_token', ''))
            ->verification();
        $event = 'register_code';
        try {
            app(EmailService::class)->sendEmailCode($email, $event, 'register_code');
            return $this->success(Util::lang('发送成功！'));
        } catch (\Exception $e) {
            return $this->error(Util::lang('发送失败！') . $e->getMessage());
        }

    }

    /**
     * 验证手机号
     * @return Response
     * @throws ApiException
     */
    public function checkMobile()
    {
        $mobile = $this->request->all('mobile', '');
        $code = $this->request->all("code", "");
        $event = "forget_password";
        // 验证码判断
        $result = app(UserService::class)->mobileValidate($mobile, $code, $event);
        return $this->success($result);
    }

    public function checkEmail()
    {
        $email = $this->request->all('email', '');
        $code = $this->request->all("code", "");
        $event = "register_code";
        $result = app(UserService::class)->emailValidate($email, $code, $event);
        return $this->success($result);
    }

    /**
     * 忘记密码 -- 修改密码
     * @return Response
     * @throws ApiException
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\DbException
     * @throws \think\db\exception\ModelNotFoundException
     */
    public function forgetPassword(): Response
    {
        $key = $this->request->all("mobile_key", "");
        $password = $this->request->all("password", "");
        if (empty($password)) {
            throw new ApiException(/** LANG */ Util::lang('新密码不能为空'));
        }
        $result = app(UserService::class)->modifyPassword(['mobile_key' => $key, 'password' => $password]);
        return $result ? $this->success() : $this->error(/** LANG */ Util::lang("操作失败"));
    }

    /**
     * 获取微信登录跳转的url
     * @return Response
     * @throws \EasyWeChat\Kernel\Exceptions\InvalidArgumentException
     */
    public function getWechatLoginUrl(): Response
    {
        $redirect_url = $this->request->all('url', '');
        $res = app(WechatOAuthService::class)->getOAuthUrl($redirect_url);
        return $this->success([
            'url' => $res['url'],
            'ticket' => $res['ticket'] ?? '',
        ]);
    }


    /**
     * 通过微信code获得微信用户信息
     * @return Response
     * @throws \EasyWeChat\Kernel\Exceptions\InvalidArgumentException
     */
    public function getWechatLoginInfoByCode(): Response
    {
        $code = $this->request->all('code', '');
        if (!$code) {
            return $this->error(Util::lang('code不能为空'));
        }
        $open_data = app(WechatOAuthService::class)->auth($code);
        if (isset($open_data['errcode'])) {
            return $this->error(Util::lang($open_data['errmsg']));
        }
        //检测用户是否已经绑定过账号，有则登录账号
        $openid = $open_data['openid'];
        $unionid = '';
        $user_id = app(UserAuthorizeService::class)->getUserOAuthInfo($openid, $unionid);
        if (empty($user_id)) {
            if (UtilsConfig::get('openWechatRegister', 0) == 1) {
                $user = app(UserRegistService::class)->regist([
                    'username' => 'User_' . rand(100000000000, 900000000000),
                    'password' => rand(100000000000, 900000000000),
                ]);
                $user_id = $user->user_id;
                app(UserAuthorizeService::class)->addUserAuthorizeInfo($user['user_id'], $openid ?? '', $open_data,
                    $open_data['unionid'] ?? '');
            } else {
                return $this->success(['type' => 2, 'open_data' => $open_data]);
            }
        }
        app(UserService::class)->setLogin($user_id);
        $token = app(UserService::class)->getLoginToken($user_id);
        return $this->success([
            'type' => 1,
            'token' => $token,
        ]);
    }

    /**
     * 绑定公众号
     * @return Response
     * @throws \EasyWeChat\Kernel\Exceptions\InvalidArgumentException
     * @throws \exceptions\ApiException
     * @throws \think\Exception
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\DbException
     * @throws \think\db\exception\ModelNotFoundException
     */
    public function bindWechat(): Response
    {
        $code = $this->request->all('code', '');
        if (!$code) {
            return $this->error(Util::lang('code不能为空'));
        }
        //检测用户是否有授权，有则不进行授权
        $openid = app(UserAuthorizeService::class)->getUserAuthorizeOpenId(request()->userId);
        if ($openid) return $this->error(Util::lang('您已授权，无需重复授权'));
        $open_data = app(WechatOAuthService::class)->auth($code);
        if (isset($open_data['errcode'])) {
            return $this->error(Util::lang($open_data['errmsg']));
        }
        $openid = $open_data['openid'];
        if (empty($openid)) return $this->error(Util::lang('授权失败，请稍后再试'));
        //检测是否已经绑定其他账号
        $user_id = app(UserAuthorizeService::class)->getUserOAuthInfo($openid);
        if ($user_id && $user_id != request()->userId) {
            $this->error(Util::lang('该微信号已绑定其他账号，请解绑后再重试'));
        }
        app(UserAuthorizeService::class)->addUserAuthorizeInfo(request()->userId, $openid);
        return $this->success(Util::lang('绑定成功'));
    }

    /**
     * 解除绑定
     * @return Response
     */
    public function unbindWechat(): Response
    {
        $openid = app(UserAuthorizeService::class)->getUserAuthorizeOpenId(request()->userId);
        if (empty($openid)) $this->error(Util::lang('该账号未绑定微信公众号'));
        app(UserAuthorizeService::class)->delUSerAuthorizeInfo(request()->userId);
        return $this->success(Util::lang('解绑成功'));
    }

    /**
     * 绑定手机号
     * @return Response
     * @throws \exceptions\ApiException
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\DbException
     * @throws \think\db\exception\ModelNotFoundException
     */
    public function bindMobile(): Response
    {
        $data = $this->request->only([
            'mobile' => '',
            'mobile_code' => '',
            'password' => '',
            'open_data' => [],
            'referrer_user_id/d' => 0,
        ], 'post');
        if (app(SmsService::class)->checkCode($data['mobile'], $data['mobile_code']) == false) {
            return $this->error(Util::lang('短信验证码错误或已过期，请重试'));
        }
        $user = app(UserRegistService::class)->registerUserByMobile($data['mobile'], $data['password'], $data['referrer_user_id']);
        if (isset($data['open_data']['openid'])) {
            app(UserAuthorizeService::class)->addUserAuthorizeInfo($user['user_id'], $data['open_data']['openid'] ?? '', $data['open_data'], $data['open_data']['unionid'] ?? '');
        }
        app(UserService::class)->setLogin($user['user_id']);
        $token = app(UserService::class)->getLoginToken($user['user_id']);
        return $this->success($token);
    }

    /**
     * 服务端验证
     * @return void
     * @throws \EasyWeChat\Kernel\Exceptions\BadRequestException
     * @throws \EasyWeChat\Kernel\Exceptions\InvalidArgumentException
     * @throws \EasyWeChat\Kernel\Exceptions\RuntimeException
     * @throws \ReflectionException
     * @throws \Throwable
     */
    public function wechatServerVerify(): void
    {
        $body = app(WechatOAuthService::class)->setPlatformType('wechat')->getApplication()->getServer()->serve()->getBody();
        exit($body);
    }

    /**
     * 处理消息
     * @return Response
     * @throws \EasyWeChat\Kernel\Exceptions\BadRequestException
     * @throws \EasyWeChat\Kernel\Exceptions\InvalidArgumentException
     * @throws \ReflectionException
     * @throws \Throwable
     */
    public function getWechatMessage(): Response
    {
        $message = app(WechatOAuthService::class)->setPlatformType('wechat')->getApplication()->getServer()->getRequestMessage();
        if (isset($message['Event'])) {
            //检测用户是否登录
            $openid = $message['FromUserName'] ?? '';
            $ticket = $message['Ticket'] ?? '';
            if (in_array($message['Event'], ['subscribe', 'SCAN'])) {
                if (!empty($ticket) && !empty($openid))
                    Cache::set($ticket, $openid);
            }
        }
        exit('');
    }

    /**
     * 检测用户扫码后处理事件
     * @return Response
     * @throws \exceptions\ApiException
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\DbException
     * @throws \think\db\exception\ModelNotFoundException
     */
    public function wechatEvent(): Response
    {
        $key = $this->request->all('key');
        if (empty($key)) {
            return $this->success([
                'type' => 0,
                'message' => Util::lang('未登录')
            ]);
        }
        $openid = Cache::get($key);
        if (empty($openid)) {
            return $this->success([
                'type' => 0,
                'message' => Util::lang('未登录'),
            ]);
        }
        $user_id = app(UserAuthorizeService::class)->getUserOAuthInfo($openid);
        $open_data = ['openid' => $openid];
        if (empty($user_id)) {
            if (UtilsConfig::get('openWechatRegister', 0) == 1) {
                $user = app(UserRegistService::class)->regist([
                    'username' => 'User_' . rand(100000000000, 900000000000),
                    'password' => rand(100000000000, 900000000000),
                ]);
                $user_id = $user->user_id;
                app(UserAuthorizeService::class)->addUserAuthorizeInfo($user['user_id'], $openid ?? '', $open_data,
                    $open_data['unionid'] ?? '');
            } else {
                return $this->success(['type' => 2, 'open_data' => $open_data]);
            }
        }
        app(UserService::class)->setLogin($user_id);
        $token = app(UserService::class)->getLoginToken($user_id);
        return $this->success([
            'type' => 1,
            'token' => $token,
        ]);
    }

    /**
     * 获取用户手机号
     * @return Response
     * @throws \Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface
     */
    public function getUserMobile(): Response
    {
        $code = $this->request->all('code', '');
        $res = app(WechatOAuthService::class)->getMiniUserMobile($code);
        if (empty($res['code'])) return $this->error(Util::lang($res['msg'] ?? '授权失败，请稍后再试~'));
        $user = app(UserRegistService::class)->registerUserByMobile($res['mobile']);
        app(UserService::class)->setLogin($user['user_id']);
        $token = app(UserService::class)->getLoginToken($user['user_id']);
        return $this->success($token);
    }

    /**
     * 授权获取用户openid
     * @return Response
     * @throws \EasyWeChat\Kernel\Exceptions\InvalidArgumentException
     * @throws \think\Exception
     */
    public function updateUserOpenId(): Response
    {
        $code = $this->request->all('code/s', '');
        if (!$code) {
            return $this->error(Util::lang('code不能为空'));
        }
        $openid = app(WechatOAuthService::class)->getMiniOpenid($code);
        if (!empty($openid)) {
            app(UserAuthorizeService::class)->updateUserAuthorizeInfo(request()->userId, $openid, 2);
        }
        return $this->success();
    }

    /**
     * 获取jssdk配置项
     * @return Response
     * @throws \Psr\SimpleCache\InvalidArgumentException
     * @throws \Symfony\Contracts\HttpClient\Exception\ClientExceptionInterface
     * @throws \Symfony\Contracts\HttpClient\Exception\DecodingExceptionInterface
     * @throws \Symfony\Contracts\HttpClient\Exception\RedirectionExceptionInterface
     * @throws \Symfony\Contracts\HttpClient\Exception\ServerExceptionInterface
     * @throws \Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface
     */
    public function getJsSdkConfig(): Response
    {
        $url = $this->request->all('url');
        $params = app(WechatOAuthService::class)->getJsSdkConfig($url);

        return $this->success($params);
    }
}
