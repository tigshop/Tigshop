<?php

namespace AlibabaCloud\NAS\V20170626;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AddClientToBlackList addClientToBlackList(array $options = [])
 * @method AddTags addTags(array $options = [])
 * @method ApplyAutoSnapshotPolicy applyAutoSnapshotPolicy(array $options = [])
 * @method ApplyDataFlowAutoRefresh applyDataFlowAutoRefresh(array $options = [])
 * @method CancelAutoSnapshotPolicy cancelAutoSnapshotPolicy(array $options = [])
 * @method CancelDataFlowAutoRefresh cancelDataFlowAutoRefresh(array $options = [])
 * @method CancelDataFlowTask cancelDataFlowTask(array $options = [])
 * @method CancelDirQuota cancelDirQuota(array $options = [])
 * @method CancelLifecycleRetrieveJob cancelLifecycleRetrieveJob(array $options = [])
 * @method CancelRecycleBinJob cancelRecycleBinJob(array $options = [])
 * @method CreateAccessGroup createAccessGroup(array $options = [])
 * @method CreateAccessRule createAccessRule(array $options = [])
 * @method CreateAutoSnapshotPolicy createAutoSnapshotPolicy(array $options = [])
 * @method CreateDataFlow createDataFlow(array $options = [])
 * @method CreateDataFlowTask createDataFlowTask(array $options = [])
 * @method CreateFile createFile(array $options = [])
 * @method CreateFileset createFileset(array $options = [])
 * @method CreateFileSystem createFileSystem(array $options = [])
 * @method CreateLDAPConfig createLDAPConfig(array $options = [])
 * @method CreateLifecyclePolicy createLifecyclePolicy(array $options = [])
 * @method CreateLifecycleRetrieveJob createLifecycleRetrieveJob(array $options = [])
 * @method CreateMountTarget createMountTarget(array $options = [])
 * @method CreateProtocolMountTarget createProtocolMountTarget(array $options = [])
 * @method CreateProtocolService createProtocolService(array $options = [])
 * @method CreateRecycleBinDeleteJob createRecycleBinDeleteJob(array $options = [])
 * @method CreateRecycleBinRestoreJob createRecycleBinRestoreJob(array $options = [])
 * @method CreateSnapshot createSnapshot(array $options = [])
 * @method DeleteAccessGroup deleteAccessGroup(array $options = [])
 * @method DeleteAccessRule deleteAccessRule(array $options = [])
 * @method DeleteAutoSnapshotPolicy deleteAutoSnapshotPolicy(array $options = [])
 * @method DeleteDataFlow deleteDataFlow(array $options = [])
 * @method DeleteFileset deleteFileset(array $options = [])
 * @method DeleteFileSystem deleteFileSystem(array $options = [])
 * @method DeleteLDAPConfig deleteLDAPConfig(array $options = [])
 * @method DeleteLifecyclePolicy deleteLifecyclePolicy(array $options = [])
 * @method DeleteMountTarget deleteMountTarget(array $options = [])
 * @method DeleteProtocolMountTarget deleteProtocolMountTarget(array $options = [])
 * @method DeleteProtocolService deleteProtocolService(array $options = [])
 * @method DeleteSnapshot deleteSnapshot(array $options = [])
 * @method DescribeAccessGroups describeAccessGroups(array $options = [])
 * @method DescribeAccessRules describeAccessRules(array $options = [])
 * @method DescribeAutoSnapshotPolicies describeAutoSnapshotPolicies(array $options = [])
 * @method DescribeAutoSnapshotTasks describeAutoSnapshotTasks(array $options = [])
 * @method DescribeBlackListClients describeBlackListClients(array $options = [])
 * @method DescribeDataFlows describeDataFlows(array $options = [])
 * @method DescribeDataFlowTasks describeDataFlowTasks(array $options = [])
 * @method DescribeDirQuotas describeDirQuotas(array $options = [])
 * @method DescribeFilesets describeFilesets(array $options = [])
 * @method DescribeFileSystems describeFileSystems(array $options = [])
 * @method DescribeFileSystemStatistics describeFileSystemStatistics(array $options = [])
 * @method DescribeLDAPConfig describeLDAPConfig(array $options = [])
 * @method DescribeLifecyclePolicies describeLifecyclePolicies(array $options = [])
 * @method DescribeLogAnalysis describeLogAnalysis(array $options = [])
 * @method DescribeMountedClients describeMountedClients(array $options = [])
 * @method DescribeMountTargets describeMountTargets(array $options = [])
 * @method DescribeProtocolMountTarget describeProtocolMountTarget(array $options = [])
 * @method DescribeProtocolService describeProtocolService(array $options = [])
 * @method DescribeRegions describeRegions(array $options = [])
 * @method DescribeSmbAcl describeSmbAcl(array $options = [])
 * @method DescribeSnapshots describeSnapshots(array $options = [])
 * @method DescribeStoragePackages describeStoragePackages(array $options = [])
 * @method DescribeTags describeTags(array $options = [])
 * @method DescribeZones describeZones(array $options = [])
 * @method DisableAndCleanRecycleBin disableAndCleanRecycleBin(array $options = [])
 * @method DisableSmbAcl disableSmbAcl(array $options = [])
 * @method EnableRecycleBin enableRecycleBin(array $options = [])
 * @method EnableSmbAcl enableSmbAcl(array $options = [])
 * @method GetDirectoryOrFileProperties getDirectoryOrFileProperties(array $options = [])
 * @method GetRecycleBinAttribute getRecycleBinAttribute(array $options = [])
 * @method ListDirectoriesAndFiles listDirectoriesAndFiles(array $options = [])
 * @method ListLifecycleRetrieveJobs listLifecycleRetrieveJobs(array $options = [])
 * @method ListRecentlyRecycledDirectories listRecentlyRecycledDirectories(array $options = [])
 * @method ListRecycleBinJobs listRecycleBinJobs(array $options = [])
 * @method ListRecycledDirectoriesAndFiles listRecycledDirectoriesAndFiles(array $options = [])
 * @method ListTagResources listTagResources(array $options = [])
 * @method ModifyAccessGroup modifyAccessGroup(array $options = [])
 * @method ModifyAccessRule modifyAccessRule(array $options = [])
 * @method ModifyAutoSnapshotPolicy modifyAutoSnapshotPolicy(array $options = [])
 * @method ModifyDataFlow modifyDataFlow(array $options = [])
 * @method ModifyDataFlowAutoRefresh modifyDataFlowAutoRefresh(array $options = [])
 * @method ModifyFileset modifyFileset(array $options = [])
 * @method ModifyFileSystem modifyFileSystem(array $options = [])
 * @method ModifyLDAPConfig modifyLDAPConfig(array $options = [])
 * @method ModifyLifecyclePolicy modifyLifecyclePolicy(array $options = [])
 * @method ModifyMountTarget modifyMountTarget(array $options = [])
 * @method ModifyProtocolMountTarget modifyProtocolMountTarget(array $options = [])
 * @method ModifyProtocolService modifyProtocolService(array $options = [])
 * @method ModifySmbAcl modifySmbAcl(array $options = [])
 * @method OpenNASService openNASService(array $options = [])
 * @method RemoveClientFromBlackList removeClientFromBlackList(array $options = [])
 * @method RemoveTags removeTags(array $options = [])
 * @method ResetFileSystem resetFileSystem(array $options = [])
 * @method RetryLifecycleRetrieveJob retryLifecycleRetrieveJob(array $options = [])
 * @method SetDirQuota setDirQuota(array $options = [])
 * @method StartDataFlow startDataFlow(array $options = [])
 * @method StopDataFlow stopDataFlow(array $options = [])
 * @method TagResources tagResources(array $options = [])
 * @method UntagResources untagResources(array $options = [])
 * @method UpdateRecycleBinAttribute updateRecycleBinAttribute(array $options = [])
 * @method UpgradeFileSystem upgradeFileSystem(array $options = [])
 */
class NASApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'NAS';

    /** @var string */
    public $version = '2017-06-26';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'NAS';
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getClientIP()
 * @method $this withClientIP($value)
 * @method string getFileSystemId()
 * @method $this withFileSystemId($value)
 */
class AddClientToBlackList extends Rpc
{
}

/**
 * @method array getTag()
 * @method string getFileSystemId()
 * @method $this withFileSystemId($value)
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
 * @method string getAutoSnapshotPolicyId()
 * @method $this withAutoSnapshotPolicyId($value)
 * @method string getFileSystemIds()
 * @method $this withFileSystemIds($value)
 */
class ApplyAutoSnapshotPolicy extends Rpc
{
}

/**
 * @method string getAutoRefreshPolicy()
 * @method $this withAutoRefreshPolicy($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method array getAutoRefreshs()
 * @method string getFileSystemId()
 * @method $this withFileSystemId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getDataFlowId()
 * @method $this withDataFlowId($value)
 * @method string getAutoRefreshInterval()
 * @method $this withAutoRefreshInterval($value)
 */
class ApplyDataFlowAutoRefresh extends Rpc
{

    /**
     * @param array $autoRefreshs
     *
     * @return $this
     */
	public function withAutoRefreshs(array $autoRefreshs)
	{
	    $this->data['AutoRefreshs'] = $autoRefreshs;
		foreach ($autoRefreshs as $depth1 => $depth1Value) {
			if(isset($depth1Value['RefreshPath'])){
				$this->options['query']['AutoRefreshs.' . ($depth1 + 1) . '.RefreshPath'] = $depth1Value['RefreshPath'];
			}
		}

		return $this;
    }
}

/**
 * @method string getFileSystemIds()
 * @method $this withFileSystemIds($value)
 */
class CancelAutoSnapshotPolicy extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getRefreshPath()
 * @method $this withRefreshPath($value)
 * @method string getFileSystemId()
 * @method $this withFileSystemId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getDataFlowId()
 * @method $this withDataFlowId($value)
 */
class CancelDataFlowAutoRefresh extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 * @method string getFileSystemId()
 * @method $this withFileSystemId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getDataFlowId()
 * @method $this withDataFlowId($value)
 */
class CancelDataFlowTask extends Rpc
{
}

/**
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getPath()
 * @method $this withPath($value)
 * @method string getFileSystemId()
 * @method $this withFileSystemId($value)
 * @method string getUserType()
 * @method $this withUserType($value)
 */
class CancelDirQuota extends Rpc
{
}

/**
 * @method string getJobId()
 * @method $this withJobId($value)
 */
class CancelLifecycleRetrieveJob extends Rpc
{
}

/**
 * @method string getJobId()
 * @method $this withJobId($value)
 */
class CancelRecycleBinJob extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getFileSystemType()
 * @method $this withFileSystemType($value)
 * @method string getAccessGroupType()
 * @method $this withAccessGroupType($value)
 * @method string getAccessGroupName()
 * @method $this withAccessGroupName($value)
 */
class CreateAccessGroup extends Rpc
{
}

/**
 * @method string getRWAccessType()
 * @method $this withRWAccessType($value)
 * @method string getUserAccessType()
 * @method $this withUserAccessType($value)
 * @method string getFileSystemType()
 * @method $this withFileSystemType($value)
 * @method string getIpv6SourceCidrIp()
 * @method $this withIpv6SourceCidrIp($value)
 * @method string getSourceCidrIp()
 * @method $this withSourceCidrIp($value)
 * @method string getPriority()
 * @method $this withPriority($value)
 * @method string getAccessGroupName()
 * @method $this withAccessGroupName($value)
 */
class CreateAccessRule extends Rpc
{
}

/**
 * @method string getTimePoints()
 * @method $this withTimePoints($value)
 * @method string getRepeatWeekdays()
 * @method $this withRepeatWeekdays($value)
 * @method string getFileSystemType()
 * @method $this withFileSystemType($value)
 * @method string getAutoSnapshotPolicyName()
 * @method $this withAutoSnapshotPolicyName($value)
 * @method string getRetentionDays()
 * @method $this withRetentionDays($value)
 */
class CreateAutoSnapshotPolicy extends Rpc
{
}

/**
 * @method string getAutoRefreshPolicy()
 * @method $this withAutoRefreshPolicy($value)
 * @method string getFsetId()
 * @method $this withFsetId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method array getAutoRefreshs()
 * @method string getSourceSecurityType()
 * @method $this withSourceSecurityType($value)
 * @method string getSourceStorage()
 * @method $this withSourceStorage($value)
 * @method string getThroughput()
 * @method $this withThroughput($value)
 * @method string getFileSystemId()
 * @method $this withFileSystemId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getAutoRefreshInterval()
 * @method $this withAutoRefreshInterval($value)
 */
class CreateDataFlow extends Rpc
{

    /**
     * @param array $autoRefreshs
     *
     * @return $this
     */
	public function withAutoRefreshs(array $autoRefreshs)
	{
	    $this->data['AutoRefreshs'] = $autoRefreshs;
		foreach ($autoRefreshs as $depth1 => $depth1Value) {
			if(isset($depth1Value['RefreshPath'])){
				$this->options['query']['AutoRefreshs.' . ($depth1 + 1) . '.RefreshPath'] = $depth1Value['RefreshPath'];
			}
		}

		return $this;
    }
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDirectory()
 * @method $this withDirectory($value)
 * @method string getSrcTaskId()
 * @method $this withSrcTaskId($value)
 * @method string getDataType()
 * @method $this withDataType($value)
 * @method string getFileSystemId()
 * @method $this withFileSystemId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getDataFlowId()
 * @method $this withDataFlowId($value)
 * @method string getEntryList()
 * @method $this withEntryList($value)
 * @method string getTaskAction()
 * @method $this withTaskAction($value)
 */
class CreateDataFlowTask extends Rpc
{
}

/**
 * @method string getOwnerAccessInheritable()
 * @method $this withOwnerAccessInheritable($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getPath()
 * @method $this withPath($value)
 * @method string getFileSystemId()
 * @method $this withFileSystemId($value)
 * @method string getOwner()
 * @method $this withOwner($value)
 */
class CreateFile extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getFileSystemId()
 * @method $this withFileSystemId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getFileSystemPath()
 * @method $this withFileSystemPath($value)
 */
class CreateFileset extends Rpc
{
}

/**
 * @method string getSnapshotId()
 * @method $this withSnapshotId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getFileSystemType()
 * @method $this withFileSystemType($value)
 * @method string getStorageType()
 * @method $this withStorageType($value)
 * @method string getCapacity()
 * @method $this withCapacity($value)
 * @method string getEncryptType()
 * @method $this withEncryptType($value)
 * @method string getDuration()
 * @method $this withDuration($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getBandwidth()
 * @method $this withBandwidth($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getProtocolType()
 * @method $this withProtocolType($value)
 * @method string getChargeType()
 * @method $this withChargeType($value)
 * @method string getKmsKeyId()
 * @method $this withKmsKeyId($value)
 */
class CreateFileSystem extends Rpc
{
}

/**
 * @method string getSearchBase()
 * @method $this withSearchBase($value)
 * @method string getFileSystemId()
 * @method $this withFileSystemId($value)
 * @method string getURI()
 * @method $this withURI($value)
 * @method string getBindDN()
 * @method $this withBindDN($value)
 */
class CreateLDAPConfig extends Rpc
{
}

/**
 * @method string getStorageType()
 * @method $this withStorageType($value)
 * @method string getPath()
 * @method $this withPath($value)
 * @method string getLifecyclePolicyName()
 * @method $this withLifecyclePolicyName($value)
 * @method string getFileSystemId()
 * @method $this withFileSystemId($value)
 * @method string getLifecycleRuleName()
 * @method $this withLifecycleRuleName($value)
 * @method array getPaths()
 */
class CreateLifecyclePolicy extends Rpc
{

    /**
     * @param array $paths
     *
     * @return $this
     */
	public function withPaths(array $paths)
	{
	    $this->data['Paths'] = $paths;
		foreach ($paths as $i => $iValue) {
			$this->options['query']['Paths.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getFileSystemId()
 * @method $this withFileSystemId($value)
 * @method array getPaths()
 */
class CreateLifecycleRetrieveJob extends Rpc
{

    /**
     * @param array $paths
     *
     * @return $this
     */
	public function withPaths(array $paths)
	{
	    $this->data['Paths'] = $paths;
		foreach ($paths as $i => $iValue) {
			$this->options['query']['Paths.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getEnableIpv6()
 * @method $this withEnableIpv6($value)
 * @method string getNetworkType()
 * @method $this withNetworkType($value)
 * @method string getFileSystemId()
 * @method $this withFileSystemId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getAccessGroupName()
 * @method $this withAccessGroupName($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 */
class CreateMountTarget extends Rpc
{
}

/**
 * @method string getProtocolServiceId()
 * @method $this withProtocolServiceId($value)
 * @method string getFsetId()
 * @method $this withFsetId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getPath()
 * @method $this withPath($value)
 * @method string getFileSystemId()
 * @method $this withFileSystemId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getAccessGroupName()
 * @method $this withAccessGroupName($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 */
class CreateProtocolMountTarget extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getMountTargetDescription()
 * @method $this withMountTargetDescription($value)
 * @method string getMountTargetAccessGroupName()
 * @method $this withMountTargetAccessGroupName($value)
 * @method string getMountTargetVSwitchId()
 * @method $this withMountTargetVSwitchId($value)
 * @method string getThroughput()
 * @method $this withThroughput($value)
 * @method string getFileSystemId()
 * @method $this withFileSystemId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getMountTargetFsetId()
 * @method $this withMountTargetFsetId($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getMountTargetVpcId()
 * @method $this withMountTargetVpcId($value)
 * @method string getMountTargetPath()
 * @method $this withMountTargetPath($value)
 * @method string getProtocolSpec()
 * @method $this withProtocolSpec($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getProtocolType()
 * @method $this withProtocolType($value)
 */
class CreateProtocolService extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getFileSystemId()
 * @method $this withFileSystemId($value)
 * @method string getFileId()
 * @method $this withFileId($value)
 */
class CreateRecycleBinDeleteJob extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getFileSystemId()
 * @method $this withFileSystemId($value)
 * @method string getFileId()
 * @method $this withFileId($value)
 * @method string getTargetFileId()
 * @method $this withTargetFileId($value)
 */
class CreateRecycleBinRestoreJob extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getSnapshotName()
 * @method $this withSnapshotName($value)
 * @method string getFileSystemId()
 * @method $this withFileSystemId($value)
 * @method string getRetentionDays()
 * @method $this withRetentionDays($value)
 */
class CreateSnapshot extends Rpc
{
}

/**
 * @method string getFileSystemType()
 * @method $this withFileSystemType($value)
 * @method string getAccessGroupName()
 * @method $this withAccessGroupName($value)
 */
class DeleteAccessGroup extends Rpc
{
}

/**
 * @method string getFileSystemType()
 * @method $this withFileSystemType($value)
 * @method string getAccessRuleId()
 * @method $this withAccessRuleId($value)
 * @method string getAccessGroupName()
 * @method $this withAccessGroupName($value)
 */
class DeleteAccessRule extends Rpc
{
}

/**
 * @method string getAutoSnapshotPolicyId()
 * @method $this withAutoSnapshotPolicyId($value)
 */
class DeleteAutoSnapshotPolicy extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getFileSystemId()
 * @method $this withFileSystemId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getDataFlowId()
 * @method $this withDataFlowId($value)
 */
class DeleteDataFlow extends Rpc
{
}

/**
 * @method string getFsetId()
 * @method $this withFsetId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getFileSystemId()
 * @method $this withFileSystemId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 */
class DeleteFileset extends Rpc
{
}

/**
 * @method string getFileSystemId()
 * @method $this withFileSystemId($value)
 */
class DeleteFileSystem extends Rpc
{
}

/**
 * @method string getFileSystemId()
 * @method $this withFileSystemId($value)
 */
class DeleteLDAPConfig extends Rpc
{
}

/**
 * @method string getLifecyclePolicyName()
 * @method $this withLifecyclePolicyName($value)
 * @method string getFileSystemId()
 * @method $this withFileSystemId($value)
 */
class DeleteLifecyclePolicy extends Rpc
{
}

/**
 * @method string getFileSystemId()
 * @method $this withFileSystemId($value)
 * @method string getMountTargetDomain()
 * @method $this withMountTargetDomain($value)
 */
class DeleteMountTarget extends Rpc
{
}

/**
 * @method string getProtocolServiceId()
 * @method $this withProtocolServiceId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getFileSystemId()
 * @method $this withFileSystemId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getExportId()
 * @method $this withExportId($value)
 */
class DeleteProtocolMountTarget extends Rpc
{
}

/**
 * @method string getProtocolServiceId()
 * @method $this withProtocolServiceId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getFileSystemId()
 * @method $this withFileSystemId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 */
class DeleteProtocolService extends Rpc
{
}

/**
 * @method string getSnapshotId()
 * @method $this withSnapshotId($value)
 */
class DeleteSnapshot extends Rpc
{
}

/**
 * @method string getUseUTCDateTime()
 * @method $this withUseUTCDateTime($value)
 * @method string getFileSystemType()
 * @method $this withFileSystemType($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getAccessGroupName()
 * @method $this withAccessGroupName($value)
 */
class DescribeAccessGroups extends Rpc
{
}

/**
 * @method string getFileSystemType()
 * @method $this withFileSystemType($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getAccessRuleId()
 * @method $this withAccessRuleId($value)
 * @method string getSourceCidrIpFilter()
 * @method $this withSourceCidrIpFilter($value)
 * @method string getSourceCidrIp()
 * @method $this withSourceCidrIp($value)
 * @method string getAccessGroupName()
 * @method $this withAccessGroupName($value)
 */
class DescribeAccessRules extends Rpc
{
}

/**
 * @method string getAutoSnapshotPolicyId()
 * @method $this withAutoSnapshotPolicyId($value)
 * @method string getFileSystemType()
 * @method $this withFileSystemType($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class DescribeAutoSnapshotPolicies extends Rpc
{
}

/**
 * @method string getFileSystemType()
 * @method $this withFileSystemType($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getFileSystemIds()
 * @method $this withFileSystemIds($value)
 * @method string getAutoSnapshotPolicyIds()
 * @method $this withAutoSnapshotPolicyIds($value)
 */
class DescribeAutoSnapshotTasks extends Rpc
{
}

/**
 * @method string getClientIP()
 * @method $this withClientIP($value)
 * @method string getFileSystemId()
 * @method $this withFileSystemId($value)
 */
class DescribeBlackListClients extends Rpc
{
}

/**
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getFileSystemId()
 * @method $this withFileSystemId($value)
 * @method array getFilters()
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class DescribeDataFlows extends Rpc
{

    /**
     * @param array $filters
     *
     * @return $this
     */
	public function withFilters(array $filters)
	{
	    $this->data['Filters'] = $filters;
		foreach ($filters as $depth1 => $depth1Value) {
			if(isset($depth1Value['Value'])){
				$this->options['query']['Filters.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Filters.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }
}

/**
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getFileSystemId()
 * @method $this withFileSystemId($value)
 * @method array getFilters()
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class DescribeDataFlowTasks extends Rpc
{

    /**
     * @param array $filters
     *
     * @return $this
     */
	public function withFilters(array $filters)
	{
	    $this->data['Filters'] = $filters;
		foreach ($filters as $depth1 => $depth1Value) {
			if(isset($depth1Value['Value'])){
				$this->options['query']['Filters.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Filters.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPath()
 * @method $this withPath($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getFileSystemId()
 * @method $this withFileSystemId($value)
 */
class DescribeDirQuotas extends Rpc
{
}

/**
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getFileSystemId()
 * @method $this withFileSystemId($value)
 * @method array getFilters()
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class DescribeFilesets extends Rpc
{

    /**
     * @param array $filters
     *
     * @return $this
     */
	public function withFilters(array $filters)
	{
	    $this->data['Filters'] = $filters;
		foreach ($filters as $depth1 => $depth1Value) {
			if(isset($depth1Value['Value'])){
				$this->options['query']['Filters.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Filters.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }
}

/**
 * @method string getUseUTCDateTime()
 * @method $this withUseUTCDateTime($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getOrderByField()
 * @method $this withOrderByField($value)
 * @method string getFileSystemType()
 * @method $this withFileSystemType($value)
 * @method string getPackageIds()
 * @method $this withPackageIds($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getStorageType()
 * @method $this withStorageType($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getSortOrder()
 * @method $this withSortOrder($value)
 * @method array getTag()
 * @method string getFileSystemId()
 * @method $this withFileSystemId($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getChargeType()
 * @method $this withChargeType($value)
 * @method string getFileSystemIds()
 * @method $this withFileSystemIds($value)
 */
class DescribeFileSystems extends Rpc
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
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class DescribeFileSystemStatistics extends Rpc
{
}

/**
 * @method string getFileSystemId()
 * @method $this withFileSystemId($value)
 */
class DescribeLDAPConfig extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getFileSystemId()
 * @method $this withFileSystemId($value)
 */
class DescribeLifecyclePolicies extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class DescribeLogAnalysis extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getClientIP()
 * @method $this withClientIP($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getFileSystemId()
 * @method $this withFileSystemId($value)
 * @method string getMountTargetDomain()
 * @method $this withMountTargetDomain($value)
 */
class DescribeMountedClients extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getFileSystemId()
 * @method $this withFileSystemId($value)
 * @method string getMountTargetDomain()
 * @method $this withMountTargetDomain($value)
 * @method string getDualStackMountTargetDomain()
 * @method $this withDualStackMountTargetDomain($value)
 */
class DescribeMountTargets extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getFileSystemId()
 * @method $this withFileSystemId($value)
 * @method array getFilters()
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class DescribeProtocolMountTarget extends Rpc
{

    /**
     * @param array $filters
     *
     * @return $this
     */
	public function withFilters(array $filters)
	{
	    $this->data['Filters'] = $filters;
		foreach ($filters as $depth1 => $depth1Value) {
			if(isset($depth1Value['Value'])){
				$this->options['query']['Filters.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Filters.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getProtocolServiceIds()
 * @method $this withProtocolServiceIds($value)
 * @method string getFileSystemId()
 * @method $this withFileSystemId($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeProtocolService extends Rpc
{
}

/**
 * @method string getFileSystemType()
 * @method $this withFileSystemType($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class DescribeRegions extends Rpc
{
}

/**
 * @method string getFileSystemId()
 * @method $this withFileSystemId($value)
 */
class DescribeSmbAcl extends Rpc
{
}

/**
 * @method string getSnapshotIds()
 * @method $this withSnapshotIds($value)
 * @method string getSnapshotName()
 * @method $this withSnapshotName($value)
 * @method string getFileSystemType()
 * @method $this withFileSystemType($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getFileSystemId()
 * @method $this withFileSystemId($value)
 * @method string getSnapshotType()
 * @method $this withSnapshotType($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeSnapshots extends Rpc
{
}

/**
 * @method string getUseUTCDateTime()
 * @method $this withUseUTCDateTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class DescribeStoragePackages extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method array getTag()
 * @method string getFileSystemId()
 * @method $this withFileSystemId($value)
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
 * @method string getFileSystemType()
 * @method $this withFileSystemType($value)
 */
class DescribeZones extends Rpc
{
}

/**
 * @method string getFileSystemId()
 * @method $this withFileSystemId($value)
 */
class DisableAndCleanRecycleBin extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getFileSystemId()
 * @method $this withFileSystemId($value)
 */
class DisableSmbAcl extends Rpc
{
}

/**
 * @method string getFileSystemId()
 * @method $this withFileSystemId($value)
 * @method string getReservedDays()
 * @method $this withReservedDays($value)
 */
class EnableRecycleBin extends Rpc
{
}

/**
 * @method string getKeytab()
 * @method $this withKeytab($value)
 * @method string getKeytabMd5()
 * @method $this withKeytabMd5($value)
 * @method string getFileSystemId()
 * @method $this withFileSystemId($value)
 * @method string getAuthCenter()
 * @method $this withAuthCenter($value)
 * @method string getAuthMethod()
 * @method $this withAuthMethod($value)
 */
class EnableSmbAcl extends Rpc
{
}

/**
 * @method string getPath()
 * @method $this withPath($value)
 * @method string getFileSystemId()
 * @method $this withFileSystemId($value)
 */
class GetDirectoryOrFileProperties extends Rpc
{
}

/**
 * @method string getFileSystemId()
 * @method $this withFileSystemId($value)
 */
class GetRecycleBinAttribute extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getDirectoryOnly()
 * @method $this withDirectoryOnly($value)
 * @method string getStorageType()
 * @method $this withStorageType($value)
 * @method string getPath()
 * @method $this withPath($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getFileSystemId()
 * @method $this withFileSystemId($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class ListDirectoriesAndFiles extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getFileSystemId()
 * @method $this withFileSystemId($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ListLifecycleRetrieveJobs extends Rpc
{
}

/**
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getFileSystemId()
 * @method $this withFileSystemId($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class ListRecentlyRecycledDirectories extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getFileSystemId()
 * @method $this withFileSystemId($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ListRecycleBinJobs extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getFileSystemId()
 * @method $this withFileSystemId($value)
 * @method string getFileId()
 * @method $this withFileId($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class ListRecycledDirectoriesAndFiles extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method array getTag()
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
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getFileSystemType()
 * @method $this withFileSystemType($value)
 * @method string getAccessGroupName()
 * @method $this withAccessGroupName($value)
 */
class ModifyAccessGroup extends Rpc
{
}

/**
 * @method string getRWAccessType()
 * @method $this withRWAccessType($value)
 * @method string getUserAccessType()
 * @method $this withUserAccessType($value)
 * @method string getFileSystemType()
 * @method $this withFileSystemType($value)
 * @method string getAccessRuleId()
 * @method $this withAccessRuleId($value)
 * @method string getIpv6SourceCidrIp()
 * @method $this withIpv6SourceCidrIp($value)
 * @method string getSourceCidrIp()
 * @method $this withSourceCidrIp($value)
 * @method string getPriority()
 * @method $this withPriority($value)
 * @method string getAccessGroupName()
 * @method $this withAccessGroupName($value)
 */
class ModifyAccessRule extends Rpc
{
}

/**
 * @method string getAutoSnapshotPolicyId()
 * @method $this withAutoSnapshotPolicyId($value)
 * @method string getTimePoints()
 * @method $this withTimePoints($value)
 * @method string getRepeatWeekdays()
 * @method $this withRepeatWeekdays($value)
 * @method string getAutoSnapshotPolicyName()
 * @method $this withAutoSnapshotPolicyName($value)
 * @method string getRetentionDays()
 * @method $this withRetentionDays($value)
 */
class ModifyAutoSnapshotPolicy extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getThroughput()
 * @method $this withThroughput($value)
 * @method string getFileSystemId()
 * @method $this withFileSystemId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getDataFlowId()
 * @method $this withDataFlowId($value)
 */
class ModifyDataFlow extends Rpc
{
}

/**
 * @method string getAutoRefreshPolicy()
 * @method $this withAutoRefreshPolicy($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getFileSystemId()
 * @method $this withFileSystemId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getDataFlowId()
 * @method $this withDataFlowId($value)
 * @method string getAutoRefreshInterval()
 * @method $this withAutoRefreshInterval($value)
 */
class ModifyDataFlowAutoRefresh extends Rpc
{
}

/**
 * @method string getFsetId()
 * @method $this withFsetId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getFileSystemId()
 * @method $this withFileSystemId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 */
class ModifyFileset extends Rpc
{
}

/**
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getFileSystemId()
 * @method $this withFileSystemId($value)
 */
class ModifyFileSystem extends Rpc
{
}

/**
 * @method string getSearchBase()
 * @method $this withSearchBase($value)
 * @method string getFileSystemId()
 * @method $this withFileSystemId($value)
 * @method string getURI()
 * @method $this withURI($value)
 * @method string getBindDN()
 * @method $this withBindDN($value)
 */
class ModifyLDAPConfig extends Rpc
{
}

/**
 * @method string getStorageType()
 * @method $this withStorageType($value)
 * @method string getPath()
 * @method $this withPath($value)
 * @method string getLifecyclePolicyName()
 * @method $this withLifecyclePolicyName($value)
 * @method string getFileSystemId()
 * @method $this withFileSystemId($value)
 * @method string getLifecycleRuleName()
 * @method $this withLifecycleRuleName($value)
 */
class ModifyLifecyclePolicy extends Rpc
{
}

/**
 * @method string getFileSystemId()
 * @method $this withFileSystemId($value)
 * @method string getMountTargetDomain()
 * @method $this withMountTargetDomain($value)
 * @method string getAccessGroupName()
 * @method $this withAccessGroupName($value)
 * @method string getDualStackMountTargetDomain()
 * @method $this withDualStackMountTargetDomain($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ModifyMountTarget extends Rpc
{
}

/**
 * @method string getProtocolServiceId()
 * @method $this withProtocolServiceId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getFileSystemId()
 * @method $this withFileSystemId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getAccessGroupName()
 * @method $this withAccessGroupName($value)
 * @method string getExportId()
 * @method $this withExportId($value)
 */
class ModifyProtocolMountTarget extends Rpc
{
}

/**
 * @method string getProtocolServiceId()
 * @method $this withProtocolServiceId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getThroughput()
 * @method $this withThroughput($value)
 * @method string getFileSystemId()
 * @method $this withFileSystemId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getProtocolSpec()
 * @method $this withProtocolSpec($value)
 */
class ModifyProtocolService extends Rpc
{
}

/**
 * @method string getEncryptData()
 * @method $this withEncryptData($value)
 * @method string getKeytab()
 * @method $this withKeytab($value)
 * @method string getSuperAdminSid()
 * @method $this withSuperAdminSid($value)
 * @method string getKeytabMd5()
 * @method $this withKeytabMd5($value)
 * @method string getRejectUnencryptedAccess()
 * @method $this withRejectUnencryptedAccess($value)
 * @method string getFileSystemId()
 * @method $this withFileSystemId($value)
 * @method string getAuthCenter()
 * @method $this withAuthCenter($value)
 * @method string getHomeDirPath()
 * @method $this withHomeDirPath($value)
 * @method string getEnableAnonymousAccess()
 * @method $this withEnableAnonymousAccess($value)
 * @method string getAuthMethod()
 * @method $this withAuthMethod($value)
 */
class ModifySmbAcl extends Rpc
{
}

class OpenNASService extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getClientIP()
 * @method $this withClientIP($value)
 * @method string getFileSystemId()
 * @method $this withFileSystemId($value)
 */
class RemoveClientFromBlackList extends Rpc
{
}

/**
 * @method array getTag()
 * @method string getFileSystemId()
 * @method $this withFileSystemId($value)
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
 * @method string getSnapshotId()
 * @method $this withSnapshotId($value)
 * @method string getFileSystemId()
 * @method $this withFileSystemId($value)
 */
class ResetFileSystem extends Rpc
{
}

/**
 * @method string getJobId()
 * @method $this withJobId($value)
 */
class RetryLifecycleRetrieveJob extends Rpc
{
}

/**
 * @method string getQuotaType()
 * @method $this withQuotaType($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getFileCountLimit()
 * @method $this withFileCountLimit($value)
 * @method string getPath()
 * @method $this withPath($value)
 * @method string getSizeLimit()
 * @method $this withSizeLimit($value)
 * @method string getFileSystemId()
 * @method $this withFileSystemId($value)
 * @method string getUserType()
 * @method $this withUserType($value)
 */
class SetDirQuota extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getFileSystemId()
 * @method $this withFileSystemId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getDataFlowId()
 * @method $this withDataFlowId($value)
 */
class StartDataFlow extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getFileSystemId()
 * @method $this withFileSystemId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getDataFlowId()
 * @method $this withDataFlowId($value)
 */
class StopDataFlow extends Rpc
{
}

/**
 * @method array getTag()
 * @method array getResourceId()
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
 * @method string getFileSystemId()
 * @method $this withFileSystemId($value)
 * @method string getReservedDays()
 * @method $this withReservedDays($value)
 */
class UpdateRecycleBinAttribute extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getCapacity()
 * @method $this withCapacity($value)
 * @method string getFileSystemId()
 * @method $this withFileSystemId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 */
class UpgradeFileSystem extends Rpc
{
}
