<?php
/**
 * ALIPAY API: alipay.open.fee.adjust.apply request
 *
 * @author auto create
 * @since 1.0, 2024-10-14 14:09:02
 */
class AlipayOpenFeeAdjustApplyRequest
{
	/** 
	 * 服务商代申请特殊费率的商家支付宝账户
	 **/
	private $account;
	
	/** 
	 * 服务商代商家申请特殊费率的费率值（%），如0.38表示0.38%
	 **/
	private $applicationFee;
	
	/** 
	 * 其他支付方式费率证明或者业务补充说明，最小5KB，图片格式必须为：png、bmp、gif、jpg、jpeg
	 **/
	private $attachment;
	
	/** 
	 * 证件有效期，格式：yyyy-MM-dd，长期有效传入：9999-12-31
	 **/
	private $certDateLimitation;
	
	/** 
	 * 对应证件类型（certType）的证件号，如营业执照为营业执照号
	 **/
	private $certNo;
	
	/** 
	 * 对应证件的图片，最小5KB，图片格式必须为：png、bmp、gif、jpg、jpeg
	 **/
	private $certPic;
	
	/** 
	 * 证件类型，枚举值为
餐饮服务许可证 FOOD_SERVICE_LICENSE，
食品卫生许可证 FOOD_HEALTH_LICENSE，
食品经营许可证 FOOD_BUSINESS_LICENSE，
食品流通许可证 FOOD_CIRCULATE_LICENSE，
食品生产许可证 FOOD_PRODUCTION_LICENS，
营业执照     DEFAULT_LICENSE，
烟草资质 TOBACCO_PRODUCTION_LICENSE
	 **/
	private $certType;
	
	/** 
	 * 市
	 **/
	private $cityCode;
	
	/** 
	 * 详细地址
	 **/
	private $detailAddress;
	
	/** 
	 * 区/县
	 **/
	private $districtCode;
	
	/** 
	 * 服务商代商家申请调整费率的产品码
	 **/
	private $productCode;
	
	/** 
	 * 省份
	 **/
	private $provinceCode;
	
	/** 
	 * 店铺内景图片，最小5KB，图片格式必须为：png、bmp、gif、jpg、jpeg
	 **/
	private $shopScenePic;
	
	/** 
	 * 店铺门头照图片，最小5KB，图片格式必须为：png、bmp、gif、jpg、jpeg
	 **/
	private $shopSignPic;

	private $apiParas = array();
	private $terminalType;
	private $terminalInfo;
	private $prodCode;
	private $apiVersion="1.0";
	private $notifyUrl;
	private $returnUrl;
    private $needEncrypt=false;

	
	public function setAccount($account)
	{
		$this->account = $account;
		$this->apiParas["account"] = $account;
	}

	public function getAccount()
	{
		return $this->account;
	}

	public function setApplicationFee($applicationFee)
	{
		$this->applicationFee = $applicationFee;
		$this->apiParas["application_fee"] = $applicationFee;
	}

	public function getApplicationFee()
	{
		return $this->applicationFee;
	}

	public function setAttachment($attachment)
	{
		$this->attachment = $attachment;
		$this->apiParas["attachment"] = $attachment;
	}

	public function getAttachment()
	{
		return $this->attachment;
	}

	public function setCertDateLimitation($certDateLimitation)
	{
		$this->certDateLimitation = $certDateLimitation;
		$this->apiParas["cert_date_limitation"] = $certDateLimitation;
	}

	public function getCertDateLimitation()
	{
		return $this->certDateLimitation;
	}

	public function setCertNo($certNo)
	{
		$this->certNo = $certNo;
		$this->apiParas["cert_no"] = $certNo;
	}

	public function getCertNo()
	{
		return $this->certNo;
	}

	public function setCertPic($certPic)
	{
		$this->certPic = $certPic;
		$this->apiParas["cert_pic"] = $certPic;
	}

	public function getCertPic()
	{
		return $this->certPic;
	}

	public function setCertType($certType)
	{
		$this->certType = $certType;
		$this->apiParas["cert_type"] = $certType;
	}

	public function getCertType()
	{
		return $this->certType;
	}

	public function setCityCode($cityCode)
	{
		$this->cityCode = $cityCode;
		$this->apiParas["city_code"] = $cityCode;
	}

	public function getCityCode()
	{
		return $this->cityCode;
	}

	public function setDetailAddress($detailAddress)
	{
		$this->detailAddress = $detailAddress;
		$this->apiParas["detail_address"] = $detailAddress;
	}

	public function getDetailAddress()
	{
		return $this->detailAddress;
	}

	public function setDistrictCode($districtCode)
	{
		$this->districtCode = $districtCode;
		$this->apiParas["district_code"] = $districtCode;
	}

	public function getDistrictCode()
	{
		return $this->districtCode;
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

	public function setProvinceCode($provinceCode)
	{
		$this->provinceCode = $provinceCode;
		$this->apiParas["province_code"] = $provinceCode;
	}

	public function getProvinceCode()
	{
		return $this->provinceCode;
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

	public function setShopSignPic($shopSignPic)
	{
		$this->shopSignPic = $shopSignPic;
		$this->apiParas["shop_sign_pic"] = $shopSignPic;
	}

	public function getShopSignPic()
	{
		return $this->shopSignPic;
	}

	public function getApiMethodName()
	{
		return "alipay.open.fee.adjust.apply";
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
