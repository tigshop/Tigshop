<?php

namespace AlibabaCloud\DataworksPublic\V20200518;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AbolishDataServiceApi abolishDataServiceApi(array $options = [])
 * @method AddMetaCollectionEntity addMetaCollectionEntity(array $options = [])
 * @method AddProjectMemberToRole addProjectMemberToRole(array $options = [])
 * @method AddRecognizeRule addRecognizeRule(array $options = [])
 * @method AddToMetaCategory addToMetaCategory(array $options = [])
 * @method ApprovePermissionApplyOrder approvePermissionApplyOrder(array $options = [])
 * @method CallbackExtension callbackExtension(array $options = [])
 * @method ChangeResourceManagerResourceGroup changeResourceManagerResourceGroup(array $options = [])
 * @method CheckFileDeployment checkFileDeployment(array $options = [])
 * @method CheckMetaPartition checkMetaPartition(array $options = [])
 * @method CheckMetaTable checkMetaTable(array $options = [])
 * @method CreateBaseline createBaseline(array $options = [])
 * @method CreateBusiness createBusiness(array $options = [])
 * @method CreateConnection createConnection(array $options = [])
 * @method CreateDagComplement createDagComplement(array $options = [])
 * @method CreateDagTest createDagTest(array $options = [])
 * @method CreateDataServiceApi createDataServiceApi(array $options = [])
 * @method CreateDataServiceApiAuthority createDataServiceApiAuthority(array $options = [])
 * @method CreateDataServiceFolder createDataServiceFolder(array $options = [])
 * @method CreateDataServiceGroup createDataServiceGroup(array $options = [])
 * @method CreateDataSource createDataSource(array $options = [])
 * @method CreateDIAlarmRule createDIAlarmRule(array $options = [])
 * @method CreateDIJob createDIJob(array $options = [])
 * @method CreateDISyncTask createDISyncTask(array $options = [])
 * @method CreateExportMigration createExportMigration(array $options = [])
 * @method CreateFile createFile(array $options = [])
 * @method CreateFolder createFolder(array $options = [])
 * @method CreateImportMigration createImportMigration(array $options = [])
 * @method CreateManualDag createManualDag(array $options = [])
 * @method CreateMetaCategory createMetaCategory(array $options = [])
 * @method CreateMetaCollection createMetaCollection(array $options = [])
 * @method CreatePermissionApplyOrder createPermissionApplyOrder(array $options = [])
 * @method CreateProject createProject(array $options = [])
 * @method CreateProjectMember createProjectMember(array $options = [])
 * @method CreateQualityEntity createQualityEntity(array $options = [])
 * @method CreateQualityFollower createQualityFollower(array $options = [])
 * @method CreateQualityRelativeNode createQualityRelativeNode(array $options = [])
 * @method CreateQualityRule createQualityRule(array $options = [])
 * @method CreateRemind createRemind(array $options = [])
 * @method CreateResourceFile createResourceFile(array $options = [])
 * @method CreateTable createTable(array $options = [])
 * @method CreateTableLevel createTableLevel(array $options = [])
 * @method CreateTableTheme createTableTheme(array $options = [])
 * @method CreateUdfFile createUdfFile(array $options = [])
 * @method DeleteBaseline deleteBaseline(array $options = [])
 * @method DeleteBusiness deleteBusiness(array $options = [])
 * @method DeleteConnection deleteConnection(array $options = [])
 * @method DeleteDataServiceApi deleteDataServiceApi(array $options = [])
 * @method DeleteDataServiceApiAuthority deleteDataServiceApiAuthority(array $options = [])
 * @method DeleteDataSource deleteDataSource(array $options = [])
 * @method DeleteDIAlarmRule deleteDIAlarmRule(array $options = [])
 * @method DeleteDIJob deleteDIJob(array $options = [])
 * @method DeleteDISyncTask deleteDISyncTask(array $options = [])
 * @method DeleteFile deleteFile(array $options = [])
 * @method DeleteFolder deleteFolder(array $options = [])
 * @method DeleteFromMetaCategory deleteFromMetaCategory(array $options = [])
 * @method DeleteLineageRelation deleteLineageRelation(array $options = [])
 * @method DeleteMetaCategory deleteMetaCategory(array $options = [])
 * @method DeleteMetaCollection deleteMetaCollection(array $options = [])
 * @method DeleteMetaCollectionEntity deleteMetaCollectionEntity(array $options = [])
 * @method DeleteProjectMember deleteProjectMember(array $options = [])
 * @method DeleteQualityEntity deleteQualityEntity(array $options = [])
 * @method DeleteQualityFollower deleteQualityFollower(array $options = [])
 * @method DeleteQualityRelativeNode deleteQualityRelativeNode(array $options = [])
 * @method DeleteQualityRule deleteQualityRule(array $options = [])
 * @method DeleteRecognizeRule deleteRecognizeRule(array $options = [])
 * @method DeleteRemind deleteRemind(array $options = [])
 * @method DeleteTable deleteTable(array $options = [])
 * @method DeleteTableLevel deleteTableLevel(array $options = [])
 * @method DeleteTableTheme deleteTableTheme(array $options = [])
 * @method DeployDISyncTask deployDISyncTask(array $options = [])
 * @method DeployFile deployFile(array $options = [])
 * @method DesensitizeData desensitizeData(array $options = [])
 * @method DsgDesensPlanAddOrUpdate dsgDesensPlanAddOrUpdate(array $options = [])
 * @method DsgDesensPlanDelete dsgDesensPlanDelete(array $options = [])
 * @method DsgDesensPlanQueryList dsgDesensPlanQueryList(array $options = [])
 * @method DsgDesensPlanUpdateStatus dsgDesensPlanUpdateStatus(array $options = [])
 * @method DsgPlatformQueryProjectsAndSchemaFromMeta dsgPlatformQueryProjectsAndSchemaFromMeta(array $options = [])
 * @method DsgQueryDefaultTemplates dsgQueryDefaultTemplates(array $options = [])
 * @method DsgQuerySensResult dsgQuerySensResult(array $options = [])
 * @method DsgRunSensIdentify dsgRunSensIdentify(array $options = [])
 * @method DsgSceneAddOrUpdateScene dsgSceneAddOrUpdateScene(array $options = [])
 * @method DsgScenedDeleteScene dsgScenedDeleteScene(array $options = [])
 * @method DsgSceneQuerySceneListByName dsgSceneQuerySceneListByName(array $options = [])
 * @method DsgStopSensIdentify dsgStopSensIdentify(array $options = [])
 * @method DsgUserGroupAddOrUpdate dsgUserGroupAddOrUpdate(array $options = [])
 * @method DsgUserGroupDelete dsgUserGroupDelete(array $options = [])
 * @method DsgUserGroupGetOdpsRoleGroups dsgUserGroupGetOdpsRoleGroups(array $options = [])
 * @method DsgUserGroupQueryList dsgUserGroupQueryList(array $options = [])
 * @method DsgUserGroupQueryUserList dsgUserGroupQueryUserList(array $options = [])
 * @method DsgWhiteListAddOrUpdate dsgWhiteListAddOrUpdate(array $options = [])
 * @method DsgWhiteListDeleteList dsgWhiteListDeleteList(array $options = [])
 * @method DsgWhiteListQueryList dsgWhiteListQueryList(array $options = [])
 * @method EditRecognizeRule editRecognizeRule(array $options = [])
 * @method EstablishRelationTableToBusiness establishRelationTableToBusiness(array $options = [])
 * @method ExportDataSources exportDataSources(array $options = [])
 * @method GenerateDISyncTaskConfigForCreating generateDISyncTaskConfigForCreating(array $options = [])
 * @method GenerateDISyncTaskConfigForUpdating generateDISyncTaskConfigForUpdating(array $options = [])
 * @method GetAlertMessage getAlertMessage(array $options = [])
 * @method GetBaseline getBaseline(array $options = [])
 * @method GetBaselineConfig getBaselineConfig(array $options = [])
 * @method GetBaselineKeyPath getBaselineKeyPath(array $options = [])
 * @method GetBaselineStatus getBaselineStatus(array $options = [])
 * @method GetBusiness getBusiness(array $options = [])
 * @method GetDag getDag(array $options = [])
 * @method GetDataServiceApi getDataServiceApi(array $options = [])
 * @method GetDataServiceApiTest getDataServiceApiTest(array $options = [])
 * @method GetDataServiceApplication getDataServiceApplication(array $options = [])
 * @method GetDataServiceFolder getDataServiceFolder(array $options = [])
 * @method GetDataServiceGroup getDataServiceGroup(array $options = [])
 * @method GetDataServicePublishedApi getDataServicePublishedApi(array $options = [])
 * @method GetDataSourceMeta getDataSourceMeta(array $options = [])
 * @method GetDDLJobStatus getDDLJobStatus(array $options = [])
 * @method GetDeployment getDeployment(array $options = [])
 * @method GetDIAlarmRule getDIAlarmRule(array $options = [])
 * @method GetDIJob getDIJob(array $options = [])
 * @method GetDISyncInstanceInfo getDISyncInstanceInfo(array $options = [])
 * @method GetDISyncTask getDISyncTask(array $options = [])
 * @method GetExtension getExtension(array $options = [])
 * @method GetFile getFile(array $options = [])
 * @method GetFileTypeStatistic getFileTypeStatistic(array $options = [])
 * @method GetFileVersion getFileVersion(array $options = [])
 * @method GetFolder getFolder(array $options = [])
 * @method GetIDEEventDetail getIDEEventDetail(array $options = [])
 * @method GetInstance getInstance(array $options = [])
 * @method GetInstanceConsumeTimeRank getInstanceConsumeTimeRank(array $options = [])
 * @method GetInstanceCountTrend getInstanceCountTrend(array $options = [])
 * @method GetInstanceErrorRank getInstanceErrorRank(array $options = [])
 * @method GetInstanceLog getInstanceLog(array $options = [])
 * @method GetInstanceStatusCount getInstanceStatusCount(array $options = [])
 * @method GetInstanceStatusStatistic getInstanceStatusStatistic(array $options = [])
 * @method GetManualDagInstances getManualDagInstances(array $options = [])
 * @method GetMetaCategory getMetaCategory(array $options = [])
 * @method GetMetaCollectionDetail getMetaCollectionDetail(array $options = [])
 * @method GetMetaColumnLineage getMetaColumnLineage(array $options = [])
 * @method GetMetaDBInfo getMetaDBInfo(array $options = [])
 * @method GetMetaDBTableList getMetaDBTableList(array $options = [])
 * @method GetMetaTableBasicInfo getMetaTableBasicInfo(array $options = [])
 * @method GetMetaTableChangeLog getMetaTableChangeLog(array $options = [])
 * @method GetMetaTableColumn getMetaTableColumn(array $options = [])
 * @method GetMetaTableFullInfo getMetaTableFullInfo(array $options = [])
 * @method GetMetaTableIntroWiki getMetaTableIntroWiki(array $options = [])
 * @method GetMetaTableLineage getMetaTableLineage(array $options = [])
 * @method GetMetaTableListByCategory getMetaTableListByCategory(array $options = [])
 * @method GetMetaTableOutput getMetaTableOutput(array $options = [])
 * @method GetMetaTablePartition getMetaTablePartition(array $options = [])
 * @method GetMetaTableProducingTasks getMetaTableProducingTasks(array $options = [])
 * @method GetMetaTableThemeLevel getMetaTableThemeLevel(array $options = [])
 * @method GetMigrationProcess getMigrationProcess(array $options = [])
 * @method GetMigrationSummary getMigrationSummary(array $options = [])
 * @method GetNode getNode(array $options = [])
 * @method GetNodeChildren getNodeChildren(array $options = [])
 * @method GetNodeCode getNodeCode(array $options = [])
 * @method GetNodeOnBaseline getNodeOnBaseline(array $options = [])
 * @method GetNodeParents getNodeParents(array $options = [])
 * @method GetNodeTypeListInfo getNodeTypeListInfo(array $options = [])
 * @method GetOpRiskData getOpRiskData(array $options = [])
 * @method GetOpSensitiveData getOpSensitiveData(array $options = [])
 * @method GetOptionValueForProject getOptionValueForProject(array $options = [])
 * @method GetPermissionApplyOrderDetail getPermissionApplyOrderDetail(array $options = [])
 * @method GetProject getProject(array $options = [])
 * @method GetProjectDetail getProjectDetail(array $options = [])
 * @method GetQualityEntity getQualityEntity(array $options = [])
 * @method GetQualityFollower getQualityFollower(array $options = [])
 * @method GetQualityRule getQualityRule(array $options = [])
 * @method GetRemind getRemind(array $options = [])
 * @method GetSensitiveData getSensitiveData(array $options = [])
 * @method GetSuccessInstanceTrend getSuccessInstanceTrend(array $options = [])
 * @method GetTopic getTopic(array $options = [])
 * @method GetTopicInfluence getTopicInfluence(array $options = [])
 * @method ImportDataSources importDataSources(array $options = [])
 * @method ListAlertMessages listAlertMessages(array $options = [])
 * @method ListBaselineConfigs listBaselineConfigs(array $options = [])
 * @method ListBaselines listBaselines(array $options = [])
 * @method ListBaselineStatuses listBaselineStatuses(array $options = [])
 * @method ListBusiness listBusiness(array $options = [])
 * @method ListCalcEngines listCalcEngines(array $options = [])
 * @method ListClusterConfigs listClusterConfigs(array $options = [])
 * @method ListClusters listClusters(array $options = [])
 * @method ListConnections listConnections(array $options = [])
 * @method ListDags listDags(array $options = [])
 * @method ListDataServiceApiAuthorities listDataServiceApiAuthorities(array $options = [])
 * @method ListDataServiceApis listDataServiceApis(array $options = [])
 * @method ListDataServiceApiTest listDataServiceApiTest(array $options = [])
 * @method ListDataServiceApplications listDataServiceApplications(array $options = [])
 * @method ListDataServiceAuthorizedApis listDataServiceAuthorizedApis(array $options = [])
 * @method ListDataServiceFolders listDataServiceFolders(array $options = [])
 * @method ListDataServiceGroups listDataServiceGroups(array $options = [])
 * @method ListDataServicePublishedApis listDataServicePublishedApis(array $options = [])
 * @method ListDataSources listDataSources(array $options = [])
 * @method ListDeployments listDeployments(array $options = [])
 * @method ListDIAlarmRules listDIAlarmRules(array $options = [])
 * @method ListDIJobs listDIJobs(array $options = [])
 * @method ListDIProjectConfig listDIProjectConfig(array $options = [])
 * @method ListEnabledExtensionsForProject listEnabledExtensionsForProject(array $options = [])
 * @method ListEntitiesByTags listEntitiesByTags(array $options = [])
 * @method ListEntityTags listEntityTags(array $options = [])
 * @method ListExtensions listExtensions(array $options = [])
 * @method ListFiles listFiles(array $options = [])
 * @method ListFileType listFileType(array $options = [])
 * @method ListFileVersions listFileVersions(array $options = [])
 * @method ListFolders listFolders(array $options = [])
 * @method ListInnerNodes listInnerNodes(array $options = [])
 * @method ListInstanceAmount listInstanceAmount(array $options = [])
 * @method ListInstanceHistory listInstanceHistory(array $options = [])
 * @method ListInstances listInstances(array $options = [])
 * @method ListLineage listLineage(array $options = [])
 * @method ListManualDagInstances listManualDagInstances(array $options = [])
 * @method ListMeasureData listMeasureData(array $options = [])
 * @method ListMetaCollectionEntities listMetaCollectionEntities(array $options = [])
 * @method ListMetaCollections listMetaCollections(array $options = [])
 * @method ListMetaDB listMetaDB(array $options = [])
 * @method ListMigrations listMigrations(array $options = [])
 * @method ListNodeInputOrOutput listNodeInputOrOutput(array $options = [])
 * @method ListNodeIO listNodeIO(array $options = [])
 * @method ListNodes listNodes(array $options = [])
 * @method ListNodesByBaseline listNodesByBaseline(array $options = [])
 * @method ListNodesByOutput listNodesByOutput(array $options = [])
 * @method ListPermissionApplyOrders listPermissionApplyOrders(array $options = [])
 * @method ListProgramTypeCount listProgramTypeCount(array $options = [])
 * @method ListProjectIds listProjectIds(array $options = [])
 * @method ListProjectMembers listProjectMembers(array $options = [])
 * @method ListProjectRoles listProjectRoles(array $options = [])
 * @method ListProjects listProjects(array $options = [])
 * @method ListQualityResultsByEntity listQualityResultsByEntity(array $options = [])
 * @method ListQualityResultsByRule listQualityResultsByRule(array $options = [])
 * @method ListQualityRules listQualityRules(array $options = [])
 * @method ListRefDISyncTasks listRefDISyncTasks(array $options = [])
 * @method ListReminds listReminds(array $options = [])
 * @method ListResourceGroups listResourceGroups(array $options = [])
 * @method ListShiftPersonnels listShiftPersonnels(array $options = [])
 * @method ListShiftSchedules listShiftSchedules(array $options = [])
 * @method ListSuccessInstanceAmount listSuccessInstanceAmount(array $options = [])
 * @method ListTableLevel listTableLevel(array $options = [])
 * @method ListTables listTables(array $options = [])
 * @method ListTableTheme listTableTheme(array $options = [])
 * @method ListTopics listTopics(array $options = [])
 * @method MountDirectory mountDirectory(array $options = [])
 * @method OfflineNode offlineNode(array $options = [])
 * @method PublishDataServiceApi publishDataServiceApi(array $options = [])
 * @method QueryDefaultTemplate queryDefaultTemplate(array $options = [])
 * @method QueryDISyncTaskConfigProcessResult queryDISyncTaskConfigProcessResult(array $options = [])
 * @method QueryPublicModelEngine queryPublicModelEngine(array $options = [])
 * @method QueryRecognizeDataByRuleType queryRecognizeDataByRuleType(array $options = [])
 * @method QueryRecognizeRuleDetail queryRecognizeRuleDetail(array $options = [])
 * @method QueryRecognizeRulesType queryRecognizeRulesType(array $options = [])
 * @method QuerySensClassification querySensClassification(array $options = [])
 * @method QuerySensLevel querySensLevel(array $options = [])
 * @method QuerySensNodeInfo querySensNodeInfo(array $options = [])
 * @method RegisterLineageRelation registerLineageRelation(array $options = [])
 * @method RemoveEntityTags removeEntityTags(array $options = [])
 * @method RemoveProjectMemberFromRole removeProjectMemberFromRole(array $options = [])
 * @method RestartInstance restartInstance(array $options = [])
 * @method ResumeInstance resumeInstance(array $options = [])
 * @method RevokeColumnPermission revokeColumnPermission(array $options = [])
 * @method RevokeTablePermission revokeTablePermission(array $options = [])
 * @method RunCycleDagNodes runCycleDagNodes(array $options = [])
 * @method RunManualDagNodes runManualDagNodes(array $options = [])
 * @method RunSmokeTest runSmokeTest(array $options = [])
 * @method RunTriggerNode runTriggerNode(array $options = [])
 * @method SaveDataServiceApiTestResult saveDataServiceApiTestResult(array $options = [])
 * @method ScanSensitiveData scanSensitiveData(array $options = [])
 * @method SearchMetaTables searchMetaTables(array $options = [])
 * @method SearchNodesByOutput searchNodesByOutput(array $options = [])
 * @method SetDataSourceShare setDataSourceShare(array $options = [])
 * @method SetEntityTags setEntityTags(array $options = [])
 * @method SetSuccessInstance setSuccessInstance(array $options = [])
 * @method StartDIJob startDIJob(array $options = [])
 * @method StartDISyncInstance startDISyncInstance(array $options = [])
 * @method StartMigration startMigration(array $options = [])
 * @method StopDIJob stopDIJob(array $options = [])
 * @method StopDISyncInstance stopDISyncInstance(array $options = [])
 * @method StopInstance stopInstance(array $options = [])
 * @method SubmitDataServiceApi submitDataServiceApi(array $options = [])
 * @method SubmitFile submitFile(array $options = [])
 * @method SuspendInstance suspendInstance(array $options = [])
 * @method TerminateDISyncInstance terminateDISyncInstance(array $options = [])
 * @method TestDataServiceApi testDataServiceApi(array $options = [])
 * @method TestNetworkConnection testNetworkConnection(array $options = [])
 * @method TopTenElapsedTimeInstance topTenElapsedTimeInstance(array $options = [])
 * @method TopTenErrorTimesInstance topTenErrorTimesInstance(array $options = [])
 * @method UmountDirectory umountDirectory(array $options = [])
 * @method UpdateBaseline updateBaseline(array $options = [])
 * @method UpdateBusiness updateBusiness(array $options = [])
 * @method UpdateClusterConfigs updateClusterConfigs(array $options = [])
 * @method UpdateConnection updateConnection(array $options = [])
 * @method UpdateDataServiceApi updateDataServiceApi(array $options = [])
 * @method UpdateDataSource updateDataSource(array $options = [])
 * @method UpdateDIAlarmRule updateDIAlarmRule(array $options = [])
 * @method UpdateDIJob updateDIJob(array $options = [])
 * @method UpdateDIProjectConfig updateDIProjectConfig(array $options = [])
 * @method UpdateDISyncTask updateDISyncTask(array $options = [])
 * @method UpdateFile updateFile(array $options = [])
 * @method UpdateFolder updateFolder(array $options = [])
 * @method UpdateIDEEventResult updateIDEEventResult(array $options = [])
 * @method UpdateMetaCategory updateMetaCategory(array $options = [])
 * @method UpdateMetaCollection updateMetaCollection(array $options = [])
 * @method UpdateMetaTable updateMetaTable(array $options = [])
 * @method UpdateMetaTableIntroWiki updateMetaTableIntroWiki(array $options = [])
 * @method UpdateNodeOwner updateNodeOwner(array $options = [])
 * @method UpdateNodeRunMode updateNodeRunMode(array $options = [])
 * @method UpdateQualityFollower updateQualityFollower(array $options = [])
 * @method UpdateQualityRule updateQualityRule(array $options = [])
 * @method UpdateRemind updateRemind(array $options = [])
 * @method UpdateTable updateTable(array $options = [])
 * @method UpdateTableAddColumn updateTableAddColumn(array $options = [])
 * @method UpdateTableLevel updateTableLevel(array $options = [])
 * @method UpdateTableModelInfo updateTableModelInfo(array $options = [])
 * @method UpdateTableTheme updateTableTheme(array $options = [])
 * @method UpdateUdfFile updateUdfFile(array $options = [])
 * @method UpdateWorkbenchEventResult updateWorkbenchEventResult(array $options = [])
 */
class DataworksPublicApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'dataworks-public';

    /** @var string */
    public $version = '2020-05-18';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getTenantId()
 * @method string getProjectId()
 * @method string getApiId()
 */
class AbolishDataServiceApi extends Rpc
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
    public function withApiId($value)
    {
        $this->data['ApiId'] = $value;
        $this->options['form_params']['ApiId'] = $value;

        return $this;
    }
}

/**
 * @method string getEntityQualifiedName()
 * @method $this withEntityQualifiedName($value)
 * @method string getRemark()
 * @method $this withRemark($value)
 * @method string getCollectionQualifiedName()
 * @method $this withCollectionQualifiedName($value)
 */
class AddMetaCollectionEntity extends Rpc
{
}

/**
 * @method string getRoleCode()
 * @method $this withRoleCode($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class AddProjectMemberToRole extends Rpc
{
}

/**
 * @method string getLevel()
 * @method string getColScan()
 * @method string getColExclude()
 * @method string getContentScan()
 * @method string getOperationType()
 * @method string getTemplateId()
 * @method string getRecognizeRulesType()
 * @method string getCommentScan()
 * @method string getAccountName()
 * @method string getSensitiveDescription()
 * @method string getTenantId()
 * @method string getRecognizeRules()
 * @method string getHitThreshold()
 * @method string getSensitiveName()
 * @method string getNodeParent()
 * @method string getLevelName()
 * @method string getNodeId()
 * @method string getStatus()
 */
class AddRecognizeRule extends Rpc
{

    /** @var string */
    public $scheme = 'https';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLevel($value)
    {
        $this->data['Level'] = $value;
        $this->options['form_params']['Level'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withColScan($value)
    {
        $this->data['ColScan'] = $value;
        $this->options['form_params']['ColScan'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withColExclude($value)
    {
        $this->data['ColExclude'] = $value;
        $this->options['form_params']['ColExclude'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContentScan($value)
    {
        $this->data['ContentScan'] = $value;
        $this->options['form_params']['ContentScan'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperationType($value)
    {
        $this->data['OperationType'] = $value;
        $this->options['form_params']['OperationType'] = $value;

        return $this;
    }

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

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRecognizeRulesType($value)
    {
        $this->data['RecognizeRulesType'] = $value;
        $this->options['form_params']['RecognizeRulesType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCommentScan($value)
    {
        $this->data['CommentScan'] = $value;
        $this->options['form_params']['CommentScan'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccountName($value)
    {
        $this->data['AccountName'] = $value;
        $this->options['form_params']['AccountName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSensitiveDescription($value)
    {
        $this->data['SensitiveDescription'] = $value;
        $this->options['form_params']['SensitiveDescription'] = $value;

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
    public function withRecognizeRules($value)
    {
        $this->data['RecognizeRules'] = $value;
        $this->options['form_params']['RecognizeRules'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withHitThreshold($value)
    {
        $this->data['HitThreshold'] = $value;
        $this->options['form_params']['HitThreshold'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSensitiveName($value)
    {
        $this->data['SensitiveName'] = $value;
        $this->options['form_params']['SensitiveName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNodeParent($value)
    {
        $this->data['NodeParent'] = $value;
        $this->options['form_params']['NodeParent'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLevelName($value)
    {
        $this->data['LevelName'] = $value;
        $this->options['form_params']['LevelName'] = $value;

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
    public function withStatus($value)
    {
        $this->data['Status'] = $value;
        $this->options['form_params']['Status'] = $value;

        return $this;
    }
}

/**
 * @method string getTableGuid()
 * @method $this withTableGuid($value)
 * @method string getCategoryId()
 * @method $this withCategoryId($value)
 */
class AddToMetaCategory extends Rpc
{
}

/**
 * @method string getFlowId()
 * @method $this withFlowId($value)
 * @method string getApproveComment()
 * @method $this withApproveComment($value)
 * @method string getApproveAction()
 * @method $this withApproveAction($value)
 */
class ApprovePermissionApplyOrder extends Rpc
{
}

/**
 * @method string getCheckResult()
 * @method string getMessageId()
 * @method string getCheckMessage()
 * @method string getExtensionCode()
 */
class CallbackExtension extends Rpc
{

    /** @var string */
    public $scheme = 'https';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCheckResult($value)
    {
        $this->data['CheckResult'] = $value;
        $this->options['form_params']['CheckResult'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMessageId($value)
    {
        $this->data['MessageId'] = $value;
        $this->options['form_params']['MessageId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCheckMessage($value)
    {
        $this->data['CheckMessage'] = $value;
        $this->options['form_params']['CheckMessage'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExtensionCode($value)
    {
        $this->data['ExtensionCode'] = $value;
        $this->options['form_params']['ExtensionCode'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getResourceManagerResourceGroupId()
 * @method $this withResourceManagerResourceGroupId($value)
 */
class ChangeResourceManagerResourceGroup extends Rpc
{
}

/**
 * @method string getCheckDetailUrl()
 * @method string getCheckerInstanceId()
 * @method string getStatus()
 */
class CheckFileDeployment extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCheckDetailUrl($value)
    {
        $this->data['CheckDetailUrl'] = $value;
        $this->options['form_params']['CheckDetailUrl'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCheckerInstanceId($value)
    {
        $this->data['CheckerInstanceId'] = $value;
        $this->options['form_params']['CheckerInstanceId'] = $value;

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
 * @method string getDataSourceType()
 * @method $this withDataSourceType($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getPartition()
 * @method $this withPartition($value)
 * @method string getTableGuid()
 * @method $this withTableGuid($value)
 * @method string getDatabaseName()
 * @method $this withDatabaseName($value)
 * @method string getTableName()
 * @method $this withTableName($value)
 */
class CheckMetaPartition extends Rpc
{
}

/**
 * @method string getDataSourceType()
 * @method $this withDataSourceType($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getTableGuid()
 * @method $this withTableGuid($value)
 * @method string getDatabaseName()
 * @method $this withDatabaseName($value)
 * @method string getTableName()
 * @method $this withTableName($value)
 */
class CheckMetaTable extends Rpc
{
}

/**
 * @method string getOwner()
 * @method string getAlertMarginThreshold()
 * @method array getOvertimeSettings()
 * @method string getPriority()
 * @method string getBaselineType()
 * @method string getBaselineName()
 * @method string getProjectId()
 * @method string getNodeIds()
 */
class CreateBaseline extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOwner($value)
    {
        $this->data['Owner'] = $value;
        $this->options['form_params']['Owner'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAlertMarginThreshold($value)
    {
        $this->data['AlertMarginThreshold'] = $value;
        $this->options['form_params']['AlertMarginThreshold'] = $value;

        return $this;
    }

    /**
     * @param array $overtimeSettings
     *
     * @return $this
     */
	public function withOvertimeSettings(array $overtimeSettings)
	{
	    $this->data['OvertimeSettings'] = $overtimeSettings;
		foreach ($overtimeSettings as $depth1 => $depth1Value) {
			if(isset($depth1Value['Time'])){
				$this->options['form_params']['OvertimeSettings.' . ($depth1 + 1) . '.Time'] = $depth1Value['Time'];
			}
			if(isset($depth1Value['Cycle'])){
				$this->options['form_params']['OvertimeSettings.' . ($depth1 + 1) . '.Cycle'] = $depth1Value['Cycle'];
			}
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPriority($value)
    {
        $this->data['Priority'] = $value;
        $this->options['form_params']['Priority'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBaselineType($value)
    {
        $this->data['BaselineType'] = $value;
        $this->options['form_params']['BaselineType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBaselineName($value)
    {
        $this->data['BaselineName'] = $value;
        $this->options['form_params']['BaselineName'] = $value;

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
    public function withNodeIds($value)
    {
        $this->data['NodeIds'] = $value;
        $this->options['form_params']['NodeIds'] = $value;

        return $this;
    }
}

/**
 * @method string getOwner()
 * @method string getDescription()
 * @method string getProjectIdentifier()
 * @method string getBusinessName()
 * @method string getProjectId()
 * @method string getUseType()
 */
class CreateBusiness extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOwner($value)
    {
        $this->data['Owner'] = $value;
        $this->options['form_params']['Owner'] = $value;

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
    public function withProjectIdentifier($value)
    {
        $this->data['ProjectIdentifier'] = $value;
        $this->options['form_params']['ProjectIdentifier'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBusinessName($value)
    {
        $this->data['BusinessName'] = $value;
        $this->options['form_params']['BusinessName'] = $value;

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
    public function withUseType($value)
    {
        $this->data['UseType'] = $value;
        $this->options['form_params']['UseType'] = $value;

        return $this;
    }
}

/**
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getContent()
 * @method $this withContent($value)
 * @method string getSubType()
 * @method $this withSubType($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getEnvType()
 * @method $this withEnvType($value)
 * @method string getConnectionType()
 * @method $this withConnectionType($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class CreateConnection extends Rpc
{
}

/**
 * @method string getProjectEnv()
 * @method string getStartBizDate()
 * @method string getParallelism()
 * @method string getRootNodeId()
 * @method string getBizBeginTime()
 * @method string getEndBizDate()
 * @method string getIncludeNodeIds()
 * @method string getBizEndTime()
 * @method string getName()
 * @method string getExcludeNodeIds()
 * @method string getNodeParams()
 */
class CreateDagComplement extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectEnv($value)
    {
        $this->data['ProjectEnv'] = $value;
        $this->options['form_params']['ProjectEnv'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStartBizDate($value)
    {
        $this->data['StartBizDate'] = $value;
        $this->options['form_params']['StartBizDate'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withParallelism($value)
    {
        $this->data['Parallelism'] = $value;
        $this->options['form_params']['Parallelism'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRootNodeId($value)
    {
        $this->data['RootNodeId'] = $value;
        $this->options['form_params']['RootNodeId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizBeginTime($value)
    {
        $this->data['BizBeginTime'] = $value;
        $this->options['form_params']['BizBeginTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEndBizDate($value)
    {
        $this->data['EndBizDate'] = $value;
        $this->options['form_params']['EndBizDate'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIncludeNodeIds($value)
    {
        $this->data['IncludeNodeIds'] = $value;
        $this->options['form_params']['IncludeNodeIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizEndTime($value)
    {
        $this->data['BizEndTime'] = $value;
        $this->options['form_params']['BizEndTime'] = $value;

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
    public function withExcludeNodeIds($value)
    {
        $this->data['ExcludeNodeIds'] = $value;
        $this->options['form_params']['ExcludeNodeIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNodeParams($value)
    {
        $this->data['NodeParams'] = $value;
        $this->options['form_params']['NodeParams'] = $value;

        return $this;
    }
}

/**
 * @method string getProjectEnv()
 * @method string getBizdate()
 * @method string getName()
 * @method string getNodeParams()
 * @method string getNodeId()
 */
class CreateDagTest extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectEnv($value)
    {
        $this->data['ProjectEnv'] = $value;
        $this->options['form_params']['ProjectEnv'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizdate($value)
    {
        $this->data['Bizdate'] = $value;
        $this->options['form_params']['Bizdate'] = $value;

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
    public function withNodeParams($value)
    {
        $this->data['NodeParams'] = $value;
        $this->options['form_params']['NodeParams'] = $value;

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
 * @method string getScriptDetails()
 * @method string getRequestMethod()
 * @method string getApiDescription()
 * @method string getTimeout()
 * @method string getFolderId()
 * @method string getResourceGroupId()
 * @method string getSqlMode()
 * @method string getTenantId()
 * @method string getRequestContentType()
 * @method string getProtocols()
 * @method string getProjectId()
 * @method string getResponseContentType()
 * @method string getGroupId()
 * @method string getApiPath()
 * @method string getWizardDetails()
 * @method string getApiMode()
 * @method string getVisibleRange()
 * @method string getRegistrationDetails()
 * @method string getApiName()
 */
class CreateDataServiceApi extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScriptDetails($value)
    {
        $this->data['ScriptDetails'] = $value;
        $this->options['form_params']['ScriptDetails'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRequestMethod($value)
    {
        $this->data['RequestMethod'] = $value;
        $this->options['form_params']['RequestMethod'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiDescription($value)
    {
        $this->data['ApiDescription'] = $value;
        $this->options['form_params']['ApiDescription'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTimeout($value)
    {
        $this->data['Timeout'] = $value;
        $this->options['form_params']['Timeout'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFolderId($value)
    {
        $this->data['FolderId'] = $value;
        $this->options['form_params']['FolderId'] = $value;

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
    public function withSqlMode($value)
    {
        $this->data['SqlMode'] = $value;
        $this->options['form_params']['SqlMode'] = $value;

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
    public function withRequestContentType($value)
    {
        $this->data['RequestContentType'] = $value;
        $this->options['form_params']['RequestContentType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProtocols($value)
    {
        $this->data['Protocols'] = $value;
        $this->options['form_params']['Protocols'] = $value;

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
    public function withResponseContentType($value)
    {
        $this->data['ResponseContentType'] = $value;
        $this->options['form_params']['ResponseContentType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupId($value)
    {
        $this->data['GroupId'] = $value;
        $this->options['form_params']['GroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiPath($value)
    {
        $this->data['ApiPath'] = $value;
        $this->options['form_params']['ApiPath'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWizardDetails($value)
    {
        $this->data['WizardDetails'] = $value;
        $this->options['form_params']['WizardDetails'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiMode($value)
    {
        $this->data['ApiMode'] = $value;
        $this->options['form_params']['ApiMode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVisibleRange($value)
    {
        $this->data['VisibleRange'] = $value;
        $this->options['form_params']['VisibleRange'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRegistrationDetails($value)
    {
        $this->data['RegistrationDetails'] = $value;
        $this->options['form_params']['RegistrationDetails'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiName($value)
    {
        $this->data['ApiName'] = $value;
        $this->options['form_params']['ApiName'] = $value;

        return $this;
    }
}

/**
 * @method string getAuthorizedProjectId()
 * @method string getEndTime()
 * @method string getTenantId()
 * @method string getProjectId()
 * @method string getApiId()
 */
class CreateDataServiceApiAuthority extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAuthorizedProjectId($value)
    {
        $this->data['AuthorizedProjectId'] = $value;
        $this->options['form_params']['AuthorizedProjectId'] = $value;

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
    public function withApiId($value)
    {
        $this->data['ApiId'] = $value;
        $this->options['form_params']['ApiId'] = $value;

        return $this;
    }
}

/**
 * @method string getGroupId()
 * @method string getFolderName()
 * @method string getParentId()
 * @method string getTenantId()
 * @method string getProjectId()
 */
class CreateDataServiceFolder extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupId($value)
    {
        $this->data['GroupId'] = $value;
        $this->options['form_params']['GroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFolderName($value)
    {
        $this->data['FolderName'] = $value;
        $this->options['form_params']['FolderName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withParentId($value)
    {
        $this->data['ParentId'] = $value;
        $this->options['form_params']['ParentId'] = $value;

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
    public function withProjectId($value)
    {
        $this->data['ProjectId'] = $value;
        $this->options['form_params']['ProjectId'] = $value;

        return $this;
    }
}

/**
 * @method string getDescription()
 * @method string getGroupName()
 * @method string getApiGatewayGroupId()
 * @method string getTenantId()
 * @method string getProjectId()
 */
class CreateDataServiceGroup extends Rpc
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
    public function withGroupName($value)
    {
        $this->data['GroupName'] = $value;
        $this->options['form_params']['GroupName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiGatewayGroupId($value)
    {
        $this->data['ApiGatewayGroupId'] = $value;
        $this->options['form_params']['ApiGatewayGroupId'] = $value;

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
    public function withProjectId($value)
    {
        $this->data['ProjectId'] = $value;
        $this->options['form_params']['ProjectId'] = $value;

        return $this;
    }
}

/**
 * @method string getDataSourceType()
 * @method $this withDataSourceType($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getContent()
 * @method $this withContent($value)
 * @method string getSubType()
 * @method $this withSubType($value)
 * @method string getEnvType()
 * @method $this withEnvType($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class CreateDataSource extends Rpc
{
}

/**
 * @method string getMetricType()
 * @method string getTriggerConditions()
 * @method string getDescription()
 * @method string getNotificationSettings()
 * @method string getEnabled()
 * @method string getDIJobId()
 */
class CreateDIAlarmRule extends Rpc
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
    public function withTriggerConditions($value)
    {
        $this->data['TriggerConditions'] = $value;
        $this->options['form_params']['TriggerConditions'] = $value;

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
    public function withNotificationSettings($value)
    {
        $this->data['NotificationSettings'] = $value;
        $this->options['form_params']['NotificationSettings'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEnabled($value)
    {
        $this->data['Enabled'] = $value;
        $this->options['form_params']['Enabled'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDIJobId($value)
    {
        $this->data['DIJobId'] = $value;
        $this->options['form_params']['DIJobId'] = $value;

        return $this;
    }
}

/**
 * @method string getSourceDataSourceType()
 * @method string getDescription()
 * @method string getTransformationRules()
 * @method string getDestinationDataSourceType()
 * @method string getDestinationDataSourceSettings()
 * @method string getSourceDataSourceSettings()
 * @method string getResourceSettings()
 * @method string getMigrationType()
 * @method string getSystemDebug()
 * @method $this withSystemDebug($value)
 * @method string getProjectId()
 * @method string getJobName()
 * @method string getTableMappings()
 * @method string getJobSettings()
 */
class CreateDIJob extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSourceDataSourceType($value)
    {
        $this->data['SourceDataSourceType'] = $value;
        $this->options['form_params']['SourceDataSourceType'] = $value;

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
    public function withTransformationRules($value)
    {
        $this->data['TransformationRules'] = $value;
        $this->options['form_params']['TransformationRules'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDestinationDataSourceType($value)
    {
        $this->data['DestinationDataSourceType'] = $value;
        $this->options['form_params']['DestinationDataSourceType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDestinationDataSourceSettings($value)
    {
        $this->data['DestinationDataSourceSettings'] = $value;
        $this->options['form_params']['DestinationDataSourceSettings'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSourceDataSourceSettings($value)
    {
        $this->data['SourceDataSourceSettings'] = $value;
        $this->options['form_params']['SourceDataSourceSettings'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceSettings($value)
    {
        $this->data['ResourceSettings'] = $value;
        $this->options['form_params']['ResourceSettings'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMigrationType($value)
    {
        $this->data['MigrationType'] = $value;
        $this->options['form_params']['MigrationType'] = $value;

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
    public function withJobName($value)
    {
        $this->data['JobName'] = $value;
        $this->options['form_params']['JobName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTableMappings($value)
    {
        $this->data['TableMappings'] = $value;
        $this->options['form_params']['TableMappings'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJobSettings($value)
    {
        $this->data['JobSettings'] = $value;
        $this->options['form_params']['JobSettings'] = $value;

        return $this;
    }
}

/**
 * @method string getTaskType()
 * @method $this withTaskType($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getTaskParam()
 * @method $this withTaskParam($value)
 * @method string getTaskName()
 * @method $this withTaskName($value)
 * @method string getTaskContent()
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class CreateDISyncTask extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTaskContent($value)
    {
        $this->data['TaskContent'] = $value;
        $this->options['form_params']['TaskContent'] = $value;

        return $this;
    }
}

/**
 * @method string getIncrementalSince()
 * @method string getDescription()
 * @method string getExportObjectStatus()
 * @method string getExportMode()
 * @method string getName()
 * @method string getProjectId()
 */
class CreateExportMigration extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIncrementalSince($value)
    {
        $this->data['IncrementalSince'] = $value;
        $this->options['form_params']['IncrementalSince'] = $value;

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
    public function withExportObjectStatus($value)
    {
        $this->data['ExportObjectStatus'] = $value;
        $this->options['form_params']['ExportObjectStatus'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExportMode($value)
    {
        $this->data['ExportMode'] = $value;
        $this->options['form_params']['ExportMode'] = $value;

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
    public function withProjectId($value)
    {
        $this->data['ProjectId'] = $value;
        $this->options['form_params']['ProjectId'] = $value;

        return $this;
    }
}

/**
 * @method string getFileType()
 * @method string getDependentNodeIdList()
 * @method string getContent()
 * @method string getProjectIdentifier()
 * @method string getResourceGroupId()
 * @method string getStartImmediately()
 * @method string getProjectId()
 * @method string getAdvancedSettings()
 * @method string getStartEffectDate()
 * @method string getCycleType()
 * @method string getOwner()
 * @method string getAutoRerunIntervalMillis()
 * @method string getInputList()
 * @method string getCreateFolderIfNotExists()
 * @method string getApplyScheduleImmediately()
 * @method string getRerunMode()
 * @method string getConnectionName()
 * @method string getOutputParameters()
 * @method string getParaValue()
 * @method string getResourceGroupIdentifier()
 * @method string getAutoRerunTimes()
 * @method string getCronExpress()
 * @method string getIgnoreParentSkipRunningProperty()
 * @method string getEndEffectDate()
 * @method string getFileName()
 * @method string getInputParameters()
 * @method string getStop()
 * @method string getDependentType()
 * @method string getFileFolderPath()
 * @method string getFileDescription()
 * @method string getAutoParsing()
 * @method string getSchedulerType()
 */
class CreateFile extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFileType($value)
    {
        $this->data['FileType'] = $value;
        $this->options['form_params']['FileType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDependentNodeIdList($value)
    {
        $this->data['DependentNodeIdList'] = $value;
        $this->options['form_params']['DependentNodeIdList'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContent($value)
    {
        $this->data['Content'] = $value;
        $this->options['form_params']['Content'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectIdentifier($value)
    {
        $this->data['ProjectIdentifier'] = $value;
        $this->options['form_params']['ProjectIdentifier'] = $value;

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
    public function withStartImmediately($value)
    {
        $this->data['StartImmediately'] = $value;
        $this->options['form_params']['StartImmediately'] = $value;

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
    public function withAdvancedSettings($value)
    {
        $this->data['AdvancedSettings'] = $value;
        $this->options['form_params']['AdvancedSettings'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStartEffectDate($value)
    {
        $this->data['StartEffectDate'] = $value;
        $this->options['form_params']['StartEffectDate'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCycleType($value)
    {
        $this->data['CycleType'] = $value;
        $this->options['form_params']['CycleType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOwner($value)
    {
        $this->data['Owner'] = $value;
        $this->options['form_params']['Owner'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAutoRerunIntervalMillis($value)
    {
        $this->data['AutoRerunIntervalMillis'] = $value;
        $this->options['form_params']['AutoRerunIntervalMillis'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInputList($value)
    {
        $this->data['InputList'] = $value;
        $this->options['form_params']['InputList'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCreateFolderIfNotExists($value)
    {
        $this->data['CreateFolderIfNotExists'] = $value;
        $this->options['form_params']['CreateFolderIfNotExists'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApplyScheduleImmediately($value)
    {
        $this->data['ApplyScheduleImmediately'] = $value;
        $this->options['form_params']['ApplyScheduleImmediately'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRerunMode($value)
    {
        $this->data['RerunMode'] = $value;
        $this->options['form_params']['RerunMode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withConnectionName($value)
    {
        $this->data['ConnectionName'] = $value;
        $this->options['form_params']['ConnectionName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOutputParameters($value)
    {
        $this->data['OutputParameters'] = $value;
        $this->options['form_params']['OutputParameters'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withParaValue($value)
    {
        $this->data['ParaValue'] = $value;
        $this->options['form_params']['ParaValue'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceGroupIdentifier($value)
    {
        $this->data['ResourceGroupIdentifier'] = $value;
        $this->options['form_params']['ResourceGroupIdentifier'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAutoRerunTimes($value)
    {
        $this->data['AutoRerunTimes'] = $value;
        $this->options['form_params']['AutoRerunTimes'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCronExpress($value)
    {
        $this->data['CronExpress'] = $value;
        $this->options['form_params']['CronExpress'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIgnoreParentSkipRunningProperty($value)
    {
        $this->data['IgnoreParentSkipRunningProperty'] = $value;
        $this->options['form_params']['IgnoreParentSkipRunningProperty'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEndEffectDate($value)
    {
        $this->data['EndEffectDate'] = $value;
        $this->options['form_params']['EndEffectDate'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFileName($value)
    {
        $this->data['FileName'] = $value;
        $this->options['form_params']['FileName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInputParameters($value)
    {
        $this->data['InputParameters'] = $value;
        $this->options['form_params']['InputParameters'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStop($value)
    {
        $this->data['Stop'] = $value;
        $this->options['form_params']['Stop'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDependentType($value)
    {
        $this->data['DependentType'] = $value;
        $this->options['form_params']['DependentType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFileFolderPath($value)
    {
        $this->data['FileFolderPath'] = $value;
        $this->options['form_params']['FileFolderPath'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFileDescription($value)
    {
        $this->data['FileDescription'] = $value;
        $this->options['form_params']['FileDescription'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAutoParsing($value)
    {
        $this->data['AutoParsing'] = $value;
        $this->options['form_params']['AutoParsing'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSchedulerType($value)
    {
        $this->data['SchedulerType'] = $value;
        $this->options['form_params']['SchedulerType'] = $value;

        return $this;
    }
}

/**
 * @method string getFolderPath()
 * @method string getProjectId()
 * @method string getProjectIdentifier()
 */
class CreateFolder extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFolderPath($value)
    {
        $this->data['FolderPath'] = $value;
        $this->options['form_params']['FolderPath'] = $value;

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
    public function withProjectIdentifier($value)
    {
        $this->data['ProjectIdentifier'] = $value;
        $this->options['form_params']['ProjectIdentifier'] = $value;

        return $this;
    }
}

/**
 * @method string getDescription()
 * @method string getCommitRule()
 * @method string getWorkspaceMap()
 * @method string getCalculateEngineMap()
 * @method string getPackageFile()
 * @method string getName()
 * @method string getPackageType()
 * @method string getProjectId()
 * @method string getResourceGroupMap()
 */
class CreateImportMigration extends Rpc
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
    public function withCommitRule($value)
    {
        $this->data['CommitRule'] = $value;
        $this->options['form_params']['CommitRule'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWorkspaceMap($value)
    {
        $this->data['WorkspaceMap'] = $value;
        $this->options['form_params']['WorkspaceMap'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCalculateEngineMap($value)
    {
        $this->data['CalculateEngineMap'] = $value;
        $this->options['form_params']['CalculateEngineMap'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPackageFile($value)
    {
        $this->data['PackageFile'] = $value;
        $this->options['form_params']['PackageFile'] = $value;

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
    public function withPackageType($value)
    {
        $this->data['PackageType'] = $value;
        $this->options['form_params']['PackageType'] = $value;

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
    public function withResourceGroupMap($value)
    {
        $this->data['ResourceGroupMap'] = $value;
        $this->options['form_params']['ResourceGroupMap'] = $value;

        return $this;
    }
}

/**
 * @method string getProjectEnv()
 * @method string getProjectName()
 * @method string getDagParameters()
 * @method string getIncludeNodeIds()
 * @method string getBizDate()
 * @method string getExcludeNodeIds()
 * @method string getFlowName()
 * @method string getNodeParameters()
 */
class CreateManualDag extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectEnv($value)
    {
        $this->data['ProjectEnv'] = $value;
        $this->options['form_params']['ProjectEnv'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectName($value)
    {
        $this->data['ProjectName'] = $value;
        $this->options['form_params']['ProjectName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDagParameters($value)
    {
        $this->data['DagParameters'] = $value;
        $this->options['form_params']['DagParameters'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIncludeNodeIds($value)
    {
        $this->data['IncludeNodeIds'] = $value;
        $this->options['form_params']['IncludeNodeIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizDate($value)
    {
        $this->data['BizDate'] = $value;
        $this->options['form_params']['BizDate'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExcludeNodeIds($value)
    {
        $this->data['ExcludeNodeIds'] = $value;
        $this->options['form_params']['ExcludeNodeIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFlowName($value)
    {
        $this->data['FlowName'] = $value;
        $this->options['form_params']['FlowName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNodeParameters($value)
    {
        $this->data['NodeParameters'] = $value;
        $this->options['form_params']['NodeParameters'] = $value;

        return $this;
    }
}

/**
 * @method string getParentId()
 * @method string getName()
 * @method string getComment()
 */
class CreateMetaCategory extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withParentId($value)
    {
        $this->data['ParentId'] = $value;
        $this->options['form_params']['ParentId'] = $value;

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
    public function withComment($value)
    {
        $this->data['Comment'] = $value;
        $this->options['form_params']['Comment'] = $value;

        return $this;
    }
}

/**
 * @method string getParentQualifiedName()
 * @method $this withParentQualifiedName($value)
 * @method string getCollectionType()
 * @method $this withCollectionType($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getComment()
 * @method $this withComment($value)
 */
class CreateMetaCollection extends Rpc
{
}

/**
 * @method string getApplyReason()
 * @method $this withApplyReason($value)
 * @method string getMaxComputeProjectName()
 * @method $this withMaxComputeProjectName($value)
 * @method array getApplyObject()
 * @method string getApplyUserIds()
 * @method $this withApplyUserIds($value)
 * @method string getDeadline()
 * @method $this withDeadline($value)
 * @method string getWorkspaceId()
 * @method $this withWorkspaceId($value)
 * @method string getOrderType()
 * @method $this withOrderType($value)
 * @method string getEngineType()
 * @method $this withEngineType($value)
 */
class CreatePermissionApplyOrder extends Rpc
{

    /**
     * @param array $applyObject
     *
     * @return $this
     */
	public function withApplyObject(array $applyObject)
	{
	    $this->data['ApplyObject'] = $applyObject;
		foreach ($applyObject as $depth1 => $depth1Value) {
			foreach ($depth1Value['ColumnMetaList'] as $depth2 => $depth2Value) {
				if(isset($depth2Value['Name'])){
					$this->options['query']['ApplyObject.' . ($depth1 + 1) . '.ColumnMetaList.' . ($depth2 + 1) . '.Name'] = $depth2Value['Name'];
				}
			}
			if(isset($depth1Value['Name'])){
				$this->options['query']['ApplyObject.' . ($depth1 + 1) . '.Name'] = $depth1Value['Name'];
			}
			if(isset($depth1Value['Actions'])){
				$this->options['query']['ApplyObject.' . ($depth1 + 1) . '.Actions'] = $depth1Value['Actions'];
			}
		}

		return $this;
    }
}

/**
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getDisableDevelopment()
 * @method $this withDisableDevelopment($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getProjectIdentifier()
 * @method $this withProjectIdentifier($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getProjectDescription()
 * @method $this withProjectDescription($value)
 * @method string getIsAllowDownload()
 * @method $this withIsAllowDownload($value)
 * @method string getResourceManagerResourceGroupId()
 * @method $this withResourceManagerResourceGroupId($value)
 * @method string getProjectMode()
 * @method $this withProjectMode($value)
 */
class CreateProject extends Rpc
{
}

/**
 * @method string getRoleCode()
 * @method $this withRoleCode($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class CreateProjectMember extends Rpc
{
}

/**
 * @method string getProjectName()
 * @method string getEntityLevel()
 * @method string getMatchExpression()
 * @method string getEnvType()
 * @method string getTableName()
 * @method string getProjectId()
 */
class CreateQualityEntity extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectName($value)
    {
        $this->data['ProjectName'] = $value;
        $this->options['form_params']['ProjectName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEntityLevel($value)
    {
        $this->data['EntityLevel'] = $value;
        $this->options['form_params']['EntityLevel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMatchExpression($value)
    {
        $this->data['MatchExpression'] = $value;
        $this->options['form_params']['MatchExpression'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEnvType($value)
    {
        $this->data['EnvType'] = $value;
        $this->options['form_params']['EnvType'] = $value;

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
    public function withProjectId($value)
    {
        $this->data['ProjectId'] = $value;
        $this->options['form_params']['ProjectId'] = $value;

        return $this;
    }
}

/**
 * @method string getProjectName()
 * @method string getFollower()
 * @method string getEntityId()
 * @method string getAlarmMode()
 * @method string getProjectId()
 */
class CreateQualityFollower extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectName($value)
    {
        $this->data['ProjectName'] = $value;
        $this->options['form_params']['ProjectName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFollower($value)
    {
        $this->data['Follower'] = $value;
        $this->options['form_params']['Follower'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEntityId($value)
    {
        $this->data['EntityId'] = $value;
        $this->options['form_params']['EntityId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAlarmMode($value)
    {
        $this->data['AlarmMode'] = $value;
        $this->options['form_params']['AlarmMode'] = $value;

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
 * @method string getProjectName()
 * @method string getTargetNodeProjectId()
 * @method string getMatchExpression()
 * @method string getEnvType()
 * @method string getTargetNodeProjectName()
 * @method string getTableName()
 * @method string getNodeId()
 * @method string getProjectId()
 */
class CreateQualityRelativeNode extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectName($value)
    {
        $this->data['ProjectName'] = $value;
        $this->options['form_params']['ProjectName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTargetNodeProjectId($value)
    {
        $this->data['TargetNodeProjectId'] = $value;
        $this->options['form_params']['TargetNodeProjectId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMatchExpression($value)
    {
        $this->data['MatchExpression'] = $value;
        $this->options['form_params']['MatchExpression'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEnvType($value)
    {
        $this->data['EnvType'] = $value;
        $this->options['form_params']['EnvType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTargetNodeProjectName($value)
    {
        $this->data['TargetNodeProjectName'] = $value;
        $this->options['form_params']['TargetNodeProjectName'] = $value;

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
    public function withProjectId($value)
    {
        $this->data['ProjectId'] = $value;
        $this->options['form_params']['ProjectId'] = $value;

        return $this;
    }
}

/**
 * @method string getTaskSetting()
 * @method string getTrend()
 * @method string getBlockType()
 * @method string getPropertyType()
 * @method string getEntityId()
 * @method string getRuleName()
 * @method string getChecker()
 * @method string getOperator()
 * @method string getProperty()
 * @method string getWarningThreshold()
 * @method string getProjectId()
 * @method string getMethodName()
 * @method string getProjectName()
 * @method string getRuleType()
 * @method string getTemplateId()
 * @method string getExpectValue()
 * @method string getWhereCondition()
 * @method string getCriticalThreshold()
 * @method string getComment()
 * @method string getPredictType()
 */
class CreateQualityRule extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTaskSetting($value)
    {
        $this->data['TaskSetting'] = $value;
        $this->options['form_params']['TaskSetting'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTrend($value)
    {
        $this->data['Trend'] = $value;
        $this->options['form_params']['Trend'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBlockType($value)
    {
        $this->data['BlockType'] = $value;
        $this->options['form_params']['BlockType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPropertyType($value)
    {
        $this->data['PropertyType'] = $value;
        $this->options['form_params']['PropertyType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEntityId($value)
    {
        $this->data['EntityId'] = $value;
        $this->options['form_params']['EntityId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRuleName($value)
    {
        $this->data['RuleName'] = $value;
        $this->options['form_params']['RuleName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChecker($value)
    {
        $this->data['Checker'] = $value;
        $this->options['form_params']['Checker'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperator($value)
    {
        $this->data['Operator'] = $value;
        $this->options['form_params']['Operator'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProperty($value)
    {
        $this->data['Property'] = $value;
        $this->options['form_params']['Property'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWarningThreshold($value)
    {
        $this->data['WarningThreshold'] = $value;
        $this->options['form_params']['WarningThreshold'] = $value;

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
    public function withMethodName($value)
    {
        $this->data['MethodName'] = $value;
        $this->options['form_params']['MethodName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectName($value)
    {
        $this->data['ProjectName'] = $value;
        $this->options['form_params']['ProjectName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRuleType($value)
    {
        $this->data['RuleType'] = $value;
        $this->options['form_params']['RuleType'] = $value;

        return $this;
    }

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

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExpectValue($value)
    {
        $this->data['ExpectValue'] = $value;
        $this->options['form_params']['ExpectValue'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWhereCondition($value)
    {
        $this->data['WhereCondition'] = $value;
        $this->options['form_params']['WhereCondition'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCriticalThreshold($value)
    {
        $this->data['CriticalThreshold'] = $value;
        $this->options['form_params']['CriticalThreshold'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withComment($value)
    {
        $this->data['Comment'] = $value;
        $this->options['form_params']['Comment'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPredictType($value)
    {
        $this->data['PredictType'] = $value;
        $this->options['form_params']['PredictType'] = $value;

        return $this;
    }
}

/**
 * @method string getAlertUnit()
 * @method string getRobotUrls()
 * @method string getBizProcessIds()
 * @method string getRemindType()
 * @method string getBaselineIds()
 * @method string getProjectId()
 * @method string getDndEnd()
 * @method string getRemindUnit()
 * @method string getAlertInterval()
 * @method string getAlertMethods()
 * @method string getMaxAlertTimes()
 * @method string getAlertTargets()
 * @method string getWebhooks()
 * @method string getDetail()
 * @method string getRemindName()
 * @method string getNodeIds()
 */
class CreateRemind extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAlertUnit($value)
    {
        $this->data['AlertUnit'] = $value;
        $this->options['form_params']['AlertUnit'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRobotUrls($value)
    {
        $this->data['RobotUrls'] = $value;
        $this->options['form_params']['RobotUrls'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizProcessIds($value)
    {
        $this->data['BizProcessIds'] = $value;
        $this->options['form_params']['BizProcessIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRemindType($value)
    {
        $this->data['RemindType'] = $value;
        $this->options['form_params']['RemindType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBaselineIds($value)
    {
        $this->data['BaselineIds'] = $value;
        $this->options['form_params']['BaselineIds'] = $value;

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
    public function withDndEnd($value)
    {
        $this->data['DndEnd'] = $value;
        $this->options['form_params']['DndEnd'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRemindUnit($value)
    {
        $this->data['RemindUnit'] = $value;
        $this->options['form_params']['RemindUnit'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAlertInterval($value)
    {
        $this->data['AlertInterval'] = $value;
        $this->options['form_params']['AlertInterval'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAlertMethods($value)
    {
        $this->data['AlertMethods'] = $value;
        $this->options['form_params']['AlertMethods'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMaxAlertTimes($value)
    {
        $this->data['MaxAlertTimes'] = $value;
        $this->options['form_params']['MaxAlertTimes'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAlertTargets($value)
    {
        $this->data['AlertTargets'] = $value;
        $this->options['form_params']['AlertTargets'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWebhooks($value)
    {
        $this->data['Webhooks'] = $value;
        $this->options['form_params']['Webhooks'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDetail($value)
    {
        $this->data['Detail'] = $value;
        $this->options['form_params']['Detail'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRemindName($value)
    {
        $this->data['RemindName'] = $value;
        $this->options['form_params']['RemindName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNodeIds($value)
    {
        $this->data['NodeIds'] = $value;
        $this->options['form_params']['NodeIds'] = $value;

        return $this;
    }
}

/**
 * @method string getFileType()
 * @method string getContent()
 * @method string getResourceFile()
 * @method string getOriginResourceName()
 * @method string getProjectId()
 * @method string getStorageURL()
 * @method string getOwner()
 * @method string getRegisterToCalcEngine()
 * @method string getUploadMode()
 * @method string getFileName()
 * @method string getFileFolderPath()
 * @method string getFileDescription()
 */
class CreateResourceFile extends Rpc
{

    /** @var string */
    public $scheme = 'https';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFileType($value)
    {
        $this->data['FileType'] = $value;
        $this->options['form_params']['FileType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContent($value)
    {
        $this->data['Content'] = $value;
        $this->options['form_params']['Content'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceFile($value)
    {
        $this->data['ResourceFile'] = $value;
        $this->options['form_params']['ResourceFile'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOriginResourceName($value)
    {
        $this->data['OriginResourceName'] = $value;
        $this->options['form_params']['OriginResourceName'] = $value;

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
    public function withStorageURL($value)
    {
        $this->data['StorageURL'] = $value;
        $this->options['form_params']['StorageURL'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOwner($value)
    {
        $this->data['Owner'] = $value;
        $this->options['form_params']['Owner'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRegisterToCalcEngine($value)
    {
        $this->data['RegisterToCalcEngine'] = $value;
        $this->options['form_params']['RegisterToCalcEngine'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUploadMode($value)
    {
        $this->data['UploadMode'] = $value;
        $this->options['form_params']['UploadMode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFileName($value)
    {
        $this->data['FileName'] = $value;
        $this->options['form_params']['FileName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFileFolderPath($value)
    {
        $this->data['FileFolderPath'] = $value;
        $this->options['form_params']['FileFolderPath'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFileDescription($value)
    {
        $this->data['FileDescription'] = $value;
        $this->options['form_params']['FileDescription'] = $value;

        return $this;
    }
}

/**
 * @method string getSchema()
 * @method $this withSchema($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method array getColumns()
 * @method string getLifeCycle()
 * @method $this withLifeCycle($value)
 * @method array getThemes()
 * @method string getLogicalLevelId()
 * @method $this withLogicalLevelId($value)
 * @method string getEndpoint()
 * @method string getEnvType()
 * @method string getHasPart()
 * @method $this withHasPart($value)
 * @method string getTableName()
 * @method $this withTableName($value)
 * @method string getAppGuid()
 * @method $this withAppGuid($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getCategoryId()
 * @method $this withCategoryId($value)
 * @method string getVisibility()
 * @method $this withVisibility($value)
 * @method string getPhysicsLevelId()
 * @method $this withPhysicsLevelId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getIsView()
 * @method $this withIsView($value)
 * @method string getExternalTableType()
 * @method $this withExternalTableType($value)
 * @method string getLocation()
 * @method $this withLocation($value)
 * @method string getComment()
 * @method $this withComment($value)
 */
class CreateTable extends Rpc
{

    /**
     * @param array $columns
     *
     * @return $this
     */
	public function withColumns(array $columns)
	{
	    $this->data['Columns'] = $columns;
		foreach ($columns as $depth1 => $depth1Value) {
			if(isset($depth1Value['SeqNumber'])){
				$this->options['form_params']['Columns.' . ($depth1 + 1) . '.SeqNumber'] = $depth1Value['SeqNumber'];
			}
			if(isset($depth1Value['IsPartitionCol'])){
				$this->options['form_params']['Columns.' . ($depth1 + 1) . '.IsPartitionCol'] = $depth1Value['IsPartitionCol'];
			}
			if(isset($depth1Value['ColumnNameCn'])){
				$this->options['form_params']['Columns.' . ($depth1 + 1) . '.ColumnNameCn'] = $depth1Value['ColumnNameCn'];
			}
			if(isset($depth1Value['Length'])){
				$this->options['form_params']['Columns.' . ($depth1 + 1) . '.Length'] = $depth1Value['Length'];
			}
			if(isset($depth1Value['Comment'])){
				$this->options['form_params']['Columns.' . ($depth1 + 1) . '.Comment'] = $depth1Value['Comment'];
			}
			if(isset($depth1Value['ColumnName'])){
				$this->options['form_params']['Columns.' . ($depth1 + 1) . '.ColumnName'] = $depth1Value['ColumnName'];
			}
			if(isset($depth1Value['ColumnType'])){
				$this->options['form_params']['Columns.' . ($depth1 + 1) . '.ColumnType'] = $depth1Value['ColumnType'];
			}
		}

		return $this;
    }

    /**
     * @param array $themes
     *
     * @return $this
     */
	public function withThemes(array $themes)
	{
	    $this->data['Themes'] = $themes;
		foreach ($themes as $depth1 => $depth1Value) {
			if(isset($depth1Value['ThemeLevel'])){
				$this->options['form_params']['Themes.' . ($depth1 + 1) . '.ThemeLevel'] = $depth1Value['ThemeLevel'];
			}
			if(isset($depth1Value['ThemeId'])){
				$this->options['form_params']['Themes.' . ($depth1 + 1) . '.ThemeId'] = $depth1Value['ThemeId'];
			}
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEndpoint($value)
    {
        $this->data['Endpoint'] = $value;
        $this->options['form_params']['Endpoint'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEnvType($value)
    {
        $this->data['EnvType'] = $value;
        $this->options['form_params']['EnvType'] = $value;

        return $this;
    }
}

/**
 * @method string getLevelType()
 * @method $this withLevelType($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class CreateTableLevel extends Rpc
{
}

/**
 * @method string getLevel()
 * @method $this withLevel($value)
 * @method string getParentId()
 * @method $this withParentId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class CreateTableTheme extends Rpc
{
}

/**
 * @method string getCreateFolderIfNotExists()
 * @method string getReturnValue()
 * @method string getResources()
 * @method string getFunctionType()
 * @method string getCmdDescription()
 * @method string getUdfDescription()
 * @method string getParameterDescription()
 * @method string getProjectIdentifier()
 * @method string getExample()
 * @method string getFileName()
 * @method string getClassName()
 * @method string getFileFolderPath()
 * @method string getProjectId()
 */
class CreateUdfFile extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCreateFolderIfNotExists($value)
    {
        $this->data['CreateFolderIfNotExists'] = $value;
        $this->options['form_params']['CreateFolderIfNotExists'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withReturnValue($value)
    {
        $this->data['ReturnValue'] = $value;
        $this->options['form_params']['ReturnValue'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResources($value)
    {
        $this->data['Resources'] = $value;
        $this->options['form_params']['Resources'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFunctionType($value)
    {
        $this->data['FunctionType'] = $value;
        $this->options['form_params']['FunctionType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCmdDescription($value)
    {
        $this->data['CmdDescription'] = $value;
        $this->options['form_params']['CmdDescription'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUdfDescription($value)
    {
        $this->data['UdfDescription'] = $value;
        $this->options['form_params']['UdfDescription'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withParameterDescription($value)
    {
        $this->data['ParameterDescription'] = $value;
        $this->options['form_params']['ParameterDescription'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectIdentifier($value)
    {
        $this->data['ProjectIdentifier'] = $value;
        $this->options['form_params']['ProjectIdentifier'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExample($value)
    {
        $this->data['Example'] = $value;
        $this->options['form_params']['Example'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFileName($value)
    {
        $this->data['FileName'] = $value;
        $this->options['form_params']['FileName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClassName($value)
    {
        $this->data['ClassName'] = $value;
        $this->options['form_params']['ClassName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFileFolderPath($value)
    {
        $this->data['FileFolderPath'] = $value;
        $this->options['form_params']['FileFolderPath'] = $value;

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
 * @method string getProjectId()
 * @method string getBaselineId()
 */
class DeleteBaseline extends Rpc
{

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
    public function withBaselineId($value)
    {
        $this->data['BaselineId'] = $value;
        $this->options['form_params']['BaselineId'] = $value;

        return $this;
    }
}

/**
 * @method string getBusinessId()
 * @method string getProjectId()
 * @method string getProjectIdentifier()
 */
class DeleteBusiness extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBusinessId($value)
    {
        $this->data['BusinessId'] = $value;
        $this->options['form_params']['BusinessId'] = $value;

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
    public function withProjectIdentifier($value)
    {
        $this->data['ProjectIdentifier'] = $value;
        $this->options['form_params']['ProjectIdentifier'] = $value;

        return $this;
    }
}

/**
 * @method string getConnectionId()
 * @method $this withConnectionId($value)
 */
class DeleteConnection extends Rpc
{
}

/**
 * @method string getTenantId()
 * @method string getProjectId()
 * @method string getApiId()
 */
class DeleteDataServiceApi extends Rpc
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
    public function withApiId($value)
    {
        $this->data['ApiId'] = $value;
        $this->options['form_params']['ApiId'] = $value;

        return $this;
    }
}

/**
 * @method string getAuthorizedProjectId()
 * @method string getTenantId()
 * @method string getProjectId()
 * @method string getApiId()
 */
class DeleteDataServiceApiAuthority extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAuthorizedProjectId($value)
    {
        $this->data['AuthorizedProjectId'] = $value;
        $this->options['form_params']['AuthorizedProjectId'] = $value;

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
    public function withApiId($value)
    {
        $this->data['ApiId'] = $value;
        $this->options['form_params']['ApiId'] = $value;

        return $this;
    }
}

/**
 * @method string getDataSourceId()
 * @method $this withDataSourceId($value)
 */
class DeleteDataSource extends Rpc
{
}

/**
 * @method string getDIAlarmRuleId()
 */
class DeleteDIAlarmRule extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDIAlarmRuleId($value)
    {
        $this->data['DIAlarmRuleId'] = $value;
        $this->options['form_params']['DIAlarmRuleId'] = $value;

        return $this;
    }
}

/**
 * @method string getDIJobId()
 */
class DeleteDIJob extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDIJobId($value)
    {
        $this->data['DIJobId'] = $value;
        $this->options['form_params']['DIJobId'] = $value;

        return $this;
    }
}

/**
 * @method string getTaskType()
 * @method $this withTaskType($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getFileId()
 * @method $this withFileId($value)
 */
class DeleteDISyncTask extends Rpc
{
}

/**
 * @method string getProjectId()
 * @method string getProjectIdentifier()
 * @method string getFileId()
 */
class DeleteFile extends Rpc
{

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
    public function withProjectIdentifier($value)
    {
        $this->data['ProjectIdentifier'] = $value;
        $this->options['form_params']['ProjectIdentifier'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFileId($value)
    {
        $this->data['FileId'] = $value;
        $this->options['form_params']['FileId'] = $value;

        return $this;
    }
}

/**
 * @method string getProjectId()
 * @method string getProjectIdentifier()
 * @method string getFolderId()
 */
class DeleteFolder extends Rpc
{

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
    public function withProjectIdentifier($value)
    {
        $this->data['ProjectIdentifier'] = $value;
        $this->options['form_params']['ProjectIdentifier'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFolderId($value)
    {
        $this->data['FolderId'] = $value;
        $this->options['form_params']['FolderId'] = $value;

        return $this;
    }
}

/**
 * @method string getTableGuid()
 * @method $this withTableGuid($value)
 * @method string getCategoryId()
 * @method $this withCategoryId($value)
 */
class DeleteFromMetaCategory extends Rpc
{
}

/**
 * @method string getSrcEntityQualifiedName()
 * @method $this withSrcEntityQualifiedName($value)
 * @method string getDestEntityQualifiedName()
 * @method $this withDestEntityQualifiedName($value)
 * @method string getRelationshipType()
 * @method $this withRelationshipType($value)
 * @method string getRelationshipGuid()
 * @method $this withRelationshipGuid($value)
 */
class DeleteLineageRelation extends Rpc
{
}

/**
 * @method string getCategoryId()
 * @method $this withCategoryId($value)
 */
class DeleteMetaCategory extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getQualifiedName()
 * @method $this withQualifiedName($value)
 */
class DeleteMetaCollection extends Rpc
{
}

/**
 * @method string getEntityQualifiedName()
 * @method $this withEntityQualifiedName($value)
 * @method string getCollectionQualifiedName()
 * @method $this withCollectionQualifiedName($value)
 */
class DeleteMetaCollectionEntity extends Rpc
{
}

/**
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class DeleteProjectMember extends Rpc
{
}

/**
 * @method string getProjectName()
 * @method string getEntityId()
 * @method string getEnvType()
 * @method string getProjectId()
 */
class DeleteQualityEntity extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectName($value)
    {
        $this->data['ProjectName'] = $value;
        $this->options['form_params']['ProjectName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEntityId($value)
    {
        $this->data['EntityId'] = $value;
        $this->options['form_params']['EntityId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEnvType($value)
    {
        $this->data['EnvType'] = $value;
        $this->options['form_params']['EnvType'] = $value;

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
 * @method string getProjectName()
 * @method string getFollowerId()
 * @method string getProjectId()
 */
class DeleteQualityFollower extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectName($value)
    {
        $this->data['ProjectName'] = $value;
        $this->options['form_params']['ProjectName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFollowerId($value)
    {
        $this->data['FollowerId'] = $value;
        $this->options['form_params']['FollowerId'] = $value;

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
 * @method string getProjectName()
 * @method string getTargetNodeProjectId()
 * @method string getMatchExpression()
 * @method string getEnvType()
 * @method string getTargetNodeProjectName()
 * @method string getTableName()
 * @method string getNodeId()
 * @method string getProjectId()
 */
class DeleteQualityRelativeNode extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectName($value)
    {
        $this->data['ProjectName'] = $value;
        $this->options['form_params']['ProjectName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTargetNodeProjectId($value)
    {
        $this->data['TargetNodeProjectId'] = $value;
        $this->options['form_params']['TargetNodeProjectId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMatchExpression($value)
    {
        $this->data['MatchExpression'] = $value;
        $this->options['form_params']['MatchExpression'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEnvType($value)
    {
        $this->data['EnvType'] = $value;
        $this->options['form_params']['EnvType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTargetNodeProjectName($value)
    {
        $this->data['TargetNodeProjectName'] = $value;
        $this->options['form_params']['TargetNodeProjectName'] = $value;

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
    public function withProjectId($value)
    {
        $this->data['ProjectId'] = $value;
        $this->options['form_params']['ProjectId'] = $value;

        return $this;
    }
}

/**
 * @method string getProjectName()
 * @method string getRuleId()
 * @method string getProjectId()
 */
class DeleteQualityRule extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectName($value)
    {
        $this->data['ProjectName'] = $value;
        $this->options['form_params']['ProjectName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRuleId($value)
    {
        $this->data['RuleId'] = $value;
        $this->options['form_params']['RuleId'] = $value;

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
 * @method string getSensitiveId()
 * @method string getTenantId()
 */
class DeleteRecognizeRule extends Rpc
{

    /** @var string */
    public $scheme = 'https';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSensitiveId($value)
    {
        $this->data['SensitiveId'] = $value;
        $this->options['form_params']['SensitiveId'] = $value;

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
 * @method string getRemindId()
 */
class DeleteRemind extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRemindId($value)
    {
        $this->data['RemindId'] = $value;
        $this->options['form_params']['RemindId'] = $value;

        return $this;
    }
}

/**
 * @method string getSchema()
 * @method $this withSchema($value)
 * @method string getEnvType()
 * @method $this withEnvType($value)
 * @method string getTableName()
 * @method $this withTableName($value)
 * @method string getAppGuid()
 * @method $this withAppGuid($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class DeleteTable extends Rpc
{
}

/**
 * @method string getLevelId()
 * @method $this withLevelId($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class DeleteTableLevel extends Rpc
{
}

/**
 * @method string getThemeId()
 * @method $this withThemeId($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class DeleteTableTheme extends Rpc
{
}

/**
 * @method string getTaskType()
 * @method $this withTaskType($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getFileId()
 * @method $this withFileId($value)
 */
class DeployDISyncTask extends Rpc
{
}

/**
 * @method string getProjectIdentifier()
 * @method string getComment()
 * @method string getProjectId()
 * @method string getNodeId()
 * @method string getFileId()
 */
class DeployFile extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectIdentifier($value)
    {
        $this->data['ProjectIdentifier'] = $value;
        $this->options['form_params']['ProjectIdentifier'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withComment($value)
    {
        $this->data['Comment'] = $value;
        $this->options['form_params']['Comment'] = $value;

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
    public function withFileId($value)
    {
        $this->data['FileId'] = $value;
        $this->options['form_params']['FileId'] = $value;

        return $this;
    }
}

/**
 * @method string getSceneCode()
 * @method string getData()
 */
class DesensitizeData extends Rpc
{

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSceneCode($value)
    {
        $this->data['SceneCode'] = $value;
        $this->options['form_params']['SceneCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withData($value)
    {
        $this->data['Data'] = $value;
        $this->options['form_params']['Data'] = $value;

        return $this;
    }
}

/**
 * @method string getDesensRules()
 * @method $this withDesensRules($value)
 */
class DsgDesensPlanAddOrUpdate extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getSceneCode()
 * @method $this withSceneCode($value)
 * @method string getIds()
 * @method $this withIds($value)
 */
class DsgDesensPlanDelete extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getOwner()
 * @method $this withOwner($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getSceneId()
 * @method $this withSceneId($value)
 * @method string getRuleName()
 * @method $this withRuleName($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DsgDesensPlanQueryList extends Rpc
{

    /** @var string */
    public $scheme = 'https';

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getSceneCode()
 * @method $this withSceneCode($value)
 * @method string getIds()
 * @method $this withIds($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DsgDesensPlanUpdateStatus extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getEngineName()
 * @method $this withEngineName($value)
 */
class DsgPlatformQueryProjectsAndSchemaFromMeta extends Rpc
{

    /** @var string */
    public $scheme = 'https';

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getSceneId()
 * @method $this withSceneId($value)
 */
class DsgQueryDefaultTemplates extends Rpc
{

    /** @var string */
    public $scheme = 'https';

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getCol()
 * @method string getProjectName()
 * @method string getSchemaName()
 * @method string getLevel()
 * @method string getSensStatus()
 * @method string getNodeName()
 * @method string getSensitiveId()
 * @method string getPageNo()
 * @method string getTenantId()
 * @method string getDbType()
 * @method string getPageSize()
 * @method string getSensitiveName()
 * @method string getTable()
 * @method string getOrder()
 * @method string getOrderField()
 */
class DsgQuerySensResult extends Rpc
{

    /** @var string */
    public $scheme = 'https';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCol($value)
    {
        $this->data['Col'] = $value;
        $this->options['form_params']['Col'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectName($value)
    {
        $this->data['ProjectName'] = $value;
        $this->options['form_params']['ProjectName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSchemaName($value)
    {
        $this->data['SchemaName'] = $value;
        $this->options['form_params']['SchemaName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLevel($value)
    {
        $this->data['Level'] = $value;
        $this->options['form_params']['Level'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSensStatus($value)
    {
        $this->data['SensStatus'] = $value;
        $this->options['form_params']['SensStatus'] = $value;

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
    public function withSensitiveId($value)
    {
        $this->data['SensitiveId'] = $value;
        $this->options['form_params']['SensitiveId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNo($value)
    {
        $this->data['PageNo'] = $value;
        $this->options['form_params']['PageNo'] = $value;

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
    public function withDbType($value)
    {
        $this->data['DbType'] = $value;
        $this->options['form_params']['DbType'] = $value;

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
    public function withSensitiveName($value)
    {
        $this->data['SensitiveName'] = $value;
        $this->options['form_params']['SensitiveName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTable($value)
    {
        $this->data['Table'] = $value;
        $this->options['form_params']['Table'] = $value;

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
    public function withOrderField($value)
    {
        $this->data['OrderField'] = $value;
        $this->options['form_params']['OrderField'] = $value;

        return $this;
    }
}

/**
 * @method string getTenantId()
 * @method string getEsMetaParams()
 */
class DsgRunSensIdentify extends Rpc
{

    /** @var string */
    public $scheme = 'https';

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
    public function withEsMetaParams($value)
    {
        $this->data['EsMetaParams'] = $value;
        $this->options['form_params']['EsMetaParams'] = $value;

        return $this;
    }
}

/**
 * @method string getScenes()
 */
class DsgSceneAddOrUpdateScene extends Rpc
{

    /** @var string */
    public $scheme = 'https';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScenes($value)
    {
        $this->data['Scenes'] = $value;
        $this->options['query']['scenes'] = $value;

        return $this;
    }
}

/**
 * @method string getIds()
 * @method $this withIds($value)
 */
class DsgScenedDeleteScene extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getSceneName()
 * @method $this withSceneName($value)
 */
class DsgSceneQuerySceneListByName extends Rpc
{

    /** @var string */
    public $scheme = 'https';

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getJobId()
 * @method string getTenantId()
 */
class DsgStopSensIdentify extends Rpc
{

    /** @var string */
    public $scheme = 'https';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJobId($value)
    {
        $this->data['JobId'] = $value;
        $this->options['form_params']['JobId'] = $value;

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
 * @method string getUserGroups()
 * @method $this withUserGroups($value)
 */
class DsgUserGroupAddOrUpdate extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getIds()
 * @method $this withIds($value)
 */
class DsgUserGroupDelete extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getProjectName()
 * @method $this withProjectName($value)
 */
class DsgUserGroupGetOdpsRoleGroups extends Rpc
{

    /** @var string */
    public $scheme = 'https';

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getOwner()
 * @method $this withOwner($value)
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DsgUserGroupQueryList extends Rpc
{

    /** @var string */
    public $scheme = 'https';

    /** @var string */
    public $method = 'GET';
}

class DsgUserGroupQueryUserList extends Rpc
{

    /** @var string */
    public $scheme = 'https';

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getWhiteLists()
 * @method $this withWhiteLists($value)
 */
class DsgWhiteListAddOrUpdate extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getIds()
 * @method $this withIds($value)
 */
class DsgWhiteListDeleteList extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getDataType()
 * @method $this withDataType($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getSceneId()
 * @method $this withSceneId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DsgWhiteListQueryList extends Rpc
{

    /** @var string */
    public $scheme = 'https';

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getLevel()
 * @method string getColScan()
 * @method string getColExclude()
 * @method string getContentScan()
 * @method string getOperationType()
 * @method string getTemplateId()
 * @method string getRecognizeRulesType()
 * @method string getCommentScan()
 * @method string getAccountName()
 * @method string getSensitiveDescription()
 * @method string getSensitiveId()
 * @method string getTenantId()
 * @method string getRecognizeRules()
 * @method string getHitThreshold()
 * @method string getSensitiveName()
 * @method string getNodeParent()
 * @method string getLevelName()
 * @method string getNodeId()
 * @method string getStatus()
 */
class EditRecognizeRule extends Rpc
{

    /** @var string */
    public $scheme = 'https';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLevel($value)
    {
        $this->data['Level'] = $value;
        $this->options['form_params']['level'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withColScan($value)
    {
        $this->data['ColScan'] = $value;
        $this->options['form_params']['ColScan'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withColExclude($value)
    {
        $this->data['ColExclude'] = $value;
        $this->options['form_params']['ColExclude'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContentScan($value)
    {
        $this->data['ContentScan'] = $value;
        $this->options['form_params']['ContentScan'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperationType($value)
    {
        $this->data['OperationType'] = $value;
        $this->options['form_params']['OperationType'] = $value;

        return $this;
    }

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

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRecognizeRulesType($value)
    {
        $this->data['RecognizeRulesType'] = $value;
        $this->options['form_params']['RecognizeRulesType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCommentScan($value)
    {
        $this->data['CommentScan'] = $value;
        $this->options['form_params']['CommentScan'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccountName($value)
    {
        $this->data['AccountName'] = $value;
        $this->options['form_params']['AccountName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSensitiveDescription($value)
    {
        $this->data['SensitiveDescription'] = $value;
        $this->options['form_params']['SensitiveDescription'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSensitiveId($value)
    {
        $this->data['SensitiveId'] = $value;
        $this->options['form_params']['SensitiveId'] = $value;

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
    public function withRecognizeRules($value)
    {
        $this->data['RecognizeRules'] = $value;
        $this->options['form_params']['RecognizeRules'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withHitThreshold($value)
    {
        $this->data['HitThreshold'] = $value;
        $this->options['form_params']['HitThreshold'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSensitiveName($value)
    {
        $this->data['SensitiveName'] = $value;
        $this->options['form_params']['SensitiveName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNodeParent($value)
    {
        $this->data['NodeParent'] = $value;
        $this->options['form_params']['NodeParent'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLevelName($value)
    {
        $this->data['LevelName'] = $value;
        $this->options['form_params']['LevelName'] = $value;

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
    public function withStatus($value)
    {
        $this->data['Status'] = $value;
        $this->options['form_params']['Status'] = $value;

        return $this;
    }
}

/**
 * @method string getBusinessId()
 * @method string getProjectIdentifier()
 * @method string getFolderId()
 * @method string getTableGuid()
 * @method string getProjectId()
 */
class EstablishRelationTableToBusiness extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBusinessId($value)
    {
        $this->data['BusinessId'] = $value;
        $this->options['form_params']['BusinessId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectIdentifier($value)
    {
        $this->data['ProjectIdentifier'] = $value;
        $this->options['form_params']['ProjectIdentifier'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFolderId($value)
    {
        $this->data['FolderId'] = $value;
        $this->options['form_params']['FolderId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTableGuid($value)
    {
        $this->data['TableGuid'] = $value;
        $this->options['form_params']['TableGuid'] = $value;

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
 * @method string getDataSourceType()
 * @method $this withDataSourceType($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getSubType()
 * @method $this withSubType($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getEnvType()
 * @method $this withEnvType($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class ExportDataSources extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getTaskType()
 * @method $this withTaskType($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getTaskParam()
 * @method $this withTaskParam($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class GenerateDISyncTaskConfigForCreating extends Rpc
{
}

/**
 * @method string getTaskType()
 * @method $this withTaskType($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getTaskParam()
 * @method $this withTaskParam($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class GenerateDISyncTaskConfigForUpdating extends Rpc
{
}

/**
 * @method string getAlertId()
 */
class GetAlertMessage extends Rpc
{

    /** @var string */
    public $scheme = 'https';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAlertId($value)
    {
        $this->data['AlertId'] = $value;
        $this->options['form_params']['AlertId'] = $value;

        return $this;
    }
}

/**
 * @method string getProjectId()
 * @method string getBaselineId()
 */
class GetBaseline extends Rpc
{

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
    public function withBaselineId($value)
    {
        $this->data['BaselineId'] = $value;
        $this->options['form_params']['BaselineId'] = $value;

        return $this;
    }
}

/**
 * @method string getBaselineId()
 */
class GetBaselineConfig extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBaselineId($value)
    {
        $this->data['BaselineId'] = $value;
        $this->options['form_params']['BaselineId'] = $value;

        return $this;
    }
}

/**
 * @method string getBizdate()
 * @method string getInGroupId()
 * @method string getBaselineId()
 */
class GetBaselineKeyPath extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizdate($value)
    {
        $this->data['Bizdate'] = $value;
        $this->options['form_params']['Bizdate'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInGroupId($value)
    {
        $this->data['InGroupId'] = $value;
        $this->options['form_params']['InGroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBaselineId($value)
    {
        $this->data['BaselineId'] = $value;
        $this->options['form_params']['BaselineId'] = $value;

        return $this;
    }
}

/**
 * @method string getBizdate()
 * @method string getInGroupId()
 * @method string getBaselineId()
 */
class GetBaselineStatus extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizdate($value)
    {
        $this->data['Bizdate'] = $value;
        $this->options['form_params']['Bizdate'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInGroupId($value)
    {
        $this->data['InGroupId'] = $value;
        $this->options['form_params']['InGroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBaselineId($value)
    {
        $this->data['BaselineId'] = $value;
        $this->options['form_params']['BaselineId'] = $value;

        return $this;
    }
}

/**
 * @method string getBusinessId()
 * @method string getProjectId()
 * @method string getProjectIdentifier()
 */
class GetBusiness extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBusinessId($value)
    {
        $this->data['BusinessId'] = $value;
        $this->options['form_params']['BusinessId'] = $value;

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
    public function withProjectIdentifier($value)
    {
        $this->data['ProjectIdentifier'] = $value;
        $this->options['form_params']['ProjectIdentifier'] = $value;

        return $this;
    }
}

/**
 * @method string getProjectEnv()
 * @method string getDagId()
 */
class GetDag extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectEnv($value)
    {
        $this->data['ProjectEnv'] = $value;
        $this->options['form_params']['ProjectEnv'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDagId($value)
    {
        $this->data['DagId'] = $value;
        $this->options['form_params']['DagId'] = $value;

        return $this;
    }
}

/**
 * @method string getTenantId()
 * @method string getProjectId()
 * @method string getApiId()
 */
class GetDataServiceApi extends Rpc
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
    public function withApiId($value)
    {
        $this->data['ApiId'] = $value;
        $this->options['form_params']['ApiId'] = $value;

        return $this;
    }
}

/**
 * @method string getTestId()
 * @method $this withTestId($value)
 */
class GetDataServiceApiTest extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getTenantId()
 * @method string getApplicationId()
 * @method string getProjectId()
 */
class GetDataServiceApplication extends Rpc
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
    public function withApplicationId($value)
    {
        $this->data['ApplicationId'] = $value;
        $this->options['form_params']['ApplicationId'] = $value;

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
 * @method string getFolderId()
 * @method string getTenantId()
 * @method string getProjectId()
 */
class GetDataServiceFolder extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFolderId($value)
    {
        $this->data['FolderId'] = $value;
        $this->options['form_params']['FolderId'] = $value;

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
    public function withProjectId($value)
    {
        $this->data['ProjectId'] = $value;
        $this->options['form_params']['ProjectId'] = $value;

        return $this;
    }
}

/**
 * @method string getGroupId()
 * @method string getTenantId()
 * @method string getProjectId()
 */
class GetDataServiceGroup extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupId($value)
    {
        $this->data['GroupId'] = $value;
        $this->options['form_params']['GroupId'] = $value;

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
    public function withProjectId($value)
    {
        $this->data['ProjectId'] = $value;
        $this->options['form_params']['ProjectId'] = $value;

        return $this;
    }
}

/**
 * @method string getTenantId()
 * @method string getProjectId()
 * @method string getApiId()
 */
class GetDataServicePublishedApi extends Rpc
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
    public function withApiId($value)
    {
        $this->data['ApiId'] = $value;
        $this->options['form_params']['ApiId'] = $value;

        return $this;
    }
}

/**
 * @method string getDatasourceName()
 * @method $this withDatasourceName($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEnvType()
 * @method $this withEnvType($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class GetDataSourceMeta extends Rpc
{
}

/**
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class GetDDLJobStatus extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getDeploymentId()
 * @method string getProjectId()
 * @method string getProjectIdentifier()
 */
class GetDeployment extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeploymentId($value)
    {
        $this->data['DeploymentId'] = $value;
        $this->options['form_params']['DeploymentId'] = $value;

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
    public function withProjectIdentifier($value)
    {
        $this->data['ProjectIdentifier'] = $value;
        $this->options['form_params']['ProjectIdentifier'] = $value;

        return $this;
    }
}

/**
 * @method string getDIAlarmRuleId()
 */
class GetDIAlarmRule extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDIAlarmRuleId($value)
    {
        $this->data['DIAlarmRuleId'] = $value;
        $this->options['form_params']['DIAlarmRuleId'] = $value;

        return $this;
    }
}

/**
 * @method string getDIJobId()
 * @method string getWithDetails()
 */
class GetDIJob extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDIJobId($value)
    {
        $this->data['DIJobId'] = $value;
        $this->options['form_params']['DIJobId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWithDetails($value)
    {
        $this->data['WithDetails'] = $value;
        $this->options['form_params']['WithDetails'] = $value;

        return $this;
    }
}

/**
 * @method string getTaskType()
 * @method $this withTaskType($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getFileId()
 * @method $this withFileId($value)
 */
class GetDISyncInstanceInfo extends Rpc
{
}

/**
 * @method string getTaskType()
 * @method $this withTaskType($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getFileId()
 * @method $this withFileId($value)
 */
class GetDISyncTask extends Rpc
{
}

/**
 * @method string getExtensionCode()
 * @method $this withExtensionCode($value)
 */
class GetExtension extends Rpc
{
}

/**
 * @method string getProjectId()
 * @method string getNodeId()
 * @method string getProjectIdentifier()
 * @method string getFileId()
 */
class GetFile extends Rpc
{

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
    public function withProjectIdentifier($value)
    {
        $this->data['ProjectIdentifier'] = $value;
        $this->options['form_params']['ProjectIdentifier'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFileId($value)
    {
        $this->data['FileId'] = $value;
        $this->options['form_params']['FileId'] = $value;

        return $this;
    }
}

/**
 * @method string getProjectEnv()
 * @method string getProjectId()
 */
class GetFileTypeStatistic extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectEnv($value)
    {
        $this->data['ProjectEnv'] = $value;
        $this->options['form_params']['ProjectEnv'] = $value;

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
 * @method string getFileVersion()
 * @method string getProjectId()
 * @method string getProjectIdentifier()
 * @method string getFileId()
 */
class GetFileVersion extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFileVersion($value)
    {
        $this->data['FileVersion'] = $value;
        $this->options['form_params']['FileVersion'] = $value;

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
    public function withProjectIdentifier($value)
    {
        $this->data['ProjectIdentifier'] = $value;
        $this->options['form_params']['ProjectIdentifier'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFileId($value)
    {
        $this->data['FileId'] = $value;
        $this->options['form_params']['FileId'] = $value;

        return $this;
    }
}

/**
 * @method string getFolderPath()
 * @method string getProjectId()
 * @method string getProjectIdentifier()
 * @method string getFolderId()
 */
class GetFolder extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFolderPath($value)
    {
        $this->data['FolderPath'] = $value;
        $this->options['form_params']['FolderPath'] = $value;

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
    public function withProjectIdentifier($value)
    {
        $this->data['ProjectIdentifier'] = $value;
        $this->options['form_params']['ProjectIdentifier'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFolderId($value)
    {
        $this->data['FolderId'] = $value;
        $this->options['form_params']['FolderId'] = $value;

        return $this;
    }
}

/**
 * @method string getMessageId()
 * @method string getProjectId()
 */
class GetIDEEventDetail extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMessageId($value)
    {
        $this->data['MessageId'] = $value;
        $this->options['form_params']['MessageId'] = $value;

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
 * @method string getProjectEnv()
 * @method string getInstanceId()
 */
class GetInstance extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectEnv($value)
    {
        $this->data['ProjectEnv'] = $value;
        $this->options['form_params']['ProjectEnv'] = $value;

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
 * @method string getBizdate()
 * @method string getProjectId()
 */
class GetInstanceConsumeTimeRank extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizdate($value)
    {
        $this->data['Bizdate'] = $value;
        $this->options['form_params']['Bizdate'] = $value;

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
 * @method string getBeginDate()
 * @method string getEndDate()
 * @method string getProjectId()
 */
class GetInstanceCountTrend extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBeginDate($value)
    {
        $this->data['BeginDate'] = $value;
        $this->options['form_params']['BeginDate'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEndDate($value)
    {
        $this->data['EndDate'] = $value;
        $this->options['form_params']['EndDate'] = $value;

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
 * @method string getProjectId()
 */
class GetInstanceErrorRank extends Rpc
{

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
 * @method string getProjectEnv()
 * @method string getInstanceId()
 * @method string getInstanceHistoryId()
 */
class GetInstanceLog extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectEnv($value)
    {
        $this->data['ProjectEnv'] = $value;
        $this->options['form_params']['ProjectEnv'] = $value;

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
    public function withInstanceHistoryId($value)
    {
        $this->data['InstanceHistoryId'] = $value;
        $this->options['form_params']['InstanceHistoryId'] = $value;

        return $this;
    }
}

/**
 * @method string getProjectEnv()
 * @method string getBizDate()
 * @method string getProjectId()
 */
class GetInstanceStatusCount extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectEnv($value)
    {
        $this->data['ProjectEnv'] = $value;
        $this->options['form_params']['ProjectEnv'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizDate($value)
    {
        $this->data['BizDate'] = $value;
        $this->options['form_params']['BizDate'] = $value;

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
 * @method string getProjectEnv()
 * @method string getSchedulerPeriod()
 * @method string getDagType()
 * @method string getBizDate()
 * @method string getSchedulerType()
 * @method string getProjectId()
 */
class GetInstanceStatusStatistic extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectEnv($value)
    {
        $this->data['ProjectEnv'] = $value;
        $this->options['form_params']['ProjectEnv'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSchedulerPeriod($value)
    {
        $this->data['SchedulerPeriod'] = $value;
        $this->options['form_params']['SchedulerPeriod'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDagType($value)
    {
        $this->data['DagType'] = $value;
        $this->options['form_params']['DagType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizDate($value)
    {
        $this->data['BizDate'] = $value;
        $this->options['form_params']['BizDate'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSchedulerType($value)
    {
        $this->data['SchedulerType'] = $value;
        $this->options['form_params']['SchedulerType'] = $value;

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
 * @method string getProjectEnv()
 * @method string getProjectName()
 * @method string getDagId()
 */
class GetManualDagInstances extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectEnv($value)
    {
        $this->data['ProjectEnv'] = $value;
        $this->options['form_params']['ProjectEnv'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectName($value)
    {
        $this->data['ProjectName'] = $value;
        $this->options['form_params']['ProjectName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDagId($value)
    {
        $this->data['DagId'] = $value;
        $this->options['form_params']['DagId'] = $value;

        return $this;
    }
}

/**
 * @method string getParentCategoryId()
 * @method $this withParentCategoryId($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class GetMetaCategory extends Rpc
{
}

/**
 * @method string getQualifiedName()
 * @method $this withQualifiedName($value)
 */
class GetMetaCollectionDetail extends Rpc
{
}

/**
 * @method string getDataSourceType()
 * @method $this withDataSourceType($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getColumnName()
 * @method $this withColumnName($value)
 * @method string getColumnGuid()
 * @method $this withColumnGuid($value)
 * @method string getDatabaseName()
 * @method $this withDatabaseName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getTableName()
 * @method $this withTableName($value)
 * @method string getDirection()
 * @method $this withDirection($value)
 */
class GetMetaColumnLineage extends Rpc
{
}

/**
 * @method string getDataSourceType()
 * @method $this withDataSourceType($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getDatabaseName()
 * @method $this withDatabaseName($value)
 * @method string getAppGuid()
 * @method $this withAppGuid($value)
 */
class GetMetaDBInfo extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getDataSourceType()
 * @method $this withDataSourceType($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getDatabaseName()
 * @method $this withDatabaseName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getAppGuid()
 * @method $this withAppGuid($value)
 */
class GetMetaDBTableList extends Rpc
{
}

/**
 * @method string getDataSourceType()
 * @method $this withDataSourceType($value)
 * @method string getExtension()
 * @method $this withExtension($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getTableGuid()
 * @method $this withTableGuid($value)
 * @method string getDatabaseName()
 * @method $this withDatabaseName($value)
 * @method string getTableName()
 * @method $this withTableName($value)
 */
class GetMetaTableBasicInfo extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getStartDate()
 * @method string getPageNumber()
 * @method string getEndDate()
 * @method string getTableGuid()
 * @method string getChangeType()
 * @method string getPageSize()
 * @method string getObjectType()
 */
class GetMetaTableChangeLog extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStartDate($value)
    {
        $this->data['StartDate'] = $value;
        $this->options['form_params']['StartDate'] = $value;

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
    public function withEndDate($value)
    {
        $this->data['EndDate'] = $value;
        $this->options['form_params']['EndDate'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTableGuid($value)
    {
        $this->data['TableGuid'] = $value;
        $this->options['form_params']['TableGuid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChangeType($value)
    {
        $this->data['ChangeType'] = $value;
        $this->options['form_params']['ChangeType'] = $value;

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
    public function withObjectType($value)
    {
        $this->data['ObjectType'] = $value;
        $this->options['form_params']['ObjectType'] = $value;

        return $this;
    }
}

/**
 * @method string getDataSourceType()
 * @method $this withDataSourceType($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getTableGuid()
 * @method $this withTableGuid($value)
 * @method string getDatabaseName()
 * @method $this withDatabaseName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getTableName()
 * @method $this withTableName($value)
 */
class GetMetaTableColumn extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getDataSourceType()
 * @method $this withDataSourceType($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getTableGuid()
 * @method $this withTableGuid($value)
 * @method string getDatabaseName()
 * @method $this withDatabaseName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getTableName()
 * @method $this withTableName($value)
 */
class GetMetaTableFullInfo extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getWikiVersion()
 * @method $this withWikiVersion($value)
 * @method string getTableGuid()
 * @method $this withTableGuid($value)
 */
class GetMetaTableIntroWiki extends Rpc
{
}

/**
 * @method string getDataSourceType()
 * @method $this withDataSourceType($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getTableGuid()
 * @method $this withTableGuid($value)
 * @method string getNextPrimaryKey()
 * @method $this withNextPrimaryKey($value)
 * @method string getDatabaseName()
 * @method $this withDatabaseName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getTableName()
 * @method $this withTableName($value)
 * @method string getDirection()
 * @method $this withDirection($value)
 */
class GetMetaTableLineage extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCategoryId()
 * @method $this withCategoryId($value)
 */
class GetMetaTableListByCategory extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getStartDate()
 * @method $this withStartDate($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getEndDate()
 * @method $this withEndDate($value)
 * @method string getTableGuid()
 * @method $this withTableGuid($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class GetMetaTableOutput extends Rpc
{
}

/**
 * @method string getSortCriterion()
 * @method $this withSortCriterion($value)
 * @method string getDataSourceType()
 * @method $this withDataSourceType($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getTableGuid()
 * @method $this withTableGuid($value)
 * @method string getDatabaseName()
 * @method $this withDatabaseName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getTableName()
 * @method $this withTableName($value)
 */
class GetMetaTablePartition extends Rpc
{
}

/**
 * @method string getDataSourceType()
 * @method $this withDataSourceType($value)
 * @method string getSchemaName()
 * @method $this withSchemaName($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getTableGuid()
 * @method $this withTableGuid($value)
 * @method string getTableName()
 * @method $this withTableName($value)
 */
class GetMetaTableProducingTasks extends Rpc
{
}

/**
 * @method string getDataSourceType()
 * @method $this withDataSourceType($value)
 * @method string getTableGuid()
 * @method $this withTableGuid($value)
 */
class GetMetaTableThemeLevel extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getMigrationId()
 * @method string getProjectId()
 */
class GetMigrationProcess extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMigrationId($value)
    {
        $this->data['MigrationId'] = $value;
        $this->options['form_params']['MigrationId'] = $value;

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
 * @method string getMigrationId()
 * @method string getProjectId()
 */
class GetMigrationSummary extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMigrationId($value)
    {
        $this->data['MigrationId'] = $value;
        $this->options['form_params']['MigrationId'] = $value;

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
 * @method string getProjectEnv()
 * @method string getNodeId()
 */
class GetNode extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectEnv($value)
    {
        $this->data['ProjectEnv'] = $value;
        $this->options['form_params']['ProjectEnv'] = $value;

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
 * @method string getProjectEnv()
 * @method string getNodeId()
 */
class GetNodeChildren extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectEnv($value)
    {
        $this->data['ProjectEnv'] = $value;
        $this->options['form_params']['ProjectEnv'] = $value;

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
 * @method string getProjectEnv()
 * @method string getNodeId()
 */
class GetNodeCode extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectEnv($value)
    {
        $this->data['ProjectEnv'] = $value;
        $this->options['form_params']['ProjectEnv'] = $value;

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
 * @method string getBaselineId()
 */
class GetNodeOnBaseline extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBaselineId($value)
    {
        $this->data['BaselineId'] = $value;
        $this->options['form_params']['BaselineId'] = $value;

        return $this;
    }
}

/**
 * @method string getProjectEnv()
 * @method string getNodeId()
 */
class GetNodeParents extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectEnv($value)
    {
        $this->data['ProjectEnv'] = $value;
        $this->options['form_params']['ProjectEnv'] = $value;

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
 * @method string getPageSize()
 * @method string getKeyword()
 * @method string getLocale()
 * @method string getProjectId()
 * @method string getProjectIdentifier()
 * @method string getPageNumber()
 */
class GetNodeTypeListInfo extends Rpc
{

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
    public function withKeyword($value)
    {
        $this->data['Keyword'] = $value;
        $this->options['form_params']['Keyword'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLocale($value)
    {
        $this->data['Locale'] = $value;
        $this->options['form_params']['Locale'] = $value;

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
    public function withProjectIdentifier($value)
    {
        $this->data['ProjectIdentifier'] = $value;
        $this->options['form_params']['ProjectIdentifier'] = $value;

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
}

/**
 * @method string getDate()
 * @method $this withDate($value)
 * @method string getRiskType()
 * @method $this withRiskType($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getName()
 * @method $this withName($value)
 */
class GetOpRiskData extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getDate()
 * @method $this withDate($value)
 * @method string getOpType()
 * @method $this withOpType($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class GetOpSensitiveData extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getExtensionCode()
 * @method string getProjectId()
 */
class GetOptionValueForProject extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExtensionCode($value)
    {
        $this->data['ExtensionCode'] = $value;
        $this->options['form_params']['ExtensionCode'] = $value;

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
 * @method string getFlowId()
 * @method $this withFlowId($value)
 */
class GetPermissionApplyOrderDetail extends Rpc
{
}

/**
 * @method string getProjectIdentifier()
 * @method $this withProjectIdentifier($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class GetProject extends Rpc
{
}

/**
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class GetProjectDetail extends Rpc
{
}

/**
 * @method string getProjectName()
 * @method string getMatchExpression()
 * @method string getEnvType()
 * @method string getTableName()
 * @method string getProjectId()
 */
class GetQualityEntity extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectName($value)
    {
        $this->data['ProjectName'] = $value;
        $this->options['form_params']['ProjectName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMatchExpression($value)
    {
        $this->data['MatchExpression'] = $value;
        $this->options['form_params']['MatchExpression'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEnvType($value)
    {
        $this->data['EnvType'] = $value;
        $this->options['form_params']['EnvType'] = $value;

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
    public function withProjectId($value)
    {
        $this->data['ProjectId'] = $value;
        $this->options['form_params']['ProjectId'] = $value;

        return $this;
    }
}

/**
 * @method string getProjectName()
 * @method string getEntityId()
 * @method string getProjectId()
 */
class GetQualityFollower extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectName($value)
    {
        $this->data['ProjectName'] = $value;
        $this->options['form_params']['ProjectName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEntityId($value)
    {
        $this->data['EntityId'] = $value;
        $this->options['form_params']['EntityId'] = $value;

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
 * @method string getProjectName()
 * @method string getRuleId()
 * @method string getProjectId()
 */
class GetQualityRule extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectName($value)
    {
        $this->data['ProjectName'] = $value;
        $this->options['form_params']['ProjectName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRuleId($value)
    {
        $this->data['RuleId'] = $value;
        $this->options['form_params']['RuleId'] = $value;

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
 * @method string getRemindId()
 */
class GetRemind extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRemindId($value)
    {
        $this->data['RemindId'] = $value;
        $this->options['form_params']['RemindId'] = $value;

        return $this;
    }
}

/**
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getName()
 * @method $this withName($value)
 */
class GetSensitiveData extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getProjectId()
 */
class GetSuccessInstanceTrend extends Rpc
{

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
 * @method string getTopicId()
 */
class GetTopic extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTopicId($value)
    {
        $this->data['TopicId'] = $value;
        $this->options['form_params']['TopicId'] = $value;

        return $this;
    }
}

/**
 * @method string getTopicId()
 */
class GetTopicInfluence extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTopicId($value)
    {
        $this->data['TopicId'] = $value;
        $this->options['form_params']['TopicId'] = $value;

        return $this;
    }
}

/**
 * @method string getDataSources()
 * @method $this withDataSources($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class ImportDataSources extends Rpc
{
}

/**
 * @method string getAlertUser()
 * @method string getEndTime()
 * @method string getBeginTime()
 * @method string getAlertMethods()
 * @method string getPageNumber()
 * @method string getBaselineId()
 * @method string getRemindId()
 * @method string getPageSize()
 * @method string getAlertRuleTypes()
 */
class ListAlertMessages extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAlertUser($value)
    {
        $this->data['AlertUser'] = $value;
        $this->options['form_params']['AlertUser'] = $value;

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
    public function withBeginTime($value)
    {
        $this->data['BeginTime'] = $value;
        $this->options['form_params']['BeginTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAlertMethods($value)
    {
        $this->data['AlertMethods'] = $value;
        $this->options['form_params']['AlertMethods'] = $value;

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
    public function withBaselineId($value)
    {
        $this->data['BaselineId'] = $value;
        $this->options['form_params']['BaselineId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRemindId($value)
    {
        $this->data['RemindId'] = $value;
        $this->options['form_params']['RemindId'] = $value;

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
    public function withAlertRuleTypes($value)
    {
        $this->data['AlertRuleTypes'] = $value;
        $this->options['form_params']['AlertRuleTypes'] = $value;

        return $this;
    }
}

/**
 * @method string getOwner()
 * @method string getSearchText()
 * @method string getUseflag()
 * @method string getPriority()
 * @method string getPageNumber()
 * @method string getPageSize()
 * @method string getProjectId()
 * @method string getBaselineTypes()
 */
class ListBaselineConfigs extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOwner($value)
    {
        $this->data['Owner'] = $value;
        $this->options['form_params']['Owner'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSearchText($value)
    {
        $this->data['SearchText'] = $value;
        $this->options['form_params']['SearchText'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUseflag($value)
    {
        $this->data['Useflag'] = $value;
        $this->options['form_params']['Useflag'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPriority($value)
    {
        $this->data['Priority'] = $value;
        $this->options['form_params']['Priority'] = $value;

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
    public function withBaselineTypes($value)
    {
        $this->data['BaselineTypes'] = $value;
        $this->options['form_params']['BaselineTypes'] = $value;

        return $this;
    }
}

/**
 * @method string getOwner()
 * @method string getSearchText()
 * @method string getPriority()
 * @method string getPageNumber()
 * @method string getEnable()
 * @method string getPageSize()
 * @method string getProjectId()
 * @method string getBaselineTypes()
 */
class ListBaselines extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOwner($value)
    {
        $this->data['Owner'] = $value;
        $this->options['form_params']['Owner'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSearchText($value)
    {
        $this->data['SearchText'] = $value;
        $this->options['form_params']['SearchText'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPriority($value)
    {
        $this->data['Priority'] = $value;
        $this->options['form_params']['Priority'] = $value;

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
    public function withEnable($value)
    {
        $this->data['Enable'] = $value;
        $this->options['form_params']['Enable'] = $value;

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
    public function withBaselineTypes($value)
    {
        $this->data['BaselineTypes'] = $value;
        $this->options['form_params']['BaselineTypes'] = $value;

        return $this;
    }
}

/**
 * @method string getSearchText()
 * @method string getOwner()
 * @method string getPriority()
 * @method string getPageNumber()
 * @method string getTopicId()
 * @method string getBizdate()
 * @method string getFinishStatus()
 * @method string getPageSize()
 * @method string getBaselineTypes()
 * @method string getStatus()
 */
class ListBaselineStatuses extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSearchText($value)
    {
        $this->data['SearchText'] = $value;
        $this->options['form_params']['SearchText'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOwner($value)
    {
        $this->data['Owner'] = $value;
        $this->options['form_params']['Owner'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPriority($value)
    {
        $this->data['Priority'] = $value;
        $this->options['form_params']['Priority'] = $value;

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
    public function withTopicId($value)
    {
        $this->data['TopicId'] = $value;
        $this->options['form_params']['TopicId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizdate($value)
    {
        $this->data['Bizdate'] = $value;
        $this->options['form_params']['Bizdate'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFinishStatus($value)
    {
        $this->data['FinishStatus'] = $value;
        $this->options['form_params']['FinishStatus'] = $value;

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
    public function withBaselineTypes($value)
    {
        $this->data['BaselineTypes'] = $value;
        $this->options['form_params']['BaselineTypes'] = $value;

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
 * @method string getProjectIdentifier()
 * @method string getPageNumber()
 * @method string getPageSize()
 * @method string getKeyword()
 * @method string getProjectId()
 */
class ListBusiness extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectIdentifier($value)
    {
        $this->data['ProjectIdentifier'] = $value;
        $this->options['form_params']['ProjectIdentifier'] = $value;

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
    public function withKeyword($value)
    {
        $this->data['Keyword'] = $value;
        $this->options['form_params']['Keyword'] = $value;

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
 * @method string getCalcEngineType()
 * @method $this withCalcEngineType($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getEnvType()
 * @method $this withEnvType($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class ListCalcEngines extends Rpc
{
}

/**
 * @method string getConfigType()
 * @method $this withConfigType($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class ListClusterConfigs extends Rpc
{

    /** @var string */
    public $scheme = 'https';

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getClusterType()
 * @method $this withClusterType($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListClusters extends Rpc
{

    /** @var string */
    public $scheme = 'https';

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getSubType()
 * @method $this withSubType($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getEnvType()
 * @method $this withEnvType($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getConnectionType()
 * @method $this withConnectionType($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ListConnections extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getProjectEnv()
 * @method string getOpSeq()
 */
class ListDags extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectEnv($value)
    {
        $this->data['ProjectEnv'] = $value;
        $this->options['form_params']['ProjectEnv'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOpSeq($value)
    {
        $this->data['OpSeq'] = $value;
        $this->options['form_params']['OpSeq'] = $value;

        return $this;
    }
}

/**
 * @method string getApiNameKeyword()
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getTenantId()
 * @method string getProjectId()
 */
class ListDataServiceApiAuthorities extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiNameKeyword($value)
    {
        $this->data['ApiNameKeyword'] = $value;
        $this->options['form_params']['ApiNameKeyword'] = $value;

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
    public function withProjectId($value)
    {
        $this->data['ProjectId'] = $value;
        $this->options['form_params']['ProjectId'] = $value;

        return $this;
    }
}

/**
 * @method string getApiNameKeyword()
 * @method string getApiPathKeyword()
 * @method string getCreatorId()
 * @method string getPageNumber()
 * @method string getPageSize()
 * @method string getTenantId()
 * @method string getProjectId()
 */
class ListDataServiceApis extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiNameKeyword($value)
    {
        $this->data['ApiNameKeyword'] = $value;
        $this->options['form_params']['ApiNameKeyword'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiPathKeyword($value)
    {
        $this->data['ApiPathKeyword'] = $value;
        $this->options['form_params']['ApiPathKeyword'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCreatorId($value)
    {
        $this->data['CreatorId'] = $value;
        $this->options['form_params']['CreatorId'] = $value;

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
    public function withProjectId($value)
    {
        $this->data['ProjectId'] = $value;
        $this->options['form_params']['ProjectId'] = $value;

        return $this;
    }
}

/**
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getApiId()
 * @method $this withApiId($value)
 */
class ListDataServiceApiTest extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getPageNumber()
 * @method string getPageSize()
 * @method string getTenantId()
 * @method string getProjectIdList()
 */
class ListDataServiceApplications extends Rpc
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
    public function withProjectIdList($value)
    {
        $this->data['ProjectIdList'] = $value;
        $this->options['form_params']['ProjectIdList'] = $value;

        return $this;
    }
}

/**
 * @method string getApiNameKeyword()
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getTenantId()
 * @method string getProjectId()
 */
class ListDataServiceAuthorizedApis extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiNameKeyword($value)
    {
        $this->data['ApiNameKeyword'] = $value;
        $this->options['form_params']['ApiNameKeyword'] = $value;

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
    public function withProjectId($value)
    {
        $this->data['ProjectId'] = $value;
        $this->options['form_params']['ProjectId'] = $value;

        return $this;
    }
}

/**
 * @method string getFolderNameKeyword()
 * @method string getGroupId()
 * @method string getPageNumber()
 * @method string getPageSize()
 * @method string getTenantId()
 * @method string getProjectId()
 */
class ListDataServiceFolders extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFolderNameKeyword($value)
    {
        $this->data['FolderNameKeyword'] = $value;
        $this->options['form_params']['FolderNameKeyword'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupId($value)
    {
        $this->data['GroupId'] = $value;
        $this->options['form_params']['GroupId'] = $value;

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
    public function withProjectId($value)
    {
        $this->data['ProjectId'] = $value;
        $this->options['form_params']['ProjectId'] = $value;

        return $this;
    }
}

/**
 * @method string getGroupNameKeyword()
 * @method string getPageNumber()
 * @method string getPageSize()
 * @method string getTenantId()
 * @method string getProjectId()
 */
class ListDataServiceGroups extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupNameKeyword($value)
    {
        $this->data['GroupNameKeyword'] = $value;
        $this->options['form_params']['GroupNameKeyword'] = $value;

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
    public function withProjectId($value)
    {
        $this->data['ProjectId'] = $value;
        $this->options['form_params']['ProjectId'] = $value;

        return $this;
    }
}

/**
 * @method string getApiNameKeyword()
 * @method string getApiPathKeyword()
 * @method string getCreatorId()
 * @method string getPageNumber()
 * @method string getPageSize()
 * @method string getTenantId()
 * @method string getProjectId()
 */
class ListDataServicePublishedApis extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiNameKeyword($value)
    {
        $this->data['ApiNameKeyword'] = $value;
        $this->options['form_params']['ApiNameKeyword'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiPathKeyword($value)
    {
        $this->data['ApiPathKeyword'] = $value;
        $this->options['form_params']['ApiPathKeyword'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCreatorId($value)
    {
        $this->data['CreatorId'] = $value;
        $this->options['form_params']['CreatorId'] = $value;

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
    public function withProjectId($value)
    {
        $this->data['ProjectId'] = $value;
        $this->options['form_params']['ProjectId'] = $value;

        return $this;
    }
}

/**
 * @method string getDataSourceType()
 * @method $this withDataSourceType($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getSubType()
 * @method $this withSubType($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getEnvType()
 * @method $this withEnvType($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ListDataSources extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getCreator()
 * @method string getEndCreateTime()
 * @method string getProjectIdentifier()
 * @method string getPageNumber()
 * @method string getExecutor()
 * @method string getPageSize()
 * @method string getEndExecuteTime()
 * @method string getKeyword()
 * @method string getProjectId()
 * @method string getStatus()
 */
class ListDeployments extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCreator($value)
    {
        $this->data['Creator'] = $value;
        $this->options['form_params']['Creator'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEndCreateTime($value)
    {
        $this->data['EndCreateTime'] = $value;
        $this->options['form_params']['EndCreateTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectIdentifier($value)
    {
        $this->data['ProjectIdentifier'] = $value;
        $this->options['form_params']['ProjectIdentifier'] = $value;

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
    public function withExecutor($value)
    {
        $this->data['Executor'] = $value;
        $this->options['form_params']['Executor'] = $value;

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
    public function withEndExecuteTime($value)
    {
        $this->data['EndExecuteTime'] = $value;
        $this->options['form_params']['EndExecuteTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withKeyword($value)
    {
        $this->data['Keyword'] = $value;
        $this->options['form_params']['Keyword'] = $value;

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
 * @method string getPageNumber()
 * @method string getDIJobId()
 * @method string getPageSize()
 */
class ListDIAlarmRules extends Rpc
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
    public function withDIJobId($value)
    {
        $this->data['DIJobId'] = $value;
        $this->options['form_params']['DIJobId'] = $value;

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
 * @method string getSourceDataSourceType()
 * @method string getPageNumber()
 * @method string getDestinationDataSourceType()
 * @method string getPageSize()
 * @method string getProjectId()
 * @method string getJobName()
 */
class ListDIJobs extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSourceDataSourceType($value)
    {
        $this->data['SourceDataSourceType'] = $value;
        $this->options['form_params']['SourceDataSourceType'] = $value;

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
    public function withDestinationDataSourceType($value)
    {
        $this->data['DestinationDataSourceType'] = $value;
        $this->options['form_params']['DestinationDataSourceType'] = $value;

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
    public function withJobName($value)
    {
        $this->data['JobName'] = $value;
        $this->options['form_params']['JobName'] = $value;

        return $this;
    }
}

/**
 * @method string getDestinationType()
 * @method $this withDestinationType($value)
 * @method string getSourceType()
 * @method $this withSourceType($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class ListDIProjectConfig extends Rpc
{
}

/**
 * @method string getEventCode()
 * @method string getFileType()
 * @method string getProjectId()
 */
class ListEnabledExtensionsForProject extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEventCode($value)
    {
        $this->data['EventCode'] = $value;
        $this->options['form_params']['EventCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFileType($value)
    {
        $this->data['FileType'] = $value;
        $this->options['form_params']['FileType'] = $value;

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
 * @method string getEntityType()
 * @method $this withEntityType($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getTags()
 * @method $this withTags($value)
 */
class ListEntitiesByTags extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getQualifiedName()
 * @method $this withQualifiedName($value)
 */
class ListEntityTags extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListExtensions extends Rpc
{
}

/**
 * @method string getOwner()
 * @method string getFileTypes()
 * @method string getNeedContent()
 * @method string getNeedAbsoluteFolderPath()
 * @method string getProjectIdentifier()
 * @method string getPageNumber()
 * @method string getFileIdIn()
 * @method string getFileFolderPath()
 * @method string getPageSize()
 * @method string getExactFileName()
 * @method string getKeyword()
 * @method string getProjectId()
 * @method string getUseType()
 * @method string getNodeId()
 */
class ListFiles extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOwner($value)
    {
        $this->data['Owner'] = $value;
        $this->options['form_params']['Owner'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFileTypes($value)
    {
        $this->data['FileTypes'] = $value;
        $this->options['form_params']['FileTypes'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNeedContent($value)
    {
        $this->data['NeedContent'] = $value;
        $this->options['form_params']['NeedContent'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNeedAbsoluteFolderPath($value)
    {
        $this->data['NeedAbsoluteFolderPath'] = $value;
        $this->options['form_params']['NeedAbsoluteFolderPath'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectIdentifier($value)
    {
        $this->data['ProjectIdentifier'] = $value;
        $this->options['form_params']['ProjectIdentifier'] = $value;

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
    public function withFileIdIn($value)
    {
        $this->data['FileIdIn'] = $value;
        $this->options['form_params']['FileIdIn'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFileFolderPath($value)
    {
        $this->data['FileFolderPath'] = $value;
        $this->options['form_params']['FileFolderPath'] = $value;

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
    public function withExactFileName($value)
    {
        $this->data['ExactFileName'] = $value;
        $this->options['form_params']['ExactFileName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withKeyword($value)
    {
        $this->data['Keyword'] = $value;
        $this->options['form_params']['Keyword'] = $value;

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
    public function withUseType($value)
    {
        $this->data['UseType'] = $value;
        $this->options['form_params']['UseType'] = $value;

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
 * @method string getPageSize()
 * @method string getKeyword()
 * @method string getLocale()
 * @method string getProjectId()
 * @method string getProjectIdentifier()
 * @method string getPageNumber()
 */
class ListFileType extends Rpc
{

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
    public function withKeyword($value)
    {
        $this->data['Keyword'] = $value;
        $this->options['form_params']['Keyword'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLocale($value)
    {
        $this->data['Locale'] = $value;
        $this->options['form_params']['Locale'] = $value;

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
    public function withProjectIdentifier($value)
    {
        $this->data['ProjectIdentifier'] = $value;
        $this->options['form_params']['ProjectIdentifier'] = $value;

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
}

/**
 * @method string getProjectIdentifier()
 * @method string getPageNumber()
 * @method string getPageSize()
 * @method string getProjectId()
 * @method string getFileId()
 */
class ListFileVersions extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectIdentifier($value)
    {
        $this->data['ProjectIdentifier'] = $value;
        $this->options['form_params']['ProjectIdentifier'] = $value;

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
    public function withFileId($value)
    {
        $this->data['FileId'] = $value;
        $this->options['form_params']['FileId'] = $value;

        return $this;
    }
}

/**
 * @method string getParentFolderPath()
 * @method string getProjectIdentifier()
 * @method string getPageNumber()
 * @method string getPageSize()
 * @method string getProjectId()
 */
class ListFolders extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withParentFolderPath($value)
    {
        $this->data['ParentFolderPath'] = $value;
        $this->options['form_params']['ParentFolderPath'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectIdentifier($value)
    {
        $this->data['ProjectIdentifier'] = $value;
        $this->options['form_params']['ProjectIdentifier'] = $value;

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
    public function withProjectId($value)
    {
        $this->data['ProjectId'] = $value;
        $this->options['form_params']['ProjectId'] = $value;

        return $this;
    }
}

/**
 * @method string getProjectEnv()
 * @method string getOuterNodeId()
 * @method string getPageNumber()
 * @method string getNodeName()
 * @method string getProgramType()
 * @method string getPageSize()
 * @method string getProjectId()
 */
class ListInnerNodes extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectEnv($value)
    {
        $this->data['ProjectEnv'] = $value;
        $this->options['form_params']['ProjectEnv'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOuterNodeId($value)
    {
        $this->data['OuterNodeId'] = $value;
        $this->options['form_params']['OuterNodeId'] = $value;

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
    public function withProgramType($value)
    {
        $this->data['ProgramType'] = $value;
        $this->options['form_params']['ProgramType'] = $value;

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
    public function withProjectId($value)
    {
        $this->data['ProjectId'] = $value;
        $this->options['form_params']['ProjectId'] = $value;

        return $this;
    }
}

/**
 * @method string getBeginDate()
 * @method string getEndDate()
 * @method string getProjectId()
 */
class ListInstanceAmount extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBeginDate($value)
    {
        $this->data['BeginDate'] = $value;
        $this->options['form_params']['BeginDate'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEndDate($value)
    {
        $this->data['EndDate'] = $value;
        $this->options['form_params']['EndDate'] = $value;

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
 * @method string getProjectEnv()
 * @method string getInstanceId()
 */
class ListInstanceHistory extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectEnv($value)
    {
        $this->data['ProjectEnv'] = $value;
        $this->options['form_params']['ProjectEnv'] = $value;

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
 * @method string getProjectEnv()
 * @method string getOwner()
 * @method string getBizName()
 * @method string getBeginBizdate()
 * @method string getOrderBy()
 * @method string getEndBizdate()
 * @method string getDagId()
 * @method string getPageNumber()
 * @method string getNodeName()
 * @method string getProgramType()
 * @method string getBizdate()
 * @method string getPageSize()
 * @method string getNodeId()
 * @method string getProjectId()
 * @method string getStatus()
 */
class ListInstances extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectEnv($value)
    {
        $this->data['ProjectEnv'] = $value;
        $this->options['form_params']['ProjectEnv'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOwner($value)
    {
        $this->data['Owner'] = $value;
        $this->options['form_params']['Owner'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizName($value)
    {
        $this->data['BizName'] = $value;
        $this->options['form_params']['BizName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBeginBizdate($value)
    {
        $this->data['BeginBizdate'] = $value;
        $this->options['form_params']['BeginBizdate'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrderBy($value)
    {
        $this->data['OrderBy'] = $value;
        $this->options['form_params']['OrderBy'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEndBizdate($value)
    {
        $this->data['EndBizdate'] = $value;
        $this->options['form_params']['EndBizdate'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDagId($value)
    {
        $this->data['DagId'] = $value;
        $this->options['form_params']['DagId'] = $value;

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
    public function withProgramType($value)
    {
        $this->data['ProgramType'] = $value;
        $this->options['form_params']['ProgramType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizdate($value)
    {
        $this->data['Bizdate'] = $value;
        $this->options['form_params']['Bizdate'] = $value;

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
 * @method string getEntityQualifiedName()
 * @method $this withEntityQualifiedName($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 * @method string getDirection()
 * @method $this withDirection($value)
 */
class ListLineage extends Rpc
{
}

/**
 * @method string getProjectEnv()
 * @method string getProjectName()
 * @method string getDagId()
 */
class ListManualDagInstances extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectEnv($value)
    {
        $this->data['ProjectEnv'] = $value;
        $this->options['form_params']['ProjectEnv'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectName($value)
    {
        $this->data['ProjectName'] = $value;
        $this->options['form_params']['ProjectName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDagId($value)
    {
        $this->data['DagId'] = $value;
        $this->options['form_params']['DagId'] = $value;

        return $this;
    }
}

/**
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getDomainCode()
 * @method $this withDomainCode($value)
 * @method string getComponentCode()
 * @method $this withComponentCode($value)
 */
class ListMeasureData extends Rpc
{
}

/**
 * @method string getCollectionQualifiedName()
 * @method $this withCollectionQualifiedName($value)
 * @method string getEntityType()
 * @method $this withEntityType($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 */
class ListMetaCollectionEntities extends Rpc
{
}

/**
 * @method string getCreator()
 * @method $this withCreator($value)
 * @method string getFollower()
 * @method $this withFollower($value)
 * @method string getParentQualifiedName()
 * @method $this withParentQualifiedName($value)
 * @method string getOrderBy()
 * @method $this withOrderBy($value)
 * @method string getCollectionType()
 * @method $this withCollectionType($value)
 * @method string getAdministrator()
 * @method $this withAdministrator($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 */
class ListMetaCollections extends Rpc
{
}

/**
 * @method string getDataSourceType()
 * @method $this withDataSourceType($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class ListMetaDB extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getOwner()
 * @method string getPageNumber()
 * @method string getPageSize()
 * @method string getMigrationType()
 * @method string getProjectId()
 */
class ListMigrations extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOwner($value)
    {
        $this->data['Owner'] = $value;
        $this->options['form_params']['Owner'] = $value;

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
    public function withMigrationType($value)
    {
        $this->data['MigrationType'] = $value;
        $this->options['form_params']['MigrationType'] = $value;

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
 * @method string getProjectEnv()
 * @method string getNodeId()
 * @method string getIoType()
 */
class ListNodeInputOrOutput extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectEnv($value)
    {
        $this->data['ProjectEnv'] = $value;
        $this->options['form_params']['ProjectEnv'] = $value;

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
    public function withIoType($value)
    {
        $this->data['IoType'] = $value;
        $this->options['form_params']['IoType'] = $value;

        return $this;
    }
}

/**
 * @method string getProjectEnv()
 * @method string getNodeId()
 * @method string getIoType()
 */
class ListNodeIO extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectEnv($value)
    {
        $this->data['ProjectEnv'] = $value;
        $this->options['form_params']['ProjectEnv'] = $value;

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
    public function withIoType($value)
    {
        $this->data['IoType'] = $value;
        $this->options['form_params']['IoType'] = $value;

        return $this;
    }
}

/**
 * @method string getOwner()
 * @method string getProjectEnv()
 * @method string getBizName()
 * @method string getPageNumber()
 * @method string getNodeName()
 * @method string getProgramType()
 * @method string getPageSize()
 * @method string getSchedulerType()
 * @method string getProjectId()
 */
class ListNodes extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOwner($value)
    {
        $this->data['Owner'] = $value;
        $this->options['form_params']['Owner'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectEnv($value)
    {
        $this->data['ProjectEnv'] = $value;
        $this->options['form_params']['ProjectEnv'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizName($value)
    {
        $this->data['BizName'] = $value;
        $this->options['form_params']['BizName'] = $value;

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
    public function withProgramType($value)
    {
        $this->data['ProgramType'] = $value;
        $this->options['form_params']['ProgramType'] = $value;

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
    public function withSchedulerType($value)
    {
        $this->data['SchedulerType'] = $value;
        $this->options['form_params']['SchedulerType'] = $value;

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
 * @method string getBaselineId()
 */
class ListNodesByBaseline extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBaselineId($value)
    {
        $this->data['BaselineId'] = $value;
        $this->options['form_params']['BaselineId'] = $value;

        return $this;
    }
}

/**
 * @method string getProjectEnv()
 * @method string getOutputs()
 * @method string getOutputNodeListAsMap()
 */
class ListNodesByOutput extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectEnv($value)
    {
        $this->data['ProjectEnv'] = $value;
        $this->options['form_params']['ProjectEnv'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOutputs($value)
    {
        $this->data['Outputs'] = $value;
        $this->options['form_params']['Outputs'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOutputNodeListAsMap($value)
    {
        $this->data['OutputNodeListAsMap'] = $value;
        $this->options['form_params']['OutputNodeListAsMap'] = $value;

        return $this;
    }
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getTableName()
 * @method $this withTableName($value)
 * @method string getQueryType()
 * @method $this withQueryType($value)
 * @method string getEngineType()
 * @method $this withEngineType($value)
 * @method string getMaxComputeProjectName()
 * @method $this withMaxComputeProjectName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getFlowStatus()
 * @method $this withFlowStatus($value)
 * @method string getWorkspaceId()
 * @method $this withWorkspaceId($value)
 * @method string getOrderType()
 * @method $this withOrderType($value)
 */
class ListPermissionApplyOrders extends Rpc
{
}

/**
 * @method string getProjectEnv()
 * @method string getProjectId()
 */
class ListProgramTypeCount extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectEnv($value)
    {
        $this->data['ProjectEnv'] = $value;
        $this->options['form_params']['ProjectEnv'] = $value;

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
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class ListProjectIds extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class ListProjectMembers extends Rpc
{
}

/**
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class ListProjectRoles extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getResourceManagerResourceGroupId()
 * @method $this withResourceManagerResourceGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListProjects extends Rpc
{
}

/**
 * @method string getProjectName()
 * @method string getEntityId()
 * @method string getStartDate()
 * @method string getPageNumber()
 * @method string getEndDate()
 * @method string getPageSize()
 * @method string getProjectId()
 */
class ListQualityResultsByEntity extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectName($value)
    {
        $this->data['ProjectName'] = $value;
        $this->options['form_params']['ProjectName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEntityId($value)
    {
        $this->data['EntityId'] = $value;
        $this->options['form_params']['EntityId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStartDate($value)
    {
        $this->data['StartDate'] = $value;
        $this->options['form_params']['StartDate'] = $value;

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
    public function withEndDate($value)
    {
        $this->data['EndDate'] = $value;
        $this->options['form_params']['EndDate'] = $value;

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
    public function withProjectId($value)
    {
        $this->data['ProjectId'] = $value;
        $this->options['form_params']['ProjectId'] = $value;

        return $this;
    }
}

/**
 * @method string getProjectName()
 * @method string getStartDate()
 * @method string getPageNumber()
 * @method string getEndDate()
 * @method string getPageSize()
 * @method string getRuleId()
 * @method string getProjectId()
 */
class ListQualityResultsByRule extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectName($value)
    {
        $this->data['ProjectName'] = $value;
        $this->options['form_params']['ProjectName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStartDate($value)
    {
        $this->data['StartDate'] = $value;
        $this->options['form_params']['StartDate'] = $value;

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
    public function withEndDate($value)
    {
        $this->data['EndDate'] = $value;
        $this->options['form_params']['EndDate'] = $value;

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
    public function withRuleId($value)
    {
        $this->data['RuleId'] = $value;
        $this->options['form_params']['RuleId'] = $value;

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
 * @method string getProjectName()
 * @method string getEntityId()
 * @method string getPageNumber()
 * @method string getPageSize()
 * @method string getProjectId()
 */
class ListQualityRules extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectName($value)
    {
        $this->data['ProjectName'] = $value;
        $this->options['form_params']['ProjectName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEntityId($value)
    {
        $this->data['EntityId'] = $value;
        $this->options['form_params']['EntityId'] = $value;

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
    public function withProjectId($value)
    {
        $this->data['ProjectId'] = $value;
        $this->options['form_params']['ProjectId'] = $value;

        return $this;
    }
}

/**
 * @method string getTaskType()
 * @method $this withTaskType($value)
 * @method string getDatasourceName()
 * @method $this withDatasourceName($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getRefType()
 * @method $this withRefType($value)
 */
class ListRefDISyncTasks extends Rpc
{
}

/**
 * @method string getSearchText()
 * @method string getFounder()
 * @method string getRemindTypes()
 * @method string getPageNumber()
 * @method string getAlertTarget()
 * @method string getPageSize()
 * @method string getNodeId()
 */
class ListReminds extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSearchText($value)
    {
        $this->data['SearchText'] = $value;
        $this->options['form_params']['SearchText'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFounder($value)
    {
        $this->data['Founder'] = $value;
        $this->options['form_params']['Founder'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRemindTypes($value)
    {
        $this->data['RemindTypes'] = $value;
        $this->options['form_params']['RemindTypes'] = $value;

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
    public function withAlertTarget($value)
    {
        $this->data['AlertTarget'] = $value;
        $this->options['form_params']['AlertTarget'] = $value;

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
}

/**
 * @method string getBizExtKey()
 * @method $this withBizExtKey($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getTypeNames()
 * @method $this withTypeNames($value)
 * @method string getResourceManagerResourceGroupId()
 * @method $this withResourceManagerResourceGroupId($value)
 * @method string getResourceGroupType()
 * @method $this withResourceGroupType($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 */
class ListResourceGroups extends Rpc
{
}

/**
 * @method string getShiftPersonUID()
 * @method string getUserType()
 * @method string getEndTime()
 * @method string getBeginTime()
 * @method string getShiftScheduleIdentifier()
 */
class ListShiftPersonnels extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withShiftPersonUID($value)
    {
        $this->data['ShiftPersonUID'] = $value;
        $this->options['form_params']['ShiftPersonUID'] = $value;

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
    public function withBeginTime($value)
    {
        $this->data['BeginTime'] = $value;
        $this->options['form_params']['BeginTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withShiftScheduleIdentifier($value)
    {
        $this->data['ShiftScheduleIdentifier'] = $value;
        $this->options['form_params']['ShiftScheduleIdentifier'] = $value;

        return $this;
    }
}

/**
 * @method string getOwner()
 * @method string getPageSize()
 * @method string getShiftScheduleName()
 * @method string getPageNumber()
 */
class ListShiftSchedules extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOwner($value)
    {
        $this->data['Owner'] = $value;
        $this->options['form_params']['Owner'] = $value;

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
    public function withShiftScheduleName($value)
    {
        $this->data['ShiftScheduleName'] = $value;
        $this->options['form_params']['ShiftScheduleName'] = $value;

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
}

/**
 * @method string getProjectId()
 */
class ListSuccessInstanceAmount extends Rpc
{

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
 * @method string getLevelType()
 * @method $this withLevelType($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class ListTableLevel extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getDataSourceType()
 * @method $this withDataSourceType($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListTables extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getParentId()
 * @method $this withParentId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class ListTableTheme extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getOwner()
 * @method string getEndTime()
 * @method string getBeginTime()
 * @method string getTopicStatuses()
 * @method string getPageNumber()
 * @method string getInstanceId()
 * @method string getPageSize()
 * @method string getTopicTypes()
 * @method string getNodeId()
 */
class ListTopics extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOwner($value)
    {
        $this->data['Owner'] = $value;
        $this->options['form_params']['Owner'] = $value;

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
    public function withBeginTime($value)
    {
        $this->data['BeginTime'] = $value;
        $this->options['form_params']['BeginTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTopicStatuses($value)
    {
        $this->data['TopicStatuses'] = $value;
        $this->options['form_params']['TopicStatuses'] = $value;

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
    public function withTopicTypes($value)
    {
        $this->data['TopicTypes'] = $value;
        $this->options['form_params']['TopicTypes'] = $value;

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
 * @method string getTargetType()
 * @method string getTargetId()
 * @method string getTargetUserId()
 */
class MountDirectory extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTargetType($value)
    {
        $this->data['TargetType'] = $value;
        $this->options['form_params']['TargetType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTargetId($value)
    {
        $this->data['TargetId'] = $value;
        $this->options['form_params']['TargetId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTargetUserId($value)
    {
        $this->data['TargetUserId'] = $value;
        $this->options['form_params']['TargetUserId'] = $value;

        return $this;
    }
}

/**
 * @method string getNodeId()
 * @method string getProjectId()
 */
class OfflineNode extends Rpc
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
 * @method string getTenantId()
 * @method string getProjectId()
 * @method string getApiId()
 */
class PublishDataServiceApi extends Rpc
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
    public function withApiId($value)
    {
        $this->data['ApiId'] = $value;
        $this->options['form_params']['ApiId'] = $value;

        return $this;
    }
}

/**
 * @method string getTenantId()
 */
class QueryDefaultTemplate extends Rpc
{

    /** @var string */
    public $scheme = 'https';

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
 * @method string getTaskType()
 * @method $this withTaskType($value)
 * @method string getAsyncProcessId()
 * @method $this withAsyncProcessId($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class QueryDISyncTaskConfigProcessResult extends Rpc
{
}

/**
 * @method string getText()
 * @method string getProjectId()
 */
class QueryPublicModelEngine extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withText($value)
    {
        $this->data['Text'] = $value;
        $this->options['form_params']['Text'] = $value;

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
 * @method string getTenantId()
 * @method string getRecognizeRulesType()
 */
class QueryRecognizeDataByRuleType extends Rpc
{

    /** @var string */
    public $scheme = 'https';

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
    public function withRecognizeRulesType($value)
    {
        $this->data['RecognizeRulesType'] = $value;
        $this->options['form_params']['RecognizeRulesType'] = $value;

        return $this;
    }
}

/**
 * @method string getTenantId()
 * @method string getSensitiveName()
 */
class QueryRecognizeRuleDetail extends Rpc
{

    /** @var string */
    public $scheme = 'https';

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
    public function withSensitiveName($value)
    {
        $this->data['SensitiveName'] = $value;
        $this->options['form_params']['SensitiveName'] = $value;

        return $this;
    }
}

class QueryRecognizeRulesType extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getTenantId()
 * @method string getTemplateId()
 */
class QuerySensClassification extends Rpc
{

    /** @var string */
    public $scheme = 'https';

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
    public function withTemplateId($value)
    {
        $this->data['TemplateId'] = $value;
        $this->options['form_params']['TemplateId'] = $value;

        return $this;
    }
}

/**
 * @method string getTenantId()
 * @method string getTemplateId()
 */
class QuerySensLevel extends Rpc
{

    /** @var string */
    public $scheme = 'https';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['tenantId'] = $value;

        return $this;
    }

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
 * @method string getPageNo()
 * @method string getTenantId()
 * @method string getPageSize()
 * @method string getSensitiveName()
 * @method string getTemplateId()
 * @method string getNodeId()
 * @method string getStatus()
 */
class QuerySensNodeInfo extends Rpc
{

    /** @var string */
    public $scheme = 'https';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNo($value)
    {
        $this->data['PageNo'] = $value;
        $this->options['form_params']['PageNo'] = $value;

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
    public function withSensitiveName($value)
    {
        $this->data['SensitiveName'] = $value;
        $this->options['form_params']['SensitiveName'] = $value;

        return $this;
    }

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
    public function withStatus($value)
    {
        $this->data['Status'] = $value;
        $this->options['form_params']['status'] = $value;

        return $this;
    }
}

/**
 * @method string getLineageRelationRegisterVO()
 */
class RegisterLineageRelation extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLineageRelationRegisterVO($value)
    {
        $this->data['LineageRelationRegisterVO'] = $value;
        $this->options['form_params']['LineageRelationRegisterVO'] = $value;

        return $this;
    }
}

/**
 * @method string getQualifiedName()
 * @method $this withQualifiedName($value)
 * @method string getTagKeys()
 */
class RemoveEntityTags extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTagKeys($value)
    {
        $this->data['TagKeys'] = $value;
        $this->options['form_params']['TagKeys'] = $value;

        return $this;
    }
}

/**
 * @method string getRoleCode()
 * @method $this withRoleCode($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class RemoveProjectMemberFromRole extends Rpc
{
}

/**
 * @method string getProjectEnv()
 * @method string getInstanceId()
 */
class RestartInstance extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectEnv($value)
    {
        $this->data['ProjectEnv'] = $value;
        $this->options['form_params']['ProjectEnv'] = $value;

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
 * @method string getProjectEnv()
 * @method string getInstanceId()
 */
class ResumeInstance extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectEnv($value)
    {
        $this->data['ProjectEnv'] = $value;
        $this->options['form_params']['ProjectEnv'] = $value;

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
 * @method string getRevokeUserName()
 * @method $this withRevokeUserName($value)
 * @method string getMaxComputeProjectName()
 * @method $this withMaxComputeProjectName($value)
 * @method string getColumns()
 * @method $this withColumns($value)
 * @method string getRevokeUserId()
 * @method $this withRevokeUserId($value)
 * @method string getTableName()
 * @method $this withTableName($value)
 * @method string getWorkspaceId()
 * @method $this withWorkspaceId($value)
 */
class RevokeColumnPermission extends Rpc
{
}

/**
 * @method string getRevokeUserName()
 * @method $this withRevokeUserName($value)
 * @method string getMaxComputeProjectName()
 * @method $this withMaxComputeProjectName($value)
 * @method string getRevokeUserId()
 * @method $this withRevokeUserId($value)
 * @method string getTableName()
 * @method $this withTableName($value)
 * @method string getActions()
 * @method $this withActions($value)
 * @method string getWorkspaceId()
 * @method $this withWorkspaceId($value)
 */
class RevokeTablePermission extends Rpc
{
}

/**
 * @method string getProjectEnv()
 * @method string getStartBizDate()
 * @method string getParallelism()
 * @method string getAlertNoticeType()
 * @method string getRootNodeId()
 * @method string getBizBeginTime()
 * @method string getEndBizDate()
 * @method string getStartFutureInstanceImmediately()
 * @method string getConcurrentRuns()
 * @method string getAlertType()
 * @method string getIncludeNodeIds()
 * @method string getBizEndTime()
 * @method string getName()
 * @method string getExcludeNodeIds()
 * @method string getNodeParams()
 */
class RunCycleDagNodes extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectEnv($value)
    {
        $this->data['ProjectEnv'] = $value;
        $this->options['form_params']['ProjectEnv'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStartBizDate($value)
    {
        $this->data['StartBizDate'] = $value;
        $this->options['form_params']['StartBizDate'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withParallelism($value)
    {
        $this->data['Parallelism'] = $value;
        $this->options['form_params']['Parallelism'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAlertNoticeType($value)
    {
        $this->data['AlertNoticeType'] = $value;
        $this->options['form_params']['AlertNoticeType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRootNodeId($value)
    {
        $this->data['RootNodeId'] = $value;
        $this->options['form_params']['RootNodeId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizBeginTime($value)
    {
        $this->data['BizBeginTime'] = $value;
        $this->options['form_params']['BizBeginTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEndBizDate($value)
    {
        $this->data['EndBizDate'] = $value;
        $this->options['form_params']['EndBizDate'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStartFutureInstanceImmediately($value)
    {
        $this->data['StartFutureInstanceImmediately'] = $value;
        $this->options['form_params']['StartFutureInstanceImmediately'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withConcurrentRuns($value)
    {
        $this->data['ConcurrentRuns'] = $value;
        $this->options['form_params']['ConcurrentRuns'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAlertType($value)
    {
        $this->data['AlertType'] = $value;
        $this->options['form_params']['AlertType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIncludeNodeIds($value)
    {
        $this->data['IncludeNodeIds'] = $value;
        $this->options['form_params']['IncludeNodeIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizEndTime($value)
    {
        $this->data['BizEndTime'] = $value;
        $this->options['form_params']['BizEndTime'] = $value;

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
    public function withExcludeNodeIds($value)
    {
        $this->data['ExcludeNodeIds'] = $value;
        $this->options['form_params']['ExcludeNodeIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNodeParams($value)
    {
        $this->data['NodeParams'] = $value;
        $this->options['form_params']['NodeParams'] = $value;

        return $this;
    }
}

/**
 * @method string getProjectEnv()
 * @method string getProjectName()
 * @method string getStartBizDate()
 * @method string getEndBizDate()
 * @method string getDagParameters()
 * @method string getIncludeNodeIds()
 * @method string getBizDate()
 * @method string getExcludeNodeIds()
 * @method string getFlowName()
 * @method string getProjectId()
 * @method string getNodeParameters()
 */
class RunManualDagNodes extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectEnv($value)
    {
        $this->data['ProjectEnv'] = $value;
        $this->options['form_params']['ProjectEnv'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectName($value)
    {
        $this->data['ProjectName'] = $value;
        $this->options['form_params']['ProjectName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStartBizDate($value)
    {
        $this->data['StartBizDate'] = $value;
        $this->options['form_params']['StartBizDate'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEndBizDate($value)
    {
        $this->data['EndBizDate'] = $value;
        $this->options['form_params']['EndBizDate'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDagParameters($value)
    {
        $this->data['DagParameters'] = $value;
        $this->options['form_params']['DagParameters'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIncludeNodeIds($value)
    {
        $this->data['IncludeNodeIds'] = $value;
        $this->options['form_params']['IncludeNodeIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizDate($value)
    {
        $this->data['BizDate'] = $value;
        $this->options['form_params']['BizDate'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExcludeNodeIds($value)
    {
        $this->data['ExcludeNodeIds'] = $value;
        $this->options['form_params']['ExcludeNodeIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFlowName($value)
    {
        $this->data['FlowName'] = $value;
        $this->options['form_params']['FlowName'] = $value;

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
    public function withNodeParameters($value)
    {
        $this->data['NodeParameters'] = $value;
        $this->options['form_params']['NodeParameters'] = $value;

        return $this;
    }
}

/**
 * @method string getProjectEnv()
 * @method string getBizdate()
 * @method string getName()
 * @method string getNodeParams()
 * @method string getNodeId()
 */
class RunSmokeTest extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectEnv($value)
    {
        $this->data['ProjectEnv'] = $value;
        $this->options['form_params']['ProjectEnv'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizdate($value)
    {
        $this->data['Bizdate'] = $value;
        $this->options['form_params']['Bizdate'] = $value;

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
    public function withNodeParams($value)
    {
        $this->data['NodeParams'] = $value;
        $this->options['form_params']['NodeParams'] = $value;

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
 * @method string getBizDate()
 * @method string getAppId()
 * @method string getCycleTime()
 * @method string getNodeId()
 */
class RunTriggerNode extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizDate($value)
    {
        $this->data['BizDate'] = $value;
        $this->options['form_params']['BizDate'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['form_params']['AppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCycleTime($value)
    {
        $this->data['CycleTime'] = $value;
        $this->options['form_params']['CycleTime'] = $value;

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
 * @method string getFailResultSample()
 * @method string getResultSample()
 * @method string getAutoGenerate()
 * @method string getProjectId()
 * @method string getApiId()
 */
class SaveDataServiceApiTestResult extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFailResultSample($value)
    {
        $this->data['FailResultSample'] = $value;
        $this->options['form_params']['FailResultSample'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResultSample($value)
    {
        $this->data['ResultSample'] = $value;
        $this->options['form_params']['ResultSample'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAutoGenerate($value)
    {
        $this->data['AutoGenerate'] = $value;
        $this->options['form_params']['AutoGenerate'] = $value;

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
    public function withApiId($value)
    {
        $this->data['ApiId'] = $value;
        $this->options['form_params']['ApiId'] = $value;

        return $this;
    }
}

/**
 * @method string getData()
 * @method $this withData($value)
 */
class ScanSensitiveData extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getSchema()
 * @method $this withSchema($value)
 * @method string getDataSourceType()
 * @method $this withDataSourceType($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getEntityType()
 * @method $this withEntityType($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getAppGuid()
 * @method $this withAppGuid($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 */
class SearchMetaTables extends Rpc
{
}

/**
 * @method string getProjectEnv()
 * @method string getOutputs()
 */
class SearchNodesByOutput extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectEnv($value)
    {
        $this->data['ProjectEnv'] = $value;
        $this->options['form_params']['ProjectEnv'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOutputs($value)
    {
        $this->data['Outputs'] = $value;
        $this->options['form_params']['Outputs'] = $value;

        return $this;
    }
}

/**
 * @method string getProjectPermissions()
 * @method $this withProjectPermissions($value)
 * @method string getDatasourceName()
 * @method $this withDatasourceName($value)
 * @method string getUserPermissions()
 * @method $this withUserPermissions($value)
 * @method string getEnvType()
 * @method $this withEnvType($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class SetDataSourceShare extends Rpc
{
}

/**
 * @method string getQualifiedName()
 * @method $this withQualifiedName($value)
 * @method string getTags()
 */
class SetEntityTags extends Rpc
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
}

/**
 * @method string getProjectEnv()
 * @method string getInstanceId()
 */
class SetSuccessInstance extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectEnv($value)
    {
        $this->data['ProjectEnv'] = $value;
        $this->options['form_params']['ProjectEnv'] = $value;

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
 * @method string getForceToRerun()
 * @method string getDIJobId()
 * @method string getRealtimeStartSettings()
 */
class StartDIJob extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withForceToRerun($value)
    {
        $this->data['ForceToRerun'] = $value;
        $this->options['form_params']['ForceToRerun'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDIJobId($value)
    {
        $this->data['DIJobId'] = $value;
        $this->options['form_params']['DIJobId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRealtimeStartSettings($value)
    {
        $this->data['RealtimeStartSettings'] = $value;
        $this->options['form_params']['RealtimeStartSettings'] = $value;

        return $this;
    }
}

/**
 * @method string getTaskType()
 * @method $this withTaskType($value)
 * @method string getStartParam()
 * @method $this withStartParam($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getFileId()
 * @method $this withFileId($value)
 */
class StartDISyncInstance extends Rpc
{
}

/**
 * @method string getMigrationId()
 * @method string getProjectId()
 */
class StartMigration extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMigrationId($value)
    {
        $this->data['MigrationId'] = $value;
        $this->options['form_params']['MigrationId'] = $value;

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
 * @method string getDIJobId()
 */
class StopDIJob extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDIJobId($value)
    {
        $this->data['DIJobId'] = $value;
        $this->options['form_params']['DIJobId'] = $value;

        return $this;
    }
}

/**
 * @method string getTaskType()
 * @method $this withTaskType($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getFileId()
 * @method $this withFileId($value)
 */
class StopDISyncInstance extends Rpc
{
}

/**
 * @method string getProjectEnv()
 * @method string getInstanceId()
 */
class StopInstance extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectEnv($value)
    {
        $this->data['ProjectEnv'] = $value;
        $this->options['form_params']['ProjectEnv'] = $value;

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
 * @method string getTenantId()
 * @method string getProjectId()
 * @method string getApiId()
 */
class SubmitDataServiceApi extends Rpc
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
    public function withApiId($value)
    {
        $this->data['ApiId'] = $value;
        $this->options['form_params']['ApiId'] = $value;

        return $this;
    }
}

/**
 * @method string getProjectIdentifier()
 * @method string getSkipAllDeployFileExtensions()
 * @method string getComment()
 * @method string getProjectId()
 * @method string getFileId()
 */
class SubmitFile extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectIdentifier($value)
    {
        $this->data['ProjectIdentifier'] = $value;
        $this->options['form_params']['ProjectIdentifier'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSkipAllDeployFileExtensions($value)
    {
        $this->data['SkipAllDeployFileExtensions'] = $value;
        $this->options['form_params']['SkipAllDeployFileExtensions'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withComment($value)
    {
        $this->data['Comment'] = $value;
        $this->options['form_params']['Comment'] = $value;

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
    public function withFileId($value)
    {
        $this->data['FileId'] = $value;
        $this->options['form_params']['FileId'] = $value;

        return $this;
    }
}

/**
 * @method string getProjectEnv()
 * @method string getInstanceId()
 */
class SuspendInstance extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectEnv($value)
    {
        $this->data['ProjectEnv'] = $value;
        $this->options['form_params']['ProjectEnv'] = $value;

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
 * @method string getTaskType()
 * @method $this withTaskType($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getFileId()
 * @method $this withFileId($value)
 */
class TerminateDISyncInstance extends Rpc
{
}

/**
 * @method array getPathParams()
 * @method array getQueryParam()
 * @method array getHeadParams()
 * @method string getBodyContent()
 * @method array getBodyParams()
 * @method string getApiId()
 * @method $this withApiId($value)
 */
class TestDataServiceApi extends Rpc
{

    /**
     * @param array $pathParams
     *
     * @return $this
     */
	public function withPathParams(array $pathParams)
	{
	    $this->data['PathParams'] = $pathParams;
		foreach ($pathParams as $depth1 => $depth1Value) {
			if(isset($depth1Value['ParamKey'])){
				$this->options['form_params']['PathParams.' . ($depth1 + 1) . '.ParamKey'] = $depth1Value['ParamKey'];
			}
			if(isset($depth1Value['ParamValue'])){
				$this->options['form_params']['PathParams.' . ($depth1 + 1) . '.ParamValue'] = $depth1Value['ParamValue'];
			}
		}

		return $this;
    }

    /**
     * @param array $queryParam
     *
     * @return $this
     */
	public function withQueryParam(array $queryParam)
	{
	    $this->data['QueryParam'] = $queryParam;
		foreach ($queryParam as $depth1 => $depth1Value) {
			if(isset($depth1Value['ParamKey'])){
				$this->options['form_params']['QueryParam.' . ($depth1 + 1) . '.ParamKey'] = $depth1Value['ParamKey'];
			}
			if(isset($depth1Value['ParamValue'])){
				$this->options['form_params']['QueryParam.' . ($depth1 + 1) . '.ParamValue'] = $depth1Value['ParamValue'];
			}
		}

		return $this;
    }

    /**
     * @param array $headParams
     *
     * @return $this
     */
	public function withHeadParams(array $headParams)
	{
	    $this->data['HeadParams'] = $headParams;
		foreach ($headParams as $depth1 => $depth1Value) {
			if(isset($depth1Value['ParamKey'])){
				$this->options['form_params']['HeadParams.' . ($depth1 + 1) . '.ParamKey'] = $depth1Value['ParamKey'];
			}
			if(isset($depth1Value['ParamValue'])){
				$this->options['form_params']['HeadParams.' . ($depth1 + 1) . '.ParamValue'] = $depth1Value['ParamValue'];
			}
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBodyContent($value)
    {
        $this->data['BodyContent'] = $value;
        $this->options['form_params']['BodyContent'] = $value;

        return $this;
    }

    /**
     * @param array $bodyParams
     *
     * @return $this
     */
	public function withBodyParams(array $bodyParams)
	{
	    $this->data['BodyParams'] = $bodyParams;
		foreach ($bodyParams as $depth1 => $depth1Value) {
			if(isset($depth1Value['ParamKey'])){
				$this->options['form_params']['BodyParams.' . ($depth1 + 1) . '.ParamKey'] = $depth1Value['ParamKey'];
			}
			if(isset($depth1Value['ParamValue'])){
				$this->options['form_params']['BodyParams.' . ($depth1 + 1) . '.ParamValue'] = $depth1Value['ParamValue'];
			}
		}

		return $this;
    }
}

/**
 * @method string getResourceGroup()
 * @method $this withResourceGroup($value)
 * @method string getDatasourceName()
 * @method $this withDatasourceName($value)
 * @method string getEnvType()
 * @method $this withEnvType($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class TestNetworkConnection extends Rpc
{
}

/**
 * @method string getProjectId()
 */
class TopTenElapsedTimeInstance extends Rpc
{

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
 * @method string getProjectId()
 */
class TopTenErrorTimesInstance extends Rpc
{

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
 * @method string getTargetType()
 * @method string getTargetId()
 * @method string getTargetUserId()
 */
class UmountDirectory extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTargetType($value)
    {
        $this->data['TargetType'] = $value;
        $this->options['form_params']['TargetType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTargetId($value)
    {
        $this->data['TargetId'] = $value;
        $this->options['form_params']['TargetId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTargetUserId($value)
    {
        $this->data['TargetUserId'] = $value;
        $this->options['form_params']['TargetUserId'] = $value;

        return $this;
    }
}

/**
 * @method string getOwner()
 * @method string getRemoveNodeIds()
 * @method string getAlertMarginThreshold()
 * @method string getOvertimeSettings()
 * @method string getPriority()
 * @method string getBaselineId()
 * @method string getEnabled()
 * @method string getBaselineType()
 * @method string getAlertEnabled()
 * @method string getAlertSettings()
 * @method string getBaselineName()
 * @method string getProjectId()
 * @method string getNodeIds()
 */
class UpdateBaseline extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOwner($value)
    {
        $this->data['Owner'] = $value;
        $this->options['form_params']['Owner'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRemoveNodeIds($value)
    {
        $this->data['RemoveNodeIds'] = $value;
        $this->options['form_params']['RemoveNodeIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAlertMarginThreshold($value)
    {
        $this->data['AlertMarginThreshold'] = $value;
        $this->options['form_params']['AlertMarginThreshold'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOvertimeSettings($value)
    {
        $this->data['OvertimeSettings'] = $value;
        $this->options['form_params']['OvertimeSettings'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPriority($value)
    {
        $this->data['Priority'] = $value;
        $this->options['form_params']['Priority'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBaselineId($value)
    {
        $this->data['BaselineId'] = $value;
        $this->options['form_params']['BaselineId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEnabled($value)
    {
        $this->data['Enabled'] = $value;
        $this->options['form_params']['Enabled'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBaselineType($value)
    {
        $this->data['BaselineType'] = $value;
        $this->options['form_params']['BaselineType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAlertEnabled($value)
    {
        $this->data['AlertEnabled'] = $value;
        $this->options['form_params']['AlertEnabled'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAlertSettings($value)
    {
        $this->data['AlertSettings'] = $value;
        $this->options['form_params']['AlertSettings'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBaselineName($value)
    {
        $this->data['BaselineName'] = $value;
        $this->options['form_params']['BaselineName'] = $value;

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
    public function withNodeIds($value)
    {
        $this->data['NodeIds'] = $value;
        $this->options['form_params']['NodeIds'] = $value;

        return $this;
    }
}

/**
 * @method string getOwner()
 * @method string getBusinessId()
 * @method string getDescription()
 * @method string getProjectIdentifier()
 * @method string getBusinessName()
 * @method string getProjectId()
 */
class UpdateBusiness extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOwner($value)
    {
        $this->data['Owner'] = $value;
        $this->options['form_params']['Owner'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBusinessId($value)
    {
        $this->data['BusinessId'] = $value;
        $this->options['form_params']['BusinessId'] = $value;

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
    public function withProjectIdentifier($value)
    {
        $this->data['ProjectIdentifier'] = $value;
        $this->options['form_params']['ProjectIdentifier'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBusinessName($value)
    {
        $this->data['BusinessName'] = $value;
        $this->options['form_params']['BusinessName'] = $value;

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
 * @method string getConfigType()
 * @method $this withConfigType($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getConfigValues()
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class UpdateClusterConfigs extends Rpc
{

    /** @var string */
    public $scheme = 'https';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withConfigValues($value)
    {
        $this->data['ConfigValues'] = $value;
        $this->options['form_params']['ConfigValues'] = $value;

        return $this;
    }
}

/**
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getContent()
 * @method $this withContent($value)
 * @method string getEnvType()
 * @method $this withEnvType($value)
 * @method string getConnectionId()
 * @method $this withConnectionId($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class UpdateConnection extends Rpc
{

    /** @var string */
    public $method = 'PUT';
}

/**
 * @method string getScriptDetails()
 * @method string getRequestMethod()
 * @method string getApiDescription()
 * @method string getTimeout()
 * @method string getResourceGroupId()
 * @method string getTenantId()
 * @method string getProtocols()
 * @method string getProjectId()
 * @method string getResponseContentType()
 * @method string getApiPath()
 * @method string getWizardDetails()
 * @method string getVisibleRange()
 * @method string getRegistrationDetails()
 * @method string getApiId()
 */
class UpdateDataServiceApi extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScriptDetails($value)
    {
        $this->data['ScriptDetails'] = $value;
        $this->options['form_params']['ScriptDetails'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRequestMethod($value)
    {
        $this->data['RequestMethod'] = $value;
        $this->options['form_params']['RequestMethod'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiDescription($value)
    {
        $this->data['ApiDescription'] = $value;
        $this->options['form_params']['ApiDescription'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTimeout($value)
    {
        $this->data['Timeout'] = $value;
        $this->options['form_params']['Timeout'] = $value;

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
    public function withProtocols($value)
    {
        $this->data['Protocols'] = $value;
        $this->options['form_params']['Protocols'] = $value;

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
    public function withResponseContentType($value)
    {
        $this->data['ResponseContentType'] = $value;
        $this->options['form_params']['ResponseContentType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiPath($value)
    {
        $this->data['ApiPath'] = $value;
        $this->options['form_params']['ApiPath'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWizardDetails($value)
    {
        $this->data['WizardDetails'] = $value;
        $this->options['form_params']['WizardDetails'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVisibleRange($value)
    {
        $this->data['VisibleRange'] = $value;
        $this->options['form_params']['VisibleRange'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRegistrationDetails($value)
    {
        $this->data['RegistrationDetails'] = $value;
        $this->options['form_params']['RegistrationDetails'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiId($value)
    {
        $this->data['ApiId'] = $value;
        $this->options['form_params']['ApiId'] = $value;

        return $this;
    }
}

/**
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getContent()
 * @method $this withContent($value)
 * @method string getEnvType()
 * @method $this withEnvType($value)
 * @method string getDataSourceId()
 * @method $this withDataSourceId($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class UpdateDataSource extends Rpc
{

    /** @var string */
    public $method = 'PUT';
}

/**
 * @method string getMetricType()
 * @method string getTriggerConditions()
 * @method string getDescription()
 * @method string getNotificationSettings()
 * @method string getEnabled()
 * @method string getDIAlarmRuleId()
 */
class UpdateDIAlarmRule extends Rpc
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
    public function withTriggerConditions($value)
    {
        $this->data['TriggerConditions'] = $value;
        $this->options['form_params']['TriggerConditions'] = $value;

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
    public function withNotificationSettings($value)
    {
        $this->data['NotificationSettings'] = $value;
        $this->options['form_params']['NotificationSettings'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEnabled($value)
    {
        $this->data['Enabled'] = $value;
        $this->options['form_params']['Enabled'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDIAlarmRuleId($value)
    {
        $this->data['DIAlarmRuleId'] = $value;
        $this->options['form_params']['DIAlarmRuleId'] = $value;

        return $this;
    }
}

/**
 * @method string getDescription()
 * @method string getTransformationRules()
 * @method string getDIJobId()
 * @method string getResourceSettings()
 * @method string getTableMappings()
 * @method string getJobSettings()
 */
class UpdateDIJob extends Rpc
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
    public function withTransformationRules($value)
    {
        $this->data['TransformationRules'] = $value;
        $this->options['form_params']['TransformationRules'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDIJobId($value)
    {
        $this->data['DIJobId'] = $value;
        $this->options['form_params']['DIJobId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceSettings($value)
    {
        $this->data['ResourceSettings'] = $value;
        $this->options['form_params']['ResourceSettings'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTableMappings($value)
    {
        $this->data['TableMappings'] = $value;
        $this->options['form_params']['TableMappings'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJobSettings($value)
    {
        $this->data['JobSettings'] = $value;
        $this->options['form_params']['JobSettings'] = $value;

        return $this;
    }
}

/**
 * @method string getDestinationType()
 * @method $this withDestinationType($value)
 * @method string getSourceType()
 * @method $this withSourceType($value)
 * @method string getProjectConfig()
 * @method $this withProjectConfig($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class UpdateDIProjectConfig extends Rpc
{
}

/**
 * @method string getTaskType()
 * @method $this withTaskType($value)
 * @method string getTaskParam()
 * @method $this withTaskParam($value)
 * @method string getTaskContent()
 * @method $this withTaskContent($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getFileId()
 * @method $this withFileId($value)
 */
class UpdateDISyncTask extends Rpc
{
}

/**
 * @method string getOutputList()
 * @method string getDependentNodeIdList()
 * @method string getContent()
 * @method string getProjectIdentifier()
 * @method string getStartImmediately()
 * @method string getProjectId()
 * @method string getAdvancedSettings()
 * @method string getStartEffectDate()
 * @method string getCycleType()
 * @method string getFileId()
 * @method string getAutoRerunIntervalMillis()
 * @method string getOwner()
 * @method string getInputList()
 * @method string getApplyScheduleImmediately()
 * @method string getRerunMode()
 * @method string getConnectionName()
 * @method string getOutputParameters()
 * @method string getParaValue()
 * @method string getResourceGroupIdentifier()
 * @method string getAutoRerunTimes()
 * @method string getCronExpress()
 * @method string getIgnoreParentSkipRunningProperty()
 * @method string getEndEffectDate()
 * @method string getFileName()
 * @method string getInputParameters()
 * @method string getStop()
 * @method string getDependentType()
 * @method string getFileFolderPath()
 * @method string getFileDescription()
 * @method string getAutoParsing()
 * @method string getSchedulerType()
 */
class UpdateFile extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOutputList($value)
    {
        $this->data['OutputList'] = $value;
        $this->options['form_params']['OutputList'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDependentNodeIdList($value)
    {
        $this->data['DependentNodeIdList'] = $value;
        $this->options['form_params']['DependentNodeIdList'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContent($value)
    {
        $this->data['Content'] = $value;
        $this->options['form_params']['Content'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectIdentifier($value)
    {
        $this->data['ProjectIdentifier'] = $value;
        $this->options['form_params']['ProjectIdentifier'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStartImmediately($value)
    {
        $this->data['StartImmediately'] = $value;
        $this->options['form_params']['StartImmediately'] = $value;

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
    public function withAdvancedSettings($value)
    {
        $this->data['AdvancedSettings'] = $value;
        $this->options['form_params']['AdvancedSettings'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStartEffectDate($value)
    {
        $this->data['StartEffectDate'] = $value;
        $this->options['form_params']['StartEffectDate'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCycleType($value)
    {
        $this->data['CycleType'] = $value;
        $this->options['form_params']['CycleType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFileId($value)
    {
        $this->data['FileId'] = $value;
        $this->options['form_params']['FileId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAutoRerunIntervalMillis($value)
    {
        $this->data['AutoRerunIntervalMillis'] = $value;
        $this->options['form_params']['AutoRerunIntervalMillis'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOwner($value)
    {
        $this->data['Owner'] = $value;
        $this->options['form_params']['Owner'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInputList($value)
    {
        $this->data['InputList'] = $value;
        $this->options['form_params']['InputList'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApplyScheduleImmediately($value)
    {
        $this->data['ApplyScheduleImmediately'] = $value;
        $this->options['form_params']['ApplyScheduleImmediately'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRerunMode($value)
    {
        $this->data['RerunMode'] = $value;
        $this->options['form_params']['RerunMode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withConnectionName($value)
    {
        $this->data['ConnectionName'] = $value;
        $this->options['form_params']['ConnectionName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOutputParameters($value)
    {
        $this->data['OutputParameters'] = $value;
        $this->options['form_params']['OutputParameters'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withParaValue($value)
    {
        $this->data['ParaValue'] = $value;
        $this->options['form_params']['ParaValue'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceGroupIdentifier($value)
    {
        $this->data['ResourceGroupIdentifier'] = $value;
        $this->options['form_params']['ResourceGroupIdentifier'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAutoRerunTimes($value)
    {
        $this->data['AutoRerunTimes'] = $value;
        $this->options['form_params']['AutoRerunTimes'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCronExpress($value)
    {
        $this->data['CronExpress'] = $value;
        $this->options['form_params']['CronExpress'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIgnoreParentSkipRunningProperty($value)
    {
        $this->data['IgnoreParentSkipRunningProperty'] = $value;
        $this->options['form_params']['IgnoreParentSkipRunningProperty'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEndEffectDate($value)
    {
        $this->data['EndEffectDate'] = $value;
        $this->options['form_params']['EndEffectDate'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFileName($value)
    {
        $this->data['FileName'] = $value;
        $this->options['form_params']['FileName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInputParameters($value)
    {
        $this->data['InputParameters'] = $value;
        $this->options['form_params']['InputParameters'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStop($value)
    {
        $this->data['Stop'] = $value;
        $this->options['form_params']['Stop'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDependentType($value)
    {
        $this->data['DependentType'] = $value;
        $this->options['form_params']['DependentType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFileFolderPath($value)
    {
        $this->data['FileFolderPath'] = $value;
        $this->options['form_params']['FileFolderPath'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFileDescription($value)
    {
        $this->data['FileDescription'] = $value;
        $this->options['form_params']['FileDescription'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAutoParsing($value)
    {
        $this->data['AutoParsing'] = $value;
        $this->options['form_params']['AutoParsing'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSchedulerType($value)
    {
        $this->data['SchedulerType'] = $value;
        $this->options['form_params']['SchedulerType'] = $value;

        return $this;
    }
}

/**
 * @method string getFolderName()
 * @method string getProjectId()
 * @method string getProjectIdentifier()
 * @method string getFolderId()
 */
class UpdateFolder extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFolderName($value)
    {
        $this->data['FolderName'] = $value;
        $this->options['form_params']['FolderName'] = $value;

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
    public function withProjectIdentifier($value)
    {
        $this->data['ProjectIdentifier'] = $value;
        $this->options['form_params']['ProjectIdentifier'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFolderId($value)
    {
        $this->data['FolderId'] = $value;
        $this->options['form_params']['FolderId'] = $value;

        return $this;
    }
}

/**
 * @method string getCheckResultTip()
 * @method string getCheckResult()
 * @method string getMessageId()
 * @method string getExtensionCode()
 */
class UpdateIDEEventResult extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCheckResultTip($value)
    {
        $this->data['CheckResultTip'] = $value;
        $this->options['form_params']['CheckResultTip'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCheckResult($value)
    {
        $this->data['CheckResult'] = $value;
        $this->options['form_params']['CheckResult'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMessageId($value)
    {
        $this->data['MessageId'] = $value;
        $this->options['form_params']['MessageId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExtensionCode($value)
    {
        $this->data['ExtensionCode'] = $value;
        $this->options['form_params']['ExtensionCode'] = $value;

        return $this;
    }
}

/**
 * @method string getName()
 * @method string getComment()
 * @method string getCategoryId()
 */
class UpdateMetaCategory extends Rpc
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

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withComment($value)
    {
        $this->data['Comment'] = $value;
        $this->options['form_params']['Comment'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCategoryId($value)
    {
        $this->data['CategoryId'] = $value;
        $this->options['form_params']['CategoryId'] = $value;

        return $this;
    }
}

/**
 * @method string getQualifiedName()
 * @method $this withQualifiedName($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getComment()
 * @method $this withComment($value)
 */
class UpdateMetaCollection extends Rpc
{
}

/**
 * @method string getSchema()
 * @method $this withSchema($value)
 * @method string getVisibility()
 * @method $this withVisibility($value)
 * @method string getCaption()
 * @method $this withCaption($value)
 * @method string getNewOwnerId()
 * @method $this withNewOwnerId($value)
 * @method string getTableGuid()
 * @method $this withTableGuid($value)
 * @method string getAddedLabels()
 * @method string getRemovedLabels()
 * @method string getEnvType()
 * @method $this withEnvType($value)
 * @method string getTableName()
 * @method $this withTableName($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getCategoryId()
 * @method $this withCategoryId($value)
 */
class UpdateMetaTable extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAddedLabels($value)
    {
        $this->data['AddedLabels'] = $value;
        $this->options['form_params']['AddedLabels'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRemovedLabels($value)
    {
        $this->data['RemovedLabels'] = $value;
        $this->options['form_params']['RemovedLabels'] = $value;

        return $this;
    }
}

/**
 * @method string getContent()
 * @method string getTableGuid()
 * @method $this withTableGuid($value)
 */
class UpdateMetaTableIntroWiki extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContent($value)
    {
        $this->data['Content'] = $value;
        $this->options['form_params']['Content'] = $value;

        return $this;
    }
}

/**
 * @method string getProjectEnv()
 * @method string getNodeId()
 * @method string getUserId()
 */
class UpdateNodeOwner extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectEnv($value)
    {
        $this->data['ProjectEnv'] = $value;
        $this->options['form_params']['ProjectEnv'] = $value;

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
    public function withUserId($value)
    {
        $this->data['UserId'] = $value;
        $this->options['form_params']['UserId'] = $value;

        return $this;
    }
}

/**
 * @method string getProjectEnv()
 * @method string getSchedulerType()
 * @method string getNodeId()
 */
class UpdateNodeRunMode extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectEnv($value)
    {
        $this->data['ProjectEnv'] = $value;
        $this->options['form_params']['ProjectEnv'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSchedulerType($value)
    {
        $this->data['SchedulerType'] = $value;
        $this->options['form_params']['SchedulerType'] = $value;

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
 * @method string getProjectName()
 * @method string getFollower()
 * @method string getFollowerId()
 * @method string getAlarmMode()
 * @method string getProjectId()
 */
class UpdateQualityFollower extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectName($value)
    {
        $this->data['ProjectName'] = $value;
        $this->options['form_params']['ProjectName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFollower($value)
    {
        $this->data['Follower'] = $value;
        $this->options['form_params']['Follower'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFollowerId($value)
    {
        $this->data['FollowerId'] = $value;
        $this->options['form_params']['FollowerId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAlarmMode($value)
    {
        $this->data['AlarmMode'] = $value;
        $this->options['form_params']['AlarmMode'] = $value;

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
 * @method string getTaskSetting()
 * @method string getTrend()
 * @method string getBlockType()
 * @method string getPropertyType()
 * @method string getEntityId()
 * @method string getRuleName()
 * @method string getChecker()
 * @method string getOperator()
 * @method string getProperty()
 * @method string getId()
 * @method string getWarningThreshold()
 * @method string getProjectId()
 * @method string getMethodName()
 * @method string getProjectName()
 * @method string getRuleType()
 * @method string getTemplateId()
 * @method string getExpectValue()
 * @method string getWhereCondition()
 * @method string getCriticalThreshold()
 * @method string getOpenSwitch()
 * @method string getComment()
 * @method string getPredictType()
 */
class UpdateQualityRule extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTaskSetting($value)
    {
        $this->data['TaskSetting'] = $value;
        $this->options['form_params']['TaskSetting'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTrend($value)
    {
        $this->data['Trend'] = $value;
        $this->options['form_params']['Trend'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBlockType($value)
    {
        $this->data['BlockType'] = $value;
        $this->options['form_params']['BlockType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPropertyType($value)
    {
        $this->data['PropertyType'] = $value;
        $this->options['form_params']['PropertyType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEntityId($value)
    {
        $this->data['EntityId'] = $value;
        $this->options['form_params']['EntityId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRuleName($value)
    {
        $this->data['RuleName'] = $value;
        $this->options['form_params']['RuleName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChecker($value)
    {
        $this->data['Checker'] = $value;
        $this->options['form_params']['Checker'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperator($value)
    {
        $this->data['Operator'] = $value;
        $this->options['form_params']['Operator'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProperty($value)
    {
        $this->data['Property'] = $value;
        $this->options['form_params']['Property'] = $value;

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
    public function withWarningThreshold($value)
    {
        $this->data['WarningThreshold'] = $value;
        $this->options['form_params']['WarningThreshold'] = $value;

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
    public function withMethodName($value)
    {
        $this->data['MethodName'] = $value;
        $this->options['form_params']['MethodName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectName($value)
    {
        $this->data['ProjectName'] = $value;
        $this->options['form_params']['ProjectName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRuleType($value)
    {
        $this->data['RuleType'] = $value;
        $this->options['form_params']['RuleType'] = $value;

        return $this;
    }

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

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExpectValue($value)
    {
        $this->data['ExpectValue'] = $value;
        $this->options['form_params']['ExpectValue'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWhereCondition($value)
    {
        $this->data['WhereCondition'] = $value;
        $this->options['form_params']['WhereCondition'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCriticalThreshold($value)
    {
        $this->data['CriticalThreshold'] = $value;
        $this->options['form_params']['CriticalThreshold'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOpenSwitch($value)
    {
        $this->data['OpenSwitch'] = $value;
        $this->options['form_params']['OpenSwitch'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withComment($value)
    {
        $this->data['Comment'] = $value;
        $this->options['form_params']['Comment'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPredictType($value)
    {
        $this->data['PredictType'] = $value;
        $this->options['form_params']['PredictType'] = $value;

        return $this;
    }
}

/**
 * @method string getAlertUnit()
 * @method string getUseFlag()
 * @method string getRobotUrls()
 * @method string getBizProcessIds()
 * @method string getRemindType()
 * @method string getBaselineIds()
 * @method string getProjectId()
 * @method string getDndEnd()
 * @method string getRemindUnit()
 * @method string getAlertInterval()
 * @method string getAlertMethods()
 * @method string getMaxAlertTimes()
 * @method string getAlertTargets()
 * @method string getWebhooks()
 * @method string getRemindId()
 * @method string getDetail()
 * @method string getRemindName()
 * @method string getNodeIds()
 */
class UpdateRemind extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAlertUnit($value)
    {
        $this->data['AlertUnit'] = $value;
        $this->options['form_params']['AlertUnit'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUseFlag($value)
    {
        $this->data['UseFlag'] = $value;
        $this->options['form_params']['UseFlag'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRobotUrls($value)
    {
        $this->data['RobotUrls'] = $value;
        $this->options['form_params']['RobotUrls'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizProcessIds($value)
    {
        $this->data['BizProcessIds'] = $value;
        $this->options['form_params']['BizProcessIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRemindType($value)
    {
        $this->data['RemindType'] = $value;
        $this->options['form_params']['RemindType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBaselineIds($value)
    {
        $this->data['BaselineIds'] = $value;
        $this->options['form_params']['BaselineIds'] = $value;

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
    public function withDndEnd($value)
    {
        $this->data['DndEnd'] = $value;
        $this->options['form_params']['DndEnd'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRemindUnit($value)
    {
        $this->data['RemindUnit'] = $value;
        $this->options['form_params']['RemindUnit'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAlertInterval($value)
    {
        $this->data['AlertInterval'] = $value;
        $this->options['form_params']['AlertInterval'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAlertMethods($value)
    {
        $this->data['AlertMethods'] = $value;
        $this->options['form_params']['AlertMethods'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMaxAlertTimes($value)
    {
        $this->data['MaxAlertTimes'] = $value;
        $this->options['form_params']['MaxAlertTimes'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAlertTargets($value)
    {
        $this->data['AlertTargets'] = $value;
        $this->options['form_params']['AlertTargets'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWebhooks($value)
    {
        $this->data['Webhooks'] = $value;
        $this->options['form_params']['Webhooks'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRemindId($value)
    {
        $this->data['RemindId'] = $value;
        $this->options['form_params']['RemindId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDetail($value)
    {
        $this->data['Detail'] = $value;
        $this->options['form_params']['Detail'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRemindName($value)
    {
        $this->data['RemindName'] = $value;
        $this->options['form_params']['RemindName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNodeIds($value)
    {
        $this->data['NodeIds'] = $value;
        $this->options['form_params']['NodeIds'] = $value;

        return $this;
    }
}

/**
 * @method string getSchema()
 * @method $this withSchema($value)
 * @method array getColumns()
 * @method string getLifeCycle()
 * @method $this withLifeCycle($value)
 * @method array getThemes()
 * @method string getLogicalLevelId()
 * @method $this withLogicalLevelId($value)
 * @method string getEndpoint()
 * @method string getEnvType()
 * @method string getHasPart()
 * @method $this withHasPart($value)
 * @method string getTableName()
 * @method $this withTableName($value)
 * @method string getAppGuid()
 * @method $this withAppGuid($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getCategoryId()
 * @method $this withCategoryId($value)
 * @method string getVisibility()
 * @method $this withVisibility($value)
 * @method string getPhysicsLevelId()
 * @method $this withPhysicsLevelId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getIsView()
 * @method $this withIsView($value)
 * @method string getExternalTableType()
 * @method $this withExternalTableType($value)
 * @method string getLocation()
 * @method $this withLocation($value)
 * @method string getComment()
 * @method $this withComment($value)
 * @method string getCreateIfNotExists()
 * @method $this withCreateIfNotExists($value)
 */
class UpdateTable extends Rpc
{

    /**
     * @param array $columns
     *
     * @return $this
     */
	public function withColumns(array $columns)
	{
	    $this->data['Columns'] = $columns;
		foreach ($columns as $depth1 => $depth1Value) {
			if(isset($depth1Value['SeqNumber'])){
				$this->options['form_params']['Columns.' . ($depth1 + 1) . '.SeqNumber'] = $depth1Value['SeqNumber'];
			}
			if(isset($depth1Value['IsPartitionCol'])){
				$this->options['form_params']['Columns.' . ($depth1 + 1) . '.IsPartitionCol'] = $depth1Value['IsPartitionCol'];
			}
			if(isset($depth1Value['ColumnNameCn'])){
				$this->options['form_params']['Columns.' . ($depth1 + 1) . '.ColumnNameCn'] = $depth1Value['ColumnNameCn'];
			}
			if(isset($depth1Value['Length'])){
				$this->options['form_params']['Columns.' . ($depth1 + 1) . '.Length'] = $depth1Value['Length'];
			}
			if(isset($depth1Value['Comment'])){
				$this->options['form_params']['Columns.' . ($depth1 + 1) . '.Comment'] = $depth1Value['Comment'];
			}
			if(isset($depth1Value['ColumnName'])){
				$this->options['form_params']['Columns.' . ($depth1 + 1) . '.ColumnName'] = $depth1Value['ColumnName'];
			}
			if(isset($depth1Value['ColumnType'])){
				$this->options['form_params']['Columns.' . ($depth1 + 1) . '.ColumnType'] = $depth1Value['ColumnType'];
			}
		}

		return $this;
    }

    /**
     * @param array $themes
     *
     * @return $this
     */
	public function withThemes(array $themes)
	{
	    $this->data['Themes'] = $themes;
		foreach ($themes as $depth1 => $depth1Value) {
			if(isset($depth1Value['ThemeLevel'])){
				$this->options['form_params']['Themes.' . ($depth1 + 1) . '.ThemeLevel'] = $depth1Value['ThemeLevel'];
			}
			if(isset($depth1Value['ThemeId'])){
				$this->options['form_params']['Themes.' . ($depth1 + 1) . '.ThemeId'] = $depth1Value['ThemeId'];
			}
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEndpoint($value)
    {
        $this->data['Endpoint'] = $value;
        $this->options['form_params']['Endpoint'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEnvType($value)
    {
        $this->data['EnvType'] = $value;
        $this->options['form_params']['EnvType'] = $value;

        return $this;
    }
}

/**
 * @method array getColumn()
 * @method string getTableGuid()
 * @method $this withTableGuid($value)
 */
class UpdateTableAddColumn extends Rpc
{

    /**
     * @param array $column
     *
     * @return $this
     */
	public function withColumn(array $column)
	{
	    $this->data['Column'] = $column;
		foreach ($column as $depth1 => $depth1Value) {
			if(isset($depth1Value['ColumnNameCn'])){
				$this->options['form_params']['Column.' . ($depth1 + 1) . '.ColumnNameCn'] = $depth1Value['ColumnNameCn'];
			}
			if(isset($depth1Value['Comment'])){
				$this->options['form_params']['Column.' . ($depth1 + 1) . '.Comment'] = $depth1Value['Comment'];
			}
			if(isset($depth1Value['ColumnName'])){
				$this->options['form_params']['Column.' . ($depth1 + 1) . '.ColumnName'] = $depth1Value['ColumnName'];
			}
			if(isset($depth1Value['ColumnType'])){
				$this->options['form_params']['Column.' . ($depth1 + 1) . '.ColumnType'] = $depth1Value['ColumnType'];
			}
		}

		return $this;
    }
}

/**
 * @method string getLevelType()
 * @method $this withLevelType($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getLevelId()
 * @method $this withLevelId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class UpdateTableLevel extends Rpc
{
}

/**
 * @method string getLevelType()
 * @method $this withLevelType($value)
 * @method string getSecondLevelThemeId()
 * @method $this withSecondLevelThemeId($value)
 * @method string getTableGuid()
 * @method $this withTableGuid($value)
 * @method string getLevelId()
 * @method $this withLevelId($value)
 * @method string getFirstLevelThemeId()
 * @method $this withFirstLevelThemeId($value)
 */
class UpdateTableModelInfo extends Rpc
{
}

/**
 * @method string getThemeId()
 * @method $this withThemeId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class UpdateTableTheme extends Rpc
{
}

/**
 * @method string getReturnValue()
 * @method string getResources()
 * @method string getFunctionType()
 * @method string getCmdDescription()
 * @method string getUdfDescription()
 * @method string getParameterDescription()
 * @method string getProjectIdentifier()
 * @method string getExample()
 * @method string getClassName()
 * @method string getFileFolderPath()
 * @method string getProjectId()
 * @method string getFileId()
 */
class UpdateUdfFile extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withReturnValue($value)
    {
        $this->data['ReturnValue'] = $value;
        $this->options['form_params']['ReturnValue'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResources($value)
    {
        $this->data['Resources'] = $value;
        $this->options['form_params']['Resources'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFunctionType($value)
    {
        $this->data['FunctionType'] = $value;
        $this->options['form_params']['FunctionType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCmdDescription($value)
    {
        $this->data['CmdDescription'] = $value;
        $this->options['form_params']['CmdDescription'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUdfDescription($value)
    {
        $this->data['UdfDescription'] = $value;
        $this->options['form_params']['UdfDescription'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withParameterDescription($value)
    {
        $this->data['ParameterDescription'] = $value;
        $this->options['form_params']['ParameterDescription'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectIdentifier($value)
    {
        $this->data['ProjectIdentifier'] = $value;
        $this->options['form_params']['ProjectIdentifier'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExample($value)
    {
        $this->data['Example'] = $value;
        $this->options['form_params']['Example'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClassName($value)
    {
        $this->data['ClassName'] = $value;
        $this->options['form_params']['ClassName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFileFolderPath($value)
    {
        $this->data['FileFolderPath'] = $value;
        $this->options['form_params']['FileFolderPath'] = $value;

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
    public function withFileId($value)
    {
        $this->data['FileId'] = $value;
        $this->options['form_params']['FileId'] = $value;

        return $this;
    }
}

/**
 * @method string getCheckResult()
 * @method $this withCheckResult($value)
 * @method string getMessageId()
 * @method $this withMessageId($value)
 * @method string getCheckResultTip()
 * @method $this withCheckResultTip($value)
 * @method string getExtensionCode()
 * @method $this withExtensionCode($value)
 */
class UpdateWorkbenchEventResult extends Rpc
{
}
