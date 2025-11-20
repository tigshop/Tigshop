<?php
/**
 * ALIPAY API: alipay.commerce.iot.marketing.plan.create request
 *
 * @author auto create
 * @since 1.0, 2025-10-13 19:12:40
 */
class AlipayCommerceIotMarketingPlanCreateRequest
{
	/** 
	 * 投放设备bizTid列表,服务商所有的设备，取设备的bizTid
多个bizTid示例：["010100q0jl5X4o8LZQWAOUxu6GcrtPl4wR68wQerXVACt5EAaQISk4k","010100q0iZ5XP3eiSA25lhlyGq8dxPMOHe8Ae4s1BGptXegHN3fCQ1g"]
	 **/
	private $bizTids;
	
	/** 
	 * 投放计划结束时间戳
	 **/
	private $endTime;
	
	/** 
	 * 海报投放图片  电子海报投放可投3张 ,一次只能投一张，第二次追加 上限3张后续会进行覆盖 
支付结果页投放。只能投放1张图片 取file_content_1字段
	 **/
	private $fileContent1;
	
	/** 
	 * 图片1横屏竖屏配置
  HORIZONTAL_SCREEN(1, "横屏"),
    VERTICAL_SCREEN(2, "竖屏")
	 **/
	private $hvScreen1;
	
	/** 
	 * 投放计划名称
	 **/
	private $planName;
	
	/** 
	 * 投放计划优先级
	 **/
	private $priority;
	
	/** 
	 * NORMAL_DISPLAY---电子海报,  可投3张图片，一次投一张，第二次追加，上限3张。后续投放会进行覆盖 
PAY_SUCCESS_RESULT---支付结果页。只能投放1张图片
MERCHANT_INFO_POSTER---商户信息海报
	 **/
	private $spaceCode;
	
	/** 
	 * 投放计划开始时间戳
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

	
	public function setBizTids($bizTids)
	{
		$this->bizTids = $bizTids;
		$this->apiParas["biz_tids"] = $bizTids;
	}

	public function getBizTids()
	{
		return $this->bizTids;
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

	public function setFileContent1($fileContent1)
	{
		$this->fileContent1 = $fileContent1;
		$this->apiParas["file_content_1"] = $fileContent1;
	}

	public function getFileContent1()
	{
		return $this->fileContent1;
	}

	public function setHvScreen1($hvScreen1)
	{
		$this->hvScreen1 = $hvScreen1;
		$this->apiParas["hv_screen_1"] = $hvScreen1;
	}

	public function getHvScreen1()
	{
		return $this->hvScreen1;
	}

	public function setPlanName($planName)
	{
		$this->planName = $planName;
		$this->apiParas["plan_name"] = $planName;
	}

	public function getPlanName()
	{
		return $this->planName;
	}

	public function setPriority($priority)
	{
		$this->priority = $priority;
		$this->apiParas["priority"] = $priority;
	}

	public function getPriority()
	{
		return $this->priority;
	}

	public function setSpaceCode($spaceCode)
	{
		$this->spaceCode = $spaceCode;
		$this->apiParas["space_code"] = $spaceCode;
	}

	public function getSpaceCode()
	{
		return $this->spaceCode;
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
		return "alipay.commerce.iot.marketing.plan.create";
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
