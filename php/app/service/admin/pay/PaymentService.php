<?php

namespace app\service\admin\pay;

use app\model\msg\AdminMsg;
use app\model\payment\PayLog;
use app\model\payment\PayLogRefund;
use app\model\user\User;
use app\service\admin\common\sms\SmsService;
use app\service\admin\finance\RefundApplyService;
use app\service\admin\finance\UserRechargeOrderService;
use app\service\admin\msg\AdminMsgService;
use app\service\admin\order\OrderDetailService;
use app\service\admin\order\OrderService;
use app\service\admin\product\ECardService;
use app\service\admin\user\UserRankService;
use app\service\common\BaseService;
use exceptions\ApiException;
use utils\Config;
use utils\Time;
use utils\Util;

class PaymentService extends BaseService
{
    protected string|null $payType = null;

    /**
     * 获取支付配置
     * @return array
     */
    public function getConfig(): array
    {
        return Config::getConfig();
    }

    /**
     * 获取平台类型
     * @return string
     */
    public function getPayType(): string
    {
        if ($this->payType === null) {
            return Util::getClientType();
        } else {
            return $this->payType;
        }
    }

    /**
     * 获取支付配置
     * @return array
     */
    public function getAvailablePayment(string $type = 'order'): array
    {
        $payment = [];
        $config = $this->getConfig();
        $platFrom = $this->getPayType();

        if (!empty($config['useWechat']) && $config['useWechat'] == 1) {
            $payment[] = 'wechat';
        }
        if (!empty($config['useAlipay']) && $config['useAlipay'] == 1) {
            if ($platFrom != 'miniProgram' && $platFrom != 'wechat') $payment[] = 'alipay';
        }
        if (!empty($config['usePaypal']) && $config['usePaypal'] == 1) {
            $payment[] = 'paypal';
        }
        if (!empty($config['useYabanpay']) && $config['useYabanpay'] == 1) {
            //检测是否开启微信/支付宝支付
            if ($config['useYabanpayWechat']) {
                $payment[] = 'yabanpay_wechat';
            }
            if ($config['useYabanpayAlipay'] && $platFrom != 'miniProgram' && $platFrom != 'wechat') {
                $payment[] = 'yabanpay_alipay';
            }
        }
        if (!empty($config['useYunpay']) && $config['useYunpay'] == 1) {
            $payment[] = 'yunpay_wechat';
            if ($platFrom != 'miniProgram' && $platFrom != 'wechat') $payment[] = 'yunpay_alipay';
//            $payment[] = 'yunpay_yunshanfu';
        }
        if (!empty($config['useOffline']) && $config['useOffline'] == 1 && $type == 'order') {
            $payment[] = 'offline';
        }
        return $payment;
    }

    /**
     * 支付回调成功后处理
     * @param string $pay_sn
     * @param string $transaction_id
     * @return void
     * @throws ApiException
     */
    public function paySuccess(string $pay_sn, string $transaction_id = '', string $appid = ''): void
    {
        $pay_log = app(PayLogService::class)->getPayLogByPaySn($pay_sn);
        \think\facade\Log::info('paySuccess - pay_sn: ' . $pay_sn . ', pay_log存在: ' . (!empty($pay_log) ? 'yes' : 'no') . ', pay_log数据: ' . json_encode($pay_log));
        if (!$pay_log || $pay_log['pay_status'] == 1) {
            \think\facade\Log::info('paySuccess - 跳过处理，原因: ' . (empty($pay_log) ? 'pay_log不存在' : '已支付(pay_status=1)'));
            return;
        }
        if (empty($pay_log['order_id'])) {
            \think\facade\Log::info('paySuccess - 跳过处理，原因: order_id为空');
            return;
        }
        try {
            //修改支付状态
            app(PayLog::class)->where('paylog_id', $pay_log['paylog_id'])->save([
                'pay_status' => 1,
                'transaction_id' => $transaction_id,
                'appid' => $appid
            ]);
            \think\facade\Log::info('paySuccess - pay_status已更新为1, paylog_id: ' . $pay_log['paylog_id']);
            switch ($pay_log['order_type']) {
                case 0:
                    //更新订单中的支付单号
                    $order = app(OrderService::class)->getOrder($pay_log['order_id']);
                    $order->out_trade_no = $pay_sn;
                    $order->save();
                    app(OrderDetailService::class)->setOrderId($pay_log['order_id'])->setPaidMoney($pay_log['pay_amount'])->updateOrderMoney();
                    app(OrderService::class)->setOrderPaid($pay_log['order_id']);
                    //app(MessageCenterService::class)->sendUserMessage($order->user_id, $order->order_id, 2);

                    // 卡券分配
                    app(ECardService::class)->getCardByOrder($pay_log['order_id']);
                    // 订单交易成功获取成长值
                    app(UserRankService::class)->getRankGrowth($order->user_id);

                    //发送支付成功短信
                    $this->sendPaySuccessSms($order->mobile, $order->order_sn);

                    $paid_amount =  number_format((float)$pay_log['pay_amount'], 2, '.', '');
                    // 订单支付成功 -- 发送后台消息
                    app(AdminMsgService::class)->createMessage([
                        "msg_type" => AdminMsg::MSG_TYPE_ORDER_PAY,
                        'order_id' => $pay_log['order_id'],
                        'title' => "您的订单已支付完成：{$pay_log['order_sn']}，金额：{$paid_amount}",
                        'content' => "您有订单【{$pay_log['order_sn']}】已支付完成，请注意查看",
                        'related_data' => ["order_id" => $pay_log['order_id']]
                    ]);
                    break;
                case 1:
                    //充值
                    app(UserRechargeOrderService::class)->setRechargePaid($pay_log['order_id']);
                    break;
                default:
                    break;
            }
        } catch (\Exception $exception) {
            \think\facade\Log::error('paySuccess - 异常: ' . $exception->getMessage() . ' trace: ' . $exception->getTraceAsString());
            throw new ApiException($exception->getMessage());
        }
    }

    public function sendPaySuccessSms(string $mobile, string $order_sn)
    {

        if(empty($mobile)) {
            return false;
        }

        app(SmsService::class)->sendSms($mobile, 'user_pay', [$order_sn]);

    }

    /**
     * 退款回调成功处理
     * @param string $refund_sn
     * @return void
     * @throws ApiException
     */
    public function refundSuccess(string $refund_sn): void
    {
        $pay_log_refund = app(PayLogRefundService::class)->getPayLogRefundByPaySn($refund_sn);
        if (!$pay_log_refund || $pay_log_refund['status'] == 1) {
            return;
        }
        if (empty($pay_log_refund['order_id'])) return;
        try {
            //修改通知状态
            app(PayLogRefund::class)->where('paylog_refund_id', $pay_log_refund['paylog_refund_id'])->save(['status' => 1, 'notify_time' => Time::now()]);
            app(RefundApplyService::class)->onlineRefundSuccess($pay_log_refund['paylog_refund_id']);
        } catch (\Exception $exception) {
            throw new ApiException(Util::lang($exception->getMessage()));
        }
    }

}
