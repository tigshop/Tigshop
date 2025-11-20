<?php
/**
 * ALIPAY API: alipay.data.dataservice.treeapitwelve.rainystest.query request
 *
 * @author auto create
 * @since 1.0, 2025-08-18 23:02:11
 */
class AlipayDataDataserviceTreeapitwelveRainystestQueryRequest
{
	/** 
	 * 测试数据
	 **/
	private $demoField;
	
	/** 
	 * 测试
	 **/
	private $refCase;

	private $apiParas = array();
	private $terminalType;
	private $terminalInfo;
	private $prodCode;
	private $apiVersion="1.0";
	private $notifyUrl;
	private $returnUrl;
    private $needEncrypt=false;

	
	public function setDemoField($demoField)
	{
		$this->demoField = $demoField;
		$this->apiParas["demo_field"] = $demoField;
	}

	public function getDemoField()
	{
		return $this->demoField;
	}

	public function setRefCase($refCase)
	{
		$this->refCase = $refCase;
		$this->apiParas["ref_case"] = $refCase;
	}

	public function getRefCase()
	{
		return $this->refCase;
	}

	public function getApiMethodName()
	{
		return "alipay.data.dataservice.treeapitwelve.rainystest.query";
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
