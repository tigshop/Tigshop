<?php

namespace AlibabaCloud\Ims\V20190815;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AddClientIdToOIDCProvider addClientIdToOIDCProvider(array $options = [])
 * @method AddFingerprintToOIDCProvider addFingerprintToOIDCProvider(array $options = [])
 * @method AddUserToGroup addUserToGroup(array $options = [])
 * @method BindMFADevice bindMFADevice(array $options = [])
 * @method ChangePassword changePassword(array $options = [])
 * @method CreateAccessKey createAccessKey(array $options = [])
 * @method CreateApplication createApplication(array $options = [])
 * @method CreateAppSecret createAppSecret(array $options = [])
 * @method CreateGroup createGroup(array $options = [])
 * @method CreateLoginProfile createLoginProfile(array $options = [])
 * @method CreateOIDCProvider createOIDCProvider(array $options = [])
 * @method CreateSAMLProvider createSAMLProvider(array $options = [])
 * @method CreateUser createUser(array $options = [])
 * @method CreateVirtualMFADevice createVirtualMFADevice(array $options = [])
 * @method DeleteAccessKey deleteAccessKey(array $options = [])
 * @method DeleteApplication deleteApplication(array $options = [])
 * @method DeleteAppSecret deleteAppSecret(array $options = [])
 * @method DeleteGroup deleteGroup(array $options = [])
 * @method DeleteLoginProfile deleteLoginProfile(array $options = [])
 * @method DeleteOIDCProvider deleteOIDCProvider(array $options = [])
 * @method DeleteSAMLProvider deleteSAMLProvider(array $options = [])
 * @method DeleteUser deleteUser(array $options = [])
 * @method DeleteVirtualMFADevice deleteVirtualMFADevice(array $options = [])
 * @method DisableVirtualMFA disableVirtualMFA(array $options = [])
 * @method GenerateCredentialReport generateCredentialReport(array $options = [])
 * @method GetAccessKeyLastUsed getAccessKeyLastUsed(array $options = [])
 * @method GetAccountMFAInfo getAccountMFAInfo(array $options = [])
 * @method GetAccountSecurityPracticeReport getAccountSecurityPracticeReport(array $options = [])
 * @method GetAccountSummary getAccountSummary(array $options = [])
 * @method GetApplication getApplication(array $options = [])
 * @method GetAppSecret getAppSecret(array $options = [])
 * @method GetCredentialReport getCredentialReport(array $options = [])
 * @method GetDefaultDomain getDefaultDomain(array $options = [])
 * @method GetGroup getGroup(array $options = [])
 * @method GetLoginProfile getLoginProfile(array $options = [])
 * @method GetOIDCProvider getOIDCProvider(array $options = [])
 * @method GetPasswordPolicy getPasswordPolicy(array $options = [])
 * @method GetSAMLProvider getSAMLProvider(array $options = [])
 * @method GetSecurityPreference getSecurityPreference(array $options = [])
 * @method GetUser getUser(array $options = [])
 * @method GetUserMFAInfo getUserMFAInfo(array $options = [])
 * @method GetUserSsoSettings getUserSsoSettings(array $options = [])
 * @method GetVerificationInfo getVerificationInfo(array $options = [])
 * @method ListAccessKeys listAccessKeys(array $options = [])
 * @method ListApplications listApplications(array $options = [])
 * @method ListAppSecretIds listAppSecretIds(array $options = [])
 * @method ListGroups listGroups(array $options = [])
 * @method ListGroupsForUser listGroupsForUser(array $options = [])
 * @method ListOIDCProviders listOIDCProviders(array $options = [])
 * @method ListPredefinedScopes listPredefinedScopes(array $options = [])
 * @method ListSAMLProviders listSAMLProviders(array $options = [])
 * @method ListTagResources listTagResources(array $options = [])
 * @method ListUserBasicInfos listUserBasicInfos(array $options = [])
 * @method ListUsers listUsers(array $options = [])
 * @method ListUsersForGroup listUsersForGroup(array $options = [])
 * @method ListVirtualMFADevices listVirtualMFADevices(array $options = [])
 * @method RemoveClientIdFromOIDCProvider removeClientIdFromOIDCProvider(array $options = [])
 * @method RemoveFingerprintFromOIDCProvider removeFingerprintFromOIDCProvider(array $options = [])
 * @method RemoveUserFromGroup removeUserFromGroup(array $options = [])
 * @method SetDefaultDomain setDefaultDomain(array $options = [])
 * @method SetPasswordPolicy setPasswordPolicy(array $options = [])
 * @method SetSecurityPreference setSecurityPreference(array $options = [])
 * @method SetUserSsoSettings setUserSsoSettings(array $options = [])
 * @method TagResources tagResources(array $options = [])
 * @method UnbindMFADevice unbindMFADevice(array $options = [])
 * @method UntagResources untagResources(array $options = [])
 * @method UpdateAccessKey updateAccessKey(array $options = [])
 * @method UpdateApplication updateApplication(array $options = [])
 * @method UpdateGroup updateGroup(array $options = [])
 * @method UpdateLoginProfile updateLoginProfile(array $options = [])
 * @method UpdateOIDCProvider updateOIDCProvider(array $options = [])
 * @method UpdateSAMLProvider updateSAMLProvider(array $options = [])
 * @method UpdateUser updateUser(array $options = [])
 */
class ImsApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'Ims';

    /** @var string */
    public $version = '2019-08-15';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'ims';
}

/**
 * @method string getClientId()
 * @method $this withClientId($value)
 * @method string getAkProxySuffix()
 * @method $this withAkProxySuffix($value)
 * @method string getOIDCProviderName()
 * @method $this withOIDCProviderName($value)
 */
class AddClientIdToOIDCProvider extends Rpc
{
}

/**
 * @method string getAkProxySuffix()
 * @method $this withAkProxySuffix($value)
 * @method string getOIDCProviderName()
 * @method $this withOIDCProviderName($value)
 * @method string getFingerprint()
 * @method $this withFingerprint($value)
 */
class AddFingerprintToOIDCProvider extends Rpc
{
}

/**
 * @method string getAkProxySuffix()
 * @method $this withAkProxySuffix($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 * @method string getUserPrincipalName()
 * @method $this withUserPrincipalName($value)
 * @method string getGroupPrincipalName()
 * @method $this withGroupPrincipalName($value)
 */
class AddUserToGroup extends Rpc
{
}

/**
 * @method string getAkProxySuffix()
 * @method $this withAkProxySuffix($value)
 * @method string getU2fAppId()
 * @method $this withU2fAppId($value)
 * @method string getAuthenticationCode2()
 * @method $this withAuthenticationCode2($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getAuthenticationCode1()
 * @method $this withAuthenticationCode1($value)
 * @method string getU2fPublicKey()
 * @method $this withU2fPublicKey($value)
 * @method string getU2fVersion()
 * @method $this withU2fVersion($value)
 * @method string getSerialNumber()
 * @method $this withSerialNumber($value)
 * @method string getU2fKeyHandler()
 * @method $this withU2fKeyHandler($value)
 * @method string getUserPrincipalName()
 * @method $this withUserPrincipalName($value)
 * @method string getU2fAttestationCert()
 * @method $this withU2fAttestationCert($value)
 */
class BindMFADevice extends Rpc
{
}

/**
 * @method string getAkProxySuffix()
 * @method $this withAkProxySuffix($value)
 * @method string getOldPassword()
 * @method $this withOldPassword($value)
 * @method string getNewPassword()
 * @method $this withNewPassword($value)
 */
class ChangePassword extends Rpc
{
}

/**
 * @method string getAkProxySuffix()
 * @method $this withAkProxySuffix($value)
 * @method string getUserPrincipalName()
 * @method $this withUserPrincipalName($value)
 */
class CreateAccessKey extends Rpc
{
}

/**
 * @method string getAkProxySuffix()
 * @method $this withAkProxySuffix($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getRequiredScopes()
 * @method $this withRequiredScopes($value)
 * @method string getAccessTokenValidity()
 * @method $this withAccessTokenValidity($value)
 * @method string getRefreshTokenValidity()
 * @method $this withRefreshTokenValidity($value)
 * @method string getRedirectUris()
 * @method $this withRedirectUris($value)
 * @method string getSecretRequired()
 * @method $this withSecretRequired($value)
 * @method string getAppType()
 * @method $this withAppType($value)
 * @method string getAppPrincipalName()
 * @method $this withAppPrincipalName($value)
 * @method string getDisplayName()
 * @method $this withDisplayName($value)
 * @method string getPredefinedScopes()
 * @method $this withPredefinedScopes($value)
 * @method string getIsMultiTenant()
 * @method $this withIsMultiTenant($value)
 */
class CreateApplication extends Rpc
{
}

/**
 * @method string getAkProxySuffix()
 * @method $this withAkProxySuffix($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class CreateAppSecret extends Rpc
{
}

/**
 * @method string getAkProxySuffix()
 * @method $this withAkProxySuffix($value)
 * @method string getComments()
 * @method $this withComments($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 * @method string getDisplayName()
 * @method $this withDisplayName($value)
 * @method string getGroupPrincipalName()
 * @method $this withGroupPrincipalName($value)
 */
class CreateGroup extends Rpc
{
}

/**
 * @method string getAkProxySuffix()
 * @method $this withAkProxySuffix($value)
 * @method string getPassword()
 * @method $this withPassword($value)
 * @method string getGenerateRandomPassword()
 * @method $this withGenerateRandomPassword($value)
 * @method string getMFABindRequired()
 * @method $this withMFABindRequired($value)
 * @method string getPasswordResetRequired()
 * @method $this withPasswordResetRequired($value)
 * @method string getUserPrincipalName()
 * @method $this withUserPrincipalName($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class CreateLoginProfile extends Rpc
{
}

/**
 * @method string getIssuanceLimitTime()
 * @method $this withIssuanceLimitTime($value)
 * @method string getAkProxySuffix()
 * @method $this withAkProxySuffix($value)
 * @method string getIssuerUrl()
 * @method $this withIssuerUrl($value)
 * @method string getOIDCProviderName()
 * @method $this withOIDCProviderName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getClientIds()
 * @method $this withClientIds($value)
 * @method string getFingerprints()
 * @method $this withFingerprints($value)
 */
class CreateOIDCProvider extends Rpc
{
}

/**
 * @method string getAkProxySuffix()
 * @method $this withAkProxySuffix($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getSAMLMetadataDocument()
 * @method $this withSAMLMetadataDocument($value)
 * @method string getEncodedSAMLMetadataDocument()
 * @method $this withEncodedSAMLMetadataDocument($value)
 * @method string getSAMLProviderName()
 * @method $this withSAMLProviderName($value)
 */
class CreateSAMLProvider extends Rpc
{
}

/**
 * @method string getAkProxySuffix()
 * @method $this withAkProxySuffix($value)
 * @method string getExternalId()
 * @method $this withExternalId($value)
 * @method string getMobilePhone()
 * @method $this withMobilePhone($value)
 * @method array getTag()
 * @method string getEmail()
 * @method $this withEmail($value)
 * @method string getComments()
 * @method $this withComments($value)
 * @method string getUserPrincipalName()
 * @method $this withUserPrincipalName($value)
 * @method string getDisplayName()
 * @method $this withDisplayName($value)
 */
class CreateUser extends Rpc
{

    /**
     * @param array $tag
     *
     * @return $this
     */
	public function withTag(array $tag)
	{
	    $this->data['Tag'] = $tag;
		foreach ($tag as $depth1 => $depth1Value) {
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }
}

/**
 * @method string getVirtualMFADeviceName()
 * @method $this withVirtualMFADeviceName($value)
 * @method string getAkProxySuffix()
 * @method $this withAkProxySuffix($value)
 */
class CreateVirtualMFADevice extends Rpc
{
}

/**
 * @method string getUserAccessKeyId()
 * @method $this withUserAccessKeyId($value)
 * @method string getAkProxySuffix()
 * @method $this withAkProxySuffix($value)
 * @method string getUserPrincipalName()
 * @method $this withUserPrincipalName($value)
 */
class DeleteAccessKey extends Rpc
{
}

/**
 * @method string getAkProxySuffix()
 * @method $this withAkProxySuffix($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class DeleteApplication extends Rpc
{
}

/**
 * @method string getAkProxySuffix()
 * @method $this withAkProxySuffix($value)
 * @method string getAppSecretId()
 * @method $this withAppSecretId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class DeleteAppSecret extends Rpc
{
}

/**
 * @method string getAkProxySuffix()
 * @method $this withAkProxySuffix($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 * @method string getGroupPrincipalName()
 * @method $this withGroupPrincipalName($value)
 */
class DeleteGroup extends Rpc
{
}

/**
 * @method string getAkProxySuffix()
 * @method $this withAkProxySuffix($value)
 * @method string getUserPrincipalName()
 * @method $this withUserPrincipalName($value)
 */
class DeleteLoginProfile extends Rpc
{
}

/**
 * @method string getAkProxySuffix()
 * @method $this withAkProxySuffix($value)
 * @method string getOIDCProviderName()
 * @method $this withOIDCProviderName($value)
 */
class DeleteOIDCProvider extends Rpc
{
}

/**
 * @method string getAkProxySuffix()
 * @method $this withAkProxySuffix($value)
 * @method string getSAMLProviderName()
 * @method $this withSAMLProviderName($value)
 */
class DeleteSAMLProvider extends Rpc
{
}

/**
 * @method string getAkProxySuffix()
 * @method $this withAkProxySuffix($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getUserPrincipalName()
 * @method $this withUserPrincipalName($value)
 */
class DeleteUser extends Rpc
{
}

/**
 * @method string getSerialNumber()
 * @method $this withSerialNumber($value)
 * @method string getAkProxySuffix()
 * @method $this withAkProxySuffix($value)
 */
class DeleteVirtualMFADevice extends Rpc
{
}

/**
 * @method string getAkProxySuffix()
 * @method $this withAkProxySuffix($value)
 * @method string getUserPrincipalName()
 * @method $this withUserPrincipalName($value)
 */
class DisableVirtualMFA extends Rpc
{
}

/**
 * @method string getAkProxySuffix()
 * @method $this withAkProxySuffix($value)
 */
class GenerateCredentialReport extends Rpc
{
}

/**
 * @method string getUserAccessKeyId()
 * @method $this withUserAccessKeyId($value)
 * @method string getAkProxySuffix()
 * @method $this withAkProxySuffix($value)
 * @method string getUserPrincipalName()
 * @method $this withUserPrincipalName($value)
 */
class GetAccessKeyLastUsed extends Rpc
{
}

/**
 * @method string getAkProxySuffix()
 * @method $this withAkProxySuffix($value)
 */
class GetAccountMFAInfo extends Rpc
{
}

/**
 * @method string getAkProxySuffix()
 * @method $this withAkProxySuffix($value)
 */
class GetAccountSecurityPracticeReport extends Rpc
{
}

/**
 * @method string getAkProxySuffix()
 * @method $this withAkProxySuffix($value)
 */
class GetAccountSummary extends Rpc
{
}

/**
 * @method string getAkProxySuffix()
 * @method $this withAkProxySuffix($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class GetApplication extends Rpc
{
}

/**
 * @method string getAkProxySuffix()
 * @method $this withAkProxySuffix($value)
 * @method string getAppSecretId()
 * @method $this withAppSecretId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class GetAppSecret extends Rpc
{
}

/**
 * @method string getAkProxySuffix()
 * @method $this withAkProxySuffix($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getMaxItems()
 * @method $this withMaxItems($value)
 */
class GetCredentialReport extends Rpc
{
}

/**
 * @method string getAkProxySuffix()
 * @method $this withAkProxySuffix($value)
 */
class GetDefaultDomain extends Rpc
{
}

/**
 * @method string getAkProxySuffix()
 * @method $this withAkProxySuffix($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 * @method string getGroupPrincipalName()
 * @method $this withGroupPrincipalName($value)
 */
class GetGroup extends Rpc
{
}

/**
 * @method string getAkProxySuffix()
 * @method $this withAkProxySuffix($value)
 * @method string getUserPrincipalName()
 * @method $this withUserPrincipalName($value)
 */
class GetLoginProfile extends Rpc
{
}

/**
 * @method string getAkProxySuffix()
 * @method $this withAkProxySuffix($value)
 * @method string getOIDCProviderName()
 * @method $this withOIDCProviderName($value)
 */
class GetOIDCProvider extends Rpc
{
}

/**
 * @method string getAkProxySuffix()
 * @method $this withAkProxySuffix($value)
 */
class GetPasswordPolicy extends Rpc
{
}

/**
 * @method string getAkProxySuffix()
 * @method $this withAkProxySuffix($value)
 * @method string getSAMLProviderName()
 * @method $this withSAMLProviderName($value)
 */
class GetSAMLProvider extends Rpc
{
}

/**
 * @method string getAkProxySuffix()
 * @method $this withAkProxySuffix($value)
 */
class GetSecurityPreference extends Rpc
{
}

/**
 * @method string getAkProxySuffix()
 * @method $this withAkProxySuffix($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getUserAccessKeyId()
 * @method $this withUserAccessKeyId($value)
 * @method string getUserPrincipalName()
 * @method $this withUserPrincipalName($value)
 */
class GetUser extends Rpc
{
}

/**
 * @method string getAkProxySuffix()
 * @method $this withAkProxySuffix($value)
 * @method string getUserPrincipalName()
 * @method $this withUserPrincipalName($value)
 */
class GetUserMFAInfo extends Rpc
{
}

/**
 * @method string getAkProxySuffix()
 * @method $this withAkProxySuffix($value)
 */
class GetUserSsoSettings extends Rpc
{
}

/**
 * @method string getUserPrincipalName()
 * @method $this withUserPrincipalName($value)
 */
class GetVerificationInfo extends Rpc
{
}

/**
 * @method string getAkProxySuffix()
 * @method $this withAkProxySuffix($value)
 * @method string getUserPrincipalName()
 * @method $this withUserPrincipalName($value)
 */
class ListAccessKeys extends Rpc
{
}

/**
 * @method string getAkProxySuffix()
 * @method $this withAkProxySuffix($value)
 */
class ListApplications extends Rpc
{
}

/**
 * @method string getAkProxySuffix()
 * @method $this withAkProxySuffix($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class ListAppSecretIds extends Rpc
{
}

/**
 * @method string getAkProxySuffix()
 * @method $this withAkProxySuffix($value)
 * @method string getMarker()
 * @method $this withMarker($value)
 * @method string getMaxItems()
 * @method $this withMaxItems($value)
 */
class ListGroups extends Rpc
{
}

/**
 * @method string getAkProxySuffix()
 * @method $this withAkProxySuffix($value)
 * @method string getUserPrincipalName()
 * @method $this withUserPrincipalName($value)
 */
class ListGroupsForUser extends Rpc
{
}

/**
 * @method string getAkProxySuffix()
 * @method $this withAkProxySuffix($value)
 * @method string getMarker()
 * @method $this withMarker($value)
 * @method string getMaxItems()
 * @method $this withMaxItems($value)
 */
class ListOIDCProviders extends Rpc
{
}

/**
 * @method string getAkProxySuffix()
 * @method $this withAkProxySuffix($value)
 * @method string getAppType()
 * @method $this withAppType($value)
 */
class ListPredefinedScopes extends Rpc
{
}

/**
 * @method string getAkProxySuffix()
 * @method $this withAkProxySuffix($value)
 * @method string getMarker()
 * @method $this withMarker($value)
 * @method string getMaxItems()
 * @method $this withMaxItems($value)
 */
class ListSAMLProviders extends Rpc
{
}

/**
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method array getTag()
 * @method array getResourcePrincipalName()
 * @method array getResourceId()
 * @method string getResourceType()
 * @method $this withResourceType($value)
 */
class ListTagResources extends Rpc
{

    /**
     * @param array $tag
     *
     * @return $this
     */
	public function withTag(array $tag)
	{
	    $this->data['Tag'] = $tag;
		foreach ($tag as $depth1 => $depth1Value) {
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }

    /**
     * @param array $resourcePrincipalName
     *
     * @return $this
     */
	public function withResourcePrincipalName(array $resourcePrincipalName)
	{
	    $this->data['ResourcePrincipalName'] = $resourcePrincipalName;
		foreach ($resourcePrincipalName as $i => $iValue) {
			$this->options['query']['ResourcePrincipalName.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $resourceId
     *
     * @return $this
     */
	public function withResourceId(array $resourceId)
	{
	    $this->data['ResourceId'] = $resourceId;
		foreach ($resourceId as $i => $iValue) {
			$this->options['query']['ResourceId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getAkProxySuffix()
 * @method $this withAkProxySuffix($value)
 * @method array getTag()
 * @method string getMarker()
 * @method $this withMarker($value)
 * @method string getMaxItems()
 * @method $this withMaxItems($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ListUserBasicInfos extends Rpc
{

    /**
     * @param array $tag
     *
     * @return $this
     */
	public function withTag(array $tag)
	{
	    $this->data['Tag'] = $tag;
		foreach ($tag as $depth1 => $depth1Value) {
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }
}

/**
 * @method string getAkProxySuffix()
 * @method $this withAkProxySuffix($value)
 * @method array getTag()
 * @method string getMarker()
 * @method $this withMarker($value)
 * @method string getMaxItems()
 * @method $this withMaxItems($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ListUsers extends Rpc
{

    /**
     * @param array $tag
     *
     * @return $this
     */
	public function withTag(array $tag)
	{
	    $this->data['Tag'] = $tag;
		foreach ($tag as $depth1 => $depth1Value) {
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }
}

/**
 * @method string getAkProxySuffix()
 * @method $this withAkProxySuffix($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 * @method string getMarker()
 * @method $this withMarker($value)
 * @method string getMaxItems()
 * @method $this withMaxItems($value)
 * @method string getGroupPrincipalName()
 * @method $this withGroupPrincipalName($value)
 */
class ListUsersForGroup extends Rpc
{
}

/**
 * @method string getAkProxySuffix()
 * @method $this withAkProxySuffix($value)
 * @method string getMarker()
 * @method $this withMarker($value)
 * @method string getMaxItems()
 * @method $this withMaxItems($value)
 */
class ListVirtualMFADevices extends Rpc
{
}

/**
 * @method string getClientId()
 * @method $this withClientId($value)
 * @method string getAkProxySuffix()
 * @method $this withAkProxySuffix($value)
 * @method string getOIDCProviderName()
 * @method $this withOIDCProviderName($value)
 */
class RemoveClientIdFromOIDCProvider extends Rpc
{
}

/**
 * @method string getAkProxySuffix()
 * @method $this withAkProxySuffix($value)
 * @method string getOIDCProviderName()
 * @method $this withOIDCProviderName($value)
 * @method string getFingerprint()
 * @method $this withFingerprint($value)
 */
class RemoveFingerprintFromOIDCProvider extends Rpc
{
}

/**
 * @method string getAkProxySuffix()
 * @method $this withAkProxySuffix($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 * @method string getUserPrincipalName()
 * @method $this withUserPrincipalName($value)
 * @method string getGroupPrincipalName()
 * @method $this withGroupPrincipalName($value)
 */
class RemoveUserFromGroup extends Rpc
{
}

/**
 * @method string getAkProxySuffix()
 * @method $this withAkProxySuffix($value)
 * @method string getDefaultDomainName()
 * @method $this withDefaultDomainName($value)
 */
class SetDefaultDomain extends Rpc
{
}

/**
 * @method string getPasswordReusePrevention()
 * @method $this withPasswordReusePrevention($value)
 * @method string getRequireUppercaseCharacters()
 * @method $this withRequireUppercaseCharacters($value)
 * @method string getAkProxySuffix()
 * @method $this withAkProxySuffix($value)
 * @method string getMinimumPasswordDifferentCharacter()
 * @method $this withMinimumPasswordDifferentCharacter($value)
 * @method string getMinimumPasswordLength()
 * @method $this withMinimumPasswordLength($value)
 * @method string getRequireNumbers()
 * @method $this withRequireNumbers($value)
 * @method string getPasswordNotContainUserName()
 * @method $this withPasswordNotContainUserName($value)
 * @method string getRequireLowercaseCharacters()
 * @method $this withRequireLowercaseCharacters($value)
 * @method string getMaxPasswordAge()
 * @method $this withMaxPasswordAge($value)
 * @method string getHardExpire()
 * @method $this withHardExpire($value)
 * @method string getMaxLoginAttemps()
 * @method $this withMaxLoginAttemps($value)
 * @method string getRequireSymbols()
 * @method $this withRequireSymbols($value)
 */
class SetPasswordPolicy extends Rpc
{
}

/**
 * @method string getAkProxySuffix()
 * @method $this withAkProxySuffix($value)
 * @method string getEnableSaveMFATicket()
 * @method $this withEnableSaveMFATicket($value)
 * @method string getLoginNetworkMasks()
 * @method $this withLoginNetworkMasks($value)
 * @method string getAllowUserToChangePassword()
 * @method $this withAllowUserToChangePassword($value)
 * @method string getEnforceMFAForLogin()
 * @method $this withEnforceMFAForLogin($value)
 * @method string getLoginSessionDuration()
 * @method $this withLoginSessionDuration($value)
 * @method string getVerificationTypes()
 * @method $this withVerificationTypes($value)
 * @method string getAllowUserLongTermLogin()
 * @method $this withAllowUserLongTermLogin($value)
 * @method string getAllowUserToManageAccessKeys()
 * @method $this withAllowUserToManageAccessKeys($value)
 * @method string getAllowUserToManageMFADevices()
 * @method $this withAllowUserToManageMFADevices($value)
 * @method string getOperationForRiskLogin()
 * @method $this withOperationForRiskLogin($value)
 * @method string getMFAOperationForLogin()
 * @method $this withMFAOperationForLogin($value)
 * @method string getAllowUserToManagePersonalDingTalk()
 * @method $this withAllowUserToManagePersonalDingTalk($value)
 */
class SetSecurityPreference extends Rpc
{
}

/**
 * @method string getAkProxySuffix()
 * @method $this withAkProxySuffix($value)
 * @method string getAuxiliaryDomain()
 * @method $this withAuxiliaryDomain($value)
 * @method string getMetadataDocument()
 * @method $this withMetadataDocument($value)
 * @method string getReserved()
 * @method $this withReserved($value)
 * @method string getSsoEnabled()
 * @method $this withSsoEnabled($value)
 */
class SetUserSsoSettings extends Rpc
{
}

/**
 * @method array getResourceId()
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method array getTag()
 * @method array getResourcePrincipalName()
 */
class TagResources extends Rpc
{

    /**
     * @param array $resourceId
     *
     * @return $this
     */
	public function withResourceId(array $resourceId)
	{
	    $this->data['ResourceId'] = $resourceId;
		foreach ($resourceId as $i => $iValue) {
			$this->options['query']['ResourceId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $tag
     *
     * @return $this
     */
	public function withTag(array $tag)
	{
	    $this->data['Tag'] = $tag;
		foreach ($tag as $depth1 => $depth1Value) {
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }

    /**
     * @param array $resourcePrincipalName
     *
     * @return $this
     */
	public function withResourcePrincipalName(array $resourcePrincipalName)
	{
	    $this->data['ResourcePrincipalName'] = $resourcePrincipalName;
		foreach ($resourcePrincipalName as $i => $iValue) {
			$this->options['query']['ResourcePrincipalName.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getAkProxySuffix()
 * @method $this withAkProxySuffix($value)
 * @method string getUserPrincipalName()
 * @method $this withUserPrincipalName($value)
 */
class UnbindMFADevice extends Rpc
{
}

/**
 * @method array getResourcePrincipalName()
 * @method string getAll()
 * @method $this withAll($value)
 * @method array getResourceId()
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method array getTagKey()
 */
class UntagResources extends Rpc
{

    /**
     * @param array $resourcePrincipalName
     *
     * @return $this
     */
	public function withResourcePrincipalName(array $resourcePrincipalName)
	{
	    $this->data['ResourcePrincipalName'] = $resourcePrincipalName;
		foreach ($resourcePrincipalName as $i => $iValue) {
			$this->options['query']['ResourcePrincipalName.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $resourceId
     *
     * @return $this
     */
	public function withResourceId(array $resourceId)
	{
	    $this->data['ResourceId'] = $resourceId;
		foreach ($resourceId as $i => $iValue) {
			$this->options['query']['ResourceId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $tagKey
     *
     * @return $this
     */
	public function withTagKey(array $tagKey)
	{
	    $this->data['TagKey'] = $tagKey;
		foreach ($tagKey as $i => $iValue) {
			$this->options['query']['TagKey.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getUserAccessKeyId()
 * @method $this withUserAccessKeyId($value)
 * @method string getAkProxySuffix()
 * @method $this withAkProxySuffix($value)
 * @method string getUserPrincipalName()
 * @method $this withUserPrincipalName($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class UpdateAccessKey extends Rpc
{
}

/**
 * @method string getNewIsMultiTenant()
 * @method $this withNewIsMultiTenant($value)
 * @method string getAkProxySuffix()
 * @method $this withAkProxySuffix($value)
 * @method string getNewRefreshTokenValidity()
 * @method $this withNewRefreshTokenValidity($value)
 * @method string getNewPredefinedScopes()
 * @method $this withNewPredefinedScopes($value)
 * @method string getNewSecretRequired()
 * @method $this withNewSecretRequired($value)
 * @method string getNewDisplayName()
 * @method $this withNewDisplayName($value)
 * @method string getNewRequiredScopes()
 * @method $this withNewRequiredScopes($value)
 * @method string getNewRedirectUris()
 * @method $this withNewRedirectUris($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getNewAccessTokenValidity()
 * @method $this withNewAccessTokenValidity($value)
 */
class UpdateApplication extends Rpc
{
}

/**
 * @method string getAkProxySuffix()
 * @method $this withAkProxySuffix($value)
 * @method string getNewGroupPrincipalName()
 * @method $this withNewGroupPrincipalName($value)
 * @method string getNewDisplayName()
 * @method $this withNewDisplayName($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 * @method string getNewGroupName()
 * @method $this withNewGroupName($value)
 * @method string getNewComments()
 * @method $this withNewComments($value)
 * @method string getGroupPrincipalName()
 * @method $this withGroupPrincipalName($value)
 */
class UpdateGroup extends Rpc
{
}

/**
 * @method string getAkProxySuffix()
 * @method $this withAkProxySuffix($value)
 * @method string getPassword()
 * @method $this withPassword($value)
 * @method string getGenerateRandomPassword()
 * @method $this withGenerateRandomPassword($value)
 * @method string getMFABindRequired()
 * @method $this withMFABindRequired($value)
 * @method string getPasswordResetRequired()
 * @method $this withPasswordResetRequired($value)
 * @method string getUserPrincipalName()
 * @method $this withUserPrincipalName($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class UpdateLoginProfile extends Rpc
{
}

/**
 * @method string getIssuanceLimitTime()
 * @method $this withIssuanceLimitTime($value)
 * @method string getAkProxySuffix()
 * @method $this withAkProxySuffix($value)
 * @method string getOIDCProviderName()
 * @method $this withOIDCProviderName($value)
 * @method string getClientIds()
 * @method $this withClientIds($value)
 * @method string getNewDescription()
 * @method $this withNewDescription($value)
 */
class UpdateOIDCProvider extends Rpc
{
}

/**
 * @method string getAkProxySuffix()
 * @method $this withAkProxySuffix($value)
 * @method string getNewEncodedSAMLMetadataDocument()
 * @method $this withNewEncodedSAMLMetadataDocument($value)
 * @method string getSAMLProviderName()
 * @method $this withSAMLProviderName($value)
 * @method string getNewDescription()
 * @method $this withNewDescription($value)
 * @method string getNewSAMLMetadataDocument()
 * @method $this withNewSAMLMetadataDocument($value)
 */
class UpdateSAMLProvider extends Rpc
{
}

/**
 * @method string getNewMobilePhone()
 * @method $this withNewMobilePhone($value)
 * @method string getAkProxySuffix()
 * @method $this withAkProxySuffix($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getNewEmail()
 * @method $this withNewEmail($value)
 * @method string getNewDisplayName()
 * @method $this withNewDisplayName($value)
 * @method string getUserPrincipalName()
 * @method $this withUserPrincipalName($value)
 * @method string getNewComments()
 * @method $this withNewComments($value)
 * @method string getNewUserPrincipalName()
 * @method $this withNewUserPrincipalName($value)
 */
class UpdateUser extends Rpc
{
}
