<?php

namespace AlibabaCloud\Eflo\V20220530;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AssignLeniPrivateIpAddress assignLeniPrivateIpAddress(array $options = [])
 * @method AssignPrivateIpAddress assignPrivateIpAddress(array $options = [])
 * @method AssociateVpdCidrBlock associateVpdCidrBlock(array $options = [])
 * @method CreateElasticNetworkInterface createElasticNetworkInterface(array $options = [])
 * @method CreateEr createEr(array $options = [])
 * @method CreateErAttachment createErAttachment(array $options = [])
 * @method CreateErRouteMap createErRouteMap(array $options = [])
 * @method CreateSubnet createSubnet(array $options = [])
 * @method CreateVcc createVcc(array $options = [])
 * @method CreateVccGrantRule createVccGrantRule(array $options = [])
 * @method CreateVccRouteEntry createVccRouteEntry(array $options = [])
 * @method CreateVpd createVpd(array $options = [])
 * @method CreateVpdGrantRule createVpdGrantRule(array $options = [])
 * @method DeleteElasticNetworkInterface deleteElasticNetworkInterface(array $options = [])
 * @method DeleteEr deleteEr(array $options = [])
 * @method DeleteErAttachment deleteErAttachment(array $options = [])
 * @method DeleteErRouteMap deleteErRouteMap(array $options = [])
 * @method DeleteSubnet deleteSubnet(array $options = [])
 * @method DeleteVccGrantRule deleteVccGrantRule(array $options = [])
 * @method DeleteVccRouteEntry deleteVccRouteEntry(array $options = [])
 * @method DeleteVpd deleteVpd(array $options = [])
 * @method DeleteVpdGrantRule deleteVpdGrantRule(array $options = [])
 * @method DescribeSlr describeSlr(array $options = [])
 * @method GetElasticNetworkInterface getElasticNetworkInterface(array $options = [])
 * @method GetEr getEr(array $options = [])
 * @method GetErAttachment getErAttachment(array $options = [])
 * @method GetErRouteEntry getErRouteEntry(array $options = [])
 * @method GetErRouteMap getErRouteMap(array $options = [])
 * @method GetFabricTopology getFabricTopology(array $options = [])
 * @method GetLeniPrivateIpAddress getLeniPrivateIpAddress(array $options = [])
 * @method GetLniPrivateIpAddress getLniPrivateIpAddress(array $options = [])
 * @method GetNetworkInterface getNetworkInterface(array $options = [])
 * @method GetNodeInfoForPod getNodeInfoForPod(array $options = [])
 * @method GetSubnet getSubnet(array $options = [])
 * @method GetVcc getVcc(array $options = [])
 * @method GetVccGrantRule getVccGrantRule(array $options = [])
 * @method GetVccRouteEntry getVccRouteEntry(array $options = [])
 * @method GetVpd getVpd(array $options = [])
 * @method GetVpdGrantRule getVpdGrantRule(array $options = [])
 * @method GetVpdRouteEntry getVpdRouteEntry(array $options = [])
 * @method InitializeVcc initializeVcc(array $options = [])
 * @method ListElasticNetworkInterfaces listElasticNetworkInterfaces(array $options = [])
 * @method ListErAttachments listErAttachments(array $options = [])
 * @method ListErRouteEntries listErRouteEntries(array $options = [])
 * @method ListErRouteMaps listErRouteMaps(array $options = [])
 * @method ListErs listErs(array $options = [])
 * @method ListInstancesByNcd listInstancesByNcd(array $options = [])
 * @method ListLeniPrivateIpAddresses listLeniPrivateIpAddresses(array $options = [])
 * @method ListLniPrivateIpAddress listLniPrivateIpAddress(array $options = [])
 * @method ListNetworkInterfaces listNetworkInterfaces(array $options = [])
 * @method ListNodeInfosForPod listNodeInfosForPod(array $options = [])
 * @method ListSubnets listSubnets(array $options = [])
 * @method ListVccGrantRules listVccGrantRules(array $options = [])
 * @method ListVccRouteEntries listVccRouteEntries(array $options = [])
 * @method ListVccs listVccs(array $options = [])
 * @method ListVpdGrantRules listVpdGrantRules(array $options = [])
 * @method ListVpdRouteEntries listVpdRouteEntries(array $options = [])
 * @method ListVpds listVpds(array $options = [])
 * @method QueryInstanceNcd queryInstanceNcd(array $options = [])
 * @method UnassignLeniPrivateIpAddress unassignLeniPrivateIpAddress(array $options = [])
 * @method UnAssignPrivateIpAddress unAssignPrivateIpAddress(array $options = [])
 * @method UnAssociateVpdCidrBlock unAssociateVpdCidrBlock(array $options = [])
 * @method UpdateElasticNetworkInterface updateElasticNetworkInterface(array $options = [])
 * @method UpdateEr updateEr(array $options = [])
 * @method UpdateErAttachment updateErAttachment(array $options = [])
 * @method UpdateErRouteMap updateErRouteMap(array $options = [])
 * @method UpdateLeniPrivateIpAddress updateLeniPrivateIpAddress(array $options = [])
 * @method UpdateSubnet updateSubnet(array $options = [])
 * @method UpdateVcc updateVcc(array $options = [])
 * @method UpdateVpd updateVpd(array $options = [])
 */
class EfloApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'eflo';

    /** @var string */
    public $version = '2022-05-30';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'eflo';
}

/**
 * @method string getClientToken()
 * @method string getDescription()
 * @method string getPrivateIpAddress()
 * @method string getElasticNetworkInterfaceId()
 */
class AssignLeniPrivateIpAddress extends Rpc
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
    public function withPrivateIpAddress($value)
    {
        $this->data['PrivateIpAddress'] = $value;
        $this->options['form_params']['PrivateIpAddress'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withElasticNetworkInterfaceId($value)
    {
        $this->data['ElasticNetworkInterfaceId'] = $value;
        $this->options['form_params']['ElasticNetworkInterfaceId'] = $value;

        return $this;
    }
}

/**
 * @method string getClientToken()
 * @method string getDescription()
 * @method string getAssignMac()
 * @method string getSubnetId()
 * @method string getSkipConfig()
 * @method string getPrivateIpAddress()
 * @method string getNetworkInterfaceId()
 */
class AssignPrivateIpAddress extends Rpc
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
    public function withAssignMac($value)
    {
        $this->data['AssignMac'] = $value;
        $this->options['form_params']['AssignMac'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSubnetId($value)
    {
        $this->data['SubnetId'] = $value;
        $this->options['form_params']['SubnetId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSkipConfig($value)
    {
        $this->data['SkipConfig'] = $value;
        $this->options['form_params']['SkipConfig'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPrivateIpAddress($value)
    {
        $this->data['PrivateIpAddress'] = $value;
        $this->options['form_params']['PrivateIpAddress'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNetworkInterfaceId($value)
    {
        $this->data['NetworkInterfaceId'] = $value;
        $this->options['form_params']['NetworkInterfaceId'] = $value;

        return $this;
    }
}

/**
 * @method string getVpdId()
 * @method string getSecondaryCidrBlock()
 */
class AssociateVpdCidrBlock extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVpdId($value)
    {
        $this->data['VpdId'] = $value;
        $this->options['form_params']['VpdId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSecondaryCidrBlock($value)
    {
        $this->data['SecondaryCidrBlock'] = $value;
        $this->options['form_params']['SecondaryCidrBlock'] = $value;

        return $this;
    }
}

/**
 * @method string getClientToken()
 * @method string getSecurityGroupId()
 * @method string getDescription()
 * @method string getNodeId()
 * @method string getVSwitchId()
 * @method string getVpcId()
 * @method string getZoneId()
 */
class CreateElasticNetworkInterface extends Rpc
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
    public function withSecurityGroupId($value)
    {
        $this->data['SecurityGroupId'] = $value;
        $this->options['form_params']['SecurityGroupId'] = $value;

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
    public function withNodeId($value)
    {
        $this->data['NodeId'] = $value;
        $this->options['form_params']['NodeId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVSwitchId($value)
    {
        $this->data['VSwitchId'] = $value;
        $this->options['form_params']['VSwitchId'] = $value;

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
    public function withZoneId($value)
    {
        $this->data['ZoneId'] = $value;
        $this->options['form_params']['ZoneId'] = $value;

        return $this;
    }
}

/**
 * @method string getDescription()
 * @method string getErName()
 * @method string getMasterZoneId()
 * @method string getResourceGroupId()
 */
class CreateEr extends Rpc
{

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
    public function withErName($value)
    {
        $this->data['ErName'] = $value;
        $this->options['form_params']['ErName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMasterZoneId($value)
    {
        $this->data['MasterZoneId'] = $value;
        $this->options['form_params']['MasterZoneId'] = $value;

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
}

/**
 * @method string getResourceTenantId()
 * @method string getAutoReceiveAllRoute()
 * @method string getInstanceType()
 * @method string getErAttachmentName()
 * @method string getErId()
 * @method string getInstanceId()
 */
class CreateErAttachment extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceTenantId($value)
    {
        $this->data['ResourceTenantId'] = $value;
        $this->options['form_params']['ResourceTenantId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAutoReceiveAllRoute($value)
    {
        $this->data['AutoReceiveAllRoute'] = $value;
        $this->options['form_params']['AutoReceiveAllRoute'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceType($value)
    {
        $this->data['InstanceType'] = $value;
        $this->options['form_params']['InstanceType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withErAttachmentName($value)
    {
        $this->data['ErAttachmentName'] = $value;
        $this->options['form_params']['ErAttachmentName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withErId($value)
    {
        $this->data['ErId'] = $value;
        $this->options['form_params']['ErId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }
}

/**
 * @method string getReceptionInstanceType()
 * @method string getDescription()
 * @method string getReceptionInstanceId()
 * @method string getRouteMapAction()
 * @method string getTransmissionInstanceType()
 * @method string getDestinationCidrBlock()
 * @method string getErId()
 * @method string getRouteMapNum()
 * @method string getReceptionInstanceOwner()
 * @method string getTransmissionInstanceOwner()
 * @method string getTransmissionInstanceId()
 */
class CreateErRouteMap extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withReceptionInstanceType($value)
    {
        $this->data['ReceptionInstanceType'] = $value;
        $this->options['form_params']['ReceptionInstanceType'] = $value;

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
    public function withReceptionInstanceId($value)
    {
        $this->data['ReceptionInstanceId'] = $value;
        $this->options['form_params']['ReceptionInstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRouteMapAction($value)
    {
        $this->data['RouteMapAction'] = $value;
        $this->options['form_params']['RouteMapAction'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTransmissionInstanceType($value)
    {
        $this->data['TransmissionInstanceType'] = $value;
        $this->options['form_params']['TransmissionInstanceType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDestinationCidrBlock($value)
    {
        $this->data['DestinationCidrBlock'] = $value;
        $this->options['form_params']['DestinationCidrBlock'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withErId($value)
    {
        $this->data['ErId'] = $value;
        $this->options['form_params']['ErId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRouteMapNum($value)
    {
        $this->data['RouteMapNum'] = $value;
        $this->options['form_params']['RouteMapNum'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withReceptionInstanceOwner($value)
    {
        $this->data['ReceptionInstanceOwner'] = $value;
        $this->options['form_params']['ReceptionInstanceOwner'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTransmissionInstanceOwner($value)
    {
        $this->data['TransmissionInstanceOwner'] = $value;
        $this->options['form_params']['TransmissionInstanceOwner'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTransmissionInstanceId($value)
    {
        $this->data['TransmissionInstanceId'] = $value;
        $this->options['form_params']['TransmissionInstanceId'] = $value;

        return $this;
    }
}

/**
 * @method string getType()
 * @method string getCidr()
 * @method array getTag()
 * @method string getVpdId()
 * @method string getZoneId()
 * @method string getSubnetName()
 */
class CreateSubnet extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withType($value)
    {
        $this->data['Type'] = $value;
        $this->options['form_params']['Type'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCidr($value)
    {
        $this->data['Cidr'] = $value;
        $this->options['form_params']['Cidr'] = $value;

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
				$this->options['form_params']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['form_params']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVpdId($value)
    {
        $this->data['VpdId'] = $value;
        $this->options['form_params']['VpdId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withZoneId($value)
    {
        $this->data['ZoneId'] = $value;
        $this->options['form_params']['ZoneId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSubnetName($value)
    {
        $this->data['SubnetName'] = $value;
        $this->options['form_params']['SubnetName'] = $value;

        return $this;
    }
}

/**
 * @method string getBgpCidr()
 * @method string getCenId()
 * @method string getDescription()
 * @method string getCenOwnerId()
 * @method string getAccessCouldService()
 * @method string getResourceGroupId()
 * @method string getVccName()
 * @method array getTag()
 * @method string getVccId()
 * @method string getConnectionType()
 * @method string getBandwidth()
 * @method string getVSwitchId()
 * @method string getVpdId()
 * @method string getVpcId()
 * @method string getZoneId()
 */
class CreateVcc extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBgpCidr($value)
    {
        $this->data['BgpCidr'] = $value;
        $this->options['form_params']['BgpCidr'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCenId($value)
    {
        $this->data['CenId'] = $value;
        $this->options['form_params']['CenId'] = $value;

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
    public function withCenOwnerId($value)
    {
        $this->data['CenOwnerId'] = $value;
        $this->options['form_params']['CenOwnerId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessCouldService($value)
    {
        $this->data['AccessCouldService'] = $value;
        $this->options['form_params']['AccessCouldService'] = $value;

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
    public function withVccName($value)
    {
        $this->data['VccName'] = $value;
        $this->options['form_params']['VccName'] = $value;

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
				$this->options['form_params']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['form_params']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVccId($value)
    {
        $this->data['VccId'] = $value;
        $this->options['form_params']['VccId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withConnectionType($value)
    {
        $this->data['ConnectionType'] = $value;
        $this->options['form_params']['ConnectionType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBandwidth($value)
    {
        $this->data['Bandwidth'] = $value;
        $this->options['form_params']['Bandwidth'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVSwitchId($value)
    {
        $this->data['VSwitchId'] = $value;
        $this->options['form_params']['VSwitchId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVpdId($value)
    {
        $this->data['VpdId'] = $value;
        $this->options['form_params']['VpdId'] = $value;

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
    public function withZoneId($value)
    {
        $this->data['ZoneId'] = $value;
        $this->options['form_params']['ZoneId'] = $value;

        return $this;
    }
}

/**
 * @method string getErId()
 * @method string getGrantTenantId()
 * @method string getInstanceId()
 */
class CreateVccGrantRule extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withErId($value)
    {
        $this->data['ErId'] = $value;
        $this->options['form_params']['ErId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGrantTenantId($value)
    {
        $this->data['GrantTenantId'] = $value;
        $this->options['form_params']['GrantTenantId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }
}

/**
 * @method string getDestinationCidrBlock()
 * @method string getVccId()
 */
class CreateVccRouteEntry extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDestinationCidrBlock($value)
    {
        $this->data['DestinationCidrBlock'] = $value;
        $this->options['form_params']['DestinationCidrBlock'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVccId($value)
    {
        $this->data['VccId'] = $value;
        $this->options['form_params']['VccId'] = $value;

        return $this;
    }
}

/**
 * @method string getVpdName()
 * @method string getResourceGroupId()
 * @method string getCidr()
 * @method array getSubnets()
 * @method array getTag()
 */
class CreateVpd extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVpdName($value)
    {
        $this->data['VpdName'] = $value;
        $this->options['form_params']['VpdName'] = $value;

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
    public function withCidr($value)
    {
        $this->data['Cidr'] = $value;
        $this->options['form_params']['Cidr'] = $value;

        return $this;
    }

    /**
     * @param array $subnets
     *
     * @return $this
     */
	public function withSubnets(array $subnets)
	{
	    $this->data['Subnets'] = $subnets;
		foreach ($subnets as $depth1 => $depth1Value) {
			if(isset($depth1Value['RegionId'])){
				$this->options['form_params']['Subnets.' . ($depth1 + 1) . '.RegionId'] = $depth1Value['RegionId'];
			}
			if(isset($depth1Value['ZoneId'])){
				$this->options['form_params']['Subnets.' . ($depth1 + 1) . '.ZoneId'] = $depth1Value['ZoneId'];
			}
			if(isset($depth1Value['Cidr'])){
				$this->options['form_params']['Subnets.' . ($depth1 + 1) . '.Cidr'] = $depth1Value['Cidr'];
			}
			if(isset($depth1Value['SubnetName'])){
				$this->options['form_params']['Subnets.' . ($depth1 + 1) . '.SubnetName'] = $depth1Value['SubnetName'];
			}
			if(isset($depth1Value['Type'])){
				$this->options['form_params']['Subnets.' . ($depth1 + 1) . '.Type'] = $depth1Value['Type'];
			}
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
				$this->options['form_params']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['form_params']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }
}

/**
 * @method string getErId()
 * @method string getGrantTenantId()
 * @method string getInstanceId()
 */
class CreateVpdGrantRule extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withErId($value)
    {
        $this->data['ErId'] = $value;
        $this->options['form_params']['ErId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGrantTenantId($value)
    {
        $this->data['GrantTenantId'] = $value;
        $this->options['form_params']['GrantTenantId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }
}

/**
 * @method string getClientToken()
 * @method string getElasticNetworkInterfaceId()
 */
class DeleteElasticNetworkInterface extends Rpc
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
    public function withElasticNetworkInterfaceId($value)
    {
        $this->data['ElasticNetworkInterfaceId'] = $value;
        $this->options['form_params']['ElasticNetworkInterfaceId'] = $value;

        return $this;
    }
}

/**
 * @method string getErId()
 */
class DeleteEr extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withErId($value)
    {
        $this->data['ErId'] = $value;
        $this->options['form_params']['ErId'] = $value;

        return $this;
    }
}

/**
 * @method string getErId()
 * @method string getErAttachmentId()
 */
class DeleteErAttachment extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withErId($value)
    {
        $this->data['ErId'] = $value;
        $this->options['form_params']['ErId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withErAttachmentId($value)
    {
        $this->data['ErAttachmentId'] = $value;
        $this->options['form_params']['ErAttachmentId'] = $value;

        return $this;
    }
}

/**
 * @method string getErId()
 * @method array getErRouteMapIds()
 */
class DeleteErRouteMap extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withErId($value)
    {
        $this->data['ErId'] = $value;
        $this->options['form_params']['ErId'] = $value;

        return $this;
    }

    /**
     * @param array $erRouteMapIds
     *
     * @return $this
     */
	public function withErRouteMapIds(array $erRouteMapIds)
	{
	    $this->data['ErRouteMapIds'] = $erRouteMapIds;
		foreach ($erRouteMapIds as $i => $iValue) {
			$this->options['form_params']['ErRouteMapIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getSubnetId()
 * @method string getVpdId()
 * @method string getZoneId()
 */
class DeleteSubnet extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSubnetId($value)
    {
        $this->data['SubnetId'] = $value;
        $this->options['form_params']['SubnetId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVpdId($value)
    {
        $this->data['VpdId'] = $value;
        $this->options['form_params']['VpdId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withZoneId($value)
    {
        $this->data['ZoneId'] = $value;
        $this->options['form_params']['ZoneId'] = $value;

        return $this;
    }
}

/**
 * @method string getErId()
 * @method string getInstanceId()
 * @method string getGrantRuleId()
 */
class DeleteVccGrantRule extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withErId($value)
    {
        $this->data['ErId'] = $value;
        $this->options['form_params']['ErId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGrantRuleId($value)
    {
        $this->data['GrantRuleId'] = $value;
        $this->options['form_params']['GrantRuleId'] = $value;

        return $this;
    }
}

/**
 * @method string getDestinationCidrBlock()
 * @method string getVccId()
 * @method string getVccRouteEntryId()
 */
class DeleteVccRouteEntry extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDestinationCidrBlock($value)
    {
        $this->data['DestinationCidrBlock'] = $value;
        $this->options['form_params']['DestinationCidrBlock'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVccId($value)
    {
        $this->data['VccId'] = $value;
        $this->options['form_params']['VccId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVccRouteEntryId($value)
    {
        $this->data['VccRouteEntryId'] = $value;
        $this->options['form_params']['VccRouteEntryId'] = $value;

        return $this;
    }
}

/**
 * @method string getVpdId()
 */
class DeleteVpd extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVpdId($value)
    {
        $this->data['VpdId'] = $value;
        $this->options['form_params']['VpdId'] = $value;

        return $this;
    }
}

/**
 * @method string getErId()
 * @method string getGrantTenantId()
 * @method string getInstanceId()
 * @method string getGrantRuleId()
 */
class DeleteVpdGrantRule extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withErId($value)
    {
        $this->data['ErId'] = $value;
        $this->options['form_params']['ErId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGrantTenantId($value)
    {
        $this->data['GrantTenantId'] = $value;
        $this->options['form_params']['GrantTenantId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGrantRuleId($value)
    {
        $this->data['GrantRuleId'] = $value;
        $this->options['form_params']['GrantRuleId'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceGroupId()
 */
class DescribeSlr extends Rpc
{

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
}

/**
 * @method string getElasticNetworkInterfaceId()
 */
class GetElasticNetworkInterface extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withElasticNetworkInterfaceId($value)
    {
        $this->data['ElasticNetworkInterfaceId'] = $value;
        $this->options['form_params']['ElasticNetworkInterfaceId'] = $value;

        return $this;
    }
}

/**
 * @method string getErId()
 */
class GetEr extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withErId($value)
    {
        $this->data['ErId'] = $value;
        $this->options['form_params']['ErId'] = $value;

        return $this;
    }
}

/**
 * @method string getErId()
 * @method string getErAttachmentId()
 */
class GetErAttachment extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withErId($value)
    {
        $this->data['ErId'] = $value;
        $this->options['form_params']['ErId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withErAttachmentId($value)
    {
        $this->data['ErAttachmentId'] = $value;
        $this->options['form_params']['ErAttachmentId'] = $value;

        return $this;
    }
}

/**
 * @method string getErId()
 * @method string getErRouteEntryId()
 */
class GetErRouteEntry extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withErId($value)
    {
        $this->data['ErId'] = $value;
        $this->options['form_params']['ErId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withErRouteEntryId($value)
    {
        $this->data['ErRouteEntryId'] = $value;
        $this->options['form_params']['ErRouteEntryId'] = $value;

        return $this;
    }
}

/**
 * @method string getErId()
 * @method string getErRouteMapId()
 */
class GetErRouteMap extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withErId($value)
    {
        $this->data['ErId'] = $value;
        $this->options['form_params']['ErId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withErRouteMapId($value)
    {
        $this->data['ErRouteMapId'] = $value;
        $this->options['form_params']['ErRouteMapId'] = $value;

        return $this;
    }
}

/**
 * @method string getClusterId()
 * @method string getVpdId()
 * @method string getVpcId()
 * @method array getLniIds()
 * @method array getNodeIds()
 */
class GetFabricTopology extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClusterId($value)
    {
        $this->data['ClusterId'] = $value;
        $this->options['form_params']['ClusterId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVpdId($value)
    {
        $this->data['VpdId'] = $value;
        $this->options['form_params']['VpdId'] = $value;

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
     * @param array $lniIds
     *
     * @return $this
     */
	public function withLniIds(array $lniIds)
	{
	    $this->data['LniIds'] = $lniIds;
		foreach ($lniIds as $i => $iValue) {
			$this->options['form_params']['LniIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $nodeIds
     *
     * @return $this
     */
	public function withNodeIds(array $nodeIds)
	{
	    $this->data['NodeIds'] = $nodeIds;
		foreach ($nodeIds as $i => $iValue) {
			$this->options['form_params']['NodeIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getIpName()
 * @method string getElasticNetworkInterfaceId()
 */
class GetLeniPrivateIpAddress extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIpName($value)
    {
        $this->data['IpName'] = $value;
        $this->options['form_params']['IpName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withElasticNetworkInterfaceId($value)
    {
        $this->data['ElasticNetworkInterfaceId'] = $value;
        $this->options['form_params']['ElasticNetworkInterfaceId'] = $value;

        return $this;
    }
}

/**
 * @method string getIpName()
 * @method string getNetworkInterfaceId()
 */
class GetLniPrivateIpAddress extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIpName($value)
    {
        $this->data['IpName'] = $value;
        $this->options['form_params']['IpName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNetworkInterfaceId($value)
    {
        $this->data['NetworkInterfaceId'] = $value;
        $this->options['form_params']['NetworkInterfaceId'] = $value;

        return $this;
    }
}

/**
 * @method string getSubnetId()
 * @method string getNetworkInterfaceId()
 */
class GetNetworkInterface extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSubnetId($value)
    {
        $this->data['SubnetId'] = $value;
        $this->options['form_params']['SubnetId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNetworkInterfaceId($value)
    {
        $this->data['NetworkInterfaceId'] = $value;
        $this->options['form_params']['NetworkInterfaceId'] = $value;

        return $this;
    }
}

/**
 * @method string getNodeId()
 */
class GetNodeInfoForPod extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNodeId($value)
    {
        $this->data['NodeId'] = $value;
        $this->options['form_params']['NodeId'] = $value;

        return $this;
    }
}

/**
 * @method string getSubnetId()
 * @method string getVpdId()
 */
class GetSubnet extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSubnetId($value)
    {
        $this->data['SubnetId'] = $value;
        $this->options['form_params']['SubnetId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVpdId($value)
    {
        $this->data['VpdId'] = $value;
        $this->options['form_params']['VpdId'] = $value;

        return $this;
    }
}

/**
 * @method string getClientToken()
 * @method string getPageNumber()
 * @method string getEnablePage()
 * @method string getPageSize()
 * @method string getVccId()
 */
class GetVcc extends Rpc
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
    public function withPageNumber($value)
    {
        $this->data['PageNumber'] = $value;
        $this->options['form_params']['PageNumber'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEnablePage($value)
    {
        $this->data['EnablePage'] = $value;
        $this->options['form_params']['EnablePage'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['form_params']['PageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVccId($value)
    {
        $this->data['VccId'] = $value;
        $this->options['form_params']['VccId'] = $value;

        return $this;
    }
}

/**
 * @method string getErId()
 * @method string getGrantTenantId()
 * @method string getInstanceId()
 * @method string getGrantRuleId()
 */
class GetVccGrantRule extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withErId($value)
    {
        $this->data['ErId'] = $value;
        $this->options['form_params']['ErId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGrantTenantId($value)
    {
        $this->data['GrantTenantId'] = $value;
        $this->options['form_params']['GrantTenantId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGrantRuleId($value)
    {
        $this->data['GrantRuleId'] = $value;
        $this->options['form_params']['GrantRuleId'] = $value;

        return $this;
    }
}

/**
 * @method string getVccId()
 * @method string getVccRouteEntryId()
 */
class GetVccRouteEntry extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVccId($value)
    {
        $this->data['VccId'] = $value;
        $this->options['form_params']['VccId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVccRouteEntryId($value)
    {
        $this->data['VccRouteEntryId'] = $value;
        $this->options['form_params']['VccRouteEntryId'] = $value;

        return $this;
    }
}

/**
 * @method string getVpdId()
 */
class GetVpd extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVpdId($value)
    {
        $this->data['VpdId'] = $value;
        $this->options['form_params']['VpdId'] = $value;

        return $this;
    }
}

/**
 * @method string getErId()
 * @method string getGrantTenantId()
 * @method string getInstanceId()
 * @method string getGrantRuleId()
 */
class GetVpdGrantRule extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withErId($value)
    {
        $this->data['ErId'] = $value;
        $this->options['form_params']['ErId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGrantTenantId($value)
    {
        $this->data['GrantTenantId'] = $value;
        $this->options['form_params']['GrantTenantId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGrantRuleId($value)
    {
        $this->data['GrantRuleId'] = $value;
        $this->options['form_params']['GrantRuleId'] = $value;

        return $this;
    }
}

/**
 * @method string getVpdRouteEntryId()
 * @method string getVpdId()
 */
class GetVpdRouteEntry extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVpdRouteEntryId($value)
    {
        $this->data['VpdRouteEntryId'] = $value;
        $this->options['form_params']['VpdRouteEntryId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVpdId($value)
    {
        $this->data['VpdId'] = $value;
        $this->options['form_params']['VpdId'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceGroupId()
 */
class InitializeVcc extends Rpc
{

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
}

/**
 * @method string getNetworkType()
 * @method string getType()
 * @method string getPageNumber()
 * @method string getPageSize()
 * @method string getNodeId()
 * @method string getIp()
 * @method string getVSwitchId()
 * @method string getVpcId()
 * @method string getZoneId()
 * @method string getElasticNetworkInterfaceId()
 * @method string getStatus()
 */
class ListElasticNetworkInterfaces extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNetworkType($value)
    {
        $this->data['NetworkType'] = $value;
        $this->options['form_params']['NetworkType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withType($value)
    {
        $this->data['Type'] = $value;
        $this->options['form_params']['Type'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNumber($value)
    {
        $this->data['PageNumber'] = $value;
        $this->options['form_params']['PageNumber'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['form_params']['PageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNodeId($value)
    {
        $this->data['NodeId'] = $value;
        $this->options['form_params']['NodeId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIp($value)
    {
        $this->data['Ip'] = $value;
        $this->options['form_params']['Ip'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVSwitchId($value)
    {
        $this->data['VSwitchId'] = $value;
        $this->options['form_params']['VSwitchId'] = $value;

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
    public function withZoneId($value)
    {
        $this->data['ZoneId'] = $value;
        $this->options['form_params']['ZoneId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withElasticNetworkInterfaceId($value)
    {
        $this->data['ElasticNetworkInterfaceId'] = $value;
        $this->options['form_params']['ElasticNetworkInterfaceId'] = $value;

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
 * @method string getPageNumber()
 * @method string getResourceTenantId()
 * @method string getResourceGroupId()
 * @method string getAutoReceiveAllRoute()
 * @method string getPageSize()
 * @method string getInstanceType()
 * @method string getErAttachmentName()
 * @method string getErId()
 * @method string getInstanceId()
 * @method string getErAttachmentId()
 * @method string getEnablePage()
 * @method string getStatus()
 */
class ListErAttachments extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNumber($value)
    {
        $this->data['PageNumber'] = $value;
        $this->options['form_params']['PageNumber'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceTenantId($value)
    {
        $this->data['ResourceTenantId'] = $value;
        $this->options['form_params']['ResourceTenantId'] = $value;

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
    public function withAutoReceiveAllRoute($value)
    {
        $this->data['AutoReceiveAllRoute'] = $value;
        $this->options['form_params']['AutoReceiveAllRoute'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['form_params']['PageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceType($value)
    {
        $this->data['InstanceType'] = $value;
        $this->options['form_params']['InstanceType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withErAttachmentName($value)
    {
        $this->data['ErAttachmentName'] = $value;
        $this->options['form_params']['ErAttachmentName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withErId($value)
    {
        $this->data['ErId'] = $value;
        $this->options['form_params']['ErId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withErAttachmentId($value)
    {
        $this->data['ErAttachmentId'] = $value;
        $this->options['form_params']['ErAttachmentId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEnablePage($value)
    {
        $this->data['EnablePage'] = $value;
        $this->options['form_params']['EnablePage'] = $value;

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
 * @method string getIgnoreDetailedRouteEntry()
 * @method string getPageNumber()
 * @method string getRouteType()
 * @method string getResourceGroupId()
 * @method string getPageSize()
 * @method string getNextHopId()
 * @method string getNextHopType()
 * @method string getDestinationCidrBlock()
 * @method string getErId()
 * @method string getInstanceId()
 * @method string getEnablePage()
 * @method string getStatus()
 */
class ListErRouteEntries extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIgnoreDetailedRouteEntry($value)
    {
        $this->data['IgnoreDetailedRouteEntry'] = $value;
        $this->options['form_params']['IgnoreDetailedRouteEntry'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNumber($value)
    {
        $this->data['PageNumber'] = $value;
        $this->options['form_params']['PageNumber'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRouteType($value)
    {
        $this->data['RouteType'] = $value;
        $this->options['form_params']['RouteType'] = $value;

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
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['form_params']['PageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNextHopId($value)
    {
        $this->data['NextHopId'] = $value;
        $this->options['form_params']['NextHopId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNextHopType($value)
    {
        $this->data['NextHopType'] = $value;
        $this->options['form_params']['NextHopType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDestinationCidrBlock($value)
    {
        $this->data['DestinationCidrBlock'] = $value;
        $this->options['form_params']['DestinationCidrBlock'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withErId($value)
    {
        $this->data['ErId'] = $value;
        $this->options['form_params']['ErId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEnablePage($value)
    {
        $this->data['EnablePage'] = $value;
        $this->options['form_params']['EnablePage'] = $value;

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
 * @method string getReceptionInstanceType()
 * @method string getReceptionInstanceId()
 * @method string getErRouteMapNum()
 * @method string getPageNumber()
 * @method string getResourceGroupId()
 * @method string getRouteMapAction()
 * @method string getTransmissionInstanceType()
 * @method string getPageSize()
 * @method string getTransmissionInstanceName()
 * @method string getDestinationCidrBlock()
 * @method string getErId()
 * @method string getErRouteMapId()
 * @method string getReceptionInstanceName()
 * @method string getEnablePage()
 * @method string getTransmissionInstanceId()
 */
class ListErRouteMaps extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withReceptionInstanceType($value)
    {
        $this->data['ReceptionInstanceType'] = $value;
        $this->options['form_params']['ReceptionInstanceType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withReceptionInstanceId($value)
    {
        $this->data['ReceptionInstanceId'] = $value;
        $this->options['form_params']['ReceptionInstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withErRouteMapNum($value)
    {
        $this->data['ErRouteMapNum'] = $value;
        $this->options['form_params']['ErRouteMapNum'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNumber($value)
    {
        $this->data['PageNumber'] = $value;
        $this->options['form_params']['PageNumber'] = $value;

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
    public function withRouteMapAction($value)
    {
        $this->data['RouteMapAction'] = $value;
        $this->options['form_params']['RouteMapAction'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTransmissionInstanceType($value)
    {
        $this->data['TransmissionInstanceType'] = $value;
        $this->options['form_params']['TransmissionInstanceType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['form_params']['PageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTransmissionInstanceName($value)
    {
        $this->data['TransmissionInstanceName'] = $value;
        $this->options['form_params']['TransmissionInstanceName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDestinationCidrBlock($value)
    {
        $this->data['DestinationCidrBlock'] = $value;
        $this->options['form_params']['DestinationCidrBlock'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withErId($value)
    {
        $this->data['ErId'] = $value;
        $this->options['form_params']['ErId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withErRouteMapId($value)
    {
        $this->data['ErRouteMapId'] = $value;
        $this->options['form_params']['ErRouteMapId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withReceptionInstanceName($value)
    {
        $this->data['ReceptionInstanceName'] = $value;
        $this->options['form_params']['ReceptionInstanceName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEnablePage($value)
    {
        $this->data['EnablePage'] = $value;
        $this->options['form_params']['EnablePage'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTransmissionInstanceId($value)
    {
        $this->data['TransmissionInstanceId'] = $value;
        $this->options['form_params']['TransmissionInstanceId'] = $value;

        return $this;
    }
}

/**
 * @method string getMasterZoneId()
 * @method string getPageNumber()
 * @method string getResourceGroupId()
 * @method string getPageSize()
 * @method string getInstanceType()
 * @method string getErId()
 * @method string getErName()
 * @method string getInstanceId()
 * @method string getEnablePage()
 */
class ListErs extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMasterZoneId($value)
    {
        $this->data['MasterZoneId'] = $value;
        $this->options['form_params']['MasterZoneId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNumber($value)
    {
        $this->data['PageNumber'] = $value;
        $this->options['form_params']['PageNumber'] = $value;

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
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['form_params']['PageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceType($value)
    {
        $this->data['InstanceType'] = $value;
        $this->options['form_params']['InstanceType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withErId($value)
    {
        $this->data['ErId'] = $value;
        $this->options['form_params']['ErId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withErName($value)
    {
        $this->data['ErName'] = $value;
        $this->options['form_params']['ErName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEnablePage($value)
    {
        $this->data['EnablePage'] = $value;
        $this->options['form_params']['EnablePage'] = $value;

        return $this;
    }
}

/**
 * @method string getMaxNcd()
 * @method string getInstanceId()
 * @method string getInstanceType()
 */
class ListInstancesByNcd extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMaxNcd($value)
    {
        $this->data['MaxNcd'] = $value;
        $this->options['form_params']['MaxNcd'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceType($value)
    {
        $this->data['InstanceType'] = $value;
        $this->options['form_params']['InstanceType'] = $value;

        return $this;
    }
}

/**
 * @method string getPageNumber()
 * @method string getPageSize()
 * @method string getPrivateIpAddress()
 * @method string getIpName()
 * @method string getElasticNetworkInterfaceId()
 * @method string getStatus()
 */
class ListLeniPrivateIpAddresses extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNumber($value)
    {
        $this->data['PageNumber'] = $value;
        $this->options['form_params']['PageNumber'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['form_params']['PageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPrivateIpAddress($value)
    {
        $this->data['PrivateIpAddress'] = $value;
        $this->options['form_params']['PrivateIpAddress'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIpName($value)
    {
        $this->data['IpName'] = $value;
        $this->options['form_params']['IpName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withElasticNetworkInterfaceId($value)
    {
        $this->data['ElasticNetworkInterfaceId'] = $value;
        $this->options['form_params']['ElasticNetworkInterfaceId'] = $value;

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
 * @method string getPageNumber()
 * @method string getPageSize()
 * @method string getIp()
 * @method string getEnablePage()
 * @method string getIpName()
 * @method string getNetworkInterfaceId()
 */
class ListLniPrivateIpAddress extends Rpc
{

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
    public function withPageNumber($value)
    {
        $this->data['PageNumber'] = $value;
        $this->options['form_params']['PageNumber'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['form_params']['PageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIp($value)
    {
        $this->data['Ip'] = $value;
        $this->options['form_params']['Ip'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEnablePage($value)
    {
        $this->data['EnablePage'] = $value;
        $this->options['form_params']['EnablePage'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIpName($value)
    {
        $this->data['IpName'] = $value;
        $this->options['form_params']['IpName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNetworkInterfaceId($value)
    {
        $this->data['NetworkInterfaceId'] = $value;
        $this->options['form_params']['NetworkInterfaceId'] = $value;

        return $this;
    }
}

/**
 * @method string getPageNumber()
 * @method string getPageSize()
 * @method string getNodeId()
 * @method string getSubnetId()
 * @method string getIp()
 * @method string getVpdId()
 * @method string getEnablePage()
 * @method string getNetworkInterfaceId()
 */
class ListNetworkInterfaces extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNumber($value)
    {
        $this->data['PageNumber'] = $value;
        $this->options['form_params']['PageNumber'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['form_params']['PageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNodeId($value)
    {
        $this->data['NodeId'] = $value;
        $this->options['form_params']['NodeId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSubnetId($value)
    {
        $this->data['SubnetId'] = $value;
        $this->options['form_params']['SubnetId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIp($value)
    {
        $this->data['Ip'] = $value;
        $this->options['form_params']['Ip'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVpdId($value)
    {
        $this->data['VpdId'] = $value;
        $this->options['form_params']['VpdId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEnablePage($value)
    {
        $this->data['EnablePage'] = $value;
        $this->options['form_params']['EnablePage'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNetworkInterfaceId($value)
    {
        $this->data['NetworkInterfaceId'] = $value;
        $this->options['form_params']['NetworkInterfaceId'] = $value;

        return $this;
    }
}

/**
 * @method string getClusterId()
 * @method string getZoneId()
 * @method string getNodeId()
 */
class ListNodeInfosForPod extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClusterId($value)
    {
        $this->data['ClusterId'] = $value;
        $this->options['form_params']['ClusterId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withZoneId($value)
    {
        $this->data['ZoneId'] = $value;
        $this->options['form_params']['ZoneId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNodeId($value)
    {
        $this->data['NodeId'] = $value;
        $this->options['form_params']['NodeId'] = $value;

        return $this;
    }
}

/**
 * @method string getType()
 * @method string getPageNumber()
 * @method string getResourceGroupId()
 * @method string getPageSize()
 * @method array getTag()
 * @method string getSubnetId()
 * @method string getVpdId()
 * @method string getEnablePage()
 * @method string getZoneId()
 * @method string getSubnetName()
 * @method string getStatus()
 */
class ListSubnets extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withType($value)
    {
        $this->data['Type'] = $value;
        $this->options['form_params']['Type'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNumber($value)
    {
        $this->data['PageNumber'] = $value;
        $this->options['form_params']['PageNumber'] = $value;

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
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['form_params']['PageSize'] = $value;

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
				$this->options['form_params']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['form_params']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSubnetId($value)
    {
        $this->data['SubnetId'] = $value;
        $this->options['form_params']['SubnetId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVpdId($value)
    {
        $this->data['VpdId'] = $value;
        $this->options['form_params']['VpdId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEnablePage($value)
    {
        $this->data['EnablePage'] = $value;
        $this->options['form_params']['EnablePage'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withZoneId($value)
    {
        $this->data['ZoneId'] = $value;
        $this->options['form_params']['ZoneId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSubnetName($value)
    {
        $this->data['SubnetName'] = $value;
        $this->options['form_params']['SubnetName'] = $value;

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
 * @method string getGrantTenantId()
 * @method string getPageNumber()
 * @method string getResourceGroupId()
 * @method string getGrantRuleId()
 * @method string getPageSize()
 * @method string getErId()
 * @method string getForSelect()
 * @method string getInstanceId()
 * @method string getInstanceName()
 * @method string getEnablePage()
 */
class ListVccGrantRules extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGrantTenantId($value)
    {
        $this->data['GrantTenantId'] = $value;
        $this->options['form_params']['GrantTenantId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNumber($value)
    {
        $this->data['PageNumber'] = $value;
        $this->options['form_params']['PageNumber'] = $value;

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
    public function withGrantRuleId($value)
    {
        $this->data['GrantRuleId'] = $value;
        $this->options['form_params']['GrantRuleId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['form_params']['PageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withErId($value)
    {
        $this->data['ErId'] = $value;
        $this->options['form_params']['ErId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withForSelect($value)
    {
        $this->data['ForSelect'] = $value;
        $this->options['form_params']['ForSelect'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceName($value)
    {
        $this->data['InstanceName'] = $value;
        $this->options['form_params']['InstanceName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEnablePage($value)
    {
        $this->data['EnablePage'] = $value;
        $this->options['form_params']['EnablePage'] = $value;

        return $this;
    }
}

/**
 * @method string getIgnoreDetailedRouteEntry()
 * @method string getPageNumber()
 * @method string getRouteType()
 * @method string getResourceGroupId()
 * @method string getPageSize()
 * @method string getNextHopId()
 * @method string getVccId()
 * @method string getNextHopType()
 * @method string getVpdRouteEntryId()
 * @method string getDestinationCidrBlock()
 * @method string getEnablePage()
 * @method string getStatus()
 */
class ListVccRouteEntries extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIgnoreDetailedRouteEntry($value)
    {
        $this->data['IgnoreDetailedRouteEntry'] = $value;
        $this->options['form_params']['IgnoreDetailedRouteEntry'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNumber($value)
    {
        $this->data['PageNumber'] = $value;
        $this->options['form_params']['PageNumber'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRouteType($value)
    {
        $this->data['RouteType'] = $value;
        $this->options['form_params']['RouteType'] = $value;

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
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['form_params']['PageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNextHopId($value)
    {
        $this->data['NextHopId'] = $value;
        $this->options['form_params']['NextHopId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVccId($value)
    {
        $this->data['VccId'] = $value;
        $this->options['form_params']['VccId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNextHopType($value)
    {
        $this->data['NextHopType'] = $value;
        $this->options['form_params']['NextHopType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVpdRouteEntryId($value)
    {
        $this->data['VpdRouteEntryId'] = $value;
        $this->options['form_params']['VpdRouteEntryId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDestinationCidrBlock($value)
    {
        $this->data['DestinationCidrBlock'] = $value;
        $this->options['form_params']['DestinationCidrBlock'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEnablePage($value)
    {
        $this->data['EnablePage'] = $value;
        $this->options['form_params']['EnablePage'] = $value;

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
 * @method string getCenId()
 * @method string getPageNumber()
 * @method string getResourceGroupId()
 * @method string getPageSize()
 * @method array getTag()
 * @method string getVccId()
 * @method string getBandwidth()
 * @method string getExStatus()
 * @method string getFilterErId()
 * @method string getVpdId()
 * @method string getVpcId()
 * @method string getEnablePage()
 * @method string getStatus()
 */
class ListVccs extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCenId($value)
    {
        $this->data['CenId'] = $value;
        $this->options['form_params']['CenId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNumber($value)
    {
        $this->data['PageNumber'] = $value;
        $this->options['form_params']['PageNumber'] = $value;

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
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['form_params']['PageSize'] = $value;

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
				$this->options['form_params']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['form_params']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVccId($value)
    {
        $this->data['VccId'] = $value;
        $this->options['form_params']['VccId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBandwidth($value)
    {
        $this->data['Bandwidth'] = $value;
        $this->options['form_params']['Bandwidth'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExStatus($value)
    {
        $this->data['ExStatus'] = $value;
        $this->options['form_params']['ExStatus'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFilterErId($value)
    {
        $this->data['FilterErId'] = $value;
        $this->options['form_params']['FilterErId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVpdId($value)
    {
        $this->data['VpdId'] = $value;
        $this->options['form_params']['VpdId'] = $value;

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
    public function withEnablePage($value)
    {
        $this->data['EnablePage'] = $value;
        $this->options['form_params']['EnablePage'] = $value;

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
 * @method string getGrantTenantId()
 * @method string getPageNumber()
 * @method string getResourceGroupId()
 * @method string getGrantRuleId()
 * @method string getPageSize()
 * @method string getErId()
 * @method string getForSelect()
 * @method string getInstanceId()
 * @method string getInstanceName()
 * @method string getEnablePage()
 */
class ListVpdGrantRules extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGrantTenantId($value)
    {
        $this->data['GrantTenantId'] = $value;
        $this->options['form_params']['GrantTenantId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNumber($value)
    {
        $this->data['PageNumber'] = $value;
        $this->options['form_params']['PageNumber'] = $value;

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
    public function withGrantRuleId($value)
    {
        $this->data['GrantRuleId'] = $value;
        $this->options['form_params']['GrantRuleId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['form_params']['PageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withErId($value)
    {
        $this->data['ErId'] = $value;
        $this->options['form_params']['ErId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withForSelect($value)
    {
        $this->data['ForSelect'] = $value;
        $this->options['form_params']['ForSelect'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceName($value)
    {
        $this->data['InstanceName'] = $value;
        $this->options['form_params']['InstanceName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEnablePage($value)
    {
        $this->data['EnablePage'] = $value;
        $this->options['form_params']['EnablePage'] = $value;

        return $this;
    }
}

/**
 * @method string getIgnoreDetailedRouteEntry()
 * @method string getPageNumber()
 * @method string getRouteType()
 * @method string getResourceGroupId()
 * @method string getPageSize()
 * @method string getNextHopId()
 * @method string getNextHopType()
 * @method string getVpdRouteEntryId()
 * @method string getDestinationCidrBlock()
 * @method string getVpdId()
 * @method string getEnablePage()
 * @method string getStatus()
 */
class ListVpdRouteEntries extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIgnoreDetailedRouteEntry($value)
    {
        $this->data['IgnoreDetailedRouteEntry'] = $value;
        $this->options['form_params']['IgnoreDetailedRouteEntry'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNumber($value)
    {
        $this->data['PageNumber'] = $value;
        $this->options['form_params']['PageNumber'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRouteType($value)
    {
        $this->data['RouteType'] = $value;
        $this->options['form_params']['RouteType'] = $value;

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
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['form_params']['PageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNextHopId($value)
    {
        $this->data['NextHopId'] = $value;
        $this->options['form_params']['NextHopId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNextHopType($value)
    {
        $this->data['NextHopType'] = $value;
        $this->options['form_params']['NextHopType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVpdRouteEntryId($value)
    {
        $this->data['VpdRouteEntryId'] = $value;
        $this->options['form_params']['VpdRouteEntryId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDestinationCidrBlock($value)
    {
        $this->data['DestinationCidrBlock'] = $value;
        $this->options['form_params']['DestinationCidrBlock'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVpdId($value)
    {
        $this->data['VpdId'] = $value;
        $this->options['form_params']['VpdId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEnablePage($value)
    {
        $this->data['EnablePage'] = $value;
        $this->options['form_params']['EnablePage'] = $value;

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
 * @method string getVpdName()
 * @method string getPageNumber()
 * @method string getWithDependence()
 * @method string getResourceGroupId()
 * @method string getWithoutVcc()
 * @method string getPageSize()
 * @method array getTag()
 * @method string getForSelect()
 * @method string getFilterErId()
 * @method string getVpdId()
 * @method string getEnablePage()
 * @method string getStatus()
 */
class ListVpds extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVpdName($value)
    {
        $this->data['VpdName'] = $value;
        $this->options['form_params']['VpdName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNumber($value)
    {
        $this->data['PageNumber'] = $value;
        $this->options['form_params']['PageNumber'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWithDependence($value)
    {
        $this->data['WithDependence'] = $value;
        $this->options['form_params']['WithDependence'] = $value;

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
    public function withWithoutVcc($value)
    {
        $this->data['WithoutVcc'] = $value;
        $this->options['form_params']['WithoutVcc'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['form_params']['PageSize'] = $value;

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
				$this->options['form_params']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['form_params']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withForSelect($value)
    {
        $this->data['ForSelect'] = $value;
        $this->options['form_params']['ForSelect'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFilterErId($value)
    {
        $this->data['FilterErId'] = $value;
        $this->options['form_params']['FilterErId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVpdId($value)
    {
        $this->data['VpdId'] = $value;
        $this->options['form_params']['VpdId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEnablePage($value)
    {
        $this->data['EnablePage'] = $value;
        $this->options['form_params']['EnablePage'] = $value;

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
 * @method string getInstanceId2()
 * @method string getInstanceId1()
 * @method string getInstanceType()
 */
class QueryInstanceNcd extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId2($value)
    {
        $this->data['InstanceId2'] = $value;
        $this->options['form_params']['InstanceId2'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId1($value)
    {
        $this->data['InstanceId1'] = $value;
        $this->options['form_params']['InstanceId1'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceType($value)
    {
        $this->data['InstanceType'] = $value;
        $this->options['form_params']['InstanceType'] = $value;

        return $this;
    }
}

/**
 * @method string getClientToken()
 * @method string getIpName()
 * @method string getElasticNetworkInterfaceId()
 */
class UnassignLeniPrivateIpAddress extends Rpc
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
    public function withIpName($value)
    {
        $this->data['IpName'] = $value;
        $this->options['form_params']['IpName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withElasticNetworkInterfaceId($value)
    {
        $this->data['ElasticNetworkInterfaceId'] = $value;
        $this->options['form_params']['ElasticNetworkInterfaceId'] = $value;

        return $this;
    }
}

/**
 * @method string getSubnetId()
 * @method string getClientToken()
 * @method string getPrivateIpAddress()
 * @method string getIpName()
 * @method string getNetworkInterfaceId()
 */
class UnAssignPrivateIpAddress extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSubnetId($value)
    {
        $this->data['SubnetId'] = $value;
        $this->options['form_params']['SubnetId'] = $value;

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
    public function withPrivateIpAddress($value)
    {
        $this->data['PrivateIpAddress'] = $value;
        $this->options['form_params']['PrivateIpAddress'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIpName($value)
    {
        $this->data['IpName'] = $value;
        $this->options['form_params']['IpName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNetworkInterfaceId($value)
    {
        $this->data['NetworkInterfaceId'] = $value;
        $this->options['form_params']['NetworkInterfaceId'] = $value;

        return $this;
    }
}

/**
 * @method string getVpdId()
 * @method string getSecondaryCidrBlock()
 */
class UnAssociateVpdCidrBlock extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVpdId($value)
    {
        $this->data['VpdId'] = $value;
        $this->options['form_params']['VpdId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSecondaryCidrBlock($value)
    {
        $this->data['SecondaryCidrBlock'] = $value;
        $this->options['form_params']['SecondaryCidrBlock'] = $value;

        return $this;
    }
}

/**
 * @method string getClientToken()
 * @method string getSecurityGroupId()
 * @method string getDescription()
 * @method string getElasticNetworkInterfaceId()
 */
class UpdateElasticNetworkInterface extends Rpc
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
    public function withSecurityGroupId($value)
    {
        $this->data['SecurityGroupId'] = $value;
        $this->options['form_params']['SecurityGroupId'] = $value;

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
    public function withElasticNetworkInterfaceId($value)
    {
        $this->data['ElasticNetworkInterfaceId'] = $value;
        $this->options['form_params']['ElasticNetworkInterfaceId'] = $value;

        return $this;
    }
}

/**
 * @method string getErId()
 * @method string getDescription()
 * @method string getErName()
 */
class UpdateEr extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withErId($value)
    {
        $this->data['ErId'] = $value;
        $this->options['form_params']['ErId'] = $value;

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
    public function withErName($value)
    {
        $this->data['ErName'] = $value;
        $this->options['form_params']['ErName'] = $value;

        return $this;
    }
}

/**
 * @method string getErId()
 * @method string getErAttachmentId()
 * @method string getErAttachmentName()
 */
class UpdateErAttachment extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withErId($value)
    {
        $this->data['ErId'] = $value;
        $this->options['form_params']['ErId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withErAttachmentId($value)
    {
        $this->data['ErAttachmentId'] = $value;
        $this->options['form_params']['ErAttachmentId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withErAttachmentName($value)
    {
        $this->data['ErAttachmentName'] = $value;
        $this->options['form_params']['ErAttachmentName'] = $value;

        return $this;
    }
}

/**
 * @method string getErId()
 * @method string getDescription()
 * @method string getErRouteMapId()
 */
class UpdateErRouteMap extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withErId($value)
    {
        $this->data['ErId'] = $value;
        $this->options['form_params']['ErId'] = $value;

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
    public function withErRouteMapId($value)
    {
        $this->data['ErRouteMapId'] = $value;
        $this->options['form_params']['ErRouteMapId'] = $value;

        return $this;
    }
}

/**
 * @method string getDescription()
 * @method string getIpName()
 * @method string getElasticNetworkInterfaceId()
 */
class UpdateLeniPrivateIpAddress extends Rpc
{

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
    public function withIpName($value)
    {
        $this->data['IpName'] = $value;
        $this->options['form_params']['IpName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withElasticNetworkInterfaceId($value)
    {
        $this->data['ElasticNetworkInterfaceId'] = $value;
        $this->options['form_params']['ElasticNetworkInterfaceId'] = $value;

        return $this;
    }
}

/**
 * @method string getSubnetId()
 * @method string getVpdId()
 * @method string getZoneId()
 * @method string getSubnetName()
 */
class UpdateSubnet extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSubnetId($value)
    {
        $this->data['SubnetId'] = $value;
        $this->options['form_params']['SubnetId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVpdId($value)
    {
        $this->data['VpdId'] = $value;
        $this->options['form_params']['VpdId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withZoneId($value)
    {
        $this->data['ZoneId'] = $value;
        $this->options['form_params']['ZoneId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSubnetName($value)
    {
        $this->data['SubnetName'] = $value;
        $this->options['form_params']['SubnetName'] = $value;

        return $this;
    }
}

/**
 * @method string getBandwidth()
 * @method string getOrderId()
 * @method string getVccName()
 * @method string getVccId()
 */
class UpdateVcc extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBandwidth($value)
    {
        $this->data['Bandwidth'] = $value;
        $this->options['form_params']['Bandwidth'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrderId($value)
    {
        $this->data['OrderId'] = $value;
        $this->options['form_params']['OrderId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVccName($value)
    {
        $this->data['VccName'] = $value;
        $this->options['form_params']['VccName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVccId($value)
    {
        $this->data['VccId'] = $value;
        $this->options['form_params']['VccId'] = $value;

        return $this;
    }
}

/**
 * @method string getVpdName()
 * @method string getVpdId()
 */
class UpdateVpd extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVpdName($value)
    {
        $this->data['VpdName'] = $value;
        $this->options['form_params']['VpdName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVpdId($value)
    {
        $this->data['VpdId'] = $value;
        $this->options['form_params']['VpdId'] = $value;

        return $this;
    }
}
