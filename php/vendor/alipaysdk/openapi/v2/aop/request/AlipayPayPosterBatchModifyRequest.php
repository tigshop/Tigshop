<?php
/**
 * ALIPAY API: alipay.pay.poster.batch.modify request
 *
 * @author auto create
 * @since 1.0, 2025-07-16 15:37:31
 */
class AlipayPayPosterBatchModifyRequest
{
	/** 
	 * 用户设备投放范围变更覆盖
	 **/
	private $deviceFile;
	
	/** 
	 * 编辑操作人
	 **/
	private $deviceIds;
	
	/** 
	 * 海报结束时间
	 **/
	private $endTime;
	
	/** 
	 * 海报图片链接
	 **/
	private $imgUrl;
	
	/** 
	 * 货柜对应的商家id
	 **/
	private $merchantId;
	
	/** 
	 * 是否进行活动下线
	 **/
	private $offline;
	
	/** 
	 * 编辑操作人记录
	 **/
	private $operator;
	
	/** 
	 * 活动计划主键
	 **/
	private $planId;
	
	/** 
	 * 开始时间
	 **/
	private $startTime;

	private $apiParas = array();
	private $terminalType;
	private $terminalInfo;
	private $prodCode;
	private $apiVersion="1.0";
	private $notifyUrl;
	private $returnUrl;
    private $needEncrypt=false;

	
	public function setDeviceFile($deviceFile)
	{
		$this->deviceFile = $deviceFile;
		$this->apiParas["device_file"] = $deviceFile;
	}

	public function getDeviceFile()
	{
		return $this->deviceFile;
	}

	public function setDeviceIds($deviceIds)
	{
		$this->deviceIds = $deviceIds;
		$this->apiParas["device_ids"] = $deviceIds;
	}

	public function getDeviceIds()
	{
		return $this->deviceIds;
	}

	public function setEndTime($endTime)
	{
		$this->endTime = $endTime;
		$this->apiParas["end_time"] = $endTime;
	}

	public function getEndTime()
	{
		return $this->endTime;
	}

	public function setImgUrl($imgUrl)
	{
		$this->imgUrl = $imgUrl;
		$this->apiParas["img_url"] = $imgUrl;
	}

	public function getImgUrl()
	{
		return $this->imgUrl;
	}

	public function setMerchantId($merchantId)
	{
		$this->merchantId = $merchantId;
		$this->apiParas["merchant_id"] = $merchantId;
	}

	public function getMerchantId()
	{
		return $this->merchantId;
	}

	public function setOffline($offline)
	{
		$this->offline = $offline;
		$this->apiParas["offline"] = $offline;
	}

	public function getOffline()
	{
		return $this->offline;
	}

	public function setOperator($operator)
	{
		$this->operator = $operator;
		$this->apiParas["operator"] = $operator;
	}

	public function getOperator()
	{
		return $this->operator;
	}

	public function setPlanId($planId)
	{
		$this->planId = $planId;
		$this->apiParas["plan_id"] = $planId;
	}

	public function getPlanId()
	{
		return $this->planId;
	}

	public function setStartTime($startTime)
	{
		$this->startTime = $startTime;
		$this->apiParas["start_time"] = $startTime;
	}

	public function getStartTime()
	{
		return $this->startTime;
	}

	public function getApiMethodName()
	{
		return "alipay.pay.poster.batch.modify";
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
