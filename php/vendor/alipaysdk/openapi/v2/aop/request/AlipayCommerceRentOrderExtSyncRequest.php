<?php
/**
 * ALIPAY API: alipay.commerce.rent.order.ext.sync request
 *
 * @author auto create
 * @since 1.0, 2025-08-20 21:37:35
 */
class AlipayCommerceRentOrderExtSyncRequest
{
	/** 
	 * 买家的身份证反面照片
	 **/
	private $buyerCertBackPic;
	
	/** 
	 * 买家的身份证正面照片
	 **/
	private $buyerCertFrontPic;
	
	/** 
	 * 买家扩展信息
	 **/
	private $buyerExtInfo;
	
	/** 
	 * 买家支付宝用户ID
	 **/
	private $buyerId;
	
	/** 
	 * 买家的活体检测照片
	 **/
	private $buyerLivePic;
	
	/** 
	 * 买家支付宝OPENID
	 **/
	private $buyerOpenId;
	
	/** 
	 * 物流扩展信息
	 **/
	private $deliveryExtInfo;
	
	/** 
	 * 收货确认图片
	 **/
	private $deliveryReceivedPic;
	
	/** 
	 * null
	 **/
	private $financingExtInfo;
	
	/** 
	 * 租赁协议
	 **/
	private $financingRentProtocol;
	
	/** 
	 * 首租信息
	 **/
	private $headLeaseExtInfo;
	
	/** 
	 * 首租协议
	 **/
	private $headLeaseProtocol;
	
	/** 
	 * 历史资产融资扩展信息
	 **/
	private $historicalAssetFinancingExtInfo;
	
	/** 
	 * 商品扩展信息
	 **/
	private $itemExtInfo;
	
	/** 
	 * 订单扩展信息
	 **/
	private $orderExtInfo;
	
	/** 
	 * 交易组件订单Id，取值：租赁下单接口返回的orderId
	 **/
	private $orderId;
	
	/** 
	 * 外部业务单号，取值：业务方自己的单据号
	 **/
	private $outBizId;
	
	/** 
	 * 平台服务协议
	 **/
	private $platformServiceProtocol;
	
	/** 
	 * 同步场景(枚举值)
	 **/
	private $syncScene;

	private $apiParas = array();
	private $terminalType;
	private $terminalInfo;
	private $prodCode;
	private $apiVersion="1.0";
	private $notifyUrl;
	private $returnUrl;
    private $needEncrypt=false;

	
	public function setBuyerCertBackPic($buyerCertBackPic)
	{
		$this->buyerCertBackPic = $buyerCertBackPic;
		$this->apiParas["buyer_cert_back_pic"] = $buyerCertBackPic;
	}

	public function getBuyerCertBackPic()
	{
		return $this->buyerCertBackPic;
	}

	public function setBuyerCertFrontPic($buyerCertFrontPic)
	{
		$this->buyerCertFrontPic = $buyerCertFrontPic;
		$this->apiParas["buyer_cert_front_pic"] = $buyerCertFrontPic;
	}

	public function getBuyerCertFrontPic()
	{
		return $this->buyerCertFrontPic;
	}

	public function setBuyerExtInfo($buyerExtInfo)
	{
		$this->buyerExtInfo = $buyerExtInfo;
		$this->apiParas["buyer_ext_info"] = $buyerExtInfo;
	}

	public function getBuyerExtInfo()
	{
		return $this->buyerExtInfo;
	}

	public function setBuyerId($buyerId)
	{
		$this->buyerId = $buyerId;
		$this->apiParas["buyer_id"] = $buyerId;
	}

	public function getBuyerId()
	{
		return $this->buyerId;
	}

	public function setBuyerLivePic($buyerLivePic)
	{
		$this->buyerLivePic = $buyerLivePic;
		$this->apiParas["buyer_live_pic"] = $buyerLivePic;
	}

	public function getBuyerLivePic()
	{
		return $this->buyerLivePic;
	}

	public function setBuyerOpenId($buyerOpenId)
	{
		$this->buyerOpenId = $buyerOpenId;
		$this->apiParas["buyer_open_id"] = $buyerOpenId;
	}

	public function getBuyerOpenId()
	{
		return $this->buyerOpenId;
	}

	public function setDeliveryExtInfo($deliveryExtInfo)
	{
		$this->deliveryExtInfo = $deliveryExtInfo;
		$this->apiParas["delivery_ext_info"] = $deliveryExtInfo;
	}

	public function getDeliveryExtInfo()
	{
		return $this->deliveryExtInfo;
	}

	public function setDeliveryReceivedPic($deliveryReceivedPic)
	{
		$this->deliveryReceivedPic = $deliveryReceivedPic;
		$this->apiParas["delivery_received_pic"] = $deliveryReceivedPic;
	}

	public function getDeliveryReceivedPic()
	{
		return $this->deliveryReceivedPic;
	}

	public function setFinancingExtInfo($financingExtInfo)
	{
		$this->financingExtInfo = $financingExtInfo;
		$this->apiParas["financing_ext_info"] = $financingExtInfo;
	}

	public function getFinancingExtInfo()
	{
		return $this->financingExtInfo;
	}

	public function setFinancingRentProtocol($financingRentProtocol)
	{
		$this->financingRentProtocol = $financingRentProtocol;
		$this->apiParas["financing_rent_protocol"] = $financingRentProtocol;
	}

	public function getFinancingRentProtocol()
	{
		return $this->financingRentProtocol;
	}

	public function setHeadLeaseExtInfo($headLeaseExtInfo)
	{
		$this->headLeaseExtInfo = $headLeaseExtInfo;
		$this->apiParas["head_lease_ext_info"] = $headLeaseExtInfo;
	}

	public function getHeadLeaseExtInfo()
	{
		return $this->headLeaseExtInfo;
	}

	public function setHeadLeaseProtocol($headLeaseProtocol)
	{
		$this->headLeaseProtocol = $headLeaseProtocol;
		$this->apiParas["head_lease_protocol"] = $headLeaseProtocol;
	}

	public function getHeadLeaseProtocol()
	{
		return $this->headLeaseProtocol;
	}

	public function setHistoricalAssetFinancingExtInfo($historicalAssetFinancingExtInfo)
	{
		$this->historicalAssetFinancingExtInfo = $historicalAssetFinancingExtInfo;
		$this->apiParas["historical_asset_financing_ext_info"] = $historicalAssetFinancingExtInfo;
	}

	public function getHistoricalAssetFinancingExtInfo()
	{
		return $this->historicalAssetFinancingExtInfo;
	}

	public function setItemExtInfo($itemExtInfo)
	{
		$this->itemExtInfo = $itemExtInfo;
		$this->apiParas["item_ext_info"] = $itemExtInfo;
	}

	public function getItemExtInfo()
	{
		return $this->itemExtInfo;
	}

	public function setOrderExtInfo($orderExtInfo)
	{
		$this->orderExtInfo = $orderExtInfo;
		$this->apiParas["order_ext_info"] = $orderExtInfo;
	}

	public function getOrderExtInfo()
	{
		return $this->orderExtInfo;
	}

	public function setOrderId($orderId)
	{
		$this->orderId = $orderId;
		$this->apiParas["order_id"] = $orderId;
	}

	public function getOrderId()
	{
		return $this->orderId;
	}

	public function setOutBizId($outBizId)
	{
		$this->outBizId = $outBizId;
		$this->apiParas["out_biz_id"] = $outBizId;
	}

	public function getOutBizId()
	{
		return $this->outBizId;
	}

	public function setPlatformServiceProtocol($platformServiceProtocol)
	{
		$this->platformServiceProtocol = $platformServiceProtocol;
		$this->apiParas["platform_service_protocol"] = $platformServiceProtocol;
	}

	public function getPlatformServiceProtocol()
	{
		return $this->platformServiceProtocol;
	}

	public function setSyncScene($syncScene)
	{
		$this->syncScene = $syncScene;
		$this->apiParas["sync_scene"] = $syncScene;
	}

	public function getSyncScene()
	{
		return $this->syncScene;
	}

	public function getApiMethodName()
	{
		return "alipay.commerce.rent.order.ext.sync";
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
