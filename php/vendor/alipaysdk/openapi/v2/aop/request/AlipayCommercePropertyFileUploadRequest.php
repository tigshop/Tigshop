<?php
/**
 * ALIPAY API: alipay.commerce.property.file.upload request
 *
 * @author auto create
 * @since 1.0, 2025-03-27 21:52:26
 */
class AlipayCommercePropertyFileUploadRequest
{
	/** 
	 * 使用场景，按照枚举值传入
	 **/
	private $bizScene;
	
	/** 
	 * 二进制文件流
	 **/
	private $fileContent;
	
	/** 
	 * 当该字段为空时，系统会尝试获取上传文件的原始文件名
	 **/
	private $fileName;
	
	/** 
	 * 外部内容id,由调用方传入，不传则平台方内容id与外部内容id一致
	 **/
	private $outBizId;

	private $apiParas = array();
	private $terminalType;
	private $terminalInfo;
	private $prodCode;
	private $apiVersion="1.0";
	private $notifyUrl;
	private $returnUrl;
    private $needEncrypt=false;

	
	public function setBizScene($bizScene)
	{
		$this->bizScene = $bizScene;
		$this->apiParas["biz_scene"] = $bizScene;
	}

	public function getBizScene()
	{
		return $this->bizScene;
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

	public function setFileName($fileName)
	{
		$this->fileName = $fileName;
		$this->apiParas["file_name"] = $fileName;
	}

	public function getFileName()
	{
		return $this->fileName;
	}

	public function setOutBizId($outBizId)
	{
		$this->outBizId = $outBizId;
		$this->apiParas["out_biz_id"] = $outBizId;
	}

	public function getOutBizId()
	{
		return $this->outBizId;
	}

	public function getApiMethodName()
	{
		return "alipay.commerce.property.file.upload";
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
