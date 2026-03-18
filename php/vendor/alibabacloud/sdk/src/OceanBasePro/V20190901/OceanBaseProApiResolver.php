<?php

namespace AlibabaCloud\OceanBasePro\V20190901;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method BatchKillProcessList batchKillProcessList(array $options = [])
 * @method BatchKillSessionList batchKillSessionList(array $options = [])
 * @method CancelProjectModifyRecord cancelProjectModifyRecord(array $options = [])
 * @method CreateBackupSetDownloadLink createBackupSetDownloadLink(array $options = [])
 * @method CreateDatabase createDatabase(array $options = [])
 * @method CreateInstance createInstance(array $options = [])
 * @method CreateLabel createLabel(array $options = [])
 * @method CreateMySqlDataSource createMySqlDataSource(array $options = [])
 * @method CreateOceanBaseDataSource createOceanBaseDataSource(array $options = [])
 * @method CreateOmsMysqlDataSource createOmsMysqlDataSource(array $options = [])
 * @method CreateProject createProject(array $options = [])
 * @method CreateProjectModifyRecords createProjectModifyRecords(array $options = [])
 * @method CreateRdsPostgreSQLDataSource createRdsPostgreSQLDataSource(array $options = [])
 * @method CreateSecurityIpGroup createSecurityIpGroup(array $options = [])
 * @method CreateTag createTag(array $options = [])
 * @method CreateTagValue createTagValue(array $options = [])
 * @method CreateTenant createTenant(array $options = [])
 * @method CreateTenantReadOnlyConnection createTenantReadOnlyConnection(array $options = [])
 * @method CreateTenantSecurityIpGroup createTenantSecurityIpGroup(array $options = [])
 * @method CreateTenantUser createTenantUser(array $options = [])
 * @method DeleteDatabases deleteDatabases(array $options = [])
 * @method DeleteDataSource deleteDataSource(array $options = [])
 * @method DeleteInstances deleteInstances(array $options = [])
 * @method DeleteProject deleteProject(array $options = [])
 * @method DeleteSecurityIpGroup deleteSecurityIpGroup(array $options = [])
 * @method DeleteTag deleteTag(array $options = [])
 * @method DeleteTagValue deleteTagValue(array $options = [])
 * @method DeleteTenants deleteTenants(array $options = [])
 * @method DeleteTenantSecurityIpGroup deleteTenantSecurityIpGroup(array $options = [])
 * @method DeleteTenantUsers deleteTenantUsers(array $options = [])
 * @method DescribeAnomalySQLList describeAnomalySQLList(array $options = [])
 * @method DescribeAvailableCpuResource describeAvailableCpuResource(array $options = [])
 * @method DescribeAvailableMemResource describeAvailableMemResource(array $options = [])
 * @method DescribeAvailableSpec describeAvailableSpec(array $options = [])
 * @method DescribeAvailableZone describeAvailableZone(array $options = [])
 * @method DescribeBackupEncryptedString describeBackupEncryptedString(array $options = [])
 * @method DescribeBackupSetDownloadLink describeBackupSetDownloadLink(array $options = [])
 * @method DescribeCharset describeCharset(array $options = [])
 * @method DescribeDataBackupSet describeDataBackupSet(array $options = [])
 * @method DescribeDatabases describeDatabases(array $options = [])
 * @method DescribeInstance describeInstance(array $options = [])
 * @method DescribeInstanceCreatableZone describeInstanceCreatableZone(array $options = [])
 * @method DescribeInstances describeInstances(array $options = [])
 * @method DescribeInstanceSecurityConfigs describeInstanceSecurityConfigs(array $options = [])
 * @method DescribeInstanceSSL describeInstanceSSL(array $options = [])
 * @method DescribeInstanceSummary describeInstanceSummary(array $options = [])
 * @method DescribeInstanceTags describeInstanceTags(array $options = [])
 * @method DescribeInstanceTenantModes describeInstanceTenantModes(array $options = [])
 * @method DescribeInstanceTopology describeInstanceTopology(array $options = [])
 * @method DescribeMetricsData describeMetricsData(array $options = [])
 * @method DescribeNodeMetrics describeNodeMetrics(array $options = [])
 * @method DescribeOasAnomalySQLList describeOasAnomalySQLList(array $options = [])
 * @method DescribeOasSlowSQLList describeOasSlowSQLList(array $options = [])
 * @method DescribeOasSQLDetails describeOasSQLDetails(array $options = [])
 * @method DescribeOasSQLHistoryList describeOasSQLHistoryList(array $options = [])
 * @method DescribeOasSQLPlans describeOasSQLPlans(array $options = [])
 * @method DescribeOasTopSQLList describeOasTopSQLList(array $options = [])
 * @method DescribeOutlineBinding describeOutlineBinding(array $options = [])
 * @method DescribeParameters describeParameters(array $options = [])
 * @method DescribeParametersHistory describeParametersHistory(array $options = [])
 * @method DescribeProcessStatsComposition describeProcessStatsComposition(array $options = [])
 * @method DescribeProject describeProject(array $options = [])
 * @method DescribeProjectComponents describeProjectComponents(array $options = [])
 * @method DescribeProjectProgress describeProjectProgress(array $options = [])
 * @method DescribeProjectStepMetric describeProjectStepMetric(array $options = [])
 * @method DescribeProjectSteps describeProjectSteps(array $options = [])
 * @method DescribeRecommendIndex describeRecommendIndex(array $options = [])
 * @method DescribeRestorableTenants describeRestorableTenants(array $options = [])
 * @method DescribeSampleSqlRawTexts describeSampleSqlRawTexts(array $options = [])
 * @method DescribeSecurityIpGroups describeSecurityIpGroups(array $options = [])
 * @method DescribeSessionList describeSessionList(array $options = [])
 * @method DescribeSlowSQLHistoryList describeSlowSQLHistoryList(array $options = [])
 * @method DescribeSlowSQLList describeSlowSQLList(array $options = [])
 * @method DescribeSQLDetails describeSQLDetails(array $options = [])
 * @method DescribeSQLHistoryList describeSQLHistoryList(array $options = [])
 * @method DescribeSQLPlans describeSQLPlans(array $options = [])
 * @method DescribeSQLSamples describeSQLSamples(array $options = [])
 * @method DescribeSQLTuningAdvices describeSQLTuningAdvices(array $options = [])
 * @method DescribeStandbyCreateMode describeStandbyCreateMode(array $options = [])
 * @method DescribeTagValues describeTagValues(array $options = [])
 * @method DescribeTenant describeTenant(array $options = [])
 * @method DescribeTenantEncryption describeTenantEncryption(array $options = [])
 * @method DescribeTenantMetrics describeTenantMetrics(array $options = [])
 * @method DescribeTenantReadableScn describeTenantReadableScn(array $options = [])
 * @method DescribeTenants describeTenants(array $options = [])
 * @method DescribeTenantSecurityConfigs describeTenantSecurityConfigs(array $options = [])
 * @method DescribeTenantSecurityIpGroups describeTenantSecurityIpGroups(array $options = [])
 * @method DescribeTenantTags describeTenantTags(array $options = [])
 * @method DescribeTenantUserRoles describeTenantUserRoles(array $options = [])
 * @method DescribeTenantUsers describeTenantUsers(array $options = [])
 * @method DescribeTenantZonesRead describeTenantZonesRead(array $options = [])
 * @method DescribeTimeZones describeTimeZones(array $options = [])
 * @method DescribeTopSQLList describeTopSQLList(array $options = [])
 * @method DescribeZones describeZones(array $options = [])
 * @method GetUploadOssUrl getUploadOssUrl(array $options = [])
 * @method KillProcessList killProcessList(array $options = [])
 * @method ListAllLabels listAllLabels(array $options = [])
 * @method ListDataSource listDataSource(array $options = [])
 * @method ListProjectFullVerifyResult listProjectFullVerifyResult(array $options = [])
 * @method ListProjectModifyRecords listProjectModifyRecords(array $options = [])
 * @method ListProjects listProjects(array $options = [])
 * @method ListWorkerInstances listWorkerInstances(array $options = [])
 * @method ModifyDatabaseDescription modifyDatabaseDescription(array $options = [])
 * @method ModifyDatabaseUserRoles modifyDatabaseUserRoles(array $options = [])
 * @method ModifyInstanceName modifyInstanceName(array $options = [])
 * @method ModifyInstanceNodeNum modifyInstanceNodeNum(array $options = [])
 * @method ModifyInstanceSpec modifyInstanceSpec(array $options = [])
 * @method ModifyInstanceSSL modifyInstanceSSL(array $options = [])
 * @method ModifyInstanceTags modifyInstanceTags(array $options = [])
 * @method ModifyInstanceTemporaryCapacity modifyInstanceTemporaryCapacity(array $options = [])
 * @method ModifyParameters modifyParameters(array $options = [])
 * @method ModifySecurityIps modifySecurityIps(array $options = [])
 * @method ModifyTagName modifyTagName(array $options = [])
 * @method ModifyTagValueName modifyTagValueName(array $options = [])
 * @method ModifyTenantEncryption modifyTenantEncryption(array $options = [])
 * @method ModifyTenantPrimaryZone modifyTenantPrimaryZone(array $options = [])
 * @method ModifyTenantResource modifyTenantResource(array $options = [])
 * @method ModifyTenantSecurityIpGroup modifyTenantSecurityIpGroup(array $options = [])
 * @method ModifyTenantTags modifyTenantTags(array $options = [])
 * @method ModifyTenantUserDescription modifyTenantUserDescription(array $options = [])
 * @method ModifyTenantUserPassword modifyTenantUserPassword(array $options = [])
 * @method ModifyTenantUserRoles modifyTenantUserRoles(array $options = [])
 * @method ModifyTenantUserStatus modifyTenantUserStatus(array $options = [])
 * @method ReleaseProject releaseProject(array $options = [])
 * @method ReleaseWorkerInstance releaseWorkerInstance(array $options = [])
 * @method ResumeProject resumeProject(array $options = [])
 * @method RetryProjectModifyRecords retryProjectModifyRecords(array $options = [])
 * @method StartProject startProject(array $options = [])
 * @method StartProjectsByLabel startProjectsByLabel(array $options = [])
 * @method StopProject stopProject(array $options = [])
 * @method StopProjectModifyRecords stopProjectModifyRecords(array $options = [])
 * @method StopProjectsByLabel stopProjectsByLabel(array $options = [])
 * @method SwitchoverInstance switchoverInstance(array $options = [])
 * @method UpdateProjectConfig updateProjectConfig(array $options = [])
 */
class OceanBaseProApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'OceanBasePro';

    /** @var string */
    public $version = '2019-09-01';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'oceanbase';
}

/**
 * @method string getSessionList()
 * @method string getInstanceId()
 * @method string getTenantId()
 */
class BatchKillProcessList extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSessionList($value)
    {
        $this->data['SessionList'] = $value;
        $this->options['form_params']['SessionList'] = $value;

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
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

        return $this;
    }
}

/**
 * @method string getSessionList()
 * @method string getInstanceId()
 * @method string getTenantId()
 */
class BatchKillSessionList extends Rpc
{

    /** @var string */
    public $scheme = 'https';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSessionList($value)
    {
        $this->data['SessionList'] = $value;
        $this->options['form_params']['SessionList'] = $value;

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
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

        return $this;
    }
}

/**
 * @method string getId()
 */
class CancelProjectModifyRecord extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withId($value)
    {
        $this->data['Id'] = $value;
        $this->options['form_params']['Id'] = $value;

        return $this;
    }
}

/**
 * @method string getBackupSetId()
 * @method string getInstanceId()
 */
class CreateBackupSetDownloadLink extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBackupSetId($value)
    {
        $this->data['BackupSetId'] = $value;
        $this->options['form_params']['BackupSetId'] = $value;

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
 * @method string getDescription()
 * @method string getEncoding()
 * @method string getInstanceId()
 * @method string getDatabaseName()
 * @method string getTenantId()
 * @method string getCollation()
 */
class CreateDatabase extends Rpc
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
    public function withEncoding($value)
    {
        $this->data['Encoding'] = $value;
        $this->options['form_params']['Encoding'] = $value;

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
    public function withDatabaseName($value)
    {
        $this->data['DatabaseName'] = $value;
        $this->options['form_params']['DatabaseName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCollation($value)
    {
        $this->data['Collation'] = $value;
        $this->options['form_params']['Collation'] = $value;

        return $this;
    }
}

/**
 * @method string getIsolationOptimization()
 * @method string getInstanceClass()
 * @method string getResourceGroupId()
 * @method string getAutoRenewPeriod()
 * @method string getPeriod()
 * @method string getDryRun()
 * @method string getDiskSize()
 * @method string getZones()
 * @method string getDiskType()
 * @method string getObVersion()
 * @method string getPeriodUnit()
 * @method string getInstanceName()
 * @method string getReplicaMode()
 * @method string getAutoRenew()
 * @method string getSeries()
 * @method string getCpuArch()
 * @method string getPrimaryInstance()
 * @method string getPrimaryRegion()
 * @method string getChargeType()
 * @method string getBid()
 * @method $this withBid($value)
 */
class CreateInstance extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIsolationOptimization($value)
    {
        $this->data['IsolationOptimization'] = $value;
        $this->options['form_params']['IsolationOptimization'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceClass($value)
    {
        $this->data['InstanceClass'] = $value;
        $this->options['form_params']['InstanceClass'] = $value;

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
    public function withAutoRenewPeriod($value)
    {
        $this->data['AutoRenewPeriod'] = $value;
        $this->options['form_params']['AutoRenewPeriod'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPeriod($value)
    {
        $this->data['Period'] = $value;
        $this->options['form_params']['Period'] = $value;

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
    public function withDiskSize($value)
    {
        $this->data['DiskSize'] = $value;
        $this->options['form_params']['DiskSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withZones($value)
    {
        $this->data['Zones'] = $value;
        $this->options['form_params']['Zones'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDiskType($value)
    {
        $this->data['DiskType'] = $value;
        $this->options['form_params']['DiskType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withObVersion($value)
    {
        $this->data['ObVersion'] = $value;
        $this->options['form_params']['ObVersion'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPeriodUnit($value)
    {
        $this->data['PeriodUnit'] = $value;
        $this->options['form_params']['PeriodUnit'] = $value;

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
    public function withReplicaMode($value)
    {
        $this->data['ReplicaMode'] = $value;
        $this->options['form_params']['ReplicaMode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAutoRenew($value)
    {
        $this->data['AutoRenew'] = $value;
        $this->options['form_params']['AutoRenew'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSeries($value)
    {
        $this->data['Series'] = $value;
        $this->options['form_params']['Series'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCpuArch($value)
    {
        $this->data['CpuArch'] = $value;
        $this->options['form_params']['CpuArch'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPrimaryInstance($value)
    {
        $this->data['PrimaryInstance'] = $value;
        $this->options['form_params']['PrimaryInstance'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPrimaryRegion($value)
    {
        $this->data['PrimaryRegion'] = $value;
        $this->options['form_params']['PrimaryRegion'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChargeType($value)
    {
        $this->data['ChargeType'] = $value;
        $this->options['form_params']['ChargeType'] = $value;

        return $this;
    }
}

/**
 * @method string getName()
 */
class CreateLabel extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withName($value)
    {
        $this->data['Name'] = $value;
        $this->options['form_params']['Name'] = $value;

        return $this;
    }
}

/**
 * @method string getSchema()
 * @method string getDescription()
 * @method string getType()
 * @method string getUseSsl()
 * @method string getPassword()
 * @method string getDgInstanceId()
 * @method string getIp()
 * @method string getInstanceId()
 * @method string getPort()
 * @method string getVpcId()
 * @method string getName()
 * @method string getUserName()
 */
class CreateMySqlDataSource extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSchema($value)
    {
        $this->data['Schema'] = $value;
        $this->options['form_params']['Schema'] = $value;

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
    public function withUseSsl($value)
    {
        $this->data['UseSsl'] = $value;
        $this->options['form_params']['UseSsl'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPassword($value)
    {
        $this->data['Password'] = $value;
        $this->options['form_params']['Password'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDgInstanceId($value)
    {
        $this->data['DgInstanceId'] = $value;
        $this->options['form_params']['DgInstanceId'] = $value;

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
    public function withPort($value)
    {
        $this->data['Port'] = $value;
        $this->options['form_params']['Port'] = $value;

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
    public function withName($value)
    {
        $this->data['Name'] = $value;
        $this->options['form_params']['Name'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserName($value)
    {
        $this->data['UserName'] = $value;
        $this->options['form_params']['UserName'] = $value;

        return $this;
    }
}

/**
 * @method string getCluster()
 * @method string getDrcUserName()
 * @method string getLogProxyIp()
 * @method string getDescription()
 * @method string getType()
 * @method string getPassword()
 * @method string getInnerDrcPassword()
 * @method string getTenant()
 * @method string getConfigUrl()
 * @method string getIp()
 * @method string getPort()
 * @method string getVpcId()
 * @method string getName()
 * @method string getDrcPassword()
 * @method string getLogProxyPort()
 * @method string getUserName()
 */
class CreateOceanBaseDataSource extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCluster($value)
    {
        $this->data['Cluster'] = $value;
        $this->options['form_params']['Cluster'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDrcUserName($value)
    {
        $this->data['DrcUserName'] = $value;
        $this->options['form_params']['DrcUserName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLogProxyIp($value)
    {
        $this->data['LogProxyIp'] = $value;
        $this->options['form_params']['LogProxyIp'] = $value;

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
    public function withPassword($value)
    {
        $this->data['Password'] = $value;
        $this->options['form_params']['Password'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInnerDrcPassword($value)
    {
        $this->data['InnerDrcPassword'] = $value;
        $this->options['form_params']['InnerDrcPassword'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTenant($value)
    {
        $this->data['Tenant'] = $value;
        $this->options['form_params']['Tenant'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withConfigUrl($value)
    {
        $this->data['ConfigUrl'] = $value;
        $this->options['form_params']['ConfigUrl'] = $value;

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
    public function withPort($value)
    {
        $this->data['Port'] = $value;
        $this->options['form_params']['Port'] = $value;

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
    public function withName($value)
    {
        $this->data['Name'] = $value;
        $this->options['form_params']['Name'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDrcPassword($value)
    {
        $this->data['DrcPassword'] = $value;
        $this->options['form_params']['DrcPassword'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLogProxyPort($value)
    {
        $this->data['LogProxyPort'] = $value;
        $this->options['form_params']['LogProxyPort'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserName($value)
    {
        $this->data['UserName'] = $value;
        $this->options['form_params']['UserName'] = $value;

        return $this;
    }
}

/**
 * @method string getSchema()
 * @method string getDescription()
 * @method string getDgDatabaseId()
 * @method string getType()
 * @method string getPassword()
 * @method string getIp()
 * @method string getInstanceId()
 * @method string getPort()
 * @method string getVpcId()
 * @method string getName()
 * @method string getBid()
 * @method $this withBid($value)
 * @method string getUsername()
 */
class CreateOmsMysqlDataSource extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSchema($value)
    {
        $this->data['Schema'] = $value;
        $this->options['form_params']['Schema'] = $value;

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
    public function withDgDatabaseId($value)
    {
        $this->data['DgDatabaseId'] = $value;
        $this->options['form_params']['DgDatabaseId'] = $value;

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
    public function withPassword($value)
    {
        $this->data['Password'] = $value;
        $this->options['form_params']['Password'] = $value;

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
    public function withPort($value)
    {
        $this->data['Port'] = $value;
        $this->options['form_params']['Port'] = $value;

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
    public function withName($value)
    {
        $this->data['Name'] = $value;
        $this->options['form_params']['Name'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUsername($value)
    {
        $this->data['Username'] = $value;
        $this->options['form_params']['Username'] = $value;

        return $this;
    }
}

/**
 * @method string getSinkEndpointId()
 * @method string getUseOss()
 * @method string getOssKey()
 * @method string getSourceEndpointId()
 * @method string getType()
 * @method string getFullTransferConfig()
 * @method string getEnableStructTransfer()
 * @method string getTransferMapping()
 * @method string getWorkerGradeId()
 * @method string getId()
 * @method string getCommonTransferConfig()
 * @method string getStructTransferConfig()
 * @method string getReverseIncrTransferConfig()
 * @method string getEnableIncrTransfer()
 * @method string getEnableFullTransfer()
 * @method string getEnableFullVerify()
 * @method string getName()
 * @method string getLabelIds()
 * @method string getIncrTransferConfig()
 * @method string getEnableReverseIncrTransfer()
 */
class CreateProject extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSinkEndpointId($value)
    {
        $this->data['SinkEndpointId'] = $value;
        $this->options['form_params']['SinkEndpointId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUseOss($value)
    {
        $this->data['UseOss'] = $value;
        $this->options['form_params']['UseOss'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOssKey($value)
    {
        $this->data['OssKey'] = $value;
        $this->options['form_params']['OssKey'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSourceEndpointId($value)
    {
        $this->data['SourceEndpointId'] = $value;
        $this->options['form_params']['SourceEndpointId'] = $value;

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
    public function withFullTransferConfig($value)
    {
        $this->data['FullTransferConfig'] = $value;
        $this->options['form_params']['FullTransferConfig'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEnableStructTransfer($value)
    {
        $this->data['EnableStructTransfer'] = $value;
        $this->options['form_params']['EnableStructTransfer'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTransferMapping($value)
    {
        $this->data['TransferMapping'] = $value;
        $this->options['form_params']['TransferMapping'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWorkerGradeId($value)
    {
        $this->data['WorkerGradeId'] = $value;
        $this->options['form_params']['WorkerGradeId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withId($value)
    {
        $this->data['Id'] = $value;
        $this->options['form_params']['Id'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCommonTransferConfig($value)
    {
        $this->data['CommonTransferConfig'] = $value;
        $this->options['form_params']['CommonTransferConfig'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStructTransferConfig($value)
    {
        $this->data['StructTransferConfig'] = $value;
        $this->options['form_params']['StructTransferConfig'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withReverseIncrTransferConfig($value)
    {
        $this->data['ReverseIncrTransferConfig'] = $value;
        $this->options['form_params']['ReverseIncrTransferConfig'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEnableIncrTransfer($value)
    {
        $this->data['EnableIncrTransfer'] = $value;
        $this->options['form_params']['EnableIncrTransfer'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEnableFullTransfer($value)
    {
        $this->data['EnableFullTransfer'] = $value;
        $this->options['form_params']['EnableFullTransfer'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEnableFullVerify($value)
    {
        $this->data['EnableFullVerify'] = $value;
        $this->options['form_params']['EnableFullVerify'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withName($value)
    {
        $this->data['Name'] = $value;
        $this->options['form_params']['Name'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLabelIds($value)
    {
        $this->data['LabelIds'] = $value;
        $this->options['form_params']['LabelIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIncrTransferConfig($value)
    {
        $this->data['IncrTransferConfig'] = $value;
        $this->options['form_params']['IncrTransferConfig'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEnableReverseIncrTransfer($value)
    {
        $this->data['EnableReverseIncrTransfer'] = $value;
        $this->options['form_params']['EnableReverseIncrTransfer'] = $value;

        return $this;
    }
}

/**
 * @method string getDatabases()
 * @method string getId()
 */
class CreateProjectModifyRecords extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDatabases($value)
    {
        $this->data['Databases'] = $value;
        $this->options['form_params']['Databases'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withId($value)
    {
        $this->data['Id'] = $value;
        $this->options['form_params']['Id'] = $value;

        return $this;
    }
}

/**
 * @method string getDescription()
 * @method string getPassword()
 * @method string getInstanceId()
 * @method string getDatabaseName()
 * @method string getName()
 * @method string getUserName()
 */
class CreateRdsPostgreSQLDataSource extends Rpc
{

    /** @var string */
    public $scheme = 'https';

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
    public function withPassword($value)
    {
        $this->data['Password'] = $value;
        $this->options['form_params']['Password'] = $value;

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
    public function withDatabaseName($value)
    {
        $this->data['DatabaseName'] = $value;
        $this->options['form_params']['DatabaseName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withName($value)
    {
        $this->data['Name'] = $value;
        $this->options['form_params']['Name'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserName($value)
    {
        $this->data['UserName'] = $value;
        $this->options['form_params']['UserName'] = $value;

        return $this;
    }
}

/**
 * @method string getSecurityIps()
 * @method string getSecurityIpGroupName()
 * @method string getInstanceId()
 */
class CreateSecurityIpGroup extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSecurityIps($value)
    {
        $this->data['SecurityIps'] = $value;
        $this->options['form_params']['SecurityIps'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSecurityIpGroupName($value)
    {
        $this->data['SecurityIpGroupName'] = $value;
        $this->options['form_params']['SecurityIpGroupName'] = $value;

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
 * @method string getKey()
 */
class CreateTag extends Rpc
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
    public function withKey($value)
    {
        $this->data['Key'] = $value;
        $this->options['form_params']['Key'] = $value;

        return $this;
    }
}

/**
 * @method string getClientToken()
 * @method string getValue()
 * @method string getKey()
 */
class CreateTagValue extends Rpc
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
    public function withValue($value)
    {
        $this->data['Value'] = $value;
        $this->options['form_params']['Value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withKey($value)
    {
        $this->data['Key'] = $value;
        $this->options['form_params']['Key'] = $value;

        return $this;
    }
}

/**
 * @method string getCharset()
 * @method string getTenantMode()
 * @method string getMemory()
 * @method string getLogDisk()
 * @method string getTimeZone()
 * @method string getDescription()
 * @method string getUserVSwitchId()
 * @method string getUserVpcId()
 * @method string getCpu()
 * @method string getUnitNum()
 * @method string getInstanceId()
 * @method string getPrimaryZone()
 * @method string getUserVpcOwnerId()
 * @method string getCreateParams()
 * @method string getTenantName()
 * @method string getReadOnlyZoneList()
 */
class CreateTenant extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCharset($value)
    {
        $this->data['Charset'] = $value;
        $this->options['form_params']['Charset'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTenantMode($value)
    {
        $this->data['TenantMode'] = $value;
        $this->options['form_params']['TenantMode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMemory($value)
    {
        $this->data['Memory'] = $value;
        $this->options['form_params']['Memory'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLogDisk($value)
    {
        $this->data['LogDisk'] = $value;
        $this->options['form_params']['LogDisk'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTimeZone($value)
    {
        $this->data['TimeZone'] = $value;
        $this->options['form_params']['TimeZone'] = $value;

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
    public function withUserVSwitchId($value)
    {
        $this->data['UserVSwitchId'] = $value;
        $this->options['form_params']['UserVSwitchId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserVpcId($value)
    {
        $this->data['UserVpcId'] = $value;
        $this->options['form_params']['UserVpcId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCpu($value)
    {
        $this->data['Cpu'] = $value;
        $this->options['form_params']['Cpu'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUnitNum($value)
    {
        $this->data['UnitNum'] = $value;
        $this->options['form_params']['UnitNum'] = $value;

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
    public function withPrimaryZone($value)
    {
        $this->data['PrimaryZone'] = $value;
        $this->options['form_params']['PrimaryZone'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserVpcOwnerId($value)
    {
        $this->data['UserVpcOwnerId'] = $value;
        $this->options['form_params']['UserVpcOwnerId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCreateParams($value)
    {
        $this->data['CreateParams'] = $value;
        $this->options['form_params']['CreateParams'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTenantName($value)
    {
        $this->data['TenantName'] = $value;
        $this->options['form_params']['TenantName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withReadOnlyZoneList($value)
    {
        $this->data['ReadOnlyZoneList'] = $value;
        $this->options['form_params']['ReadOnlyZoneList'] = $value;

        return $this;
    }
}

/**
 * @method string getTenantId()
 * @method string getVSwitchId()
 * @method string getInstanceId()
 * @method string getVpcId()
 * @method string getZoneId()
 */
class CreateTenantReadOnlyConnection extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

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
 * @method string getSecurityIps()
 * @method string getSecurityIpGroupName()
 * @method string getInstanceId()
 * @method string getTenantId()
 */
class CreateTenantSecurityIpGroup extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSecurityIps($value)
    {
        $this->data['SecurityIps'] = $value;
        $this->options['form_params']['SecurityIps'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSecurityIpGroupName($value)
    {
        $this->data['SecurityIpGroupName'] = $value;
        $this->options['form_params']['SecurityIpGroupName'] = $value;

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
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

        return $this;
    }
}

/**
 * @method string getRoles()
 * @method string getDescription()
 * @method string getUserPassword()
 * @method string getTenantId()
 * @method string getEncryptionType()
 * @method string getUserType()
 * @method string getInstanceId()
 * @method string getUserName()
 */
class CreateTenantUser extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRoles($value)
    {
        $this->data['Roles'] = $value;
        $this->options['form_params']['Roles'] = $value;

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
    public function withUserPassword($value)
    {
        $this->data['UserPassword'] = $value;
        $this->options['form_params']['UserPassword'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEncryptionType($value)
    {
        $this->data['EncryptionType'] = $value;
        $this->options['form_params']['EncryptionType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserType($value)
    {
        $this->data['UserType'] = $value;
        $this->options['form_params']['UserType'] = $value;

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
    public function withUserName($value)
    {
        $this->data['UserName'] = $value;
        $this->options['form_params']['UserName'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method string getDatabaseNames()
 * @method string getTenantId()
 */
class DeleteDatabases extends Rpc
{

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
    public function withDatabaseNames($value)
    {
        $this->data['DatabaseNames'] = $value;
        $this->options['form_params']['DatabaseNames'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

        return $this;
    }
}

/**
 * @method string getId()
 */
class DeleteDataSource extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withId($value)
    {
        $this->data['Id'] = $value;
        $this->options['form_params']['Id'] = $value;

        return $this;
    }
}

/**
 * @method string getBackupRetainMode()
 * @method string getDryRun()
 * @method string getInstanceIds()
 */
class DeleteInstances extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBackupRetainMode($value)
    {
        $this->data['BackupRetainMode'] = $value;
        $this->options['form_params']['BackupRetainMode'] = $value;

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
    public function withInstanceIds($value)
    {
        $this->data['InstanceIds'] = $value;
        $this->options['form_params']['InstanceIds'] = $value;

        return $this;
    }
}

/**
 * @method string getId()
 */
class DeleteProject extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withId($value)
    {
        $this->data['Id'] = $value;
        $this->options['form_params']['Id'] = $value;

        return $this;
    }
}

/**
 * @method string getSecurityIpGroupName()
 * @method string getInstanceId()
 */
class DeleteSecurityIpGroup extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSecurityIpGroupName($value)
    {
        $this->data['SecurityIpGroupName'] = $value;
        $this->options['form_params']['SecurityIpGroupName'] = $value;

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
 * @method string getKey()
 */
class DeleteTag extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withKey($value)
    {
        $this->data['Key'] = $value;
        $this->options['form_params']['Key'] = $value;

        return $this;
    }
}

/**
 * @method string getValue()
 * @method string getKey()
 */
class DeleteTagValue extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withValue($value)
    {
        $this->data['Value'] = $value;
        $this->options['form_params']['Value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withKey($value)
    {
        $this->data['Key'] = $value;
        $this->options['form_params']['Key'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method string getTenantIds()
 */
class DeleteTenants extends Rpc
{

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
    public function withTenantIds($value)
    {
        $this->data['TenantIds'] = $value;
        $this->options['form_params']['TenantIds'] = $value;

        return $this;
    }
}

/**
 * @method string getSecurityIpGroupName()
 * @method string getInstanceId()
 * @method string getTenantId()
 */
class DeleteTenantSecurityIpGroup extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSecurityIpGroupName($value)
    {
        $this->data['SecurityIpGroupName'] = $value;
        $this->options['form_params']['SecurityIpGroupName'] = $value;

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
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

        return $this;
    }
}

/**
 * @method string getUsers()
 * @method string getInstanceId()
 * @method string getTenantId()
 */
class DeleteTenantUsers extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUsers($value)
    {
        $this->data['Users'] = $value;
        $this->options['form_params']['Users'] = $value;

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
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

        return $this;
    }
}

/**
 * @method string getStartTime()
 * @method string getPageNumber()
 * @method string getSearchRule()
 * @method string getTenantId()
 * @method string getPageSize()
 * @method string getSearchParameter()
 * @method string getSortOrder()
 * @method string getSearchValue()
 * @method string getSQLId()
 * @method string getFilterCondition()
 * @method string getEndTime()
 * @method string getNodeIp()
 * @method string getInstanceId()
 * @method string getDbName()
 * @method string getSearchKeyWord()
 * @method string getSortColumn()
 * @method string getAcceptLanguage()
 */
class DescribeAnomalySQLList extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStartTime($value)
    {
        $this->data['StartTime'] = $value;
        $this->options['form_params']['StartTime'] = $value;

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
    public function withSearchRule($value)
    {
        $this->data['SearchRule'] = $value;
        $this->options['form_params']['SearchRule'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

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
    public function withSearchParameter($value)
    {
        $this->data['SearchParameter'] = $value;
        $this->options['form_params']['SearchParameter'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSortOrder($value)
    {
        $this->data['SortOrder'] = $value;
        $this->options['form_params']['SortOrder'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSearchValue($value)
    {
        $this->data['SearchValue'] = $value;
        $this->options['form_params']['SearchValue'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSQLId($value)
    {
        $this->data['SQLId'] = $value;
        $this->options['form_params']['SQLId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFilterCondition($value)
    {
        $this->data['FilterCondition'] = $value;
        $this->options['form_params']['FilterCondition'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEndTime($value)
    {
        $this->data['EndTime'] = $value;
        $this->options['form_params']['EndTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNodeIp($value)
    {
        $this->data['NodeIp'] = $value;
        $this->options['form_params']['NodeIp'] = $value;

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
    public function withDbName($value)
    {
        $this->data['DbName'] = $value;
        $this->options['form_params']['DbName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSearchKeyWord($value)
    {
        $this->data['SearchKeyWord'] = $value;
        $this->options['form_params']['SearchKeyWord'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSortColumn($value)
    {
        $this->data['SortColumn'] = $value;
        $this->options['form_params']['SortColumn'] = $value;

        return $this;
    }

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
 * @method string getInstanceId()
 * @method string getModifyType()
 * @method string getTenantId()
 */
class DescribeAvailableCpuResource extends Rpc
{

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
    public function withModifyType($value)
    {
        $this->data['ModifyType'] = $value;
        $this->options['form_params']['ModifyType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

        return $this;
    }
}

/**
 * @method string getUnitNum()
 * @method string getCpuNum()
 * @method string getInstanceId()
 * @method string getTenantId()
 */
class DescribeAvailableMemResource extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUnitNum($value)
    {
        $this->data['UnitNum'] = $value;
        $this->options['form_params']['UnitNum'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCpuNum($value)
    {
        $this->data['CpuNum'] = $value;
        $this->options['form_params']['CpuNum'] = $value;

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
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

        return $this;
    }
}

/**
 * @method string getUpgradeType()
 * @method string getSpec()
 * @method string getInstanceId()
 */
class DescribeAvailableSpec extends Rpc
{

    /** @var string */
    public $scheme = 'https';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUpgradeType($value)
    {
        $this->data['UpgradeType'] = $value;
        $this->options['form_params']['UpgradeType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSpec($value)
    {
        $this->data['Spec'] = $value;
        $this->options['form_params']['Spec'] = $value;

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
 * @method string getSpec()
 * @method string getInstanceType()
 * @method string getObVersion()
 * @method string getSeries()
 * @method string getCpuArch()
 * @method string getDeployType()
 */
class DescribeAvailableZone extends Rpc
{

    /** @var string */
    public $scheme = 'https';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSpec($value)
    {
        $this->data['Spec'] = $value;
        $this->options['form_params']['Spec'] = $value;

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
    public function withObVersion($value)
    {
        $this->data['ObVersion'] = $value;
        $this->options['form_params']['ObVersion'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSeries($value)
    {
        $this->data['Series'] = $value;
        $this->options['form_params']['Series'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCpuArch($value)
    {
        $this->data['CpuArch'] = $value;
        $this->options['form_params']['CpuArch'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeployType($value)
    {
        $this->data['DeployType'] = $value;
        $this->options['form_params']['DeployType'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method string getTenantId()
 */
class DescribeBackupEncryptedString extends Rpc
{

    /** @var string */
    public $scheme = 'https';

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
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method string getDownloadTaskId()
 */
class DescribeBackupSetDownloadLink extends Rpc
{

    /** @var string */
    public $scheme = 'https';

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
    public function withDownloadTaskId($value)
    {
        $this->data['DownloadTaskId'] = $value;
        $this->options['form_params']['DownloadTaskId'] = $value;

        return $this;
    }
}

/**
 * @method string getTenantMode()
 * @method string getInstanceId()
 * @method string getSeries()
 */
class DescribeCharset extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTenantMode($value)
    {
        $this->data['TenantMode'] = $value;
        $this->options['form_params']['TenantMode'] = $value;

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
    public function withSeries($value)
    {
        $this->data['Series'] = $value;
        $this->options['form_params']['Series'] = $value;

        return $this;
    }
}

/**
 * @method string getStartTime()
 * @method string getPageNumber()
 * @method string getPageSize()
 * @method string getBackupObjectType()
 * @method string getEndTime()
 * @method string getInstanceId()
 * @method string getStatus()
 */
class DescribeDataBackupSet extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStartTime($value)
    {
        $this->data['StartTime'] = $value;
        $this->options['form_params']['StartTime'] = $value;

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
    public function withBackupObjectType($value)
    {
        $this->data['BackupObjectType'] = $value;
        $this->options['form_params']['BackupObjectType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEndTime($value)
    {
        $this->data['EndTime'] = $value;
        $this->options['form_params']['EndTime'] = $value;

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
    public function withStatus($value)
    {
        $this->data['Status'] = $value;
        $this->options['form_params']['Status'] = $value;

        return $this;
    }
}

/**
 * @method string getSearchKey()
 * @method string getPageNumber()
 * @method string getInstanceId()
 * @method string getDatabaseName()
 * @method string getWithTables()
 * @method string getTenantId()
 * @method string getPageSize()
 */
class DescribeDatabases extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSearchKey($value)
    {
        $this->data['SearchKey'] = $value;
        $this->options['form_params']['SearchKey'] = $value;

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
    public function withDatabaseName($value)
    {
        $this->data['DatabaseName'] = $value;
        $this->options['form_params']['DatabaseName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWithTables($value)
    {
        $this->data['WithTables'] = $value;
        $this->options['form_params']['WithTables'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

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
}

/**
 * @method string getPageNumber()
 * @method string getMaxConnectionLimit()
 * @method string getInstanceId()
 */
class DescribeInstance extends Rpc
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
    public function withMaxConnectionLimit($value)
    {
        $this->data['MaxConnectionLimit'] = $value;
        $this->options['form_params']['MaxConnectionLimit'] = $value;

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
 * @method string getInstanceId()
 */
class DescribeInstanceCreatableZone extends Rpc
{

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
 * @method string getSearchKey()
 * @method string getPageNumber()
 * @method string getResourceGroupId()
 * @method string getInstanceId()
 * @method string getInstanceName()
 * @method string getPageSize()
 */
class DescribeInstances extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSearchKey($value)
    {
        $this->data['SearchKey'] = $value;
        $this->options['form_params']['SearchKey'] = $value;

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
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['form_params']['PageSize'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method string getCheckId()
 */
class DescribeInstanceSecurityConfigs extends Rpc
{

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
    public function withCheckId($value)
    {
        $this->data['CheckId'] = $value;
        $this->options['form_params']['CheckId'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 */
class DescribeInstanceSSL extends Rpc
{

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
 * @method string getPageNumber()
 * @method string getPageSize()
 */
class DescribeInstanceSummary extends Rpc
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
}

/**
 * @method string getTags()
 * @method string getInstanceIds()
 */
class DescribeInstanceTags extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTags($value)
    {
        $this->data['Tags'] = $value;
        $this->options['form_params']['Tags'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceIds($value)
    {
        $this->data['InstanceIds'] = $value;
        $this->options['form_params']['InstanceIds'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 */
class DescribeInstanceTenantModes extends Rpc
{

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
 * @method string getInstanceId()
 * @method string getReplicaTypes()
 */
class DescribeInstanceTopology extends Rpc
{

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
    public function withReplicaTypes($value)
    {
        $this->data['ReplicaTypes'] = $value;
        $this->options['form_params']['ReplicaTypes'] = $value;

        return $this;
    }
}

/**
 * @method string getGroupByLabels()
 * @method $this withGroupByLabels($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getLimit()
 * @method $this withLimit($value)
 * @method string getSortOrder()
 * @method $this withSortOrder($value)
 * @method string getSortMetricKey()
 * @method $this withSortMetricKey($value)
 * @method string getReplicaType()
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getLabels()
 * @method $this withLabels($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getMetrics()
 * @method $this withMetrics($value)
 */
class DescribeMetricsData extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withReplicaType($value)
    {
        $this->data['ReplicaType'] = $value;
        $this->options['form_params']['ReplicaType'] = $value;

        return $this;
    }
}

/**
 * @method string getStartTime()
 * @method string getPageNumber()
 * @method string getPageSize()
 * @method string getTenantId()
 * @method string getNodeIdList()
 * @method string getEndTime()
 * @method string getNodeName()
 * @method string getInstanceId()
 * @method string getMetrics()
 */
class DescribeNodeMetrics extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStartTime($value)
    {
        $this->data['StartTime'] = $value;
        $this->options['form_params']['StartTime'] = $value;

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
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNodeIdList($value)
    {
        $this->data['NodeIdList'] = $value;
        $this->options['form_params']['NodeIdList'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEndTime($value)
    {
        $this->data['EndTime'] = $value;
        $this->options['form_params']['EndTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNodeName($value)
    {
        $this->data['NodeName'] = $value;
        $this->options['form_params']['NodeName'] = $value;

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
    public function withMetrics($value)
    {
        $this->data['Metrics'] = $value;
        $this->options['form_params']['Metrics'] = $value;

        return $this;
    }
}

/**
 * @method string getStartTime()
 * @method string getSearchRule()
 * @method string getMergeDynamicSql()
 * @method string getCurrent()
 * @method string getDynamicSql()
 * @method string getSqlTextLength()
 * @method string getTenantId()
 * @method string getPageSize()
 * @method string getSearchValue()
 * @method string getSqlId()
 * @method string getFilterCondition()
 * @method string getSearchParam()
 * @method string getEndTime()
 * @method string getNodeIp()
 * @method string getInstanceId()
 * @method string getDbName()
 * @method string getSearchKeyWord()
 * @method string getAcceptLanguage()
 */
class DescribeOasAnomalySQLList extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStartTime($value)
    {
        $this->data['StartTime'] = $value;
        $this->options['form_params']['StartTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSearchRule($value)
    {
        $this->data['SearchRule'] = $value;
        $this->options['form_params']['SearchRule'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMergeDynamicSql($value)
    {
        $this->data['MergeDynamicSql'] = $value;
        $this->options['form_params']['MergeDynamicSql'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCurrent($value)
    {
        $this->data['Current'] = $value;
        $this->options['form_params']['Current'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDynamicSql($value)
    {
        $this->data['DynamicSql'] = $value;
        $this->options['form_params']['DynamicSql'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSqlTextLength($value)
    {
        $this->data['SqlTextLength'] = $value;
        $this->options['form_params']['SqlTextLength'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

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
    public function withSearchValue($value)
    {
        $this->data['SearchValue'] = $value;
        $this->options['form_params']['SearchValue'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSqlId($value)
    {
        $this->data['SqlId'] = $value;
        $this->options['form_params']['SqlId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFilterCondition($value)
    {
        $this->data['FilterCondition'] = $value;
        $this->options['form_params']['FilterCondition'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSearchParam($value)
    {
        $this->data['SearchParam'] = $value;
        $this->options['form_params']['SearchParam'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEndTime($value)
    {
        $this->data['EndTime'] = $value;
        $this->options['form_params']['EndTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNodeIp($value)
    {
        $this->data['NodeIp'] = $value;
        $this->options['form_params']['NodeIp'] = $value;

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
    public function withDbName($value)
    {
        $this->data['DbName'] = $value;
        $this->options['form_params']['DbName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSearchKeyWord($value)
    {
        $this->data['SearchKeyWord'] = $value;
        $this->options['form_params']['SearchKeyWord'] = $value;

        return $this;
    }

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
 * @method string getStartTime()
 * @method string getSearchRule()
 * @method string getMergeDynamicSql()
 * @method string getDynamicSql()
 * @method string getSqlTextLength()
 * @method string getTenantId()
 * @method string getSearchValue()
 * @method string getSqlId()
 * @method string getFilterCondition()
 * @method string getSearchParam()
 * @method string getEndTime()
 * @method string getNodeIp()
 * @method string getInstanceId()
 * @method string getDbName()
 * @method string getSearchKeyWord()
 * @method string getAcceptLanguage()
 */
class DescribeOasSlowSQLList extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStartTime($value)
    {
        $this->data['StartTime'] = $value;
        $this->options['form_params']['StartTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSearchRule($value)
    {
        $this->data['SearchRule'] = $value;
        $this->options['form_params']['SearchRule'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMergeDynamicSql($value)
    {
        $this->data['MergeDynamicSql'] = $value;
        $this->options['form_params']['MergeDynamicSql'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDynamicSql($value)
    {
        $this->data['DynamicSql'] = $value;
        $this->options['form_params']['DynamicSql'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSqlTextLength($value)
    {
        $this->data['SqlTextLength'] = $value;
        $this->options['form_params']['SqlTextLength'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSearchValue($value)
    {
        $this->data['SearchValue'] = $value;
        $this->options['form_params']['SearchValue'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSqlId($value)
    {
        $this->data['SqlId'] = $value;
        $this->options['form_params']['SqlId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFilterCondition($value)
    {
        $this->data['FilterCondition'] = $value;
        $this->options['form_params']['FilterCondition'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSearchParam($value)
    {
        $this->data['SearchParam'] = $value;
        $this->options['form_params']['SearchParam'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEndTime($value)
    {
        $this->data['EndTime'] = $value;
        $this->options['form_params']['EndTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNodeIp($value)
    {
        $this->data['NodeIp'] = $value;
        $this->options['form_params']['NodeIp'] = $value;

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
    public function withDbName($value)
    {
        $this->data['DbName'] = $value;
        $this->options['form_params']['DbName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSearchKeyWord($value)
    {
        $this->data['SearchKeyWord'] = $value;
        $this->options['form_params']['SearchKeyWord'] = $value;

        return $this;
    }

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
 * @method string getStartTime()
 * @method string getParseTable()
 * @method string getDynamicSql()
 * @method string getTenantId()
 * @method string getSqlId()
 * @method string getEndTime()
 * @method string getInstanceId()
 * @method string getDbName()
 */
class DescribeOasSQLDetails extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStartTime($value)
    {
        $this->data['StartTime'] = $value;
        $this->options['form_params']['StartTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withParseTable($value)
    {
        $this->data['ParseTable'] = $value;
        $this->options['form_params']['ParseTable'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDynamicSql($value)
    {
        $this->data['DynamicSql'] = $value;
        $this->options['form_params']['DynamicSql'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSqlId($value)
    {
        $this->data['SqlId'] = $value;
        $this->options['form_params']['SqlId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEndTime($value)
    {
        $this->data['EndTime'] = $value;
        $this->options['form_params']['EndTime'] = $value;

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
    public function withDbName($value)
    {
        $this->data['DbName'] = $value;
        $this->options['form_params']['DbName'] = $value;

        return $this;
    }
}

/**
 * @method string getStartTime()
 * @method string getDynamicSql()
 * @method string getTenantId()
 * @method string getSqlId()
 * @method string getEndTime()
 * @method string getNodeIp()
 * @method string getInstanceId()
 * @method string getDbName()
 * @method string getAcceptLanguage()
 */
class DescribeOasSQLHistoryList extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStartTime($value)
    {
        $this->data['StartTime'] = $value;
        $this->options['form_params']['StartTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDynamicSql($value)
    {
        $this->data['DynamicSql'] = $value;
        $this->options['form_params']['DynamicSql'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSqlId($value)
    {
        $this->data['SqlId'] = $value;
        $this->options['form_params']['SqlId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEndTime($value)
    {
        $this->data['EndTime'] = $value;
        $this->options['form_params']['EndTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNodeIp($value)
    {
        $this->data['NodeIp'] = $value;
        $this->options['form_params']['NodeIp'] = $value;

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
    public function withDbName($value)
    {
        $this->data['DbName'] = $value;
        $this->options['form_params']['DbName'] = $value;

        return $this;
    }

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
 * @method string getReturnBriefInfo()
 * @method string getStartTime()
 * @method string getPlanUnionHash()
 * @method string getDynamicSql()
 * @method string getTenantId()
 * @method string getSqlId()
 * @method string getEndTime()
 * @method string getInstanceId()
 * @method string getDbName()
 * @method string getAcceptLanguage()
 */
class DescribeOasSQLPlans extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withReturnBriefInfo($value)
    {
        $this->data['ReturnBriefInfo'] = $value;
        $this->options['form_params']['ReturnBriefInfo'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStartTime($value)
    {
        $this->data['StartTime'] = $value;
        $this->options['form_params']['StartTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPlanUnionHash($value)
    {
        $this->data['PlanUnionHash'] = $value;
        $this->options['form_params']['PlanUnionHash'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDynamicSql($value)
    {
        $this->data['DynamicSql'] = $value;
        $this->options['form_params']['DynamicSql'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSqlId($value)
    {
        $this->data['SqlId'] = $value;
        $this->options['form_params']['SqlId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEndTime($value)
    {
        $this->data['EndTime'] = $value;
        $this->options['form_params']['EndTime'] = $value;

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
    public function withDbName($value)
    {
        $this->data['DbName'] = $value;
        $this->options['form_params']['DbName'] = $value;

        return $this;
    }

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
 * @method string getStartTime()
 * @method string getSearchRule()
 * @method string getMergeDynamicSql()
 * @method string getDynamicSql()
 * @method string getSqlTextLength()
 * @method string getTenantId()
 * @method string getSearchValue()
 * @method string getSqlId()
 * @method string getFilterCondition()
 * @method string getSearchParam()
 * @method string getEndTime()
 * @method string getNodeIp()
 * @method string getInstanceId()
 * @method string getDbName()
 * @method string getSearchKeyWord()
 * @method string getAcceptLanguage()
 */
class DescribeOasTopSQLList extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStartTime($value)
    {
        $this->data['StartTime'] = $value;
        $this->options['form_params']['StartTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSearchRule($value)
    {
        $this->data['SearchRule'] = $value;
        $this->options['form_params']['SearchRule'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMergeDynamicSql($value)
    {
        $this->data['MergeDynamicSql'] = $value;
        $this->options['form_params']['MergeDynamicSql'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDynamicSql($value)
    {
        $this->data['DynamicSql'] = $value;
        $this->options['form_params']['DynamicSql'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSqlTextLength($value)
    {
        $this->data['SqlTextLength'] = $value;
        $this->options['form_params']['SqlTextLength'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSearchValue($value)
    {
        $this->data['SearchValue'] = $value;
        $this->options['form_params']['SearchValue'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSqlId($value)
    {
        $this->data['SqlId'] = $value;
        $this->options['form_params']['SqlId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFilterCondition($value)
    {
        $this->data['FilterCondition'] = $value;
        $this->options['form_params']['FilterCondition'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSearchParam($value)
    {
        $this->data['SearchParam'] = $value;
        $this->options['form_params']['SearchParam'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEndTime($value)
    {
        $this->data['EndTime'] = $value;
        $this->options['form_params']['EndTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNodeIp($value)
    {
        $this->data['NodeIp'] = $value;
        $this->options['form_params']['NodeIp'] = $value;

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
    public function withDbName($value)
    {
        $this->data['DbName'] = $value;
        $this->options['form_params']['DbName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSearchKeyWord($value)
    {
        $this->data['SearchKeyWord'] = $value;
        $this->options['form_params']['SearchKeyWord'] = $value;

        return $this;
    }

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
 * @method string getSQLId()
 * @method string getInstanceId()
 * @method string getDatabaseName()
 * @method string getTenantId()
 * @method string getTableName()
 * @method string getIsConcurrentLimit()
 */
class DescribeOutlineBinding extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSQLId($value)
    {
        $this->data['SQLId'] = $value;
        $this->options['form_params']['SQLId'] = $value;

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
    public function withDatabaseName($value)
    {
        $this->data['DatabaseName'] = $value;
        $this->options['form_params']['DatabaseName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTableName($value)
    {
        $this->data['TableName'] = $value;
        $this->options['form_params']['TableName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIsConcurrentLimit($value)
    {
        $this->data['IsConcurrentLimit'] = $value;
        $this->options['form_params']['IsConcurrentLimit'] = $value;

        return $this;
    }
}

/**
 * @method string getDimensionValue()
 * @method string getInstanceId()
 * @method string getDimension()
 */
class DescribeParameters extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDimensionValue($value)
    {
        $this->data['DimensionValue'] = $value;
        $this->options['form_params']['DimensionValue'] = $value;

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
    public function withDimension($value)
    {
        $this->data['Dimension'] = $value;
        $this->options['form_params']['Dimension'] = $value;

        return $this;
    }
}

/**
 * @method string getStartTime()
 * @method string getPageNumber()
 * @method string getDimensionValue()
 * @method string getPageSize()
 * @method string getDimension()
 * @method string getEndTime()
 * @method string getInstanceId()
 */
class DescribeParametersHistory extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStartTime($value)
    {
        $this->data['StartTime'] = $value;
        $this->options['form_params']['StartTime'] = $value;

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
    public function withDimensionValue($value)
    {
        $this->data['DimensionValue'] = $value;
        $this->options['form_params']['DimensionValue'] = $value;

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
    public function withDimension($value)
    {
        $this->data['Dimension'] = $value;
        $this->options['form_params']['Dimension'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEndTime($value)
    {
        $this->data['EndTime'] = $value;
        $this->options['form_params']['EndTime'] = $value;

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
 * @method string getUId()
 * @method string getSqlText()
 * @method string getClientIp()
 * @method string getTenantId()
 * @method string getServerIp()
 * @method string getUsers()
 * @method string getInstanceId()
 * @method string getStatus()
 */
class DescribeProcessStatsComposition extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUId($value)
    {
        $this->data['UId'] = $value;
        $this->options['form_params']['UId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSqlText($value)
    {
        $this->data['SqlText'] = $value;
        $this->options['form_params']['SqlText'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientIp($value)
    {
        $this->data['ClientIp'] = $value;
        $this->options['form_params']['ClientIp'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServerIp($value)
    {
        $this->data['ServerIp'] = $value;
        $this->options['form_params']['ServerIp'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUsers($value)
    {
        $this->data['Users'] = $value;
        $this->options['form_params']['Users'] = $value;

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
    public function withStatus($value)
    {
        $this->data['Status'] = $value;
        $this->options['form_params']['Status'] = $value;

        return $this;
    }
}

/**
 * @method string getId()
 */
class DescribeProject extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withId($value)
    {
        $this->data['Id'] = $value;
        $this->options['form_params']['Id'] = $value;

        return $this;
    }
}

/**
 * @method string getId()
 */
class DescribeProjectComponents extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withId($value)
    {
        $this->data['Id'] = $value;
        $this->options['form_params']['Id'] = $value;

        return $this;
    }
}

/**
 * @method string getId()
 */
class DescribeProjectProgress extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withId($value)
    {
        $this->data['Id'] = $value;
        $this->options['form_params']['Id'] = $value;

        return $this;
    }
}

/**
 * @method string getMetricType()
 * @method string getStepName()
 * @method string getAggregator()
 * @method string getMaxPointNum()
 * @method string getEndTimestamp()
 * @method string getBeginTimestamp()
 * @method string getProjectId()
 */
class DescribeProjectStepMetric extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMetricType($value)
    {
        $this->data['MetricType'] = $value;
        $this->options['form_params']['MetricType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStepName($value)
    {
        $this->data['StepName'] = $value;
        $this->options['form_params']['StepName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAggregator($value)
    {
        $this->data['Aggregator'] = $value;
        $this->options['form_params']['Aggregator'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMaxPointNum($value)
    {
        $this->data['MaxPointNum'] = $value;
        $this->options['form_params']['MaxPointNum'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEndTimestamp($value)
    {
        $this->data['EndTimestamp'] = $value;
        $this->options['form_params']['EndTimestamp'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBeginTimestamp($value)
    {
        $this->data['BeginTimestamp'] = $value;
        $this->options['form_params']['BeginTimestamp'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectId($value)
    {
        $this->data['ProjectId'] = $value;
        $this->options['form_params']['ProjectId'] = $value;

        return $this;
    }
}

/**
 * @method string getId()
 */
class DescribeProjectSteps extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withId($value)
    {
        $this->data['Id'] = $value;
        $this->options['form_params']['Id'] = $value;

        return $this;
    }
}

/**
 * @method string getSQLId()
 * @method string getInstanceId()
 * @method string getTenantId()
 */
class DescribeRecommendIndex extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSQLId($value)
    {
        $this->data['SQLId'] = $value;
        $this->options['form_params']['SQLId'] = $value;

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
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

        return $this;
    }
}

/**
 * @method string getRestoreMode()
 * @method string getRestoreObjectType()
 * @method string getIsOnline()
 * @method string getIsRemote()
 * @method string getMethod()
 * @method string getInstanceId()
 * @method string getSetId()
 */
class DescribeRestorableTenants extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRestoreMode($value)
    {
        $this->data['RestoreMode'] = $value;
        $this->options['form_params']['RestoreMode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRestoreObjectType($value)
    {
        $this->data['RestoreObjectType'] = $value;
        $this->options['form_params']['RestoreObjectType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIsOnline($value)
    {
        $this->data['IsOnline'] = $value;
        $this->options['form_params']['IsOnline'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIsRemote($value)
    {
        $this->data['IsRemote'] = $value;
        $this->options['form_params']['IsRemote'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMethod($value)
    {
        $this->data['Method'] = $value;
        $this->options['form_params']['Method'] = $value;

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
    public function withSetId($value)
    {
        $this->data['SetId'] = $value;
        $this->options['form_params']['SetId'] = $value;

        return $this;
    }
}

/**
 * @method string getTraceId()
 * @method string getStartTime()
 * @method string getTenantId()
 * @method string getLimit()
 * @method string getSqlId()
 * @method string getEndTime()
 * @method string getInstanceId()
 * @method string getDbName()
 */
class DescribeSampleSqlRawTexts extends Rpc
{

    /** @var string */
    public $scheme = 'https';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTraceId($value)
    {
        $this->data['TraceId'] = $value;
        $this->options['form_params']['TraceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStartTime($value)
    {
        $this->data['StartTime'] = $value;
        $this->options['form_params']['StartTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLimit($value)
    {
        $this->data['Limit'] = $value;
        $this->options['form_params']['Limit'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSqlId($value)
    {
        $this->data['SqlId'] = $value;
        $this->options['form_params']['SqlId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEndTime($value)
    {
        $this->data['EndTime'] = $value;
        $this->options['form_params']['EndTime'] = $value;

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
    public function withDbName($value)
    {
        $this->data['DbName'] = $value;
        $this->options['form_params']['DbName'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 */
class DescribeSecurityIpGroups extends Rpc
{

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
 * @method string getInstanceId()
 * @method string getTenantId()
 */
class DescribeSessionList extends Rpc
{

    /** @var string */
    public $scheme = 'https';

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
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

        return $this;
    }
}

/**
 * @method string getStartTime()
 * @method string getPageNumber()
 * @method string getTenantId()
 * @method string getPageSize()
 * @method string getSQLId()
 * @method string getEndTime()
 */
class DescribeSlowSQLHistoryList extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStartTime($value)
    {
        $this->data['StartTime'] = $value;
        $this->options['form_params']['StartTime'] = $value;

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
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

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
    public function withSQLId($value)
    {
        $this->data['SQLId'] = $value;
        $this->options['form_params']['SQLId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEndTime($value)
    {
        $this->data['EndTime'] = $value;
        $this->options['form_params']['EndTime'] = $value;

        return $this;
    }
}

/**
 * @method string getStartTime()
 * @method string getPageNumber()
 * @method string getSearchRule()
 * @method string getTenantId()
 * @method string getPageSize()
 * @method string getSearchParameter()
 * @method string getSortOrder()
 * @method string getSearchValue()
 * @method string getSQLId()
 * @method string getFilterCondition()
 * @method string getEndTime()
 * @method string getNodeIp()
 * @method string getDbName()
 * @method string getSearchKeyWord()
 * @method string getSortColumn()
 */
class DescribeSlowSQLList extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStartTime($value)
    {
        $this->data['StartTime'] = $value;
        $this->options['form_params']['StartTime'] = $value;

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
    public function withSearchRule($value)
    {
        $this->data['SearchRule'] = $value;
        $this->options['form_params']['SearchRule'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

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
    public function withSearchParameter($value)
    {
        $this->data['SearchParameter'] = $value;
        $this->options['form_params']['SearchParameter'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSortOrder($value)
    {
        $this->data['SortOrder'] = $value;
        $this->options['form_params']['SortOrder'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSearchValue($value)
    {
        $this->data['SearchValue'] = $value;
        $this->options['form_params']['SearchValue'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSQLId($value)
    {
        $this->data['SQLId'] = $value;
        $this->options['form_params']['SQLId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFilterCondition($value)
    {
        $this->data['FilterCondition'] = $value;
        $this->options['form_params']['FilterCondition'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEndTime($value)
    {
        $this->data['EndTime'] = $value;
        $this->options['form_params']['EndTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNodeIp($value)
    {
        $this->data['NodeIp'] = $value;
        $this->options['form_params']['NodeIp'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDbName($value)
    {
        $this->data['DbName'] = $value;
        $this->options['form_params']['DbName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSearchKeyWord($value)
    {
        $this->data['SearchKeyWord'] = $value;
        $this->options['form_params']['SearchKeyWord'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSortColumn($value)
    {
        $this->data['SortColumn'] = $value;
        $this->options['form_params']['SortColumn'] = $value;

        return $this;
    }
}

/**
 * @method string getSQLId()
 * @method string getTenantId()
 */
class DescribeSQLDetails extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSQLId($value)
    {
        $this->data['SQLId'] = $value;
        $this->options['form_params']['SQLId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

        return $this;
    }
}

/**
 * @method string getSQLId()
 * @method string getEndTime()
 * @method string getStartTime()
 * @method string getPageNumber()
 * @method string getTenantId()
 * @method string getPageSize()
 */
class DescribeSQLHistoryList extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSQLId($value)
    {
        $this->data['SQLId'] = $value;
        $this->options['form_params']['SQLId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEndTime($value)
    {
        $this->data['EndTime'] = $value;
        $this->options['form_params']['EndTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStartTime($value)
    {
        $this->data['StartTime'] = $value;
        $this->options['form_params']['StartTime'] = $value;

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
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

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
}

/**
 * @method string getSQLId()
 * @method string getTenantId()
 */
class DescribeSQLPlans extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSQLId($value)
    {
        $this->data['SQLId'] = $value;
        $this->options['form_params']['SQLId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

        return $this;
    }
}

/**
 * @method string getReturnSqlText()
 * @method string getStartTime()
 * @method string getTenantId()
 * @method string getSqlId()
 * @method string getEndTime()
 * @method string getInstanceId()
 * @method string getDbName()
 */
class DescribeSQLSamples extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withReturnSqlText($value)
    {
        $this->data['ReturnSqlText'] = $value;
        $this->options['form_params']['ReturnSqlText'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStartTime($value)
    {
        $this->data['StartTime'] = $value;
        $this->options['form_params']['StartTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSqlId($value)
    {
        $this->data['SqlId'] = $value;
        $this->options['form_params']['SqlId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEndTime($value)
    {
        $this->data['EndTime'] = $value;
        $this->options['form_params']['EndTime'] = $value;

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
    public function withDbName($value)
    {
        $this->data['DbName'] = $value;
        $this->options['form_params']['DbName'] = $value;

        return $this;
    }
}

/**
 * @method string getStartTime()
 * @method string getTenantId()
 * @method string getSqlId()
 * @method string getEndTime()
 * @method string getInstanceId()
 * @method string getDbName()
 * @method string getAcceptLanguage()
 */
class DescribeSQLTuningAdvices extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStartTime($value)
    {
        $this->data['StartTime'] = $value;
        $this->options['form_params']['StartTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSqlId($value)
    {
        $this->data['SqlId'] = $value;
        $this->options['form_params']['SqlId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEndTime($value)
    {
        $this->data['EndTime'] = $value;
        $this->options['form_params']['EndTime'] = $value;

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
    public function withDbName($value)
    {
        $this->data['DbName'] = $value;
        $this->options['form_params']['DbName'] = $value;

        return $this;
    }

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
 * @method string getInstanceId()
 * @method string getTenantId()
 */
class DescribeStandbyCreateMode extends Rpc
{

    /** @var string */
    public $scheme = 'https';

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
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceType()
 */
class DescribeTagValues extends Rpc
{

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
 * @method string getInstanceId()
 * @method string getTenantId()
 */
class DescribeTenant extends Rpc
{

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
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

        return $this;
    }
}

/**
 * @method string getPageNumber()
 * @method string getInstanceId()
 * @method string getTenantId()
 * @method string getPageSize()
 * @method string getTenantName()
 */
class DescribeTenantEncryption extends Rpc
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
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

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
    public function withTenantName($value)
    {
        $this->data['TenantName'] = $value;
        $this->options['form_params']['TenantName'] = $value;

        return $this;
    }
}

/**
 * @method string getTenantIdList()
 * @method string getStartTime()
 * @method string getPageNumber()
 * @method string getPageSize()
 * @method string getTenantId()
 * @method string getEndTime()
 * @method string getInstanceId()
 * @method string getTenantName()
 * @method string getMetrics()
 */
class DescribeTenantMetrics extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTenantIdList($value)
    {
        $this->data['TenantIdList'] = $value;
        $this->options['form_params']['TenantIdList'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStartTime($value)
    {
        $this->data['StartTime'] = $value;
        $this->options['form_params']['StartTime'] = $value;

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
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEndTime($value)
    {
        $this->data['EndTime'] = $value;
        $this->options['form_params']['EndTime'] = $value;

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
    public function withTenantName($value)
    {
        $this->data['TenantName'] = $value;
        $this->options['form_params']['TenantName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMetrics($value)
    {
        $this->data['Metrics'] = $value;
        $this->options['form_params']['Metrics'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method string getTenantId()
 */
class DescribeTenantReadableScn extends Rpc
{

    /** @var string */
    public $scheme = 'https';

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
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

        return $this;
    }
}

/**
 * @method string getSearchKey()
 * @method string getPageNumber()
 * @method string getInstanceId()
 * @method string getPageSize()
 * @method string getTenantId()
 * @method string getTenantName()
 */
class DescribeTenants extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSearchKey($value)
    {
        $this->data['SearchKey'] = $value;
        $this->options['form_params']['SearchKey'] = $value;

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
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTenantName($value)
    {
        $this->data['TenantName'] = $value;
        $this->options['form_params']['TenantName'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method string getTenantId()
 * @method string getCheckId()
 */
class DescribeTenantSecurityConfigs extends Rpc
{

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
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCheckId($value)
    {
        $this->data['CheckId'] = $value;
        $this->options['form_params']['CheckId'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method string getTenantId()
 */
class DescribeTenantSecurityIpGroups extends Rpc
{

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
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

        return $this;
    }
}

/**
 * @method string getTags()
 * @method string getInstanceId()
 * @method string getTenantIds()
 */
class DescribeTenantTags extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTags($value)
    {
        $this->data['Tags'] = $value;
        $this->options['form_params']['Tags'] = $value;

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
    public function withTenantIds($value)
    {
        $this->data['TenantIds'] = $value;
        $this->options['form_params']['TenantIds'] = $value;

        return $this;
    }
}

/**
 * @method string getTenantId()
 */
class DescribeTenantUserRoles extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

        return $this;
    }
}

/**
 * @method string getSearchKey()
 * @method string getPageNumber()
 * @method string getTenantId()
 * @method string getPageSize()
 * @method string getUserName()
 */
class DescribeTenantUsers extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSearchKey($value)
    {
        $this->data['SearchKey'] = $value;
        $this->options['form_params']['SearchKey'] = $value;

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
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

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
    public function withUserName($value)
    {
        $this->data['UserName'] = $value;
        $this->options['form_params']['UserName'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method string getTenantId()
 */
class DescribeTenantZonesRead extends Rpc
{

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
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

        return $this;
    }
}

class DescribeTimeZones extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method string getPageNumber()
 * @method string getSearchRule()
 * @method string getTenantId()
 * @method string getPageSize()
 * @method string getSearchParameter()
 * @method string getSortOrder()
 * @method string getSearchValue()
 * @method string getSQLId()
 * @method string getFilterCondition()
 * @method string getEndTime()
 * @method string getNodeIp()
 * @method string getDbName()
 * @method string getSearchKeyWord()
 * @method string getSortColumn()
 */
class DescribeTopSQLList extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStartTime($value)
    {
        $this->data['StartTime'] = $value;
        $this->options['form_params']['StartTime'] = $value;

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
    public function withSearchRule($value)
    {
        $this->data['SearchRule'] = $value;
        $this->options['form_params']['SearchRule'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

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
    public function withSearchParameter($value)
    {
        $this->data['SearchParameter'] = $value;
        $this->options['form_params']['SearchParameter'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSortOrder($value)
    {
        $this->data['SortOrder'] = $value;
        $this->options['form_params']['SortOrder'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSearchValue($value)
    {
        $this->data['SearchValue'] = $value;
        $this->options['form_params']['SearchValue'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSQLId($value)
    {
        $this->data['SQLId'] = $value;
        $this->options['form_params']['SQLId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFilterCondition($value)
    {
        $this->data['FilterCondition'] = $value;
        $this->options['form_params']['FilterCondition'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEndTime($value)
    {
        $this->data['EndTime'] = $value;
        $this->options['form_params']['EndTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNodeIp($value)
    {
        $this->data['NodeIp'] = $value;
        $this->options['form_params']['NodeIp'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDbName($value)
    {
        $this->data['DbName'] = $value;
        $this->options['form_params']['DbName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSearchKeyWord($value)
    {
        $this->data['SearchKeyWord'] = $value;
        $this->options['form_params']['SearchKeyWord'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSortColumn($value)
    {
        $this->data['SortColumn'] = $value;
        $this->options['form_params']['SortColumn'] = $value;

        return $this;
    }
}

/**
 * @method string getSeries()
 * @method string getCpuArch()
 * @method string getDeployType()
 */
class DescribeZones extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSeries($value)
    {
        $this->data['Series'] = $value;
        $this->options['form_params']['Series'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCpuArch($value)
    {
        $this->data['CpuArch'] = $value;
        $this->options['form_params']['CpuArch'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeployType($value)
    {
        $this->data['DeployType'] = $value;
        $this->options['form_params']['DeployType'] = $value;

        return $this;
    }
}

/**
 * @method string getType()
 * @method string getEffectiveTimeMinutes()
 */
class GetUploadOssUrl extends Rpc
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
    public function withEffectiveTimeMinutes($value)
    {
        $this->data['EffectiveTimeMinutes'] = $value;
        $this->options['form_params']['EffectiveTimeMinutes'] = $value;

        return $this;
    }
}

/**
 * @method string getSessionList()
 * @method string getInstanceId()
 * @method string getTenantId()
 */
class KillProcessList extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSessionList($value)
    {
        $this->data['SessionList'] = $value;
        $this->options['form_params']['SessionList'] = $value;

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
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

        return $this;
    }
}

class ListAllLabels extends Rpc
{
}

/**
 * @method string getTypes()
 * @method string getSearchKey()
 * @method string getPageNumber()
 * @method string getPageSize()
 * @method string getSortField()
 * @method string getOrder()
 */
class ListDataSource extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTypes($value)
    {
        $this->data['Types'] = $value;
        $this->options['form_params']['Types'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSearchKey($value)
    {
        $this->data['SearchKey'] = $value;
        $this->options['form_params']['SearchKey'] = $value;

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
    public function withSortField($value)
    {
        $this->data['SortField'] = $value;
        $this->options['form_params']['SortField'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrder($value)
    {
        $this->data['Order'] = $value;
        $this->options['form_params']['Order'] = $value;

        return $this;
    }
}

/**
 * @method string getDestSchemas()
 * @method string getPageNumber()
 * @method string getPageSize()
 * @method string getSourceSchemas()
 * @method string getProjectId()
 * @method string getStatus()
 */
class ListProjectFullVerifyResult extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDestSchemas($value)
    {
        $this->data['DestSchemas'] = $value;
        $this->options['form_params']['DestSchemas'] = $value;

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
    public function withSourceSchemas($value)
    {
        $this->data['SourceSchemas'] = $value;
        $this->options['form_params']['SourceSchemas'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectId($value)
    {
        $this->data['ProjectId'] = $value;
        $this->options['form_params']['ProjectId'] = $value;

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
 * @method string getId()
 */
class ListProjectModifyRecords extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withId($value)
    {
        $this->data['Id'] = $value;
        $this->options['form_params']['Id'] = $value;

        return $this;
    }
}

/**
 * @method string getSearchKey()
 * @method string getType()
 * @method string getVisibleSubProject()
 * @method string getPageNumber()
 * @method string getSinkEndpointTypes()
 * @method string getPageSize()
 * @method string getOrder()
 * @method string getSourceEndpointTypes()
 * @method string getSortField()
 * @method string getNeedRelatedInfo()
 * @method string getLabelIds()
 * @method string getStatus()
 */
class ListProjects extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSearchKey($value)
    {
        $this->data['SearchKey'] = $value;
        $this->options['form_params']['SearchKey'] = $value;

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
    public function withVisibleSubProject($value)
    {
        $this->data['VisibleSubProject'] = $value;
        $this->options['form_params']['VisibleSubProject'] = $value;

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
    public function withSinkEndpointTypes($value)
    {
        $this->data['SinkEndpointTypes'] = $value;
        $this->options['form_params']['SinkEndpointTypes'] = $value;

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
    public function withOrder($value)
    {
        $this->data['Order'] = $value;
        $this->options['form_params']['Order'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSourceEndpointTypes($value)
    {
        $this->data['SourceEndpointTypes'] = $value;
        $this->options['form_params']['SourceEndpointTypes'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSortField($value)
    {
        $this->data['SortField'] = $value;
        $this->options['form_params']['SortField'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNeedRelatedInfo($value)
    {
        $this->data['NeedRelatedInfo'] = $value;
        $this->options['form_params']['NeedRelatedInfo'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLabelIds($value)
    {
        $this->data['LabelIds'] = $value;
        $this->options['form_params']['LabelIds'] = $value;

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
 * @method string getOnlyBindable()
 * @method string getPageNumber()
 * @method string getSpecs()
 * @method string getInstanceName()
 * @method string getPageSize()
 * @method string getSourceType()
 * @method string getDestType()
 */
class ListWorkerInstances extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOnlyBindable($value)
    {
        $this->data['OnlyBindable'] = $value;
        $this->options['form_params']['OnlyBindable'] = $value;

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
    public function withSpecs($value)
    {
        $this->data['Specs'] = $value;
        $this->options['form_params']['Specs'] = $value;

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
    public function withSourceType($value)
    {
        $this->data['SourceType'] = $value;
        $this->options['form_params']['SourceType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDestType($value)
    {
        $this->data['DestType'] = $value;
        $this->options['form_params']['DestType'] = $value;

        return $this;
    }
}

/**
 * @method string getDescription()
 * @method string getInstanceId()
 * @method string getDatabaseName()
 * @method string getTenantId()
 */
class ModifyDatabaseDescription extends Rpc
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
    public function withDatabaseName($value)
    {
        $this->data['DatabaseName'] = $value;
        $this->options['form_params']['DatabaseName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

        return $this;
    }
}

/**
 * @method string getUsers()
 * @method string getInstanceId()
 * @method string getDatabaseName()
 * @method string getTenantId()
 */
class ModifyDatabaseUserRoles extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUsers($value)
    {
        $this->data['Users'] = $value;
        $this->options['form_params']['Users'] = $value;

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
    public function withDatabaseName($value)
    {
        $this->data['DatabaseName'] = $value;
        $this->options['form_params']['DatabaseName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method string getInstanceName()
 */
class ModifyInstanceName extends Rpc
{

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
}

/**
 * @method string getDryRun()
 * @method string getNodeNum()
 * @method string getInstanceId()
 */
class ModifyInstanceNodeNum extends Rpc
{

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
    public function withNodeNum($value)
    {
        $this->data['NodeNum'] = $value;
        $this->options['form_params']['NodeNum'] = $value;

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
 * @method string getAutoUseCoupon()
 * @method string getInstanceClass()
 * @method string getDryRun()
 * @method string getDiskSize()
 * @method string getDiskType()
 * @method string getInstanceId()
 * @method string getLogDiskSize()
 * @method string getUpgradeSpecNative()
 */
class ModifyInstanceSpec extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAutoUseCoupon($value)
    {
        $this->data['AutoUseCoupon'] = $value;
        $this->options['form_params']['AutoUseCoupon'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceClass($value)
    {
        $this->data['InstanceClass'] = $value;
        $this->options['form_params']['InstanceClass'] = $value;

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
    public function withDiskSize($value)
    {
        $this->data['DiskSize'] = $value;
        $this->options['form_params']['DiskSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDiskType($value)
    {
        $this->data['DiskType'] = $value;
        $this->options['form_params']['DiskType'] = $value;

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
    public function withLogDiskSize($value)
    {
        $this->data['LogDiskSize'] = $value;
        $this->options['form_params']['LogDiskSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUpgradeSpecNative($value)
    {
        $this->data['UpgradeSpecNative'] = $value;
        $this->options['form_params']['UpgradeSpecNative'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method string getEnableSSL()
 */
class ModifyInstanceSSL extends Rpc
{

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
    public function withEnableSSL($value)
    {
        $this->data['EnableSSL'] = $value;
        $this->options['form_params']['EnableSSL'] = $value;

        return $this;
    }
}

/**
 * @method string getTags()
 * @method string getInstanceId()
 */
class ModifyInstanceTags extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTags($value)
    {
        $this->data['Tags'] = $value;
        $this->options['form_params']['Tags'] = $value;

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
 * @method string getDiskSize()
 * @method string getSpec()
 * @method string getInstanceId()
 * @method string getAcceptLanguage()
 */
class ModifyInstanceTemporaryCapacity extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDiskSize($value)
    {
        $this->data['DiskSize'] = $value;
        $this->options['form_params']['DiskSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSpec($value)
    {
        $this->data['Spec'] = $value;
        $this->options['form_params']['Spec'] = $value;

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
    public function withAcceptLanguage($value)
    {
        $this->data['AcceptLanguage'] = $value;
        $this->options['form_params']['AcceptLanguage'] = $value;

        return $this;
    }
}

/**
 * @method string getDimensionValue()
 * @method string getInstanceId()
 * @method string getDimension()
 * @method string getParameters()
 */
class ModifyParameters extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDimensionValue($value)
    {
        $this->data['DimensionValue'] = $value;
        $this->options['form_params']['DimensionValue'] = $value;

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
    public function withDimension($value)
    {
        $this->data['Dimension'] = $value;
        $this->options['form_params']['Dimension'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withParameters($value)
    {
        $this->data['Parameters'] = $value;
        $this->options['form_params']['Parameters'] = $value;

        return $this;
    }
}

/**
 * @method string getSecurityIps()
 * @method string getSecurityIpGroupName()
 * @method string getInstanceId()
 */
class ModifySecurityIps extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSecurityIps($value)
    {
        $this->data['SecurityIps'] = $value;
        $this->options['form_params']['SecurityIps'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSecurityIpGroupName($value)
    {
        $this->data['SecurityIpGroupName'] = $value;
        $this->options['form_params']['SecurityIpGroupName'] = $value;

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
 * @method string getNewKey()
 * @method string getKey()
 */
class ModifyTagName extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNewKey($value)
    {
        $this->data['NewKey'] = $value;
        $this->options['form_params']['NewKey'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withKey($value)
    {
        $this->data['Key'] = $value;
        $this->options['form_params']['Key'] = $value;

        return $this;
    }
}

/**
 * @method string getNewValue()
 * @method string getValue()
 * @method string getKey()
 */
class ModifyTagValueName extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNewValue($value)
    {
        $this->data['NewValue'] = $value;
        $this->options['form_params']['NewValue'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withValue($value)
    {
        $this->data['Value'] = $value;
        $this->options['form_params']['Value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withKey($value)
    {
        $this->data['Key'] = $value;
        $this->options['form_params']['Key'] = $value;

        return $this;
    }
}

/**
 * @method string getEncryptionKeyId()
 * @method string getInstanceId()
 * @method string getTenantId()
 * @method string getEncryptionType()
 */
class ModifyTenantEncryption extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEncryptionKeyId($value)
    {
        $this->data['EncryptionKeyId'] = $value;
        $this->options['form_params']['EncryptionKeyId'] = $value;

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
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEncryptionType($value)
    {
        $this->data['EncryptionType'] = $value;
        $this->options['form_params']['EncryptionType'] = $value;

        return $this;
    }
}

/**
 * @method string getTenantEndpointDirectId()
 * @method string getUserVSwitchId()
 * @method string getMasterIntranetAddressZone()
 * @method string getTenantId()
 * @method string getTenantEndpointId()
 * @method string getInstanceId()
 * @method string getPrimaryZone()
 * @method string getVpcId()
 * @method string getUserVpcOwnerId()
 * @method string getUserDirectVSwitchId()
 */
class ModifyTenantPrimaryZone extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTenantEndpointDirectId($value)
    {
        $this->data['TenantEndpointDirectId'] = $value;
        $this->options['form_params']['TenantEndpointDirectId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserVSwitchId($value)
    {
        $this->data['UserVSwitchId'] = $value;
        $this->options['form_params']['UserVSwitchId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMasterIntranetAddressZone($value)
    {
        $this->data['MasterIntranetAddressZone'] = $value;
        $this->options['form_params']['MasterIntranetAddressZone'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTenantEndpointId($value)
    {
        $this->data['TenantEndpointId'] = $value;
        $this->options['form_params']['TenantEndpointId'] = $value;

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
    public function withPrimaryZone($value)
    {
        $this->data['PrimaryZone'] = $value;
        $this->options['form_params']['PrimaryZone'] = $value;

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
    public function withUserVpcOwnerId($value)
    {
        $this->data['UserVpcOwnerId'] = $value;
        $this->options['form_params']['UserVpcOwnerId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserDirectVSwitchId($value)
    {
        $this->data['UserDirectVSwitchId'] = $value;
        $this->options['form_params']['UserDirectVSwitchId'] = $value;

        return $this;
    }
}

/**
 * @method string getMemory()
 * @method string getLogDisk()
 * @method string getCpu()
 * @method string getInstanceId()
 * @method string getTenantId()
 * @method string getReadOnlyZoneList()
 */
class ModifyTenantResource extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMemory($value)
    {
        $this->data['Memory'] = $value;
        $this->options['form_params']['Memory'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLogDisk($value)
    {
        $this->data['LogDisk'] = $value;
        $this->options['form_params']['LogDisk'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCpu($value)
    {
        $this->data['Cpu'] = $value;
        $this->options['form_params']['Cpu'] = $value;

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
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withReadOnlyZoneList($value)
    {
        $this->data['ReadOnlyZoneList'] = $value;
        $this->options['form_params']['ReadOnlyZoneList'] = $value;

        return $this;
    }
}

/**
 * @method string getSecurityIps()
 * @method string getSecurityIpGroupName()
 * @method string getInstanceId()
 * @method string getTenantId()
 */
class ModifyTenantSecurityIpGroup extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSecurityIps($value)
    {
        $this->data['SecurityIps'] = $value;
        $this->options['form_params']['SecurityIps'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSecurityIpGroupName($value)
    {
        $this->data['SecurityIpGroupName'] = $value;
        $this->options['form_params']['SecurityIpGroupName'] = $value;

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
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

        return $this;
    }
}

/**
 * @method string getTags()
 * @method string getInstanceId()
 * @method string getTenantId()
 */
class ModifyTenantTags extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTags($value)
    {
        $this->data['Tags'] = $value;
        $this->options['form_params']['Tags'] = $value;

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
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

        return $this;
    }
}

/**
 * @method string getDescription()
 * @method string getInstanceId()
 * @method string getTenantId()
 * @method string getUserName()
 */
class ModifyTenantUserDescription extends Rpc
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
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserName($value)
    {
        $this->data['UserName'] = $value;
        $this->options['form_params']['UserName'] = $value;

        return $this;
    }
}

/**
 * @method string getUserPassword()
 * @method string getInstanceId()
 * @method string getTenantId()
 * @method string getEncryptionType()
 * @method string getUserName()
 */
class ModifyTenantUserPassword extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserPassword($value)
    {
        $this->data['UserPassword'] = $value;
        $this->options['form_params']['UserPassword'] = $value;

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
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEncryptionType($value)
    {
        $this->data['EncryptionType'] = $value;
        $this->options['form_params']['EncryptionType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserName($value)
    {
        $this->data['UserName'] = $value;
        $this->options['form_params']['UserName'] = $value;

        return $this;
    }
}

/**
 * @method string getUserRole()
 * @method string getInstanceId()
 * @method string getModifyType()
 * @method string getTenantId()
 * @method string getUserName()
 */
class ModifyTenantUserRoles extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserRole($value)
    {
        $this->data['UserRole'] = $value;
        $this->options['form_params']['UserRole'] = $value;

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
    public function withModifyType($value)
    {
        $this->data['ModifyType'] = $value;
        $this->options['form_params']['ModifyType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserName($value)
    {
        $this->data['UserName'] = $value;
        $this->options['form_params']['UserName'] = $value;

        return $this;
    }
}

/**
 * @method string getUserStatus()
 * @method string getInstanceId()
 * @method string getTenantId()
 * @method string getUserName()
 */
class ModifyTenantUserStatus extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserStatus($value)
    {
        $this->data['UserStatus'] = $value;
        $this->options['form_params']['UserStatus'] = $value;

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
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserName($value)
    {
        $this->data['UserName'] = $value;
        $this->options['form_params']['UserName'] = $value;

        return $this;
    }
}

/**
 * @method string getId()
 */
class ReleaseProject extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withId($value)
    {
        $this->data['Id'] = $value;
        $this->options['form_params']['Id'] = $value;

        return $this;
    }
}

/**
 * @method string getId()
 */
class ReleaseWorkerInstance extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withId($value)
    {
        $this->data['Id'] = $value;
        $this->options['form_params']['Id'] = $value;

        return $this;
    }
}

/**
 * @method string getId()
 */
class ResumeProject extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withId($value)
    {
        $this->data['Id'] = $value;
        $this->options['form_params']['Id'] = $value;

        return $this;
    }
}

/**
 * @method string getId()
 */
class RetryProjectModifyRecords extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withId($value)
    {
        $this->data['Id'] = $value;
        $this->options['form_params']['Id'] = $value;

        return $this;
    }
}

/**
 * @method string getId()
 */
class StartProject extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withId($value)
    {
        $this->data['Id'] = $value;
        $this->options['form_params']['Id'] = $value;

        return $this;
    }
}

/**
 * @method string getId()
 */
class StartProjectsByLabel extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withId($value)
    {
        $this->data['Id'] = $value;
        $this->options['form_params']['Id'] = $value;

        return $this;
    }
}

/**
 * @method string getId()
 */
class StopProject extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withId($value)
    {
        $this->data['Id'] = $value;
        $this->options['form_params']['Id'] = $value;

        return $this;
    }
}

/**
 * @method string getId()
 */
class StopProjectModifyRecords extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withId($value)
    {
        $this->data['Id'] = $value;
        $this->options['form_params']['Id'] = $value;

        return $this;
    }
}

/**
 * @method string getId()
 */
class StopProjectsByLabel extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withId($value)
    {
        $this->data['Id'] = $value;
        $this->options['form_params']['Id'] = $value;

        return $this;
    }
}

/**
 * @method string getForced()
 * @method string getInstanceId()
 * @method string getTargetInstanceId()
 */
class SwitchoverInstance extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withForced($value)
    {
        $this->data['Forced'] = $value;
        $this->options['form_params']['Forced'] = $value;

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
    public function withTargetInstanceId($value)
    {
        $this->data['TargetInstanceId'] = $value;
        $this->options['form_params']['TargetInstanceId'] = $value;

        return $this;
    }
}

/**
 * @method string getCommonTransferConfig()
 * @method string getReverseIncrTransferConfig()
 * @method string getFullTransferConfig()
 * @method string getId()
 * @method string getIncrTransferConfig()
 */
class UpdateProjectConfig extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCommonTransferConfig($value)
    {
        $this->data['CommonTransferConfig'] = $value;
        $this->options['form_params']['CommonTransferConfig'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withReverseIncrTransferConfig($value)
    {
        $this->data['ReverseIncrTransferConfig'] = $value;
        $this->options['form_params']['ReverseIncrTransferConfig'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFullTransferConfig($value)
    {
        $this->data['FullTransferConfig'] = $value;
        $this->options['form_params']['FullTransferConfig'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withId($value)
    {
        $this->data['Id'] = $value;
        $this->options['form_params']['Id'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIncrTransferConfig($value)
    {
        $this->data['IncrTransferConfig'] = $value;
        $this->options['form_params']['IncrTransferConfig'] = $value;

        return $this;
    }
}
