<?php
/**
 * ALIPAY API: alipay.merchant.trade.file.upload request
 *
 * @author auto create
 * @since 1.0, 2024-10-15 13:52:14
 */
class AlipayMerchantTradeFileUploadRequest
{
	/** 
	 * 数据聚合维度，用于指定当前上传数据的统计维度。
● merchant：服务商侧商户（商编）维度
● cashier：收银员维度
	 **/
	private $dataDim;
	
	/** 
	 * 文件二进制流
	 **/
	private $fileContent;
	
	/** 
	 * 文件名(用于幂等)，格式规范见说明
	 **/
	private $fileName;
	
	/** 
	 * 文件类型，目前仅支持txt
	 **/
	private $fileType;
	
	/** 
	 * 服务商小程序ID
	 **/
	private $isvAppId;
	
	/** 
	 * 文件中数据条数
	 **/
	private $recordCount;
	
	/** 
	 * 报告类型，(DAY/WEEK/MONTH)
	 **/
	private $reportType;
	
	/** 
	 * 报告周期的结束时间，时间格式为yyyy-MM-dd，默认为当天0点
	 **/
	private $timePeriodEnd;
	
	/** 
	 * 报告周期的起始时间，时间格式为yyyy-MM-dd，默认为当天0点
	 **/
	private $timePeriodStart;

	private $apiParas = array();
	private $terminalType;
	private $terminalInfo;
	private $prodCode;
	private $apiVersion="1.0";
	private $notifyUrl;
	private $returnUrl;
    private $needEncrypt=false;

	
	public function setDataDim($dataDim)
	{
		$this->dataDim = $dataDim;
		$this->apiParas["data_dim"] = $dataDim;
	}

	public function getDataDim()
	{
		return $this->dataDim;
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

	public function setFileName($fileName)
	{
		$this->fileName = $fileName;
		$this->apiParas["file_name"] = $fileName;
	}

	public function getFileName()
	{
		return $this->fileName;
	}

	public function setFileType($fileType)
	{
		$this->fileType = $fileType;
		$this->apiParas["file_type"] = $fileType;
	}

	public function getFileType()
	{
		return $this->fileType;
	}

	public function setIsvAppId($isvAppId)
	{
		$this->isvAppId = $isvAppId;
		$this->apiParas["isv_app_id"] = $isvAppId;
	}

	public function getIsvAppId()
	{
		return $this->isvAppId;
	}

	public function setRecordCount($recordCount)
	{
		$this->recordCount = $recordCount;
		$this->apiParas["record_count"] = $recordCount;
	}

	public function getRecordCount()
	{
		return $this->recordCount;
	}

	public function setReportType($reportType)
	{
		$this->reportType = $reportType;
		$this->apiParas["report_type"] = $reportType;
	}

	public function getReportType()
	{
		return $this->reportType;
	}

	public function setTimePeriodEnd($timePeriodEnd)
	{
		$this->timePeriodEnd = $timePeriodEnd;
		$this->apiParas["time_period_end"] = $timePeriodEnd;
	}

	public function getTimePeriodEnd()
	{
		return $this->timePeriodEnd;
	}

	public function setTimePeriodStart($timePeriodStart)
	{
		$this->timePeriodStart = $timePeriodStart;
		$this->apiParas["time_period_start"] = $timePeriodStart;
	}

	public function getTimePeriodStart()
	{
		return $this->timePeriodStart;
	}

	public function getApiMethodName()
	{
		return "alipay.merchant.trade.file.upload";
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
