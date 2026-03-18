<?php
/**
 * ALIPAY API: alipay.open.agent.mobilepay.sign request
 *
 * @author auto create
 * @since 1.0, 2024-10-14 14:04:16
 */
class AlipayOpenAgentMobilepaySignRequest
{
	/** 
	 * APP授权函图片，最小5KB，图片格式必须为：png、bmp、gif、jpg、jpeg
	 **/
	private $appAuthPic;
	
	/** 
	 * APP demo，格式为.apk；或者应用说明文档, 格式为.doc .docx .pdf格式
	 **/
	private $appDemo;
	
	/** 
	 * 应用首页截图，最小5KB，图片格式必须为：png、bmp、gif、jpg、jpeg
	 **/
	private $appHomeScreenshot;
	
	/** 
	 * 商品或服务页截图，最小5KB，图片格式必须为：png、bmp、gif、jpg、jpeg
	 **/
	private $appItemScreenshot;
	
	/** 
	 * 应用在哪些市场上架，枚举值为：苹果,应用宝,华为,360,小米,豌豆荚,其他
	 **/
	private $appMarket;
	
	/** 
	 * 商户的APP应用名称
	 **/
	private $appName;
	
	/** 
	 * 应用内支付页截图，最小5KB，图片格式必须为：png、bmp、gif、jpg、jpeg
	 **/
	private $appPayScreenshot;
	
	/** 
	 * 应用上架状态，枚举值为 已上线，未上线
	 **/
	private $appStatus;
	
	/** 
	 * 可以登录该应用的测试账户
	 **/
	private $appTestAccount;
	
	/** 
	 * 可以登录此应用的账户的密码。对应app_test_account的登录密码
	 **/
	private $appTestAccountPassword;
	
	/** 
	 * 应用类型，枚举值为：IOS，安卓
	 **/
	private $appType;
	
	/** 
	 * 代商户操作事务编号，通过alipay.open.isv.agent.create接口进行创建。
	 **/
	private $batchNo;
	
	/** 
	 * 营业执照授权函图片，个体工商户如果使用总公司或其他公司的营业执照认证需上传该授权函图片，最小5KB，图片格式必须为：png、bmp、gif、jpg、jpeg
	 **/
	private $businessLicenseAuthPic;
	
	/** 
	 * 营业执照法人手机号码
	 **/
	private $businessLicenseMobile;
	
	/** 
	 * 营业执照号码。
	 **/
	private $businessLicenseNo;
	
	/** 
	 * 营业执照图片，最小5KB，图片格式必须为：png、bmp、gif、jpg、jpeg
	 **/
	private $businessLicensePic;
	
	/** 
	 * 营业期限
	 **/
	private $dateLimitation;
	
	/** 
	 * 应用下载链接
	 **/
	private $downloadLink;
	
	/** 
	 * 应用首页截图，最小5KB，图片格式必须为：png、bmp、gif、jpg、jpeg
	 **/
	private $homeScreenshot;
	
	/** 
	 * 应用内截图，最小5KB，图片格式必须为：png、bmp、gif、jpg、jpeg
	 **/
	private $inAppScreenshot;
	
	/** 
	 * 营业期限是否长期有效
	 **/
	private $longTerm;
	
	/** 
	 * 所属MCCCode，详情可参考
<a href="https://opendocs.alipay.com/open/01n22g#%E5%95%86%E5%AE%B6%E7%BB%8F%E8%90%A5%E7%B1%BB%E7%9B%AE">商家经营类目</a> 中的“经营类目编码”
	 **/
	private $mccCode;
	
	/** 
	 * 传参：APP，代表设备类型是APP
	 **/
	private $mobileType;
	
	/** 
	 * 应用内支付页截图，最小5KB，图片格式必须为：png、bmp、gif、jpg、jpeg
	 **/
	private $payScreenshot;
	
	/** 
	 * 企业特殊资质图片，可参考
<a href="https://opendocs.alipay.com/open/01n22g#%E5%95%86%E5%AE%B6%E7%BB%8F%E8%90%A5%E7%B1%BB%E7%9B%AE">商家经营类目</a> 中的“需要的特殊资质证书”，最小5KB，图片格式必须为：png、bmp、gif、jpg、jpeg
	 **/
	private $specialLicensePic;
	
	/** 
	 * 传参：mobile，代表交易场景是移动设备
	 **/
	private $tradeScene;

	private $apiParas = array();
	private $terminalType;
	private $terminalInfo;
	private $prodCode;
	private $apiVersion="1.0";
	private $notifyUrl;
	private $returnUrl;
    private $needEncrypt=false;

	
	public function setAppAuthPic($appAuthPic)
	{
		$this->appAuthPic = $appAuthPic;
		$this->apiParas["app_auth_pic"] = $appAuthPic;
	}

	public function getAppAuthPic()
	{
		return $this->appAuthPic;
	}

	public function setAppDemo($appDemo)
	{
		$this->appDemo = $appDemo;
		$this->apiParas["app_demo"] = $appDemo;
	}

	public function getAppDemo()
	{
		return $this->appDemo;
	}

	public function setAppHomeScreenshot($appHomeScreenshot)
	{
		$this->appHomeScreenshot = $appHomeScreenshot;
		$this->apiParas["app_home_screenshot"] = $appHomeScreenshot;
	}

	public function getAppHomeScreenshot()
	{
		return $this->appHomeScreenshot;
	}

	public function setAppItemScreenshot($appItemScreenshot)
	{
		$this->appItemScreenshot = $appItemScreenshot;
		$this->apiParas["app_item_screenshot"] = $appItemScreenshot;
	}

	public function getAppItemScreenshot()
	{
		return $this->appItemScreenshot;
	}

	public function setAppMarket($appMarket)
	{
		$this->appMarket = $appMarket;
		$this->apiParas["app_market"] = $appMarket;
	}

	public function getAppMarket()
	{
		return $this->appMarket;
	}

	public function setAppName($appName)
	{
		$this->appName = $appName;
		$this->apiParas["app_name"] = $appName;
	}

	public function getAppName()
	{
		return $this->appName;
	}

	public function setAppPayScreenshot($appPayScreenshot)
	{
		$this->appPayScreenshot = $appPayScreenshot;
		$this->apiParas["app_pay_screenshot"] = $appPayScreenshot;
	}

	public function getAppPayScreenshot()
	{
		return $this->appPayScreenshot;
	}

	public function setAppStatus($appStatus)
	{
		$this->appStatus = $appStatus;
		$this->apiParas["app_status"] = $appStatus;
	}

	public function getAppStatus()
	{
		return $this->appStatus;
	}

	public function setAppTestAccount($appTestAccount)
	{
		$this->appTestAccount = $appTestAccount;
		$this->apiParas["app_test_account"] = $appTestAccount;
	}

	public function getAppTestAccount()
	{
		return $this->appTestAccount;
	}

	public function setAppTestAccountPassword($appTestAccountPassword)
	{
		$this->appTestAccountPassword = $appTestAccountPassword;
		$this->apiParas["app_test_account_password"] = $appTestAccountPassword;
	}

	public function getAppTestAccountPassword()
	{
		return $this->appTestAccountPassword;
	}

	public function setAppType($appType)
	{
		$this->appType = $appType;
		$this->apiParas["app_type"] = $appType;
	}

	public function getAppType()
	{
		return $this->appType;
	}

	public function setBatchNo($batchNo)
	{
		$this->batchNo = $batchNo;
		$this->apiParas["batch_no"] = $batchNo;
	}

	public function getBatchNo()
	{
		return $this->batchNo;
	}

	public function setBusinessLicenseAuthPic($businessLicenseAuthPic)
	{
		$this->businessLicenseAuthPic = $businessLicenseAuthPic;
		$this->apiParas["business_license_auth_pic"] = $businessLicenseAuthPic;
	}

	public function getBusinessLicenseAuthPic()
	{
		return $this->businessLicenseAuthPic;
	}

	public function setBusinessLicenseMobile($businessLicenseMobile)
	{
		$this->businessLicenseMobile = $businessLicenseMobile;
		$this->apiParas["business_license_mobile"] = $businessLicenseMobile;
	}

	public function getBusinessLicenseMobile()
	{
		return $this->businessLicenseMobile;
	}

	public function setBusinessLicenseNo($businessLicenseNo)
	{
		$this->businessLicenseNo = $businessLicenseNo;
		$this->apiParas["business_license_no"] = $businessLicenseNo;
	}

	public function getBusinessLicenseNo()
	{
		return $this->businessLicenseNo;
	}

	public function setBusinessLicensePic($businessLicensePic)
	{
		$this->businessLicensePic = $businessLicensePic;
		$this->apiParas["business_license_pic"] = $businessLicensePic;
	}

	public function getBusinessLicensePic()
	{
		return $this->businessLicensePic;
	}

	public function setDateLimitation($dateLimitation)
	{
		$this->dateLimitation = $dateLimitation;
		$this->apiParas["date_limitation"] = $dateLimitation;
	}

	public function getDateLimitation()
	{
		return $this->dateLimitation;
	}

	public function setDownloadLink($downloadLink)
	{
		$this->downloadLink = $downloadLink;
		$this->apiParas["download_link"] = $downloadLink;
	}

	public function getDownloadLink()
	{
		return $this->downloadLink;
	}

	public function setHomeScreenshot($homeScreenshot)
	{
		$this->homeScreenshot = $homeScreenshot;
		$this->apiParas["home_screenshot"] = $homeScreenshot;
	}

	public function getHomeScreenshot()
	{
		return $this->homeScreenshot;
	}

	public function setInAppScreenshot($inAppScreenshot)
	{
		$this->inAppScreenshot = $inAppScreenshot;
		$this->apiParas["in_app_screenshot"] = $inAppScreenshot;
	}

	public function getInAppScreenshot()
	{
		return $this->inAppScreenshot;
	}

	public function setLongTerm($longTerm)
	{
		$this->longTerm = $longTerm;
		$this->apiParas["long_term"] = $longTerm;
	}

	public function getLongTerm()
	{
		return $this->longTerm;
	}

	public function setMccCode($mccCode)
	{
		$this->mccCode = $mccCode;
		$this->apiParas["mcc_code"] = $mccCode;
	}

	public function getMccCode()
	{
		return $this->mccCode;
	}

	public function setMobileType($mobileType)
	{
		$this->mobileType = $mobileType;
		$this->apiParas["mobile_type"] = $mobileType;
	}

	public function getMobileType()
	{
		return $this->mobileType;
	}

	public function setPayScreenshot($payScreenshot)
	{
		$this->payScreenshot = $payScreenshot;
		$this->apiParas["pay_screenshot"] = $payScreenshot;
	}

	public function getPayScreenshot()
	{
		return $this->payScreenshot;
	}

	public function setSpecialLicensePic($specialLicensePic)
	{
		$this->specialLicensePic = $specialLicensePic;
		$this->apiParas["special_license_pic"] = $specialLicensePic;
	}

	public function getSpecialLicensePic()
	{
		return $this->specialLicensePic;
	}

	public function setTradeScene($tradeScene)
	{
		$this->tradeScene = $tradeScene;
		$this->apiParas["trade_scene"] = $tradeScene;
	}

	public function getTradeScene()
	{
		return $this->tradeScene;
	}

	public function getApiMethodName()
	{
		return "alipay.open.agent.mobilepay.sign";
	}

	public function setNotifyUrl($notifyUrl)
	{
		$this->notifyUrl=$notifyUrl;
	}

	public function getNotifyUrl()
	{
		return $this->notifyUrl;
	}

	public function setReturnUrl($returnUrl)
	{
		$this->returnUrl=$returnUrl;
	}

	public function getReturnUrl()
	{
		return $this->returnUrl;
	}

	public function getApiParas()
	{
		return $this->apiParas;
	}

	public function getTerminalType()
	{
		return $this->terminalType;
	}

	public function setTerminalType($terminalType)
	{
		$this->terminalType = $terminalType;
	}

	public function getTerminalInfo()
	{
		return $this->terminalInfo;
	}

	public function setTerminalInfo($terminalInfo)
	{
		$this->terminalInfo = $terminalInfo;
	}

	public function getProdCode()
	{
		return $this->prodCode;
	}

	public function setProdCode($prodCode)
	{
		$this->prodCode = $prodCode;
	}

	public function setApiVersion($apiVersion)
	{
		$this->apiVersion=$apiVersion;
	}

	public function getApiVersion()
	{
		return $this->apiVersion;
	}

  public function setNeedEncrypt($needEncrypt)
  {

     $this->needEncrypt=$needEncrypt;

  }

  public function getNeedEncrypt()
  {
    return $this->needEncrypt;
  }

}
