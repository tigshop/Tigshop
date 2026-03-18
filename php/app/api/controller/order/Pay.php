<?php

namespace app\api\controller\order;

use app\api\IndexBaseController;
use app\model\msg\AdminMsg;
use app\service\admin\msg\AdminMsgService;
use app\service\admin\oauth\WechatOAuthService;
use app\service\admin\order\OrderDetailService;
use app\service\admin\order\OrderService;
use app\service\admin\pay\PayLogService;
use app\service\admin\pay\PaymentService;
use app\service\admin\pay\src\AliPayService;
use app\service\admin\pay\src\PayPalService;
use app\service\admin\pay\src\WechatPayService;
use app\service\admin\pay\src\YaBanPayService;
use app\service\admin\pay\src\YunPayService;
use exceptions\ApiException;
use think\App;
use think\Response;
use utils\Config;
use utils\Util;

class Pay extends IndexBaseController
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
     * 订单支付
     * @return Response
     * @throws ApiException
     */
    public function index(): Response
    {
        $order_id = $this->request->all('id/d', 0);
        $orderDetail = app(OrderDetailService::class)->setId($order_id)->setUserId(request()->userId);
        // 检查订单是否可支付
        $orderDetail->checkActionAvailable('to_pay');

        $order = $orderDetail->getOrder()->toArray();
        $payment_list = app(PaymentService::class)->getAvailablePayment();
        if ($order['pay_type_id'] == 1) {
            $payment_list = array_diff($payment_list, ['offline']);
        } elseif ($order['pay_type_id'] == 2) {

        } elseif ($order['pay_type_id'] == 3) {
            $payment_list = array_diff($payment_list, ['wechat', 'alipay', 'paypal', 'yabanpay_wechat', 'yabanpay_alipay']);
        }
        $payment_list = array_values($payment_list);
        $offline_payment_list = [];
        if (in_array('offline', $payment_list)) {
            $offline_payment_list = [
                'offline_pay_bank' => str_replace('{$order_sn}', $order['order_sn'], Config::get('offlinePayBank')),
                'offline_pay_company' => str_replace('{$order_sn}', $order['order_sn'],
                    Config::get('offlinePayCompany')),
            ];
        }
        $result = [];
        if(!empty($payment_list)) {
            foreach ($payment_list as  $value) {
                $result[] =  lcfirst(str_replace('_', '', ucwords($value, '_')));
            }
        }
        return $this->success([
            'order' => $order,
            'payment_list' => $result,
            'offline_payment_list' => $offline_payment_list,
        ]);
    }

    /**
     * 检测订单支付状态
     * @return Response
     */
    public function getPayLog(): Response
    {
        $order_id = $this->request->all('id/d', 0);
        if (empty($order_id)) {
            return $this->error(Util::lang('参数缺失'));
        }

        $payLog = app(PayLogService::class)->getPayLogByOrderId($order_id);
        return $this->success($payLog ?: null);
    }

    /**
     * 检测订单支付状态
     * @return Response
     */
    public function checkStatus(): Response
    {
        $order_id = $this->request->all('id/d', 0);
        $pay_log_id = $this->request->all('paylog_id/d', 0);
        if (empty($order_id) && empty($pay_log_id)) {
            return $this->error(Util::lang('参数缺失'));
        }

        if (!empty($order_id)) {
            $pay_status = app(OrderService::class)->getPayStatus($order_id);
        } else {
            $pay_status = app(PayLogService::class)->getPayStatus($pay_log_id);
        }
        return $this->success($pay_status > 0 ? 1 : 0);
    }

    /**
     * 订单支付
     * @return Response
     * @throws ApiException
     * @throws \EasyWeChat\Kernel\Exceptions\HttpException
     * @throws \EasyWeChat\Kernel\Exceptions\InvalidArgumentException
     * @throws \Symfony\Contracts\HttpClient\Exception\ClientExceptionInterface
     * @throws \Symfony\Contracts\HttpClient\Exception\DecodingExceptionInterface
     * @throws \Symfony\Contracts\HttpClient\Exception\RedirectionExceptionInterface
     * @throws \Symfony\Contracts\HttpClient\Exception\ServerExceptionInterface
     * @throws \Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface
     */
    public function create(): Response
    {
        $order_id = $this->request->all('id/d', 0);
        $pay_type = $this->request->all('type', '');
        if (empty($pay_type)) {
            return $this->error(Util::lang('未选择支付方式'));
        }
        $code = $this->request->all('code', '');
        $openid = '';
        if (!empty($code)) {
            $openid = app(WechatOAuthService::class)->getMiniOpenid($code);
        }
        $orderDetail = app(OrderDetailService::class)->setId($order_id)->setUserId(request()->userId);
        $orderDetail->checkActionAvailable('to_pay');
        $order = $orderDetail->getOrder()->toArray();
        $order['order_type'] = 0;
        $order['pay_code'] = $pay_type;
        $pay_params = app(PayLogService::class)->creatPayLogParams($order);
        $pay_params['paylog_id'] = app(PayLogService::class)->creatPayLog($pay_params);
        $pay_params['user_id'] = request()->userId;
        $pay_params['openid'] = $openid;
        try {
            switch ($pay_type) {
                case 'wechat':
                    $res = app(WechatPayService::class)->pay($pay_params);
                    break;
                case 'alipay':
                    $res = app(AliPayService::class)->pay($pay_params);
                    break;
                case 'paypal':
                    $res = app(PayPalService::class)->pay($pay_params);
                    break;
                case 'yabanpay_wechat':
                case 'yabanpay_alipay':
                    $res = app(YaBanPayService::class)->pay($pay_params);
                    break;
                case 'yunpay_wechat':
                case 'yunpay_alipay':
                case 'yunpay_yunshanfu':
                    $res = app(YunPayService::class)->pay($pay_params);
                    break;
                default:
                    return $this->error(Util::lang('未选择支付方式'));
            }
        } catch (\Exception $exception) {
            throw new ApiException($exception->getMessage());
        }
        if (isset($res['code']) && $res['code'] == '1001') {

            return $this->error(Util::lang($res['msg']));
        }

        return $this->success([
            'order_id' => $pay_params['order_id'],
            'order_sn' => $pay_params['order_sn'],
            'order_amount' => $pay_params['unpaid_amount'],
            'pay_info' => $res,
        ]);
    }

    /**
     * 支付回调
     * @return string|Response
     */
    public function notify(): string|Response
    {
        $pay_type = input('payCode', '');
        \think\facade\Log::info('支付回调：' . $pay_type);
        try {
            switch ($pay_type) {
                case 'wechat':
                    $res = app(WechatPayService::class)->notify();
                    break;
                case 'alipay':
                    $res = app(AliPayService::class)->notify();
                    break;
                case 'paypal':
                    $res = app(PayPalService::class)->notify();
                    break;
                case 'yabanpay':
                    app(YaBanPayService::class)->notify();
                    return response('ok');
                case 'yunpay':
                    app(YunPayService::class)->notify();
                    return response('ok');
                default:
                    $res = app(WechatPayService::class)->notify();
            }
        } catch (\Exception $exception) {
            \think\facade\Log::error('支付回调异常 [' . $pay_type . ']：' . $exception->getMessage() . ' trace: ' . $exception->getTraceAsString());
            return json_encode(['code' => 'FAIL', 'message' => Util::lang('失败')]);
        }

        return json_encode($res);
    }

    /**
     * 退款回调地址
     * @return string|Response
     */
    public function refundNotify(): string|Response
    {
        $pay_type = $this->request->all('payCode', '');
        try {
            switch ($pay_type) {
                case 'wechat':
                    $res = app(WechatPayService::class)->refund_notify();
                    break;
                case 'alipay':
                    $res = app(AliPayService::class)->refund_notify();
                    break;
                case 'paypal':
                    $res = app(PayPalService::class)->refund_notify();
                    break;
                case 'yabanpay':
                    app(YaBanPayService::class)->refund_notify();
                    return response('ok');
                case 'yunpay':
                    app(YunPayService::class)->refund_notify();
                    return response('ok');
                default:
                    $res = app(WechatPayService::class)->refund_notify();
            }
        } catch (\Exception $exception) {
            return json_encode(['code' => 'FAIL', 'message' => Util::lang('失败')]);
        }

        return json_encode($res);
    }

}
