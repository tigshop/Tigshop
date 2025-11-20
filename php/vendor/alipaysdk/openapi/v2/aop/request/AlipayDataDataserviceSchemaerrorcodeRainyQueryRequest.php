<?php
/**
 * ALIPAY API: alipay.data.dataservice.schemaerrorcode.rainy.query request
 *
 * @author auto create
 * @since 1.0, 2024-11-11 20:22:19
 */
class AlipayDataDataserviceSchemaerrorcodeRainyQueryRequest
{
	/** 
	 * 1
	 **/
	private $stringMust;
	
	/** 
	 * 1
	 **/
	private $stringRegexNum;

	private $apiParas = array();
	private $terminalType;
	private $terminalInfo;
	private $prodCode;
	private $apiVersion="1.0";
	private $notifyUrl;
	private $returnUrl;
    private $needEncrypt=false;

	
	public function setStringMust($stringMust)
	{
		$this->stringMust = $stringMust;
		$this->apiParas["string_must"] = $stringMust;
	}

	public function getStringMust()
	{
		return $this->stringMust;
	}

	public function setStringRegexNum($stringRegexNum)
	{
		$this->stringRegexNum = $stringRegexNum;
		$this->apiParas["string_regex_num"] = $stringRegexNum;
	}

	public function getStringRegexNum()
	{
		return $this->stringRegexNum;
	}

	public function getApiMethodName()
	{
		return "alipay.data.dataservice.schemaerrorcode.rainy.query";
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
