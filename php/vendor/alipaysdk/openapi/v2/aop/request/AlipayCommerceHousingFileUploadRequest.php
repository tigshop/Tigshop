<?php
/**
 * ALIPAY API: alipay.commerce.housing.file.upload request
 *
 * @author auto create
 * @since 1.0, 2025-04-14 11:12:26
 */
class AlipayCommerceHousingFileUploadRequest
{
	/** 
	 * 文件类别
	 **/
	private $attachmentCategory;
	
	/** 
	 * 文件类型
	 **/
	private $attachmentType;
	
	/** 
	 * 文件内容
	 **/
	private $fileContent;

	private $apiParas = array();
	private $terminalType;
	private $terminalInfo;
	private $prodCode;
	private $apiVersion="1.0";
	private $notifyUrl;
	private $returnUrl;
    private $needEncrypt=false;

	
	public function setAttachmentCategory($attachmentCategory)
	{
		$this->attachmentCategory = $attachmentCategory;
		$this->apiParas["attachment_category"] = $attachmentCategory;
	}

	public function getAttachmentCategory()
	{
		return $this->attachmentCategory;
	}

	public function setAttachmentType($attachmentType)
	{
		$this->attachmentType = $attachmentType;
		$this->apiParas["attachment_type"] = $attachmentType;
	}

	public function getAttachmentType()
	{
		return $this->attachmentType;
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

	public function getApiMethodName()
	{
		return "alipay.commerce.housing.file.upload";
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
