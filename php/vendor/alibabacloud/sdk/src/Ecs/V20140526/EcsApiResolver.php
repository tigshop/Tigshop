<?php

namespace AlibabaCloud\Ecs\V20140526;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AcceptInquiredSystemEvent acceptInquiredSystemEvent(array $options = [])
 * @method ActivateRouterInterface activateRouterInterface(array $options = [])
 * @method AddBandwidthPackageIps addBandwidthPackageIps(array $options = [])
 * @method AddTags addTags(array $options = [])
 * @method AllocateDedicatedHosts allocateDedicatedHosts(array $options = [])
 * @method AllocateEipAddress allocateEipAddress(array $options = [])
 * @method AllocatePublicIpAddress allocatePublicIpAddress(array $options = [])
 * @method ApplyAutoSnapshotPolicy applyAutoSnapshotPolicy(array $options = [])
 * @method AssignIpv6Addresses assignIpv6Addresses(array $options = [])
 * @method AssignPrivateIpAddresses assignPrivateIpAddresses(array $options = [])
 * @method AssociateEipAddress associateEipAddress(array $options = [])
 * @method AssociateHaVip associateHaVip(array $options = [])
 * @method AttachClassicLinkVpc attachClassicLinkVpc(array $options = [])
 * @method AttachDisk attachDisk(array $options = [])
 * @method AttachInstanceRamRole attachInstanceRamRole(array $options = [])
 * @method AttachKeyPair attachKeyPair(array $options = [])
 * @method AttachNetworkInterface attachNetworkInterface(array $options = [])
 * @method AuthorizeSecurityGroup authorizeSecurityGroup(array $options = [])
 * @method AuthorizeSecurityGroupEgress authorizeSecurityGroupEgress(array $options = [])
 * @method CancelAutoSnapshotPolicy cancelAutoSnapshotPolicy(array $options = [])
 * @method CancelCopyImage cancelCopyImage(array $options = [])
 * @method CancelImagePipelineExecution cancelImagePipelineExecution(array $options = [])
 * @method CancelPhysicalConnection cancelPhysicalConnection(array $options = [])
 * @method CancelSimulatedSystemEvents cancelSimulatedSystemEvents(array $options = [])
 * @method CancelTask cancelTask(array $options = [])
 * @method ConnectRouterInterface connectRouterInterface(array $options = [])
 * @method ConvertNatPublicIpToEip convertNatPublicIpToEip(array $options = [])
 * @method CopyImage copyImage(array $options = [])
 * @method CopySnapshot copySnapshot(array $options = [])
 * @method CreateActivation createActivation(array $options = [])
 * @method CreateAutoProvisioningGroup createAutoProvisioningGroup(array $options = [])
 * @method CreateAutoSnapshotPolicy createAutoSnapshotPolicy(array $options = [])
 * @method CreateCapacityReservation createCapacityReservation(array $options = [])
 * @method CreateCommand createCommand(array $options = [])
 * @method CreateDedicatedHostCluster createDedicatedHostCluster(array $options = [])
 * @method CreateDemand createDemand(array $options = [])
 * @method CreateDeploymentSet createDeploymentSet(array $options = [])
 * @method CreateDiagnosticMetricSet createDiagnosticMetricSet(array $options = [])
 * @method CreateDiagnosticReport createDiagnosticReport(array $options = [])
 * @method CreateDisk createDisk(array $options = [])
 * @method CreateElasticityAssurance createElasticityAssurance(array $options = [])
 * @method CreateForwardEntry createForwardEntry(array $options = [])
 * @method CreateHaVip createHaVip(array $options = [])
 * @method CreateHpcCluster createHpcCluster(array $options = [])
 * @method CreateImage createImage(array $options = [])
 * @method CreateImageComponent createImageComponent(array $options = [])
 * @method CreateImagePipeline createImagePipeline(array $options = [])
 * @method CreateInstance createInstance(array $options = [])
 * @method CreateKeyPair createKeyPair(array $options = [])
 * @method CreateLaunchTemplate createLaunchTemplate(array $options = [])
 * @method CreateLaunchTemplateVersion createLaunchTemplateVersion(array $options = [])
 * @method CreateNatGateway createNatGateway(array $options = [])
 * @method CreateNetworkInterface createNetworkInterface(array $options = [])
 * @method CreateNetworkInterfacePermission createNetworkInterfacePermission(array $options = [])
 * @method CreatePhysicalConnection createPhysicalConnection(array $options = [])
 * @method CreatePrefixList createPrefixList(array $options = [])
 * @method CreateRouteEntry createRouteEntry(array $options = [])
 * @method CreateRouterInterface createRouterInterface(array $options = [])
 * @method CreateSavingsPlan createSavingsPlan(array $options = [])
 * @method CreateSecurityGroup createSecurityGroup(array $options = [])
 * @method CreateSimulatedSystemEvents createSimulatedSystemEvents(array $options = [])
 * @method CreateSnapshot createSnapshot(array $options = [])
 * @method CreateSnapshotGroup createSnapshotGroup(array $options = [])
 * @method CreateStorageSet createStorageSet(array $options = [])
 * @method CreateVirtualBorderRouter createVirtualBorderRouter(array $options = [])
 * @method CreateVpc createVpc(array $options = [])
 * @method CreateVSwitch createVSwitch(array $options = [])
 * @method DeactivateRouterInterface deactivateRouterInterface(array $options = [])
 * @method DeleteActivation deleteActivation(array $options = [])
 * @method DeleteAutoProvisioningGroup deleteAutoProvisioningGroup(array $options = [])
 * @method DeleteAutoSnapshotPolicy deleteAutoSnapshotPolicy(array $options = [])
 * @method DeleteBandwidthPackage deleteBandwidthPackage(array $options = [])
 * @method DeleteCommand deleteCommand(array $options = [])
 * @method DeleteDedicatedHostCluster deleteDedicatedHostCluster(array $options = [])
 * @method DeleteDemand deleteDemand(array $options = [])
 * @method DeleteDeploymentSet deleteDeploymentSet(array $options = [])
 * @method DeleteDiagnosticMetricSets deleteDiagnosticMetricSets(array $options = [])
 * @method DeleteDiagnosticReports deleteDiagnosticReports(array $options = [])
 * @method DeleteDisk deleteDisk(array $options = [])
 * @method DeleteForwardEntry deleteForwardEntry(array $options = [])
 * @method DeleteHaVip deleteHaVip(array $options = [])
 * @method DeleteHpcCluster deleteHpcCluster(array $options = [])
 * @method DeleteImage deleteImage(array $options = [])
 * @method DeleteImageComponent deleteImageComponent(array $options = [])
 * @method DeleteImagePipeline deleteImagePipeline(array $options = [])
 * @method DeleteInstance deleteInstance(array $options = [])
 * @method DeleteInstances deleteInstances(array $options = [])
 * @method DeleteKeyPairs deleteKeyPairs(array $options = [])
 * @method DeleteLaunchTemplate deleteLaunchTemplate(array $options = [])
 * @method DeleteLaunchTemplateVersion deleteLaunchTemplateVersion(array $options = [])
 * @method DeleteNatGateway deleteNatGateway(array $options = [])
 * @method DeleteNetworkInterface deleteNetworkInterface(array $options = [])
 * @method DeleteNetworkInterfacePermission deleteNetworkInterfacePermission(array $options = [])
 * @method DeletePhysicalConnection deletePhysicalConnection(array $options = [])
 * @method DeletePrefixList deletePrefixList(array $options = [])
 * @method DeleteRouteEntry deleteRouteEntry(array $options = [])
 * @method DeleteRouterInterface deleteRouterInterface(array $options = [])
 * @method DeleteSecurityGroup deleteSecurityGroup(array $options = [])
 * @method DeleteSnapshot deleteSnapshot(array $options = [])
 * @method DeleteSnapshotGroup deleteSnapshotGroup(array $options = [])
 * @method DeleteStorageSet deleteStorageSet(array $options = [])
 * @method DeleteVirtualBorderRouter deleteVirtualBorderRouter(array $options = [])
 * @method DeleteVpc deleteVpc(array $options = [])
 * @method DeleteVSwitch deleteVSwitch(array $options = [])
 * @method DeregisterManagedInstance deregisterManagedInstance(array $options = [])
 * @method DescribeAccessPoints describeAccessPoints(array $options = [])
 * @method DescribeAccountAttributes describeAccountAttributes(array $options = [])
 * @method DescribeActivations describeActivations(array $options = [])
 * @method DescribeAutoProvisioningGroupHistory describeAutoProvisioningGroupHistory(array $options = [])
 * @method DescribeAutoProvisioningGroupInstances describeAutoProvisioningGroupInstances(array $options = [])
 * @method DescribeAutoProvisioningGroups describeAutoProvisioningGroups(array $options = [])
 * @method DescribeAutoSnapshotPolicyEx describeAutoSnapshotPolicyEx(array $options = [])
 * @method DescribeAvailableResource describeAvailableResource(array $options = [])
 * @method DescribeBandwidthLimitation describeBandwidthLimitation(array $options = [])
 * @method DescribeBandwidthPackages describeBandwidthPackages(array $options = [])
 * @method DescribeCapacityReservationInstances describeCapacityReservationInstances(array $options = [])
 * @method DescribeCapacityReservations describeCapacityReservations(array $options = [])
 * @method DescribeClassicLinkInstances describeClassicLinkInstances(array $options = [])
 * @method DescribeCloudAssistantSettings describeCloudAssistantSettings(array $options = [])
 * @method DescribeCloudAssistantStatus describeCloudAssistantStatus(array $options = [])
 * @method DescribeClusters describeClusters(array $options = [])
 * @method DescribeCommands describeCommands(array $options = [])
 * @method DescribeDedicatedHostAutoRenew describeDedicatedHostAutoRenew(array $options = [])
 * @method DescribeDedicatedHostClusters describeDedicatedHostClusters(array $options = [])
 * @method DescribeDedicatedHosts describeDedicatedHosts(array $options = [])
 * @method DescribeDedicatedHostTypes describeDedicatedHostTypes(array $options = [])
 * @method DescribeDemands describeDemands(array $options = [])
 * @method DescribeDeploymentSets describeDeploymentSets(array $options = [])
 * @method DescribeDeploymentSetSupportedInstanceTypeFamily describeDeploymentSetSupportedInstanceTypeFamily(array $options = [])
 * @method DescribeDiagnosticMetrics describeDiagnosticMetrics(array $options = [])
 * @method DescribeDiagnosticMetricSets describeDiagnosticMetricSets(array $options = [])
 * @method DescribeDiagnosticReportAttributes describeDiagnosticReportAttributes(array $options = [])
 * @method DescribeDiagnosticReports describeDiagnosticReports(array $options = [])
 * @method DescribeDiskDefaultKMSKeyId describeDiskDefaultKMSKeyId(array $options = [])
 * @method DescribeDiskEncryptionByDefaultStatus describeDiskEncryptionByDefaultStatus(array $options = [])
 * @method DescribeDiskMonitorData describeDiskMonitorData(array $options = [])
 * @method DescribeDisks describeDisks(array $options = [])
 * @method DescribeDisksFullStatus describeDisksFullStatus(array $options = [])
 * @method DescribeEipAddresses describeEipAddresses(array $options = [])
 * @method DescribeEipMonitorData describeEipMonitorData(array $options = [])
 * @method DescribeElasticityAssuranceInstances describeElasticityAssuranceInstances(array $options = [])
 * @method DescribeElasticityAssurances describeElasticityAssurances(array $options = [])
 * @method DescribeEniMonitorData describeEniMonitorData(array $options = [])
 * @method DescribeForwardTableEntries describeForwardTableEntries(array $options = [])
 * @method DescribeHaVips describeHaVips(array $options = [])
 * @method DescribeHpcClusters describeHpcClusters(array $options = [])
 * @method DescribeImageComponents describeImageComponents(array $options = [])
 * @method DescribeImageFromFamily describeImageFromFamily(array $options = [])
 * @method DescribeImagePipelineExecutions describeImagePipelineExecutions(array $options = [])
 * @method DescribeImagePipelines describeImagePipelines(array $options = [])
 * @method DescribeImages describeImages(array $options = [])
 * @method DescribeImageSharePermission describeImageSharePermission(array $options = [])
 * @method DescribeImageSupportInstanceTypes describeImageSupportInstanceTypes(array $options = [])
 * @method DescribeInstanceAttachmentAttributes describeInstanceAttachmentAttributes(array $options = [])
 * @method DescribeInstanceAttribute describeInstanceAttribute(array $options = [])
 * @method DescribeInstanceAutoRenewAttribute describeInstanceAutoRenewAttribute(array $options = [])
 * @method DescribeInstanceHistoryEvents describeInstanceHistoryEvents(array $options = [])
 * @method DescribeInstanceMaintenanceAttributes describeInstanceMaintenanceAttributes(array $options = [])
 * @method DescribeInstanceModificationPrice describeInstanceModificationPrice(array $options = [])
 * @method DescribeInstanceMonitorData describeInstanceMonitorData(array $options = [])
 * @method DescribeInstanceRamRole describeInstanceRamRole(array $options = [])
 * @method DescribeInstances describeInstances(array $options = [])
 * @method DescribeInstancesFullStatus describeInstancesFullStatus(array $options = [])
 * @method DescribeInstanceStatus describeInstanceStatus(array $options = [])
 * @method DescribeInstanceTopology describeInstanceTopology(array $options = [])
 * @method DescribeInstanceTypeFamilies describeInstanceTypeFamilies(array $options = [])
 * @method DescribeInstanceTypes describeInstanceTypes(array $options = [])
 * @method DescribeInstanceVncUrl describeInstanceVncUrl(array $options = [])
 * @method DescribeInvocationResults describeInvocationResults(array $options = [])
 * @method DescribeInvocations describeInvocations(array $options = [])
 * @method DescribeKeyPairs describeKeyPairs(array $options = [])
 * @method DescribeLaunchTemplates describeLaunchTemplates(array $options = [])
 * @method DescribeLaunchTemplateVersions describeLaunchTemplateVersions(array $options = [])
 * @method DescribeLimitation describeLimitation(array $options = [])
 * @method DescribeManagedInstances describeManagedInstances(array $options = [])
 * @method DescribeNatGateways describeNatGateways(array $options = [])
 * @method DescribeNetworkInterfaceAttribute describeNetworkInterfaceAttribute(array $options = [])
 * @method DescribeNetworkInterfacePermissions describeNetworkInterfacePermissions(array $options = [])
 * @method DescribeNetworkInterfaces describeNetworkInterfaces(array $options = [])
 * @method DescribeNewProjectEipMonitorData describeNewProjectEipMonitorData(array $options = [])
 * @method DescribePhysicalConnections describePhysicalConnections(array $options = [])
 * @method DescribePrefixListAssociations describePrefixListAssociations(array $options = [])
 * @method DescribePrefixListAttributes describePrefixListAttributes(array $options = [])
 * @method DescribePrefixLists describePrefixLists(array $options = [])
 * @method DescribePrice describePrice(array $options = [])
 * @method DescribeRecommendInstanceType describeRecommendInstanceType(array $options = [])
 * @method DescribeRegions describeRegions(array $options = [])
 * @method DescribeRenewalPrice describeRenewalPrice(array $options = [])
 * @method DescribeReservedInstanceAutoRenewAttribute describeReservedInstanceAutoRenewAttribute(array $options = [])
 * @method DescribeReservedInstances describeReservedInstances(array $options = [])
 * @method DescribeResourceByTags describeResourceByTags(array $options = [])
 * @method DescribeResourcesModification describeResourcesModification(array $options = [])
 * @method DescribeRouterInterfaces describeRouterInterfaces(array $options = [])
 * @method DescribeRouteTables describeRouteTables(array $options = [])
 * @method DescribeSavingsPlanEstimation describeSavingsPlanEstimation(array $options = [])
 * @method DescribeSavingsPlanPrice describeSavingsPlanPrice(array $options = [])
 * @method DescribeSecurityGroupAttribute describeSecurityGroupAttribute(array $options = [])
 * @method DescribeSecurityGroupReferences describeSecurityGroupReferences(array $options = [])
 * @method DescribeSecurityGroups describeSecurityGroups(array $options = [])
 * @method DescribeSendFileResults describeSendFileResults(array $options = [])
 * @method DescribeSnapshotGroups describeSnapshotGroups(array $options = [])
 * @method DescribeSnapshotLinks describeSnapshotLinks(array $options = [])
 * @method DescribeSnapshotMonitorData describeSnapshotMonitorData(array $options = [])
 * @method DescribeSnapshotPackage describeSnapshotPackage(array $options = [])
 * @method DescribeSnapshots describeSnapshots(array $options = [])
 * @method DescribeSnapshotsUsage describeSnapshotsUsage(array $options = [])
 * @method DescribeSpotAdvice describeSpotAdvice(array $options = [])
 * @method DescribeSpotPriceHistory describeSpotPriceHistory(array $options = [])
 * @method DescribeStorageCapacityUnits describeStorageCapacityUnits(array $options = [])
 * @method DescribeStorageSetDetails describeStorageSetDetails(array $options = [])
 * @method DescribeStorageSets describeStorageSets(array $options = [])
 * @method DescribeTags describeTags(array $options = [])
 * @method DescribeTaskAttribute describeTaskAttribute(array $options = [])
 * @method DescribeTasks describeTasks(array $options = [])
 * @method DescribeTerminalSessions describeTerminalSessions(array $options = [])
 * @method DescribeUserBusinessBehavior describeUserBusinessBehavior(array $options = [])
 * @method DescribeUserData describeUserData(array $options = [])
 * @method DescribeVirtualBorderRouters describeVirtualBorderRouters(array $options = [])
 * @method DescribeVirtualBorderRoutersForPhysicalConnection describeVirtualBorderRoutersForPhysicalConnection(array $options = [])
 * @method DescribeVpcs describeVpcs(array $options = [])
 * @method DescribeVRouters describeVRouters(array $options = [])
 * @method DescribeVSwitches describeVSwitches(array $options = [])
 * @method DescribeZones describeZones(array $options = [])
 * @method DetachClassicLinkVpc detachClassicLinkVpc(array $options = [])
 * @method DetachDisk detachDisk(array $options = [])
 * @method DetachInstanceRamRole detachInstanceRamRole(array $options = [])
 * @method DetachKeyPair detachKeyPair(array $options = [])
 * @method DetachNetworkInterface detachNetworkInterface(array $options = [])
 * @method DisableActivation disableActivation(array $options = [])
 * @method DisableDiskEncryptionByDefault disableDiskEncryptionByDefault(array $options = [])
 * @method EipFillParams eipFillParams(array $options = [])
 * @method EipFillProduct eipFillProduct(array $options = [])
 * @method EipNotifyPaid eipNotifyPaid(array $options = [])
 * @method EnableDiskEncryptionByDefault enableDiskEncryptionByDefault(array $options = [])
 * @method EnablePhysicalConnection enablePhysicalConnection(array $options = [])
 * @method ExportImage exportImage(array $options = [])
 * @method ExportSnapshot exportSnapshot(array $options = [])
 * @method GetInstanceConsoleOutput getInstanceConsoleOutput(array $options = [])
 * @method GetInstanceScreenshot getInstanceScreenshot(array $options = [])
 * @method ImportImage importImage(array $options = [])
 * @method ImportKeyPair importKeyPair(array $options = [])
 * @method InstallCloudAssistant installCloudAssistant(array $options = [])
 * @method InvokeCommand invokeCommand(array $options = [])
 * @method JoinResourceGroup joinResourceGroup(array $options = [])
 * @method JoinSecurityGroup joinSecurityGroup(array $options = [])
 * @method LeaveSecurityGroup leaveSecurityGroup(array $options = [])
 * @method ListPluginStatus listPluginStatus(array $options = [])
 * @method ListTagResources listTagResources(array $options = [])
 * @method ModifyAutoProvisioningGroup modifyAutoProvisioningGroup(array $options = [])
 * @method ModifyAutoSnapshotPolicy modifyAutoSnapshotPolicy(array $options = [])
 * @method ModifyAutoSnapshotPolicyEx modifyAutoSnapshotPolicyEx(array $options = [])
 * @method ModifyBandwidthPackageSpec modifyBandwidthPackageSpec(array $options = [])
 * @method ModifyCapacityReservation modifyCapacityReservation(array $options = [])
 * @method ModifyCloudAssistantSettings modifyCloudAssistantSettings(array $options = [])
 * @method ModifyCommand modifyCommand(array $options = [])
 * @method ModifyDedicatedHostAttribute modifyDedicatedHostAttribute(array $options = [])
 * @method ModifyDedicatedHostAutoReleaseTime modifyDedicatedHostAutoReleaseTime(array $options = [])
 * @method ModifyDedicatedHostAutoRenewAttribute modifyDedicatedHostAutoRenewAttribute(array $options = [])
 * @method ModifyDedicatedHostClusterAttribute modifyDedicatedHostClusterAttribute(array $options = [])
 * @method ModifyDedicatedHostsChargeType modifyDedicatedHostsChargeType(array $options = [])
 * @method ModifyDemand modifyDemand(array $options = [])
 * @method ModifyDeploymentSetAttribute modifyDeploymentSetAttribute(array $options = [])
 * @method ModifyDiagnosticMetricSet modifyDiagnosticMetricSet(array $options = [])
 * @method ModifyDiskAttribute modifyDiskAttribute(array $options = [])
 * @method ModifyDiskChargeType modifyDiskChargeType(array $options = [])
 * @method ModifyDiskDefaultKMSKeyId modifyDiskDefaultKMSKeyId(array $options = [])
 * @method ModifyDiskDeployment modifyDiskDeployment(array $options = [])
 * @method ModifyDiskSpec modifyDiskSpec(array $options = [])
 * @method ModifyEipAddressAttribute modifyEipAddressAttribute(array $options = [])
 * @method ModifyElasticityAssurance modifyElasticityAssurance(array $options = [])
 * @method ModifyForwardEntry modifyForwardEntry(array $options = [])
 * @method ModifyHaVipAttribute modifyHaVipAttribute(array $options = [])
 * @method ModifyHpcClusterAttribute modifyHpcClusterAttribute(array $options = [])
 * @method ModifyImageAttribute modifyImageAttribute(array $options = [])
 * @method ModifyImageShareGroupPermission modifyImageShareGroupPermission(array $options = [])
 * @method ModifyImageSharePermission modifyImageSharePermission(array $options = [])
 * @method ModifyInstanceAttachmentAttributes modifyInstanceAttachmentAttributes(array $options = [])
 * @method ModifyInstanceAttribute modifyInstanceAttribute(array $options = [])
 * @method ModifyInstanceAutoReleaseTime modifyInstanceAutoReleaseTime(array $options = [])
 * @method ModifyInstanceAutoRenewAttribute modifyInstanceAutoRenewAttribute(array $options = [])
 * @method ModifyInstanceChargeType modifyInstanceChargeType(array $options = [])
 * @method ModifyInstanceDeployment modifyInstanceDeployment(array $options = [])
 * @method ModifyInstanceMaintenanceAttributes modifyInstanceMaintenanceAttributes(array $options = [])
 * @method ModifyInstanceMetadataOptions modifyInstanceMetadataOptions(array $options = [])
 * @method ModifyInstanceNetworkSpec modifyInstanceNetworkSpec(array $options = [])
 * @method ModifyInstanceSpec modifyInstanceSpec(array $options = [])
 * @method ModifyInstanceVncPasswd modifyInstanceVncPasswd(array $options = [])
 * @method ModifyInstanceVpcAttribute modifyInstanceVpcAttribute(array $options = [])
 * @method ModifyInvocationAttribute modifyInvocationAttribute(array $options = [])
 * @method ModifyLaunchTemplateDefaultVersion modifyLaunchTemplateDefaultVersion(array $options = [])
 * @method ModifyManagedInstance modifyManagedInstance(array $options = [])
 * @method ModifyNetworkInterfaceAttribute modifyNetworkInterfaceAttribute(array $options = [])
 * @method ModifyPhysicalConnectionAttribute modifyPhysicalConnectionAttribute(array $options = [])
 * @method ModifyPrefixList modifyPrefixList(array $options = [])
 * @method ModifyPrepayInstanceSpec modifyPrepayInstanceSpec(array $options = [])
 * @method ModifyReservedInstanceAttribute modifyReservedInstanceAttribute(array $options = [])
 * @method ModifyReservedInstanceAutoRenewAttribute modifyReservedInstanceAutoRenewAttribute(array $options = [])
 * @method ModifyReservedInstances modifyReservedInstances(array $options = [])
 * @method ModifyRouterInterfaceAttribute modifyRouterInterfaceAttribute(array $options = [])
 * @method ModifyRouterInterfaceSpec modifyRouterInterfaceSpec(array $options = [])
 * @method ModifySecurityGroupAttribute modifySecurityGroupAttribute(array $options = [])
 * @method ModifySecurityGroupEgressRule modifySecurityGroupEgressRule(array $options = [])
 * @method ModifySecurityGroupPolicy modifySecurityGroupPolicy(array $options = [])
 * @method ModifySecurityGroupRule modifySecurityGroupRule(array $options = [])
 * @method ModifySnapshotAttribute modifySnapshotAttribute(array $options = [])
 * @method ModifySnapshotGroup modifySnapshotGroup(array $options = [])
 * @method ModifyStorageCapacityUnitAttribute modifyStorageCapacityUnitAttribute(array $options = [])
 * @method ModifyStorageSetAttribute modifyStorageSetAttribute(array $options = [])
 * @method ModifyUserBusinessBehavior modifyUserBusinessBehavior(array $options = [])
 * @method ModifyVirtualBorderRouterAttribute modifyVirtualBorderRouterAttribute(array $options = [])
 * @method ModifyVpcAttribute modifyVpcAttribute(array $options = [])
 * @method ModifyVRouterAttribute modifyVRouterAttribute(array $options = [])
 * @method ModifyVSwitchAttribute modifyVSwitchAttribute(array $options = [])
 * @method PurchaseReservedInstancesOffering purchaseReservedInstancesOffering(array $options = [])
 * @method PurchaseStorageCapacityUnit purchaseStorageCapacityUnit(array $options = [])
 * @method ReActivateInstances reActivateInstances(array $options = [])
 * @method RebootInstance rebootInstance(array $options = [])
 * @method RebootInstances rebootInstances(array $options = [])
 * @method RecoverVirtualBorderRouter recoverVirtualBorderRouter(array $options = [])
 * @method RedeployDedicatedHost redeployDedicatedHost(array $options = [])
 * @method RedeployInstance redeployInstance(array $options = [])
 * @method ReInitDisk reInitDisk(array $options = [])
 * @method ReleaseCapacityReservation releaseCapacityReservation(array $options = [])
 * @method ReleaseDedicatedHost releaseDedicatedHost(array $options = [])
 * @method ReleaseEipAddress releaseEipAddress(array $options = [])
 * @method ReleasePublicIpAddress releasePublicIpAddress(array $options = [])
 * @method RemoveBandwidthPackageIps removeBandwidthPackageIps(array $options = [])
 * @method RemoveTags removeTags(array $options = [])
 * @method RenewDedicatedHosts renewDedicatedHosts(array $options = [])
 * @method RenewElasticityAssurances renewElasticityAssurances(array $options = [])
 * @method RenewInstance renewInstance(array $options = [])
 * @method RenewReservedInstances renewReservedInstances(array $options = [])
 * @method ReplaceSystemDisk replaceSystemDisk(array $options = [])
 * @method ReportInstancesStatus reportInstancesStatus(array $options = [])
 * @method ResetDisk resetDisk(array $options = [])
 * @method ResetDiskDefaultKMSKeyId resetDiskDefaultKMSKeyId(array $options = [])
 * @method ResetDisks resetDisks(array $options = [])
 * @method ResizeDisk resizeDisk(array $options = [])
 * @method RevokeSecurityGroup revokeSecurityGroup(array $options = [])
 * @method RevokeSecurityGroupEgress revokeSecurityGroupEgress(array $options = [])
 * @method RunCommand runCommand(array $options = [])
 * @method RunInstances runInstances(array $options = [])
 * @method SendFile sendFile(array $options = [])
 * @method StartImagePipelineExecution startImagePipelineExecution(array $options = [])
 * @method StartInstance startInstance(array $options = [])
 * @method StartInstances startInstances(array $options = [])
 * @method StartTerminalSession startTerminalSession(array $options = [])
 * @method StopInstance stopInstance(array $options = [])
 * @method StopInstances stopInstances(array $options = [])
 * @method StopInvocation stopInvocation(array $options = [])
 * @method TagResources tagResources(array $options = [])
 * @method TerminatePhysicalConnection terminatePhysicalConnection(array $options = [])
 * @method TerminateVirtualBorderRouter terminateVirtualBorderRouter(array $options = [])
 * @method UnassignIpv6Addresses unassignIpv6Addresses(array $options = [])
 * @method UnassignPrivateIpAddresses unassignPrivateIpAddresses(array $options = [])
 * @method UnassociateEipAddress unassociateEipAddress(array $options = [])
 * @method UnassociateHaVip unassociateHaVip(array $options = [])
 * @method UntagResources untagResources(array $options = [])
 */
class EcsApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'Ecs';

    /** @var string */
    public $version = '2014-05-26';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'ecs';
}

/**
 * @method string getEventId()
 * @method $this withEventId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getChoice()
 * @method $this withChoice($value)
 */
class AcceptInquiredSystemEvent extends Rpc
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
class ActivateRouterInterface extends Rpc
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
 * @method string getIpCount()
 * @method $this withIpCount($value)
 */
class AddBandwidthPackageIps extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method array getTag()
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 */
class AddTags extends Rpc
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
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getCpuOverCommitRatio()
 * @method $this withCpuOverCommitRatio($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getMinQuantity()
 * @method $this withMinQuantity($value)
 * @method string getActionOnMaintenance()
 * @method $this withActionOnMaintenance($value)
 * @method string getDedicatedHostClusterId()
 * @method $this withDedicatedHostClusterId($value)
 * @method array getTag()
 * @method string getDedicatedHostType()
 * @method $this withDedicatedHostType($value)
 * @method string getAutoRenewPeriod()
 * @method $this withAutoRenewPeriod($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getQuantity()
 * @method $this withQuantity($value)
 * @method string getDedicatedHostName()
 * @method $this withDedicatedHostName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getAutoReleaseTime()
 * @method $this withAutoReleaseTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSchedulerOptionsFenceId()
 * @method string getPeriodUnit()
 * @method $this withPeriodUnit($value)
 * @method string getAutoRenew()
 * @method $this withAutoRenew($value)
 * @method string getNetworkAttributesSlbUdpTimeout()
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getAutoPlacement()
 * @method $this withAutoPlacement($value)
 * @method string getChargeType()
 * @method $this withChargeType($value)
 * @method string getNetworkAttributesUdpTimeout()
 */
class AllocateDedicatedHosts extends Rpc
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
     * @param string $value
     *
     * @return $this
     */
    public function withSchedulerOptionsFenceId($value)
    {
        $this->data['SchedulerOptionsFenceId'] = $value;
        $this->options['query']['SchedulerOptions.FenceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNetworkAttributesSlbUdpTimeout($value)
    {
        $this->data['NetworkAttributesSlbUdpTimeout'] = $value;
        $this->options['query']['NetworkAttributes.SlbUdpTimeout'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNetworkAttributesUdpTimeout($value)
    {
        $this->data['NetworkAttributesUdpTimeout'] = $value;
        $this->options['query']['NetworkAttributes.UdpTimeout'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getISP()
 * @method $this withISP($value)
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
 */
class AllocateEipAddress extends Rpc
{
}

/**
 * @method string getIpAddress()
 * @method $this withIpAddress($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getVlanId()
 * @method $this withVlanId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class AllocatePublicIpAddress extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAutoSnapshotPolicyId()
 * @method string getDiskIds()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ApplyAutoSnapshotPolicy extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAutoSnapshotPolicyId($value)
    {
        $this->data['AutoSnapshotPolicyId'] = $value;
        $this->options['query']['autoSnapshotPolicyId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDiskIds($value)
    {
        $this->data['DiskIds'] = $value;
        $this->options['query']['diskIds'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method array getIpv6Prefix()
 * @method string getIpv6PrefixCount()
 * @method $this withIpv6PrefixCount($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getIpv6AddressCount()
 * @method $this withIpv6AddressCount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getNetworkInterfaceId()
 * @method $this withNetworkInterfaceId($value)
 * @method array getIpv6Address()
 */
class AssignIpv6Addresses extends Rpc
{

    /**
     * @param array $ipv6Prefix
     *
     * @return $this
     */
	public function withIpv6Prefix(array $ipv6Prefix)
	{
	    $this->data['Ipv6Prefix'] = $ipv6Prefix;
		foreach ($ipv6Prefix as $i => $iValue) {
			$this->options['query']['Ipv6Prefix.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $ipv6Address
     *
     * @return $this
     */
	public function withIpv6Address(array $ipv6Address)
	{
	    $this->data['Ipv6Address'] = $ipv6Address;
		foreach ($ipv6Address as $i => $iValue) {
			$this->options['query']['Ipv6Address.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method array getIpv4Prefix()
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getSecondaryPrivateIpAddressCount()
 * @method $this withSecondaryPrivateIpAddressCount($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getIpv4PrefixCount()
 * @method $this withIpv4PrefixCount($value)
 * @method array getPrivateIpAddress()
 * @method string getNetworkInterfaceId()
 * @method $this withNetworkInterfaceId($value)
 */
class AssignPrivateIpAddresses extends Rpc
{

    /**
     * @param array $ipv4Prefix
     *
     * @return $this
     */
	public function withIpv4Prefix(array $ipv4Prefix)
	{
	    $this->data['Ipv4Prefix'] = $ipv4Prefix;
		foreach ($ipv4Prefix as $i => $iValue) {
			$this->options['query']['Ipv4Prefix.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $privateIpAddress
     *
     * @return $this
     */
	public function withPrivateIpAddress(array $privateIpAddress)
	{
	    $this->data['PrivateIpAddress'] = $privateIpAddress;
		foreach ($privateIpAddress as $i => $iValue) {
			$this->options['query']['PrivateIpAddress.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
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
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class AssociateEipAddress extends Rpc
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
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class AssociateHaVip extends Rpc
{
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
 * @method string getVpcId()
 * @method $this withVpcId($value)
 */
class AttachClassicLinkVpc extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getKeyPairName()
 * @method $this withKeyPairName($value)
 * @method string getBootable()
 * @method $this withBootable($value)
 * @method string getPassword()
 * @method $this withPassword($value)
 * @method string getDiskId()
 * @method $this withDiskId($value)
 * @method string getDeleteWithInstance()
 * @method $this withDeleteWithInstance($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAdditionalInfo()
 * @method $this withAdditionalInfo($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getForce()
 * @method $this withForce($value)
 * @method string getDevice()
 * @method $this withDevice($value)
 */
class AttachDisk extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPolicy()
 * @method $this withPolicy($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getRamRoleName()
 * @method $this withRamRoleName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInstanceIds()
 * @method $this withInstanceIds($value)
 */
class AttachInstanceRamRole extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getKeyPairName()
 * @method $this withKeyPairName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInstanceIds()
 * @method $this withInstanceIds($value)
 */
class AttachKeyPair extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTrunkNetworkInstanceId()
 * @method $this withTrunkNetworkInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getWaitForNetworkConfigurationReady()
 * @method $this withWaitForNetworkConfigurationReady($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getNetworkCardIndex()
 * @method $this withNetworkCardIndex($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getNetworkInterfaceId()
 * @method $this withNetworkInterfaceId($value)
 */
class AttachNetworkInterface extends Rpc
{
}

/**
 * @method string getNicType()
 * @method $this withNicType($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSourcePrefixListId()
 * @method $this withSourcePrefixListId($value)
 * @method string getSourcePortRange()
 * @method $this withSourcePortRange($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getSourceGroupOwnerId()
 * @method $this withSourceGroupOwnerId($value)
 * @method string getSourceGroupOwnerAccount()
 * @method $this withSourceGroupOwnerAccount($value)
 * @method string getPermissions()
 * @method $this withPermissions($value)
 * @method string getPolicy()
 * @method $this withPolicy($value)
 * @method string getIpv6SourceCidrIp()
 * @method $this withIpv6SourceCidrIp($value)
 * @method string getIpv6DestCidrIp()
 * @method $this withIpv6DestCidrIp($value)
 * @method string getPortRange()
 * @method $this withPortRange($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getIpProtocol()
 * @method $this withIpProtocol($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getSourceCidrIp()
 * @method $this withSourceCidrIp($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPriority()
 * @method $this withPriority($value)
 * @method string getDestCidrIp()
 * @method $this withDestCidrIp($value)
 * @method string getSourceGroupId()
 * @method $this withSourceGroupId($value)
 */
class AuthorizeSecurityGroup extends Rpc
{
}

/**
 * @method string getNicType()
 * @method $this withNicType($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSourcePortRange()
 * @method $this withSourcePortRange($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDestPrefixListId()
 * @method $this withDestPrefixListId($value)
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getPermissions()
 * @method $this withPermissions($value)
 * @method string getPolicy()
 * @method $this withPolicy($value)
 * @method string getIpv6DestCidrIp()
 * @method $this withIpv6DestCidrIp($value)
 * @method string getIpv6SourceCidrIp()
 * @method $this withIpv6SourceCidrIp($value)
 * @method string getPortRange()
 * @method $this withPortRange($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getIpProtocol()
 * @method $this withIpProtocol($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getSourceCidrIp()
 * @method $this withSourceCidrIp($value)
 * @method string getDestGroupId()
 * @method $this withDestGroupId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPriority()
 * @method $this withPriority($value)
 * @method string getDestGroupOwnerAccount()
 * @method $this withDestGroupOwnerAccount($value)
 * @method string getDestCidrIp()
 * @method $this withDestCidrIp($value)
 * @method string getDestGroupOwnerId()
 * @method $this withDestGroupOwnerId($value)
 */
class AuthorizeSecurityGroupEgress extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDiskIds()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CancelAutoSnapshotPolicy extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDiskIds($value)
    {
        $this->data['DiskIds'] = $value;
        $this->options['query']['diskIds'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getImageId()
 * @method $this withImageId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CancelCopyImage extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getExecutionId()
 * @method $this withExecutionId($value)
 * @method array getTemplateTag()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CancelImagePipelineExecution extends Rpc
{

    /**
     * @param array $templateTag
     *
     * @return $this
     */
	public function withTemplateTag(array $templateTag)
	{
	    $this->data['TemplateTag'] = $templateTag;
		foreach ($templateTag as $depth1 => $depth1Value) {
			if(isset($depth1Value['Key'])){
				$this->options['query']['TemplateTag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
			if(isset($depth1Value['Value'])){
				$this->options['query']['TemplateTag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
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
 * @method string getUserCidr()
 * @method $this withUserCidr($value)
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
 * @method array getEventId()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CancelSimulatedSystemEvents extends Rpc
{

    /**
     * @param array $eventId
     *
     * @return $this
     */
	public function withEventId(array $eventId)
	{
	    $this->data['EventId'] = $eventId;
		foreach ($eventId as $i => $iValue) {
			$this->options['query']['EventId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CancelTask extends Rpc
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
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class ConvertNatPublicIpToEip extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getImageId()
 * @method $this withImageId($value)
 * @method string getEncryptAlgorithm()
 * @method $this withEncryptAlgorithm($value)
 * @method string getDestinationRegionId()
 * @method $this withDestinationRegionId($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method array getTag()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDestinationImageName()
 * @method $this withDestinationImageName($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getEncrypted()
 * @method $this withEncrypted($value)
 * @method string getKMSKeyId()
 * @method $this withKMSKeyId($value)
 * @method string getDestinationDescription()
 * @method $this withDestinationDescription($value)
 */
class CopyImage extends Rpc
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
 * @method string getSnapshotId()
 * @method $this withSnapshotId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDestinationRegionId()
 * @method $this withDestinationRegionId($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method array getTag()
 * @method array getArn()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDestinationSnapshotName()
 * @method $this withDestinationSnapshotName($value)
 * @method string getDestinationSnapshotDescription()
 * @method $this withDestinationSnapshotDescription($value)
 * @method string getEncrypted()
 * @method $this withEncrypted($value)
 * @method string getRetentionDays()
 * @method $this withRetentionDays($value)
 * @method string getKMSKeyId()
 * @method $this withKMSKeyId($value)
 * @method string getDestinationStorageLocationArn()
 * @method $this withDestinationStorageLocationArn($value)
 */
class CopySnapshot extends Rpc
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
     * @param array $arn
     *
     * @return $this
     */
	public function withArn(array $arn)
	{
	    $this->data['Arn'] = $arn;
		foreach ($arn as $depth1 => $depth1Value) {
			if(isset($depth1Value['RoleType'])){
				$this->options['query']['Arn.' . ($depth1 + 1) . '.RoleType'] = $depth1Value['RoleType'];
			}
			if(isset($depth1Value['Rolearn'])){
				$this->options['query']['Arn.' . ($depth1 + 1) . '.Rolearn'] = $depth1Value['Rolearn'];
			}
			if(isset($depth1Value['AssumeRoleFor'])){
				$this->options['query']['Arn.' . ($depth1 + 1) . '.AssumeRoleFor'] = $depth1Value['AssumeRoleFor'];
			}
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getInstanceCount()
 * @method $this withInstanceCount($value)
 * @method array getTag()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInstanceName()
 * @method $this withInstanceName($value)
 * @method string getTimeToLiveInHours()
 * @method $this withTimeToLiveInHours($value)
 * @method string getIpAddressRange()
 * @method $this withIpAddressRange($value)
 */
class CreateActivation extends Rpc
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
}

/**
 * @method array getLaunchConfigurationDataDisk()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getLaunchConfigurationSystemDiskCategory()
 * @method string getAutoProvisioningGroupType()
 * @method $this withAutoProvisioningGroupType($value)
 * @method string getLaunchConfigurationSystemDiskPerformanceLevel()
 * @method array getLaunchConfigurationHostNames()
 * @method array getLaunchConfigurationSecurityGroupIds()
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getLaunchConfigurationImageId()
 * @method string getLaunchConfigurationResourceGroupId()
 * @method string getResourcePlanningOnly()
 * @method $this withResourcePlanningOnly($value)
 * @method string getLaunchConfigurationPassword()
 * @method string getLaunchConfigurationAutoReleaseTime()
 * @method string getPayAsYouGoAllocationStrategy()
 * @method $this withPayAsYouGoAllocationStrategy($value)
 * @method string getDefaultTargetCapacityType()
 * @method $this withDefaultTargetCapacityType($value)
 * @method array getTag()
 * @method string getLaunchConfigurationKeyPairName()
 * @method array getSystemDiskConfig()
 * @method array getDataDiskConfig()
 * @method string getValidUntil()
 * @method $this withValidUntil($value)
 * @method string getLaunchTemplateId()
 * @method $this withLaunchTemplateId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getLaunchConfigurationImageFamily()
 * @method string getLaunchConfigurationSystemDiskSize()
 * @method string getLaunchConfigurationInternetMaxBandwidthOut()
 * @method string getLaunchConfigurationHostName()
 * @method string getMinTargetCapacity()
 * @method $this withMinTargetCapacity($value)
 * @method string getMaxSpotPrice()
 * @method $this withMaxSpotPrice($value)
 * @method array getLaunchConfigurationArn()
 * @method string getLaunchConfigurationPasswordInherit()
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getLaunchConfigurationSecurityGroupId()
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getTerminateInstancesWithExpiration()
 * @method $this withTerminateInstancesWithExpiration($value)
 * @method string getLaunchConfigurationUserData()
 * @method string getLaunchConfigurationCreditSpecification()
 * @method string getLaunchConfigurationSystemDisk()
 * @method string getLaunchConfigurationInstanceName()
 * @method string getLaunchConfigurationInstanceDescription()
 * @method string getSpotAllocationStrategy()
 * @method $this withSpotAllocationStrategy($value)
 * @method string getTerminateInstances()
 * @method $this withTerminateInstances($value)
 * @method string getLaunchConfigurationSystemDiskName()
 * @method string getLaunchConfigurationSystemDiskDescription()
 * @method string getExcessCapacityTerminationPolicy()
 * @method $this withExcessCapacityTerminationPolicy($value)
 * @method array getLaunchTemplateConfig()
 * @method string getLaunchConfigurationRamRoleName()
 * @method string getLaunchConfigurationInternetMaxBandwidthIn()
 * @method string getSpotInstanceInterruptionBehavior()
 * @method $this withSpotInstanceInterruptionBehavior($value)
 * @method string getLaunchConfigurationSecurityEnhancementStrategy()
 * @method array getLaunchConfigurationTag()
 * @method string getLaunchConfigurationDeploymentSetId()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getSpotInstancePoolsToUseCount()
 * @method $this withSpotInstancePoolsToUseCount($value)
 * @method string getLaunchConfigurationInternetChargeType()
 * @method string getLaunchTemplateVersion()
 * @method $this withLaunchTemplateVersion($value)
 * @method string getLaunchConfigurationIoOptimized()
 * @method string getPayAsYouGoTargetCapacity()
 * @method $this withPayAsYouGoTargetCapacity($value)
 * @method string getHibernationOptionsConfigured()
 * @method $this withHibernationOptionsConfigured($value)
 * @method string getTotalTargetCapacity()
 * @method $this withTotalTargetCapacity($value)
 * @method string getSpotTargetCapacity()
 * @method $this withSpotTargetCapacity($value)
 * @method array getLaunchConfigurationNetworkInterface()
 * @method string getValidFrom()
 * @method $this withValidFrom($value)
 * @method string getAutoProvisioningGroupName()
 * @method $this withAutoProvisioningGroupName($value)
 * @method string getLaunchConfigurationAdditionalInfo()
 */
class CreateAutoProvisioningGroup extends Rpc
{

    /**
     * @param array $launchConfigurationDataDisk
     *
     * @return $this
     */
	public function withLaunchConfigurationDataDisk(array $launchConfigurationDataDisk)
	{
	    $this->data['LaunchConfigurationDataDisk'] = $launchConfigurationDataDisk;
		foreach ($launchConfigurationDataDisk as $depth1 => $depth1Value) {
			if(isset($depth1Value['PerformanceLevel'])){
				$this->options['query']['LaunchConfiguration.DataDisk.' . ($depth1 + 1) . '.PerformanceLevel'] = $depth1Value['PerformanceLevel'];
			}
			if(isset($depth1Value['KmsKeyId'])){
				$this->options['query']['LaunchConfiguration.DataDisk.' . ($depth1 + 1) . '.KmsKeyId'] = $depth1Value['KmsKeyId'];
			}
			if(isset($depth1Value['Description'])){
				$this->options['query']['LaunchConfiguration.DataDisk.' . ($depth1 + 1) . '.Description'] = $depth1Value['Description'];
			}
			if(isset($depth1Value['SnapshotId'])){
				$this->options['query']['LaunchConfiguration.DataDisk.' . ($depth1 + 1) . '.SnapshotId'] = $depth1Value['SnapshotId'];
			}
			if(isset($depth1Value['Size'])){
				$this->options['query']['LaunchConfiguration.DataDisk.' . ($depth1 + 1) . '.Size'] = $depth1Value['Size'];
			}
			if(isset($depth1Value['Device'])){
				$this->options['query']['LaunchConfiguration.DataDisk.' . ($depth1 + 1) . '.Device'] = $depth1Value['Device'];
			}
			if(isset($depth1Value['DiskName'])){
				$this->options['query']['LaunchConfiguration.DataDisk.' . ($depth1 + 1) . '.DiskName'] = $depth1Value['DiskName'];
			}
			if(isset($depth1Value['Category'])){
				$this->options['query']['LaunchConfiguration.DataDisk.' . ($depth1 + 1) . '.Category'] = $depth1Value['Category'];
			}
			if(isset($depth1Value['DeleteWithInstance'])){
				$this->options['query']['LaunchConfiguration.DataDisk.' . ($depth1 + 1) . '.DeleteWithInstance'] = $depth1Value['DeleteWithInstance'];
			}
			if(isset($depth1Value['Encrypted'])){
				$this->options['query']['LaunchConfiguration.DataDisk.' . ($depth1 + 1) . '.Encrypted'] = $depth1Value['Encrypted'];
			}
			if(isset($depth1Value['EncryptAlgorithm'])){
				$this->options['query']['LaunchConfiguration.DataDisk.' . ($depth1 + 1) . '.EncryptAlgorithm'] = $depth1Value['EncryptAlgorithm'];
			}
			if(isset($depth1Value['ProvisionedIops'])){
				$this->options['query']['LaunchConfiguration.DataDisk.' . ($depth1 + 1) . '.ProvisionedIops'] = $depth1Value['ProvisionedIops'];
			}
			if(isset($depth1Value['BurstingEnabled'])){
				$this->options['query']['LaunchConfiguration.DataDisk.' . ($depth1 + 1) . '.BurstingEnabled'] = $depth1Value['BurstingEnabled'];
			}
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLaunchConfigurationSystemDiskCategory($value)
    {
        $this->data['LaunchConfigurationSystemDiskCategory'] = $value;
        $this->options['query']['LaunchConfiguration.SystemDiskCategory'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLaunchConfigurationSystemDiskPerformanceLevel($value)
    {
        $this->data['LaunchConfigurationSystemDiskPerformanceLevel'] = $value;
        $this->options['query']['LaunchConfiguration.SystemDiskPerformanceLevel'] = $value;

        return $this;
    }

    /**
     * @param array $launchConfigurationHostNames
     *
     * @return $this
     */
	public function withLaunchConfigurationHostNames(array $launchConfigurationHostNames)
	{
	    $this->data['LaunchConfigurationHostNames'] = $launchConfigurationHostNames;
		foreach ($launchConfigurationHostNames as $i => $iValue) {
			$this->options['query']['LaunchConfiguration.HostNames.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $launchConfigurationSecurityGroupIds
     *
     * @return $this
     */
	public function withLaunchConfigurationSecurityGroupIds(array $launchConfigurationSecurityGroupIds)
	{
	    $this->data['LaunchConfigurationSecurityGroupIds'] = $launchConfigurationSecurityGroupIds;
		foreach ($launchConfigurationSecurityGroupIds as $i => $iValue) {
			$this->options['query']['LaunchConfiguration.SecurityGroupIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLaunchConfigurationImageId($value)
    {
        $this->data['LaunchConfigurationImageId'] = $value;
        $this->options['query']['LaunchConfiguration.ImageId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLaunchConfigurationResourceGroupId($value)
    {
        $this->data['LaunchConfigurationResourceGroupId'] = $value;
        $this->options['query']['LaunchConfiguration.ResourceGroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLaunchConfigurationPassword($value)
    {
        $this->data['LaunchConfigurationPassword'] = $value;
        $this->options['query']['LaunchConfiguration.Password'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLaunchConfigurationAutoReleaseTime($value)
    {
        $this->data['LaunchConfigurationAutoReleaseTime'] = $value;
        $this->options['query']['LaunchConfiguration.AutoReleaseTime'] = $value;

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
     * @param string $value
     *
     * @return $this
     */
    public function withLaunchConfigurationKeyPairName($value)
    {
        $this->data['LaunchConfigurationKeyPairName'] = $value;
        $this->options['query']['LaunchConfiguration.KeyPairName'] = $value;

        return $this;
    }

    /**
     * @param array $systemDiskConfig
     *
     * @return $this
     */
	public function withSystemDiskConfig(array $systemDiskConfig)
	{
	    $this->data['SystemDiskConfig'] = $systemDiskConfig;
		foreach ($systemDiskConfig as $depth1 => $depth1Value) {
			if(isset($depth1Value['DiskCategory'])){
				$this->options['query']['SystemDiskConfig.' . ($depth1 + 1) . '.DiskCategory'] = $depth1Value['DiskCategory'];
			}
		}

		return $this;
    }

    /**
     * @param array $dataDiskConfig
     *
     * @return $this
     */
	public function withDataDiskConfig(array $dataDiskConfig)
	{
	    $this->data['DataDiskConfig'] = $dataDiskConfig;
		foreach ($dataDiskConfig as $depth1 => $depth1Value) {
			if(isset($depth1Value['DiskCategory'])){
				$this->options['query']['DataDiskConfig.' . ($depth1 + 1) . '.DiskCategory'] = $depth1Value['DiskCategory'];
			}
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLaunchConfigurationImageFamily($value)
    {
        $this->data['LaunchConfigurationImageFamily'] = $value;
        $this->options['query']['LaunchConfiguration.ImageFamily'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLaunchConfigurationSystemDiskSize($value)
    {
        $this->data['LaunchConfigurationSystemDiskSize'] = $value;
        $this->options['query']['LaunchConfiguration.SystemDiskSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLaunchConfigurationInternetMaxBandwidthOut($value)
    {
        $this->data['LaunchConfigurationInternetMaxBandwidthOut'] = $value;
        $this->options['query']['LaunchConfiguration.InternetMaxBandwidthOut'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLaunchConfigurationHostName($value)
    {
        $this->data['LaunchConfigurationHostName'] = $value;
        $this->options['query']['LaunchConfiguration.HostName'] = $value;

        return $this;
    }

    /**
     * @param array $launchConfigurationArn
     *
     * @return $this
     */
	public function withLaunchConfigurationArn(array $launchConfigurationArn)
	{
	    $this->data['LaunchConfigurationArn'] = $launchConfigurationArn;
		foreach ($launchConfigurationArn as $depth1 => $depth1Value) {
			if(isset($depth1Value['Rolearn'])){
				$this->options['query']['LaunchConfiguration.Arn.' . ($depth1 + 1) . '.Rolearn'] = $depth1Value['Rolearn'];
			}
			if(isset($depth1Value['RoleType'])){
				$this->options['query']['LaunchConfiguration.Arn.' . ($depth1 + 1) . '.RoleType'] = $depth1Value['RoleType'];
			}
			if(isset($depth1Value['AssumeRoleFor'])){
				$this->options['query']['LaunchConfiguration.Arn.' . ($depth1 + 1) . '.AssumeRoleFor'] = $depth1Value['AssumeRoleFor'];
			}
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLaunchConfigurationPasswordInherit($value)
    {
        $this->data['LaunchConfigurationPasswordInherit'] = $value;
        $this->options['query']['LaunchConfiguration.PasswordInherit'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLaunchConfigurationSecurityGroupId($value)
    {
        $this->data['LaunchConfigurationSecurityGroupId'] = $value;
        $this->options['query']['LaunchConfiguration.SecurityGroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLaunchConfigurationUserData($value)
    {
        $this->data['LaunchConfigurationUserData'] = $value;
        $this->options['query']['LaunchConfiguration.UserData'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLaunchConfigurationCreditSpecification($value)
    {
        $this->data['LaunchConfigurationCreditSpecification'] = $value;
        $this->options['query']['LaunchConfiguration.CreditSpecification'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLaunchConfigurationSystemDisk($value)
    {
        $this->data['LaunchConfigurationSystemDisk'] = $value;
        $this->options['query']['LaunchConfiguration.SystemDisk'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLaunchConfigurationInstanceName($value)
    {
        $this->data['LaunchConfigurationInstanceName'] = $value;
        $this->options['query']['LaunchConfiguration.InstanceName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLaunchConfigurationInstanceDescription($value)
    {
        $this->data['LaunchConfigurationInstanceDescription'] = $value;
        $this->options['query']['LaunchConfiguration.InstanceDescription'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLaunchConfigurationSystemDiskName($value)
    {
        $this->data['LaunchConfigurationSystemDiskName'] = $value;
        $this->options['query']['LaunchConfiguration.SystemDiskName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLaunchConfigurationSystemDiskDescription($value)
    {
        $this->data['LaunchConfigurationSystemDiskDescription'] = $value;
        $this->options['query']['LaunchConfiguration.SystemDiskDescription'] = $value;

        return $this;
    }

    /**
     * @param array $launchTemplateConfig
     *
     * @return $this
     */
	public function withLaunchTemplateConfig(array $launchTemplateConfig)
	{
	    $this->data['LaunchTemplateConfig'] = $launchTemplateConfig;
		foreach ($launchTemplateConfig as $depth1 => $depth1Value) {
			if(isset($depth1Value['VSwitchId'])){
				$this->options['query']['LaunchTemplateConfig.' . ($depth1 + 1) . '.VSwitchId'] = $depth1Value['VSwitchId'];
			}
			if(isset($depth1Value['MaxPrice'])){
				$this->options['query']['LaunchTemplateConfig.' . ($depth1 + 1) . '.MaxPrice'] = $depth1Value['MaxPrice'];
			}
			if(isset($depth1Value['Priority'])){
				$this->options['query']['LaunchTemplateConfig.' . ($depth1 + 1) . '.Priority'] = $depth1Value['Priority'];
			}
			if(isset($depth1Value['InstanceType'])){
				$this->options['query']['LaunchTemplateConfig.' . ($depth1 + 1) . '.InstanceType'] = $depth1Value['InstanceType'];
			}
			if(isset($depth1Value['WeightedCapacity'])){
				$this->options['query']['LaunchTemplateConfig.' . ($depth1 + 1) . '.WeightedCapacity'] = $depth1Value['WeightedCapacity'];
			}
			if(isset($depth1Value['MaxQuantity'])){
				$this->options['query']['LaunchTemplateConfig.' . ($depth1 + 1) . '.MaxQuantity'] = $depth1Value['MaxQuantity'];
			}
			foreach ($depth1Value['Cores'] as $i => $iValue) {
				$this->options['query']['LaunchTemplateConfig.' . ($depth1 + 1) . '.Cores.' . ($i + 1)] = $iValue;
			}
			foreach ($depth1Value['Memories'] as $i => $iValue) {
				$this->options['query']['LaunchTemplateConfig.' . ($depth1 + 1) . '.Memories.' . ($i + 1)] = $iValue;
			}
			if(isset($depth1Value['InstanceFamilyLevel'])){
				$this->options['query']['LaunchTemplateConfig.' . ($depth1 + 1) . '.InstanceFamilyLevel'] = $depth1Value['InstanceFamilyLevel'];
			}
			foreach ($depth1Value['ExcludedInstanceTypes'] as $i => $iValue) {
				$this->options['query']['LaunchTemplateConfig.' . ($depth1 + 1) . '.ExcludedInstanceTypes.' . ($i + 1)] = $iValue;
			}
			foreach ($depth1Value['Architectures'] as $i => $iValue) {
				$this->options['query']['LaunchTemplateConfig.' . ($depth1 + 1) . '.Architectures.' . ($i + 1)] = $iValue;
			}
			if(isset($depth1Value['BurstablePerformance'])){
				$this->options['query']['LaunchTemplateConfig.' . ($depth1 + 1) . '.BurstablePerformance'] = $depth1Value['BurstablePerformance'];
			}
			foreach ($depth1Value['SecondaryNetworkInterface'] as $depth2 => $depth2Value) {
				if(isset($depth2Value['VSwitchId'])){
					$this->options['query']['LaunchTemplateConfig.' . ($depth1 + 1) . '.SecondaryNetworkInterface.' . ($depth2 + 1) . '.VSwitchId'] = $depth2Value['VSwitchId'];
				}
			}
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLaunchConfigurationRamRoleName($value)
    {
        $this->data['LaunchConfigurationRamRoleName'] = $value;
        $this->options['query']['LaunchConfiguration.RamRoleName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLaunchConfigurationInternetMaxBandwidthIn($value)
    {
        $this->data['LaunchConfigurationInternetMaxBandwidthIn'] = $value;
        $this->options['query']['LaunchConfiguration.InternetMaxBandwidthIn'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLaunchConfigurationSecurityEnhancementStrategy($value)
    {
        $this->data['LaunchConfigurationSecurityEnhancementStrategy'] = $value;
        $this->options['query']['LaunchConfiguration.SecurityEnhancementStrategy'] = $value;

        return $this;
    }

    /**
     * @param array $launchConfigurationTag
     *
     * @return $this
     */
	public function withLaunchConfigurationTag(array $launchConfigurationTag)
	{
	    $this->data['LaunchConfigurationTag'] = $launchConfigurationTag;
		foreach ($launchConfigurationTag as $depth1 => $depth1Value) {
			if(isset($depth1Value['Key'])){
				$this->options['query']['LaunchConfiguration.Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
			if(isset($depth1Value['Value'])){
				$this->options['query']['LaunchConfiguration.Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLaunchConfigurationDeploymentSetId($value)
    {
        $this->data['LaunchConfigurationDeploymentSetId'] = $value;
        $this->options['query']['LaunchConfiguration.DeploymentSetId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLaunchConfigurationInternetChargeType($value)
    {
        $this->data['LaunchConfigurationInternetChargeType'] = $value;
        $this->options['query']['LaunchConfiguration.InternetChargeType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLaunchConfigurationIoOptimized($value)
    {
        $this->data['LaunchConfigurationIoOptimized'] = $value;
        $this->options['query']['LaunchConfiguration.IoOptimized'] = $value;

        return $this;
    }

    /**
     * @param array $launchConfigurationNetworkInterface
     *
     * @return $this
     */
	public function withLaunchConfigurationNetworkInterface(array $launchConfigurationNetworkInterface)
	{
	    $this->data['LaunchConfigurationNetworkInterface'] = $launchConfigurationNetworkInterface;
		foreach ($launchConfigurationNetworkInterface as $depth1 => $depth1Value) {
			if(isset($depth1Value['SecurityGroupId'])){
				$this->options['query']['LaunchConfiguration.NetworkInterface.' . ($depth1 + 1) . '.SecurityGroupId'] = $depth1Value['SecurityGroupId'];
			}
			foreach ($depth1Value['SecurityGroupIds'] as $i => $iValue) {
				$this->options['query']['LaunchConfiguration.NetworkInterface.' . ($depth1 + 1) . '.SecurityGroupIds.' . ($i + 1)] = $iValue;
			}
			if(isset($depth1Value['InstanceType'])){
				$this->options['query']['LaunchConfiguration.NetworkInterface.' . ($depth1 + 1) . '.InstanceType'] = $depth1Value['InstanceType'];
			}
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLaunchConfigurationAdditionalInfo($value)
    {
        $this->data['LaunchConfigurationAdditionalInfo'] = $value;
        $this->options['query']['LaunchConfiguration.AdditionalInfo'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCopyEncryptionConfiguration()
 * @method $this withCopyEncryptionConfiguration($value)
 * @method string getCopiedSnapshotsRetentionDays()
 * @method $this withCopiedSnapshotsRetentionDays($value)
 * @method string getTimePoints()
 * @method string getRepeatWeekdays()
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getStorageLocationArn()
 * @method $this withStorageLocationArn($value)
 * @method array getTag()
 * @method string getEnableCrossRegionCopy()
 * @method $this withEnableCrossRegionCopy($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAutoSnapshotPolicyName()
 * @method string getRetentionDays()
 * @method string getTargetCopyRegions()
 * @method $this withTargetCopyRegions($value)
 */
class CreateAutoSnapshotPolicy extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTimePoints($value)
    {
        $this->data['TimePoints'] = $value;
        $this->options['query']['timePoints'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRepeatWeekdays($value)
    {
        $this->data['RepeatWeekdays'] = $value;
        $this->options['query']['repeatWeekdays'] = $value;

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
    public function withAutoSnapshotPolicyName($value)
    {
        $this->data['AutoSnapshotPolicyName'] = $value;
        $this->options['query']['autoSnapshotPolicyName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRetentionDays($value)
    {
        $this->data['RetentionDays'] = $value;
        $this->options['query']['retentionDays'] = $value;

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
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPlatform()
 * @method $this withPlatform($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getPrivatePoolOptionsMatchCriteria()
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method array getTag()
 * @method string getInstanceChargeType()
 * @method $this withInstanceChargeType($value)
 * @method string getEfficientStatus()
 * @method $this withEfficientStatus($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getEndTimeType()
 * @method $this withEndTimeType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getPrivatePoolOptionsName()
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getPeriodUnit()
 * @method $this withPeriodUnit($value)
 * @method string getTimeSlot()
 * @method $this withTimeSlot($value)
 * @method array getZoneId()
 * @method string getChargeType()
 * @method $this withChargeType($value)
 * @method string getPackageType()
 * @method $this withPackageType($value)
 * @method string getInstanceAmount()
 * @method $this withInstanceAmount($value)
 */
class CreateCapacityReservation extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPrivatePoolOptionsMatchCriteria($value)
    {
        $this->data['PrivatePoolOptionsMatchCriteria'] = $value;
        $this->options['query']['PrivatePoolOptions.MatchCriteria'] = $value;

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
     * @param string $value
     *
     * @return $this
     */
    public function withPrivatePoolOptionsName($value)
    {
        $this->data['PrivatePoolOptionsName'] = $value;
        $this->options['query']['PrivatePoolOptions.Name'] = $value;

        return $this;
    }

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
 * @method array getSystemTag()
 * @method string getWorkingDir()
 * @method $this withWorkingDir($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getCommandContent()
 * @method $this withCommandContent($value)
 * @method string getTimeout()
 * @method $this withTimeout($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getContentEncoding()
 * @method $this withContentEncoding($value)
 * @method array getTag()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getEnableParameter()
 * @method $this withEnableParameter($value)
 */
class CreateCommand extends Rpc
{

    /**
     * @param array $systemTag
     *
     * @return $this
     */
	public function withSystemTag(array $systemTag)
	{
	    $this->data['SystemTag'] = $systemTag;
		foreach ($systemTag as $depth1 => $depth1Value) {
			if(isset($depth1Value['Key'])){
				$this->options['query']['SystemTag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
			if(isset($depth1Value['Value'])){
				$this->options['query']['SystemTag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Scope'])){
				$this->options['query']['SystemTag.' . ($depth1 + 1) . '.Scope'] = $depth1Value['Scope'];
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
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
		}

		return $this;
    }
}

/**
 * @method string getDedicatedHostClusterName()
 * @method $this withDedicatedHostClusterName($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method array getTag()
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 */
class CreateDedicatedHostCluster extends Rpc
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
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getDemandDescription()
 * @method $this withDemandDescription($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getInstanceChargeType()
 * @method $this withInstanceChargeType($value)
 * @method string getDemandName()
 * @method $this withDemandName($value)
 * @method string getAmount()
 * @method $this withAmount($value)
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
 * @method string getPeriodUnit()
 * @method $this withPeriodUnit($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 */
class CreateDemand extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getGroupCount()
 * @method $this withGroupCount($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDeploymentSetName()
 * @method $this withDeploymentSetName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getOnUnableToRedeployFailedInstance()
 * @method $this withOnUnableToRedeployFailedInstance($value)
 * @method string getGranularity()
 * @method $this withGranularity($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 * @method string getStrategy()
 * @method $this withStrategy($value)
 */
class CreateDeploymentSet extends Rpc
{
}

/**
 * @method array getMetricIds()
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getMetricSetName()
 * @method $this withMetricSetName($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 */
class CreateDiagnosticMetricSet extends Rpc
{

    /**
     * @param array $metricIds
     *
     * @return $this
     */
	public function withMetricIds(array $metricIds)
	{
	    $this->data['MetricIds'] = $metricIds;
		foreach ($metricIds as $i => $iValue) {
			$this->options['query']['MetricIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getMetricSetId()
 * @method $this withMetricSetId($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getAdditionalOptions()
 * @method $this withAdditionalOptions($value)
 */
class CreateDiagnosticReport extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getEncryptAlgorithm()
 * @method $this withEncryptAlgorithm($value)
 * @method string getDiskName()
 * @method $this withDiskName($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getStorageSetPartitionNumber()
 * @method $this withStorageSetPartitionNumber($value)
 * @method array getTag()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getProvisionedIops()
 * @method $this withProvisionedIops($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSize()
 * @method $this withSize($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getStorageClusterId()
 * @method $this withStorageClusterId($value)
 * @method string getSnapshotId()
 * @method $this withSnapshotId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method array getSystemTag()
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getDiskCategory()
 * @method $this withDiskCategory($value)
 * @method string getMultiAttach()
 * @method $this withMultiAttach($value)
 * @method string getAdvancedFeatures()
 * @method $this withAdvancedFeatures($value)
 * @method array getArn()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getPerformanceLevel()
 * @method $this withPerformanceLevel($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getBurstingEnabled()
 * @method $this withBurstingEnabled($value)
 * @method string getStorageSetId()
 * @method $this withStorageSetId($value)
 * @method string getEncrypted()
 * @method $this withEncrypted($value)
 * @method string getKMSKeyId()
 * @method $this withKMSKeyId($value)
 */
class CreateDisk extends Rpc
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
     * @param array $systemTag
     *
     * @return $this
     */
	public function withSystemTag(array $systemTag)
	{
	    $this->data['SystemTag'] = $systemTag;
		foreach ($systemTag as $depth1 => $depth1Value) {
			if(isset($depth1Value['Scope'])){
				$this->options['query']['SystemTag.' . ($depth1 + 1) . '.Scope'] = $depth1Value['Scope'];
			}
			if(isset($depth1Value['Value'])){
				$this->options['query']['SystemTag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['SystemTag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }

    /**
     * @param array $arn
     *
     * @return $this
     */
	public function withArn(array $arn)
	{
	    $this->data['Arn'] = $arn;
		foreach ($arn as $depth1 => $depth1Value) {
			if(isset($depth1Value['Rolearn'])){
				$this->options['query']['Arn.' . ($depth1 + 1) . '.Rolearn'] = $depth1Value['Rolearn'];
			}
			if(isset($depth1Value['RoleType'])){
				$this->options['query']['Arn.' . ($depth1 + 1) . '.RoleType'] = $depth1Value['RoleType'];
			}
			if(isset($depth1Value['AssumeRoleFor'])){
				$this->options['query']['Arn.' . ($depth1 + 1) . '.AssumeRoleFor'] = $depth1Value['AssumeRoleFor'];
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
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPlatform()
 * @method $this withPlatform($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getPrivatePoolOptionsMatchCriteria()
 * @method array getInstanceType()
 * @method array getTag()
 * @method string getInstanceChargeType()
 * @method $this withInstanceChargeType($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getPrivatePoolOptionsName()
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getAssuranceTimes()
 * @method $this withAssuranceTimes($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getInstanceCpuCoreCount()
 * @method $this withInstanceCpuCoreCount($value)
 * @method string getPeriodUnit()
 * @method $this withPeriodUnit($value)
 * @method array getZoneId()
 * @method string getChargeType()
 * @method $this withChargeType($value)
 * @method string getPackageType()
 * @method $this withPackageType($value)
 * @method string getInstanceAmount()
 * @method $this withInstanceAmount($value)
 */
class CreateElasticityAssurance extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPrivatePoolOptionsMatchCriteria($value)
    {
        $this->data['PrivatePoolOptionsMatchCriteria'] = $value;
        $this->options['query']['PrivatePoolOptions.MatchCriteria'] = $value;

        return $this;
    }

    /**
     * @param array $instanceType
     *
     * @return $this
     */
	public function withInstanceType(array $instanceType)
	{
	    $this->data['InstanceType'] = $instanceType;
		foreach ($instanceType as $i => $iValue) {
			$this->options['query']['InstanceType.' . ($i + 1)] = $iValue;
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
     * @param string $value
     *
     * @return $this
     */
    public function withPrivatePoolOptionsName($value)
    {
        $this->data['PrivatePoolOptionsName'] = $value;
        $this->options['query']['PrivatePoolOptions.Name'] = $value;

        return $this;
    }

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
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInternalPort()
 * @method $this withInternalPort($value)
 * @method string getExternalPort()
 * @method $this withExternalPort($value)
 */
class CreateForwardEntry extends Rpc
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
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 */
class CreateHaVip extends Rpc
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
 */
class CreateHpcCluster extends Rpc
{
}

/**
 * @method array getDiskDeviceMapping()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSnapshotId()
 * @method $this withSnapshotId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method array getSystemTag()
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getPlatform()
 * @method $this withPlatform($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getBootMode()
 * @method $this withBootMode($value)
 * @method string getImageName()
 * @method $this withImageName($value)
 * @method string getStorageLocationArn()
 * @method $this withStorageLocationArn($value)
 * @method array getTag()
 * @method string getArchitecture()
 * @method $this withArchitecture($value)
 * @method string getDetectionStrategy()
 * @method $this withDetectionStrategy($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getImageFamily()
 * @method $this withImageFamily($value)
 * @method string getImageVersion()
 * @method $this withImageVersion($value)
 */
class CreateImage extends Rpc
{

    /**
     * @param array $diskDeviceMapping
     *
     * @return $this
     */
	public function withDiskDeviceMapping(array $diskDeviceMapping)
	{
	    $this->data['DiskDeviceMapping'] = $diskDeviceMapping;
		foreach ($diskDeviceMapping as $depth1 => $depth1Value) {
			if(isset($depth1Value['SnapshotId'])){
				$this->options['query']['DiskDeviceMapping.' . ($depth1 + 1) . '.SnapshotId'] = $depth1Value['SnapshotId'];
			}
			if(isset($depth1Value['Size'])){
				$this->options['query']['DiskDeviceMapping.' . ($depth1 + 1) . '.Size'] = $depth1Value['Size'];
			}
			if(isset($depth1Value['DiskType'])){
				$this->options['query']['DiskDeviceMapping.' . ($depth1 + 1) . '.DiskType'] = $depth1Value['DiskType'];
			}
			if(isset($depth1Value['Device'])){
				$this->options['query']['DiskDeviceMapping.' . ($depth1 + 1) . '.Device'] = $depth1Value['Device'];
			}
		}

		return $this;
    }

    /**
     * @param array $systemTag
     *
     * @return $this
     */
	public function withSystemTag(array $systemTag)
	{
	    $this->data['SystemTag'] = $systemTag;
		foreach ($systemTag as $depth1 => $depth1Value) {
			if(isset($depth1Value['Scope'])){
				$this->options['query']['SystemTag.' . ($depth1 + 1) . '.Scope'] = $depth1Value['Scope'];
			}
			if(isset($depth1Value['Value'])){
				$this->options['query']['SystemTag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['SystemTag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
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
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getSystemType()
 * @method $this withSystemType($value)
 * @method string getContent()
 * @method $this withContent($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method array getTag()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getComponentType()
 * @method $this withComponentType($value)
 * @method string getName()
 * @method $this withName($value)
 */
class CreateImageComponent extends Rpc
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
}

/**
 * @method string getBaseImageType()
 * @method $this withBaseImageType($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method array getToRegionId()
 * @method string getInternetMaxBandwidthOut()
 * @method $this withInternetMaxBandwidthOut($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getImageName()
 * @method $this withImageName($value)
 * @method string getSystemDiskSize()
 * @method $this withSystemDiskSize($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method array getTag()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getBaseImage()
 * @method $this withBaseImage($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method array getAddAccount()
 * @method string getDeleteInstanceOnFailure()
 * @method $this withDeleteInstanceOnFailure($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getBuildContent()
 * @method $this withBuildContent($value)
 */
class CreateImagePipeline extends Rpc
{

    /**
     * @param array $toRegionId
     *
     * @return $this
     */
	public function withToRegionId(array $toRegionId)
	{
	    $this->data['ToRegionId'] = $toRegionId;
		foreach ($toRegionId as $i => $iValue) {
			$this->options['query']['ToRegionId.' . ($i + 1)] = $iValue;
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
     * @param array $addAccount
     *
     * @return $this
     */
	public function withAddAccount(array $addAccount)
	{
	    $this->data['AddAccount'] = $addAccount;
		foreach ($addAccount as $i => $iValue) {
			$this->options['query']['AddAccount.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getHpcClusterId()
 * @method $this withHpcClusterId($value)
 * @method string getHttpPutResponseHopLimit()
 * @method $this withHttpPutResponseHopLimit($value)
 * @method string getSecurityEnhancementStrategy()
 * @method $this withSecurityEnhancementStrategy($value)
 * @method string getKeyPairName()
 * @method $this withKeyPairName($value)
 * @method string getSpotPriceLimit()
 * @method $this withSpotPriceLimit($value)
 * @method string getDeletionProtection()
 * @method $this withDeletionProtection($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getPrivatePoolOptionsMatchCriteria()
 * @method string getHostName()
 * @method $this withHostName($value)
 * @method string getPassword()
 * @method $this withPassword($value)
 * @method string getSystemDisk()
 * @method $this withSystemDisk($value)
 * @method string getDeploymentSetGroupNo()
 * @method $this withDeploymentSetGroupNo($value)
 * @method string getStorageSetPartitionNumber()
 * @method $this withStorageSetPartitionNumber($value)
 * @method array getTag()
 * @method string getPrivatePoolOptionsId()
 * @method string getAutoRenewPeriod()
 * @method $this withAutoRenewPeriod($value)
 * @method string getNodeControllerId()
 * @method $this withNodeControllerId($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getCapacityReservationPreference()
 * @method $this withCapacityReservationPreference($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getPrivateIpAddress()
 * @method $this withPrivateIpAddress($value)
 * @method string getSpotStrategy()
 * @method $this withSpotStrategy($value)
 * @method string getPeriodUnit()
 * @method $this withPeriodUnit($value)
 * @method string getInstanceName()
 * @method $this withInstanceName($value)
 * @method string getAutoRenew()
 * @method $this withAutoRenew($value)
 * @method string getInternetChargeType()
 * @method $this withInternetChargeType($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getInternetMaxBandwidthIn()
 * @method $this withInternetMaxBandwidthIn($value)
 * @method string getUseAdditionalService()
 * @method $this withUseAdditionalService($value)
 * @method string getAffinity()
 * @method $this withAffinity($value)
 * @method string getImageId()
 * @method $this withImageId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getVlanId()
 * @method $this withVlanId($value)
 * @method string getSpotInterruptionBehavior()
 * @method $this withSpotInterruptionBehavior($value)
 * @method string getIoOptimized()
 * @method $this withIoOptimized($value)
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getInternetMaxBandwidthOut()
 * @method $this withInternetMaxBandwidthOut($value)
 * @method string getHibernationOptionsConfigured()
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getSystemDiskCategory()
 * @method string getCapacityReservationId()
 * @method $this withCapacityReservationId($value)
 * @method string getSystemDiskPerformanceLevel()
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getPasswordInherit()
 * @method $this withPasswordInherit($value)
 * @method string getHttpEndpoint()
 * @method $this withHttpEndpoint($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method array getArn()
 * @method string getInstanceChargeType()
 * @method $this withInstanceChargeType($value)
 * @method string getDeploymentSetId()
 * @method $this withDeploymentSetId($value)
 * @method string getInnerIpAddress()
 * @method $this withInnerIpAddress($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getTenancy()
 * @method $this withTenancy($value)
 * @method string getSystemDiskDiskName()
 * @method string getRamRoleName()
 * @method $this withRamRoleName($value)
 * @method string getDedicatedHostId()
 * @method $this withDedicatedHostId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getCreditSpecification()
 * @method $this withCreditSpecification($value)
 * @method string getSpotDuration()
 * @method $this withSpotDuration($value)
 * @method array getDataDisk()
 * @method string getStorageSetId()
 * @method $this withStorageSetId($value)
 * @method string getSystemDiskSize()
 * @method string getImageFamily()
 * @method $this withImageFamily($value)
 * @method string getHttpTokens()
 * @method $this withHttpTokens($value)
 * @method string getSystemDiskDescription()
 */
class CreateInstance extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPrivatePoolOptionsMatchCriteria($value)
    {
        $this->data['PrivatePoolOptionsMatchCriteria'] = $value;
        $this->options['query']['PrivatePoolOptions.MatchCriteria'] = $value;

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
    public function withPrivatePoolOptionsId($value)
    {
        $this->data['PrivatePoolOptionsId'] = $value;
        $this->options['query']['PrivatePoolOptions.Id'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withHibernationOptionsConfigured($value)
    {
        $this->data['HibernationOptionsConfigured'] = $value;
        $this->options['query']['HibernationOptions.Configured'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSystemDiskCategory($value)
    {
        $this->data['SystemDiskCategory'] = $value;
        $this->options['query']['SystemDisk.Category'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSystemDiskPerformanceLevel($value)
    {
        $this->data['SystemDiskPerformanceLevel'] = $value;
        $this->options['query']['SystemDisk.PerformanceLevel'] = $value;

        return $this;
    }

    /**
     * @param array $arn
     *
     * @return $this
     */
	public function withArn(array $arn)
	{
	    $this->data['Arn'] = $arn;
		foreach ($arn as $depth1 => $depth1Value) {
			if(isset($depth1Value['Rolearn'])){
				$this->options['query']['Arn.' . ($depth1 + 1) . '.Rolearn'] = $depth1Value['Rolearn'];
			}
			if(isset($depth1Value['RoleType'])){
				$this->options['query']['Arn.' . ($depth1 + 1) . '.RoleType'] = $depth1Value['RoleType'];
			}
			if(isset($depth1Value['AssumeRoleFor'])){
				$this->options['query']['Arn.' . ($depth1 + 1) . '.AssumeRoleFor'] = $depth1Value['AssumeRoleFor'];
			}
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSystemDiskDiskName($value)
    {
        $this->data['SystemDiskDiskName'] = $value;
        $this->options['query']['SystemDisk.DiskName'] = $value;

        return $this;
    }

    /**
     * @param array $dataDisk
     *
     * @return $this
     */
	public function withDataDisk(array $dataDisk)
	{
	    $this->data['DataDisk'] = $dataDisk;
		foreach ($dataDisk as $depth1 => $depth1Value) {
			if(isset($depth1Value['DiskName'])){
				$this->options['query']['DataDisk.' . ($depth1 + 1) . '.DiskName'] = $depth1Value['DiskName'];
			}
			if(isset($depth1Value['SnapshotId'])){
				$this->options['query']['DataDisk.' . ($depth1 + 1) . '.SnapshotId'] = $depth1Value['SnapshotId'];
			}
			if(isset($depth1Value['Size'])){
				$this->options['query']['DataDisk.' . ($depth1 + 1) . '.Size'] = $depth1Value['Size'];
			}
			if(isset($depth1Value['Encrypted'])){
				$this->options['query']['DataDisk.' . ($depth1 + 1) . '.Encrypted'] = $depth1Value['Encrypted'];
			}
			if(isset($depth1Value['PerformanceLevel'])){
				$this->options['query']['DataDisk.' . ($depth1 + 1) . '.PerformanceLevel'] = $depth1Value['PerformanceLevel'];
			}
			if(isset($depth1Value['EncryptAlgorithm'])){
				$this->options['query']['DataDisk.' . ($depth1 + 1) . '.EncryptAlgorithm'] = $depth1Value['EncryptAlgorithm'];
			}
			if(isset($depth1Value['Description'])){
				$this->options['query']['DataDisk.' . ($depth1 + 1) . '.Description'] = $depth1Value['Description'];
			}
			if(isset($depth1Value['StorageClusterId'])){
				$this->options['query']['DataDisk.' . ($depth1 + 1) . '.StorageClusterId'] = $depth1Value['StorageClusterId'];
			}
			if(isset($depth1Value['Category'])){
				$this->options['query']['DataDisk.' . ($depth1 + 1) . '.Category'] = $depth1Value['Category'];
			}
			if(isset($depth1Value['KMSKeyId'])){
				$this->options['query']['DataDisk.' . ($depth1 + 1) . '.KMSKeyId'] = $depth1Value['KMSKeyId'];
			}
			if(isset($depth1Value['Device'])){
				$this->options['query']['DataDisk.' . ($depth1 + 1) . '.Device'] = $depth1Value['Device'];
			}
			if(isset($depth1Value['DeleteWithInstance'])){
				$this->options['query']['DataDisk.' . ($depth1 + 1) . '.DeleteWithInstance'] = $depth1Value['DeleteWithInstance'];
			}
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSystemDiskSize($value)
    {
        $this->data['SystemDiskSize'] = $value;
        $this->options['query']['SystemDisk.Size'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSystemDiskDescription($value)
    {
        $this->data['SystemDiskDescription'] = $value;
        $this->options['query']['SystemDisk.Description'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getKeyPairName()
 * @method $this withKeyPairName($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method array getTag()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CreateKeyPair extends Rpc
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
 * @method string getLaunchTemplateName()
 * @method $this withLaunchTemplateName($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityEnhancementStrategy()
 * @method $this withSecurityEnhancementStrategy($value)
 * @method string getNetworkType()
 * @method $this withNetworkType($value)
 * @method string getKeyPairName()
 * @method $this withKeyPairName($value)
 * @method string getSpotPriceLimit()
 * @method $this withSpotPriceLimit($value)
 * @method string getImageOwnerAlias()
 * @method $this withImageOwnerAlias($value)
 * @method string getDeletionProtection()
 * @method $this withDeletionProtection($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getHostName()
 * @method $this withHostName($value)
 * @method string getSystemDiskIops()
 * @method array getTemplateTag()
 * @method array getTag()
 * @method string getSystemDiskAutoSnapshotPolicyId()
 * @method string getAutoRenewPeriod()
 * @method $this withAutoRenewPeriod($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getIpv6AddressCount()
 * @method $this withIpv6AddressCount($value)
 * @method string getTemplateResourceGroupId()
 * @method $this withTemplateResourceGroupId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getSpotStrategy()
 * @method $this withSpotStrategy($value)
 * @method string getPrivateIpAddress()
 * @method $this withPrivateIpAddress($value)
 * @method string getSystemDiskBurstingEnabled()
 * @method string getPeriodUnit()
 * @method $this withPeriodUnit($value)
 * @method string getInstanceName()
 * @method $this withInstanceName($value)
 * @method string getAutoRenew()
 * @method $this withAutoRenew($value)
 * @method string getInternetChargeType()
 * @method $this withInternetChargeType($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getInternetMaxBandwidthIn()
 * @method $this withInternetMaxBandwidthIn($value)
 * @method string getVersionDescription()
 * @method $this withVersionDescription($value)
 * @method string getSystemDiskDeleteWithInstance()
 * @method string getImageId()
 * @method $this withImageId($value)
 * @method string getIoOptimized()
 * @method $this withIoOptimized($value)
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getInternetMaxBandwidthOut()
 * @method $this withInternetMaxBandwidthOut($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getSystemDiskCategory()
 * @method string getSystemDiskPerformanceLevel()
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getPasswordInherit()
 * @method $this withPasswordInherit($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getInstanceChargeType()
 * @method $this withInstanceChargeType($value)
 * @method string getEnableVmOsConfig()
 * @method $this withEnableVmOsConfig($value)
 * @method string getDeploymentSetId()
 * @method $this withDeploymentSetId($value)
 * @method array getNetworkInterface()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getSystemDiskDiskName()
 * @method string getRamRoleName()
 * @method $this withRamRoleName($value)
 * @method string getAutoReleaseTime()
 * @method $this withAutoReleaseTime($value)
 * @method string getCreditSpecification()
 * @method $this withCreditSpecification($value)
 * @method string getSpotDuration()
 * @method $this withSpotDuration($value)
 * @method array getSecurityGroupIds()
 * @method array getDataDisk()
 * @method string getSystemDiskProvisionedIops()
 * @method string getSystemDiskSize()
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getSystemDiskDescription()
 * @method string getSystemDiskEncrypted()
 */
class CreateLaunchTemplate extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSystemDiskIops($value)
    {
        $this->data['SystemDiskIops'] = $value;
        $this->options['query']['SystemDisk.Iops'] = $value;

        return $this;
    }

    /**
     * @param array $templateTag
     *
     * @return $this
     */
	public function withTemplateTag(array $templateTag)
	{
	    $this->data['TemplateTag'] = $templateTag;
		foreach ($templateTag as $depth1 => $depth1Value) {
			if(isset($depth1Value['Key'])){
				$this->options['query']['TemplateTag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
			if(isset($depth1Value['Value'])){
				$this->options['query']['TemplateTag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
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
     * @param string $value
     *
     * @return $this
     */
    public function withSystemDiskAutoSnapshotPolicyId($value)
    {
        $this->data['SystemDiskAutoSnapshotPolicyId'] = $value;
        $this->options['query']['SystemDisk.AutoSnapshotPolicyId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSystemDiskBurstingEnabled($value)
    {
        $this->data['SystemDiskBurstingEnabled'] = $value;
        $this->options['query']['SystemDisk.BurstingEnabled'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSystemDiskDeleteWithInstance($value)
    {
        $this->data['SystemDiskDeleteWithInstance'] = $value;
        $this->options['query']['SystemDisk.DeleteWithInstance'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSystemDiskCategory($value)
    {
        $this->data['SystemDiskCategory'] = $value;
        $this->options['query']['SystemDisk.Category'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSystemDiskPerformanceLevel($value)
    {
        $this->data['SystemDiskPerformanceLevel'] = $value;
        $this->options['query']['SystemDisk.PerformanceLevel'] = $value;

        return $this;
    }

    /**
     * @param array $networkInterface
     *
     * @return $this
     */
	public function withNetworkInterface(array $networkInterface)
	{
	    $this->data['NetworkInterface'] = $networkInterface;
		foreach ($networkInterface as $depth1 => $depth1Value) {
			if(isset($depth1Value['VSwitchId'])){
				$this->options['query']['NetworkInterface.' . ($depth1 + 1) . '.VSwitchId'] = $depth1Value['VSwitchId'];
			}
			if(isset($depth1Value['NetworkInterfaceName'])){
				$this->options['query']['NetworkInterface.' . ($depth1 + 1) . '.NetworkInterfaceName'] = $depth1Value['NetworkInterfaceName'];
			}
			if(isset($depth1Value['Description'])){
				$this->options['query']['NetworkInterface.' . ($depth1 + 1) . '.Description'] = $depth1Value['Description'];
			}
			if(isset($depth1Value['SecurityGroupId'])){
				$this->options['query']['NetworkInterface.' . ($depth1 + 1) . '.SecurityGroupId'] = $depth1Value['SecurityGroupId'];
			}
			if(isset($depth1Value['PrimaryIpAddress'])){
				$this->options['query']['NetworkInterface.' . ($depth1 + 1) . '.PrimaryIpAddress'] = $depth1Value['PrimaryIpAddress'];
			}
			foreach ($depth1Value['SecurityGroupIds'] as $i => $iValue) {
				$this->options['query']['NetworkInterface.' . ($depth1 + 1) . '.SecurityGroupIds.' . ($i + 1)] = $iValue;
			}
			if(isset($depth1Value['InstanceType'])){
				$this->options['query']['NetworkInterface.' . ($depth1 + 1) . '.InstanceType'] = $depth1Value['InstanceType'];
			}
			if(isset($depth1Value['NetworkInterfaceTrafficMode'])){
				$this->options['query']['NetworkInterface.' . ($depth1 + 1) . '.NetworkInterfaceTrafficMode'] = $depth1Value['NetworkInterfaceTrafficMode'];
			}
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSystemDiskDiskName($value)
    {
        $this->data['SystemDiskDiskName'] = $value;
        $this->options['query']['SystemDisk.DiskName'] = $value;

        return $this;
    }

    /**
     * @param array $securityGroupIds
     *
     * @return $this
     */
	public function withSecurityGroupIds(array $securityGroupIds)
	{
	    $this->data['SecurityGroupIds'] = $securityGroupIds;
		foreach ($securityGroupIds as $i => $iValue) {
			$this->options['query']['SecurityGroupIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $dataDisk
     *
     * @return $this
     */
	public function withDataDisk(array $dataDisk)
	{
	    $this->data['DataDisk'] = $dataDisk;
		foreach ($dataDisk as $depth1 => $depth1Value) {
			if(isset($depth1Value['PerformanceLevel'])){
				$this->options['query']['DataDisk.' . ($depth1 + 1) . '.PerformanceLevel'] = $depth1Value['PerformanceLevel'];
			}
			if(isset($depth1Value['Description'])){
				$this->options['query']['DataDisk.' . ($depth1 + 1) . '.Description'] = $depth1Value['Description'];
			}
			if(isset($depth1Value['SnapshotId'])){
				$this->options['query']['DataDisk.' . ($depth1 + 1) . '.SnapshotId'] = $depth1Value['SnapshotId'];
			}
			if(isset($depth1Value['Size'])){
				$this->options['query']['DataDisk.' . ($depth1 + 1) . '.Size'] = $depth1Value['Size'];
			}
			if(isset($depth1Value['Device'])){
				$this->options['query']['DataDisk.' . ($depth1 + 1) . '.Device'] = $depth1Value['Device'];
			}
			if(isset($depth1Value['DiskName'])){
				$this->options['query']['DataDisk.' . ($depth1 + 1) . '.DiskName'] = $depth1Value['DiskName'];
			}
			if(isset($depth1Value['Category'])){
				$this->options['query']['DataDisk.' . ($depth1 + 1) . '.Category'] = $depth1Value['Category'];
			}
			if(isset($depth1Value['DeleteWithInstance'])){
				$this->options['query']['DataDisk.' . ($depth1 + 1) . '.DeleteWithInstance'] = $depth1Value['DeleteWithInstance'];
			}
			if(isset($depth1Value['Encrypted'])){
				$this->options['query']['DataDisk.' . ($depth1 + 1) . '.Encrypted'] = $depth1Value['Encrypted'];
			}
			if(isset($depth1Value['AutoSnapshotPolicyId'])){
				$this->options['query']['DataDisk.' . ($depth1 + 1) . '.AutoSnapshotPolicyId'] = $depth1Value['AutoSnapshotPolicyId'];
			}
			if(isset($depth1Value['ProvisionedIops'])){
				$this->options['query']['DataDisk.' . ($depth1 + 1) . '.ProvisionedIops'] = $depth1Value['ProvisionedIops'];
			}
			if(isset($depth1Value['BurstingEnabled'])){
				$this->options['query']['DataDisk.' . ($depth1 + 1) . '.BurstingEnabled'] = $depth1Value['BurstingEnabled'];
			}
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSystemDiskProvisionedIops($value)
    {
        $this->data['SystemDiskProvisionedIops'] = $value;
        $this->options['query']['SystemDisk.ProvisionedIops'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSystemDiskSize($value)
    {
        $this->data['SystemDiskSize'] = $value;
        $this->options['query']['SystemDisk.Size'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSystemDiskDescription($value)
    {
        $this->data['SystemDiskDescription'] = $value;
        $this->options['query']['SystemDisk.Description'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSystemDiskEncrypted($value)
    {
        $this->data['SystemDiskEncrypted'] = $value;
        $this->options['query']['SystemDisk.Encrypted'] = $value;

        return $this;
    }
}

/**
 * @method string getLaunchTemplateName()
 * @method $this withLaunchTemplateName($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityEnhancementStrategy()
 * @method $this withSecurityEnhancementStrategy($value)
 * @method string getNetworkType()
 * @method $this withNetworkType($value)
 * @method string getKeyPairName()
 * @method $this withKeyPairName($value)
 * @method string getSpotPriceLimit()
 * @method $this withSpotPriceLimit($value)
 * @method string getImageOwnerAlias()
 * @method $this withImageOwnerAlias($value)
 * @method string getDeletionProtection()
 * @method $this withDeletionProtection($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getHostName()
 * @method $this withHostName($value)
 * @method string getSystemDiskIops()
 * @method array getTag()
 * @method string getSystemDiskAutoSnapshotPolicyId()
 * @method string getAutoRenewPeriod()
 * @method $this withAutoRenewPeriod($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getLaunchTemplateId()
 * @method $this withLaunchTemplateId($value)
 * @method string getIpv6AddressCount()
 * @method $this withIpv6AddressCount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getSpotStrategy()
 * @method $this withSpotStrategy($value)
 * @method string getPrivateIpAddress()
 * @method $this withPrivateIpAddress($value)
 * @method string getSystemDiskBurstingEnabled()
 * @method string getPeriodUnit()
 * @method $this withPeriodUnit($value)
 * @method string getInstanceName()
 * @method $this withInstanceName($value)
 * @method string getAutoRenew()
 * @method $this withAutoRenew($value)
 * @method string getInternetChargeType()
 * @method $this withInternetChargeType($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getInternetMaxBandwidthIn()
 * @method $this withInternetMaxBandwidthIn($value)
 * @method string getVersionDescription()
 * @method $this withVersionDescription($value)
 * @method string getSystemDiskDeleteWithInstance()
 * @method string getImageId()
 * @method $this withImageId($value)
 * @method string getIoOptimized()
 * @method $this withIoOptimized($value)
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getInternetMaxBandwidthOut()
 * @method $this withInternetMaxBandwidthOut($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getSystemDiskCategory()
 * @method string getSystemDiskPerformanceLevel()
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getPasswordInherit()
 * @method $this withPasswordInherit($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getInstanceChargeType()
 * @method $this withInstanceChargeType($value)
 * @method string getEnableVmOsConfig()
 * @method $this withEnableVmOsConfig($value)
 * @method string getDeploymentSetId()
 * @method $this withDeploymentSetId($value)
 * @method array getNetworkInterface()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getSystemDiskDiskName()
 * @method string getRamRoleName()
 * @method $this withRamRoleName($value)
 * @method string getAutoReleaseTime()
 * @method $this withAutoReleaseTime($value)
 * @method string getCreditSpecification()
 * @method $this withCreditSpecification($value)
 * @method string getSpotDuration()
 * @method $this withSpotDuration($value)
 * @method array getSecurityGroupIds()
 * @method array getDataDisk()
 * @method string getSystemDiskProvisionedIops()
 * @method string getSystemDiskSize()
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getSystemDiskDescription()
 * @method string getSystemDiskEncrypted()
 */
class CreateLaunchTemplateVersion extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSystemDiskIops($value)
    {
        $this->data['SystemDiskIops'] = $value;
        $this->options['query']['SystemDisk.Iops'] = $value;

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
     * @param string $value
     *
     * @return $this
     */
    public function withSystemDiskAutoSnapshotPolicyId($value)
    {
        $this->data['SystemDiskAutoSnapshotPolicyId'] = $value;
        $this->options['query']['SystemDisk.AutoSnapshotPolicyId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSystemDiskBurstingEnabled($value)
    {
        $this->data['SystemDiskBurstingEnabled'] = $value;
        $this->options['query']['SystemDisk.BurstingEnabled'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSystemDiskDeleteWithInstance($value)
    {
        $this->data['SystemDiskDeleteWithInstance'] = $value;
        $this->options['query']['SystemDisk.DeleteWithInstance'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSystemDiskCategory($value)
    {
        $this->data['SystemDiskCategory'] = $value;
        $this->options['query']['SystemDisk.Category'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSystemDiskPerformanceLevel($value)
    {
        $this->data['SystemDiskPerformanceLevel'] = $value;
        $this->options['query']['SystemDisk.PerformanceLevel'] = $value;

        return $this;
    }

    /**
     * @param array $networkInterface
     *
     * @return $this
     */
	public function withNetworkInterface(array $networkInterface)
	{
	    $this->data['NetworkInterface'] = $networkInterface;
		foreach ($networkInterface as $depth1 => $depth1Value) {
			if(isset($depth1Value['VSwitchId'])){
				$this->options['query']['NetworkInterface.' . ($depth1 + 1) . '.VSwitchId'] = $depth1Value['VSwitchId'];
			}
			if(isset($depth1Value['NetworkInterfaceName'])){
				$this->options['query']['NetworkInterface.' . ($depth1 + 1) . '.NetworkInterfaceName'] = $depth1Value['NetworkInterfaceName'];
			}
			if(isset($depth1Value['Description'])){
				$this->options['query']['NetworkInterface.' . ($depth1 + 1) . '.Description'] = $depth1Value['Description'];
			}
			if(isset($depth1Value['SecurityGroupId'])){
				$this->options['query']['NetworkInterface.' . ($depth1 + 1) . '.SecurityGroupId'] = $depth1Value['SecurityGroupId'];
			}
			if(isset($depth1Value['PrimaryIpAddress'])){
				$this->options['query']['NetworkInterface.' . ($depth1 + 1) . '.PrimaryIpAddress'] = $depth1Value['PrimaryIpAddress'];
			}
			foreach ($depth1Value['SecurityGroupIds'] as $i => $iValue) {
				$this->options['query']['NetworkInterface.' . ($depth1 + 1) . '.SecurityGroupIds.' . ($i + 1)] = $iValue;
			}
			if(isset($depth1Value['InstanceType'])){
				$this->options['query']['NetworkInterface.' . ($depth1 + 1) . '.InstanceType'] = $depth1Value['InstanceType'];
			}
			if(isset($depth1Value['NetworkInterfaceTrafficMode'])){
				$this->options['query']['NetworkInterface.' . ($depth1 + 1) . '.NetworkInterfaceTrafficMode'] = $depth1Value['NetworkInterfaceTrafficMode'];
			}
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSystemDiskDiskName($value)
    {
        $this->data['SystemDiskDiskName'] = $value;
        $this->options['query']['SystemDisk.DiskName'] = $value;

        return $this;
    }

    /**
     * @param array $securityGroupIds
     *
     * @return $this
     */
	public function withSecurityGroupIds(array $securityGroupIds)
	{
	    $this->data['SecurityGroupIds'] = $securityGroupIds;
		foreach ($securityGroupIds as $i => $iValue) {
			$this->options['query']['SecurityGroupIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $dataDisk
     *
     * @return $this
     */
	public function withDataDisk(array $dataDisk)
	{
	    $this->data['DataDisk'] = $dataDisk;
		foreach ($dataDisk as $depth1 => $depth1Value) {
			if(isset($depth1Value['PerformanceLevel'])){
				$this->options['query']['DataDisk.' . ($depth1 + 1) . '.PerformanceLevel'] = $depth1Value['PerformanceLevel'];
			}
			if(isset($depth1Value['Description'])){
				$this->options['query']['DataDisk.' . ($depth1 + 1) . '.Description'] = $depth1Value['Description'];
			}
			if(isset($depth1Value['SnapshotId'])){
				$this->options['query']['DataDisk.' . ($depth1 + 1) . '.SnapshotId'] = $depth1Value['SnapshotId'];
			}
			if(isset($depth1Value['Size'])){
				$this->options['query']['DataDisk.' . ($depth1 + 1) . '.Size'] = $depth1Value['Size'];
			}
			if(isset($depth1Value['Device'])){
				$this->options['query']['DataDisk.' . ($depth1 + 1) . '.Device'] = $depth1Value['Device'];
			}
			if(isset($depth1Value['DiskName'])){
				$this->options['query']['DataDisk.' . ($depth1 + 1) . '.DiskName'] = $depth1Value['DiskName'];
			}
			if(isset($depth1Value['Category'])){
				$this->options['query']['DataDisk.' . ($depth1 + 1) . '.Category'] = $depth1Value['Category'];
			}
			if(isset($depth1Value['DeleteWithInstance'])){
				$this->options['query']['DataDisk.' . ($depth1 + 1) . '.DeleteWithInstance'] = $depth1Value['DeleteWithInstance'];
			}
			if(isset($depth1Value['Encrypted'])){
				$this->options['query']['DataDisk.' . ($depth1 + 1) . '.Encrypted'] = $depth1Value['Encrypted'];
			}
			if(isset($depth1Value['ProvisionedIops'])){
				$this->options['query']['DataDisk.' . ($depth1 + 1) . '.ProvisionedIops'] = $depth1Value['ProvisionedIops'];
			}
			if(isset($depth1Value['BurstingEnabled'])){
				$this->options['query']['DataDisk.' . ($depth1 + 1) . '.BurstingEnabled'] = $depth1Value['BurstingEnabled'];
			}
			if(isset($depth1Value['AutoSnapshotPolicyId'])){
				$this->options['query']['DataDisk.' . ($depth1 + 1) . '.AutoSnapshotPolicyId'] = $depth1Value['AutoSnapshotPolicyId'];
			}
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSystemDiskProvisionedIops($value)
    {
        $this->data['SystemDiskProvisionedIops'] = $value;
        $this->options['query']['SystemDisk.ProvisionedIops'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSystemDiskSize($value)
    {
        $this->data['SystemDiskSize'] = $value;
        $this->options['query']['SystemDisk.Size'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSystemDiskDescription($value)
    {
        $this->data['SystemDiskDescription'] = $value;
        $this->options['query']['SystemDisk.Description'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSystemDiskEncrypted($value)
    {
        $this->data['SystemDiskEncrypted'] = $value;
        $this->options['query']['SystemDisk.Encrypted'] = $value;

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
 * @method array getBandwidthPackage()
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
class CreateNatGateway extends Rpc
{

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
			if(isset($depth1Value['IpCount'])){
				$this->options['query']['BandwidthPackage.' . ($depth1 + 1) . '.IpCount'] = $depth1Value['IpCount'];
			}
		}

		return $this;
    }
}

/**
 * @method string getQueueNumber()
 * @method $this withQueueNumber($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method array getIpv4Prefix()
 * @method string getNetworkInterfaceTrafficConfig()
 * @method $this withNetworkInterfaceTrafficConfig($value)
 * @method string getSecondaryPrivateIpAddressCount()
 * @method $this withSecondaryPrivateIpAddressCount($value)
 * @method string getBusinessType()
 * @method $this withBusinessType($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getEnhancedNetwork()
 * @method $this withEnhancedNetwork($value)
 * @method array getTag()
 * @method string getNetworkInterfaceName()
 * @method $this withNetworkInterfaceName($value)
 * @method string getVisible()
 * @method $this withVisible($value)
 * @method string getIpv6AddressCount()
 * @method $this withIpv6AddressCount($value)
 * @method string getRxQueueSize()
 * @method $this withRxQueueSize($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method array getPrivateIpAddress()
 * @method array getIpv6Address()
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method array getIpv6Prefix()
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getIpv6PrefixCount()
 * @method $this withIpv6PrefixCount($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getTxQueueSize()
 * @method $this withTxQueueSize($value)
 * @method string getDeleteOnRelease()
 * @method $this withDeleteOnRelease($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getQueuePairNumber()
 * @method $this withQueuePairNumber($value)
 * @method array getSecurityGroupIds()
 * @method string getNetworkInterfaceTrafficMode()
 * @method $this withNetworkInterfaceTrafficMode($value)
 * @method string getIpv4PrefixCount()
 * @method $this withIpv4PrefixCount($value)
 * @method string getConnectionTrackingConfiguration()
 * @method $this withConnectionTrackingConfiguration($value)
 * @method string getPrimaryIpAddress()
 * @method $this withPrimaryIpAddress($value)
 */
class CreateNetworkInterface extends Rpc
{

    /**
     * @param array $ipv4Prefix
     *
     * @return $this
     */
	public function withIpv4Prefix(array $ipv4Prefix)
	{
	    $this->data['Ipv4Prefix'] = $ipv4Prefix;
		foreach ($ipv4Prefix as $i => $iValue) {
			$this->options['query']['Ipv4Prefix.' . ($i + 1)] = $iValue;
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
     * @param array $privateIpAddress
     *
     * @return $this
     */
	public function withPrivateIpAddress(array $privateIpAddress)
	{
	    $this->data['PrivateIpAddress'] = $privateIpAddress;
		foreach ($privateIpAddress as $i => $iValue) {
			$this->options['query']['PrivateIpAddress.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $ipv6Address
     *
     * @return $this
     */
	public function withIpv6Address(array $ipv6Address)
	{
	    $this->data['Ipv6Address'] = $ipv6Address;
		foreach ($ipv6Address as $i => $iValue) {
			$this->options['query']['Ipv6Address.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $ipv6Prefix
     *
     * @return $this
     */
	public function withIpv6Prefix(array $ipv6Prefix)
	{
	    $this->data['Ipv6Prefix'] = $ipv6Prefix;
		foreach ($ipv6Prefix as $i => $iValue) {
			$this->options['query']['Ipv6Prefix.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $securityGroupIds
     *
     * @return $this
     */
	public function withSecurityGroupIds(array $securityGroupIds)
	{
	    $this->data['SecurityGroupIds'] = $securityGroupIds;
		foreach ($securityGroupIds as $i => $iValue) {
			$this->options['query']['SecurityGroupIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAccountId()
 * @method $this withAccountId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getPermission()
 * @method $this withPermission($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getNetworkInterfaceId()
 * @method $this withNetworkInterfaceId($value)
 */
class CreateNetworkInterfacePermission extends Rpc
{
}

/**
 * @method string getAccessPointId()
 * @method $this withAccessPointId($value)
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
 * @method string getUserCidr()
 * @method $this withUserCidr($value)
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
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getMaxEntries()
 * @method $this withMaxEntries($value)
 * @method string getAddressFamily()
 * @method $this withAddressFamily($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPrefixListName()
 * @method $this withPrefixListName($value)
 * @method array getEntry()
 */
class CreatePrefixList extends Rpc
{

    /**
     * @param array $entry
     *
     * @return $this
     */
	public function withEntry(array $entry)
	{
	    $this->data['Entry'] = $entry;
		foreach ($entry as $depth1 => $depth1Value) {
			if(isset($depth1Value['Description'])){
				$this->options['query']['Entry.' . ($depth1 + 1) . '.Description'] = $depth1Value['Description'];
			}
			if(isset($depth1Value['Cidr'])){
				$this->options['query']['Entry.' . ($depth1 + 1) . '.Cidr'] = $depth1Value['Cidr'];
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
 * @method string getUserCidr()
 * @method $this withUserCidr($value)
 * @method string getOppositeInterfaceId()
 * @method $this withOppositeInterfaceId($value)
 * @method string getInstanceChargeType()
 * @method $this withInstanceChargeType($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getAutoPay()
 * @method $this withAutoPay($value)
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
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method array getResourceId()
 * @method string getInstanceTypeFamily()
 * @method $this withInstanceTypeFamily($value)
 * @method string getPlanType()
 * @method $this withPlanType($value)
 * @method string getPeriodUnit()
 * @method $this withPeriodUnit($value)
 * @method string getOfferingType()
 * @method $this withOfferingType($value)
 * @method string getChargeType()
 * @method $this withChargeType($value)
 * @method string getCommittedAmount()
 * @method $this withCommittedAmount($value)
 */
class CreateSavingsPlan extends Rpc
{

    /** @var string */
    public $scheme = 'https';

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
 * @method string getServiceManaged()
 * @method $this withServiceManaged($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getSecurityGroupName()
 * @method $this withSecurityGroupName($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method array getTag()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSecurityGroupType()
 * @method $this withSecurityGroupType($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 */
class CreateSecurityGroup extends Rpc
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
 * @method string getNotBefore()
 * @method $this withNotBefore($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method array getInstanceId()
 * @method string getEventType()
 * @method $this withEventType($value)
 */
class CreateSimulatedSystemEvents extends Rpc
{

    /**
     * @param array $instanceId
     *
     * @return $this
     */
	public function withInstanceId(array $instanceId)
	{
	    $this->data['InstanceId'] = $instanceId;
		foreach ($instanceId as $i => $iValue) {
			$this->options['query']['InstanceId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getInstantAccess()
 * @method $this withInstantAccess($value)
 * @method array getSystemTag()
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getSnapshotName()
 * @method $this withSnapshotName($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getInstantAccessRetentionDays()
 * @method $this withInstantAccessRetentionDays($value)
 * @method string getStorageLocationArn()
 * @method $this withStorageLocationArn($value)
 * @method string getDiskId()
 * @method $this withDiskId($value)
 * @method array getTag()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRetentionDays()
 * @method $this withRetentionDays($value)
 * @method string getCategory()
 * @method $this withCategory($value)
 */
class CreateSnapshot extends Rpc
{

    /**
     * @param array $systemTag
     *
     * @return $this
     */
	public function withSystemTag(array $systemTag)
	{
	    $this->data['SystemTag'] = $systemTag;
		foreach ($systemTag as $depth1 => $depth1Value) {
			if(isset($depth1Value['Scope'])){
				$this->options['query']['SystemTag.' . ($depth1 + 1) . '.Scope'] = $depth1Value['Scope'];
			}
			if(isset($depth1Value['Value'])){
				$this->options['query']['SystemTag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['SystemTag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
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
 * @method string getInstantAccess()
 * @method $this withInstantAccess($value)
 * @method array getExcludeDiskId()
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getInstantAccessRetentionDays()
 * @method $this withInstantAccessRetentionDays($value)
 * @method string getStorageLocationArn()
 * @method $this withStorageLocationArn($value)
 * @method array getDiskId()
 * @method array getTag()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class CreateSnapshotGroup extends Rpc
{

    /**
     * @param array $excludeDiskId
     *
     * @return $this
     */
	public function withExcludeDiskId(array $excludeDiskId)
	{
	    $this->data['ExcludeDiskId'] = $excludeDiskId;
		foreach ($excludeDiskId as $i => $iValue) {
			$this->options['query']['ExcludeDiskId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $diskId
     *
     * @return $this
     */
	public function withDiskId(array $diskId)
	{
	    $this->data['DiskId'] = $diskId;
		foreach ($diskId as $i => $iValue) {
			$this->options['query']['DiskId.' . ($i + 1)] = $iValue;
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
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
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
 * @method string getMaxPartitionNumber()
 * @method $this withMaxPartitionNumber($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getStorageSetName()
 * @method $this withStorageSetName($value)
 */
class CreateStorageSet extends Rpc
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
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getPeerGatewayIp()
 * @method $this withPeerGatewayIp($value)
 * @method string getPeeringSubnetMask()
 * @method $this withPeeringSubnetMask($value)
 * @method string getLocalGatewayIp()
 * @method $this withLocalGatewayIp($value)
 * @method string getUserCidr()
 * @method $this withUserCidr($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPhysicalConnectionId()
 * @method $this withPhysicalConnectionId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getVbrOwnerId()
 * @method $this withVbrOwnerId($value)
 */
class CreateVirtualBorderRouter extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getVpcName()
 * @method $this withVpcName($value)
 * @method string getUserCidr()
 * @method $this withUserCidr($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
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
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
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
 * @method string getActivationId()
 * @method $this withActivationId($value)
 */
class DeleteActivation extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTerminateInstances()
 * @method $this withTerminateInstances($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAutoProvisioningGroupId()
 * @method $this withAutoProvisioningGroupId($value)
 */
class DeleteAutoProvisioningGroup extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAutoSnapshotPolicyId()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteAutoSnapshotPolicy extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAutoSnapshotPolicyId($value)
    {
        $this->data['AutoSnapshotPolicyId'] = $value;
        $this->options['query']['autoSnapshotPolicyId'] = $value;

        return $this;
    }
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
 */
class DeleteBandwidthPackage extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCommandId()
 * @method $this withCommandId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteCommand extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDedicatedHostClusterId()
 * @method $this withDedicatedHostClusterId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteDedicatedHostCluster extends Rpc
{
}

/**
 * @method string getReason()
 * @method $this withReason($value)
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
 * @method string getDemandId()
 * @method $this withDemandId($value)
 */
class DeleteDemand extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDeploymentSetId()
 * @method $this withDeploymentSetId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteDeploymentSet extends Rpc
{
}

/**
 * @method array getMetricSetIds()
 */
class DeleteDiagnosticMetricSets extends Rpc
{

    /**
     * @param array $metricSetIds
     *
     * @return $this
     */
	public function withMetricSetIds(array $metricSetIds)
	{
	    $this->data['MetricSetIds'] = $metricSetIds;
		foreach ($metricSetIds as $i => $iValue) {
			$this->options['query']['MetricSetIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method array getReportIds()
 */
class DeleteDiagnosticReports extends Rpc
{

    /**
     * @param array $reportIds
     *
     * @return $this
     */
	public function withReportIds(array $reportIds)
	{
	    $this->data['ReportIds'] = $reportIds;
		foreach ($reportIds as $i => $iValue) {
			$this->options['query']['ReportIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDiskId()
 * @method $this withDiskId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteDisk extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
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
 * @method string getHpcClusterId()
 * @method $this withHpcClusterId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteHpcCluster extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getImageId()
 * @method $this withImageId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getForce()
 * @method $this withForce($value)
 */
class DeleteImage extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getImageComponentId()
 * @method $this withImageComponentId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteImageComponent extends Rpc
{
}

/**
 * @method string getImagePipelineId()
 * @method $this withImagePipelineId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteImagePipeline extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTerminateSubscription()
 * @method $this withTerminateSubscription($value)
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
 * @method string getForce()
 * @method $this withForce($value)
 */
class DeleteInstance extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getTerminateSubscription()
 * @method $this withTerminateSubscription($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method array getInstanceId()
 * @method string getForce()
 * @method $this withForce($value)
 */
class DeleteInstances extends Rpc
{

    /**
     * @param array $instanceId
     *
     * @return $this
     */
	public function withInstanceId(array $instanceId)
	{
	    $this->data['InstanceId'] = $instanceId;
		foreach ($instanceId as $i => $iValue) {
			$this->options['query']['InstanceId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getKeyPairNames()
 * @method $this withKeyPairNames($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteKeyPairs extends Rpc
{
}

/**
 * @method string getLaunchTemplateName()
 * @method $this withLaunchTemplateName($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getLaunchTemplateId()
 * @method $this withLaunchTemplateId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteLaunchTemplate extends Rpc
{
}

/**
 * @method string getLaunchTemplateName()
 * @method $this withLaunchTemplateName($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method array getDeleteVersion()
 * @method string getLaunchTemplateId()
 * @method $this withLaunchTemplateId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteLaunchTemplateVersion extends Rpc
{

    /**
     * @param array $deleteVersion
     *
     * @return $this
     */
	public function withDeleteVersion(array $deleteVersion)
	{
	    $this->data['DeleteVersion'] = $deleteVersion;
		foreach ($deleteVersion as $i => $iValue) {
			$this->options['query']['DeleteVersion.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
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
class DeleteNatGateway extends Rpc
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
 * @method string getNetworkInterfaceId()
 * @method $this withNetworkInterfaceId($value)
 */
class DeleteNetworkInterface extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getNetworkInterfacePermissionId()
 * @method $this withNetworkInterfacePermissionId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getForce()
 * @method $this withForce($value)
 */
class DeleteNetworkInterfacePermission extends Rpc
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
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPrefixListId()
 * @method $this withPrefixListId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeletePrefixList extends Rpc
{
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
 * @method string getUserCidr()
 * @method $this withUserCidr($value)
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
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteSecurityGroup extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSnapshotId()
 * @method $this withSnapshotId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getForce()
 * @method $this withForce($value)
 */
class DeleteSnapshot extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getSnapshotGroupId()
 * @method $this withSnapshotGroupId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteSnapshotGroup extends Rpc
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
 * @method string getStorageSetId()
 * @method $this withStorageSetId($value)
 */
class DeleteStorageSet extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getVbrId()
 * @method $this withVbrId($value)
 * @method string getUserCidr()
 * @method $this withUserCidr($value)
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
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DeregisterManagedInstance extends Rpc
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
 * @method array getAttributeName()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 */
class DescribeAccountAttributes extends Rpc
{

    /**
     * @param array $attributeName
     *
     * @return $this
     */
	public function withAttributeName(array $attributeName)
	{
	    $this->data['AttributeName'] = $attributeName;
		foreach ($attributeName as $i => $iValue) {
			$this->options['query']['AttributeName.' . ($i + 1)] = $iValue;
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
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method array getTag()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInstanceName()
 * @method $this withInstanceName($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getActivationId()
 * @method $this withActivationId($value)
 */
class DescribeActivations extends Rpc
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
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAutoProvisioningGroupId()
 * @method $this withAutoProvisioningGroupId($value)
 */
class DescribeAutoProvisioningGroupHistory extends Rpc
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
 * @method string getAutoProvisioningGroupId()
 * @method $this withAutoProvisioningGroupId($value)
 */
class DescribeAutoProvisioningGroupInstances extends Rpc
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
 * @method array getTag()
 * @method array getAutoProvisioningGroupStatus()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method array getAutoProvisioningGroupId()
 * @method string getAutoProvisioningGroupName()
 * @method $this withAutoProvisioningGroupName($value)
 */
class DescribeAutoProvisioningGroups extends Rpc
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
     * @param array $autoProvisioningGroupStatus
     *
     * @return $this
     */
	public function withAutoProvisioningGroupStatus(array $autoProvisioningGroupStatus)
	{
	    $this->data['AutoProvisioningGroupStatus'] = $autoProvisioningGroupStatus;
		foreach ($autoProvisioningGroupStatus as $i => $iValue) {
			$this->options['query']['AutoProvisioningGroupStatus.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $autoProvisioningGroupId
     *
     * @return $this
     */
	public function withAutoProvisioningGroupId(array $autoProvisioningGroupId)
	{
	    $this->data['AutoProvisioningGroupId'] = $autoProvisioningGroupId;
		foreach ($autoProvisioningGroupId as $i => $iValue) {
			$this->options['query']['AutoProvisioningGroupId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAutoSnapshotPolicyId()
 * @method $this withAutoSnapshotPolicyId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method array getTag()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAutoSnapshotPolicyName()
 * @method $this withAutoSnapshotPolicyName($value)
 */
class DescribeAutoSnapshotPolicyEx extends Rpc
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
 * @method string getMemory()
 * @method $this withMemory($value)
 * @method string getIoOptimized()
 * @method $this withIoOptimized($value)
 * @method string getDataDiskCategory()
 * @method $this withDataDiskCategory($value)
 * @method string getCores()
 * @method $this withCores($value)
 * @method string getSystemDiskCategory()
 * @method $this withSystemDiskCategory($value)
 * @method string getScope()
 * @method $this withScope($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getNetworkCategory()
 * @method $this withNetworkCategory($value)
 * @method string getInstanceChargeType()
 * @method $this withInstanceChargeType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDedicatedHostId()
 * @method $this withDedicatedHostId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSpotDuration()
 * @method $this withSpotDuration($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getSpotStrategy()
 * @method $this withSpotStrategy($value)
 * @method string getDestinationResource()
 * @method $this withDestinationResource($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 */
class DescribeAvailableResource extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getInstanceChargeType()
 * @method $this withInstanceChargeType($value)
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOperationType()
 * @method $this withOperationType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSpotStrategy()
 * @method $this withSpotStrategy($value)
 */
class DescribeBandwidthLimitation extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getNatGatewayId()
 * @method $this withNatGatewayId($value)
 * @method string getBandwidthPackageId()
 * @method $this withBandwidthPackageId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeBandwidthPackages extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getPrivatePoolOptionsId()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getPackageType()
 * @method $this withPackageType($value)
 */
class DescribeCapacityReservationInstances extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPrivatePoolOptionsId($value)
    {
        $this->data['PrivatePoolOptionsId'] = $value;
        $this->options['query']['PrivatePoolOptions.Id'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPlatform()
 * @method $this withPlatform($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method array getTag()
 * @method string getInstanceChargeType()
 * @method $this withInstanceChargeType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPrivatePoolOptionsIds()
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getPackageType()
 * @method $this withPackageType($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeCapacityReservations extends Rpc
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
     * @param string $value
     *
     * @return $this
     */
    public function withPrivatePoolOptionsIds($value)
    {
        $this->data['PrivatePoolOptionsIds'] = $value;
        $this->options['query']['PrivatePoolOptions.Ids'] = $value;

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
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 */
class DescribeClassicLinkInstances extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method array getSettingType()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeCloudAssistantSettings extends Rpc
{

    /**
     * @param array $settingType
     *
     * @return $this
     */
	public function withSettingType(array $settingType)
	{
	    $this->data['SettingType'] = $settingType;
		foreach ($settingType as $i => $iValue) {
			$this->options['query']['SettingType.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOSType()
 * @method $this withOSType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method array getInstanceId()
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class DescribeCloudAssistantStatus extends Rpc
{

    /**
     * @param array $instanceId
     *
     * @return $this
     */
	public function withInstanceId(array $instanceId)
	{
	    $this->data['InstanceId'] = $instanceId;
		foreach ($instanceId as $i => $iValue) {
			$this->options['query']['InstanceId.' . ($i + 1)] = $iValue;
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
 */
class DescribeClusters extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getCommandId()
 * @method $this withCommandId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getProvider()
 * @method $this withProvider($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getContentEncoding()
 * @method $this withContentEncoding($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method array getTag()
 * @method string getLatest()
 * @method $this withLatest($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class DescribeCommands extends Rpc
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
}

/**
 * @method string getDedicatedHostIds()
 * @method $this withDedicatedHostIds($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeDedicatedHostAutoRenew extends Rpc
{
}

/**
 * @method string getDedicatedHostClusterName()
 * @method $this withDedicatedHostClusterName($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDedicatedHostClusterIds()
 * @method $this withDedicatedHostClusterIds($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getLockReason()
 * @method $this withLockReason($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method array getTag()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeDedicatedHostClusters extends Rpc
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
}

/**
 * @method string getDedicatedHostIds()
 * @method $this withDedicatedHostIds($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSocketDetails()
 * @method $this withSocketDetails($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getLockReason()
 * @method $this withLockReason($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDedicatedHostClusterId()
 * @method $this withDedicatedHostClusterId($value)
 * @method string getDedicatedHostType()
 * @method $this withDedicatedHostType($value)
 * @method array getTag()
 * @method string getNeedHostDetail()
 * @method $this withNeedHostDetail($value)
 * @method string getDedicatedHostName()
 * @method $this withDedicatedHostName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeDedicatedHosts extends Rpc
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
 * @method string getSupportedInstanceTypeFamily()
 * @method $this withSupportedInstanceTypeFamily($value)
 * @method string getDedicatedHostType()
 * @method $this withDedicatedHostType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeDedicatedHostTypes extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method array getTag()
 * @method string getInstanceChargeType()
 * @method $this withInstanceChargeType($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getInstanceTypeFamily()
 * @method $this withInstanceTypeFamily($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method array getDemandStatus()
 * @method string getDemandId()
 * @method $this withDemandId($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getDemandType()
 * @method $this withDemandType($value)
 */
class DescribeDemands extends Rpc
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
     * @param array $demandStatus
     *
     * @return $this
     */
	public function withDemandStatus(array $demandStatus)
	{
	    $this->data['DemandStatus'] = $demandStatus;
		foreach ($demandStatus as $i => $iValue) {
			$this->options['query']['DemandStatus.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getNetworkType()
 * @method $this withNetworkType($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getDeploymentSetIds()
 * @method $this withDeploymentSetIds($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDeploymentSetName()
 * @method $this withDeploymentSetName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getGranularity()
 * @method $this withGranularity($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 * @method string getStrategy()
 * @method $this withStrategy($value)
 */
class DescribeDeploymentSets extends Rpc
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
 * @method string getStrategy()
 * @method $this withStrategy($value)
 */
class DescribeDeploymentSetSupportedInstanceTypeFamily extends Rpc
{
}

/**
 * @method array getMetricIds()
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class DescribeDiagnosticMetrics extends Rpc
{

    /**
     * @param array $metricIds
     *
     * @return $this
     */
	public function withMetricIds(array $metricIds)
	{
	    $this->data['MetricIds'] = $metricIds;
		foreach ($metricIds as $i => $iValue) {
			$this->options['query']['MetricIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method array getMetricSetIds()
 * @method string getType()
 * @method $this withType($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class DescribeDiagnosticMetricSets extends Rpc
{

    /**
     * @param array $metricSetIds
     *
     * @return $this
     */
	public function withMetricSetIds(array $metricSetIds)
	{
	    $this->data['MetricSetIds'] = $metricSetIds;
		foreach ($metricSetIds as $i => $iValue) {
			$this->options['query']['MetricSetIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getReportId()
 * @method $this withReportId($value)
 */
class DescribeDiagnosticReportAttributes extends Rpc
{
}

/**
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getSeverity()
 * @method $this withSeverity($value)
 * @method array getReportIds()
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 * @method array getResourceIds()
 */
class DescribeDiagnosticReports extends Rpc
{

    /**
     * @param array $reportIds
     *
     * @return $this
     */
	public function withReportIds(array $reportIds)
	{
	    $this->data['ReportIds'] = $reportIds;
		foreach ($reportIds as $i => $iValue) {
			$this->options['query']['ReportIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $resourceIds
     *
     * @return $this
     */
	public function withResourceIds(array $resourceIds)
	{
	    $this->data['ResourceIds'] = $resourceIds;
		foreach ($resourceIds as $i => $iValue) {
			$this->options['query']['ResourceIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 */
class DescribeDiskDefaultKMSKeyId extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 */
class DescribeDiskEncryptionByDefaultStatus extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getDiskId()
 * @method $this withDiskId($value)
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
class DescribeDiskMonitorData extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getFilter2Value()
 * @method string getAutoSnapshotPolicyId()
 * @method $this withAutoSnapshotPolicyId($value)
 * @method string getDiskName()
 * @method $this withDiskName($value)
 * @method string getDeleteAutoSnapshot()
 * @method $this withDeleteAutoSnapshot($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getDiskChargeType()
 * @method $this withDiskChargeType($value)
 * @method string getLockReason()
 * @method $this withLockReason($value)
 * @method string getFilter1Key()
 * @method array getTag()
 * @method string getEnableAutoSnapshot()
 * @method $this withEnableAutoSnapshot($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getFilter1Value()
 * @method string getPortable()
 * @method $this withPortable($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method array getAdditionalAttributes()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 * @method string getSnapshotId()
 * @method $this withSnapshotId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDiskIds()
 * @method $this withDiskIds($value)
 * @method string getMultiAttach()
 * @method $this withMultiAttach($value)
 * @method string getDeleteWithInstance()
 * @method $this withDeleteWithInstance($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEnableAutomatedSnapshotPolicy()
 * @method $this withEnableAutomatedSnapshotPolicy($value)
 * @method string getFilter2Key()
 * @method string getDiskType()
 * @method $this withDiskType($value)
 * @method string getEnableShared()
 * @method $this withEnableShared($value)
 * @method string getEncrypted()
 * @method $this withEncrypted($value)
 * @method string getCategory()
 * @method $this withCategory($value)
 * @method string getKMSKeyId()
 * @method $this withKMSKeyId($value)
 */
class DescribeDisks extends Rpc
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
     * @param array $additionalAttributes
     *
     * @return $this
     */
	public function withAdditionalAttributes(array $additionalAttributes)
	{
	    $this->data['AdditionalAttributes'] = $additionalAttributes;
		foreach ($additionalAttributes as $i => $iValue) {
			$this->options['query']['AdditionalAttributes.' . ($i + 1)] = $iValue;
		}

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
 * @method array getEventId()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getEventTimeStart()
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method array getDiskId()
 * @method array getTag()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getEventTimeEnd()
 * @method string getHealthStatus()
 * @method $this withHealthStatus($value)
 * @method string getEventType()
 * @method $this withEventType($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeDisksFullStatus extends Rpc
{

    /**
     * @param array $eventId
     *
     * @return $this
     */
	public function withEventId(array $eventId)
	{
	    $this->data['EventId'] = $eventId;
		foreach ($eventId as $i => $iValue) {
			$this->options['query']['EventId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEventTimeStart($value)
    {
        $this->data['EventTimeStart'] = $value;
        $this->options['query']['EventTime.Start'] = $value;

        return $this;
    }

    /**
     * @param array $diskId
     *
     * @return $this
     */
	public function withDiskId(array $diskId)
	{
	    $this->data['DiskId'] = $diskId;
		foreach ($diskId as $i => $iValue) {
			$this->options['query']['DiskId.' . ($i + 1)] = $iValue;
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
     * @param string $value
     *
     * @return $this
     */
    public function withEventTimeEnd($value)
    {
        $this->data['EventTimeEnd'] = $value;
        $this->options['query']['EventTime.End'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getFilter2Value()
 * @method string getISP()
 * @method $this withISP($value)
 * @method string getAllocationId()
 * @method $this withAllocationId($value)
 * @method string getEipAddress()
 * @method $this withEipAddress($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getLockReason()
 * @method $this withLockReason($value)
 * @method string getFilter1Key()
 * @method string getAssociatedInstanceType()
 * @method $this withAssociatedInstanceType($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
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
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getPrivatePoolOptionsId()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getPackageType()
 * @method $this withPackageType($value)
 */
class DescribeElasticityAssuranceInstances extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPrivatePoolOptionsId($value)
    {
        $this->data['PrivatePoolOptionsId'] = $value;
        $this->options['query']['PrivatePoolOptions.Id'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPlatform()
 * @method $this withPlatform($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method array getTag()
 * @method string getInstanceChargeType()
 * @method $this withInstanceChargeType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPrivatePoolOptionsIds()
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getPackageType()
 * @method $this withPackageType($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeElasticityAssurances extends Rpc
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
     * @param string $value
     *
     * @return $this
     */
    public function withPrivatePoolOptionsIds($value)
    {
        $this->data['PrivatePoolOptionsIds'] = $value;
        $this->options['query']['PrivatePoolOptions.Ids'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
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
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getEniId()
 * @method $this withEniId($value)
 */
class DescribeEniMonitorData extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getForwardTableId()
 * @method $this withForwardTableId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getForwardEntryId()
 * @method $this withForwardEntryId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeForwardTableEntries extends Rpc
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
 * @method array getFilter()
 */
class DescribeHaVips extends Rpc
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
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getHpcClusterIds()
 * @method $this withHpcClusterIds($value)
 */
class DescribeHpcClusters extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method array getImageComponentId()
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method array getTag()
 * @method string getOwner()
 * @method $this withOwner($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class DescribeImageComponents extends Rpc
{

    /**
     * @param array $imageComponentId
     *
     * @return $this
     */
	public function withImageComponentId(array $imageComponentId)
	{
	    $this->data['ImageComponentId'] = $imageComponentId;
		foreach ($imageComponentId as $i => $iValue) {
			$this->options['query']['ImageComponentId.' . ($i + 1)] = $iValue;
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
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
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
 * @method string getImageFamily()
 * @method $this withImageFamily($value)
 */
class DescribeImageFromFamily extends Rpc
{
}

/**
 * @method string getImagePipelineId()
 * @method $this withImagePipelineId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getExecutionId()
 * @method $this withExecutionId($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method array getTag()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeImagePipelineExecutions extends Rpc
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
}

/**
 * @method array getImagePipelineId()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method array getTag()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class DescribeImagePipelines extends Rpc
{

    /**
     * @param array $imagePipelineId
     *
     * @return $this
     */
	public function withImagePipelineId(array $imagePipelineId)
	{
	    $this->data['ImagePipelineId'] = $imagePipelineId;
		foreach ($imagePipelineId as $i => $iValue) {
			$this->options['query']['ImagePipelineId.' . ($i + 1)] = $iValue;
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
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
		}

		return $this;
    }
}

/**
 * @method string getActionType()
 * @method $this withActionType($value)
 * @method string getImageOwnerId()
 * @method $this withImageOwnerId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getImageId()
 * @method $this withImageId($value)
 * @method string getSnapshotId()
 * @method $this withSnapshotId($value)
 * @method string getUsage()
 * @method $this withUsage($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getImageOwnerAlias()
 * @method $this withImageOwnerAlias($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getIsSupportIoOptimized()
 * @method $this withIsSupportIoOptimized($value)
 * @method string getImageName()
 * @method $this withImageName($value)
 * @method string getIsSupportCloudinit()
 * @method $this withIsSupportCloudinit($value)
 * @method string getIsPublic()
 * @method $this withIsPublic($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method array getTag()
 * @method string getArchitecture()
 * @method $this withArchitecture($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getShowExpired()
 * @method $this withShowExpired($value)
 * @method string getOSType()
 * @method $this withOSType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method array getFilter()
 * @method string getImageFamily()
 * @method $this withImageFamily($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeImages extends Rpc
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
     * @param array $filter
     *
     * @return $this
     */
	public function withFilter(array $filter)
	{
	    $this->data['Filter'] = $filter;
		foreach ($filter as $depth1 => $depth1Value) {
			if(isset($depth1Value['Value'])){
				$this->options['query']['Filter.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
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
 * @method string getImageId()
 * @method $this withImageId($value)
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
class DescribeImageSharePermission extends Rpc
{
}

/**
 * @method string getActionType()
 * @method $this withActionType($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getImageId()
 * @method $this withImageId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method array getFilter()
 */
class DescribeImageSupportInstanceTypes extends Rpc
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
			if(isset($depth1Value['Value'])){
				$this->options['query']['Filter.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
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
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInstanceIds()
 * @method $this withInstanceIds($value)
 */
class DescribeInstanceAttachmentAttributes extends Rpc
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
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DescribeInstanceAttribute extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getRenewalStatus()
 * @method $this withRenewalStatus($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DescribeInstanceAutoRenewAttribute extends Rpc
{
}

/**
 * @method array getEventId()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getEventCycleStatus()
 * @method $this withEventCycleStatus($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getImpactLevel()
 * @method $this withImpactLevel($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method array getInstanceEventCycleStatus()
 * @method array getTag()
 * @method string getEventPublishTimeEnd()
 * @method array getResourceId()
 * @method array getInstanceEventType()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getNotBeforeStart()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getEventPublishTimeStart()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getNotBeforeEnd()
 * @method string getEventType()
 * @method $this withEventType($value)
 */
class DescribeInstanceHistoryEvents extends Rpc
{

    /**
     * @param array $eventId
     *
     * @return $this
     */
	public function withEventId(array $eventId)
	{
	    $this->data['EventId'] = $eventId;
		foreach ($eventId as $i => $iValue) {
			$this->options['query']['EventId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $instanceEventCycleStatus
     *
     * @return $this
     */
	public function withInstanceEventCycleStatus(array $instanceEventCycleStatus)
	{
	    $this->data['InstanceEventCycleStatus'] = $instanceEventCycleStatus;
		foreach ($instanceEventCycleStatus as $i => $iValue) {
			$this->options['query']['InstanceEventCycleStatus.' . ($i + 1)] = $iValue;
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
     * @param string $value
     *
     * @return $this
     */
    public function withEventPublishTimeEnd($value)
    {
        $this->data['EventPublishTimeEnd'] = $value;
        $this->options['query']['EventPublishTime.End'] = $value;

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
     * @param array $instanceEventType
     *
     * @return $this
     */
	public function withInstanceEventType(array $instanceEventType)
	{
	    $this->data['InstanceEventType'] = $instanceEventType;
		foreach ($instanceEventType as $i => $iValue) {
			$this->options['query']['InstanceEventType.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNotBeforeStart($value)
    {
        $this->data['NotBeforeStart'] = $value;
        $this->options['query']['NotBefore.Start'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEventPublishTimeStart($value)
    {
        $this->data['EventPublishTimeStart'] = $value;
        $this->options['query']['EventPublishTime.Start'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNotBeforeEnd($value)
    {
        $this->data['NotBeforeEnd'] = $value;
        $this->options['query']['NotBefore.End'] = $value;

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
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method array getInstanceId()
 */
class DescribeInstanceMaintenanceAttributes extends Rpc
{

    /**
     * @param array $instanceId
     *
     * @return $this
     */
	public function withInstanceId(array $instanceId)
	{
	    $this->data['InstanceId'] = $instanceId;
		foreach ($instanceId as $i => $iValue) {
			$this->options['query']['InstanceId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSystemDiskCategory()
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method array getDataDisk()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DescribeInstanceModificationPrice extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSystemDiskCategory($value)
    {
        $this->data['SystemDiskCategory'] = $value;
        $this->options['query']['SystemDisk.Category'] = $value;

        return $this;
    }

    /**
     * @param array $dataDisk
     *
     * @return $this
     */
	public function withDataDisk(array $dataDisk)
	{
	    $this->data['DataDisk'] = $dataDisk;
		foreach ($dataDisk as $depth1 => $depth1Value) {
			if(isset($depth1Value['PerformanceLevel'])){
				$this->options['query']['DataDisk.' . ($depth1 + 1) . '.PerformanceLevel'] = $depth1Value['PerformanceLevel'];
			}
			if(isset($depth1Value['Size'])){
				$this->options['query']['DataDisk.' . ($depth1 + 1) . '.Size'] = $depth1Value['Size'];
			}
			if(isset($depth1Value['Category'])){
				$this->options['query']['DataDisk.' . ($depth1 + 1) . '.Category'] = $depth1Value['Category'];
			}
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
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
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DescribeInstanceMonitorData extends Rpc
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
 * @method string getRamRoleName()
 * @method $this withRamRoleName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInstanceIds()
 * @method $this withInstanceIds($value)
 */
class DescribeInstanceRamRole extends Rpc
{
}

/**
 * @method string getInnerIpAddresses()
 * @method $this withInnerIpAddresses($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPrivateIpAddresses()
 * @method $this withPrivateIpAddresses($value)
 * @method string getHpcClusterId()
 * @method $this withHpcClusterId($value)
 * @method string getHttpPutResponseHopLimit()
 * @method $this withHttpPutResponseHopLimit($value)
 * @method string getFilter2Value()
 * @method string getKeyPairName()
 * @method $this withKeyPairName($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getLockReason()
 * @method $this withLockReason($value)
 * @method string getFilter1Key()
 * @method string getDeviceAvailable()
 * @method $this withDeviceAvailable($value)
 * @method array getTag()
 * @method string getFilter3Value()
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getFilter1Value()
 * @method string getNeedSaleCycle()
 * @method $this withNeedSaleCycle($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method array getAdditionalAttributes()
 * @method string getInstanceName()
 * @method $this withInstanceName($value)
 * @method string getInstanceIds()
 * @method $this withInstanceIds($value)
 * @method string getInternetChargeType()
 * @method $this withInternetChargeType($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method array getIpv6Address()
 * @method string getInstanceNetworkType()
 * @method $this withInstanceNetworkType($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 * @method string getImageId()
 * @method $this withImageId($value)
 * @method string getFilter4Value()
 * @method string getIoOptimized()
 * @method $this withIoOptimized($value)
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getFilter4Key()
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getRdmaIpAddresses()
 * @method $this withRdmaIpAddresses($value)
 * @method string getHttpEndpoint()
 * @method $this withHttpEndpoint($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPublicIpAddresses()
 * @method $this withPublicIpAddresses($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getInstanceChargeType()
 * @method $this withInstanceChargeType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getInstanceTypeFamily()
 * @method $this withInstanceTypeFamily($value)
 * @method string getFilter2Key()
 * @method string getEipAddresses()
 * @method $this withEipAddresses($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getHttpTokens()
 * @method $this withHttpTokens($value)
 * @method string getFilter3Key()
 */
class DescribeInstances extends Rpc
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
    public function withFilter3Value($value)
    {
        $this->data['Filter3Value'] = $value;
        $this->options['query']['Filter.3.Value'] = $value;

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
     * @param array $additionalAttributes
     *
     * @return $this
     */
	public function withAdditionalAttributes(array $additionalAttributes)
	{
	    $this->data['AdditionalAttributes'] = $additionalAttributes;
		foreach ($additionalAttributes as $i => $iValue) {
			$this->options['query']['AdditionalAttributes.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $ipv6Address
     *
     * @return $this
     */
	public function withIpv6Address(array $ipv6Address)
	{
	    $this->data['Ipv6Address'] = $ipv6Address;
		foreach ($ipv6Address as $i => $iValue) {
			$this->options['query']['Ipv6Address.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFilter4Value($value)
    {
        $this->data['Filter4Value'] = $value;
        $this->options['query']['Filter.4.Value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFilter4Key($value)
    {
        $this->data['Filter4Key'] = $value;
        $this->options['query']['Filter.4.Key'] = $value;

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

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFilter3Key($value)
    {
        $this->data['Filter3Key'] = $value;
        $this->options['query']['Filter.3.Key'] = $value;

        return $this;
    }
}

/**
 * @method array getEventId()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEventPublishTimeEnd()
 * @method array getInstanceEventType()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getNotBeforeStart()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getEventPublishTimeStart()
 * @method array getInstanceId()
 * @method string getNotBeforeEnd()
 * @method string getHealthStatus()
 * @method $this withHealthStatus($value)
 * @method string getEventType()
 * @method $this withEventType($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeInstancesFullStatus extends Rpc
{

    /**
     * @param array $eventId
     *
     * @return $this
     */
	public function withEventId(array $eventId)
	{
	    $this->data['EventId'] = $eventId;
		foreach ($eventId as $i => $iValue) {
			$this->options['query']['EventId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEventPublishTimeEnd($value)
    {
        $this->data['EventPublishTimeEnd'] = $value;
        $this->options['query']['EventPublishTime.End'] = $value;

        return $this;
    }

    /**
     * @param array $instanceEventType
     *
     * @return $this
     */
	public function withInstanceEventType(array $instanceEventType)
	{
	    $this->data['InstanceEventType'] = $instanceEventType;
		foreach ($instanceEventType as $i => $iValue) {
			$this->options['query']['InstanceEventType.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNotBeforeStart($value)
    {
        $this->data['NotBeforeStart'] = $value;
        $this->options['query']['NotBefore.Start'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEventPublishTimeStart($value)
    {
        $this->data['EventPublishTimeStart'] = $value;
        $this->options['query']['EventPublishTime.Start'] = $value;

        return $this;
    }

    /**
     * @param array $instanceId
     *
     * @return $this
     */
	public function withInstanceId(array $instanceId)
	{
	    $this->data['InstanceId'] = $instanceId;
		foreach ($instanceId as $i => $iValue) {
			$this->options['query']['InstanceId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNotBeforeEnd($value)
    {
        $this->data['NotBeforeEnd'] = $value;
        $this->options['query']['NotBefore.End'] = $value;

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
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method array getInstanceId()
 * @method string getZoneId()
 * @method $this withZoneId($value)
 */
class DescribeInstanceStatus extends Rpc
{

    /**
     * @param array $instanceId
     *
     * @return $this
     */
	public function withInstanceId(array $instanceId)
	{
	    $this->data['InstanceId'] = $instanceId;
		foreach ($instanceId as $i => $iValue) {
			$this->options['query']['InstanceId.' . ($i + 1)] = $iValue;
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
 * @method string getInstanceIds()
 * @method $this withInstanceIds($value)
 */
class DescribeInstanceTopology extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getGeneration()
 * @method $this withGeneration($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeInstanceTypeFamilies extends Rpc
{
}

/**
 * @method string getGPUSpec()
 * @method $this withGPUSpec($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getMaximumCpuCoreCount()
 * @method $this withMaximumCpuCoreCount($value)
 * @method string getMaximumGPUAmount()
 * @method $this withMaximumGPUAmount($value)
 * @method string getLocalStorageCategory()
 * @method $this withLocalStorageCategory($value)
 * @method string getMaximumMemorySize()
 * @method $this withMaximumMemorySize($value)
 * @method string getInstanceCategory()
 * @method $this withInstanceCategory($value)
 * @method string getMinimumInstancePpsTx()
 * @method $this withMinimumInstancePpsTx($value)
 * @method string getMinimumCpuCoreCount()
 * @method $this withMinimumCpuCoreCount($value)
 * @method array getLocalStorageCategories()
 * @method string getMinimumPrimaryEniQueueNumber()
 * @method $this withMinimumPrimaryEniQueueNumber($value)
 * @method array getInstanceTypeFamilies()
 * @method string getMinimumBaselineCredit()
 * @method $this withMinimumBaselineCredit($value)
 * @method string getMinimumSecondaryEniQueueNumber()
 * @method $this withMinimumSecondaryEniQueueNumber($value)
 * @method array getCpuArchitectures()
 * @method string getMinimumInstanceBandwidthTx()
 * @method $this withMinimumInstanceBandwidthTx($value)
 * @method array getInstanceCategories()
 * @method string getMinimumGPUAmount()
 * @method $this withMinimumGPUAmount($value)
 * @method string getMaximumCpuSpeedFrequency()
 * @method $this withMaximumCpuSpeedFrequency($value)
 * @method string getCpuArchitecture()
 * @method $this withCpuArchitecture($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method array getPhysicalProcessorModels()
 * @method string getMinimumMemorySize()
 * @method $this withMinimumMemorySize($value)
 * @method string getMinimumEniQuantity()
 * @method $this withMinimumEniQuantity($value)
 * @method string getInstanceFamilyLevel()
 * @method $this withInstanceFamilyLevel($value)
 * @method string getMinimumQueuePairNumber()
 * @method $this withMinimumQueuePairNumber($value)
 * @method string getMinimumLocalStorageAmount()
 * @method $this withMinimumLocalStorageAmount($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getPhysicalProcessorModel()
 * @method $this withPhysicalProcessorModel($value)
 * @method string getMaximumCpuTurboFrequency()
 * @method $this withMaximumCpuTurboFrequency($value)
 * @method array getInstanceTypes()
 * @method string getMinimumInstancePpsRx()
 * @method $this withMinimumInstancePpsRx($value)
 * @method string getMinimumEniIpv6AddressQuantity()
 * @method $this withMinimumEniIpv6AddressQuantity($value)
 * @method string getMinimumEriQuantity()
 * @method $this withMinimumEriQuantity($value)
 * @method string getMinimumDiskQuantity()
 * @method $this withMinimumDiskQuantity($value)
 * @method string getMinimumCpuTurboFrequency()
 * @method $this withMinimumCpuTurboFrequency($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getMinimumInstanceBandwidthRx()
 * @method $this withMinimumInstanceBandwidthRx($value)
 * @method string getMinimumCpuSpeedFrequency()
 * @method $this withMinimumCpuSpeedFrequency($value)
 * @method string getNvmeSupport()
 * @method $this withNvmeSupport($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getMinimumInitialCredit()
 * @method $this withMinimumInitialCredit($value)
 * @method string getInstanceTypeFamily()
 * @method $this withInstanceTypeFamily($value)
 * @method string getMinimumEniPrivateIpAddressQuantity()
 * @method $this withMinimumEniPrivateIpAddressQuantity($value)
 * @method array getGpuSpecs()
 * @method string getMinimumLocalStorageCapacity()
 * @method $this withMinimumLocalStorageCapacity($value)
 */
class DescribeInstanceTypes extends Rpc
{

    /**
     * @param array $localStorageCategories
     *
     * @return $this
     */
	public function withLocalStorageCategories(array $localStorageCategories)
	{
	    $this->data['LocalStorageCategories'] = $localStorageCategories;
		foreach ($localStorageCategories as $i => $iValue) {
			$this->options['query']['LocalStorageCategories.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $instanceTypeFamilies
     *
     * @return $this
     */
	public function withInstanceTypeFamilies(array $instanceTypeFamilies)
	{
	    $this->data['InstanceTypeFamilies'] = $instanceTypeFamilies;
		foreach ($instanceTypeFamilies as $i => $iValue) {
			$this->options['query']['InstanceTypeFamilies.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $cpuArchitectures
     *
     * @return $this
     */
	public function withCpuArchitectures(array $cpuArchitectures)
	{
	    $this->data['CpuArchitectures'] = $cpuArchitectures;
		foreach ($cpuArchitectures as $i => $iValue) {
			$this->options['query']['CpuArchitectures.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $instanceCategories
     *
     * @return $this
     */
	public function withInstanceCategories(array $instanceCategories)
	{
	    $this->data['InstanceCategories'] = $instanceCategories;
		foreach ($instanceCategories as $i => $iValue) {
			$this->options['query']['InstanceCategories.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $physicalProcessorModels
     *
     * @return $this
     */
	public function withPhysicalProcessorModels(array $physicalProcessorModels)
	{
	    $this->data['PhysicalProcessorModels'] = $physicalProcessorModels;
		foreach ($physicalProcessorModels as $i => $iValue) {
			$this->options['query']['PhysicalProcessorModels.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $instanceTypes
     *
     * @return $this
     */
	public function withInstanceTypes(array $instanceTypes)
	{
	    $this->data['InstanceTypes'] = $instanceTypes;
		foreach ($instanceTypes as $i => $iValue) {
			$this->options['query']['InstanceTypes.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $gpuSpecs
     *
     * @return $this
     */
	public function withGpuSpecs(array $gpuSpecs)
	{
	    $this->data['GpuSpecs'] = $gpuSpecs;
		foreach ($gpuSpecs as $i => $iValue) {
			$this->options['query']['GpuSpecs.' . ($i + 1)] = $iValue;
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
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DescribeInstanceVncUrl extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCommandId()
 * @method $this withCommandId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getContentEncoding()
 * @method $this withContentEncoding($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method array getTag()
 * @method string getInvokeId()
 * @method $this withInvokeId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getInvokeRecordStatus()
 * @method $this withInvokeRecordStatus($value)
 * @method string getIncludeHistory()
 * @method $this withIncludeHistory($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class DescribeInvocationResults extends Rpc
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
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getInvokeStatus()
 * @method $this withInvokeStatus($value)
 * @method string getIncludeOutput()
 * @method $this withIncludeOutput($value)
 * @method string getCommandId()
 * @method $this withCommandId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getContentEncoding()
 * @method $this withContentEncoding($value)
 * @method string getRepeatMode()
 * @method $this withRepeatMode($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method array getTag()
 * @method string getInvokeId()
 * @method $this withInvokeId($value)
 * @method string getTimed()
 * @method $this withTimed($value)
 * @method string getCommandName()
 * @method $this withCommandName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getCommandType()
 * @method $this withCommandType($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class DescribeInvocations extends Rpc
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
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getKeyPairFingerPrint()
 * @method $this withKeyPairFingerPrint($value)
 * @method string getKeyPairName()
 * @method $this withKeyPairName($value)
 * @method string getIncludePublicKey()
 * @method $this withIncludePublicKey($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method array getTag()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeKeyPairs extends Rpc
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
 * @method array getLaunchTemplateName()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method array getTemplateTag()
 * @method array getLaunchTemplateId()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getTemplateResourceGroupId()
 * @method $this withTemplateResourceGroupId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLaunchTemplates extends Rpc
{

    /**
     * @param array $launchTemplateName
     *
     * @return $this
     */
	public function withLaunchTemplateName(array $launchTemplateName)
	{
	    $this->data['LaunchTemplateName'] = $launchTemplateName;
		foreach ($launchTemplateName as $i => $iValue) {
			$this->options['query']['LaunchTemplateName.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $templateTag
     *
     * @return $this
     */
	public function withTemplateTag(array $templateTag)
	{
	    $this->data['TemplateTag'] = $templateTag;
		foreach ($templateTag as $depth1 => $depth1Value) {
			if(isset($depth1Value['Key'])){
				$this->options['query']['TemplateTag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
			if(isset($depth1Value['Value'])){
				$this->options['query']['TemplateTag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
		}

		return $this;
    }

    /**
     * @param array $launchTemplateId
     *
     * @return $this
     */
	public function withLaunchTemplateId(array $launchTemplateId)
	{
	    $this->data['LaunchTemplateId'] = $launchTemplateId;
		foreach ($launchTemplateId as $i => $iValue) {
			$this->options['query']['LaunchTemplateId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getLaunchTemplateName()
 * @method $this withLaunchTemplateName($value)
 * @method string getMaxVersion()
 * @method $this withMaxVersion($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDefaultVersion()
 * @method $this withDefaultVersion($value)
 * @method string getMinVersion()
 * @method $this withMinVersion($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getLaunchTemplateId()
 * @method $this withLaunchTemplateId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method array getLaunchTemplateVersion()
 * @method string getDetailFlag()
 * @method $this withDetailFlag($value)
 */
class DescribeLaunchTemplateVersions extends Rpc
{

    /**
     * @param array $launchTemplateVersion
     *
     * @return $this
     */
	public function withLaunchTemplateVersion(array $launchTemplateVersion)
	{
	    $this->data['LaunchTemplateVersion'] = $launchTemplateVersion;
		foreach ($launchTemplateVersion as $i => $iValue) {
			$this->options['query']['LaunchTemplateVersion.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getLimitation()
 * @method $this withLimitation($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLimitation extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method array getTag()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOsType()
 * @method $this withOsType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInstanceName()
 * @method $this withInstanceName($value)
 * @method array getInstanceId()
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getInstanceIp()
 * @method $this withInstanceIp($value)
 * @method string getActivationId()
 * @method $this withActivationId($value)
 */
class DescribeManagedInstances extends Rpc
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
     * @param array $instanceId
     *
     * @return $this
     */
	public function withInstanceId(array $instanceId)
	{
	    $this->data['InstanceId'] = $instanceId;
		foreach ($instanceId as $i => $iValue) {
			$this->options['query']['InstanceId.' . ($i + 1)] = $iValue;
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
 * @method string getNatGatewayId()
 * @method $this withNatGatewayId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 */
class DescribeNatGateways extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method array getTag()
 * @method string getAttribute()
 * @method $this withAttribute($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getNetworkInterfaceId()
 * @method $this withNetworkInterfaceId($value)
 */
class DescribeNetworkInterfaceAttribute extends Rpc
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
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method array getNetworkInterfacePermissionId()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getNetworkInterfaceId()
 * @method $this withNetworkInterfaceId($value)
 */
class DescribeNetworkInterfacePermissions extends Rpc
{

    /**
     * @param array $networkInterfacePermissionId
     *
     * @return $this
     */
	public function withNetworkInterfacePermissionId(array $networkInterfacePermissionId)
	{
	    $this->data['NetworkInterfacePermissionId'] = $networkInterfacePermissionId;
		foreach ($networkInterfacePermissionId as $i => $iValue) {
			$this->options['query']['NetworkInterfacePermissionId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getServiceManaged()
 * @method $this withServiceManaged($value)
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method array getTag()
 * @method string getNetworkInterfaceName()
 * @method $this withNetworkInterfaceName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method array getPrivateIpAddress()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getPrimaryIpAddress()
 * @method $this withPrimaryIpAddress($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method array getNetworkInterfaceId()
 * @method array getIpv6Address()
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeNetworkInterfaces extends Rpc
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
     * @param array $privateIpAddress
     *
     * @return $this
     */
	public function withPrivateIpAddress(array $privateIpAddress)
	{
	    $this->data['PrivateIpAddress'] = $privateIpAddress;
		foreach ($privateIpAddress as $i => $iValue) {
			$this->options['query']['PrivateIpAddress.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $networkInterfaceId
     *
     * @return $this
     */
	public function withNetworkInterfaceId(array $networkInterfaceId)
	{
	    $this->data['NetworkInterfaceId'] = $networkInterfaceId;
		foreach ($networkInterfaceId as $i => $iValue) {
			$this->options['query']['NetworkInterfaceId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $ipv6Address
     *
     * @return $this
     */
	public function withIpv6Address(array $ipv6Address)
	{
	    $this->data['Ipv6Address'] = $ipv6Address;
		foreach ($ipv6Address as $i => $iValue) {
			$this->options['query']['Ipv6Address.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
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
class DescribeNewProjectEipMonitorData extends Rpc
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
 * @method string getUserCidr()
 * @method $this withUserCidr($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method array getFilter()
 */
class DescribePhysicalConnections extends Rpc
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
 * @method string getPrefixListId()
 * @method $this withPrefixListId($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class DescribePrefixListAssociations extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPrefixListId()
 * @method $this withPrefixListId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribePrefixListAttributes extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method array getPrefixListId()
 * @method string getAddressFamily()
 * @method $this withAddressFamily($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPrefixListName()
 * @method $this withPrefixListName($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class DescribePrefixLists extends Rpc
{

    /**
     * @param array $prefixListId
     *
     * @return $this
     */
	public function withPrefixListId(array $prefixListId)
	{
	    $this->data['PrefixListId'] = $prefixListId;
		foreach ($prefixListId as $i => $iValue) {
			$this->options['query']['PrefixListId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getDataDisk3Size()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDataDisk3Category()
 * @method string getIsp()
 * @method $this withIsp($value)
 * @method string getDataDisk4Size()
 * @method string getPriceUnit()
 * @method $this withPriceUnit($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getDataDisk1PerformanceLevel()
 * @method string getAssuranceTimes()
 * @method $this withAssuranceTimes($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPromotionOptions()
 * @method $this withPromotionOptions($value)
 * @method string getInstanceCpuCoreCount()
 * @method $this withInstanceCpuCoreCount($value)
 * @method string getSpotStrategy()
 * @method $this withSpotStrategy($value)
 * @method string getInternetChargeType()
 * @method $this withInternetChargeType($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getInstanceNetworkType()
 * @method $this withInstanceNetworkType($value)
 * @method string getInstanceAmount()
 * @method $this withInstanceAmount($value)
 * @method array getInstanceTypeList()
 * @method string getDataDisk3PerformanceLevel()
 * @method string getImageId()
 * @method $this withImageId($value)
 * @method string getIoOptimized()
 * @method $this withIoOptimized($value)
 * @method string getInternetMaxBandwidthOut()
 * @method $this withInternetMaxBandwidthOut($value)
 * @method string getSystemDiskCategory()
 * @method string getPlatform()
 * @method $this withPlatform($value)
 * @method string getCapacity()
 * @method $this withCapacity($value)
 * @method string getSystemDiskPerformanceLevel()
 * @method string getDataDisk4Category()
 * @method string getDataDisk4PerformanceLevel()
 * @method string getScope()
 * @method $this withScope($value)
 * @method string getSchedulerOptionsDedicatedHostId()
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getDedicatedHostType()
 * @method $this withDedicatedHostType($value)
 * @method string getDataDisk2Category()
 * @method string getDataDisk1Size()
 * @method string getAmount()
 * @method $this withAmount($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDataDisk2Size()
 * @method string getSpotDuration()
 * @method $this withSpotDuration($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method array getDataDisk()
 * @method string getDataDisk1Category()
 * @method string getDataDisk2PerformanceLevel()
 * @method string getSystemDiskSize()
 * @method string getOfferingType()
 * @method $this withOfferingType($value)
 */
class DescribePrice extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDataDisk3Size($value)
    {
        $this->data['DataDisk3Size'] = $value;
        $this->options['query']['DataDisk.3.Size'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDataDisk3Category($value)
    {
        $this->data['DataDisk3Category'] = $value;
        $this->options['query']['DataDisk.3.Category'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDataDisk4Size($value)
    {
        $this->data['DataDisk4Size'] = $value;
        $this->options['query']['DataDisk.4.Size'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDataDisk1PerformanceLevel($value)
    {
        $this->data['DataDisk1PerformanceLevel'] = $value;
        $this->options['query']['DataDisk.1.PerformanceLevel'] = $value;

        return $this;
    }

    /**
     * @param array $instanceTypeList
     *
     * @return $this
     */
	public function withInstanceTypeList(array $instanceTypeList)
	{
	    $this->data['InstanceTypeList'] = $instanceTypeList;
		foreach ($instanceTypeList as $i => $iValue) {
			$this->options['query']['InstanceTypeList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDataDisk3PerformanceLevel($value)
    {
        $this->data['DataDisk3PerformanceLevel'] = $value;
        $this->options['query']['DataDisk.3.PerformanceLevel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSystemDiskCategory($value)
    {
        $this->data['SystemDiskCategory'] = $value;
        $this->options['query']['SystemDisk.Category'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSystemDiskPerformanceLevel($value)
    {
        $this->data['SystemDiskPerformanceLevel'] = $value;
        $this->options['query']['SystemDisk.PerformanceLevel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDataDisk4Category($value)
    {
        $this->data['DataDisk4Category'] = $value;
        $this->options['query']['DataDisk.4.Category'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDataDisk4PerformanceLevel($value)
    {
        $this->data['DataDisk4PerformanceLevel'] = $value;
        $this->options['query']['DataDisk.4.PerformanceLevel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSchedulerOptionsDedicatedHostId($value)
    {
        $this->data['SchedulerOptionsDedicatedHostId'] = $value;
        $this->options['query']['SchedulerOptions.DedicatedHostId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDataDisk2Category($value)
    {
        $this->data['DataDisk2Category'] = $value;
        $this->options['query']['DataDisk.2.Category'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDataDisk1Size($value)
    {
        $this->data['DataDisk1Size'] = $value;
        $this->options['query']['DataDisk.1.Size'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDataDisk2Size($value)
    {
        $this->data['DataDisk2Size'] = $value;
        $this->options['query']['DataDisk.2.Size'] = $value;

        return $this;
    }

    /**
     * @param array $dataDisk
     *
     * @return $this
     */
	public function withDataDisk(array $dataDisk)
	{
	    $this->data['DataDisk'] = $dataDisk;
		foreach ($dataDisk as $depth1 => $depth1Value) {
			if(isset($depth1Value['Size'])){
				$this->options['query']['DataDisk.' . ($depth1 + 1) . '.Size'] = $depth1Value['Size'];
			}
			if(isset($depth1Value['PerformanceLevel'])){
				$this->options['query']['DataDisk.' . ($depth1 + 1) . '.PerformanceLevel'] = $depth1Value['PerformanceLevel'];
			}
			if(isset($depth1Value['Category'])){
				$this->options['query']['DataDisk.' . ($depth1 + 1) . '.Category'] = $depth1Value['Category'];
			}
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDataDisk1Category($value)
    {
        $this->data['DataDisk1Category'] = $value;
        $this->options['query']['DataDisk.1.Category'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDataDisk2PerformanceLevel($value)
    {
        $this->data['DataDisk2PerformanceLevel'] = $value;
        $this->options['query']['DataDisk.2.PerformanceLevel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSystemDiskSize($value)
    {
        $this->data['SystemDiskSize'] = $value;
        $this->options['query']['SystemDisk.Size'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getMemory()
 * @method $this withMemory($value)
 * @method string getIoOptimized()
 * @method $this withIoOptimized($value)
 * @method string getNetworkType()
 * @method $this withNetworkType($value)
 * @method string getScene()
 * @method $this withScene($value)
 * @method string getCores()
 * @method $this withCores($value)
 * @method string getSystemDiskCategory()
 * @method $this withSystemDiskCategory($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getInstanceChargeType()
 * @method $this withInstanceChargeType($value)
 * @method string getMaxPrice()
 * @method $this withMaxPrice($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getZoneMatchMode()
 * @method $this withZoneMatchMode($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method array getInstanceTypeFamily()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSpotStrategy()
 * @method $this withSpotStrategy($value)
 * @method string getPriorityStrategy()
 * @method $this withPriorityStrategy($value)
 * @method string getInstanceFamilyLevel()
 * @method $this withInstanceFamilyLevel($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 */
class DescribeRecommendInstanceType extends Rpc
{

    /**
     * @param array $instanceTypeFamily
     *
     * @return $this
     */
	public function withInstanceTypeFamily(array $instanceTypeFamily)
	{
	    $this->data['InstanceTypeFamily'] = $instanceTypeFamily;
		foreach ($instanceTypeFamily as $i => $iValue) {
			$this->options['query']['InstanceTypeFamily.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getInstanceChargeType()
 * @method $this withInstanceChargeType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class DescribeRegions extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPriceUnit()
 * @method $this withPriceUnit($value)
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getExpectedRenewDay()
 * @method $this withExpectedRenewDay($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 */
class DescribeRenewalPrice extends Rpc
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
 * @method array getReservedInstanceId()
 */
class DescribeReservedInstanceAutoRenewAttribute extends Rpc
{

    /**
     * @param array $reservedInstanceId
     *
     * @return $this
     */
	public function withReservedInstanceId(array $reservedInstanceId)
	{
	    $this->data['ReservedInstanceId'] = $reservedInstanceId;
		foreach ($reservedInstanceId as $i => $iValue) {
			$this->options['query']['ReservedInstanceId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getLockReason()
 * @method $this withLockReason($value)
 * @method string getScope()
 * @method $this withScope($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method array getTag()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getInstanceTypeFamily()
 * @method $this withInstanceTypeFamily($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method array getReservedInstanceId()
 * @method string getOfferingType()
 * @method $this withOfferingType($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getReservedInstanceName()
 * @method $this withReservedInstanceName($value)
 * @method string getAllocationType()
 * @method $this withAllocationType($value)
 * @method array getStatus()
 */
class DescribeReservedInstances extends Rpc
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
     * @param array $reservedInstanceId
     *
     * @return $this
     */
	public function withReservedInstanceId(array $reservedInstanceId)
	{
	    $this->data['ReservedInstanceId'] = $reservedInstanceId;
		foreach ($reservedInstanceId as $i => $iValue) {
			$this->options['query']['ReservedInstanceId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $status
     *
     * @return $this
     */
	public function withStatus(array $status)
	{
	    $this->data['Status'] = $status;
		foreach ($status as $i => $iValue) {
			$this->options['query']['Status.' . ($i + 1)] = $iValue;
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
 * @method array getTag()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 */
class DescribeResourceByTags extends Rpc
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
 * @method string getMemory()
 * @method $this withMemory($value)
 * @method string getCores()
 * @method $this withCores($value)
 * @method string getMigrateAcrossZone()
 * @method $this withMigrateAcrossZone($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOperationType()
 * @method $this withOperationType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDestinationResource()
 * @method $this withDestinationResource($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method array getConditions()
 */
class DescribeResourcesModification extends Rpc
{

    /**
     * @param array $conditions
     *
     * @return $this
     */
	public function withConditions(array $conditions)
	{
	    $this->data['Conditions'] = $conditions;
		foreach ($conditions as $i => $iValue) {
			$this->options['query']['Conditions.' . ($i + 1)] = $iValue;
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
 * @method string getVRouterId()
 * @method $this withVRouterId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
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
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getPlanType()
 * @method $this withPlanType($value)
 * @method string getPeriodUnit()
 * @method $this withPeriodUnit($value)
 * @method string getOfferingType()
 * @method $this withOfferingType($value)
 */
class DescribeSavingsPlanEstimation extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method array getResourceId()
 * @method string getInstanceTypeFamily()
 * @method $this withInstanceTypeFamily($value)
 * @method string getPlanType()
 * @method $this withPlanType($value)
 * @method string getPeriodUnit()
 * @method $this withPeriodUnit($value)
 * @method string getOfferingType()
 * @method $this withOfferingType($value)
 * @method string getCommittedAmount()
 * @method $this withCommittedAmount($value)
 */
class DescribeSavingsPlanPrice extends Rpc
{

    /** @var string */
    public $scheme = 'https';

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
 * @method string getNicType()
 * @method $this withNicType($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getDirection()
 * @method $this withDirection($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class DescribeSecurityGroupAttribute extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method array getSecurityGroupId()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeSecurityGroupReferences extends Rpc
{

    /**
     * @param array $securityGroupId
     *
     * @return $this
     */
	public function withSecurityGroupId(array $securityGroupId)
	{
	    $this->data['SecurityGroupId'] = $securityGroupId;
		foreach ($securityGroupId as $i => $iValue) {
			$this->options['query']['SecurityGroupId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getFuzzyQuery()
 * @method $this withFuzzyQuery($value)
 * @method string getServiceManaged()
 * @method $this withServiceManaged($value)
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getIsQueryEcsCount()
 * @method $this withIsQueryEcsCount($value)
 * @method string getNetworkType()
 * @method $this withNetworkType($value)
 * @method string getSecurityGroupName()
 * @method $this withSecurityGroupName($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method array getTag()
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSecurityGroupIds()
 * @method $this withSecurityGroupIds($value)
 * @method string getSecurityGroupType()
 * @method $this withSecurityGroupType($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class DescribeSecurityGroups extends Rpc
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
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method array getTag()
 * @method string getInvokeId()
 * @method $this withInvokeId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getInvocationStatus()
 * @method $this withInvocationStatus($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class DescribeSendFileResults extends Rpc
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
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method array getTag()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method array getSnapshotGroupId()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method array getAdditionalAttributes()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method array getStatus()
 */
class DescribeSnapshotGroups extends Rpc
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
     * @param array $snapshotGroupId
     *
     * @return $this
     */
	public function withSnapshotGroupId(array $snapshotGroupId)
	{
	    $this->data['SnapshotGroupId'] = $snapshotGroupId;
		foreach ($snapshotGroupId as $i => $iValue) {
			$this->options['query']['SnapshotGroupId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $additionalAttributes
     *
     * @return $this
     */
	public function withAdditionalAttributes(array $additionalAttributes)
	{
	    $this->data['AdditionalAttributes'] = $additionalAttributes;
		foreach ($additionalAttributes as $i => $iValue) {
			$this->options['query']['AdditionalAttributes.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $status
     *
     * @return $this
     */
	public function withStatus(array $status)
	{
	    $this->data['Status'] = $status;
		foreach ($status as $i => $iValue) {
			$this->options['query']['Status.' . ($i + 1)] = $iValue;
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
 * @method string getDiskIds()
 * @method $this withDiskIds($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getSnapshotLinkIds()
 * @method $this withSnapshotLinkIds($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DescribeSnapshotLinks extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
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
 * @method string getCategory()
 * @method $this withCategory($value)
 */
class DescribeSnapshotMonitorData extends Rpc
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
 */
class DescribeSnapshotPackage extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getFilter2Value()
 * @method string getSnapshotIds()
 * @method $this withSnapshotIds($value)
 * @method string getUsage()
 * @method $this withUsage($value)
 * @method string getSnapshotLinkId()
 * @method $this withSnapshotLinkId($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getFilter1Key()
 * @method array getTag()
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getFilter1Value()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 * @method string getSnapshotName()
 * @method $this withSnapshotName($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDiskId()
 * @method $this withDiskId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getSourceDiskType()
 * @method $this withSourceDiskType($value)
 * @method string getFilter2Key()
 * @method string getEncrypted()
 * @method $this withEncrypted($value)
 * @method string getSnapshotType()
 * @method $this withSnapshotType($value)
 * @method string getKMSKeyId()
 * @method $this withKMSKeyId($value)
 * @method string getCategory()
 * @method $this withCategory($value)
 */
class DescribeSnapshots extends Rpc
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
 */
class DescribeSnapshotsUsage extends Rpc
{
}

/**
 * @method string getGpuSpec()
 * @method $this withGpuSpec($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getMemory()
 * @method $this withMemory($value)
 * @method string getIoOptimized()
 * @method $this withIoOptimized($value)
 * @method array getInstanceTypes()
 * @method string getMinCores()
 * @method $this withMinCores($value)
 * @method string getNetworkType()
 * @method $this withNetworkType($value)
 * @method string getCores()
 * @method $this withCores($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getInstanceTypeFamily()
 * @method $this withInstanceTypeFamily($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInstanceFamilyLevel()
 * @method $this withInstanceFamilyLevel($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getGpuAmount()
 * @method $this withGpuAmount($value)
 * @method string getMinMemory()
 * @method $this withMinMemory($value)
 */
class DescribeSpotAdvice extends Rpc
{

    /**
     * @param array $instanceTypes
     *
     * @return $this
     */
	public function withInstanceTypes(array $instanceTypes)
	{
	    $this->data['InstanceTypes'] = $instanceTypes;
		foreach ($instanceTypes as $i => $iValue) {
			$this->options['query']['InstanceTypes.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getIoOptimized()
 * @method $this withIoOptimized($value)
 * @method string getNetworkType()
 * @method $this withNetworkType($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getOffset()
 * @method $this withOffset($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOSType()
 * @method $this withOSType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSpotDuration()
 * @method $this withSpotDuration($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 */
class DescribeSpotPriceHistory extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getCapacity()
 * @method $this withCapacity($value)
 * @method array getStorageCapacityUnitId()
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method array getTag()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getAllocationType()
 * @method $this withAllocationType($value)
 * @method array getStatus()
 */
class DescribeStorageCapacityUnits extends Rpc
{

    /**
     * @param array $storageCapacityUnitId
     *
     * @return $this
     */
	public function withStorageCapacityUnitId(array $storageCapacityUnitId)
	{
	    $this->data['StorageCapacityUnitId'] = $storageCapacityUnitId;
		foreach ($storageCapacityUnitId as $i => $iValue) {
			$this->options['query']['StorageCapacityUnitId.' . ($i + 1)] = $iValue;
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
     * @param array $status
     *
     * @return $this
     */
	public function withStatus(array $status)
	{
	    $this->data['Status'] = $status;
		foreach ($status as $i => $iValue) {
			$this->options['query']['Status.' . ($i + 1)] = $iValue;
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
 * @method string getStorageSetPartitionNumber()
 * @method $this withStorageSetPartitionNumber($value)
 * @method string getDiskIds()
 * @method $this withDiskIds($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getStorageSetId()
 * @method $this withStorageSetId($value)
 */
class DescribeStorageSetDetails extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getStorageSetIds()
 * @method $this withStorageSetIds($value)
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
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getStorageSetName()
 * @method $this withStorageSetName($value)
 */
class DescribeStorageSets extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method array getTag()
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getCategory()
 * @method $this withCategory($value)
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
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeTaskAttribute extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getTaskIds()
 * @method $this withTaskIds($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getTaskStatus()
 * @method $this withTaskStatus($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTaskAction()
 * @method $this withTaskAction($value)
 * @method array getResourceIds()
 */
class DescribeTasks extends Rpc
{

    /**
     * @param array $resourceIds
     *
     * @return $this
     */
	public function withResourceIds(array $resourceIds)
	{
	    $this->data['ResourceIds'] = $resourceIds;
		foreach ($resourceIds as $i => $iValue) {
			$this->options['query']['ResourceIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSessionId()
 * @method $this withSessionId($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class DescribeTerminalSessions extends Rpc
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
 * @method string getStatusKey()
 */
class DescribeUserBusinessBehavior extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStatusKey($value)
    {
        $this->data['StatusKey'] = $value;
        $this->options['query']['statusKey'] = $value;

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
class DescribeUserData extends Rpc
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
 * @method string getVpcId()
 * @method $this withVpcId($value)
 */
class DescribeVpcs extends Rpc
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
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 */
class DescribeVSwitches extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getInstanceChargeType()
 * @method $this withInstanceChargeType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVerbose()
 * @method $this withVerbose($value)
 * @method string getSpotStrategy()
 * @method $this withSpotStrategy($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class DescribeZones extends Rpc
{
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
 * @method string getVpcId()
 * @method $this withVpcId($value)
 */
class DetachClassicLinkVpc extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDiskId()
 * @method $this withDiskId($value)
 * @method string getDeleteWithInstance()
 * @method $this withDeleteWithInstance($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DetachDisk extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getRamRoleName()
 * @method $this withRamRoleName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInstanceIds()
 * @method $this withInstanceIds($value)
 */
class DetachInstanceRamRole extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getKeyPairName()
 * @method $this withKeyPairName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInstanceIds()
 * @method $this withInstanceIds($value)
 */
class DetachKeyPair extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTrunkNetworkInstanceId()
 * @method $this withTrunkNetworkInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getNetworkInterfaceId()
 * @method $this withNetworkInterfaceId($value)
 */
class DetachNetworkInterface extends Rpc
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
 * @method string getActivationId()
 * @method $this withActivationId($value)
 */
class DisableActivation extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 */
class DisableDiskEncryptionByDefault extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getData()
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getUserCidr()
 * @method $this withUserCidr($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class EipFillParams extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withData($value)
    {
        $this->data['Data'] = $value;
        $this->options['query']['data'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getData()
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getUserCidr()
 * @method $this withUserCidr($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class EipFillProduct extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withData($value)
    {
        $this->data['Data'] = $value;
        $this->options['query']['data'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getData()
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getUserCidr()
 * @method $this withUserCidr($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class EipNotifyPaid extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withData($value)
    {
        $this->data['Data'] = $value;
        $this->options['query']['data'] = $value;

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
 */
class EnableDiskEncryptionByDefault extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getUserCidr()
 * @method $this withUserCidr($value)
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
 * @method string getImageId()
 * @method $this withImageId($value)
 * @method string getImageFormat()
 * @method $this withImageFormat($value)
 * @method string getOSSBucket()
 * @method $this withOSSBucket($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getRoleName()
 * @method $this withRoleName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getOSSPrefix()
 * @method $this withOSSPrefix($value)
 */
class ExportImage extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSnapshotId()
 * @method $this withSnapshotId($value)
 * @method string getOssBucket()
 * @method $this withOssBucket($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getRoleName()
 * @method $this withRoleName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ExportSnapshot extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getRemoveSymbols()
 * @method $this withRemoveSymbols($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class GetInstanceConsoleOutput extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getWakeUp()
 * @method $this withWakeUp($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class GetInstanceScreenshot extends Rpc
{
}

/**
 * @method array getDiskDeviceMapping()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getPlatform()
 * @method $this withPlatform($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getBootMode()
 * @method $this withBootMode($value)
 * @method string getImageName()
 * @method $this withImageName($value)
 * @method string getStorageLocationArn()
 * @method $this withStorageLocationArn($value)
 * @method array getTag()
 * @method string getArchitecture()
 * @method $this withArchitecture($value)
 * @method string getLicenseType()
 * @method $this withLicenseType($value)
 * @method string getDetectionStrategy()
 * @method $this withDetectionStrategy($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getRoleName()
 * @method $this withRoleName($value)
 * @method string getOSType()
 * @method $this withOSType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ImportImage extends Rpc
{

    /**
     * @param array $diskDeviceMapping
     *
     * @return $this
     */
	public function withDiskDeviceMapping(array $diskDeviceMapping)
	{
	    $this->data['DiskDeviceMapping'] = $diskDeviceMapping;
		foreach ($diskDeviceMapping as $depth1 => $depth1Value) {
			if(isset($depth1Value['OSSBucket'])){
				$this->options['query']['DiskDeviceMapping.' . ($depth1 + 1) . '.OSSBucket'] = $depth1Value['OSSBucket'];
			}
			if(isset($depth1Value['DiskImSize'])){
				$this->options['query']['DiskDeviceMapping.' . ($depth1 + 1) . '.DiskImSize'] = $depth1Value['DiskImSize'];
			}
			if(isset($depth1Value['Format'])){
				$this->options['query']['DiskDeviceMapping.' . ($depth1 + 1) . '.Format'] = $depth1Value['Format'];
			}
			if(isset($depth1Value['Device'])){
				$this->options['query']['DiskDeviceMapping.' . ($depth1 + 1) . '.Device'] = $depth1Value['Device'];
			}
			if(isset($depth1Value['OSSObject'])){
				$this->options['query']['DiskDeviceMapping.' . ($depth1 + 1) . '.OSSObject'] = $depth1Value['OSSObject'];
			}
			if(isset($depth1Value['DiskImageSize'])){
				$this->options['query']['DiskDeviceMapping.' . ($depth1 + 1) . '.DiskImageSize'] = $depth1Value['DiskImageSize'];
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
 * @method string getKeyPairName()
 * @method $this withKeyPairName($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method array getTag()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getPublicKeyBody()
 * @method $this withPublicKeyBody($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ImportKeyPair extends Rpc
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
 * @method array getInstanceId()
 */
class InstallCloudAssistant extends Rpc
{

    /**
     * @param array $instanceId
     *
     * @return $this
     */
	public function withInstanceId(array $instanceId)
	{
	    $this->data['InstanceId'] = $instanceId;
		foreach ($instanceId as $i => $iValue) {
			$this->options['query']['InstanceId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getContainerName()
 * @method $this withContainerName($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method array getSystemTag()
 * @method string getCommandId()
 * @method $this withCommandId($value)
 * @method string getTimeout()
 * @method $this withTimeout($value)
 * @method string getFrequency()
 * @method $this withFrequency($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getRepeatMode()
 * @method $this withRepeatMode($value)
 * @method string getWindowsPasswordName()
 * @method $this withWindowsPasswordName($value)
 * @method array getResourceTag()
 * @method array getTag()
 * @method string getTimed()
 * @method $this withTimed($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTerminationMode()
 * @method $this withTerminationMode($value)
 * @method array getInstanceId()
 * @method string getContainerId()
 * @method $this withContainerId($value)
 * @method string getParameters()
 * @method $this withParameters($value)
 * @method string getUsername()
 * @method $this withUsername($value)
 * @method string getLauncher()
 * @method $this withLauncher($value)
 */
class InvokeCommand extends Rpc
{

    /**
     * @param array $systemTag
     *
     * @return $this
     */
	public function withSystemTag(array $systemTag)
	{
	    $this->data['SystemTag'] = $systemTag;
		foreach ($systemTag as $depth1 => $depth1Value) {
			if(isset($depth1Value['Key'])){
				$this->options['query']['SystemTag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
			if(isset($depth1Value['Value'])){
				$this->options['query']['SystemTag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Scope'])){
				$this->options['query']['SystemTag.' . ($depth1 + 1) . '.Scope'] = $depth1Value['Scope'];
			}
		}

		return $this;
    }

    /**
     * @param array $resourceTag
     *
     * @return $this
     */
	public function withResourceTag(array $resourceTag)
	{
	    $this->data['ResourceTag'] = $resourceTag;
		foreach ($resourceTag as $depth1 => $depth1Value) {
			if(isset($depth1Value['Key'])){
				$this->options['query']['ResourceTag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
			if(isset($depth1Value['Value'])){
				$this->options['query']['ResourceTag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
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
     * @param array $instanceId
     *
     * @return $this
     */
	public function withInstanceId(array $instanceId)
	{
	    $this->data['InstanceId'] = $instanceId;
		foreach ($instanceId as $i => $iValue) {
			$this->options['query']['InstanceId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
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
 */
class JoinResourceGroup extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getNetworkInterfaceId()
 * @method $this withNetworkInterfaceId($value)
 */
class JoinSecurityGroup extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getNetworkInterfaceId()
 * @method $this withNetworkInterfaceId($value)
 */
class LeaveSecurityGroup extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method array getInstanceId()
 * @method string getName()
 * @method $this withName($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class ListPluginStatus extends Rpc
{

    /**
     * @param array $instanceId
     *
     * @return $this
     */
	public function withInstanceId(array $instanceId)
	{
	    $this->data['InstanceId'] = $instanceId;
		foreach ($instanceId as $i => $iValue) {
			$this->options['query']['InstanceId.' . ($i + 1)] = $iValue;
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
 * @method array getTagFilter()
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
     * @param array $tagFilter
     *
     * @return $this
     */
	public function withTagFilter(array $tagFilter)
	{
	    $this->data['TagFilter'] = $tagFilter;
		foreach ($tagFilter as $depth1 => $depth1Value) {
			foreach ($depth1Value['TagValues'] as $i => $iValue) {
				$this->options['query']['TagFilter.' . ($depth1 + 1) . '.TagValues.' . ($i + 1)] = $iValue;
			}
			if(isset($depth1Value['TagKey'])){
				$this->options['query']['TagFilter.' . ($depth1 + 1) . '.TagKey'] = $depth1Value['TagKey'];
			}
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTerminateInstancesWithExpiration()
 * @method $this withTerminateInstancesWithExpiration($value)
 * @method string getDefaultTargetCapacityType()
 * @method $this withDefaultTargetCapacityType($value)
 * @method string getExcessCapacityTerminationPolicy()
 * @method $this withExcessCapacityTerminationPolicy($value)
 * @method array getLaunchTemplateConfig()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAutoProvisioningGroupId()
 * @method $this withAutoProvisioningGroupId($value)
 * @method string getPayAsYouGoTargetCapacity()
 * @method $this withPayAsYouGoTargetCapacity($value)
 * @method string getTotalTargetCapacity()
 * @method $this withTotalTargetCapacity($value)
 * @method string getSpotTargetCapacity()
 * @method $this withSpotTargetCapacity($value)
 * @method string getMaxSpotPrice()
 * @method $this withMaxSpotPrice($value)
 * @method string getAutoProvisioningGroupName()
 * @method $this withAutoProvisioningGroupName($value)
 */
class ModifyAutoProvisioningGroup extends Rpc
{

    /**
     * @param array $launchTemplateConfig
     *
     * @return $this
     */
	public function withLaunchTemplateConfig(array $launchTemplateConfig)
	{
	    $this->data['LaunchTemplateConfig'] = $launchTemplateConfig;
		foreach ($launchTemplateConfig as $depth1 => $depth1Value) {
			if(isset($depth1Value['VSwitchId'])){
				$this->options['query']['LaunchTemplateConfig.' . ($depth1 + 1) . '.VSwitchId'] = $depth1Value['VSwitchId'];
			}
			if(isset($depth1Value['MaxPrice'])){
				$this->options['query']['LaunchTemplateConfig.' . ($depth1 + 1) . '.MaxPrice'] = $depth1Value['MaxPrice'];
			}
			if(isset($depth1Value['Priority'])){
				$this->options['query']['LaunchTemplateConfig.' . ($depth1 + 1) . '.Priority'] = $depth1Value['Priority'];
			}
			if(isset($depth1Value['InstanceType'])){
				$this->options['query']['LaunchTemplateConfig.' . ($depth1 + 1) . '.InstanceType'] = $depth1Value['InstanceType'];
			}
			if(isset($depth1Value['WeightedCapacity'])){
				$this->options['query']['LaunchTemplateConfig.' . ($depth1 + 1) . '.WeightedCapacity'] = $depth1Value['WeightedCapacity'];
			}
		}

		return $this;
    }
}

/**
 * @method string getDataDiskPolicyEnabled()
 * @method $this withDataDiskPolicyEnabled($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDataDiskPolicyRetentionDays()
 * @method $this withDataDiskPolicyRetentionDays($value)
 * @method string getSystemDiskPolicyRetentionLastWeek()
 * @method $this withSystemDiskPolicyRetentionLastWeek($value)
 * @method string getSystemDiskPolicyRetentionDays()
 * @method $this withSystemDiskPolicyRetentionDays($value)
 * @method string getDataDiskPolicyTimePeriod()
 * @method $this withDataDiskPolicyTimePeriod($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getSystemDiskPolicyTimePeriod()
 * @method $this withSystemDiskPolicyTimePeriod($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDataDiskPolicyRetentionLastWeek()
 * @method $this withDataDiskPolicyRetentionLastWeek($value)
 * @method string getSystemDiskPolicyEnabled()
 * @method $this withSystemDiskPolicyEnabled($value)
 */
class ModifyAutoSnapshotPolicy extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCopyEncryptionConfiguration()
 * @method $this withCopyEncryptionConfiguration($value)
 * @method string getAutoSnapshotPolicyId()
 * @method string getCopiedSnapshotsRetentionDays()
 * @method $this withCopiedSnapshotsRetentionDays($value)
 * @method string getTimePoints()
 * @method string getRepeatWeekdays()
 * @method string getEnableCrossRegionCopy()
 * @method $this withEnableCrossRegionCopy($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAutoSnapshotPolicyName()
 * @method string getRetentionDays()
 * @method string getTargetCopyRegions()
 * @method $this withTargetCopyRegions($value)
 */
class ModifyAutoSnapshotPolicyEx extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAutoSnapshotPolicyId($value)
    {
        $this->data['AutoSnapshotPolicyId'] = $value;
        $this->options['query']['autoSnapshotPolicyId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTimePoints($value)
    {
        $this->data['TimePoints'] = $value;
        $this->options['query']['timePoints'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRepeatWeekdays($value)
    {
        $this->data['RepeatWeekdays'] = $value;
        $this->options['query']['repeatWeekdays'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAutoSnapshotPolicyName($value)
    {
        $this->data['AutoSnapshotPolicyName'] = $value;
        $this->options['query']['autoSnapshotPolicyName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRetentionDays($value)
    {
        $this->data['RetentionDays'] = $value;
        $this->options['query']['retentionDays'] = $value;

        return $this;
    }
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
class ModifyBandwidthPackageSpec extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPlatform()
 * @method $this withPlatform($value)
 * @method string getPrivatePoolOptionsId()
 * @method string getEndTimeType()
 * @method $this withEndTimeType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getPrivatePoolOptionsName()
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPackageType()
 * @method $this withPackageType($value)
 * @method string getInstanceAmount()
 * @method $this withInstanceAmount($value)
 */
class ModifyCapacityReservation extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPrivatePoolOptionsId($value)
    {
        $this->data['PrivatePoolOptionsId'] = $value;
        $this->options['query']['PrivatePoolOptions.Id'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPrivatePoolOptionsName($value)
    {
        $this->data['PrivatePoolOptionsName'] = $value;
        $this->options['query']['PrivatePoolOptions.Name'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAgentUpgradeConfig()
 * @method $this withAgentUpgradeConfig($value)
 * @method string getOssDeliveryConfig()
 * @method $this withOssDeliveryConfig($value)
 * @method string getSettingType()
 * @method $this withSettingType($value)
 * @method string getSlsDeliveryConfig()
 * @method $this withSlsDeliveryConfig($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyCloudAssistantSettings extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getWorkingDir()
 * @method $this withWorkingDir($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getCommandId()
 * @method $this withCommandId($value)
 * @method string getCommandContent()
 * @method $this withCommandContent($value)
 * @method string getTimeout()
 * @method $this withTimeout($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class ModifyCommand extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getCpuOverCommitRatio()
 * @method $this withCpuOverCommitRatio($value)
 * @method string getActionOnMaintenance()
 * @method $this withActionOnMaintenance($value)
 * @method string getDedicatedHostClusterId()
 * @method $this withDedicatedHostClusterId($value)
 * @method string getDedicatedHostName()
 * @method $this withDedicatedHostName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDedicatedHostId()
 * @method $this withDedicatedHostId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getNetworkAttributesSlbUdpTimeout()
 * @method string getAutoPlacement()
 * @method $this withAutoPlacement($value)
 * @method string getNetworkAttributesUdpTimeout()
 */
class ModifyDedicatedHostAttribute extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNetworkAttributesSlbUdpTimeout($value)
    {
        $this->data['NetworkAttributesSlbUdpTimeout'] = $value;
        $this->options['query']['NetworkAttributes.SlbUdpTimeout'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNetworkAttributesUdpTimeout($value)
    {
        $this->data['NetworkAttributesUdpTimeout'] = $value;
        $this->options['query']['NetworkAttributes.UdpTimeout'] = $value;

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
 * @method string getAutoReleaseTime()
 * @method $this withAutoReleaseTime($value)
 * @method string getDedicatedHostId()
 * @method $this withDedicatedHostId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyDedicatedHostAutoReleaseTime extends Rpc
{
}

/**
 * @method string getDedicatedHostIds()
 * @method $this withDedicatedHostIds($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDuration()
 * @method $this withDuration($value)
 * @method string getRenewalStatus()
 * @method $this withRenewalStatus($value)
 * @method string getAutoRenewWithEcs()
 * @method $this withAutoRenewWithEcs($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPeriodUnit()
 * @method $this withPeriodUnit($value)
 * @method string getAutoRenew()
 * @method $this withAutoRenew($value)
 */
class ModifyDedicatedHostAutoRenewAttribute extends Rpc
{
}

/**
 * @method string getDedicatedHostClusterName()
 * @method $this withDedicatedHostClusterName($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getDedicatedHostClusterId()
 * @method $this withDedicatedHostClusterId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyDedicatedHostClusterAttribute extends Rpc
{
}

/**
 * @method string getDedicatedHostIds()
 * @method $this withDedicatedHostIds($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDedicatedHostChargeType()
 * @method $this withDedicatedHostChargeType($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getAutoPay()
 * @method $this withAutoPay($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPromotionOptions()
 * @method $this withPromotionOptions($value)
 * @method string getDetailFee()
 * @method $this withDetailFee($value)
 * @method string getPeriodUnit()
 * @method $this withPeriodUnit($value)
 */
class ModifyDedicatedHostsChargeType extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getDemandDescription()
 * @method $this withDemandDescription($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getInstanceChargeType()
 * @method $this withInstanceChargeType($value)
 * @method string getDemandName()
 * @method $this withDemandName($value)
 * @method string getAmount()
 * @method $this withAmount($value)
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
 * @method string getPeriodUnit()
 * @method $this withPeriodUnit($value)
 * @method string getDemandId()
 * @method $this withDemandId($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 */
class ModifyDemand extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getDeploymentSetId()
 * @method $this withDeploymentSetId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDeploymentSetName()
 * @method $this withDeploymentSetName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyDeploymentSetAttribute extends Rpc
{
}

/**
 * @method array getMetricIds()
 * @method string getMetricSetId()
 * @method $this withMetricSetId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getMetricSetName()
 * @method $this withMetricSetName($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 */
class ModifyDiagnosticMetricSet extends Rpc
{

    /**
     * @param array $metricIds
     *
     * @return $this
     */
	public function withMetricIds(array $metricIds)
	{
	    $this->data['MetricIds'] = $metricIds;
		foreach ($metricIds as $i => $iValue) {
			$this->options['query']['MetricIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getDiskName()
 * @method $this withDiskName($value)
 * @method string getDeleteAutoSnapshot()
 * @method $this withDeleteAutoSnapshot($value)
 * @method array getDiskIds()
 * @method string getDiskId()
 * @method $this withDiskId($value)
 * @method string getDeleteWithInstance()
 * @method $this withDeleteWithInstance($value)
 * @method string getEnableAutoSnapshot()
 * @method $this withEnableAutoSnapshot($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getBurstingEnabled()
 * @method $this withBurstingEnabled($value)
 */
class ModifyDiskAttribute extends Rpc
{

    /**
     * @param array $diskIds
     *
     * @return $this
     */
	public function withDiskIds(array $diskIds)
	{
	    $this->data['DiskIds'] = $diskIds;
		foreach ($diskIds as $i => $iValue) {
			$this->options['query']['DiskIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDiskChargeType()
 * @method $this withDiskChargeType($value)
 * @method string getDiskIds()
 * @method $this withDiskIds($value)
 * @method string getAutoPay()
 * @method $this withAutoPay($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class ModifyDiskChargeType extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getKMSKeyId()
 * @method $this withKMSKeyId($value)
 */
class ModifyDiskDefaultKMSKeyId extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDiskCategory()
 * @method $this withDiskCategory($value)
 * @method string getDiskId()
 * @method $this withDiskId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getPerformanceLevel()
 * @method $this withPerformanceLevel($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getStorageClusterId()
 * @method $this withStorageClusterId($value)
 */
class ModifyDiskDeployment extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDiskCategory()
 * @method $this withDiskCategory($value)
 * @method string getDiskId()
 * @method $this withDiskId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getPerformanceLevel()
 * @method $this withPerformanceLevel($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getPerformanceControlOptions()
 * @method $this withPerformanceControlOptions($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getProvisionedIops()
 * @method $this withProvisionedIops($value)
 */
class ModifyDiskSpec extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
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
 */
class ModifyEipAddressAttribute extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getPrivatePoolOptionsId()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getPrivatePoolOptionsName()
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPackageType()
 * @method $this withPackageType($value)
 */
class ModifyElasticityAssurance extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPrivatePoolOptionsId($value)
    {
        $this->data['PrivatePoolOptionsId'] = $value;
        $this->options['query']['PrivatePoolOptions.Id'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPrivatePoolOptionsName($value)
    {
        $this->data['PrivatePoolOptionsName'] = $value;
        $this->options['query']['PrivatePoolOptions.Name'] = $value;

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
 * @method string getForwardEntryId()
 * @method $this withForwardEntryId($value)
 * @method string getExternalIp()
 * @method $this withExternalIp($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getIpProtocol()
 * @method $this withIpProtocol($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInternalPort()
 * @method $this withInternalPort($value)
 * @method string getExternalPort()
 * @method $this withExternalPort($value)
 */
class ModifyForwardEntry extends Rpc
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
 */
class ModifyHaVipAttribute extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getHpcClusterId()
 * @method $this withHpcClusterId($value)
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
 */
class ModifyHpcClusterAttribute extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getImageId()
 * @method $this withImageId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getFeatures()
 * @method $this withFeatures($value)
 * @method string getBootMode()
 * @method $this withBootMode($value)
 * @method string getImageName()
 * @method $this withImageName($value)
 * @method string getLicenseType()
 * @method $this withLicenseType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getImageFamily()
 * @method $this withImageFamily($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ModifyImageAttribute extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getImageId()
 * @method $this withImageId($value)
 * @method string getAddGroup1()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRemoveGroup1()
 */
class ModifyImageShareGroupPermission extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAddGroup1($value)
    {
        $this->data['AddGroup1'] = $value;
        $this->options['query']['AddGroup.1'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRemoveGroup1($value)
    {
        $this->data['RemoveGroup1'] = $value;
        $this->options['query']['RemoveGroup.1'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getImageId()
 * @method $this withImageId($value)
 * @method string getIsPublic()
 * @method $this withIsPublic($value)
 * @method string getLaunchPermission()
 * @method $this withLaunchPermission($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method array getAddAccount()
 * @method array getRemoveAccount()
 */
class ModifyImageSharePermission extends Rpc
{

    /**
     * @param array $addAccount
     *
     * @return $this
     */
	public function withAddAccount(array $addAccount)
	{
	    $this->data['AddAccount'] = $addAccount;
		foreach ($addAccount as $i => $iValue) {
			$this->options['query']['AddAccount.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $removeAccount
     *
     * @return $this
     */
	public function withRemoveAccount(array $removeAccount)
	{
	    $this->data['RemoveAccount'] = $removeAccount;
		foreach ($removeAccount as $i => $iValue) {
			$this->options['query']['RemoveAccount.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPrivatePoolOptionsMatchCriteria()
 * @method string getPrivatePoolOptionsId()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class ModifyInstanceAttachmentAttributes extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPrivatePoolOptionsMatchCriteria($value)
    {
        $this->data['PrivatePoolOptionsMatchCriteria'] = $value;
        $this->options['query']['PrivatePoolOptions.MatchCriteria'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPrivatePoolOptionsId($value)
    {
        $this->data['PrivatePoolOptionsId'] = $value;
        $this->options['query']['PrivatePoolOptions.Id'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getRecyclable()
 * @method $this withRecyclable($value)
 * @method string getNetworkInterfaceQueueNumber()
 * @method $this withNetworkInterfaceQueueNumber($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getDeletionProtection()
 * @method $this withDeletionProtection($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getPassword()
 * @method $this withPassword($value)
 * @method string getHostName()
 * @method $this withHostName($value)
 * @method string getPrivateDnsNameOptions()
 * @method $this withPrivateDnsNameOptions($value)
 * @method string getCpuOptionsTopologyType()
 * @method string getOSNameEn()
 * @method $this withOSNameEn($value)
 * @method string getEnableJumboFrame()
 * @method $this withEnableJumboFrame($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getCreditSpecification()
 * @method $this withCreditSpecification($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method array getSecurityGroupIds()
 * @method string getAdditionalInfo()
 * @method $this withAdditionalInfo($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getInstanceName()
 * @method $this withInstanceName($value)
 * @method string getRemoteConnectionOptions()
 * @method $this withRemoteConnectionOptions($value)
 */
class ModifyInstanceAttribute extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCpuOptionsTopologyType($value)
    {
        $this->data['CpuOptionsTopologyType'] = $value;
        $this->options['query']['CpuOptions.TopologyType'] = $value;

        return $this;
    }

    /**
     * @param array $securityGroupIds
     *
     * @return $this
     */
	public function withSecurityGroupIds(array $securityGroupIds)
	{
	    $this->data['SecurityGroupIds'] = $securityGroupIds;
		foreach ($securityGroupIds as $i => $iValue) {
			$this->options['query']['SecurityGroupIds.' . ($i + 1)] = $iValue;
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
 * @method string getAutoReleaseTime()
 * @method $this withAutoReleaseTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class ModifyInstanceAutoReleaseTime extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDuration()
 * @method $this withDuration($value)
 * @method string getRenewalStatus()
 * @method $this withRenewalStatus($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPeriodUnit()
 * @method $this withPeriodUnit($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getAutoRenew()
 * @method $this withAutoRenew($value)
 */
class ModifyInstanceAutoRenewAttribute extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getIsDetailFee()
 * @method $this withIsDetailFee($value)
 * @method string getInstanceChargeType()
 * @method $this withInstanceChargeType($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getAutoPay()
 * @method $this withAutoPay($value)
 * @method string getIncludeDataDisks()
 * @method $this withIncludeDataDisks($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPromotionOptions()
 * @method $this withPromotionOptions($value)
 * @method string getPeriodUnit()
 * @method $this withPeriodUnit($value)
 * @method string getInstanceIds()
 * @method $this withInstanceIds($value)
 */
class ModifyInstanceChargeType extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getRemoveFromDeploymentSet()
 * @method $this withRemoveFromDeploymentSet($value)
 * @method string getDeploymentSetGroupNo()
 * @method $this withDeploymentSetGroupNo($value)
 * @method string getDedicatedHostClusterId()
 * @method $this withDedicatedHostClusterId($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getDeploymentSetId()
 * @method $this withDeploymentSetId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getTenancy()
 * @method $this withTenancy($value)
 * @method string getDedicatedHostId()
 * @method $this withDedicatedHostId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getForce()
 * @method $this withForce($value)
 * @method string getMigrationType()
 * @method $this withMigrationType($value)
 * @method string getAffinity()
 * @method $this withAffinity($value)
 */
class ModifyInstanceDeployment extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method array getMaintenanceWindow()
 * @method string getActionOnMaintenance()
 * @method $this withActionOnMaintenance($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getNotifyOnMaintenance()
 * @method $this withNotifyOnMaintenance($value)
 * @method array getInstanceId()
 */
class ModifyInstanceMaintenanceAttributes extends Rpc
{

    /**
     * @param array $maintenanceWindow
     *
     * @return $this
     */
	public function withMaintenanceWindow(array $maintenanceWindow)
	{
	    $this->data['MaintenanceWindow'] = $maintenanceWindow;
		foreach ($maintenanceWindow as $depth1 => $depth1Value) {
			if(isset($depth1Value['EndTime'])){
				$this->options['query']['MaintenanceWindow.' . ($depth1 + 1) . '.EndTime'] = $depth1Value['EndTime'];
			}
			if(isset($depth1Value['StartTime'])){
				$this->options['query']['MaintenanceWindow.' . ($depth1 + 1) . '.StartTime'] = $depth1Value['StartTime'];
			}
		}

		return $this;
    }

    /**
     * @param array $instanceId
     *
     * @return $this
     */
	public function withInstanceId(array $instanceId)
	{
	    $this->data['InstanceId'] = $instanceId;
		foreach ($instanceId as $i => $iValue) {
			$this->options['query']['InstanceId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getInstanceMetadataTags()
 * @method $this withInstanceMetadataTags($value)
 * @method string getHttpPutResponseHopLimit()
 * @method $this withHttpPutResponseHopLimit($value)
 * @method string getHttpEndpoint()
 * @method $this withHttpEndpoint($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getHttpTokens()
 * @method $this withHttpTokens($value)
 */
class ModifyInstanceMetadataOptions extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getISP()
 * @method $this withISP($value)
 * @method string getInternetMaxBandwidthOut()
 * @method $this withInternetMaxBandwidthOut($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getAutoPay()
 * @method $this withAutoPay($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPromotionOptions()
 * @method $this withPromotionOptions($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getNetworkChargeType()
 * @method $this withNetworkChargeType($value)
 * @method string getInternetMaxBandwidthIn()
 * @method $this withInternetMaxBandwidthIn($value)
 * @method string getAllocatePublicIp()
 * @method $this withAllocatePublicIp($value)
 */
class ModifyInstanceNetworkSpec extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getAllowMigrateAcrossZone()
 * @method $this withAllowMigrateAcrossZone($value)
 * @method string getInternetMaxBandwidthOut()
 * @method $this withInternetMaxBandwidthOut($value)
 * @method string getSystemDiskCategory()
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getTemporaryEndTime()
 * @method string getModifyMode()
 * @method $this withModifyMode($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTemporaryInternetMaxBandwidthOut()
 * @method string getTemporaryStartTime()
 * @method string getAsync()
 * @method $this withAsync($value)
 * @method array getDisk()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getInternetMaxBandwidthIn()
 * @method $this withInternetMaxBandwidthIn($value)
 */
class ModifyInstanceSpec extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSystemDiskCategory($value)
    {
        $this->data['SystemDiskCategory'] = $value;
        $this->options['query']['SystemDisk.Category'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTemporaryEndTime($value)
    {
        $this->data['TemporaryEndTime'] = $value;
        $this->options['query']['Temporary.EndTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTemporaryInternetMaxBandwidthOut($value)
    {
        $this->data['TemporaryInternetMaxBandwidthOut'] = $value;
        $this->options['query']['Temporary.InternetMaxBandwidthOut'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTemporaryStartTime($value)
    {
        $this->data['TemporaryStartTime'] = $value;
        $this->options['query']['Temporary.StartTime'] = $value;

        return $this;
    }

    /**
     * @param array $disk
     *
     * @return $this
     */
	public function withDisk(array $disk)
	{
	    $this->data['Disk'] = $disk;
		foreach ($disk as $depth1 => $depth1Value) {
			if(isset($depth1Value['PerformanceLevel'])){
				$this->options['query']['Disk.' . ($depth1 + 1) . '.PerformanceLevel'] = $depth1Value['PerformanceLevel'];
			}
			if(isset($depth1Value['DiskId'])){
				$this->options['query']['Disk.' . ($depth1 + 1) . '.DiskId'] = $depth1Value['DiskId'];
			}
			if(isset($depth1Value['Category'])){
				$this->options['query']['Disk.' . ($depth1 + 1) . '.Category'] = $depth1Value['Category'];
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
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getVncPassword()
 * @method $this withVncPassword($value)
 */
class ModifyInstanceVncPasswd extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method array getSecurityGroupId()
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
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 */
class ModifyInstanceVpcAttribute extends Rpc
{

    /**
     * @param array $securityGroupId
     *
     * @return $this
     */
	public function withSecurityGroupId(array $securityGroupId)
	{
	    $this->data['SecurityGroupId'] = $securityGroupId;
		foreach ($securityGroupId as $i => $iValue) {
			$this->options['query']['SecurityGroupId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCommandContent()
 * @method $this withCommandContent($value)
 * @method string getFrequency()
 * @method $this withFrequency($value)
 * @method string getContentEncoding()
 * @method $this withContentEncoding($value)
 * @method string getInvokeId()
 * @method $this withInvokeId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method array getInstanceId()
 * @method string getParameters()
 * @method $this withParameters($value)
 * @method string getEnableParameter()
 * @method $this withEnableParameter($value)
 */
class ModifyInvocationAttribute extends Rpc
{

    /**
     * @param array $instanceId
     *
     * @return $this
     */
	public function withInstanceId(array $instanceId)
	{
	    $this->data['InstanceId'] = $instanceId;
		foreach ($instanceId as $i => $iValue) {
			$this->options['query']['InstanceId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getLaunchTemplateName()
 * @method $this withLaunchTemplateName($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getLaunchTemplateId()
 * @method $this withLaunchTemplateId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDefaultVersionNumber()
 * @method $this withDefaultVersionNumber($value)
 */
class ModifyLaunchTemplateDefaultVersion extends Rpc
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
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getInstanceName()
 * @method $this withInstanceName($value)
 */
class ModifyManagedInstance extends Rpc
{
}

/**
 * @method string getQueueNumber()
 * @method $this withQueueNumber($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method array getSecurityGroupId()
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getNetworkInterfaceTrafficConfig()
 * @method $this withNetworkInterfaceTrafficConfig($value)
 * @method string getEnhancedNetwork()
 * @method $this withEnhancedNetwork($value)
 * @method string getSourceDestCheck()
 * @method $this withSourceDestCheck($value)
 * @method string getNetworkInterfaceName()
 * @method $this withNetworkInterfaceName($value)
 * @method string getTxQueueSize()
 * @method $this withTxQueueSize($value)
 * @method string getDeleteOnRelease()
 * @method $this withDeleteOnRelease($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getRxQueueSize()
 * @method $this withRxQueueSize($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getConnectionTrackingConfiguration()
 * @method $this withConnectionTrackingConfiguration($value)
 * @method string getNetworkInterfaceId()
 * @method $this withNetworkInterfaceId($value)
 */
class ModifyNetworkInterfaceAttribute extends Rpc
{

    /**
     * @param array $securityGroupId
     *
     * @return $this
     */
	public function withSecurityGroupId(array $securityGroupId)
	{
	    $this->data['SecurityGroupId'] = $securityGroupId;
		foreach ($securityGroupId as $i => $iValue) {
			$this->options['query']['SecurityGroupId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
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
 * @method string getUserCidr()
 * @method $this withUserCidr($value)
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
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getPrefixListId()
 * @method $this withPrefixListId($value)
 * @method array getAddEntry()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPrefixListName()
 * @method $this withPrefixListName($value)
 * @method array getRemoveEntry()
 */
class ModifyPrefixList extends Rpc
{

    /**
     * @param array $addEntry
     *
     * @return $this
     */
	public function withAddEntry(array $addEntry)
	{
	    $this->data['AddEntry'] = $addEntry;
		foreach ($addEntry as $depth1 => $depth1Value) {
			if(isset($depth1Value['Description'])){
				$this->options['query']['AddEntry.' . ($depth1 + 1) . '.Description'] = $depth1Value['Description'];
			}
			if(isset($depth1Value['Cidr'])){
				$this->options['query']['AddEntry.' . ($depth1 + 1) . '.Cidr'] = $depth1Value['Cidr'];
			}
		}

		return $this;
    }

    /**
     * @param array $removeEntry
     *
     * @return $this
     */
	public function withRemoveEntry(array $removeEntry)
	{
	    $this->data['RemoveEntry'] = $removeEntry;
		foreach ($removeEntry as $depth1 => $depth1Value) {
			if(isset($depth1Value['Cidr'])){
				$this->options['query']['RemoveEntry.' . ($depth1 + 1) . '.Cidr'] = $depth1Value['Cidr'];
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
 * @method string getCouponNo()
 * @method $this withCouponNo($value)
 * @method string getOperatorType()
 * @method $this withOperatorType($value)
 * @method string getSystemDiskCategory()
 * @method string getRebootTime()
 * @method $this withRebootTime($value)
 * @method string getMigrateAcrossZone()
 * @method $this withMigrateAcrossZone($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getModifyMode()
 * @method $this withModifyMode($value)
 * @method string getAutoPay()
 * @method $this withAutoPay($value)
 * @method string getRebootWhenFinished()
 * @method $this withRebootWhenFinished($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPromotionOptions()
 * @method $this withPromotionOptions($value)
 * @method array getDisk()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class ModifyPrepayInstanceSpec extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSystemDiskCategory($value)
    {
        $this->data['SystemDiskCategory'] = $value;
        $this->options['query']['SystemDisk.Category'] = $value;

        return $this;
    }

    /**
     * @param array $disk
     *
     * @return $this
     */
	public function withDisk(array $disk)
	{
	    $this->data['Disk'] = $disk;
		foreach ($disk as $depth1 => $depth1Value) {
			if(isset($depth1Value['PerformanceLevel'])){
				$this->options['query']['Disk.' . ($depth1 + 1) . '.PerformanceLevel'] = $depth1Value['PerformanceLevel'];
			}
			if(isset($depth1Value['DiskId'])){
				$this->options['query']['Disk.' . ($depth1 + 1) . '.DiskId'] = $depth1Value['DiskId'];
			}
			if(isset($depth1Value['Category'])){
				$this->options['query']['Disk.' . ($depth1 + 1) . '.Category'] = $depth1Value['Category'];
			}
		}

		return $this;
    }
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
 * @method string getReservedInstanceId()
 * @method $this withReservedInstanceId($value)
 * @method string getReservedInstanceName()
 * @method $this withReservedInstanceName($value)
 */
class ModifyReservedInstanceAttribute extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getRenewalStatus()
 * @method $this withRenewalStatus($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPeriodUnit()
 * @method $this withPeriodUnit($value)
 * @method array getReservedInstanceId()
 */
class ModifyReservedInstanceAutoRenewAttribute extends Rpc
{

    /**
     * @param array $reservedInstanceId
     *
     * @return $this
     */
	public function withReservedInstanceId(array $reservedInstanceId)
	{
	    $this->data['ReservedInstanceId'] = $reservedInstanceId;
		foreach ($reservedInstanceId as $i => $iValue) {
			$this->options['query']['ReservedInstanceId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method array getConfiguration()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method array getReservedInstanceId()
 */
class ModifyReservedInstances extends Rpc
{

    /**
     * @param array $configuration
     *
     * @return $this
     */
	public function withConfiguration(array $configuration)
	{
	    $this->data['Configuration'] = $configuration;
		foreach ($configuration as $depth1 => $depth1Value) {
			if(isset($depth1Value['ReservedInstanceName'])){
				$this->options['query']['Configuration.' . ($depth1 + 1) . '.ReservedInstanceName'] = $depth1Value['ReservedInstanceName'];
			}
			if(isset($depth1Value['ZoneId'])){
				$this->options['query']['Configuration.' . ($depth1 + 1) . '.ZoneId'] = $depth1Value['ZoneId'];
			}
			if(isset($depth1Value['Scope'])){
				$this->options['query']['Configuration.' . ($depth1 + 1) . '.Scope'] = $depth1Value['Scope'];
			}
			if(isset($depth1Value['InstanceType'])){
				$this->options['query']['Configuration.' . ($depth1 + 1) . '.InstanceType'] = $depth1Value['InstanceType'];
			}
			if(isset($depth1Value['InstanceAmount'])){
				$this->options['query']['Configuration.' . ($depth1 + 1) . '.InstanceAmount'] = $depth1Value['InstanceAmount'];
			}
		}

		return $this;
    }

    /**
     * @param array $reservedInstanceId
     *
     * @return $this
     */
	public function withReservedInstanceId(array $reservedInstanceId)
	{
	    $this->data['ReservedInstanceId'] = $reservedInstanceId;
		foreach ($reservedInstanceId as $i => $iValue) {
			$this->options['query']['ReservedInstanceId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
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
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
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
 * @method string getUserCidr()
 * @method $this withUserCidr($value)
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
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getSecurityGroupName()
 * @method $this withSecurityGroupName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifySecurityGroupAttribute extends Rpc
{
}

/**
 * @method string getNicType()
 * @method $this withNicType($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSourcePortRange()
 * @method $this withSourcePortRange($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDestPrefixListId()
 * @method $this withDestPrefixListId($value)
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getPolicy()
 * @method $this withPolicy($value)
 * @method string getIpv6DestCidrIp()
 * @method $this withIpv6DestCidrIp($value)
 * @method string getIpv6SourceCidrIp()
 * @method $this withIpv6SourceCidrIp($value)
 * @method string getPortRange()
 * @method $this withPortRange($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getIpProtocol()
 * @method $this withIpProtocol($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getSourceCidrIp()
 * @method $this withSourceCidrIp($value)
 * @method string getDestGroupId()
 * @method $this withDestGroupId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPriority()
 * @method $this withPriority($value)
 * @method string getDestGroupOwnerAccount()
 * @method $this withDestGroupOwnerAccount($value)
 * @method string getDestCidrIp()
 * @method $this withDestCidrIp($value)
 * @method string getDestGroupOwnerId()
 * @method $this withDestGroupOwnerId($value)
 * @method string getSecurityGroupRuleId()
 * @method $this withSecurityGroupRuleId($value)
 */
class ModifySecurityGroupEgressRule extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getInnerAccessPolicy()
 * @method $this withInnerAccessPolicy($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifySecurityGroupPolicy extends Rpc
{
}

/**
 * @method string getNicType()
 * @method $this withNicType($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSourcePrefixListId()
 * @method $this withSourcePrefixListId($value)
 * @method string getSourcePortRange()
 * @method $this withSourcePortRange($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getSourceGroupOwnerId()
 * @method $this withSourceGroupOwnerId($value)
 * @method string getSourceGroupOwnerAccount()
 * @method $this withSourceGroupOwnerAccount($value)
 * @method string getPolicy()
 * @method $this withPolicy($value)
 * @method string getIpv6SourceCidrIp()
 * @method $this withIpv6SourceCidrIp($value)
 * @method string getIpv6DestCidrIp()
 * @method $this withIpv6DestCidrIp($value)
 * @method string getPortRange()
 * @method $this withPortRange($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getIpProtocol()
 * @method $this withIpProtocol($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getSourceCidrIp()
 * @method $this withSourceCidrIp($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPriority()
 * @method $this withPriority($value)
 * @method string getDestCidrIp()
 * @method $this withDestCidrIp($value)
 * @method string getSourceGroupId()
 * @method $this withSourceGroupId($value)
 * @method string getSecurityGroupRuleId()
 * @method $this withSecurityGroupRuleId($value)
 */
class ModifySecurityGroupRule extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSnapshotId()
 * @method $this withSnapshotId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getSnapshotName()
 * @method $this withSnapshotName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDisableInstantAccess()
 * @method $this withDisableInstantAccess($value)
 * @method string getRetentionDays()
 * @method $this withRetentionDays($value)
 */
class ModifySnapshotAttribute extends Rpc
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
 * @method string getSnapshotGroupId()
 * @method $this withSnapshotGroupId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class ModifySnapshotGroup extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getStorageCapacityUnitId()
 * @method $this withStorageCapacityUnitId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class ModifyStorageCapacityUnitAttribute extends Rpc
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
 * @method string getStorageSetId()
 * @method $this withStorageSetId($value)
 * @method string getStorageSetName()
 * @method $this withStorageSetName($value)
 */
class ModifyStorageSetAttribute extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getStatusValue()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getStatusKey()
 */
class ModifyUserBusinessBehavior extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStatusValue($value)
    {
        $this->data['StatusValue'] = $value;
        $this->options['query']['statusValue'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStatusKey($value)
    {
        $this->data['StatusKey'] = $value;
        $this->options['query']['statusKey'] = $value;

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
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getVbrId()
 * @method $this withVbrId($value)
 * @method string getPeerGatewayIp()
 * @method $this withPeerGatewayIp($value)
 * @method string getPeeringSubnetMask()
 * @method $this withPeeringSubnetMask($value)
 * @method string getLocalGatewayIp()
 * @method $this withLocalGatewayIp($value)
 * @method string getUserCidr()
 * @method $this withUserCidr($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class ModifyVirtualBorderRouterAttribute extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getVpcName()
 * @method $this withVpcName($value)
 * @method string getUserCidr()
 * @method $this withUserCidr($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
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
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getVSwitchName()
 * @method $this withVSwitchName($value)
 */
class ModifyVSwitchAttribute extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPlatform()
 * @method $this withPlatform($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getScope()
 * @method $this withScope($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method array getTag()
 * @method string getAutoRenewPeriod()
 * @method $this withAutoRenewPeriod($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPeriodUnit()
 * @method $this withPeriodUnit($value)
 * @method string getOfferingType()
 * @method $this withOfferingType($value)
 * @method string getAutoRenew()
 * @method $this withAutoRenew($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getReservedInstanceName()
 * @method $this withReservedInstanceName($value)
 * @method string getInstanceAmount()
 * @method $this withInstanceAmount($value)
 */
class PurchaseReservedInstancesOffering extends Rpc
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
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getCapacity()
 * @method $this withCapacity($value)
 * @method array getTag()
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getAmount()
 * @method $this withAmount($value)
 * @method string getFromApp()
 * @method $this withFromApp($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPeriodUnit()
 * @method $this withPeriodUnit($value)
 * @method string getName()
 * @method $this withName($value)
 */
class PurchaseStorageCapacityUnit extends Rpc
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
class ReActivateInstances extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getForceStop()
 * @method $this withForceStop($value)
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
class RebootInstance extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getBatchOptimization()
 * @method $this withBatchOptimization($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getForceReboot()
 * @method $this withForceReboot($value)
 * @method array getInstanceId()
 */
class RebootInstances extends Rpc
{

    /**
     * @param array $instanceId
     *
     * @return $this
     */
	public function withInstanceId(array $instanceId)
	{
	    $this->data['InstanceId'] = $instanceId;
		foreach ($instanceId as $i => $iValue) {
			$this->options['query']['InstanceId.' . ($i + 1)] = $iValue;
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
 * @method string getUserCidr()
 * @method $this withUserCidr($value)
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
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDedicatedHostId()
 * @method $this withDedicatedHostId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class RedeployDedicatedHost extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getForceStop()
 * @method $this withForceStop($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class RedeployInstance extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAutoStartInstance()
 * @method $this withAutoStartInstance($value)
 * @method string getSecurityEnhancementStrategy()
 * @method $this withSecurityEnhancementStrategy($value)
 * @method string getKeyPairName()
 * @method $this withKeyPairName($value)
 * @method string getPassword()
 * @method $this withPassword($value)
 * @method string getLoginAsNonRoot()
 * @method $this withLoginAsNonRoot($value)
 * @method string getDiskId()
 * @method $this withDiskId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ReInitDisk extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPrivatePoolOptionsId()
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ReleaseCapacityReservation extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPrivatePoolOptionsId($value)
    {
        $this->data['PrivatePoolOptionsId'] = $value;
        $this->options['query']['PrivatePoolOptions.Id'] = $value;

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
 * @method string getDedicatedHostId()
 * @method $this withDedicatedHostId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ReleaseDedicatedHost extends Rpc
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
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getPublicIpAddress()
 * @method $this withPublicIpAddress($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class ReleasePublicIpAddress extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method array getRemovedIpAddresses()
 * @method string getBandwidthPackageId()
 * @method $this withBandwidthPackageId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class RemoveBandwidthPackageIps extends Rpc
{

    /**
     * @param array $removedIpAddresses
     *
     * @return $this
     */
	public function withRemovedIpAddresses(array $removedIpAddresses)
	{
	    $this->data['RemovedIpAddresses'] = $removedIpAddresses;
		foreach ($removedIpAddresses as $i => $iValue) {
			$this->options['query']['RemovedIpAddresses.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method array getTag()
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 */
class RemoveTags extends Rpc
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
 * @method string getDedicatedHostIds()
 * @method $this withDedicatedHostIds($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPeriodUnit()
 * @method $this withPeriodUnit($value)
 */
class RenewDedicatedHosts extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method array getPrivatePoolOptionsId()
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
 * @method string getPeriodUnit()
 * @method $this withPeriodUnit($value)
 */
class RenewElasticityAssurances extends Rpc
{

    /** @var string */
    public $scheme = 'https';

    /**
     * @param array $privatePoolOptionsId
     *
     * @return $this
     */
	public function withPrivatePoolOptionsId(array $privatePoolOptionsId)
	{
	    $this->data['PrivatePoolOptionsId'] = $privatePoolOptionsId;
		foreach ($privatePoolOptionsId as $i => $iValue) {
			$this->options['query']['PrivatePoolOptions.Id.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getExpectedRenewDay()
 * @method $this withExpectedRenewDay($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPeriodUnit()
 * @method $this withPeriodUnit($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class RenewInstance extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getAutoRenewPeriod()
 * @method $this withAutoRenewPeriod($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPeriodUnit()
 * @method $this withPeriodUnit($value)
 * @method array getReservedInstanceId()
 * @method string getAutoRenew()
 * @method $this withAutoRenew($value)
 */
class RenewReservedInstances extends Rpc
{

    /**
     * @param array $reservedInstanceId
     *
     * @return $this
     */
	public function withReservedInstanceId(array $reservedInstanceId)
	{
	    $this->data['ReservedInstanceId'] = $reservedInstanceId;
		foreach ($reservedInstanceId as $i => $iValue) {
			$this->options['query']['ReservedInstanceId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getImageId()
 * @method $this withImageId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getEncryptAlgorithm()
 * @method $this withEncryptAlgorithm($value)
 * @method string getSecurityEnhancementStrategy()
 * @method $this withSecurityEnhancementStrategy($value)
 * @method string getKeyPairName()
 * @method $this withKeyPairName($value)
 * @method string getPlatform()
 * @method $this withPlatform($value)
 * @method string getPassword()
 * @method $this withPassword($value)
 * @method string getLoginAsNonRoot()
 * @method $this withLoginAsNonRoot($value)
 * @method string getPasswordInherit()
 * @method $this withPasswordInherit($value)
 * @method string getDiskId()
 * @method $this withDiskId($value)
 * @method array getArn()
 * @method string getArchitecture()
 * @method $this withArchitecture($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSystemDiskSize()
 * @method string getEncrypted()
 * @method $this withEncrypted($value)
 * @method string getKMSKeyId()
 * @method $this withKMSKeyId($value)
 * @method string getUseAdditionalService()
 * @method $this withUseAdditionalService($value)
 */
class ReplaceSystemDisk extends Rpc
{

    /**
     * @param array $arn
     *
     * @return $this
     */
	public function withArn(array $arn)
	{
	    $this->data['Arn'] = $arn;
		foreach ($arn as $depth1 => $depth1Value) {
			if(isset($depth1Value['Rolearn'])){
				$this->options['query']['Arn.' . ($depth1 + 1) . '.Rolearn'] = $depth1Value['Rolearn'];
			}
			if(isset($depth1Value['RoleType'])){
				$this->options['query']['Arn.' . ($depth1 + 1) . '.RoleType'] = $depth1Value['RoleType'];
			}
			if(isset($depth1Value['AssumeRoleFor'])){
				$this->options['query']['Arn.' . ($depth1 + 1) . '.AssumeRoleFor'] = $depth1Value['AssumeRoleFor'];
			}
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSystemDiskSize($value)
    {
        $this->data['SystemDiskSize'] = $value;
        $this->options['query']['SystemDisk.Size'] = $value;

        return $this;
    }
}

/**
 * @method string getReason()
 * @method $this withReason($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getIssueCategory()
 * @method $this withIssueCategory($value)
 * @method array getDiskId()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method array getInstanceId()
 * @method array getDevice()
 */
class ReportInstancesStatus extends Rpc
{

    /**
     * @param array $diskId
     *
     * @return $this
     */
	public function withDiskId(array $diskId)
	{
	    $this->data['DiskId'] = $diskId;
		foreach ($diskId as $i => $iValue) {
			$this->options['query']['DiskId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $instanceId
     *
     * @return $this
     */
	public function withInstanceId(array $instanceId)
	{
	    $this->data['InstanceId'] = $instanceId;
		foreach ($instanceId as $i => $iValue) {
			$this->options['query']['InstanceId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $device
     *
     * @return $this
     */
	public function withDevice(array $device)
	{
	    $this->data['Device'] = $device;
		foreach ($device as $i => $iValue) {
			$this->options['query']['Device.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSnapshotId()
 * @method $this withSnapshotId($value)
 * @method string getDiskId()
 * @method $this withDiskId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ResetDisk extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 */
class ResetDiskDefaultKMSKeyId extends Rpc
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
 * @method array getDisk()
 */
class ResetDisks extends Rpc
{

    /**
     * @param array $disk
     *
     * @return $this
     */
	public function withDisk(array $disk)
	{
	    $this->data['Disk'] = $disk;
		foreach ($disk as $depth1 => $depth1Value) {
			if(isset($depth1Value['SnapshotId'])){
				$this->options['query']['Disk.' . ($depth1 + 1) . '.SnapshotId'] = $depth1Value['SnapshotId'];
			}
			if(isset($depth1Value['DiskId'])){
				$this->options['query']['Disk.' . ($depth1 + 1) . '.DiskId'] = $depth1Value['DiskId'];
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
 * @method string getType()
 * @method $this withType($value)
 * @method string getDiskId()
 * @method $this withDiskId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getNewSize()
 * @method $this withNewSize($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ResizeDisk extends Rpc
{
}

/**
 * @method string getNicType()
 * @method $this withNicType($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSourcePrefixListId()
 * @method $this withSourcePrefixListId($value)
 * @method string getSourcePortRange()
 * @method $this withSourcePortRange($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getSourceGroupOwnerId()
 * @method $this withSourceGroupOwnerId($value)
 * @method string getSourceGroupOwnerAccount()
 * @method $this withSourceGroupOwnerAccount($value)
 * @method string getPermissions()
 * @method $this withPermissions($value)
 * @method string getPolicy()
 * @method $this withPolicy($value)
 * @method string getIpv6SourceCidrIp()
 * @method $this withIpv6SourceCidrIp($value)
 * @method string getIpv6DestCidrIp()
 * @method $this withIpv6DestCidrIp($value)
 * @method string getPortRange()
 * @method $this withPortRange($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getIpProtocol()
 * @method $this withIpProtocol($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getSourceCidrIp()
 * @method $this withSourceCidrIp($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPriority()
 * @method $this withPriority($value)
 * @method string getDestCidrIp()
 * @method $this withDestCidrIp($value)
 * @method string getSourceGroupId()
 * @method $this withSourceGroupId($value)
 * @method array getSecurityGroupRuleId()
 */
class RevokeSecurityGroup extends Rpc
{

    /**
     * @param array $securityGroupRuleId
     *
     * @return $this
     */
	public function withSecurityGroupRuleId(array $securityGroupRuleId)
	{
	    $this->data['SecurityGroupRuleId'] = $securityGroupRuleId;
		foreach ($securityGroupRuleId as $i => $iValue) {
			$this->options['query']['SecurityGroupRuleId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getNicType()
 * @method $this withNicType($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSourcePortRange()
 * @method $this withSourcePortRange($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDestPrefixListId()
 * @method $this withDestPrefixListId($value)
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getPermissions()
 * @method $this withPermissions($value)
 * @method string getPolicy()
 * @method $this withPolicy($value)
 * @method string getIpv6DestCidrIp()
 * @method $this withIpv6DestCidrIp($value)
 * @method string getIpv6SourceCidrIp()
 * @method $this withIpv6SourceCidrIp($value)
 * @method string getPortRange()
 * @method $this withPortRange($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getIpProtocol()
 * @method $this withIpProtocol($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getSourceCidrIp()
 * @method $this withSourceCidrIp($value)
 * @method string getDestGroupId()
 * @method $this withDestGroupId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPriority()
 * @method $this withPriority($value)
 * @method string getDestGroupOwnerAccount()
 * @method $this withDestGroupOwnerAccount($value)
 * @method string getDestCidrIp()
 * @method $this withDestCidrIp($value)
 * @method string getDestGroupOwnerId()
 * @method $this withDestGroupOwnerId($value)
 * @method array getSecurityGroupRuleId()
 */
class RevokeSecurityGroupEgress extends Rpc
{

    /**
     * @param array $securityGroupRuleId
     *
     * @return $this
     */
	public function withSecurityGroupRuleId(array $securityGroupRuleId)
	{
	    $this->data['SecurityGroupRuleId'] = $securityGroupRuleId;
		foreach ($securityGroupRuleId as $i => $iValue) {
			$this->options['query']['SecurityGroupRuleId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getWorkingDir()
 * @method $this withWorkingDir($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getFrequency()
 * @method $this withFrequency($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getRepeatMode()
 * @method $this withRepeatMode($value)
 * @method array getTag()
 * @method string getKeepCommand()
 * @method $this withKeepCommand($value)
 * @method string getTimed()
 * @method $this withTimed($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method array getInstanceId()
 * @method string getName()
 * @method $this withName($value)
 * @method string getContainerId()
 * @method $this withContainerId($value)
 * @method string getParameters()
 * @method $this withParameters($value)
 * @method string getLauncher()
 * @method $this withLauncher($value)
 * @method string getContainerName()
 * @method $this withContainerName($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getCommandContent()
 * @method $this withCommandContent($value)
 * @method string getTimeout()
 * @method $this withTimeout($value)
 * @method string getContentEncoding()
 * @method $this withContentEncoding($value)
 * @method string getWindowsPasswordName()
 * @method $this withWindowsPasswordName($value)
 * @method array getResourceTag()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getTerminationMode()
 * @method $this withTerminationMode($value)
 * @method string getEnableParameter()
 * @method $this withEnableParameter($value)
 * @method string getUsername()
 * @method $this withUsername($value)
 */
class RunCommand extends Rpc
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
     * @param array $instanceId
     *
     * @return $this
     */
	public function withInstanceId(array $instanceId)
	{
	    $this->data['InstanceId'] = $instanceId;
		foreach ($instanceId as $i => $iValue) {
			$this->options['query']['InstanceId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $resourceTag
     *
     * @return $this
     */
	public function withResourceTag(array $resourceTag)
	{
	    $this->data['ResourceTag'] = $resourceTag;
		foreach ($resourceTag as $depth1 => $depth1Value) {
			if(isset($depth1Value['Key'])){
				$this->options['query']['ResourceTag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
			if(isset($depth1Value['Value'])){
				$this->options['query']['ResourceTag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
		}

		return $this;
    }
}

/**
 * @method string getUniqueSuffix()
 * @method $this withUniqueSuffix($value)
 * @method string getSecurityEnhancementStrategy()
 * @method $this withSecurityEnhancementStrategy($value)
 * @method string getMinAmount()
 * @method $this withMinAmount($value)
 * @method string getDeletionProtection()
 * @method $this withDeletionProtection($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getPrivatePoolOptionsMatchCriteria()
 * @method string getHostName()
 * @method $this withHostName($value)
 * @method string getPassword()
 * @method $this withPassword($value)
 * @method string getSystemDisk()
 * @method $this withSystemDisk($value)
 * @method string getImageOptions()
 * @method $this withImageOptions($value)
 * @method string getDeploymentSetGroupNo()
 * @method $this withDeploymentSetGroupNo($value)
 * @method string getSystemDiskAutoSnapshotPolicyId()
 * @method string getCpuOptionsCore()
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getCpuOptionsNuma()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSpotStrategy()
 * @method $this withSpotStrategy($value)
 * @method string getPrivateIpAddress()
 * @method $this withPrivateIpAddress($value)
 * @method string getPeriodUnit()
 * @method $this withPeriodUnit($value)
 * @method string getAutoRenew()
 * @method $this withAutoRenew($value)
 * @method string getInternetChargeType()
 * @method $this withInternetChargeType($value)
 * @method string getInternetMaxBandwidthIn()
 * @method $this withInternetMaxBandwidthIn($value)
 * @method string getAffinity()
 * @method $this withAffinity($value)
 * @method string getImageId()
 * @method $this withImageId($value)
 * @method string getSpotInterruptionBehavior()
 * @method $this withSpotInterruptionBehavior($value)
 * @method string getNetworkInterfaceQueueNumber()
 * @method $this withNetworkInterfaceQueueNumber($value)
 * @method array getSystemTag()
 * @method string getIoOptimized()
 * @method $this withIoOptimized($value)
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getHibernationOptionsConfigured()
 * @method string getSystemDiskPerformanceLevel()
 * @method string getPasswordInherit()
 * @method $this withPasswordInherit($value)
 * @method string getPrivateDnsNameOptions()
 * @method $this withPrivateDnsNameOptions($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method array getArn()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getSchedulerOptionsDedicatedHostClusterId()
 * @method string getSystemDiskDiskName()
 * @method string getDedicatedHostId()
 * @method $this withDedicatedHostId($value)
 * @method string getSpotDuration()
 * @method $this withSpotDuration($value)
 * @method array getSecurityGroupIds()
 * @method string getNetworkOptions()
 * @method $this withNetworkOptions($value)
 * @method string getSystemDiskSize()
 * @method string getImageFamily()
 * @method $this withImageFamily($value)
 * @method string getLaunchTemplateName()
 * @method $this withLaunchTemplateName($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getHpcClusterId()
 * @method $this withHpcClusterId($value)
 * @method string getHttpPutResponseHopLimit()
 * @method $this withHttpPutResponseHopLimit($value)
 * @method string getIsp()
 * @method $this withIsp($value)
 * @method string getKeyPairName()
 * @method $this withKeyPairName($value)
 * @method string getSpotPriceLimit()
 * @method $this withSpotPriceLimit($value)
 * @method string getCpuOptionsTopologyType()
 * @method string getStorageSetPartitionNumber()
 * @method $this withStorageSetPartitionNumber($value)
 * @method array getTag()
 * @method string getPrivatePoolOptionsId()
 * @method string getAutoRenewPeriod()
 * @method $this withAutoRenewPeriod($value)
 * @method string getLaunchTemplateId()
 * @method $this withLaunchTemplateId($value)
 * @method string getIpv6AddressCount()
 * @method $this withIpv6AddressCount($value)
 * @method array getHostNames()
 * @method string getCapacityReservationPreference()
 * @method $this withCapacityReservationPreference($value)
 * @method string getAdditionalInfo()
 * @method $this withAdditionalInfo($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getInstanceName()
 * @method $this withInstanceName($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method array getIpv6Address()
 * @method string getSecurityOptionsConfidentialComputingMode()
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getInternetMaxBandwidthOut()
 * @method $this withInternetMaxBandwidthOut($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getCpuOptionsThreadsPerCore()
 * @method string getSystemDiskCategory()
 * @method string getSecurityOptionsTrustedSystemMode()
 * @method string getCapacityReservationId()
 * @method $this withCapacityReservationId($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getHttpEndpoint()
 * @method $this withHttpEndpoint($value)
 * @method string getInstanceChargeType()
 * @method $this withInstanceChargeType($value)
 * @method string getDeploymentSetId()
 * @method $this withDeploymentSetId($value)
 * @method array getNetworkInterface()
 * @method string getAmount()
 * @method $this withAmount($value)
 * @method string getAutoPay()
 * @method $this withAutoPay($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getTenancy()
 * @method $this withTenancy($value)
 * @method string getRamRoleName()
 * @method $this withRamRoleName($value)
 * @method string getAutoReleaseTime()
 * @method $this withAutoReleaseTime($value)
 * @method string getCreditSpecification()
 * @method $this withCreditSpecification($value)
 * @method string getLaunchTemplateVersion()
 * @method $this withLaunchTemplateVersion($value)
 * @method string getSchedulerOptionsManagedPrivateSpaceId()
 * @method array getDataDisk()
 * @method string getStorageSetId()
 * @method $this withStorageSetId($value)
 * @method string getHttpTokens()
 * @method $this withHttpTokens($value)
 * @method string getSystemDiskDescription()
 */
class RunInstances extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPrivatePoolOptionsMatchCriteria($value)
    {
        $this->data['PrivatePoolOptionsMatchCriteria'] = $value;
        $this->options['query']['PrivatePoolOptions.MatchCriteria'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSystemDiskAutoSnapshotPolicyId($value)
    {
        $this->data['SystemDiskAutoSnapshotPolicyId'] = $value;
        $this->options['query']['SystemDisk.AutoSnapshotPolicyId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCpuOptionsCore($value)
    {
        $this->data['CpuOptionsCore'] = $value;
        $this->options['query']['CpuOptions.Core'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCpuOptionsNuma($value)
    {
        $this->data['CpuOptionsNuma'] = $value;
        $this->options['query']['CpuOptions.Numa'] = $value;

        return $this;
    }

    /**
     * @param array $systemTag
     *
     * @return $this
     */
	public function withSystemTag(array $systemTag)
	{
	    $this->data['SystemTag'] = $systemTag;
		foreach ($systemTag as $depth1 => $depth1Value) {
			if(isset($depth1Value['Key'])){
				$this->options['query']['SystemTag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
			if(isset($depth1Value['Value'])){
				$this->options['query']['SystemTag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Scope'])){
				$this->options['query']['SystemTag.' . ($depth1 + 1) . '.Scope'] = $depth1Value['Scope'];
			}
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withHibernationOptionsConfigured($value)
    {
        $this->data['HibernationOptionsConfigured'] = $value;
        $this->options['query']['HibernationOptions.Configured'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSystemDiskPerformanceLevel($value)
    {
        $this->data['SystemDiskPerformanceLevel'] = $value;
        $this->options['query']['SystemDisk.PerformanceLevel'] = $value;

        return $this;
    }

    /**
     * @param array $arn
     *
     * @return $this
     */
	public function withArn(array $arn)
	{
	    $this->data['Arn'] = $arn;
		foreach ($arn as $depth1 => $depth1Value) {
			if(isset($depth1Value['RoleType'])){
				$this->options['query']['Arn.' . ($depth1 + 1) . '.RoleType'] = $depth1Value['RoleType'];
			}
			if(isset($depth1Value['Rolearn'])){
				$this->options['query']['Arn.' . ($depth1 + 1) . '.Rolearn'] = $depth1Value['Rolearn'];
			}
			if(isset($depth1Value['AssumeRoleFor'])){
				$this->options['query']['Arn.' . ($depth1 + 1) . '.AssumeRoleFor'] = $depth1Value['AssumeRoleFor'];
			}
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSchedulerOptionsDedicatedHostClusterId($value)
    {
        $this->data['SchedulerOptionsDedicatedHostClusterId'] = $value;
        $this->options['query']['SchedulerOptions.DedicatedHostClusterId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSystemDiskDiskName($value)
    {
        $this->data['SystemDiskDiskName'] = $value;
        $this->options['query']['SystemDisk.DiskName'] = $value;

        return $this;
    }

    /**
     * @param array $securityGroupIds
     *
     * @return $this
     */
	public function withSecurityGroupIds(array $securityGroupIds)
	{
	    $this->data['SecurityGroupIds'] = $securityGroupIds;
		foreach ($securityGroupIds as $i => $iValue) {
			$this->options['query']['SecurityGroupIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSystemDiskSize($value)
    {
        $this->data['SystemDiskSize'] = $value;
        $this->options['query']['SystemDisk.Size'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCpuOptionsTopologyType($value)
    {
        $this->data['CpuOptionsTopologyType'] = $value;
        $this->options['query']['CpuOptions.TopologyType'] = $value;

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
     * @param string $value
     *
     * @return $this
     */
    public function withPrivatePoolOptionsId($value)
    {
        $this->data['PrivatePoolOptionsId'] = $value;
        $this->options['query']['PrivatePoolOptions.Id'] = $value;

        return $this;
    }

    /**
     * @param array $hostNames
     *
     * @return $this
     */
	public function withHostNames(array $hostNames)
	{
	    $this->data['HostNames'] = $hostNames;
		foreach ($hostNames as $i => $iValue) {
			$this->options['query']['HostNames.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $ipv6Address
     *
     * @return $this
     */
	public function withIpv6Address(array $ipv6Address)
	{
	    $this->data['Ipv6Address'] = $ipv6Address;
		foreach ($ipv6Address as $i => $iValue) {
			$this->options['query']['Ipv6Address.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSecurityOptionsConfidentialComputingMode($value)
    {
        $this->data['SecurityOptionsConfidentialComputingMode'] = $value;
        $this->options['query']['SecurityOptions.ConfidentialComputingMode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCpuOptionsThreadsPerCore($value)
    {
        $this->data['CpuOptionsThreadsPerCore'] = $value;
        $this->options['query']['CpuOptions.ThreadsPerCore'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSystemDiskCategory($value)
    {
        $this->data['SystemDiskCategory'] = $value;
        $this->options['query']['SystemDisk.Category'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSecurityOptionsTrustedSystemMode($value)
    {
        $this->data['SecurityOptionsTrustedSystemMode'] = $value;
        $this->options['query']['SecurityOptions.TrustedSystemMode'] = $value;

        return $this;
    }

    /**
     * @param array $networkInterface
     *
     * @return $this
     */
	public function withNetworkInterface(array $networkInterface)
	{
	    $this->data['NetworkInterface'] = $networkInterface;
		foreach ($networkInterface as $depth1 => $depth1Value) {
			if(isset($depth1Value['VSwitchId'])){
				$this->options['query']['NetworkInterface.' . ($depth1 + 1) . '.VSwitchId'] = $depth1Value['VSwitchId'];
			}
			if(isset($depth1Value['NetworkInterfaceName'])){
				$this->options['query']['NetworkInterface.' . ($depth1 + 1) . '.NetworkInterfaceName'] = $depth1Value['NetworkInterfaceName'];
			}
			if(isset($depth1Value['Description'])){
				$this->options['query']['NetworkInterface.' . ($depth1 + 1) . '.Description'] = $depth1Value['Description'];
			}
			if(isset($depth1Value['SecurityGroupId'])){
				$this->options['query']['NetworkInterface.' . ($depth1 + 1) . '.SecurityGroupId'] = $depth1Value['SecurityGroupId'];
			}
			if(isset($depth1Value['PrimaryIpAddress'])){
				$this->options['query']['NetworkInterface.' . ($depth1 + 1) . '.PrimaryIpAddress'] = $depth1Value['PrimaryIpAddress'];
			}
			if(isset($depth1Value['QueueNumber'])){
				$this->options['query']['NetworkInterface.' . ($depth1 + 1) . '.QueueNumber'] = $depth1Value['QueueNumber'];
			}
			foreach ($depth1Value['SecurityGroupIds'] as $i => $iValue) {
				$this->options['query']['NetworkInterface.' . ($depth1 + 1) . '.SecurityGroupIds.' . ($i + 1)] = $iValue;
			}
			if(isset($depth1Value['NetworkInterfaceTrafficMode'])){
				$this->options['query']['NetworkInterface.' . ($depth1 + 1) . '.NetworkInterfaceTrafficMode'] = $depth1Value['NetworkInterfaceTrafficMode'];
			}
			if(isset($depth1Value['QueuePairNumber'])){
				$this->options['query']['NetworkInterface.' . ($depth1 + 1) . '.QueuePairNumber'] = $depth1Value['QueuePairNumber'];
			}
			if(isset($depth1Value['InstanceType'])){
				$this->options['query']['NetworkInterface.' . ($depth1 + 1) . '.InstanceType'] = $depth1Value['InstanceType'];
			}
			if(isset($depth1Value['Ipv6AddressCount'])){
				$this->options['query']['NetworkInterface.' . ($depth1 + 1) . '.Ipv6AddressCount'] = $depth1Value['Ipv6AddressCount'];
			}
			foreach ($depth1Value['Ipv6Address'] as $i => $iValue) {
				$this->options['query']['NetworkInterface.' . ($depth1 + 1) . '.Ipv6Address.' . ($i + 1)] = $iValue;
			}
			if(isset($depth1Value['NetworkCardIndex'])){
				$this->options['query']['NetworkInterface.' . ($depth1 + 1) . '.NetworkCardIndex'] = $depth1Value['NetworkCardIndex'];
			}
			if(isset($depth1Value['DeleteOnRelease'])){
				$this->options['query']['NetworkInterface.' . ($depth1 + 1) . '.DeleteOnRelease'] = $depth1Value['DeleteOnRelease'];
			}
			if(isset($depth1Value['NetworkInterfaceId'])){
				$this->options['query']['NetworkInterface.' . ($depth1 + 1) . '.NetworkInterfaceId'] = $depth1Value['NetworkInterfaceId'];
			}
			if(isset($depth1Value['RxQueueSize'])){
				$this->options['query']['NetworkInterface.' . ($depth1 + 1) . '.RxQueueSize'] = $depth1Value['RxQueueSize'];
			}
			if(isset($depth1Value['TxQueueSize'])){
				$this->options['query']['NetworkInterface.' . ($depth1 + 1) . '.TxQueueSize'] = $depth1Value['TxQueueSize'];
			}
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSchedulerOptionsManagedPrivateSpaceId($value)
    {
        $this->data['SchedulerOptionsManagedPrivateSpaceId'] = $value;
        $this->options['query']['SchedulerOptions.ManagedPrivateSpaceId'] = $value;

        return $this;
    }

    /**
     * @param array $dataDisk
     *
     * @return $this
     */
	public function withDataDisk(array $dataDisk)
	{
	    $this->data['DataDisk'] = $dataDisk;
		foreach ($dataDisk as $depth1 => $depth1Value) {
			if(isset($depth1Value['PerformanceLevel'])){
				$this->options['query']['DataDisk.' . ($depth1 + 1) . '.PerformanceLevel'] = $depth1Value['PerformanceLevel'];
			}
			if(isset($depth1Value['AutoSnapshotPolicyId'])){
				$this->options['query']['DataDisk.' . ($depth1 + 1) . '.AutoSnapshotPolicyId'] = $depth1Value['AutoSnapshotPolicyId'];
			}
			if(isset($depth1Value['Encrypted'])){
				$this->options['query']['DataDisk.' . ($depth1 + 1) . '.Encrypted'] = $depth1Value['Encrypted'];
			}
			if(isset($depth1Value['Description'])){
				$this->options['query']['DataDisk.' . ($depth1 + 1) . '.Description'] = $depth1Value['Description'];
			}
			if(isset($depth1Value['SnapshotId'])){
				$this->options['query']['DataDisk.' . ($depth1 + 1) . '.SnapshotId'] = $depth1Value['SnapshotId'];
			}
			if(isset($depth1Value['Device'])){
				$this->options['query']['DataDisk.' . ($depth1 + 1) . '.Device'] = $depth1Value['Device'];
			}
			if(isset($depth1Value['Size'])){
				$this->options['query']['DataDisk.' . ($depth1 + 1) . '.Size'] = $depth1Value['Size'];
			}
			if(isset($depth1Value['DiskName'])){
				$this->options['query']['DataDisk.' . ($depth1 + 1) . '.DiskName'] = $depth1Value['DiskName'];
			}
			if(isset($depth1Value['Category'])){
				$this->options['query']['DataDisk.' . ($depth1 + 1) . '.Category'] = $depth1Value['Category'];
			}
			if(isset($depth1Value['EncryptAlgorithm'])){
				$this->options['query']['DataDisk.' . ($depth1 + 1) . '.EncryptAlgorithm'] = $depth1Value['EncryptAlgorithm'];
			}
			if(isset($depth1Value['DeleteWithInstance'])){
				$this->options['query']['DataDisk.' . ($depth1 + 1) . '.DeleteWithInstance'] = $depth1Value['DeleteWithInstance'];
			}
			if(isset($depth1Value['KMSKeyId'])){
				$this->options['query']['DataDisk.' . ($depth1 + 1) . '.KMSKeyId'] = $depth1Value['KMSKeyId'];
			}
			if(isset($depth1Value['StorageClusterId'])){
				$this->options['query']['DataDisk.' . ($depth1 + 1) . '.StorageClusterId'] = $depth1Value['StorageClusterId'];
			}
			if(isset($depth1Value['ProvisionedIops'])){
				$this->options['query']['DataDisk.' . ($depth1 + 1) . '.ProvisionedIops'] = $depth1Value['ProvisionedIops'];
			}
			if(isset($depth1Value['BurstingEnabled'])){
				$this->options['query']['DataDisk.' . ($depth1 + 1) . '.BurstingEnabled'] = $depth1Value['BurstingEnabled'];
			}
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSystemDiskDescription($value)
    {
        $this->data['SystemDiskDescription'] = $value;
        $this->options['query']['SystemDisk.Description'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getTimeout()
 * @method $this withTimeout($value)
 * @method string getContent()
 * @method $this withContent($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getFileOwner()
 * @method $this withFileOwner($value)
 * @method array getTag()
 * @method string getOverwrite()
 * @method $this withOverwrite($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getFileMode()
 * @method $this withFileMode($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getContentType()
 * @method $this withContentType($value)
 * @method array getInstanceId()
 * @method string getName()
 * @method $this withName($value)
 * @method string getFileGroup()
 * @method $this withFileGroup($value)
 * @method string getTargetDir()
 * @method $this withTargetDir($value)
 */
class SendFile extends Rpc
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
     * @param array $instanceId
     *
     * @return $this
     */
	public function withInstanceId(array $instanceId)
	{
	    $this->data['InstanceId'] = $instanceId;
		foreach ($instanceId as $i => $iValue) {
			$this->options['query']['InstanceId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getImagePipelineId()
 * @method $this withImagePipelineId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method array getTemplateTag()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class StartImagePipelineExecution extends Rpc
{

    /**
     * @param array $templateTag
     *
     * @return $this
     */
	public function withTemplateTag(array $templateTag)
	{
	    $this->data['TemplateTag'] = $templateTag;
		foreach ($templateTag as $depth1 => $depth1Value) {
			if(isset($depth1Value['Key'])){
				$this->options['query']['TemplateTag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
			if(isset($depth1Value['Value'])){
				$this->options['query']['TemplateTag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getInitLocalDisk()
 * @method $this withInitLocalDisk($value)
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
class StartInstance extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getBatchOptimization()
 * @method $this withBatchOptimization($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method array getInstanceId()
 */
class StartInstances extends Rpc
{

    /**
     * @param array $instanceId
     *
     * @return $this
     */
	public function withInstanceId(array $instanceId)
	{
	    $this->data['InstanceId'] = $instanceId;
		foreach ($instanceId as $i => $iValue) {
			$this->options['query']['InstanceId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCommandLine()
 * @method $this withCommandLine($value)
 * @method string getTargetServer()
 * @method $this withTargetServer($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method array getInstanceId()
 * @method string getPortNumber()
 * @method $this withPortNumber($value)
 * @method string getUsername()
 * @method $this withUsername($value)
 */
class StartTerminalSession extends Rpc
{

    /**
     * @param array $instanceId
     *
     * @return $this
     */
	public function withInstanceId(array $instanceId)
	{
	    $this->data['InstanceId'] = $instanceId;
		foreach ($instanceId as $i => $iValue) {
			$this->options['query']['InstanceId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getStoppedMode()
 * @method $this withStoppedMode($value)
 * @method string getHibernate()
 * @method $this withHibernate($value)
 * @method string getForceStop()
 * @method $this withForceStop($value)
 * @method string getConfirmStop()
 * @method $this withConfirmStop($value)
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
class StopInstance extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getStoppedMode()
 * @method $this withStoppedMode($value)
 * @method string getForceStop()
 * @method $this withForceStop($value)
 * @method string getBatchOptimization()
 * @method $this withBatchOptimization($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method array getInstanceId()
 */
class StopInstances extends Rpc
{

    /**
     * @param array $instanceId
     *
     * @return $this
     */
	public function withInstanceId(array $instanceId)
	{
	    $this->data['InstanceId'] = $instanceId;
		foreach ($instanceId as $i => $iValue) {
			$this->options['query']['InstanceId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getInvokeId()
 * @method $this withInvokeId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method array getInstanceId()
 */
class StopInvocation extends Rpc
{

    /**
     * @param array $instanceId
     *
     * @return $this
     */
	public function withInstanceId(array $instanceId)
	{
	    $this->data['InstanceId'] = $instanceId;
		foreach ($instanceId as $i => $iValue) {
			$this->options['query']['InstanceId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
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
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getUserCidr()
 * @method $this withUserCidr($value)
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
 * @method string getUserCidr()
 * @method $this withUserCidr($value)
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
 * @method array getIpv6Prefix()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getNetworkInterfaceId()
 * @method $this withNetworkInterfaceId($value)
 * @method array getIpv6Address()
 */
class UnassignIpv6Addresses extends Rpc
{

    /**
     * @param array $ipv6Prefix
     *
     * @return $this
     */
	public function withIpv6Prefix(array $ipv6Prefix)
	{
	    $this->data['Ipv6Prefix'] = $ipv6Prefix;
		foreach ($ipv6Prefix as $i => $iValue) {
			$this->options['query']['Ipv6Prefix.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $ipv6Address
     *
     * @return $this
     */
	public function withIpv6Address(array $ipv6Address)
	{
	    $this->data['Ipv6Address'] = $ipv6Address;
		foreach ($ipv6Address as $i => $iValue) {
			$this->options['query']['Ipv6Address.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method array getIpv4Prefix()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method array getPrivateIpAddress()
 * @method string getNetworkInterfaceId()
 * @method $this withNetworkInterfaceId($value)
 */
class UnassignPrivateIpAddresses extends Rpc
{

    /**
     * @param array $ipv4Prefix
     *
     * @return $this
     */
	public function withIpv4Prefix(array $ipv4Prefix)
	{
	    $this->data['Ipv4Prefix'] = $ipv4Prefix;
		foreach ($ipv4Prefix as $i => $iValue) {
			$this->options['query']['Ipv4Prefix.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $privateIpAddress
     *
     * @return $this
     */
	public function withPrivateIpAddress(array $privateIpAddress)
	{
	    $this->data['PrivateIpAddress'] = $privateIpAddress;
		foreach ($privateIpAddress as $i => $iValue) {
			$this->options['query']['PrivateIpAddress.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
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
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class UnassociateEipAddress extends Rpc
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
class UntagResources extends Rpc
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
