<?php
/**
 * ALIPAY API: alipay.cloud.cloudpromo.file.upload request
 *
 * @author auto create
 * @since 1.0, 2025-09-22 21:52:40
 */
class AlipayCloudCloudpromoFileUploadRequest
{
	/** 
	 * 客户
	 **/
	private $customerId;
	
	/** 
	 * 描述信息
	 **/
	private $desc;
	
	/** 
	 * 上传文件的二进制字节流
	 **/
	private $fileContent;
	
	/** 
	 * 指定文件的具体编码格式（如扩展名或 MIME 类型）
	 **/
	private $fileFormat;
	
	/** 
	 * 文件名称
	 **/
	private $fileName;
	
	/** 
	 * 标识文件的通用类别（如文本、图像、视频）。
	 **/
	private $fileType;

	private $apiParas = array();
	private $terminalType;
	private $terminalInfo;
	private $prodCode;
	private $apiVersion="1.0";
	private $notifyUrl;
	private $returnUrl;
    private $needEncrypt=false;

	
	public function setCustomerId($customerId)
	{
		$this->customerId = $customerId;
		$this->apiParas["customer_id"] = $customerId;
	}

	public function getCustomerId()
	{
		return $this->customerId;
	}

	public function setDesc($desc)
	{
		$this->desc = $desc;
		$this->apiParas["desc"] = $desc;
	}

	public function getDesc()
	{
		return $this->desc;
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

	public function setFileFormat($fileFormat)
	{
		$this->fileFormat = $fileFormat;
		$this->apiParas["file_format"] = $fileFormat;
	}

	public function getFileFormat()
	{
		return $this->fileFormat;
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

	public function setFileType($fileType)
	{
		$this->fileType = $fileType;
		$this->apiParas["file_type"] = $fileType;
	}

	public function getFileType()
	{
		return $this->fileType;
	}

	public function getApiMethodName()
	{
		return "alipay.cloud.cloudpromo.file.upload";
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
