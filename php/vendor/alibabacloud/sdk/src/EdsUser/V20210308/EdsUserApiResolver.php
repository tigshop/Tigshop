<?php

namespace AlibabaCloud\EdsUser\V20210308;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method BatchSetDesktopManager batchSetDesktopManager(array $options = [])
 * @method ChangeUserPassword changeUserPassword(array $options = [])
 * @method CheckUsedProperty checkUsedProperty(array $options = [])
 * @method CheckUsedPropertyValue checkUsedPropertyValue(array $options = [])
 * @method CreateGroup createGroup(array $options = [])
 * @method CreateOrg createOrg(array $options = [])
 * @method CreateProperty createProperty(array $options = [])
 * @method CreateResourceGroup createResourceGroup(array $options = [])
 * @method CreateUsers createUsers(array $options = [])
 * @method DeleteResourceGroup deleteResourceGroup(array $options = [])
 * @method DeleteUserPropertyValue deleteUserPropertyValue(array $options = [])
 * @method DescribeGroups describeGroups(array $options = [])
 * @method DescribeGroupUser describeGroupUser(array $options = [])
 * @method DescribeMfaDevices describeMfaDevices(array $options = [])
 * @method DescribeOrgByLayer describeOrgByLayer(array $options = [])
 * @method DescribeOrgs describeOrgs(array $options = [])
 * @method DescribeResourceGroups describeResourceGroups(array $options = [])
 * @method DescribeUsers describeUsers(array $options = [])
 * @method FilterUsers filterUsers(array $options = [])
 * @method GetManagerInfoByAuthCode getManagerInfoByAuthCode(array $options = [])
 * @method InitTenantAlias initTenantAlias(array $options = [])
 * @method ListProperty listProperty(array $options = [])
 * @method ListPropertyValue listPropertyValue(array $options = [])
 * @method LockMfaDevice lockMfaDevice(array $options = [])
 * @method LockUsers lockUsers(array $options = [])
 * @method ModifyGroup modifyGroup(array $options = [])
 * @method ModifyOrg modifyOrg(array $options = [])
 * @method ModifyUser modifyUser(array $options = [])
 * @method MoveOrg moveOrg(array $options = [])
 * @method MoveUserOrg moveUserOrg(array $options = [])
 * @method QuerySyncStatusByAliUid querySyncStatusByAliUid(array $options = [])
 * @method RemoveGroup removeGroup(array $options = [])
 * @method RemoveMfaDevice removeMfaDevice(array $options = [])
 * @method RemoveOrg removeOrg(array $options = [])
 * @method RemoveProperty removeProperty(array $options = [])
 * @method RemoveUsers removeUsers(array $options = [])
 * @method ResetUserPassword resetUserPassword(array $options = [])
 * @method SetUserPropertyValue setUserPropertyValue(array $options = [])
 * @method SyncAllEduInfo syncAllEduInfo(array $options = [])
 * @method UnlockMfaDevice unlockMfaDevice(array $options = [])
 * @method UnlockUsers unlockUsers(array $options = [])
 * @method UpdateProperty updateProperty(array $options = [])
 * @method UserBatchJoinGroup userBatchJoinGroup(array $options = [])
 * @method UserBatchQuitGroup userBatchQuitGroup(array $options = [])
 */
class EdsUserApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'eds-user';

    /** @var string */
    public $version = '2021-03-08';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'eds-user';
}

/**
 * @method string getIsDesktopManager()
 * @method array getUsers()
 */
class BatchSetDesktopManager extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIsDesktopManager($value)
    {
        $this->data['IsDesktopManager'] = $value;
        $this->options['form_params']['IsDesktopManager'] = $value;

        return $this;
    }

    /**
     * @param array $users
     *
     * @return $this
     */
	public function withUsers(array $users)
	{
	    $this->data['Users'] = $users;
		foreach ($users as $i => $iValue) {
			$this->options['form_params']['Users.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getNewPassword()
 * @method string getEndUserId()
 * @method string getNotifyType()
 */
class ChangeUserPassword extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNewPassword($value)
    {
        $this->data['NewPassword'] = $value;
        $this->options['form_params']['NewPassword'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEndUserId($value)
    {
        $this->data['EndUserId'] = $value;
        $this->options['form_params']['EndUserId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNotifyType($value)
    {
        $this->data['NotifyType'] = $value;
        $this->options['form_params']['NotifyType'] = $value;

        return $this;
    }
}

/**
 * @method string getPropertyId()
 * @method $this withPropertyId($value)
 */
class CheckUsedProperty extends Rpc
{
}

/**
 * @method string getPropertyValueId()
 * @method $this withPropertyValueId($value)
 * @method string getPropertyId()
 * @method $this withPropertyId($value)
 */
class CheckUsedPropertyValue extends Rpc
{
}

/**
 * @method string getGroupName()
 * @method $this withGroupName($value)
 * @method string getBizType()
 * @method $this withBizType($value)
 * @method string getParentGroupId()
 * @method $this withParentGroupId($value)
 * @method string getSolutionId()
 * @method $this withSolutionId($value)
 */
class CreateGroup extends Rpc
{
}

/**
 * @method string getIcon()
 * @method $this withIcon($value)
 * @method string getOrgName()
 * @method $this withOrgName($value)
 * @method string getParentOrgId()
 * @method $this withParentOrgId($value)
 */
class CreateOrg extends Rpc
{
}

/**
 * @method string getPropertyKey()
 * @method array getPropertyValues()
 */
class CreateProperty extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPropertyKey($value)
    {
        $this->data['PropertyKey'] = $value;
        $this->options['form_params']['PropertyKey'] = $value;

        return $this;
    }

    /**
     * @param array $propertyValues
     *
     * @return $this
     */
	public function withPropertyValues(array $propertyValues)
	{
	    $this->data['PropertyValues'] = $propertyValues;
		foreach ($propertyValues as $i => $iValue) {
			$this->options['form_params']['PropertyValues.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceGroupName()
 * @method $this withResourceGroupName($value)
 * @method string getPlatform()
 * @method $this withPlatform($value)
 * @method string getIsResourceGroupWithOfficeSite()
 * @method $this withIsResourceGroupWithOfficeSite($value)
 */
class CreateResourceGroup extends Rpc
{
}

/**
 * @method string getAutoLockTime()
 * @method $this withAutoLockTime($value)
 * @method string getIsLocalAdmin()
 * @method $this withIsLocalAdmin($value)
 * @method array getUsers()
 * @method string getPassword()
 * @method string getPasswordExpireDays()
 * @method $this withPasswordExpireDays($value)
 */
class CreateUsers extends Rpc
{

    /**
     * @param array $users
     *
     * @return $this
     */
	public function withUsers(array $users)
	{
	    $this->data['Users'] = $users;
		foreach ($users as $depth1 => $depth1Value) {
			if(isset($depth1Value['Password'])){
				$this->options['form_params']['Users.' . ($depth1 + 1) . '.Password'] = $depth1Value['Password'];
			}
			if(isset($depth1Value['RealNickName'])){
				$this->options['form_params']['Users.' . ($depth1 + 1) . '.RealNickName'] = $depth1Value['RealNickName'];
			}
			if(isset($depth1Value['Phone'])){
				$this->options['form_params']['Users.' . ($depth1 + 1) . '.Phone'] = $depth1Value['Phone'];
			}
			if(isset($depth1Value['OwnerType'])){
				$this->options['form_params']['Users.' . ($depth1 + 1) . '.OwnerType'] = $depth1Value['OwnerType'];
			}
			if(isset($depth1Value['EndUserId'])){
				$this->options['form_params']['Users.' . ($depth1 + 1) . '.EndUserId'] = $depth1Value['EndUserId'];
			}
			if(isset($depth1Value['Remark'])){
				$this->options['form_params']['Users.' . ($depth1 + 1) . '.Remark'] = $depth1Value['Remark'];
			}
			if(isset($depth1Value['Email'])){
				$this->options['form_params']['Users.' . ($depth1 + 1) . '.Email'] = $depth1Value['Email'];
			}
			if(isset($depth1Value['OrgId'])){
				$this->options['form_params']['Users.' . ($depth1 + 1) . '.OrgId'] = $depth1Value['OrgId'];
			}
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPassword($value)
    {
        $this->data['Password'] = $value;
        $this->options['form_params']['Password'] = $value;

        return $this;
    }
}

/**
 * @method string getPlatform()
 * @method $this withPlatform($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getResourceGroupIds()
 * @method $this withResourceGroupIds($value)
 */
class DeleteResourceGroup extends Rpc
{
}

/**
 * @method string getPropertyValueId()
 * @method string getUserId()
 * @method string getPropertyId()
 */
class DeleteUserPropertyValue extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPropertyValueId($value)
    {
        $this->data['PropertyValueId'] = $value;
        $this->options['form_params']['PropertyValueId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserId($value)
    {
        $this->data['UserId'] = $value;
        $this->options['form_params']['UserId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPropertyId($value)
    {
        $this->data['PropertyId'] = $value;
        $this->options['form_params']['PropertyId'] = $value;

        return $this;
    }
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 * @method string getBizType()
 * @method $this withBizType($value)
 * @method string getSolutionId()
 * @method $this withSolutionId($value)
 */
class DescribeGroups extends Rpc
{
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getBizType()
 * @method $this withBizType($value)
 * @method string getSolutionId()
 * @method $this withSolutionId($value)
 */
class DescribeGroupUser extends Rpc
{
}

/**
 * @method array getEndUserIds()
 * @method array getSerialNumbers()
 * @method string getAdDomain()
 * @method $this withAdDomain($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class DescribeMfaDevices extends Rpc
{

    /**
     * @param array $endUserIds
     *
     * @return $this
     */
	public function withEndUserIds(array $endUserIds)
	{
	    $this->data['EndUserIds'] = $endUserIds;
		foreach ($endUserIds as $i => $iValue) {
			$this->options['query']['EndUserIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $serialNumbers
     *
     * @return $this
     */
	public function withSerialNumbers(array $serialNumbers)
	{
	    $this->data['SerialNumbers'] = $serialNumbers;
		foreach ($serialNumbers as $i => $iValue) {
			$this->options['query']['SerialNumbers.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getOrgName()
 * @method string getParentOrgId()
 */
class DescribeOrgByLayer extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrgName($value)
    {
        $this->data['OrgName'] = $value;
        $this->options['form_params']['OrgName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withParentOrgId($value)
    {
        $this->data['ParentOrgId'] = $value;
        $this->options['form_params']['ParentOrgId'] = $value;

        return $this;
    }
}

/**
 * @method string getOrgName()
 * @method $this withOrgName($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getParentOrgId()
 * @method $this withParentOrgId($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class DescribeOrgs extends Rpc
{
}

/**
 * @method string getResourceGroupName()
 * @method $this withResourceGroupName($value)
 * @method string getNeedContainResourceGroupWithOfficeSite()
 * @method $this withNeedContainResourceGroupWithOfficeSite($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPlatform()
 * @method $this withPlatform($value)
 * @method string getResourceGroupIds()
 * @method $this withResourceGroupIds($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class DescribeResourceGroups extends Rpc
{
}

/**
 * @method string getIsQueryAllSubOrgs()
 * @method array getEndUserIds()
 * @method array getExcludeEndUserIds()
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getSolutionId()
 * @method string getFilterWithAssignedResources()
 * @method string getGroupId()
 * @method string getOrgId()
 * @method string getFilterWithAssignedResource()
 * @method $this withFilterWithAssignedResource($value)
 * @method string getFilter()
 * @method $this withFilter($value)
 * @method string getBizType()
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getShowExtras()
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeUsers extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIsQueryAllSubOrgs($value)
    {
        $this->data['IsQueryAllSubOrgs'] = $value;
        $this->options['form_params']['IsQueryAllSubOrgs'] = $value;

        return $this;
    }

    /**
     * @param array $endUserIds
     *
     * @return $this
     */
	public function withEndUserIds(array $endUserIds)
	{
	    $this->data['EndUserIds'] = $endUserIds;
		foreach ($endUserIds as $i => $iValue) {
			$this->options['form_params']['EndUserIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $excludeEndUserIds
     *
     * @return $this
     */
	public function withExcludeEndUserIds(array $excludeEndUserIds)
	{
	    $this->data['ExcludeEndUserIds'] = $excludeEndUserIds;
		foreach ($excludeEndUserIds as $i => $iValue) {
			$this->options['form_params']['ExcludeEndUserIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSolutionId($value)
    {
        $this->data['SolutionId'] = $value;
        $this->options['form_params']['SolutionId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFilterWithAssignedResources($value)
    {
        $this->data['FilterWithAssignedResources'] = $value;
        $this->options['form_params']['FilterWithAssignedResources'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupId($value)
    {
        $this->data['GroupId'] = $value;
        $this->options['form_params']['GroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrgId($value)
    {
        $this->data['OrgId'] = $value;
        $this->options['form_params']['OrgId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizType($value)
    {
        $this->data['BizType'] = $value;
        $this->options['form_params']['BizType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withShowExtras($value)
    {
        $this->data['ShowExtras'] = $value;
        $this->options['form_params']['ShowExtras'] = $value;

        return $this;
    }
}

/**
 * @method string getIsQueryAllSubOrgs()
 * @method $this withIsQueryAllSubOrgs($value)
 * @method string getOrderParam()
 * @method $this withOrderParam($value)
 * @method array getExcludeEndUserIds()
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getIncludeDesktopCount()
 * @method $this withIncludeDesktopCount($value)
 * @method string getIncludeSupportIdps()
 * @method $this withIncludeSupportIdps($value)
 * @method array getPropertyFilterParam()
 * @method string getIncludeOrgInfo()
 * @method $this withIncludeOrgInfo($value)
 * @method string getIncludeDesktopGroupCount()
 * @method $this withIncludeDesktopGroupCount($value)
 * @method string getOrgId()
 * @method $this withOrgId($value)
 * @method string getFilter()
 * @method $this withFilter($value)
 * @method array getPropertyKeyValueFilterParam()
 * @method string getOwnerType()
 * @method $this withOwnerType($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class FilterUsers extends Rpc
{

    /**
     * @param array $excludeEndUserIds
     *
     * @return $this
     */
	public function withExcludeEndUserIds(array $excludeEndUserIds)
	{
	    $this->data['ExcludeEndUserIds'] = $excludeEndUserIds;
		foreach ($excludeEndUserIds as $i => $iValue) {
			$this->options['query']['ExcludeEndUserIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $propertyFilterParam
     *
     * @return $this
     */
	public function withPropertyFilterParam(array $propertyFilterParam)
	{
	    $this->data['PropertyFilterParam'] = $propertyFilterParam;
		foreach ($propertyFilterParam as $depth1 => $depth1Value) {
			if(isset($depth1Value['PropertyId'])){
				$this->options['query']['PropertyFilterParam.' . ($depth1 + 1) . '.PropertyId'] = $depth1Value['PropertyId'];
			}
			if(isset($depth1Value['PropertyValueIds'])){
				$this->options['query']['PropertyFilterParam.' . ($depth1 + 1) . '.PropertyValueIds'] = $depth1Value['PropertyValueIds'];
			}
		}

		return $this;
    }

    /**
     * @param array $propertyKeyValueFilterParam
     *
     * @return $this
     */
	public function withPropertyKeyValueFilterParam(array $propertyKeyValueFilterParam)
	{
	    $this->data['PropertyKeyValueFilterParam'] = $propertyKeyValueFilterParam;
		foreach ($propertyKeyValueFilterParam as $depth1 => $depth1Value) {
			if(isset($depth1Value['PropertyKey'])){
				$this->options['query']['PropertyKeyValueFilterParam.' . ($depth1 + 1) . '.PropertyKey'] = $depth1Value['PropertyKey'];
			}
			if(isset($depth1Value['PropertyValues'])){
				$this->options['query']['PropertyKeyValueFilterParam.' . ($depth1 + 1) . '.PropertyValues'] = $depth1Value['PropertyValues'];
			}
		}

		return $this;
    }
}

/**
 * @method string getAuthCode()
 * @method $this withAuthCode($value)
 */
class GetManagerInfoByAuthCode extends Rpc
{
}

class InitTenantAlias extends Rpc
{
}

class ListProperty extends Rpc
{
}

/**
 * @method string getPropertyId()
 * @method $this withPropertyId($value)
 */
class ListPropertyValue extends Rpc
{
}

/**
 * @method string getSerialNumber()
 * @method $this withSerialNumber($value)
 * @method string getAdDomain()
 * @method $this withAdDomain($value)
 */
class LockMfaDevice extends Rpc
{
}

/**
 * @method string getLogoutSession()
 * @method $this withLogoutSession($value)
 * @method array getUsers()
 */
class LockUsers extends Rpc
{

    /**
     * @param array $users
     *
     * @return $this
     */
	public function withUsers(array $users)
	{
	    $this->data['Users'] = $users;
		foreach ($users as $i => $iValue) {
			$this->options['form_params']['Users.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getNewGroupName()
 * @method $this withNewGroupName($value)
 */
class ModifyGroup extends Rpc
{
}

/**
 * @method string getIcon()
 * @method $this withIcon($value)
 * @method string getOrgId()
 * @method $this withOrgId($value)
 * @method string getOrgName()
 * @method $this withOrgName($value)
 */
class ModifyOrg extends Rpc
{
}

/**
 * @method string getPhone()
 * @method $this withPhone($value)
 * @method string getEndUserId()
 * @method $this withEndUserId($value)
 * @method string getEmail()
 * @method $this withEmail($value)
 */
class ModifyUser extends Rpc
{
}

/**
 * @method string getNewParentOrgId()
 * @method string getOrgId()
 */
class MoveOrg extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNewParentOrgId($value)
    {
        $this->data['NewParentOrgId'] = $value;
        $this->options['form_params']['NewParentOrgId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrgId($value)
    {
        $this->data['OrgId'] = $value;
        $this->options['form_params']['OrgId'] = $value;

        return $this;
    }
}

/**
 * @method array getEndUserIds()
 * @method string getOrgId()
 */
class MoveUserOrg extends Rpc
{

    /**
     * @param array $endUserIds
     *
     * @return $this
     */
	public function withEndUserIds(array $endUserIds)
	{
	    $this->data['EndUserIds'] = $endUserIds;
		foreach ($endUserIds as $i => $iValue) {
			$this->options['form_params']['EndUserIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrgId($value)
    {
        $this->data['OrgId'] = $value;
        $this->options['form_params']['OrgId'] = $value;

        return $this;
    }
}

class QuerySyncStatusByAliUid extends Rpc
{
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 */
class RemoveGroup extends Rpc
{
}

/**
 * @method string getSerialNumber()
 * @method $this withSerialNumber($value)
 * @method string getAdDomain()
 * @method $this withAdDomain($value)
 */
class RemoveMfaDevice extends Rpc
{
}

/**
 * @method string getOrgId()
 */
class RemoveOrg extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrgId($value)
    {
        $this->data['OrgId'] = $value;
        $this->options['form_params']['OrgId'] = $value;

        return $this;
    }
}

/**
 * @method string getPropertyId()
 */
class RemoveProperty extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPropertyId($value)
    {
        $this->data['PropertyId'] = $value;
        $this->options['form_params']['PropertyId'] = $value;

        return $this;
    }
}

/**
 * @method array getUsers()
 */
class RemoveUsers extends Rpc
{

    /**
     * @param array $users
     *
     * @return $this
     */
	public function withUsers(array $users)
	{
	    $this->data['Users'] = $users;
		foreach ($users as $i => $iValue) {
			$this->options['form_params']['Users.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method array getUsers()
 * @method string getNotifyType()
 */
class ResetUserPassword extends Rpc
{

    /**
     * @param array $users
     *
     * @return $this
     */
	public function withUsers(array $users)
	{
	    $this->data['Users'] = $users;
		foreach ($users as $i => $iValue) {
			$this->options['form_params']['Users.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNotifyType($value)
    {
        $this->data['NotifyType'] = $value;
        $this->options['form_params']['NotifyType'] = $value;

        return $this;
    }
}

/**
 * @method string getPropertyValueId()
 * @method string getUserId()
 * @method string getPropertyId()
 * @method string getUserName()
 */
class SetUserPropertyValue extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPropertyValueId($value)
    {
        $this->data['PropertyValueId'] = $value;
        $this->options['form_params']['PropertyValueId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserId($value)
    {
        $this->data['UserId'] = $value;
        $this->options['form_params']['UserId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPropertyId($value)
    {
        $this->data['PropertyId'] = $value;
        $this->options['form_params']['PropertyId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserName($value)
    {
        $this->data['UserName'] = $value;
        $this->options['form_params']['UserName'] = $value;

        return $this;
    }
}

class SyncAllEduInfo extends Rpc
{
}

/**
 * @method string getSerialNumber()
 * @method $this withSerialNumber($value)
 * @method string getAdDomain()
 * @method $this withAdDomain($value)
 */
class UnlockMfaDevice extends Rpc
{
}

/**
 * @method string getAutoLockTime()
 * @method $this withAutoLockTime($value)
 * @method array getUsers()
 */
class UnlockUsers extends Rpc
{

    /**
     * @param array $users
     *
     * @return $this
     */
	public function withUsers(array $users)
	{
	    $this->data['Users'] = $users;
		foreach ($users as $i => $iValue) {
			$this->options['form_params']['Users.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getPropertyKey()
 * @method string getPropertyId()
 * @method array getPropertyValues()
 */
class UpdateProperty extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPropertyKey($value)
    {
        $this->data['PropertyKey'] = $value;
        $this->options['form_params']['PropertyKey'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPropertyId($value)
    {
        $this->data['PropertyId'] = $value;
        $this->options['form_params']['PropertyId'] = $value;

        return $this;
    }

    /**
     * @param array $propertyValues
     *
     * @return $this
     */
	public function withPropertyValues(array $propertyValues)
	{
	    $this->data['PropertyValues'] = $propertyValues;
		foreach ($propertyValues as $depth1 => $depth1Value) {
			if(isset($depth1Value['PropertyValueId'])){
				$this->options['form_params']['PropertyValues.' . ($depth1 + 1) . '.PropertyValueId'] = $depth1Value['PropertyValueId'];
			}
			if(isset($depth1Value['PropertyValue'])){
				$this->options['form_params']['PropertyValues.' . ($depth1 + 1) . '.PropertyValue'] = $depth1Value['PropertyValue'];
			}
		}

		return $this;
    }
}

/**
 * @method array getEndUserIds()
 * @method string getGroupId()
 */
class UserBatchJoinGroup extends Rpc
{

    /**
     * @param array $endUserIds
     *
     * @return $this
     */
	public function withEndUserIds(array $endUserIds)
	{
	    $this->data['EndUserIds'] = $endUserIds;
		foreach ($endUserIds as $i => $iValue) {
			$this->options['form_params']['EndUserIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupId($value)
    {
        $this->data['GroupId'] = $value;
        $this->options['form_params']['GroupId'] = $value;

        return $this;
    }
}

/**
 * @method array getEndUserIds()
 * @method string getGroupId()
 */
class UserBatchQuitGroup extends Rpc
{

    /**
     * @param array $endUserIds
     *
     * @return $this
     */
	public function withEndUserIds(array $endUserIds)
	{
	    $this->data['EndUserIds'] = $endUserIds;
		foreach ($endUserIds as $i => $iValue) {
			$this->options['form_params']['EndUserIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupId($value)
    {
        $this->data['GroupId'] = $value;
        $this->options['form_params']['GroupId'] = $value;

        return $this;
    }
}
