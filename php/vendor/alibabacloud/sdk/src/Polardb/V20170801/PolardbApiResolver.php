<?php

namespace AlibabaCloud\Polardb\V20170801;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AbortDBClusterMigration abortDBClusterMigration(array $options = [])
 * @method AddEncryptionDBRolePrivilege addEncryptionDBRolePrivilege(array $options = [])
 * @method AddFirewallRules addFirewallRules(array $options = [])
 * @method AddSQLRateLimitingRules addSQLRateLimitingRules(array $options = [])
 * @method AttachApplicationPolarFS attachApplicationPolarFS(array $options = [])
 * @method CancelActiveOperationTasks cancelActiveOperationTasks(array $options = [])
 * @method CancelCronJobPolicyServerless cancelCronJobPolicyServerless(array $options = [])
 * @method CancelScheduleTasks cancelScheduleTasks(array $options = [])
 * @method CheckAccountName checkAccountName(array $options = [])
 * @method CheckAccountNameZonal checkAccountNameZonal(array $options = [])
 * @method CheckConnectionString checkConnectionString(array $options = [])
 * @method CheckDBName checkDBName(array $options = [])
 * @method CheckDBNameZonal checkDBNameZonal(array $options = [])
 * @method CheckKMSAuthorized checkKMSAuthorized(array $options = [])
 * @method CheckServiceLinkedRole checkServiceLinkedRole(array $options = [])
 * @method CloseAITask closeAITask(array $options = [])
 * @method CloseDBClusterMigration closeDBClusterMigration(array $options = [])
 * @method ContinueDBClusterMigration continueDBClusterMigration(array $options = [])
 * @method CreateAccount createAccount(array $options = [])
 * @method CreateAccountZonal createAccountZonal(array $options = [])
 * @method CreateActivationCode createActivationCode(array $options = [])
 * @method CreateApplication createApplication(array $options = [])
 * @method CreateApplicationEndpointAddress createApplicationEndpointAddress(array $options = [])
 * @method CreateBackup createBackup(array $options = [])
 * @method CreateColdStorageInstance createColdStorageInstance(array $options = [])
 * @method CreateCronJobPolicyServerless createCronJobPolicyServerless(array $options = [])
 * @method CreateDatabase createDatabase(array $options = [])
 * @method CreateDatabaseZonal createDatabaseZonal(array $options = [])
 * @method CreateDBCluster createDBCluster(array $options = [])
 * @method CreateDBClusterEndpoint createDBClusterEndpoint(array $options = [])
 * @method CreateDBClusterEndpointZonal createDBClusterEndpointZonal(array $options = [])
 * @method CreateDBEndpointAddress createDBEndpointAddress(array $options = [])
 * @method CreateDBLink createDBLink(array $options = [])
 * @method CreateDBNodes createDBNodes(array $options = [])
 * @method CreateExtensions createExtensions(array $options = [])
 * @method CreateGlobalDatabaseNetwork createGlobalDatabaseNetwork(array $options = [])
 * @method CreateGlobalDataNetwork createGlobalDataNetwork(array $options = [])
 * @method CreateGlobalSecurityIPGroup createGlobalSecurityIPGroup(array $options = [])
 * @method CreateNetworkChannel createNetworkChannel(array $options = [])
 * @method CreateOrGetVirtualLicenseOrder createOrGetVirtualLicenseOrder(array $options = [])
 * @method CreateParameterGroup createParameterGroup(array $options = [])
 * @method CreateServiceLinkedRole createServiceLinkedRole(array $options = [])
 * @method CreateStoragePlan createStoragePlan(array $options = [])
 * @method DeleteAccount deleteAccount(array $options = [])
 * @method DeleteAccountZonal deleteAccountZonal(array $options = [])
 * @method DeleteAIDBCluster deleteAIDBCluster(array $options = [])
 * @method DeleteApplication deleteApplication(array $options = [])
 * @method DeleteApplicationEndpointAddress deleteApplicationEndpointAddress(array $options = [])
 * @method DeleteBackup deleteBackup(array $options = [])
 * @method DeleteDatabase deleteDatabase(array $options = [])
 * @method DeleteDatabaseZonal deleteDatabaseZonal(array $options = [])
 * @method DeleteDBCluster deleteDBCluster(array $options = [])
 * @method DeleteDBClusterEndpoint deleteDBClusterEndpoint(array $options = [])
 * @method DeleteDBClusterEndpointZonal deleteDBClusterEndpointZonal(array $options = [])
 * @method DeleteDBEndpointAddress deleteDBEndpointAddress(array $options = [])
 * @method DeleteDBLink deleteDBLink(array $options = [])
 * @method DeleteDBNodes deleteDBNodes(array $options = [])
 * @method DeleteEncryptionDBRolePrivilege deleteEncryptionDBRolePrivilege(array $options = [])
 * @method DeleteExtensions deleteExtensions(array $options = [])
 * @method DeleteFirewallRules deleteFirewallRules(array $options = [])
 * @method DeleteGlobalDatabaseNetwork deleteGlobalDatabaseNetwork(array $options = [])
 * @method DeleteGlobalDataNetwork deleteGlobalDataNetwork(array $options = [])
 * @method DeleteGlobalSecurityIPGroup deleteGlobalSecurityIPGroup(array $options = [])
 * @method DeleteMaskingRules deleteMaskingRules(array $options = [])
 * @method DeleteNetworkChannel deleteNetworkChannel(array $options = [])
 * @method DeleteParameterGroup deleteParameterGroup(array $options = [])
 * @method DeleteSQLRateLimitingRules deleteSQLRateLimitingRules(array $options = [])
 * @method DescribeAccounts describeAccounts(array $options = [])
 * @method DescribeAccountsZonal describeAccountsZonal(array $options = [])
 * @method DescribeActivationCodeDetails describeActivationCodeDetails(array $options = [])
 * @method DescribeActivationCodes describeActivationCodes(array $options = [])
 * @method DescribeActiveOperationMaintainConf describeActiveOperationMaintainConf(array $options = [])
 * @method DescribeActiveOperationTasks describeActiveOperationTasks(array $options = [])
 * @method DescribeAIDBClusterAttribute describeAIDBClusterAttribute(array $options = [])
 * @method DescribeAIDBClusterPerformance describeAIDBClusterPerformance(array $options = [])
 * @method DescribeAIDBClusters describeAIDBClusters(array $options = [])
 * @method DescribeAITaskStatus describeAITaskStatus(array $options = [])
 * @method DescribeApplicationAttribute describeApplicationAttribute(array $options = [])
 * @method DescribeApplicationParameters describeApplicationParameters(array $options = [])
 * @method DescribeApplications describeApplications(array $options = [])
 * @method DescribeApplicationServerlessConf describeApplicationServerlessConf(array $options = [])
 * @method DescribeAutoRenewAttribute describeAutoRenewAttribute(array $options = [])
 * @method DescribeAvailableCrossRegions describeAvailableCrossRegions(array $options = [])
 * @method DescribeBackupLogs describeBackupLogs(array $options = [])
 * @method DescribeBackupPolicy describeBackupPolicy(array $options = [])
 * @method DescribeBackupRegions describeBackupRegions(array $options = [])
 * @method DescribeBackups describeBackups(array $options = [])
 * @method DescribeBackupTasks describeBackupTasks(array $options = [])
 * @method DescribeCharacterSetName describeCharacterSetName(array $options = [])
 * @method DescribeClassList describeClassList(array $options = [])
 * @method DescribeColdStorageInstance describeColdStorageInstance(array $options = [])
 * @method DescribeCronJobPolicyServerless describeCronJobPolicyServerless(array $options = [])
 * @method DescribeCrossCloudLevels describeCrossCloudLevels(array $options = [])
 * @method DescribeCrossCloudRegion describeCrossCloudRegion(array $options = [])
 * @method DescribeCrossCloudRegionMappingToAliyun describeCrossCloudRegionMappingToAliyun(array $options = [])
 * @method DescribeDasConfig describeDasConfig(array $options = [])
 * @method DescribeDatabases describeDatabases(array $options = [])
 * @method DescribeDatabasesZonal describeDatabasesZonal(array $options = [])
 * @method DescribeDBClusterAccessWhitelist describeDBClusterAccessWhitelist(array $options = [])
 * @method DescribeDBClusterAttribute describeDBClusterAttribute(array $options = [])
 * @method DescribeDbClusterAttributeZonal describeDbClusterAttributeZonal(array $options = [])
 * @method DescribeDBClusterAuditLogCollector describeDBClusterAuditLogCollector(array $options = [])
 * @method DescribeDBClusterAvailableResources describeDBClusterAvailableResources(array $options = [])
 * @method DescribeDBClusterConnectivity describeDBClusterConnectivity(array $options = [])
 * @method DescribeDBClusterEncryptionKey describeDBClusterEncryptionKey(array $options = [])
 * @method DescribeDBClusterEndpoints describeDBClusterEndpoints(array $options = [])
 * @method DescribeDBClusterEndpointsZonal describeDBClusterEndpointsZonal(array $options = [])
 * @method DescribeDBClusterMigration describeDBClusterMigration(array $options = [])
 * @method DescribeDBClusterMonitor describeDBClusterMonitor(array $options = [])
 * @method DescribeDBClusterNetInfo describeDBClusterNetInfo(array $options = [])
 * @method DescribeDBClusterParameters describeDBClusterParameters(array $options = [])
 * @method DescribeDBClusterPerformance describeDBClusterPerformance(array $options = [])
 * @method DescribeDBClusterProxy describeDBClusterProxy(array $options = [])
 * @method DescribeDBClusters describeDBClusters(array $options = [])
 * @method DescribeDBClusterServerlessConf describeDBClusterServerlessConf(array $options = [])
 * @method DescribeDBClusterSSL describeDBClusterSSL(array $options = [])
 * @method DescribeDBClustersWithBackups describeDBClustersWithBackups(array $options = [])
 * @method DescribeDBClustersZonal describeDBClustersZonal(array $options = [])
 * @method DescribeDBClusterTDE describeDBClusterTDE(array $options = [])
 * @method DescribeDBClusterVersion describeDBClusterVersion(array $options = [])
 * @method DescribeDBClusterVersionZonal describeDBClusterVersionZonal(array $options = [])
 * @method DescribeDBInitializeVariable describeDBInitializeVariable(array $options = [])
 * @method DescribeDBInstancePerformance describeDBInstancePerformance(array $options = [])
 * @method DescribeDBLinks describeDBLinks(array $options = [])
 * @method DescribeDBLogFiles describeDBLogFiles(array $options = [])
 * @method DescribeDBMiniEngineVersions describeDBMiniEngineVersions(array $options = [])
 * @method DescribeDBNodePerformance describeDBNodePerformance(array $options = [])
 * @method DescribeDBNodesParameters describeDBNodesParameters(array $options = [])
 * @method DescribeDBProxyPerformance describeDBProxyPerformance(array $options = [])
 * @method DescribeDetachedBackups describeDetachedBackups(array $options = [])
 * @method DescribeEncryptionDBRolePrivilege describeEncryptionDBRolePrivilege(array $options = [])
 * @method DescribeEncryptionDBSecret describeEncryptionDBSecret(array $options = [])
 * @method DescribeExtensions describeExtensions(array $options = [])
 * @method DescribeFirewallRules describeFirewallRules(array $options = [])
 * @method DescribeGlobalDatabaseNetwork describeGlobalDatabaseNetwork(array $options = [])
 * @method DescribeGlobalDatabaseNetworks describeGlobalDatabaseNetworks(array $options = [])
 * @method DescribeGlobalDataNetworkList describeGlobalDataNetworkList(array $options = [])
 * @method DescribeGlobalSecurityIPGroup describeGlobalSecurityIPGroup(array $options = [])
 * @method DescribeGlobalSecurityIPGroupRelation describeGlobalSecurityIPGroupRelation(array $options = [])
 * @method DescribeHALogs describeHALogs(array $options = [])
 * @method DescribeHistoryTasks describeHistoryTasks(array $options = [])
 * @method DescribeHistoryTasksStat describeHistoryTasksStat(array $options = [])
 * @method DescribeLicenseOrderDetails describeLicenseOrderDetails(array $options = [])
 * @method DescribeLicenseOrders describeLicenseOrders(array $options = [])
 * @method DescribeLocalAvailableRecoveryTime describeLocalAvailableRecoveryTime(array $options = [])
 * @method DescribeLogBackupPolicy describeLogBackupPolicy(array $options = [])
 * @method DescribeMaskingRules describeMaskingRules(array $options = [])
 * @method DescribeMetaList describeMetaList(array $options = [])
 * @method DescribeModifyParameterLog describeModifyParameterLog(array $options = [])
 * @method DescribeNetworkChannel describeNetworkChannel(array $options = [])
 * @method DescribeParameterGroup describeParameterGroup(array $options = [])
 * @method DescribeParameterGroups describeParameterGroups(array $options = [])
 * @method DescribeParameterTemplates describeParameterTemplates(array $options = [])
 * @method DescribePendingMaintenanceAction describePendingMaintenanceAction(array $options = [])
 * @method DescribePendingMaintenanceActions describePendingMaintenanceActions(array $options = [])
 * @method DescribePolarSQLCollectorPolicy describePolarSQLCollectorPolicy(array $options = [])
 * @method DescribeRdsVpcs describeRdsVpcs(array $options = [])
 * @method DescribeRdsVSwitchs describeRdsVSwitchs(array $options = [])
 * @method DescribeRegions describeRegions(array $options = [])
 * @method DescribeResourcePackages describeResourcePackages(array $options = [])
 * @method DescribeScheduleTasks describeScheduleTasks(array $options = [])
 * @method DescribeSlowLogRecords describeSlowLogRecords(array $options = [])
 * @method DescribeSlowLogs describeSlowLogs(array $options = [])
 * @method DescribeSQLRateLimitingRules describeSQLRateLimitingRules(array $options = [])
 * @method DescribeTasks describeTasks(array $options = [])
 * @method DescribeUpgradeReport describeUpgradeReport(array $options = [])
 * @method DescribeUserEncryptionKeyList describeUserEncryptionKeyList(array $options = [])
 * @method DescribeVpcs describeVpcs(array $options = [])
 * @method DescribeVSwitches describeVSwitches(array $options = [])
 * @method DescribeVSwitchList describeVSwitchList(array $options = [])
 * @method DescribeZones describeZones(array $options = [])
 * @method DisableDBClusterOrca disableDBClusterOrca(array $options = [])
 * @method DisableDBClusterServerless disableDBClusterServerless(array $options = [])
 * @method EnableDBClusterOrca enableDBClusterOrca(array $options = [])
 * @method EnableDBClusterServerless enableDBClusterServerless(array $options = [])
 * @method EnableFirewallRules enableFirewallRules(array $options = [])
 * @method EnableSQLRateLimitingRules enableSQLRateLimitingRules(array $options = [])
 * @method EvaluateRegionResource evaluateRegionResource(array $options = [])
 * @method ExecuteCrossCloudOpenAPI executeCrossCloudOpenAPI(array $options = [])
 * @method FailoverDBCluster failoverDBCluster(array $options = [])
 * @method FailoverDBClusterZonal failoverDBClusterZonal(array $options = [])
 * @method GenerateUpgradeReportForSyncClone generateUpgradeReportForSyncClone(array $options = [])
 * @method GrantAccountPrivilege grantAccountPrivilege(array $options = [])
 * @method GrantAccountPrivilegeZonal grantAccountPrivilegeZonal(array $options = [])
 * @method ListOrders listOrders(array $options = [])
 * @method ListTagResources listTagResources(array $options = [])
 * @method ListTagResourcesForRegion listTagResourcesForRegion(array $options = [])
 * @method ManuallyStartDBCluster manuallyStartDBCluster(array $options = [])
 * @method ModifyAccountDescription modifyAccountDescription(array $options = [])
 * @method ModifyAccountDescriptionZonal modifyAccountDescriptionZonal(array $options = [])
 * @method ModifyAccountLockState modifyAccountLockState(array $options = [])
 * @method ModifyAccountPassword modifyAccountPassword(array $options = [])
 * @method ModifyAccountPasswordZonal modifyAccountPasswordZonal(array $options = [])
 * @method ModifyActiveOperationMaintainConf modifyActiveOperationMaintainConf(array $options = [])
 * @method ModifyActiveOperationTasks modifyActiveOperationTasks(array $options = [])
 * @method ModifyAIDBClusterDescription modifyAIDBClusterDescription(array $options = [])
 * @method ModifyApplicationDescription modifyApplicationDescription(array $options = [])
 * @method ModifyApplicationParameter modifyApplicationParameter(array $options = [])
 * @method ModifyApplicationServerlessConf modifyApplicationServerlessConf(array $options = [])
 * @method ModifyApplicationWhitelist modifyApplicationWhitelist(array $options = [])
 * @method ModifyAutoRenewAttribute modifyAutoRenewAttribute(array $options = [])
 * @method ModifyBackupPolicy modifyBackupPolicy(array $options = [])
 * @method ModifyCronJobPolicyServerless modifyCronJobPolicyServerless(array $options = [])
 * @method ModifyDBCluster modifyDBCluster(array $options = [])
 * @method ModifyDBClusterAccessWhitelist modifyDBClusterAccessWhitelist(array $options = [])
 * @method ModifyDBClusterAndNodesParameters modifyDBClusterAndNodesParameters(array $options = [])
 * @method ModifyDBClusterArch modifyDBClusterArch(array $options = [])
 * @method ModifyDBClusterAuditLogCollector modifyDBClusterAuditLogCollector(array $options = [])
 * @method ModifyDBClusterDeletion modifyDBClusterDeletion(array $options = [])
 * @method ModifyDBClusterDescription modifyDBClusterDescription(array $options = [])
 * @method ModifyDBClusterDescriptionZonal modifyDBClusterDescriptionZonal(array $options = [])
 * @method ModifyDBClusterEndpoint modifyDBClusterEndpoint(array $options = [])
 * @method ModifyDBClusterEndpointZonal modifyDBClusterEndpointZonal(array $options = [])
 * @method ModifyDBClusterMaintainTime modifyDBClusterMaintainTime(array $options = [])
 * @method ModifyDBClusterMigration modifyDBClusterMigration(array $options = [])
 * @method ModifyDBClusterMigrationEndpoint modifyDBClusterMigrationEndpoint(array $options = [])
 * @method ModifyDBClusterMonitor modifyDBClusterMonitor(array $options = [])
 * @method ModifyDBClusterParameters modifyDBClusterParameters(array $options = [])
 * @method ModifyDBClusterPrimaryZone modifyDBClusterPrimaryZone(array $options = [])
 * @method ModifyDBClusterResourceGroup modifyDBClusterResourceGroup(array $options = [])
 * @method ModifyDBClusterServerlessConf modifyDBClusterServerlessConf(array $options = [])
 * @method ModifyDBClusterSSL modifyDBClusterSSL(array $options = [])
 * @method ModifyDBClusterStoragePerformance modifyDBClusterStoragePerformance(array $options = [])
 * @method ModifyDBClusterStorageSpace modifyDBClusterStorageSpace(array $options = [])
 * @method ModifyDBClusterTDE modifyDBClusterTDE(array $options = [])
 * @method ModifyDBClusterVpc modifyDBClusterVpc(array $options = [])
 * @method ModifyDBDescription modifyDBDescription(array $options = [])
 * @method ModifyDBDescriptionZonal modifyDBDescriptionZonal(array $options = [])
 * @method ModifyDBEndpointAddress modifyDBEndpointAddress(array $options = [])
 * @method ModifyDBNodeClass modifyDBNodeClass(array $options = [])
 * @method ModifyDBNodeConfig modifyDBNodeConfig(array $options = [])
 * @method ModifyDBNodeDescription modifyDBNodeDescription(array $options = [])
 * @method ModifyDBNodeHotReplicaMode modifyDBNodeHotReplicaMode(array $options = [])
 * @method ModifyDBNodeSccMode modifyDBNodeSccMode(array $options = [])
 * @method ModifyDBNodesClass modifyDBNodesClass(array $options = [])
 * @method ModifyDBNodesParameters modifyDBNodesParameters(array $options = [])
 * @method ModifyEncryptionDBRolePrivilege modifyEncryptionDBRolePrivilege(array $options = [])
 * @method ModifyEncryptionDBSecret modifyEncryptionDBSecret(array $options = [])
 * @method ModifyFirewallRules modifyFirewallRules(array $options = [])
 * @method ModifyGlobalDatabaseNetwork modifyGlobalDatabaseNetwork(array $options = [])
 * @method ModifyGlobalSecurityIPGroup modifyGlobalSecurityIPGroup(array $options = [])
 * @method ModifyGlobalSecurityIPGroupName modifyGlobalSecurityIPGroupName(array $options = [])
 * @method ModifyGlobalSecurityIPGroupRelation modifyGlobalSecurityIPGroupRelation(array $options = [])
 * @method ModifyLogBackupPolicy modifyLogBackupPolicy(array $options = [])
 * @method ModifyMaskingRules modifyMaskingRules(array $options = [])
 * @method ModifyPendingMaintenanceAction modifyPendingMaintenanceAction(array $options = [])
 * @method ModifyResourcePackage modifyResourcePackage(array $options = [])
 * @method ModifyScheduleTask modifyScheduleTask(array $options = [])
 * @method ModifySQLRateLimitingRules modifySQLRateLimitingRules(array $options = [])
 * @method OpenAITask openAITask(array $options = [])
 * @method ReactivateDBClusterBackup reactivateDBClusterBackup(array $options = [])
 * @method RefreshDBClusterStorageUsage refreshDBClusterStorageUsage(array $options = [])
 * @method RemoveDBClusterFromGDN removeDBClusterFromGDN(array $options = [])
 * @method ResetAccount resetAccount(array $options = [])
 * @method ResetAccountPassword resetAccountPassword(array $options = [])
 * @method ResetAccountZonal resetAccountZonal(array $options = [])
 * @method ResetGlobalDatabaseNetwork resetGlobalDatabaseNetwork(array $options = [])
 * @method RestartDBLink restartDBLink(array $options = [])
 * @method RestartDBNode restartDBNode(array $options = [])
 * @method RestartDBNodeZonal restartDBNodeZonal(array $options = [])
 * @method RestoreTable restoreTable(array $options = [])
 * @method RevokeAccountPrivilege revokeAccountPrivilege(array $options = [])
 * @method RevokeAccountPrivilegeZonal revokeAccountPrivilegeZonal(array $options = [])
 * @method SwitchOverGlobalDatabaseNetwork switchOverGlobalDatabaseNetwork(array $options = [])
 * @method TagResources tagResources(array $options = [])
 * @method TempModifyDBNode tempModifyDBNode(array $options = [])
 * @method TransformDBClusterPayType transformDBClusterPayType(array $options = [])
 * @method UntagResources untagResources(array $options = [])
 * @method UpdateExtensions updateExtensions(array $options = [])
 * @method UpgradeDBClusterVersion upgradeDBClusterVersion(array $options = [])
 * @method UpgradeDBClusterVersionZonal upgradeDBClusterVersionZonal(array $options = [])
 */
class PolardbApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'polardb';

    /** @var string */
    public $version = '2017-08-01';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'polardb';
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class AbortDBClusterMigration extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getRolePrivilegeConfig()
 * @method $this withRolePrivilegeConfig($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRolePrivilegeName()
 * @method $this withRolePrivilegeName($value)
 */
class AddEncryptionDBRolePrivilege extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getRuleName()
 * @method $this withRuleName($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRuleConfig()
 * @method $this withRuleConfig($value)
 */
class AddFirewallRules extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getRuleName()
 * @method $this withRuleName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRuleConfig()
 * @method $this withRuleConfig($value)
 */
class AddSQLRateLimitingRules extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getReplaceExisted()
 * @method $this withReplaceExisted($value)
 * @method string getApplicationId()
 * @method $this withApplicationId($value)
 * @method string getPolarFSAccessKeyId()
 * @method $this withPolarFSAccessKeyId($value)
 * @method string getPolarFSInstanceId()
 * @method $this withPolarFSInstanceId($value)
 * @method string getPolarFSAccessKeySecret()
 * @method $this withPolarFSAccessKeySecret($value)
 */
class AttachApplicationPolarFS extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTaskIds()
 * @method $this withTaskIds($value)
 * @method string getUid()
 * @method $this withUid($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getEngineType()
 * @method $this withEngineType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CancelActiveOperationTasks extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CancelCronJobPolicyServerless extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CancelScheduleTasks extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CheckAccountName extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CheckAccountNameZonal extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getConnectionStringPrefix()
 * @method $this withConnectionStringPrefix($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CheckConnectionString extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBName()
 * @method $this withDBName($value)
 */
class CheckDBName extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBName()
 * @method $this withDBName($value)
 */
class CheckDBNameZonal extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTDERegion()
 * @method $this withTDERegion($value)
 */
class CheckKMSAuthorized extends Rpc
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
class CheckServiceLinkedRole extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CloseAITask extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getContinueEnableBinlog()
 * @method $this withContinueEnableBinlog($value)
 */
class CloseDBClusterMigration extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getForceSwitch()
 * @method $this withForceSwitch($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ContinueDBClusterMigration extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getNodeType()
 * @method $this withNodeType($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getAccountType()
 * @method $this withAccountType($value)
 * @method string getAccountDescription()
 * @method $this withAccountDescription($value)
 * @method string getAccountPrivilege()
 * @method $this withAccountPrivilege($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getTairAccountPassword()
 * @method $this withTairAccountPassword($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAccountPassword()
 * @method $this withAccountPassword($value)
 * @method string getDBName()
 * @method $this withDBName($value)
 * @method string getPrivForAllDB()
 * @method $this withPrivForAllDB($value)
 */
class CreateAccount extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getNodeType()
 * @method $this withNodeType($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getAccountType()
 * @method $this withAccountType($value)
 * @method string getAccountDescription()
 * @method $this withAccountDescription($value)
 * @method string getAccountPrivilege()
 * @method $this withAccountPrivilege($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getTairAccountPassword()
 * @method $this withTairAccountPassword($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAccountPassword()
 * @method $this withAccountPassword($value)
 * @method string getDBName()
 * @method $this withDBName($value)
 * @method string getPrivForAllDB()
 * @method $this withPrivForAllDB($value)
 */
class CreateAccountZonal extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getAliyunOrderId()
 * @method $this withAliyunOrderId($value)
 * @method string getMacAddress()
 * @method $this withMacAddress($value)
 * @method string getSystemIdentifier()
 * @method $this withSystemIdentifier($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class CreateActivationCode extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getComponents()
 * @method $this withComponents($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getArchitecture()
 * @method $this withArchitecture($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getEndpoints()
 * @method $this withEndpoints($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 * @method string getUsedTime()
 * @method $this withUsedTime($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getPolarFSInstanceId()
 * @method $this withPolarFSInstanceId($value)
 * @method string getAutoRenew()
 * @method $this withAutoRenew($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getApplicationType()
 * @method $this withApplicationType($value)
 * @method string getPayType()
 * @method $this withPayType($value)
 */
class CreateApplication extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getEndpointId()
 * @method $this withEndpointId($value)
 * @method string getApplicationId()
 * @method $this withApplicationId($value)
 * @method string getNetType()
 * @method $this withNetType($value)
 */
class CreateApplicationEndpointAddress extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDataLevel2BackupRetentionPeriod()
 * @method $this withDataLevel2BackupRetentionPeriod($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CreateBackup extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getColdStorageInstanceDescription()
 * @method $this withColdStorageInstanceDescription($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CreateColdStorageInstance extends Rpc
{
}

/**
 * @method string getScaleRoNumMax()
 * @method $this withScaleRoNumMax($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCronExpression()
 * @method $this withCronExpression($value)
 * @method string getServerlessRuleMode()
 * @method $this withServerlessRuleMode($value)
 * @method string getScaleApRoNumMax()
 * @method $this withScaleApRoNumMax($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getScaleMax()
 * @method $this withScaleMax($value)
 * @method string getServerlessRuleCpuEnlargeThreshold()
 * @method $this withServerlessRuleCpuEnlargeThreshold($value)
 * @method string getSecondsUntilAutoPause()
 * @method $this withSecondsUntilAutoPause($value)
 * @method string getScaleApRoNumMin()
 * @method $this withScaleApRoNumMin($value)
 * @method string getScaleMin()
 * @method $this withScaleMin($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getServerlessRuleCpuShrinkThreshold()
 * @method $this withServerlessRuleCpuShrinkThreshold($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getScaleRoNumMin()
 * @method $this withScaleRoNumMin($value)
 * @method string getAllowShutDown()
 * @method $this withAllowShutDown($value)
 */
class CreateCronJobPolicyServerless extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAccountPrivilege()
 * @method $this withAccountPrivilege($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getDBDescription()
 * @method $this withDBDescription($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getCollate()
 * @method $this withCollate($value)
 * @method string getDBName()
 * @method $this withDBName($value)
 * @method string getCtype()
 * @method $this withCtype($value)
 * @method string getCharacterSetName()
 * @method $this withCharacterSetName($value)
 */
class CreateDatabase extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getAccountPrivilege()
 * @method $this withAccountPrivilege($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getDBDescription()
 * @method $this withDBDescription($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getCollate()
 * @method $this withCollate($value)
 * @method string getDBName()
 * @method $this withDBName($value)
 * @method string getCtype()
 * @method $this withCtype($value)
 * @method string getCharacterSetName()
 * @method $this withCharacterSetName($value)
 */
class CreateDatabaseZonal extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBClusterDescription()
 * @method $this withDBClusterDescription($value)
 * @method string getProxyClass()
 * @method $this withProxyClass($value)
 * @method string getProxyType()
 * @method $this withProxyType($value)
 * @method string getScaleMax()
 * @method $this withScaleMax($value)
 * @method string getStorageType()
 * @method $this withStorageType($value)
 * @method string getCreationCategory()
 * @method $this withCreationCategory($value)
 * @method string getCloudProvider()
 * @method $this withCloudProvider($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceUid()
 * @method $this withSourceUid($value)
 * @method string getDBNodeClass()
 * @method $this withDBNodeClass($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getEnsRegionId()
 * @method $this withEnsRegionId($value)
 * @method string getCreationOption()
 * @method $this withCreationOption($value)
 * @method array getTag()
 * @method string getSourceResourceId()
 * @method $this withSourceResourceId($value)
 * @method string getScaleMin()
 * @method $this withScaleMin($value)
 * @method string getBackupRetentionPolicyOnClusterDeletion()
 * @method $this withBackupRetentionPolicyOnClusterDeletion($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getSecurityIPList()
 * @method $this withSecurityIPList($value)
 * @method string getDBMinorVersion()
 * @method $this withDBMinorVersion($value)
 * @method string getDnNodeClass()
 * @method $this withDnNodeClass($value)
 * @method string getProvisionedIops()
 * @method $this withProvisionedIops($value)
 * @method string getAutoRenew()
 * @method $this withAutoRenew($value)
 * @method string getHotStandbyCluster()
 * @method $this withHotStandbyCluster($value)
 * @method string getStoragePayType()
 * @method $this withStoragePayType($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getCnNodeNum()
 * @method $this withCnNodeNum($value)
 * @method string getStorageAutoScale()
 * @method $this withStorageAutoScale($value)
 * @method string getTDEStatus()
 * @method $this withTDEStatus($value)
 * @method string getAllowShutDown()
 * @method $this withAllowShutDown($value)
 * @method string getLowerCaseTableNames()
 * @method $this withLowerCaseTableNames($value)
 * @method string getStorageEncryption()
 * @method $this withStorageEncryption($value)
 * @method string getScaleRoNumMax()
 * @method $this withScaleRoNumMax($value)
 * @method string getStandbyAZ()
 * @method $this withStandbyAZ($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDefaultTimeZone()
 * @method $this withDefaultTimeZone($value)
 * @method string getClusterNetworkType()
 * @method $this withClusterNetworkType($value)
 * @method string getStorageEncryptionKey()
 * @method $this withStorageEncryptionKey($value)
 * @method string getCnNodeClass()
 * @method $this withCnNodeClass($value)
 * @method string getParameterGroupId()
 * @method $this withParameterGroupId($value)
 * @method string getEngine()
 * @method $this withEngine($value)
 * @method string getGDNId()
 * @method $this withGDNId($value)
 * @method string getLooseXEngine()
 * @method $this withLooseXEngine($value)
 * @method string getLoosePolarLogBin()
 * @method $this withLoosePolarLogBin($value)
 * @method string getArchitecture()
 * @method $this withArchitecture($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getLooseXEngineUseMemoryPct()
 * @method $this withLooseXEngineUseMemoryPct($value)
 * @method string getUsedTime()
 * @method $this withUsedTime($value)
 * @method string getBurstingEnabled()
 * @method $this withBurstingEnabled($value)
 * @method string getTargetMinorVersion()
 * @method $this withTargetMinorVersion($value)
 * @method string getDBNodeNum()
 * @method $this withDBNodeNum($value)
 * @method string getAccountPassword()
 * @method $this withAccountPassword($value)
 * @method string getStorageUpperBound()
 * @method $this withStorageUpperBound($value)
 * @method string getVPCId()
 * @method $this withVPCId($value)
 * @method string getScaleRoNumMin()
 * @method $this withScaleRoNumMin($value)
 * @method string getDBType()
 * @method $this withDBType($value)
 * @method string getDBVersion()
 * @method $this withDBVersion($value)
 * @method string getStrictConsistency()
 * @method $this withStrictConsistency($value)
 * @method string getCloneDataPoint()
 * @method $this withCloneDataPoint($value)
 * @method string getPayType()
 * @method $this withPayType($value)
 * @method string getStorageSpace()
 * @method $this withStorageSpace($value)
 * @method string getServerlessType()
 * @method $this withServerlessType($value)
 * @method string getDnNodeNum()
 * @method $this withDnNodeNum($value)
 */
class CreateDBCluster extends Rpc
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
 * @method string getAutoAddNewNodes()
 * @method $this withAutoAddNewNodes($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getPolarSccWaitTimeout()
 * @method $this withPolarSccWaitTimeout($value)
 * @method string getReadWriteMode()
 * @method $this withReadWriteMode($value)
 * @method string getEndpointType()
 * @method $this withEndpointType($value)
 * @method string getPolarSccTimeoutAction()
 * @method $this withPolarSccTimeoutAction($value)
 * @method string getEndpointSubCluster()
 * @method $this withEndpointSubCluster($value)
 * @method string getStandbyVSwitchId()
 * @method $this withStandbyVSwitchId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEndpointConfig()
 * @method $this withEndpointConfig($value)
 * @method string getDBEndpointDescription()
 * @method $this withDBEndpointDescription($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getPolarFsInstanceId()
 * @method $this withPolarFsInstanceId($value)
 * @method string getNodes()
 * @method $this withNodes($value)
 * @method string getSccMode()
 * @method $this withSccMode($value)
 * @method string getVPCId()
 * @method $this withVPCId($value)
 */
class CreateDBClusterEndpoint extends Rpc
{
}

/**
 * @method string getAutoAddNewNodes()
 * @method $this withAutoAddNewNodes($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getPolarSccWaitTimeout()
 * @method $this withPolarSccWaitTimeout($value)
 * @method string getReadWriteMode()
 * @method $this withReadWriteMode($value)
 * @method string getEndpointType()
 * @method $this withEndpointType($value)
 * @method string getPolarSccTimeoutAction()
 * @method $this withPolarSccTimeoutAction($value)
 * @method string getEndpointSubCluster()
 * @method $this withEndpointSubCluster($value)
 * @method string getStandbyVSwitchId()
 * @method $this withStandbyVSwitchId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEndpointConfig()
 * @method $this withEndpointConfig($value)
 * @method string getDBEndpointDescription()
 * @method $this withDBEndpointDescription($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getNodes()
 * @method $this withNodes($value)
 * @method string getSccMode()
 * @method $this withSccMode($value)
 * @method string getVPCId()
 * @method $this withVPCId($value)
 */
class CreateDBClusterEndpointZonal extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getConnectionStringPrefix()
 * @method $this withConnectionStringPrefix($value)
 * @method array getZoneInfo()
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getDBEndpointId()
 * @method $this withDBEndpointId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getNetType()
 * @method $this withNetType($value)
 * @method string getVPCId()
 * @method $this withVPCId($value)
 */
class CreateDBEndpointAddress extends Rpc
{

    /**
     * @param array $zoneInfo
     *
     * @return $this
     */
	public function withZoneInfo(array $zoneInfo)
	{
	    $this->data['ZoneInfo'] = $zoneInfo;
		foreach ($zoneInfo as $depth1 => $depth1Value) {
			if(isset($depth1Value['VSwitchId'])){
				$this->options['query']['ZoneInfo.' . ($depth1 + 1) . '.VSwitchId'] = $depth1Value['VSwitchId'];
			}
			if(isset($depth1Value['ZoneId'])){
				$this->options['query']['ZoneInfo.' . ($depth1 + 1) . '.ZoneId'] = $depth1Value['ZoneId'];
			}
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSourceDBName()
 * @method $this withSourceDBName($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getTargetDBName()
 * @method $this withTargetDBName($value)
 * @method string getTargetIp()
 * @method $this withTargetIp($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getDBLinkName()
 * @method $this withDBLinkName($value)
 * @method string getTargetPort()
 * @method $this withTargetPort($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getTargetDBInstanceName()
 * @method $this withTargetDBInstanceName($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getTargetDBPasswd()
 * @method $this withTargetDBPasswd($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTargetDBAccount()
 * @method $this withTargetDBAccount($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 */
class CreateDBLink extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getEndpointBindList()
 * @method $this withEndpointBindList($value)
 * @method string getPlannedEndTime()
 * @method $this withPlannedEndTime($value)
 * @method string getCloudProvider()
 * @method $this withCloudProvider($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getDBNodeType()
 * @method $this withDBNodeType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPlannedStartTime()
 * @method $this withPlannedStartTime($value)
 * @method array getDBNode()
 * @method string getImciSwitch()
 * @method $this withImciSwitch($value)
 */
class CreateDBNodes extends Rpc
{

    /**
     * @param array $dBNode
     *
     * @return $this
     */
	public function withDBNode(array $dBNode)
	{
	    $this->data['DBNode'] = $dBNode;
		foreach ($dBNode as $depth1 => $depth1Value) {
			if(isset($depth1Value['TargetClass'])){
				$this->options['query']['DBNode.' . ($depth1 + 1) . '.TargetClass'] = $depth1Value['TargetClass'];
			}
			if(isset($depth1Value['ZoneId'])){
				$this->options['query']['DBNode.' . ($depth1 + 1) . '.ZoneId'] = $depth1Value['ZoneId'];
			}
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSourceDBName()
 * @method $this withSourceDBName($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 * @method string getDBNames()
 * @method $this withDBNames($value)
 * @method string getExtensions()
 * @method $this withExtensions($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 */
class CreateExtensions extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getGDNDescription()
 * @method $this withGDNDescription($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEnableGlobalDomainName()
 * @method $this withEnableGlobalDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAccountPassword()
 * @method $this withAccountPassword($value)
 * @method string getDBName()
 * @method $this withDBName($value)
 * @method string getGDNVersion()
 * @method $this withGDNVersion($value)
 */
class CreateGlobalDatabaseNetwork extends Rpc
{
}

/**
 * @method string getDestinationType()
 * @method $this withDestinationType($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getSourceType()
 * @method $this withSourceType($value)
 * @method string getFreezeSourceDuringSync()
 * @method $this withFreezeSourceDuringSync($value)
 * @method string getSourceId()
 * @method $this withSourceId($value)
 * @method string getDestinationRegion()
 * @method $this withDestinationRegion($value)
 * @method string getDestinationId()
 * @method $this withDestinationId($value)
 * @method string getSourceFileSystemPath()
 * @method $this withSourceFileSystemPath($value)
 * @method string getDestinationFileSystemPath()
 * @method $this withDestinationFileSystemPath($value)
 * @method string getSourceRegion()
 * @method $this withSourceRegion($value)
 */
class CreateGlobalDataNetwork extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getGIpList()
 * @method $this withGIpList($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getSecurityIPType()
 * @method $this withSecurityIPType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getWhitelistNetType()
 * @method $this withWhitelistNetType($value)
 * @method string getGlobalIgName()
 * @method $this withGlobalIgName($value)
 */
class CreateGlobalSecurityIPGroup extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getNotes()
 * @method $this withNotes($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getTargetIp()
 * @method $this withTargetIp($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getTargetPort()
 * @method $this withTargetPort($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getChannelName()
 * @method $this withChannelName($value)
 * @method string getTargetDBClusterId()
 * @method $this withTargetDBClusterId($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 */
class CreateNetworkChannel extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getEngine()
 * @method $this withEngine($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CreateOrGetVirtualLicenseOrder extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBType()
 * @method $this withDBType($value)
 * @method string getDBVersion()
 * @method $this withDBVersion($value)
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
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CreateServiceLinkedRole extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getStorageType()
 * @method $this withStorageType($value)
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
 * @method string getStorageClass()
 * @method $this withStorageClass($value)
 */
class CreateStoragePlan extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
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
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteAccountZonal extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 */
class DeleteAIDBCluster extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getApplicationId()
 * @method $this withApplicationId($value)
 */
class DeleteApplication extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getEndpointId()
 * @method $this withEndpointId($value)
 * @method string getApplicationId()
 * @method $this withApplicationId($value)
 * @method string getNetType()
 * @method $this withNetType($value)
 */
class DeleteApplicationEndpointAddress extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getBackupId()
 * @method $this withBackupId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteBackup extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
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
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBName()
 * @method $this withDBName($value)
 */
class DeleteDatabaseZonal extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getBackupRetentionPolicyOnClusterDeletion()
 * @method $this withBackupRetentionPolicyOnClusterDeletion($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteDBCluster extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBEndpointId()
 * @method $this withDBEndpointId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPolarFsInstanceId()
 * @method $this withPolarFsInstanceId($value)
 */
class DeleteDBClusterEndpoint extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBEndpointId()
 * @method $this withDBEndpointId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteDBClusterEndpointZonal extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBEndpointId()
 * @method $this withDBEndpointId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getNetType()
 * @method $this withNetType($value)
 */
class DeleteDBEndpointAddress extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBLinkName()
 * @method $this withDBLinkName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteDBLink extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method array getDBNodeId()
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getCloudProvider()
 * @method $this withCloudProvider($value)
 * @method string getDBNodeType()
 * @method $this withDBNodeType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteDBNodes extends Rpc
{

    /**
     * @param array $dBNodeId
     *
     * @return $this
     */
	public function withDBNodeId(array $dBNodeId)
	{
	    $this->data['DBNodeId'] = $dBNodeId;
		foreach ($dBNodeId as $i => $iValue) {
			$this->options['query']['DBNodeId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getRolePrivilegeNameList()
 * @method $this withRolePrivilegeNameList($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteEncryptionDBRolePrivilege extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBNames()
 * @method $this withDBNames($value)
 * @method string getExtensions()
 * @method $this withExtensions($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 */
class DeleteExtensions extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRuleNameList()
 * @method $this withRuleNameList($value)
 */
class DeleteFirewallRules extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getGDNId()
 * @method $this withGDNId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteGlobalDatabaseNetwork extends Rpc
{
}

/**
 * @method string getNetworkId()
 * @method $this withNetworkId($value)
 */
class DeleteGlobalDataNetwork extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getGlobalSecurityGroupId()
 * @method $this withGlobalSecurityGroupId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getGlobalIgName()
 * @method $this withGlobalIgName($value)
 */
class DeleteGlobalSecurityIPGroup extends Rpc
{
}

/**
 * @method string getInterfaceVersion()
 * @method $this withInterfaceVersion($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getRuleNameList()
 * @method $this withRuleNameList($value)
 */
class DeleteMaskingRules extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getChannelName()
 * @method $this withChannelName($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 */
class DeleteNetworkChannel extends Rpc
{

    /** @var string */
    public $scheme = 'https';
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
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteParameterGroup extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRuleNameList()
 * @method $this withRuleNameList($value)
 */
class DeleteSQLRateLimitingRules extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getNodeType()
 * @method $this withNodeType($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
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
 * @method string getNodeType()
 * @method $this withNodeType($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class DescribeAccountsZonal extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getActivationCodeId()
 * @method $this withActivationCodeId($value)
 * @method string getAliyunOrderId()
 * @method $this withAliyunOrderId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeActivationCodeDetails extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getAliyunOrderId()
 * @method $this withAliyunOrderId($value)
 * @method string getMacAddress()
 * @method $this withMacAddress($value)
 * @method string getSystemIdentifier()
 * @method $this withSystemIdentifier($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeActivationCodes extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeActiveOperationMaintainConf extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getChangeLevel()
 * @method $this withChangeLevel($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getProductName()
 * @method $this withProductName($value)
 * @method string getEngineType()
 * @method $this withEngineType($value)
 * @method string getTaskType()
 * @method $this withTaskType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getAllowCancel()
 * @method $this withAllowCancel($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBType()
 * @method $this withDBType($value)
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
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeAIDBClusterAttribute extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getKey()
 * @method $this withKey($value)
 * @method string getApiKey()
 * @method $this withApiKey($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 */
class DescribeAIDBClusterPerformance extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getAiNodeType()
 * @method $this withAiNodeType($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBClusterDescription()
 * @method $this withDBClusterDescription($value)
 * @method string getDBClusterStatus()
 * @method $this withDBClusterStatus($value)
 * @method string getDescribeType()
 * @method $this withDescribeType($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method array getTag()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getRelativeDBClusterId()
 * @method $this withRelativeDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTargetPolarFsInstanceId()
 * @method $this withTargetPolarFsInstanceId($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getPayType()
 * @method $this withPayType($value)
 * @method string getDBClusterIds()
 * @method $this withDBClusterIds($value)
 */
class DescribeAIDBClusters extends Rpc
{

    /** @var string */
    public $scheme = 'https';

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
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeAITaskStatus extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getApplicationId()
 * @method $this withApplicationId($value)
 */
class DescribeApplicationAttribute extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getComponentIdList()
 * @method $this withComponentIdList($value)
 * @method string getApplicationId()
 * @method $this withApplicationId($value)
 */
class DescribeApplicationParameters extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getApplicationIds()
 * @method $this withApplicationIds($value)
 */
class DescribeApplications extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getApplicationId()
 * @method $this withApplicationId($value)
 */
class DescribeApplicationServerlessConf extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getCloudProvider()
 * @method $this withCloudProvider($value)
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
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getDBClusterIds()
 * @method $this withDBClusterIds($value)
 */
class DescribeAutoRenewAttribute extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeAvailableCrossRegions extends Rpc
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
 * @method string getSubGroupName()
 * @method $this withSubGroupName($value)
 * @method string getBackupRegion()
 * @method $this withBackupRegion($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeBackupLogs extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeBackupPolicy extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeBackupRegions extends Rpc
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
 * @method string getBackupRegion()
 * @method $this withBackupRegion($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getBackupId()
 * @method $this withBackupId($value)
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
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getBackupMode()
 * @method $this withBackupMode($value)
 */
class DescribeBackupTasks extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
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
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getCommodityCode()
 * @method $this withCommodityCode($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getMasterHa()
 * @method $this withMasterHa($value)
 * @method string getOrderType()
 * @method $this withOrderType($value)
 */
class DescribeClassList extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDescribeType()
 * @method $this withDescribeType($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getTableName()
 * @method $this withTableName($value)
 * @method string getObjectType()
 * @method $this withObjectType($value)
 * @method string getEngineType()
 * @method $this withEngineType($value)
 * @method string getExpireTime()
 * @method $this withExpireTime($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBName()
 * @method $this withDBName($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getDownloadNetType()
 * @method $this withDownloadNetType($value)
 */
class DescribeColdStorageInstance extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeCronJobPolicyServerless extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getStorageType()
 * @method $this withStorageType($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getDBType()
 * @method $this withDBType($value)
 * @method string getDBVersion()
 * @method $this withDBVersion($value)
 */
class DescribeCrossCloudLevels extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getCloudProvider()
 * @method $this withCloudProvider($value)
 * @method string getCrossCloudRegionId()
 * @method $this withCrossCloudRegionId($value)
 * @method string getDBType()
 * @method $this withDBType($value)
 */
class DescribeCrossCloudRegion extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getCloudProvider()
 * @method $this withCloudProvider($value)
 * @method string getAliyunRegionId()
 * @method $this withAliyunRegionId($value)
 * @method string getCrossCloudRegionId()
 * @method $this withCrossCloudRegionId($value)
 */
class DescribeCrossCloudRegionMappingToAliyun extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeDasConfig extends Rpc
{

    /** @var string */
    public $scheme = 'https';
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
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
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
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBName()
 * @method $this withDBName($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class DescribeDatabasesZonal extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeDBClusterAccessWhitelist extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDescribeType()
 * @method $this withDescribeType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeDBClusterAttribute extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDescribeType()
 * @method $this withDescribeType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeDbClusterAttributeZonal extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeDBClusterAuditLogCollector extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBNodeClass()
 * @method $this withDBNodeClass($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBType()
 * @method $this withDBType($value)
 * @method string getDBVersion()
 * @method $this withDBVersion($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getPayType()
 * @method $this withPayType($value)
 */
class DescribeDBClusterAvailableResources extends Rpc
{
}

/**
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
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeDBClusterConnectivity extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 */
class DescribeDBClusterEncryptionKey extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBEndpointId()
 * @method $this withDBEndpointId($value)
 * @method string getDescribeType()
 * @method $this withDescribeType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPolarFsInstanceId()
 * @method $this withPolarFsInstanceId($value)
 */
class DescribeDBClusterEndpoints extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBEndpointId()
 * @method $this withDBEndpointId($value)
 * @method string getDescribeType()
 * @method $this withDescribeType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeDBClusterEndpointsZonal extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeDBClusterMigration extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeDBClusterMonitor extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getConnectionStringType()
 * @method $this withConnectionStringType($value)
 */
class DescribeDBClusterNetInfo extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDescribeType()
 * @method $this withDescribeType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeDBClusterParameters extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getSubGroupName()
 * @method $this withSubGroupName($value)
 * @method string getKey()
 * @method $this withKey($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getMetric()
 * @method $this withMetric($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 */
class DescribeDBClusterPerformance extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeDBClusterProxy extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBClusterDescription()
 * @method $this withDBClusterDescription($value)
 * @method string getDBClusterStatus()
 * @method $this withDBClusterStatus($value)
 * @method string getConnectionString()
 * @method $this withConnectionString($value)
 * @method string getRecentExpirationInterval()
 * @method $this withRecentExpirationInterval($value)
 * @method string getDescribeType()
 * @method $this withDescribeType($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getDBNodeIds()
 * @method $this withDBNodeIds($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getRecentCreationInterval()
 * @method $this withRecentCreationInterval($value)
 * @method string getExpired()
 * @method $this withExpired($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method array getTag()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBType()
 * @method $this withDBType($value)
 * @method string getDBVersion()
 * @method $this withDBVersion($value)
 * @method string getPayType()
 * @method $this withPayType($value)
 * @method string getDBClusterIds()
 * @method $this withDBClusterIds($value)
 */
class DescribeDBClusters extends Rpc
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
 * @method string getRequestType()
 * @method $this withRequestType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeDBClusterServerlessConf extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getEndpointId()
 * @method $this withEndpointId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeDBClusterSSL extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBClusterDescription()
 * @method $this withDBClusterDescription($value)
 * @method string getIsDeleted()
 * @method $this withIsDeleted($value)
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
 * @method string getDBType()
 * @method $this withDBType($value)
 * @method string getDBVersion()
 * @method $this withDBVersion($value)
 * @method string getDBClusterIds()
 * @method $this withDBClusterIds($value)
 */
class DescribeDBClustersWithBackups extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBClusterDescription()
 * @method $this withDBClusterDescription($value)
 * @method string getDBClusterStatus()
 * @method $this withDBClusterStatus($value)
 * @method string getConnectionString()
 * @method $this withConnectionString($value)
 * @method string getRecentExpirationInterval()
 * @method $this withRecentExpirationInterval($value)
 * @method string getDescribeType()
 * @method $this withDescribeType($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getDBNodeIds()
 * @method $this withDBNodeIds($value)
 * @method string getCloudProvider()
 * @method $this withCloudProvider($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getRecentCreationInterval()
 * @method $this withRecentCreationInterval($value)
 * @method string getExpired()
 * @method $this withExpired($value)
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
 * @method string getDBType()
 * @method $this withDBType($value)
 * @method string getDBVersion()
 * @method $this withDBVersion($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getPayType()
 * @method $this withPayType($value)
 * @method string getDBClusterIds()
 * @method $this withDBClusterIds($value)
 */
class DescribeDBClustersZonal extends Rpc
{

    /** @var string */
    public $scheme = 'https';

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
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeDBClusterTDE extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDescribeType()
 * @method $this withDescribeType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeDBClusterVersion extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDescribeType()
 * @method $this withDescribeType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeDBClusterVersionZonal extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeDBInitializeVariable extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
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
 */
class DescribeDBInstancePerformance extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBLinkName()
 * @method $this withDBLinkName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeDBLinks extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBNodeId()
 * @method $this withDBNodeId($value)
 * @method string getSimulateListId()
 * @method $this withSimulateListId($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getLogType()
 * @method $this withLogType($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getSwitchId()
 * @method $this withSwitchId($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDescribeSimulateSwitchMode()
 * @method $this withDescribeSimulateSwitchMode($value)
 * @method string getSimulateStatusList()
 * @method $this withSimulateStatusList($value)
 * @method string getSimulateModeList()
 * @method $this withSimulateModeList($value)
 */
class DescribeDBLogFiles extends Rpc
{
}

/**
 * @method string getCreationCategory()
 * @method $this withCreationCategory($value)
 * @method string getArchitecture()
 * @method $this withArchitecture($value)
 * @method string getDBMinorVersion()
 * @method $this withDBMinorVersion($value)
 * @method string getDBType()
 * @method $this withDBType($value)
 * @method string getDBVersion()
 * @method $this withDBVersion($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 */
class DescribeDBMiniEngineVersions extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBNodeId()
 * @method $this withDBNodeId($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getKey()
 * @method $this withKey($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getMetric()
 * @method $this withMetric($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 */
class DescribeDBNodePerformance extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBNodeIds()
 * @method $this withDBNodeIds($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeDBNodesParameters extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBNodeId()
 * @method $this withDBNodeId($value)
 * @method string getDBEndpointId()
 * @method $this withDBEndpointId($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getKey()
 * @method $this withKey($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getMetric()
 * @method $this withMetric($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 */
class DescribeDBProxyPerformance extends Rpc
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
 * @method string getBackupRegion()
 * @method $this withBackupRegion($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getBackupId()
 * @method $this withBackupId($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getBackupStatus()
 * @method $this withBackupStatus($value)
 * @method string getBackupMode()
 * @method $this withBackupMode($value)
 */
class DescribeDetachedBackups extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getRolePrivilegeNameList()
 * @method $this withRolePrivilegeNameList($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeEncryptionDBRolePrivilege extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 */
class DescribeEncryptionDBSecret extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBName()
 * @method $this withDBName($value)
 */
class DescribeExtensions extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRuleNameList()
 * @method $this withRuleNameList($value)
 */
class DescribeFirewallRules extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getGDNId()
 * @method $this withGDNId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeGlobalDatabaseNetwork extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getFilterRegion()
 * @method $this withFilterRegion($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getGDNId()
 * @method $this withGDNId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getGDNDescription()
 * @method $this withGDNDescription($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBType()
 * @method $this withDBType($value)
 */
class DescribeGlobalDatabaseNetworks extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class DescribeGlobalDataNetworkList extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getGlobalSecurityGroupId()
 * @method $this withGlobalSecurityGroupId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeGlobalSecurityIPGroup extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeGlobalSecurityIPGroupRelation extends Rpc
{
}

/**
 * @method string getDBNodeId()
 * @method $this withDBNodeId($value)
 * @method string getSimulateListId()
 * @method $this withSimulateListId($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getLogType()
 * @method $this withLogType($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getSwitchId()
 * @method $this withSwitchId($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getDescribeSimulateSwitchMode()
 * @method $this withDescribeSimulateSwitchMode($value)
 * @method string getSimulateStatusList()
 * @method $this withSimulateStatusList($value)
 * @method string getSimulateModeList()
 * @method $this withSimulateModeList($value)
 */
class DescribeHALogs extends Rpc
{

    /** @var string */
    public $scheme = 'https';
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

    /** @var string */
    public $scheme = 'https';
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

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAliyunOrderId()
 * @method $this withAliyunOrderId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLicenseOrderDetails extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getVirtualOrder()
 * @method $this withVirtualOrder($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getAliyunOrderId()
 * @method $this withAliyunOrderId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getPurchaseChannel()
 * @method $this withPurchaseChannel($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPackageType()
 * @method $this withPackageType($value)
 */
class DescribeLicenseOrders extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLocalAvailableRecoveryTime extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLogBackupPolicy extends Rpc
{
}

/**
 * @method string getInterfaceVersion()
 * @method $this withInterfaceVersion($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getRuleNameList()
 * @method $this withRuleNameList($value)
 */
class DescribeMaskingRules extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getRegionCode()
 * @method $this withRegionCode($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getRestoreTime()
 * @method $this withRestoreTime($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getBackupId()
 * @method $this withBackupId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getGetDbName()
 * @method $this withGetDbName($value)
 */
class DescribeMetaList extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeModifyParameterLog extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getChannelName()
 * @method $this withChannelName($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 */
class DescribeNetworkChannel extends Rpc
{

    /** @var string */
    public $scheme = 'https';
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
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBType()
 * @method $this withDBType($value)
 */
class DescribeParameterGroup extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBType()
 * @method $this withDBType($value)
 * @method string getDBVersion()
 * @method $this withDBVersion($value)
 */
class DescribeParameterGroups extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBType()
 * @method $this withDBType($value)
 * @method string getDBVersion()
 * @method $this withDBVersion($value)
 */
class DescribeParameterTemplates extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getIsHistory()
 * @method $this withIsHistory($value)
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
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 */
class DescribePendingMaintenanceAction extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getIsHistory()
 * @method $this withIsHistory($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribePendingMaintenanceActions extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribePolarSQLCollectorPolicy extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 */
class DescribeRdsVpcs extends Rpc
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
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 */
class DescribeRdsVSwitchs extends Rpc
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
class DescribeRegions extends Rpc
{
}

class DescribeResourcePackages extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBClusterDescription()
 * @method $this withDBClusterDescription($value)
 * @method string getPlannedEndTime()
 * @method $this withPlannedEndTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOrderId()
 * @method $this withOrderId($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPlannedStartTime()
 * @method $this withPlannedStartTime($value)
 * @method string getTaskAction()
 * @method $this withTaskAction($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeScheduleTasks extends Rpc
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
 * @method string getNodeId()
 * @method $this withNodeId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
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
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
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
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRuleNameList()
 * @method $this withRuleNameList($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class DescribeSQLRateLimitingRules extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBNodeId()
 * @method $this withDBNodeId($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeTasks extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getCreationCategory()
 * @method $this withCreationCategory($value)
 * @method string getSourceDBClusterId()
 * @method $this withSourceDBClusterId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBType()
 * @method $this withDBType($value)
 * @method string getDBVersion()
 * @method $this withDBVersion($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeUpgradeReport extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTDERegion()
 * @method $this withTDERegion($value)
 */
class DescribeUserEncryptionKeyList extends Rpc
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
 * @method string getProduct()
 * @method $this withProduct($value)
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
class DescribeVpcs extends Rpc
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
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method array getVSwitchIds()
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
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
 * @method string getProductCode()
 * @method $this withProductCode($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getEngine()
 * @method $this withEngine($value)
 * @method string getExtra()
 * @method $this withExtra($value)
 */
class DescribeZones extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getCleanData()
 * @method $this withCleanData($value)
 */
class DisableDBClusterOrca extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DisableDBClusterServerless extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class EnableDBClusterOrca extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getScaleRoNumMax()
 * @method $this withScaleRoNumMax($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getScaleApRoNumMax()
 * @method $this withScaleApRoNumMax($value)
 * @method string getScaleMax()
 * @method $this withScaleMax($value)
 * @method string getScaleApRoNumMin()
 * @method $this withScaleApRoNumMin($value)
 * @method string getScaleMin()
 * @method $this withScaleMin($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getScaleRoNumMin()
 * @method $this withScaleRoNumMin($value)
 */
class EnableDBClusterServerless extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getEnable()
 * @method $this withEnable($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRuleNameList()
 * @method $this withRuleNameList($value)
 */
class EnableFirewallRules extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getEnable()
 * @method $this withEnable($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRuleNameList()
 * @method $this withRuleNameList($value)
 */
class EnableSQLRateLimitingRules extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBInstanceConnType()
 * @method $this withDBInstanceConnType($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getDBNodeClass()
 * @method $this withDBNodeClass($value)
 * @method string getDispenseMode()
 * @method $this withDispenseMode($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getNeedMaxScaleLink()
 * @method $this withNeedMaxScaleLink($value)
 * @method string getDBType()
 * @method $this withDBType($value)
 * @method string getDBVersion()
 * @method $this withDBVersion($value)
 * @method string getSubDomain()
 * @method $this withSubDomain($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 */
class EvaluateRegionResource extends Rpc
{
}

/**
 * @method string getProxyInfo()
 * @method $this withProxyInfo($value)
 */
class ExecuteCrossCloudOpenAPI extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getRollBackForDisaster()
 * @method $this withRollBackForDisaster($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getTargetZoneType()
 * @method $this withTargetZoneType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTargetDBNodeId()
 * @method $this withTargetDBNodeId($value)
 * @method string getIsForce()
 * @method $this withIsForce($value)
 */
class FailoverDBCluster extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getRollBackForDisaster()
 * @method $this withRollBackForDisaster($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getTargetZoneType()
 * @method $this withTargetZoneType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTargetDBNodeId()
 * @method $this withTargetDBNodeId($value)
 * @method string getIsForce()
 * @method $this withIsForce($value)
 */
class FailoverDBClusterZonal extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCreationCategory()
 * @method $this withCreationCategory($value)
 * @method string getSourceDBClusterId()
 * @method $this withSourceDBClusterId($value)
 * @method string getReserve()
 * @method $this withReserve($value)
 * @method string getCreationOption()
 * @method $this withCreationOption($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBName()
 * @method $this withDBName($value)
 * @method string getDBType()
 * @method $this withDBType($value)
 * @method string getDBVersion()
 * @method $this withDBVersion($value)
 */
class GenerateUpgradeReportForSyncClone extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAccountPrivilege()
 * @method $this withAccountPrivilege($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
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
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getAccountPrivilege()
 * @method $this withAccountPrivilege($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBName()
 * @method $this withDBName($value)
 */
class GrantAccountPrivilegeZonal extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getProductCode()
 * @method $this withProductCode($value)
 * @method string getOrderStatus()
 * @method $this withOrderStatus($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getCategory()
 * @method $this withCategory($value)
 */
class ListOrders extends Rpc
{

    /** @var string */
    public $scheme = 'https';
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
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 */
class ListTagResourcesForRegion extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ManuallyStartDBCluster extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAccountDescription()
 * @method $this withAccountDescription($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyAccountDescription extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getAccountDescription()
 * @method $this withAccountDescription($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyAccountDescriptionZonal extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getAccountLockState()
 * @method $this withAccountLockState($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAccountPasswordValidTime()
 * @method $this withAccountPasswordValidTime($value)
 */
class ModifyAccountLockState extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPasswordType()
 * @method $this withPasswordType($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getNewAccountPassword()
 * @method $this withNewAccountPassword($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyAccountPassword extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getPasswordType()
 * @method $this withPasswordType($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getNewAccountPassword()
 * @method $this withNewAccountPassword($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyAccountPasswordZonal extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCycleTime()
 * @method $this withCycleTime($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getMaintainStartTime()
 * @method $this withMaintainStartTime($value)
 * @method string getCycleType()
 * @method $this withCycleType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getMaintainEndTime()
 * @method $this withMaintainEndTime($value)
 * @method string getComment()
 * @method $this withComment($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ModifyActiveOperationMaintainConf extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTaskIds()
 * @method $this withTaskIds($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getSwitchTime()
 * @method $this withSwitchTime($value)
 * @method string getEngineType()
 * @method $this withEngineType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getImmediateStart()
 * @method $this withImmediateStart($value)
 */
class ModifyActiveOperationTasks extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBClusterDescription()
 * @method $this withDBClusterDescription($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyAIDBClusterDescription extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getApplicationId()
 * @method $this withApplicationId($value)
 */
class ModifyApplicationDescription extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getParameterTemplateId()
 * @method $this withParameterTemplateId($value)
 * @method string getParameterName()
 * @method $this withParameterName($value)
 * @method string getApplicationId()
 * @method $this withApplicationId($value)
 * @method string getParameterValue()
 * @method $this withParameterValue($value)
 * @method string getParameters()
 * @method $this withParameters($value)
 */
class ModifyApplicationParameter extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method array getServerlessConfList()
 * @method string getApplicationId()
 * @method $this withApplicationId($value)
 */
class ModifyApplicationServerlessConf extends Rpc
{

    /** @var string */
    public $scheme = 'https';

    /**
     * @param array $serverlessConfList
     *
     * @return $this
     */
	public function withServerlessConfList(array $serverlessConfList)
	{
	    $this->data['ServerlessConfList'] = $serverlessConfList;
		foreach ($serverlessConfList as $depth1 => $depth1Value) {
			if(isset($depth1Value['ComponentType'])){
				$this->options['query']['ServerlessConfList.' . ($depth1 + 1) . '.ComponentType'] = $depth1Value['ComponentType'];
			}
			if(isset($depth1Value['ScaleMax'])){
				$this->options['query']['ServerlessConfList.' . ($depth1 + 1) . '.ScaleMax'] = $depth1Value['ScaleMax'];
			}
			if(isset($depth1Value['ScaleMin'])){
				$this->options['query']['ServerlessConfList.' . ($depth1 + 1) . '.ScaleMin'] = $depth1Value['ScaleMin'];
			}
		}

		return $this;
    }
}

/**
 * @method string getApplicationId()
 * @method $this withApplicationId($value)
 * @method string getSecurityIPArrayName()
 * @method $this withSecurityIPArrayName($value)
 * @method string getModifyMode()
 * @method $this withModifyMode($value)
 * @method string getComponentId()
 * @method $this withComponentId($value)
 * @method string getSecurityIPList()
 * @method $this withSecurityIPList($value)
 * @method string getSecurityGroups()
 * @method $this withSecurityGroups($value)
 */
class ModifyApplicationWhitelist extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDuration()
 * @method $this withDuration($value)
 * @method string getCloudProvider()
 * @method $this withCloudProvider($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
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
 * @method string getDBClusterIds()
 * @method $this withDBClusterIds($value)
 */
class ModifyAutoRenewAttribute extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDataLevel2BackupRetentionPeriod()
 * @method $this withDataLevel2BackupRetentionPeriod($value)
 * @method string getAdvancedDataPolicies()
 * @method $this withAdvancedDataPolicies($value)
 * @method string getDataLevel1BackupPeriod()
 * @method $this withDataLevel1BackupPeriod($value)
 * @method string getDataLevel2BackupPeriod()
 * @method $this withDataLevel2BackupPeriod($value)
 * @method string getPreferredBackupPeriod()
 * @method $this withPreferredBackupPeriod($value)
 * @method string getDataLevel1BackupRetentionPeriod()
 * @method $this withDataLevel1BackupRetentionPeriod($value)
 * @method string getBackupRetentionPolicyOnClusterDeletion()
 * @method $this withBackupRetentionPolicyOnClusterDeletion($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDataLevel2BackupAnotherRegionRetentionPeriod()
 * @method $this withDataLevel2BackupAnotherRegionRetentionPeriod($value)
 * @method string getBackupPolicyLevel()
 * @method $this withBackupPolicyLevel($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPreferredBackupTime()
 * @method $this withPreferredBackupTime($value)
 * @method string getBackupRetentionPeriod()
 * @method $this withBackupRetentionPeriod($value)
 * @method string getBackupFrequency()
 * @method $this withBackupFrequency($value)
 * @method string getDataLevel1BackupFrequency()
 * @method $this withDataLevel1BackupFrequency($value)
 * @method string getDataLevel2BackupAnotherRegionRegion()
 * @method $this withDataLevel2BackupAnotherRegionRegion($value)
 * @method string getDataLevel1BackupTime()
 * @method $this withDataLevel1BackupTime($value)
 */
class ModifyBackupPolicy extends Rpc
{
}

/**
 * @method string getScaleRoNumMax()
 * @method $this withScaleRoNumMax($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCronExpression()
 * @method $this withCronExpression($value)
 * @method string getServerlessRuleMode()
 * @method $this withServerlessRuleMode($value)
 * @method string getScaleApRoNumMax()
 * @method $this withScaleApRoNumMax($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getScaleMax()
 * @method $this withScaleMax($value)
 * @method string getServerlessRuleCpuEnlargeThreshold()
 * @method $this withServerlessRuleCpuEnlargeThreshold($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getSecondsUntilAutoPause()
 * @method $this withSecondsUntilAutoPause($value)
 * @method string getScaleApRoNumMin()
 * @method $this withScaleApRoNumMin($value)
 * @method string getScaleMin()
 * @method $this withScaleMin($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getServerlessRuleCpuShrinkThreshold()
 * @method $this withServerlessRuleCpuShrinkThreshold($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getScaleRoNumMin()
 * @method $this withScaleRoNumMin($value)
 * @method string getAllowShutDown()
 * @method $this withAllowShutDown($value)
 */
class ModifyCronJobPolicyServerless extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getModifyRowCompression()
 * @method $this withModifyRowCompression($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTableMeta()
 * @method $this withTableMeta($value)
 * @method string getStandbyHAMode()
 * @method $this withStandbyHAMode($value)
 * @method string getPlannedEscapeTime()
 * @method $this withPlannedEscapeTime($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDBNodeCrashList()
 * @method $this withDBNodeCrashList($value)
 * @method string getFaultSimulateMode()
 * @method $this withFaultSimulateMode($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getCompressStorage()
 * @method $this withCompressStorage($value)
 * @method string getStorageUpperBound()
 * @method $this withStorageUpperBound($value)
 * @method string getPreferredSimulateStartTime()
 * @method $this withPreferredSimulateStartTime($value)
 * @method string getImciAutoIndex()
 * @method $this withImciAutoIndex($value)
 * @method string getStorageAutoScale()
 * @method $this withStorageAutoScale($value)
 * @method string getFaultInjectionType()
 * @method $this withFaultInjectionType($value)
 * @method string getDataSyncMode()
 * @method $this withDataSyncMode($value)
 */
class ModifyDBCluster extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityIps()
 * @method $this withSecurityIps($value)
 * @method string getDBClusterIPArrayAttribute()
 * @method $this withDBClusterIPArrayAttribute($value)
 * @method string getModifyMode()
 * @method $this withModifyMode($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getWhiteListType()
 * @method $this withWhiteListType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSecurityGroupIds()
 * @method $this withSecurityGroupIds($value)
 * @method string getDBClusterIPArrayName()
 * @method $this withDBClusterIPArrayName($value)
 */
class ModifyDBClusterAccessWhitelist extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPlannedEndTime()
 * @method $this withPlannedEndTime($value)
 * @method string getDBNodeIds()
 * @method $this withDBNodeIds($value)
 * @method string getClearBinlog()
 * @method $this withClearBinlog($value)
 * @method string getParameterGroupId()
 * @method $this withParameterGroupId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPlannedStartTime()
 * @method $this withPlannedStartTime($value)
 * @method string getStandbyClusterIdListNeedToSync()
 * @method $this withStandbyClusterIdListNeedToSync($value)
 * @method string getParameters()
 * @method $this withParameters($value)
 * @method string getFromTimeService()
 * @method $this withFromTimeService($value)
 */
class ModifyDBClusterAndNodesParameters extends Rpc
{
}

/**
 * @method string getStandbyAZ()
 * @method $this withStandbyAZ($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getHotStandbyCluster()
 * @method $this withHotStandbyCluster($value)
 */
class ModifyDBClusterArch extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getCollectorStatus()
 * @method $this withCollectorStatus($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyDBClusterAuditLogCollector extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getProtection()
 * @method $this withProtection($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyDBClusterDeletion extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBClusterDescription()
 * @method $this withDBClusterDescription($value)
 * @method string getSubGroupName()
 * @method $this withSubGroupName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyDBClusterDescription extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBClusterDescription()
 * @method $this withDBClusterDescription($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getSubGroupName()
 * @method $this withSubGroupName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyDBClusterDescriptionZonal extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getAutoAddNewNodes()
 * @method $this withAutoAddNewNodes($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBEndpointId()
 * @method $this withDBEndpointId($value)
 * @method string getPolarSccWaitTimeout()
 * @method $this withPolarSccWaitTimeout($value)
 * @method string getReadWriteMode()
 * @method $this withReadWriteMode($value)
 * @method string getPolarSccTimeoutAction()
 * @method $this withPolarSccTimeoutAction($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEndpointConfig()
 * @method $this withEndpointConfig($value)
 * @method string getDBEndpointDescription()
 * @method $this withDBEndpointDescription($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getNodes()
 * @method $this withNodes($value)
 * @method string getSccMode()
 * @method $this withSccMode($value)
 */
class ModifyDBClusterEndpoint extends Rpc
{
}

/**
 * @method string getAutoAddNewNodes()
 * @method $this withAutoAddNewNodes($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDBEndpointId()
 * @method $this withDBEndpointId($value)
 * @method string getPolarSccWaitTimeout()
 * @method $this withPolarSccWaitTimeout($value)
 * @method string getReadWriteMode()
 * @method $this withReadWriteMode($value)
 * @method string getPolarSccTimeoutAction()
 * @method $this withPolarSccTimeoutAction($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEndpointConfig()
 * @method $this withEndpointConfig($value)
 * @method string getDBEndpointDescription()
 * @method $this withDBEndpointDescription($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getNodes()
 * @method $this withNodes($value)
 * @method string getSccMode()
 * @method $this withSccMode($value)
 */
class ModifyDBClusterEndpointZonal extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getMaintainTime()
 * @method $this withMaintainTime($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyDBClusterMaintainTime extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getConnectionStrings()
 * @method $this withConnectionStrings($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getNewMasterInstanceId()
 * @method $this withNewMasterInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getSourceRDSDBInstanceId()
 * @method $this withSourceRDSDBInstanceId($value)
 * @method string getSwapConnectionString()
 * @method $this withSwapConnectionString($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyDBClusterMigration extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getMigrationConfig()
 * @method $this withMigrationConfig($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyDBClusterMigrationEndpoint extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyDBClusterMonitor extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPlannedEndTime()
 * @method $this withPlannedEndTime($value)
 * @method string getClearBinlog()
 * @method $this withClearBinlog($value)
 * @method string getParameterGroupId()
 * @method $this withParameterGroupId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPlannedStartTime()
 * @method $this withPlannedStartTime($value)
 * @method string getParameters()
 * @method $this withParameters($value)
 * @method string getFromTimeService()
 * @method $this withFromTimeService($value)
 */
class ModifyDBClusterParameters extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPlannedEndTime()
 * @method $this withPlannedEndTime($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getIsSwitchOverForDisaster()
 * @method $this withIsSwitchOverForDisaster($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getPlannedStartTime()
 * @method $this withPlannedStartTime($value)
 * @method string getVPCId()
 * @method $this withVPCId($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getZoneType()
 * @method $this withZoneType($value)
 * @method string getFromTimeService()
 * @method $this withFromTimeService($value)
 */
class ModifyDBClusterPrimaryZone extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getNewResourceGroupId()
 * @method $this withNewResourceGroupId($value)
 */
class ModifyDBClusterResourceGroup extends Rpc
{
}

/**
 * @method string getScaleRoNumMax()
 * @method $this withScaleRoNumMax($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getServerlessRuleMode()
 * @method $this withServerlessRuleMode($value)
 * @method string getScaleApRoNumMax()
 * @method $this withScaleApRoNumMax($value)
 * @method string getScaleMax()
 * @method $this withScaleMax($value)
 * @method string getPlannedEndTime()
 * @method $this withPlannedEndTime($value)
 * @method string getServerlessRuleCpuEnlargeThreshold()
 * @method $this withServerlessRuleCpuEnlargeThreshold($value)
 * @method string getSecondsUntilAutoPause()
 * @method $this withSecondsUntilAutoPause($value)
 * @method string getScaleApRoNumMin()
 * @method $this withScaleApRoNumMin($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 * @method string getScaleMin()
 * @method $this withScaleMin($value)
 * @method string getCrontabJobId()
 * @method $this withCrontabJobId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getServerlessRuleCpuShrinkThreshold()
 * @method $this withServerlessRuleCpuShrinkThreshold($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPlannedStartTime()
 * @method $this withPlannedStartTime($value)
 * @method string getScaleRoNumMin()
 * @method $this withScaleRoNumMin($value)
 * @method string getAllowShutDown()
 * @method $this withAllowShutDown($value)
 * @method string getFromTimeService()
 * @method $this withFromTimeService($value)
 */
class ModifyDBClusterServerlessConf extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getServerKey()
 * @method $this withServerKey($value)
 * @method string getClientCrlEnabled()
 * @method $this withClientCrlEnabled($value)
 * @method string getDBEndpointId()
 * @method $this withDBEndpointId($value)
 * @method string getACL()
 * @method $this withACL($value)
 * @method string getServerCert()
 * @method $this withServerCert($value)
 * @method string getClientCACert()
 * @method $this withClientCACert($value)
 * @method string getSSLAutoRotate()
 * @method $this withSSLAutoRotate($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getCAType()
 * @method $this withCAType($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getClientCACertEnabled()
 * @method $this withClientCACertEnabled($value)
 * @method string getClientCrl()
 * @method $this withClientCrl($value)
 * @method string getNetType()
 * @method $this withNetType($value)
 * @method string getSSLEnabled()
 * @method $this withSSLEnabled($value)
 */
class ModifyDBClusterSSL extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getStorageType()
 * @method $this withStorageType($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getBurstingEnabled()
 * @method $this withBurstingEnabled($value)
 * @method string getProvisionedIops()
 * @method $this withProvisionedIops($value)
 * @method string getModifyType()
 * @method $this withModifyType($value)
 */
class ModifyDBClusterStoragePerformance extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getPlannedEndTime()
 * @method $this withPlannedEndTime($value)
 * @method string getCloudProvider()
 * @method $this withCloudProvider($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPlannedStartTime()
 * @method $this withPlannedStartTime($value)
 * @method string getSubCategory()
 * @method $this withSubCategory($value)
 * @method string getStorageSpace()
 * @method $this withStorageSpace($value)
 */
class ModifyDBClusterStorageSpace extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEncryptionKey()
 * @method $this withEncryptionKey($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getEnableAutomaticRotation()
 * @method $this withEnableAutomaticRotation($value)
 * @method string getRoleArn()
 * @method $this withRoleArn($value)
 * @method string getEncryptNewTables()
 * @method $this withEncryptNewTables($value)
 * @method string getTDEStatus()
 * @method $this withTDEStatus($value)
 */
class ModifyDBClusterTDE extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getExistedEndpointSwitchType()
 * @method $this withExistedEndpointSwitchType($value)
 * @method string getVPCId()
 * @method $this withVPCId($value)
 */
class ModifyDBClusterVpc extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBDescription()
 * @method $this withDBDescription($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
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
 * @method string getDBDescription()
 * @method $this withDBDescription($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBName()
 * @method $this withDBName($value)
 */
class ModifyDBDescriptionZonal extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getConnectionStringPrefix()
 * @method $this withConnectionStringPrefix($value)
 * @method string getDBEndpointId()
 * @method $this withDBEndpointId($value)
 * @method string getPrivateZoneName()
 * @method $this withPrivateZoneName($value)
 * @method string getPrivateZoneAddressPrefix()
 * @method $this withPrivateZoneAddressPrefix($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getPort()
 * @method $this withPort($value)
 * @method string getNetType()
 * @method $this withNetType($value)
 * @method string getVPCId()
 * @method $this withVPCId($value)
 */
class ModifyDBEndpointAddress extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getPlannedEndTime()
 * @method $this withPlannedEndTime($value)
 * @method string getCloudProvider()
 * @method $this withCloudProvider($value)
 * @method string getDBNodeType()
 * @method $this withDBNodeType($value)
 * @method string getDBNodeTargetClass()
 * @method $this withDBNodeTargetClass($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getPlannedFlashingOffTime()
 * @method $this withPlannedFlashingOffTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPlannedStartTime()
 * @method $this withPlannedStartTime($value)
 * @method string getModifyType()
 * @method $this withModifyType($value)
 * @method string getSubCategory()
 * @method $this withSubCategory($value)
 */
class ModifyDBNodeClass extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBNodeId()
 * @method $this withDBNodeId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getConfigName()
 * @method $this withConfigName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getConfigValue()
 * @method $this withConfigValue($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyDBNodeConfig extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBNodeId()
 * @method $this withDBNodeId($value)
 * @method string getDBNodeDescription()
 * @method $this withDBNodeDescription($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyDBNodeDescription extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBNodeId()
 * @method $this withDBNodeId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getHotReplicaMode()
 * @method $this withHotReplicaMode($value)
 */
class ModifyDBNodeHotReplicaMode extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBNodeId()
 * @method $this withDBNodeId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSccMode()
 * @method $this withSccMode($value)
 */
class ModifyDBNodeSccMode extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getPlannedEndTime()
 * @method $this withPlannedEndTime($value)
 * @method string getCloudProvider()
 * @method $this withCloudProvider($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getPlannedFlashingOffTime()
 * @method $this withPlannedFlashingOffTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPlannedStartTime()
 * @method $this withPlannedStartTime($value)
 * @method string getModifyType()
 * @method $this withModifyType($value)
 * @method string getSubCategory()
 * @method $this withSubCategory($value)
 * @method array getDBNode()
 */
class ModifyDBNodesClass extends Rpc
{

    /**
     * @param array $dBNode
     *
     * @return $this
     */
	public function withDBNode(array $dBNode)
	{
	    $this->data['DBNode'] = $dBNode;
		foreach ($dBNode as $depth1 => $depth1Value) {
			if(isset($depth1Value['DBNodeId'])){
				$this->options['query']['DBNode.' . ($depth1 + 1) . '.DBNodeId'] = $depth1Value['DBNodeId'];
			}
			if(isset($depth1Value['TargetClass'])){
				$this->options['query']['DBNode.' . ($depth1 + 1) . '.TargetClass'] = $depth1Value['TargetClass'];
			}
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPlannedEndTime()
 * @method $this withPlannedEndTime($value)
 * @method string getDBNodeIds()
 * @method $this withDBNodeIds($value)
 * @method string getParameterGroupId()
 * @method $this withParameterGroupId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPlannedStartTime()
 * @method $this withPlannedStartTime($value)
 * @method string getParameters()
 * @method $this withParameters($value)
 * @method string getFromTimeService()
 * @method $this withFromTimeService($value)
 */
class ModifyDBNodesParameters extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getRolePrivilegeConfig()
 * @method $this withRolePrivilegeConfig($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRolePrivilegeName()
 * @method $this withRolePrivilegeName($value)
 */
class ModifyEncryptionDBRolePrivilege extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEncryptionKey()
 * @method $this withEncryptionKey($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getEncryptionDBStatus()
 * @method $this withEncryptionDBStatus($value)
 * @method string getRoleArn()
 * @method $this withRoleArn($value)
 */
class ModifyEncryptionDBSecret extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getRuleName()
 * @method $this withRuleName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRuleConfig()
 * @method $this withRuleConfig($value)
 */
class ModifyFirewallRules extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getGDNId()
 * @method $this withGDNId($value)
 * @method string getGDNDescription()
 * @method $this withGDNDescription($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEnableGlobalDomainName()
 * @method $this withEnableGlobalDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyGlobalDatabaseNetwork extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getGIpList()
 * @method $this withGIpList($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getGlobalSecurityGroupId()
 * @method $this withGlobalSecurityGroupId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getSecurityIPType()
 * @method $this withSecurityIPType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getWhitelistNetType()
 * @method $this withWhitelistNetType($value)
 * @method string getGlobalIgName()
 * @method $this withGlobalIgName($value)
 */
class ModifyGlobalSecurityIPGroup extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getGlobalSecurityGroupId()
 * @method $this withGlobalSecurityGroupId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getGlobalIgName()
 * @method $this withGlobalIgName($value)
 */
class ModifyGlobalSecurityIPGroupName extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getGlobalSecurityGroupId()
 * @method $this withGlobalSecurityGroupId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyGlobalSecurityIPGroupRelation extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAdvancedLogPolicies()
 * @method $this withAdvancedLogPolicies($value)
 * @method string getLogBackupAnotherRegionRegion()
 * @method $this withLogBackupAnotherRegionRegion($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getLogBackupAnotherRegionRetentionPeriod()
 * @method $this withLogBackupAnotherRegionRetentionPeriod($value)
 * @method string getLogBackupRetentionPeriod()
 * @method $this withLogBackupRetentionPeriod($value)
 */
class ModifyLogBackupPolicy extends Rpc
{
}

/**
 * @method string getMaskingAlgo()
 * @method $this withMaskingAlgo($value)
 * @method string getRuleName()
 * @method $this withRuleName($value)
 * @method string getRuleVersion()
 * @method $this withRuleVersion($value)
 * @method string getEnable()
 * @method $this withEnable($value)
 * @method string getInterfaceVersion()
 * @method $this withInterfaceVersion($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getDefaultAlgo()
 * @method $this withDefaultAlgo($value)
 * @method string getRuleConfig()
 * @method $this withRuleConfig($value)
 * @method string getRuleNameList()
 * @method $this withRuleNameList($value)
 */
class ModifyMaskingRules extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
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
 */
class ModifyPendingMaintenanceAction extends Rpc
{
}

/**
 * @method string getCapacityConfig()
 * @method $this withCapacityConfig($value)
 * @method string getAutoQuota()
 * @method $this withAutoQuota($value)
 * @method string getResourcePackageId()
 * @method $this withResourcePackageId($value)
 */
class ModifyResourcePackage extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPlannedEndTime()
 * @method $this withPlannedEndTime($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getPlannedFlashingOffTime()
 * @method $this withPlannedFlashingOffTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPlannedStartTime()
 * @method $this withPlannedStartTime($value)
 */
class ModifyScheduleTask extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getRuleName()
 * @method $this withRuleName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRuleConfig()
 * @method $this withRuleConfig($value)
 */
class ModifySQLRateLimitingRules extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getNodeType()
 * @method $this withNodeType($value)
 * @method string getDescribeType()
 * @method $this withDescribeType($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getPassword()
 * @method $this withPassword($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getUsername()
 * @method $this withUsername($value)
 */
class OpenAITask extends Rpc
{
}

/**
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 */
class ReactivateDBClusterBackup extends Rpc
{

    /** @var string */
    public $scheme = 'https';
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
 * @method string getSyncRealTime()
 * @method $this withSyncRealTime($value)
 */
class RefreshDBClusterStorageUsage extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getGDNId()
 * @method $this withGDNId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getForce()
 * @method $this withForce($value)
 */
class RemoveDBClusterFromGDN extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
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
 * @method string getPasswordType()
 * @method $this withPasswordType($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
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
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAccountPassword()
 * @method $this withAccountPassword($value)
 */
class ResetAccountZonal extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getGDNId()
 * @method $this withGDNId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ResetGlobalDatabaseNetwork extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class RestartDBLink extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBNodeId()
 * @method $this withDBNodeId($value)
 * @method string getPlannedEndTime()
 * @method $this withPlannedEndTime($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPlannedStartTime()
 * @method $this withPlannedStartTime($value)
 * @method string getFromTimeService()
 * @method $this withFromTimeService($value)
 */
class RestartDBNode extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBNodeId()
 * @method $this withDBNodeId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class RestartDBNodeZonal extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getTableMeta()
 * @method $this withTableMeta($value)
 * @method string getRestoreSpeed()
 * @method $this withRestoreSpeed($value)
 * @method string getRestoreTime()
 * @method $this withRestoreTime($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getBackupId()
 * @method $this withBackupId($value)
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
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
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
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBName()
 * @method $this withDBName($value)
 */
class RevokeAccountPrivilegeZonal extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getForced()
 * @method $this withForced($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getGDNId()
 * @method $this withGDNId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class SwitchOverGlobalDatabaseNetwork extends Rpc
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
 * @method string getRestoreTime()
 * @method $this withRestoreTime($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOperationType()
 * @method $this withOperationType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getModifyType()
 * @method $this withModifyType($value)
 * @method array getDBNode()
 */
class TempModifyDBNode extends Rpc
{

    /**
     * @param array $dBNode
     *
     * @return $this
     */
	public function withDBNode(array $dBNode)
	{
	    $this->data['DBNode'] = $dBNode;
		foreach ($dBNode as $depth1 => $depth1Value) {
			if(isset($depth1Value['TargetClass'])){
				$this->options['query']['DBNode.' . ($depth1 + 1) . '.TargetClass'] = $depth1Value['TargetClass'];
			}
			if(isset($depth1Value['ZoneId'])){
				$this->options['query']['DBNode.' . ($depth1 + 1) . '.ZoneId'] = $depth1Value['ZoneId'];
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
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getUsedTime()
 * @method $this withUsedTime($value)
 * @method string getPayType()
 * @method $this withPayType($value)
 */
class TransformDBClusterPayType extends Rpc
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

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 * @method string getDBNames()
 * @method $this withDBNames($value)
 * @method string getExtensions()
 * @method $this withExtensions($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 */
class UpdateExtensions extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getUpgradeType()
 * @method $this withUpgradeType($value)
 * @method string getPlannedEndTime()
 * @method $this withPlannedEndTime($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getUpgradeLabel()
 * @method $this withUpgradeLabel($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getPlannedFlashingOffTime()
 * @method $this withPlannedFlashingOffTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPlannedStartTime()
 * @method $this withPlannedStartTime($value)
 * @method string getTargetDBRevisionVersionCode()
 * @method $this withTargetDBRevisionVersionCode($value)
 * @method string getTargetProxyRevisionVersionCode()
 * @method $this withTargetProxyRevisionVersionCode($value)
 * @method string getUpgradePolicy()
 * @method $this withUpgradePolicy($value)
 * @method string getFromTimeService()
 * @method $this withFromTimeService($value)
 */
class UpgradeDBClusterVersion extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getUpgradeType()
 * @method $this withUpgradeType($value)
 * @method string getPlannedEndTime()
 * @method $this withPlannedEndTime($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getUpgradeLabel()
 * @method $this withUpgradeLabel($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getPlannedFlashingOffTime()
 * @method $this withPlannedFlashingOffTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPlannedStartTime()
 * @method $this withPlannedStartTime($value)
 * @method string getTargetDBRevisionVersionCode()
 * @method $this withTargetDBRevisionVersionCode($value)
 * @method string getTargetProxyRevisionVersionCode()
 * @method $this withTargetProxyRevisionVersionCode($value)
 * @method string getUpgradePolicy()
 * @method $this withUpgradePolicy($value)
 * @method string getFromTimeService()
 * @method $this withFromTimeService($value)
 */
class UpgradeDBClusterVersionZonal extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}
