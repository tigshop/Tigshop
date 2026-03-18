<?php

namespace AlibabaCloud\ResourceManager\V20200331;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AcceptHandshake acceptHandshake(array $options = [])
 * @method AttachControlPolicy attachControlPolicy(array $options = [])
 * @method AttachPolicy attachPolicy(array $options = [])
 * @method BindSecureMobilePhone bindSecureMobilePhone(array $options = [])
 * @method CancelChangeAccountEmail cancelChangeAccountEmail(array $options = [])
 * @method CancelCreateCloudAccount cancelCreateCloudAccount(array $options = [])
 * @method CancelHandshake cancelHandshake(array $options = [])
 * @method CancelPromoteResourceAccount cancelPromoteResourceAccount(array $options = [])
 * @method ChangeAccountEmail changeAccountEmail(array $options = [])
 * @method CheckAccountDelete checkAccountDelete(array $options = [])
 * @method CreateCloudAccount createCloudAccount(array $options = [])
 * @method CreateControlPolicy createControlPolicy(array $options = [])
 * @method CreateFolder createFolder(array $options = [])
 * @method CreatePolicy createPolicy(array $options = [])
 * @method CreatePolicyVersion createPolicyVersion(array $options = [])
 * @method CreateResourceAccount createResourceAccount(array $options = [])
 * @method CreateResourceGroup createResourceGroup(array $options = [])
 * @method CreateRole createRole(array $options = [])
 * @method CreateServiceLinkedRole createServiceLinkedRole(array $options = [])
 * @method DeclineHandshake declineHandshake(array $options = [])
 * @method DeleteAccount deleteAccount(array $options = [])
 * @method DeleteControlPolicy deleteControlPolicy(array $options = [])
 * @method DeleteFolder deleteFolder(array $options = [])
 * @method DeletePolicy deletePolicy(array $options = [])
 * @method DeletePolicyVersion deletePolicyVersion(array $options = [])
 * @method DeleteResourceGroup deleteResourceGroup(array $options = [])
 * @method DeleteRole deleteRole(array $options = [])
 * @method DeleteServiceLinkedRole deleteServiceLinkedRole(array $options = [])
 * @method DeregisterDelegatedAdministrator deregisterDelegatedAdministrator(array $options = [])
 * @method DestroyResourceDirectory destroyResourceDirectory(array $options = [])
 * @method DetachControlPolicy detachControlPolicy(array $options = [])
 * @method DetachPolicy detachPolicy(array $options = [])
 * @method DisableControlPolicy disableControlPolicy(array $options = [])
 * @method EnableControlPolicy enableControlPolicy(array $options = [])
 * @method EnableResourceDirectory enableResourceDirectory(array $options = [])
 * @method GetAccount getAccount(array $options = [])
 * @method GetAccountDeletionCheckResult getAccountDeletionCheckResult(array $options = [])
 * @method GetAccountDeletionStatus getAccountDeletionStatus(array $options = [])
 * @method GetControlPolicy getControlPolicy(array $options = [])
 * @method GetControlPolicyEnablementStatus getControlPolicyEnablementStatus(array $options = [])
 * @method GetFolder getFolder(array $options = [])
 * @method GetHandshake getHandshake(array $options = [])
 * @method GetPayerForAccount getPayerForAccount(array $options = [])
 * @method GetPolicy getPolicy(array $options = [])
 * @method GetPolicyVersion getPolicyVersion(array $options = [])
 * @method GetResourceDirectory getResourceDirectory(array $options = [])
 * @method GetResourceGroup getResourceGroup(array $options = [])
 * @method GetRole getRole(array $options = [])
 * @method GetServiceLinkedRoleDeletionStatus getServiceLinkedRoleDeletionStatus(array $options = [])
 * @method InitResourceDirectory initResourceDirectory(array $options = [])
 * @method InviteAccountToResourceDirectory inviteAccountToResourceDirectory(array $options = [])
 * @method ListAccounts listAccounts(array $options = [])
 * @method ListAccountsForParent listAccountsForParent(array $options = [])
 * @method ListAncestors listAncestors(array $options = [])
 * @method ListControlPolicies listControlPolicies(array $options = [])
 * @method ListControlPolicyAttachmentsForTarget listControlPolicyAttachmentsForTarget(array $options = [])
 * @method ListDelegatedAdministrators listDelegatedAdministrators(array $options = [])
 * @method ListDelegatedServicesForAccount listDelegatedServicesForAccount(array $options = [])
 * @method ListFoldersForParent listFoldersForParent(array $options = [])
 * @method ListHandshakesForAccount listHandshakesForAccount(array $options = [])
 * @method ListHandshakesForResourceDirectory listHandshakesForResourceDirectory(array $options = [])
 * @method ListPolicies listPolicies(array $options = [])
 * @method ListPolicyAttachments listPolicyAttachments(array $options = [])
 * @method ListPolicyVersions listPolicyVersions(array $options = [])
 * @method ListResourceGroups listResourceGroups(array $options = [])
 * @method ListResources listResources(array $options = [])
 * @method ListRoles listRoles(array $options = [])
 * @method ListTagKeys listTagKeys(array $options = [])
 * @method ListTagResources listTagResources(array $options = [])
 * @method ListTagValues listTagValues(array $options = [])
 * @method ListTargetAttachmentsForControlPolicy listTargetAttachmentsForControlPolicy(array $options = [])
 * @method ListTrustedServiceStatus listTrustedServiceStatus(array $options = [])
 * @method MoveAccount moveAccount(array $options = [])
 * @method MoveResources moveResources(array $options = [])
 * @method PromoteResourceAccount promoteResourceAccount(array $options = [])
 * @method RegisterDelegatedAdministrator registerDelegatedAdministrator(array $options = [])
 * @method RemoveCloudAccount removeCloudAccount(array $options = [])
 * @method ResendCreateCloudAccountEmail resendCreateCloudAccountEmail(array $options = [])
 * @method ResendPromoteResourceAccountEmail resendPromoteResourceAccountEmail(array $options = [])
 * @method RetryChangeAccountEmail retryChangeAccountEmail(array $options = [])
 * @method SendVerificationCodeForBindSecureMobilePhone sendVerificationCodeForBindSecureMobilePhone(array $options = [])
 * @method SendVerificationCodeForEnableRD sendVerificationCodeForEnableRD(array $options = [])
 * @method SetDefaultPolicyVersion setDefaultPolicyVersion(array $options = [])
 * @method SetMemberDeletionPermission setMemberDeletionPermission(array $options = [])
 * @method TagResources tagResources(array $options = [])
 * @method UntagResources untagResources(array $options = [])
 * @method UpdateAccount updateAccount(array $options = [])
 * @method UpdateControlPolicy updateControlPolicy(array $options = [])
 * @method UpdateFolder updateFolder(array $options = [])
 * @method UpdateResourceGroup updateResourceGroup(array $options = [])
 * @method UpdateRole updateRole(array $options = [])
 */
class ResourceManagerApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'ResourceManager';

    /** @var string */
    public $version = '2020-03-31';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    protected $scheme = 'https';
}

/**
 * @method string getHandshakeId()
 * @method $this withHandshakeId($value)
 */
class AcceptHandshake extends Rpc
{
}

/**
 * @method string getTargetId()
 * @method $this withTargetId($value)
 * @method string getPolicyId()
 * @method $this withPolicyId($value)
 */
class AttachControlPolicy extends Rpc
{
}

/**
 * @method string getPolicyType()
 * @method $this withPolicyType($value)
 * @method string getPrincipalType()
 * @method $this withPrincipalType($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getPolicyName()
 * @method $this withPolicyName($value)
 * @method string getPrincipalName()
 * @method $this withPrincipalName($value)
 */
class AttachPolicy extends Rpc
{
}

/**
 * @method string getSecureMobilePhone()
 * @method $this withSecureMobilePhone($value)
 * @method string getAccountId()
 * @method $this withAccountId($value)
 * @method string getVerificationCode()
 * @method $this withVerificationCode($value)
 */
class BindSecureMobilePhone extends Rpc
{
}

/**
 * @method string getAccountId()
 * @method $this withAccountId($value)
 */
class CancelChangeAccountEmail extends Rpc
{
}

/**
 * @method string getRecordId()
 * @method $this withRecordId($value)
 */
class CancelCreateCloudAccount extends Rpc
{
}

/**
 * @method string getHandshakeId()
 * @method $this withHandshakeId($value)
 */
class CancelHandshake extends Rpc
{
}

/**
 * @method string getRecordId()
 * @method $this withRecordId($value)
 */
class CancelPromoteResourceAccount extends Rpc
{
}

/**
 * @method string getAccountId()
 * @method $this withAccountId($value)
 * @method string getEmail()
 * @method $this withEmail($value)
 */
class ChangeAccountEmail extends Rpc
{
}

/**
 * @method string getAccountId()
 * @method $this withAccountId($value)
 */
class CheckAccountDelete extends Rpc
{
}

/**
 * @method string getParentFolderId()
 * @method $this withParentFolderId($value)
 * @method string getDisplayName()
 * @method $this withDisplayName($value)
 * @method string getEmail()
 * @method $this withEmail($value)
 * @method string getPayerAccountId()
 * @method $this withPayerAccountId($value)
 */
class CreateCloudAccount extends Rpc
{
}

/**
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getEffectScope()
 * @method $this withEffectScope($value)
 * @method string getPolicyName()
 * @method $this withPolicyName($value)
 * @method string getPolicyDocument()
 * @method $this withPolicyDocument($value)
 */
class CreateControlPolicy extends Rpc
{
}

/**
 * @method string getFolderName()
 * @method $this withFolderName($value)
 * @method string getParentFolderId()
 * @method $this withParentFolderId($value)
 */
class CreateFolder extends Rpc
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
 * @method string getSetAsDefault()
 * @method $this withSetAsDefault($value)
 * @method string getPolicyName()
 * @method $this withPolicyName($value)
 * @method string getPolicyDocument()
 * @method $this withPolicyDocument($value)
 */
class CreatePolicyVersion extends Rpc
{
}

/**
 * @method string getTag()
 * @method $this withTag($value)
 * @method string getAccountNamePrefix()
 * @method $this withAccountNamePrefix($value)
 * @method string getResellAccountType()
 * @method $this withResellAccountType($value)
 * @method string getParentFolderId()
 * @method $this withParentFolderId($value)
 * @method string getDisplayName()
 * @method $this withDisplayName($value)
 * @method string getPayerAccountId()
 * @method $this withPayerAccountId($value)
 */
class CreateResourceAccount extends Rpc
{
}

/**
 * @method string getDisplayName()
 * @method $this withDisplayName($value)
 * @method string getName()
 * @method $this withName($value)
 */
class CreateResourceGroup extends Rpc
{
}

/**
 * @method string getMaxSessionDuration()
 * @method $this withMaxSessionDuration($value)
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
 * @method string getCustomSuffix()
 * @method $this withCustomSuffix($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getServiceName()
 * @method $this withServiceName($value)
 */
class CreateServiceLinkedRole extends Rpc
{
}

/**
 * @method string getHandshakeId()
 * @method $this withHandshakeId($value)
 */
class DeclineHandshake extends Rpc
{
}

/**
 * @method string getAbandonableCheckId()
 * @method $this withAbandonableCheckId($value)
 * @method string getAccountId()
 * @method $this withAccountId($value)
 */
class DeleteAccount extends Rpc
{
}

/**
 * @method string getPolicyId()
 * @method $this withPolicyId($value)
 */
class DeleteControlPolicy extends Rpc
{
}

/**
 * @method string getFolderId()
 * @method $this withFolderId($value)
 */
class DeleteFolder extends Rpc
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
 * @method string getVersionId()
 * @method $this withVersionId($value)
 * @method string getPolicyName()
 * @method $this withPolicyName($value)
 */
class DeletePolicyVersion extends Rpc
{
}

/**
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 */
class DeleteResourceGroup extends Rpc
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
 */
class DeleteServiceLinkedRole extends Rpc
{

    /** @var string */
    public $scheme = 'http';
}

/**
 * @method string getAccountId()
 * @method $this withAccountId($value)
 * @method string getServicePrincipal()
 * @method $this withServicePrincipal($value)
 */
class DeregisterDelegatedAdministrator extends Rpc
{

    /** @var string */
    public $scheme = 'http';
}

class DestroyResourceDirectory extends Rpc
{
}

/**
 * @method string getTargetId()
 * @method $this withTargetId($value)
 * @method string getPolicyId()
 * @method $this withPolicyId($value)
 */
class DetachControlPolicy extends Rpc
{
}

/**
 * @method string getPolicyType()
 * @method $this withPolicyType($value)
 * @method string getPrincipalType()
 * @method $this withPrincipalType($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getPolicyName()
 * @method $this withPolicyName($value)
 * @method string getPrincipalName()
 * @method $this withPrincipalName($value)
 */
class DetachPolicy extends Rpc
{
}

class DisableControlPolicy extends Rpc
{
}

class EnableControlPolicy extends Rpc
{
}

/**
 * @method string getEnableMode()
 * @method $this withEnableMode($value)
 * @method string getMASecureMobilePhone()
 * @method $this withMASecureMobilePhone($value)
 * @method string getMAName()
 * @method $this withMAName($value)
 * @method string getVerificationCode()
 * @method $this withVerificationCode($value)
 */
class EnableResourceDirectory extends Rpc
{
}

/**
 * @method string getAccountId()
 * @method $this withAccountId($value)
 * @method string getIncludeTags()
 * @method $this withIncludeTags($value)
 */
class GetAccount extends Rpc
{
}

/**
 * @method string getAccountId()
 * @method $this withAccountId($value)
 */
class GetAccountDeletionCheckResult extends Rpc
{
}

/**
 * @method string getAccountId()
 * @method $this withAccountId($value)
 */
class GetAccountDeletionStatus extends Rpc
{
}

/**
 * @method string getLanguage()
 * @method $this withLanguage($value)
 * @method string getPolicyId()
 * @method $this withPolicyId($value)
 */
class GetControlPolicy extends Rpc
{
}

class GetControlPolicyEnablementStatus extends Rpc
{
}

/**
 * @method string getFolderId()
 * @method $this withFolderId($value)
 */
class GetFolder extends Rpc
{
}

/**
 * @method string getHandshakeId()
 * @method $this withHandshakeId($value)
 */
class GetHandshake extends Rpc
{
}

/**
 * @method string getAccountId()
 * @method $this withAccountId($value)
 */
class GetPayerForAccount extends Rpc
{
}

/**
 * @method string getPolicyType()
 * @method $this withPolicyType($value)
 * @method string getLanguage()
 * @method $this withLanguage($value)
 * @method string getPolicyName()
 * @method $this withPolicyName($value)
 */
class GetPolicy extends Rpc
{
}

/**
 * @method string getPolicyType()
 * @method $this withPolicyType($value)
 * @method string getVersionId()
 * @method $this withVersionId($value)
 * @method string getPolicyName()
 * @method $this withPolicyName($value)
 */
class GetPolicyVersion extends Rpc
{
}

class GetResourceDirectory extends Rpc
{
}

/**
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getIncludeTags()
 * @method $this withIncludeTags($value)
 */
class GetResourceGroup extends Rpc
{
}

/**
 * @method string getRoleName()
 * @method $this withRoleName($value)
 * @method string getLanguage()
 * @method $this withLanguage($value)
 */
class GetRole extends Rpc
{
}

/**
 * @method string getDeletionTaskId()
 * @method $this withDeletionTaskId($value)
 */
class GetServiceLinkedRoleDeletionStatus extends Rpc
{

    /** @var string */
    public $scheme = 'http';
}

class InitResourceDirectory extends Rpc
{
}

/**
 * @method string getNote()
 * @method $this withNote($value)
 * @method string getTargetType()
 * @method $this withTargetType($value)
 * @method string getTag()
 * @method $this withTag($value)
 * @method string getTargetEntity()
 * @method $this withTargetEntity($value)
 */
class InviteAccountToResourceDirectory extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getIncludeTags()
 * @method $this withIncludeTags($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getTag()
 * @method $this withTag($value)
 */
class ListAccounts extends Rpc
{
}

/**
 * @method string getQueryKeyword()
 * @method $this withQueryKeyword($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getParentFolderId()
 * @method $this withParentFolderId($value)
 * @method string getIncludeTags()
 * @method $this withIncludeTags($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getTag()
 * @method $this withTag($value)
 */
class ListAccountsForParent extends Rpc
{
}

/**
 * @method string getChildId()
 * @method $this withChildId($value)
 */
class ListAncestors extends Rpc
{
}

/**
 * @method string getPolicyType()
 * @method $this withPolicyType($value)
 * @method string getLanguage()
 * @method $this withLanguage($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListControlPolicies extends Rpc
{
}

/**
 * @method string getTargetId()
 * @method $this withTargetId($value)
 * @method string getLanguage()
 * @method $this withLanguage($value)
 */
class ListControlPolicyAttachmentsForTarget extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getServicePrincipal()
 * @method $this withServicePrincipal($value)
 */
class ListDelegatedAdministrators extends Rpc
{

    /** @var string */
    public $scheme = 'http';
}

/**
 * @method string getAccountId()
 * @method $this withAccountId($value)
 */
class ListDelegatedServicesForAccount extends Rpc
{

    /** @var string */
    public $scheme = 'http';
}

/**
 * @method string getQueryKeyword()
 * @method $this withQueryKeyword($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getParentFolderId()
 * @method $this withParentFolderId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListFoldersForParent extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListHandshakesForAccount extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListHandshakesForResourceDirectory extends Rpc
{
}

/**
 * @method string getPolicyType()
 * @method $this withPolicyType($value)
 * @method string getLanguage()
 * @method $this withLanguage($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListPolicies extends Rpc
{
}

/**
 * @method string getLanguage()
 * @method $this withLanguage($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPolicyType()
 * @method $this withPolicyType($value)
 * @method string getPrincipalType()
 * @method $this withPrincipalType($value)
 * @method string getPolicyName()
 * @method $this withPolicyName($value)
 * @method string getPrincipalName()
 * @method $this withPrincipalName($value)
 */
class ListPolicyAttachments extends Rpc
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
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getTag()
 * @method $this withTag($value)
 * @method string getResourceGroupIds()
 * @method $this withResourceGroupIds($value)
 * @method string getIncludeTags()
 * @method $this withIncludeTags($value)
 * @method string getDisplayName()
 * @method $this withDisplayName($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ListResourceGroups extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getResourceTypes()
 * @method $this withResourceTypes($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getService()
 * @method $this withService($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 * @method string getResourceIds()
 * @method $this withResourceIds($value)
 */
class ListResources extends Rpc
{
}

/**
 * @method string getLanguage()
 * @method $this withLanguage($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListRoles extends Rpc
{
}

/**
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getKeyFilter()
 * @method $this withKeyFilter($value)
 */
class ListTagKeys extends Rpc
{
}

/**
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getTag()
 * @method $this withTag($value)
 */
class ListTagResources extends Rpc
{
}

/**
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getValueFilter()
 * @method $this withValueFilter($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getTagKey()
 * @method $this withTagKey($value)
 */
class ListTagValues extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPolicyId()
 * @method $this withPolicyId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListTargetAttachmentsForControlPolicy extends Rpc
{
}

/**
 * @method string getAdminAccountId()
 * @method $this withAdminAccountId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListTrustedServiceStatus extends Rpc
{
}

/**
 * @method string getAccountId()
 * @method $this withAccountId($value)
 * @method string getDestinationFolderId()
 * @method $this withDestinationFolderId($value)
 */
class MoveAccount extends Rpc
{
}

/**
 * @method string getResources()
 * @method $this withResources($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 */
class MoveResources extends Rpc
{

    /** @var string */
    public $scheme = 'http';
}

/**
 * @method string getAccountId()
 * @method $this withAccountId($value)
 * @method string getEmail()
 * @method $this withEmail($value)
 */
class PromoteResourceAccount extends Rpc
{
}

/**
 * @method string getAccountId()
 * @method $this withAccountId($value)
 * @method string getServicePrincipal()
 * @method $this withServicePrincipal($value)
 */
class RegisterDelegatedAdministrator extends Rpc
{

    /** @var string */
    public $scheme = 'http';
}

/**
 * @method string getAccountId()
 * @method $this withAccountId($value)
 */
class RemoveCloudAccount extends Rpc
{
}

/**
 * @method string getRecordId()
 * @method $this withRecordId($value)
 */
class ResendCreateCloudAccountEmail extends Rpc
{
}

/**
 * @method string getRecordId()
 * @method $this withRecordId($value)
 */
class ResendPromoteResourceAccountEmail extends Rpc
{
}

/**
 * @method string getAccountId()
 * @method $this withAccountId($value)
 */
class RetryChangeAccountEmail extends Rpc
{
}

/**
 * @method string getSecureMobilePhone()
 * @method $this withSecureMobilePhone($value)
 * @method string getAccountId()
 * @method $this withAccountId($value)
 */
class SendVerificationCodeForBindSecureMobilePhone extends Rpc
{
}

/**
 * @method string getSecureMobilePhone()
 * @method $this withSecureMobilePhone($value)
 */
class SendVerificationCodeForEnableRD extends Rpc
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
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class SetMemberDeletionPermission extends Rpc
{
}

/**
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getTag()
 * @method $this withTag($value)
 */
class TagResources extends Rpc
{
}

/**
 * @method string getAll()
 * @method $this withAll($value)
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getTagKey()
 * @method $this withTagKey($value)
 */
class UntagResources extends Rpc
{
}

/**
 * @method string getNewDisplayName()
 * @method $this withNewDisplayName($value)
 * @method string getNewAccountType()
 * @method $this withNewAccountType($value)
 * @method string getAccountId()
 * @method $this withAccountId($value)
 */
class UpdateAccount extends Rpc
{
}

/**
 * @method string getNewPolicyName()
 * @method $this withNewPolicyName($value)
 * @method string getPolicyId()
 * @method $this withPolicyId($value)
 * @method string getNewPolicyDocument()
 * @method $this withNewPolicyDocument($value)
 * @method string getNewDescription()
 * @method $this withNewDescription($value)
 */
class UpdateControlPolicy extends Rpc
{
}

/**
 * @method string getFolderId()
 * @method $this withFolderId($value)
 * @method string getNewFolderName()
 * @method $this withNewFolderName($value)
 */
class UpdateFolder extends Rpc
{
}

/**
 * @method string getNewDisplayName()
 * @method $this withNewDisplayName($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 */
class UpdateResourceGroup extends Rpc
{
}

/**
 * @method string getNewAssumeRolePolicyDocument()
 * @method $this withNewAssumeRolePolicyDocument($value)
 * @method string getRoleName()
 * @method $this withRoleName($value)
 * @method string getNewMaxSessionDuration()
 * @method $this withNewMaxSessionDuration($value)
 * @method string getNewDescription()
 * @method $this withNewDescription($value)
 */
class UpdateRole extends Rpc
{
}
