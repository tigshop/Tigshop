<?php

namespace AlibabaCloud\Rds\V20140815;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AcceptRCInquiredSystemEvent acceptRCInquiredSystemEvent(array $options = [])
 * @method ActivateMigrationTargetInstance activateMigrationTargetInstance(array $options = [])
 * @method AddTagsToResource addTagsToResource(array $options = [])
 * @method AllocateInstancePublicConnection allocateInstancePublicConnection(array $options = [])
 * @method AllocateReadWriteSplittingConnection allocateReadWriteSplittingConnection(array $options = [])
 * @method AssociateEipAddressWithRCInstance associateEipAddressWithRCInstance(array $options = [])
 * @method AttachRCDisk attachRCDisk(array $options = [])
 * @method AttachRCInstances attachRCInstances(array $options = [])
 * @method AttachWhitelistTemplateToInstance attachWhitelistTemplateToInstance(array $options = [])
 * @method AuthorizeRCSecurityGroupPermission authorizeRCSecurityGroupPermission(array $options = [])
 * @method CalculateDBInstanceWeight calculateDBInstanceWeight(array $options = [])
 * @method CancelActiveOperationTasks cancelActiveOperationTasks(array $options = [])
 * @method CheckAccountNameAvailable checkAccountNameAvailable(array $options = [])
 * @method CheckCloudResourceAuthorized checkCloudResourceAuthorized(array $options = [])
 * @method CheckCreateDdrDBInstance checkCreateDdrDBInstance(array $options = [])
 * @method CheckDBNameAvailable checkDBNameAvailable(array $options = [])
 * @method CheckInstanceExist checkInstanceExist(array $options = [])
 * @method CheckServiceLinkedRole checkServiceLinkedRole(array $options = [])
 * @method CloneDBInstance cloneDBInstance(array $options = [])
 * @method CloneParameterGroup cloneParameterGroup(array $options = [])
 * @method ConfirmNotify confirmNotify(array $options = [])
 * @method CopyDatabase copyDatabase(array $options = [])
 * @method CopyDatabaseBetweenInstances copyDatabaseBetweenInstances(array $options = [])
 * @method CreateAccount createAccount(array $options = [])
 * @method CreateBackup createBackup(array $options = [])
 * @method CreateCloudMigrationPrecheckTask createCloudMigrationPrecheckTask(array $options = [])
 * @method CreateCloudMigrationTask createCloudMigrationTask(array $options = [])
 * @method CreateDatabase createDatabase(array $options = [])
 * @method CreateDBInstance createDBInstance(array $options = [])
 * @method CreateDBInstanceEndpoint createDBInstanceEndpoint(array $options = [])
 * @method CreateDBInstanceEndpointAddress createDBInstanceEndpointAddress(array $options = [])
 * @method CreateDBInstanceForRebuild createDBInstanceForRebuild(array $options = [])
 * @method CreateDBInstanceSecurityGroupRule createDBInstanceSecurityGroupRule(array $options = [])
 * @method CreateDBNodes createDBNodes(array $options = [])
 * @method CreateDBProxyEndpointAddress createDBProxyEndpointAddress(array $options = [])
 * @method CreateDdrInstance createDdrInstance(array $options = [])
 * @method CreateGADInstance createGADInstance(array $options = [])
 * @method CreateGadInstanceMember createGadInstanceMember(array $options = [])
 * @method CreateMaskingRules createMaskingRules(array $options = [])
 * @method CreateMigrateTask createMigrateTask(array $options = [])
 * @method CreateOnlineDatabaseTask createOnlineDatabaseTask(array $options = [])
 * @method CreateOrderForDeleteDBNodes createOrderForDeleteDBNodes(array $options = [])
 * @method CreateParameterGroup createParameterGroup(array $options = [])
 * @method CreatePostgresExtensions createPostgresExtensions(array $options = [])
 * @method CreateRCDeploymentSet createRCDeploymentSet(array $options = [])
 * @method CreateRCDisk createRCDisk(array $options = [])
 * @method CreateRCNodePool createRCNodePool(array $options = [])
 * @method CreateRCSnapshot createRCSnapshot(array $options = [])
 * @method CreateReadOnlyDBInstance createReadOnlyDBInstance(array $options = [])
 * @method CreateReplicationLink createReplicationLink(array $options = [])
 * @method CreateSecret createSecret(array $options = [])
 * @method CreateServiceLinkedRole createServiceLinkedRole(array $options = [])
 * @method CreateTempDBInstance createTempDBInstance(array $options = [])
 * @method CreateYouhuiForOrder createYouhuiForOrder(array $options = [])
 * @method DeleteAccount deleteAccount(array $options = [])
 * @method DeleteADSetting deleteADSetting(array $options = [])
 * @method DeleteBackup deleteBackup(array $options = [])
 * @method DeleteBackupFile deleteBackupFile(array $options = [])
 * @method DeleteDatabase deleteDatabase(array $options = [])
 * @method DeleteDBInstance deleteDBInstance(array $options = [])
 * @method DeleteDBInstanceEndpoint deleteDBInstanceEndpoint(array $options = [])
 * @method DeleteDBInstanceEndpointAddress deleteDBInstanceEndpointAddress(array $options = [])
 * @method DeleteDBInstanceSecurityGroupRule deleteDBInstanceSecurityGroupRule(array $options = [])
 * @method DeleteDBNodes deleteDBNodes(array $options = [])
 * @method DeleteDBProxyEndpointAddress deleteDBProxyEndpointAddress(array $options = [])
 * @method DeleteGadInstance deleteGadInstance(array $options = [])
 * @method DeleteMaskingRules deleteMaskingRules(array $options = [])
 * @method DeleteParameterGroup deleteParameterGroup(array $options = [])
 * @method DeletePostgresExtensions deletePostgresExtensions(array $options = [])
 * @method DeleteRCClusterNodes deleteRCClusterNodes(array $options = [])
 * @method DeleteRCDeploymentSet deleteRCDeploymentSet(array $options = [])
 * @method DeleteRCDisk deleteRCDisk(array $options = [])
 * @method DeleteRCInstance deleteRCInstance(array $options = [])
 * @method DeleteRCInstances deleteRCInstances(array $options = [])
 * @method DeleteRCNodePool deleteRCNodePool(array $options = [])
 * @method DeleteRCSnapshot deleteRCSnapshot(array $options = [])
 * @method DeleteRCVCluster deleteRCVCluster(array $options = [])
 * @method DeleteReplicationLink deleteReplicationLink(array $options = [])
 * @method DeleteSecret deleteSecret(array $options = [])
 * @method DeleteSlot deleteSlot(array $options = [])
 * @method DeleteUserBackupFile deleteUserBackupFile(array $options = [])
 * @method DescibeImportsFromDatabase descibeImportsFromDatabase(array $options = [])
 * @method DescribeAccountMaskingPrivilege describeAccountMaskingPrivilege(array $options = [])
 * @method DescribeAccounts describeAccounts(array $options = [])
 * @method DescribeActionEventPolicy describeActionEventPolicy(array $options = [])
 * @method DescribeActiveOperationTasks describeActiveOperationTasks(array $options = [])
 * @method DescribeADInfo describeADInfo(array $options = [])
 * @method DescribeAllWhitelistTemplate describeAllWhitelistTemplate(array $options = [])
 * @method DescribeAnalyticdbByPrimaryDBInstance describeAnalyticdbByPrimaryDBInstance(array $options = [])
 * @method DescribeAvailableClasses describeAvailableClasses(array $options = [])
 * @method DescribeAvailableCrossRegion describeAvailableCrossRegion(array $options = [])
 * @method DescribeAvailableMetrics describeAvailableMetrics(array $options = [])
 * @method DescribeAvailableRecoveryTime describeAvailableRecoveryTime(array $options = [])
 * @method DescribeAvailableZones describeAvailableZones(array $options = [])
 * @method DescribeBackupDatabase describeBackupDatabase(array $options = [])
 * @method DescribeBackupPolicy describeBackupPolicy(array $options = [])
 * @method DescribeBackups describeBackups(array $options = [])
 * @method DescribeBackupTasks describeBackupTasks(array $options = [])
 * @method DescribeBinlogFiles describeBinlogFiles(array $options = [])
 * @method DescribeCharacterSetName describeCharacterSetName(array $options = [])
 * @method DescribeClassDetails describeClassDetails(array $options = [])
 * @method DescribeCloudMigrationPrecheckResult describeCloudMigrationPrecheckResult(array $options = [])
 * @method DescribeCloudMigrationResult describeCloudMigrationResult(array $options = [])
 * @method DescribeCollationTimeZones describeCollationTimeZones(array $options = [])
 * @method DescribeComputeBurstConfig describeComputeBurstConfig(array $options = [])
 * @method DescribeCrossBackupMetaList describeCrossBackupMetaList(array $options = [])
 * @method DescribeCrossRegionBackupDBInstance describeCrossRegionBackupDBInstance(array $options = [])
 * @method DescribeCrossRegionBackups describeCrossRegionBackups(array $options = [])
 * @method DescribeCrossRegionLogBackupFiles describeCrossRegionLogBackupFiles(array $options = [])
 * @method DescribeCurrentModifyOrder describeCurrentModifyOrder(array $options = [])
 * @method DescribeCustinsResourceInfo describeCustinsResourceInfo(array $options = [])
 * @method DescribeDatabases describeDatabases(array $options = [])
 * @method DescribeDBInstanceAttribute describeDBInstanceAttribute(array $options = [])
 * @method DescribeDBInstanceByTags describeDBInstanceByTags(array $options = [])
 * @method DescribeDBInstanceConnectivity describeDBInstanceConnectivity(array $options = [])
 * @method DescribeDBInstanceDetail describeDBInstanceDetail(array $options = [])
 * @method DescribeDBInstanceEncryptionKey describeDBInstanceEncryptionKey(array $options = [])
 * @method DescribeDBInstanceEndpoints describeDBInstanceEndpoints(array $options = [])
 * @method DescribeDBInstanceHAConfig describeDBInstanceHAConfig(array $options = [])
 * @method DescribeDBInstanceIPArrayList describeDBInstanceIPArrayList(array $options = [])
 * @method DescribeDBInstanceIpHostname describeDBInstanceIpHostname(array $options = [])
 * @method DescribeDBInstanceMetrics describeDBInstanceMetrics(array $options = [])
 * @method DescribeDBInstanceMonitor describeDBInstanceMonitor(array $options = [])
 * @method DescribeDBInstanceNetInfo describeDBInstanceNetInfo(array $options = [])
 * @method DescribeDBInstanceNetInfoForChannel describeDBInstanceNetInfoForChannel(array $options = [])
 * @method DescribeDBInstancePerformance describeDBInstancePerformance(array $options = [])
 * @method DescribeDBInstancePromoteActivity describeDBInstancePromoteActivity(array $options = [])
 * @method DescribeDBInstanceProxyConfiguration describeDBInstanceProxyConfiguration(array $options = [])
 * @method DescribeDBInstanceReplication describeDBInstanceReplication(array $options = [])
 * @method DescribeDBInstances describeDBInstances(array $options = [])
 * @method DescribeDBInstancesAsCsv describeDBInstancesAsCsv(array $options = [])
 * @method DescribeDBInstancesByExpireTime describeDBInstancesByExpireTime(array $options = [])
 * @method DescribeDBInstancesByPerformance describeDBInstancesByPerformance(array $options = [])
 * @method DescribeDBInstanceSecurityGroupRule describeDBInstanceSecurityGroupRule(array $options = [])
 * @method DescribeDBInstancesForClone describeDBInstancesForClone(array $options = [])
 * @method DescribeDBInstanceSSL describeDBInstanceSSL(array $options = [])
 * @method DescribeDBInstanceTDE describeDBInstanceTDE(array $options = [])
 * @method DescribeDBMiniEngineVersions describeDBMiniEngineVersions(array $options = [])
 * @method DescribeDBProxy describeDBProxy(array $options = [])
 * @method DescribeDBProxyEndpoint describeDBProxyEndpoint(array $options = [])
 * @method DescribeDBProxyPerformance describeDBProxyPerformance(array $options = [])
 * @method DescribeDedicatedHostGroups describeDedicatedHostGroups(array $options = [])
 * @method DescribeDedicatedHosts describeDedicatedHosts(array $options = [])
 * @method DescribeDetachedBackups describeDetachedBackups(array $options = [])
 * @method DescribeDTCSecurityIpHostsForSQLServer describeDTCSecurityIpHostsForSQLServer(array $options = [])
 * @method DescribeErrorLogs describeErrorLogs(array $options = [])
 * @method DescribeEvents describeEvents(array $options = [])
 * @method DescribeGadInstances describeGadInstances(array $options = [])
 * @method DescribeHADiagnoseConfig describeHADiagnoseConfig(array $options = [])
 * @method DescribeHASwitchConfig describeHASwitchConfig(array $options = [])
 * @method DescribeHistoryEvents describeHistoryEvents(array $options = [])
 * @method DescribeHistoryEventsStat describeHistoryEventsStat(array $options = [])
 * @method DescribeHistoryTasks describeHistoryTasks(array $options = [])
 * @method DescribeHistoryTasksStat describeHistoryTasksStat(array $options = [])
 * @method DescribeHostGroupElasticStrategyParameters describeHostGroupElasticStrategyParameters(array $options = [])
 * @method DescribeHostWebShell describeHostWebShell(array $options = [])
 * @method DescribeInstanceAutoRenewalAttribute describeInstanceAutoRenewalAttribute(array $options = [])
 * @method DescribeInstanceCrossBackupPolicy describeInstanceCrossBackupPolicy(array $options = [])
 * @method DescribeInstanceKeywords describeInstanceKeywords(array $options = [])
 * @method DescribeInstanceLinkedWhitelistTemplate describeInstanceLinkedWhitelistTemplate(array $options = [])
 * @method DescribeKmsAssociateResources describeKmsAssociateResources(array $options = [])
 * @method DescribeLocalAvailableRecoveryTime describeLocalAvailableRecoveryTime(array $options = [])
 * @method DescribeLogBackupFiles describeLogBackupFiles(array $options = [])
 * @method DescribeMarketingActivity describeMarketingActivity(array $options = [])
 * @method DescribeMaskingRules describeMaskingRules(array $options = [])
 * @method DescribeMetaList describeMetaList(array $options = [])
 * @method DescribeMigrateTaskById describeMigrateTaskById(array $options = [])
 * @method DescribeMigrateTasks describeMigrateTasks(array $options = [])
 * @method DescribeModifyParameterLog describeModifyParameterLog(array $options = [])
 * @method DescribeModifyPGHbaConfigLog describeModifyPGHbaConfigLog(array $options = [])
 * @method DescribeOssDownloads describeOssDownloads(array $options = [])
 * @method DescribeParameterGroup describeParameterGroup(array $options = [])
 * @method DescribeParameterGroups describeParameterGroups(array $options = [])
 * @method DescribeParameters describeParameters(array $options = [])
 * @method DescribeParameterTemplates describeParameterTemplates(array $options = [])
 * @method DescribePGHbaConfig describePGHbaConfig(array $options = [])
 * @method DescribePostgresExtensions describePostgresExtensions(array $options = [])
 * @method DescribePrice describePrice(array $options = [])
 * @method DescribeQuickSaleConfig describeQuickSaleConfig(array $options = [])
 * @method DescribeRCAvailableResource describeRCAvailableResource(array $options = [])
 * @method DescribeRCCloudAssistantStatus describeRCCloudAssistantStatus(array $options = [])
 * @method DescribeRCClusterConfig describeRCClusterConfig(array $options = [])
 * @method DescribeRCClusterNodes describeRCClusterNodes(array $options = [])
 * @method DescribeRCClusters describeRCClusters(array $options = [])
 * @method DescribeRCDeploymentSets describeRCDeploymentSets(array $options = [])
 * @method DescribeRCDisks describeRCDisks(array $options = [])
 * @method DescribeRCImageList describeRCImageList(array $options = [])
 * @method DescribeRCInstanceAttribute describeRCInstanceAttribute(array $options = [])
 * @method DescribeRCInstanceDdosCount describeRCInstanceDdosCount(array $options = [])
 * @method DescribeRCInstanceHistoryEvents describeRCInstanceHistoryEvents(array $options = [])
 * @method DescribeRCInstanceIpAddress describeRCInstanceIpAddress(array $options = [])
 * @method DescribeRCInstances describeRCInstances(array $options = [])
 * @method DescribeRCInstanceTypeFamilies describeRCInstanceTypeFamilies(array $options = [])
 * @method DescribeRCInstanceTypes describeRCInstanceTypes(array $options = [])
 * @method DescribeRCInstanceVncUrl describeRCInstanceVncUrl(array $options = [])
 * @method DescribeRCInvocationResults describeRCInvocationResults(array $options = [])
 * @method DescribeRCMetricList describeRCMetricList(array $options = [])
 * @method DescribeRCNodePool describeRCNodePool(array $options = [])
 * @method DescribeRCResourcesModification describeRCResourcesModification(array $options = [])
 * @method DescribeRCSecurityGroupList describeRCSecurityGroupList(array $options = [])
 * @method DescribeRCSecurityGroupPermission describeRCSecurityGroupPermission(array $options = [])
 * @method DescribeRCSnapshots describeRCSnapshots(array $options = [])
 * @method DescribeRCVCluster describeRCVCluster(array $options = [])
 * @method DescribeRdsResourceSettings describeRdsResourceSettings(array $options = [])
 * @method DescribeReadDBInstanceDelay describeReadDBInstanceDelay(array $options = [])
 * @method DescribeRegionInfos describeRegionInfos(array $options = [])
 * @method DescribeRegions describeRegions(array $options = [])
 * @method DescribeRenewalPrice describeRenewalPrice(array $options = [])
 * @method DescribeReplicationLinkLogs describeReplicationLinkLogs(array $options = [])
 * @method DescribeResourceDetails describeResourceDetails(array $options = [])
 * @method DescribeResourceUsage describeResourceUsage(array $options = [])
 * @method DescribeSecrets describeSecrets(array $options = [])
 * @method DescribeSecurityGroupConfiguration describeSecurityGroupConfiguration(array $options = [])
 * @method DescribeSlots describeSlots(array $options = [])
 * @method DescribeSlowLogRecords describeSlowLogRecords(array $options = [])
 * @method DescribeSlowLogs describeSlowLogs(array $options = [])
 * @method DescribeSQLCollectorPolicy describeSQLCollectorPolicy(array $options = [])
 * @method DescribeSQLCollectorRetention describeSQLCollectorRetention(array $options = [])
 * @method DescribeSQLLogFiles describeSQLLogFiles(array $options = [])
 * @method DescribeSQLLogRecords describeSQLLogRecords(array $options = [])
 * @method DescribeSQLLogReportList describeSQLLogReportList(array $options = [])
 * @method DescribeSupportOnlineResizeDisk describeSupportOnlineResizeDisk(array $options = [])
 * @method DescribeTags describeTags(array $options = [])
 * @method DescribeTasks describeTasks(array $options = [])
 * @method DescribeUpgradeMajorVersionPrecheckTask describeUpgradeMajorVersionPrecheckTask(array $options = [])
 * @method DescribeUpgradeMajorVersionTasks describeUpgradeMajorVersionTasks(array $options = [])
 * @method DescribeVSwitches describeVSwitches(array $options = [])
 * @method DescribeVSwitchList describeVSwitchList(array $options = [])
 * @method DescribeWhitelistTemplate describeWhitelistTemplate(array $options = [])
 * @method DescribeWhitelistTemplateLinkedInstance describeWhitelistTemplateLinkedInstance(array $options = [])
 * @method DestroyDBInstance destroyDBInstance(array $options = [])
 * @method DetachGadInstanceMember detachGadInstanceMember(array $options = [])
 * @method DetachRCDisk detachRCDisk(array $options = [])
 * @method DetachWhitelistTemplateToInstance detachWhitelistTemplateToInstance(array $options = [])
 * @method EvaluateLocalExtendDisk evaluateLocalExtendDisk(array $options = [])
 * @method GetDBInstanceTopology getDBInstanceTopology(array $options = [])
 * @method GetDbProxyInstanceSsl getDbProxyInstanceSsl(array $options = [])
 * @method GrantAccountPrivilege grantAccountPrivilege(array $options = [])
 * @method GrantOperatorPermission grantOperatorPermission(array $options = [])
 * @method ImportUserBackupFile importUserBackupFile(array $options = [])
 * @method InstallRCCloudAssistant installRCCloudAssistant(array $options = [])
 * @method ListClasses listClasses(array $options = [])
 * @method ListRCVClusters listRCVClusters(array $options = [])
 * @method ListTagResources listTagResources(array $options = [])
 * @method ListUserBackupFiles listUserBackupFiles(array $options = [])
 * @method LockAccount lockAccount(array $options = [])
 * @method MigrateConnectionToOtherZone migrateConnectionToOtherZone(array $options = [])
 * @method MigrateDBInstance migrateDBInstance(array $options = [])
 * @method MigrateDBNodes migrateDBNodes(array $options = [])
 * @method MigrateSecurityIPMode migrateSecurityIPMode(array $options = [])
 * @method MigrateToOtherZone migrateToOtherZone(array $options = [])
 * @method ModifyAccountCheckPolicy modifyAccountCheckPolicy(array $options = [])
 * @method ModifyAccountDescription modifyAccountDescription(array $options = [])
 * @method ModifyAccountMaskingPrivilege modifyAccountMaskingPrivilege(array $options = [])
 * @method ModifyAccountSecurityPolicy modifyAccountSecurityPolicy(array $options = [])
 * @method ModifyActionEventPolicy modifyActionEventPolicy(array $options = [])
 * @method ModifyActiveOperationTasks modifyActiveOperationTasks(array $options = [])
 * @method ModifyADInfo modifyADInfo(array $options = [])
 * @method ModifyBackupPolicy modifyBackupPolicy(array $options = [])
 * @method ModifyBackupSetExpireTime modifyBackupSetExpireTime(array $options = [])
 * @method ModifyCollationTimeZone modifyCollationTimeZone(array $options = [])
 * @method ModifyComputeBurstConfig modifyComputeBurstConfig(array $options = [])
 * @method ModifyCustinsResource modifyCustinsResource(array $options = [])
 * @method ModifyDasInstanceConfig modifyDasInstanceConfig(array $options = [])
 * @method ModifyDatabaseConfig modifyDatabaseConfig(array $options = [])
 * @method ModifyDBDescription modifyDBDescription(array $options = [])
 * @method ModifyDBInstanceAutoUpgradeMinorVersion modifyDBInstanceAutoUpgradeMinorVersion(array $options = [])
 * @method ModifyDBInstanceConfig modifyDBInstanceConfig(array $options = [])
 * @method ModifyDBInstanceConnectionString modifyDBInstanceConnectionString(array $options = [])
 * @method ModifyDBInstanceDelayedReplicationTime modifyDBInstanceDelayedReplicationTime(array $options = [])
 * @method ModifyDBInstanceDeletionProtection modifyDBInstanceDeletionProtection(array $options = [])
 * @method ModifyDBInstanceDescription modifyDBInstanceDescription(array $options = [])
 * @method ModifyDBInstanceEndpoint modifyDBInstanceEndpoint(array $options = [])
 * @method ModifyDBInstanceEndpointAddress modifyDBInstanceEndpointAddress(array $options = [])
 * @method ModifyDBInstanceHAConfig modifyDBInstanceHAConfig(array $options = [])
 * @method ModifyDBInstanceMaintainTime modifyDBInstanceMaintainTime(array $options = [])
 * @method ModifyDBInstanceMetrics modifyDBInstanceMetrics(array $options = [])
 * @method ModifyDBInstanceMonitor modifyDBInstanceMonitor(array $options = [])
 * @method ModifyDBInstanceNetworkExpireTime modifyDBInstanceNetworkExpireTime(array $options = [])
 * @method ModifyDBInstanceNetworkType modifyDBInstanceNetworkType(array $options = [])
 * @method ModifyDBInstancePayType modifyDBInstancePayType(array $options = [])
 * @method ModifyDBInstanceReplicationSwitch modifyDBInstanceReplicationSwitch(array $options = [])
 * @method ModifyDBInstanceSecurityGroupRule modifyDBInstanceSecurityGroupRule(array $options = [])
 * @method ModifyDBInstanceSpec modifyDBInstanceSpec(array $options = [])
 * @method ModifyDBInstanceSSL modifyDBInstanceSSL(array $options = [])
 * @method ModifyDBInstanceTDE modifyDBInstanceTDE(array $options = [])
 * @method ModifyDBNode modifyDBNode(array $options = [])
 * @method ModifyDBProxy modifyDBProxy(array $options = [])
 * @method ModifyDBProxyEndpoint modifyDBProxyEndpoint(array $options = [])
 * @method ModifyDBProxyEndpointAddress modifyDBProxyEndpointAddress(array $options = [])
 * @method ModifyDBProxyInstance modifyDBProxyInstance(array $options = [])
 * @method ModifyDbProxyInstanceSsl modifyDbProxyInstanceSsl(array $options = [])
 * @method ModifyDTCSecurityIpHostsForSQLServer modifyDTCSecurityIpHostsForSQLServer(array $options = [])
 * @method ModifyEventInfo modifyEventInfo(array $options = [])
 * @method ModifyHADiagnoseConfig modifyHADiagnoseConfig(array $options = [])
 * @method ModifyHASwitchConfig modifyHASwitchConfig(array $options = [])
 * @method ModifyInstanceAutoRenewalAttribute modifyInstanceAutoRenewalAttribute(array $options = [])
 * @method ModifyInstanceCrossBackupPolicy modifyInstanceCrossBackupPolicy(array $options = [])
 * @method ModifyMaskingRules modifyMaskingRules(array $options = [])
 * @method ModifyParameter modifyParameter(array $options = [])
 * @method ModifyParameterGroup modifyParameterGroup(array $options = [])
 * @method ModifyPGHbaConfig modifyPGHbaConfig(array $options = [])
 * @method ModifyRCDiskSpec modifyRCDiskSpec(array $options = [])
 * @method ModifyRCInstance modifyRCInstance(array $options = [])
 * @method ModifyRCInstanceAttribute modifyRCInstanceAttribute(array $options = [])
 * @method ModifyRCInstanceChargeType modifyRCInstanceChargeType(array $options = [])
 * @method ModifyRCInstanceDescription modifyRCInstanceDescription(array $options = [])
 * @method ModifyRCInstanceKeyPair modifyRCInstanceKeyPair(array $options = [])
 * @method ModifyRCInstanceNetworkSpec modifyRCInstanceNetworkSpec(array $options = [])
 * @method ModifyRCSecurityGroupPermission modifyRCSecurityGroupPermission(array $options = [])
 * @method ModifyRCVCluster modifyRCVCluster(array $options = [])
 * @method ModifyReadonlyInstanceDelayReplicationTime modifyReadonlyInstanceDelayReplicationTime(array $options = [])
 * @method ModifyReadWriteSplittingConnection modifyReadWriteSplittingConnection(array $options = [])
 * @method ModifyResourceGroup modifyResourceGroup(array $options = [])
 * @method ModifySecurityGroupConfiguration modifySecurityGroupConfiguration(array $options = [])
 * @method ModifySecurityIps modifySecurityIps(array $options = [])
 * @method ModifySQLCollectorPolicy modifySQLCollectorPolicy(array $options = [])
 * @method ModifySQLCollectorRetention modifySQLCollectorRetention(array $options = [])
 * @method ModifyTaskInfo modifyTaskInfo(array $options = [])
 * @method ModifyWhitelistTemplate modifyWhitelistTemplate(array $options = [])
 * @method PreCheckCreateOrderForDeleteDBNodes preCheckCreateOrderForDeleteDBNodes(array $options = [])
 * @method PurgeDBInstanceLog purgeDBInstanceLog(array $options = [])
 * @method QueryNotify queryNotify(array $options = [])
 * @method QueryRecommendByCode queryRecommendByCode(array $options = [])
 * @method RebootRCInstance rebootRCInstance(array $options = [])
 * @method RebootRCInstances rebootRCInstances(array $options = [])
 * @method RebuildDBInstance rebuildDBInstance(array $options = [])
 * @method RebuildReplicationLink rebuildReplicationLink(array $options = [])
 * @method ReceiveDBInstance receiveDBInstance(array $options = [])
 * @method RecoveryDBInstance recoveryDBInstance(array $options = [])
 * @method RedeployRCInstance redeployRCInstance(array $options = [])
 * @method ReleaseInstanceConnection releaseInstanceConnection(array $options = [])
 * @method ReleaseInstancePublicConnection releaseInstancePublicConnection(array $options = [])
 * @method ReleaseReadWriteSplittingConnection releaseReadWriteSplittingConnection(array $options = [])
 * @method RemoveTagsFromResource removeTagsFromResource(array $options = [])
 * @method RenewInstance renewInstance(array $options = [])
 * @method RenewRCInstance renewRCInstance(array $options = [])
 * @method ReplaceRCInstanceSystemDisk replaceRCInstanceSystemDisk(array $options = [])
 * @method ResetAccount resetAccount(array $options = [])
 * @method ResetAccountPassword resetAccountPassword(array $options = [])
 * @method ResizeRCInstanceDisk resizeRCInstanceDisk(array $options = [])
 * @method RestartDBInstance restartDBInstance(array $options = [])
 * @method RestoreDdrTable restoreDdrTable(array $options = [])
 * @method RestoreTable restoreTable(array $options = [])
 * @method RevokeAccountPrivilege revokeAccountPrivilege(array $options = [])
 * @method RevokeOperatorPermission revokeOperatorPermission(array $options = [])
 * @method RevokeRCSecurityGroupPermission revokeRCSecurityGroupPermission(array $options = [])
 * @method RunRCCommand runRCCommand(array $options = [])
 * @method RunRCInstances runRCInstances(array $options = [])
 * @method StartDBInstance startDBInstance(array $options = [])
 * @method StartRCInstance startRCInstance(array $options = [])
 * @method StartRCInstances startRCInstances(array $options = [])
 * @method StopDBInstance stopDBInstance(array $options = [])
 * @method StopRCInstance stopRCInstance(array $options = [])
 * @method StopRCInstances stopRCInstances(array $options = [])
 * @method SwitchDBInstanceHA switchDBInstanceHA(array $options = [])
 * @method SwitchDBInstanceNetType switchDBInstanceNetType(array $options = [])
 * @method SwitchDBInstanceVpc switchDBInstanceVpc(array $options = [])
 * @method SwitchOverMajorVersionUpgrade switchOverMajorVersionUpgrade(array $options = [])
 * @method SwitchReplicationLink switchReplicationLink(array $options = [])
 * @method SyncRCKeyPair syncRCKeyPair(array $options = [])
 * @method SyncRCSecurityGroup syncRCSecurityGroup(array $options = [])
 * @method TagResources tagResources(array $options = [])
 * @method TerminateMigrateTask terminateMigrateTask(array $options = [])
 * @method TransformDBInstancePayType transformDBInstancePayType(array $options = [])
 * @method UnassociateEipAddressWithRCInstance unassociateEipAddressWithRCInstance(array $options = [])
 * @method UnlockAccount unlockAccount(array $options = [])
 * @method UntagResources untagResources(array $options = [])
 * @method UpdatePostgresExtensions updatePostgresExtensions(array $options = [])
 * @method UpdateUserBackupFile updateUserBackupFile(array $options = [])
 * @method UpgradeDBInstanceEngineVersion upgradeDBInstanceEngineVersion(array $options = [])
 * @method UpgradeDBInstanceKernelVersion upgradeDBInstanceKernelVersion(array $options = [])
 * @method UpgradeDBInstanceMajorVersion upgradeDBInstanceMajorVersion(array $options = [])
 * @method UpgradeDBInstanceMajorVersionPrecheck upgradeDBInstanceMajorVersionPrecheck(array $options = [])
 * @method UpgradeDBProxyInstanceKernelVersion upgradeDBProxyInstanceKernelVersion(array $options = [])
 */
class RdsApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'Rds';

    /** @var string */
    public $version = '2014-08-15';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'rds';
}

/**
 * @method string getEventId()
 * @method $this withEventId($value)
 */
class AcceptRCInquiredSystemEvent extends Rpc
{
}

/**
 * @method string getDBInstanceName()
 * @method $this withDBInstanceName($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getForceSwitch()
 * @method $this withForceSwitch($value)
 * @method string getSwitchTimeMode()
 * @method $this withSwitchTimeMode($value)
 * @method string getSwitchTime()
 * @method $this withSwitchTime($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ActivateMigrationTargetInstance extends Rpc
{
}

/**
 * @method string getTag4value()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTag2key()
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getTag3key()
 * @method string getTag1value()
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getTag3value()
 * @method string getProxyId()
 * @method string getTag5key()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTag5value()
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getTag1key()
 * @method string getTag2value()
 * @method string getTag4key()
 */
class AddTagsToResource extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag4value($value)
    {
        $this->data['Tag4value'] = $value;
        $this->options['query']['Tag.4.value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag2key($value)
    {
        $this->data['Tag2key'] = $value;
        $this->options['query']['Tag.2.key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag3key($value)
    {
        $this->data['Tag3key'] = $value;
        $this->options['query']['Tag.3.key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag1value($value)
    {
        $this->data['Tag1value'] = $value;
        $this->options['query']['Tag.1.value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag3value($value)
    {
        $this->data['Tag3value'] = $value;
        $this->options['query']['Tag.3.value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag5key($value)
    {
        $this->data['Tag5key'] = $value;
        $this->options['query']['Tag.5.key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag5value($value)
    {
        $this->data['Tag5value'] = $value;
        $this->options['query']['Tag.5.value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag1key($value)
    {
        $this->data['Tag1key'] = $value;
        $this->options['query']['Tag.1.key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag2value($value)
    {
        $this->data['Tag2value'] = $value;
        $this->options['query']['Tag.2.value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag4key($value)
    {
        $this->data['Tag4key'] = $value;
        $this->options['query']['Tag.4.key'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getConnectionStringPrefix()
 * @method $this withConnectionStringPrefix($value)
 * @method string getPGBouncerPort()
 * @method $this withPGBouncerPort($value)
 * @method string getGeneralGroupName()
 * @method $this withGeneralGroupName($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getBabelfishPort()
 * @method $this withBabelfishPort($value)
 * @method string getPort()
 * @method $this withPort($value)
 */
class AllocateInstancePublicConnection extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getConnectionStringPrefix()
 * @method $this withConnectionStringPrefix($value)
 * @method string getDistributionType()
 * @method $this withDistributionType($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getWeight()
 * @method $this withWeight($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPort()
 * @method $this withPort($value)
 * @method string getNetType()
 * @method $this withNetType($value)
 * @method string getMaxDelayTime()
 * @method $this withMaxDelayTime($value)
 */
class AllocateReadWriteSplittingConnection extends Rpc
{
}

/**
 * @method string getAllocationId()
 * @method $this withAllocationId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class AssociateEipAddressWithRCInstance extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getDiskId()
 * @method $this withDiskId($value)
 * @method string getDeleteWithInstance()
 * @method $this withDeleteWithInstance($value)
 */
class AttachRCDisk extends Rpc
{
}

/**
 * @method string getKeyPair()
 * @method $this withKeyPair($value)
 * @method string getPassword()
 * @method $this withPassword($value)
 * @method string getInstanceIds()
 * @method $this withInstanceIds($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 */
class AttachRCInstances extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getInsName()
 * @method $this withInsName($value)
 */
class AttachWhitelistTemplateToInstance extends Rpc
{
}

/**
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getSecurityGroupPermissions()
 * @method $this withSecurityGroupPermissions($value)
 * @method string getDirection()
 * @method $this withDirection($value)
 */
class AuthorizeRCSecurityGroupPermission extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CalculateDBInstanceWeight extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getIds()
 * @method $this withIds($value)
 */
class CancelActiveOperationTasks extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CheckAccountNameAvailable extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTargetRegionId()
 * @method $this withTargetRegionId($value)
 */
class CheckCloudResourceAuthorized extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBInstanceStorage()
 * @method $this withDBInstanceStorage($value)
 * @method string getSourceDBInstanceName()
 * @method $this withSourceDBInstanceName($value)
 * @method string getHostType()
 * @method $this withHostType($value)
 * @method string getBinlogRole()
 * @method $this withBinlogRole($value)
 * @method string getEngineVersion()
 * @method $this withEngineVersion($value)
 * @method string getUserBakSetURL()
 * @method $this withUserBakSetURL($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getEngine()
 * @method $this withEngine($value)
 * @method string getBackupSetRegion()
 * @method $this withBackupSetRegion($value)
 * @method string getBackupSetType()
 * @method $this withBackupSetType($value)
 * @method string getRestoreTime()
 * @method $this withRestoreTime($value)
 * @method string getBakSetName()
 * @method $this withBakSetName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getBackupSetId()
 * @method $this withBackupSetId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getBinlogPosition()
 * @method $this withBinlogPosition($value)
 * @method string getDBInstanceClass()
 * @method $this withDBInstanceClass($value)
 * @method string getRestoreType()
 * @method $this withRestoreType($value)
 * @method string getBinlogName()
 * @method $this withBinlogName($value)
 * @method string getSourceRegion()
 * @method $this withSourceRegion($value)
 */
class CheckCreateDdrDBInstance extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBName()
 * @method $this withDBName($value)
 */
class CheckDBNameAvailable extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class CheckInstanceExist extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getServiceLinkedRole()
 * @method $this withServiceLinkedRole($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CheckServiceLinkedRole extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBInstanceStorage()
 * @method $this withDBInstanceStorage($value)
 * @method string getDeletionProtection()
 * @method $this withDeletionProtection($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getDBInstanceDescription()
 * @method $this withDBInstanceDescription($value)
 * @method string getBackupType()
 * @method $this withBackupType($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getBackupId()
 * @method $this withBackupId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBInstanceClass()
 * @method $this withDBInstanceClass($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getPrivateIpAddress()
 * @method $this withPrivateIpAddress($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getInstanceNetworkType()
 * @method $this withInstanceNetworkType($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getZoneIdSlave1()
 * @method $this withZoneIdSlave1($value)
 * @method string getZoneIdSlave2()
 * @method $this withZoneIdSlave2($value)
 * @method string getIoAccelerationEnabled()
 * @method $this withIoAccelerationEnabled($value)
 * @method string getTableMeta()
 * @method $this withTableMeta($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getDBInstanceStorageType()
 * @method $this withDBInstanceStorageType($value)
 * @method string getDedicatedHostGroupId()
 * @method $this withDedicatedHostGroupId($value)
 * @method string getRestoreTime()
 * @method $this withRestoreTime($value)
 * @method string getAutoPay()
 * @method $this withAutoPay($value)
 * @method string getServerlessConfig()
 * @method $this withServerlessConfig($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getRestoreTable()
 * @method $this withRestoreTable($value)
 * @method string getUsedTime()
 * @method $this withUsedTime($value)
 * @method string getBurstingEnabled()
 * @method $this withBurstingEnabled($value)
 * @method string getDbNames()
 * @method $this withDbNames($value)
 * @method string getVPCId()
 * @method $this withVPCId($value)
 * @method string getCategory()
 * @method $this withCategory($value)
 * @method string getPayType()
 * @method $this withPayType($value)
 * @method string getBpeEnabled()
 * @method $this withBpeEnabled($value)
 */
class CloneDBInstance extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getParameterGroupId()
 * @method $this withParameterGroupId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTargetRegionId()
 * @method $this withTargetRegionId($value)
 * @method string getParameterGroupName()
 * @method $this withParameterGroupName($value)
 * @method string getParameterGroupDesc()
 * @method $this withParameterGroupDesc($value)
 */
class CloneParameterGroup extends Rpc
{
}

/**
 * @method string getNotifyIdList()
 * @method string getConfirmor()
 */
class ConfirmNotify extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNotifyIdList($value)
    {
        $this->data['NotifyIdList'] = $value;
        $this->options['form_params']['NotifyIdList'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withConfirmor($value)
    {
        $this->data['Confirmor'] = $value;
        $this->options['form_params']['Confirmor'] = $value;

        return $this;
    }
}

/**
 * @method string getDBInstanceName()
 * @method $this withDBInstanceName($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getReserveAccount()
 * @method $this withReserveAccount($value)
 * @method string getSrcDBName()
 * @method $this withSrcDBName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDstDBName()
 * @method $this withDstDBName($value)
 */
class CopyDatabase extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getRestoreTime()
 * @method $this withRestoreTime($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getBackupId()
 * @method $this withBackupId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSyncUserPrivilege()
 * @method $this withSyncUserPrivilege($value)
 * @method string getDbNames()
 * @method $this withDbNames($value)
 * @method string getTargetDBInstanceId()
 * @method $this withTargetDBInstanceId($value)
 * @method string getPayType()
 * @method $this withPayType($value)
 */
class CopyDatabaseBetweenInstances extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAccountType()
 * @method $this withAccountType($value)
 * @method string getAccountDescription()
 * @method $this withAccountDescription($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAccountPassword()
 * @method $this withAccountPassword($value)
 * @method string getCheckPolicy()
 * @method $this withCheckPolicy($value)
 */
class CreateAccount extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getBackupStrategy()
 * @method $this withBackupStrategy($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getBackupType()
 * @method $this withBackupType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getBackupMethod()
 * @method $this withBackupMethod($value)
 * @method string getBackupRetentionPeriod()
 * @method $this withBackupRetentionPeriod($value)
 * @method string getDBName()
 * @method $this withDBName($value)
 */
class CreateBackup extends Rpc
{
}

/**
 * @method string getDBInstanceName()
 * @method $this withDBInstanceName($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTaskName()
 * @method $this withTaskName($value)
 * @method string getSourceAccount()
 * @method $this withSourceAccount($value)
 * @method string getSourcePort()
 * @method $this withSourcePort($value)
 * @method string getSourcePassword()
 * @method $this withSourcePassword($value)
 * @method string getSourceIpAddress()
 * @method $this withSourceIpAddress($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSourceCategory()
 * @method $this withSourceCategory($value)
 */
class CreateCloudMigrationPrecheckTask extends Rpc
{
}

/**
 * @method string getDBInstanceName()
 * @method $this withDBInstanceName($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTaskName()
 * @method $this withTaskName($value)
 * @method string getSourceAccount()
 * @method $this withSourceAccount($value)
 * @method string getSourcePort()
 * @method $this withSourcePort($value)
 * @method string getSourcePassword()
 * @method $this withSourcePassword($value)
 * @method string getSourceIpAddress()
 * @method $this withSourceIpAddress($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSourceCategory()
 * @method $this withSourceCategory($value)
 */
class CreateCloudMigrationTask extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getDBDescription()
 * @method $this withDBDescription($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBName()
 * @method $this withDBName($value)
 * @method string getCharacterSetName()
 * @method $this withCharacterSetName($value)
 */
class CreateDatabase extends Rpc
{
}

/**
 * @method string getDBParamGroupId()
 * @method $this withDBParamGroupId($value)
 * @method string getBabelfishConfig()
 * @method $this withBabelfishConfig($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBInstanceStorage()
 * @method $this withDBInstanceStorage($value)
 * @method string getSystemDBCharset()
 * @method $this withSystemDBCharset($value)
 * @method string getConnectionString()
 * @method $this withConnectionString($value)
 * @method string getAutoCreateProxy()
 * @method $this withAutoCreateProxy($value)
 * @method string getOptimizedWrites()
 * @method $this withOptimizedWrites($value)
 * @method string getEngineVersion()
 * @method $this withEngineVersion($value)
 * @method string getDeletionProtection()
 * @method $this withDeletionProtection($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getTargetDedicatedHostIdForMaster()
 * @method $this withTargetDedicatedHostIdForMaster($value)
 * @method string getDBInstanceDescription()
 * @method $this withDBInstanceDescription($value)
 * @method array getTag()
 * @method string getBusinessInfo()
 * @method $this withBusinessInfo($value)
 * @method string getWhitelistTemplateList()
 * @method $this withWhitelistTemplateList($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getBackupId()
 * @method $this withBackupId($value)
 * @method string getEncryptionKey()
 * @method $this withEncryptionKey($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBInstanceClass()
 * @method $this withDBInstanceClass($value)
 * @method string getSecurityIPList()
 * @method $this withSecurityIPList($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getPrivateIpAddress()
 * @method $this withPrivateIpAddress($value)
 * @method string getTargetDedicatedHostIdForLog()
 * @method $this withTargetDedicatedHostIdForLog($value)
 * @method string getAutoRenew()
 * @method $this withAutoRenew($value)
 * @method string getPort()
 * @method $this withPort($value)
 * @method string getRoleARN()
 * @method $this withRoleARN($value)
 * @method string getPromotionCode()
 * @method $this withPromotionCode($value)
 * @method string getTunnelId()
 * @method $this withTunnelId($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getStorageAutoScale()
 * @method $this withStorageAutoScale($value)
 * @method string getInstanceNetworkType()
 * @method $this withInstanceNetworkType($value)
 * @method string getConnectionMode()
 * @method $this withConnectionMode($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getTargetDedicatedHostIdForSlave()
 * @method $this withTargetDedicatedHostIdForSlave($value)
 * @method string getExternalReplication()
 * @method $this withExternalReplication($value)
 * @method string getZoneIdSlave1()
 * @method $this withZoneIdSlave1($value)
 * @method string getZoneIdSlave2()
 * @method $this withZoneIdSlave2($value)
 * @method string getAutoUseCoupon()
 * @method $this withAutoUseCoupon($value)
 * @method string getDBIsIgnoreCase()
 * @method $this withDBIsIgnoreCase($value)
 * @method string getIoAccelerationEnabled()
 * @method $this withIoAccelerationEnabled($value)
 * @method string getColdDataEnabled()
 * @method $this withColdDataEnabled($value)
 * @method string getEngine()
 * @method $this withEngine($value)
 * @method string getDBTimeZone()
 * @method $this withDBTimeZone($value)
 * @method string getDBInstanceStorageType()
 * @method $this withDBInstanceStorageType($value)
 * @method string getDedicatedHostGroupId()
 * @method $this withDedicatedHostGroupId($value)
 * @method string getCreateStrategy()
 * @method $this withCreateStrategy($value)
 * @method string getDBInstanceNetType()
 * @method $this withDBInstanceNetType($value)
 * @method string getAmount()
 * @method $this withAmount($value)
 * @method string getAutoPay()
 * @method $this withAutoPay($value)
 * @method string getServerlessConfig()
 * @method $this withServerlessConfig($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getUsedTime()
 * @method $this withUsedTime($value)
 * @method string getBurstingEnabled()
 * @method $this withBurstingEnabled($value)
 * @method string getTargetMinorVersion()
 * @method $this withTargetMinorVersion($value)
 * @method string getUserBackupId()
 * @method $this withUserBackupId($value)
 * @method string getStorageUpperBound()
 * @method $this withStorageUpperBound($value)
 * @method string getStorageThreshold()
 * @method $this withStorageThreshold($value)
 * @method string getVPCId()
 * @method $this withVPCId($value)
 * @method string getCategory()
 * @method $this withCategory($value)
 * @method string getPayType()
 * @method $this withPayType($value)
 * @method string getBpeEnabled()
 * @method $this withBpeEnabled($value)
 */
class CreateDBInstance extends Rpc
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
 * @method string getConnectionStringPrefix()
 * @method $this withConnectionStringPrefix($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getDBInstanceEndpointDescription()
 * @method $this withDBInstanceEndpointDescription($value)
 * @method string getDBInstanceEndpointType()
 * @method $this withDBInstanceEndpointType($value)
 * @method string getNodeItems()
 * @method $this withNodeItems($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getPrivateIpAddress()
 * @method $this withPrivateIpAddress($value)
 * @method string getPort()
 * @method $this withPort($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 */
class CreateDBInstanceEndpoint extends Rpc
{
}

/**
 * @method string getConnectionStringPrefix()
 * @method $this withConnectionStringPrefix($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getIpType()
 * @method $this withIpType($value)
 * @method string getDBInstanceEndpointId()
 * @method $this withDBInstanceEndpointId($value)
 * @method string getPort()
 * @method $this withPort($value)
 */
class CreateDBInstanceEndpointAddress extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getZoneIdSlave1()
 * @method $this withZoneIdSlave1($value)
 * @method string getZoneIdSlave2()
 * @method $this withZoneIdSlave2($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getDBInstanceDescription()
 * @method $this withDBInstanceDescription($value)
 * @method string getDBInstanceNetType()
 * @method $this withDBInstanceNetType($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getUsedTime()
 * @method $this withUsedTime($value)
 * @method string getSecurityIPList()
 * @method $this withSecurityIPList($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getVPCId()
 * @method $this withVPCId($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getPayType()
 * @method $this withPayType($value)
 * @method string getInstanceNetworkType()
 * @method $this withInstanceNetworkType($value)
 */
class CreateDBInstanceForRebuild extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getPortRange()
 * @method $this withPortRange($value)
 * @method string getIpProtocol()
 * @method $this withIpProtocol($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getSourceCidrIp()
 * @method $this withSourceCidrIp($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CreateDBInstanceSecurityGroupRule extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBNode()
 * @method $this withDBNode($value)
 */
class CreateDBNodes extends Rpc
{
}

/**
 * @method string getConnectionStringPrefix()
 * @method $this withConnectionStringPrefix($value)
 * @method string getDBProxyConnectStringNetType()
 * @method $this withDBProxyConnectStringNetType($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getDBProxyNewConnectStringPort()
 * @method $this withDBProxyNewConnectStringPort($value)
 * @method string getDBProxyEngineType()
 * @method $this withDBProxyEngineType($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getDBProxyEndpointId()
 * @method $this withDBProxyEndpointId($value)
 * @method string getVPCId()
 * @method $this withVPCId($value)
 */
class CreateDBProxyEndpointAddress extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBInstanceStorage()
 * @method $this withDBInstanceStorage($value)
 * @method string getSystemDBCharset()
 * @method $this withSystemDBCharset($value)
 * @method string getBinlogRole()
 * @method $this withBinlogRole($value)
 * @method string getEngineVersion()
 * @method $this withEngineVersion($value)
 * @method string getUserBakSetURL()
 * @method $this withUserBakSetURL($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getDBInstanceDescription()
 * @method $this withDBInstanceDescription($value)
 * @method string getBackupSetRegion()
 * @method $this withBackupSetRegion($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getBackupSetId()
 * @method $this withBackupSetId($value)
 * @method string getEncryptionKey()
 * @method $this withEncryptionKey($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBInstanceClass()
 * @method $this withDBInstanceClass($value)
 * @method string getSecurityIPList()
 * @method $this withSecurityIPList($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getPrivateIpAddress()
 * @method $this withPrivateIpAddress($value)
 * @method string getBinlogName()
 * @method $this withBinlogName($value)
 * @method string getRoleARN()
 * @method $this withRoleARN($value)
 * @method string getTunnelId()
 * @method $this withTunnelId($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getInstanceNetworkType()
 * @method $this withInstanceNetworkType($value)
 * @method string getConnectionMode()
 * @method $this withConnectionMode($value)
 * @method string getSourceDBInstanceName()
 * @method $this withSourceDBInstanceName($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getHostType()
 * @method $this withHostType($value)
 * @method string getEngine()
 * @method $this withEngine($value)
 * @method string getDBInstanceStorageType()
 * @method $this withDBInstanceStorageType($value)
 * @method string getDBInstanceNetType()
 * @method $this withDBInstanceNetType($value)
 * @method string getBackupSetType()
 * @method $this withBackupSetType($value)
 * @method string getRestoreTime()
 * @method $this withRestoreTime($value)
 * @method string getBakSetName()
 * @method $this withBakSetName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getUsedTime()
 * @method $this withUsedTime($value)
 * @method string getBinlogPosition()
 * @method $this withBinlogPosition($value)
 * @method string getRestoreType()
 * @method $this withRestoreType($value)
 * @method string getVPCId()
 * @method $this withVPCId($value)
 * @method string getPayType()
 * @method $this withPayType($value)
 * @method string getSourceRegion()
 * @method $this withSourceRegion($value)
 */
class CreateDdrInstance extends Rpc
{
}

/**
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getCentralRdsDtsAdminAccount()
 * @method $this withCentralRdsDtsAdminAccount($value)
 * @method string getCentralRegionId()
 * @method $this withCentralRegionId($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method array getTag()
 * @method array getUnitNode()
 * @method string getDBList()
 * @method $this withDBList($value)
 * @method string getCentralDBInstanceId()
 * @method $this withCentralDBInstanceId($value)
 * @method string getCentralRdsDtsAdminPassword()
 * @method $this withCentralRdsDtsAdminPassword($value)
 */
class CreateGADInstance extends Rpc
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
     * @param array $unitNode
     *
     * @return $this
     */
	public function withUnitNode(array $unitNode)
	{
	    $this->data['UnitNode'] = $unitNode;
		foreach ($unitNode as $depth1 => $depth1Value) {
			if(isset($depth1Value['DBInstanceStorage'])){
				$this->options['query']['UnitNode.' . ($depth1 + 1) . '.DBInstanceStorage'] = $depth1Value['DBInstanceStorage'];
			}
			if(isset($depth1Value['ZoneIDSlave1'])){
				$this->options['query']['UnitNode.' . ($depth1 + 1) . '.ZoneIDSlave1'] = $depth1Value['ZoneIDSlave1'];
			}
			if(isset($depth1Value['ZoneIDSlave2'])){
				$this->options['query']['UnitNode.' . ($depth1 + 1) . '.ZoneIDSlave2'] = $depth1Value['ZoneIDSlave2'];
			}
			if(isset($depth1Value['EngineVersion'])){
				$this->options['query']['UnitNode.' . ($depth1 + 1) . '.EngineVersion'] = $depth1Value['EngineVersion'];
			}
			if(isset($depth1Value['DbInstanceClass'])){
				$this->options['query']['UnitNode.' . ($depth1 + 1) . '.DbInstanceClass'] = $depth1Value['DbInstanceClass'];
			}
			if(isset($depth1Value['SecurityIPList'])){
				$this->options['query']['UnitNode.' . ($depth1 + 1) . '.SecurityIPList'] = $depth1Value['SecurityIPList'];
			}
			if(isset($depth1Value['VSwitchID'])){
				$this->options['query']['UnitNode.' . ($depth1 + 1) . '.VSwitchID'] = $depth1Value['VSwitchID'];
			}
			if(isset($depth1Value['Engine'])){
				$this->options['query']['UnitNode.' . ($depth1 + 1) . '.Engine'] = $depth1Value['Engine'];
			}
			if(isset($depth1Value['RegionID'])){
				$this->options['query']['UnitNode.' . ($depth1 + 1) . '.RegionID'] = $depth1Value['RegionID'];
			}
			if(isset($depth1Value['DtsInstanceClass'])){
				$this->options['query']['UnitNode.' . ($depth1 + 1) . '.DtsInstanceClass'] = $depth1Value['DtsInstanceClass'];
			}
			if(isset($depth1Value['VpcID'])){
				$this->options['query']['UnitNode.' . ($depth1 + 1) . '.VpcID'] = $depth1Value['VpcID'];
			}
			if(isset($depth1Value['ZoneID'])){
				$this->options['query']['UnitNode.' . ($depth1 + 1) . '.ZoneID'] = $depth1Value['ZoneID'];
			}
			if(isset($depth1Value['DBInstanceDescription'])){
				$this->options['query']['UnitNode.' . ($depth1 + 1) . '.DBInstanceDescription'] = $depth1Value['DBInstanceDescription'];
			}
			if(isset($depth1Value['DBInstanceStorageType'])){
				$this->options['query']['UnitNode.' . ($depth1 + 1) . '.DBInstanceStorageType'] = $depth1Value['DBInstanceStorageType'];
			}
			if(isset($depth1Value['DtsConflict'])){
				$this->options['query']['UnitNode.' . ($depth1 + 1) . '.DtsConflict'] = $depth1Value['DtsConflict'];
			}
			if(isset($depth1Value['PayType'])){
				$this->options['query']['UnitNode.' . ($depth1 + 1) . '.PayType'] = $depth1Value['PayType'];
			}
		}

		return $this;
    }
}

/**
 * @method string getCentralRdsDtsAdminAccount()
 * @method $this withCentralRdsDtsAdminAccount($value)
 * @method string getCentralRegionId()
 * @method $this withCentralRegionId($value)
 * @method string getGadInstanceId()
 * @method $this withGadInstanceId($value)
 * @method array getUnitNode()
 * @method string getDBList()
 * @method $this withDBList($value)
 * @method string getCentralDBInstanceId()
 * @method $this withCentralDBInstanceId($value)
 * @method string getCentralRdsDtsAdminPassword()
 * @method $this withCentralRdsDtsAdminPassword($value)
 */
class CreateGadInstanceMember extends Rpc
{

    /**
     * @param array $unitNode
     *
     * @return $this
     */
	public function withUnitNode(array $unitNode)
	{
	    $this->data['UnitNode'] = $unitNode;
		foreach ($unitNode as $depth1 => $depth1Value) {
			if(isset($depth1Value['DBInstanceStorage'])){
				$this->options['query']['UnitNode.' . ($depth1 + 1) . '.DBInstanceStorage'] = $depth1Value['DBInstanceStorage'];
			}
			if(isset($depth1Value['ZoneIDSlave1'])){
				$this->options['query']['UnitNode.' . ($depth1 + 1) . '.ZoneIDSlave1'] = $depth1Value['ZoneIDSlave1'];
			}
			if(isset($depth1Value['ZoneIDSlave2'])){
				$this->options['query']['UnitNode.' . ($depth1 + 1) . '.ZoneIDSlave2'] = $depth1Value['ZoneIDSlave2'];
			}
			if(isset($depth1Value['EngineVersion'])){
				$this->options['query']['UnitNode.' . ($depth1 + 1) . '.EngineVersion'] = $depth1Value['EngineVersion'];
			}
			if(isset($depth1Value['DbInstanceClass'])){
				$this->options['query']['UnitNode.' . ($depth1 + 1) . '.DbInstanceClass'] = $depth1Value['DbInstanceClass'];
			}
			if(isset($depth1Value['SecurityIPList'])){
				$this->options['query']['UnitNode.' . ($depth1 + 1) . '.SecurityIPList'] = $depth1Value['SecurityIPList'];
			}
			if(isset($depth1Value['VSwitchID'])){
				$this->options['query']['UnitNode.' . ($depth1 + 1) . '.VSwitchID'] = $depth1Value['VSwitchID'];
			}
			if(isset($depth1Value['Engine'])){
				$this->options['query']['UnitNode.' . ($depth1 + 1) . '.Engine'] = $depth1Value['Engine'];
			}
			if(isset($depth1Value['RegionID'])){
				$this->options['query']['UnitNode.' . ($depth1 + 1) . '.RegionID'] = $depth1Value['RegionID'];
			}
			if(isset($depth1Value['DtsInstanceClass'])){
				$this->options['query']['UnitNode.' . ($depth1 + 1) . '.DtsInstanceClass'] = $depth1Value['DtsInstanceClass'];
			}
			if(isset($depth1Value['VpcID'])){
				$this->options['query']['UnitNode.' . ($depth1 + 1) . '.VpcID'] = $depth1Value['VpcID'];
			}
			if(isset($depth1Value['ZoneID'])){
				$this->options['query']['UnitNode.' . ($depth1 + 1) . '.ZoneID'] = $depth1Value['ZoneID'];
			}
			if(isset($depth1Value['DBInstanceDescription'])){
				$this->options['query']['UnitNode.' . ($depth1 + 1) . '.DBInstanceDescription'] = $depth1Value['DBInstanceDescription'];
			}
			if(isset($depth1Value['DBInstanceStorageType'])){
				$this->options['query']['UnitNode.' . ($depth1 + 1) . '.DBInstanceStorageType'] = $depth1Value['DBInstanceStorageType'];
			}
			if(isset($depth1Value['DtsConflict'])){
				$this->options['query']['UnitNode.' . ($depth1 + 1) . '.DtsConflict'] = $depth1Value['DtsConflict'];
			}
		}

		return $this;
    }
}

/**
 * @method string getDBInstanceName()
 * @method $this withDBInstanceName($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getMaskingAlgo()
 * @method $this withMaskingAlgo($value)
 * @method string getRuleName()
 * @method $this withRuleName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDefaultAlgo()
 * @method $this withDefaultAlgo($value)
 * @method string getRuleConfig()
 * @method $this withRuleConfig($value)
 * @method string getDBName()
 * @method $this withDBName($value)
 */
class CreateMaskingRules extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getIsOnlineDB()
 * @method $this withIsOnlineDB($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getMigrateTaskId()
 * @method $this withMigrateTaskId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getOssObjectPositions()
 * @method $this withOssObjectPositions($value)
 * @method string getOSSUrls()
 * @method $this withOSSUrls($value)
 * @method string getDBName()
 * @method $this withDBName($value)
 * @method string getBackupMode()
 * @method $this withBackupMode($value)
 * @method string getCheckDBMode()
 * @method $this withCheckDBMode($value)
 */
class CreateMigrateTask extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getMigrateTaskId()
 * @method $this withMigrateTaskId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBName()
 * @method $this withDBName($value)
 * @method string getCheckDBMode()
 * @method $this withCheckDBMode($value)
 */
class CreateOnlineDatabaseTask extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getNodeType()
 * @method $this withNodeType($value)
 * @method string getDBNodeId()
 * @method $this withDBNodeId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getEngineVersion()
 * @method $this withEngineVersion($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getBusinessInfo()
 * @method $this withBusinessInfo($value)
 * @method string getAutoPay()
 * @method $this withAutoPay($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getResource()
 * @method $this withResource($value)
 * @method string getCommodityCode()
 * @method $this withCommodityCode($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPromotionCode()
 * @method $this withPromotionCode($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 */
class CreateOrderForDeleteDBNodes extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getEngineVersion()
 * @method $this withEngineVersion($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getEngine()
 * @method $this withEngine($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getParameterGroupName()
 * @method $this withParameterGroupName($value)
 * @method string getParameters()
 * @method $this withParameters($value)
 * @method string getParameterGroupDesc()
 * @method $this withParameterGroupDesc($value)
 */
class CreateParameterGroup extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getRiskConfirmed()
 * @method $this withRiskConfirmed($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getSourceDatabase()
 * @method $this withSourceDatabase($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBNames()
 * @method $this withDBNames($value)
 * @method string getExtensions()
 * @method $this withExtensions($value)
 */
class CreatePostgresExtensions extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getGroupCount()
 * @method $this withGroupCount($value)
 * @method array getTag()
 * @method string getDeploymentSetName()
 * @method $this withDeploymentSetName($value)
 * @method string getOnUnableToRedeployFailedInstance()
 * @method $this withOnUnableToRedeployFailedInstance($value)
 * @method string getStrategy()
 * @method $this withStrategy($value)
 */
class CreateRCDeploymentSet extends Rpc
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
 * @method string getSnapshotId()
 * @method $this withSnapshotId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getDiskName()
 * @method $this withDiskName($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getDiskCategory()
 * @method $this withDiskCategory($value)
 * @method array getTag()
 * @method string getInstanceChargeType()
 * @method $this withInstanceChargeType($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getAutoPay()
 * @method $this withAutoPay($value)
 * @method string getPerformanceLevel()
 * @method $this withPerformanceLevel($value)
 * @method string getPeriodUnit()
 * @method $this withPeriodUnit($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSize()
 * @method $this withSize($value)
 * @method string getAutoRenew()
 * @method $this withAutoRenew($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 */
class CreateRCDisk extends Rpc
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
 * @method string getSecurityEnhancementStrategy()
 * @method $this withSecurityEnhancementStrategy($value)
 * @method string getKeyPairName()
 * @method $this withKeyPairName($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getPassword()
 * @method $this withPassword($value)
 * @method string getHostName()
 * @method $this withHostName($value)
 * @method string getSystemDisk()
 * @method $this withSystemDisk($value)
 * @method array getTag()
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
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
 * @method string getCreateMode()
 * @method $this withCreateMode($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getNodePoolName()
 * @method $this withNodePoolName($value)
 * @method string getImageId()
 * @method $this withImageId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getIoOptimized()
 * @method $this withIoOptimized($value)
 * @method string getInternetMaxBandwidthOut()
 * @method $this withInternetMaxBandwidthOut($value)
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getSupportCase()
 * @method $this withSupportCase($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getInstanceChargeType()
 * @method $this withInstanceChargeType($value)
 * @method string getDeploymentSetId()
 * @method $this withDeploymentSetId($value)
 * @method string getAmount()
 * @method $this withAmount($value)
 * @method string getAutoPay()
 * @method $this withAutoPay($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getDataDisk()
 * @method $this withDataDisk($value)
 */
class CreateRCNodePool extends Rpc
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
 * @method string getInstantAccess()
 * @method $this withInstantAccess($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getInstantAccessRetentionDays()
 * @method $this withInstantAccessRetentionDays($value)
 * @method string getDiskId()
 * @method $this withDiskId($value)
 * @method array getTag()
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getRetentionDays()
 * @method $this withRetentionDays($value)
 */
class CreateRCSnapshot extends Rpc
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
 * @method string getDBInstanceStorage()
 * @method $this withDBInstanceStorage($value)
 * @method string getAutoCreateProxy()
 * @method $this withAutoCreateProxy($value)
 * @method string getEngineVersion()
 * @method $this withEngineVersion($value)
 * @method string getDeletionProtection()
 * @method $this withDeletionProtection($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getTargetDedicatedHostIdForMaster()
 * @method $this withTargetDedicatedHostIdForMaster($value)
 * @method string getDBInstanceDescription()
 * @method $this withDBInstanceDescription($value)
 * @method string getGdnInstanceName()
 * @method $this withGdnInstanceName($value)
 * @method string getTddlBizType()
 * @method $this withTddlBizType($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBInstanceClass()
 * @method $this withDBInstanceClass($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getPrivateIpAddress()
 * @method $this withPrivateIpAddress($value)
 * @method string getAutoRenew()
 * @method $this withAutoRenew($value)
 * @method string getPort()
 * @method $this withPort($value)
 * @method string getPromotionCode()
 * @method $this withPromotionCode($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getInstanceNetworkType()
 * @method $this withInstanceNetworkType($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getInstructionSetArch()
 * @method $this withInstructionSetArch($value)
 * @method string getAutoUseCoupon()
 * @method $this withAutoUseCoupon($value)
 * @method string getIoAccelerationEnabled()
 * @method $this withIoAccelerationEnabled($value)
 * @method string getTddlRegionConfig()
 * @method $this withTddlRegionConfig($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getDBInstanceStorageType()
 * @method $this withDBInstanceStorageType($value)
 * @method string getDedicatedHostGroupId()
 * @method $this withDedicatedHostGroupId($value)
 * @method string getAutoPay()
 * @method $this withAutoPay($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getUsedTime()
 * @method $this withUsedTime($value)
 * @method string getBurstingEnabled()
 * @method $this withBurstingEnabled($value)
 * @method string getVPCId()
 * @method $this withVPCId($value)
 * @method string getIsAnalyticReadOnlyIns()
 * @method $this withIsAnalyticReadOnlyIns($value)
 * @method string getCategory()
 * @method $this withCategory($value)
 * @method string getPayType()
 * @method $this withPayType($value)
 * @method string getBpeEnabled()
 * @method $this withBpeEnabled($value)
 */
class CreateReadOnlyDBInstance extends Rpc
{
}

/**
 * @method string getReplicatorAccount()
 * @method $this withReplicatorAccount($value)
 * @method string getTaskName()
 * @method $this withTaskName($value)
 * @method string getSourcePort()
 * @method $this withSourcePort($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 * @method string getSourceInstanceName()
 * @method $this withSourceInstanceName($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getSourceInstanceRegionId()
 * @method $this withSourceInstanceRegionId($value)
 * @method string getTargetAddress()
 * @method $this withTargetAddress($value)
 * @method string getReplicatorPassword()
 * @method $this withReplicatorPassword($value)
 * @method string getSourceAddress()
 * @method $this withSourceAddress($value)
 * @method string getSourceCategory()
 * @method $this withSourceCategory($value)
 */
class CreateReplicationLink extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getPassword()
 * @method $this withPassword($value)
 * @method string getEngine()
 * @method $this withEngine($value)
 * @method string getDbInstanceId()
 * @method $this withDbInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDbNames()
 * @method $this withDbNames($value)
 * @method string getSecretName()
 * @method $this withSecretName($value)
 * @method string getUsername()
 * @method $this withUsername($value)
 */
class CreateSecret extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getServiceLinkedRole()
 * @method $this withServiceLinkedRole($value)
 */
class CreateServiceLinkedRole extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getRestoreTime()
 * @method $this withRestoreTime($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getBackupId()
 * @method $this withBackupId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CreateTempDBInstance extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPromotionId()
 * @method $this withPromotionId($value)
 * @method string getActivityId()
 * @method $this withActivityId($value)
 */
class CreateYouhuiForOrder extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteAccount extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteADSetting extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getBackupId()
 * @method $this withBackupId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteBackup extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getBackupId()
 * @method $this withBackupId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getBackupTime()
 * @method $this withBackupTime($value)
 * @method string getDBName()
 * @method $this withDBName($value)
 */
class DeleteBackupFile extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBName()
 * @method $this withDBName($value)
 */
class DeleteDatabase extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getReleasedKeepPolicy()
 * @method $this withReleasedKeepPolicy($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteDBInstance extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDBInstanceEndpointId()
 * @method $this withDBInstanceEndpointId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class DeleteDBInstanceEndpoint extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getConnectionString()
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getDBInstanceEndpointId()
 */
class DeleteDBInstanceEndpointAddress extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withConnectionString($value)
    {
        $this->data['ConnectionString'] = $value;
        $this->options['form_params']['ConnectionString'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDBInstanceEndpointId($value)
    {
        $this->data['DBInstanceEndpointId'] = $value;
        $this->options['form_params']['DBInstanceEndpointId'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getSecurityGroupRuleIds()
 * @method $this withSecurityGroupRuleIds($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteDBInstanceSecurityGroupRule extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBNodeId()
 * @method $this withDBNodeId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteDBNodes extends Rpc
{
}

/**
 * @method string getDBProxyConnectStringNetType()
 * @method $this withDBProxyConnectStringNetType($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getDBProxyEngineType()
 * @method $this withDBProxyEngineType($value)
 * @method string getDBProxyEndpointId()
 * @method $this withDBProxyEndpointId($value)
 */
class DeleteDBProxyEndpointAddress extends Rpc
{
}

/**
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getGadInstanceName()
 * @method $this withGadInstanceName($value)
 */
class DeleteGadInstance extends Rpc
{
}

/**
 * @method string getDBInstanceName()
 * @method $this withDBInstanceName($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getRuleName()
 * @method $this withRuleName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBName()
 * @method $this withDBName($value)
 */
class DeleteMaskingRules extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getParameterGroupId()
 * @method $this withParameterGroupId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteParameterGroup extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBNames()
 * @method $this withDBNames($value)
 * @method string getExtensions()
 * @method $this withExtensions($value)
 */
class DeletePostgresExtensions extends Rpc
{
}

/**
 * @method string getNodes()
 * @method $this withNodes($value)
 * @method string getInstanceIds()
 * @method $this withInstanceIds($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 */
class DeleteRCClusterNodes extends Rpc
{
}

/**
 * @method string getDeploymentSetId()
 * @method $this withDeploymentSetId($value)
 */
class DeleteRCDeploymentSet extends Rpc
{
}

/**
 * @method string getDiskId()
 * @method $this withDiskId($value)
 */
class DeleteRCDisk extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getForce()
 * @method $this withForce($value)
 */
class DeleteRCInstance extends Rpc
{
}

/**
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getTerminateSubscription()
 * @method $this withTerminateSubscription($value)
 * @method string getForce()
 * @method $this withForce($value)
 */
class DeleteRCInstances extends Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getNodePoolId()
 * @method $this withNodePoolId($value)
 */
class DeleteRCNodePool extends Rpc
{
}

/**
 * @method string getSnapshotId()
 * @method $this withSnapshotId($value)
 * @method string getForce()
 * @method $this withForce($value)
 */
class DeleteRCSnapshot extends Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DeleteRCVCluster extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPromoteToMaster()
 * @method $this withPromoteToMaster($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteReplicationLink extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getSecretArn()
 * @method $this withSecretArn($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getEngine()
 * @method $this withEngine($value)
 * @method string getDbInstanceId()
 * @method $this withDbInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSecretName()
 * @method $this withSecretName($value)
 */
class DeleteSecret extends Rpc
{
}

/**
 * @method string getSlotName()
 * @method $this withSlotName($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSlotStatus()
 * @method $this withSlotStatus($value)
 */
class DeleteSlot extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getEngine()
 * @method $this withEngine($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getBackupId()
 * @method $this withBackupId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getOpsServiceVersion()
 * @method $this withOpsServiceVersion($value)
 */
class DeleteUserBackupFile extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getImportId()
 * @method $this withImportId($value)
 * @method string getEngine()
 * @method $this withEngine($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescibeImportsFromDatabase extends Rpc
{
}

/**
 * @method string getDBInstanceName()
 * @method $this withDBInstanceName($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBName()
 * @method $this withDBName($value)
 * @method string getUserName()
 * @method $this withUserName($value)
 */
class DescribeAccountMaskingPrivilege extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeAccounts extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeActionEventPolicy extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getProductId()
 * @method $this withProductId($value)
 * @method string getChangeLevel()
 * @method $this withChangeLevel($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getInsName()
 * @method $this withInsName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getTaskType()
 * @method $this withTaskType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getAllowCancel()
 * @method $this withAllowCancel($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDbType()
 * @method $this withDbType($value)
 * @method string getAllowChange()
 * @method $this withAllowChange($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeActiveOperationTasks extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeADInfo extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getPageNumbers()
 * @method $this withPageNumbers($value)
 * @method string getTemplateName()
 * @method $this withTemplateName($value)
 * @method string getFuzzySearch()
 * @method $this withFuzzySearch($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getMaxRecordsPerPage()
 * @method $this withMaxRecordsPerPage($value)
 */
class DescribeAllWhitelistTemplate extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class DescribeAnalyticdbByPrimaryDBInstance extends Rpc
{
}

/**
 * @method string getDBInstanceName()
 * @method $this withDBInstanceName($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getEngineVersion()
 * @method $this withEngineVersion($value)
 * @method string getUseSpecifyRegionFilterCommodityResource()
 * @method $this withUseSpecifyRegionFilterCommodityResource($value)
 * @method string getEngine()
 * @method $this withEngine($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getDBInstanceStorageType()
 * @method $this withDBInstanceStorageType($value)
 * @method string getInstanceChargeType()
 * @method $this withInstanceChargeType($value)
 * @method string getDispenseMode()
 * @method $this withDispenseMode($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getCommodityCode()
 * @method $this withCommodityCode($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getEvaluateResource()
 * @method $this withEvaluateResource($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getCategory()
 * @method $this withCategory($value)
 * @method string getOrderType()
 * @method $this withOrderType($value)
 */
class DescribeAvailableClasses extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeAvailableCrossRegion extends Rpc
{
}

/**
 * @method string getDBInstanceName()
 * @method $this withDBInstanceName($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeAvailableMetrics extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getCrossBackupId()
 * @method $this withCrossBackupId($value)
 */
class DescribeAvailableRecoveryTime extends Rpc
{
}

/**
 * @method string getDBInstanceName()
 * @method $this withDBInstanceName($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getEngineVersion()
 * @method $this withEngineVersion($value)
 * @method string getEngine()
 * @method $this withEngine($value)
 * @method string getInstanceChargeType()
 * @method $this withInstanceChargeType($value)
 * @method string getDispenseMode()
 * @method $this withDispenseMode($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getCachedAsync()
 * @method $this withCachedAsync($value)
 * @method string getCommodityCode()
 * @method $this withCommodityCode($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getEvaluateResource()
 * @method $this withEvaluateResource($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getCategory()
 * @method $this withCategory($value)
 */
class DescribeAvailableZones extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getBackupId()
 * @method $this withBackupId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeBackupDatabase extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getBackupPolicyMode()
 * @method $this withBackupPolicyMode($value)
 * @method string getReleasedKeepPolicy()
 * @method $this withReleasedKeepPolicy($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getCompressType()
 * @method $this withCompressType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeBackupPolicy extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getBackupLocation()
 * @method $this withBackupLocation($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getBackupType()
 * @method $this withBackupType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getBackupId()
 * @method $this withBackupId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getBackupStatus()
 * @method $this withBackupStatus($value)
 * @method string getBackupMode()
 * @method $this withBackupMode($value)
 */
class DescribeBackups extends Rpc
{
}

/**
 * @method string getBackupJobId()
 * @method $this withBackupJobId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getFlag()
 * @method $this withFlag($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getBackupJobStatus()
 * @method $this withBackupJobStatus($value)
 * @method string getBackupMode()
 * @method $this withBackupMode($value)
 */
class DescribeBackupTasks extends Rpc
{
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
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getLatest()
 * @method $this withLatest($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeBinlogFiles extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getEngine()
 * @method $this withEngine($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeCharacterSetName extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getEngineVersion()
 * @method $this withEngineVersion($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getEngine()
 * @method $this withEngine($value)
 * @method string getClassCode()
 * @method $this withClassCode($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getCommodityCode()
 * @method $this withCommodityCode($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeClassDetails extends Rpc
{
}

/**
 * @method string getDBInstanceName()
 * @method $this withDBInstanceName($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTaskName()
 * @method $this withTaskName($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getSourcePort()
 * @method $this withSourcePort($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 * @method string getSourceIpAddress()
 * @method $this withSourceIpAddress($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeCloudMigrationPrecheckResult extends Rpc
{
}

/**
 * @method string getDBInstanceName()
 * @method $this withDBInstanceName($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTaskName()
 * @method $this withTaskName($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getSourcePort()
 * @method $this withSourcePort($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 * @method string getSourceIpAddress()
 * @method $this withSourceIpAddress($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeCloudMigrationResult extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeCollationTimeZones extends Rpc
{
}

/**
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class DescribeComputeBurstConfig extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPattern()
 * @method $this withPattern($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageIndex()
 * @method $this withPageIndex($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getBackupSetId()
 * @method $this withBackupSetId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getGetDbName()
 * @method $this withGetDbName($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 */
class DescribeCrossBackupMetaList extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getNotEnabled()
 * @method $this withNotEnabled($value)
 * @method string getProduct()
 * @method $this withProduct($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeCrossRegionBackupDBInstance extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getBackupId()
 * @method $this withBackupId($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getCrossBackupRegion()
 * @method $this withCrossBackupRegion($value)
 * @method string getCrossBackupId()
 * @method $this withCrossBackupId($value)
 */
class DescribeCrossRegionBackups extends Rpc
{
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
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getCrossBackupRegion()
 * @method $this withCrossBackupRegion($value)
 */
class DescribeCrossRegionLogBackupFiles extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getDbInstanceId()
 * @method $this withDbInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeCurrentModifyOrder extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getDBInstanceIds()
 * @method $this withDBInstanceIds($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeCustinsResourceInfo extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getDBStatus()
 * @method $this withDBStatus($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBName()
 * @method $this withDBName($value)
 */
class DescribeDatabases extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getExpired()
 * @method $this withExpired($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeDBInstanceAttribute extends Rpc
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
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getProxyId()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeDBInstanceByTags extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }
}

/**
 * @method string getDbInstanceName()
 * @method $this withDbInstanceName($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getSourceIpAddress()
 * @method $this withSourceIpAddress($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeDBInstanceConnectivity extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeDBInstanceDetail extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEncryptionKey()
 * @method $this withEncryptionKey($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTargetRegionId()
 * @method $this withTargetRegionId($value)
 */
class DescribeDBInstanceEncryptionKey extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDBInstanceEndpointId()
 * @method $this withDBInstanceEndpointId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class DescribeDBInstanceEndpoints extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeDBInstanceHAConfig extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getWhitelistNetworkType()
 * @method $this withWhitelistNetworkType($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeDBInstanceIPArrayList extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeDBInstanceIpHostname extends Rpc
{
}

/**
 * @method string getDBInstanceName()
 * @method $this withDBInstanceName($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeDBInstanceMetrics extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeDBInstanceMonitor extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getFlag()
 * @method $this withFlag($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getGeneralGroupName()
 * @method $this withGeneralGroupName($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBInstanceNetRWSplitType()
 * @method $this withDBInstanceNetRWSplitType($value)
 */
class DescribeDBInstanceNetInfo extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getFlag()
 * @method $this withFlag($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBInstanceNetRWSplitType()
 * @method $this withDBInstanceNetRWSplitType($value)
 */
class DescribeDBInstanceNetInfoForChannel extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getRoleId()
 * @method $this withRoleId($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getNodeId()
 * @method $this withNodeId($value)
 * @method string getKey()
 * @method $this withKey($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getUseNullWhenMissingPoint()
 * @method $this withUseNullWhenMissingPoint($value)
 */
class DescribeDBInstancePerformance extends Rpc
{
}

/**
 * @method string getDbInstanceName()
 * @method $this withDbInstanceName($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getAliUid()
 * @method $this withAliUid($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeDBInstancePromoteActivity extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class DescribeDBInstanceProxyConfiguration extends Rpc
{
}

/**
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class DescribeDBInstanceReplication extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getTag4value()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTag2key()
 * @method string getConnectionString()
 * @method $this withConnectionString($value)
 * @method string getNeedVpcName()
 * @method $this withNeedVpcName($value)
 * @method string getTag3key()
 * @method string getEngineVersion()
 * @method $this withEngineVersion($value)
 * @method string getTag1value()
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getProxyId()
 * @method string getTag5key()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBInstanceType()
 * @method $this withDBInstanceType($value)
 * @method string getDBInstanceClass()
 * @method $this withDBInstanceClass($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getTag4key()
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getInstanceNetworkType()
 * @method $this withInstanceNetworkType($value)
 * @method string getConnectionMode()
 * @method $this withConnectionMode($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getInstanceLevel()
 * @method $this withInstanceLevel($value)
 * @method string getSearchKey()
 * @method $this withSearchKey($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getExpired()
 * @method $this withExpired($value)
 * @method string getQueryAutoRenewal()
 * @method $this withQueryAutoRenewal($value)
 * @method string getEngine()
 * @method $this withEngine($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDBInstanceStatus()
 * @method $this withDBInstanceStatus($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getDedicatedHostGroupId()
 * @method $this withDedicatedHostGroupId($value)
 * @method string getTag3value()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDedicatedHostId()
 * @method $this withDedicatedHostId($value)
 * @method string getTag5value()
 * @method string getTag1key()
 * @method string getFilter()
 * @method $this withFilter($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getTag2value()
 * @method string getCategory()
 * @method $this withCategory($value)
 * @method string getPayType()
 * @method $this withPayType($value)
 */
class DescribeDBInstances extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag4value($value)
    {
        $this->data['Tag4value'] = $value;
        $this->options['query']['Tag.4.value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag2key($value)
    {
        $this->data['Tag2key'] = $value;
        $this->options['query']['Tag.2.key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag3key($value)
    {
        $this->data['Tag3key'] = $value;
        $this->options['query']['Tag.3.key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag1value($value)
    {
        $this->data['Tag1value'] = $value;
        $this->options['query']['Tag.1.value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag5key($value)
    {
        $this->data['Tag5key'] = $value;
        $this->options['query']['Tag.5.key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag4key($value)
    {
        $this->data['Tag4key'] = $value;
        $this->options['query']['Tag.4.key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag3value($value)
    {
        $this->data['Tag3value'] = $value;
        $this->options['query']['Tag.3.value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag5value($value)
    {
        $this->data['Tag5value'] = $value;
        $this->options['query']['Tag.5.value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag1key($value)
    {
        $this->data['Tag1key'] = $value;
        $this->options['query']['Tag.1.key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag2value($value)
    {
        $this->data['Tag2value'] = $value;
        $this->options['query']['Tag.2.value'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getExportKey()
 * @method $this withExportKey($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getCachedAsync()
 * @method $this withCachedAsync($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeDBInstancesAsCsv extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getExpired()
 * @method $this withExpired($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getExpirePeriod()
 * @method $this withExpirePeriod($value)
 * @method string getProxyId()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTags()
 * @method $this withTags($value)
 */
class DescribeDBInstancesByExpireTime extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }
}

/**
 * @method string getTag4value()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTag2key()
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getTag3key()
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getTag1value()
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSortKey()
 * @method $this withSortKey($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getTag3value()
 * @method string getProxyId()
 * @method string getTag5key()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTag5value()
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getTag1key()
 * @method string getSortMethod()
 * @method $this withSortMethod($value)
 * @method string getTag2value()
 * @method string getTag4key()
 */
class DescribeDBInstancesByPerformance extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag4value($value)
    {
        $this->data['Tag4value'] = $value;
        $this->options['query']['Tag.4.value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag2key($value)
    {
        $this->data['Tag2key'] = $value;
        $this->options['query']['Tag.2.key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag3key($value)
    {
        $this->data['Tag3key'] = $value;
        $this->options['query']['Tag.3.key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag1value($value)
    {
        $this->data['Tag1value'] = $value;
        $this->options['query']['Tag.1.value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag3value($value)
    {
        $this->data['Tag3value'] = $value;
        $this->options['query']['Tag.3.value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag5key($value)
    {
        $this->data['Tag5key'] = $value;
        $this->options['query']['Tag.5.key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag5value($value)
    {
        $this->data['Tag5value'] = $value;
        $this->options['query']['Tag.5.value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag1key($value)
    {
        $this->data['Tag1key'] = $value;
        $this->options['query']['Tag.1.key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag2value($value)
    {
        $this->data['Tag2value'] = $value;
        $this->options['query']['Tag.2.value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag4key($value)
    {
        $this->data['Tag4key'] = $value;
        $this->options['query']['Tag.4.key'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeDBInstanceSecurityGroupRule extends Rpc
{
}

/**
 * @method string getConnectionMode()
 * @method $this withConnectionMode($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getNodeType()
 * @method $this withNodeType($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getSearchKey()
 * @method $this withSearchKey($value)
 * @method string getEngineVersion()
 * @method $this withEngineVersion($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getExpired()
 * @method $this withExpired($value)
 * @method string getEngine()
 * @method $this withEngine($value)
 * @method string getCurrentInstanceId()
 * @method $this withCurrentInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDBInstanceStatus()
 * @method $this withDBInstanceStatus($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getProxyId()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBInstanceType()
 * @method $this withDBInstanceType($value)
 * @method string getDBInstanceClass()
 * @method $this withDBInstanceClass($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getPayType()
 * @method $this withPayType($value)
 * @method string getInstanceNetworkType()
 * @method $this withInstanceNetworkType($value)
 */
class DescribeDBInstancesForClone extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeDBInstanceSSL extends Rpc
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
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class DescribeDBInstanceTDE extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getNodeType()
 * @method $this withNodeType($value)
 * @method string getEngineVersion()
 * @method $this withEngineVersion($value)
 * @method string getStorageType()
 * @method $this withStorageType($value)
 * @method string getMinorVersionTag()
 * @method $this withMinorVersionTag($value)
 * @method string getEngine()
 * @method $this withEngine($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getDedicatedHostGroupId()
 * @method $this withDedicatedHostGroupId($value)
 */
class DescribeDBMiniEngineVersions extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBProxyEngineType()
 * @method $this withDBProxyEngineType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeDBProxy extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBProxyConnectString()
 * @method $this withDBProxyConnectString($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBProxyEngineType()
 * @method $this withDBProxyEngineType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBProxyEndpointId()
 * @method $this withDBProxyEndpointId($value)
 */
class DescribeDBProxyEndpoint extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getMetricsName()
 * @method $this withMetricsName($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getDimension()
 * @method $this withDimension($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getDBProxyEngineType()
 * @method $this withDBProxyEngineType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBProxyInstanceType()
 * @method $this withDBProxyInstanceType($value)
 */
class DescribeDBProxyPerformance extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getImageCategory()
 * @method $this withImageCategory($value)
 * @method string getDedicatedHostGroupId()
 * @method $this withDedicatedHostGroupId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeDedicatedHostGroups extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getHostType()
 * @method $this withHostType($value)
 * @method string getHostStatus()
 * @method $this withHostStatus($value)
 * @method string getAllocationStatus()
 * @method $this withAllocationStatus($value)
 * @method string getDedicatedHostGroupId()
 * @method $this withDedicatedHostGroupId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOrderId()
 * @method $this withOrderId($value)
 * @method string getDedicatedHostId()
 * @method $this withDedicatedHostId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 */
class DescribeDedicatedHosts extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getBackupLocation()
 * @method $this withBackupLocation($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getBackupId()
 * @method $this withBackupId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getBackupStatus()
 * @method $this withBackupStatus($value)
 * @method string getBackupMode()
 * @method $this withBackupMode($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 */
class DescribeDetachedBackups extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeDTCSecurityIpHostsForSQLServer extends Rpc
{
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
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeErrorLogs extends Rpc
{
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
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeEvents extends Rpc
{
}

/**
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getGadInstanceName()
 * @method $this withGadInstanceName($value)
 */
class DescribeGadInstances extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class DescribeHADiagnoseConfig extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class DescribeHASwitchConfig extends Rpc
{
}

/**
 * @method string getEventId()
 * @method $this withEventId($value)
 * @method string getToStartTime()
 * @method $this withToStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 * @method string getFromStartTime()
 * @method $this withFromStartTime($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getArchiveStatus()
 * @method $this withArchiveStatus($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getEventLevel()
 * @method $this withEventLevel($value)
 * @method string getEventCategory()
 * @method $this withEventCategory($value)
 * @method string getEventType()
 * @method $this withEventType($value)
 * @method string getEventStatus()
 * @method $this withEventStatus($value)
 */
class DescribeHistoryEvents extends Rpc
{
}

/**
 * @method string getToStartTime()
 * @method $this withToStartTime($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getFromStartTime()
 * @method $this withFromStartTime($value)
 * @method string getArchiveStatus()
 * @method $this withArchiveStatus($value)
 */
class DescribeHistoryEventsStat extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getToStartTime()
 * @method $this withToStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 * @method string getToExecTime()
 * @method $this withToExecTime($value)
 * @method string getTaskType()
 * @method $this withTaskType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getFromStartTime()
 * @method $this withFromStartTime($value)
 * @method string getFromExecTime()
 * @method $this withFromExecTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeHistoryTasks extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getToStartTime()
 * @method $this withToStartTime($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 * @method string getToExecTime()
 * @method $this withToExecTime($value)
 * @method string getTaskType()
 * @method $this withTaskType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getFromStartTime()
 * @method $this withFromStartTime($value)
 * @method string getFromExecTime()
 * @method $this withFromExecTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeHistoryTasksStat extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDedicatedHostGroupName()
 * @method $this withDedicatedHostGroupName($value)
 */
class DescribeHostGroupElasticStrategyParameters extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getHostName()
 * @method $this withHostName($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAccountPassword()
 * @method $this withAccountPassword($value)
 */
class DescribeHostWebShell extends Rpc
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
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getProxyId()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeInstanceAutoRenewalAttribute extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

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
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class DescribeInstanceCrossBackupPolicy extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getKey()
 * @method $this withKey($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeInstanceKeywords extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getInsName()
 * @method $this withInsName($value)
 */
class DescribeInstanceLinkedWhitelistTemplate extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getKmsResourceRegionId()
 * @method $this withKmsResourceRegionId($value)
 * @method string getKmsResourceUser()
 * @method $this withKmsResourceUser($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getKmsResourceId()
 * @method $this withKmsResourceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getKmsResourceType()
 * @method $this withKmsResourceType($value)
 */
class DescribeKmsAssociateResources extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 */
class DescribeLocalAvailableRecoveryTime extends Rpc
{
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
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLogBackupFiles extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getAliUid()
 * @method $this withAliUid($value)
 * @method string getUpgradeCode()
 * @method $this withUpgradeCode($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getBid()
 * @method $this withBid($value)
 */
class DescribeMarketingActivity extends Rpc
{
}

/**
 * @method string getDBInstanceName()
 * @method $this withDBInstanceName($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getRuleName()
 * @method $this withRuleName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBName()
 * @method $this withDBName($value)
 */
class DescribeMaskingRules extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getPattern()
 * @method $this withPattern($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getPageIndex()
 * @method $this withPageIndex($value)
 * @method string getRestoreTime()
 * @method $this withRestoreTime($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getBackupSetID()
 * @method $this withBackupSetID($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getGetDbName()
 * @method $this withGetDbName($value)
 * @method string getRestoreType()
 * @method $this withRestoreType($value)
 */
class DescribeMetaList extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getMigrateTaskId()
 * @method $this withMigrateTaskId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeMigrateTaskById extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeMigrateTasks extends Rpc
{
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
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeModifyParameterLog extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeModifyPGHbaConfigLog extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getMigrateTaskId()
 * @method $this withMigrateTaskId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeOssDownloads extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getParameterGroupId()
 * @method $this withParameterGroupId($value)
 */
class DescribeParameterGroup extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getEnableDetail()
 * @method $this withEnableDetail($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeParameterGroups extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeParameters extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getEngineVersion()
 * @method $this withEngineVersion($value)
 * @method string getEngine()
 * @method $this withEngine($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getCategory()
 * @method $this withCategory($value)
 */
class DescribeParameterTemplates extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribePGHbaConfig extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBName()
 * @method $this withDBName($value)
 */
class DescribePostgresExtensions extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBInstanceStorage()
 * @method $this withDBInstanceStorage($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getEngineVersion()
 * @method $this withEngineVersion($value)
 * @method string getEngine()
 * @method $this withEngine($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getDBInstanceStorageType()
 * @method $this withDBInstanceStorageType($value)
 * @method string getQuantity()
 * @method $this withQuantity($value)
 * @method string getServerlessConfig()
 * @method $this withServerlessConfig($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getCommodityCode()
 * @method $this withCommodityCode($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getUsedTime()
 * @method $this withUsedTime($value)
 * @method string getDBInstanceClass()
 * @method $this withDBInstanceClass($value)
 * @method string getInstanceUsedType()
 * @method $this withInstanceUsedType($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getTimeType()
 * @method $this withTimeType($value)
 * @method string getPayType()
 * @method $this withPayType($value)
 * @method string getDBNode()
 * @method $this withDBNode($value)
 * @method string getOrderType()
 * @method $this withOrderType($value)
 */
class DescribePrice extends Rpc
{
}

/**
 * @method string getCommodity()
 * @method $this withCommodity($value)
 * @method string getEngine()
 * @method $this withEngine($value)
 */
class DescribeQuickSaleConfig extends Rpc
{
}

/**
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
 * @method string getDedicatedHostId()
 * @method $this withDedicatedHostId($value)
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
class DescribeRCAvailableResource extends Rpc
{
}

/**
 * @method string getOSType()
 * @method $this withOSType($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getInstanceIds()
 * @method $this withInstanceIds($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class DescribeRCCloudAssistantStatus extends Rpc
{
}

/**
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getTemporaryDurationMinutes()
 * @method $this withTemporaryDurationMinutes($value)
 */
class DescribeRCClusterConfig extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class DescribeRCClusterNodes extends Rpc
{
}

/**
 * @method string getProfile()
 * @method $this withProfile($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 */
class DescribeRCClusters extends Rpc
{
}

/**
 * @method string getDeploymentSetIds()
 * @method $this withDeploymentSetIds($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getTag()
 * @method $this withTag($value)
 * @method string getDeploymentSetName()
 * @method $this withDeploymentSetName($value)
 * @method string getStrategy()
 * @method $this withStrategy($value)
 */
class DescribeRCDeploymentSets extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDiskIds()
 * @method $this withDiskIds($value)
 * @method array getTag()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DescribeRCDisks extends Rpc
{

    /** @var string */
    public $method = 'GET';

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
 * @method string getImageId()
 * @method $this withImageId($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getImageName()
 * @method $this withImageName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getArchitecture()
 * @method $this withArchitecture($value)
 */
class DescribeRCImageList extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getPrivateIpAddress()
 * @method $this withPrivateIpAddress($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getMaxDisksResults()
 * @method $this withMaxDisksResults($value)
 */
class DescribeRCInstanceAttribute extends Rpc
{
}

/**
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getDdosRegionId()
 * @method $this withDdosRegionId($value)
 */
class DescribeRCInstanceDdosCount extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method array getEventId()
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
 * @method string getNotBeforeStart()
 * @method string getEventPublishTimeStart()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getNotBeforeEnd()
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getEventType()
 * @method $this withEventType($value)
 */
class DescribeRCInstanceHistoryEvents extends Rpc
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
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getDdosRegionId()
 * @method $this withDdosRegionId($value)
 * @method string getDdosStatus()
 * @method $this withDdosStatus($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getInstanceName()
 * @method $this withInstanceName($value)
 * @method string getInstanceIp()
 * @method $this withInstanceIp($value)
 */
class DescribeRCInstanceIpAddress extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getHostIp()
 * @method $this withHostIp($value)
 * @method string getPublicIp()
 * @method $this withPublicIp($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getTag()
 * @method $this withTag($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getInstanceIds()
 * @method $this withInstanceIds($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeRCInstances extends Rpc
{
}

class DescribeRCInstanceTypeFamilies extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getInstanceTypeFamily()
 * @method $this withInstanceTypeFamily($value)
 * @method string getCommodityCode()
 * @method $this withCommodityCode($value)
 * @method string getEngine()
 * @method $this withEngine($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 */
class DescribeRCInstanceTypes extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getDbType()
 * @method $this withDbType($value)
 */
class DescribeRCInstanceVncUrl extends Rpc
{
}

/**
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
 * @method string getTag()
 * @method $this withTag($value)
 * @method string getInvokeId()
 * @method $this withInvokeId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getInvokeRecordStatus()
 * @method $this withInvokeRecordStatus($value)
 * @method string getIncludeHistory()
 * @method $this withIncludeHistory($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class DescribeRCInvocationResults extends Rpc
{
}

/**
 * @method string getExpress()
 * @method $this withExpress($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getMetricName()
 * @method $this withMetricName($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getLength()
 * @method $this withLength($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getDimensions()
 * @method $this withDimensions($value)
 */
class DescribeRCMetricList extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getNodePoolId()
 * @method $this withNodePoolId($value)
 */
class DescribeRCNodePool extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getMemory()
 * @method $this withMemory($value)
 * @method string getCores()
 * @method $this withCores($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getOperationType()
 * @method $this withOperationType($value)
 * @method string getDestinationResource()
 * @method $this withDestinationResource($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getConditionss()
 * @method $this withConditionss($value)
 */
class DescribeRCResourcesModification extends Rpc
{
}

/**
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 */
class DescribeRCSecurityGroupList extends Rpc
{
}

/**
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 */
class DescribeRCSecurityGroupPermission extends Rpc
{
}

/**
 * @method string getSnapshotIds()
 * @method $this withSnapshotIds($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDiskId()
 * @method $this withDiskId($value)
 * @method array getTag()
 */
class DescribeRCSnapshots extends Rpc
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
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DescribeRCVCluster extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getResourceNiche()
 * @method $this withResourceNiche($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeRdsResourceSettings extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getReadInstanceId()
 * @method $this withReadInstanceId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeReadDBInstanceDelay extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeRegionInfos extends Rpc
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
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class DescribeRegions extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getBusinessInfo()
 * @method $this withBusinessInfo($value)
 * @method string getQuantity()
 * @method $this withQuantity($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getCommodityCode()
 * @method $this withCommodityCode($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getUsedTime()
 * @method $this withUsedTime($value)
 * @method string getDBInstanceClass()
 * @method $this withDBInstanceClass($value)
 * @method string getPromotionCode()
 * @method $this withPromotionCode($value)
 * @method string getTimeType()
 * @method $this withTimeType($value)
 * @method string getPayType()
 * @method $this withPayType($value)
 * @method string getOrderType()
 * @method $this withOrderType($value)
 */
class DescribeRenewalPrice extends Rpc
{
}

/**
 * @method string getTaskName()
 * @method $this withTaskName($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 * @method string getTaskType()
 * @method $this withTaskType($value)
 */
class DescribeReplicationLinkLogs extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeResourceDetails extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeResourceUsage extends Rpc
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
 * @method string getEngine()
 * @method $this withEngine($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDbInstanceId()
 * @method $this withDbInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class DescribeSecrets extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class DescribeSecurityGroupConfiguration extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeSlots extends Rpc
{
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
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getNodeId()
 * @method $this withNodeId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBName()
 * @method $this withDBName($value)
 * @method string getSQLHASH()
 * @method $this withSQLHASH($value)
 */
class DescribeSlowLogRecords extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getSortKey()
 * @method $this withSortKey($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBName()
 * @method $this withDBName($value)
 */
class DescribeSlowLogs extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeSQLCollectorPolicy extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeSQLCollectorRetention extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getFileName()
 * @method $this withFileName($value)
 */
class DescribeSQLLogFiles extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getQueryKeywords()
 * @method $this withQueryKeywords($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getDatabase()
 * @method $this withDatabase($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getSQLId()
 * @method $this withSQLId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getForm()
 * @method $this withForm($value)
 * @method string getUser()
 * @method $this withUser($value)
 */
class DescribeSQLLogRecords extends Rpc
{
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
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeSQLLogReportList extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeSupportOnlineResizeDisk extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getProxyId()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getTags()
 * @method $this withTags($value)
 */
class DescribeTags extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

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
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
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
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeTasks extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTargetMajorVersion()
 * @method $this withTargetMajorVersion($value)
 */
class DescribeUpgradeMajorVersionPrecheckTask extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTargetMajorVersion()
 * @method $this withTargetMajorVersion($value)
 */
class DescribeUpgradeMajorVersionTasks extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDedicatedHostGroupId()
 * @method $this withDedicatedHostGroupId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 */
class DescribeVSwitches extends Rpc
{
}

/**
 * @method array getVSwitchIds()
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 */
class DescribeVSwitchList extends Rpc
{

    /**
     * @param array $vSwitchIds
     *
     * @return $this
     */
	public function withVSwitchIds(array $vSwitchIds)
	{
	    $this->data['VSwitchIds'] = $vSwitchIds;
		foreach ($vSwitchIds as $i => $iValue) {
			$this->options['query']['VSwitchIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 */
class DescribeWhitelistTemplate extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getTemplateId()
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 */
class DescribeWhitelistTemplateLinkedInstance extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTemplateId($value)
    {
        $this->data['TemplateId'] = $value;
        $this->options['form_params']['TemplateId'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DestroyDBInstance extends Rpc
{
}

/**
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getMemberInstanceName()
 * @method $this withMemberInstanceName($value)
 * @method string getGadInstanceName()
 * @method $this withGadInstanceName($value)
 */
class DetachGadInstanceMember extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getDiskId()
 * @method $this withDiskId($value)
 * @method string getDeleteWithInstance()
 * @method $this withDeleteWithInstance($value)
 */
class DetachRCDisk extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getInsName()
 * @method $this withInsName($value)
 */
class DetachWhitelistTemplateToInstance extends Rpc
{
}

/**
 * @method string getDBInstanceName()
 * @method $this withDBInstanceName($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getStorage()
 * @method $this withStorage($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class EvaluateLocalExtendDisk extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class GetDBInstanceTopology extends Rpc
{
}

/**
 * @method string getDBProxyEngineType()
 * @method $this withDBProxyEngineType($value)
 * @method string getDbInstanceId()
 * @method $this withDbInstanceId($value)
 */
class GetDbProxyInstanceSsl extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAccountPrivilege()
 * @method $this withAccountPrivilege($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBName()
 * @method $this withDBName($value)
 */
class GrantAccountPrivilege extends Rpc
{
}

/**
 * @method string getPrivileges()
 * @method $this withPrivileges($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getExpiredTime()
 * @method $this withExpiredTime($value)
 */
class GrantOperatorPermission extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSourceInfo()
 * @method $this withSourceInfo($value)
 * @method string getEngineVersion()
 * @method $this withEngineVersion($value)
 * @method string getMode()
 * @method $this withMode($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getRetention()
 * @method $this withRetention($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getBackupFile()
 * @method $this withBackupFile($value)
 * @method string getBucketRegion()
 * @method $this withBucketRegion($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getMasterInfo()
 * @method $this withMasterInfo($value)
 * @method string getBuildReplication()
 * @method $this withBuildReplication($value)
 * @method string getRestoreSize()
 * @method $this withRestoreSize($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getComment()
 * @method $this withComment($value)
 */
class ImportUserBackupFile extends Rpc
{
}

/**
 * @method string getInstanceIds()
 * @method $this withInstanceIds($value)
 */
class InstallRCCloudAssistant extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getEngine()
 * @method $this withEngine($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getCommodityCode()
 * @method $this withCommodityCode($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getOrderType()
 * @method $this withOrderType($value)
 */
class ListClasses extends Rpc
{
}

class ListRCVClusters extends Rpc
{
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
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
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
 * @method string getTag4value()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTag2key()
 * @method string getTag3key()
 * @method string getTag1value()
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getEngine()
 * @method $this withEngine($value)
 * @method string getTag3value()
 * @method string getTag5key()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getBackupId()
 * @method $this withBackupId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTag5value()
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getTag1key()
 * @method string getOpsServiceVersion()
 * @method $this withOpsServiceVersion($value)
 * @method string getOssUrl()
 * @method $this withOssUrl($value)
 * @method string getTag2value()
 * @method string getTag4key()
 * @method string getComment()
 * @method $this withComment($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ListUserBackupFiles extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag4value($value)
    {
        $this->data['Tag4value'] = $value;
        $this->options['query']['Tag.4.value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag2key($value)
    {
        $this->data['Tag2key'] = $value;
        $this->options['query']['Tag.2.key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag3key($value)
    {
        $this->data['Tag3key'] = $value;
        $this->options['query']['Tag.3.key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag1value($value)
    {
        $this->data['Tag1value'] = $value;
        $this->options['query']['Tag.1.value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag3value($value)
    {
        $this->data['Tag3value'] = $value;
        $this->options['query']['Tag.3.value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag5key($value)
    {
        $this->data['Tag5key'] = $value;
        $this->options['query']['Tag.5.key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag5value($value)
    {
        $this->data['Tag5value'] = $value;
        $this->options['query']['Tag.5.value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag1key($value)
    {
        $this->data['Tag1key'] = $value;
        $this->options['query']['Tag.1.key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag2value($value)
    {
        $this->data['Tag2value'] = $value;
        $this->options['query']['Tag.2.value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag4key($value)
    {
        $this->data['Tag4key'] = $value;
        $this->options['query']['Tag.4.key'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class LockAccount extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getConnectionString()
 * @method $this withConnectionString($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 */
class MigrateConnectionToOtherZone extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSpecifiedTime()
 * @method $this withSpecifiedTime($value)
 * @method string getTargetDedicatedHostIdForSlave()
 * @method $this withTargetDedicatedHostIdForSlave($value)
 * @method string getZoneIdSlave1()
 * @method $this withZoneIdSlave1($value)
 * @method string getZoneIdSlave2()
 * @method $this withZoneIdSlave2($value)
 * @method string getEngineVersion()
 * @method $this withEngineVersion($value)
 * @method string getStorage()
 * @method $this withStorage($value)
 * @method string getZoneIdForFollower()
 * @method $this withZoneIdForFollower($value)
 * @method string getEffectiveTime()
 * @method $this withEffectiveTime($value)
 * @method string getDBInstanceTransType()
 * @method $this withDBInstanceTransType($value)
 * @method string getTargetDedicatedHostIdForMaster()
 * @method $this withTargetDedicatedHostIdForMaster($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getDedicatedHostGroupId()
 * @method $this withDedicatedHostGroupId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getZoneIdForLog()
 * @method $this withZoneIdForLog($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTargetDBInstanceClass()
 * @method $this withTargetDBInstanceClass($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getTargetDedicatedHostIdForLog()
 * @method $this withTargetDedicatedHostIdForLog($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 */
class MigrateDBInstance extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getEffectiveTime()
 * @method $this withEffectiveTime($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getSwitchTime()
 * @method $this withSwitchTime($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getDBNode()
 * @method $this withDBNode($value)
 */
class MigrateDBNodes extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class MigrateSecurityIPMode extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBInstanceStorage()
 * @method $this withDBInstanceStorage($value)
 * @method string getIsModifySpec()
 * @method $this withIsModifySpec($value)
 * @method string getZoneIdSlave1()
 * @method $this withZoneIdSlave1($value)
 * @method string getZoneIdSlave2()
 * @method $this withZoneIdSlave2($value)
 * @method string getIoAccelerationEnabled()
 * @method $this withIoAccelerationEnabled($value)
 * @method string getEffectiveTime()
 * @method $this withEffectiveTime($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getSwitchTime()
 * @method $this withSwitchTime($value)
 * @method string getDBInstanceStorageType()
 * @method $this withDBInstanceStorageType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBInstanceClass()
 * @method $this withDBInstanceClass($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getVPCId()
 * @method $this withVPCId($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getCategory()
 * @method $this withCategory($value)
 */
class MigrateToOtherZone extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getCheckPolicy()
 * @method $this withCheckPolicy($value)
 */
class ModifyAccountCheckPolicy extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAccountDescription()
 * @method $this withAccountDescription($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyAccountDescription extends Rpc
{
}

/**
 * @method string getDBInstanceName()
 * @method $this withDBInstanceName($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPrivilege()
 * @method $this withPrivilege($value)
 * @method string getExpireTime()
 * @method $this withExpireTime($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBName()
 * @method $this withDBName($value)
 * @method string getUserName()
 * @method $this withUserName($value)
 */
class ModifyAccountMaskingPrivilege extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getGroupPolicy()
 * @method $this withGroupPolicy($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyAccountSecurityPolicy extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getEnableEventLog()
 * @method $this withEnableEventLog($value)
 */
class ModifyActionEventPolicy extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getSwitchTime()
 * @method $this withSwitchTime($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getIds()
 * @method $this withIds($value)
 * @method string getImmediateStart()
 * @method $this withImmediateStart($value)
 */
class ModifyActiveOperationTasks extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getADAccountName()
 * @method $this withADAccountName($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getADDNS()
 * @method $this withADDNS($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getADPassword()
 * @method $this withADPassword($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getADServerIpAddress()
 * @method $this withADServerIpAddress($value)
 */
class ModifyADInfo extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getBackupPriority()
 * @method $this withBackupPriority($value)
 * @method string getBackupLog()
 * @method $this withBackupLog($value)
 * @method string getHighSpaceUsageProtection()
 * @method $this withHighSpaceUsageProtection($value)
 * @method string getEnableIncrementDataBackup()
 * @method $this withEnableIncrementDataBackup($value)
 * @method string getLocalLogRetentionSpace()
 * @method $this withLocalLogRetentionSpace($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getArchiveBackupKeepPolicy()
 * @method $this withArchiveBackupKeepPolicy($value)
 * @method string getBackupRetentionPeriod()
 * @method $this withBackupRetentionPeriod($value)
 * @method string getBackupMethod()
 * @method $this withBackupMethod($value)
 * @method string getDuplicationLocation()
 * @method $this withDuplicationLocation($value)
 * @method string getLocalLogRetentionHours()
 * @method $this withLocalLogRetentionHours($value)
 * @method string getLogBackupFrequency()
 * @method $this withLogBackupFrequency($value)
 * @method string getArchiveBackupKeepCount()
 * @method $this withArchiveBackupKeepCount($value)
 * @method string getBackupInterval()
 * @method $this withBackupInterval($value)
 * @method string getDuplicationContent()
 * @method $this withDuplicationContent($value)
 * @method string getLogBackupLocalRetentionNumber()
 * @method $this withLogBackupLocalRetentionNumber($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getEnableBackupLog()
 * @method $this withEnableBackupLog($value)
 * @method string getBackupPolicyMode()
 * @method $this withBackupPolicyMode($value)
 * @method string getPreferredBackupPeriod()
 * @method $this withPreferredBackupPeriod($value)
 * @method string getReleasedKeepPolicy()
 * @method $this withReleasedKeepPolicy($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getCompressType()
 * @method $this withCompressType($value)
 * @method string getDuplication()
 * @method $this withDuplication($value)
 * @method string getPreferredBackupTime()
 * @method $this withPreferredBackupTime($value)
 * @method string getArchiveBackupRetentionPeriod()
 * @method $this withArchiveBackupRetentionPeriod($value)
 * @method string getCategory()
 * @method $this withCategory($value)
 * @method string getLogBackupRetentionPeriod()
 * @method $this withLogBackupRetentionPeriod($value)
 */
class ModifyBackupPolicy extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getExpectExpireTime()
 * @method $this withExpectExpireTime($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getBackupId()
 * @method $this withBackupId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyBackupSetExpireTime extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTimezone()
 * @method $this withTimezone($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getCollation()
 * @method $this withCollation($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyCollationTimeZone extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getCpuShrinkThreshold()
 * @method $this withCpuShrinkThreshold($value)
 * @method string getBurstStatus()
 * @method $this withBurstStatus($value)
 * @method string getPeriodScaleMemory()
 * @method $this withPeriodScaleMemory($value)
 * @method string getSwitchTimeMode()
 * @method $this withSwitchTimeMode($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getPeriodScaleCpus()
 * @method $this withPeriodScaleCpus($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getSwitchTime()
 * @method $this withSwitchTime($value)
 * @method string getScaleType()
 * @method $this withScaleType($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 * @method string getMemoryEnlargeThreshold()
 * @method $this withMemoryEnlargeThreshold($value)
 * @method string getCrontabJobId()
 * @method $this withCrontabJobId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getScaleMaxMemory()
 * @method $this withScaleMaxMemory($value)
 * @method string getMemoryShrinkThreshold()
 * @method $this withMemoryShrinkThreshold($value)
 * @method string getScaleMaxCpus()
 * @method $this withScaleMaxCpus($value)
 * @method string getCpuEnlargeThreshold()
 * @method $this withCpuEnlargeThreshold($value)
 */
class ModifyComputeBurstConfig extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getIncreaseRatio()
 * @method $this withIncreaseRatio($value)
 * @method string getRestoreOriginalSpecification()
 * @method $this withRestoreOriginalSpecification($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getAdjustDeadline()
 * @method $this withAdjustDeadline($value)
 * @method string getTargetValue()
 * @method $this withTargetValue($value)
 */
class ModifyCustinsResource extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getStorageUpperBound()
 * @method $this withStorageUpperBound($value)
 * @method string getStorageThreshold()
 * @method $this withStorageThreshold($value)
 * @method string getStorageAutoScale()
 * @method $this withStorageAutoScale($value)
 */
class ModifyDasInstanceConfig extends Rpc
{
}

/**
 * @method string getDatabasePropertyValue()
 * @method $this withDatabasePropertyValue($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDatabasePropertyName()
 * @method $this withDatabasePropertyName($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBName()
 * @method $this withDBName($value)
 */
class ModifyDatabaseConfig extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getDBDescription()
 * @method $this withDBDescription($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBName()
 * @method $this withDBName($value)
 */
class ModifyDBDescription extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getAutoUpgradeMinorVersion()
 * @method $this withAutoUpgradeMinorVersion($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyDBInstanceAutoUpgradeMinorVersion extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getSwitchTimeMode()
 * @method $this withSwitchTimeMode($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getConfigName()
 * @method $this withConfigName($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getSwitchTime()
 * @method $this withSwitchTime($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getConfigValue()
 * @method $this withConfigValue($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyDBInstanceConfig extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getConnectionStringPrefix()
 * @method $this withConnectionStringPrefix($value)
 * @method string getPGBouncerPort()
 * @method $this withPGBouncerPort($value)
 * @method string getGeneralGroupName()
 * @method $this withGeneralGroupName($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getRetainVip()
 * @method $this withRetainVip($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getBabelfishPort()
 * @method $this withBabelfishPort($value)
 * @method string getCurrentConnectionString()
 * @method $this withCurrentConnectionString($value)
 * @method string getPort()
 * @method $this withPort($value)
 * @method string getTargetDBInstanceId()
 * @method $this withTargetDBInstanceId($value)
 */
class ModifyDBInstanceConnectionString extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getReadSQLReplicationTime()
 * @method $this withReadSQLReplicationTime($value)
 */
class ModifyDBInstanceDelayedReplicationTime extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDeletionProtection()
 * @method $this withDeletionProtection($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyDBInstanceDeletionProtection extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getDBInstanceDescription()
 * @method $this withDBInstanceDescription($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyDBInstanceDescription extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getDBInstanceEndpointDescription()
 * @method $this withDBInstanceEndpointDescription($value)
 * @method string getNodeItems()
 * @method $this withNodeItems($value)
 * @method string getDBInstanceEndpointId()
 * @method $this withDBInstanceEndpointId($value)
 */
class ModifyDBInstanceEndpoint extends Rpc
{
}

/**
 * @method string getConnectionStringPrefix()
 * @method $this withConnectionStringPrefix($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getConnectionString()
 * @method $this withConnectionString($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getPrivateIpAddress()
 * @method $this withPrivateIpAddress($value)
 * @method string getDBInstanceEndpointId()
 * @method $this withDBInstanceEndpointId($value)
 * @method string getPort()
 * @method $this withPort($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 */
class ModifyDBInstanceEndpointAddress extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDbInstanceId()
 * @method $this withDbInstanceId($value)
 * @method string getHAMode()
 * @method $this withHAMode($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getSyncMode()
 * @method $this withSyncMode($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyDBInstanceHAConfig extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getMaintainTime()
 * @method $this withMaintainTime($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyDBInstanceMaintainTime extends Rpc
{
}

/**
 * @method string getDBInstanceName()
 * @method $this withDBInstanceName($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getMetricsConfig()
 * @method $this withMetricsConfig($value)
 * @method string getScope()
 * @method $this withScope($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyDBInstanceMetrics extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyDBInstanceMonitor extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getConnectionString()
 * @method $this withConnectionString($value)
 * @method string getClassicExpiredDays()
 * @method $this withClassicExpiredDays($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyDBInstanceNetworkExpireTime extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClassicExpiredDays()
 * @method $this withClassicExpiredDays($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getReadWriteSplittingPrivateIpAddress()
 * @method $this withReadWriteSplittingPrivateIpAddress($value)
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
 * @method string getRetainClassic()
 * @method $this withRetainClassic($value)
 * @method string getVPCId()
 * @method $this withVPCId($value)
 * @method string getInstanceNetworkType()
 * @method $this withInstanceNetworkType($value)
 * @method string getReadWriteSplittingClassicExpiredDays()
 * @method $this withReadWriteSplittingClassicExpiredDays($value)
 */
class ModifyDBInstanceNetworkType extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getBusinessInfo()
 * @method $this withBusinessInfo($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getAgentId()
 * @method $this withAgentId($value)
 * @method string getAutoPay()
 * @method $this withAutoPay($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getResource()
 * @method $this withResource($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getUsedTime()
 * @method $this withUsedTime($value)
 * @method string getPayType()
 * @method $this withPayType($value)
 */
class ModifyDBInstancePayType extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getExternalReplication()
 * @method $this withExternalReplication($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class ModifyDBInstanceReplicationSwitch extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getPortRange()
 * @method $this withPortRange($value)
 * @method string getIpProtocol()
 * @method $this withIpProtocol($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getSourceCidrIp()
 * @method $this withSourceCidrIp($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSecurityGroupRuleId()
 * @method $this withSecurityGroupRuleId($value)
 */
class ModifyDBInstanceSecurityGroupRule extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBInstanceStorage()
 * @method $this withDBInstanceStorage($value)
 * @method string getOptimizedWrites()
 * @method $this withOptimizedWrites($value)
 * @method string getEngineVersion()
 * @method $this withEngineVersion($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getServerlessConfiguration()
 * @method $this withServerlessConfiguration($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBInstanceClass()
 * @method $this withDBInstanceClass($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getPromotionCode()
 * @method $this withPromotionCode($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getZoneIdSlave1()
 * @method $this withZoneIdSlave1($value)
 * @method string getAutoUseCoupon()
 * @method $this withAutoUseCoupon($value)
 * @method string getIoAccelerationEnabled()
 * @method $this withIoAccelerationEnabled($value)
 * @method string getColdDataEnabled()
 * @method $this withColdDataEnabled($value)
 * @method string getEffectiveTime()
 * @method $this withEffectiveTime($value)
 * @method string getDBInstanceTransType()
 * @method $this withDBInstanceTransType($value)
 * @method string getReadOnlyDBInstanceClass()
 * @method $this withReadOnlyDBInstanceClass($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getSwitchTime()
 * @method $this withSwitchTime($value)
 * @method string getDBInstanceStorageType()
 * @method $this withDBInstanceStorageType($value)
 * @method string getSourceBiz()
 * @method $this withSourceBiz($value)
 * @method string getDedicatedHostGroupId()
 * @method $this withDedicatedHostGroupId($value)
 * @method string getDirection()
 * @method $this withDirection($value)
 * @method string getCompressionMode()
 * @method $this withCompressionMode($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getUsedTime()
 * @method $this withUsedTime($value)
 * @method string getBurstingEnabled()
 * @method $this withBurstingEnabled($value)
 * @method string getTargetMinorVersion()
 * @method $this withTargetMinorVersion($value)
 * @method string getAllowMajorVersionUpgrade()
 * @method $this withAllowMajorVersionUpgrade($value)
 * @method string getCategory()
 * @method $this withCategory($value)
 * @method string getPayType()
 * @method $this withPayType($value)
 */
class ModifyDBInstanceSpec extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getConnectionString()
 * @method $this withConnectionString($value)
 * @method string getServerKey()
 * @method $this withServerKey($value)
 * @method string getClientCrlEnabled()
 * @method $this withClientCrlEnabled($value)
 * @method string getCertificate()
 * @method $this withCertificate($value)
 * @method string getACL()
 * @method $this withACL($value)
 * @method string getPassWord()
 * @method $this withPassWord($value)
 * @method string getClientCertRevocationList()
 * @method $this withClientCertRevocationList($value)
 * @method string getServerCert()
 * @method $this withServerCert($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getForceEncryption()
 * @method $this withForceEncryption($value)
 * @method string getClientCAEnabled()
 * @method $this withClientCAEnabled($value)
 * @method string getClientCACert()
 * @method $this withClientCACert($value)
 * @method string getReplicationACL()
 * @method $this withReplicationACL($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getCAType()
 * @method $this withCAType($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSSLEnabled()
 * @method $this withSSLEnabled($value)
 * @method string getTlsVersion()
 * @method $this withTlsVersion($value)
 */
class ModifyDBInstanceSSL extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCertificate()
 * @method $this withCertificate($value)
 * @method string getPrivateKey()
 * @method $this withPrivateKey($value)
 * @method string getPassWord()
 * @method $this withPassWord($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getIsRotate()
 * @method $this withIsRotate($value)
 * @method string getEncryptionKey()
 * @method $this withEncryptionKey($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBName()
 * @method $this withDBName($value)
 * @method string getRoleArn()
 * @method $this withRoleArn($value)
 * @method string getTDEStatus()
 * @method $this withTDEStatus($value)
 */
class ModifyDBInstanceTDE extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBInstanceStorage()
 * @method $this withDBInstanceStorage($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getEffectiveTime()
 * @method $this withEffectiveTime($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getDBInstanceStorageType()
 * @method $this withDBInstanceStorageType($value)
 * @method string getProduceAsync()
 * @method $this withProduceAsync($value)
 * @method string getAutoPay()
 * @method $this withAutoPay($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBNode()
 * @method $this withDBNode($value)
 */
class ModifyDBNode extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getDBProxyNodes()
 * @method $this withDBProxyNodes($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getPersistentConnectionStatus()
 * @method $this withPersistentConnectionStatus($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBProxyEngineType()
 * @method $this withDBProxyEngineType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBProxyInstanceNum()
 * @method $this withDBProxyInstanceNum($value)
 * @method string getConfigDBProxyService()
 * @method $this withConfigDBProxyService($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getAccountPassword()
 * @method $this withAccountPassword($value)
 * @method string getDBProxyInstanceType()
 * @method $this withDBProxyInstanceType($value)
 * @method string getVPCId()
 * @method $this withVPCId($value)
 * @method string getInstanceNetworkType()
 * @method $this withInstanceNetworkType($value)
 */
class ModifyDBProxy extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getConfigDBProxyFeatures()
 * @method $this withConfigDBProxyFeatures($value)
 * @method string getEffectiveTime()
 * @method $this withEffectiveTime($value)
 * @method string getEffectiveSpecificTime()
 * @method $this withEffectiveSpecificTime($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getReadOnlyInstanceWeight()
 * @method $this withReadOnlyInstanceWeight($value)
 * @method string getReadOnlyInstanceMaxDelayTime()
 * @method $this withReadOnlyInstanceMaxDelayTime($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDbEndpointMinSlaveCount()
 * @method $this withDbEndpointMinSlaveCount($value)
 * @method string getDbEndpointAliases()
 * @method $this withDbEndpointAliases($value)
 * @method string getDBProxyEngineType()
 * @method $this withDBProxyEngineType($value)
 * @method string getCausalConsistReadTimeout()
 * @method $this withCausalConsistReadTimeout($value)
 * @method string getDbEndpointOperator()
 * @method $this withDbEndpointOperator($value)
 * @method string getDbEndpointType()
 * @method $this withDbEndpointType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDbEndpointReadWriteMode()
 * @method $this withDbEndpointReadWriteMode($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getDBProxyEndpointId()
 * @method $this withDBProxyEndpointId($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getReadOnlyInstanceDistributionType()
 * @method $this withReadOnlyInstanceDistributionType($value)
 */
class ModifyDBProxyEndpoint extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBProxyConnectStringNetType()
 * @method $this withDBProxyConnectStringNetType($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getDBProxyNewConnectStringPort()
 * @method $this withDBProxyNewConnectStringPort($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBProxyEngineType()
 * @method $this withDBProxyEngineType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBProxyEndpointId()
 * @method $this withDBProxyEndpointId($value)
 * @method string getDBProxyNewConnectString()
 * @method $this withDBProxyNewConnectString($value)
 */
class ModifyDBProxyEndpointAddress extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getVSwitchIds()
 * @method $this withVSwitchIds($value)
 * @method string getMigrateAZ()
 * @method $this withMigrateAZ($value)
 * @method string getEffectiveTime()
 * @method $this withEffectiveTime($value)
 * @method string getEffectiveSpecificTime()
 * @method $this withEffectiveSpecificTime($value)
 * @method string getDBProxyNodes()
 * @method $this withDBProxyNodes($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBProxyEngineType()
 * @method $this withDBProxyEngineType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBProxyInstanceNum()
 * @method $this withDBProxyInstanceNum($value)
 * @method string getDBProxyInstanceType()
 * @method $this withDBProxyInstanceType($value)
 */
class ModifyDBProxyInstance extends Rpc
{
}

/**
 * @method string getDbProxySslEnabled()
 * @method $this withDbProxySslEnabled($value)
 * @method string getDbProxyConnectString()
 * @method $this withDbProxyConnectString($value)
 * @method string getDbInstanceId()
 * @method $this withDbInstanceId($value)
 * @method string getDBProxyEngineType()
 * @method $this withDBProxyEngineType($value)
 * @method string getDbProxyEndpointId()
 * @method $this withDbProxyEndpointId($value)
 */
class ModifyDbProxyInstanceSsl extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getWhiteListGroupName()
 * @method $this withWhiteListGroupName($value)
 * @method string getSecurityIpHosts()
 * @method $this withSecurityIpHosts($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyDTCSecurityIpHostsForSQLServer extends Rpc
{
}

/**
 * @method string getEventId()
 * @method $this withEventId($value)
 * @method string getEventAction()
 * @method $this withEventAction($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getActionParams()
 * @method $this withActionParams($value)
 */
class ModifyEventInfo extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getTcpConnectionType()
 * @method $this withTcpConnectionType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyHADiagnoseConfig extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getHAConfig()
 * @method $this withHAConfig($value)
 * @method string getManualHATime()
 * @method $this withManualHATime($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyHASwitchConfig extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDuration()
 * @method $this withDuration($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAutoRenew()
 * @method $this withAutoRenew($value)
 */
class ModifyInstanceAutoRenewalAttribute extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getRetentType()
 * @method $this withRetentType($value)
 * @method string getBackupEnabled()
 * @method $this withBackupEnabled($value)
 * @method string getRelService()
 * @method $this withRelService($value)
 * @method string getStorageType()
 * @method $this withStorageType($value)
 * @method string getEndpoint()
 * @method $this withEndpoint($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getRetention()
 * @method $this withRetention($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getCrossBackupType()
 * @method $this withCrossBackupType($value)
 * @method string getLogBackupEnabled()
 * @method $this withLogBackupEnabled($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getCrossBackupRegion()
 * @method $this withCrossBackupRegion($value)
 * @method string getStorageOwner()
 * @method $this withStorageOwner($value)
 */
class ModifyInstanceCrossBackupPolicy extends Rpc
{
}

/**
 * @method string getDBInstanceName()
 * @method $this withDBInstanceName($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getMaskingAlgo()
 * @method $this withMaskingAlgo($value)
 * @method string getRuleName()
 * @method $this withRuleName($value)
 * @method string getEnabled()
 * @method $this withEnabled($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDefaultAlgo()
 * @method $this withDefaultAlgo($value)
 * @method string getRuleConfig()
 * @method $this withRuleConfig($value)
 * @method string getDBName()
 * @method $this withDBName($value)
 */
class ModifyMaskingRules extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getSwitchTimeMode()
 * @method $this withSwitchTimeMode($value)
 * @method string getParameterGroupId()
 * @method $this withParameterGroupId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getForcerestart()
 * @method $this withForcerestart($value)
 * @method string getSwitchTime()
 * @method $this withSwitchTime($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getParameters()
 * @method $this withParameters($value)
 */
class ModifyParameter extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getParameterGroupId()
 * @method $this withParameterGroupId($value)
 * @method string getModifyMode()
 * @method $this withModifyMode($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getParameterGroupName()
 * @method $this withParameterGroupName($value)
 * @method string getParameters()
 * @method $this withParameters($value)
 * @method string getParameterGroupDesc()
 * @method $this withParameterGroupDesc($value)
 */
class ModifyParameterGroup extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOpsType()
 * @method $this withOpsType($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method array getHbaItem()
 */
class ModifyPGHbaConfig extends Rpc
{

    /**
     * @param array $hbaItem
     *
     * @return $this
     */
	public function withHbaItem(array $hbaItem)
	{
	    $this->data['HbaItem'] = $hbaItem;
		foreach ($hbaItem as $depth1 => $depth1Value) {
			if(isset($depth1Value['Database'])){
				$this->options['query']['HbaItem.' . ($depth1 + 1) . '.Database'] = $depth1Value['Database'];
			}
			if(isset($depth1Value['Address'])){
				$this->options['query']['HbaItem.' . ($depth1 + 1) . '.Address'] = $depth1Value['Address'];
			}
			if(isset($depth1Value['Method'])){
				$this->options['query']['HbaItem.' . ($depth1 + 1) . '.Method'] = $depth1Value['Method'];
			}
			if(isset($depth1Value['Type'])){
				$this->options['query']['HbaItem.' . ($depth1 + 1) . '.Type'] = $depth1Value['Type'];
			}
			if(isset($depth1Value['User'])){
				$this->options['query']['HbaItem.' . ($depth1 + 1) . '.User'] = $depth1Value['User'];
			}
			if(isset($depth1Value['Mask'])){
				$this->options['query']['HbaItem.' . ($depth1 + 1) . '.Mask'] = $depth1Value['Mask'];
			}
			if(isset($depth1Value['Option'])){
				$this->options['query']['HbaItem.' . ($depth1 + 1) . '.Option'] = $depth1Value['Option'];
			}
			if(isset($depth1Value['PriorityId'])){
				$this->options['query']['HbaItem.' . ($depth1 + 1) . '.PriorityId'] = $depth1Value['PriorityId'];
			}
		}

		return $this;
    }
}

/**
 * @method string getAutoPay()
 * @method $this withAutoPay($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getPerformanceLevel()
 * @method $this withPerformanceLevel($value)
 * @method string getDiskCategory()
 * @method $this withDiskCategory($value)
 * @method string getDiskId()
 * @method $this withDiskId($value)
 */
class ModifyRCDiskSpec extends Rpc
{
}

/**
 * @method string getAutoUseCoupon()
 * @method $this withAutoUseCoupon($value)
 * @method string getRebootTime()
 * @method $this withRebootTime($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getDirection()
 * @method $this withDirection($value)
 * @method string getAutoPay()
 * @method $this withAutoPay($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getRebootWhenFinished()
 * @method $this withRebootWhenFinished($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPromotionCode()
 * @method $this withPromotionCode($value)
 */
class ModifyRCInstance extends Rpc
{
}

/**
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getDeletionProtection()
 * @method $this withDeletionProtection($value)
 * @method string getPassword()
 * @method $this withPassword($value)
 * @method string getHostName()
 * @method $this withHostName($value)
 * @method string getReboot()
 * @method $this withReboot($value)
 * @method string getSecurityGroupIds()
 * @method $this withSecurityGroupIds($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getInstanceIds()
 * @method $this withInstanceIds($value)
 */
class ModifyRCInstanceAttribute extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getAutoUseCoupon()
 * @method $this withAutoUseCoupon($value)
 * @method string getInstanceChargeType()
 * @method $this withInstanceChargeType($value)
 * @method string getBusinessInfo()
 * @method $this withBusinessInfo($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getAutoPay()
 * @method $this withAutoPay($value)
 * @method string getIncludeDataDisks()
 * @method $this withIncludeDataDisks($value)
 * @method string getResource()
 * @method $this withResource($value)
 * @method string getUsedTime()
 * @method $this withUsedTime($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getAutoRenew()
 * @method $this withAutoRenew($value)
 * @method string getInstanceIds()
 * @method $this withInstanceIds($value)
 * @method string getPromotionCode()
 * @method $this withPromotionCode($value)
 * @method string getPayType()
 * @method $this withPayType($value)
 */
class ModifyRCInstanceChargeType extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getInstanceDescription()
 * @method $this withInstanceDescription($value)
 */
class ModifyRCInstanceDescription extends Rpc
{
}

/**
 * @method string getReboot()
 * @method $this withReboot($value)
 * @method string getKeyPairName()
 * @method $this withKeyPairName($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class ModifyRCInstanceKeyPair extends Rpc
{
}

/**
 * @method string getInternetMaxBandwidthOut()
 * @method $this withInternetMaxBandwidthOut($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getNetworkChargeType()
 * @method $this withNetworkChargeType($value)
 */
class ModifyRCInstanceNetworkSpec extends Rpc
{
}

/**
 * @method string getSourcePortRange()
 * @method $this withSourcePortRange($value)
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getDirection()
 * @method $this withDirection($value)
 * @method string getPolicy()
 * @method $this withPolicy($value)
 * @method string getPortRange()
 * @method $this withPortRange($value)
 * @method string getIpProtocol()
 * @method $this withIpProtocol($value)
 * @method string getSourceCidrIp()
 * @method $this withSourceCidrIp($value)
 * @method string getPriority()
 * @method $this withPriority($value)
 * @method string getDestCidrIp()
 * @method $this withDestCidrIp($value)
 * @method string getSecurityGroupRuleId()
 * @method $this withSecurityGroupRuleId($value)
 */
class ModifyRCSecurityGroupPermission extends Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getSupportDiskPerformanceLevel()
 * @method $this withSupportDiskPerformanceLevel($value)
 */
class ModifyRCVCluster extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getReadSQLReplicationTime()
 * @method $this withReadSQLReplicationTime($value)
 */
class ModifyReadonlyInstanceDelayReplicationTime extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getConnectionStringPrefix()
 * @method $this withConnectionStringPrefix($value)
 * @method string getDistributionType()
 * @method $this withDistributionType($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getWeight()
 * @method $this withWeight($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPort()
 * @method $this withPort($value)
 * @method string getMaxDelayTime()
 * @method $this withMaxDelayTime($value)
 */
class ModifyReadWriteSplittingConnection extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 */
class ModifyResourceGroup extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifySecurityGroupConfiguration extends Rpc
{
}

/**
 * @method string getDBInstanceIPArrayName()
 * @method $this withDBInstanceIPArrayName($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getSecurityIps()
 * @method $this withSecurityIps($value)
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getWhitelistNetworkType()
 * @method $this withWhitelistNetworkType($value)
 * @method string getSecurityIPType()
 * @method $this withSecurityIPType($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getModifyMode()
 * @method $this withModifyMode($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getFreshWhiteListReadins()
 * @method $this withFreshWhiteListReadins($value)
 * @method string getDBInstanceIPArrayAttribute()
 * @method $this withDBInstanceIPArrayAttribute($value)
 */
class ModifySecurityIps extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getStoragePeriod()
 * @method $this withStoragePeriod($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSQLCollectorStatus()
 * @method $this withSQLCollectorStatus($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifySQLCollectorPolicy extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getConfigValue()
 * @method $this withConfigValue($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifySQLCollectorRetention extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getStepName()
 * @method $this withStepName($value)
 * @method string getActionParams()
 * @method $this withActionParams($value)
 * @method string getTaskAction()
 * @method $this withTaskAction($value)
 */
class ModifyTaskInfo extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getTemplateName()
 * @method $this withTemplateName($value)
 * @method string getIpWhitelist()
 * @method $this withIpWhitelist($value)
 */
class ModifyWhitelistTemplate extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getNodeType()
 * @method $this withNodeType($value)
 * @method string getDBNodeId()
 * @method $this withDBNodeId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getEngineVersion()
 * @method $this withEngineVersion($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getBusinessInfo()
 * @method $this withBusinessInfo($value)
 * @method string getAutoPay()
 * @method $this withAutoPay($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getResource()
 * @method $this withResource($value)
 * @method string getCommodityCode()
 * @method $this withCommodityCode($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPromotionCode()
 * @method $this withPromotionCode($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 */
class PreCheckCreateOrderForDeleteDBNodes extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class PurgeDBInstanceLog extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method string getWithConfirmed()
 * @method string getPageSize()
 * @method string getFrom()
 * @method string getTo()
 */
class QueryNotify extends Rpc
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
    public function withWithConfirmed($value)
    {
        $this->data['WithConfirmed'] = $value;
        $this->options['form_params']['WithConfirmed'] = $value;

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
    public function withFrom($value)
    {
        $this->data['From'] = $value;
        $this->options['form_params']['From'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTo($value)
    {
        $this->data['To'] = $value;
        $this->options['form_params']['To'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCode()
 * @method $this withCode($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class QueryRecommendByCode extends Rpc
{
}

/**
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getForceStop()
 * @method $this withForceStop($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class RebootRCInstance extends Rpc
{
}

/**
 * @method string getForceReboot()
 * @method $this withForceReboot($value)
 * @method string getInstanceIds()
 * @method $this withInstanceIds($value)
 * @method string getBatchOptimization()
 * @method $this withBatchOptimization($value)
 */
class RebootRCInstances extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getRebuildNodeType()
 * @method $this withRebuildNodeType($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getDedicatedHostGroupId()
 * @method $this withDedicatedHostGroupId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDedicatedHostId()
 * @method $this withDedicatedHostId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class RebuildDBInstance extends Rpc
{
}

/**
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class RebuildReplicationLink extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getGuardDBInstanceId()
 * @method $this withGuardDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ReceiveDBInstance extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBInstanceStorage()
 * @method $this withDBInstanceStorage($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getDBInstanceDescription()
 * @method $this withDBInstanceDescription($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getDBInstanceStorageType()
 * @method $this withDBInstanceStorageType($value)
 * @method string getRestoreTime()
 * @method $this withRestoreTime($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getBackupId()
 * @method $this withBackupId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getUsedTime()
 * @method $this withUsedTime($value)
 * @method string getDBInstanceClass()
 * @method $this withDBInstanceClass($value)
 * @method string getDbNames()
 * @method $this withDbNames($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getPrivateIpAddress()
 * @method $this withPrivateIpAddress($value)
 * @method string getTargetDBInstanceId()
 * @method $this withTargetDBInstanceId($value)
 * @method string getVPCId()
 * @method $this withVPCId($value)
 * @method string getPayType()
 * @method $this withPayType($value)
 * @method string getInstanceNetworkType()
 * @method $this withInstanceNetworkType($value)
 */
class RecoveryDBInstance extends Rpc
{
}

/**
 * @method string getForceStop()
 * @method $this withForceStop($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class RedeployRCInstance extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getCurrentConnectionString()
 * @method $this withCurrentConnectionString($value)
 * @method string getInstanceNetworkType()
 * @method $this withInstanceNetworkType($value)
 */
class ReleaseInstanceConnection extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getCurrentConnectionString()
 * @method $this withCurrentConnectionString($value)
 */
class ReleaseInstancePublicConnection extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ReleaseReadWriteSplittingConnection extends Rpc
{
}

/**
 * @method string getTag4value()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTag2key()
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getTag3key()
 * @method string getTag1value()
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getTag3value()
 * @method string getProxyId()
 * @method string getTag5key()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTag5value()
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getTag1key()
 * @method string getTag2value()
 * @method string getTag4key()
 */
class RemoveTagsFromResource extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag4value($value)
    {
        $this->data['Tag4value'] = $value;
        $this->options['query']['Tag.4.value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag2key($value)
    {
        $this->data['Tag2key'] = $value;
        $this->options['query']['Tag.2.key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag3key($value)
    {
        $this->data['Tag3key'] = $value;
        $this->options['query']['Tag.3.key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag1value($value)
    {
        $this->data['Tag1value'] = $value;
        $this->options['query']['Tag.1.value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag3value($value)
    {
        $this->data['Tag3value'] = $value;
        $this->options['query']['Tag.3.value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag5key($value)
    {
        $this->data['Tag5key'] = $value;
        $this->options['query']['Tag.5.key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag5value($value)
    {
        $this->data['Tag5value'] = $value;
        $this->options['query']['Tag.5.value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag1key($value)
    {
        $this->data['Tag1key'] = $value;
        $this->options['query']['Tag.1.key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag2value($value)
    {
        $this->data['Tag2value'] = $value;
        $this->options['query']['Tag.2.value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag4key($value)
    {
        $this->data['Tag4key'] = $value;
        $this->options['query']['Tag.4.key'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getAutoUseCoupon()
 * @method $this withAutoUseCoupon($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getBusinessInfo()
 * @method $this withBusinessInfo($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getAutoPay()
 * @method $this withAutoPay($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAutoRenew()
 * @method $this withAutoRenew($value)
 * @method string getPromotionCode()
 * @method $this withPromotionCode($value)
 */
class RenewInstance extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getAutoUseCoupon()
 * @method $this withAutoUseCoupon($value)
 * @method string getBusinessInfo()
 * @method $this withBusinessInfo($value)
 * @method string getAutoPay()
 * @method $this withAutoPay($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getResource()
 * @method $this withResource($value)
 * @method string getCommodityCode()
 * @method $this withCommodityCode($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getUsedTime()
 * @method $this withUsedTime($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getAutoRenew()
 * @method $this withAutoRenew($value)
 * @method string getPromotionCode()
 * @method $this withPromotionCode($value)
 * @method string getPeriodAlign()
 * @method $this withPeriodAlign($value)
 * @method string getTimeType()
 * @method $this withTimeType($value)
 * @method string getPayType()
 * @method $this withPayType($value)
 */
class RenewRCInstance extends Rpc
{
}

/**
 * @method string getIsLocalDisk()
 * @method $this withIsLocalDisk($value)
 * @method string getImageId()
 * @method $this withImageId($value)
 * @method string getKeyPairName()
 * @method $this withKeyPairName($value)
 * @method string getPassword()
 * @method $this withPassword($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class ReplaceRCInstanceSystemDisk extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAccountPassword()
 * @method $this withAccountPassword($value)
 */
class ResetAccount extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAccountPassword()
 * @method $this withAccountPassword($value)
 */
class ResetAccountPassword extends Rpc
{
}

/**
 * @method string getType()
 * @method $this withType($value)
 * @method string getDiskId()
 * @method $this withDiskId($value)
 * @method string getAutoPay()
 * @method $this withAutoPay($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getNewSize()
 * @method $this withNewSize($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class ResizeRCInstanceDisk extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getRestartMethod()
 * @method $this withRestartMethod($value)
 * @method string getEffectiveTime()
 * @method $this withEffectiveTime($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getSwitchTime()
 * @method $this withSwitchTime($value)
 * @method string getNodeId()
 * @method $this withNodeId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class RestartDBInstance extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSourceDBInstanceName()
 * @method $this withSourceDBInstanceName($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getUserBakSetURL()
 * @method $this withUserBakSetURL($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getTableMeta()
 * @method $this withTableMeta($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getBackupSetRegion()
 * @method $this withBackupSetRegion($value)
 * @method string getBackupSetType()
 * @method $this withBackupSetType($value)
 * @method string getRestoreTime()
 * @method $this withRestoreTime($value)
 * @method string getBakSetName()
 * @method $this withBakSetName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getBackupId()
 * @method $this withBackupId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRestoreType()
 * @method $this withRestoreType($value)
 * @method string getSourceRegion()
 * @method $this withSourceRegion($value)
 */
class RestoreDdrTable extends Rpc
{
}

/**
 * @method string getRestoreTableMode()
 * @method $this withRestoreTableMode($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getInstantRecovery()
 * @method $this withInstantRecovery($value)
 * @method string getTableMeta()
 * @method $this withTableMeta($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getRestoreTime()
 * @method $this withRestoreTime($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getBackupId()
 * @method $this withBackupId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class RestoreTable extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBName()
 * @method $this withDBName($value)
 */
class RevokeAccountPrivilege extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class RevokeOperatorPermission extends Rpc
{
}

/**
 * @method string getSecurityGroupRuleIdList()
 * @method $this withSecurityGroupRuleIdList($value)
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getDirection()
 * @method $this withDirection($value)
 */
class RevokeRCSecurityGroupPermission extends Rpc
{
}

/**
 * @method string getResourceTags()
 * @method $this withResourceTags($value)
 * @method string getContainerName()
 * @method $this withContainerName($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
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
 * @method string getFrequency()
 * @method $this withFrequency($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getContentEncoding()
 * @method $this withContentEncoding($value)
 * @method string getRepeatMode()
 * @method $this withRepeatMode($value)
 * @method string getWindowsPasswordName()
 * @method $this withWindowsPasswordName($value)
 * @method string getKeepCommand()
 * @method $this withKeepCommand($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getTerminationMode()
 * @method $this withTerminationMode($value)
 * @method string getInstanceIds()
 * @method $this withInstanceIds($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getContainerId()
 * @method $this withContainerId($value)
 * @method string getParameters()
 * @method $this withParameters($value)
 * @method string getEnableParameter()
 * @method $this withEnableParameter($value)
 * @method string getUsername()
 * @method $this withUsername($value)
 * @method string getLauncher()
 * @method $this withLauncher($value)
 */
class RunRCCommand extends Rpc
{
}

/**
 * @method string getCreateExtraParam()
 * @method $this withCreateExtraParam($value)
 * @method string getSecurityEnhancementStrategy()
 * @method $this withSecurityEnhancementStrategy($value)
 * @method string getKeyPairName()
 * @method $this withKeyPairName($value)
 * @method string getDeletionProtection()
 * @method $this withDeletionProtection($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getPassword()
 * @method $this withPassword($value)
 * @method string getHostName()
 * @method $this withHostName($value)
 * @method string getSystemDisk()
 * @method $this withSystemDisk($value)
 * @method array getTag()
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getCreateAckEdgeParam()
 * @method $this withCreateAckEdgeParam($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getSpotStrategy()
 * @method $this withSpotStrategy($value)
 * @method string getPeriodUnit()
 * @method $this withPeriodUnit($value)
 * @method string getInstanceName()
 * @method $this withInstanceName($value)
 * @method string getAutoRenew()
 * @method $this withAutoRenew($value)
 * @method string getPromotionCode()
 * @method $this withPromotionCode($value)
 * @method string getInternetChargeType()
 * @method $this withInternetChargeType($value)
 * @method string getCreateMode()
 * @method $this withCreateMode($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getImageId()
 * @method $this withImageId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getIoOptimized()
 * @method $this withIoOptimized($value)
 * @method string getInternetMaxBandwidthOut()
 * @method $this withInternetMaxBandwidthOut($value)
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getAutoUseCoupon()
 * @method $this withAutoUseCoupon($value)
 * @method string getUserDataInBase64()
 * @method $this withUserDataInBase64($value)
 * @method string getSupportCase()
 * @method $this withSupportCase($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getInstanceChargeType()
 * @method $this withInstanceChargeType($value)
 * @method string getDeploymentSetId()
 * @method $this withDeploymentSetId($value)
 * @method string getAmount()
 * @method $this withAmount($value)
 * @method string getAutoPay()
 * @method $this withAutoPay($value)
 * @method string getDataDisk()
 * @method $this withDataDisk($value)
 */
class RunRCInstances extends Rpc
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
 * @method string getSpecifiedTime()
 * @method $this withSpecifiedTime($value)
 * @method string getTargetDedicatedHostIdForSlave()
 * @method $this withTargetDedicatedHostIdForSlave($value)
 * @method string getEngineVersion()
 * @method $this withEngineVersion($value)
 * @method string getStorage()
 * @method $this withStorage($value)
 * @method string getEffectiveTime()
 * @method $this withEffectiveTime($value)
 * @method string getDBInstanceTransType()
 * @method $this withDBInstanceTransType($value)
 * @method string getTargetDedicatedHostIdForMaster()
 * @method $this withTargetDedicatedHostIdForMaster($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getDedicatedHostGroupId()
 * @method $this withDedicatedHostGroupId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTargetDBInstanceClass()
 * @method $this withTargetDBInstanceClass($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getTargetDedicatedHostIdForLog()
 * @method $this withTargetDedicatedHostIdForLog($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 */
class StartDBInstance extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class StartRCInstance extends Rpc
{
}

/**
 * @method string getInstanceIds()
 * @method $this withInstanceIds($value)
 * @method string getBatchOptimization()
 * @method $this withBatchOptimization($value)
 */
class StartRCInstances extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class StopDBInstance extends Rpc
{
}

/**
 * @method string getForceStop()
 * @method $this withForceStop($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class StopRCInstance extends Rpc
{
}

/**
 * @method string getForceStop()
 * @method $this withForceStop($value)
 * @method string getInstanceIds()
 * @method $this withInstanceIds($value)
 * @method string getBatchOptimization()
 * @method $this withBatchOptimization($value)
 */
class StopRCInstances extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getEffectiveTime()
 * @method $this withEffectiveTime($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getNodeId()
 * @method $this withNodeId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getForce()
 * @method $this withForce($value)
 * @method string getOperation()
 * @method $this withOperation($value)
 */
class SwitchDBInstanceHA extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getConnectionStringPrefix()
 * @method $this withConnectionStringPrefix($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getConnectionStringType()
 * @method $this withConnectionStringType($value)
 * @method string getPort()
 * @method $this withPort($value)
 */
class SwitchDBInstanceNetType extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
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
 * @method string getVPCId()
 * @method $this withVPCId($value)
 */
class SwitchDBInstanceVpc extends Rpc
{
}

/**
 * @method string getDBInstanceName()
 * @method $this withDBInstanceName($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSwitchoverTimeout()
 * @method $this withSwitchoverTimeout($value)
 */
class SwitchOverMajorVersionUpgrade extends Rpc
{
}

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTargetInstanceRegionId()
 * @method $this withTargetInstanceRegionId($value)
 * @method string getTargetInstanceName()
 * @method $this withTargetInstanceName($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class SwitchReplicationLink extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getSyncMode()
 * @method $this withSyncMode($value)
 * @method string getKeyPairName()
 * @method $this withKeyPairName($value)
 */
class SyncRCKeyPair extends Rpc
{
}

/**
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class SyncRCSecurityGroup extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method array getTag()
 * @method array getResourceId()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
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
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getMigrateTaskId()
 * @method $this withMigrateTaskId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class TerminateMigrateTask extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getAutoUseCoupon()
 * @method $this withAutoUseCoupon($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getBusinessInfo()
 * @method $this withBusinessInfo($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getResource()
 * @method $this withResource($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getUsedTime()
 * @method $this withUsedTime($value)
 * @method string getAutoRenew()
 * @method $this withAutoRenew($value)
 * @method string getPromotionCode()
 * @method $this withPromotionCode($value)
 * @method string getPayType()
 * @method $this withPayType($value)
 */
class TransformDBInstancePayType extends Rpc
{
}

/**
 * @method string getAllocationId()
 * @method $this withAllocationId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class UnassociateEipAddressWithRCInstance extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class UnlockAccount extends Rpc
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

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBNames()
 * @method $this withDBNames($value)
 * @method string getExtensions()
 * @method $this withExtensions($value)
 */
class UpdatePostgresExtensions extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getRetention()
 * @method $this withRetention($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getBackupId()
 * @method $this withBackupId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getOpsServiceVersion()
 * @method $this withOpsServiceVersion($value)
 * @method string getComment()
 * @method $this withComment($value)
 */
class UpdateUserBackupFile extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getEngineVersion()
 * @method $this withEngineVersion($value)
 * @method string getEffectiveTime()
 * @method $this withEffectiveTime($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class UpgradeDBInstanceEngineVersion extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getSwitchTime()
 * @method $this withSwitchTime($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTargetMinorVersion()
 * @method $this withTargetMinorVersion($value)
 * @method string getUpgradeTime()
 * @method $this withUpgradeTime($value)
 */
class UpgradeDBInstanceKernelVersion extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBInstanceStorage()
 * @method $this withDBInstanceStorage($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getDBInstanceDescription()
 * @method $this withDBInstanceDescription($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getUpgradeMode()
 * @method $this withUpgradeMode($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBInstanceClass()
 * @method $this withDBInstanceClass($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getPrivateIpAddress()
 * @method $this withPrivateIpAddress($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getInstanceNetworkType()
 * @method $this withInstanceNetworkType($value)
 * @method string getTargetMajorVersion()
 * @method $this withTargetMajorVersion($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getZoneIdSlave1()
 * @method $this withZoneIdSlave1($value)
 * @method string getZoneIdSlave2()
 * @method $this withZoneIdSlave2($value)
 * @method string getSwitchTimeMode()
 * @method $this withSwitchTimeMode($value)
 * @method string getSwitchOver()
 * @method $this withSwitchOver($value)
 * @method string getCollectStatMode()
 * @method $this withCollectStatMode($value)
 * @method string getSwitchTime()
 * @method $this withSwitchTime($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getDBInstanceStorageType()
 * @method $this withDBInstanceStorageType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getUsedTime()
 * @method $this withUsedTime($value)
 * @method string getVPCId()
 * @method $this withVPCId($value)
 * @method string getPayType()
 * @method $this withPayType($value)
 */
class UpgradeDBInstanceMajorVersion extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getUpgradeMode()
 * @method $this withUpgradeMode($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTargetMajorVersion()
 * @method $this withTargetMajorVersion($value)
 */
class UpgradeDBInstanceMajorVersionPrecheck extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getSwitchTime()
 * @method $this withSwitchTime($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBProxyEngineType()
 * @method $this withDBProxyEngineType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getUpgradeTime()
 * @method $this withUpgradeTime($value)
 */
class UpgradeDBProxyInstanceKernelVersion extends Rpc
{
}
