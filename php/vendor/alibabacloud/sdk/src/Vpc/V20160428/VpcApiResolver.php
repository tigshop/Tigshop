<?php

namespace AlibabaCloud\Vpc\V20160428;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method ActivateRouterInterface activateRouterInterface(array $options = [])
 * @method ActiveFlowLog activeFlowLog(array $options = [])
 * @method AddBgpNetwork addBgpNetwork(array $options = [])
 * @method AddCommonBandwidthPackageIp addCommonBandwidthPackageIp(array $options = [])
 * @method AddCommonBandwidthPackageIps addCommonBandwidthPackageIps(array $options = [])
 * @method AddGlobalAccelerationInstanceIp addGlobalAccelerationInstanceIp(array $options = [])
 * @method AddIPv6TranslatorAclListEntry addIPv6TranslatorAclListEntry(array $options = [])
 * @method AddPublicIpAddressPoolCidrBlock addPublicIpAddressPoolCidrBlock(array $options = [])
 * @method AddSourcesToTrafficMirrorSession addSourcesToTrafficMirrorSession(array $options = [])
 * @method AllocateEipAddress allocateEipAddress(array $options = [])
 * @method AllocateEipAddressPro allocateEipAddressPro(array $options = [])
 * @method AllocateEipSegmentAddress allocateEipSegmentAddress(array $options = [])
 * @method AllocateIpv6InternetBandwidth allocateIpv6InternetBandwidth(array $options = [])
 * @method AllocateVpcIpv6Cidr allocateVpcIpv6Cidr(array $options = [])
 * @method ApplyPhysicalConnectionLOA applyPhysicalConnectionLOA(array $options = [])
 * @method AssociateEipAddress associateEipAddress(array $options = [])
 * @method AssociateEipAddressBatch associateEipAddressBatch(array $options = [])
 * @method AssociateGlobalAccelerationInstance associateGlobalAccelerationInstance(array $options = [])
 * @method AssociateHaVip associateHaVip(array $options = [])
 * @method AssociateNetworkAcl associateNetworkAcl(array $options = [])
 * @method AssociatePhysicalConnectionToVirtualBorderRouter associatePhysicalConnectionToVirtualBorderRouter(array $options = [])
 * @method AssociateRouteTable associateRouteTable(array $options = [])
 * @method AssociateRouteTablesWithVpcGatewayEndpoint associateRouteTablesWithVpcGatewayEndpoint(array $options = [])
 * @method AssociateRouteTableWithGateway associateRouteTableWithGateway(array $options = [])
 * @method AssociateVpcCidrBlock associateVpcCidrBlock(array $options = [])
 * @method AssociateVpnGatewayWithCertificate associateVpnGatewayWithCertificate(array $options = [])
 * @method AttachDhcpOptionsSetToVpc attachDhcpOptionsSetToVpc(array $options = [])
 * @method AttachVbrToVpconn attachVbrToVpconn(array $options = [])
 * @method CancelCommonBandwidthPackageIpBandwidth cancelCommonBandwidthPackageIpBandwidth(array $options = [])
 * @method CancelPhysicalConnection cancelPhysicalConnection(array $options = [])
 * @method ChangeResourceGroup changeResourceGroup(array $options = [])
 * @method CheckCanAllocateVpcPrivateIpAddress checkCanAllocateVpcPrivateIpAddress(array $options = [])
 * @method CheckVpnBgpEnabled checkVpnBgpEnabled(array $options = [])
 * @method CompletePhysicalConnectionLOA completePhysicalConnectionLOA(array $options = [])
 * @method ConfirmPhysicalConnection confirmPhysicalConnection(array $options = [])
 * @method ConnectRouterInterface connectRouterInterface(array $options = [])
 * @method ConvertBandwidthPackage convertBandwidthPackage(array $options = [])
 * @method CopyNetworkAclEntries copyNetworkAclEntries(array $options = [])
 * @method CreateBgpGroup createBgpGroup(array $options = [])
 * @method CreateBgpPeer createBgpPeer(array $options = [])
 * @method CreateCommonBandwidthPackage createCommonBandwidthPackage(array $options = [])
 * @method CreateCustomerGateway createCustomerGateway(array $options = [])
 * @method CreateDefaultVpc createDefaultVpc(array $options = [])
 * @method CreateDefaultVSwitch createDefaultVSwitch(array $options = [])
 * @method CreateDhcpOptionsSet createDhcpOptionsSet(array $options = [])
 * @method CreateExpressCloudConnection createExpressCloudConnection(array $options = [])
 * @method CreateFlowLog createFlowLog(array $options = [])
 * @method CreateForwardEntry createForwardEntry(array $options = [])
 * @method CreateFullNatEntry createFullNatEntry(array $options = [])
 * @method CreateGlobalAccelerationInstance createGlobalAccelerationInstance(array $options = [])
 * @method CreateHaVip createHaVip(array $options = [])
 * @method CreateIpsecServer createIpsecServer(array $options = [])
 * @method CreateIpv4Gateway createIpv4Gateway(array $options = [])
 * @method CreateIpv6EgressOnlyRule createIpv6EgressOnlyRule(array $options = [])
 * @method CreateIpv6Gateway createIpv6Gateway(array $options = [])
 * @method CreateIPv6Translator createIPv6Translator(array $options = [])
 * @method CreateIPv6TranslatorAclList createIPv6TranslatorAclList(array $options = [])
 * @method CreateIPv6TranslatorEntry createIPv6TranslatorEntry(array $options = [])
 * @method CreateNatGateway createNatGateway(array $options = [])
 * @method CreateNatIp createNatIp(array $options = [])
 * @method CreateNatIpCidr createNatIpCidr(array $options = [])
 * @method CreateNetworkAcl createNetworkAcl(array $options = [])
 * @method CreatePhysicalConnection createPhysicalConnection(array $options = [])
 * @method CreatePhysicalConnectionOccupancyOrder createPhysicalConnectionOccupancyOrder(array $options = [])
 * @method CreatePhysicalConnectionSetupOrder createPhysicalConnectionSetupOrder(array $options = [])
 * @method CreatePublicIpAddressPool createPublicIpAddressPool(array $options = [])
 * @method CreateRouteEntries createRouteEntries(array $options = [])
 * @method CreateRouteEntry createRouteEntry(array $options = [])
 * @method CreateRouterInterface createRouterInterface(array $options = [])
 * @method CreateRouteTable createRouteTable(array $options = [])
 * @method CreateSnatEntry createSnatEntry(array $options = [])
 * @method CreateSslVpnClientCert createSslVpnClientCert(array $options = [])
 * @method CreateSslVpnServer createSslVpnServer(array $options = [])
 * @method CreateTrafficMirrorFilter createTrafficMirrorFilter(array $options = [])
 * @method CreateTrafficMirrorFilterRules createTrafficMirrorFilterRules(array $options = [])
 * @method CreateTrafficMirrorSession createTrafficMirrorSession(array $options = [])
 * @method CreateVbrHa createVbrHa(array $options = [])
 * @method CreateVcoRouteEntry createVcoRouteEntry(array $options = [])
 * @method CreateVirtualBorderRouter createVirtualBorderRouter(array $options = [])
 * @method CreateVirtualPhysicalConnection createVirtualPhysicalConnection(array $options = [])
 * @method CreateVpc createVpc(array $options = [])
 * @method CreateVpcGatewayEndpoint createVpcGatewayEndpoint(array $options = [])
 * @method CreateVpconnFromVbr createVpconnFromVbr(array $options = [])
 * @method CreateVpcPrefixList createVpcPrefixList(array $options = [])
 * @method CreateVpnAttachment createVpnAttachment(array $options = [])
 * @method CreateVpnConnection createVpnConnection(array $options = [])
 * @method CreateVpnGateway createVpnGateway(array $options = [])
 * @method CreateVpnPbrRouteEntry createVpnPbrRouteEntry(array $options = [])
 * @method CreateVpnRouteEntry createVpnRouteEntry(array $options = [])
 * @method CreateVSwitch createVSwitch(array $options = [])
 * @method DeactivateRouterInterface deactivateRouterInterface(array $options = [])
 * @method DeactiveFlowLog deactiveFlowLog(array $options = [])
 * @method DeleteBgpGroup deleteBgpGroup(array $options = [])
 * @method DeleteBgpNetwork deleteBgpNetwork(array $options = [])
 * @method DeleteBgpPeer deleteBgpPeer(array $options = [])
 * @method DeleteCommonBandwidthPackage deleteCommonBandwidthPackage(array $options = [])
 * @method DeleteCustomerGateway deleteCustomerGateway(array $options = [])
 * @method DeleteDhcpOptionsSet deleteDhcpOptionsSet(array $options = [])
 * @method DeleteFlowLog deleteFlowLog(array $options = [])
 * @method DeleteForwardEntry deleteForwardEntry(array $options = [])
 * @method DeleteFullNatEntry deleteFullNatEntry(array $options = [])
 * @method DeleteGlobalAccelerationInstance deleteGlobalAccelerationInstance(array $options = [])
 * @method DeleteHaVip deleteHaVip(array $options = [])
 * @method DeleteIpsecServer deleteIpsecServer(array $options = [])
 * @method DeleteIpv4Gateway deleteIpv4Gateway(array $options = [])
 * @method DeleteIpv6EgressOnlyRule deleteIpv6EgressOnlyRule(array $options = [])
 * @method DeleteIpv6Gateway deleteIpv6Gateway(array $options = [])
 * @method DeleteIpv6InternetBandwidth deleteIpv6InternetBandwidth(array $options = [])
 * @method DeleteIPv6Translator deleteIPv6Translator(array $options = [])
 * @method DeleteIPv6TranslatorAclList deleteIPv6TranslatorAclList(array $options = [])
 * @method DeleteIPv6TranslatorEntry deleteIPv6TranslatorEntry(array $options = [])
 * @method DeleteNatGateway deleteNatGateway(array $options = [])
 * @method DeleteNatIp deleteNatIp(array $options = [])
 * @method DeleteNatIpCidr deleteNatIpCidr(array $options = [])
 * @method DeleteNetworkAcl deleteNetworkAcl(array $options = [])
 * @method DeletePhysicalConnection deletePhysicalConnection(array $options = [])
 * @method DeletePublicIpAddressPool deletePublicIpAddressPool(array $options = [])
 * @method DeletePublicIpAddressPoolCidrBlock deletePublicIpAddressPoolCidrBlock(array $options = [])
 * @method DeleteRouteEntries deleteRouteEntries(array $options = [])
 * @method DeleteRouteEntry deleteRouteEntry(array $options = [])
 * @method DeleteRouterInterface deleteRouterInterface(array $options = [])
 * @method DeleteRouteTable deleteRouteTable(array $options = [])
 * @method DeleteSnatEntry deleteSnatEntry(array $options = [])
 * @method DeleteSslVpnClientCert deleteSslVpnClientCert(array $options = [])
 * @method DeleteSslVpnServer deleteSslVpnServer(array $options = [])
 * @method DeleteTrafficMirrorFilter deleteTrafficMirrorFilter(array $options = [])
 * @method DeleteTrafficMirrorFilterRules deleteTrafficMirrorFilterRules(array $options = [])
 * @method DeleteTrafficMirrorSession deleteTrafficMirrorSession(array $options = [])
 * @method DeleteVbrHa deleteVbrHa(array $options = [])
 * @method DeleteVcoRouteEntry deleteVcoRouteEntry(array $options = [])
 * @method DeleteVirtualBorderRouter deleteVirtualBorderRouter(array $options = [])
 * @method DeleteVpc deleteVpc(array $options = [])
 * @method DeleteVpcGatewayEndpoint deleteVpcGatewayEndpoint(array $options = [])
 * @method DeleteVpcPrefixList deleteVpcPrefixList(array $options = [])
 * @method DeleteVpnAttachment deleteVpnAttachment(array $options = [])
 * @method DeleteVpnConnection deleteVpnConnection(array $options = [])
 * @method DeleteVpnGateway deleteVpnGateway(array $options = [])
 * @method DeleteVpnPbrRouteEntry deleteVpnPbrRouteEntry(array $options = [])
 * @method DeleteVpnRouteEntry deleteVpnRouteEntry(array $options = [])
 * @method DeleteVSwitch deleteVSwitch(array $options = [])
 * @method DeletionProtection deletionProtection(array $options = [])
 * @method DescribeAccessPoints describeAccessPoints(array $options = [])
 * @method DescribeBgpGroups describeBgpGroups(array $options = [])
 * @method DescribeBgpNetworks describeBgpNetworks(array $options = [])
 * @method DescribeBgpPeers describeBgpPeers(array $options = [])
 * @method DescribeCommonBandwidthPackages describeCommonBandwidthPackages(array $options = [])
 * @method DescribeCustomerGateway describeCustomerGateway(array $options = [])
 * @method DescribeCustomerGateways describeCustomerGateways(array $options = [])
 * @method DescribeEcGrantRelation describeEcGrantRelation(array $options = [])
 * @method DescribeEipAddresses describeEipAddresses(array $options = [])
 * @method DescribeEipGatewayInfo describeEipGatewayInfo(array $options = [])
 * @method DescribeEipMonitorData describeEipMonitorData(array $options = [])
 * @method DescribeEipSegment describeEipSegment(array $options = [])
 * @method DescribeFlowLogs describeFlowLogs(array $options = [])
 * @method DescribeForwardTableEntries describeForwardTableEntries(array $options = [])
 * @method DescribeGlobalAccelerationInstances describeGlobalAccelerationInstances(array $options = [])
 * @method DescribeGrantRulesToCen describeGrantRulesToCen(array $options = [])
 * @method DescribeHaVips describeHaVips(array $options = [])
 * @method DescribeHighDefinitionMonitorLogAttribute describeHighDefinitionMonitorLogAttribute(array $options = [])
 * @method DescribeIpv6Addresses describeIpv6Addresses(array $options = [])
 * @method DescribeIpv6EgressOnlyRules describeIpv6EgressOnlyRules(array $options = [])
 * @method DescribeIpv6GatewayAttribute describeIpv6GatewayAttribute(array $options = [])
 * @method DescribeIpv6Gateways describeIpv6Gateways(array $options = [])
 * @method DescribeIPv6TranslatorAclListAttributes describeIPv6TranslatorAclListAttributes(array $options = [])
 * @method DescribeIPv6TranslatorAclLists describeIPv6TranslatorAclLists(array $options = [])
 * @method DescribeIPv6TranslatorEntries describeIPv6TranslatorEntries(array $options = [])
 * @method DescribeIPv6Translators describeIPv6Translators(array $options = [])
 * @method DescribeNatGateways describeNatGateways(array $options = [])
 * @method DescribeNetworkAclAttributes describeNetworkAclAttributes(array $options = [])
 * @method DescribeNetworkAcls describeNetworkAcls(array $options = [])
 * @method DescribePhysicalConnectionLOA describePhysicalConnectionLOA(array $options = [])
 * @method DescribePhysicalConnections describePhysicalConnections(array $options = [])
 * @method DescribePublicIpAddress describePublicIpAddress(array $options = [])
 * @method DescribeRegions describeRegions(array $options = [])
 * @method DescribeRouteEntryList describeRouteEntryList(array $options = [])
 * @method DescribeRouterInterfaceAttribute describeRouterInterfaceAttribute(array $options = [])
 * @method DescribeRouterInterfaces describeRouterInterfaces(array $options = [])
 * @method DescribeRouteTableList describeRouteTableList(array $options = [])
 * @method DescribeRouteTables describeRouteTables(array $options = [])
 * @method DescribeServerRelatedGlobalAccelerationInstances describeServerRelatedGlobalAccelerationInstances(array $options = [])
 * @method DescribeSnatTableEntries describeSnatTableEntries(array $options = [])
 * @method DescribeSslVpnClientCert describeSslVpnClientCert(array $options = [])
 * @method DescribeSslVpnClientCerts describeSslVpnClientCerts(array $options = [])
 * @method DescribeSslVpnServers describeSslVpnServers(array $options = [])
 * @method DescribeTagKeys describeTagKeys(array $options = [])
 * @method DescribeTagKeysForExpressConnect describeTagKeysForExpressConnect(array $options = [])
 * @method DescribeTags describeTags(array $options = [])
 * @method DescribeVbrHa describeVbrHa(array $options = [])
 * @method DescribeVcoRouteEntries describeVcoRouteEntries(array $options = [])
 * @method DescribeVirtualBorderRouters describeVirtualBorderRouters(array $options = [])
 * @method DescribeVirtualBorderRoutersForPhysicalConnection describeVirtualBorderRoutersForPhysicalConnection(array $options = [])
 * @method DescribeVpcAttribute describeVpcAttribute(array $options = [])
 * @method DescribeVpcs describeVpcs(array $options = [])
 * @method DescribeVpnAttachments describeVpnAttachments(array $options = [])
 * @method DescribeVpnConnection describeVpnConnection(array $options = [])
 * @method DescribeVpnConnectionLogs describeVpnConnectionLogs(array $options = [])
 * @method DescribeVpnConnections describeVpnConnections(array $options = [])
 * @method DescribeVpnCrossAccountAuthorizations describeVpnCrossAccountAuthorizations(array $options = [])
 * @method DescribeVpnGateway describeVpnGateway(array $options = [])
 * @method DescribeVpnGateways describeVpnGateways(array $options = [])
 * @method DescribeVpnPbrRouteEntries describeVpnPbrRouteEntries(array $options = [])
 * @method DescribeVpnRouteEntries describeVpnRouteEntries(array $options = [])
 * @method DescribeVpnSslServerLogs describeVpnSslServerLogs(array $options = [])
 * @method DescribeVRouters describeVRouters(array $options = [])
 * @method DescribeVSwitchAttributes describeVSwitchAttributes(array $options = [])
 * @method DescribeVSwitches describeVSwitches(array $options = [])
 * @method DescribeZones describeZones(array $options = [])
 * @method DetachDhcpOptionsSetFromVpc detachDhcpOptionsSetFromVpc(array $options = [])
 * @method DiagnoseVpnGateway diagnoseVpnGateway(array $options = [])
 * @method DisableNatGatewayEcsMetric disableNatGatewayEcsMetric(array $options = [])
 * @method DisableVpcClassicLink disableVpcClassicLink(array $options = [])
 * @method DissociateRouteTableFromGateway dissociateRouteTableFromGateway(array $options = [])
 * @method DissociateRouteTablesFromVpcGatewayEndpoint dissociateRouteTablesFromVpcGatewayEndpoint(array $options = [])
 * @method DissociateVpnGatewayWithCertificate dissociateVpnGatewayWithCertificate(array $options = [])
 * @method DownloadVpnConnectionConfig downloadVpnConnectionConfig(array $options = [])
 * @method EnableNatGatewayEcsMetric enableNatGatewayEcsMetric(array $options = [])
 * @method EnablePhysicalConnection enablePhysicalConnection(array $options = [])
 * @method EnableVpcClassicLink enableVpcClassicLink(array $options = [])
 * @method EnableVpcIpv4Gateway enableVpcIpv4Gateway(array $options = [])
 * @method GetDhcpOptionsSet getDhcpOptionsSet(array $options = [])
 * @method GetFlowLogServiceStatus getFlowLogServiceStatus(array $options = [])
 * @method GetIpv4GatewayAttribute getIpv4GatewayAttribute(array $options = [])
 * @method GetNatGatewayAttribute getNatGatewayAttribute(array $options = [])
 * @method GetNatGatewayConvertStatus getNatGatewayConvertStatus(array $options = [])
 * @method GetPhysicalConnectionServiceStatus getPhysicalConnectionServiceStatus(array $options = [])
 * @method GetTrafficMirrorServiceStatus getTrafficMirrorServiceStatus(array $options = [])
 * @method GetVpcGatewayEndpointAttribute getVpcGatewayEndpointAttribute(array $options = [])
 * @method GetVpcPrefixListAssociations getVpcPrefixListAssociations(array $options = [])
 * @method GetVpcPrefixListEntries getVpcPrefixListEntries(array $options = [])
 * @method GetVpcRouteEntrySummary getVpcRouteEntrySummary(array $options = [])
 * @method GetVpnGatewayDiagnoseResult getVpnGatewayDiagnoseResult(array $options = [])
 * @method GrantInstanceToCen grantInstanceToCen(array $options = [])
 * @method GrantInstanceToVbr grantInstanceToVbr(array $options = [])
 * @method ListBusinessAccessPoints listBusinessAccessPoints(array $options = [])
 * @method ListDhcpOptionsSets listDhcpOptionsSets(array $options = [])
 * @method ListEnhanhcedNatGatewayAvailableZones listEnhanhcedNatGatewayAvailableZones(array $options = [])
 * @method ListFullNatEntries listFullNatEntries(array $options = [])
 * @method ListGatewayRouteTableEntries listGatewayRouteTableEntries(array $options = [])
 * @method ListGeographicSubRegions listGeographicSubRegions(array $options = [])
 * @method ListIpsecServerLogs listIpsecServerLogs(array $options = [])
 * @method ListIpsecServers listIpsecServers(array $options = [])
 * @method ListIpv4Gateways listIpv4Gateways(array $options = [])
 * @method ListNatIpCidrs listNatIpCidrs(array $options = [])
 * @method ListNatIps listNatIps(array $options = [])
 * @method ListPrefixLists listPrefixLists(array $options = [])
 * @method ListPublicIpAddressPoolCidrBlocks listPublicIpAddressPoolCidrBlocks(array $options = [])
 * @method ListPublicIpAddressPools listPublicIpAddressPools(array $options = [])
 * @method ListTagResources listTagResources(array $options = [])
 * @method ListTagResourcesForExpressConnect listTagResourcesForExpressConnect(array $options = [])
 * @method ListTrafficMirrorFilters listTrafficMirrorFilters(array $options = [])
 * @method ListTrafficMirrorSessions listTrafficMirrorSessions(array $options = [])
 * @method ListVirtualPhysicalConnections listVirtualPhysicalConnections(array $options = [])
 * @method ListVpcEndpointServicesByEndUser listVpcEndpointServicesByEndUser(array $options = [])
 * @method ListVpcGatewayEndpoints listVpcGatewayEndpoints(array $options = [])
 * @method ListVpnCertificateAssociations listVpnCertificateAssociations(array $options = [])
 * @method ModifyBgpGroupAttribute modifyBgpGroupAttribute(array $options = [])
 * @method ModifyBgpPeerAttribute modifyBgpPeerAttribute(array $options = [])
 * @method ModifyCommonBandwidthPackageAttribute modifyCommonBandwidthPackageAttribute(array $options = [])
 * @method ModifyCommonBandwidthPackageIpBandwidth modifyCommonBandwidthPackageIpBandwidth(array $options = [])
 * @method ModifyCommonBandwidthPackageSpec modifyCommonBandwidthPackageSpec(array $options = [])
 * @method ModifyCustomerGatewayAttribute modifyCustomerGatewayAttribute(array $options = [])
 * @method ModifyEipAddressAttribute modifyEipAddressAttribute(array $options = [])
 * @method ModifyExpressCloudConnectionAttribute modifyExpressCloudConnectionAttribute(array $options = [])
 * @method ModifyExpressCloudConnectionBandwidth modifyExpressCloudConnectionBandwidth(array $options = [])
 * @method ModifyFlowLogAttribute modifyFlowLogAttribute(array $options = [])
 * @method ModifyForwardEntry modifyForwardEntry(array $options = [])
 * @method ModifyFullNatEntryAttribute modifyFullNatEntryAttribute(array $options = [])
 * @method ModifyGlobalAccelerationInstanceAttributes modifyGlobalAccelerationInstanceAttributes(array $options = [])
 * @method ModifyGlobalAccelerationInstanceSpec modifyGlobalAccelerationInstanceSpec(array $options = [])
 * @method ModifyHaVipAttribute modifyHaVipAttribute(array $options = [])
 * @method ModifyIpv6AddressAttribute modifyIpv6AddressAttribute(array $options = [])
 * @method ModifyIpv6GatewayAttribute modifyIpv6GatewayAttribute(array $options = [])
 * @method ModifyIpv6GatewaySpec modifyIpv6GatewaySpec(array $options = [])
 * @method ModifyIpv6InternetBandwidth modifyIpv6InternetBandwidth(array $options = [])
 * @method ModifyIPv6TranslatorAclAttribute modifyIPv6TranslatorAclAttribute(array $options = [])
 * @method ModifyIPv6TranslatorAclListEntry modifyIPv6TranslatorAclListEntry(array $options = [])
 * @method ModifyIPv6TranslatorAttribute modifyIPv6TranslatorAttribute(array $options = [])
 * @method ModifyIPv6TranslatorBandwidth modifyIPv6TranslatorBandwidth(array $options = [])
 * @method ModifyIPv6TranslatorEntry modifyIPv6TranslatorEntry(array $options = [])
 * @method ModifyNatGatewayAttribute modifyNatGatewayAttribute(array $options = [])
 * @method ModifyNatGatewaySpec modifyNatGatewaySpec(array $options = [])
 * @method ModifyNatIpAttribute modifyNatIpAttribute(array $options = [])
 * @method ModifyNatIpCidrAttribute modifyNatIpCidrAttribute(array $options = [])
 * @method ModifyNetworkAclAttributes modifyNetworkAclAttributes(array $options = [])
 * @method ModifyPhysicalConnectionAttribute modifyPhysicalConnectionAttribute(array $options = [])
 * @method ModifyRouteEntry modifyRouteEntry(array $options = [])
 * @method ModifyRouterInterfaceAttribute modifyRouterInterfaceAttribute(array $options = [])
 * @method ModifyRouterInterfaceSpec modifyRouterInterfaceSpec(array $options = [])
 * @method ModifyRouteTableAttributes modifyRouteTableAttributes(array $options = [])
 * @method ModifySnatEntry modifySnatEntry(array $options = [])
 * @method ModifySslVpnClientCert modifySslVpnClientCert(array $options = [])
 * @method ModifySslVpnServer modifySslVpnServer(array $options = [])
 * @method ModifyVcoRouteEntryWeight modifyVcoRouteEntryWeight(array $options = [])
 * @method ModifyVirtualBorderRouterAttribute modifyVirtualBorderRouterAttribute(array $options = [])
 * @method ModifyVpcAttribute modifyVpcAttribute(array $options = [])
 * @method ModifyVpcPrefixList modifyVpcPrefixList(array $options = [])
 * @method ModifyVpnAttachmentAttribute modifyVpnAttachmentAttribute(array $options = [])
 * @method ModifyVpnConnectionAttribute modifyVpnConnectionAttribute(array $options = [])
 * @method ModifyVpnGatewayAttribute modifyVpnGatewayAttribute(array $options = [])
 * @method ModifyVpnPbrRouteEntryAttribute modifyVpnPbrRouteEntryAttribute(array $options = [])
 * @method ModifyVpnPbrRouteEntryPriority modifyVpnPbrRouteEntryPriority(array $options = [])
 * @method ModifyVpnPbrRouteEntryWeight modifyVpnPbrRouteEntryWeight(array $options = [])
 * @method ModifyVpnRouteEntryWeight modifyVpnRouteEntryWeight(array $options = [])
 * @method ModifyVRouterAttribute modifyVRouterAttribute(array $options = [])
 * @method ModifyVSwitchAttribute modifyVSwitchAttribute(array $options = [])
 * @method MoveResourceGroup moveResourceGroup(array $options = [])
 * @method OpenFlowLogService openFlowLogService(array $options = [])
 * @method OpenPhysicalConnectionService openPhysicalConnectionService(array $options = [])
 * @method OpenTrafficMirrorService openTrafficMirrorService(array $options = [])
 * @method PublishVpnRouteEntry publishVpnRouteEntry(array $options = [])
 * @method RecoverPhysicalConnection recoverPhysicalConnection(array $options = [])
 * @method RecoverVirtualBorderRouter recoverVirtualBorderRouter(array $options = [])
 * @method ReleaseEipAddress releaseEipAddress(array $options = [])
 * @method ReleaseEipSegmentAddress releaseEipSegmentAddress(array $options = [])
 * @method RemoveCommonBandwidthPackageIp removeCommonBandwidthPackageIp(array $options = [])
 * @method RemoveGlobalAccelerationInstanceIp removeGlobalAccelerationInstanceIp(array $options = [])
 * @method RemoveIPv6TranslatorAclListEntry removeIPv6TranslatorAclListEntry(array $options = [])
 * @method RemoveSourcesFromTrafficMirrorSession removeSourcesFromTrafficMirrorSession(array $options = [])
 * @method ReplaceVpcDhcpOptionsSet replaceVpcDhcpOptionsSet(array $options = [])
 * @method RetryVpcPrefixListAssociation retryVpcPrefixListAssociation(array $options = [])
 * @method RevokeInstanceFromCen revokeInstanceFromCen(array $options = [])
 * @method RevokeInstanceFromVbr revokeInstanceFromVbr(array $options = [])
 * @method SetHighDefinitionMonitorLogStatus setHighDefinitionMonitorLogStatus(array $options = [])
 * @method TagResources tagResources(array $options = [])
 * @method TagResourcesForExpressConnect tagResourcesForExpressConnect(array $options = [])
 * @method TerminatePhysicalConnection terminatePhysicalConnection(array $options = [])
 * @method TerminateVirtualBorderRouter terminateVirtualBorderRouter(array $options = [])
 * @method UnassociateEipAddress unassociateEipAddress(array $options = [])
 * @method UnassociateGlobalAccelerationInstance unassociateGlobalAccelerationInstance(array $options = [])
 * @method UnassociateHaVip unassociateHaVip(array $options = [])
 * @method UnassociateNetworkAcl unassociateNetworkAcl(array $options = [])
 * @method UnassociatePhysicalConnectionFromVirtualBorderRouter unassociatePhysicalConnectionFromVirtualBorderRouter(array $options = [])
 * @method UnassociateRouteTable unassociateRouteTable(array $options = [])
 * @method UnassociateVpcCidrBlock unassociateVpcCidrBlock(array $options = [])
 * @method UnTagResources unTagResources(array $options = [])
 * @method UntagResourcesForExpressConnect untagResourcesForExpressConnect(array $options = [])
 * @method UpdateDhcpOptionsSetAttribute updateDhcpOptionsSetAttribute(array $options = [])
 * @method UpdateGatewayRouteTableEntryAttribute updateGatewayRouteTableEntryAttribute(array $options = [])
 * @method UpdateIpsecServer updateIpsecServer(array $options = [])
 * @method UpdateIpv4GatewayAttribute updateIpv4GatewayAttribute(array $options = [])
 * @method UpdateNatGatewayNatType updateNatGatewayNatType(array $options = [])
 * @method UpdateNetworkAclEntries updateNetworkAclEntries(array $options = [])
 * @method UpdatePublicIpAddressPoolAttribute updatePublicIpAddressPoolAttribute(array $options = [])
 * @method UpdateTrafficMirrorFilterAttribute updateTrafficMirrorFilterAttribute(array $options = [])
 * @method UpdateTrafficMirrorFilterRuleAttribute updateTrafficMirrorFilterRuleAttribute(array $options = [])
 * @method UpdateTrafficMirrorSessionAttribute updateTrafficMirrorSessionAttribute(array $options = [])
 * @method UpdateVirtualBorderBandwidth updateVirtualBorderBandwidth(array $options = [])
 * @method UpdateVirtualPhysicalConnection updateVirtualPhysicalConnection(array $options = [])
 * @method UpdateVpcGatewayEndpointAttribute updateVpcGatewayEndpointAttribute(array $options = [])
 * @method VpcDescribeVpcNatGatewayNetworkInterfaceQuota vpcDescribeVpcNatGatewayNetworkInterfaceQuota(array $options = [])
 */
class VpcApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'Vpc';

    /** @var string */
    public $version = '2016-04-28';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'vpc';
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRouterInterfaceId()
 * @method $this withRouterInterfaceId($value)
 */
class ActivateRouterInterface extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getFlowLogId()
 * @method $this withFlowLogId($value)
 */
class ActiveFlowLog extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getIpVersion()
 * @method $this withIpVersion($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRouterId()
 * @method $this withRouterId($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getDstCidrBlock()
 * @method $this withDstCidrBlock($value)
 */
class AddBgpNetwork extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getBandwidthPackageId()
 * @method $this withBandwidthPackageId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getIpType()
 * @method $this withIpType($value)
 * @method string getIpInstanceId()
 * @method $this withIpInstanceId($value)
 */
class AddCommonBandwidthPackageIp extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method array getIpInstanceIds()
 * @method string getBandwidthPackageId()
 * @method $this withBandwidthPackageId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getIpType()
 * @method $this withIpType($value)
 */
class AddCommonBandwidthPackageIps extends Rpc
{

    /**
     * @param array $ipInstanceIds
     *
     * @return $this
     */
	public function withIpInstanceIds(array $ipInstanceIds)
	{
	    $this->data['IpInstanceIds'] = $ipInstanceIds;
		foreach ($ipInstanceIds as $i => $iValue) {
			$this->options['query']['IpInstanceIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getGlobalAccelerationInstanceId()
 * @method $this withGlobalAccelerationInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getIpInstanceId()
 * @method $this withIpInstanceId($value)
 */
class AddGlobalAccelerationInstanceIp extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAclId()
 * @method $this withAclId($value)
 * @method string getAclEntryIp()
 * @method $this withAclEntryIp($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getAclEntryComment()
 * @method $this withAclEntryComment($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class AddIPv6TranslatorAclListEntry extends Rpc
{
}

/**
 * @method string getCidrMask()
 * @method $this withCidrMask($value)
 * @method string getPublicIpAddressPoolId()
 * @method $this withPublicIpAddressPoolId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getCidrBlock()
 * @method $this withCidrBlock($value)
 */
class AddPublicIpAddressPoolCidrBlock extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method array getTrafficMirrorSourceIds()
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getTrafficMirrorSessionId()
 * @method $this withTrafficMirrorSessionId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class AddSourcesToTrafficMirrorSession extends Rpc
{

    /**
     * @param array $trafficMirrorSourceIds
     *
     * @return $this
     */
	public function withTrafficMirrorSourceIds(array $trafficMirrorSourceIds)
	{
	    $this->data['TrafficMirrorSourceIds'] = $trafficMirrorSourceIds;
		foreach ($trafficMirrorSourceIds as $i => $iValue) {
			$this->options['query']['TrafficMirrorSourceIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPublicIpAddressPoolId()
 * @method $this withPublicIpAddressPoolId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getISP()
 * @method $this withISP($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getNetmode()
 * @method $this withNetmode($value)
 * @method string getInstanceChargeType()
 * @method $this withInstanceChargeType($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getAutoPay()
 * @method $this withAutoPay($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getBandwidth()
 * @method $this withBandwidth($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getActivityId()
 * @method $this withActivityId($value)
 * @method string getInternetChargeType()
 * @method $this withInternetChargeType($value)
 * @method string getName()
 * @method $this withName($value)
 * @method array getSecurityProtectionTypes()
 * @method string getPricingCycle()
 * @method $this withPricingCycle($value)
 */
class AllocateEipAddress extends Rpc
{

    /**
     * @param array $securityProtectionTypes
     *
     * @return $this
     */
	public function withSecurityProtectionTypes(array $securityProtectionTypes)
	{
	    $this->data['SecurityProtectionTypes'] = $securityProtectionTypes;
		foreach ($securityProtectionTypes as $i => $iValue) {
			$this->options['query']['SecurityProtectionTypes.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getIpAddress()
 * @method $this withIpAddress($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPublicIpAddressPoolId()
 * @method $this withPublicIpAddressPoolId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getISP()
 * @method $this withISP($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getNetmode()
 * @method $this withNetmode($value)
 * @method string getInstanceChargeType()
 * @method $this withInstanceChargeType($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getAutoPay()
 * @method $this withAutoPay($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getBandwidth()
 * @method $this withBandwidth($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getInternetChargeType()
 * @method $this withInternetChargeType($value)
 * @method array getSecurityProtectionTypes()
 * @method string getPricingCycle()
 * @method $this withPricingCycle($value)
 */
class AllocateEipAddressPro extends Rpc
{

    /**
     * @param array $securityProtectionTypes
     *
     * @return $this
     */
	public function withSecurityProtectionTypes(array $securityProtectionTypes)
	{
	    $this->data['SecurityProtectionTypes'] = $securityProtectionTypes;
		foreach ($securityProtectionTypes as $i => $iValue) {
			$this->options['query']['SecurityProtectionTypes.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getIsp()
 * @method $this withIsp($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getNetmode()
 * @method $this withNetmode($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getBandwidth()
 * @method $this withBandwidth($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEipMask()
 * @method $this withEipMask($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInternetChargeType()
 * @method $this withInternetChargeType($value)
 */
class AllocateEipSegmentAddress extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getBandwidth()
 * @method $this withBandwidth($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getIpv6AddressId()
 * @method $this withIpv6AddressId($value)
 * @method string getInternetChargeType()
 * @method $this withInternetChargeType($value)
 * @method string getIpv6GatewayId()
 * @method $this withIpv6GatewayId($value)
 */
class AllocateIpv6InternetBandwidth extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getIpv6Isp()
 * @method $this withIpv6Isp($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getIpv6CidrBlock()
 * @method $this withIpv6CidrBlock($value)
 * @method string getAddressPoolType()
 * @method $this withAddressPoolType($value)
 */
class AllocateVpcIpv6Cidr extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getLineType()
 * @method $this withLineType($value)
 * @method string getSi()
 * @method $this withSi($value)
 * @method string getPeerLocation()
 * @method $this withPeerLocation($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getBandwidth()
 * @method $this withBandwidth($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getConstructionTime()
 * @method $this withConstructionTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getCompanyName()
 * @method $this withCompanyName($value)
 * @method array getPMInfo()
 */
class ApplyPhysicalConnectionLOA extends Rpc
{

    /**
     * @param array $pMInfo
     *
     * @return $this
     */
	public function withPMInfo(array $pMInfo)
	{
	    $this->data['PMInfo'] = $pMInfo;
		foreach ($pMInfo as $depth1 => $depth1Value) {
			if(isset($depth1Value['PMCertificateNo'])){
				$this->options['query']['PMInfo.' . ($depth1 + 1) . '.PMCertificateNo'] = $depth1Value['PMCertificateNo'];
			}
			if(isset($depth1Value['PMName'])){
				$this->options['query']['PMInfo.' . ($depth1 + 1) . '.PMName'] = $depth1Value['PMName'];
			}
			if(isset($depth1Value['PMCertificateType'])){
				$this->options['query']['PMInfo.' . ($depth1 + 1) . '.PMCertificateType'] = $depth1Value['PMCertificateType'];
			}
			if(isset($depth1Value['PMGender'])){
				$this->options['query']['PMInfo.' . ($depth1 + 1) . '.PMGender'] = $depth1Value['PMGender'];
			}
			if(isset($depth1Value['PMContactInfo'])){
				$this->options['query']['PMInfo.' . ($depth1 + 1) . '.PMContactInfo'] = $depth1Value['PMContactInfo'];
			}
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getAllocationId()
 * @method $this withAllocationId($value)
 * @method string getMode()
 * @method $this withMode($value)
 * @method string getInstanceRegionId()
 * @method $this withInstanceRegionId($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPrivateIpAddress()
 * @method $this withPrivateIpAddress($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 */
class AssociateEipAddress extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getBindedInstanceType()
 * @method $this withBindedInstanceType($value)
 * @method string getBindedInstanceId()
 * @method $this withBindedInstanceId($value)
 * @method string getMode()
 * @method $this withMode($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method array getInstanceIds()
 */
class AssociateEipAddressBatch extends Rpc
{

    /**
     * @param array $instanceIds
     *
     * @return $this
     */
	public function withInstanceIds(array $instanceIds)
	{
	    $this->data['InstanceIds'] = $instanceIds;
		foreach ($instanceIds as $i => $iValue) {
			$this->options['query']['InstanceIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getGlobalAccelerationInstanceId()
 * @method $this withGlobalAccelerationInstanceId($value)
 * @method string getBackendServerId()
 * @method $this withBackendServerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getBackendServerRegionId()
 * @method $this withBackendServerRegionId($value)
 * @method string getBackendServerType()
 * @method $this withBackendServerType($value)
 */
class AssociateGlobalAccelerationInstance extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getHaVipId()
 * @method $this withHaVipId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class AssociateHaVip extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getNetworkAclId()
 * @method $this withNetworkAclId($value)
 * @method array getResource()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class AssociateNetworkAcl extends Rpc
{

    /**
     * @param array $resource
     *
     * @return $this
     */
	public function withResource(array $resource)
	{
	    $this->data['Resource'] = $resource;
		foreach ($resource as $depth1 => $depth1Value) {
			if(isset($depth1Value['ResourceType'])){
				$this->options['query']['Resource.' . ($depth1 + 1) . '.ResourceType'] = $depth1Value['ResourceType'];
			}
			if(isset($depth1Value['ResourceId'])){
				$this->options['query']['Resource.' . ($depth1 + 1) . '.ResourceId'] = $depth1Value['ResourceId'];
			}
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCircuitCode()
 * @method $this withCircuitCode($value)
 * @method string getVlanId()
 * @method $this withVlanId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getEnableIpv6()
 * @method $this withEnableIpv6($value)
 * @method string getVbrId()
 * @method $this withVbrId($value)
 * @method string getPeerGatewayIp()
 * @method $this withPeerGatewayIp($value)
 * @method string getPeerIpv6GatewayIp()
 * @method $this withPeerIpv6GatewayIp($value)
 * @method string getPeeringSubnetMask()
 * @method $this withPeeringSubnetMask($value)
 * @method string getLocalGatewayIp()
 * @method $this withLocalGatewayIp($value)
 * @method string getPeeringIpv6SubnetMask()
 * @method $this withPeeringIpv6SubnetMask($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPhysicalConnectionId()
 * @method $this withPhysicalConnectionId($value)
 * @method string getLocalIpv6GatewayIp()
 * @method $this withLocalIpv6GatewayIp($value)
 */
class AssociatePhysicalConnectionToVirtualBorderRouter extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getRouteTableId()
 * @method $this withRouteTableId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 */
class AssociateRouteTable extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getEndpointId()
 * @method $this withEndpointId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method array getRouteTableIds()
 */
class AssociateRouteTablesWithVpcGatewayEndpoint extends Rpc
{

    /**
     * @param array $routeTableIds
     *
     * @return $this
     */
	public function withRouteTableIds(array $routeTableIds)
	{
	    $this->data['RouteTableIds'] = $routeTableIds;
		foreach ($routeTableIds as $i => $iValue) {
			$this->options['query']['RouteTableIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getGatewayId()
 * @method $this withGatewayId($value)
 * @method string getRouteTableId()
 * @method $this withRouteTableId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class AssociateRouteTableWithGateway extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getIPv6CidrType()
 * @method $this withIPv6CidrType($value)
 * @method string getIpv6Isp()
 * @method $this withIpv6Isp($value)
 * @method string getIpVersion()
 * @method $this withIpVersion($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getIPv6CidrBlock()
 * @method $this withIPv6CidrBlock($value)
 * @method string getSecondaryCidrBlock()
 * @method $this withSecondaryCidrBlock($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 */
class AssociateVpcCidrBlock extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getCertificateId()
 * @method $this withCertificateId($value)
 * @method string getVpnGatewayId()
 * @method $this withVpnGatewayId($value)
 * @method string getCallerBid()
 * @method string getCertificateType()
 * @method $this withCertificateType($value)
 */
class AssociateVpnGatewayWithCertificate extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCallerBid($value)
    {
        $this->data['CallerBid'] = $value;
        $this->options['query']['callerBid'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getDhcpOptionsSetId()
 * @method $this withDhcpOptionsSetId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 */
class AttachDhcpOptionsSetToVpc extends Rpc
{
}

/**
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getVpconnId()
 * @method $this withVpconnId($value)
 * @method string getVbrId()
 * @method $this withVbrId($value)
 * @method string getToken()
 * @method $this withToken($value)
 */
class AttachVbrToVpconn extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getBandwidthPackageId()
 * @method $this withBandwidthPackageId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEipId()
 * @method $this withEipId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CancelCommonBandwidthPackageIpBandwidth extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPhysicalConnectionId()
 * @method $this withPhysicalConnectionId($value)
 */
class CancelPhysicalConnection extends Rpc
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
class ChangeResourceGroup extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getIpVersion()
 * @method $this withIpVersion($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getPrivateIpAddress()
 * @method $this withPrivateIpAddress($value)
 */
class CheckCanAllocateVpcPrivateIpAddress extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 */
class CheckVpnBgpEnabled extends Rpc
{
}

/**
 * @method string getLineCode()
 * @method $this withLineCode($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getLineLabel()
 * @method $this withLineLabel($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class CompletePhysicalConnectionLOA extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPhysicalConnectionId()
 * @method $this withPhysicalConnectionId($value)
 */
class ConfirmPhysicalConnection extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRouterInterfaceId()
 * @method $this withRouterInterfaceId($value)
 */
class ConnectRouterInterface extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getBandwidthPackageId()
 * @method $this withBandwidthPackageId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ConvertBandwidthPackage extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getNetworkAclId()
 * @method $this withNetworkAclId($value)
 * @method string getSourceNetworkAclId()
 * @method $this withSourceNetworkAclId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CopyNetworkAclEntries extends Rpc
{
}

/**
 * @method string getAuthKey()
 * @method $this withAuthKey($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getPeerAsn()
 * @method $this withPeerAsn($value)
 * @method string getIsFakeAsn()
 * @method $this withIsFakeAsn($value)
 * @method string getIpVersion()
 * @method $this withIpVersion($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getRouteQuota()
 * @method $this withRouteQuota($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRouteUsageAlarmThreshold()
 * @method $this withRouteUsageAlarmThreshold($value)
 * @method string getRouterId()
 * @method $this withRouterId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getLocalAsn()
 * @method $this withLocalAsn($value)
 */
class CreateBgpGroup extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getBgpGroupId()
 * @method $this withBgpGroupId($value)
 * @method string getPeerIpAddress()
 * @method $this withPeerIpAddress($value)
 * @method string getBfdMultiHop()
 * @method $this withBfdMultiHop($value)
 * @method string getIpVersion()
 * @method $this withIpVersion($value)
 * @method string getEnableBfd()
 * @method $this withEnableBfd($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CreateBgpPeer extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getISP()
 * @method $this withISP($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getZone()
 * @method $this withZone($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getBandwidth()
 * @method $this withBandwidth($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInternetChargeType()
 * @method $this withInternetChargeType($value)
 * @method string getName()
 * @method $this withName($value)
 * @method array getSecurityProtectionTypes()
 * @method string getRatio()
 * @method $this withRatio($value)
 */
class CreateCommonBandwidthPackage extends Rpc
{

    /**
     * @param array $securityProtectionTypes
     *
     * @return $this
     */
	public function withSecurityProtectionTypes(array $securityProtectionTypes)
	{
	    $this->data['SecurityProtectionTypes'] = $securityProtectionTypes;
		foreach ($securityProtectionTypes as $i => $iValue) {
			$this->options['query']['SecurityProtectionTypes.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getIpAddress()
 * @method $this withIpAddress($value)
 * @method string getAuthKey()
 * @method $this withAuthKey($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method array getTags()
 * @method string getName()
 * @method $this withName($value)
 * @method string getAsn()
 * @method $this withAsn($value)
 */
class CreateCustomerGateway extends Rpc
{

    /**
     * @param array $tags
     *
     * @return $this
     */
	public function withTags(array $tags)
	{
	    $this->data['Tags'] = $tags;
		foreach ($tags as $depth1 => $depth1Value) {
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tags.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tags.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }
}

/**
 * @method string getEnableDefaultVSwitch()
 * @method $this withEnableDefaultVSwitch($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getEnableIpv6()
 * @method $this withEnableIpv6($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getIpv6CidrBlock()
 * @method $this withIpv6CidrBlock($value)
 * @method array getZoneId()
 */
class CreateDefaultVpc extends Rpc
{

    /**
     * @param array $zoneId
     *
     * @return $this
     */
	public function withZoneId(array $zoneId)
	{
	    $this->data['ZoneId'] = $zoneId;
		foreach ($zoneId as $i => $iValue) {
			$this->options['query']['ZoneId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getIpv6CidrBlock()
 * @method $this withIpv6CidrBlock($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 */
class CreateDefaultVSwitch extends Rpc
{
}

/**
 * @method string getBootFileName()
 * @method $this withBootFileName($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getTFTPServerName()
 * @method $this withTFTPServerName($value)
 * @method string getLeaseTime()
 * @method $this withLeaseTime($value)
 * @method string getDomainNameServers()
 * @method $this withDomainNameServers($value)
 * @method string getDhcpOptionsSetDescription()
 * @method $this withDhcpOptionsSetDescription($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDhcpOptionsSetName()
 * @method $this withDhcpOptionsSetName($value)
 * @method string getIpv6LeaseTime()
 * @method $this withIpv6LeaseTime($value)
 */
class CreateDhcpOptionsSet extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPortType()
 * @method $this withPortType($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getRedundantEccId()
 * @method $this withRedundantEccId($value)
 * @method string getPeerLocation()
 * @method $this withPeerLocation($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getBandwidth()
 * @method $this withBandwidth($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getPeerCity()
 * @method $this withPeerCity($value)
 * @method string getIDCardNo()
 * @method $this withIDCardNo($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getContactMail()
 * @method $this withContactMail($value)
 * @method string getContactTel()
 * @method $this withContactTel($value)
 * @method string getIdcSP()
 * @method $this withIdcSP($value)
 * @method string getName()
 * @method $this withName($value)
 */
class CreateExpressCloudConnection extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getLogStoreName()
 * @method $this withLogStoreName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method array getTrafficPath()
 * @method string getAggregationInterval()
 * @method $this withAggregationInterval($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getTrafficType()
 * @method $this withTrafficType($value)
 * @method string getFlowLogName()
 * @method $this withFlowLogName($value)
 */
class CreateFlowLog extends Rpc
{

    /**
     * @param array $trafficPath
     *
     * @return $this
     */
	public function withTrafficPath(array $trafficPath)
	{
	    $this->data['TrafficPath'] = $trafficPath;
		foreach ($trafficPath as $i => $iValue) {
			$this->options['query']['TrafficPath.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getForwardTableId()
 * @method $this withForwardTableId($value)
 * @method string getInternalIp()
 * @method $this withInternalIp($value)
 * @method string getExternalIp()
 * @method $this withExternalIp($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getIpProtocol()
 * @method $this withIpProtocol($value)
 * @method string getForwardEntryName()
 * @method $this withForwardEntryName($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInternalPort()
 * @method $this withInternalPort($value)
 * @method string getPortBreak()
 * @method $this withPortBreak($value)
 * @method string getExternalPort()
 * @method $this withExternalPort($value)
 */
class CreateForwardEntry extends Rpc
{
}

/**
 * @method string getFullNatEntryDescription()
 * @method $this withFullNatEntryDescription($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAccessIp()
 * @method $this withAccessIp($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getNatIpPort()
 * @method $this withNatIpPort($value)
 * @method string getFullNatTableId()
 * @method $this withFullNatTableId($value)
 * @method string getAccessPort()
 * @method $this withAccessPort($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getIpProtocol()
 * @method $this withIpProtocol($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getFullNatEntryName()
 * @method $this withFullNatEntryName($value)
 * @method string getNatIp()
 * @method $this withNatIp($value)
 * @method string getNetworkInterfaceId()
 * @method $this withNetworkInterfaceId($value)
 */
class CreateFullNatEntry extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getBandwidthType()
 * @method $this withBandwidthType($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getServiceLocation()
 * @method $this withServiceLocation($value)
 * @method string getBandwidth()
 * @method $this withBandwidth($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class CreateGlobalAccelerationInstance extends Rpc
{
}

/**
 * @method string getIpAddress()
 * @method $this withIpAddress($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class CreateHaVip extends Rpc
{
}

/**
 * @method string getIkeConfig()
 * @method $this withIkeConfig($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getIpsecConfig()
 * @method $this withIpsecConfig($value)
 * @method string getPsk()
 * @method $this withPsk($value)
 * @method string getLocalSubnet()
 * @method $this withLocalSubnet($value)
 * @method string getIDaaSInstanceId()
 * @method $this withIDaaSInstanceId($value)
 * @method string getEffectImmediately()
 * @method $this withEffectImmediately($value)
 * @method string getClientIpPool()
 * @method $this withClientIpPool($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getVpnGatewayId()
 * @method $this withVpnGatewayId($value)
 * @method string getCallerBid()
 * @method string getPskEnabled()
 * @method $this withPskEnabled($value)
 * @method string getMultiFactorAuthEnabled()
 * @method $this withMultiFactorAuthEnabled($value)
 * @method string getIpSecServerName()
 * @method $this withIpSecServerName($value)
 */
class CreateIpsecServer extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCallerBid($value)
    {
        $this->data['CallerBid'] = $value;
        $this->options['query']['callerBid'] = $value;

        return $this;
    }
}

/**
 * @method string getIpv4GatewayDescription()
 * @method $this withIpv4GatewayDescription($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getIpv4GatewayName()
 * @method $this withIpv4GatewayName($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 */
class CreateIpv4Gateway extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getIpv6GatewayId()
 * @method $this withIpv6GatewayId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class CreateIpv6EgressOnlyRule extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getSpec()
 * @method $this withSpec($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class CreateIpv6Gateway extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getSpec()
 * @method $this withSpec($value)
 * @method string getDuration()
 * @method $this withDuration($value)
 * @method string getAutoPay()
 * @method $this withAutoPay($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getBandwidth()
 * @method $this withBandwidth($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getPayType()
 * @method $this withPayType($value)
 * @method string getPricingCycle()
 * @method $this withPricingCycle($value)
 */
class CreateIPv6Translator extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAclName()
 * @method $this withAclName($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CreateIPv6TranslatorAclList extends Rpc
{
}

/**
 * @method string getBackendIpv4Port()
 * @method $this withBackendIpv4Port($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getEntryName()
 * @method $this withEntryName($value)
 * @method string getAclStatus()
 * @method $this withAclStatus($value)
 * @method string getEntryBandwidth()
 * @method $this withEntryBandwidth($value)
 * @method string getAclType()
 * @method $this withAclType($value)
 * @method string getAllocateIpv6Port()
 * @method $this withAllocateIpv6Port($value)
 * @method string getEntryDescription()
 * @method $this withEntryDescription($value)
 * @method string getBackendIpv4Addr()
 * @method $this withBackendIpv4Addr($value)
 * @method string getAclId()
 * @method $this withAclId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTransProtocol()
 * @method $this withTransProtocol($value)
 * @method string getIpv6TranslatorId()
 * @method $this withIpv6TranslatorId($value)
 */
class CreateIPv6TranslatorEntry extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getSecurityProtectionEnabled()
 * @method $this withSecurityProtectionEnabled($value)
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getNetworkType()
 * @method $this withNetworkType($value)
 * @method string getSpec()
 * @method $this withSpec($value)
 * @method string getDuration()
 * @method $this withDuration($value)
 * @method string getIcmpReplyEnabled()
 * @method $this withIcmpReplyEnabled($value)
 * @method string getNatType()
 * @method $this withNatType($value)
 * @method array getTag()
 * @method string getInstanceChargeType()
 * @method $this withInstanceChargeType($value)
 * @method array getBandwidthPackage()
 * @method string getAutoPay()
 * @method $this withAutoPay($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getPrivateLinkMode()
 * @method $this withPrivateLinkMode($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getInternetChargeType()
 * @method $this withInternetChargeType($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getPrivateLinkEnabled()
 * @method $this withPrivateLinkEnabled($value)
 * @method string getEipBindMode()
 * @method $this withEipBindMode($value)
 * @method string getPricingCycle()
 * @method $this withPricingCycle($value)
 */
class CreateNatGateway extends Rpc
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
     * @param array $bandwidthPackage
     *
     * @return $this
     */
	public function withBandwidthPackage(array $bandwidthPackage)
	{
	    $this->data['BandwidthPackage'] = $bandwidthPackage;
		foreach ($bandwidthPackage as $depth1 => $depth1Value) {
			if(isset($depth1Value['Bandwidth'])){
				$this->options['query']['BandwidthPackage.' . ($depth1 + 1) . '.Bandwidth'] = $depth1Value['Bandwidth'];
			}
			if(isset($depth1Value['Zone'])){
				$this->options['query']['BandwidthPackage.' . ($depth1 + 1) . '.Zone'] = $depth1Value['Zone'];
			}
			if(isset($depth1Value['InternetChargeType'])){
				$this->options['query']['BandwidthPackage.' . ($depth1 + 1) . '.InternetChargeType'] = $depth1Value['InternetChargeType'];
			}
			if(isset($depth1Value['ISP'])){
				$this->options['query']['BandwidthPackage.' . ($depth1 + 1) . '.ISP'] = $depth1Value['ISP'];
			}
			if(isset($depth1Value['IpCount'])){
				$this->options['query']['BandwidthPackage.' . ($depth1 + 1) . '.IpCount'] = $depth1Value['IpCount'];
			}
		}

		return $this;
    }
}

/**
 * @method string getNatIpCidrId()
 * @method $this withNatIpCidrId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getNatIpName()
 * @method $this withNatIpName($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getNatIpDescription()
 * @method $this withNatIpDescription($value)
 * @method string getNatGatewayId()
 * @method $this withNatGatewayId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getNatIpCidr()
 * @method $this withNatIpCidr($value)
 * @method string getNatIp()
 * @method $this withNatIp($value)
 */
class CreateNatIp extends Rpc
{
}

/**
 * @method string getNatIpCidrDescription()
 * @method $this withNatIpCidrDescription($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getNatGatewayId()
 * @method $this withNatGatewayId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getNatIpCidrName()
 * @method $this withNatIpCidrName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getNatIpCidr()
 * @method $this withNatIpCidr($value)
 */
class CreateNatIpCidr extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getNetworkAclName()
 * @method $this withNetworkAclName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 */
class CreateNetworkAcl extends Rpc
{
}

/**
 * @method string getAccessPointId()
 * @method $this withAccessPointId($value)
 * @method string getCloudBoxInstanceId()
 * @method $this withCloudBoxInstanceId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPortType()
 * @method $this withPortType($value)
 * @method string getCircuitCode()
 * @method $this withCircuitCode($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getRedundantPhysicalConnectionId()
 * @method $this withRedundantPhysicalConnectionId($value)
 * @method string getPeerLocation()
 * @method $this withPeerLocation($value)
 * @method string getBandwidth()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getLineOperator()
 * @method $this withLineOperator($value)
 * @method string getName()
 * @method $this withName($value)
 */
class CreatePhysicalConnection extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBandwidth($value)
    {
        $this->data['Bandwidth'] = $value;
        $this->options['query']['bandwidth'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getInstanceChargeType()
 * @method $this withInstanceChargeType($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getAutoPay()
 * @method $this withAutoPay($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPhysicalConnectionId()
 * @method $this withPhysicalConnectionId($value)
 * @method string getPricingCycle()
 * @method $this withPricingCycle($value)
 */
class CreatePhysicalConnectionOccupancyOrder extends Rpc
{
}

/**
 * @method string getAccessPointId()
 * @method $this withAccessPointId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPortType()
 * @method $this withPortType($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getRedundantPhysicalConnectionId()
 * @method $this withRedundantPhysicalConnectionId($value)
 * @method string getAutoPay()
 * @method $this withAutoPay($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getLineOperator()
 * @method $this withLineOperator($value)
 */
class CreatePhysicalConnectionSetupOrder extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getIsp()
 * @method $this withIsp($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class CreatePublicIpAddressPool extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method array getRouteEntries()
 */
class CreateRouteEntries extends Rpc
{

    /**
     * @param array $routeEntries
     *
     * @return $this
     */
	public function withRouteEntries(array $routeEntries)
	{
	    $this->data['RouteEntries'] = $routeEntries;
		foreach ($routeEntries as $depth1 => $depth1Value) {
			if(isset($depth1Value['DstCidrBlock'])){
				$this->options['query']['RouteEntries.' . ($depth1 + 1) . '.DstCidrBlock'] = $depth1Value['DstCidrBlock'];
			}
			if(isset($depth1Value['RouteTableId'])){
				$this->options['query']['RouteEntries.' . ($depth1 + 1) . '.RouteTableId'] = $depth1Value['RouteTableId'];
			}
			if(isset($depth1Value['IpVersion'])){
				$this->options['query']['RouteEntries.' . ($depth1 + 1) . '.IpVersion'] = $depth1Value['IpVersion'];
			}
			if(isset($depth1Value['NextHop'])){
				$this->options['query']['RouteEntries.' . ($depth1 + 1) . '.NextHop'] = $depth1Value['NextHop'];
			}
			if(isset($depth1Value['NextHopType'])){
				$this->options['query']['RouteEntries.' . ($depth1 + 1) . '.NextHopType'] = $depth1Value['NextHopType'];
			}
			if(isset($depth1Value['Name'])){
				$this->options['query']['RouteEntries.' . ($depth1 + 1) . '.Name'] = $depth1Value['Name'];
			}
			if(isset($depth1Value['Describption'])){
				$this->options['query']['RouteEntries.' . ($depth1 + 1) . '.Describption'] = $depth1Value['Describption'];
			}
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getRouteEntryName()
 * @method $this withRouteEntryName($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getNextHopId()
 * @method $this withNextHopId($value)
 * @method string getNextHopType()
 * @method $this withNextHopType($value)
 * @method string getRouteTableId()
 * @method $this withRouteTableId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDestinationCidrBlock()
 * @method $this withDestinationCidrBlock($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPrivateIpAddress()
 * @method $this withPrivateIpAddress($value)
 * @method array getNextHopList()
 */
class CreateRouteEntry extends Rpc
{

    /**
     * @param array $nextHopList
     *
     * @return $this
     */
	public function withNextHopList(array $nextHopList)
	{
	    $this->data['NextHopList'] = $nextHopList;
		foreach ($nextHopList as $depth1 => $depth1Value) {
			if(isset($depth1Value['Weight'])){
				$this->options['query']['NextHopList.' . ($depth1 + 1) . '.Weight'] = $depth1Value['Weight'];
			}
			if(isset($depth1Value['NextHopId'])){
				$this->options['query']['NextHopList.' . ($depth1 + 1) . '.NextHopId'] = $depth1Value['NextHopId'];
			}
			if(isset($depth1Value['NextHopType'])){
				$this->options['query']['NextHopList.' . ($depth1 + 1) . '.NextHopType'] = $depth1Value['NextHopType'];
			}
		}

		return $this;
    }
}

/**
 * @method string getAccessPointId()
 * @method $this withAccessPointId($value)
 * @method string getOppositeRouterId()
 * @method $this withOppositeRouterId($value)
 * @method string getOppositeAccessPointId()
 * @method $this withOppositeAccessPointId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getRole()
 * @method $this withRole($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getHealthCheckTargetIp()
 * @method $this withHealthCheckTargetIp($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getSpec()
 * @method $this withSpec($value)
 * @method string getFastLinkMode()
 * @method $this withFastLinkMode($value)
 * @method string getOppositeInterfaceId()
 * @method $this withOppositeInterfaceId($value)
 * @method string getInstanceChargeType()
 * @method $this withInstanceChargeType($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getAutoPay()
 * @method $this withAutoPay($value)
 * @method string getAvailableZoneId()
 * @method $this withAvailableZoneId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOppositeRegionId()
 * @method $this withOppositeRegionId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getOppositeInterfaceOwnerId()
 * @method $this withOppositeInterfaceOwnerId($value)
 * @method string getRouterType()
 * @method $this withRouterType($value)
 * @method string getHealthCheckSourceIp()
 * @method $this withHealthCheckSourceIp($value)
 * @method string getRouterId()
 * @method $this withRouterId($value)
 * @method string getOppositeRouterType()
 * @method $this withOppositeRouterType($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getPricingCycle()
 * @method $this withPricingCycle($value)
 */
class CreateRouterInterface extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getRouteTableName()
 * @method $this withRouteTableName($value)
 * @method string getAssociateType()
 * @method $this withAssociateType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 */
class CreateRouteTable extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getSourceCIDR()
 * @method $this withSourceCIDR($value)
 * @method string getSnatIp()
 * @method $this withSnatIp($value)
 * @method string getSourceVSwitchId()
 * @method $this withSourceVSwitchId($value)
 * @method string getEipAffinity()
 * @method $this withEipAffinity($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getSnatTableId()
 * @method $this withSnatTableId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSnatEntryName()
 * @method $this withSnatEntryName($value)
 */
class CreateSnatEntry extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getSslVpnServerId()
 * @method $this withSslVpnServerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class CreateSslVpnClientCert extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getLocalSubnet()
 * @method $this withLocalSubnet($value)
 * @method string getIDaaSRegionId()
 * @method $this withIDaaSRegionId($value)
 * @method string getEnableMultiFactorAuth()
 * @method $this withEnableMultiFactorAuth($value)
 * @method string getIDaaSInstanceId()
 * @method $this withIDaaSInstanceId($value)
 * @method string getCipher()
 * @method $this withCipher($value)
 * @method string getClientIpPool()
 * @method $this withClientIpPool($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getCompress()
 * @method $this withCompress($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getVpnGatewayId()
 * @method $this withVpnGatewayId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPort()
 * @method $this withPort($value)
 * @method string getProto()
 * @method $this withProto($value)
 * @method string getName()
 * @method $this withName($value)
 */
class CreateSslVpnServer extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method array getIngressRules()
 * @method string getTrafficMirrorFilterName()
 * @method $this withTrafficMirrorFilterName($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method array getEgressRules()
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTrafficMirrorFilterDescription()
 * @method $this withTrafficMirrorFilterDescription($value)
 */
class CreateTrafficMirrorFilter extends Rpc
{

    /**
     * @param array $ingressRules
     *
     * @return $this
     */
	public function withIngressRules(array $ingressRules)
	{
	    $this->data['IngressRules'] = $ingressRules;
		foreach ($ingressRules as $depth1 => $depth1Value) {
			if(isset($depth1Value['Action'])){
				$this->options['query']['IngressRules.' . ($depth1 + 1) . '.Action'] = $depth1Value['Action'];
			}
			if(isset($depth1Value['SourceCidrBlock'])){
				$this->options['query']['IngressRules.' . ($depth1 + 1) . '.SourceCidrBlock'] = $depth1Value['SourceCidrBlock'];
			}
			if(isset($depth1Value['Protocol'])){
				$this->options['query']['IngressRules.' . ($depth1 + 1) . '.Protocol'] = $depth1Value['Protocol'];
			}
			if(isset($depth1Value['DestinationPortRange'])){
				$this->options['query']['IngressRules.' . ($depth1 + 1) . '.DestinationPortRange'] = $depth1Value['DestinationPortRange'];
			}
			if(isset($depth1Value['Priority'])){
				$this->options['query']['IngressRules.' . ($depth1 + 1) . '.Priority'] = $depth1Value['Priority'];
			}
			if(isset($depth1Value['DestinationCidrBlock'])){
				$this->options['query']['IngressRules.' . ($depth1 + 1) . '.DestinationCidrBlock'] = $depth1Value['DestinationCidrBlock'];
			}
			if(isset($depth1Value['SourcePortRange'])){
				$this->options['query']['IngressRules.' . ($depth1 + 1) . '.SourcePortRange'] = $depth1Value['SourcePortRange'];
			}
		}

		return $this;
    }

    /**
     * @param array $egressRules
     *
     * @return $this
     */
	public function withEgressRules(array $egressRules)
	{
	    $this->data['EgressRules'] = $egressRules;
		foreach ($egressRules as $depth1 => $depth1Value) {
			if(isset($depth1Value['Action'])){
				$this->options['query']['EgressRules.' . ($depth1 + 1) . '.Action'] = $depth1Value['Action'];
			}
			if(isset($depth1Value['SourceCidrBlock'])){
				$this->options['query']['EgressRules.' . ($depth1 + 1) . '.SourceCidrBlock'] = $depth1Value['SourceCidrBlock'];
			}
			if(isset($depth1Value['Protocol'])){
				$this->options['query']['EgressRules.' . ($depth1 + 1) . '.Protocol'] = $depth1Value['Protocol'];
			}
			if(isset($depth1Value['DestinationPortRange'])){
				$this->options['query']['EgressRules.' . ($depth1 + 1) . '.DestinationPortRange'] = $depth1Value['DestinationPortRange'];
			}
			if(isset($depth1Value['Priority'])){
				$this->options['query']['EgressRules.' . ($depth1 + 1) . '.Priority'] = $depth1Value['Priority'];
			}
			if(isset($depth1Value['DestinationCidrBlock'])){
				$this->options['query']['EgressRules.' . ($depth1 + 1) . '.DestinationCidrBlock'] = $depth1Value['DestinationCidrBlock'];
			}
			if(isset($depth1Value['SourcePortRange'])){
				$this->options['query']['EgressRules.' . ($depth1 + 1) . '.SourcePortRange'] = $depth1Value['SourcePortRange'];
			}
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method array getIngressRules()
 * @method array getEgressRules()
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTrafficMirrorFilterId()
 * @method $this withTrafficMirrorFilterId($value)
 */
class CreateTrafficMirrorFilterRules extends Rpc
{

    /**
     * @param array $ingressRules
     *
     * @return $this
     */
	public function withIngressRules(array $ingressRules)
	{
	    $this->data['IngressRules'] = $ingressRules;
		foreach ($ingressRules as $depth1 => $depth1Value) {
			if(isset($depth1Value['Action'])){
				$this->options['query']['IngressRules.' . ($depth1 + 1) . '.Action'] = $depth1Value['Action'];
			}
			if(isset($depth1Value['SourceCidrBlock'])){
				$this->options['query']['IngressRules.' . ($depth1 + 1) . '.SourceCidrBlock'] = $depth1Value['SourceCidrBlock'];
			}
			if(isset($depth1Value['Protocol'])){
				$this->options['query']['IngressRules.' . ($depth1 + 1) . '.Protocol'] = $depth1Value['Protocol'];
			}
			if(isset($depth1Value['DestinationPortRange'])){
				$this->options['query']['IngressRules.' . ($depth1 + 1) . '.DestinationPortRange'] = $depth1Value['DestinationPortRange'];
			}
			if(isset($depth1Value['Priority'])){
				$this->options['query']['IngressRules.' . ($depth1 + 1) . '.Priority'] = $depth1Value['Priority'];
			}
			if(isset($depth1Value['DestinationCidrBlock'])){
				$this->options['query']['IngressRules.' . ($depth1 + 1) . '.DestinationCidrBlock'] = $depth1Value['DestinationCidrBlock'];
			}
			if(isset($depth1Value['SourcePortRange'])){
				$this->options['query']['IngressRules.' . ($depth1 + 1) . '.SourcePortRange'] = $depth1Value['SourcePortRange'];
			}
		}

		return $this;
    }

    /**
     * @param array $egressRules
     *
     * @return $this
     */
	public function withEgressRules(array $egressRules)
	{
	    $this->data['EgressRules'] = $egressRules;
		foreach ($egressRules as $depth1 => $depth1Value) {
			if(isset($depth1Value['Action'])){
				$this->options['query']['EgressRules.' . ($depth1 + 1) . '.Action'] = $depth1Value['Action'];
			}
			if(isset($depth1Value['SourceCidrBlock'])){
				$this->options['query']['EgressRules.' . ($depth1 + 1) . '.SourceCidrBlock'] = $depth1Value['SourceCidrBlock'];
			}
			if(isset($depth1Value['Protocol'])){
				$this->options['query']['EgressRules.' . ($depth1 + 1) . '.Protocol'] = $depth1Value['Protocol'];
			}
			if(isset($depth1Value['DestinationPortRange'])){
				$this->options['query']['EgressRules.' . ($depth1 + 1) . '.DestinationPortRange'] = $depth1Value['DestinationPortRange'];
			}
			if(isset($depth1Value['Priority'])){
				$this->options['query']['EgressRules.' . ($depth1 + 1) . '.Priority'] = $depth1Value['Priority'];
			}
			if(isset($depth1Value['DestinationCidrBlock'])){
				$this->options['query']['EgressRules.' . ($depth1 + 1) . '.DestinationCidrBlock'] = $depth1Value['DestinationCidrBlock'];
			}
			if(isset($depth1Value['SourcePortRange'])){
				$this->options['query']['EgressRules.' . ($depth1 + 1) . '.SourcePortRange'] = $depth1Value['SourcePortRange'];
			}
		}

		return $this;
    }
}

/**
 * @method string getTrafficMirrorTargetType()
 * @method $this withTrafficMirrorTargetType($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getEnabled()
 * @method $this withEnabled($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getTrafficMirrorSessionName()
 * @method $this withTrafficMirrorSessionName($value)
 * @method string getTrafficMirrorSessionDescription()
 * @method $this withTrafficMirrorSessionDescription($value)
 * @method array getTrafficMirrorSourceIds()
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getPriority()
 * @method $this withPriority($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTrafficMirrorTargetId()
 * @method $this withTrafficMirrorTargetId($value)
 * @method string getTrafficMirrorFilterId()
 * @method $this withTrafficMirrorFilterId($value)
 * @method string getPacketLength()
 * @method $this withPacketLength($value)
 * @method string getVirtualNetworkId()
 * @method $this withVirtualNetworkId($value)
 */
class CreateTrafficMirrorSession extends Rpc
{

    /**
     * @param array $trafficMirrorSourceIds
     *
     * @return $this
     */
	public function withTrafficMirrorSourceIds(array $trafficMirrorSourceIds)
	{
	    $this->data['TrafficMirrorSourceIds'] = $trafficMirrorSourceIds;
		foreach ($trafficMirrorSourceIds as $i => $iValue) {
			$this->options['query']['TrafficMirrorSourceIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getVbrId()
 * @method $this withVbrId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPeerVbrId()
 * @method $this withPeerVbrId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class CreateVbrHa extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getWeight()
 * @method $this withWeight($value)
 * @method string getRouteDest()
 * @method $this withRouteDest($value)
 * @method string getNextHop()
 * @method $this withNextHop($value)
 * @method string getVpnConnectionId()
 * @method $this withVpnConnectionId($value)
 * @method string getOverlayMode()
 * @method $this withOverlayMode($value)
 */
class CreateVcoRouteEntry extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCircuitCode()
 * @method $this withCircuitCode($value)
 * @method string getVlanId()
 * @method $this withVlanId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getEnableIpv6()
 * @method $this withEnableIpv6($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getPeerGatewayIp()
 * @method $this withPeerGatewayIp($value)
 * @method string getPeerIpv6GatewayIp()
 * @method $this withPeerIpv6GatewayIp($value)
 * @method string getPeeringSubnetMask()
 * @method $this withPeeringSubnetMask($value)
 * @method string getLocalGatewayIp()
 * @method $this withLocalGatewayIp($value)
 * @method string getPeeringIpv6SubnetMask()
 * @method $this withPeeringIpv6SubnetMask($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getBandwidth()
 * @method $this withBandwidth($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPhysicalConnectionId()
 * @method $this withPhysicalConnectionId($value)
 * @method string getLocalIpv6GatewayIp()
 * @method $this withLocalIpv6GatewayIp($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getVbrOwnerId()
 * @method $this withVbrOwnerId($value)
 */
class CreateVirtualBorderRouter extends Rpc
{
}

/**
 * @method string getVpconnAliUid()
 * @method $this withVpconnAliUid($value)
 * @method string getOrderMode()
 * @method $this withOrderMode($value)
 * @method string getVlanId()
 * @method $this withVlanId($value)
 * @method string getVpconnUidResourceGroupId()
 * @method $this withVpconnUidResourceGroupId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getSpec()
 * @method $this withSpec($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getToken()
 * @method $this withToken($value)
 * @method string getPhysicalConnectionId()
 * @method $this withPhysicalConnectionId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class CreateVirtualPhysicalConnection extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getEnableIpv6()
 * @method $this withEnableIpv6($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getVpcName()
 * @method $this withVpcName($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getIpv6Isp()
 * @method $this withIpv6Isp($value)
 * @method string getUserCidr()
 * @method $this withUserCidr($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getIpv6CidrBlock()
 * @method $this withIpv6CidrBlock($value)
 * @method string getCidrBlock()
 * @method $this withCidrBlock($value)
 */
class CreateVpc extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getServiceName()
 * @method $this withServiceName($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEndpointDescription()
 * @method $this withEndpointDescription($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getEndpointName()
 * @method $this withEndpointName($value)
 * @method string getPolicyDocument()
 * @method $this withPolicyDocument($value)
 */
class CreateVpcGatewayEndpoint extends Rpc
{
}

/**
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getOrderMode()
 * @method $this withOrderMode($value)
 * @method string getVbrId()
 * @method $this withVbrId($value)
 * @method string getToken()
 * @method $this withToken($value)
 */
class CreateVpconnFromVbr extends Rpc
{
}

/**
 * @method array getPrefixListEntrys()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getMaxEntries()
 * @method $this withMaxEntries($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getIpVersion()
 * @method $this withIpVersion($value)
 * @method array getPrefixListEntries()
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPrefixListName()
 * @method $this withPrefixListName($value)
 * @method string getPrefixListDescription()
 * @method $this withPrefixListDescription($value)
 */
class CreateVpcPrefixList extends Rpc
{

    /**
     * @param array $prefixListEntrys
     *
     * @return $this
     */
	public function withPrefixListEntrys(array $prefixListEntrys)
	{
	    $this->data['PrefixListEntrys'] = $prefixListEntrys;
		foreach ($prefixListEntrys as $depth1 => $depth1Value) {
			if(isset($depth1Value['Cidr'])){
				$this->options['query']['PrefixListEntrys.' . ($depth1 + 1) . '.Cidr'] = $depth1Value['Cidr'];
			}
			if(isset($depth1Value['Description'])){
				$this->options['query']['PrefixListEntrys.' . ($depth1 + 1) . '.Description'] = $depth1Value['Description'];
			}
		}

		return $this;
    }

    /**
     * @param array $prefixListEntries
     *
     * @return $this
     */
	public function withPrefixListEntries(array $prefixListEntries)
	{
	    $this->data['PrefixListEntries'] = $prefixListEntries;
		foreach ($prefixListEntries as $depth1 => $depth1Value) {
			if(isset($depth1Value['Cidr'])){
				$this->options['query']['PrefixListEntries.' . ($depth1 + 1) . '.Cidr'] = $depth1Value['Cidr'];
			}
			if(isset($depth1Value['Description'])){
				$this->options['query']['PrefixListEntries.' . ($depth1 + 1) . '.Description'] = $depth1Value['Description'];
			}
		}

		return $this;
    }
}

/**
 * @method string getIkeConfig()
 * @method $this withIkeConfig($value)
 * @method string getAutoConfigRoute()
 * @method $this withAutoConfigRoute($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCenId()
 * @method $this withCenId($value)
 * @method string getAttachType()
 * @method $this withAttachType($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getIpsecConfig()
 * @method $this withIpsecConfig($value)
 * @method string getBgpConfig()
 * @method $this withBgpConfig($value)
 * @method string getRouteTableAssociationEnabled()
 * @method $this withRouteTableAssociationEnabled($value)
 * @method string getNetworkType()
 * @method $this withNetworkType($value)
 * @method string getHealthCheckConfig()
 * @method $this withHealthCheckConfig($value)
 * @method string getCustomerGatewayId()
 * @method $this withCustomerGatewayId($value)
 * @method string getLocalSubnet()
 * @method $this withLocalSubnet($value)
 * @method string getRemoteCaCert()
 * @method $this withRemoteCaCert($value)
 * @method string getAutoPublishRouteEnabled()
 * @method $this withAutoPublishRouteEnabled($value)
 * @method string getRouteTablePropagationEnabled()
 * @method $this withRouteTablePropagationEnabled($value)
 * @method string getRemoteSubnet()
 * @method $this withRemoteSubnet($value)
 * @method string getEffectImmediately()
 * @method $this withEffectImmediately($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEnableDpd()
 * @method $this withEnableDpd($value)
 * @method array getTags()
 * @method string getName()
 * @method $this withName($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getEnableNatTraversal()
 * @method $this withEnableNatTraversal($value)
 */
class CreateVpnAttachment extends Rpc
{

    /**
     * @param array $tags
     *
     * @return $this
     */
	public function withTags(array $tags)
	{
	    $this->data['Tags'] = $tags;
		foreach ($tags as $depth1 => $depth1Value) {
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tags.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tags.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }
}

/**
 * @method string getIkeConfig()
 * @method $this withIkeConfig($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAutoConfigRoute()
 * @method $this withAutoConfigRoute($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getIpsecConfig()
 * @method $this withIpsecConfig($value)
 * @method string getBgpConfig()
 * @method $this withBgpConfig($value)
 * @method string getHealthCheckConfig()
 * @method $this withHealthCheckConfig($value)
 * @method string getCustomerGatewayId()
 * @method $this withCustomerGatewayId($value)
 * @method string getLocalSubnet()
 * @method $this withLocalSubnet($value)
 * @method string getRemoteSubnet()
 * @method $this withRemoteSubnet($value)
 * @method string getEffectImmediately()
 * @method $this withEffectImmediately($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getVpnGatewayId()
 * @method $this withVpnGatewayId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getEnableDpd()
 * @method $this withEnableDpd($value)
 * @method array getTags()
 * @method string getRemoteCaCertificate()
 * @method $this withRemoteCaCertificate($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getEnableNatTraversal()
 * @method $this withEnableNatTraversal($value)
 */
class CreateVpnConnection extends Rpc
{

    /**
     * @param array $tags
     *
     * @return $this
     */
	public function withTags(array $tags)
	{
	    $this->data['Tags'] = $tags;
		foreach ($tags as $depth1 => $depth1Value) {
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tags.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tags.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getEnableIpsec()
 * @method $this withEnableIpsec($value)
 * @method string getNetworkType()
 * @method $this withNetworkType($value)
 * @method string getInstanceChargeType()
 * @method $this withInstanceChargeType($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getAutoPay()
 * @method $this withAutoPay($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getBandwidth()
 * @method $this withBandwidth($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVpnType()
 * @method $this withVpnType($value)
 * @method array getTags()
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getEnableSsl()
 * @method $this withEnableSsl($value)
 * @method string getSslConnections()
 * @method $this withSslConnections($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class CreateVpnGateway extends Rpc
{

    /**
     * @param array $tags
     *
     * @return $this
     */
	public function withTags(array $tags)
	{
	    $this->data['Tags'] = $tags;
		foreach ($tags as $depth1 => $depth1Value) {
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tags.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tags.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }
}

/**
 * @method string getRouteSource()
 * @method $this withRouteSource($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getPublishVpc()
 * @method $this withPublishVpc($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getWeight()
 * @method $this withWeight($value)
 * @method string getVpnGatewayId()
 * @method $this withVpnGatewayId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPriority()
 * @method $this withPriority($value)
 * @method string getRouteDest()
 * @method $this withRouteDest($value)
 * @method string getNextHop()
 * @method $this withNextHop($value)
 * @method string getOverlayMode()
 * @method $this withOverlayMode($value)
 */
class CreateVpnPbrRouteEntry extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getPublishVpc()
 * @method $this withPublishVpc($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getWeight()
 * @method $this withWeight($value)
 * @method string getVpnGatewayId()
 * @method $this withVpnGatewayId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRouteDest()
 * @method $this withRouteDest($value)
 * @method string getNextHop()
 * @method $this withNextHop($value)
 * @method string getOverlayMode()
 * @method $this withOverlayMode($value)
 */
class CreateVpnRouteEntry extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getIpv6CidrBlock()
 * @method $this withIpv6CidrBlock($value)
 * @method string getVpcIpv6CidrBlock()
 * @method $this withVpcIpv6CidrBlock($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getVSwitchName()
 * @method $this withVSwitchName($value)
 * @method string getCidrBlock()
 * @method $this withCidrBlock($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 */
class CreateVSwitch extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRouterInterfaceId()
 * @method $this withRouterInterfaceId($value)
 */
class DeactivateRouterInterface extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getFlowLogId()
 * @method $this withFlowLogId($value)
 */
class DeactiveFlowLog extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getBgpGroupId()
 * @method $this withBgpGroupId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteBgpGroup extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRouterId()
 * @method $this withRouterId($value)
 * @method string getDstCidrBlock()
 * @method $this withDstCidrBlock($value)
 */
class DeleteBgpNetwork extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getBgpPeerId()
 * @method $this withBgpPeerId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteBgpPeer extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getBandwidthPackageId()
 * @method $this withBandwidthPackageId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getForce()
 * @method $this withForce($value)
 */
class DeleteCommonBandwidthPackage extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getCustomerGatewayId()
 * @method $this withCustomerGatewayId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteCustomerGateway extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getDhcpOptionsSetId()
 * @method $this withDhcpOptionsSetId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteDhcpOptionsSet extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getFlowLogId()
 * @method $this withFlowLogId($value)
 */
class DeleteFlowLog extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getForwardTableId()
 * @method $this withForwardTableId($value)
 * @method string getForwardEntryId()
 * @method $this withForwardEntryId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteForwardEntry extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getFullNatEntryId()
 * @method $this withFullNatEntryId($value)
 * @method string getFullNatTableId()
 * @method $this withFullNatTableId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteFullNatEntry extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getGlobalAccelerationInstanceId()
 * @method $this withGlobalAccelerationInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteGlobalAccelerationInstance extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getHaVipId()
 * @method $this withHaVipId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteHaVip extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getCallerBid()
 * @method string getIpsecServerId()
 * @method $this withIpsecServerId($value)
 */
class DeleteIpsecServer extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCallerBid($value)
    {
        $this->data['CallerBid'] = $value;
        $this->options['query']['callerBid'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getIpv4GatewayId()
 * @method $this withIpv4GatewayId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteIpv4Gateway extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getIpv6EgressOnlyRuleId()
 * @method $this withIpv6EgressOnlyRuleId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteIpv6EgressOnlyRule extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getIpv6GatewayId()
 * @method $this withIpv6GatewayId($value)
 */
class DeleteIpv6Gateway extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getIpv6InternetBandwidthId()
 * @method $this withIpv6InternetBandwidthId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getIpv6AddressId()
 * @method $this withIpv6AddressId($value)
 */
class DeleteIpv6InternetBandwidth extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getIpv6TranslatorId()
 * @method $this withIpv6TranslatorId($value)
 */
class DeleteIPv6Translator extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getAclId()
 * @method $this withAclId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteIPv6TranslatorAclList extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getIpv6TranslatorEntryId()
 * @method $this withIpv6TranslatorEntryId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getIpv6TranslatorId()
 * @method $this withIpv6TranslatorId($value)
 */
class DeleteIPv6TranslatorEntry extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getNatGatewayId()
 * @method $this withNatGatewayId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getForce()
 * @method $this withForce($value)
 */
class DeleteNatGateway extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getNatIpId()
 * @method $this withNatIpId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteNatIp extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getNatGatewayId()
 * @method $this withNatGatewayId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getNatIpCidr()
 * @method $this withNatIpCidr($value)
 */
class DeleteNatIpCidr extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getNetworkAclId()
 * @method $this withNetworkAclId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteNetworkAcl extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPhysicalConnectionId()
 * @method $this withPhysicalConnectionId($value)
 */
class DeletePhysicalConnection extends Rpc
{
}

/**
 * @method string getPublicIpAddressPoolId()
 * @method $this withPublicIpAddressPoolId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeletePublicIpAddressPool extends Rpc
{
}

/**
 * @method string getPublicIpAddressPoolId()
 * @method $this withPublicIpAddressPoolId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getCidrBlock()
 * @method $this withCidrBlock($value)
 */
class DeletePublicIpAddressPoolCidrBlock extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method array getRouteEntries()
 */
class DeleteRouteEntries extends Rpc
{

    /**
     * @param array $routeEntries
     *
     * @return $this
     */
	public function withRouteEntries(array $routeEntries)
	{
	    $this->data['RouteEntries'] = $routeEntries;
		foreach ($routeEntries as $depth1 => $depth1Value) {
			if(isset($depth1Value['RouteTableId'])){
				$this->options['query']['RouteEntries.' . ($depth1 + 1) . '.RouteTableId'] = $depth1Value['RouteTableId'];
			}
			if(isset($depth1Value['RouteEntryId'])){
				$this->options['query']['RouteEntries.' . ($depth1 + 1) . '.RouteEntryId'] = $depth1Value['RouteEntryId'];
			}
			if(isset($depth1Value['DstCidrBlock'])){
				$this->options['query']['RouteEntries.' . ($depth1 + 1) . '.DstCidrBlock'] = $depth1Value['DstCidrBlock'];
			}
			if(isset($depth1Value['NextHop'])){
				$this->options['query']['RouteEntries.' . ($depth1 + 1) . '.NextHop'] = $depth1Value['NextHop'];
			}
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getNextHopId()
 * @method $this withNextHopId($value)
 * @method string getRouteTableId()
 * @method $this withRouteTableId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDestinationCidrBlock()
 * @method $this withDestinationCidrBlock($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRouteEntryId()
 * @method $this withRouteEntryId($value)
 * @method array getNextHopList()
 */
class DeleteRouteEntry extends Rpc
{

    /**
     * @param array $nextHopList
     *
     * @return $this
     */
	public function withNextHopList(array $nextHopList)
	{
	    $this->data['NextHopList'] = $nextHopList;
		foreach ($nextHopList as $depth1 => $depth1Value) {
			if(isset($depth1Value['NextHopId'])){
				$this->options['query']['NextHopList.' . ($depth1 + 1) . '.NextHopId'] = $depth1Value['NextHopId'];
			}
			if(isset($depth1Value['NextHopType'])){
				$this->options['query']['NextHopList.' . ($depth1 + 1) . '.NextHopType'] = $depth1Value['NextHopType'];
			}
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getRouterInterfaceId()
 * @method $this withRouterInterfaceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteRouterInterface extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getRouteTableId()
 * @method $this withRouteTableId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteRouteTable extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getSnatEntryId()
 * @method $this withSnatEntryId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getSnatTableId()
 * @method $this withSnatTableId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteSnatEntry extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getSslVpnClientCertId()
 * @method $this withSslVpnClientCertId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteSslVpnClientCert extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getSslVpnServerId()
 * @method $this withSslVpnServerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteSslVpnServer extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTrafficMirrorFilterId()
 * @method $this withTrafficMirrorFilterId($value)
 */
class DeleteTrafficMirrorFilter extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTrafficMirrorFilterId()
 * @method $this withTrafficMirrorFilterId($value)
 * @method array getTrafficMirrorFilterRuleIds()
 */
class DeleteTrafficMirrorFilterRules extends Rpc
{

    /**
     * @param array $trafficMirrorFilterRuleIds
     *
     * @return $this
     */
	public function withTrafficMirrorFilterRuleIds(array $trafficMirrorFilterRuleIds)
	{
	    $this->data['TrafficMirrorFilterRuleIds'] = $trafficMirrorFilterRuleIds;
		foreach ($trafficMirrorFilterRuleIds as $i => $iValue) {
			$this->options['query']['TrafficMirrorFilterRuleIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getTrafficMirrorSessionId()
 * @method $this withTrafficMirrorSessionId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteTrafficMirrorSession extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DeleteVbrHa extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getWeight()
 * @method $this withWeight($value)
 * @method string getRouteDest()
 * @method $this withRouteDest($value)
 * @method string getNextHop()
 * @method $this withNextHop($value)
 * @method string getVpnConnectionId()
 * @method $this withVpnConnectionId($value)
 * @method string getOverlayMode()
 * @method $this withOverlayMode($value)
 */
class DeleteVcoRouteEntry extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getVbrId()
 * @method $this withVbrId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteVirtualBorderRouter extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getForceDelete()
 * @method $this withForceDelete($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 */
class DeleteVpc extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getEndpointId()
 * @method $this withEndpointId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteVpcGatewayEndpoint extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getPrefixListId()
 * @method $this withPrefixListId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteVpcPrefixList extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getVpnConnectionId()
 * @method $this withVpnConnectionId($value)
 */
class DeleteVpnAttachment extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVpnConnectionId()
 * @method $this withVpnConnectionId($value)
 */
class DeleteVpnConnection extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getVpnGatewayId()
 * @method $this withVpnGatewayId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteVpnGateway extends Rpc
{
}

/**
 * @method string getRouteSource()
 * @method $this withRouteSource($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getWeight()
 * @method $this withWeight($value)
 * @method string getVpnGatewayId()
 * @method $this withVpnGatewayId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPriority()
 * @method $this withPriority($value)
 * @method string getRouteDest()
 * @method $this withRouteDest($value)
 * @method string getNextHop()
 * @method $this withNextHop($value)
 * @method string getOverlayMode()
 * @method $this withOverlayMode($value)
 */
class DeleteVpnPbrRouteEntry extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getWeight()
 * @method $this withWeight($value)
 * @method string getVpnGatewayId()
 * @method $this withVpnGatewayId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRouteDest()
 * @method $this withRouteDest($value)
 * @method string getNextHop()
 * @method $this withNextHop($value)
 * @method string getOverlayMode()
 * @method $this withOverlayMode($value)
 */
class DeleteVpnRouteEntry extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 */
class DeleteVSwitch extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getProtectionEnable()
 * @method $this withProtectionEnable($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DeletionProtection extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method array getFilter()
 * @method string getHostOperator()
 * @method $this withHostOperator($value)
 * @method string getName()
 * @method $this withName($value)
 */
class DescribeAccessPoints extends Rpc
{

    /**
     * @param array $filter
     *
     * @return $this
     */
	public function withFilter(array $filter)
	{
	    $this->data['Filter'] = $filter;
		foreach ($filter as $depth1 => $depth1Value) {
			foreach ($depth1Value['Value'] as $i => $iValue) {
				$this->options['query']['Filter.' . ($depth1 + 1) . '.Value.' . ($i + 1)] = $iValue;
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Filter.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getBgpGroupId()
 * @method $this withBgpGroupId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getIsDefault()
 * @method $this withIsDefault($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRouterId()
 * @method $this withRouterId($value)
 */
class DescribeBgpGroups extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRouterId()
 * @method $this withRouterId($value)
 */
class DescribeBgpNetworks extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getBgpGroupId()
 * @method $this withBgpGroupId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getIsDefault()
 * @method $this withIsDefault($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getBgpPeerId()
 * @method $this withBgpPeerId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRouterId()
 * @method $this withRouterId($value)
 */
class DescribeBgpPeers extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityProtectionEnabled()
 * @method $this withSecurityProtectionEnabled($value)
 * @method string getIncludeReservationData()
 * @method $this withIncludeReservationData($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method array getTag()
 * @method string getBandwidthPackageId()
 * @method $this withBandwidthPackageId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class DescribeCommonBandwidthPackages extends Rpc
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
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCustomerGatewayId()
 * @method $this withCustomerGatewayId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeCustomerGateway extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCustomerGatewayId()
 * @method $this withCustomerGatewayId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method array getTag()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeCustomerGateways extends Rpc
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
 * @method string getVbrRegionNo()
 * @method $this withVbrRegionNo($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 */
class DescribeEcGrantRelation extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPublicIpAddressPoolId()
 * @method $this withPublicIpAddressPoolId($value)
 * @method string getFilter2Value()
 * @method string getSecurityProtectionEnabled()
 * @method $this withSecurityProtectionEnabled($value)
 * @method string getISP()
 * @method $this withISP($value)
 * @method string getEipName()
 * @method $this withEipName($value)
 * @method string getAllocationId()
 * @method $this withAllocationId($value)
 * @method string getIncludeReservationData()
 * @method $this withIncludeReservationData($value)
 * @method string getEipAddress()
 * @method $this withEipAddress($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getLockReason()
 * @method $this withLockReason($value)
 * @method string getFilter1Key()
 * @method string getAssociatedInstanceType()
 * @method $this withAssociatedInstanceType($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method array getTag()
 * @method string getSegmentInstanceId()
 * @method $this withSegmentInstanceId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getBandwidthPackageId()
 * @method $this withBandwidthPackageId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getFilter1Value()
 * @method string getFilter2Key()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getChargeType()
 * @method $this withChargeType($value)
 * @method string getAssociatedInstanceId()
 * @method $this withAssociatedInstanceId($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeEipAddresses extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFilter2Value($value)
    {
        $this->data['Filter2Value'] = $value;
        $this->options['query']['Filter.2.Value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFilter1Key($value)
    {
        $this->data['Filter1Key'] = $value;
        $this->options['query']['Filter.1.Key'] = $value;

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
     * @param string $value
     *
     * @return $this
     */
    public function withFilter1Value($value)
    {
        $this->data['Filter1Value'] = $value;
        $this->options['query']['Filter.1.Value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFilter2Key($value)
    {
        $this->data['Filter2Key'] = $value;
        $this->options['query']['Filter.2.Key'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DescribeEipGatewayInfo extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAllocationId()
 * @method $this withAllocationId($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeEipMonitorData extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getSegmentInstanceId()
 * @method $this withSegmentInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeEipSegment extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getLogStoreName()
 * @method $this withLogStoreName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method array getTags()
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getTrafficType()
 * @method $this withTrafficType($value)
 * @method string getFlowLogId()
 * @method $this withFlowLogId($value)
 * @method string getFlowLogName()
 * @method $this withFlowLogName($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeFlowLogs extends Rpc
{

    /**
     * @param array $tags
     *
     * @return $this
     */
	public function withTags(array $tags)
	{
	    $this->data['Tags'] = $tags;
		foreach ($tags as $depth1 => $depth1Value) {
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tags.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tags.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getForwardTableId()
 * @method $this withForwardTableId($value)
 * @method string getInternalIp()
 * @method $this withInternalIp($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getForwardEntryId()
 * @method $this withForwardEntryId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getNatGatewayId()
 * @method $this withNatGatewayId($value)
 * @method string getExternalIp()
 * @method $this withExternalIp($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getIpProtocol()
 * @method $this withIpProtocol($value)
 * @method string getForwardEntryName()
 * @method $this withForwardEntryName($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInternalPort()
 * @method $this withInternalPort($value)
 * @method string getExternalPort()
 * @method $this withExternalPort($value)
 */
class DescribeForwardTableEntries extends Rpc
{
}

/**
 * @method string getIpAddress()
 * @method $this withIpAddress($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getBandwidthType()
 * @method $this withBandwidthType($value)
 * @method string getIncludeReservationData()
 * @method $this withIncludeReservationData($value)
 * @method string getGlobalAccelerationInstanceId()
 * @method $this withGlobalAccelerationInstanceId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getServiceLocation()
 * @method $this withServiceLocation($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getServerId()
 * @method $this withServerId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeGlobalAccelerationInstances extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DescribeGrantRulesToCen extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method array getTags()
 * @method array getFilter()
 */
class DescribeHaVips extends Rpc
{

    /**
     * @param array $tags
     *
     * @return $this
     */
	public function withTags(array $tags)
	{
	    $this->data['Tags'] = $tags;
		foreach ($tags as $depth1 => $depth1Value) {
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tags.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tags.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }

    /**
     * @param array $filter
     *
     * @return $this
     */
	public function withFilter(array $filter)
	{
	    $this->data['Filter'] = $filter;
		foreach ($filter as $depth1 => $depth1Value) {
			foreach ($depth1Value['Value'] as $i => $iValue) {
				$this->options['query']['Filter.' . ($depth1 + 1) . '.Value.' . ($i + 1)] = $iValue;
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Filter.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DescribeHighDefinitionMonitorLogAttribute extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getIpv6InternetBandwidthId()
 * @method $this withIpv6InternetBandwidthId($value)
 * @method string getNetworkType()
 * @method $this withNetworkType($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getAssociatedInstanceType()
 * @method $this withAssociatedInstanceType($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getIpv6AddressId()
 * @method $this withIpv6AddressId($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getIpv6Address()
 * @method $this withIpv6Address($value)
 * @method string getAssociatedInstanceId()
 * @method $this withAssociatedInstanceId($value)
 */
class DescribeIpv6Addresses extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getIpv6EgressOnlyRuleId()
 * @method $this withIpv6EgressOnlyRuleId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getIpv6GatewayId()
 * @method $this withIpv6GatewayId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class DescribeIpv6EgressOnlyRules extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getIpv6GatewayId()
 * @method $this withIpv6GatewayId($value)
 */
class DescribeIpv6GatewayAttribute extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method array getTags()
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getIpv6GatewayId()
 * @method $this withIpv6GatewayId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class DescribeIpv6Gateways extends Rpc
{

    /**
     * @param array $tags
     *
     * @return $this
     */
	public function withTags(array $tags)
	{
	    $this->data['Tags'] = $tags;
		foreach ($tags as $depth1 => $depth1Value) {
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tags.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tags.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getAclId()
 * @method $this withAclId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeIPv6TranslatorAclListAttributes extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAclName()
 * @method $this withAclName($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getAclId()
 * @method $this withAclId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeIPv6TranslatorAclLists extends Rpc
{
}

/**
 * @method string getBackendIpv4Port()
 * @method $this withBackendIpv4Port($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getEntryName()
 * @method $this withEntryName($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getAclStatus()
 * @method $this withAclStatus($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getAclType()
 * @method $this withAclType($value)
 * @method string getAllocateIpv6Port()
 * @method $this withAllocateIpv6Port($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getBackendIpv4Addr()
 * @method $this withBackendIpv4Addr($value)
 * @method string getAclId()
 * @method $this withAclId($value)
 * @method string getIpv6TranslatorEntryId()
 * @method $this withIpv6TranslatorEntryId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getAllocateIpv6Addr()
 * @method $this withAllocateIpv6Addr($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTransProtocol()
 * @method $this withTransProtocol($value)
 * @method string getIpv6TranslatorId()
 * @method $this withIpv6TranslatorId($value)
 */
class DescribeIPv6TranslatorEntries extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAllocateIpv4Addr()
 * @method $this withAllocateIpv4Addr($value)
 * @method string getSpec()
 * @method $this withSpec($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getBusinessStatus()
 * @method $this withBusinessStatus($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getAllocateIpv6Addr()
 * @method $this withAllocateIpv6Addr($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getIpv6TranslatorId()
 * @method $this withIpv6TranslatorId($value)
 * @method string getPayType()
 * @method $this withPayType($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeIPv6Translators extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getNetworkType()
 * @method $this withNetworkType($value)
 * @method string getSpec()
 * @method $this withSpec($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getNatType()
 * @method $this withNatType($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getNatGatewayId()
 * @method $this withNatGatewayId($value)
 * @method array getTag()
 * @method string getInstanceChargeType()
 * @method $this withInstanceChargeType($value)
 * @method array getNatGatewayIds()
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getPrivateLinkEnabled()
 * @method $this withPrivateLinkEnabled($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeNatGateways extends Rpc
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
     * @param array $natGatewayIds
     *
     * @return $this
     */
	public function withNatGatewayIds(array $natGatewayIds)
	{
	    $this->data['NatGatewayIds'] = $natGatewayIds;
		foreach ($natGatewayIds as $i => $iValue) {
			$this->options['query']['NatGatewayIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getNetworkAclId()
 * @method $this withNetworkAclId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeNetworkAclAttributes extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getNetworkAclId()
 * @method $this withNetworkAclId($value)
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getNetworkAclName()
 * @method $this withNetworkAclName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method array getTags()
 * @method string getVpcId()
 * @method $this withVpcId($value)
 */
class DescribeNetworkAcls extends Rpc
{

    /**
     * @param array $tags
     *
     * @return $this
     */
	public function withTags(array $tags)
	{
	    $this->data['Tags'] = $tags;
		foreach ($tags as $depth1 => $depth1Value) {
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tags.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tags.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DescribePhysicalConnectionLOA extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getIncludeReservationData()
 * @method $this withIncludeReservationData($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method array getTags()
 * @method array getFilter()
 */
class DescribePhysicalConnections extends Rpc
{

    /**
     * @param array $tags
     *
     * @return $this
     */
	public function withTags(array $tags)
	{
	    $this->data['Tags'] = $tags;
		foreach ($tags as $depth1 => $depth1Value) {
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tags.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tags.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }

    /**
     * @param array $filter
     *
     * @return $this
     */
	public function withFilter(array $filter)
	{
	    $this->data['Filter'] = $filter;
		foreach ($filter as $depth1 => $depth1Value) {
			foreach ($depth1Value['Value'] as $i => $iValue) {
				$this->options['query']['Filter.' . ($depth1 + 1) . '.Value.' . ($i + 1)] = $iValue;
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Filter.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getResourceUid()
 * @method $this withResourceUid($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getBandwidth()
 * @method $this withBandwidth($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getKbpsBandwidth()
 * @method $this withKbpsBandwidth($value)
 * @method string getResourceBid()
 * @method $this withResourceBid($value)
 */
class DescribePublicIpAddress extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getProductType()
 * @method $this withProductType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class DescribeRegions extends Rpc
{
}

/**
 * @method array getDestCidrBlockList()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getRouteEntryName()
 * @method $this withRouteEntryName($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getRouteEntryType()
 * @method $this withRouteEntryType($value)
 * @method string getIpVersion()
 * @method $this withIpVersion($value)
 * @method string getNextHopId()
 * @method $this withNextHopId($value)
 * @method string getNextHopType()
 * @method $this withNextHopType($value)
 * @method string getRouteTableId()
 * @method $this withRouteTableId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDestinationCidrBlock()
 * @method $this withDestinationCidrBlock($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getMaxResult()
 * @method $this withMaxResult($value)
 * @method string getServiceType()
 * @method $this withServiceType($value)
 * @method string getRouteEntryId()
 * @method $this withRouteEntryId($value)
 */
class DescribeRouteEntryList extends Rpc
{

    /**
     * @param array $destCidrBlockList
     *
     * @return $this
     */
	public function withDestCidrBlockList(array $destCidrBlockList)
	{
	    $this->data['DestCidrBlockList'] = $destCidrBlockList;
		foreach ($destCidrBlockList as $i => $iValue) {
			$this->options['query']['DestCidrBlockList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DescribeRouterInterfaceAttribute extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getIncludeReservationData()
 * @method $this withIncludeReservationData($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method array getFilter()
 */
class DescribeRouterInterfaces extends Rpc
{

    /**
     * @param array $filter
     *
     * @return $this
     */
	public function withFilter(array $filter)
	{
	    $this->data['Filter'] = $filter;
		foreach ($filter as $depth1 => $depth1Value) {
			foreach ($depth1Value['Value'] as $i => $iValue) {
				$this->options['query']['Filter.' . ($depth1 + 1) . '.Value.' . ($i + 1)] = $iValue;
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Filter.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getRouteTableName()
 * @method $this withRouteTableName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method array getTag()
 * @method string getRouteTableId()
 * @method $this withRouteTableId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRouterType()
 * @method $this withRouterType($value)
 * @method string getRouterId()
 * @method $this withRouterId($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 */
class DescribeRouteTableList extends Rpc
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
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getVRouterId()
 * @method $this withVRouterId($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getRouteTableName()
 * @method $this withRouteTableName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getRouteTableId()
 * @method $this withRouteTableId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRouterType()
 * @method $this withRouterType($value)
 * @method string getRouterId()
 * @method $this withRouterId($value)
 */
class DescribeRouteTables extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getServerType()
 * @method $this withServerType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getServerId()
 * @method $this withServerId($value)
 */
class DescribeServerRelatedGlobalAccelerationInstances extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSourceCIDR()
 * @method $this withSourceCIDR($value)
 * @method string getSnatIp()
 * @method $this withSnatIp($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getSourceVSwitchId()
 * @method $this withSourceVSwitchId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getSnatEntryId()
 * @method $this withSnatEntryId($value)
 * @method string getNatGatewayId()
 * @method $this withNatGatewayId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getSnatTableId()
 * @method $this withSnatTableId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSnatEntryName()
 * @method $this withSnatEntryName($value)
 */
class DescribeSnatTableEntries extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSslVpnClientCertId()
 * @method $this withSslVpnClientCertId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeSslVpnClientCert extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getSslVpnServerId()
 * @method $this withSslVpnServerId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getSslVpnClientCertId()
 * @method $this withSslVpnClientCertId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class DescribeSslVpnClientCerts extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getSslVpnServerId()
 * @method $this withSslVpnServerId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getVpnGatewayId()
 * @method $this withVpnGatewayId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class DescribeSslVpnServers extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 * @method array getResourceId()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getMaxResult()
 * @method $this withMaxResult($value)
 */
class DescribeTagKeys extends Rpc
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
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 * @method array getResourceId()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getMaxResult()
 * @method $this withMaxResult($value)
 */
class DescribeTagKeysForExpressConnect extends Rpc
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
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method array getTag()
 * @method array getResourceId()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getMaxResult()
 * @method $this withMaxResult($value)
 */
class DescribeTags extends Rpc
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
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getVbrHaId()
 * @method $this withVbrHaId($value)
 * @method string getVbrId()
 * @method $this withVbrId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeVbrHa extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getRouteEntryType()
 * @method $this withRouteEntryType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getVpnConnectionId()
 * @method $this withVpnConnectionId($value)
 */
class DescribeVcoRouteEntries extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getIncludeCrossAccountVbr()
 * @method $this withIncludeCrossAccountVbr($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method array getFilter()
 */
class DescribeVirtualBorderRouters extends Rpc
{

    /**
     * @param array $filter
     *
     * @return $this
     */
	public function withFilter(array $filter)
	{
	    $this->data['Filter'] = $filter;
		foreach ($filter as $depth1 => $depth1Value) {
			foreach ($depth1Value['Value'] as $i => $iValue) {
				$this->options['query']['Filter.' . ($depth1 + 1) . '.Value.' . ($i + 1)] = $iValue;
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Filter.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method array getFilter()
 * @method string getPhysicalConnectionId()
 * @method $this withPhysicalConnectionId($value)
 */
class DescribeVirtualBorderRoutersForPhysicalConnection extends Rpc
{

    /**
     * @param array $filter
     *
     * @return $this
     */
	public function withFilter(array $filter)
	{
	    $this->data['Filter'] = $filter;
		foreach ($filter as $depth1 => $depth1Value) {
			foreach ($depth1Value['Value'] as $i => $iValue) {
				$this->options['query']['Filter.' . ($depth1 + 1) . '.Value.' . ($i + 1)] = $iValue;
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Filter.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getIsDefault()
 * @method $this withIsDefault($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 */
class DescribeVpcAttribute extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getVpcOwnerId()
 * @method $this withVpcOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getVpcName()
 * @method $this withVpcName($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getIsDefault()
 * @method $this withIsDefault($value)
 * @method array getTag()
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getDhcpOptionsSetId()
 * @method $this withDhcpOptionsSetId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getAdvancedFeature()
 * @method $this withAdvancedFeature($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 */
class DescribeVpcs extends Rpc
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
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAttachType()
 * @method $this withAttachType($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method array getTag()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVpnConnectionId()
 * @method $this withVpnConnectionId($value)
 */
class DescribeVpnAttachments extends Rpc
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
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVpnConnectionId()
 * @method $this withVpnConnectionId($value)
 */
class DescribeVpnConnection extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getMinutePeriod()
 * @method $this withMinutePeriod($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getFrom()
 * @method $this withFrom($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVpnConnectionId()
 * @method $this withVpnConnectionId($value)
 * @method string getTo()
 * @method $this withTo($value)
 */
class DescribeVpnConnectionLogs extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCustomerGatewayId()
 * @method $this withCustomerGatewayId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method array getTag()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getVpnGatewayId()
 * @method $this withVpnGatewayId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVpnConnectionId()
 * @method $this withVpnConnectionId($value)
 */
class DescribeVpnConnections extends Rpc
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
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getVpnConnectionId()
 * @method $this withVpnConnectionId($value)
 */
class DescribeVpnCrossAccountAuthorizations extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getIncludeReservationData()
 * @method $this withIncludeReservationData($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getVpnGatewayId()
 * @method $this withVpnGatewayId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeVpnGateway extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getIncludeReservationData()
 * @method $this withIncludeReservationData($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method array getTag()
 * @method string getBusinessStatus()
 * @method $this withBusinessStatus($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getVpnGatewayId()
 * @method $this withVpnGatewayId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeVpnGateways extends Rpc
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
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getVpnGatewayId()
 * @method $this withVpnGatewayId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeVpnPbrRouteEntries extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getRouteEntryType()
 * @method $this withRouteEntryType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getVpnGatewayId()
 * @method $this withVpnGatewayId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeVpnRouteEntries extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getMinutePeriod()
 * @method $this withMinutePeriod($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getVpnSslServerId()
 * @method $this withVpnSslServerId($value)
 * @method string getFrom()
 * @method $this withFrom($value)
 * @method string getSslVpnClientCertId()
 * @method $this withSslVpnClientCertId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTo()
 * @method $this withTo($value)
 */
class DescribeVpnSslServerLogs extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getVRouterId()
 * @method $this withVRouterId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeVRouters extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 */
class DescribeVSwitchAttributes extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getIsDefault()
 * @method $this withIsDefault($value)
 * @method array getTag()
 * @method string getRouteTableId()
 * @method $this withRouteTableId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getVSwitchOwnerId()
 * @method $this withVSwitchOwnerId($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getVSwitchName()
 * @method $this withVSwitchName($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 */
class DescribeVSwitches extends Rpc
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
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 * @method string getZoneType()
 * @method $this withZoneType($value)
 */
class DescribeZones extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getDhcpOptionsSetId()
 * @method $this withDhcpOptionsSetId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 */
class DetachDhcpOptionsSetFromVpc extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getVpnGatewayId()
 * @method $this withVpnGatewayId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getIPsecExtendInfo()
 * @method $this withIPsecExtendInfo($value)
 */
class DiagnoseVpnGateway extends Rpc
{
}

/**
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getNatGatewayId()
 * @method $this withNatGatewayId($value)
 */
class DisableNatGatewayEcsMetric extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 */
class DisableVpcClassicLink extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getGatewayId()
 * @method $this withGatewayId($value)
 * @method string getRouteTableId()
 * @method $this withRouteTableId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DissociateRouteTableFromGateway extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getEndpointId()
 * @method $this withEndpointId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method array getRouteTableIds()
 */
class DissociateRouteTablesFromVpcGatewayEndpoint extends Rpc
{

    /**
     * @param array $routeTableIds
     *
     * @return $this
     */
	public function withRouteTableIds(array $routeTableIds)
	{
	    $this->data['RouteTableIds'] = $routeTableIds;
		foreach ($routeTableIds as $i => $iValue) {
			$this->options['query']['RouteTableIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getCertificateId()
 * @method $this withCertificateId($value)
 * @method string getVpnGatewayId()
 * @method $this withVpnGatewayId($value)
 * @method string getCallerBid()
 * @method string getCertificateType()
 * @method $this withCertificateType($value)
 */
class DissociateVpnGatewayWithCertificate extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCallerBid($value)
    {
        $this->data['CallerBid'] = $value;
        $this->options['query']['callerBid'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVpnConnectionId()
 * @method $this withVpnConnectionId($value)
 */
class DownloadVpnConnectionConfig extends Rpc
{
}

/**
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getNatGatewayId()
 * @method $this withNatGatewayId($value)
 */
class EnableNatGatewayEcsMetric extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPhysicalConnectionId()
 * @method $this withPhysicalConnectionId($value)
 */
class EnablePhysicalConnection extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 */
class EnableVpcClassicLink extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getIpv4GatewayId()
 * @method $this withIpv4GatewayId($value)
 * @method array getRouteTableList()
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class EnableVpcIpv4Gateway extends Rpc
{

    /**
     * @param array $routeTableList
     *
     * @return $this
     */
	public function withRouteTableList(array $routeTableList)
	{
	    $this->data['RouteTableList'] = $routeTableList;
		foreach ($routeTableList as $i => $iValue) {
			$this->options['query']['RouteTableList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDhcpOptionsSetId()
 * @method $this withDhcpOptionsSetId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class GetDhcpOptionsSet extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class GetFlowLogServiceStatus extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getIpv4GatewayId()
 * @method $this withIpv4GatewayId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class GetIpv4GatewayAttribute extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getNatGatewayId()
 * @method $this withNatGatewayId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class GetNatGatewayAttribute extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getNatGatewayId()
 * @method $this withNatGatewayId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class GetNatGatewayConvertStatus extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class GetPhysicalConnectionServiceStatus extends Rpc
{
}

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class GetTrafficMirrorServiceStatus extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getEndpointId()
 * @method $this withEndpointId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class GetVpcGatewayEndpointAttribute extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPrefixListId()
 * @method $this withPrefixListId($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class GetVpcPrefixListAssociations extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPrefixListId()
 * @method $this withPrefixListId($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class GetVpcPrefixListEntries extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getRouteEntryType()
 * @method $this withRouteEntryType($value)
 * @method string getRouteTableId()
 * @method $this withRouteTableId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 */
class GetVpcRouteEntrySummary extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDiagnoseId()
 * @method $this withDiagnoseId($value)
 * @method string getVpnGatewayId()
 * @method $this withVpnGatewayId($value)
 */
class GetVpnGatewayDiagnoseResult extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCenId()
 * @method $this withCenId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getCenOwnerId()
 * @method $this withCenOwnerId($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class GrantInstanceToCen extends Rpc
{
}

/**
 * @method string getVbrOwnerUid()
 * @method $this withVbrOwnerUid($value)
 * @method string getVbrRegionNo()
 * @method $this withVbrRegionNo($value)
 * @method string getVbrInstanceIds()
 * @method $this withVbrInstanceIds($value)
 * @method string getGrantType()
 * @method $this withGrantType($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class GrantInstanceToVbr extends Rpc
{
}

class ListBusinessAccessPoints extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method array getDhcpOptionsSetId()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDhcpOptionsSetName()
 * @method $this withDhcpOptionsSetName($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class ListDhcpOptionsSets extends Rpc
{

    /**
     * @param array $dhcpOptionsSetId
     *
     * @return $this
     */
	public function withDhcpOptionsSetId(array $dhcpOptionsSetId)
	{
	    $this->data['DhcpOptionsSetId'] = $dhcpOptionsSetId;
		foreach ($dhcpOptionsSetId as $i => $iValue) {
			$this->options['query']['DhcpOptionsSetId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class ListEnhanhcedNatGatewayAvailableZones extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method array getNetworkInterfaceIds()
 * @method string getFullNatEntryStatus()
 * @method $this withFullNatEntryStatus($value)
 * @method string getFullNatEntryId()
 * @method $this withFullNatEntryId($value)
 * @method string getFullNatTableId()
 * @method $this withFullNatTableId($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method array getFullNatEntryNames()
 * @method string getNatGatewayId()
 * @method $this withNatGatewayId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getIpProtocol()
 * @method $this withIpProtocol($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class ListFullNatEntries extends Rpc
{

    /**
     * @param array $networkInterfaceIds
     *
     * @return $this
     */
	public function withNetworkInterfaceIds(array $networkInterfaceIds)
	{
	    $this->data['NetworkInterfaceIds'] = $networkInterfaceIds;
		foreach ($networkInterfaceIds as $i => $iValue) {
			$this->options['query']['NetworkInterfaceIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $fullNatEntryNames
     *
     * @return $this
     */
	public function withFullNatEntryNames(array $fullNatEntryNames)
	{
	    $this->data['FullNatEntryNames'] = $fullNatEntryNames;
		foreach ($fullNatEntryNames as $i => $iValue) {
			$this->options['query']['FullNatEntryNames.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDestinationCidrBlock()
 * @method $this withDestinationCidrBlock($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getGatewayRouteTableId()
 * @method $this withGatewayRouteTableId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class ListGatewayRouteTableEntries extends Rpc
{
}

/**
 * @method string getGeographicRegionId()
 * @method $this withGeographicRegionId($value)
 */
class ListGeographicSubRegions extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCallerBid()
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getMinutePeriod()
 * @method $this withMinutePeriod($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getFrom()
 * @method $this withFrom($value)
 * @method string getTo()
 * @method $this withTo($value)
 * @method string getIpsecServerId()
 * @method $this withIpsecServerId($value)
 */
class ListIpsecServerLogs extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCallerBid($value)
    {
        $this->data['CallerBid'] = $value;
        $this->options['query']['callerBid'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getVpnGatewayId()
 * @method $this withVpnGatewayId($value)
 * @method string getCallerBid()
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getIpsecServerName()
 * @method $this withIpsecServerName($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method array getIpsecServerId()
 */
class ListIpsecServers extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCallerBid($value)
    {
        $this->data['CallerBid'] = $value;
        $this->options['query']['callerBid'] = $value;

        return $this;
    }

    /**
     * @param array $ipsecServerId
     *
     * @return $this
     */
	public function withIpsecServerId(array $ipsecServerId)
	{
	    $this->data['IpsecServerId'] = $ipsecServerId;
		foreach ($ipsecServerId as $i => $iValue) {
			$this->options['query']['IpsecServerId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getIpv4GatewayName()
 * @method $this withIpv4GatewayName($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getIpv4GatewayId()
 * @method $this withIpv4GatewayId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method array getTags()
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class ListIpv4Gateways extends Rpc
{

    /**
     * @param array $tags
     *
     * @return $this
     */
	public function withTags(array $tags)
	{
	    $this->data['Tags'] = $tags;
		foreach ($tags as $depth1 => $depth1Value) {
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tags.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tags.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
		}

		return $this;
    }
}

/**
 * @method string getNatIpCidrId()
 * @method $this withNatIpCidrId($value)
 * @method array getNatIpCidrs()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getNatGatewayId()
 * @method $this withNatGatewayId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method array getNatIpCidrName()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getNatIpCidr()
 * @method $this withNatIpCidr($value)
 * @method string getNatIpCidrStatus()
 * @method $this withNatIpCidrStatus($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class ListNatIpCidrs extends Rpc
{

    /**
     * @param array $natIpCidrs
     *
     * @return $this
     */
	public function withNatIpCidrs(array $natIpCidrs)
	{
	    $this->data['NatIpCidrs'] = $natIpCidrs;
		foreach ($natIpCidrs as $i => $iValue) {
			$this->options['query']['NatIpCidrs.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $natIpCidrName
     *
     * @return $this
     */
	public function withNatIpCidrName(array $natIpCidrName)
	{
	    $this->data['NatIpCidrName'] = $natIpCidrName;
		foreach ($natIpCidrName as $i => $iValue) {
			$this->options['query']['NatIpCidrName.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getNatIpStatus()
 * @method $this withNatIpStatus($value)
 * @method array getNatIpName()
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getNatGatewayId()
 * @method $this withNatGatewayId($value)
 * @method array getNatIpIds()
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getNatIpCidr()
 * @method $this withNatIpCidr($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class ListNatIps extends Rpc
{

    /**
     * @param array $natIpName
     *
     * @return $this
     */
	public function withNatIpName(array $natIpName)
	{
	    $this->data['NatIpName'] = $natIpName;
		foreach ($natIpName as $i => $iValue) {
			$this->options['query']['NatIpName.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $natIpIds
     *
     * @return $this
     */
	public function withNatIpIds(array $natIpIds)
	{
	    $this->data['NatIpIds'] = $natIpIds;
		foreach ($natIpIds as $i => $iValue) {
			$this->options['query']['NatIpIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method array getPrefixListIds()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method array getTags()
 * @method string getPrefixListName()
 * @method $this withPrefixListName($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class ListPrefixLists extends Rpc
{

    /**
     * @param array $prefixListIds
     *
     * @return $this
     */
	public function withPrefixListIds(array $prefixListIds)
	{
	    $this->data['PrefixListIds'] = $prefixListIds;
		foreach ($prefixListIds as $i => $iValue) {
			$this->options['query']['PrefixListIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $tags
     *
     * @return $this
     */
	public function withTags(array $tags)
	{
	    $this->data['Tags'] = $tags;
		foreach ($tags as $depth1 => $depth1Value) {
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tags.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tags.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
		}

		return $this;
    }
}

/**
 * @method string getPublicIpAddressPoolId()
 * @method $this withPublicIpAddressPoolId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getCidrBlock()
 * @method $this withCidrBlock($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class ListPublicIpAddressPoolCidrBlocks extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getIsp()
 * @method $this withIsp($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method array getPublicIpAddressPoolIds()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method array getTags()
 * @method string getName()
 * @method $this withName($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ListPublicIpAddressPools extends Rpc
{

    /**
     * @param array $publicIpAddressPoolIds
     *
     * @return $this
     */
	public function withPublicIpAddressPoolIds(array $publicIpAddressPoolIds)
	{
	    $this->data['PublicIpAddressPoolIds'] = $publicIpAddressPoolIds;
		foreach ($publicIpAddressPoolIds as $i => $iValue) {
			$this->options['query']['PublicIpAddressPoolIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $tags
     *
     * @return $this
     */
	public function withTags(array $tags)
	{
	    $this->data['Tags'] = $tags;
		foreach ($tags as $depth1 => $depth1Value) {
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tags.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tags.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method array getTag()
 * @method array getResourceId()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
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
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
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
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method array getTag()
 * @method array getResourceId()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class ListTagResourcesForExpressConnect extends Rpc
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
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method array getTrafficMirrorFilterIds()
 * @method string getTrafficMirrorFilterName()
 * @method $this withTrafficMirrorFilterName($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method array getTags()
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class ListTrafficMirrorFilters extends Rpc
{

    /**
     * @param array $trafficMirrorFilterIds
     *
     * @return $this
     */
	public function withTrafficMirrorFilterIds(array $trafficMirrorFilterIds)
	{
	    $this->data['TrafficMirrorFilterIds'] = $trafficMirrorFilterIds;
		foreach ($trafficMirrorFilterIds as $i => $iValue) {
			$this->options['query']['TrafficMirrorFilterIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $tags
     *
     * @return $this
     */
	public function withTags(array $tags)
	{
	    $this->data['Tags'] = $tags;
		foreach ($tags as $depth1 => $depth1Value) {
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tags.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tags.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTrafficMirrorSourceId()
 * @method $this withTrafficMirrorSourceId($value)
 * @method string getEnabled()
 * @method $this withEnabled($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getTrafficMirrorSessionName()
 * @method $this withTrafficMirrorSessionName($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method array getTrafficMirrorSessionIds()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getPriority()
 * @method $this withPriority($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTrafficMirrorTargetId()
 * @method $this withTrafficMirrorTargetId($value)
 * @method string getTrafficMirrorFilterId()
 * @method $this withTrafficMirrorFilterId($value)
 * @method array getTags()
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getVirtualNetworkId()
 * @method $this withVirtualNetworkId($value)
 */
class ListTrafficMirrorSessions extends Rpc
{

    /**
     * @param array $trafficMirrorSessionIds
     *
     * @return $this
     */
	public function withTrafficMirrorSessionIds(array $trafficMirrorSessionIds)
	{
	    $this->data['TrafficMirrorSessionIds'] = $trafficMirrorSessionIds;
		foreach ($trafficMirrorSessionIds as $i => $iValue) {
			$this->options['query']['TrafficMirrorSessionIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $tags
     *
     * @return $this
     */
	public function withTags(array $tags)
	{
	    $this->data['Tags'] = $tags;
		foreach ($tags as $depth1 => $depth1Value) {
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tags.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tags.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
		}

		return $this;
    }
}

/**
 * @method array getVlanIds()
 * @method string getVirtualPhysicalConnectionBusinessStatus()
 * @method $this withVirtualPhysicalConnectionBusinessStatus($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method array getVirtualPhysicalConnectionAliUids()
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method array getVirtualPhysicalConnectionIds()
 * @method string getIsConfirmed()
 * @method $this withIsConfirmed($value)
 * @method array getTags()
 * @method array getVirtualPhysicalConnectionStatuses()
 * @method string getPhysicalConnectionId()
 * @method $this withPhysicalConnectionId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class ListVirtualPhysicalConnections extends Rpc
{

    /**
     * @param array $vlanIds
     *
     * @return $this
     */
	public function withVlanIds(array $vlanIds)
	{
	    $this->data['VlanIds'] = $vlanIds;
		foreach ($vlanIds as $i => $iValue) {
			$this->options['query']['VlanIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $virtualPhysicalConnectionAliUids
     *
     * @return $this
     */
	public function withVirtualPhysicalConnectionAliUids(array $virtualPhysicalConnectionAliUids)
	{
	    $this->data['VirtualPhysicalConnectionAliUids'] = $virtualPhysicalConnectionAliUids;
		foreach ($virtualPhysicalConnectionAliUids as $i => $iValue) {
			$this->options['query']['VirtualPhysicalConnectionAliUids.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $virtualPhysicalConnectionIds
     *
     * @return $this
     */
	public function withVirtualPhysicalConnectionIds(array $virtualPhysicalConnectionIds)
	{
	    $this->data['VirtualPhysicalConnectionIds'] = $virtualPhysicalConnectionIds;
		foreach ($virtualPhysicalConnectionIds as $i => $iValue) {
			$this->options['query']['VirtualPhysicalConnectionIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $tags
     *
     * @return $this
     */
	public function withTags(array $tags)
	{
	    $this->data['Tags'] = $tags;
		foreach ($tags as $depth1 => $depth1Value) {
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tags.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tags.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
		}

		return $this;
    }

    /**
     * @param array $virtualPhysicalConnectionStatuses
     *
     * @return $this
     */
	public function withVirtualPhysicalConnectionStatuses(array $virtualPhysicalConnectionStatuses)
	{
	    $this->data['VirtualPhysicalConnectionStatuses'] = $virtualPhysicalConnectionStatuses;
		foreach ($virtualPhysicalConnectionStatuses as $i => $iValue) {
			$this->options['query']['VirtualPhysicalConnectionStatuses.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getServiceName()
 * @method $this withServiceName($value)
 */
class ListVpcEndpointServicesByEndUser extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getEndpointId()
 * @method $this withEndpointId($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getServiceName()
 * @method $this withServiceName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getEndpointName()
 * @method $this withEndpointName($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class ListVpcGatewayEndpoints extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method array getCertificateId()
 * @method array getVpnGatewayId()
 * @method string getCallerBid()
 * @method string getCertificateType()
 * @method $this withCertificateType($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class ListVpnCertificateAssociations extends Rpc
{

    /**
     * @param array $certificateId
     *
     * @return $this
     */
	public function withCertificateId(array $certificateId)
	{
	    $this->data['CertificateId'] = $certificateId;
		foreach ($certificateId as $i => $iValue) {
			$this->options['query']['CertificateId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $vpnGatewayId
     *
     * @return $this
     */
	public function withVpnGatewayId(array $vpnGatewayId)
	{
	    $this->data['VpnGatewayId'] = $vpnGatewayId;
		foreach ($vpnGatewayId as $i => $iValue) {
			$this->options['query']['VpnGatewayId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCallerBid($value)
    {
        $this->data['CallerBid'] = $value;
        $this->options['query']['callerBid'] = $value;

        return $this;
    }
}

/**
 * @method string getAuthKey()
 * @method $this withAuthKey($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getBgpGroupId()
 * @method $this withBgpGroupId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getPeerAsn()
 * @method $this withPeerAsn($value)
 * @method string getIsFakeAsn()
 * @method $this withIsFakeAsn($value)
 * @method string getClearAuthKey()
 * @method $this withClearAuthKey($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getRouteQuota()
 * @method $this withRouteQuota($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRouteUsageAlarmThreshold()
 * @method $this withRouteUsageAlarmThreshold($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getLocalAsn()
 * @method $this withLocalAsn($value)
 */
class ModifyBgpGroupAttribute extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getBgpGroupId()
 * @method $this withBgpGroupId($value)
 * @method string getPeerIpAddress()
 * @method $this withPeerIpAddress($value)
 * @method string getBfdMultiHop()
 * @method $this withBfdMultiHop($value)
 * @method string getEnableBfd()
 * @method $this withEnableBfd($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getBgpPeerId()
 * @method $this withBgpPeerId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyBgpPeerAttribute extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getBandwidthPackageId()
 * @method $this withBandwidthPackageId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class ModifyCommonBandwidthPackageAttribute extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getBandwidthPackageId()
 * @method $this withBandwidthPackageId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getBandwidth()
 * @method $this withBandwidth($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEipId()
 * @method $this withEipId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyCommonBandwidthPackageIpBandwidth extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getBandwidthPackageId()
 * @method $this withBandwidthPackageId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getBandwidth()
 * @method $this withBandwidth($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyCommonBandwidthPackageSpec extends Rpc
{
}

/**
 * @method string getAuthKey()
 * @method $this withAuthKey($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getCustomerGatewayId()
 * @method $this withCustomerGatewayId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class ModifyCustomerGatewayAttribute extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getAllocationId()
 * @method $this withAllocationId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getBandwidth()
 * @method $this withBandwidth($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class ModifyEipAddressAttribute extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getEccId()
 * @method $this withEccId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getCeIp()
 * @method $this withCeIp($value)
 * @method string getBgpAs()
 * @method $this withBgpAs($value)
 * @method string getPeIp()
 * @method $this withPeIp($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class ModifyExpressCloudConnectionAttribute extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getEccId()
 * @method $this withEccId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getBandwidth()
 * @method $this withBandwidth($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyExpressCloudConnectionBandwidth extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getAggregationInterval()
 * @method $this withAggregationInterval($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getFlowLogId()
 * @method $this withFlowLogId($value)
 * @method string getFlowLogName()
 * @method $this withFlowLogName($value)
 */
class ModifyFlowLogAttribute extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getForwardTableId()
 * @method $this withForwardTableId($value)
 * @method string getInternalIp()
 * @method $this withInternalIp($value)
 * @method string getForwardEntryId()
 * @method $this withForwardEntryId($value)
 * @method string getExternalIp()
 * @method $this withExternalIp($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getIpProtocol()
 * @method $this withIpProtocol($value)
 * @method string getForwardEntryName()
 * @method $this withForwardEntryName($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInternalPort()
 * @method $this withInternalPort($value)
 * @method string getPortBreak()
 * @method $this withPortBreak($value)
 * @method string getExternalPort()
 * @method $this withExternalPort($value)
 */
class ModifyForwardEntry extends Rpc
{
}

/**
 * @method string getFullNatEntryDescription()
 * @method $this withFullNatEntryDescription($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAccessIp()
 * @method $this withAccessIp($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getFullNatEntryId()
 * @method $this withFullNatEntryId($value)
 * @method string getNatIpPort()
 * @method $this withNatIpPort($value)
 * @method string getFullNatTableId()
 * @method $this withFullNatTableId($value)
 * @method string getAccessPort()
 * @method $this withAccessPort($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getIpProtocol()
 * @method $this withIpProtocol($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getFullNatEntryName()
 * @method $this withFullNatEntryName($value)
 * @method string getNatIp()
 * @method $this withNatIp($value)
 * @method string getNetworkInterfaceId()
 * @method $this withNetworkInterfaceId($value)
 */
class ModifyFullNatEntryAttribute extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getGlobalAccelerationInstanceId()
 * @method $this withGlobalAccelerationInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class ModifyGlobalAccelerationInstanceAttributes extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getGlobalAccelerationInstanceId()
 * @method $this withGlobalAccelerationInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getBandwidth()
 * @method $this withBandwidth($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyGlobalAccelerationInstanceSpec extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getHaVipId()
 * @method $this withHaVipId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class ModifyHaVipAttribute extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getIpv6AddressId()
 * @method $this withIpv6AddressId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class ModifyIpv6AddressAttribute extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getIpv6GatewayId()
 * @method $this withIpv6GatewayId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class ModifyIpv6GatewayAttribute extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getSpec()
 * @method $this withSpec($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getIpv6GatewayId()
 * @method $this withIpv6GatewayId($value)
 */
class ModifyIpv6GatewaySpec extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getIpv6InternetBandwidthId()
 * @method $this withIpv6InternetBandwidthId($value)
 * @method string getBandwidth()
 * @method $this withBandwidth($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getIpv6AddressId()
 * @method $this withIpv6AddressId($value)
 */
class ModifyIpv6InternetBandwidth extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAclName()
 * @method $this withAclName($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getAclId()
 * @method $this withAclId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyIPv6TranslatorAclAttribute extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAclId()
 * @method $this withAclId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getAclEntryComment()
 * @method $this withAclEntryComment($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAclEntryId()
 * @method $this withAclEntryId($value)
 */
class ModifyIPv6TranslatorAclListEntry extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getIpv6TranslatorId()
 * @method $this withIpv6TranslatorId($value)
 */
class ModifyIPv6TranslatorAttribute extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getAutoPay()
 * @method $this withAutoPay($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getBandwidth()
 * @method $this withBandwidth($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getIpv6TranslatorId()
 * @method $this withIpv6TranslatorId($value)
 */
class ModifyIPv6TranslatorBandwidth extends Rpc
{
}

/**
 * @method string getBackendIpv4Port()
 * @method $this withBackendIpv4Port($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getEntryName()
 * @method $this withEntryName($value)
 * @method string getAclStatus()
 * @method $this withAclStatus($value)
 * @method string getEntryBandwidth()
 * @method $this withEntryBandwidth($value)
 * @method string getAclType()
 * @method $this withAclType($value)
 * @method string getAllocateIpv6Port()
 * @method $this withAllocateIpv6Port($value)
 * @method string getEntryDescription()
 * @method $this withEntryDescription($value)
 * @method string getBackendIpv4Addr()
 * @method $this withBackendIpv4Addr($value)
 * @method string getAclId()
 * @method $this withAclId($value)
 * @method string getIpv6TranslatorEntryId()
 * @method $this withIpv6TranslatorEntryId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTransProtocol()
 * @method $this withTransProtocol($value)
 */
class ModifyIPv6TranslatorEntry extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityProtectionEnabled()
 * @method $this withSecurityProtectionEnabled($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getIcmpReplyEnabled()
 * @method $this withIcmpReplyEnabled($value)
 * @method string getNatGatewayId()
 * @method $this withNatGatewayId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getPrivateLinkMode()
 * @method $this withPrivateLinkMode($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getEipBindMode()
 * @method $this withEipBindMode($value)
 */
class ModifyNatGatewayAttribute extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getSpec()
 * @method $this withSpec($value)
 * @method string getNatGatewayId()
 * @method $this withNatGatewayId($value)
 * @method string getAutoPay()
 * @method $this withAutoPay($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyNatGatewaySpec extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getNatIpName()
 * @method $this withNatIpName($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getNatIpDescription()
 * @method $this withNatIpDescription($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getNatIpId()
 * @method $this withNatIpId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyNatIpAttribute extends Rpc
{
}

/**
 * @method string getNatIpCidrId()
 * @method $this withNatIpCidrId($value)
 * @method string getNatIpCidrDescription()
 * @method $this withNatIpCidrDescription($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getNatGatewayId()
 * @method $this withNatGatewayId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getNatIpCidrName()
 * @method $this withNatIpCidrName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getNatIpCidr()
 * @method $this withNatIpCidr($value)
 */
class ModifyNatIpCidrAttribute extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getNetworkAclId()
 * @method $this withNetworkAclId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getNetworkAclName()
 * @method $this withNetworkAclName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyNetworkAclAttributes extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPortType()
 * @method $this withPortType($value)
 * @method string getCircuitCode()
 * @method $this withCircuitCode($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getRedundantPhysicalConnectionId()
 * @method $this withRedundantPhysicalConnectionId($value)
 * @method string getPeerLocation()
 * @method $this withPeerLocation($value)
 * @method string getBandwidth()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getLineOperator()
 * @method $this withLineOperator($value)
 * @method string getPhysicalConnectionId()
 * @method $this withPhysicalConnectionId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class ModifyPhysicalConnectionAttribute extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBandwidth($value)
    {
        $this->data['Bandwidth'] = $value;
        $this->options['query']['bandwidth'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getRouteEntryName()
 * @method $this withRouteEntryName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRouteEntryId()
 * @method $this withRouteEntryId($value)
 */
class ModifyRouteEntry extends Rpc
{
}

/**
 * @method string getOppositeRouterId()
 * @method $this withOppositeRouterId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getHealthCheckTargetIp()
 * @method $this withHealthCheckTargetIp($value)
 * @method string getOppositeInterfaceId()
 * @method $this withOppositeInterfaceId($value)
 * @method string getHcThreshold()
 * @method $this withHcThreshold($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDeleteHealthCheckIp()
 * @method $this withDeleteHealthCheckIp($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRouterInterfaceId()
 * @method $this withRouterInterfaceId($value)
 * @method string getOppositeInterfaceOwnerId()
 * @method $this withOppositeInterfaceOwnerId($value)
 * @method string getHealthCheckSourceIp()
 * @method $this withHealthCheckSourceIp($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getOppositeRouterType()
 * @method $this withOppositeRouterType($value)
 * @method string getHcRate()
 * @method $this withHcRate($value)
 */
class ModifyRouterInterfaceAttribute extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getSpec()
 * @method $this withSpec($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getRouterInterfaceId()
 * @method $this withRouterInterfaceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyRouterInterfaceSpec extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getRouteTableName()
 * @method $this withRouteTableName($value)
 * @method string getResourceUid()
 * @method $this withResourceUid($value)
 * @method string getRouteTableId()
 * @method $this withRouteTableId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getBandwidth()
 * @method $this withBandwidth($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getKbpsBandwidth()
 * @method $this withKbpsBandwidth($value)
 * @method string getResourceBid()
 * @method $this withResourceBid($value)
 */
class ModifyRouteTableAttributes extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getSnatIp()
 * @method $this withSnatIp($value)
 * @method string getSnatEntryId()
 * @method $this withSnatEntryId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getSnatTableId()
 * @method $this withSnatTableId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSnatEntryName()
 * @method $this withSnatEntryName($value)
 */
class ModifySnatEntry extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getSslVpnClientCertId()
 * @method $this withSslVpnClientCertId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class ModifySslVpnClientCert extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getSslVpnServerId()
 * @method $this withSslVpnServerId($value)
 * @method string getLocalSubnet()
 * @method $this withLocalSubnet($value)
 * @method string getIDaaSRegionId()
 * @method $this withIDaaSRegionId($value)
 * @method string getEnableMultiFactorAuth()
 * @method $this withEnableMultiFactorAuth($value)
 * @method string getIDaaSInstanceId()
 * @method $this withIDaaSInstanceId($value)
 * @method string getCipher()
 * @method $this withCipher($value)
 * @method string getClientIpPool()
 * @method $this withClientIpPool($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getCompress()
 * @method $this withCompress($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPort()
 * @method $this withPort($value)
 * @method string getProto()
 * @method $this withProto($value)
 * @method string getName()
 * @method $this withName($value)
 */
class ModifySslVpnServer extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getNewWeight()
 * @method $this withNewWeight($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getWeight()
 * @method $this withWeight($value)
 * @method string getRouteDest()
 * @method $this withRouteDest($value)
 * @method string getNextHop()
 * @method $this withNextHop($value)
 * @method string getVpnConnectionId()
 * @method $this withVpnConnectionId($value)
 * @method string getOverlayMode()
 * @method $this withOverlayMode($value)
 */
class ModifyVcoRouteEntryWeight extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCircuitCode()
 * @method $this withCircuitCode($value)
 * @method string getAssociatedPhysicalConnections()
 * @method $this withAssociatedPhysicalConnections($value)
 * @method string getVlanId()
 * @method $this withVlanId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getEnableIpv6()
 * @method $this withEnableIpv6($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getVbrId()
 * @method $this withVbrId($value)
 * @method string getPeerGatewayIp()
 * @method $this withPeerGatewayIp($value)
 * @method string getPeerIpv6GatewayIp()
 * @method $this withPeerIpv6GatewayIp($value)
 * @method string getDetectMultiplier()
 * @method $this withDetectMultiplier($value)
 * @method string getPeeringSubnetMask()
 * @method $this withPeeringSubnetMask($value)
 * @method string getLocalGatewayIp()
 * @method $this withLocalGatewayIp($value)
 * @method string getMinTxInterval()
 * @method $this withMinTxInterval($value)
 * @method string getPeeringIpv6SubnetMask()
 * @method $this withPeeringIpv6SubnetMask($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getBandwidth()
 * @method $this withBandwidth($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getMinRxInterval()
 * @method $this withMinRxInterval($value)
 * @method string getLocalIpv6GatewayIp()
 * @method $this withLocalIpv6GatewayIp($value)
 * @method string getName()
 * @method $this withName($value)
 */
class ModifyVirtualBorderRouterAttribute extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getEnableIPv6()
 * @method $this withEnableIPv6($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getVpcName()
 * @method $this withVpcName($value)
 * @method string getIpv6Isp()
 * @method $this withIpv6Isp($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getIpv6CidrBlock()
 * @method $this withIpv6CidrBlock($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getCidrBlock()
 * @method $this withCidrBlock($value)
 */
class ModifyVpcAttribute extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getMaxEntries()
 * @method $this withMaxEntries($value)
 * @method array getRemovePrefixListEntry()
 * @method string getPrefixListId()
 * @method $this withPrefixListId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method array getAddPrefixListEntry()
 * @method string getPrefixListName()
 * @method $this withPrefixListName($value)
 * @method string getPrefixListDescription()
 * @method $this withPrefixListDescription($value)
 */
class ModifyVpcPrefixList extends Rpc
{

    /**
     * @param array $removePrefixListEntry
     *
     * @return $this
     */
	public function withRemovePrefixListEntry(array $removePrefixListEntry)
	{
	    $this->data['RemovePrefixListEntry'] = $removePrefixListEntry;
		foreach ($removePrefixListEntry as $depth1 => $depth1Value) {
			if(isset($depth1Value['Cidr'])){
				$this->options['query']['RemovePrefixListEntry.' . ($depth1 + 1) . '.Cidr'] = $depth1Value['Cidr'];
			}
			if(isset($depth1Value['Description'])){
				$this->options['query']['RemovePrefixListEntry.' . ($depth1 + 1) . '.Description'] = $depth1Value['Description'];
			}
		}

		return $this;
    }

    /**
     * @param array $addPrefixListEntry
     *
     * @return $this
     */
	public function withAddPrefixListEntry(array $addPrefixListEntry)
	{
	    $this->data['AddPrefixListEntry'] = $addPrefixListEntry;
		foreach ($addPrefixListEntry as $depth1 => $depth1Value) {
			if(isset($depth1Value['Cidr'])){
				$this->options['query']['AddPrefixListEntry.' . ($depth1 + 1) . '.Cidr'] = $depth1Value['Cidr'];
			}
			if(isset($depth1Value['Description'])){
				$this->options['query']['AddPrefixListEntry.' . ($depth1 + 1) . '.Description'] = $depth1Value['Description'];
			}
		}

		return $this;
    }
}

/**
 * @method string getIkeConfig()
 * @method $this withIkeConfig($value)
 * @method string getAutoConfigRoute()
 * @method $this withAutoConfigRoute($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getIpsecConfig()
 * @method $this withIpsecConfig($value)
 * @method string getBgpConfig()
 * @method $this withBgpConfig($value)
 * @method string getNetworkType()
 * @method $this withNetworkType($value)
 * @method string getHealthCheckConfig()
 * @method $this withHealthCheckConfig($value)
 * @method string getCustomerGatewayId()
 * @method $this withCustomerGatewayId($value)
 * @method string getLocalSubnet()
 * @method $this withLocalSubnet($value)
 * @method string getRemoteCaCert()
 * @method $this withRemoteCaCert($value)
 * @method string getRemoteSubnet()
 * @method $this withRemoteSubnet($value)
 * @method string getEffectImmediately()
 * @method $this withEffectImmediately($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEnableDpd()
 * @method $this withEnableDpd($value)
 * @method string getVpnConnectionId()
 * @method $this withVpnConnectionId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getEnableNatTraversal()
 * @method $this withEnableNatTraversal($value)
 */
class ModifyVpnAttachmentAttribute extends Rpc
{
}

/**
 * @method string getIkeConfig()
 * @method $this withIkeConfig($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAutoConfigRoute()
 * @method $this withAutoConfigRoute($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getIpsecConfig()
 * @method $this withIpsecConfig($value)
 * @method string getBgpConfig()
 * @method $this withBgpConfig($value)
 * @method string getHealthCheckConfig()
 * @method $this withHealthCheckConfig($value)
 * @method string getLocalSubnet()
 * @method $this withLocalSubnet($value)
 * @method string getRemoteSubnet()
 * @method $this withRemoteSubnet($value)
 * @method string getEffectImmediately()
 * @method $this withEffectImmediately($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getEnableDpd()
 * @method $this withEnableDpd($value)
 * @method string getRemoteCaCertificate()
 * @method $this withRemoteCaCertificate($value)
 * @method string getVpnConnectionId()
 * @method $this withVpnConnectionId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getEnableNatTraversal()
 * @method $this withEnableNatTraversal($value)
 */
class ModifyVpnConnectionAttribute extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getAutoPropagate()
 * @method $this withAutoPropagate($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getVpnGatewayId()
 * @method $this withVpnGatewayId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class ModifyVpnGatewayAttribute extends Rpc
{
}

/**
 * @method string getRouteSource()
 * @method $this withRouteSource($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getNewWeight()
 * @method $this withNewWeight($value)
 * @method string getNewPriority()
 * @method $this withNewPriority($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getWeight()
 * @method $this withWeight($value)
 * @method string getVpnGatewayId()
 * @method $this withVpnGatewayId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPriority()
 * @method $this withPriority($value)
 * @method string getRouteDest()
 * @method $this withRouteDest($value)
 * @method string getNextHop()
 * @method $this withNextHop($value)
 */
class ModifyVpnPbrRouteEntryAttribute extends Rpc
{
}

/**
 * @method string getRouteSource()
 * @method $this withRouteSource($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getNewPriority()
 * @method $this withNewPriority($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getWeight()
 * @method $this withWeight($value)
 * @method string getVpnGatewayId()
 * @method $this withVpnGatewayId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPriority()
 * @method $this withPriority($value)
 * @method string getRouteDest()
 * @method $this withRouteDest($value)
 * @method string getNextHop()
 * @method $this withNextHop($value)
 */
class ModifyVpnPbrRouteEntryPriority extends Rpc
{
}

/**
 * @method string getRouteSource()
 * @method $this withRouteSource($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getNewWeight()
 * @method $this withNewWeight($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getWeight()
 * @method $this withWeight($value)
 * @method string getVpnGatewayId()
 * @method $this withVpnGatewayId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPriority()
 * @method $this withPriority($value)
 * @method string getRouteDest()
 * @method $this withRouteDest($value)
 * @method string getNextHop()
 * @method $this withNextHop($value)
 * @method string getOverlayMode()
 * @method $this withOverlayMode($value)
 */
class ModifyVpnPbrRouteEntryWeight extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getNewWeight()
 * @method $this withNewWeight($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getWeight()
 * @method $this withWeight($value)
 * @method string getVpnGatewayId()
 * @method $this withVpnGatewayId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRouteDest()
 * @method $this withRouteDest($value)
 * @method string getNextHop()
 * @method $this withNextHop($value)
 * @method string getOverlayMode()
 * @method $this withOverlayMode($value)
 */
class ModifyVpnRouteEntryWeight extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getVRouterId()
 * @method $this withVRouterId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getVRouterName()
 * @method $this withVRouterName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyVRouterAttribute extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getEnableIPv6()
 * @method $this withEnableIPv6($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getIpv6CidrBlock()
 * @method $this withIpv6CidrBlock($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getVpcIpv6CidrBlock()
 * @method $this withVpcIpv6CidrBlock($value)
 * @method string getVSwitchName()
 * @method $this withVSwitchName($value)
 */
class ModifyVSwitchAttribute extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getNewResourceGroupId()
 * @method $this withNewResourceGroupId($value)
 */
class MoveResourceGroup extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class OpenFlowLogService extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class OpenPhysicalConnectionService extends Rpc
{
}

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class OpenTrafficMirrorService extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getRouteType()
 * @method $this withRouteType($value)
 * @method string getPublishVpc()
 * @method $this withPublishVpc($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getVpnGatewayId()
 * @method $this withVpnGatewayId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRouteDest()
 * @method $this withRouteDest($value)
 * @method string getNextHop()
 * @method $this withNextHop($value)
 */
class PublishVpnRouteEntry extends Rpc
{
}

/**
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getToken()
 * @method $this withToken($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class RecoverPhysicalConnection extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getVbrId()
 * @method $this withVbrId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class RecoverVirtualBorderRouter extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAllocationId()
 * @method $this withAllocationId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ReleaseEipAddress extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getSegmentInstanceId()
 * @method $this withSegmentInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ReleaseEipSegmentAddress extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getBandwidthPackageId()
 * @method $this withBandwidthPackageId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getIpInstanceId()
 * @method $this withIpInstanceId($value)
 */
class RemoveCommonBandwidthPackageIp extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getGlobalAccelerationInstanceId()
 * @method $this withGlobalAccelerationInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getIpInstanceId()
 * @method $this withIpInstanceId($value)
 */
class RemoveGlobalAccelerationInstanceIp extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getAclId()
 * @method $this withAclId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAclEntryId()
 * @method $this withAclEntryId($value)
 */
class RemoveIPv6TranslatorAclListEntry extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method array getTrafficMirrorSourceIds()
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getTrafficMirrorSessionId()
 * @method $this withTrafficMirrorSessionId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class RemoveSourcesFromTrafficMirrorSession extends Rpc
{

    /**
     * @param array $trafficMirrorSourceIds
     *
     * @return $this
     */
	public function withTrafficMirrorSourceIds(array $trafficMirrorSourceIds)
	{
	    $this->data['TrafficMirrorSourceIds'] = $trafficMirrorSourceIds;
		foreach ($trafficMirrorSourceIds as $i => $iValue) {
			$this->options['query']['TrafficMirrorSourceIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getDhcpOptionsSetId()
 * @method $this withDhcpOptionsSetId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 */
class ReplaceVpcDhcpOptionsSet extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getPrefixListId()
 * @method $this withPrefixListId($value)
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 */
class RetryVpcPrefixListAssociation extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCenId()
 * @method $this withCenId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getCenOwnerId()
 * @method $this withCenOwnerId($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class RevokeInstanceFromCen extends Rpc
{
}

/**
 * @method string getVbrOwnerUid()
 * @method $this withVbrOwnerUid($value)
 * @method string getVbrRegionNo()
 * @method $this withVbrRegionNo($value)
 * @method string getVbrInstanceIds()
 * @method $this withVbrInstanceIds($value)
 * @method string getGrantType()
 * @method $this withGrantType($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class RevokeInstanceFromVbr extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getLogProject()
 * @method $this withLogProject($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getLogStore()
 * @method $this withLogStore($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class SetHighDefinitionMonitorLogStatus extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method array getTag()
 * @method array getResourceId()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 */
class TagResources extends Rpc
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
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
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
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method array getTag()
 * @method array getResourceId()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 */
class TagResourcesForExpressConnect extends Rpc
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
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPhysicalConnectionId()
 * @method $this withPhysicalConnectionId($value)
 */
class TerminatePhysicalConnection extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getVbrId()
 * @method $this withVbrId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class TerminateVirtualBorderRouter extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getAllocationId()
 * @method $this withAllocationId($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPrivateIpAddress()
 * @method $this withPrivateIpAddress($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getForce()
 * @method $this withForce($value)
 */
class UnassociateEipAddress extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getGlobalAccelerationInstanceId()
 * @method $this withGlobalAccelerationInstanceId($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class UnassociateGlobalAccelerationInstance extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getHaVipId()
 * @method $this withHaVipId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getForce()
 * @method $this withForce($value)
 */
class UnassociateHaVip extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getNetworkAclId()
 * @method $this withNetworkAclId($value)
 * @method array getResource()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class UnassociateNetworkAcl extends Rpc
{

    /**
     * @param array $resource
     *
     * @return $this
     */
	public function withResource(array $resource)
	{
	    $this->data['Resource'] = $resource;
		foreach ($resource as $depth1 => $depth1Value) {
			if(isset($depth1Value['ResourceType'])){
				$this->options['query']['Resource.' . ($depth1 + 1) . '.ResourceType'] = $depth1Value['ResourceType'];
			}
			if(isset($depth1Value['ResourceId'])){
				$this->options['query']['Resource.' . ($depth1 + 1) . '.ResourceId'] = $depth1Value['ResourceId'];
			}
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getVbrId()
 * @method $this withVbrId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPhysicalConnectionId()
 * @method $this withPhysicalConnectionId($value)
 */
class UnassociatePhysicalConnectionFromVirtualBorderRouter extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getRouteTableId()
 * @method $this withRouteTableId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 */
class UnassociateRouteTable extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getIPv6CidrBlock()
 * @method $this withIPv6CidrBlock($value)
 * @method string getSecondaryCidrBlock()
 * @method $this withSecondaryCidrBlock($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 */
class UnassociateVpcCidrBlock extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method array getTag()
 * @method string getAll()
 * @method $this withAll($value)
 * @method array getResourceId()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method array getTagKey()
 */
class UnTagResources extends Rpc
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
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
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
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method array getTag()
 * @method string getAll()
 * @method $this withAll($value)
 * @method array getResourceId()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method array getTagKey()
 */
class UntagResourcesForExpressConnect extends Rpc
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
 * @method string getBootFileName()
 * @method $this withBootFileName($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getTFTPServerName()
 * @method $this withTFTPServerName($value)
 * @method string getLeaseTime()
 * @method $this withLeaseTime($value)
 * @method string getDomainNameServers()
 * @method $this withDomainNameServers($value)
 * @method string getDhcpOptionsSetDescription()
 * @method $this withDhcpOptionsSetDescription($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getDhcpOptionsSetId()
 * @method $this withDhcpOptionsSetId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDhcpOptionsSetName()
 * @method $this withDhcpOptionsSetName($value)
 * @method string getIpv6LeaseTime()
 * @method $this withIpv6LeaseTime($value)
 */
class UpdateDhcpOptionsSetAttribute extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getIPv4GatewayRouteTableId()
 * @method $this withIPv4GatewayRouteTableId($value)
 * @method string getNextHopId()
 * @method $this withNextHopId($value)
 * @method string getNextHopType()
 * @method $this withNextHopType($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDestinationCidrBlock()
 * @method $this withDestinationCidrBlock($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class UpdateGatewayRouteTableEntryAttribute extends Rpc
{
}

/**
 * @method string getIkeConfig()
 * @method $this withIkeConfig($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getIpsecConfig()
 * @method $this withIpsecConfig($value)
 * @method string getPsk()
 * @method $this withPsk($value)
 * @method string getLocalSubnet()
 * @method $this withLocalSubnet($value)
 * @method string getIDaaSInstanceId()
 * @method $this withIDaaSInstanceId($value)
 * @method string getEffectImmediately()
 * @method $this withEffectImmediately($value)
 * @method string getClientIpPool()
 * @method $this withClientIpPool($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getCallerBid()
 * @method string getPskEnabled()
 * @method $this withPskEnabled($value)
 * @method string getMultiFactorAuthEnabled()
 * @method $this withMultiFactorAuthEnabled($value)
 * @method string getIpsecServerName()
 * @method $this withIpsecServerName($value)
 * @method string getIpsecServerId()
 * @method $this withIpsecServerId($value)
 */
class UpdateIpsecServer extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCallerBid($value)
    {
        $this->data['CallerBid'] = $value;
        $this->options['query']['callerBid'] = $value;

        return $this;
    }
}

/**
 * @method string getIpv4GatewayDescription()
 * @method $this withIpv4GatewayDescription($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getIpv4GatewayName()
 * @method $this withIpv4GatewayName($value)
 * @method string getIpv4GatewayId()
 * @method $this withIpv4GatewayId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class UpdateIpv4GatewayAttribute extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getNatType()
 * @method $this withNatType($value)
 * @method string getNatGatewayId()
 * @method $this withNatGatewayId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 */
class UpdateNatGatewayNatType extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method array getEgressAclEntries()
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getNetworkAclId()
 * @method $this withNetworkAclId($value)
 * @method string getUpdateIngressAclEntries()
 * @method $this withUpdateIngressAclEntries($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getUpdateEgressAclEntries()
 * @method $this withUpdateEgressAclEntries($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method array getIngressAclEntries()
 */
class UpdateNetworkAclEntries extends Rpc
{

    /**
     * @param array $egressAclEntries
     *
     * @return $this
     */
	public function withEgressAclEntries(array $egressAclEntries)
	{
	    $this->data['EgressAclEntries'] = $egressAclEntries;
		foreach ($egressAclEntries as $depth1 => $depth1Value) {
			if(isset($depth1Value['NetworkAclEntryId'])){
				$this->options['query']['EgressAclEntries.' . ($depth1 + 1) . '.NetworkAclEntryId'] = $depth1Value['NetworkAclEntryId'];
			}
			if(isset($depth1Value['EntryType'])){
				$this->options['query']['EgressAclEntries.' . ($depth1 + 1) . '.EntryType'] = $depth1Value['EntryType'];
			}
			if(isset($depth1Value['NetworkAclEntryName'])){
				$this->options['query']['EgressAclEntries.' . ($depth1 + 1) . '.NetworkAclEntryName'] = $depth1Value['NetworkAclEntryName'];
			}
			if(isset($depth1Value['Policy'])){
				$this->options['query']['EgressAclEntries.' . ($depth1 + 1) . '.Policy'] = $depth1Value['Policy'];
			}
			if(isset($depth1Value['Description'])){
				$this->options['query']['EgressAclEntries.' . ($depth1 + 1) . '.Description'] = $depth1Value['Description'];
			}
			if(isset($depth1Value['Protocol'])){
				$this->options['query']['EgressAclEntries.' . ($depth1 + 1) . '.Protocol'] = $depth1Value['Protocol'];
			}
			if(isset($depth1Value['DestinationCidrIp'])){
				$this->options['query']['EgressAclEntries.' . ($depth1 + 1) . '.DestinationCidrIp'] = $depth1Value['DestinationCidrIp'];
			}
			if(isset($depth1Value['Port'])){
				$this->options['query']['EgressAclEntries.' . ($depth1 + 1) . '.Port'] = $depth1Value['Port'];
			}
		}

		return $this;
    }

    /**
     * @param array $ingressAclEntries
     *
     * @return $this
     */
	public function withIngressAclEntries(array $ingressAclEntries)
	{
	    $this->data['IngressAclEntries'] = $ingressAclEntries;
		foreach ($ingressAclEntries as $depth1 => $depth1Value) {
			if(isset($depth1Value['NetworkAclEntryId'])){
				$this->options['query']['IngressAclEntries.' . ($depth1 + 1) . '.NetworkAclEntryId'] = $depth1Value['NetworkAclEntryId'];
			}
			if(isset($depth1Value['EntryType'])){
				$this->options['query']['IngressAclEntries.' . ($depth1 + 1) . '.EntryType'] = $depth1Value['EntryType'];
			}
			if(isset($depth1Value['NetworkAclEntryName'])){
				$this->options['query']['IngressAclEntries.' . ($depth1 + 1) . '.NetworkAclEntryName'] = $depth1Value['NetworkAclEntryName'];
			}
			if(isset($depth1Value['Policy'])){
				$this->options['query']['IngressAclEntries.' . ($depth1 + 1) . '.Policy'] = $depth1Value['Policy'];
			}
			if(isset($depth1Value['SourceCidrIp'])){
				$this->options['query']['IngressAclEntries.' . ($depth1 + 1) . '.SourceCidrIp'] = $depth1Value['SourceCidrIp'];
			}
			if(isset($depth1Value['Description'])){
				$this->options['query']['IngressAclEntries.' . ($depth1 + 1) . '.Description'] = $depth1Value['Description'];
			}
			if(isset($depth1Value['Protocol'])){
				$this->options['query']['IngressAclEntries.' . ($depth1 + 1) . '.Protocol'] = $depth1Value['Protocol'];
			}
			if(isset($depth1Value['Port'])){
				$this->options['query']['IngressAclEntries.' . ($depth1 + 1) . '.Port'] = $depth1Value['Port'];
			}
		}

		return $this;
    }
}

/**
 * @method string getPublicIpAddressPoolId()
 * @method $this withPublicIpAddressPoolId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class UpdatePublicIpAddressPoolAttribute extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getTrafficMirrorFilterName()
 * @method $this withTrafficMirrorFilterName($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTrafficMirrorFilterDescription()
 * @method $this withTrafficMirrorFilterDescription($value)
 * @method string getTrafficMirrorFilterId()
 * @method $this withTrafficMirrorFilterId($value)
 */
class UpdateTrafficMirrorFilterAttribute extends Rpc
{
}

/**
 * @method string getSourcePortRange()
 * @method $this withSourcePortRange($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDestinationPortRange()
 * @method $this withDestinationPortRange($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getRuleAction()
 * @method $this withRuleAction($value)
 * @method string getProtocol()
 * @method $this withProtocol($value)
 * @method string getSourceCidrBlock()
 * @method $this withSourceCidrBlock($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDestinationCidrBlock()
 * @method $this withDestinationCidrBlock($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getPriority()
 * @method $this withPriority($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTrafficMirrorFilterRuleId()
 * @method $this withTrafficMirrorFilterRuleId($value)
 */
class UpdateTrafficMirrorFilterRuleAttribute extends Rpc
{
}

/**
 * @method string getTrafficMirrorTargetType()
 * @method $this withTrafficMirrorTargetType($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getEnabled()
 * @method $this withEnabled($value)
 * @method string getTrafficMirrorSessionName()
 * @method $this withTrafficMirrorSessionName($value)
 * @method string getTrafficMirrorSessionDescription()
 * @method $this withTrafficMirrorSessionDescription($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getTrafficMirrorSessionId()
 * @method $this withTrafficMirrorSessionId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getPriority()
 * @method $this withPriority($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTrafficMirrorTargetId()
 * @method $this withTrafficMirrorTargetId($value)
 * @method string getTrafficMirrorFilterId()
 * @method $this withTrafficMirrorFilterId($value)
 * @method string getVirtualNetworkId()
 * @method $this withVirtualNetworkId($value)
 */
class UpdateTrafficMirrorSessionAttribute extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getVirtualBorderRouterId()
 * @method $this withVirtualBorderRouterId($value)
 * @method string getBandwidth()
 * @method $this withBandwidth($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class UpdateVirtualBorderBandwidth extends Rpc
{
}

/**
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getVlanId()
 * @method $this withVlanId($value)
 * @method string getToken()
 * @method $this withToken($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getExpectSpec()
 * @method $this withExpectSpec($value)
 */
class UpdateVirtualPhysicalConnection extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getEndpointId()
 * @method $this withEndpointId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEndpointDescription()
 * @method $this withEndpointDescription($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getEndpointName()
 * @method $this withEndpointName($value)
 * @method string getPolicyDocument()
 * @method $this withPolicyDocument($value)
 */
class UpdateVpcGatewayEndpointAttribute extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getResourceUid()
 * @method $this withResourceUid($value)
 * @method string getNatGatewayId()
 * @method $this withNatGatewayId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class VpcDescribeVpcNatGatewayNetworkInterfaceQuota extends Rpc
{
}
