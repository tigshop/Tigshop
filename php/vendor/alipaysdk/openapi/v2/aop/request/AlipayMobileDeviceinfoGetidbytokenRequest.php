<?php
/**
 * ALIPAY API: alipay.mobile.deviceinfo.getidbytoken request
 *
 * @author auto create
 * @since 1.0, 2024-03-01 16:27:35
 */
class AlipayMobileDeviceinfoGetidbytokenRequest
{
	/** 
	 * 蚂蚁金服集团安全生成的设备token
	 **/
	private $apdidtoken;
	
	/** 
	 * 阿里巴巴集团安全生成的设备token
	 **/
	private $umidtoken;

	private $apiParas = array();
	private $terminalType;
	private $terminalInfo;
	private $prodCode;
	private $apiVersion="1.0";
	private $notifyUrl;
	private $returnUrl;
    private $needEncrypt=false;

	
	public function setApdidtoken($apdidtoken)
	{
		$this->apdidtoken = $apdidtoken;
		$this->apiParas["apdidtoken"] = $apdidtoken;
	}

	public function getApdidtoken()
	{
		return $this->apdidtoken;
	}

	public function setUmidtoken($umidtoken)
	{
		$this->umidtoken = $umidtoken;
		$this->apiParas["umidtoken"] = $umidtoken;
	}

	public function getUmidtoken()
	{
		return $this->umidtoken;
	}

	public function getApiMethodName()
	{
		return "alipay.mobile.deviceinfo.getidbytoken";
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
