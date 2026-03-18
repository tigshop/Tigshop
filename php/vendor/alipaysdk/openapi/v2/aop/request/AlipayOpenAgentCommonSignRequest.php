<?php
/**
 * ALIPAY API: alipay.open.agent.common.sign request
 *
 * @author auto create
 * @since 1.0, 2024-10-14 14:07:08
 */
class AlipayOpenAgentCommonSignRequest
{
	/** 
	 * 支付宝生活号(原服务窗)名称（1 app_name、app_demo；2 web_sites；3 alipay_life_name。1、2、3少选择一个填写）
	 **/
	private $alipayLifeName;
	
	/** 
	 * APP授权函图片，最小5KB，图片格式必须为：png、bmp、gif、jpg、jpeg
	 **/
	private $appAuthPic;
	
	/** 
	 * APP demo，格式为.apk；或者应用说明文档, 格式为.doc .docx .pdf格式（1 app_name、app_demo；2 web_sites；3 alipay_life_name；4 wechat_official_account_name。1、2、3、4至少选择一个填写）
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
	 * 投放应用市场
	 **/
	private $appMarket;
	
	/** 
	 * 商户的APP应用名称（1 app_name、app_demo；2 web_sites；3 alipay_life_name；4 wechat_official_account_name。1、2、3、4至少选择一个填写）
	 **/
	private $appName;
	
	/** 
	 * 应用内支付页截图，最小5KB，图片格式必须为：png、bmp、gif、jpg、jpeg
	 **/
	private $appPayScreenshot;
	
	/** 
	 * 应用状态
	 **/
	private $appStatus;
	
	/** 
	 * 可以登录该应用的测试账户
	 **/
	private $appTestAccount;
	
	/** 
	 * 可以登录此应用的账户的密码。对app_test_account的登录密码。
	 **/
	private $appTestAccountPassword;
	
	/** 
	 * 代商户操作事务编号，通过alipay.open.agent.create接口进行创建。
	 **/
	private $batchNo;
	
	/** 
	 * 营业执照授权函图片，个体工商户如果使用总公司或其他公司的营业执照认证需上传该授权函图片，最小5KB，最大5M，图片格式必须为：png、bmp、gif、jpg、jpeg
	 **/
	private $businessLicenseAuthPic;
	
	/** 
	 * 营业执照号码
	 **/
	private $businessLicenseNo;
	
	/** 
	 * 营业执照图片。被代创建商户运营主体为个人账户必填，企业账户无需填写。图片最小5KB，最大5M，图片格式必须为：png、bmp、gif、jpg、jpeg。
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
	 * 网站备注图片
	 **/
	private $h5ExtraPic;
	
	/** 
	 * H5网站首页截图
	 **/
	private $h5HomeScreenshot;
	
	/** 
	 * H5网站商品截图
	 **/
	private $h5ItemScreenshot;
	
	/** 
	 * 网站扩展信息文本
	 **/
	private $h5Memo;
	
	/** 
	 * H5网站支付页截图
	 **/
	private $h5PayScreenshot;
	
	/** 
	 * H5网站地址
	 **/
	private $h5Sites;
	
	/** 
	 * H5网站授权函
	 **/
	private $h5SitesLoa;
	
	/** 
	 * H5网站状态
	 **/
	private $h5Status;
	
	/** 
	 * 请输入被签约商户的支付宝生活号ID编号
	 **/
	private $lifeAppId;
	
	/** 
	 * 营业期限是否长期有效
	 **/
	private $longTerm;
	
	/** 
	 * <a href="https://opendocs.alipay.com/common/02khjv">商家经营类目</a> 中的“经营类目编码”
	 **/
	private $mccCode;
	
	/** 
	 * 请输入被签约商家下任意小程序APPID ID编号
	 **/
	private $miniAppId;
	
	/** 
	 * 小程序名称
	 **/
	private $miniAppName;
	
	/** 
	 * 请上传商家小程序截图信息，最小5KB ，最大5M（暂不限制图片宽高），图片格式必须为：png、bmp、gif、jpg、jpeg
	 **/
	private $miniAppScreenshot;
	
	/** 
	 * 移动设备类型，当开通电脑网站支付产品时不需赋值；当开通手机网站支付时，传H5；当开通JSAPI时，传APP；当开通预授权支付产品，且交易场景选择“mobile”(移动设备)时，需要从APP,H5中至少选择一个，可多选，字符串英文逗号分隔。
	 **/
	private $mobileType;
	
	/** 
	 * isv要代商户签约产品码，产品码是支付宝内部对产品的唯一标识
	 **/
	private $productCode;
	
	/** 
	 * 服务费率（%），例如：请输入0.38~0.6 之间（小数点后两位，可取0.38%及0.6%），直播买卖通涉及JSAPI支付产品，交易手续费为 0.38%-0.6%，后续费率变化可参考支付宝标准服务费。
当签约且授权标识 sign_and_auth=true 时，该费率信息必填。
	 **/
	private $rate;
	
	/** 
	 * 门店所在城市
	 **/
	private $shopCityCode;
	
	/** 
	 * 门店详细地址
	 **/
	private $shopDetailAddress;
	
	/** 
	 * 门店所在区/县
	 **/
	private $shopDistrictCode;
	
	/** 
	 * 门店名称
	 **/
	private $shopName;
	
	/** 
	 * 门店所在省份
	 **/
	private $shopProvinceCode;
	
	/** 
	 * 店铺内景图片，最小5KB，最大5M，图片格式必须为：png、bmp、gif、jpg、jpeg。
	 **/
	private $shopScenePic;
	
	/** 
	 * 店铺门头照图片，最小5KB，最大5M，图片格式必须为：png、bmp、gif、jpg、jpeg。
	 **/
	private $shopSignBoardPic;
	
	/** 
	 * 企业特殊资质图片，可参考
<a href="https://opendocs.alipay.com/common/02khjv">商家经营类目</a> 中的“需要的特殊资质证书”。文件最小为 5KB，最大为5M，图片格式必须为：png、bmp、gif、jpg、jpeg。
	 **/
	private $specialLicensePic;
	
	/** 
	 * 合约特殊资质的类型，不传默认99
	 **/
	private $specialLicenseType;
	
	/** 
	 * 交易场景，当开通产品为电脑网站支付时，传pc；当开通产品为手机网站支付时，传mobile；当开通产品为JSAPI时，传tiny_app；当开通产品为预授权支付时，下面括号中三个至少传一个（tiny_app,mobile,offline_store），可多选，字符串用英文逗号分隔
	 **/
	private $tradeScene;
	
	/** 
	 * 网站首页截图，最小5KB，最大5M，图片格式必须为：png、bmp、gif、jpg、jpeg
	 **/
	private $webHomeScreenshot;
	
	/** 
	 * 网站商品页截图，最小5KB，最大5M，图片格式必须为：png、bmp、gif、jpg、jpeg
	 **/
	private $webItemScreenshot;
	
	/** 
	 * 网站支付页截图，最小5KB，最大5M，图片格式必须为：png、bmp、gif、jpg、jpeg
	 **/
	private $webPayScreenshot;
	
	/** 
	 * 接入网址信息（1 app_name、app_demo；2 web_sites；3 alipay_life_name；4 wechat_official_account_name。1、2、3、4至少选择一个填写）
	 **/
	private $webSites;
	
	/** 
	 * 接入网址的授权涵，格式为.doc .docx .pdf格式
	 **/
	private $webSitesLoa;
	
	/** 
	 * 网站状态，枚举值为：ONLINE，OFFLINE
	 **/
	private $webStatus;
	
	/** 
	 * 可以登录此网站的测试账户。
	 **/
	private $webTestAccount;
	
	/** 
	 * 可以登录此网站的账户的密码。对应web_test_account的登录密码
	 **/
	private $webTestAccountPassword;
	
	/** 
	 * 1 app_name、app_demo；2 web_sites；3 alipay_life_name；4 wechat_official_account_name。1、2、3、4至少选择一个填写
	 **/
	private $wechatOfficialAccountName;

	private $apiParas = array();
	private $terminalType;
	private $terminalInfo;
	private $prodCode;
	private $apiVersion="1.0";
	private $notifyUrl;
	private $returnUrl;
    private $needEncrypt=false;

	
	public function setAlipayLifeName($alipayLifeName)
	{
		$this->alipayLifeName = $alipayLifeName;
		$this->apiParas["alipay_life_name"] = $alipayLifeName;
	}

	public function getAlipayLifeName()
	{
		return $this->alipayLifeName;
	}

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

	public function setH5ExtraPic($h5ExtraPic)
	{
		$this->h5ExtraPic = $h5ExtraPic;
		$this->apiParas["h_5_extra_pic"] = $h5ExtraPic;
	}

	public function getH5ExtraPic()
	{
		return $this->h5ExtraPic;
	}

	public function setH5HomeScreenshot($h5HomeScreenshot)
	{
		$this->h5HomeScreenshot = $h5HomeScreenshot;
		$this->apiParas["h_5_home_screenshot"] = $h5HomeScreenshot;
	}

	public function getH5HomeScreenshot()
	{
		return $this->h5HomeScreenshot;
	}

	public function setH5ItemScreenshot($h5ItemScreenshot)
	{
		$this->h5ItemScreenshot = $h5ItemScreenshot;
		$this->apiParas["h_5_item_screenshot"] = $h5ItemScreenshot;
	}

	public function getH5ItemScreenshot()
	{
		return $this->h5ItemScreenshot;
	}

	public function setH5Memo($h5Memo)
	{
		$this->h5Memo = $h5Memo;
		$this->apiParas["h_5_memo"] = $h5Memo;
	}

	public function getH5Memo()
	{
		return $this->h5Memo;
	}

	public function setH5PayScreenshot($h5PayScreenshot)
	{
		$this->h5PayScreenshot = $h5PayScreenshot;
		$this->apiParas["h_5_pay_screenshot"] = $h5PayScreenshot;
	}

	public function getH5PayScreenshot()
	{
		return $this->h5PayScreenshot;
	}

	public function setH5Sites($h5Sites)
	{
		$this->h5Sites = $h5Sites;
		$this->apiParas["h_5_sites"] = $h5Sites;
	}

	public function getH5Sites()
	{
		return $this->h5Sites;
	}

	public function setH5SitesLoa($h5SitesLoa)
	{
		$this->h5SitesLoa = $h5SitesLoa;
		$this->apiParas["h_5_sites_loa"] = $h5SitesLoa;
	}

	public function getH5SitesLoa()
	{
		return $this->h5SitesLoa;
	}

	public function setH5Status($h5Status)
	{
		$this->h5Status = $h5Status;
		$this->apiParas["h_5_status"] = $h5Status;
	}

	public function getH5Status()
	{
		return $this->h5Status;
	}

	public function setLifeAppId($lifeAppId)
	{
		$this->lifeAppId = $lifeAppId;
		$this->apiParas["life_app_id"] = $lifeAppId;
	}

	public function getLifeAppId()
	{
		return $this->lifeAppId;
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

	public function setMiniAppId($miniAppId)
	{
		$this->miniAppId = $miniAppId;
		$this->apiParas["mini_app_id"] = $miniAppId;
	}

	public function getMiniAppId()
	{
		return $this->miniAppId;
	}

	public function setMiniAppName($miniAppName)
	{
		$this->miniAppName = $miniAppName;
		$this->apiParas["mini_app_name"] = $miniAppName;
	}

	public function getMiniAppName()
	{
		return $this->miniAppName;
	}

	public function setMiniAppScreenshot($miniAppScreenshot)
	{
		$this->miniAppScreenshot = $miniAppScreenshot;
		$this->apiParas["mini_app_screenshot"] = $miniAppScreenshot;
	}

	public function getMiniAppScreenshot()
	{
		return $this->miniAppScreenshot;
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

	public function setProductCode($productCode)
	{
		$this->productCode = $productCode;
		$this->apiParas["product_code"] = $productCode;
	}

	public function getProductCode()
	{
		return $this->productCode;
	}

	public function setRate($rate)
	{
		$this->rate = $rate;
		$this->apiParas["rate"] = $rate;
	}

	public function getRate()
	{
		return $this->rate;
	}

	public function setShopCityCode($shopCityCode)
	{
		$this->shopCityCode = $shopCityCode;
		$this->apiParas["shop_city_code"] = $shopCityCode;
	}

	public function getShopCityCode()
	{
		return $this->shopCityCode;
	}

	public function setShopDetailAddress($shopDetailAddress)
	{
		$this->shopDetailAddress = $shopDetailAddress;
		$this->apiParas["shop_detail_address"] = $shopDetailAddress;
	}

	public function getShopDetailAddress()
	{
		return $this->shopDetailAddress;
	}

	public function setShopDistrictCode($shopDistrictCode)
	{
		$this->shopDistrictCode = $shopDistrictCode;
		$this->apiParas["shop_district_code"] = $shopDistrictCode;
	}

	public function getShopDistrictCode()
	{
		return $this->shopDistrictCode;
	}

	public function setShopName($shopName)
	{
		$this->shopName = $shopName;
		$this->apiParas["shop_name"] = $shopName;
	}

	public function getShopName()
	{
		return $this->shopName;
	}

	public function setShopProvinceCode($shopProvinceCode)
	{
		$this->shopProvinceCode = $shopProvinceCode;
		$this->apiParas["shop_province_code"] = $shopProvinceCode;
	}

	public function getShopProvinceCode()
	{
		return $this->shopProvinceCode;
	}

	public function setShopScenePic($shopScenePic)
	{
		$this->shopScenePic = $shopScenePic;
		$this->apiParas["shop_scene_pic"] = $shopScenePic;
	}

	public function getShopScenePic()
	{
		return $this->shopScenePic;
	}

	public function setShopSignBoardPic($shopSignBoardPic)
	{
		$this->shopSignBoardPic = $shopSignBoardPic;
		$this->apiParas["shop_sign_board_pic"] = $shopSignBoardPic;
	}

	public function getShopSignBoardPic()
	{
		return $this->shopSignBoardPic;
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

	public function setSpecialLicenseType($specialLicenseType)
	{
		$this->specialLicenseType = $specialLicenseType;
		$this->apiParas["special_license_type"] = $specialLicenseType;
	}

	public function getSpecialLicenseType()
	{
		return $this->specialLicenseType;
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

	public function setWebHomeScreenshot($webHomeScreenshot)
	{
		$this->webHomeScreenshot = $webHomeScreenshot;
		$this->apiParas["web_home_screenshot"] = $webHomeScreenshot;
	}

	public function getWebHomeScreenshot()
	{
		return $this->webHomeScreenshot;
	}

	public function setWebItemScreenshot($webItemScreenshot)
	{
		$this->webItemScreenshot = $webItemScreenshot;
		$this->apiParas["web_item_screenshot"] = $webItemScreenshot;
	}

	public function getWebItemScreenshot()
	{
		return $this->webItemScreenshot;
	}

	public function setWebPayScreenshot($webPayScreenshot)
	{
		$this->webPayScreenshot = $webPayScreenshot;
		$this->apiParas["web_pay_screenshot"] = $webPayScreenshot;
	}

	public function getWebPayScreenshot()
	{
		return $this->webPayScreenshot;
	}

	public function setWebSites($webSites)
	{
		$this->webSites = $webSites;
		$this->apiParas["web_sites"] = $webSites;
	}

	public function getWebSites()
	{
		return $this->webSites;
	}

	public function setWebSitesLoa($webSitesLoa)
	{
		$this->webSitesLoa = $webSitesLoa;
		$this->apiParas["web_sites_loa"] = $webSitesLoa;
	}

	public function getWebSitesLoa()
	{
		return $this->webSitesLoa;
	}

	public function setWebStatus($webStatus)
	{
		$this->webStatus = $webStatus;
		$this->apiParas["web_status"] = $webStatus;
	}

	public function getWebStatus()
	{
		return $this->webStatus;
	}

	public function setWebTestAccount($webTestAccount)
	{
		$this->webTestAccount = $webTestAccount;
		$this->apiParas["web_test_account"] = $webTestAccount;
	}

	public function getWebTestAccount()
	{
		return $this->webTestAccount;
	}

	public function setWebTestAccountPassword($webTestAccountPassword)
	{
		$this->webTestAccountPassword = $webTestAccountPassword;
		$this->apiParas["web_test_account_password"] = $webTestAccountPassword;
	}

	public function getWebTestAccountPassword()
	{
		return $this->webTestAccountPassword;
	}

	public function setWechatOfficialAccountName($wechatOfficialAccountName)
	{
		$this->wechatOfficialAccountName = $wechatOfficialAccountName;
		$this->apiParas["wechat_official_account_name"] = $wechatOfficialAccountName;
	}

	public function getWechatOfficialAccountName()
	{
		return $this->wechatOfficialAccountName;
	}

	public function getApiMethodName()
	{
		return "alipay.open.agent.common.sign";
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
