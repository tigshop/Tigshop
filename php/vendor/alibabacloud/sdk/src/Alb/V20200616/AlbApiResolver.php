<?php

namespace AlibabaCloud\Alb\V20200616;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AddEntriesToAcl addEntriesToAcl(array $options = [])
 * @method AddServersToServerGroup addServersToServerGroup(array $options = [])
 * @method ApplyHealthCheckTemplateToServerGroup applyHealthCheckTemplateToServerGroup(array $options = [])
 * @method AssociateAclsWithListener associateAclsWithListener(array $options = [])
 * @method AssociateAdditionalCertificatesWithListener associateAdditionalCertificatesWithListener(array $options = [])
 * @method AttachCommonBandwidthPackageToLoadBalancer attachCommonBandwidthPackageToLoadBalancer(array $options = [])
 * @method CreateAcl createAcl(array $options = [])
 * @method CreateHealthCheckTemplate createHealthCheckTemplate(array $options = [])
 * @method CreateListener createListener(array $options = [])
 * @method CreateLoadBalancer createLoadBalancer(array $options = [])
 * @method CreateRule createRule(array $options = [])
 * @method CreateRules createRules(array $options = [])
 * @method CreateSecurityPolicy createSecurityPolicy(array $options = [])
 * @method CreateServerGroup createServerGroup(array $options = [])
 * @method DeleteAcl deleteAcl(array $options = [])
 * @method DeleteHealthCheckTemplates deleteHealthCheckTemplates(array $options = [])
 * @method DeleteListener deleteListener(array $options = [])
 * @method DeleteLoadBalancer deleteLoadBalancer(array $options = [])
 * @method DeleteRule deleteRule(array $options = [])
 * @method DeleteRules deleteRules(array $options = [])
 * @method DeleteSecurityPolicy deleteSecurityPolicy(array $options = [])
 * @method DeleteServerGroup deleteServerGroup(array $options = [])
 * @method DescribeRegions describeRegions(array $options = [])
 * @method DescribeZones describeZones(array $options = [])
 * @method DetachCommonBandwidthPackageFromLoadBalancer detachCommonBandwidthPackageFromLoadBalancer(array $options = [])
 * @method DisableDeletionProtection disableDeletionProtection(array $options = [])
 * @method DisableLoadBalancerAccessLog disableLoadBalancerAccessLog(array $options = [])
 * @method DissociateAclsFromListener dissociateAclsFromListener(array $options = [])
 * @method DissociateAdditionalCertificatesFromListener dissociateAdditionalCertificatesFromListener(array $options = [])
 * @method EnableDeletionProtection enableDeletionProtection(array $options = [])
 * @method EnableLoadBalancerAccessLog enableLoadBalancerAccessLog(array $options = [])
 * @method GetHealthCheckTemplateAttribute getHealthCheckTemplateAttribute(array $options = [])
 * @method GetListenerAttribute getListenerAttribute(array $options = [])
 * @method GetListenerHealthStatus getListenerHealthStatus(array $options = [])
 * @method GetLoadBalancerAttribute getLoadBalancerAttribute(array $options = [])
 * @method ListAclEntries listAclEntries(array $options = [])
 * @method ListAclRelations listAclRelations(array $options = [])
 * @method ListAcls listAcls(array $options = [])
 * @method ListAsynJobs listAsynJobs(array $options = [])
 * @method ListHealthCheckTemplates listHealthCheckTemplates(array $options = [])
 * @method ListListenerCertificates listListenerCertificates(array $options = [])
 * @method ListListeners listListeners(array $options = [])
 * @method ListLoadBalancers listLoadBalancers(array $options = [])
 * @method ListRules listRules(array $options = [])
 * @method ListSecurityPolicies listSecurityPolicies(array $options = [])
 * @method ListSecurityPolicyRelations listSecurityPolicyRelations(array $options = [])
 * @method ListServerGroups listServerGroups(array $options = [])
 * @method ListServerGroupServers listServerGroupServers(array $options = [])
 * @method ListSystemSecurityPolicies listSystemSecurityPolicies(array $options = [])
 * @method ListTagKeys listTagKeys(array $options = [])
 * @method ListTagResources listTagResources(array $options = [])
 * @method ListTagValues listTagValues(array $options = [])
 * @method MoveResourceGroup moveResourceGroup(array $options = [])
 * @method RemoveEntriesFromAcl removeEntriesFromAcl(array $options = [])
 * @method RemoveServersFromServerGroup removeServersFromServerGroup(array $options = [])
 * @method ReplaceServersInServerGroup replaceServersInServerGroup(array $options = [])
 * @method StartListener startListener(array $options = [])
 * @method StopListener stopListener(array $options = [])
 * @method TagResources tagResources(array $options = [])
 * @method UnTagResources unTagResources(array $options = [])
 * @method UpdateAclAttribute updateAclAttribute(array $options = [])
 * @method UpdateHealthCheckTemplateAttribute updateHealthCheckTemplateAttribute(array $options = [])
 * @method UpdateListenerAttribute updateListenerAttribute(array $options = [])
 * @method UpdateListenerLogConfig updateListenerLogConfig(array $options = [])
 * @method UpdateLoadBalancerAddressTypeConfig updateLoadBalancerAddressTypeConfig(array $options = [])
 * @method UpdateLoadBalancerAttribute updateLoadBalancerAttribute(array $options = [])
 * @method UpdateLoadBalancerEdition updateLoadBalancerEdition(array $options = [])
 * @method UpdateLoadBalancerZones updateLoadBalancerZones(array $options = [])
 * @method UpdateRuleAttribute updateRuleAttribute(array $options = [])
 * @method UpdateRulesAttribute updateRulesAttribute(array $options = [])
 * @method UpdateSecurityPolicyAttribute updateSecurityPolicyAttribute(array $options = [])
 * @method UpdateServerGroupAttribute updateServerGroupAttribute(array $options = [])
 * @method UpdateServerGroupServersAttribute updateServerGroupServersAttribute(array $options = [])
 */
class AlbApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'Alb';

    /** @var string */
    public $version = '2020-06-16';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'alb';
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getAclId()
 * @method $this withAclId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getAclEntries()
 * @method $this withAclEntries($value)
 */
class AddEntriesToAcl extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getServerGroupId()
 * @method $this withServerGroupId($value)
 * @method string getServers()
 * @method $this withServers($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 */
class AddServersToServerGroup extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getServerGroupId()
 * @method $this withServerGroupId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getHealthCheckTemplateId()
 * @method $this withHealthCheckTemplateId($value)
 */
class ApplyHealthCheckTemplateToServerGroup extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getAclIds()
 * @method $this withAclIds($value)
 * @method string getAclType()
 * @method $this withAclType($value)
 * @method string getListenerId()
 * @method $this withListenerId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 */
class AssociateAclsWithListener extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getListenerId()
 * @method $this withListenerId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getCertificates()
 * @method $this withCertificates($value)
 */
class AssociateAdditionalCertificatesWithListener extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getBandwidthPackageId()
 * @method $this withBandwidthPackageId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getLoadBalancerId()
 * @method $this withLoadBalancerId($value)
 */
class AttachCommonBandwidthPackageToLoadBalancer extends Rpc
{
}

/**
 * @method string getAclName()
 * @method $this withAclName($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getAddressIpVersion()
 * @method $this withAddressIpVersion($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 */
class CreateAcl extends Rpc
{
}

/**
 * @method string getHealthCheckTimeout()
 * @method $this withHealthCheckTimeout($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getHealthCheckProtocol()
 * @method $this withHealthCheckProtocol($value)
 * @method string getUnhealthyThreshold()
 * @method $this withUnhealthyThreshold($value)
 * @method string getHealthyThreshold()
 * @method $this withHealthyThreshold($value)
 * @method string getHealthCheckTcpFastCloseEnabled()
 * @method $this withHealthCheckTcpFastCloseEnabled($value)
 * @method string getHealthCheckPath()
 * @method $this withHealthCheckPath($value)
 * @method string getHealthCheckCodes()
 * @method $this withHealthCheckCodes($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getHealthCheckMethod()
 * @method $this withHealthCheckMethod($value)
 * @method string getHealthCheckHost()
 * @method $this withHealthCheckHost($value)
 * @method string getHealthCheckInterval()
 * @method $this withHealthCheckInterval($value)
 * @method string getHealthCheckTemplateName()
 * @method $this withHealthCheckTemplateName($value)
 * @method string getHealthCheckHttpCodes()
 * @method $this withHealthCheckHttpCodes($value)
 * @method string getHealthCheckHttpVersion()
 * @method $this withHealthCheckHttpVersion($value)
 * @method string getHealthCheckConnectPort()
 * @method $this withHealthCheckConnectPort($value)
 */
class CreateHealthCheckTemplate extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getGzipEnabled()
 * @method $this withGzipEnabled($value)
 * @method string getQuicConfig()
 * @method $this withQuicConfig($value)
 * @method string getHttp2Enabled()
 * @method $this withHttp2Enabled($value)
 * @method string getDefaultActions()
 * @method $this withDefaultActions($value)
 * @method string getListenerPort()
 * @method $this withListenerPort($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getRequestTimeout()
 * @method $this withRequestTimeout($value)
 * @method string getCaCertificates()
 * @method $this withCaCertificates($value)
 * @method string getXForwardedForConfig()
 * @method $this withXForwardedForConfig($value)
 * @method string getListenerProtocol()
 * @method $this withListenerProtocol($value)
 * @method string getSecurityPolicyId()
 * @method $this withSecurityPolicyId($value)
 * @method string getIdleTimeout()
 * @method $this withIdleTimeout($value)
 * @method string getLoadBalancerId()
 * @method $this withLoadBalancerId($value)
 * @method string getCertificates()
 * @method $this withCertificates($value)
 * @method string getListenerDescription()
 * @method $this withListenerDescription($value)
 * @method string getCaEnabled()
 * @method $this withCaEnabled($value)
 */
class CreateListener extends Rpc
{
}

/**
 * @method string getLoadBalancerEdition()
 * @method $this withLoadBalancerEdition($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getModificationProtectionConfig()
 * @method $this withModificationProtectionConfig($value)
 * @method string getLoadBalancerBillingConfig()
 * @method $this withLoadBalancerBillingConfig($value)
 * @method string getAddressIpVersion()
 * @method $this withAddressIpVersion($value)
 * @method string getDeletionProtectionEnabled()
 * @method $this withDeletionProtectionEnabled($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getLoadBalancerName()
 * @method $this withLoadBalancerName($value)
 * @method string getAddressType()
 * @method $this withAddressType($value)
 * @method string getAddressAllocatedMode()
 * @method $this withAddressAllocatedMode($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getZoneMappings()
 * @method $this withZoneMappings($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 */
class CreateLoadBalancer extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getRuleName()
 * @method $this withRuleName($value)
 * @method string getListenerId()
 * @method $this withListenerId($value)
 * @method string getDirection()
 * @method $this withDirection($value)
 * @method string getRuleActions()
 * @method $this withRuleActions($value)
 * @method string getRuleConditions()
 * @method $this withRuleConditions($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getPriority()
 * @method $this withPriority($value)
 */
class CreateRule extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getRules()
 * @method $this withRules($value)
 * @method string getListenerId()
 * @method $this withListenerId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 */
class CreateRules extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getCiphers()
 * @method $this withCiphers($value)
 * @method string getTLSVersions()
 * @method $this withTLSVersions($value)
 * @method string getSecurityPolicyName()
 * @method $this withSecurityPolicyName($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 */
class CreateSecurityPolicy extends Rpc
{
}

/**
 * @method string getServerGroupName()
 * @method $this withServerGroupName($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getHealthCheckConfig()
 * @method $this withHealthCheckConfig($value)
 * @method string getScheduler()
 * @method $this withScheduler($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getProtocol()
 * @method $this withProtocol($value)
 * @method string getUpstreamKeepaliveEnabled()
 * @method $this withUpstreamKeepaliveEnabled($value)
 * @method string getServiceName()
 * @method $this withServiceName($value)
 * @method string getStickySessionConfig()
 * @method $this withStickySessionConfig($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getIpv6Enabled()
 * @method $this withIpv6Enabled($value)
 * @method string getServerGroupType()
 * @method $this withServerGroupType($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getUchConfig()
 * @method $this withUchConfig($value)
 */
class CreateServerGroup extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getAclId()
 * @method $this withAclId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 */
class DeleteAcl extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getHealthCheckTemplateIds()
 * @method $this withHealthCheckTemplateIds($value)
 */
class DeleteHealthCheckTemplates extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getListenerId()
 * @method $this withListenerId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 */
class DeleteListener extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getLoadBalancerId()
 * @method $this withLoadBalancerId($value)
 */
class DeleteLoadBalancer extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getRuleId()
 * @method $this withRuleId($value)
 */
class DeleteRule extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method array getRuleIds()
 */
class DeleteRules extends Rpc
{

    /**
     * @param array $ruleIds
     *
     * @return $this
     */
	public function withRuleIds(array $ruleIds)
	{
	    $this->data['RuleIds'] = $ruleIds;
		foreach ($ruleIds as $i => $iValue) {
			$this->options['query']['RuleIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getSecurityPolicyId()
 * @method $this withSecurityPolicyId($value)
 */
class DeleteSecurityPolicy extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getServerGroupId()
 * @method $this withServerGroupId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 */
class DeleteServerGroup extends Rpc
{
}

/**
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class DescribeRegions extends Rpc
{
}

class DescribeZones extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getBandwidthPackageId()
 * @method $this withBandwidthPackageId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getLoadBalancerId()
 * @method $this withLoadBalancerId($value)
 */
class DetachCommonBandwidthPackageFromLoadBalancer extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 */
class DisableDeletionProtection extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getLoadBalancerId()
 * @method $this withLoadBalancerId($value)
 */
class DisableLoadBalancerAccessLog extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getAclIds()
 * @method $this withAclIds($value)
 * @method string getListenerId()
 * @method $this withListenerId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 */
class DissociateAclsFromListener extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getListenerId()
 * @method $this withListenerId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getCertificates()
 * @method $this withCertificates($value)
 */
class DissociateAdditionalCertificatesFromListener extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 */
class EnableDeletionProtection extends Rpc
{
}

/**
 * @method string getLogProject()
 * @method $this withLogProject($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getLoadBalancerId()
 * @method $this withLoadBalancerId($value)
 * @method string getLogStore()
 * @method $this withLogStore($value)
 */
class EnableLoadBalancerAccessLog extends Rpc
{
}

/**
 * @method string getHealthCheckTemplateId()
 * @method $this withHealthCheckTemplateId($value)
 */
class GetHealthCheckTemplateAttribute extends Rpc
{
}

/**
 * @method string getListenerId()
 * @method $this withListenerId($value)
 */
class GetListenerAttribute extends Rpc
{
}

/**
 * @method string getIncludeRule()
 * @method $this withIncludeRule($value)
 * @method string getListenerId()
 * @method $this withListenerId($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class GetListenerHealthStatus extends Rpc
{
}

/**
 * @method string getLoadBalancerId()
 * @method $this withLoadBalancerId($value)
 */
class GetLoadBalancerAttribute extends Rpc
{
}

/**
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getAclId()
 * @method $this withAclId($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class ListAclEntries extends Rpc
{
}

/**
 * @method string getAclIds()
 * @method $this withAclIds($value)
 */
class ListAclRelations extends Rpc
{
}

/**
 * @method string getAclIds()
 * @method $this withAclIds($value)
 * @method string getAddressIPVersion()
 * @method $this withAddressIPVersion($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getAclNames()
 * @method $this withAclNames($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class ListAcls extends Rpc
{
}

/**
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getBeginTime()
 * @method $this withBeginTime($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getApiName()
 * @method $this withApiName($value)
 * @method string getJobIds()
 * @method $this withJobIds($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getResourceIds()
 * @method $this withResourceIds($value)
 */
class ListAsynJobs extends Rpc
{
}

/**
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getHealthCheckTemplateNames()
 * @method $this withHealthCheckTemplateNames($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getHealthCheckTemplateIds()
 * @method $this withHealthCheckTemplateIds($value)
 */
class ListHealthCheckTemplates extends Rpc
{
}

/**
 * @method string getCertificateType()
 * @method $this withCertificateType($value)
 * @method string getListenerId()
 * @method $this withListenerId($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class ListListenerCertificates extends Rpc
{
}

/**
 * @method string getLoadBalancerIds()
 * @method $this withLoadBalancerIds($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getAccessLogRecordCustomizedHeadersEnabled()
 * @method $this withAccessLogRecordCustomizedHeadersEnabled($value)
 * @method string getListenerProtocol()
 * @method $this withListenerProtocol($value)
 * @method string getListenerIds()
 * @method $this withListenerIds($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ListListeners extends Rpc
{
}

/**
 * @method string getLoadBalancerNames()
 * @method $this withLoadBalancerNames($value)
 * @method string getLoadBalancerIds()
 * @method $this withLoadBalancerIds($value)
 * @method string getLoadBalancerEditions()
 * @method $this withLoadBalancerEditions($value)
 * @method string getAddressIpVersion()
 * @method $this withAddressIpVersion($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getLoadBalancerBussinessStatus()
 * @method $this withLoadBalancerBussinessStatus($value)
 * @method string getAddressType()
 * @method $this withAddressType($value)
 * @method string getVpcIds()
 * @method $this withVpcIds($value)
 * @method string getTag()
 * @method $this withTag($value)
 * @method string getAddress()
 * @method $this withAddress($value)
 * @method string getLoadBalancerStatus()
 * @method $this withLoadBalancerStatus($value)
 * @method string getInternetChargeType()
 * @method $this withInternetChargeType($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getIpv6AddressType()
 * @method $this withIpv6AddressType($value)
 * @method string getPayType()
 * @method $this withPayType($value)
 */
class ListLoadBalancers extends Rpc
{
}

/**
 * @method string getLoadBalancerIds()
 * @method $this withLoadBalancerIds($value)
 * @method string getListenerId()
 * @method $this withListenerId($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getDirection()
 * @method $this withDirection($value)
 * @method string getRuleIds()
 * @method $this withRuleIds($value)
 * @method string getListenerIds()
 * @method $this withListenerIds($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class ListRules extends Rpc
{
}

/**
 * @method string getSecurityPolicyNames()
 * @method $this withSecurityPolicyNames($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getSecurityPolicyIds()
 * @method $this withSecurityPolicyIds($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class ListSecurityPolicies extends Rpc
{
}

/**
 * @method string getSecurityPolicyIds()
 * @method $this withSecurityPolicyIds($value)
 */
class ListSecurityPolicyRelations extends Rpc
{
}

/**
 * @method string getServerGroupNames()
 * @method $this withServerGroupNames($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getTag()
 * @method $this withTag($value)
 * @method string getShowRelationEnabled()
 * @method $this withShowRelationEnabled($value)
 * @method string getServerGroupIds()
 * @method $this withServerGroupIds($value)
 * @method string getServerGroupType()
 * @method $this withServerGroupType($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class ListServerGroups extends Rpc
{
}

/**
 * @method string getServerGroupId()
 * @method $this withServerGroupId($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getServerIp()
 * @method $this withServerIp($value)
 * @method string getTag()
 * @method $this withTag($value)
 * @method string getServerId()
 * @method $this withServerId($value)
 * @method string getServerIds()
 * @method $this withServerIds($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class ListServerGroupServers extends Rpc
{
}

class ListSystemSecurityPolicies extends Rpc
{
}

/**
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getCategory()
 * @method $this withCategory($value)
 */
class ListTagKeys extends Rpc
{
}

/**
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getTag()
 * @method $this withTag($value)
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class ListTagResources extends Rpc
{
}

/**
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getTagKey()
 * @method $this withTagKey($value)
 */
class ListTagValues extends Rpc
{
}

/**
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getNewResourceGroupId()
 * @method $this withNewResourceGroupId($value)
 */
class MoveResourceGroup extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getAclId()
 * @method $this withAclId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getEntries()
 * @method $this withEntries($value)
 */
class RemoveEntriesFromAcl extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getServerGroupId()
 * @method $this withServerGroupId($value)
 * @method string getServers()
 * @method $this withServers($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 */
class RemoveServersFromServerGroup extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getServerGroupId()
 * @method $this withServerGroupId($value)
 * @method string getAddedServers()
 * @method $this withAddedServers($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getRemovedServers()
 * @method $this withRemovedServers($value)
 */
class ReplaceServersInServerGroup extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getListenerId()
 * @method $this withListenerId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 */
class StartListener extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getListenerId()
 * @method $this withListenerId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 */
class StopListener extends Rpc
{
}

/**
 * @method string getTag()
 * @method $this withTag($value)
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 */
class TagResources extends Rpc
{
}

/**
 * @method string getTag()
 * @method $this withTag($value)
 * @method string getAll()
 * @method $this withAll($value)
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getTagKey()
 * @method $this withTagKey($value)
 */
class UnTagResources extends Rpc
{
}

/**
 * @method string getAclName()
 * @method $this withAclName($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getAclId()
 * @method $this withAclId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 */
class UpdateAclAttribute extends Rpc
{
}

/**
 * @method string getHealthCheckTimeout()
 * @method $this withHealthCheckTimeout($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getHealthCheckProtocol()
 * @method $this withHealthCheckProtocol($value)
 * @method string getUnhealthyThreshold()
 * @method $this withUnhealthyThreshold($value)
 * @method string getHealthyThreshold()
 * @method $this withHealthyThreshold($value)
 * @method string getHealthCheckTcpFastCloseEnabled()
 * @method $this withHealthCheckTcpFastCloseEnabled($value)
 * @method string getHealthCheckPath()
 * @method $this withHealthCheckPath($value)
 * @method string getHealthCheckCodes()
 * @method $this withHealthCheckCodes($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getHealthCheckMethod()
 * @method $this withHealthCheckMethod($value)
 * @method string getHealthCheckHost()
 * @method $this withHealthCheckHost($value)
 * @method string getHealthCheckInterval()
 * @method $this withHealthCheckInterval($value)
 * @method string getHealthCheckTemplateName()
 * @method $this withHealthCheckTemplateName($value)
 * @method string getHealthCheckHttpCodes()
 * @method $this withHealthCheckHttpCodes($value)
 * @method string getHealthCheckTemplateId()
 * @method $this withHealthCheckTemplateId($value)
 * @method string getHealthCheckHttpVersion()
 * @method $this withHealthCheckHttpVersion($value)
 * @method string getHealthCheckConnectPort()
 * @method $this withHealthCheckConnectPort($value)
 */
class UpdateHealthCheckTemplateAttribute extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getGzipEnabled()
 * @method $this withGzipEnabled($value)
 * @method string getListenerId()
 * @method $this withListenerId($value)
 * @method string getQuicConfig()
 * @method $this withQuicConfig($value)
 * @method string getHttp2Enabled()
 * @method $this withHttp2Enabled($value)
 * @method string getDefaultActions()
 * @method $this withDefaultActions($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getRequestTimeout()
 * @method $this withRequestTimeout($value)
 * @method string getCaCertificates()
 * @method $this withCaCertificates($value)
 * @method string getXForwardedForConfig()
 * @method $this withXForwardedForConfig($value)
 * @method string getSecurityPolicyId()
 * @method $this withSecurityPolicyId($value)
 * @method string getIdleTimeout()
 * @method $this withIdleTimeout($value)
 * @method string getCertificates()
 * @method $this withCertificates($value)
 * @method string getListenerDescription()
 * @method $this withListenerDescription($value)
 * @method string getCaEnabled()
 * @method $this withCaEnabled($value)
 */
class UpdateListenerAttribute extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getListenerId()
 * @method $this withListenerId($value)
 * @method string getAccessLogRecordCustomizedHeadersEnabled()
 * @method $this withAccessLogRecordCustomizedHeadersEnabled($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getAccessLogTracingConfig()
 * @method $this withAccessLogTracingConfig($value)
 */
class UpdateListenerLogConfig extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getAddressType()
 * @method $this withAddressType($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getZoneMappings()
 * @method $this withZoneMappings($value)
 * @method string getLoadBalancerId()
 * @method $this withLoadBalancerId($value)
 */
class UpdateLoadBalancerAddressTypeConfig extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getModificationProtectionConfig()
 * @method $this withModificationProtectionConfig($value)
 * @method string getLoadBalancerName()
 * @method $this withLoadBalancerName($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getLoadBalancerId()
 * @method $this withLoadBalancerId($value)
 */
class UpdateLoadBalancerAttribute extends Rpc
{
}

/**
 * @method string getLoadBalancerEdition()
 * @method $this withLoadBalancerEdition($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getLoadBalancerId()
 * @method $this withLoadBalancerId($value)
 */
class UpdateLoadBalancerEdition extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getZoneMappings()
 * @method $this withZoneMappings($value)
 * @method string getLoadBalancerId()
 * @method $this withLoadBalancerId($value)
 */
class UpdateLoadBalancerZones extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getRuleName()
 * @method $this withRuleName($value)
 * @method string getRuleActions()
 * @method $this withRuleActions($value)
 * @method string getRuleConditions()
 * @method $this withRuleConditions($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getPriority()
 * @method $this withPriority($value)
 * @method string getRuleId()
 * @method $this withRuleId($value)
 */
class UpdateRuleAttribute extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getRules()
 * @method $this withRules($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 */
class UpdateRulesAttribute extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getCiphers()
 * @method $this withCiphers($value)
 * @method string getTLSVersions()
 * @method $this withTLSVersions($value)
 * @method string getSecurityPolicyName()
 * @method $this withSecurityPolicyName($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getSecurityPolicyId()
 * @method $this withSecurityPolicyId($value)
 */
class UpdateSecurityPolicyAttribute extends Rpc
{
}

/**
 * @method string getServerGroupName()
 * @method $this withServerGroupName($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getHealthCheckConfig()
 * @method $this withHealthCheckConfig($value)
 * @method string getScheduler()
 * @method $this withScheduler($value)
 * @method string getServerGroupId()
 * @method $this withServerGroupId($value)
 * @method string getUpstreamKeepaliveEnabled()
 * @method $this withUpstreamKeepaliveEnabled($value)
 * @method string getServiceName()
 * @method $this withServiceName($value)
 * @method string getStickySessionConfig()
 * @method $this withStickySessionConfig($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getUchConfig()
 * @method $this withUchConfig($value)
 */
class UpdateServerGroupAttribute extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getServerGroupId()
 * @method $this withServerGroupId($value)
 * @method string getServers()
 * @method $this withServers($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 */
class UpdateServerGroupServersAttribute extends Rpc
{
}
