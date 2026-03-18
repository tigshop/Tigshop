<?php
/**
 * ALIPAY API: alipay.commerce.medical.largermodel.resource.upload request
 *
 * @author auto create
 * @since 1.0, 2024-09-23 11:12:10
 */
class AlipayCommerceMedicalLargermodelResourceUploadRequest
{
	/** 
	 * 文件二进制字节流，最大为10M
	 **/
	private $fileContent;
	
	/** 
	 * 上传文件的类型：pdf或jpg
	 **/
	private $fileType;
	
	/** 
	 * 用于标记支付宝用户在应用下的唯一标识
	 **/
	private $openId;
	
	/** 
	 * 用于区分同一个app下的机构
	 **/
	private $orgId;
	
	/** 
	 * 用于标记支付宝用户在应用下的唯一标识
	 **/
	private $outUserId;
	
	/** 
	 * 当out_user_id为2088uid时，需将这个值设置为：ALIPAY_UID；当out_user_id为其他值时，可将这个值设置为：OTHER_UID；若是open_id时，设置为ALIPAY_OPENID
	 **/
	private $outUserType;

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

	public function setFileType($fileType)
	{
		$this->fileType = $fileType;
		$this->apiParas["file_type"] = $fileType;
	}

	public function getFileType()
	{
		return $this->fileType;
	}

	public function setOpenId($openId)
	{
		$this->openId = $openId;
		$this->apiParas["open_id"] = $openId;
	}

	public function getOpenId()
	{
		return $this->openId;
	}

	public function setOrgId($orgId)
	{
		$this->orgId = $orgId;
		$this->apiParas["org_id"] = $orgId;
	}

	public function getOrgId()
	{
		return $this->orgId;
	}

	public function setOutUserId($outUserId)
	{
		$this->outUserId = $outUserId;
		$this->apiParas["out_user_id"] = $outUserId;
	}

	public function getOutUserId()
	{
		return $this->outUserId;
	}

	public function setOutUserType($outUserType)
	{
		$this->outUserType = $outUserType;
		$this->apiParas["out_user_type"] = $outUserType;
	}

	public function getOutUserType()
	{
		return $this->outUserType;
	}

	public function getApiMethodName()
	{
		return "alipay.commerce.medical.largermodel.resource.upload";
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
