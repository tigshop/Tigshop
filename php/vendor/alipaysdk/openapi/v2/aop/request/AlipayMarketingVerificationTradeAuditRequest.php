<?php
/**
 * ALIPAY API: alipay.marketing.verification.trade.audit request
 *
 * @author auto create
 * @since 1.0, 2025-04-11 12:02:27
 */
class AlipayMarketingVerificationTradeAuditRequest
{
	/** 
	 * 支付宝交易号，用于识别交易信息
	 **/
	private $alipayTradeNo;
	
	/** 
	 * 审计相关业务信息，若审计结果未提交或未通过，则每次请求覆盖上次业务参数。审计已通过则不允许重新提交。
	 **/
	private $bizInfo;
	
	/** 
	 * 送货清单，转为字节流传递，要求为jpg、jpeg、png格式
	 **/
	private $deliveryListContent;
	
	/** 
	 * 辅助文件信息，如四码照片，转为字节流传递，要求为jpg、jpeg、png格式
	 **/
	private $evidentiaryContent;
	
	/** 
	 * 发票信息转为字节流传递，要求为jpg、jpeg、png格式
	 **/
	private $invoiceContent;
	
	/** 
	 * 外部订单号
	 **/
	private $outTradeNo;
	
	/** 
	 * 销货清单，转为字节流传递，要求为jpg、jpeg、png格式
	 **/
	private $salesListContent;
	
	/** 
	 * 支付宝分配的场景编码，用于识别活动场景及区域等信息
	 **/
	private $sceneCode;

	private $apiParas = array();
	private $terminalType;
	private $terminalInfo;
	private $prodCode;
	private $apiVersion="1.0";
	private $notifyUrl;
	private $returnUrl;
    private $needEncrypt=false;

	
	public function setAlipayTradeNo($alipayTradeNo)
	{
		$this->alipayTradeNo = $alipayTradeNo;
		$this->apiParas["alipay_trade_no"] = $alipayTradeNo;
	}

	public function getAlipayTradeNo()
	{
		return $this->alipayTradeNo;
	}

	public function setBizInfo($bizInfo)
	{
		$this->bizInfo = $bizInfo;
		$this->apiParas["biz_info"] = $bizInfo;
	}

	public function getBizInfo()
	{
		return $this->bizInfo;
	}

	public function setDeliveryListContent($deliveryListContent)
	{
		$this->deliveryListContent = $deliveryListContent;
		$this->apiParas["delivery_list_content"] = $deliveryListContent;
	}

	public function getDeliveryListContent()
	{
		return $this->deliveryListContent;
	}

	public function setEvidentiaryContent($evidentiaryContent)
	{
		$this->evidentiaryContent = $evidentiaryContent;
		$this->apiParas["evidentiary_content"] = $evidentiaryContent;
	}

	public function getEvidentiaryContent()
	{
		return $this->evidentiaryContent;
	}

	public function setInvoiceContent($invoiceContent)
	{
		$this->invoiceContent = $invoiceContent;
		$this->apiParas["invoice_content"] = $invoiceContent;
	}

	public function getInvoiceContent()
	{
		return $this->invoiceContent;
	}

	public function setOutTradeNo($outTradeNo)
	{
		$this->outTradeNo = $outTradeNo;
		$this->apiParas["out_trade_no"] = $outTradeNo;
	}

	public function getOutTradeNo()
	{
		return $this->outTradeNo;
	}

	public function setSalesListContent($salesListContent)
	{
		$this->salesListContent = $salesListContent;
		$this->apiParas["sales_list_content"] = $salesListContent;
	}

	public function getSalesListContent()
	{
		return $this->salesListContent;
	}

	public function setSceneCode($sceneCode)
	{
		$this->sceneCode = $sceneCode;
		$this->apiParas["scene_code"] = $sceneCode;
	}

	public function getSceneCode()
	{
		return $this->sceneCode;
	}

	public function getApiMethodName()
	{
		return "alipay.marketing.verification.trade.audit";
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
