<?php
/**
 * ALIPAY API: alipay.commerce.rent.enterprise.seal.sign request
 *
 * @author auto create
 * @since 1.0, 2025-04-28 17:33:10
 */
class AlipayCommerceRentEnterpriseSealSignRequest
{
	/** 
	 * 业务描述
	 **/
	private $bizDesc;
	
	/** 
	 * 业务名称
	 **/
	private $bizName;
	
	/** 
	 * 业务流水号
	 **/
	private $bizNo;
	
	/** 
	 * 上传的合同PDF文件
	 **/
	private $fileContent;
	
	/** 
	 * 预授权订单号
	 **/
	private $preAuthNo;
	
	/** 
	 * 企业签署区域信息
	 **/
	private $signAreaOrg;
	
	/** 
	 * 用户个人签署区域信息
	 **/
	private $signAreaPerson;
	
	/** 
	 * 签署用户身份证件号
	 **/
	private $signerUserCertNumber;
	
	/** 
	 * 签署用户个人姓名
	 **/
	private $signerUserName;

	private $apiParas = array();
	private $terminalType;
	private $terminalInfo;
	private $prodCode;
	private $apiVersion="1.0";
	private $notifyUrl;
	private $returnUrl;
    private $needEncrypt=false;

	
	public function setBizDesc($bizDesc)
	{
		$this->bizDesc = $bizDesc;
		$this->apiParas["biz_desc"] = $bizDesc;
	}

	public function getBizDesc()
	{
		return $this->bizDesc;
	}

	public function setBizName($bizName)
	{
		$this->bizName = $bizName;
		$this->apiParas["biz_name"] = $bizName;
	}

	public function getBizName()
	{
		return $this->bizName;
	}

	public function setBizNo($bizNo)
	{
		$this->bizNo = $bizNo;
		$this->apiParas["biz_no"] = $bizNo;
	}

	public function getBizNo()
	{
		return $this->bizNo;
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

	public function setPreAuthNo($preAuthNo)
	{
		$this->preAuthNo = $preAuthNo;
		$this->apiParas["pre_auth_no"] = $preAuthNo;
	}

	public function getPreAuthNo()
	{
		return $this->preAuthNo;
	}

	public function setSignAreaOrg($signAreaOrg)
	{
		$this->signAreaOrg = $signAreaOrg;
		$this->apiParas["sign_area_org"] = $signAreaOrg;
	}

	public function getSignAreaOrg()
	{
		return $this->signAreaOrg;
	}

	public function setSignAreaPerson($signAreaPerson)
	{
		$this->signAreaPerson = $signAreaPerson;
		$this->apiParas["sign_area_person"] = $signAreaPerson;
	}

	public function getSignAreaPerson()
	{
		return $this->signAreaPerson;
	}

	public function setSignerUserCertNumber($signerUserCertNumber)
	{
		$this->signerUserCertNumber = $signerUserCertNumber;
		$this->apiParas["signer_user_cert_number"] = $signerUserCertNumber;
	}

	public function getSignerUserCertNumber()
	{
		return $this->signerUserCertNumber;
	}

	public function setSignerUserName($signerUserName)
	{
		$this->signerUserName = $signerUserName;
		$this->apiParas["signer_user_name"] = $signerUserName;
	}

	public function getSignerUserName()
	{
		return $this->signerUserName;
	}

	public function getApiMethodName()
	{
		return "alipay.commerce.rent.enterprise.seal.sign";
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
