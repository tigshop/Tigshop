<?php
/**
 * ALIPAY API: alipay.open.mini.baseinfo.modify request
 *
 * @author auto create
 * @since 1.0, 2024-09-14 11:16:58
 */
class AlipayOpenMiniBaseinfoModifyRequest
{
	/** 
	 * 11_12;12_13。小程序类目，格式为 第一个一级类目_第一个二级类目;第二个一级类目_第二个二级类目，详细类目可以参考<a href="https://docs.open.alipay.com/api_49/alipay.open.mini.category.query">https://docs.open.alipay.com/api_49/alipay.open.mini.category.query</a>接口查询mini_category_list 。
	 **/
	private $appCategoryIds;
	
	/** 
	 * 小程序描述，长度限制 20~400 个字符。
如果前期已经设置过该信息，本次可不填，平台将会为你默认上传该信息。如果前期没有设置过该信息，则本次为必填。可通过<a href="https://opendocs.alipay.com/mini/03l21r">https://opendocs.alipay.com/mini/03l21r</a>查询当前小程序信息
	 **/
	private $appDesc;
	
	/** 
	 * 小程序应用英文名称。长度限制 3~30 个字符，仅支持包含中文、数字、英文、下划线、+、-。
如果前期已经设置过该信息，本次可不填，平台将会为你默认上传该信息。如果前期没有设置过该信息，则本次为必填。可通过<a href="https://opendocs.alipay.com/mini/03l21r?pathHash=36d314be&scene=common">alipay.open.mini.baseinfo.query</a>查询当前小程序信息
	 **/
	private $appEnglishName;
	
	/** 
	 * 小程序logo图标，图片格式仅支持 jpeg,png,jpg,PNG,JPG ,JPEG格式，不支持 bmp,gif,BMP,GIF格式。建议上传像素为180*180 px，logo图片最大 2M，图片高度与宽度必须一致。
如果不填默认采用当前小程序 logo 图标。如果前期已经设置过该信息，本次可不填，平台将会为你默认上传该信息。如果前期没有设置过该信息，则本次为必填。
	 **/
	private $appLogo;
	
	/** 
	 * 小程序名称。长度限制 3~30 个字符，仅支持包含中文、数字、英文、下划线、+、-。
如果前期已经设置过该信息，本次可不填，平台将会为你默认上传该信息。如果前期没有设置过该信息，则本次为必填。可通过<a href="https://opendocs.alipay.com/mini/03l21r?pathHash=36d314be&scene=common ">alipay.open.mini.baseinfo.query</a>查询当前小程序信息
	 **/
	private $appName;
	
	/** 
	 * 小程序简介，一句话描述小程序功能，长度限制 10~32个字符。
如果前期已经设置过该信息，本次可不填，平台将会为你默认上传该信息。如果前期没有设置过该信息，则本次为必填。可通过<a href="https://opendocs.alipay.com/mini/03l21r?pathHash=36d314be&scene=common">alipay.open.mini.baseinfo.query</a>查询当前小程序信息
	 **/
	private $appSlogan;
	
	/** 
	 * 新小程序前台类目，格式为 第一个一级类目_第一个二级类目;第二个一级类目_第二个二级类目_第二个三级类目，详细类目可以通过 <a href="https://docs.open.alipay.com/api_49/alipay.open.mini.category.query">https://docs.open.alipay.com/api_49/alipay.open.mini.category.query</a>
接口查询mini_category_list。
如果前期已经设置过该信息，本次可不填，平台将会为你默认上传该信息。如果前期没有设置过该信息，则本次为必填。可通过<a href="https://opendocs.alipay.com/mini/03l21r">https://opendocs.alipay.com/mini/03l21r</a>查询当前小程序信息
注意：个人开发者不得使用企业类目。
	 **/
	private $miniCategoryIds;
	
	/** 
	 * 小程序客服邮箱，如果不填默认采用当前小程序的应用客服邮箱，小程序客服电话和邮箱至少输入一个。如果前期已经设置过该信息，本次可不填，平台将会为你默认上传该信息。
注意：2021年7月1日后，该字段将逐步灰度为可选字段，请按可选开发。
	 **/
	private $serviceEmail;
	
	/** 
	 * 小程序客服电话，长度限制5~30个字符，仅支持包含数字和-。如果不填默认采用当前小程序的应用客服电话，小程序客服电话和邮箱至少输入一个。如果前期已经设置过该信息，本次可不填，平台将会为你默认上传该信息。
注意：2021年7月1日后，该字段将逐步灰度为必填字段，请按必填开发。
	 **/
	private $servicePhone;

	private $apiParas = array();
	private $terminalType;
	private $terminalInfo;
	private $prodCode;
	private $apiVersion="1.0";
	private $notifyUrl;
	private $returnUrl;
    private $needEncrypt=false;

	
	public function setAppCategoryIds($appCategoryIds)
	{
		$this->appCategoryIds = $appCategoryIds;
		$this->apiParas["app_category_ids"] = $appCategoryIds;
	}

	public function getAppCategoryIds()
	{
		return $this->appCategoryIds;
	}

	public function setAppDesc($appDesc)
	{
		$this->appDesc = $appDesc;
		$this->apiParas["app_desc"] = $appDesc;
	}

	public function getAppDesc()
	{
		return $this->appDesc;
	}

	public function setAppEnglishName($appEnglishName)
	{
		$this->appEnglishName = $appEnglishName;
		$this->apiParas["app_english_name"] = $appEnglishName;
	}

	public function getAppEnglishName()
	{
		return $this->appEnglishName;
	}

	public function setAppLogo($appLogo)
	{
		$this->appLogo = $appLogo;
		$this->apiParas["app_logo"] = $appLogo;
	}

	public function getAppLogo()
	{
		return $this->appLogo;
	}

	public function setAppName($appName)
	{
		$this->appName = $appName;
		$this->apiParas["app_name"] = $appName;
	}

	public function getAppName()
	{
		return $this->appName;
	}

	public function setAppSlogan($appSlogan)
	{
		$this->appSlogan = $appSlogan;
		$this->apiParas["app_slogan"] = $appSlogan;
	}

	public function getAppSlogan()
	{
		return $this->appSlogan;
	}

	public function setMiniCategoryIds($miniCategoryIds)
	{
		$this->miniCategoryIds = $miniCategoryIds;
		$this->apiParas["mini_category_ids"] = $miniCategoryIds;
	}

	public function getMiniCategoryIds()
	{
		return $this->miniCategoryIds;
	}

	public function setServiceEmail($serviceEmail)
	{
		$this->serviceEmail = $serviceEmail;
		$this->apiParas["service_email"] = $serviceEmail;
	}

	public function getServiceEmail()
	{
		return $this->serviceEmail;
	}

	public function setServicePhone($servicePhone)
	{
		$this->servicePhone = $servicePhone;
		$this->apiParas["service_phone"] = $servicePhone;
	}

	public function getServicePhone()
	{
		return $this->servicePhone;
	}

	public function getApiMethodName()
	{
		return "alipay.open.mini.baseinfo.modify";
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
