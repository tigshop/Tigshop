<?php
/**
 * ALIPAY API: ssdata.dataservice.risk.businesslicense.certify request
 *
 * @author auto create
 * @since 1.0, 2024-07-04 19:39:13
 */
class SsdataDataserviceRiskBusinesslicenseCertifyRequest
{
	/** 
	 * 营业执照的公司地址 【非图片认证时此参数必填】
	 **/
	private $address;
	
	/** 
	 * 业务唯一识别码，总体流程为图片认证，如果有疑义可以再次触发接口，进行手动修改配置验证用户信息(即：当上传的图片为空时），此时biz_id需要设置为图片认证时返回的bis_token值，不然将重复计费  【非图片认证时此参数必填】
	 **/
	private $bizId;
	
	/** 
	 * 营业执照上的统一信用码【非图片认证时此参数必填】
	 **/
	private $creditCode;
	
	/** 
	 * 营业执照法人名称 【非图片认证时此参数必填】
	 **/
	private $entLegalName;
	
	/** 
	 * 营业执照上的企业名称 【非图片认证时此参数必填】
	 **/
	private $entName;
	
	/** 
	 * 二进制文件流 ,图片大小小于10M（图片越大上传耗时比较大），格式jpg,png、bmp等常用图片格式都可以，如果设置图片，即为图片认证，图片认证时其他字段可全部为空  【图片认证时此参数必填】
	 **/
	private $entProsPic;
	
	/** 
	 * 营业执照营业期限，两个时间段的数据，永久有效填写9999123199991231 ，只有注册时间请填写注册时间，如果有效时间为区间请以yyyyMMddyyyyMMdd的格式填写两个时间【非图片认证时此参数必填】
	 **/
	private $expires;
	
	/** 
	 * 有效期终止时间，永久有效或者只有注册时间请填写99991231 【图片认证与非图片认证均可选】与expires是补充作用
	 **/
	private $expiresEnd;
	
	/** 
	 * 有效期起始时间 ，长期请填写99991231，只有注册时间请填写注册时间【图片认证与非图片认证均可选】与expires是补充作用
	 **/
	private $expiresStart;

	private $apiParas = array();
	private $terminalType;
	private $terminalInfo;
	private $prodCode;
	private $apiVersion="1.0";
	private $notifyUrl;
	private $returnUrl;
    private $needEncrypt=false;

	
	public function setAddress($address)
	{
		$this->address = $address;
		$this->apiParas["address"] = $address;
	}

	public function getAddress()
	{
		return $this->address;
	}

	public function setBizId($bizId)
	{
		$this->bizId = $bizId;
		$this->apiParas["biz_id"] = $bizId;
	}

	public function getBizId()
	{
		return $this->bizId;
	}

	public function setCreditCode($creditCode)
	{
		$this->creditCode = $creditCode;
		$this->apiParas["credit_code"] = $creditCode;
	}

	public function getCreditCode()
	{
		return $this->creditCode;
	}

	public function setEntLegalName($entLegalName)
	{
		$this->entLegalName = $entLegalName;
		$this->apiParas["ent_legal_name"] = $entLegalName;
	}

	public function getEntLegalName()
	{
		return $this->entLegalName;
	}

	public function setEntName($entName)
	{
		$this->entName = $entName;
		$this->apiParas["ent_name"] = $entName;
	}

	public function getEntName()
	{
		return $this->entName;
	}

	public function setEntProsPic($entProsPic)
	{
		$this->entProsPic = $entProsPic;
		$this->apiParas["ent_pros_pic"] = $entProsPic;
	}

	public function getEntProsPic()
	{
		return $this->entProsPic;
	}

	public function setExpires($expires)
	{
		$this->expires = $expires;
		$this->apiParas["expires"] = $expires;
	}

	public function getExpires()
	{
		return $this->expires;
	}

	public function setExpiresEnd($expiresEnd)
	{
		$this->expiresEnd = $expiresEnd;
		$this->apiParas["expires_end"] = $expiresEnd;
	}

	public function getExpiresEnd()
	{
		return $this->expiresEnd;
	}

	public function setExpiresStart($expiresStart)
	{
		$this->expiresStart = $expiresStart;
		$this->apiParas["expires_start"] = $expiresStart;
	}

	public function getExpiresStart()
	{
		return $this->expiresStart;
	}

	public function getApiMethodName()
	{
		return "ssdata.dataservice.risk.businesslicense.certify";
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
