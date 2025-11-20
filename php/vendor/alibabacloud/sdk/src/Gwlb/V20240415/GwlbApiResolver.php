<?php

namespace AlibabaCloud\Gwlb\V20240415;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AddServersToServerGroup addServersToServerGroup(array $options = [])
 * @method CreateListener createListener(array $options = [])
 * @method CreateLoadBalancer createLoadBalancer(array $options = [])
 * @method CreateServerGroup createServerGroup(array $options = [])
 * @method DeleteListener deleteListener(array $options = [])
 * @method DeleteLoadBalancer deleteLoadBalancer(array $options = [])
 * @method DeleteServerGroup deleteServerGroup(array $options = [])
 * @method DescribeRegions describeRegions(array $options = [])
 * @method DescribeZones describeZones(array $options = [])
 * @method GetListenerAttribute getListenerAttribute(array $options = [])
 * @method GetListenerHealthStatus getListenerHealthStatus(array $options = [])
 * @method GetLoadBalancerAttribute getLoadBalancerAttribute(array $options = [])
 * @method ListListeners listListeners(array $options = [])
 * @method ListLoadBalancers listLoadBalancers(array $options = [])
 * @method ListServerGroups listServerGroups(array $options = [])
 * @method ListServerGroupServers listServerGroupServers(array $options = [])
 * @method ListTagResources listTagResources(array $options = [])
 * @method MoveResourceGroup moveResourceGroup(array $options = [])
 * @method RemoveServersFromServerGroup removeServersFromServerGroup(array $options = [])
 * @method TagResources tagResources(array $options = [])
 * @method UntagResources untagResources(array $options = [])
 * @method UpdateListenerAttribute updateListenerAttribute(array $options = [])
 * @method UpdateLoadBalancerAttribute updateLoadBalancerAttribute(array $options = [])
 * @method UpdateLoadBalancerZones updateLoadBalancerZones(array $options = [])
 * @method UpdateServerGroupAttribute updateServerGroupAttribute(array $options = [])
 */
class GwlbApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'Gwlb';

    /** @var string */
    public $version = '2024-04-15';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    protected $scheme = 'https';

    /** @var string */
    public $serviceCode = 'gwlb';
}

/**
 * @method string getClientToken()
 * @method string getServerGroupId()
 * @method string getServers()
 * @method string getDryRun()
 */
class AddServersToServerGroup extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServerGroupId($value)
    {
        $this->data['ServerGroupId'] = $value;
        $this->options['form_params']['ServerGroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServers($value)
    {
        $this->data['Servers'] = $value;
        $this->options['form_params']['Servers'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDryRun($value)
    {
        $this->data['DryRun'] = $value;
        $this->options['form_params']['DryRun'] = $value;

        return $this;
    }
}

/**
 * @method string getClientToken()
 * @method string getServerGroupId()
 * @method string getTag()
 * @method string getDryRun()
 * @method string getLoadBalancerId()
 * @method string getListenerDescription()
 */
class CreateListener extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServerGroupId($value)
    {
        $this->data['ServerGroupId'] = $value;
        $this->options['form_params']['ServerGroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag($value)
    {
        $this->data['Tag'] = $value;
        $this->options['form_params']['Tag'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDryRun($value)
    {
        $this->data['DryRun'] = $value;
        $this->options['form_params']['DryRun'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLoadBalancerId($value)
    {
        $this->data['LoadBalancerId'] = $value;
        $this->options['form_params']['LoadBalancerId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withListenerDescription($value)
    {
        $this->data['ListenerDescription'] = $value;
        $this->options['form_params']['ListenerDescription'] = $value;

        return $this;
    }
}

/**
 * @method string getCrossZoneEnabled()
 * @method string getClientToken()
 * @method string getAddressIpVersion()
 * @method string getResourceGroupId()
 * @method string getLoadBalancerName()
 * @method string getTag()
 * @method string getDryRun()
 * @method string getZoneMappings()
 * @method string getVpcId()
 */
class CreateLoadBalancer extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCrossZoneEnabled($value)
    {
        $this->data['CrossZoneEnabled'] = $value;
        $this->options['form_params']['CrossZoneEnabled'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAddressIpVersion($value)
    {
        $this->data['AddressIpVersion'] = $value;
        $this->options['form_params']['AddressIpVersion'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceGroupId($value)
    {
        $this->data['ResourceGroupId'] = $value;
        $this->options['form_params']['ResourceGroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLoadBalancerName($value)
    {
        $this->data['LoadBalancerName'] = $value;
        $this->options['form_params']['LoadBalancerName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag($value)
    {
        $this->data['Tag'] = $value;
        $this->options['form_params']['Tag'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDryRun($value)
    {
        $this->data['DryRun'] = $value;
        $this->options['form_params']['DryRun'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withZoneMappings($value)
    {
        $this->data['ZoneMappings'] = $value;
        $this->options['form_params']['ZoneMappings'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVpcId($value)
    {
        $this->data['VpcId'] = $value;
        $this->options['form_params']['VpcId'] = $value;

        return $this;
    }
}

/**
 * @method string getServerGroupName()
 * @method string getClientToken()
 * @method string getHealthCheckConfig()
 * @method string getScheduler()
 * @method string getResourceGroupId()
 * @method string getProtocol()
 * @method string getTag()
 * @method string getDryRun()
 * @method string getConnectionDrainConfig()
 * @method string getServerGroupType()
 * @method string getVpcId()
 */
class CreateServerGroup extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServerGroupName($value)
    {
        $this->data['ServerGroupName'] = $value;
        $this->options['form_params']['ServerGroupName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withHealthCheckConfig($value)
    {
        $this->data['HealthCheckConfig'] = $value;
        $this->options['form_params']['HealthCheckConfig'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScheduler($value)
    {
        $this->data['Scheduler'] = $value;
        $this->options['form_params']['Scheduler'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceGroupId($value)
    {
        $this->data['ResourceGroupId'] = $value;
        $this->options['form_params']['ResourceGroupId'] = $value;

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
    public function withTag($value)
    {
        $this->data['Tag'] = $value;
        $this->options['form_params']['Tag'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDryRun($value)
    {
        $this->data['DryRun'] = $value;
        $this->options['form_params']['DryRun'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withConnectionDrainConfig($value)
    {
        $this->data['ConnectionDrainConfig'] = $value;
        $this->options['form_params']['ConnectionDrainConfig'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServerGroupType($value)
    {
        $this->data['ServerGroupType'] = $value;
        $this->options['form_params']['ServerGroupType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVpcId($value)
    {
        $this->data['VpcId'] = $value;
        $this->options['form_params']['VpcId'] = $value;

        return $this;
    }
}

/**
 * @method string getClientToken()
 * @method string getListenerId()
 * @method string getDryRun()
 */
class DeleteListener extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withListenerId($value)
    {
        $this->data['ListenerId'] = $value;
        $this->options['form_params']['ListenerId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDryRun($value)
    {
        $this->data['DryRun'] = $value;
        $this->options['form_params']['DryRun'] = $value;

        return $this;
    }
}

/**
 * @method string getClientToken()
 * @method string getDryRun()
 * @method string getLoadBalancerId()
 */
class DeleteLoadBalancer extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDryRun($value)
    {
        $this->data['DryRun'] = $value;
        $this->options['form_params']['DryRun'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLoadBalancerId($value)
    {
        $this->data['LoadBalancerId'] = $value;
        $this->options['form_params']['LoadBalancerId'] = $value;

        return $this;
    }
}

/**
 * @method string getClientToken()
 * @method string getServerGroupId()
 * @method string getDryRun()
 */
class DeleteServerGroup extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServerGroupId($value)
    {
        $this->data['ServerGroupId'] = $value;
        $this->options['form_params']['ServerGroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDryRun($value)
    {
        $this->data['DryRun'] = $value;
        $this->options['form_params']['DryRun'] = $value;

        return $this;
    }
}

/**
 * @method string getAcceptLanguage()
 */
class DescribeRegions extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAcceptLanguage($value)
    {
        $this->data['AcceptLanguage'] = $value;
        $this->options['form_params']['AcceptLanguage'] = $value;

        return $this;
    }
}

/**
 * @method string getAcceptLanguage()
 */
class DescribeZones extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAcceptLanguage($value)
    {
        $this->data['AcceptLanguage'] = $value;
        $this->options['form_params']['AcceptLanguage'] = $value;

        return $this;
    }
}

/**
 * @method string getListenerId()
 */
class GetListenerAttribute extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withListenerId($value)
    {
        $this->data['ListenerId'] = $value;
        $this->options['form_params']['ListenerId'] = $value;

        return $this;
    }
}

/**
 * @method string getSkip()
 * @method string getListenerId()
 * @method string getNextToken()
 * @method string getFilter()
 * @method string getMaxResults()
 */
class GetListenerHealthStatus extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSkip($value)
    {
        $this->data['Skip'] = $value;
        $this->options['form_params']['Skip'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withListenerId($value)
    {
        $this->data['ListenerId'] = $value;
        $this->options['form_params']['ListenerId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNextToken($value)
    {
        $this->data['NextToken'] = $value;
        $this->options['form_params']['NextToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFilter($value)
    {
        $this->data['Filter'] = $value;
        $this->options['form_params']['Filter'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMaxResults($value)
    {
        $this->data['MaxResults'] = $value;
        $this->options['form_params']['MaxResults'] = $value;

        return $this;
    }
}

/**
 * @method string getLoadBalancerId()
 */
class GetLoadBalancerAttribute extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLoadBalancerId($value)
    {
        $this->data['LoadBalancerId'] = $value;
        $this->options['form_params']['LoadBalancerId'] = $value;

        return $this;
    }
}

/**
 * @method string getLoadBalancerIds()
 * @method string getSkip()
 * @method string getNextToken()
 * @method string getTag()
 * @method string getListenerIds()
 * @method string getMaxResults()
 */
class ListListeners extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLoadBalancerIds($value)
    {
        $this->data['LoadBalancerIds'] = $value;
        $this->options['form_params']['LoadBalancerIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSkip($value)
    {
        $this->data['Skip'] = $value;
        $this->options['form_params']['Skip'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNextToken($value)
    {
        $this->data['NextToken'] = $value;
        $this->options['form_params']['NextToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag($value)
    {
        $this->data['Tag'] = $value;
        $this->options['form_params']['Tag'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withListenerIds($value)
    {
        $this->data['ListenerIds'] = $value;
        $this->options['form_params']['ListenerIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMaxResults($value)
    {
        $this->data['MaxResults'] = $value;
        $this->options['form_params']['MaxResults'] = $value;

        return $this;
    }
}

/**
 * @method string getLoadBalancerNames()
 * @method string getLoadBalancerIds()
 * @method string getSkip()
 * @method string getAddressIpVersion()
 * @method string getResourceGroupId()
 * @method string getZoneIds()
 * @method string getNextToken()
 * @method string getVpcIds()
 * @method string getTag()
 * @method string getLoadBalancerBusinessStatus()
 * @method string getLoadBalancerStatus()
 * @method string getMaxResults()
 */
class ListLoadBalancers extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLoadBalancerNames($value)
    {
        $this->data['LoadBalancerNames'] = $value;
        $this->options['form_params']['LoadBalancerNames'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLoadBalancerIds($value)
    {
        $this->data['LoadBalancerIds'] = $value;
        $this->options['form_params']['LoadBalancerIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSkip($value)
    {
        $this->data['Skip'] = $value;
        $this->options['form_params']['Skip'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAddressIpVersion($value)
    {
        $this->data['AddressIpVersion'] = $value;
        $this->options['form_params']['AddressIpVersion'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceGroupId($value)
    {
        $this->data['ResourceGroupId'] = $value;
        $this->options['form_params']['ResourceGroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withZoneIds($value)
    {
        $this->data['ZoneIds'] = $value;
        $this->options['form_params']['ZoneIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNextToken($value)
    {
        $this->data['NextToken'] = $value;
        $this->options['form_params']['NextToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVpcIds($value)
    {
        $this->data['VpcIds'] = $value;
        $this->options['form_params']['VpcIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag($value)
    {
        $this->data['Tag'] = $value;
        $this->options['form_params']['Tag'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLoadBalancerBusinessStatus($value)
    {
        $this->data['LoadBalancerBusinessStatus'] = $value;
        $this->options['form_params']['LoadBalancerBusinessStatus'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLoadBalancerStatus($value)
    {
        $this->data['LoadBalancerStatus'] = $value;
        $this->options['form_params']['LoadBalancerStatus'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMaxResults($value)
    {
        $this->data['MaxResults'] = $value;
        $this->options['form_params']['MaxResults'] = $value;

        return $this;
    }
}

/**
 * @method string getServerGroupNames()
 * @method string getSkip()
 * @method string getResourceGroupId()
 * @method string getNextToken()
 * @method string getTag()
 * @method string getServerGroupIds()
 * @method string getServerGroupType()
 * @method string getVpcId()
 * @method string getMaxResults()
 */
class ListServerGroups extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServerGroupNames($value)
    {
        $this->data['ServerGroupNames'] = $value;
        $this->options['form_params']['ServerGroupNames'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSkip($value)
    {
        $this->data['Skip'] = $value;
        $this->options['form_params']['Skip'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceGroupId($value)
    {
        $this->data['ResourceGroupId'] = $value;
        $this->options['form_params']['ResourceGroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNextToken($value)
    {
        $this->data['NextToken'] = $value;
        $this->options['form_params']['NextToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag($value)
    {
        $this->data['Tag'] = $value;
        $this->options['form_params']['Tag'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServerGroupIds($value)
    {
        $this->data['ServerGroupIds'] = $value;
        $this->options['form_params']['ServerGroupIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServerGroupType($value)
    {
        $this->data['ServerGroupType'] = $value;
        $this->options['form_params']['ServerGroupType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVpcId($value)
    {
        $this->data['VpcId'] = $value;
        $this->options['form_params']['VpcId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMaxResults($value)
    {
        $this->data['MaxResults'] = $value;
        $this->options['form_params']['MaxResults'] = $value;

        return $this;
    }
}

/**
 * @method string getSkip()
 * @method string getServerGroupId()
 * @method string getNextToken()
 * @method string getServerIds()
 * @method string getServerIps()
 * @method string getMaxResults()
 */
class ListServerGroupServers extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSkip($value)
    {
        $this->data['Skip'] = $value;
        $this->options['form_params']['Skip'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServerGroupId($value)
    {
        $this->data['ServerGroupId'] = $value;
        $this->options['form_params']['ServerGroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNextToken($value)
    {
        $this->data['NextToken'] = $value;
        $this->options['form_params']['NextToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServerIds($value)
    {
        $this->data['ServerIds'] = $value;
        $this->options['form_params']['ServerIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServerIps($value)
    {
        $this->data['ServerIps'] = $value;
        $this->options['form_params']['ServerIps'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMaxResults($value)
    {
        $this->data['MaxResults'] = $value;
        $this->options['form_params']['MaxResults'] = $value;

        return $this;
    }
}

/**
 * @method string getNextToken()
 * @method string getTag()
 * @method string getResourceId()
 * @method string getResourceType()
 * @method string getMaxResults()
 */
class ListTagResources extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNextToken($value)
    {
        $this->data['NextToken'] = $value;
        $this->options['form_params']['NextToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag($value)
    {
        $this->data['Tag'] = $value;
        $this->options['form_params']['Tag'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId($value)
    {
        $this->data['ResourceId'] = $value;
        $this->options['form_params']['ResourceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceType($value)
    {
        $this->data['ResourceType'] = $value;
        $this->options['form_params']['ResourceType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMaxResults($value)
    {
        $this->data['MaxResults'] = $value;
        $this->options['form_params']['MaxResults'] = $value;

        return $this;
    }
}

/**
 * @method string getClientToken()
 * @method string getResourceId()
 * @method string getDryRun()
 * @method string getResourceType()
 * @method string getNewResourceGroupId()
 */
class MoveResourceGroup extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId($value)
    {
        $this->data['ResourceId'] = $value;
        $this->options['form_params']['ResourceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDryRun($value)
    {
        $this->data['DryRun'] = $value;
        $this->options['form_params']['DryRun'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceType($value)
    {
        $this->data['ResourceType'] = $value;
        $this->options['form_params']['ResourceType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNewResourceGroupId($value)
    {
        $this->data['NewResourceGroupId'] = $value;
        $this->options['form_params']['NewResourceGroupId'] = $value;

        return $this;
    }
}

/**
 * @method string getClientToken()
 * @method string getServerGroupId()
 * @method string getServers()
 * @method string getDryRun()
 */
class RemoveServersFromServerGroup extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServerGroupId($value)
    {
        $this->data['ServerGroupId'] = $value;
        $this->options['form_params']['ServerGroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServers($value)
    {
        $this->data['Servers'] = $value;
        $this->options['form_params']['Servers'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDryRun($value)
    {
        $this->data['DryRun'] = $value;
        $this->options['form_params']['DryRun'] = $value;

        return $this;
    }
}

/**
 * @method string getClientToken()
 * @method string getTag()
 * @method string getResourceId()
 * @method string getDryRun()
 * @method string getResourceType()
 */
class TagResources extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag($value)
    {
        $this->data['Tag'] = $value;
        $this->options['form_params']['Tag'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId($value)
    {
        $this->data['ResourceId'] = $value;
        $this->options['form_params']['ResourceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDryRun($value)
    {
        $this->data['DryRun'] = $value;
        $this->options['form_params']['DryRun'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceType($value)
    {
        $this->data['ResourceType'] = $value;
        $this->options['form_params']['ResourceType'] = $value;

        return $this;
    }
}

/**
 * @method string getClientToken()
 * @method string getAll()
 * @method string getResourceId()
 * @method string getDryRun()
 * @method string getResourceType()
 * @method string getTagKey()
 */
class UntagResources extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAll($value)
    {
        $this->data['All'] = $value;
        $this->options['form_params']['All'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId($value)
    {
        $this->data['ResourceId'] = $value;
        $this->options['form_params']['ResourceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDryRun($value)
    {
        $this->data['DryRun'] = $value;
        $this->options['form_params']['DryRun'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceType($value)
    {
        $this->data['ResourceType'] = $value;
        $this->options['form_params']['ResourceType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTagKey($value)
    {
        $this->data['TagKey'] = $value;
        $this->options['form_params']['TagKey'] = $value;

        return $this;
    }
}

/**
 * @method string getClientToken()
 * @method string getServerGroupId()
 * @method string getListenerId()
 * @method string getDryRun()
 * @method string getListenerDescription()
 */
class UpdateListenerAttribute extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServerGroupId($value)
    {
        $this->data['ServerGroupId'] = $value;
        $this->options['form_params']['ServerGroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withListenerId($value)
    {
        $this->data['ListenerId'] = $value;
        $this->options['form_params']['ListenerId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDryRun($value)
    {
        $this->data['DryRun'] = $value;
        $this->options['form_params']['DryRun'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withListenerDescription($value)
    {
        $this->data['ListenerDescription'] = $value;
        $this->options['form_params']['ListenerDescription'] = $value;

        return $this;
    }
}

/**
 * @method string getCrossZoneEnabled()
 * @method string getClientToken()
 * @method string getLoadBalancerName()
 * @method string getDryRun()
 * @method string getLoadBalancerId()
 */
class UpdateLoadBalancerAttribute extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCrossZoneEnabled($value)
    {
        $this->data['CrossZoneEnabled'] = $value;
        $this->options['form_params']['CrossZoneEnabled'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLoadBalancerName($value)
    {
        $this->data['LoadBalancerName'] = $value;
        $this->options['form_params']['LoadBalancerName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDryRun($value)
    {
        $this->data['DryRun'] = $value;
        $this->options['form_params']['DryRun'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLoadBalancerId($value)
    {
        $this->data['LoadBalancerId'] = $value;
        $this->options['form_params']['LoadBalancerId'] = $value;

        return $this;
    }
}

/**
 * @method string getClientToken()
 * @method string getDryRun()
 * @method string getZoneMappings()
 * @method string getLoadBalancerId()
 */
class UpdateLoadBalancerZones extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDryRun($value)
    {
        $this->data['DryRun'] = $value;
        $this->options['form_params']['DryRun'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withZoneMappings($value)
    {
        $this->data['ZoneMappings'] = $value;
        $this->options['form_params']['ZoneMappings'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLoadBalancerId($value)
    {
        $this->data['LoadBalancerId'] = $value;
        $this->options['form_params']['LoadBalancerId'] = $value;

        return $this;
    }
}

/**
 * @method string getServerGroupName()
 * @method string getClientToken()
 * @method string getHealthCheckConfig()
 * @method string getServerGroupId()
 * @method string getScheduler()
 * @method string getDryRun()
 * @method string getConnectionDrainConfig()
 */
class UpdateServerGroupAttribute extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServerGroupName($value)
    {
        $this->data['ServerGroupName'] = $value;
        $this->options['form_params']['ServerGroupName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withHealthCheckConfig($value)
    {
        $this->data['HealthCheckConfig'] = $value;
        $this->options['form_params']['HealthCheckConfig'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServerGroupId($value)
    {
        $this->data['ServerGroupId'] = $value;
        $this->options['form_params']['ServerGroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScheduler($value)
    {
        $this->data['Scheduler'] = $value;
        $this->options['form_params']['Scheduler'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDryRun($value)
    {
        $this->data['DryRun'] = $value;
        $this->options['form_params']['DryRun'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withConnectionDrainConfig($value)
    {
        $this->data['ConnectionDrainConfig'] = $value;
        $this->options['form_params']['ConnectionDrainConfig'] = $value;

        return $this;
    }
}
