<?php
/**
 * ALIPAY API: alipay.offline.smdd.ocr.image.upload request
 *
 * @author auto create
 * @since 1.0, 2025-04-08 16:27:26
 */
class AlipayOfflineSmddOcrImageUploadRequest
{
	/** 
	 * 文件图片base64
	 **/
	private $fileContent;
	
	/** 
	 * 文件名称，带文件后缀
	 **/
	private $fileNameWithSuffix;
	
	/** 
	 * 证件类型
	 **/
	private $ocrType;

	private $apiParas = array();
	private $terminalType;
	private $terminalInfo;
	private $prodCode;
	private $apiVersion="1.0";
	private $notifyUrl;
	private $returnUrl;
    private $needEncrypt=false;

	
	public function setFileContent($fileContent)
	{
		$this->fileContent = $fileContent;
		$this->apiParas["file_content"] = $fileContent;
	}

	public function getFileContent()
	{
		return $this->fileContent;
	}

	public function setFileNameWithSuffix($fileNameWithSuffix)
	{
		$this->fileNameWithSuffix = $fileNameWithSuffix;
		$this->apiParas["file_name_with_suffix"] = $fileNameWithSuffix;
	}

	public function getFileNameWithSuffix()
	{
		return $this->fileNameWithSuffix;
	}

	public function setOcrType($ocrType)
	{
		$this->ocrType = $ocrType;
		$this->apiParas["ocr_type"] = $ocrType;
	}

	public function getOcrType()
	{
		return $this->ocrType;
	}

	public function getApiMethodName()
	{
		return "alipay.offline.smdd.ocr.image.upload";
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
