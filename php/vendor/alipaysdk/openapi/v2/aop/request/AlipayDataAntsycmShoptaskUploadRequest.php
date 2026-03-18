<?php
/**
 * ALIPAY API: alipay.data.antsycm.shoptask.upload request
 *
 * @author auto create
 * @since 1.0, 2024-04-12 17:42:00
 */
class AlipayDataAntsycmShoptaskUploadRequest
{
	/** 
	 * 商户品牌，默认填写不指定。
值有：
1、不指定
2、卡士
3、三得利
	 **/
	private $brandName;
	
	/** 
	 * 商户授权码
	 **/
	private $businessCode;
	
	/** 
	 * 见<a href="https://opendocs.alipay.com/pre-open/0c07mb">品类维表</a>，依照场景需求使用
	 **/
	private $category;
	
	/** 
	 * 品类价格
	 **/
	private $categoryRange;
	
	/** 
	 * 文件流
	 **/
	private $fileContent;
	
	/** 
	 * 见<a href = "https://opendocs.alipay.com/pre-open/0bue7u">省市区信息表</a>，依照场景需求使用
	 **/
	private $marketArea;
	
	/** 
	 * 商户ID
	 **/
	private $partnerId;
	
	/** 
	 * 对应更新周期，每（周/月）N更新； once：无值要求； day：无值要求； week：周日=1，周六=7； month：1-31
	 **/
	private $scheduleTime;
	
	/** 
	 * 更新周期
	 **/
	private $scheduleType;
	
	/** 
	 * 见<a href = "https://opendocs.alipay.com/pre-open/0bjxu7">行业信息表</a>， 依照场景需求使用
	 **/
	private $shopIndustry;
	
	/** 
	 * 任务名称
	 **/
	private $taskName;
	
	/** 
	 * 任务类型
	 **/
	private $taskType;

	private $apiParas = array();
	private $terminalType;
	private $terminalInfo;
	private $prodCode;
	private $apiVersion="1.0";
	private $notifyUrl;
	private $returnUrl;
    private $needEncrypt=false;

	
	public function setBrandName($brandName)
	{
		$this->brandName = $brandName;
		$this->apiParas["brand_name"] = $brandName;
	}

	public function getBrandName()
	{
		return $this->brandName;
	}

	public function setBusinessCode($businessCode)
	{
		$this->businessCode = $businessCode;
		$this->apiParas["business_code"] = $businessCode;
	}

	public function getBusinessCode()
	{
		return $this->businessCode;
	}

	public function setCategory($category)
	{
		$this->category = $category;
		$this->apiParas["category"] = $category;
	}

	public function getCategory()
	{
		return $this->category;
	}

	public function setCategoryRange($categoryRange)
	{
		$this->categoryRange = $categoryRange;
		$this->apiParas["category_range"] = $categoryRange;
	}

	public function getCategoryRange()
	{
		return $this->categoryRange;
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

	public function setMarketArea($marketArea)
	{
		$this->marketArea = $marketArea;
		$this->apiParas["market_area"] = $marketArea;
	}

	public function getMarketArea()
	{
		return $this->marketArea;
	}

	public function setPartnerId($partnerId)
	{
		$this->partnerId = $partnerId;
		$this->apiParas["partner_id"] = $partnerId;
	}

	public function getPartnerId()
	{
		return $this->partnerId;
	}

	public function setScheduleTime($scheduleTime)
	{
		$this->scheduleTime = $scheduleTime;
		$this->apiParas["schedule_time"] = $scheduleTime;
	}

	public function getScheduleTime()
	{
		return $this->scheduleTime;
	}

	public function setScheduleType($scheduleType)
	{
		$this->scheduleType = $scheduleType;
		$this->apiParas["schedule_type"] = $scheduleType;
	}

	public function getScheduleType()
	{
		return $this->scheduleType;
	}

	public function setShopIndustry($shopIndustry)
	{
		$this->shopIndustry = $shopIndustry;
		$this->apiParas["shop_industry"] = $shopIndustry;
	}

	public function getShopIndustry()
	{
		return $this->shopIndustry;
	}

	public function setTaskName($taskName)
	{
		$this->taskName = $taskName;
		$this->apiParas["task_name"] = $taskName;
	}

	public function getTaskName()
	{
		return $this->taskName;
	}

	public function setTaskType($taskType)
	{
		$this->taskType = $taskType;
		$this->apiParas["task_type"] = $taskType;
	}

	public function getTaskType()
	{
		return $this->taskType;
	}

	public function getApiMethodName()
	{
		return "alipay.data.antsycm.shoptask.upload";
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
