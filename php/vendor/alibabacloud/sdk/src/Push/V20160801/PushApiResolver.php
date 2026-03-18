<?php

namespace AlibabaCloud\Push\V20160801;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method BindAlias bindAlias(array $options = [])
 * @method BindPhone bindPhone(array $options = [])
 * @method BindTag bindTag(array $options = [])
 * @method CancelPush cancelPush(array $options = [])
 * @method CheckCertificate checkCertificate(array $options = [])
 * @method CheckDevice checkDevice(array $options = [])
 * @method CheckDevices checkDevices(array $options = [])
 * @method CompleteContinuouslyPush completeContinuouslyPush(array $options = [])
 * @method ContinuouslyPush continuouslyPush(array $options = [])
 * @method ListSummaryApps listSummaryApps(array $options = [])
 * @method ListTags listTags(array $options = [])
 * @method MassPush massPush(array $options = [])
 * @method Push push(array $options = [])
 * @method PushMessageToAndroid pushMessageToAndroid(array $options = [])
 * @method PushMessageToiOS pushMessageToiOS(array $options = [])
 * @method PushNoticeToAndroid pushNoticeToAndroid(array $options = [])
 * @method PushNoticeToiOS pushNoticeToiOS(array $options = [])
 * @method QueryAliases queryAliases(array $options = [])
 * @method QueryDeviceInfo queryDeviceInfo(array $options = [])
 * @method QueryDevicesByAccount queryDevicesByAccount(array $options = [])
 * @method QueryDevicesByAlias queryDevicesByAlias(array $options = [])
 * @method QueryDeviceStat queryDeviceStat(array $options = [])
 * @method QueryPushRecords queryPushRecords(array $options = [])
 * @method QueryPushStatByApp queryPushStatByApp(array $options = [])
 * @method QueryPushStatByMsg queryPushStatByMsg(array $options = [])
 * @method QueryTags queryTags(array $options = [])
 * @method QueryUniqueDeviceStat queryUniqueDeviceStat(array $options = [])
 * @method RemoveTag removeTag(array $options = [])
 * @method UnbindAlias unbindAlias(array $options = [])
 * @method UnbindPhone unbindPhone(array $options = [])
 * @method UnbindTag unbindTag(array $options = [])
 */
class PushApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'Push';

    /** @var string */
    public $version = '2016-08-01';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getDeviceId()
 * @method $this withDeviceId($value)
 * @method string getAliasName()
 * @method $this withAliasName($value)
 * @method string getAppKey()
 * @method $this withAppKey($value)
 */
class BindAlias extends Rpc
{
}

/**
 * @method string getPhoneNumber()
 * @method $this withPhoneNumber($value)
 * @method string getDeviceId()
 * @method $this withDeviceId($value)
 * @method string getAppKey()
 * @method $this withAppKey($value)
 */
class BindPhone extends Rpc
{
}

/**
 * @method string getKeyType()
 * @method $this withKeyType($value)
 * @method string getTagName()
 * @method $this withTagName($value)
 * @method string getClientKey()
 * @method $this withClientKey($value)
 * @method string getAppKey()
 * @method $this withAppKey($value)
 */
class BindTag extends Rpc
{
}

/**
 * @method string getMessageId()
 * @method $this withMessageId($value)
 * @method string getAppKey()
 * @method $this withAppKey($value)
 */
class CancelPush extends Rpc
{
}

/**
 * @method string getAppKey()
 * @method $this withAppKey($value)
 */
class CheckCertificate extends Rpc
{
}

/**
 * @method string getDeviceId()
 * @method $this withDeviceId($value)
 * @method string getAppKey()
 * @method $this withAppKey($value)
 */
class CheckDevice extends Rpc
{
}

/**
 * @method string getDeviceIds()
 * @method $this withDeviceIds($value)
 * @method string getAppKey()
 * @method $this withAppKey($value)
 */
class CheckDevices extends Rpc
{
}

/**
 * @method string getMessageId()
 * @method $this withMessageId($value)
 * @method string getAppKey()
 * @method $this withAppKey($value)
 */
class CompleteContinuouslyPush extends Rpc
{
}

/**
 * @method string getMessageId()
 * @method $this withMessageId($value)
 * @method string getTarget()
 * @method $this withTarget($value)
 * @method string getAppKey()
 * @method $this withAppKey($value)
 * @method string getTargetValue()
 * @method $this withTargetValue($value)
 */
class ContinuouslyPush extends Rpc
{
}

class ListSummaryApps extends Rpc
{
}

/**
 * @method string getAppKey()
 * @method $this withAppKey($value)
 */
class ListTags extends Rpc
{
}

/**
 * @method array getPushTask()
 * @method string getAppKey()
 * @method $this withAppKey($value)
 */
class MassPush extends Rpc
{

    /**
     * @param array $pushTask
     *
     * @return $this
     */
	public function withPushTask(array $pushTask)
	{
	    $this->data['PushTask'] = $pushTask;
		foreach ($pushTask as $depth1 => $depth1Value) {
			if(isset($depth1Value['AndroidNotificationBarType'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.AndroidNotificationBarType'] = $depth1Value['AndroidNotificationBarType'];
			}
			if(isset($depth1Value['Body'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.Body'] = $depth1Value['Body'];
			}
			if(isset($depth1Value['DeviceType'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.DeviceType'] = $depth1Value['DeviceType'];
			}
			if(isset($depth1Value['PushTime'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.PushTime'] = $depth1Value['PushTime'];
			}
			if(isset($depth1Value['SendSpeed'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.SendSpeed'] = $depth1Value['SendSpeed'];
			}
			if(isset($depth1Value['AndroidNotificationHuaweiChannel'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.AndroidNotificationHuaweiChannel'] = $depth1Value['AndroidNotificationHuaweiChannel'];
			}
			if(isset($depth1Value['AndroidPopupActivity'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.AndroidPopupActivity'] = $depth1Value['AndroidPopupActivity'];
			}
			if(isset($depth1Value['HarmonyNotifyId'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.HarmonyNotifyId'] = $depth1Value['HarmonyNotifyId'];
			}
			if(isset($depth1Value['HarmonyRenderStyle'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.HarmonyRenderStyle'] = $depth1Value['HarmonyRenderStyle'];
			}
			if(isset($depth1Value['IOSRemindBody'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.iOSRemindBody'] = $depth1Value['IOSRemindBody'];
			}
			if(isset($depth1Value['Trim'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.Trim'] = $depth1Value['Trim'];
			}
			if(isset($depth1Value['AndroidMessageVivoCategory'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.AndroidMessageVivoCategory'] = $depth1Value['AndroidMessageVivoCategory'];
			}
			if(isset($depth1Value['AndroidNotifyType'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.AndroidNotifyType'] = $depth1Value['AndroidNotifyType'];
			}
			if(isset($depth1Value['AndroidPopupTitle'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.AndroidPopupTitle'] = $depth1Value['AndroidPopupTitle'];
			}
			if(isset($depth1Value['AndroidMessageHuaweiCategory'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.AndroidMessageHuaweiCategory'] = $depth1Value['AndroidMessageHuaweiCategory'];
			}
			if(isset($depth1Value['IOSMusic'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.iOSMusic'] = $depth1Value['IOSMusic'];
			}
			if(isset($depth1Value['IOSApnsEnv'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.iOSApnsEnv'] = $depth1Value['IOSApnsEnv'];
			}
			if(isset($depth1Value['IOSMutableContent'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.iOSMutableContent'] = $depth1Value['IOSMutableContent'];
			}
			if(isset($depth1Value['AndroidNotificationBarPriority'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.AndroidNotificationBarPriority'] = $depth1Value['AndroidNotificationBarPriority'];
			}
			if(isset($depth1Value['ExpireTime'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.ExpireTime'] = $depth1Value['ExpireTime'];
			}
			if(isset($depth1Value['AndroidImageUrl'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.AndroidImageUrl'] = $depth1Value['AndroidImageUrl'];
			}
			if(isset($depth1Value['AndroidHonorTargetUserType'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.AndroidHonorTargetUserType'] = $depth1Value['AndroidHonorTargetUserType'];
			}
			if(isset($depth1Value['HarmonyRemindBody'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.HarmonyRemindBody'] = $depth1Value['HarmonyRemindBody'];
			}
			if(isset($depth1Value['AndroidNotificationVivoChannel'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.AndroidNotificationVivoChannel'] = $depth1Value['AndroidNotificationVivoChannel'];
			}
			if(isset($depth1Value['AndroidVivoReceiptId'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.AndroidVivoReceiptId'] = $depth1Value['AndroidVivoReceiptId'];
			}
			if(isset($depth1Value['IOSNotificationCategory'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.iOSNotificationCategory'] = $depth1Value['IOSNotificationCategory'];
			}
			if(isset($depth1Value['AndroidNotificationXiaomiChannel'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.AndroidNotificationXiaomiChannel'] = $depth1Value['AndroidNotificationXiaomiChannel'];
			}
			if(isset($depth1Value['HarmonyAction'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.HarmonyAction'] = $depth1Value['HarmonyAction'];
			}
			if(isset($depth1Value['StoreOffline'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.StoreOffline'] = $depth1Value['StoreOffline'];
			}
			if(isset($depth1Value['IOSRelevanceScore'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.iOSRelevanceScore'] = $depth1Value['IOSRelevanceScore'];
			}
			if(isset($depth1Value['AndroidVivoPushMode'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.AndroidVivoPushMode'] = $depth1Value['AndroidVivoPushMode'];
			}
			if(isset($depth1Value['AndroidInboxBody'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.AndroidInboxBody'] = $depth1Value['AndroidInboxBody'];
			}
			if(isset($depth1Value['JobKey'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.JobKey'] = $depth1Value['JobKey'];
			}
			if(isset($depth1Value['HarmonyReceiptId'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.HarmonyReceiptId'] = $depth1Value['HarmonyReceiptId'];
			}
			if(isset($depth1Value['AndroidOpenUrl'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.AndroidOpenUrl'] = $depth1Value['AndroidOpenUrl'];
			}
			if(isset($depth1Value['AndroidBadgeSetNum'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.AndroidBadgeSetNum'] = $depth1Value['AndroidBadgeSetNum'];
			}
			if(isset($depth1Value['AndroidXiaoMiNotifyBody'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.AndroidXiaoMiNotifyBody'] = $depth1Value['AndroidXiaoMiNotifyBody'];
			}
			if(isset($depth1Value['IOSSubtitle'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.iOSSubtitle'] = $depth1Value['IOSSubtitle'];
			}
			if(isset($depth1Value['AndroidXiaomiBigPictureUrl'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.AndroidXiaomiBigPictureUrl'] = $depth1Value['AndroidXiaomiBigPictureUrl'];
			}
			if(isset($depth1Value['HarmonyCategory'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.HarmonyCategory'] = $depth1Value['HarmonyCategory'];
			}
			if(isset($depth1Value['IOSRemind'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.iOSRemind'] = $depth1Value['IOSRemind'];
			}
			if(isset($depth1Value['IOSNotificationThreadId'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.iOSNotificationThreadId'] = $depth1Value['IOSNotificationThreadId'];
			}
			if(isset($depth1Value['AndroidHuaweiTargetUserType'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.AndroidHuaweiTargetUserType'] = $depth1Value['AndroidHuaweiTargetUserType'];
			}
			if(isset($depth1Value['HarmonyRemind'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.HarmonyRemind'] = $depth1Value['HarmonyRemind'];
			}
			if(isset($depth1Value['AndroidMusic'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.AndroidMusic'] = $depth1Value['AndroidMusic'];
			}
			if(isset($depth1Value['HarmonyExtensionPush'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.HarmonyExtensionPush'] = $depth1Value['HarmonyExtensionPush'];
			}
			if(isset($depth1Value['IOSNotificationCollapseId'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.iOSNotificationCollapseId'] = $depth1Value['IOSNotificationCollapseId'];
			}
			if(isset($depth1Value['AndroidMessageHuaweiUrgency'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.AndroidMessageHuaweiUrgency'] = $depth1Value['AndroidMessageHuaweiUrgency'];
			}
			if(isset($depth1Value['PushType'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.PushType'] = $depth1Value['PushType'];
			}
			if(isset($depth1Value['IOSInterruptionLevel'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.iOSInterruptionLevel'] = $depth1Value['IOSInterruptionLevel'];
			}
			if(isset($depth1Value['HarmonyExtensionExtraData'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.HarmonyExtensionExtraData'] = $depth1Value['HarmonyExtensionExtraData'];
			}
			if(isset($depth1Value['AndroidExtParameters'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.AndroidExtParameters'] = $depth1Value['AndroidExtParameters'];
			}
			if(isset($depth1Value['HarmonyImageUrl'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.HarmonyImageUrl'] = $depth1Value['HarmonyImageUrl'];
			}
			if(isset($depth1Value['IOSBadge'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.iOSBadge'] = $depth1Value['IOSBadge'];
			}
			if(isset($depth1Value['AndroidBigBody'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.AndroidBigBody'] = $depth1Value['AndroidBigBody'];
			}
			if(isset($depth1Value['IOSBadgeAutoIncrement'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.iOSBadgeAutoIncrement'] = $depth1Value['IOSBadgeAutoIncrement'];
			}
			if(isset($depth1Value['AndroidOpenType'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.AndroidOpenType'] = $depth1Value['AndroidOpenType'];
			}
			if(isset($depth1Value['HarmonyRemindTitle'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.HarmonyRemindTitle'] = $depth1Value['HarmonyRemindTitle'];
			}
			if(isset($depth1Value['Title'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.Title'] = $depth1Value['Title'];
			}
			if(isset($depth1Value['AndroidBadgeClass'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.AndroidBadgeClass'] = $depth1Value['AndroidBadgeClass'];
			}
			if(isset($depth1Value['HarmonyBadgeAddNum'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.HarmonyBadgeAddNum'] = $depth1Value['HarmonyBadgeAddNum'];
			}
			if(isset($depth1Value['HarmonyTestMessage'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.HarmonyTestMessage'] = $depth1Value['HarmonyTestMessage'];
			}
			if(isset($depth1Value['AndroidRenderStyle'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.AndroidRenderStyle'] = $depth1Value['AndroidRenderStyle'];
			}
			if(isset($depth1Value['IOSExtParameters'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.iOSExtParameters'] = $depth1Value['IOSExtParameters'];
			}
			if(isset($depth1Value['AndroidBadgeAddNum'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.AndroidBadgeAddNum'] = $depth1Value['AndroidBadgeAddNum'];
			}
			if(isset($depth1Value['AndroidHuaweiReceiptId'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.AndroidHuaweiReceiptId'] = $depth1Value['AndroidHuaweiReceiptId'];
			}
			if(isset($depth1Value['AndroidNotificationHonorChannel'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.AndroidNotificationHonorChannel'] = $depth1Value['AndroidNotificationHonorChannel'];
			}
			if(isset($depth1Value['AndroidXiaomiImageUrl'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.AndroidXiaomiImageUrl'] = $depth1Value['AndroidXiaomiImageUrl'];
			}
			if(isset($depth1Value['AndroidTargetUserType'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.AndroidTargetUserType'] = $depth1Value['AndroidTargetUserType'];
			}
			if(isset($depth1Value['HarmonyUri'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.HarmonyUri'] = $depth1Value['HarmonyUri'];
			}
			if(isset($depth1Value['AndroidPopupBody'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.AndroidPopupBody'] = $depth1Value['AndroidPopupBody'];
			}
			if(isset($depth1Value['HarmonyExtParameters'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.HarmonyExtParameters'] = $depth1Value['HarmonyExtParameters'];
			}
			if(isset($depth1Value['AndroidBigPictureUrl'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.AndroidBigPictureUrl'] = $depth1Value['AndroidBigPictureUrl'];
			}
			if(isset($depth1Value['IOSSilentNotification'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.iOSSilentNotification'] = $depth1Value['IOSSilentNotification'];
			}
			if(isset($depth1Value['AndroidNotificationGroup'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.AndroidNotificationGroup'] = $depth1Value['AndroidNotificationGroup'];
			}
			if(isset($depth1Value['SendChannels'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.SendChannels'] = $depth1Value['SendChannels'];
			}
			if(isset($depth1Value['HarmonyActionType'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.HarmonyActionType'] = $depth1Value['HarmonyActionType'];
			}
			if(isset($depth1Value['Target'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.Target'] = $depth1Value['Target'];
			}
			if(isset($depth1Value['HarmonyNotificationSlotType'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.HarmonyNotificationSlotType'] = $depth1Value['HarmonyNotificationSlotType'];
			}
			if(isset($depth1Value['AndroidBigTitle'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.AndroidBigTitle'] = $depth1Value['AndroidBigTitle'];
			}
			if(isset($depth1Value['AndroidNotificationChannel'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.AndroidNotificationChannel'] = $depth1Value['AndroidNotificationChannel'];
			}
			if(isset($depth1Value['AndroidRemind'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.AndroidRemind'] = $depth1Value['AndroidRemind'];
			}
			if(isset($depth1Value['HarmonyInboxContent'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.HarmonyInboxContent'] = $depth1Value['HarmonyInboxContent'];
			}
			if(isset($depth1Value['AndroidActivity'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.AndroidActivity'] = $depth1Value['AndroidActivity'];
			}
			if(isset($depth1Value['AndroidNotificationNotifyId'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.AndroidNotificationNotifyId'] = $depth1Value['AndroidNotificationNotifyId'];
			}
			if(isset($depth1Value['TargetValue'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.TargetValue'] = $depth1Value['TargetValue'];
			}
			if(isset($depth1Value['HarmonyBadgeSetNum'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.HarmonyBadgeSetNum'] = $depth1Value['HarmonyBadgeSetNum'];
			}
			if(isset($depth1Value['AndroidXiaoMiNotifyTitle'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.AndroidXiaoMiNotifyTitle'] = $depth1Value['AndroidXiaoMiNotifyTitle'];
			}
			if(isset($depth1Value['AndroidXiaoMiActivity'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.AndroidXiaoMiActivity'] = $depth1Value['AndroidXiaoMiActivity'];
			}
		}

		return $this;
    }
}

/**
 * @method string getAndroidNotificationBarType()
 * @method $this withAndroidNotificationBarType($value)
 * @method string getDeviceType()
 * @method $this withDeviceType($value)
 * @method string getPushTime()
 * @method $this withPushTime($value)
 * @method string getSendSpeed()
 * @method $this withSendSpeed($value)
 * @method string getIOSRemindBody()
 * @method string getTrim()
 * @method $this withTrim($value)
 * @method string getAndroidPopupTitle()
 * @method $this withAndroidPopupTitle($value)
 * @method string getIOSApnsEnv()
 * @method string getAndroidNotificationBarPriority()
 * @method $this withAndroidNotificationBarPriority($value)
 * @method string getExpireTime()
 * @method $this withExpireTime($value)
 * @method string getAndroidImageUrl()
 * @method $this withAndroidImageUrl($value)
 * @method string getAndroidVivoReceiptId()
 * @method $this withAndroidVivoReceiptId($value)
 * @method string getIOSNotificationCategory()
 * @method string getAndroidXiaomiBigPictureUrl()
 * @method $this withAndroidXiaomiBigPictureUrl($value)
 * @method string getHarmonyCategory()
 * @method $this withHarmonyCategory($value)
 * @method string getIOSRemind()
 * @method string getIOSNotificationThreadId()
 * @method string getAndroidHuaweiTargetUserType()
 * @method $this withAndroidHuaweiTargetUserType($value)
 * @method string getAndroidMessageHuaweiUrgency()
 * @method $this withAndroidMessageHuaweiUrgency($value)
 * @method string getIOSInterruptionLevel()
 * @method string getAndroidExtParameters()
 * @method $this withAndroidExtParameters($value)
 * @method string getIOSBadge()
 * @method string getIOSBadgeAutoIncrement()
 * @method string getAndroidOpenType()
 * @method $this withAndroidOpenType($value)
 * @method string getHarmonyRemindTitle()
 * @method $this withHarmonyRemindTitle($value)
 * @method string getAndroidBadgeClass()
 * @method $this withAndroidBadgeClass($value)
 * @method string getSmsDelaySecs()
 * @method $this withSmsDelaySecs($value)
 * @method string getAndroidRenderStyle()
 * @method $this withAndroidRenderStyle($value)
 * @method string getIOSExtParameters()
 * @method string getAndroidXiaomiImageUrl()
 * @method $this withAndroidXiaomiImageUrl($value)
 * @method string getSmsTemplateName()
 * @method $this withSmsTemplateName($value)
 * @method string getHarmonyUri()
 * @method $this withHarmonyUri($value)
 * @method string getHarmonyExtParameters()
 * @method $this withHarmonyExtParameters($value)
 * @method string getAndroidBigPictureUrl()
 * @method $this withAndroidBigPictureUrl($value)
 * @method string getIOSSilentNotification()
 * @method string getHarmonyNotificationSlotType()
 * @method $this withHarmonyNotificationSlotType($value)
 * @method string getAndroidBigTitle()
 * @method $this withAndroidBigTitle($value)
 * @method string getAndroidNotificationChannel()
 * @method $this withAndroidNotificationChannel($value)
 * @method string getAndroidRemind()
 * @method $this withAndroidRemind($value)
 * @method string getAndroidActivity()
 * @method $this withAndroidActivity($value)
 * @method string getSmsSignName()
 * @method $this withSmsSignName($value)
 * @method string getAndroidNotificationNotifyId()
 * @method $this withAndroidNotificationNotifyId($value)
 * @method string getAppKey()
 * @method $this withAppKey($value)
 * @method string getTargetValue()
 * @method $this withTargetValue($value)
 * @method string getHarmonyBadgeSetNum()
 * @method $this withHarmonyBadgeSetNum($value)
 * @method string getAndroidXiaoMiNotifyTitle()
 * @method $this withAndroidXiaoMiNotifyTitle($value)
 * @method string getSmsSendPolicy()
 * @method $this withSmsSendPolicy($value)
 * @method string getBody()
 * @method $this withBody($value)
 * @method string getAndroidNotificationHuaweiChannel()
 * @method $this withAndroidNotificationHuaweiChannel($value)
 * @method string getAndroidPopupActivity()
 * @method $this withAndroidPopupActivity($value)
 * @method string getHarmonyNotifyId()
 * @method $this withHarmonyNotifyId($value)
 * @method string getHarmonyRenderStyle()
 * @method $this withHarmonyRenderStyle($value)
 * @method string getAndroidMessageVivoCategory()
 * @method $this withAndroidMessageVivoCategory($value)
 * @method string getAndroidNotifyType()
 * @method $this withAndroidNotifyType($value)
 * @method string getAndroidMessageHuaweiCategory()
 * @method $this withAndroidMessageHuaweiCategory($value)
 * @method string getIOSMusic()
 * @method string getIOSMutableContent()
 * @method string getAndroidHonorTargetUserType()
 * @method $this withAndroidHonorTargetUserType($value)
 * @method string getHarmonyRemindBody()
 * @method $this withHarmonyRemindBody($value)
 * @method string getAndroidNotificationVivoChannel()
 * @method $this withAndroidNotificationVivoChannel($value)
 * @method string getAndroidNotificationXiaomiChannel()
 * @method $this withAndroidNotificationXiaomiChannel($value)
 * @method string getHarmonyAction()
 * @method $this withHarmonyAction($value)
 * @method string getStoreOffline()
 * @method $this withStoreOffline($value)
 * @method string getIOSRelevanceScore()
 * @method string getSmsParams()
 * @method $this withSmsParams($value)
 * @method string getAndroidVivoPushMode()
 * @method $this withAndroidVivoPushMode($value)
 * @method string getAndroidInboxBody()
 * @method $this withAndroidInboxBody($value)
 * @method string getJobKey()
 * @method $this withJobKey($value)
 * @method string getHarmonyReceiptId()
 * @method $this withHarmonyReceiptId($value)
 * @method string getAndroidOpenUrl()
 * @method $this withAndroidOpenUrl($value)
 * @method string getAndroidBadgeSetNum()
 * @method $this withAndroidBadgeSetNum($value)
 * @method string getAndroidXiaoMiNotifyBody()
 * @method $this withAndroidXiaoMiNotifyBody($value)
 * @method string getIOSSubtitle()
 * @method string getHarmonyRemind()
 * @method $this withHarmonyRemind($value)
 * @method string getAndroidMusic()
 * @method $this withAndroidMusic($value)
 * @method string getHarmonyExtensionPush()
 * @method $this withHarmonyExtensionPush($value)
 * @method string getIOSNotificationCollapseId()
 * @method string getPushType()
 * @method $this withPushType($value)
 * @method string getHarmonyExtensionExtraData()
 * @method $this withHarmonyExtensionExtraData($value)
 * @method string getHarmonyImageUrl()
 * @method $this withHarmonyImageUrl($value)
 * @method string getAndroidBigBody()
 * @method $this withAndroidBigBody($value)
 * @method string getTitle()
 * @method $this withTitle($value)
 * @method string getHarmonyBadgeAddNum()
 * @method $this withHarmonyBadgeAddNum($value)
 * @method string getHarmonyTestMessage()
 * @method $this withHarmonyTestMessage($value)
 * @method string getAndroidBadgeAddNum()
 * @method $this withAndroidBadgeAddNum($value)
 * @method string getAndroidHuaweiReceiptId()
 * @method $this withAndroidHuaweiReceiptId($value)
 * @method string getAndroidNotificationHonorChannel()
 * @method $this withAndroidNotificationHonorChannel($value)
 * @method string getAndroidTargetUserType()
 * @method $this withAndroidTargetUserType($value)
 * @method string getAndroidPopupBody()
 * @method $this withAndroidPopupBody($value)
 * @method string getAndroidNotificationGroup()
 * @method $this withAndroidNotificationGroup($value)
 * @method string getSendChannels()
 * @method $this withSendChannels($value)
 * @method string getHarmonyActionType()
 * @method $this withHarmonyActionType($value)
 * @method string getTarget()
 * @method $this withTarget($value)
 * @method string getHarmonyInboxContent()
 * @method $this withHarmonyInboxContent($value)
 * @method string getAndroidXiaoMiActivity()
 * @method $this withAndroidXiaoMiActivity($value)
 */
class Push extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIOSRemindBody($value)
    {
        $this->data['IOSRemindBody'] = $value;
        $this->options['query']['iOSRemindBody'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIOSApnsEnv($value)
    {
        $this->data['IOSApnsEnv'] = $value;
        $this->options['query']['iOSApnsEnv'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIOSNotificationCategory($value)
    {
        $this->data['IOSNotificationCategory'] = $value;
        $this->options['query']['iOSNotificationCategory'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIOSRemind($value)
    {
        $this->data['IOSRemind'] = $value;
        $this->options['query']['iOSRemind'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIOSNotificationThreadId($value)
    {
        $this->data['IOSNotificationThreadId'] = $value;
        $this->options['query']['iOSNotificationThreadId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIOSInterruptionLevel($value)
    {
        $this->data['IOSInterruptionLevel'] = $value;
        $this->options['query']['iOSInterruptionLevel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIOSBadge($value)
    {
        $this->data['IOSBadge'] = $value;
        $this->options['query']['iOSBadge'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIOSBadgeAutoIncrement($value)
    {
        $this->data['IOSBadgeAutoIncrement'] = $value;
        $this->options['query']['iOSBadgeAutoIncrement'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIOSExtParameters($value)
    {
        $this->data['IOSExtParameters'] = $value;
        $this->options['query']['iOSExtParameters'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIOSSilentNotification($value)
    {
        $this->data['IOSSilentNotification'] = $value;
        $this->options['query']['iOSSilentNotification'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIOSMusic($value)
    {
        $this->data['IOSMusic'] = $value;
        $this->options['query']['iOSMusic'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIOSMutableContent($value)
    {
        $this->data['IOSMutableContent'] = $value;
        $this->options['query']['iOSMutableContent'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIOSRelevanceScore($value)
    {
        $this->data['IOSRelevanceScore'] = $value;
        $this->options['query']['iOSRelevanceScore'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIOSSubtitle($value)
    {
        $this->data['IOSSubtitle'] = $value;
        $this->options['query']['iOSSubtitle'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIOSNotificationCollapseId($value)
    {
        $this->data['IOSNotificationCollapseId'] = $value;
        $this->options['query']['iOSNotificationCollapseId'] = $value;

        return $this;
    }
}

/**
 * @method string getTitle()
 * @method $this withTitle($value)
 * @method string getBody()
 * @method $this withBody($value)
 * @method string getStoreOffline()
 * @method $this withStoreOffline($value)
 * @method string getJobKey()
 * @method $this withJobKey($value)
 * @method string getTarget()
 * @method $this withTarget($value)
 * @method string getAppKey()
 * @method $this withAppKey($value)
 * @method string getTargetValue()
 * @method $this withTargetValue($value)
 */
class PushMessageToAndroid extends Rpc
{
}

/**
 * @method string getTitle()
 * @method $this withTitle($value)
 * @method string getBody()
 * @method $this withBody($value)
 * @method string getStoreOffline()
 * @method $this withStoreOffline($value)
 * @method string getJobKey()
 * @method $this withJobKey($value)
 * @method string getTarget()
 * @method $this withTarget($value)
 * @method string getAppKey()
 * @method $this withAppKey($value)
 * @method string getTargetValue()
 * @method $this withTargetValue($value)
 */
class PushMessageToiOS extends Rpc
{
}

/**
 * @method string getTitle()
 * @method $this withTitle($value)
 * @method string getBody()
 * @method $this withBody($value)
 * @method string getExtParameters()
 * @method $this withExtParameters($value)
 * @method string getStoreOffline()
 * @method $this withStoreOffline($value)
 * @method string getJobKey()
 * @method $this withJobKey($value)
 * @method string getTarget()
 * @method $this withTarget($value)
 * @method string getAppKey()
 * @method $this withAppKey($value)
 * @method string getTargetValue()
 * @method $this withTargetValue($value)
 */
class PushNoticeToAndroid extends Rpc
{
}

/**
 * @method string getTitle()
 * @method $this withTitle($value)
 * @method string getBody()
 * @method $this withBody($value)
 * @method string getExtParameters()
 * @method $this withExtParameters($value)
 * @method string getApnsEnv()
 * @method $this withApnsEnv($value)
 * @method string getJobKey()
 * @method $this withJobKey($value)
 * @method string getTarget()
 * @method $this withTarget($value)
 * @method string getAppKey()
 * @method $this withAppKey($value)
 * @method string getTargetValue()
 * @method $this withTargetValue($value)
 */
class PushNoticeToiOS extends Rpc
{
}

/**
 * @method string getDeviceId()
 * @method $this withDeviceId($value)
 * @method string getAppKey()
 * @method $this withAppKey($value)
 */
class QueryAliases extends Rpc
{
}

/**
 * @method string getDeviceId()
 * @method $this withDeviceId($value)
 * @method string getAppKey()
 * @method $this withAppKey($value)
 */
class QueryDeviceInfo extends Rpc
{
}

/**
 * @method string getAppKey()
 * @method $this withAppKey($value)
 * @method string getAccount()
 * @method $this withAccount($value)
 */
class QueryDevicesByAccount extends Rpc
{
}

/**
 * @method string getAlias()
 * @method $this withAlias($value)
 * @method string getAppKey()
 * @method $this withAppKey($value)
 */
class QueryDevicesByAlias extends Rpc
{
}

/**
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getDeviceType()
 * @method $this withDeviceType($value)
 * @method string getAppKey()
 * @method $this withAppKey($value)
 * @method string getQueryType()
 * @method $this withQueryType($value)
 */
class QueryDeviceStat extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getSource()
 * @method $this withSource($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getTarget()
 * @method $this withTarget($value)
 * @method string getAppKey()
 * @method $this withAppKey($value)
 * @method string getPage()
 * @method $this withPage($value)
 * @method string getPushType()
 * @method $this withPushType($value)
 */
class QueryPushRecords extends Rpc
{
}

/**
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getGranularity()
 * @method $this withGranularity($value)
 * @method string getAppKey()
 * @method $this withAppKey($value)
 */
class QueryPushStatByApp extends Rpc
{
}

/**
 * @method string getMessageId()
 * @method $this withMessageId($value)
 * @method string getAppKey()
 * @method $this withAppKey($value)
 */
class QueryPushStatByMsg extends Rpc
{
}

/**
 * @method string getKeyType()
 * @method $this withKeyType($value)
 * @method string getClientKey()
 * @method $this withClientKey($value)
 * @method string getAppKey()
 * @method $this withAppKey($value)
 */
class QueryTags extends Rpc
{
}

/**
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getGranularity()
 * @method $this withGranularity($value)
 * @method string getAppKey()
 * @method $this withAppKey($value)
 */
class QueryUniqueDeviceStat extends Rpc
{
}

/**
 * @method string getTagName()
 * @method $this withTagName($value)
 * @method string getAppKey()
 * @method $this withAppKey($value)
 */
class RemoveTag extends Rpc
{
}

/**
 * @method string getDeviceId()
 * @method $this withDeviceId($value)
 * @method string getAliasName()
 * @method $this withAliasName($value)
 * @method string getAppKey()
 * @method $this withAppKey($value)
 * @method string getUnbindAll()
 * @method $this withUnbindAll($value)
 */
class UnbindAlias extends Rpc
{
}

/**
 * @method string getDeviceId()
 * @method $this withDeviceId($value)
 * @method string getAppKey()
 * @method $this withAppKey($value)
 */
class UnbindPhone extends Rpc
{
}

/**
 * @method string getKeyType()
 * @method $this withKeyType($value)
 * @method string getTagName()
 * @method $this withTagName($value)
 * @method string getClientKey()
 * @method $this withClientKey($value)
 * @method string getAppKey()
 * @method $this withAppKey($value)
 */
class UnbindTag extends Rpc
{
}
