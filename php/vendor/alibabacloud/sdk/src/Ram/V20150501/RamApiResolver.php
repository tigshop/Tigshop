<?php

namespace AlibabaCloud\Ram\V20150501;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method GetAccessKeyLastUsed getAccessKeyLastUsed(array $options = [])
 * @method UploadPublicKey uploadPublicKey(array $options = [])
 * @method UpdatePublicKey updatePublicKey(array $options = [])
 * @method ListPublicKeys listPublicKeys(array $options = [])
 * @method DeletePublicKey deletePublicKey(array $options = [])
 * @method GetPublicKey getPublicKey(array $options = [])
 * @method ChangePassword changePassword(array $options = [])
 * @method UpdateRole updateRole(array $options = [])
 * @method SetSecurityPreference setSecurityPreference(array $options = [])
 * @method ListRoles listRoles(array $options = [])
 * @method ListPoliciesForRole listPoliciesForRole(array $options = [])
 * @method GetSecurityPreference getSecurityPreference(array $options = [])
 * @method GetRole getRole(array $options = [])
 * @method DetachPolicyFromRole detachPolicyFromRole(array $options = [])
 * @method DeleteRole deleteRole(array $options = [])
 * @method CreateRole createRole(array $options = [])
 * @method AttachPolicyToRole attachPolicyToRole(array $options = [])
 * @method UnbindMFADevice unbindMFADevice(array $options = [])
 * @method ListVirtualMFADevices listVirtualMFADevices(array $options = [])
 * @method GetUserMFAInfo getUserMFAInfo(array $options = [])
 * @method DeleteVirtualMFADevice deleteVirtualMFADevice(array $options = [])
 * @method CreateVirtualMFADevice createVirtualMFADevice(array $options = [])
 * @method BindMFADevice bindMFADevice(array $options = [])
 * @method UpdateLoginProfile updateLoginProfile(array $options = [])
 * @method GetLoginProfile getLoginProfile(array $options = [])
 * @method DeleteLoginProfile deleteLoginProfile(array $options = [])
 * @method CreateLoginProfile createLoginProfile(array $options = [])
 * @method UpdateUser updateUser(array $options = [])
 * @method ListUsers listUsers(array $options = [])
 * @method GetUser getUser(array $options = [])
 * @method DeleteUser deleteUser(array $options = [])
 * @method CreateUser createUser(array $options = [])
 * @method UpdateAccessKey updateAccessKey(array $options = [])
 * @method ListAccessKeys listAccessKeys(array $options = [])
 * @method DeleteAccessKey deleteAccessKey(array $options = [])
 * @method CreateAccessKey createAccessKey(array $options = [])
 * @method SetPasswordPolicy setPasswordPolicy(array $options = [])
 * @method SetAccountAlias setAccountAlias(array $options = [])
 * @method GetPasswordPolicy getPasswordPolicy(array $options = [])
 * @method GetAccountAlias getAccountAlias(array $options = [])
 * @method ClearAccountAlias clearAccountAlias(array $options = [])
 * @method SetDefaultPolicyVersion setDefaultPolicyVersion(array $options = [])
 * @method ListPolicyVersions listPolicyVersions(array $options = [])
 * @method GetPolicyVersion getPolicyVersion(array $options = [])
 * @method DeletePolicyVersion deletePolicyVersion(array $options = [])
 * @method CreatePolicyVersion createPolicyVersion(array $options = [])
 * @method ListPoliciesForUser listPoliciesForUser(array $options = [])
 * @method ListPoliciesForGroup listPoliciesForGroup(array $options = [])
 * @method ListEntitiesForPolicy listEntitiesForPolicy(array $options = [])
 * @method DetachPolicyFromUser detachPolicyFromUser(array $options = [])
 * @method DetachPolicyFromGroup detachPolicyFromGroup(array $options = [])
 * @method AttachPolicyToUser attachPolicyToUser(array $options = [])
 * @method AttachPolicyToGroup attachPolicyToGroup(array $options = [])
 * @method ListPolicies listPolicies(array $options = [])
 * @method GetPolicy getPolicy(array $options = [])
 * @method DeletePolicy deletePolicy(array $options = [])
 * @method CreatePolicy createPolicy(array $options = [])
 * @method RemoveUserFromGroup removeUserFromGroup(array $options = [])
 * @method ListUsersForGroup listUsersForGroup(array $options = [])
 * @method ListGroupsForUser listGroupsForUser(array $options = [])
 * @method AddUserToGroup addUserToGroup(array $options = [])
 * @method UpdateGroup updateGroup(array $options = [])
 * @method ListGroups listGroups(array $options = [])
 * @method GetGroup getGroup(array $options = [])
 * @method DeleteGroup deleteGroup(array $options = [])
 * @method CreateGroup createGroup(array $options = [])
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

/**
 * @method string getPublicKeySpec()
 * @method $this withPublicKeySpec($value)
 * @method string getUserName()
 * @method $this withUserName($value)
 */
class UploadPublicKey extends Rpc
{
}

/**
 * @method string getUserPublicKeyId()
 * @method $this withUserPublicKeyId($value)
 * @method string getUserName()
 * @method $this withUserName($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class UpdatePublicKey extends Rpc
{
}

/**
 * @method string getUserName()
 * @method $this withUserName($value)
 */
class ListPublicKeys extends Rpc
{
}

/**
 * @method string getUserPublicKeyId()
 * @method $this withUserPublicKeyId($value)
 * @method string getUserName()
 * @method $this withUserName($value)
 */
class DeletePublicKey extends Rpc
{
}

/**
 * @method string getUserPublicKeyId()
 * @method $this withUserPublicKeyId($value)
 * @method string getUserName()
 * @method $this withUserName($value)
 */
class GetPublicKey extends Rpc
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

/**
 * @method string getNewAssumeRolePolicyDocument()
 * @method $this withNewAssumeRolePolicyDocument($value)
 * @method string getRoleName()
 * @method $this withRoleName($value)
 */
class UpdateRole extends Rpc
{
}

/**
 * @method string getAllowUserToManageAccessKeys()
 * @method $this withAllowUserToManageAccessKeys($value)
 * @method string getAllowUserToManageMFADevices()
 * @method $this withAllowUserToManageMFADevices($value)
 * @method string getAllowUserToManagePublicKeys()
 * @method $this withAllowUserToManagePublicKeys($value)
 * @method string getEnableSaveMFATicket()
 * @method $this withEnableSaveMFATicket($value)
 * @method string getLoginNetworkMasks()
 * @method $this withLoginNetworkMasks($value)
 * @method string getAllowUserToChangePassword()
 * @method $this withAllowUserToChangePassword($value)
 * @method string getLoginSessionDuration()
 * @method $this withLoginSessionDuration($value)
 */
class SetSecurityPreference extends Rpc
{
}

/**
 * @method string getMarker()
 * @method $this withMarker($value)
 * @method string getMaxItems()
 * @method $this withMaxItems($value)
 */
class ListRoles extends Rpc
{
}

/**
 * @method string getRoleName()
 * @method $this withRoleName($value)
 */
class ListPoliciesForRole extends Rpc
{
}

class GetSecurityPreference extends Rpc
{
}

/**
 * @method string getRoleName()
 * @method $this withRoleName($value)
 */
class GetRole extends Rpc
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
 * @method string getRoleName()
 * @method $this withRoleName($value)
 */
class DeleteRole extends Rpc
{
}

/**
 * @method string getRoleName()
 * @method $this withRoleName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getAssumeRolePolicyDocument()
 * @method $this withAssumeRolePolicyDocument($value)
 */
class CreateRole extends Rpc
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
 * @method string getUserName()
 * @method $this withUserName($value)
 */
class UnbindMFADevice extends Rpc
{
}

class ListVirtualMFADevices extends Rpc
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
 * @method string getSerialNumber()
 * @method $this withSerialNumber($value)
 */
class DeleteVirtualMFADevice extends Rpc
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
 * @method string getSerialNumber()
 * @method $this withSerialNumber($value)
 * @method string getAuthenticationCode2()
 * @method $this withAuthenticationCode2($value)
 * @method string getAuthenticationCode1()
 * @method $this withAuthenticationCode1($value)
 * @method string getUserName()
 * @method $this withUserName($value)
 */
class BindMFADevice extends Rpc
{
}

/**
 * @method string getPassword()
 * @method $this withPassword($value)
 * @method string getPasswordResetRequired()
 * @method $this withPasswordResetRequired($value)
 * @method string getMFABindRequired()
 * @method $this withMFABindRequired($value)
 * @method string getUserName()
 * @method $this withUserName($value)
 */
class UpdateLoginProfile extends Rpc
{
}

/**
 * @method string getUserName()
 * @method $this withUserName($value)
 */
class GetLoginProfile extends Rpc
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
 * @method string getPassword()
 * @method $this withPassword($value)
 * @method string getPasswordResetRequired()
 * @method $this withPasswordResetRequired($value)
 * @method string getMFABindRequired()
 * @method $this withMFABindRequired($value)
 * @method string getUserName()
 * @method $this withUserName($value)
 */
class CreateLoginProfile extends Rpc
{
}

/**
 * @method string getNewUserName()
 * @method $this withNewUserName($value)
 * @method string getNewDisplayName()
 * @method $this withNewDisplayName($value)
 * @method string getNewMobilePhone()
 * @method $this withNewMobilePhone($value)
 * @method string getNewComments()
 * @method $this withNewComments($value)
 * @method string getNewEmail()
 * @method $this withNewEmail($value)
 * @method string getUserName()
 * @method $this withUserName($value)
 */
class UpdateUser extends Rpc
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
class DeleteUser extends Rpc
{
}

/**
 * @method string getComments()
 * @method $this withComments($value)
 * @method string getDisplayName()
 * @method $this withDisplayName($value)
 * @method string getMobilePhone()
 * @method $this withMobilePhone($value)
 * @method string getEmail()
 * @method $this withEmail($value)
 * @method string getUserName()
 * @method $this withUserName($value)
 */
class CreateUser extends Rpc
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
 * @method string getUserName()
 * @method $this withUserName($value)
 */
class ListAccessKeys extends Rpc
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
 * @method string getUserName()
 * @method $this withUserName($value)
 */
class CreateAccessKey extends Rpc
{
}

/**
 * @method string getRequireNumbers()
 * @method $this withRequireNumbers($value)
 * @method string getPasswordReusePrevention()
 * @method $this withPasswordReusePrevention($value)
 * @method string getRequireUppercaseCharacters()
 * @method $this withRequireUppercaseCharacters($value)
 * @method string getMaxPasswordAge()
 * @method $this withMaxPasswordAge($value)
 * @method string getMaxLoginAttemps()
 * @method $this withMaxLoginAttemps($value)
 * @method string getHardExpiry()
 * @method $this withHardExpiry($value)
 * @method string getMinimumPasswordLength()
 * @method $this withMinimumPasswordLength($value)
 * @method string getRequireLowercaseCharacters()
 * @method $this withRequireLowercaseCharacters($value)
 * @method string getRequireSymbols()
 * @method $this withRequireSymbols($value)
 */
class SetPasswordPolicy extends Rpc
{
}

/**
 * @method string getAccountAlias()
 * @method $this withAccountAlias($value)
 */
class SetAccountAlias extends Rpc
{
}

class GetPasswordPolicy extends Rpc
{
}

class GetAccountAlias extends Rpc
{
}

class ClearAccountAlias extends Rpc
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
 * @method string getPolicyType()
 * @method $this withPolicyType($value)
 * @method string getPolicyName()
 * @method $this withPolicyName($value)
 */
class ListPolicyVersions extends Rpc
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
 * @method string getVersionId()
 * @method $this withVersionId($value)
 * @method string getPolicyName()
 * @method $this withPolicyName($value)
 */
class DeletePolicyVersion extends Rpc
{
}

/**
 * @method string getSetAsDefault()
 * @method $this withSetAsDefault($value)
 * @method string getPolicyName()
 * @method $this withPolicyName($value)
 * @method string getPolicyDocument()
 * @method $this withPolicyDocument($value)
 * @method string getRotateStrategy()
 * @method $this withRotateStrategy($value)
 */
class CreatePolicyVersion extends Rpc
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
 * @method string getGroupName()
 * @method $this withGroupName($value)
 */
class ListPoliciesForGroup extends Rpc
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
 * @method string getPolicyType()
 * @method $this withPolicyType($value)
 * @method string getPolicyName()
 * @method $this withPolicyName($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 */
class DetachPolicyFromGroup extends Rpc
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
 * @method string getPolicyType()
 * @method $this withPolicyType($value)
 * @method string getPolicyName()
 * @method $this withPolicyName($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 */
class AttachPolicyToGroup extends Rpc
{
}

/**
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
 * @method string getPolicyType()
 * @method $this withPolicyType($value)
 * @method string getPolicyName()
 * @method $this withPolicyName($value)
 */
class GetPolicy extends Rpc
{
}

/**
 * @method string getPolicyName()
 * @method $this withPolicyName($value)
 */
class DeletePolicy extends Rpc
{
}

/**
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getPolicyName()
 * @method $this withPolicyName($value)
 * @method string getPolicyDocument()
 * @method $this withPolicyDocument($value)
 */
class CreatePolicy extends Rpc
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
 * @method string getMarker()
 * @method $this withMarker($value)
 * @method string getMaxItems()
 * @method $this withMaxItems($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 */
class ListUsersForGroup extends Rpc
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
 * @method string getGroupName()
 * @method $this withGroupName($value)
 * @method string getUserName()
 * @method $this withUserName($value)
 */
class AddUserToGroup extends Rpc
{
}

/**
 * @method string getNewGroupName()
 * @method $this withNewGroupName($value)
 * @method string getNewComments()
 * @method $this withNewComments($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 */
class UpdateGroup extends Rpc
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
 * @method string getGroupName()
 * @method $this withGroupName($value)
 */
class GetGroup extends Rpc
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
 * @method string getComments()
 * @method $this withComments($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 */
class CreateGroup extends Rpc
{
}
