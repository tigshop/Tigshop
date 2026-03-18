<?php
/**
 * ALIPAY API: alipay.open.sp.merchant.inconsistent.approve request
 *
 * @author auto create
 * @since 1.0, 2024-03-07 10:56:59
 */
class AlipayOpenSpMerchantInconsistentApproveRequest
{
	/** 
	 * 身份证背面照，图片文件大小在 50K-5M 之间，不限制长宽，支持 png、bmp、gif、jpg、jpeg 格式。 请传入<a href="https://opendocs.alipay.com/apis/01ea4t">alipay.open.sp.image.upload</a>(图片上传接口) 返回的 image_id。
	 **/
	private $backCard;
	
	/** 
	 * 实际经营人承诺函照片，要求证件文本信息清晰可见，图片文件大小在 50K-5M 之间，不限制长宽，支持 png、bmp、gif、jpg、jpeg 格式。 请传入<a href="https://opendocs.alipay.com/apis/01ea4t">alipay.open.sp.image.upload</a>(图片上传接口) 返回的 image_id。 该资质是否必传请参见报名资质要求。
	 **/
	private $commitmentLetter;
	
	/** 
	 * 身份证正面照，要求证件文本信息清晰可见，图片文件大小在 50K-5M 之间，不限制长宽，支持 png、bmp、gif、jpg、jpeg 格式. 请传<a href="https://opendocs.alipay.com/apis/01ea4t">alipay.open.sp.image.upload</a>(图片上传接口) 返回的 image_id。
	 **/
	private $frontCard;
	
	/** 
	 * 手持营业执照合照，要求证件文本信息清晰可见，图片文件大小在 50K-5M 之间，不限制长宽，支持 png、bmp、gif、jpg、jpeg 格式。 请传入<a href="https://opendocs.alipay.com/apis/01ea4t">alipay.open.sp.image.upload</a>(图片上传接口) 返回的 image_id。 该资质是否必传请参见报名资质要求。
	 **/
	private $handheldBusinessLicense;
	
	/** 
	 * 手持身份证合照，要求证件文本信息清晰可见，图片文件大小在 50K-5M 之间，不限制长宽，支持 png、bmp、gif、jpg、jpeg 格式。 请传入<a href="https://opendocs.alipay.com/apis/01ea4t">alipay.open.sp.image.upload</a>(图片上传接口) 返回的 image_id。 该资质是否必传请参见报名资质要求。
	 **/
	private $handheldCard;
	
	/** 
	 * 服务优选商品编码
	 **/
	private $itemCode;
	
	/** 
	 * 商家pid
	 **/
	private $merchantPid;
	
	/** 
	 * 商家小程序appId
	 **/
	private $miniAppid;
	
	/** 
	 * 外部业务号，需不重复
	 **/
	private $outBizNo;
	
	/** 
	 * 推广服务商(S2)pid
	 **/
	private $promotorPid;

	private $apiParas = array();
	private $terminalType;
	private $terminalInfo;
	private $prodCode;
	private $apiVersion="1.0";
	private $notifyUrl;
	private $returnUrl;
    private $needEncrypt=false;

	
	public function setBackCard($backCard)
	{
		$this->backCard = $backCard;
		$this->apiParas["back_card"] = $backCard;
	}

	public function getBackCard()
	{
		return $this->backCard;
	}

	public function setCommitmentLetter($commitmentLetter)
	{
		$this->commitmentLetter = $commitmentLetter;
		$this->apiParas["commitment_letter"] = $commitmentLetter;
	}

	public function getCommitmentLetter()
	{
		return $this->commitmentLetter;
	}

	public function setFrontCard($frontCard)
	{
		$this->frontCard = $frontCard;
		$this->apiParas["front_card"] = $frontCard;
	}

	public function getFrontCard()
	{
		return $this->frontCard;
	}

	public function setHandheldBusinessLicense($handheldBusinessLicense)
	{
		$this->handheldBusinessLicense = $handheldBusinessLicense;
		$this->apiParas["handheld_business_license"] = $handheldBusinessLicense;
	}

	public function getHandheldBusinessLicense()
	{
		return $this->handheldBusinessLicense;
	}

	public function setHandheldCard($handheldCard)
	{
		$this->handheldCard = $handheldCard;
		$this->apiParas["handheld_card"] = $handheldCard;
	}

	public function getHandheldCard()
	{
		return $this->handheldCard;
	}

	public function setItemCode($itemCode)
	{
		$this->itemCode = $itemCode;
		$this->apiParas["item_code"] = $itemCode;
	}

	public function getItemCode()
	{
		return $this->itemCode;
	}

	public function setMerchantPid($merchantPid)
	{
		$this->merchantPid = $merchantPid;
		$this->apiParas["merchant_pid"] = $merchantPid;
	}

	public function getMerchantPid()
	{
		return $this->merchantPid;
	}

	public function setMiniAppid($miniAppid)
	{
		$this->miniAppid = $miniAppid;
		$this->apiParas["mini_appid"] = $miniAppid;
	}

	public function getMiniAppid()
	{
		return $this->miniAppid;
	}

	public function setOutBizNo($outBizNo)
	{
		$this->outBizNo = $outBizNo;
		$this->apiParas["out_biz_no"] = $outBizNo;
	}

	public function getOutBizNo()
	{
		return $this->outBizNo;
	}

	public function setPromotorPid($promotorPid)
	{
		$this->promotorPid = $promotorPid;
		$this->apiParas["promotor_pid"] = $promotorPid;
	}

	public function getPromotorPid()
	{
		return $this->promotorPid;
	}

	public function getApiMethodName()
	{
		return "alipay.open.sp.merchant.inconsistent.approve";
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
