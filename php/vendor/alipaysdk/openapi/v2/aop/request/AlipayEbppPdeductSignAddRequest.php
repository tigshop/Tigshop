<?php
/**
 * ALIPAY API: alipay.ebpp.pdeduct.sign.add request
 *
 * @author auto create
 * @since 1.0, 2024-08-14 16:56:56
 */
class AlipayEbppPdeductSignAddRequest
{
	/** 
	 * 机构签约代扣来源渠道
PUBLICPLATFORM：服务窗
	 **/
	private $agentChannel;
	
	/** 
	 * 从服务窗发起则为publicId的值
	 **/
	private $agentCode;
	
	/** 
	 * 户号，机构针对于每户的水、电都会有唯一的标识户号
	 **/
	private $billKey;
	
	/** 
	 * 业务类型。枚举支持：
*JF：公共事业缴纳。
*WUYE：物业缴费。
*HK：信用卡还款。
*TX：通讯缴费。
*IND：保险缴费。
	 **/
	private $bizType;
	
	/** 
	 * 支付宝缴费系统中的出账机构ID
	 **/
	private $chargeInst;
	
	/** 
	 * 代扣产品码。 缴费业务场景中，传入INST_DIRECT_DEDUCT。保险业务场景中, 传入INSURANCE_MERCHANT_DEDUCT。
	 **/
	private $deductProdCode;
	
	/** 
	 * 签约类型可为空
	 **/
	private $deductType;
	
	/** 
	 * 外部用户实名认证相关信息, 用于做签约时的实名校验。 
注： 

name: 姓名
cert_type: 身份证：IDENTITY_CARD、护照：PASSPORT、军官证：OFFICER_CARD、士兵证：SOLDIER_CARD、户口本：HOKOU等
cert_no: 证件号码
need_check_info取值 T/F，只有为T时才做强制校验。
mobile:手机号，目前暂不使用此字段做校验
min_age: 允许的最小买家年龄,min_age为整数，必须大于等于0.
	 **/
	private $extUserInfo;
	
	/** 
	 * 扩展字段
	 **/
	private $extendField;
	
	/** 
	 * 通知方式设置，可为空
	 **/
	private $notifyConfig;
	
	/** 
	 * 用户UserId在应用AppId下的唯一用户标识
	 **/
	private $openId;
	
	/** 
	 * 外部产生的协议ID
	 **/
	private $outAgreementId;
	
	/** 
	 * 户名，户主真实姓名
	 **/
	private $ownerName;
	
	/** 
	 * 支付工具设置，目前可为空
	 **/
	private $payConfig;
	
	/** 
	 * 支付密码鉴权token，需要用户首先处于登陆态，然后访问https://ebppprod.alipay.com/deduct/enterMobileicPayPassword.htm?cb=自己指定的回跳连接地址，访问页面后会进到独立密码校验页，用户输入密码校验成功后，会生成token回调到指定的回跳地址，如果设置cb=www.alipay.com则最后回调的内容是www.alipay.com?token=312314ADFDSFAS，然后签约时直接取得地址后token的值即可。
	 **/
	private $payPasswordToken;
	
	/** 
	 * 商户id，商户在支付宝的唯一标识，以 2088 开头的 16 位纯数字组成。
	 **/
	private $pid;
	
	/** 
	 * 签约到期时间。空表示无限期，一期固定传空。
	 **/
	private $signExpireDate;
	
	/** 
	 * 业务子类型。业务子类型是业务类型的下一级概念。枚举支持：
*WATER：缴水费。
*ELECTRIC：缴电费。
*GAS：缴燃气费。
*COMMUN：缴固话宽带费。
*CATV：缴有线电视费。
*TRAFFIC：缴交通罚款。
*WUYE：缴物业费。
*RC：定期还车贷代扣。
*RH：定期还房贷代扣。
*RR：定期还房租代扣。
*RN：定期还网贷代扣。
*CZ：手机充值代扣。
*CAR：车险。
*LIFE：寿险。
*HEALTH：健康险。
例如：WATER表示JF下面的水费。
	 **/
	private $subBizType;
	
	/** 
	 * 用户 id，用户在支付宝的唯一标识，以 2088 开头的 16 位纯数字组成。
	 **/
	private $userId;

	private $apiParas = array();
	private $terminalType;
	private $terminalInfo;
	private $prodCode;
	private $apiVersion="1.0";
	private $notifyUrl;
	private $returnUrl;
    private $needEncrypt=false;

	
	public function setAgentChannel($agentChannel)
	{
		$this->agentChannel = $agentChannel;
		$this->apiParas["agent_channel"] = $agentChannel;
	}

	public function getAgentChannel()
	{
		return $this->agentChannel;
	}

	public function setAgentCode($agentCode)
	{
		$this->agentCode = $agentCode;
		$this->apiParas["agent_code"] = $agentCode;
	}

	public function getAgentCode()
	{
		return $this->agentCode;
	}

	public function setBillKey($billKey)
	{
		$this->billKey = $billKey;
		$this->apiParas["bill_key"] = $billKey;
	}

	public function getBillKey()
	{
		return $this->billKey;
	}

	public function setBizType($bizType)
	{
		$this->bizType = $bizType;
		$this->apiParas["biz_type"] = $bizType;
	}

	public function getBizType()
	{
		return $this->bizType;
	}

	public function setChargeInst($chargeInst)
	{
		$this->chargeInst = $chargeInst;
		$this->apiParas["charge_inst"] = $chargeInst;
	}

	public function getChargeInst()
	{
		return $this->chargeInst;
	}

	public function setDeductProdCode($deductProdCode)
	{
		$this->deductProdCode = $deductProdCode;
		$this->apiParas["deduct_prod_code"] = $deductProdCode;
	}

	public function getDeductProdCode()
	{
		return $this->deductProdCode;
	}

	public function setDeductType($deductType)
	{
		$this->deductType = $deductType;
		$this->apiParas["deduct_type"] = $deductType;
	}

	public function getDeductType()
	{
		return $this->deductType;
	}

	public function setExtUserInfo($extUserInfo)
	{
		$this->extUserInfo = $extUserInfo;
		$this->apiParas["ext_user_info"] = $extUserInfo;
	}

	public function getExtUserInfo()
	{
		return $this->extUserInfo;
	}

	public function setExtendField($extendField)
	{
		$this->extendField = $extendField;
		$this->apiParas["extend_field"] = $extendField;
	}

	public function getExtendField()
	{
		return $this->extendField;
	}

	public function setNotifyConfig($notifyConfig)
	{
		$this->notifyConfig = $notifyConfig;
		$this->apiParas["notify_config"] = $notifyConfig;
	}

	public function getNotifyConfig()
	{
		return $this->notifyConfig;
	}

	public function setOpenId($openId)
	{
		$this->openId = $openId;
		$this->apiParas["open_id"] = $openId;
	}

	public function getOpenId()
	{
		return $this->openId;
	}

	public function setOutAgreementId($outAgreementId)
	{
		$this->outAgreementId = $outAgreementId;
		$this->apiParas["out_agreement_id"] = $outAgreementId;
	}

	public function getOutAgreementId()
	{
		return $this->outAgreementId;
	}

	public function setOwnerName($ownerName)
	{
		$this->ownerName = $ownerName;
		$this->apiParas["owner_name"] = $ownerName;
	}

	public function getOwnerName()
	{
		return $this->ownerName;
	}

	public function setPayConfig($payConfig)
	{
		$this->payConfig = $payConfig;
		$this->apiParas["pay_config"] = $payConfig;
	}

	public function getPayConfig()
	{
		return $this->payConfig;
	}

	public function setPayPasswordToken($payPasswordToken)
	{
		$this->payPasswordToken = $payPasswordToken;
		$this->apiParas["pay_password_token"] = $payPasswordToken;
	}

	public function getPayPasswordToken()
	{
		return $this->payPasswordToken;
	}

	public function setPid($pid)
	{
		$this->pid = $pid;
		$this->apiParas["pid"] = $pid;
	}

	public function getPid()
	{
		return $this->pid;
	}

	public function setSignExpireDate($signExpireDate)
	{
		$this->signExpireDate = $signExpireDate;
		$this->apiParas["sign_expire_date"] = $signExpireDate;
	}

	public function getSignExpireDate()
	{
		return $this->signExpireDate;
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

	public function setUserId($userId)
	{
		$this->userId = $userId;
		$this->apiParas["user_id"] = $userId;
	}

	public function getUserId()
	{
		return $this->userId;
	}

	public function getApiMethodName()
	{
		return "alipay.ebpp.pdeduct.sign.add";
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
