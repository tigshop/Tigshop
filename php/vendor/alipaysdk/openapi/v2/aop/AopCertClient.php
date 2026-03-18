<?php

require_once 'AopEncrypt.php';
require_once 'AopCertification.php';
require_once 'EncryptParseItem.php';
require_once 'EncryptResponseData.php';
require_once 'SignData.php';

class AopCertClient
{
    //应用证书地址
    public $appCertSN;

    //支付宝公钥证书地址
    public $alipayCertSN;

    //支付宝根证书地址
    public $alipayRootCertSN;

    //支付宝根证书地址
    public $alipayRootCertContent;

    //是否校验支付宝公钥证书
    public $isCheckAlipayPublicCert;

    //应用ID
    public $appId;

    //私钥文件路径
    public $rsaPrivateKeyFilePath;

    //私钥值
    public $rsaPrivateKey;

    //网关
    public $gatewayUrl = "https://openapi.alipay.com/gateway.do";
    //返回数据格式
    public $format = "json";

    //api版本
    public $apiVersion = "1.0";

    // 表单提交字符集编码
    public $postCharset = "UTF-8";

    //使用文件读取文件格式，请只传递该值
    public $alipayPublicKey = null;

    //使用读取字符串格式，请只传递该值
    public $alipayrsaPublicKey;

    public $debugInfo = false;

    //签名类型
    public $signType = "RSA";

    //加密密钥和类型
    public $encryptKey;

    public $encryptType = "AES";

    protected $alipaySdkVersion = "alipay-sdk-PHP-4.20.296.ALL";

    private $fileCharset = "UTF-8";

    private $RESPONSE_SUFFIX = "_response";

    private $ERROR_RESPONSE = "error_response";

    private $SIGN_NODE_NAME = "sign";

    private $ALIPAY_CERT_SN = "alipay_cert_sn";


    //加密XML节点名称
    private $ENCRYPT_XML_NODE_NAME = "response_encrypted";

    private $needEncrypt = false;

    private $targetServiceUrl = "";
    // 添加构造函数
    function __construct() {
        //根据参数个数和参数类型 来做相应的判断
        if(func_num_args()==1 && func_get_arg(0) instanceof AlipayConfig){
            $config = func_get_arg(0);
            $this->appId = $config->getAppId();
            $this->format = $config->getFormat();
            $this->gatewayUrl = $config->getServerUrl();
            $this->signType = $config->getSignType();
            $this->postCharset = $config->getCharset();
            $this->rsaPrivateKey = $config->getPrivateKey();
            // 优先从Content字段获取内容, content 未设置内容则从文件路径中读取内容
            $alipayPublicContent = !$this->checkEmpty($config->getAlipayPublicCertContent())?$config->getAlipayPublicCertContent():file_get_contents($config->getAlipayPublicCertPath());
            $this->alipayrsaPublicKey = $this->getPublicKeyFromContent($alipayPublicContent);
           
            $appCertContent = !$this->checkEmpty($config->getAppCertContent())?$config->getAppCertContent():file_get_contents($config->getAppCertPath());
            $this->appCertSN = $this->getCertSNFromContent($appCertContent);

            $rootCertContent = !$this->checkEmpty($config->getRootCertContent())?$config->getRootCertContent():file_get_contents($config->getRootCertPath());
            $this->alipayRootCertSN = $this->getRootCertSNFromContent($rootCertContent);
        }
    }


    /**
     * 从证书中提取序列号
     * @param $cert
     * @return string
     */
    public function getCertSN($certPath)
    {
        $cert = file_get_contents($certPath);
        $ssl = openssl_x509_parse($cert);
        $SN = md5(array2string(array_reverse($ssl['issuer'])) . $ssl['serialNumber']);
        return $SN;
    }
    /**
     * 从证书内容中提取序列号
     * @param $certContent
     * @return string
     */
    public function getCertSNFromContent($certContent){
        $ssl = openssl_x509_parse($certContent);
        $SN = md5(array2string(array_reverse($ssl['issuer'])) . $ssl['serialNumber']);
        return $SN;
    }
    /**
     * 提取根证书序列号
     * @param $cert  根证书
     * @return string|null
     */
    public function getRootCertSN($certPath)
    {
        $cert = file_get_contents($certPath);
        $this->alipayRootCertContent = $cert;
        $array = explode("-----END CERTIFICATE-----", $cert);
        $SN = null;
        for ($i = 0; $i < count($array) - 1; $i++) {
            $ssl[$i] = openssl_x509_parse($array[$i] . "-----END CERTIFICATE-----");
            if(strpos($ssl[$i]['serialNumber'],'0x') === 0){
                $ssl[$i]['serialNumber'] = $this->hex2dec($ssl[$i]['serialNumberHex']);
            }
            if ($ssl[$i]['signatureTypeLN'] == "sha1WithRSAEncryption" || $ssl[$i]['signatureTypeLN'] == "sha256WithRSAEncryption") {
                if ($SN == null) {
                    $SN = md5(array2string(array_reverse($ssl[$i]['issuer'])) . $ssl[$i]['serialNumber']);
                } else {

                    $SN = $SN . "_" . md5(array2string(array_reverse($ssl[$i]['issuer'])) . $ssl[$i]['serialNumber']);
                }
            }
        }
        return $SN;
    }
    /**
     * 提取根证书序列号
     * @param $certContent  根证书
     * @return string|null
     */
    public function getRootCertSNFromContent($certContent){
        $this->alipayRootCertContent = $certContent;
        $array = explode("-----END CERTIFICATE-----", $certContent);
        $SN = null;
        for ($i = 0; $i < count($array) - 1; $i++) {
            $ssl[$i] = openssl_x509_parse($array[$i] . "-----END CERTIFICATE-----");
            if(strpos($ssl[$i]['serialNumber'],'0x') === 0){
                $ssl[$i]['serialNumber'] = $this->hex2dec($ssl[$i]['serialNumberHex']);
            }
            if ($ssl[$i]['signatureTypeLN'] == "sha1WithRSAEncryption" || $ssl[$i]['signatureTypeLN'] == "sha256WithRSAEncryption") {
                if ($SN == null) {
                    $SN = md5(array2string(array_reverse($ssl[$i]['issuer'])) . $ssl[$i]['serialNumber']);
                } else {

                    $SN = $SN . "_" . md5(array2string(array_reverse($ssl[$i]['issuer'])) . $ssl[$i]['serialNumber']);
                }
            }
        }
        return $SN;
    }
    /**
     * 0x转高精度数字
     * @param $hex
     * @return int|string
     */
    function hex2dec($hex)
    {
        $dec = 0;
        $len = strlen($hex);
        for ($i = 1; $i <= $len; $i++) {
            $dec = bcadd($dec, bcmul(strval(hexdec($hex[$i - 1])), bcpow('16', strval($len - $i))));
        }
        return $dec;
    }

    /**
     * 从证书中提取公钥
     * @param $cert
     * @return mixed
     */
    public function getPublicKey($certPath)
    {
        $cert = file_get_contents($certPath);
        $pkey = openssl_pkey_get_public($cert);
        $keyData = openssl_pkey_get_details($pkey);
        $public_key = str_replace('-----BEGIN PUBLIC KEY-----', '', $keyData['key']);
        $public_key = trim(str_replace('-----END PUBLIC KEY-----', '', $public_key));
        return $public_key;
    }
    /**
     * 从证书content中提取公钥
     * @param $content
     * @return mixed
     */
    public function getPublicKeyFromContent($content){
        $pkey = openssl_pkey_get_public($content);
        $keyData = openssl_pkey_get_details($pkey);
        $public_key = str_replace('-----BEGIN PUBLIC KEY-----', '', $keyData['key']);
        $public_key = trim(str_replace('-----END PUBLIC KEY-----', '', $public_key));
        return $public_key;
    }

    /**
     * 验证签名
     * 在使用本方法前，必须初始化AopCertClient且传入公钥参数。
     * 公钥是否是读取字符串还是读取文件，是根据初始化传入的值判断的。
     *
     * @param $params
     * @param $rsaPublicKeyFilePath
     * @param string $signType
     * @return bool
     */
    public function rsaCheckV1($params, $rsaPublicKeyFilePath,$signType='RSA') {
        $sign = $params['sign'];
        unset($params['sign']);
        unset($params['sign_type']);
        return $this->verify($this->getCheckSignContent($params), $sign, $rsaPublicKeyFilePath,$signType);
    }

    /**
     * 验证签名
     * 在使用本方法前，必须初始化AopCertClient且传入公钥参数。
     * 公钥是否是读取字符串还是读取文件，是根据初始化传入的值判断的。
     *
     * @param $params
     * @param $rsaPublicKeyFilePath
     * @param string $signType
     * @return bool
     */
    public function rsaCheckV2($params, $rsaPublicKeyFilePath, $signType='RSA') {
        $sign = $params['sign'];
        unset($params['sign']);
        return $this->verify($this->getCheckSignContent($params), $sign, $rsaPublicKeyFilePath, $signType);
    }


    function getCheckSignContent($params)
    {
        ksort($params);

        $stringToBeSigned = "";
        $i = 0;
        foreach ($params as $k => $v) {
            // 转换成目标字符集
            $v = $this->characet($v, $this->postCharset);

            if ($i == 0) {
                $stringToBeSigned .= "$k" . "=" . "$v";
            } else {
                $stringToBeSigned .= "&" . "$k" . "=" . "$v";
            }
            $i++;
        }

        unset ($k, $v);
        return $stringToBeSigned;
    }


    /**
     *  在使用本方法前，必须初始化AopCertClient且传入公私钥参数。
     *  公钥是否是读取字符串还是读取文件，是根据初始化传入的值判断的。
     **/
    public function checkSignAndDecrypt($params, $rsaPublicKeyPem, $rsaPrivateKeyPem, $isCheckSign, $isDecrypt, $signType='RSA') {
        $charset = $params['charset'];
        $bizContent = $params['biz_content'];
        if ($isCheckSign) {
            if (!$this->rsaCheckV2($params, $rsaPublicKeyPem, $signType)) {
                echo "<br/>checkSign failure<br/>";
                exit;
            }
        }
        if ($isDecrypt) {
            return $this->rsaDecrypt($bizContent, $rsaPrivateKeyPem, $charset);
        }

        return $bizContent;
    }

    /**
     *  在使用本方法前，必须初始化AopCertClient且传入公私钥参数。
     *  公钥是否是读取字符串还是读取文件，是根据初始化传入的值判断的。
     **/
    public function encryptAndSign($bizContent, $rsaPublicKeyPem, $rsaPrivateKeyPem, $charset, $isEncrypt, $isSign, $signType='RSA') {
        // 加密，并签名
        if ($isEncrypt && $isSign) {
            $encrypted = $this->rsaEncrypt($bizContent, $rsaPublicKeyPem, $charset);
            $sign = $this->sign($encrypted, $signType);
            $response = "<?xml version=\"1.0\" encoding=\"$charset\"?><alipay><response>$encrypted</response><encryption_type>RSA</encryption_type><sign>$sign</sign><sign_type>$signType</sign_type></alipay>";
            return $response;
        }
        // 加密，不签名
        if ($isEncrypt && (!$isSign)) {
            $encrypted = $this->rsaEncrypt($bizContent, $rsaPublicKeyPem, $charset);
            $response = "<?xml version=\"1.0\" encoding=\"$charset\"?><alipay><response>$encrypted</response><encryption_type>$signType</encryption_type></alipay>";
            return $response;
        }
        // 不加密，但签名
        if ((!$isEncrypt) && $isSign) {
            $sign = $this->sign($bizContent, $signType);
            $response = "<?xml version=\"1.0\" encoding=\"$charset\"?><alipay><response>$bizContent</response><sign>$sign</sign><sign_type>$signType</sign_type></alipay>";
            return $response;
        }
        // 不加密，不签名
        $response = "<?xml version=\"1.0\" encoding=\"$charset\"?>$bizContent";
        return $response;
    }

    /**
     *  在使用本方法前，必须初始化AopCertClient且传入公私钥参数。
     **/
    public function rsaEncrypt($data, $rsaPublicKeyFilePath, $charset) {
        if($this->checkEmpty($this->alipayPublicKey)){
            //读取字符串
            $pubKey= $this->alipayrsaPublicKey;
            $res = "-----BEGIN PUBLIC KEY-----\n" .
                wordwrap($pubKey, 64, "\n", true) .
                "\n-----END PUBLIC KEY-----";
        }else {
            //读取公钥文件
            $pubKey = file_get_contents($rsaPublicKeyFilePath);
            //转换为openssl格式密钥
            $res = openssl_get_publickey($pubKey);
        }

        ($res) or die('支付宝RSA公钥错误。请检查公钥文件格式是否正确');
        $blocks = $this->splitCN($data, 0, 30, $charset);
        $chrtext  = null;
        $encodes  = array();
        foreach ($blocks as $n => $block) {
            if (!openssl_public_encrypt($block, $chrtext , $res)) {
                echo "<br/>" . openssl_error_string() . "<br/>";
            }
            $encodes[] = $chrtext ;
        }
        $chrtext = implode(",", $encodes);

        return base64_encode($chrtext);
    }

    /**
     *  在使用本方法前，必须初始化AopCertClient且传入公私钥参数。
     *  公钥是否是读取字符串还是读取文件，是根据初始化传入的值判断的。
     **/
    public function rsaDecrypt($data, $rsaPrivateKeyPem, $charset) {

        if($this->checkEmpty($this->rsaPrivateKeyFilePath)){
            //读字符串
            $priKey=$this->rsaPrivateKey;
            $res = "-----BEGIN RSA PRIVATE KEY-----\n" .
                wordwrap($priKey, 64, "\n", true) .
                "\n-----END RSA PRIVATE KEY-----";
        }else {
            $priKey = file_get_contents($this->rsaPrivateKeyFilePath);
            $res = openssl_get_privatekey($priKey);
        }
        ($res) or die('您使用的私钥格式错误，请检查RSA私钥配置');
        //转换为openssl格式密钥
        $decodes = explode(',', $data);
        $strnull = "";
        $dcyCont = "";
        foreach ($decodes as $n => $decode) {
            if (!openssl_private_decrypt($decode, $dcyCont, $res)) {
                echo "<br/>" . openssl_error_string() . "<br/>";
            }
            $strnull .= $dcyCont;
        }
        return $strnull;
    }

    function splitCN($cont, $n = 0, $subnum, $charset) {
        //$len = strlen($cont) / 3;
        $arrr = array();
        for ($i = $n; $i < strlen($cont); $i += $subnum) {
            $res = $this->subCNchar($cont, $i, $subnum, $charset);
            if (!empty ($res)) {
                $arrr[] = $res;
            }
        }

        return $arrr;
    }

    function subCNchar($str, $start = 0, $length, $charset = "gbk") {
        if (strlen($str) <= $length) {
            return $str;
        }
        $re['utf-8'] = "/[\x01-\x7f]|[\xc2-\xdf][\x80-\xbf]|[\xe0-\xef][\x80-\xbf]{2}|[\xf0-\xff][\x80-\xbf]{3}/";
        $re['gb2312'] = "/[\x01-\x7f]|[\xb0-\xf7][\xa0-\xfe]/";
        $re['gbk'] = "/[\x01-\x7f]|[\x81-\xfe][\x40-\xfe]/";
        $re['big5'] = "/[\x01-\x7f]|[\x81-\xfe]([\x40-\x7e]|\xa1-\xfe])/";
        preg_match_all($re[$charset], $str, $match);
        $slice = join("", array_slice($match[0], $start, $length));
        return $slice;
    }

    /**
     * 生成用于调用收银台SDK的字符串
     * @param $request SDK接口的请求参数对象
     * @param $appAuthToken 三方应用授权token
     * @return string
     */
    public function sdkExecute($request, $appAuthToken = null) {

        $this->setupCharsets($request);
        $params['app_id'] = $this->appId;
        $params['method'] = $request->getApiMethodName();
        $params['format'] = $this->format;
        $params['sign_type'] = $this->signType;
        $params['timestamp'] = date("Y-m-d H:i:s");
        $params['alipay_sdk'] = $this->alipaySdkVersion;
        $params['charset'] = $this->postCharset;
        $version = $request->getApiVersion();
        $params['version'] = $this->checkEmpty($version) ? $this->apiVersion : $version;
        $params["app_cert_sn"] = $this->appCertSN;
        $params["alipay_root_cert_sn"] = $this->alipayRootCertSN;
        if ($notify_url = $request->getNotifyUrl()) {
            $params['notify_url'] = $notify_url;
        }
        $params['app_auth_token'] = $appAuthToken;
        $dict = $request->getApiParas();
        $params['biz_content'] = $dict['biz_content'];
        ksort($params);
        $params['sign'] = $this->generateSign($params, $this->signType);
        foreach ($params as &$value) {
            $value = $this->characet($value, $params['charset']);
        }
        return http_build_query($params);
    }


    /**
     * 页面提交执行方法
     * @param $request 跳转类接口的request
     * @param string $httpmethod 提交方式,两个值可选：post、get;
     * @param null $appAuthToken 三方应用授权token
     * @return 构建好的、签名后的最终跳转URL（GET）或String形式的form（POST）
     * @throws Exception
     */
    public function pageExecute($request, $httpmethod = "POST", $appAuthToken = null) {

        $this->setupCharsets($request);
        if (strcasecmp($this->fileCharset, $this->postCharset)) {
            throw new \Exception("文件编码：[" . $this->fileCharset . "] 与表单提交编码：[" . $this->postCharset . "]两者不一致!");
        }
        $iv=null;
        if(!$this->checkEmpty($request->getApiVersion())){
            $iv=$request->getApiVersion();
        }else{
            $iv=$this->apiVersion;
        }

        //组装系统参数
        $sysParams["app_id"] = $this->appId;
        $sysParams["version"] = $iv;
        $sysParams["format"] = $this->format;
        $sysParams["sign_type"] = $this->signType;
        $sysParams["method"] = $request->getApiMethodName();
        $sysParams["timestamp"] = date("Y-m-d H:i:s");
        $sysParams["alipay_sdk"] = $this->alipaySdkVersion;
        $sysParams["terminal_type"] = $request->getTerminalType();
        $sysParams["terminal_info"] = $request->getTerminalInfo();
        $sysParams["prod_code"] = $request->getProdCode();
        $sysParams["notify_url"] = $request->getNotifyUrl();
        $sysParams["return_url"] = $request->getReturnUrl();
        $sysParams["charset"] = $this->postCharset;
        $sysParams["app_auth_token"] = $appAuthToken;
        $sysParams["app_cert_sn"] = $this->appCertSN;
        $sysParams["alipay_root_cert_sn"] = $this->alipayRootCertSN;

        //获取业务参数
        $apiParams = $request->getApiParas();
        if (method_exists($request,"getNeedEncrypt") &&$request->getNeedEncrypt()){
            $sysParams["encrypt_type"] = $this->encryptType;
            if ($this->checkEmpty($apiParams['biz_content'])) {
                throw new \Exception(" api request Fail! The reason : encrypt request is not supperted!");
            }
            if ($this->checkEmpty($this->encryptKey) || $this->checkEmpty($this->encryptType)) {
                throw new \Exception(" encryptType and encryptKey must not null! ");
            }
            if ("AES" != $this->encryptType) {
                throw new \Exception("加密类型只支持AES");
            }
            // 执行加密
            $enCryptContent = encrypt($apiParams['biz_content'], $this->encryptKey);
            $apiParams['biz_content'] = $enCryptContent;
        }
        $totalParams = array_merge($apiParams, $sysParams);
        //待签名字符串
        $preSignStr = $this->getSignContent($totalParams);
        //签名
        $totalParams["sign"] = $this->generateSign($totalParams, $this->signType);

        if ("GET" == strtoupper($httpmethod)) {
            //value做urlencode
            $preString=$this->getSignContentUrlencode($totalParams);
            //拼接GET请求串
            $requestUrl = $this->gatewayUrl."?".$preString;
            return $requestUrl;
        } else {
            //拼接表单字符串
            return $this->buildRequestForm($totalParams);
        }
    }

    //此方法对value做urlencode
    public function getSignContentUrlencode($params) {
        ksort($params);
        $stringToBeSigned = "";
        $i = 0;
        foreach ($params as $k => $v) {
            if (false === $this->checkEmpty($v) && "@" != substr($v, 0, 1)) {

                // 转换成目标字符集
                $v = $this->characet($v, $this->postCharset);

                if ($i == 0) {
                    $stringToBeSigned .= "$k" . "=" . urlencode($v);
                } else {
                    $stringToBeSigned .= "&" . "$k" . "=" . urlencode($v);
                }
                $i++;
            }
        }
        unset ($k, $v);
        return $stringToBeSigned;
    }


    /**
     * 建立请求，以表单HTML形式构造（默认）
     * @param $para_temp 请求参数数组
     * @return 提交表单HTML文本
     */
    protected function buildRequestForm($para_temp) {
        $sHtml = "<form id='alipaysubmit' name='alipaysubmit' action='".$this->gatewayUrl."?charset=".trim($this->postCharset)."' method='POST'>";
        while (list ($key, $val) = $this->fun_adm_each($para_temp)) {
            if (false === $this->checkEmpty($val)) {
                //$val = $this->characet($val, $this->postCharset);
                $val = str_replace("'","&apos;",$val);
                //$val = str_replace("\"","&quot;",$val);
                $sHtml.= "<input type='hidden' name='".$key."' value='".$val."'/>";
            }
        }
        //submit按钮控件请不要含有name属性
        $sHtml = $sHtml."<input type='submit' value='ok' style='display:none;''></form>";
        $sHtml = $sHtml."<script>document.forms['alipaysubmit'].submit();</script>";
        return $sHtml;
    }

    protected function fun_adm_each(&$array)
    {
        $res = array();
        $key = key($array);
        if ($key !== null) {
            next($array);
            $res[1] = $res['value'] = $array[$key];
            $res[0] = $res['key'] = $key;
        } else {
            $res = false;
        }
        return $res;
    }

    public function execute($request, $authToken = null, $appInfoAuthtoken = null,$targetAppId = null) {
        $this->setupCharsets($request);
        //如果两者编码不一致，会出现签名验签或者乱码
        if (strcasecmp($this->fileCharset, $this->postCharset)) {
            throw new \Exception("文件编码：[" . $this->fileCharset . "] 与表单提交编码：[" . $this->postCharset . "]两者不一致!");
        }
        $iv = null;
        if (!$this->checkEmpty($request->getApiVersion())) {
            $iv = $request->getApiVersion();
        } else {
            $iv = $this->apiVersion;
        }
        //组装系统参数
        $sysParams["app_id"] = $this->appId;
        $sysParams["version"] = $iv;
        $sysParams["format"] = $this->format;
        $sysParams["sign_type"] = $this->signType;
        $sysParams["method"] = $request->getApiMethodName();
        $sysParams["timestamp"] = date("Y-m-d H:i:s");
        $sysParams["auth_token"] = $authToken;
        $sysParams["alipay_sdk"] = $this->alipaySdkVersion;
        $sysParams["terminal_type"] = $request->getTerminalType();
        $sysParams["terminal_info"] = $request->getTerminalInfo();
        $sysParams["prod_code"] = $request->getProdCode();
        $sysParams["notify_url"] = $request->getNotifyUrl();
        $sysParams["charset"] = $this->postCharset;
        $sysParams["app_auth_token"] = $appInfoAuthtoken;
        $sysParams["app_cert_sn"] = $this->appCertSN;
        $sysParams["alipay_root_cert_sn"] = $this->alipayRootCertSN;
        $sysParams["target_app_id"] = $targetAppId;
        if(!$this->checkEmpty($this->targetServiceUrl)){
            $sysParams["ws_service_url"] = $this->targetServiceUrl;
        }

        //获取业务参数
        $apiParams = $request->getApiParas();

        if (method_exists($request,"getNeedEncrypt") && $request->getNeedEncrypt()){
            $sysParams["encrypt_type"] = $this->encryptType;
            if ($this->checkEmpty($apiParams['biz_content'])) {
                throw new \Exception(" api request Fail! The reason : encrypt request is not supperted!");
            }
            if ($this->checkEmpty($this->encryptKey) || $this->checkEmpty($this->encryptType)) {
                throw new \Exception(" encryptType and encryptKey must not null! ");
            }
            if ("AES" != $this->encryptType) {
                throw new \Exception("加密类型只支持AES");
            }
            // 执行加密
            $enCryptContent = encrypt($apiParams['biz_content'], $this->encryptKey);
            $apiParams['biz_content'] = $enCryptContent;
        }

        //签名
        $sysParams["sign"] = $this->generateSign(array_merge($apiParams, $sysParams), $this->signType);

        //系统参数放入GET请求串
        $requestUrl = $this->gatewayUrl . "?";
        foreach ($sysParams as $sysParamKey => $sysParamValue) {
            $requestUrl .= "$sysParamKey=" . urlencode($this->characet($sysParamValue, $this->postCharset)) . "&";
        }
        $requestUrl = substr($requestUrl, 0, -1);

        //发起HTTP请求
        try {
            $resp = $this->curl($requestUrl, $apiParams);
        } catch (Exception $e) {
            $this->logCommunicationError($sysParams["method"], $requestUrl, "HTTP_ERROR_" . $e->getCode(), $e->getMessage());
            return false;
        }

        //解析AOP返回结果
        $respWellFormed = false;

        // 将返回结果转换本地文件编码
        $r = iconv($this->postCharset, $this->fileCharset . "//IGNORE", $resp);
        $signData = null;

        if ("json" == strtolower($this->format)) {
            $respObject = json_decode($r);
            if (null !== $respObject) {
                $respWellFormed = true;
                $signData = $this->parserJSONSignData($request, $resp, $respObject);
            }
        } else if ("xml" == $this->format) {
            $disableLibxmlEntityLoader = libxml_disable_entity_loader(true);
            $respObject = @ simplexml_load_string($resp);
            if (false !== $respObject) {
                $respWellFormed = true;
                $signData = $this->parserXMLSignData($request, $resp);
            }
            libxml_disable_entity_loader($disableLibxmlEntityLoader);
        }

        //返回的HTTP文本不是标准JSON或者XML，记下错误日志
        if (false === $respWellFormed) {
            $this->logCommunicationError($sysParams["method"], $requestUrl, "HTTP_RESPONSE_NOT_WELL_FORMED", $resp);
            return false;
        }

        // 验签
        $this->checkResponseSign($request, $signData, $resp, $respObject);

        // 解密
        if (method_exists($request,"getNeedEncrypt") &&$request->getNeedEncrypt()){

            if ("json" == strtolower($this->format)) {
                $resp = $this->encryptJSONSignSource($request, $resp);
                // 将返回结果转换本地文件编码
                $r = iconv($this->postCharset, $this->fileCharset . "//IGNORE", $resp);
                $respObject = json_decode($r);
            }else{
                $resp = $this->encryptXMLSignSource($request, $resp);
                $r = iconv($this->postCharset, $this->fileCharset . "//IGNORE", $resp);
                $disableLibxmlEntityLoader = libxml_disable_entity_loader(true);
                $respObject = @ simplexml_load_string($r);
                libxml_disable_entity_loader($disableLibxmlEntityLoader);
            }
        }
        return $respObject;
    }


    /**
     * 设置编码格式
     * @param $request
     */
    private function setupCharsets($request) {
        if ($this->checkEmpty($this->postCharset)) {
            $this->postCharset = 'UTF-8';
        }
        $str = preg_match('/[\x80-\xff]/', $this->appId) ? $this->appId : print_r($request, true);
        $this->fileCharset = mb_detect_encoding($str, "UTF-8, GBK") == 'UTF-8' ? 'UTF-8' : 'GBK';
    }

    /**
     * 校验$value是否非空
     *  if not set ,return true;
     *    if is null , return true;
     **/
    protected function checkEmpty($value) {
        if (!isset($value))
            return true;
        if ($value === null)
            return true;
        if (trim($value) === "")
            return true;

        return false;
    }

    /**
     * 加签
     * @param $params
     * @param string $signType
     * @return mixed
     */
    public function generateSign($params, $signType = "RSA") {
        return $this->sign($this->getSignContent($params), $signType);
    }

    public function rsaSign($params, $signType = "RSA") {
        return $this->sign($this->getSignContent($params), $signType);
    }

    protected function sign($data, $signType = "RSA") {
        if($this->checkEmpty($this->rsaPrivateKeyFilePath)){
            $priKey=$this->rsaPrivateKey;
            $res = "-----BEGIN RSA PRIVATE KEY-----\n" .
                wordwrap($priKey, 64, "\n", true) .
                "\n-----END RSA PRIVATE KEY-----";
        }else {
            $priKey = file_get_contents($this->rsaPrivateKeyFilePath);
            $res = openssl_get_privatekey($priKey);
        }

        ($res) or die('您使用的私钥格式错误，请检查RSA私钥配置');

        if ("RSA2" == $signType) {
            openssl_sign($data, $sign, $res, OPENSSL_ALGO_SHA256);
        } else {
            openssl_sign($data, $sign, $res);
        }

        if(!$this->checkEmpty($this->rsaPrivateKeyFilePath)){
            openssl_free_key($res);
        }
        $sign = base64_encode($sign);
        return $sign;
    }

    public function getSignContent($params) {
        ksort($params);

        $stringToBeSigned = "";
        $i = 0;
        foreach ($params as $k => $v) {
            if (false === $this->checkEmpty($v) && "@" != substr($v, 0, 1)) {

                // 转换成目标字符集
                $v = $this->characet($v, $this->postCharset);

                if ($i == 0) {
                    $stringToBeSigned .= "$k" . "=" . "$v";
                } else {
                    $stringToBeSigned .= "&" . "$k" . "=" . "$v";
                }
                $i++;
            }
        }
        unset ($k, $v);
        return $stringToBeSigned;
    }


    /**
     * RSA单独签名方法，未做字符串处理,字符串处理见getSignContent()
     * @param $data 待签名字符串
     * @param $privatekey 商户私钥，根据keyfromfile来判断是读取字符串还是读取文件，false:填写私钥字符串去回车和空格 true:填写私钥文件路径
     * @param $signType 签名方式，RSA:SHA1     RSA2:SHA256
     * @param $keyfromfile 私钥获取方式，读取字符串还是读文件
     * @return string
     */
    public function alonersaSign($data,$privatekey,$signType = "RSA",$keyfromfile=false) {
        if(!$keyfromfile){
            $priKey=$privatekey;
            $res = "-----BEGIN RSA PRIVATE KEY-----\n" .
                wordwrap($priKey, 64, "\n", true) .
                "\n-----END RSA PRIVATE KEY-----";
        }
        else{
            $priKey = file_get_contents($privatekey);
            $res = openssl_get_privatekey($priKey);
        }
        ($res) or die('您使用的私钥格式错误，请检查RSA私钥配置');
        if ("RSA2" == $signType) {
            openssl_sign($data, $sign, $res, OPENSSL_ALGO_SHA256);
        } else {
            openssl_sign($data, $sign, $res);
        }
        if($keyfromfile){
            openssl_free_key($res);
        }
        $sign = base64_encode($sign);
        return $sign;
    }

    /**
     * 转换字符集编码
     * @param $data
     * @param $targetCharset
     * @return string
     */
    function characet($data, $targetCharset) {

        if (!empty($data)) {
            $fileType = $this->fileCharset;
            if (strcasecmp($fileType, $targetCharset) != 0) {
                $data = mb_convert_encoding($data, $targetCharset, $fileType);
            }
        }
        return $data;
    }

    /**
     * 发送curl请求
     * @param $url
     * @param null $postFields
     * @return bool|string
     * @throws Exception
     */
    protected function curl($url, $postFields = null) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_FAILONERROR, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
        $postBodyString = "";
        $encodeArray = Array();
        $postMultipart = false;

        if (is_array($postFields) && 0 < count($postFields)) {
            foreach ($postFields as $k => $v) {
                if ("@" != substr($v, 0, 1)) //判断是不是文件上传
                {
                    $postBodyString .= "$k=" . urlencode($this->characet($v, $this->postCharset)) . "&";
                    $encodeArray[$k] = $this->characet($v, $this->postCharset);
                } else //文件上传用multipart/form-data，否则用www-form-urlencoded
                {
                    $postMultipart = true;
                    $encodeArray[$k] = new \CURLFile(substr($v, 1));
                }
            }
            unset ($k, $v);
            curl_setopt($ch, CURLOPT_POST, true);
            if ($postMultipart) {
                curl_setopt($ch, CURLOPT_POSTFIELDS, $encodeArray);
            } else {
                curl_setopt($ch, CURLOPT_POSTFIELDS, substr($postBodyString, 0, -1));
            }
        }

        if (!$postMultipart) {
            $headers = array('content-type: application/x-www-form-urlencoded;charset=' . $this->postCharset);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        }

        $reponse = curl_exec($ch);
        if (curl_errno($ch)) {
            throw new \Exception(curl_error($ch), 0);
        } else {
            $httpStatusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            if (200 !== $httpStatusCode) {
                throw new \Exception($reponse, $httpStatusCode);
            }
        }
        curl_close($ch);
        return $reponse;
    }

    protected function getMillisecond() {
        list($s1, $s2) = explode(' ', microtime());
        return (float)sprintf('%.0f', (floatval($s1) + floatval($s2)) * 1000);
    }

    /**
     * 打印日志信息
     * @param $apiName
     * @param $requestUrl
     * @param $errorCode
     * @param $responseTxt
     */
    protected function logCommunicationError($apiName, $requestUrl, $errorCode, $responseTxt) {
        $logData = array(
            date("Y-m-d H:i:s"),
            $apiName,
            $this->appId,
            PHP_OS,
            $this->alipaySdkVersion,
            $requestUrl,
            $errorCode,
            str_replace("\n", "", $responseTxt)
        );
        echo json_encode($logData);
    }

    /**
     * Json格式签名内容
     * @param $request
     * @param $responseContent
     * @param $responseJSON
     * @return SignData
     */
    function parserJSONSignData($request, $responseContent, $responseJSON) {
        $signData = new SignData();
        $signData->sign = $this->parserJSONSign($responseJSON);
        $signData->signSourceData = $this->parserJSONSignSource($request, $responseContent);
        return $signData;
    }

    function parserJSONSign($responseJSon) {
        return $responseJSon->sign;
    }

    function parserJSONSignSource($request, $responseContent) {
        $apiName = $request->getApiMethodName();
        $rootNodeName = str_replace(".", "_", $apiName) . $this->RESPONSE_SUFFIX;
        $rootIndex = strpos($responseContent, $rootNodeName);
        $errorIndex = strpos($responseContent, $this->ERROR_RESPONSE);
        if ($rootIndex > 0) {
            return $this->parserJSONSource($responseContent, $rootNodeName, $rootIndex);
        } else if ($errorIndex > 0) {
            return $this->parserJSONSource($responseContent, $this->ERROR_RESPONSE, $errorIndex);
        } else {
            return null;
        }
    }

    function parserJSONSource($responseContent, $nodeName, $nodeIndex) {
        $signDataStartIndex = $nodeIndex + strlen($nodeName) + 2;
        if(strrpos($responseContent, $this->ALIPAY_CERT_SN)){
            $signIndex = strrpos($responseContent, "\"" . $this->ALIPAY_CERT_SN . "\"");
        }else{
            $signIndex = strrpos($responseContent, "\"" . $this->SIGN_NODE_NAME . "\"");
        }
        // 签名前-逗号
        $signDataEndIndex = $signIndex - 1;
        $indexLen = $signDataEndIndex - $signDataStartIndex;
        if ($indexLen < 0) {
            return null;
        }
        return substr($responseContent, $signDataStartIndex, $indexLen);
    }

    /**
     * XML格式签名内容
     * @param $request
     * @param $responseContent
     * @return SignData
     */
    function parserXMLSignData($request, $responseContent) {
        $signData = new SignData();
        $signData->sign = $this->parserXMLSign($responseContent);
        $signData->signSourceData = $this->parserXMLSignSource($request, $responseContent);
        return $signData;
    }

    function parserXMLSign($responseContent) {
        if(strrpos($responseContent, $this->ALIPAY_CERT_SN)){
            $signNodeName = "<" . $this->ALIPAY_CERT_SN . ">";
            $signEndNodeName = "</" . $this->ALIPAY_CERT_SN . ">";
        }else{
            $signNodeName = "<" . $this->SIGN_NODE_NAME . ">";
            $signEndNodeName = "</" . $this->SIGN_NODE_NAME . ">";
        }

        $indexOfSignNode = strpos($responseContent, $signNodeName);
        $indexOfSignEndNode = strpos($responseContent, $signEndNodeName);
        if ($indexOfSignNode < 0 || $indexOfSignEndNode < 0) {
            return null;
        }
        $nodeIndex = ($indexOfSignNode + strlen($signNodeName));
        $indexLen = $indexOfSignEndNode - $nodeIndex;
        if ($indexLen < 0) {
            return null;
        }
        // 签名
        return substr($responseContent, $nodeIndex, $indexLen);
    }

    function parserXMLSignSource($request, $responseContent) {
        $apiName = $request->getApiMethodName();
        $rootNodeName = str_replace(".", "_", $apiName) . $this->RESPONSE_SUFFIX;
        $rootIndex = strpos($responseContent, $rootNodeName);
        $errorIndex = strpos($responseContent, $this->ERROR_RESPONSE);
        if ($rootIndex > 0) {
            return $this->parserXMLSource($responseContent, $rootNodeName, $rootIndex);
        } else if ($errorIndex > 0) {
            return $this->parserXMLSource($responseContent, $this->ERROR_RESPONSE, $errorIndex);
        } else {
            return null;
        }
    }


    function parserXMLSource($responseContent, $nodeName, $nodeIndex) {
        $signDataStartIndex = $nodeIndex + strlen($nodeName) + 1;
        if(strrpos($responseContent, $this->ALIPAY_CERT_SN)){
            $signIndex = strrpos($responseContent, "<" . $this->ALIPAY_CERT_SN . ">");
        }else{
            $signIndex = strrpos($responseContent, "<" . $this->SIGN_NODE_NAME . ">");
        }

        // 签名前-逗号
        $signDataEndIndex = $signIndex - 1;
        $indexLen = $signDataEndIndex - $signDataStartIndex + 1;

        if ($indexLen < 0) {
            return null;
        }
        return substr($responseContent, $signDataStartIndex, $indexLen);
    }


    /**
     * 验签
     * @param $request
     * @param $signData
     * @param $resp
     * @param $respObject
     * @throws Exception
     */
    public function checkResponseSign($request, $signData, $resp, $respObject) {
        if (!$this->checkEmpty($this->alipayPublicKey) || !$this->checkEmpty($this->alipayrsaPublicKey)) {
            if ($signData == null || $this->checkEmpty($signData->sign) || $this->checkEmpty($signData->signSourceData)) {
                throw new \Exception(" check sign Fail! The reason : signData is Empty");
            }
            // 获取结果sub_code
            $responseSubCode = $this->parserResponseSubCode($request, $resp, $respObject, $this->format);
            if (!$this->checkEmpty($responseSubCode) || ($this->checkEmpty($responseSubCode) && !$this->checkEmpty($signData->sign))) {
                $checkResult = $this->verify($signData->signSourceData, $signData->sign, $this->alipayPublicKey, $this->signType);

                if (!$checkResult) {

                    //请求网关下载新的支付宝公钥证书
                    if(!$respObject->alipay_cert_sn && ($request->getApiMethodName()=="alipay.open.app.alipaycert.download")){
                        throw new \Exception(" check sign Fail! The reason : alipay_cert_sn is Empty");
                    }
                    //组装系统参数
                    $sysParams["app_id"] = $this->appId;
                    $sysParams["format"] = $this->format;
                    $sysParams["sign_type"] = $this->signType;
                    $sysParams["method"] = "alipay.open.app.alipaycert.download";
                    $sysParams["timestamp"] = date("Y-m-d H:i:s");
                    $sysParams["alipay_sdk"] = $this->alipaySdkVersion;
                    $sysParams["terminal_type"] = $request->getTerminalType();
                    $sysParams["terminal_info"] = $request->getTerminalInfo();
                    $sysParams["prod_code"] = $request->getProdCode();
                    $sysParams["notify_url"] = $request->getNotifyUrl();
                    $sysParams["charset"] = $this->postCharset;
                    $sysParams["app_cert_sn"] = $this->appCertSN;
                    $sysParams["alipay_root_cert_sn"] = $this->alipayRootCertSN;
                    //获取业务参数
                    $apiParas = array();
                    $apiParas["biz_content"] = "{\"alipay_cert_sn\":\"".$respObject->alipay_cert_sn."\"}";
                    $apiParams = $apiParas;

                    //签名
                    $sysParams["sign"] = $this->generateSign(array_merge($apiParams, $sysParams), $this->signType);

                    //系统参数放入GET请求串
                    $requestUrl = $this->gatewayUrl . "?";
                    foreach ($sysParams as $sysParamKey => $sysParamValue) {
                        $requestUrl .= "$sysParamKey=" . urlencode($this->characet($sysParamValue, $this->postCharset)) . "&";
                    }
                    $requestUrl = substr($requestUrl, 0, -1);
                    //发起HTTP请求
                    try {
                        $resp = $this->curl($requestUrl, $apiParams);
                    } catch (Exception $e) {
                        $this->logCommunicationError($sysParams["method"], $requestUrl, "HTTP_ERROR_" . $e->getCode(), $e->getMessage());
                        return false;
                    }

                    // 将返回结果转换本地文件编码
                    $r = iconv($this->postCharset, $this->fileCharset . "//IGNORE", $resp);

                    $respObject = json_decode($r);
                    $resultCode = $respObject->alipay_open_app_alipaycert_download_response->code;
                    $certContent = $respObject->alipay_open_app_alipaycert_download_response->alipay_cert_content;

                    if (!empty($resultCode) && $resultCode == 10000 && !empty($certContent)) {
                        $cert = base64_decode($certContent);
                        $certCheck = true;
                        if(!empty($this->alipayRootCertContent) && $this->isCheckAlipayPublicCert){
                            $certCheck = isTrusted($cert,$this->alipayRootCertContent);
                        }
                        if($certCheck){
                            $pkey = openssl_pkey_get_public($cert);
                            $keyData = openssl_pkey_get_details($pkey);
                            $public_key = str_replace('-----BEGIN PUBLIC KEY-----', '', $keyData['key']);
                            $public_key = trim(str_replace('-----END PUBLIC KEY-----', '', $public_key));
                            $this->alipayrsaPublicKey = $public_key;
                            $checkResult = $this->verify($signData->signSourceData, $signData->sign, $this->alipayrsaPublicKey, $this->signType);
                        }else{
                            //如果下载下来的支付宝公钥证书使用根证书检查失败直接抛异常
                            throw new \Exception("check sign Fail! [sign=" . $signData->sign . ", signSourceData=" . $signData->signSourceData . "]");
                        }
                    }

                    if(!$checkResult){
                        if (strpos($signData->signSourceData, "\\/") > 0) {
                            $signData->signSourceData = str_replace("\\/", "/", $signData->signSourceData);
                            $checkResult = $this->verify($signData->signSourceData, $signData->sign, $this->alipayPublicKey, $this->signType);
                            if (!$checkResult) {
                                throw new \Exception("check sign Fail! [sign=" . $signData->sign . ", signSourceData=" . $signData->signSourceData . "]");
                            }
                        } else {
                            throw new \Exception("check sign Fail! [sign=" . $signData->sign . ", signSourceData=" . $signData->signSourceData . "]");
                        }
                    }

                }
            }
        }
    }


    function parserResponseSubCode($request, $responseContent, $respObject, $format) {
        if ("json" == strtolower($format)) {
            $apiName = $request->getApiMethodName();
            $rootNodeName = str_replace(".", "_", $apiName) . $this->RESPONSE_SUFFIX;
            $errorNodeName = $this->ERROR_RESPONSE;
            $rootIndex = strpos($responseContent, $rootNodeName);
            $errorIndex = strpos($responseContent, $errorNodeName);
            if ($rootIndex > 0) {
                // 内部节点对象
                $rInnerObject = $respObject->$rootNodeName;
            } elseif ($errorIndex > 0) {
                $rInnerObject = $respObject->$errorNodeName;
            } else {
                return null;
            }
            // 存在属性则返回对应值
            if (isset($rInnerObject->sub_code)) {
                return $rInnerObject->sub_code;
            } else {
                return null;
            }
        } elseif ("xml" == $format) {
            // xml格式sub_code在同一层级
            return $respObject->sub_code;
        }
    }

    function verify($data, $sign, $rsaPublicKeyFilePath, $signType = 'RSA') {
        if($this->checkEmpty($this->alipayPublicKey)){
            $pubKey= $this->alipayrsaPublicKey;
            $res = "-----BEGIN PUBLIC KEY-----\n" .
                wordwrap($pubKey, 64, "\n", true) .
                "\n-----END PUBLIC KEY-----";
        }else {
            //读取公钥文件
            $pubKey = file_get_contents($rsaPublicKeyFilePath);
            //转换为openssl格式密钥
            $res = openssl_get_publickey($pubKey);
        }
        ($res) or die('支付宝RSA公钥错误。请检查公钥文件格式是否正确');
        //调用openssl内置方法验签，返回bool值
        $result = FALSE;
        if ("RSA2" == $signType) {
            $result = (openssl_verify($data, base64_decode($sign), $res, OPENSSL_ALGO_SHA256)===1);
        } else {
            $result = (openssl_verify($data, base64_decode($sign), $res)===1);
        }
        if(!$this->checkEmpty($this->alipayPublicKey)) {
            //释放资源
            openssl_free_key($res);
        }
        return $result;
    }


    // 获取加密内容
    private function encryptJSONSignSource($request, $responseContent) {
        $parsetItem = $this->parserEncryptJSONSignSource($request, $responseContent);
        $bodyIndexContent = substr($responseContent, 0, $parsetItem->startIndex);
        $bodyEndContent = substr($responseContent, $parsetItem->endIndex, strlen($responseContent) + 1 - $parsetItem->endIndex);
        $bizContent = decrypt($parsetItem->encryptContent, $this->encryptKey);
        return $bodyIndexContent . $bizContent . $bodyEndContent;
    }


    private function parserEncryptJSONSignSource($request, $responseContent) {
        $apiName = $request->getApiMethodName();
        $rootNodeName = str_replace(".", "_", $apiName) . $this->RESPONSE_SUFFIX;
        $rootIndex = strpos($responseContent, $rootNodeName);
        $errorIndex = strpos($responseContent, $this->ERROR_RESPONSE);
        if ($rootIndex > 0) {
            return $this->parserEncryptJSONItem($responseContent, $rootNodeName, $rootIndex);
        } else if ($errorIndex > 0) {
            return $this->parserEncryptJSONItem($responseContent, $this->ERROR_RESPONSE, $errorIndex);
        } else {
            return null;
        }
    }

    private function parserEncryptJSONItem($responseContent, $nodeName, $nodeIndex) {
        $signDataStartIndex = $nodeIndex + strlen($nodeName) + 2;
        if(strrpos($responseContent, $this->ALIPAY_CERT_SN)){
            $signIndex = strpos($responseContent, "\"" . $this->ALIPAY_CERT_SN . "\"");
        }else{
            $signIndex = strpos($responseContent, "\"" . $this->SIGN_NODE_NAME . "\"");
        }

        // 签名前-逗号
        $signDataEndIndex = $signIndex - 1;
        if ($signDataEndIndex < 0) {
            $signDataEndIndex = strlen($responseContent)-1 ;
        }
        $indexLen = $signDataEndIndex - $signDataStartIndex;
        $encContent = substr($responseContent, $signDataStartIndex+1, $indexLen-2);
        $encryptParseItem = new EncryptParseItem();
        $encryptParseItem->encryptContent = $encContent;
        $encryptParseItem->startIndex = $signDataStartIndex;
        $encryptParseItem->endIndex = $signDataEndIndex;
        return $encryptParseItem;
    }

    // 获取加密内容
    private function encryptXMLSignSource($request, $responseContent) {
        $parsetItem = $this->parserEncryptXMLSignSource($request, $responseContent);
        $bodyIndexContent = substr($responseContent, 0, $parsetItem->startIndex);
        $bodyEndContent = substr($responseContent, $parsetItem->endIndex, strlen($responseContent) + 1 - $parsetItem->endIndex);
        $bizContent = decrypt($parsetItem->encryptContent, $this->encryptKey);
        return $bodyIndexContent . $bizContent . $bodyEndContent;

    }

    private function parserEncryptXMLSignSource($request, $responseContent) {
        $apiName = $request->getApiMethodName();
        $rootNodeName = str_replace(".", "_", $apiName) . $this->RESPONSE_SUFFIX;
        $rootIndex = strpos($responseContent, $rootNodeName);
        $errorIndex = strpos($responseContent, $this->ERROR_RESPONSE);
        if ($rootIndex > 0) {
            return $this->parserEncryptXMLItem($responseContent, $rootNodeName, $rootIndex);
        } else if ($errorIndex > 0) {
            return $this->parserEncryptXMLItem($responseContent, $this->ERROR_RESPONSE, $errorIndex);
        } else {
            return null;
        }
    }

    private function parserEncryptXMLItem($responseContent, $nodeName, $nodeIndex) {
        $signDataStartIndex = $nodeIndex + strlen($nodeName) + 1;
        $xmlStartNode="<".$this->ENCRYPT_XML_NODE_NAME.">";
        $xmlEndNode="</".$this->ENCRYPT_XML_NODE_NAME.">";
        $indexOfXmlNode=strpos($responseContent,$xmlEndNode);
        if($indexOfXmlNode<0){
            $item = new EncryptParseItem();
            $item->encryptContent = null;
            $item->startIndex = 0;
            $item->endIndex = 0;
            return $item;
        }
        $startIndex=$signDataStartIndex+strlen($xmlStartNode);
        $bizContentLen=$indexOfXmlNode-$startIndex;
        $bizContent=substr($responseContent,$startIndex,$bizContentLen);
        $encryptParseItem = new EncryptParseItem();
        $encryptParseItem->encryptContent = $bizContent;
        $encryptParseItem->startIndex = $signDataStartIndex;
        $encryptParseItem->endIndex = $indexOfXmlNode+strlen($xmlEndNode);
        return $encryptParseItem;
    }

    function echoDebug($content) {
        if ($this->debugInfo) {
            echo "<br/>" . $content;
        }
    }
}