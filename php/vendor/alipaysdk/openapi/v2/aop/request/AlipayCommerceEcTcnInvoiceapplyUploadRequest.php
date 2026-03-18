<?php
/**
 * ALIPAY API: alipay.commerce.ec.tcn.invoiceapply.upload request
 *
 * @author auto create
 * @since 1.0, 2024-03-01 16:27:04
 */
class AlipayCommerceEcTcnInvoiceapplyUploadRequest
{
	/** 
	 * 申请ID
	 **/
	private $applyId;
	
	/** 
	 * 购方地址
	 **/
	private $buyerAddress;
	
	/** 
	 * 购方银行账号
	 **/
	private $buyerBankAccount;
	
	/** 
	 * 购方开户行
	 **/
	private $buyerBankName;
	
	/** 
	 * 购方名称
	 **/
	private $buyerName;
	
	/** 
	 * 购方税号
	 **/
	private $buyerTaxNo;
	
	/** 
	 * 购方电话
	 **/
	private $buyerTel;
	
	/** 
	 * 发票校验码
	 **/
	private $checkCode;
	
	/** 
	 * 文件字节流数据
	 **/
	private $fileData;
	
	/** 
	 * 文件类型
	 **/
	private $fileType;
	
	/** 
	 * 开票金额
	 **/
	private $invoiceAmount;
	
	/** 
	 * 小数点保留6位，开票金额（不含税）
	 **/
	private $invoiceAmountWithoutTax;
	
	/** 
	 * 发票代码
	 **/
	private $invoiceCode;
	
	/** 
	 * 开票时间
	 **/
	private $invoiceDate;
	
	/** 
	 * 发票介质类型
	 **/
	private $invoiceKind;
	
	/** 
	 * 发票号码
	 **/
	private $invoiceNo;
	
	/** 
	 * 税额
	 **/
	private $invoiceTaxAmount;
	
	/** 
	 * 发票税率
	 **/
	private $invoiceTaxRate;
	
	/** 
	 * 发票类型
	 **/
	private $invoiceType;
	
	/** 
	 * 原发票代码
	 **/
	private $originalInvoiceCode;
	
	/** 
	 * 原发票号码
	 **/
	private $originalInvoiceNo;
	
	/** 
	 * 冲红备注
	 **/
	private $redRemarks;
	
	/** 
	 * 销方地址
	 **/
	private $sellerAddress;
	
	/** 
	 * 销方银行账号
	 **/
	private $sellerBankAccount;
	
	/** 
	 * 销方开户行
	 **/
	private $sellerBankName;
	
	/** 
	 * 销方名称
	 **/
	private $sellerName;
	
	/** 
	 * 销方税号
	 **/
	private $sellerTaxNo;
	
	/** 
	 * 销方电话
	 **/
	private $sellerTel;

	private $apiParas = array();
	private $terminalType;
	private $terminalInfo;
	private $prodCode;
	private $apiVersion="1.0";
	private $notifyUrl;
	private $returnUrl;
    private $needEncrypt=false;

	
	public function setApplyId($applyId)
	{
		$this->applyId = $applyId;
		$this->apiParas["apply_id"] = $applyId;
	}

	public function getApplyId()
	{
		return $this->applyId;
	}

	public function setBuyerAddress($buyerAddress)
	{
		$this->buyerAddress = $buyerAddress;
		$this->apiParas["buyer_address"] = $buyerAddress;
	}

	public function getBuyerAddress()
	{
		return $this->buyerAddress;
	}

	public function setBuyerBankAccount($buyerBankAccount)
	{
		$this->buyerBankAccount = $buyerBankAccount;
		$this->apiParas["buyer_bank_account"] = $buyerBankAccount;
	}

	public function getBuyerBankAccount()
	{
		return $this->buyerBankAccount;
	}

	public function setBuyerBankName($buyerBankName)
	{
		$this->buyerBankName = $buyerBankName;
		$this->apiParas["buyer_bank_name"] = $buyerBankName;
	}

	public function getBuyerBankName()
	{
		return $this->buyerBankName;
	}

	public function setBuyerName($buyerName)
	{
		$this->buyerName = $buyerName;
		$this->apiParas["buyer_name"] = $buyerName;
	}

	public function getBuyerName()
	{
		return $this->buyerName;
	}

	public function setBuyerTaxNo($buyerTaxNo)
	{
		$this->buyerTaxNo = $buyerTaxNo;
		$this->apiParas["buyer_tax_no"] = $buyerTaxNo;
	}

	public function getBuyerTaxNo()
	{
		return $this->buyerTaxNo;
	}

	public function setBuyerTel($buyerTel)
	{
		$this->buyerTel = $buyerTel;
		$this->apiParas["buyer_tel"] = $buyerTel;
	}

	public function getBuyerTel()
	{
		return $this->buyerTel;
	}

	public function setCheckCode($checkCode)
	{
		$this->checkCode = $checkCode;
		$this->apiParas["check_code"] = $checkCode;
	}

	public function getCheckCode()
	{
		return $this->checkCode;
	}

	public function setFileData($fileData)
	{
		$this->fileData = $fileData;
		$this->apiParas["file_data"] = $fileData;
	}

	public function getFileData()
	{
		return $this->fileData;
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

	public function setInvoiceAmount($invoiceAmount)
	{
		$this->invoiceAmount = $invoiceAmount;
		$this->apiParas["invoice_amount"] = $invoiceAmount;
	}

	public function getInvoiceAmount()
	{
		return $this->invoiceAmount;
	}

	public function setInvoiceAmountWithoutTax($invoiceAmountWithoutTax)
	{
		$this->invoiceAmountWithoutTax = $invoiceAmountWithoutTax;
		$this->apiParas["invoice_amount_without_tax"] = $invoiceAmountWithoutTax;
	}

	public function getInvoiceAmountWithoutTax()
	{
		return $this->invoiceAmountWithoutTax;
	}

	public function setInvoiceCode($invoiceCode)
	{
		$this->invoiceCode = $invoiceCode;
		$this->apiParas["invoice_code"] = $invoiceCode;
	}

	public function getInvoiceCode()
	{
		return $this->invoiceCode;
	}

	public function setInvoiceDate($invoiceDate)
	{
		$this->invoiceDate = $invoiceDate;
		$this->apiParas["invoice_date"] = $invoiceDate;
	}

	public function getInvoiceDate()
	{
		return $this->invoiceDate;
	}

	public function setInvoiceKind($invoiceKind)
	{
		$this->invoiceKind = $invoiceKind;
		$this->apiParas["invoice_kind"] = $invoiceKind;
	}

	public function getInvoiceKind()
	{
		return $this->invoiceKind;
	}

	public function setInvoiceNo($invoiceNo)
	{
		$this->invoiceNo = $invoiceNo;
		$this->apiParas["invoice_no"] = $invoiceNo;
	}

	public function getInvoiceNo()
	{
		return $this->invoiceNo;
	}

	public function setInvoiceTaxAmount($invoiceTaxAmount)
	{
		$this->invoiceTaxAmount = $invoiceTaxAmount;
		$this->apiParas["invoice_tax_amount"] = $invoiceTaxAmount;
	}

	public function getInvoiceTaxAmount()
	{
		return $this->invoiceTaxAmount;
	}

	public function setInvoiceTaxRate($invoiceTaxRate)
	{
		$this->invoiceTaxRate = $invoiceTaxRate;
		$this->apiParas["invoice_tax_rate"] = $invoiceTaxRate;
	}

	public function getInvoiceTaxRate()
	{
		return $this->invoiceTaxRate;
	}

	public function setInvoiceType($invoiceType)
	{
		$this->invoiceType = $invoiceType;
		$this->apiParas["invoice_type"] = $invoiceType;
	}

	public function getInvoiceType()
	{
		return $this->invoiceType;
	}

	public function setOriginalInvoiceCode($originalInvoiceCode)
	{
		$this->originalInvoiceCode = $originalInvoiceCode;
		$this->apiParas["original_invoice_code"] = $originalInvoiceCode;
	}

	public function getOriginalInvoiceCode()
	{
		return $this->originalInvoiceCode;
	}

	public function setOriginalInvoiceNo($originalInvoiceNo)
	{
		$this->originalInvoiceNo = $originalInvoiceNo;
		$this->apiParas["original_invoice_no"] = $originalInvoiceNo;
	}

	public function getOriginalInvoiceNo()
	{
		return $this->originalInvoiceNo;
	}

	public function setRedRemarks($redRemarks)
	{
		$this->redRemarks = $redRemarks;
		$this->apiParas["red_remarks"] = $redRemarks;
	}

	public function getRedRemarks()
	{
		return $this->redRemarks;
	}

	public function setSellerAddress($sellerAddress)
	{
		$this->sellerAddress = $sellerAddress;
		$this->apiParas["seller_address"] = $sellerAddress;
	}

	public function getSellerAddress()
	{
		return $this->sellerAddress;
	}

	public function setSellerBankAccount($sellerBankAccount)
	{
		$this->sellerBankAccount = $sellerBankAccount;
		$this->apiParas["seller_bank_account"] = $sellerBankAccount;
	}

	public function getSellerBankAccount()
	{
		return $this->sellerBankAccount;
	}

	public function setSellerBankName($sellerBankName)
	{
		$this->sellerBankName = $sellerBankName;
		$this->apiParas["seller_bank_name"] = $sellerBankName;
	}

	public function getSellerBankName()
	{
		return $this->sellerBankName;
	}

	public function setSellerName($sellerName)
	{
		$this->sellerName = $sellerName;
		$this->apiParas["seller_name"] = $sellerName;
	}

	public function getSellerName()
	{
		return $this->sellerName;
	}

	public function setSellerTaxNo($sellerTaxNo)
	{
		$this->sellerTaxNo = $sellerTaxNo;
		$this->apiParas["seller_tax_no"] = $sellerTaxNo;
	}

	public function getSellerTaxNo()
	{
		return $this->sellerTaxNo;
	}

	public function setSellerTel($sellerTel)
	{
		$this->sellerTel = $sellerTel;
		$this->apiParas["seller_tel"] = $sellerTel;
	}

	public function getSellerTel()
	{
		return $this->sellerTel;
	}

	public function getApiMethodName()
	{
		return "alipay.commerce.ec.tcn.invoiceapply.upload";
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
