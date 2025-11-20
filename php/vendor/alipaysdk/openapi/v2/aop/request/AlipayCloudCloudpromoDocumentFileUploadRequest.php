<?php
/**
 * ALIPAY API: alipay.cloud.cloudpromo.document.file.upload request
 *
 * @author auto create
 * @since 1.0, 2025-08-25 10:42:36
 */
class AlipayCloudCloudpromoDocumentFileUploadRequest
{
	/** 
	 * API-Key
	 **/
	private $apiKey;
	
	/** 
	 * MIME TYPE
	 **/
	private $contentType;
	
	/** 
	 * 客户id

	 **/
	private $customerId;
	
	/** 
	 * 应用数据ID（创建应用数据时为空，更新需指定应用数据ID）
	 **/
	private $documentId;
	
	/** 
	 * 上传文件的二进制流（最大20MB）
	 **/
	private $fileContent;
	
	/** 
	 * 操作人标识

	 **/
	private $operator;
	
	/** 
	 * 数据处理规则
	 **/
	private $processRule;
	
	/** 
	 * 表结构配置
	 **/
	private $tableSchema;
	
	/** 
	 * 空间ID
	 **/
	private $tenantId;
	
	/** 
	 * 数据类型
	 **/
	private $type;

	private $apiParas = array();
	private $terminalType;
	private $terminalInfo;
	private $prodCode;
	private $apiVersion="1.0";
	private $notifyUrl;
	private $returnUrl;
    private $needEncrypt=false;

	
	public function setApiKey($apiKey)
	{
		$this->apiKey = $apiKey;
		$this->apiParas["api_key"] = $apiKey;
	}

	public function getApiKey()
	{
		return $this->apiKey;
	}

	public function setContentType($contentType)
	{
		$this->contentType = $contentType;
		$this->apiParas["content_type"] = $contentType;
	}

	public function getContentType()
	{
		return $this->contentType;
	}

	public function setCustomerId($customerId)
	{
		$this->customerId = $customerId;
		$this->apiParas["customer_id"] = $customerId;
	}

	public function getCustomerId()
	{
		return $this->customerId;
	}

	public function setDocumentId($documentId)
	{
		$this->documentId = $documentId;
		$this->apiParas["document_id"] = $documentId;
	}

	public function getDocumentId()
	{
		return $this->documentId;
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

	public function setOperator($operator)
	{
		$this->operator = $operator;
		$this->apiParas["operator"] = $operator;
	}

	public function getOperator()
	{
		return $this->operator;
	}

	public function setProcessRule($processRule)
	{
		$this->processRule = $processRule;
		$this->apiParas["process_rule"] = $processRule;
	}

	public function getProcessRule()
	{
		return $this->processRule;
	}

	public function setTableSchema($tableSchema)
	{
		$this->tableSchema = $tableSchema;
		$this->apiParas["table_schema"] = $tableSchema;
	}

	public function getTableSchema()
	{
		return $this->tableSchema;
	}

	public function setTenantId($tenantId)
	{
		$this->tenantId = $tenantId;
		$this->apiParas["tenant_id"] = $tenantId;
	}

	public function getTenantId()
	{
		return $this->tenantId;
	}

	public function setType($type)
	{
		$this->type = $type;
		$this->apiParas["type"] = $type;
	}

	public function getType()
	{
		return $this->type;
	}

	public function getApiMethodName()
	{
		return "alipay.cloud.cloudpromo.document.file.upload";
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
