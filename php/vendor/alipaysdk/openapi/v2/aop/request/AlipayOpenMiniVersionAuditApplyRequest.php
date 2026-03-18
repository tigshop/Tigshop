<?php
/**
 * ALIPAY API: alipay.open.mini.version.audit.apply request
 *
 * @author auto create
 * @since 1.0, 2024-09-05 18:02:08
 */
class AlipayOpenMiniVersionAuditApplyRequest
{
	/** 
	 * 小程序类目，格式为 第一个一级类目_第一个二级类目;第二个一级类目_第二个二级类目，详细类目可以通过  <a href="https://docs.open.alipay.com/api_49/alipay.open.mini.category.query">https://docs.open.alipay.com/api_49/alipay.open.mini.category.query</a>接口查询，如果不填默认采用当前小程序应用类目。使用默认应用类目后不需要再次上传营业执照号、营业执照名、营业执照截图、营业执照有效期。
	 **/
	private $appCategoryIds;
	
	/** 
	 * 小程序描述，长度限制 20~400 个字符（中文字符按2个字符计算）。
	 **/
	private $appDesc;
	
	/** 
	 * 小程序应用英文名称，长度限制 3～30 个字符（中文字符按2个字符计算）；仅支持英文和数字。
	 **/
	private $appEnglishName;
	
	/** 
	 * 小程序logo图标，图片格式仅支持 jpeg,png,jpg格式，不支持 bmp,gif,BMP,GIF格式。建议上传像素为180*180 px，logo图片最大 2M。
	 **/
	private $appLogo;
	
	/** 
	 * 小程序名称，长度限制 3~40 个字符（中文字符按2个字符计算），仅支持包含中文、数字、英文、下划线、+、-。
如果不填默认采用当前小程序应用名称，如无默认值则必填，不可为空。
	 **/
	private $appName;
	
	/** 
	 * 小程序简介，一句话描述小程序功能，长度限制 10~32个字符（中文字符按2个字符计算）。
	 **/
	private $appSlogan;
	
	/** 
	 * 小程序版本号，请选择开发版本执行提交审核操作。
	 **/
	private $appVersion;
	
	/** 
	 * 审核类型，建议设置成“BASE_PROMOTE”，小程序将会更容易上架。将小程序发布审核拆分成“准入”、“营销”。原先小程序需要两个环节都审核通过才能上架，现在小程序只需要准入通过即可上架，但是无法在营销场景（支付宝泛搜、支付宝首页推荐等）展现给用户，小程序可通过精搜或者扫码等方式使用。如果小程序需要进行营销，可发布新版本，当准入&营销都通过后，小程序也可被营销。点击查看支付宝小程序营销规范：<a href="https://opendocs.alipay.com/b/03al2q">https://opendocs.alipay.com/b/03al2q</a>
	 **/
	private $auditRule;
	
	/** 
	 * 审核通过后是否自动上架， 自动上架：true；不自动上架（默认）：false。 如果小程序上架前无需特殊处理，建议设置成true，平台将会在小程序审核通过时自动将其上架。 注意：若审核通过时，小程序仍未完成备案，则将会进行自动受限发布上架（发布上线后小程序将无法被搜索，限制小程序用户数为 50 人/天，无法进行相关业务推广，只可通过扫码使用，完成备案即可解除限制，上架后90天内不未完成备案，小程序将无法打开。）若审核通过时小程序也完成备案，则会正常上架。
	 **/
	private $autoOnline;
	
	/** 
	 * 小程序投放的端参数。例如投放到支付宝钱包是支付宝端。默认支付宝端。支持：
com.alipay.alipaywallet:支付宝端；
com.alipay.iot.xpaas：支付宝IoT端。
	 **/
	private $bundleId;
	
	/** 
	 * 第五张营业执照照片，不能超过 4MB，最大宽度 2160 px，最大高度 3840 px。图片格式仅支持 png,jpg格式。
参照<a href="https://opendocs.alipay.com/mini/operation/material ">https://opendocs.alipay.com/mini/operation/material</a>要求填写营业执照信息。
	 **/
	private $fifthLicensePic;
	
	/** 
	 * 小程序第五张应用截图。
截图大小不能超过 4MB，最大宽度 2160px，最大高度3840px。图片格式仅支持 png,jpg格式。
	 **/
	private $fifthScreenShot;
	
	/** 
	 * 第一张营业执照照片，不能超过 4MB，最大宽度 2160 px，最大高度 3840 px。图片格式仅支持 png,jpg格式。
参照<a href="https://opendocs.alipay.com/mini/operation/material ">https://opendocs.alipay.com/mini/operation/material</a>要求填写营业执照信息。
	 **/
	private $firstLicensePic;
	
	/** 
	 * 小程序第一张应用截图。
截图大小不能超过 4MB，最大宽度 2160px，最大高度 3840px。图片格式仅支持 png,jpg格式。
	 **/
	private $firstScreenShot;
	
	/** 
	 * 第一张特殊资质图片，不能超过4MB，最大宽度 2160px，最大高度3840px。图片格式仅支持 png,jpg格式。
参照<a href="https://opendocs.alipay.com/mini/operation/material ">https://opendocs.alipay.com/mini/operation/material</a>要求填写营业执照信息。
	 **/
	private $firstSpecialLicensePic;
	
	/** 
	 * 第四张营业执照照片，不能超过 4MB，最大宽度 2160 px，最大高度 3840 px。图片格式仅支持 png,jpg格式。
参照<a href="https://opendocs.alipay.com/mini/operation/material ">https://opendocs.alipay.com/mini/operation/material</a>要求填写营业执照信息。
	 **/
	private $fourthLicensePic;
	
	/** 
	 * 小程序第四张应用截图。
截图大小不能超过 4MB，最大宽度 2160px，最大高度3840px。图片格式仅支持 png,jpg格式。
	 **/
	private $fourthScreenShot;
	
	/** 
	 * 营业执照名称，参照<a href="https://opendocs.alipay.com/mini/operation/material">https://opendocs.alipay.com/mini/operation/material</a>,要求填写营业执照信息。
	 **/
	private $licenseName;
	
	/** 
	 * 营业执照证件号，部分小程序类目需要提交，可通过<a href="https://opendocs.alipay.com/mini/03l8c8 ">https://opendocs.alipay.com/mini/03l8c8</a>查询类目是否需要上传营业执照信息。参照<a href="https://opendocs.alipay.com/mini/operation/material ">https://opendocs.alipay.com/mini/operation/material </a>要求填写营业执照信息。
	 **/
	private $licenseNo;
	
	/** 
	 * 营业执照有效期，格式为 yyyy-MM-dd，9999-12-31表示长期有效。
	 **/
	private $licenseValidDate;
	
	/** 
	 * 小程序备注，小程序备注最多500字符（中文字符按2个字符计算）。
	 **/
	private $memo;
	
	/** 
	 * 新小程序前台类目，格式为 第一个一级类目_第一个二级类目;第二个一级类目_第二个二级类目_第二个三级类目，详细类目可以通过 <a href="https://docs.open.alipay.com/api_49/alipay.open.mini.category.query">https://docs.open.alipay.com/api_49/alipay.open.mini.category.query</a>
接口查询mini_category_list。
	 **/
	private $miniCategoryIds;
	
	/** 
	 * 门头照，不能超过 4MB，最大宽度 2160 px，最大高度 3840 px。图片格式仅支持 png,jpg格式。
参照<a href="https://opendocs.alipay.com/mini/operation/material ">https://opendocs.alipay.com/mini/operation/material</a>要求填写门头照信息。
	 **/
	private $outDoorPic;
	
	/** 
	 * 小程序服务区域类型
	 **/
	private $regionType;
	
	/** 
	 * 第二张营业执照照片，不能超过 4MB，最大宽度 2160 px，最大高度 3840 px。图片格式仅支持 png,jpg格式。
参照<a href="https://opendocs.alipay.com/mini/operation/material ">https://opendocs.alipay.com/mini/operation/material</a>要求填写营业执照信息。
	 **/
	private $secondLicensePic;
	
	/** 
	 * 小程序第二张应用截图。
截图大小不能超过 4MB，最大宽度 2160px，最大高度3840px。图片格式仅支持 png,jpg格式。
	 **/
	private $secondScreenShot;
	
	/** 
	 * 第二张特殊资质图片文件，不能超过4MB，最大宽度 2160px，最大高度3840px。图片格式仅支持 png,jpg格式。
参照<a href="https://opendocs.alipay.com/mini/operation/material ">https://opendocs.alipay.com/mini/operation/material</a>要求填写营业执照信息。
	 **/
	private $secondSpecialLicensePic;
	
	/** 
	 * 小程序客服邮箱，如果不填默认采用当前小程序的应用客服邮箱，小程序客服电话和邮箱至少输入一个。如果前期已经设置过该信息，本次可不填，平台将会为你默认上传该信息。
	 **/
	private $serviceEmail;
	
	/** 
	 * 小程序客服电话，长度限制5~30个字符，仅支持包含数字和-。如果不填默认采用当前小程序的应用客服电话，小程序客服电话和邮箱至少输入一个。如果前期已经设置过该信息，本次可不填，平台将会为你默认上传该信息。
	 **/
	private $servicePhone;
	
	/** 
	 * 省市区信息。当region_type为LOCATION或传入city_code时，province_code不能为空；填写area_code时，province_code和city_code不能为空。只填province_code则全选该省；填写province_code和city_code则全选该市，以此类推。省市区code参见<a href="https://gw.alipayobjects.com/os/bmw-prod/0aab0319-13de-42b9-85cf-13877a5f78ed.xlsx">https://gw.alipayobjects.com/os/bmw-prod/0aab0319-13de-42b9-85cf-13877a5f78ed.xlsx</a>
	 **/
	private $serviceRegionInfo;
	
	/** 
	 * 如果有审核加急权益，是否使用审核加急权益加速审核：
加速（默认）：true
不加速：false
	 **/
	private $speedUp;
	
	/** 
	 * 测试账号，是否需要填写请参见<a href="https://opendocs.alipay.com/mini/operation/standard/case/akxg6r#3.%20%E6%B5%8B%E8%AF%95%E5%86%85%E5%AE%B9%E6%8F%90%E4%BA%A4%E4%B8%8D%E5%AE%8C%E6%95%B4">https://opendocs.alipay.com/mini/operation/standard/case/akxg6r#3.%20%E6%B5%8B%E8%AF%95%E5%86%85%E5%AE%B9%E6%8F%90%E4%BA%A4%E4%B8%8D%E5%AE%8C%E6%95%B4</a>
	 **/
	private $testAccout;
	
	/** 
	 * 测试附件，用于上传测试报告和测试录屏，请上传10M以内附件，格式仅支持zip，rar。是否需要填写请参见: <a href="https://opendocs.alipay.com/mini/operation/standard/case/akxg6r#3.%20%E6%B5%8B%E8%AF%95%E5%86%85%E5%AE%B9%E6%8F%90%E4%BA%A4%E4%B8%8D%E5%AE%8C%E6%95%B4"/a>https://opendocs.alipay.com/mini/operation/standard/case/akxg6r#3.%20%E6%B5%8B%E8%AF%95%E5%86%85%E5%AE%B9%E6%8F%90%E4%BA%A4%E4%B8%8D%E5%AE%8C%E6%95%B4
	 **/
	private $testFileName;
	
	/** 
	 * 测试账号密码
	 **/
	private $testPassword;
	
	/** 
	 * 第三张营业执照照片，不能超过 4MB，最大宽度 2160 px，最大高度 3840 px。图片格式仅支持 png,jpg格式。
参照<a href="https://opendocs.alipay.com/mini/operation/material ">https://opendocs.alipay.com/mini/operation/material</a>要求填写营业执照信息。
	 **/
	private $thirdLicensePic;
	
	/** 
	 * 小程序第三张应用截图。
截图大小不能超过 4MB，最大宽度 2160px，最大高度 3840px。图片格式仅支持 png,jpg格式。
	 **/
	private $thirdScreenShot;
	
	/** 
	 * 第三张特殊资质图片文件，不能超过4MB，最大宽度 2160px，最大高度3840px。图片格式仅支持 png,jpg格式。
参照<a href="https://opendocs.alipay.com/mini/operation/material ">https://opendocs.alipay.com/mini/operation/material</a>要求填写营业执照信息。
	 **/
	private $thirdSpecialLicensePic;
	
	/** 
	 * 小程序版本描述，介绍此版本的主要变更和功能，30-500个字符（中文字符按2个字符计算）。
	 **/
	private $versionDesc;

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

	public function setAppVersion($appVersion)
	{
		$this->appVersion = $appVersion;
		$this->apiParas["app_version"] = $appVersion;
	}

	public function getAppVersion()
	{
		return $this->appVersion;
	}

	public function setAuditRule($auditRule)
	{
		$this->auditRule = $auditRule;
		$this->apiParas["audit_rule"] = $auditRule;
	}

	public function getAuditRule()
	{
		return $this->auditRule;
	}

	public function setAutoOnline($autoOnline)
	{
		$this->autoOnline = $autoOnline;
		$this->apiParas["auto_online"] = $autoOnline;
	}

	public function getAutoOnline()
	{
		return $this->autoOnline;
	}

	public function setBundleId($bundleId)
	{
		$this->bundleId = $bundleId;
		$this->apiParas["bundle_id"] = $bundleId;
	}

	public function getBundleId()
	{
		return $this->bundleId;
	}

	public function setFifthLicensePic($fifthLicensePic)
	{
		$this->fifthLicensePic = $fifthLicensePic;
		$this->apiParas["fifth_license_pic"] = $fifthLicensePic;
	}

	public function getFifthLicensePic()
	{
		return $this->fifthLicensePic;
	}

	public function setFifthScreenShot($fifthScreenShot)
	{
		$this->fifthScreenShot = $fifthScreenShot;
		$this->apiParas["fifth_screen_shot"] = $fifthScreenShot;
	}

	public function getFifthScreenShot()
	{
		return $this->fifthScreenShot;
	}

	public function setFirstLicensePic($firstLicensePic)
	{
		$this->firstLicensePic = $firstLicensePic;
		$this->apiParas["first_license_pic"] = $firstLicensePic;
	}

	public function getFirstLicensePic()
	{
		return $this->firstLicensePic;
	}

	public function setFirstScreenShot($firstScreenShot)
	{
		$this->firstScreenShot = $firstScreenShot;
		$this->apiParas["first_screen_shot"] = $firstScreenShot;
	}

	public function getFirstScreenShot()
	{
		return $this->firstScreenShot;
	}

	public function setFirstSpecialLicensePic($firstSpecialLicensePic)
	{
		$this->firstSpecialLicensePic = $firstSpecialLicensePic;
		$this->apiParas["first_special_license_pic"] = $firstSpecialLicensePic;
	}

	public function getFirstSpecialLicensePic()
	{
		return $this->firstSpecialLicensePic;
	}

	public function setFourthLicensePic($fourthLicensePic)
	{
		$this->fourthLicensePic = $fourthLicensePic;
		$this->apiParas["fourth_license_pic"] = $fourthLicensePic;
	}

	public function getFourthLicensePic()
	{
		return $this->fourthLicensePic;
	}

	public function setFourthScreenShot($fourthScreenShot)
	{
		$this->fourthScreenShot = $fourthScreenShot;
		$this->apiParas["fourth_screen_shot"] = $fourthScreenShot;
	}

	public function getFourthScreenShot()
	{
		return $this->fourthScreenShot;
	}

	public function setLicenseName($licenseName)
	{
		$this->licenseName = $licenseName;
		$this->apiParas["license_name"] = $licenseName;
	}

	public function getLicenseName()
	{
		return $this->licenseName;
	}

	public function setLicenseNo($licenseNo)
	{
		$this->licenseNo = $licenseNo;
		$this->apiParas["license_no"] = $licenseNo;
	}

	public function getLicenseNo()
	{
		return $this->licenseNo;
	}

	public function setLicenseValidDate($licenseValidDate)
	{
		$this->licenseValidDate = $licenseValidDate;
		$this->apiParas["license_valid_date"] = $licenseValidDate;
	}

	public function getLicenseValidDate()
	{
		return $this->licenseValidDate;
	}

	public function setMemo($memo)
	{
		$this->memo = $memo;
		$this->apiParas["memo"] = $memo;
	}

	public function getMemo()
	{
		return $this->memo;
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

	public function setOutDoorPic($outDoorPic)
	{
		$this->outDoorPic = $outDoorPic;
		$this->apiParas["out_door_pic"] = $outDoorPic;
	}

	public function getOutDoorPic()
	{
		return $this->outDoorPic;
	}

	public function setRegionType($regionType)
	{
		$this->regionType = $regionType;
		$this->apiParas["region_type"] = $regionType;
	}

	public function getRegionType()
	{
		return $this->regionType;
	}

	public function setSecondLicensePic($secondLicensePic)
	{
		$this->secondLicensePic = $secondLicensePic;
		$this->apiParas["second_license_pic"] = $secondLicensePic;
	}

	public function getSecondLicensePic()
	{
		return $this->secondLicensePic;
	}

	public function setSecondScreenShot($secondScreenShot)
	{
		$this->secondScreenShot = $secondScreenShot;
		$this->apiParas["second_screen_shot"] = $secondScreenShot;
	}

	public function getSecondScreenShot()
	{
		return $this->secondScreenShot;
	}

	public function setSecondSpecialLicensePic($secondSpecialLicensePic)
	{
		$this->secondSpecialLicensePic = $secondSpecialLicensePic;
		$this->apiParas["second_special_license_pic"] = $secondSpecialLicensePic;
	}

	public function getSecondSpecialLicensePic()
	{
		return $this->secondSpecialLicensePic;
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

	public function setServiceRegionInfo($serviceRegionInfo)
	{
		$this->serviceRegionInfo = $serviceRegionInfo;
		$this->apiParas["service_region_info"] = $serviceRegionInfo;
	}

	public function getServiceRegionInfo()
	{
		return $this->serviceRegionInfo;
	}

	public function setSpeedUp($speedUp)
	{
		$this->speedUp = $speedUp;
		$this->apiParas["speed_up"] = $speedUp;
	}

	public function getSpeedUp()
	{
		return $this->speedUp;
	}

	public function setTestAccout($testAccout)
	{
		$this->testAccout = $testAccout;
		$this->apiParas["test_accout"] = $testAccout;
	}

	public function getTestAccout()
	{
		return $this->testAccout;
	}

	public function setTestFileName($testFileName)
	{
		$this->testFileName = $testFileName;
		$this->apiParas["test_file_name"] = $testFileName;
	}

	public function getTestFileName()
	{
		return $this->testFileName;
	}

	public function setTestPassword($testPassword)
	{
		$this->testPassword = $testPassword;
		$this->apiParas["test_password"] = $testPassword;
	}

	public function getTestPassword()
	{
		return $this->testPassword;
	}

	public function setThirdLicensePic($thirdLicensePic)
	{
		$this->thirdLicensePic = $thirdLicensePic;
		$this->apiParas["third_license_pic"] = $thirdLicensePic;
	}

	public function getThirdLicensePic()
	{
		return $this->thirdLicensePic;
	}

	public function setThirdScreenShot($thirdScreenShot)
	{
		$this->thirdScreenShot = $thirdScreenShot;
		$this->apiParas["third_screen_shot"] = $thirdScreenShot;
	}

	public function getThirdScreenShot()
	{
		return $this->thirdScreenShot;
	}

	public function setThirdSpecialLicensePic($thirdSpecialLicensePic)
	{
		$this->thirdSpecialLicensePic = $thirdSpecialLicensePic;
		$this->apiParas["third_special_license_pic"] = $thirdSpecialLicensePic;
	}

	public function getThirdSpecialLicensePic()
	{
		return $this->thirdSpecialLicensePic;
	}

	public function setVersionDesc($versionDesc)
	{
		$this->versionDesc = $versionDesc;
		$this->apiParas["version_desc"] = $versionDesc;
	}

	public function getVersionDesc()
	{
		return $this->versionDesc;
	}

	public function getApiMethodName()
	{
		return "alipay.open.mini.version.audit.apply";
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
