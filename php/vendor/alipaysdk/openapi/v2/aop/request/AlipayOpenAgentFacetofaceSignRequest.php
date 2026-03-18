<?php
/**
 * ALIPAY API: alipay.open.agent.facetoface.sign request
 *
 * @author auto create
 * @since 1.0, 2024-10-14 14:03:47
 */
class AlipayOpenAgentFacetofaceSignRequest
{
	/** 
	 * 代商户操作事务编号，通过<a href="https://opendocs.alipay.com/apis/api_50/alipay.open.agent.create">接口地址</a> (开启代商户签约、创建应用事务)接口进行事务创建后获取。
	 **/
	private $batchNo;
	
	/** 
	 * 营业执照授权函图片，个体工商户如果使用总公司或其他公司的营业执照认证需上传该授权函图片，最小5KB，最大5M（暂不限制图片宽高），图片格式必须为：png、bmp、gif、jpg、jpeg
	 **/
	private $businessLicenseAuthPic;
	
	/** 
	 * 上传非经营者本人（签约账号）的营业执照时必填，填写营业执照法人支付宝账号对应的手机号。
	 **/
	private $businessLicenseMobile;
	
	/** 
	 * 营业执照号码
	 **/
	private $businessLicenseNo;
	
	/** 
	 * 营业执照图片。被代创建商户运营主体为个人账户必填，企业账户无需填写，最小5KB，最大5M（暂不限制图片宽高），图片格式必须为：png、bmp、gif、jpg、jpeg
	 **/
	private $businessLicensePic;
	
	/** 
	 * 营业期限
	 **/
	private $dateLimitation;
	
	/** 
	 * 营业期限是否长期有效
	 **/
	private $longTerm;
	
	/** 
	 * 商家经营类目编码。参见 <a href="https://opendocs.alipay.com/open/01n22g#%E5%95%86%E5%AE%B6%E7%BB%8F%E8%90%A5%E7%B1%BB%E7%9B%AE">商家经营类目2.0</a> 中的“一级类目code_二级类目code”。
	 **/
	private $mccCode;
	
	/** 
	 * 服务费率（%），0.38~0.6 之间（小数点后两位，可取0.38%及0.6%）。
当签约且授权标识 sign_and_auth=true 时，该费率信息必填。
	 **/
	private $rate;
	
	/** 
	 * 店铺地址
	 **/
	private $shopAddress;
	
	/** 
	 * 店铺名称
	 **/
	private $shopName;
	
	/** 
	 * 店铺内景图片，最小5KB，最大5M（暂不限制图片宽高），图片格式必须为：png、bmp、gif、jpg、jpeg
	 **/
	private $shopScenePic;
	
	/** 
	 * 店铺门头照图片，最小5KB，最大5M（暂不限制图片宽高），图片格式必须为：png、bmp、gif、jpg、jpeg
	 **/
	private $shopSignBoardPic;
	
	/** 
	 * 签约且授权标识，默认为false，只进行签约操作； 如果设置为true，则表示签约成功后，会自动进行应用授权操作。
	 **/
	private $signAndAuth;
	
	/** 
	 * 企业特殊资质图片，当mcc_code为需要特殊资质类目时必填。可参考
<a href="https://opendocs.alipay.com/open/01n22g#%E5%95%86%E5%AE%B6%E7%BB%8F%E8%90%A5%E7%B1%BB%E7%9B%AE">商家经营类目</a> 中的“所需资质”，最小5KB ，最大5M（暂不限制图片宽高），图片格式必须为：png、bmp、gif、jpg、jpeg
	 **/
	private $specialLicensePic;

	private $apiParas = array();
	private $terminalType;
	private $terminalInfo;
	private $prodCode;
	private $apiVersion="1.0";
	private $notifyUrl;
	private $returnUrl;
    private $needEncrypt=false;

	
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

	public function setRate($rate)
	{
		$this->rate = $rate;
		$this->apiParas["rate"] = $rate;
	}

	public function getRate()
	{
		return $this->rate;
	}

	public function setShopAddress($shopAddress)
	{
		$this->shopAddress = $shopAddress;
		$this->apiParas["shop_address"] = $shopAddress;
	}

	public function getShopAddress()
	{
		return $this->shopAddress;
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

	public function setSignAndAuth($signAndAuth)
	{
		$this->signAndAuth = $signAndAuth;
		$this->apiParas["sign_and_auth"] = $signAndAuth;
	}

	public function getSignAndAuth()
	{
		return $this->signAndAuth;
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

	public function getApiMethodName()
	{
		return "alipay.open.agent.facetoface.sign";
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
