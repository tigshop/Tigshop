<?php

namespace AlibabaCloud\Ram\V20150501;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AddUserToGroup addUserToGroup(array $options = [])
 * @method AttachPolicyToGroup attachPolicyToGroup(array $options = [])
 * @method AttachPolicyToRole attachPolicyToRole(array $options = [])
 * @method AttachPolicyToUser attachPolicyToUser(array $options = [])
 * @method BindMFADevice bindMFADevice(array $options = [])
 * @method ChangePassword changePassword(array $options = [])
 * @method ClearAccountAlias clearAccountAlias(array $options = [])
 * @method CreateAccessKey createAccessKey(array $options = [])
 * @method CreateGroup createGroup(array $options = [])
 * @method CreateLoginProfile createLoginProfile(array $options = [])
 * @method CreatePolicy createPolicy(array $options = [])
 * @method CreatePolicyVersion createPolicyVersion(array $options = [])
 * @method CreateRole createRole(array $options = [])
 * @method CreateUser createUser(array $options = [])
 * @method CreateVirtualMFADevice createVirtualMFADevice(array $options = [])
 * @method DecodeDiagnosticMessage decodeDiagnosticMessage(array $options = [])
 * @method DeleteAccessKey deleteAccessKey(array $options = [])
 * @method DeleteGroup deleteGroup(array $options = [])
 * @method DeleteLoginProfile deleteLoginProfile(array $options = [])
 * @method DeletePolicy deletePolicy(array $options = [])
 * @method DeletePolicyVersion deletePolicyVersion(array $options = [])
 * @method DeleteRole deleteRole(array $options = [])
 * @method DeleteUser deleteUser(array $options = [])
 * @method DeleteVirtualMFADevice deleteVirtualMFADevice(array $options = [])
 * @method DetachPolicyFromGroup detachPolicyFromGroup(array $options = [])
 * @method DetachPolicyFromRole detachPolicyFromRole(array $options = [])
 * @method DetachPolicyFromUser detachPolicyFromUser(array $options = [])
 * @method GetAccessKeyLastUsed getAccessKeyLastUsed(array $options = [])
 * @method GetAccountAlias getAccountAlias(array $options = [])
 * @method GetGroup getGroup(array $options = [])
 * @method GetLoginProfile getLoginProfile(array $options = [])
 * @method GetPasswordPolicy getPasswordPolicy(array $options = [])
 * @method GetPolicy getPolicy(array $options = [])
 * @method GetPolicyVersion getPolicyVersion(array $options = [])
 * @method GetRole getRole(array $options = [])
 * @method GetSecurityPreference getSecurityPreference(array $options = [])
 * @method GetUser getUser(array $options = [])
 * @method GetUserMFAInfo getUserMFAInfo(array $options = [])
 * @method ListAccessKeys listAccessKeys(array $options = [])
 * @method ListEntitiesForPolicy listEntitiesForPolicy(array $options = [])
 * @method ListGroups listGroups(array $options = [])
 * @method ListGroupsForUser listGroupsForUser(array $options = [])
 * @method ListPolicies listPolicies(array $options = [])
 * @method ListPoliciesForGroup listPoliciesForGroup(array $options = [])
 * @method ListPoliciesForRole listPoliciesForRole(array $options = [])
 * @method ListPoliciesForUser listPoliciesForUser(array $options = [])
 * @method ListPolicyVersions listPolicyVersions(array $options = [])
 * @method ListRoles listRoles(array $options = [])
 * @method ListTagResources listTagResources(array $options = [])
 * @method ListUsers listUsers(array $options = [])
 * @method ListUsersForGroup listUsersForGroup(array $options = [])
 * @method ListVirtualMFADevices listVirtualMFADevices(array $options = [])
 * @method RemoveUserFromGroup removeUserFromGroup(array $options = [])
 * @method SetAccountAlias setAccountAlias(array $options = [])
 * @method SetDefaultPolicyVersion setDefaultPolicyVersion(array $options = [])
 * @method SetPasswordPolicy setPasswordPolicy(array $options = [])
 * @method SetSecurityPreference setSecurityPreference(array $options = [])
 * @method TagResources tagResources(array $options = [])
 * @method UnbindMFADevice unbindMFADevice(array $options = [])
 * @method UntagResources untagResources(array $options = [])
 * @method UpdateAccessKey updateAccessKey(array $options = [])
 * @method UpdateGroup updateGroup(array $options = [])
 * @method UpdateLoginProfile updateLoginProfile(array $options = [])
 * @method UpdatePolicyDescription updatePolicyDescription(array $options = [])
 * @method UpdateRole updateRole(array $options = [])
 * @method UpdateUser updateUser(array $options = [])
 */
class RamApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'Ram';

    /** @var string */
    public $version = '2015-05-01';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    protected $scheme = 'https';

    /** @var string */
    public $serviceCode = 'ram';
}

/**
 * @method string getGroupName()
 * @method $this withGroupName($value)
 * @method string getUserName()
 * @method $this withUserName($value)
 */
class AddUserToGroup extends Rpc
{
}

/**
 * @method string getPolicyType()
 * @method $this withPolicyType($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 * @method string getPolicyName()
 * @method $this withPolicyName($value)
 */
class AttachPolicyToGroup extends Rpc
{
}

/**
 * @method string getPolicyType()
 * @method $this withPolicyType($value)
 * @method string getRoleName()
 * @method $this withRoleName($value)
 * @method string getPolicyName()
 * @method $this withPolicyName($value)
 */
class AttachPolicyToRole extends Rpc
{
}

/**
 * @method string getPolicyType()
 * @method $this withPolicyType($value)
 * @method string getPolicyName()
 * @method $this withPolicyName($value)
 * @method string getUserName()
 * @method $this withUserName($value)
 */
class AttachPolicyToUser extends Rpc
{
}

/**
 * @method string getAuthenticationCode2()
 * @method $this withAuthenticationCode2($value)
 * @method string getAuthenticationCode1()
 * @method $this withAuthenticationCode1($value)
 * @method string getSerialNumber()
 * @method $this withSerialNumber($value)
 * @method string getUserName()
 * @method $this withUserName($value)
 */
class BindMFADevice extends Rpc
{
}

/**
 * @method string getOldPassword()
 * @method $this withOldPassword($value)
 * @method string getNewPassword()
 * @method $this withNewPassword($value)
 */
class ChangePassword extends Rpc
{
}

class ClearAccountAlias extends Rpc
{
}

/**
 * @method string getUserName()
 * @method $this withUserName($value)
 */
class CreateAccessKey extends Rpc
{
}

/**
 * @method string getComments()
 * @method $this withComments($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 */
class CreateGroup extends Rpc
{
}

/**
 * @method string getPassword()
 * @method $this withPassword($value)
 * @method string getMFABindRequired()
 * @method $this withMFABindRequired($value)
 * @method string getPasswordResetRequired()
 * @method $this withPasswordResetRequired($value)
 * @method string getUserName()
 * @method $this withUserName($value)
 */
class CreateLoginProfile extends Rpc
{
}

/**
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getTag()
 * @method $this withTag($value)
 * @method string getPolicyName()
 * @method $this withPolicyName($value)
 * @method string getPolicyDocument()
 * @method $this withPolicyDocument($value)
 */
class CreatePolicy extends Rpc
{
}

/**
 * @method string getSetAsDefault()
 * @method $this withSetAsDefault($value)
 * @method string getRotateStrategy()
 * @method $this withRotateStrategy($value)
 * @method string getPolicyName()
 * @method $this withPolicyName($value)
 * @method string getPolicyDocument()
 * @method $this withPolicyDocument($value)
 */
class CreatePolicyVersion extends Rpc
{
}

/**
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getAssumeRolePolicyDocument()
 * @method $this withAssumeRolePolicyDocument($value)
 * @method string getTag()
 * @method $this withTag($value)
 * @method string getMaxSessionDuration()
 * @method $this withMaxSessionDuration($value)
 * @method string getRoleName()
 * @method $this withRoleName($value)
 */
class CreateRole extends Rpc
{
}

/**
 * @method string getMobilePhone()
 * @method $this withMobilePhone($value)
 * @method string getEmail()
 * @method $this withEmail($value)
 * @method string getComments()
 * @method $this withComments($value)
 * @method string getDisplayName()
 * @method $this withDisplayName($value)
 * @method string getUserName()
 * @method $this withUserName($value)
 */
class CreateUser extends Rpc
{
}

/**
 * @method string getVirtualMFADeviceName()
 * @method $this withVirtualMFADeviceName($value)
 */
class CreateVirtualMFADevice extends Rpc
{
}

/**
 * @method string getEncodedDiagnosticMessage()
 * @method $this withEncodedDiagnosticMessage($value)
 */
class DecodeDiagnosticMessage extends Rpc
{
}

/**
 * @method string getUserAccessKeyId()
 * @method $this withUserAccessKeyId($value)
 * @method string getUserName()
 * @method $this withUserName($value)
 */
class DeleteAccessKey extends Rpc
{
}

/**
 * @method string getGroupName()
 * @method $this withGroupName($value)
 */
class DeleteGroup extends Rpc
{
}

/**
 * @method string getUserName()
 * @method $this withUserName($value)
 */
class DeleteLoginProfile extends Rpc
{
}

/**
 * @method string getCascadingDelete()
 * @method $this withCascadingDelete($value)
 * @method string getPolicyName()
 * @method $this withPolicyName($value)
 */
class DeletePolicy extends Rpc
{
}

/**
 * @method string getVersionId()
 * @method $this withVersionId($value)
 * @method string getPolicyName()
 * @method $this withPolicyName($value)
 */
class DeletePolicyVersion extends Rpc
{
}

/**
 * @method string getRoleName()
 * @method $this withRoleName($value)
 */
class DeleteRole extends Rpc
{
}

/**
 * @method string getUserName()
 * @method $this withUserName($value)
 */
class DeleteUser extends Rpc
{
}

/**
 * @method string getSerialNumber()
 * @method $this withSerialNumber($value)
 */
class DeleteVirtualMFADevice extends Rpc
{
}

/**
 * @method string getPolicyType()
 * @method $this withPolicyType($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 * @method string getPolicyName()
 * @method $this withPolicyName($value)
 */
class DetachPolicyFromGroup extends Rpc
{
}

/**
 * @method string getPolicyType()
 * @method $this withPolicyType($value)
 * @method string getRoleName()
 * @method $this withRoleName($value)
 * @method string getPolicyName()
 * @method $this withPolicyName($value)
 */
class DetachPolicyFromRole extends Rpc
{
}

/**
 * @method string getPolicyType()
 * @method $this withPolicyType($value)
 * @method string getPolicyName()
 * @method $this withPolicyName($value)
 * @method string getUserName()
 * @method $this withUserName($value)
 */
class DetachPolicyFromUser extends Rpc
{
}

/**
 * @method string getUserAccessKeyId()
 * @method $this withUserAccessKeyId($value)
 * @method string getUserName()
 * @method $this withUserName($value)
 */
class GetAccessKeyLastUsed extends Rpc
{
}

class GetAccountAlias extends Rpc
{
}

/**
 * @method string getGroupName()
 * @method $this withGroupName($value)
 */
class GetGroup extends Rpc
{
}

/**
 * @method string getUserName()
 * @method $this withUserName($value)
 */
class GetLoginProfile extends Rpc
{
}

class GetPasswordPolicy extends Rpc
{
}

/**
 * @method string getPolicyType()
 * @method $this withPolicyType($value)
 * @method string getPolicyName()
 * @method $this withPolicyName($value)
 */
class GetPolicy extends Rpc
{
}

/**
 * @method string getVersionId()
 * @method $this withVersionId($value)
 * @method string getPolicyType()
 * @method $this withPolicyType($value)
 * @method string getPolicyName()
 * @method $this withPolicyName($value)
 */
class GetPolicyVersion extends Rpc
{
}

/**
 * @method string getRoleName()
 * @method $this withRoleName($value)
 */
class GetRole extends Rpc
{
}

class GetSecurityPreference extends Rpc
{
}

/**
 * @method string getUserName()
 * @method $this withUserName($value)
 */
class GetUser extends Rpc
{
}

/**
 * @method string getUserName()
 * @method $this withUserName($value)
 */
class GetUserMFAInfo extends Rpc
{
}

/**
 * @method string getUserName()
 * @method $this withUserName($value)
 */
class ListAccessKeys extends Rpc
{
}

/**
 * @method string getPolicyType()
 * @method $this withPolicyType($value)
 * @method string getPolicyName()
 * @method $this withPolicyName($value)
 */
class ListEntitiesForPolicy extends Rpc
{
}

/**
 * @method string getMarker()
 * @method $this withMarker($value)
 * @method string getMaxItems()
 * @method $this withMaxItems($value)
 */
class ListGroups extends Rpc
{
}

/**
 * @method string getUserName()
 * @method $this withUserName($value)
 */
class ListGroupsForUser extends Rpc
{
}

/**
 * @method string getLanguage()
 * @method $this withLanguage($value)
 * @method string getTag()
 * @method $this withTag($value)
 * @method string getPolicyType()
 * @method $this withPolicyType($value)
 * @method string getMarker()
 * @method $this withMarker($value)
 * @method string getMaxItems()
 * @method $this withMaxItems($value)
 */
class ListPolicies extends Rpc
{
}

/**
 * @method string getGroupName()
 * @method $this withGroupName($value)
 */
class ListPoliciesForGroup extends Rpc
{
}

/**
 * @method string getRoleName()
 * @method $this withRoleName($value)
 */
class ListPoliciesForRole extends Rpc
{
}

/**
 * @method string getUserName()
 * @method $this withUserName($value)
 */
class ListPoliciesForUser extends Rpc
{
}

/**
 * @method string getPolicyType()
 * @method $this withPolicyType($value)
 * @method string getPolicyName()
 * @method $this withPolicyName($value)
 */
class ListPolicyVersions extends Rpc
{
}

/**
 * @method string getTag()
 * @method $this withTag($value)
 * @method string getMarker()
 * @method $this withMarker($value)
 * @method string getMaxItems()
 * @method $this withMaxItems($value)
 */
class ListRoles extends Rpc
{
}

/**
 * @method string getResourceNames()
 * @method $this withResourceNames($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getTag()
 * @method $this withTag($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 */
class ListTagResources extends Rpc
{
}

/**
 * @method string getMarker()
 * @method $this withMarker($value)
 * @method string getMaxItems()
 * @method $this withMaxItems($value)
 */
class ListUsers extends Rpc
{
}

/**
 * @method string getGroupName()
 * @method $this withGroupName($value)
 * @method string getMarker()
 * @method $this withMarker($value)
 * @method string getMaxItems()
 * @method $this withMaxItems($value)
 */
class ListUsersForGroup extends Rpc
{
}

class ListVirtualMFADevices extends Rpc
{
}

/**
 * @method string getGroupName()
 * @method $this withGroupName($value)
 * @method string getUserName()
 * @method $this withUserName($value)
 */
class RemoveUserFromGroup extends Rpc
{
}

/**
 * @method string getAccountAlias()
 * @method $this withAccountAlias($value)
 */
class SetAccountAlias extends Rpc
{
}

/**
 * @method string getVersionId()
 * @method $this withVersionId($value)
 * @method string getPolicyName()
 * @method $this withPolicyName($value)
 */
class SetDefaultPolicyVersion extends Rpc
{
}

/**
 * @method string getPasswordReusePrevention()
 * @method $this withPasswordReusePrevention($value)
 * @method string getRequireUppercaseCharacters()
 * @method $this withRequireUppercaseCharacters($value)
 * @method string getMinimumPasswordLength()
 * @method $this withMinimumPasswordLength($value)
 * @method string getRequireNumbers()
 * @method $this withRequireNumbers($value)
 * @method string getRequireLowercaseCharacters()
 * @method $this withRequireLowercaseCharacters($value)
 * @method string getMaxPasswordAge()
 * @method $this withMaxPasswordAge($value)
 * @method string getMaxLoginAttemps()
 * @method $this withMaxLoginAttemps($value)
 * @method string getHardExpiry()
 * @method $this withHardExpiry($value)
 * @method string getRequireSymbols()
 * @method $this withRequireSymbols($value)
 */
class SetPasswordPolicy extends Rpc
{
}

/**
 * @method string getEnableSaveMFATicket()
 * @method $this withEnableSaveMFATicket($value)
 * @method string getLoginNetworkMasks()
 * @method $this withLoginNetworkMasks($value)
 * @method string getAllowUserToChangePassword()
 * @method $this withAllowUserToChangePassword($value)
 * @method string getAllowUserToManagePublicKeys()
 * @method $this withAllowUserToManagePublicKeys($value)
 * @method string getLoginSessionDuration()
 * @method $this withLoginSessionDuration($value)
 * @method string getAllowUserToManageAccessKeys()
 * @method $this withAllowUserToManageAccessKeys($value)
 * @method string getAllowUserToManageMFADevices()
 * @method $this withAllowUserToManageMFADevices($value)
 */
class SetSecurityPreference extends Rpc
{
}

/**
 * @method string getResourceNames()
 * @method $this withResourceNames($value)
 * @method string getTag()
 * @method $this withTag($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 */
class TagResources extends Rpc
{
}

/**
 * @method string getUserName()
 * @method $this withUserName($value)
 */
class UnbindMFADevice extends Rpc
{
}

/**
 * @method string getResourceNames()
 * @method $this withResourceNames($value)
 * @method string getAll()
 * @method $this withAll($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getTagKeys()
 * @method $this withTagKeys($value)
 */
class UntagResources extends Rpc
{
}

/**
 * @method string getUserAccessKeyId()
 * @method $this withUserAccessKeyId($value)
 * @method string getUserName()
 * @method $this withUserName($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class UpdateAccessKey extends Rpc
{
}

/**
 * @method string getGroupName()
 * @method $this withGroupName($value)
 * @method string getNewGroupName()
 * @method $this withNewGroupName($value)
 * @method string getNewComments()
 * @method $this withNewComments($value)
 */
class UpdateGroup extends Rpc
{
}

/**
 * @method string getPassword()
 * @method $this withPassword($value)
 * @method string getMFABindRequired()
 * @method $this withMFABindRequired($value)
 * @method string getPasswordResetRequired()
 * @method $this withPasswordResetRequired($value)
 * @method string getUserName()
 * @method $this withUserName($value)
 */
class UpdateLoginProfile extends Rpc
{
}

/**
 * @method string getPolicyName()
 * @method $this withPolicyName($value)
 * @method string getNewDescription()
 * @method $this withNewDescription($value)
 */
class UpdatePolicyDescription extends Rpc
{
}

/**
 * @method string getNewMaxSessionDuration()
 * @method $this withNewMaxSessionDuration($value)
 * @method string getNewDescription()
 * @method $this withNewDescription($value)
 * @method string getNewAssumeRolePolicyDocument()
 * @method $this withNewAssumeRolePolicyDocument($value)
 * @method string getRoleName()
 * @method $this withRoleName($value)
 */
class UpdateRole extends Rpc
{
}

/**
 * @method string getNewUserName()
 * @method $this withNewUserName($value)
 * @method string getNewMobilePhone()
 * @method $this withNewMobilePhone($value)
 * @method string getNewEmail()
 * @method $this withNewEmail($value)
 * @method string getNewDisplayName()
 * @method $this withNewDisplayName($value)
 * @method string getNewComments()
 * @method $this withNewComments($value)
 * @method string getUserName()
 * @method $this withUserName($value)
 */
class UpdateUser extends Rpc
{
}
