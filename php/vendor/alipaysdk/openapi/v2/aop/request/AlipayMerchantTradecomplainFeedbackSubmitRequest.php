<?php
/**
 * ALIPAY API: alipay.merchant.tradecomplain.feedback.submit request
 *
 * @author auto create
 * @since 1.0, 2023-11-06 10:52:20
 */
class AlipayMerchantTradecomplainFeedbackSubmitRequest
{
	/** 
	 * 支付宝侧投诉单号
	 **/
	private $complainEventId;
	
	/** 
	 * 反馈类目ID
00:使用体验保障金退款；
02:通过其他方式退款;
03:已发货;
04:其他;
05:已完成售后服务;
06:非我方责任范围；
	 **/
	private $feedbackCode;
	
	/** 
	 * 反馈内容，字数不超过200个字
	 **/
	private $feedbackContent;
	
	/** 
	 * 商家处理投诉时反馈凭证的图片id，多个逗号隔开（图片id可以通过"商户上传处理图片"接口获取）
	 **/
	private $feedbackImages;
	
	/** 
	 * 处理投诉人，字数不超过6个字
	 **/
	private $operator;

	private $apiParas = array();
	private $terminalType;
	private $terminalInfo;
	private $prodCode;
	private $apiVersion="1.0";
	private $notifyUrl;
	private $returnUrl;
    private $needEncrypt=false;

	
	public function setComplainEventId($complainEventId)
	{
		$this->complainEventId = $complainEventId;
		$this->apiParas["complain_event_id"] = $complainEventId;
	}

	public function getComplainEventId()
	{
		return $this->complainEventId;
	}

	public function setFeedbackCode($feedbackCode)
	{
		$this->feedbackCode = $feedbackCode;
		$this->apiParas["feedback_code"] = $feedbackCode;
	}

	public function getFeedbackCode()
	{
		return $this->feedbackCode;
	}

	public function setFeedbackContent($feedbackContent)
	{
		$this->feedbackContent = $feedbackContent;
		$this->apiParas["feedback_content"] = $feedbackContent;
	}

	public function getFeedbackContent()
	{
		return $this->feedbackContent;
	}

	public function setFeedbackImages($feedbackImages)
	{
		$this->feedbackImages = $feedbackImages;
		$this->apiParas["feedback_images"] = $feedbackImages;
	}

	public function getFeedbackImages()
	{
		return $this->feedbackImages;
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

	public function getApiMethodName()
	{
		return "alipay.merchant.tradecomplain.feedback.submit";
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
