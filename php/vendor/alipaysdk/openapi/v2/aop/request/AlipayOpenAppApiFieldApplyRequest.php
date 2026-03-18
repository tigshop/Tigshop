<?php
/**
 * ALIPAY API: alipay.open.app.api.field.apply request
 *
 * @author auto create
 * @since 1.0, 2024-03-22 16:57:22
 */
class AlipayOpenAppApiFieldApplyRequest
{
	/** 
	 * 字段申请表单，其中api_name，field_name，package_code三个字段参数通过alipay.open.app.api.query接口查询获得，scene_code 则可通过alipay.open.app.api.scene.query接口查询获得。
	 **/
	private $authFieldApply;
	
	/** 
	 * 请上传应用使用图片必须包括如何登录、如何授权输出此字段、如何使用等内容。图片支持格式:png,jpg,jpeg,图片不超过10M。
video或picture_x不可同时为空，至少需传入1个。
	 **/
	private $picture1;
	
	/** 
	 * 请上传应用使用图片必须包括如何登录、如何授权输出此字段、如何使用等内容。图片支持格式:png,jpg,jpeg,图片不超过10M。
video或picture_x不可同时为空，至少需传入1个。
	 **/
	private $picture2;
	
	/** 
	 * 请上传应用使用图片必须包括如何登录、如何授权输出此字段、如何使用等内容。图片支持格式:png,jpg,jpeg,图片不超过10M。
video或picture_x不可同时为空，至少需传入1个。
	 **/
	private $picture3;
	
	/** 
	 * 请上传应用使用图片必须包括如何登录、如何授权输出此字段、如何使用等内容。图片支持格式:png,jpg,jpeg,图片不超过10M。
video或picture_x不可同时为空，至少需传入1个。
	 **/
	private $picture4;
	
	/** 
	 * 请上传应用使用图片必须包括如何登录、如何授权输出此字段、如何使用等内容。图片支持格式:png,jpg,jpeg,图片不超过10M。
video或picture_x不可同时为空，至少需传入1个。
	 **/
	private $picture5;
	
	/** 
	 * 请上传应用使用视频，必须包括如何登录、如何授权输出此字段、如何使用等内容。视频支持格式:MP4,视频不超过10M。
video或picture_x不可同时为空，至少需传入1个。
	 **/
	private $video;

	private $apiParas = array();
	private $terminalType;
	private $terminalInfo;
	private $prodCode;
	private $apiVersion="1.0";
	private $notifyUrl;
	private $returnUrl;
    private $needEncrypt=false;

	
	public function setAuthFieldApply($authFieldApply)
	{
		$this->authFieldApply = $authFieldApply;
		$this->apiParas["auth_field_apply"] = $authFieldApply;
	}

	public function getAuthFieldApply()
	{
		return $this->authFieldApply;
	}

	public function setPicture1($picture1)
	{
		$this->picture1 = $picture1;
		$this->apiParas["picture_1"] = $picture1;
	}

	public function getPicture1()
	{
		return $this->picture1;
	}

	public function setPicture2($picture2)
	{
		$this->picture2 = $picture2;
		$this->apiParas["picture_2"] = $picture2;
	}

	public function getPicture2()
	{
		return $this->picture2;
	}

	public function setPicture3($picture3)
	{
		$this->picture3 = $picture3;
		$this->apiParas["picture_3"] = $picture3;
	}

	public function getPicture3()
	{
		return $this->picture3;
	}

	public function setPicture4($picture4)
	{
		$this->picture4 = $picture4;
		$this->apiParas["picture_4"] = $picture4;
	}

	public function getPicture4()
	{
		return $this->picture4;
	}

	public function setPicture5($picture5)
	{
		$this->picture5 = $picture5;
		$this->apiParas["picture_5"] = $picture5;
	}

	public function getPicture5()
	{
		return $this->picture5;
	}

	public function setVideo($video)
	{
		$this->video = $video;
		$this->apiParas["video"] = $video;
	}

	public function getVideo()
	{
		return $this->video;
	}

	public function getApiMethodName()
	{
		return "alipay.open.app.api.field.apply";
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
