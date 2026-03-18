<?php
/**
 * ALIPAY API: alipay.marketing.material.image.upload request
 *
 * @author auto create
 * @since 1.0, 2024-04-23 21:51:00
 */
class AlipayMarketingMaterialImageUploadRequest
{
	/** 
	 * 服务商代商户创建投放必选
bussinessType设置为ISV_FOR_MERCHANT。
	 **/
	private $belongMerchantInfo;
	
	/** 
	 * 图片的byte字节数组。图片大小限制为2M
	 **/
	private $fileContent;
	
	/** 
	 * 文件业务标识。

枚举值
alipay.marketing.activity.delivery.create接口中
delivery_base_info.delivery_material.delivery_single_material.delivery_image
当delivery_booth_code=PUBLIC_UNION，上传图片接口需指定file_key=PUBLIC_UNION_CHANNEL_PIC。上传图片尺寸600*600，支持格式：png、jpg、jpeg、bmp，大小不超过200kb；
当delivery_booth_code=PAYMENT_RESULT，上传图片接口需指定file_key=DELIVERY_CHANNEL_PIC。上传图片尺寸600*600，支持格式：png、jpg、jpeg、bmp，大小不超过200kb。
上传图片更多要求参考文档： https://render.alipay.com/p/c/18tpirlg12e8?operateFrom=BALIPAY

alipay.marketing.activity.ordervoucher.create接口中
voucher_display_info.brand_logo字段,file_key=PROMO_BRAND_LOGO，上传图片尺寸600*600，支持格式：png、jpg、jpeg、bmp，大小不超过2MB
voucher_display_info.voucher_image字段,file_key=PROMO_VOUCHER_IMAGE,上传图片尺寸600*600，支持格式：png、jpg、jpeg、bmp，大小不超过2MB
	 **/
	private $fileKey;
	
	/** 
	 * 商户接入模式
	 **/
	private $merchantAccessMode;

	private $apiParas = array();
	private $terminalType;
	private $terminalInfo;
	private $prodCode;
	private $apiVersion="1.0";
	private $notifyUrl;
	private $returnUrl;
    private $needEncrypt=false;

	
	public function setBelongMerchantInfo($belongMerchantInfo)
	{
		$this->belongMerchantInfo = $belongMerchantInfo;
		$this->apiParas["belong_merchant_info"] = $belongMerchantInfo;
	}

	public function getBelongMerchantInfo()
	{
		return $this->belongMerchantInfo;
	}

	public function setFileContent($fileContent)
	{
		$this->fileContent = $fileContent;
		$this->apiParas["file_content"] = $fileContent;
	}

	public function getFileContent()
	{
		return $this->fileContent;
	}

	public function setFileKey($fileKey)
	{
		$this->fileKey = $fileKey;
		$this->apiParas["file_key"] = $fileKey;
	}

	public function getFileKey()
	{
		return $this->fileKey;
	}

	public function setMerchantAccessMode($merchantAccessMode)
	{
		$this->merchantAccessMode = $merchantAccessMode;
		$this->apiParas["merchant_access_mode"] = $merchantAccessMode;
	}

	public function getMerchantAccessMode()
	{
		return $this->merchantAccessMode;
	}

	public function getApiMethodName()
	{
		return "alipay.marketing.material.image.upload";
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
