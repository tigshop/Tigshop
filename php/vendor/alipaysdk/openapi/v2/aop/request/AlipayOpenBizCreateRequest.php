<?php
/**
 * ALIPAY API: alipay.open.biz.create request
 *
 * @author auto create
 * @since 1.0, 2023-09-11 19:30:29
 */
class AlipayOpenBizCreateRequest
{
	/** 
	 * 2121
	 **/
	private $a;
	
	/** 
	 * 1
	 **/
	private $b;
	
	/** 
	 * 21
	 **/
	private $de;
	
	/** 
	 * 1
	 **/
	private $stringbuff;

	private $apiParas = array();
	private $terminalType;
	private $terminalInfo;
	private $prodCode;
	private $apiVersion="1.0";
	private $notifyUrl;
	private $returnUrl;
    private $needEncrypt=false;

	
	public function setA($a)
	{
		$this->a = $a;
		$this->apiParas["a"] = $a;
	}

	public function getA()
	{
		return $this->a;
	}

	public function setB($b)
	{
		$this->b = $b;
		$this->apiParas["b"] = $b;
	}

	public function getB()
	{
		return $this->b;
	}

	public function setDe($de)
	{
		$this->de = $de;
		$this->apiParas["de"] = $de;
	}

	public function getDe()
	{
		return $this->de;
	}

	public function setStringbuff($stringbuff)
	{
		$this->stringbuff = $stringbuff;
		$this->apiParas["stringbuff"] = $stringbuff;
	}

	public function getStringbuff()
	{
		return $this->stringbuff;
	}

	public function getApiMethodName()
	{
		return "alipay.open.biz.create";
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
