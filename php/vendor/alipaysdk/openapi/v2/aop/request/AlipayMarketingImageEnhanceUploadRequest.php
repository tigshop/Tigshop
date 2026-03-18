<?php
/**
 * ALIPAY API: alipay.marketing.image.enhance.upload request
 *
 * @author auto create
 * @since 1.0, 2024-07-26 10:32:03
 */
class AlipayMarketingImageEnhanceUploadRequest
{
	/** 
	 * 图片的byte字节数组。图片大小限制为5M。支持格式如下：png、jpg、jpeg、bmp、webp。
	 **/
	private $imageContent;
	
	/** 
	 * 图片归属图空间目录id。不填时，默认归属到图空间根目录；填写时会保存到图片空间的目录id下；当图片需要保存到根目录下时传"0"。
	 **/
	private $imageDirectoryId;
	
	/** 
	 * 素材字段。本接口必须为图片类型的素材字段。
	 **/
	private $materialField;
	
	/** 
	 * 素材规范ID，用于标识具体场景下的素材规范，根据具体的使用场景获取对应的素材规范ID。
	 **/
	private $materialSpecId;
	
	/** 
	 * 表示是否需要优化图片。若选择需要优化图片，系统会根据原图进行优化，再根据素材规范校验；若选择不需要优化图片，系统对原图直接校验。校验通过则上传成功，校验不通过会返回具体错误原因。
	 **/
	private $needEnhance;
	
	/** 
	 * 图片上传场景，分为默认素材规范场景和介质图片场景。
	 **/
	private $uploadScene;

	private $apiParas = array();
	private $terminalType;
	private $terminalInfo;
	private $prodCode;
	private $apiVersion="1.0";
	private $notifyUrl;
	private $returnUrl;
    private $needEncrypt=false;

	
	public function setImageContent($imageContent)
	{
		$this->imageContent = $imageContent;
		$this->apiParas["image_content"] = $imageContent;
	}

	public function getImageContent()
	{
		return $this->imageContent;
	}

	public function setImageDirectoryId($imageDirectoryId)
	{
		$this->imageDirectoryId = $imageDirectoryId;
		$this->apiParas["image_directory_id"] = $imageDirectoryId;
	}

	public function getImageDirectoryId()
	{
		return $this->imageDirectoryId;
	}

	public function setMaterialField($materialField)
	{
		$this->materialField = $materialField;
		$this->apiParas["material_field"] = $materialField;
	}

	public function getMaterialField()
	{
		return $this->materialField;
	}

	public function setMaterialSpecId($materialSpecId)
	{
		$this->materialSpecId = $materialSpecId;
		$this->apiParas["material_spec_id"] = $materialSpecId;
	}

	public function getMaterialSpecId()
	{
		return $this->materialSpecId;
	}

	public function setNeedEnhance($needEnhance)
	{
		$this->needEnhance = $needEnhance;
		$this->apiParas["need_enhance"] = $needEnhance;
	}

	public function getNeedEnhance()
	{
		return $this->needEnhance;
	}

	public function setUploadScene($uploadScene)
	{
		$this->uploadScene = $uploadScene;
		$this->apiParas["upload_scene"] = $uploadScene;
	}

	public function getUploadScene()
	{
		return $this->uploadScene;
	}

	public function getApiMethodName()
	{
		return "alipay.marketing.image.enhance.upload";
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
