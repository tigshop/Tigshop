<?php
/**
 * ALIPAY API: alipay.boss.prod.antlegalchain.notary.upload request
 *
 * @author auto create
 * @since 1.0, 2024-07-04 16:55:00
 */
class AlipayBossProdAntlegalchainNotaryUploadRequest
{
	/** 
	 * 业务应用英文名
	 **/
	private $appCode;
	
	/** 
	 * 业务唯一流水id，业务数据请求唯一标识
	 **/
	private $businessUniqueId;
	
	/** 
	 * 文件信息，文件二进制字节流，最大为10M
	 **/
	private $content;
	
	/** 
	 * 上传文件的名字
	 **/
	private $fileName;
	
	/** 
	 * 文件类型
	 **/
	private $fileType;
	
	/** 
	 * 租户信息
	 **/
	private $tenant;

	private $apiParas = array();
	private $terminalType;
	private $terminalInfo;
	private $prodCode;
	private $apiVersion="1.0";
	private $notifyUrl;
	private $returnUrl;
    private $needEncrypt=false;

	
	public function setAppCode($appCode)
	{
		$this->appCode = $appCode;
		$this->apiParas["app_code"] = $appCode;
	}

	public function getAppCode()
	{
		return $this->appCode;
	}

	public function setBusinessUniqueId($businessUniqueId)
	{
		$this->businessUniqueId = $businessUniqueId;
		$this->apiParas["business_unique_id"] = $businessUniqueId;
	}

	public function getBusinessUniqueId()
	{
		return $this->businessUniqueId;
	}

	public function setContent($content)
	{
		$this->content = $content;
		$this->apiParas["content"] = $content;
	}

	public function getContent()
	{
		return $this->content;
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

	public function setTenant($tenant)
	{
		$this->tenant = $tenant;
		$this->apiParas["tenant"] = $tenant;
	}

	public function getTenant()
	{
		return $this->tenant;
	}

	public function getApiMethodName()
	{
		return "alipay.boss.prod.antlegalchain.notary.upload";
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
