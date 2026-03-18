<?php
/**
 * ALIPAY API: alipay.open.operation.openbizmock.testpathkey.query request
 *
 * @author auto create
 * @since 1.0, 2024-07-04 14:14:28
 */
class AlipayOpenOperationOpenbizmockTestpathkeyQueryRequest
{
	/** 
	 * 测试
	 **/
	private $a;
	
	/** 
	 * ceshi
	 **/
	private $b;
	
	/** 
	 * 测试
	 **/
	private $c;
	
	/** 
	 * 4
	 **/
	private $d;
	
	/** 
	 * 1
	 **/
	private $e;
	
	/** 
	 * 1
	 **/
	private $f;
	
	/** 
	 * ceshi
	 **/
	private $keykey;
	
	/** 
	 * 1
	 **/
	private $testPrice;

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

	public function setC($c)
	{
		$this->c = $c;
		$this->apiParas["c"] = $c;
	}

	public function getC()
	{
		return $this->c;
	}

	public function setD($d)
	{
		$this->d = $d;
		$this->apiParas["d"] = $d;
	}

	public function getD()
	{
		return $this->d;
	}

	public function setE($e)
	{
		$this->e = $e;
		$this->apiParas["e"] = $e;
	}

	public function getE()
	{
		return $this->e;
	}

	public function setF($f)
	{
		$this->f = $f;
		$this->apiParas["f"] = $f;
	}

	public function getF()
	{
		return $this->f;
	}

	public function setKeykey($keykey)
	{
		$this->keykey = $keykey;
		$this->apiParas["keykey"] = $keykey;
	}

	public function getKeykey()
	{
		return $this->keykey;
	}

	public function setTestPrice($testPrice)
	{
		$this->testPrice = $testPrice;
		$this->apiParas["test_price"] = $testPrice;
	}

	public function getTestPrice()
	{
		return $this->testPrice;
	}

	public function getApiMethodName()
	{
		return "alipay.open.operation.openbizmock.testpathkey.query";
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
