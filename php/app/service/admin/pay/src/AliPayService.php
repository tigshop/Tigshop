<?php

namespace app\service\admin\pay\src;

use Alipay\EasySDK\Kernel\Config as AliConfig;
use Alipay\EasySDK\Kernel\Factory;
use app\service\admin\pay\PaymentService;
use app\service\admin\pay\PayService;
use exceptions\ApiException;
use think\Exception;
use utils\Config;
use utils\Util;

class AliPayService extends PayService
{
    const NATIVE_PAY = 'pc'; //扫码支付
    const APP_PAY = 'app'; //APP支付
    const HTML_PAY = 'h5'; //H5支付
    private string|null $payType = null;

    protected string $appId = '';
    protected string $rsaPrivateKey = '';
    protected string $alipayRsaPublicKey = '';

    /**
     * 初始化
     * @throws ApiException
     */
    public function __construct()
    {
        $cfg = Config::getConfig();
        if (empty($cfg['alipayAppid'])) {
            throw new ApiException('支付宝APPID不能为空');
        }

        if (empty($cfg['alipayRsaPrivateKey'])) {
            throw new ApiException('应用私钥不能为空');
        }

        if (empty($cfg['alipayRsaPublicKey'])) {
            throw new ApiException('支付宝公钥不能为空');
        }

        $this->appId = $cfg['alipayAppid'];
        $payTpe = $this->getPayType();
        //移动应用APPID切换
        if ($payTpe == 'app') $this->appId = $cfg['alipayMobileAppid'] ?? '';
        $this->rsaPrivateKey = $cfg['alipayRsaPrivateKey'];
        $this->alipayRsaPublicKey = $cfg['alipayRsaPublicKey'];
        Factory::setOptions($this->getOptions());
    }

    public function getPayType(): string
    {
        if ($this->payType === null) {
            return Util::getClientType();
        } else {
            return $this->payType;
        }
    }

    /**
     * 统一下单
     * @param array $order
     * @return array
     * @throws ApiException
     */
    public function pay(array $order): array
    {
        try {
            switch ($this->getPayType()) {
                case self::NATIVE_PAY:

                    return self::AliPay($order);
                case self::APP_PAY:
                    return self::AppPay($order);
                case self::HTML_PAY:
                    return self::HtmlPay($order);
                default:

                    return [];
            }
        } catch (Exception $exception) {

            throw new ApiException(Util::lang($exception->getMessage()));
        }
    }

    /**
     * 退款
     * @param array $order ['pay_sn' => '平台支付订单号','order_refund' => '退款金额','refund_sn' => '退款单号','order_amount' => '订单总金额']
     * @return array
     * @throws ApiException
     */
    public function refund(array $order): array
    {
        try {
            $result = Factory::payment()->common()->asyncNotify($this->getRefundNotifyUrl('alipay'))->optional('out_request_no', $order['refund_sn'])->refund($order['pay_sn'], $order['order_refund']);
            if (!empty($result->code) && $result->code == 10000) {
                return ['code' => 'SUCCESS', 'message' => '支付成功'];
            } else {
                return ['code' => 'FAIL', 'message' => $result->msg . ' ' . $result->subMsg];
            }
        } catch (\Exception $exception) {
            throw new ApiException($exception->getMessage());
        }
    }

    /**
     * 回调处理
     * @return array
     * @throws ApiException
     */
    public function notify(): array
    {
        try {
            $parameters = request()->post();
            \think\facade\Log::info('支付宝回调参数：' . json_encode($parameters));
            if (isset($parameters['payCode'])) unset($parameters['payCode']);
            $res = Factory::payment()->common()->verifyNotify($parameters);
            \think\facade\Log::info('支付宝验签结果：' . ($res ? 'true' : 'false'));
            if ($res) {
                //支付成功--设置订单未已支付
                $pay_sn = $parameters['out_trade_no'];
                $transaction_id = $parameters['trade_no']??'';
                \think\facade\Log::info('支付宝交易状态：' . ($parameters['trade_status'] ?? 'unknown') . ', pay_sn: ' . $pay_sn . ', transaction_id: ' . $transaction_id);
                //判断是交易成功才通过
                if ($parameters['trade_status'] == 'TRADE_SUCCESS' || $parameters['trade_status'] == 'TRADE_FINISHED'){
                    app(PaymentService::class)->paySuccess($pay_sn, $transaction_id);
                }
                return ['code' => 'SUCCESS', 'message' => Util::lang('支付成功')];
            } else {
                \think\facade\Log::error('支付宝验签失败，参数：' . json_encode($parameters));
                return ['code' => 'FAIL', 'message' => Util::lang('失败')];
            }
        } catch (\Exception $exception) {
            \think\facade\Log::error('支付宝回调异常：' . $exception->getMessage() . ' trace: ' . $exception->getTraceAsString());
            throw new ApiException(Util::lang($exception->getMessage()));
        }
    }

    /**
     * @return array
     * @throws ApiException
     */
    public function refund_notify(): array
    {
        try {
            $parameters = request()->post();
            if (isset($parameters['payCode'])) unset($parameters['payCode']);
            $res = Factory::payment()->common()->verifyNotify($parameters);
            if ($res) {
                $refund_sn = $parameters['out_request_no'];
                app(PaymentService::class)->refundSuccess($refund_sn);
                return ['code' => 'SUCCESS', 'message' => Util::lang('支付成功')];
            } else {
                return ['code' => 'FAIL', 'message' => Util::lang('失败')];
            }
        } catch (\Exception $exception) {
            throw new ApiException(Util::lang('支付发起失败：') . $exception->getMessage());
        }
    }

    /**
     * app支付
     * @param array $order
     * @return array
     * @throws ApiException
     */
    public function AppPay(array $order): array
    {
        try {
            $result = Factory::payment()->app()->pay($order['order_sn'], $order['pay_sn'], $order['order_amount']);
            if ($result->body) {
                return ['provider' => 'alipay', 'orderInfo' => $result->body];
            } else {
                throw new ApiException(Util::lang($result->body));
            }
        } catch (\Exception $exception) {
            throw new ApiException(Util::lang('支付发起失败：') . $exception->getMessage());
        }
    }

    /**
     * PC网站扫码支付
     * @param array $order
     * @return array
     * @throws ApiException
     */
    public function AliPay(array $order): array
    {
        try {
            $result = Factory::payment()->page()->pay($order['order_sn'], $order['pay_sn'], $order['order_amount'], $this->getReturnUrl($order['order_id']));
            if ($result->body) {
                return ['html' => $result->body];
            } else {
                throw new ApiException(Util::lang('发起支付失败'));
            }
        } catch (\Exception $exception) {
            throw new ApiException(Util::lang('支付发起失败：') . $exception->getMessage());
        }
    }

    /**
     * 手机网站支付
     * @param array $order
     * @return array
     * @throws ApiException
     */
    public function HtmlPay(array $order): array
    {
        try {
            $result = Factory::payment()->wap()->pay($order['order_sn'], $order['pay_sn'], $order['order_amount'], '', '');
            if ($result->body) {
                return ['html' => $result->body];
            } else {
                throw new ApiException('发起支付失败');
            }
        } catch (\Exception $exception) {
            throw new ApiException($exception->getMessage());
        }
    }

    public function instance()
    {
    }

    /**
     * 配置参数
     * @return AliConfig
     */
    public function getOptions(): AliConfig
    {
        $options = new AliConfig();
        $options->protocol = 'https';
        $options->gatewayHost = 'openapi.alipay.com';
        $options->signType = 'RSA2';
        $options->appId = $this->appId;
        // 为避免私钥随源码泄露，推荐从文件中读取私钥字符串而不是写入源码中
        $options->merchantPrivateKey = $this->rsaPrivateKey;
        //注：如果采用非证书模式，则无需赋值上面的三个证书路径，改为赋值如下的支付宝公钥字符串即可
        $options->alipayPublicKey = $this->alipayRsaPublicKey;
        //可设置异步通知接收服务地址（可选）
        //如果需要使用文件上传接口，请不要设置该参数
        $options->notifyUrl = $this->getNotifyUrl('alipay');
        //可设置AES密钥，调用AES加解密相关接口时需要（可选）
//        $options->encryptKey = "<-- 请填写您的AES密钥，例如：aa4BtZ4tspm2wnXLb1ThQA== -->";
        return $options;
    }
}
