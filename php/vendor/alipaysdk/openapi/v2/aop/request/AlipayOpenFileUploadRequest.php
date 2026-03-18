<?php
/**
 * ALIPAY API: alipay.open.file.upload request
 *
 * @author auto create
 * @since 1.0, 2024-07-04 17:41:21
 */
class AlipayOpenFileUploadRequest
{
	/** 
	 * 素材使用场景，请关联其他开放平台接口联合使用。如果素材用于内容发布，请必传入content_creation
	 **/
	private $bizCode;
	
	/** 
	 * 文件额外参数
	 **/
	private $extraParameters;
	
	/** 
	 * 文件内容的二进制流
	 **/
	private $fileContent;
	
	/** 
	 * 文件的md5值，如果不传则不校验md5
	 **/
	private $md5;

	private $apiParas = array();
	private $terminalType;
	private $terminalInfo;
	private $prodCode;
	private $apiVersion="1.0";
	private $notifyUrl;
	private $returnUrl;
    private $needEncrypt=false;

	
	public function setBizCode($bizCode)
	{
		$this->bizCode = $bizCode;
		$this->apiParas["biz_code"] = $bizCode;
	}

	public function getBizCode()
	{
		return $this->bizCode;
	}

	public function setExtraParameters($extraParameters)
	{
		$this->extraParameters = $extraParameters;
		$this->apiParas["extra_parameters"] = $extraParameters;
	}

	public function getExtraParameters()
	{
		return $this->extraParameters;
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

	public function setMd5($md5)
	{
		$this->md5 = $md5;
		$this->apiParas["md5"] = $md5;
	}

	public function getMd5()
	{
		return $this->md5;
	}

	public function getApiMethodName()
	{
		return "alipay.open.file.upload";
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
