<?php
/**
 * ALIPAY API: ant.merchant.expand.eco.attachment.upload request
 *
 * @author auto create
 * @since 1.0, 2024-06-06 15:02:03
 */
class AntMerchantExpandEcoAttachmentUploadRequest
{
	/** 
	 * 附件的业务类型
	 **/
	private $bizType;
	
	/** 
	 * 外部平台编号
	 **/
	private $busiPlatform;
	
	/** 
	 * 文件内容，以文件流形式进行传输
	 **/
	private $fileContent;
	
	/** 
	 * 文档格式
	 **/
	private $fileFormat;
	
	/** 
	 * 附件单据号（必填）订单号 (out_order_id)
	 **/
	private $outOrderId;
	
	/** 
	 * 图片序号，多个文件上传时，part_no按照0,1,2...递增（必填）
	 **/
	private $partNo;
	
	/** 
	 * 码图片附件
	 **/
	private $subBizType;

	private $apiParas = array();
	private $terminalType;
	private $terminalInfo;
	private $prodCode;
	private $apiVersion="1.0";
	private $notifyUrl;
	private $returnUrl;
    private $needEncrypt=false;

	
	public function setBizType($bizType)
	{
		$this->bizType = $bizType;
		$this->apiParas["biz_type"] = $bizType;
	}

	public function getBizType()
	{
		return $this->bizType;
	}

	public function setBusiPlatform($busiPlatform)
	{
		$this->busiPlatform = $busiPlatform;
		$this->apiParas["busi_platform"] = $busiPlatform;
	}

	public function getBusiPlatform()
	{
		return $this->busiPlatform;
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

	public function setFileFormat($fileFormat)
	{
		$this->fileFormat = $fileFormat;
		$this->apiParas["file_format"] = $fileFormat;
	}

	public function getFileFormat()
	{
		return $this->fileFormat;
	}

	public function setOutOrderId($outOrderId)
	{
		$this->outOrderId = $outOrderId;
		$this->apiParas["out_order_id"] = $outOrderId;
	}

	public function getOutOrderId()
	{
		return $this->outOrderId;
	}

	public function setPartNo($partNo)
	{
		$this->partNo = $partNo;
		$this->apiParas["part_no"] = $partNo;
	}

	public function getPartNo()
	{
		return $this->partNo;
	}

	public function setSubBizType($subBizType)
	{
		$this->subBizType = $subBizType;
		$this->apiParas["sub_biz_type"] = $subBizType;
	}

	public function getSubBizType()
	{
		return $this->subBizType;
	}

	public function getApiMethodName()
	{
		return "ant.merchant.expand.eco.attachment.upload";
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
