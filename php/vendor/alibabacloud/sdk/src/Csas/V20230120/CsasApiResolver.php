<?php

namespace AlibabaCloud\Csas\V20230120;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AttachApplication2Connector attachApplication2Connector(array $options = [])
 * @method AttachPolicy2ApprovalProcess attachPolicy2ApprovalProcess(array $options = [])
 * @method CreateApprovalProcess createApprovalProcess(array $options = [])
 * @method CreateClientUser createClientUser(array $options = [])
 * @method CreateDynamicRoute createDynamicRoute(array $options = [])
 * @method CreateIdpDepartment createIdpDepartment(array $options = [])
 * @method CreatePrivateAccessApplication createPrivateAccessApplication(array $options = [])
 * @method CreatePrivateAccessPolicy createPrivateAccessPolicy(array $options = [])
 * @method CreatePrivateAccessTag createPrivateAccessTag(array $options = [])
 * @method CreateRegistrationPolicy createRegistrationPolicy(array $options = [])
 * @method CreateUserGroup createUserGroup(array $options = [])
 * @method CreateWmBaseImage createWmBaseImage(array $options = [])
 * @method CreateWmEmbedTask createWmEmbedTask(array $options = [])
 * @method CreateWmExtractTask createWmExtractTask(array $options = [])
 * @method CreateWmInfoMapping createWmInfoMapping(array $options = [])
 * @method DeleteApprovalProcesses deleteApprovalProcesses(array $options = [])
 * @method DeleteClientUser deleteClientUser(array $options = [])
 * @method DeleteDynamicRoute deleteDynamicRoute(array $options = [])
 * @method DeleteIdpDepartment deleteIdpDepartment(array $options = [])
 * @method DeletePrivateAccessApplication deletePrivateAccessApplication(array $options = [])
 * @method DeletePrivateAccessPolicy deletePrivateAccessPolicy(array $options = [])
 * @method DeletePrivateAccessTag deletePrivateAccessTag(array $options = [])
 * @method DeleteRegistrationPolicies deleteRegistrationPolicies(array $options = [])
 * @method DeleteUserDevices deleteUserDevices(array $options = [])
 * @method DeleteUserGroup deleteUserGroup(array $options = [])
 * @method DetachApplication2Connector detachApplication2Connector(array $options = [])
 * @method DetachPolicy2ApprovalProcess detachPolicy2ApprovalProcess(array $options = [])
 * @method ExportUserDevices exportUserDevices(array $options = [])
 * @method GetActiveIdpConfig getActiveIdpConfig(array $options = [])
 * @method GetApproval getApproval(array $options = [])
 * @method GetApprovalProcess getApprovalProcess(array $options = [])
 * @method GetApprovalSchema getApprovalSchema(array $options = [])
 * @method GetBootAndAntiUninstallPolicy getBootAndAntiUninstallPolicy(array $options = [])
 * @method GetClientUser getClientUser(array $options = [])
 * @method GetDynamicRoute getDynamicRoute(array $options = [])
 * @method GetIdpConfig getIdpConfig(array $options = [])
 * @method GetPrivateAccessApplication getPrivateAccessApplication(array $options = [])
 * @method GetPrivateAccessPolicy getPrivateAccessPolicy(array $options = [])
 * @method GetRegistrationPolicy getRegistrationPolicy(array $options = [])
 * @method GetUserDevice getUserDevice(array $options = [])
 * @method GetUserGroup getUserGroup(array $options = [])
 * @method GetWmEmbedTask getWmEmbedTask(array $options = [])
 * @method GetWmExtractTask getWmExtractTask(array $options = [])
 * @method ListApplicationsForPrivateAccessPolicy listApplicationsForPrivateAccessPolicy(array $options = [])
 * @method ListApplicationsForPrivateAccessTag listApplicationsForPrivateAccessTag(array $options = [])
 * @method ListApprovalProcesses listApprovalProcesses(array $options = [])
 * @method ListApprovalProcessesForApprovalSchemas listApprovalProcessesForApprovalSchemas(array $options = [])
 * @method ListApprovals listApprovals(array $options = [])
 * @method ListApprovalSchemas listApprovalSchemas(array $options = [])
 * @method ListApprovalSchemasForApprovalProcesses listApprovalSchemasForApprovalProcesses(array $options = [])
 * @method ListClientUsers listClientUsers(array $options = [])
 * @method ListConnectors listConnectors(array $options = [])
 * @method ListDynamicRouteRegions listDynamicRouteRegions(array $options = [])
 * @method ListDynamicRoutes listDynamicRoutes(array $options = [])
 * @method ListExcessiveDeviceRegistrationApplications listExcessiveDeviceRegistrationApplications(array $options = [])
 * @method ListIdpConfigs listIdpConfigs(array $options = [])
 * @method ListIdpDepartments listIdpDepartments(array $options = [])
 * @method ListNacUserCert listNacUserCert(array $options = [])
 * @method ListPolicesForPrivateAccessApplication listPolicesForPrivateAccessApplication(array $options = [])
 * @method ListPolicesForPrivateAccessTag listPolicesForPrivateAccessTag(array $options = [])
 * @method ListPolicesForUserGroup listPolicesForUserGroup(array $options = [])
 * @method ListPopTrafficStatistics listPopTrafficStatistics(array $options = [])
 * @method ListPrivateAccessApplications listPrivateAccessApplications(array $options = [])
 * @method ListPrivateAccessApplicationsForDynamicRoute listPrivateAccessApplicationsForDynamicRoute(array $options = [])
 * @method ListPrivateAccessPolices listPrivateAccessPolices(array $options = [])
 * @method ListPrivateAccessTags listPrivateAccessTags(array $options = [])
 * @method ListPrivateAccessTagsForDynamicRoute listPrivateAccessTagsForDynamicRoute(array $options = [])
 * @method ListRegistrationPolicies listRegistrationPolicies(array $options = [])
 * @method ListRegistrationPoliciesForUserGroup listRegistrationPoliciesForUserGroup(array $options = [])
 * @method ListSoftwareForUserDevice listSoftwareForUserDevice(array $options = [])
 * @method ListTagsForPrivateAccessApplication listTagsForPrivateAccessApplication(array $options = [])
 * @method ListTagsForPrivateAccessPolicy listTagsForPrivateAccessPolicy(array $options = [])
 * @method ListUninstallApplications listUninstallApplications(array $options = [])
 * @method ListUserApplications listUserApplications(array $options = [])
 * @method ListUserDevices listUserDevices(array $options = [])
 * @method ListUserGroups listUserGroups(array $options = [])
 * @method ListUserGroupsForPrivateAccessPolicy listUserGroupsForPrivateAccessPolicy(array $options = [])
 * @method ListUserGroupsForRegistrationPolicy listUserGroupsForRegistrationPolicy(array $options = [])
 * @method ListUserPrivateAccessPolicies listUserPrivateAccessPolicies(array $options = [])
 * @method ListUsers listUsers(array $options = [])
 * @method LookupWmInfoMapping lookupWmInfoMapping(array $options = [])
 * @method RevokeUserSession revokeUserSession(array $options = [])
 * @method UpdateApprovalProcess updateApprovalProcess(array $options = [])
 * @method UpdateApprovalStatus updateApprovalStatus(array $options = [])
 * @method UpdateBootAndAntiUninstallPolicy updateBootAndAntiUninstallPolicy(array $options = [])
 * @method UpdateClientUser updateClientUser(array $options = [])
 * @method UpdateClientUserPassword updateClientUserPassword(array $options = [])
 * @method UpdateClientUserStatus updateClientUserStatus(array $options = [])
 * @method UpdateDynamicRoute updateDynamicRoute(array $options = [])
 * @method UpdateExcessiveDeviceRegistrationApplicationsStatus updateExcessiveDeviceRegistrationApplicationsStatus(array $options = [])
 * @method UpdateIdpDepartment updateIdpDepartment(array $options = [])
 * @method UpdateNacUserCertStatus updateNacUserCertStatus(array $options = [])
 * @method UpdatePrivateAccessApplication updatePrivateAccessApplication(array $options = [])
 * @method UpdatePrivateAccessPolicy updatePrivateAccessPolicy(array $options = [])
 * @method UpdateRegistrationPolicy updateRegistrationPolicy(array $options = [])
 * @method UpdateUninstallApplicationsStatus updateUninstallApplicationsStatus(array $options = [])
 * @method UpdateUserDevicesSharingStatus updateUserDevicesSharingStatus(array $options = [])
 * @method UpdateUserDevicesStatus updateUserDevicesStatus(array $options = [])
 * @method UpdateUserGroup updateUserGroup(array $options = [])
 * @method UpdateUsersStatus updateUsersStatus(array $options = [])
 */
class CsasApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'csas';

    /** @var string */
    public $version = '2023-01-20';
}

/**
 * @method string getConnectorId()
 * @method string getApplicationIds()
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class AttachApplication2Connector extends Rpc
{

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withConnectorId($value)
    {
        $this->data['ConnectorId'] = $value;
        $this->options['form_params']['ConnectorId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApplicationIds($value)
    {
        $this->data['ApplicationIds'] = $value;
        $this->options['form_params']['ApplicationIds'] = $value;

        return $this;
    }
}

/**
 * @method string getPolicyType()
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPolicyId()
 * @method string getProcessId()
 */
class AttachPolicy2ApprovalProcess extends Rpc
{

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPolicyType($value)
    {
        $this->data['PolicyType'] = $value;
        $this->options['form_params']['PolicyType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPolicyId($value)
    {
        $this->data['PolicyId'] = $value;
        $this->options['form_params']['PolicyId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProcessId($value)
    {
        $this->data['ProcessId'] = $value;
        $this->options['form_params']['ProcessId'] = $value;

        return $this;
    }
}

/**
 * @method string getProcessNodes()
 * @method string getMatchSchemas()
 * @method string getProcessName()
 * @method string getDescription()
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class CreateApprovalProcess extends Rpc
{

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProcessNodes($value)
    {
        $this->data['ProcessNodes'] = $value;
        $this->options['form_params']['ProcessNodes'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMatchSchemas($value)
    {
        $this->data['MatchSchemas'] = $value;
        $this->options['form_params']['MatchSchemas'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProcessName($value)
    {
        $this->data['ProcessName'] = $value;
        $this->options['form_params']['ProcessName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDescription($value)
    {
        $this->data['Description'] = $value;
        $this->options['form_params']['Description'] = $value;

        return $this;
    }
}

/**
 * @method string getMobileNumber()
 * @method $this withMobileNumber($value)
 * @method string getDepartmentId()
 * @method $this withDepartmentId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getIdpConfigId()
 * @method $this withIdpConfigId($value)
 * @method string getPassword()
 * @method $this withPassword($value)
 * @method string getEmail()
 * @method $this withEmail($value)
 * @method string getUsername()
 * @method $this withUsername($value)
 */
class CreateClientUser extends Rpc
{

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getDescription()
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getDynamicRouteType()
 * @method string getTagIds()
 * @method string getRegionIds()
 * @method string getPriority()
 * @method string getNextHop()
 * @method string getApplicationIds()
 * @method string getName()
 * @method string getApplicationType()
 * @method string getStatus()
 */
class CreateDynamicRoute extends Rpc
{

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDescription($value)
    {
        $this->data['Description'] = $value;
        $this->options['form_params']['Description'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDynamicRouteType($value)
    {
        $this->data['DynamicRouteType'] = $value;
        $this->options['form_params']['DynamicRouteType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTagIds($value)
    {
        $this->data['TagIds'] = $value;
        $this->options['form_params']['TagIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRegionIds($value)
    {
        $this->data['RegionIds'] = $value;
        $this->options['form_params']['RegionIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPriority($value)
    {
        $this->data['Priority'] = $value;
        $this->options['form_params']['Priority'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNextHop($value)
    {
        $this->data['NextHop'] = $value;
        $this->options['form_params']['NextHop'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApplicationIds($value)
    {
        $this->data['ApplicationIds'] = $value;
        $this->options['form_params']['ApplicationIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withName($value)
    {
        $this->data['Name'] = $value;
        $this->options['form_params']['Name'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApplicationType($value)
    {
        $this->data['ApplicationType'] = $value;
        $this->options['form_params']['ApplicationType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStatus($value)
    {
        $this->data['Status'] = $value;
        $this->options['form_params']['Status'] = $value;

        return $this;
    }
}

/**
 * @method string getIdpConfigId()
 * @method $this withIdpConfigId($value)
 * @method string getDepartmentName()
 * @method $this withDepartmentName($value)
 */
class CreateIdpDepartment extends Rpc
{

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getAddresses()
 * @method string getDescription()
 * @method string getProtocol()
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getL7ProxyDomainCustom()
 * @method string getL7ProxyDomainPrivate()
 * @method string getBrowserAccessStatus()
 * @method string getTagIds()
 * @method string getL7ProxyDomainAutomaticPrefix()
 * @method string getPortRanges()
 * @method string getName()
 * @method string getStatus()
 */
class CreatePrivateAccessApplication extends Rpc
{

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAddresses($value)
    {
        $this->data['Addresses'] = $value;
        $this->options['form_params']['Addresses'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDescription($value)
    {
        $this->data['Description'] = $value;
        $this->options['form_params']['Description'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProtocol($value)
    {
        $this->data['Protocol'] = $value;
        $this->options['form_params']['Protocol'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withL7ProxyDomainCustom($value)
    {
        $this->data['L7ProxyDomainCustom'] = $value;
        $this->options['form_params']['L7ProxyDomainCustom'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withL7ProxyDomainPrivate($value)
    {
        $this->data['L7ProxyDomainPrivate'] = $value;
        $this->options['form_params']['L7ProxyDomainPrivate'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBrowserAccessStatus($value)
    {
        $this->data['BrowserAccessStatus'] = $value;
        $this->options['form_params']['BrowserAccessStatus'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTagIds($value)
    {
        $this->data['TagIds'] = $value;
        $this->options['form_params']['TagIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withL7ProxyDomainAutomaticPrefix($value)
    {
        $this->data['L7ProxyDomainAutomaticPrefix'] = $value;
        $this->options['form_params']['L7ProxyDomainAutomaticPrefix'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPortRanges($value)
    {
        $this->data['PortRanges'] = $value;
        $this->options['form_params']['PortRanges'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withName($value)
    {
        $this->data['Name'] = $value;
        $this->options['form_params']['Name'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStatus($value)
    {
        $this->data['Status'] = $value;
        $this->options['form_params']['Status'] = $value;

        return $this;
    }
}

/**
 * @method string getDescription()
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getCustomUserAttributes()
 * @method string getTagIds()
 * @method string getDeviceAttributeId()
 * @method string getUserGroupIds()
 * @method string getPolicyAction()
 * @method string getPriority()
 * @method string getDeviceAttributeAction()
 * @method string getApplicationIds()
 * @method string getUserGroupMode()
 * @method string getName()
 * @method string getApplicationType()
 * @method string getStatus()
 */
class CreatePrivateAccessPolicy extends Rpc
{

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDescription($value)
    {
        $this->data['Description'] = $value;
        $this->options['form_params']['Description'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCustomUserAttributes($value)
    {
        $this->data['CustomUserAttributes'] = $value;
        $this->options['form_params']['CustomUserAttributes'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTagIds($value)
    {
        $this->data['TagIds'] = $value;
        $this->options['form_params']['TagIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeviceAttributeId($value)
    {
        $this->data['DeviceAttributeId'] = $value;
        $this->options['form_params']['DeviceAttributeId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserGroupIds($value)
    {
        $this->data['UserGroupIds'] = $value;
        $this->options['form_params']['UserGroupIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPolicyAction($value)
    {
        $this->data['PolicyAction'] = $value;
        $this->options['form_params']['PolicyAction'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPriority($value)
    {
        $this->data['Priority'] = $value;
        $this->options['form_params']['Priority'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeviceAttributeAction($value)
    {
        $this->data['DeviceAttributeAction'] = $value;
        $this->options['form_params']['DeviceAttributeAction'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApplicationIds($value)
    {
        $this->data['ApplicationIds'] = $value;
        $this->options['form_params']['ApplicationIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserGroupMode($value)
    {
        $this->data['UserGroupMode'] = $value;
        $this->options['form_params']['UserGroupMode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withName($value)
    {
        $this->data['Name'] = $value;
        $this->options['form_params']['Name'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApplicationType($value)
    {
        $this->data['ApplicationType'] = $value;
        $this->options['form_params']['ApplicationType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStatus($value)
    {
        $this->data['Status'] = $value;
        $this->options['form_params']['Status'] = $value;

        return $this;
    }
}

/**
 * @method string getDescription()
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getName()
 */
class CreatePrivateAccessTag extends Rpc
{

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDescription($value)
    {
        $this->data['Description'] = $value;
        $this->options['form_params']['Description'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withName($value)
    {
        $this->data['Name'] = $value;
        $this->options['form_params']['Name'] = $value;

        return $this;
    }
}

/**
 * @method string getDescription()
 * @method string getMatchMode()
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getCompanyLimitCount()
 * @method string getPersonalLimitCount()
 * @method string getUserGroupIds()
 * @method string getWhitelist()
 * @method string getPriority()
 * @method string getPersonalLimitType()
 * @method string getName()
 * @method string getCompanyLimitType()
 * @method string getStatus()
 */
class CreateRegistrationPolicy extends Rpc
{

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDescription($value)
    {
        $this->data['Description'] = $value;
        $this->options['form_params']['Description'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMatchMode($value)
    {
        $this->data['MatchMode'] = $value;
        $this->options['form_params']['MatchMode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCompanyLimitCount($value)
    {
        $this->data['CompanyLimitCount'] = $value;
        $this->options['form_params']['CompanyLimitCount'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPersonalLimitCount($value)
    {
        $this->data['PersonalLimitCount'] = $value;
        $this->options['form_params']['PersonalLimitCount'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserGroupIds($value)
    {
        $this->data['UserGroupIds'] = $value;
        $this->options['form_params']['UserGroupIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWhitelist($value)
    {
        $this->data['Whitelist'] = $value;
        $this->options['form_params']['Whitelist'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPriority($value)
    {
        $this->data['Priority'] = $value;
        $this->options['form_params']['Priority'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPersonalLimitType($value)
    {
        $this->data['PersonalLimitType'] = $value;
        $this->options['form_params']['PersonalLimitType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withName($value)
    {
        $this->data['Name'] = $value;
        $this->options['form_params']['Name'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCompanyLimitType($value)
    {
        $this->data['CompanyLimitType'] = $value;
        $this->options['form_params']['CompanyLimitType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStatus($value)
    {
        $this->data['Status'] = $value;
        $this->options['form_params']['Status'] = $value;

        return $this;
    }
}

/**
 * @method string getDescription()
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getName()
 * @method string getAttributes()
 */
class CreateUserGroup extends Rpc
{

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDescription($value)
    {
        $this->data['Description'] = $value;
        $this->options['form_params']['Description'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withName($value)
    {
        $this->data['Name'] = $value;
        $this->options['form_params']['Name'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAttributes($value)
    {
        $this->data['Attributes'] = $value;
        $this->options['form_params']['Attributes'] = $value;

        return $this;
    }
}

/**
 * @method string getScale()
 * @method string getApiType()
 * @method string getWmInfoUint()
 * @method string getWmInfoSize()
 * @method string getWmInfoBytesB64()
 * @method string getWmType()
 * @method string getWidth()
 * @method string getOpacity()
 * @method string getHeight()
 */
class CreateWmBaseImage extends Rpc
{

    /** @var string */
    public $scheme = 'https';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScale($value)
    {
        $this->data['Scale'] = $value;
        $this->options['form_params']['Scale'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiType($value)
    {
        $this->data['ApiType'] = $value;
        $this->options['form_params']['ApiType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWmInfoUint($value)
    {
        $this->data['WmInfoUint'] = $value;
        $this->options['form_params']['WmInfoUint'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWmInfoSize($value)
    {
        $this->data['WmInfoSize'] = $value;
        $this->options['form_params']['WmInfoSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWmInfoBytesB64($value)
    {
        $this->data['WmInfoBytesB64'] = $value;
        $this->options['form_params']['WmInfoBytesB64'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWmType($value)
    {
        $this->data['WmType'] = $value;
        $this->options['form_params']['WmType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWidth($value)
    {
        $this->data['Width'] = $value;
        $this->options['form_params']['Width'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOpacity($value)
    {
        $this->data['Opacity'] = $value;
        $this->options['form_params']['Opacity'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withHeight($value)
    {
        $this->data['Height'] = $value;
        $this->options['form_params']['Height'] = $value;

        return $this;
    }
}

/**
 * @method string getVideoIsLong()
 * @method string getApiType()
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getImageEmbedLevel()
 * @method string getWmType()
 * @method string getDocumentControl()
 * @method string getImageEmbedJpegQuality()
 * @method string getWatermarkInfoUint()
 * @method string getWmInfoUint()
 * @method string getCsvControl()
 * @method $this withCsvControl($value)
 * @method string getFilename()
 * @method string getWmInfoSize()
 * @method string getWmInfoBytesB64()
 * @method string getFileUrl()
 * @method string getVideoBitrate()
 */
class CreateWmEmbedTask extends Rpc
{

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVideoIsLong($value)
    {
        $this->data['VideoIsLong'] = $value;
        $this->options['form_params']['VideoIsLong'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiType($value)
    {
        $this->data['ApiType'] = $value;
        $this->options['form_params']['ApiType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageEmbedLevel($value)
    {
        $this->data['ImageEmbedLevel'] = $value;
        $this->options['form_params']['ImageEmbedLevel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWmType($value)
    {
        $this->data['WmType'] = $value;
        $this->options['form_params']['WmType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDocumentControl($value)
    {
        $this->data['DocumentControl'] = $value;
        $this->options['form_params']['DocumentControl'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageEmbedJpegQuality($value)
    {
        $this->data['ImageEmbedJpegQuality'] = $value;
        $this->options['form_params']['ImageEmbedJpegQuality'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWatermarkInfoUint($value)
    {
        $this->data['WatermarkInfoUint'] = $value;
        $this->options['form_params']['WatermarkInfoUint'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWmInfoUint($value)
    {
        $this->data['WmInfoUint'] = $value;
        $this->options['form_params']['WmInfoUint'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFilename($value)
    {
        $this->data['Filename'] = $value;
        $this->options['form_params']['Filename'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWmInfoSize($value)
    {
        $this->data['WmInfoSize'] = $value;
        $this->options['form_params']['WmInfoSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWmInfoBytesB64($value)
    {
        $this->data['WmInfoBytesB64'] = $value;
        $this->options['form_params']['WmInfoBytesB64'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFileUrl($value)
    {
        $this->data['FileUrl'] = $value;
        $this->options['form_params']['FileUrl'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVideoBitrate($value)
    {
        $this->data['VideoBitrate'] = $value;
        $this->options['form_params']['VideoBitrate'] = $value;

        return $this;
    }
}

/**
 * @method string getVideoIsLong()
 * @method string getDocumentIsCapture()
 * @method string getVideoSpeed()
 * @method string getApiType()
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getWmType()
 * @method string getImageDetectLevel()
 * @method string getCsvControl()
 * @method $this withCsvControl($value)
 * @method string getFilename()
 * @method string getWmInfoSize()
 * @method string getFileUrl()
 */
class CreateWmExtractTask extends Rpc
{

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVideoIsLong($value)
    {
        $this->data['VideoIsLong'] = $value;
        $this->options['form_params']['VideoIsLong'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDocumentIsCapture($value)
    {
        $this->data['DocumentIsCapture'] = $value;
        $this->options['form_params']['DocumentIsCapture'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVideoSpeed($value)
    {
        $this->data['VideoSpeed'] = $value;
        $this->options['form_params']['VideoSpeed'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiType($value)
    {
        $this->data['ApiType'] = $value;
        $this->options['form_params']['ApiType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWmType($value)
    {
        $this->data['WmType'] = $value;
        $this->options['form_params']['WmType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageDetectLevel($value)
    {
        $this->data['ImageDetectLevel'] = $value;
        $this->options['form_params']['ImageDetectLevel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFilename($value)
    {
        $this->data['Filename'] = $value;
        $this->options['form_params']['Filename'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWmInfoSize($value)
    {
        $this->data['WmInfoSize'] = $value;
        $this->options['form_params']['WmInfoSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFileUrl($value)
    {
        $this->data['FileUrl'] = $value;
        $this->options['form_params']['FileUrl'] = $value;

        return $this;
    }
}

/**
 * @method string getWmInfoSize()
 * @method string getWmInfoBytesB64()
 * @method string getWmType()
 */
class CreateWmInfoMapping extends Rpc
{

    /** @var string */
    public $scheme = 'https';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWmInfoSize($value)
    {
        $this->data['WmInfoSize'] = $value;
        $this->options['form_params']['WmInfoSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWmInfoBytesB64($value)
    {
        $this->data['WmInfoBytesB64'] = $value;
        $this->options['form_params']['WmInfoBytesB64'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWmType($value)
    {
        $this->data['WmType'] = $value;
        $this->options['form_params']['WmType'] = $value;

        return $this;
    }
}

/**
 * @method string getProcessIds()
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DeleteApprovalProcesses extends Rpc
{

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProcessIds($value)
    {
        $this->data['ProcessIds'] = $value;
        $this->options['form_params']['ProcessIds'] = $value;

        return $this;
    }
}

/**
 * @method string getId()
 * @method $this withId($value)
 */
class DeleteClientUser extends Rpc
{

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getDynamicRouteId()
 * @method $this withDynamicRouteId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DeleteDynamicRoute extends Rpc
{

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getDepartmentId()
 * @method $this withDepartmentId($value)
 * @method string getIdpConfigId()
 * @method $this withIdpConfigId($value)
 */
class DeleteIdpDepartment extends Rpc
{

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getApplicationId()
 */
class DeletePrivateAccessApplication extends Rpc
{

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApplicationId($value)
    {
        $this->data['ApplicationId'] = $value;
        $this->options['form_params']['ApplicationId'] = $value;

        return $this;
    }
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPolicyId()
 */
class DeletePrivateAccessPolicy extends Rpc
{

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPolicyId($value)
    {
        $this->data['PolicyId'] = $value;
        $this->options['form_params']['PolicyId'] = $value;

        return $this;
    }
}

/**
 * @method string getTagId()
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DeletePrivateAccessTag extends Rpc
{

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTagId($value)
    {
        $this->data['TagId'] = $value;
        $this->options['form_params']['TagId'] = $value;

        return $this;
    }
}

/**
 * @method string getPolicyIds()
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DeleteRegistrationPolicies extends Rpc
{

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPolicyIds($value)
    {
        $this->data['PolicyIds'] = $value;
        $this->options['form_params']['PolicyIds'] = $value;

        return $this;
    }
}

/**
 * @method string getDeviceTags()
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DeleteUserDevices extends Rpc
{

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeviceTags($value)
    {
        $this->data['DeviceTags'] = $value;
        $this->options['form_params']['DeviceTags'] = $value;

        return $this;
    }
}

/**
 * @method string getUserGroupId()
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DeleteUserGroup extends Rpc
{

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserGroupId($value)
    {
        $this->data['UserGroupId'] = $value;
        $this->options['form_params']['UserGroupId'] = $value;

        return $this;
    }
}

/**
 * @method string getConnectorId()
 * @method string getApplicationIds()
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DetachApplication2Connector extends Rpc
{

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withConnectorId($value)
    {
        $this->data['ConnectorId'] = $value;
        $this->options['form_params']['ConnectorId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApplicationIds($value)
    {
        $this->data['ApplicationIds'] = $value;
        $this->options['form_params']['ApplicationIds'] = $value;

        return $this;
    }
}

/**
 * @method string getPolicyType()
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPolicyId()
 * @method string getProcessId()
 */
class DetachPolicy2ApprovalProcess extends Rpc
{

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPolicyType($value)
    {
        $this->data['PolicyType'] = $value;
        $this->options['form_params']['PolicyType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPolicyId($value)
    {
        $this->data['PolicyId'] = $value;
        $this->options['form_params']['PolicyId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProcessId($value)
    {
        $this->data['ProcessId'] = $value;
        $this->options['form_params']['ProcessId'] = $value;

        return $this;
    }
}

/**
 * @method string getMac()
 * @method string getDeviceTypes()
 * @method string getHostname()
 * @method string getAppStatuses()
 * @method string getDlpStatuses()
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getSaseUserId()
 * @method string getNacStatuses()
 * @method string getDepartment()
 * @method string getIaStatuses()
 * @method string getDeviceBelong()
 * @method string getSharingStatus()
 * @method string getDeviceTags()
 * @method string getDeviceStatuses()
 * @method string getPaStatuses()
 * @method string getUsername()
 */
class ExportUserDevices extends Rpc
{

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMac($value)
    {
        $this->data['Mac'] = $value;
        $this->options['form_params']['Mac'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeviceTypes($value)
    {
        $this->data['DeviceTypes'] = $value;
        $this->options['form_params']['DeviceTypes'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withHostname($value)
    {
        $this->data['Hostname'] = $value;
        $this->options['form_params']['Hostname'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppStatuses($value)
    {
        $this->data['AppStatuses'] = $value;
        $this->options['form_params']['AppStatuses'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDlpStatuses($value)
    {
        $this->data['DlpStatuses'] = $value;
        $this->options['form_params']['DlpStatuses'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSaseUserId($value)
    {
        $this->data['SaseUserId'] = $value;
        $this->options['form_params']['SaseUserId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNacStatuses($value)
    {
        $this->data['NacStatuses'] = $value;
        $this->options['form_params']['NacStatuses'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDepartment($value)
    {
        $this->data['Department'] = $value;
        $this->options['form_params']['Department'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIaStatuses($value)
    {
        $this->data['IaStatuses'] = $value;
        $this->options['form_params']['IaStatuses'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeviceBelong($value)
    {
        $this->data['DeviceBelong'] = $value;
        $this->options['form_params']['DeviceBelong'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSharingStatus($value)
    {
        $this->data['SharingStatus'] = $value;
        $this->options['form_params']['SharingStatus'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeviceTags($value)
    {
        $this->data['DeviceTags'] = $value;
        $this->options['form_params']['DeviceTags'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeviceStatuses($value)
    {
        $this->data['DeviceStatuses'] = $value;
        $this->options['form_params']['DeviceStatuses'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPaStatuses($value)
    {
        $this->data['PaStatuses'] = $value;
        $this->options['form_params']['PaStatuses'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUsername($value)
    {
        $this->data['Username'] = $value;
        $this->options['form_params']['Username'] = $value;

        return $this;
    }
}

class GetActiveIdpConfig extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getApprovalId()
 * @method $this withApprovalId($value)
 */
class GetApproval extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getProcessId()
 * @method $this withProcessId($value)
 */
class GetApprovalProcess extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getSchemaId()
 * @method $this withSchemaId($value)
 */
class GetApprovalSchema extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class GetBootAndAntiUninstallPolicy extends Rpc
{
}

/**
 * @method string getIdpConfigId()
 * @method $this withIdpConfigId($value)
 * @method string getUsername()
 * @method $this withUsername($value)
 */
class GetClientUser extends Rpc
{
}

/**
 * @method string getDynamicRouteId()
 * @method $this withDynamicRouteId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class GetDynamicRoute extends Rpc
{
}

/**
 * @method string getId()
 * @method $this withId($value)
 */
class GetIdpConfig extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getApplicationId()
 * @method $this withApplicationId($value)
 */
class GetPrivateAccessApplication extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPolicyId()
 * @method $this withPolicyId($value)
 */
class GetPrivateAccessPolicy extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPolicyId()
 * @method $this withPolicyId($value)
 */
class GetRegistrationPolicy extends Rpc
{
}

/**
 * @method string getDeviceTag()
 * @method $this withDeviceTag($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class GetUserDevice extends Rpc
{
}

/**
 * @method string getUserGroupId()
 * @method $this withUserGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class GetUserGroup extends Rpc
{
}

/**
 * @method string getApiType()
 * @method $this withApiType($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class GetWmEmbedTask extends Rpc
{
}

/**
 * @method string getApiType()
 * @method $this withApiType($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class GetWmExtractTask extends Rpc
{
}

/**
 * @method string getPolicyIds()
 * @method $this withPolicyIds($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class ListApplicationsForPrivateAccessPolicy extends Rpc
{
}

/**
 * @method string getTagIds()
 * @method $this withTagIds($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class ListApplicationsForPrivateAccessTag extends Rpc
{
}

/**
 * @method string getProcessIds()
 * @method $this withProcessIds($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPolicyId()
 * @method $this withPolicyId($value)
 * @method string getSaseUserId()
 * @method $this withSaseUserId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPolicyType()
 * @method $this withPolicyType($value)
 * @method string getProcessName()
 * @method $this withProcessName($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getUsername()
 * @method $this withUsername($value)
 */
class ListApprovalProcesses extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getSchemaIds()
 * @method $this withSchemaIds($value)
 */
class ListApprovalProcessesForApprovalSchemas extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getSchemaId()
 * @method $this withSchemaId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCreateEndTime()
 * @method $this withCreateEndTime($value)
 * @method string getOperatorUserId()
 * @method $this withOperatorUserId($value)
 * @method string getSchemaName()
 * @method $this withSchemaName($value)
 * @method string getPolicyType()
 * @method $this withPolicyType($value)
 * @method string getProcessName()
 * @method $this withProcessName($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getApprovalIds()
 * @method $this withApprovalIds($value)
 * @method string getCreateStartTime()
 * @method $this withCreateStartTime($value)
 * @method string getProcessId()
 * @method $this withProcessId($value)
 * @method string getCreatorDepartment()
 * @method $this withCreatorDepartment($value)
 * @method string getOperatorUsername()
 * @method $this withOperatorUsername($value)
 * @method string getCreatorUserId()
 * @method $this withCreatorUserId($value)
 * @method string getCreatorUsername()
 * @method $this withCreatorUsername($value)
 * @method string getStatuses()
 * @method $this withStatuses($value)
 * @method string getCreatorDevTag()
 * @method $this withCreatorDevTag($value)
 */
class ListApprovals extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getSchemaIds()
 * @method $this withSchemaIds($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getSchemaName()
 * @method $this withSchemaName($value)
 * @method string getPolicyType()
 * @method $this withPolicyType($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 */
class ListApprovalSchemas extends Rpc
{
}

/**
 * @method string getProcessIds()
 * @method $this withProcessIds($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class ListApprovalSchemasForApprovalProcesses extends Rpc
{
}

/**
 * @method string getMobileNumber()
 * @method $this withMobileNumber($value)
 * @method string getDepartmentId()
 * @method $this withDepartmentId($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getIdpConfigId()
 * @method $this withIdpConfigId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEmail()
 * @method $this withEmail($value)
 * @method string getUsername()
 * @method $this withUsername($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ListClientUsers extends Rpc
{
}

/**
 * @method string getSwitchStatus()
 * @method $this withSwitchStatus($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getConnectorIds()
 * @method $this withConnectorIds($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ListConnectors extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class ListDynamicRouteRegions extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getApplicationId()
 * @method $this withApplicationId($value)
 * @method string getDynamicRouteIds()
 * @method $this withDynamicRouteIds($value)
 * @method string getTagId()
 * @method $this withTagId($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getRegionIds()
 * @method $this withRegionIds($value)
 * @method string getNextHop()
 * @method $this withNextHop($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ListDynamicRoutes extends Rpc
{
}

/**
 * @method string getDeviceTag()
 * @method $this withDeviceTag($value)
 * @method string getMac()
 * @method $this withMac($value)
 * @method string getHostname()
 * @method $this withHostname($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getSaseUserId()
 * @method $this withSaseUserId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDepartment()
 * @method $this withDepartment($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getApplicationIds()
 * @method $this withApplicationIds($value)
 * @method string getStatuses()
 * @method $this withStatuses($value)
 * @method string getUsername()
 * @method $this withUsername($value)
 */
class ListExcessiveDeviceRegistrationApplications extends Rpc
{
}

/**
 * @method string getInclude()
 * @method $this withInclude($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListIdpConfigs extends Rpc
{
}

/**
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getIdpConfigId()
 * @method $this withIdpConfigId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListIdpDepartments extends Rpc
{
}

/**
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getDeviceType()
 * @method $this withDeviceType($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDepartment()
 * @method $this withDepartment($value)
 * @method string getUsername()
 * @method $this withUsername($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ListNacUserCert extends Rpc
{

    /** @var string */
    public $scheme = 'https';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getApplicationIds()
 * @method $this withApplicationIds($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class ListPolicesForPrivateAccessApplication extends Rpc
{
}

/**
 * @method string getTagIds()
 * @method $this withTagIds($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class ListPolicesForPrivateAccessTag extends Rpc
{
}

/**
 * @method string getUserGroupIds()
 * @method $this withUserGroupIds($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class ListPolicesForUserGroup extends Rpc
{
}

/**
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 */
class ListPopTrafficStatistics extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPolicyId()
 * @method $this withPolicyId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getAddress()
 * @method $this withAddress($value)
 * @method string getTagId()
 * @method $this withTagId($value)
 * @method string getConnectorId()
 * @method $this withConnectorId($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getApplicationIds()
 * @method $this withApplicationIds($value)
 * @method string getAccessModes()
 * @method $this withAccessModes($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ListPrivateAccessApplications extends Rpc
{
}

/**
 * @method string getDynamicRouteIds()
 * @method $this withDynamicRouteIds($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class ListPrivateAccessApplicationsForDynamicRoute extends Rpc
{
}

/**
 * @method string getPolicyIds()
 * @method $this withPolicyIds($value)
 * @method string getTagName()
 * @method $this withTagName($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getApplicationId()
 * @method $this withApplicationId($value)
 * @method string getTagId()
 * @method $this withTagId($value)
 * @method string getUserGroupId()
 * @method $this withUserGroupId($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getPolicyAction()
 * @method $this withPolicyAction($value)
 * @method string getApplicationName()
 * @method $this withApplicationName($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ListPrivateAccessPolices extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPolicyId()
 * @method $this withPolicyId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getApplicationId()
 * @method $this withApplicationId($value)
 * @method string getSimpleMode()
 * @method $this withSimpleMode($value)
 * @method string getTagIds()
 * @method $this withTagIds($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getName()
 * @method $this withName($value)
 */
class ListPrivateAccessTags extends Rpc
{
}

/**
 * @method string getDynamicRouteIds()
 * @method $this withDynamicRouteIds($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class ListPrivateAccessTagsForDynamicRoute extends Rpc
{
}

/**
 * @method string getPolicyIds()
 * @method $this withPolicyIds($value)
 * @method string getMatchMode()
 * @method $this withMatchMode($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getUserGroupId()
 * @method $this withUserGroupId($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getPersonalLimitType()
 * @method $this withPersonalLimitType($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getCompanyLimitType()
 * @method $this withCompanyLimitType($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ListRegistrationPolicies extends Rpc
{
}

/**
 * @method string getUserGroupIds()
 * @method $this withUserGroupIds($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class ListRegistrationPoliciesForUserGroup extends Rpc
{
}

/**
 * @method string getDeviceTag()
 * @method $this withDeviceTag($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListSoftwareForUserDevice extends Rpc
{
}

/**
 * @method string getApplicationIds()
 * @method $this withApplicationIds($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class ListTagsForPrivateAccessApplication extends Rpc
{
}

/**
 * @method string getPolicyIds()
 * @method $this withPolicyIds($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class ListTagsForPrivateAccessPolicy extends Rpc
{
}

/**
 * @method string getMac()
 * @method $this withMac($value)
 * @method string getHostname()
 * @method $this withHostname($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDepartment()
 * @method $this withDepartment($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getApplicationIds()
 * @method $this withApplicationIds($value)
 * @method string getStatuses()
 * @method $this withStatuses($value)
 * @method string getUsername()
 * @method $this withUsername($value)
 */
class ListUninstallApplications extends Rpc
{
}

/**
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getSaseUserId()
 * @method $this withSaseUserId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListUserApplications extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getMac()
 * @method $this withMac($value)
 * @method string getDeviceTypes()
 * @method $this withDeviceTypes($value)
 * @method string getHostname()
 * @method $this withHostname($value)
 * @method string getAppStatuses()
 * @method $this withAppStatuses($value)
 * @method string getDlpStatuses()
 * @method $this withDlpStatuses($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getSaseUserId()
 * @method $this withSaseUserId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getNacStatuses()
 * @method $this withNacStatuses($value)
 * @method string getDepartment()
 * @method $this withDepartment($value)
 * @method string getInnerIp()
 * @method $this withInnerIp($value)
 * @method string getIaStatuses()
 * @method $this withIaStatuses($value)
 * @method string getDeviceBelong()
 * @method $this withDeviceBelong($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getSharingStatus()
 * @method $this withSharingStatus($value)
 * @method string getDeviceTags()
 * @method $this withDeviceTags($value)
 * @method string getDeviceStatuses()
 * @method $this withDeviceStatuses($value)
 * @method string getPaStatuses()
 * @method $this withPaStatuses($value)
 * @method string getSortBy()
 * @method $this withSortBy($value)
 * @method string getUsername()
 * @method $this withUsername($value)
 */
class ListUserDevices extends Rpc
{
}

/**
 * @method string getAttributeValue()
 * @method $this withAttributeValue($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPAPolicyId()
 * @method $this withPAPolicyId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getUserGroupIds()
 * @method $this withUserGroupIds($value)
 * @method string getName()
 * @method $this withName($value)
 */
class ListUserGroups extends Rpc
{
}

/**
 * @method string getPolicyIds()
 * @method $this withPolicyIds($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class ListUserGroupsForPrivateAccessPolicy extends Rpc
{
}

/**
 * @method string getPolicyIds()
 * @method $this withPolicyIds($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class ListUserGroupsForRegistrationPolicy extends Rpc
{
}

/**
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getSaseUserId()
 * @method $this withSaseUserId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getName()
 * @method $this withName($value)
 */
class ListUserPrivateAccessPolicies extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getFuzzyUsername()
 * @method $this withFuzzyUsername($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDepartment()
 * @method $this withDepartment($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getPreciseUsername()
 * @method $this withPreciseUsername($value)
 * @method string getSaseUserIds()
 * @method $this withSaseUserIds($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ListUsers extends Rpc
{
}

/**
 * @method string getWmInfoUint()
 * @method $this withWmInfoUint($value)
 * @method string getWmInfoSize()
 * @method $this withWmInfoSize($value)
 * @method string getWmType()
 * @method $this withWmType($value)
 */
class LookupWmInfoMapping extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getIdpId()
 * @method $this withIdpId($value)
 * @method string getExternalIds()
 * @method $this withExternalIds($value)
 */
class RevokeUserSession extends Rpc
{

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getProcessNodes()
 * @method string getMatchSchemas()
 * @method string getDescription()
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getProcessName()
 * @method string getProcessId()
 */
class UpdateApprovalProcess extends Rpc
{

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProcessNodes($value)
    {
        $this->data['ProcessNodes'] = $value;
        $this->options['form_params']['ProcessNodes'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMatchSchemas($value)
    {
        $this->data['MatchSchemas'] = $value;
        $this->options['form_params']['MatchSchemas'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDescription($value)
    {
        $this->data['Description'] = $value;
        $this->options['form_params']['Description'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProcessName($value)
    {
        $this->data['ProcessName'] = $value;
        $this->options['form_params']['ProcessName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProcessId($value)
    {
        $this->data['ProcessId'] = $value;
        $this->options['form_params']['ProcessId'] = $value;

        return $this;
    }
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getApprovalId()
 * @method $this withApprovalId($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class UpdateApprovalStatus extends Rpc
{

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getIsAntiUninstall()
 * @method string getAllowReport()
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getUserGroupIds()
 * @method string getWhitelistUsers()
 * @method string getBlockContent()
 * @method string getIsBoot()
 */
class UpdateBootAndAntiUninstallPolicy extends Rpc
{

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIsAntiUninstall($value)
    {
        $this->data['IsAntiUninstall'] = $value;
        $this->options['form_params']['IsAntiUninstall'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAllowReport($value)
    {
        $this->data['AllowReport'] = $value;
        $this->options['form_params']['AllowReport'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserGroupIds($value)
    {
        $this->data['UserGroupIds'] = $value;
        $this->options['form_params']['UserGroupIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWhitelistUsers($value)
    {
        $this->data['WhitelistUsers'] = $value;
        $this->options['form_params']['WhitelistUsers'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBlockContent($value)
    {
        $this->data['BlockContent'] = $value;
        $this->options['form_params']['BlockContent'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIsBoot($value)
    {
        $this->data['IsBoot'] = $value;
        $this->options['form_params']['IsBoot'] = $value;

        return $this;
    }
}

/**
 * @method string getMobileNumber()
 * @method $this withMobileNumber($value)
 * @method string getDepartmentId()
 * @method $this withDepartmentId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getEmail()
 * @method $this withEmail($value)
 */
class UpdateClientUser extends Rpc
{

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getPassword()
 * @method $this withPassword($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getUsername()
 * @method $this withUsername($value)
 */
class UpdateClientUserPassword extends Rpc
{

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getId()
 * @method $this withId($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class UpdateClientUserStatus extends Rpc
{

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getDescription()
 * @method string getDynamicRouteId()
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getDynamicRouteType()
 * @method string getTagIds()
 * @method string getRegionIds()
 * @method string getPriority()
 * @method string getNextHop()
 * @method string getApplicationIds()
 * @method string getModifyType()
 * @method string getName()
 * @method string getApplicationType()
 * @method string getStatus()
 */
class UpdateDynamicRoute extends Rpc
{

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDescription($value)
    {
        $this->data['Description'] = $value;
        $this->options['form_params']['Description'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDynamicRouteId($value)
    {
        $this->data['DynamicRouteId'] = $value;
        $this->options['form_params']['DynamicRouteId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDynamicRouteType($value)
    {
        $this->data['DynamicRouteType'] = $value;
        $this->options['form_params']['DynamicRouteType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTagIds($value)
    {
        $this->data['TagIds'] = $value;
        $this->options['form_params']['TagIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRegionIds($value)
    {
        $this->data['RegionIds'] = $value;
        $this->options['form_params']['RegionIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPriority($value)
    {
        $this->data['Priority'] = $value;
        $this->options['form_params']['Priority'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNextHop($value)
    {
        $this->data['NextHop'] = $value;
        $this->options['form_params']['NextHop'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApplicationIds($value)
    {
        $this->data['ApplicationIds'] = $value;
        $this->options['form_params']['ApplicationIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withModifyType($value)
    {
        $this->data['ModifyType'] = $value;
        $this->options['form_params']['ModifyType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withName($value)
    {
        $this->data['Name'] = $value;
        $this->options['form_params']['Name'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApplicationType($value)
    {
        $this->data['ApplicationType'] = $value;
        $this->options['form_params']['ApplicationType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStatus($value)
    {
        $this->data['Status'] = $value;
        $this->options['form_params']['Status'] = $value;

        return $this;
    }
}

/**
 * @method string getApplicationIds()
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getStatus()
 */
class UpdateExcessiveDeviceRegistrationApplicationsStatus extends Rpc
{

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApplicationIds($value)
    {
        $this->data['ApplicationIds'] = $value;
        $this->options['form_params']['ApplicationIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStatus($value)
    {
        $this->data['Status'] = $value;
        $this->options['form_params']['Status'] = $value;

        return $this;
    }
}

/**
 * @method string getDepartmentId()
 * @method $this withDepartmentId($value)
 * @method string getIdpConfigId()
 * @method $this withIdpConfigId($value)
 * @method string getDepartmentName()
 * @method $this withDepartmentName($value)
 */
class UpdateIdpDepartment extends Rpc
{

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getIdList()
 * @method string getStatus()
 */
class UpdateNacUserCertStatus extends Rpc
{

    /** @var string */
    public $scheme = 'https';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIdList($value)
    {
        $this->data['IdList'] = $value;
        $this->options['form_params']['IdList'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStatus($value)
    {
        $this->data['Status'] = $value;
        $this->options['form_params']['Status'] = $value;

        return $this;
    }
}

/**
 * @method string getAddresses()
 * @method string getDescription()
 * @method string getProtocol()
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getApplicationId()
 * @method string getL7ProxyDomainCustom()
 * @method string getL7ProxyDomainPrivate()
 * @method string getTagIds()
 * @method string getL7ProxyDomainAutomaticPrefix()
 * @method string getPortRanges()
 * @method string getModifyType()
 * @method string getStatus()
 */
class UpdatePrivateAccessApplication extends Rpc
{

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAddresses($value)
    {
        $this->data['Addresses'] = $value;
        $this->options['form_params']['Addresses'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDescription($value)
    {
        $this->data['Description'] = $value;
        $this->options['form_params']['Description'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProtocol($value)
    {
        $this->data['Protocol'] = $value;
        $this->options['form_params']['Protocol'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApplicationId($value)
    {
        $this->data['ApplicationId'] = $value;
        $this->options['form_params']['ApplicationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withL7ProxyDomainCustom($value)
    {
        $this->data['L7ProxyDomainCustom'] = $value;
        $this->options['form_params']['L7ProxyDomainCustom'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withL7ProxyDomainPrivate($value)
    {
        $this->data['L7ProxyDomainPrivate'] = $value;
        $this->options['form_params']['L7ProxyDomainPrivate'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTagIds($value)
    {
        $this->data['TagIds'] = $value;
        $this->options['form_params']['TagIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withL7ProxyDomainAutomaticPrefix($value)
    {
        $this->data['L7ProxyDomainAutomaticPrefix'] = $value;
        $this->options['form_params']['L7ProxyDomainAutomaticPrefix'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPortRanges($value)
    {
        $this->data['PortRanges'] = $value;
        $this->options['form_params']['PortRanges'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withModifyType($value)
    {
        $this->data['ModifyType'] = $value;
        $this->options['form_params']['ModifyType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStatus($value)
    {
        $this->data['Status'] = $value;
        $this->options['form_params']['Status'] = $value;

        return $this;
    }
}

/**
 * @method string getDescription()
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPolicyId()
 * @method string getCustomUserAttributes()
 * @method string getTagIds()
 * @method string getDeviceAttributeId()
 * @method string getUserGroupIds()
 * @method string getPolicyAction()
 * @method string getPriority()
 * @method string getDeviceAttributeAction()
 * @method string getApplicationIds()
 * @method string getUserGroupMode()
 * @method string getModifyType()
 * @method string getApplicationType()
 * @method string getStatus()
 */
class UpdatePrivateAccessPolicy extends Rpc
{

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDescription($value)
    {
        $this->data['Description'] = $value;
        $this->options['form_params']['Description'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPolicyId($value)
    {
        $this->data['PolicyId'] = $value;
        $this->options['form_params']['PolicyId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCustomUserAttributes($value)
    {
        $this->data['CustomUserAttributes'] = $value;
        $this->options['form_params']['CustomUserAttributes'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTagIds($value)
    {
        $this->data['TagIds'] = $value;
        $this->options['form_params']['TagIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeviceAttributeId($value)
    {
        $this->data['DeviceAttributeId'] = $value;
        $this->options['form_params']['DeviceAttributeId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserGroupIds($value)
    {
        $this->data['UserGroupIds'] = $value;
        $this->options['form_params']['UserGroupIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPolicyAction($value)
    {
        $this->data['PolicyAction'] = $value;
        $this->options['form_params']['PolicyAction'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPriority($value)
    {
        $this->data['Priority'] = $value;
        $this->options['form_params']['Priority'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeviceAttributeAction($value)
    {
        $this->data['DeviceAttributeAction'] = $value;
        $this->options['form_params']['DeviceAttributeAction'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApplicationIds($value)
    {
        $this->data['ApplicationIds'] = $value;
        $this->options['form_params']['ApplicationIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserGroupMode($value)
    {
        $this->data['UserGroupMode'] = $value;
        $this->options['form_params']['UserGroupMode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withModifyType($value)
    {
        $this->data['ModifyType'] = $value;
        $this->options['form_params']['ModifyType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApplicationType($value)
    {
        $this->data['ApplicationType'] = $value;
        $this->options['form_params']['ApplicationType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStatus($value)
    {
        $this->data['Status'] = $value;
        $this->options['form_params']['Status'] = $value;

        return $this;
    }
}

/**
 * @method string getDescription()
 * @method string getMatchMode()
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPolicyId()
 * @method string getCompanyLimitCount()
 * @method string getPersonalLimitCount()
 * @method string getUserGroupIds()
 * @method string getWhitelist()
 * @method string getPriority()
 * @method string getPersonalLimitType()
 * @method string getName()
 * @method string getCompanyLimitType()
 * @method string getStatus()
 */
class UpdateRegistrationPolicy extends Rpc
{

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDescription($value)
    {
        $this->data['Description'] = $value;
        $this->options['form_params']['Description'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMatchMode($value)
    {
        $this->data['MatchMode'] = $value;
        $this->options['form_params']['MatchMode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPolicyId($value)
    {
        $this->data['PolicyId'] = $value;
        $this->options['form_params']['PolicyId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCompanyLimitCount($value)
    {
        $this->data['CompanyLimitCount'] = $value;
        $this->options['form_params']['CompanyLimitCount'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPersonalLimitCount($value)
    {
        $this->data['PersonalLimitCount'] = $value;
        $this->options['form_params']['PersonalLimitCount'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserGroupIds($value)
    {
        $this->data['UserGroupIds'] = $value;
        $this->options['form_params']['UserGroupIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWhitelist($value)
    {
        $this->data['Whitelist'] = $value;
        $this->options['form_params']['Whitelist'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPriority($value)
    {
        $this->data['Priority'] = $value;
        $this->options['form_params']['Priority'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPersonalLimitType($value)
    {
        $this->data['PersonalLimitType'] = $value;
        $this->options['form_params']['PersonalLimitType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withName($value)
    {
        $this->data['Name'] = $value;
        $this->options['form_params']['Name'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCompanyLimitType($value)
    {
        $this->data['CompanyLimitType'] = $value;
        $this->options['form_params']['CompanyLimitType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStatus($value)
    {
        $this->data['Status'] = $value;
        $this->options['form_params']['Status'] = $value;

        return $this;
    }
}

/**
 * @method string getApplicationIds()
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getStatus()
 */
class UpdateUninstallApplicationsStatus extends Rpc
{

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApplicationIds($value)
    {
        $this->data['ApplicationIds'] = $value;
        $this->options['form_params']['ApplicationIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStatus($value)
    {
        $this->data['Status'] = $value;
        $this->options['form_params']['Status'] = $value;

        return $this;
    }
}

/**
 * @method string getSharingStatus()
 * @method string getDeviceTags()
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class UpdateUserDevicesSharingStatus extends Rpc
{

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSharingStatus($value)
    {
        $this->data['SharingStatus'] = $value;
        $this->options['form_params']['SharingStatus'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeviceTags($value)
    {
        $this->data['DeviceTags'] = $value;
        $this->options['form_params']['DeviceTags'] = $value;

        return $this;
    }
}

/**
 * @method string getDeviceAction()
 * @method string getDeviceTags()
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class UpdateUserDevicesStatus extends Rpc
{

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeviceAction($value)
    {
        $this->data['DeviceAction'] = $value;
        $this->options['form_params']['DeviceAction'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeviceTags($value)
    {
        $this->data['DeviceTags'] = $value;
        $this->options['form_params']['DeviceTags'] = $value;

        return $this;
    }
}

/**
 * @method string getUserGroupId()
 * @method string getDescription()
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getModifyType()
 * @method string getAttributes()
 */
class UpdateUserGroup extends Rpc
{

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserGroupId($value)
    {
        $this->data['UserGroupId'] = $value;
        $this->options['form_params']['UserGroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDescription($value)
    {
        $this->data['Description'] = $value;
        $this->options['form_params']['Description'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withModifyType($value)
    {
        $this->data['ModifyType'] = $value;
        $this->options['form_params']['ModifyType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAttributes($value)
    {
        $this->data['Attributes'] = $value;
        $this->options['form_params']['Attributes'] = $value;

        return $this;
    }
}

/**
 * @method string getSaseUserIds()
 * @method $this withSaseUserIds($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class UpdateUsersStatus extends Rpc
{

    /** @var string */
    public $method = 'POST';
}
