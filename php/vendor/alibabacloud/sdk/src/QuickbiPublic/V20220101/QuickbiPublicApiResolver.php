<?php

namespace AlibabaCloud\QuickbiPublic\V20220101;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AddDataLevelPermissionRuleUsers addDataLevelPermissionRuleUsers(array $options = [])
 * @method AddDataLevelPermissionWhiteList addDataLevelPermissionWhiteList(array $options = [])
 * @method AddDataSource addDataSource(array $options = [])
 * @method AddShareReport addShareReport(array $options = [])
 * @method AddUser addUser(array $options = [])
 * @method AddUserGroupMember addUserGroupMember(array $options = [])
 * @method AddUserGroupMembers addUserGroupMembers(array $options = [])
 * @method AddUserTagMeta addUserTagMeta(array $options = [])
 * @method AddUserToWorkspace addUserToWorkspace(array $options = [])
 * @method AddWorkspaceUsers addWorkspaceUsers(array $options = [])
 * @method AllotDatasetAccelerationTask allotDatasetAccelerationTask(array $options = [])
 * @method AuthorizeMenu authorizeMenu(array $options = [])
 * @method BatchAddFeishuUsers batchAddFeishuUsers(array $options = [])
 * @method CancelAuthorizationMenu cancelAuthorizationMenu(array $options = [])
 * @method CancelCollection cancelCollection(array $options = [])
 * @method CancelReportShare cancelReportShare(array $options = [])
 * @method ChangeVisibilityModel changeVisibilityModel(array $options = [])
 * @method CheckDatasetExisted checkDatasetExisted(array $options = [])
 * @method CheckOrganizationMember checkOrganizationMember(array $options = [])
 * @method CheckReadable checkReadable(array $options = [])
 * @method CreateCubeBySql createCubeBySql(array $options = [])
 * @method CreateDataset createDataset(array $options = [])
 * @method CreateTicket createTicket(array $options = [])
 * @method CreateTicket4Copilot createTicket4Copilot(array $options = [])
 * @method CreateUserGroup createUserGroup(array $options = [])
 * @method DataInterpretation dataInterpretation(array $options = [])
 * @method DataSetBlood dataSetBlood(array $options = [])
 * @method DataSourceBlood dataSourceBlood(array $options = [])
 * @method DelayTicketExpireTime delayTicketExpireTime(array $options = [])
 * @method DeleteDataLevelPermissionRuleUsers deleteDataLevelPermissionRuleUsers(array $options = [])
 * @method DeleteDataLevelRuleConfig deleteDataLevelRuleConfig(array $options = [])
 * @method DeleteTicket deleteTicket(array $options = [])
 * @method DeleteUser deleteUser(array $options = [])
 * @method DeleteUserFromWorkspace deleteUserFromWorkspace(array $options = [])
 * @method DeleteUserGroup deleteUserGroup(array $options = [])
 * @method DeleteUserGroupMember deleteUserGroupMember(array $options = [])
 * @method DeleteUserGroupMembers deleteUserGroupMembers(array $options = [])
 * @method DeleteUserTagMeta deleteUserTagMeta(array $options = [])
 * @method GetDataSourceConnectionInfo getDataSourceConnectionInfo(array $options = [])
 * @method GetMailTaskStatus getMailTaskStatus(array $options = [])
 * @method GetUserGroupInfo getUserGroupInfo(array $options = [])
 * @method GetWorksEmbedList getWorksEmbedList(array $options = [])
 * @method ListApiDatasource listApiDatasource(array $options = [])
 * @method ListByUserGroupId listByUserGroupId(array $options = [])
 * @method ListCollections listCollections(array $options = [])
 * @method ListCubeDataLevelPermissionConfig listCubeDataLevelPermissionConfig(array $options = [])
 * @method ListDataLevelPermissionWhiteList listDataLevelPermissionWhiteList(array $options = [])
 * @method ListDataSource listDataSource(array $options = [])
 * @method ListFavoriteReports listFavoriteReports(array $options = [])
 * @method ListOrganizationRoles listOrganizationRoles(array $options = [])
 * @method ListOrganizationRoleUsers listOrganizationRoleUsers(array $options = [])
 * @method ListPortalMenuAuthorization listPortalMenuAuthorization(array $options = [])
 * @method ListPortalMenus listPortalMenus(array $options = [])
 * @method ListRecentViewReports listRecentViewReports(array $options = [])
 * @method ListSharedReports listSharedReports(array $options = [])
 * @method ListUserGroupsByUserId listUserGroupsByUserId(array $options = [])
 * @method ListWorkspaceRoles listWorkspaceRoles(array $options = [])
 * @method ListWorkspaceRoleUsers listWorkspaceRoleUsers(array $options = [])
 * @method ListWorkspaceUserRolesByUserId listWorkspaceUserRolesByUserId(array $options = [])
 * @method ManualRunMailTask manualRunMailTask(array $options = [])
 * @method ModifyApiDatasourceParameters modifyApiDatasourceParameters(array $options = [])
 * @method ModifyCopilotEmbedConfig modifyCopilotEmbedConfig(array $options = [])
 * @method QueryApprovalInfo queryApprovalInfo(array $options = [])
 * @method QueryAuditLog queryAuditLog(array $options = [])
 * @method QueryComponentPerformance queryComponentPerformance(array $options = [])
 * @method QueryCopilotEmbedConfig queryCopilotEmbedConfig(array $options = [])
 * @method QueryCubeOptimization queryCubeOptimization(array $options = [])
 * @method QueryCubePerformance queryCubePerformance(array $options = [])
 * @method QueryDashboardNl2sql queryDashboardNl2sql(array $options = [])
 * @method QueryData queryData(array $options = [])
 * @method QueryDataRange queryDataRange(array $options = [])
 * @method QueryDataService queryDataService(array $options = [])
 * @method QueryDataServiceList queryDataServiceList(array $options = [])
 * @method QueryDatasetDetailInfo queryDatasetDetailInfo(array $options = [])
 * @method QueryDatasetInfo queryDatasetInfo(array $options = [])
 * @method QueryDatasetList queryDatasetList(array $options = [])
 * @method QueryDatasetSmartqStatus queryDatasetSmartqStatus(array $options = [])
 * @method QueryDatasetSwitchInfo queryDatasetSwitchInfo(array $options = [])
 * @method QueryEmbeddedInfo queryEmbeddedInfo(array $options = [])
 * @method QueryEmbeddedStatus queryEmbeddedStatus(array $options = [])
 * @method QueryLastAccelerationEngineJob queryLastAccelerationEngineJob(array $options = [])
 * @method QueryLlmCubeWithThemeListByUserId queryLlmCubeWithThemeListByUserId(array $options = [])
 * @method QueryOrganizationRoleConfig queryOrganizationRoleConfig(array $options = [])
 * @method QueryOrganizationWorkspaceList queryOrganizationWorkspaceList(array $options = [])
 * @method QueryReadableResourcesListByUserId queryReadableResourcesListByUserId(array $options = [])
 * @method QueryReadableResourcesListByUserIdV2 queryReadableResourcesListByUserIdV2(array $options = [])
 * @method QueryReportPerformance queryReportPerformance(array $options = [])
 * @method QueryShareList queryShareList(array $options = [])
 * @method QuerySharesToUserList querySharesToUserList(array $options = [])
 * @method QuerySmartqPermissionByCubeId querySmartqPermissionByCubeId(array $options = [])
 * @method QueryTicketInfo queryTicketInfo(array $options = [])
 * @method QueryUserGroupListByParentId queryUserGroupListByParentId(array $options = [])
 * @method QueryUserGroupMember queryUserGroupMember(array $options = [])
 * @method QueryUserInfoByAccount queryUserInfoByAccount(array $options = [])
 * @method QueryUserInfoByUserId queryUserInfoByUserId(array $options = [])
 * @method QueryUserList queryUserList(array $options = [])
 * @method QueryUserRoleInfoInWorkspace queryUserRoleInfoInWorkspace(array $options = [])
 * @method QueryUserTagMetaList queryUserTagMetaList(array $options = [])
 * @method QueryUserTagValueList queryUserTagValueList(array $options = [])
 * @method QueryWorks queryWorks(array $options = [])
 * @method QueryWorksBloodRelationship queryWorksBloodRelationship(array $options = [])
 * @method QueryWorksByOrganization queryWorksByOrganization(array $options = [])
 * @method QueryWorksByWorkspace queryWorksByWorkspace(array $options = [])
 * @method QueryWorkspaceRoleConfig queryWorkspaceRoleConfig(array $options = [])
 * @method QueryWorkspaceUserList queryWorkspaceUserList(array $options = [])
 * @method ResultCallback resultCallback(array $options = [])
 * @method SaveFavorites saveFavorites(array $options = [])
 * @method SetDataLevelPermissionExtraConfig setDataLevelPermissionExtraConfig(array $options = [])
 * @method SetDataLevelPermissionRuleConfig setDataLevelPermissionRuleConfig(array $options = [])
 * @method SetDataLevelPermissionWhiteList setDataLevelPermissionWhiteList(array $options = [])
 * @method SmartqAuthorize smartqAuthorize(array $options = [])
 * @method SmartqAuthTransfer smartqAuthTransfer(array $options = [])
 * @method SmartqQueryAbility smartqQueryAbility(array $options = [])
 * @method UpdateCubeBySql updateCubeBySql(array $options = [])
 * @method UpdateDataLevelPermissionStatus updateDataLevelPermissionStatus(array $options = [])
 * @method UpdateDataSource updateDataSource(array $options = [])
 * @method UpdateEmbeddedStatus updateEmbeddedStatus(array $options = [])
 * @method UpdateTicketNum updateTicketNum(array $options = [])
 * @method UpdateUser updateUser(array $options = [])
 * @method UpdateUserGroup updateUserGroup(array $options = [])
 * @method UpdateUserTagMeta updateUserTagMeta(array $options = [])
 * @method UpdateUserTagValue updateUserTagValue(array $options = [])
 * @method UpdateWorkspaceUserRole updateWorkspaceUserRole(array $options = [])
 * @method UpdateWorkspaceUsersRole updateWorkspaceUsersRole(array $options = [])
 * @method WithdrawAllUserGroups withdrawAllUserGroups(array $options = [])
 */
class QuickbiPublicApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'quickbi-public';

    /** @var string */
    public $version = '2022-01-01';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = '2.2.0';
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getAddUserModel()
 * @method $this withAddUserModel($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 */
class AddDataLevelPermissionRuleUsers extends Rpc
{
}

/**
 * @method string getTargetType()
 * @method $this withTargetType($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getCubeId()
 * @method $this withCubeId($value)
 * @method string getTargetIds()
 * @method $this withTargetIds($value)
 * @method string getRuleType()
 * @method $this withRuleType($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getOperateType()
 * @method $this withOperateType($value)
 */
class AddDataLevelPermissionWhiteList extends Rpc
{
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getAddModel()
 * @method $this withAddModel($value)
 */
class AddDataSource extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getExpireDate()
 * @method $this withExpireDate($value)
 * @method string getAuthPoint()
 * @method $this withAuthPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getShareToType()
 * @method $this withShareToType($value)
 * @method string getWorksId()
 * @method $this withWorksId($value)
 * @method string getShareToId()
 * @method $this withShareToId($value)
 */
class AddShareReport extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getAdminUser()
 * @method $this withAdminUser($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getAccountType()
 * @method $this withAccountType($value)
 * @method string getAccountId()
 * @method $this withAccountId($value)
 * @method string getRoleIds()
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getNickName()
 * @method $this withNickName($value)
 * @method string getAuthAdminUser()
 * @method $this withAuthAdminUser($value)
 * @method string getEmail()
 * @method $this withEmail($value)
 * @method string getUserType()
 * @method $this withUserType($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getPhone()
 * @method $this withPhone($value)
 */
class AddUser extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRoleIds($value)
    {
        $this->data['RoleIds'] = $value;
        $this->options['form_params']['RoleIds'] = $value;

        return $this;
    }
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getUserIdList()
 * @method $this withUserIdList($value)
 * @method string getUserGroupId()
 * @method $this withUserGroupId($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 */
class AddUserGroupMember extends Rpc
{
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getUserGroupIds()
 * @method $this withUserGroupIds($value)
 */
class AddUserGroupMembers extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getTagName()
 * @method $this withTagName($value)
 * @method string getTagId()
 * @method $this withTagId($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getTagDescription()
 * @method $this withTagDescription($value)
 */
class AddUserTagMeta extends Rpc
{
}

/**
 * @method string getRoleId()
 * @method $this withRoleId($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getWorkspaceId()
 * @method $this withWorkspaceId($value)
 */
class AddUserToWorkspace extends Rpc
{
}

/**
 * @method string getRoleId()
 * @method $this withRoleId($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getUserIds()
 * @method $this withUserIds($value)
 * @method string getWorkspaceId()
 * @method $this withWorkspaceId($value)
 */
class AddWorkspaceUsers extends Rpc
{
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getCubeId()
 * @method $this withCubeId($value)
 */
class AllotDatasetAccelerationTask extends Rpc
{
}

/**
 * @method string getDataPortalId()
 * @method $this withDataPortalId($value)
 * @method string getAuthPointsValue()
 * @method $this withAuthPointsValue($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getMenuIds()
 * @method $this withMenuIds($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getUserGroupIds()
 * @method $this withUserGroupIds($value)
 * @method string getUserIds()
 * @method $this withUserIds($value)
 */
class AuthorizeMenu extends Rpc
{
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getIsAuthAdmin()
 * @method $this withIsAuthAdmin($value)
 * @method string getIsAdmin()
 * @method $this withIsAdmin($value)
 * @method string getUserType()
 * @method $this withUserType($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getUserGroupIds()
 * @method $this withUserGroupIds($value)
 * @method string getFeishuUsers()
 * @method $this withFeishuUsers($value)
 */
class BatchAddFeishuUsers extends Rpc
{
}

/**
 * @method string getDataPortalId()
 * @method $this withDataPortalId($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getMenuIds()
 * @method $this withMenuIds($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getUserGroupIds()
 * @method $this withUserGroupIds($value)
 * @method string getUserIds()
 * @method $this withUserIds($value)
 */
class CancelAuthorizationMenu extends Rpc
{
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getWorksId()
 * @method $this withWorksId($value)
 */
class CancelCollection extends Rpc
{
}

/**
 * @method string getReportId()
 * @method $this withReportId($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getShareToIds()
 * @method $this withShareToIds($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getShareToType()
 * @method $this withShareToType($value)
 */
class CancelReportShare extends Rpc
{
}

/**
 * @method string getDataPortalId()
 * @method $this withDataPortalId($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getMenuIds()
 * @method $this withMenuIds($value)
 * @method string getShowOnlyWithAccess()
 * @method $this withShowOnlyWithAccess($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 */
class ChangeVisibilityModel extends Rpc
{
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getCubeId()
 * @method $this withCubeId($value)
 */
class CheckDatasetExisted extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class CheckOrganizationMember extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getWorksId()
 * @method $this withWorksId($value)
 */
class CheckReadable extends Rpc
{
}

/**
 * @method string getDsId()
 * @method $this withDsId($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getCaption()
 * @method $this withCaption($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getCustomSql()
 * @method $this withCustomSql($value)
 * @method string getWorkspaceId()
 * @method $this withWorkspaceId($value)
 */
class CreateCubeBySql extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getDsId()
 * @method $this withDsId($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getTableName()
 * @method $this withTableName($value)
 * @method string getTargetDirectoryId()
 * @method $this withTargetDirectoryId($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getUserDefineCubeName()
 * @method $this withUserDefineCubeName($value)
 * @method string getWorkspaceId()
 * @method $this withWorkspaceId($value)
 */
class CreateDataset extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getAccountType()
 * @method $this withAccountType($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getExpireTime()
 * @method $this withExpireTime($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getCmptId()
 * @method $this withCmptId($value)
 * @method string getGlobalParam()
 * @method $this withGlobalParam($value)
 * @method string getWorksId()
 * @method $this withWorksId($value)
 * @method string getTicketNum()
 * @method $this withTicketNum($value)
 * @method string getWatermarkParam()
 * @method $this withWatermarkParam($value)
 */
class CreateTicket extends Rpc
{
}

/**
 * @method string getCopilotId()
 * @method $this withCopilotId($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getAccountType()
 * @method $this withAccountType($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getExpireTime()
 * @method $this withExpireTime($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getTicketNum()
 * @method $this withTicketNum($value)
 */
class CreateTicket4Copilot extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getUserGroupName()
 * @method $this withUserGroupName($value)
 * @method string getParentUserGroupId()
 * @method $this withParentUserGroupId($value)
 * @method string getUserGroupId()
 * @method $this withUserGroupId($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getUserGroupDescription()
 * @method $this withUserGroupDescription($value)
 */
class CreateUserGroup extends Rpc
{
}

/**
 * @method string getPromptForceOverride()
 * @method $this withPromptForceOverride($value)
 * @method string getData()
 * @method $this withData($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getUserQuestion()
 * @method $this withUserQuestion($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getUserPrompt()
 * @method $this withUserPrompt($value)
 * @method string getModelCode()
 * @method $this withModelCode($value)
 */
class DataInterpretation extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getDataSetIds()
 * @method $this withDataSetIds($value)
 * @method string getWorksType()
 * @method $this withWorksType($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 */
class DataSetBlood extends Rpc
{
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getDataSourceId()
 * @method $this withDataSourceId($value)
 */
class DataSourceBlood extends Rpc
{
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getExpireTime()
 * @method $this withExpireTime($value)
 * @method string getTicket()
 * @method $this withTicket($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 */
class DelayTicketExpireTime extends Rpc
{
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getDeleteUserModel()
 * @method $this withDeleteUserModel($value)
 */
class DeleteDataLevelPermissionRuleUsers extends Rpc
{
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getCubeId()
 * @method $this withCubeId($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getRuleId()
 * @method $this withRuleId($value)
 */
class DeleteDataLevelRuleConfig extends Rpc
{
}

/**
 * @method string getTicket()
 * @method $this withTicket($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 */
class DeleteTicket extends Rpc
{
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getTransferUserId()
 * @method $this withTransferUserId($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 */
class DeleteUser extends Rpc
{
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getWorkspaceId()
 * @method $this withWorkspaceId($value)
 */
class DeleteUserFromWorkspace extends Rpc
{
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getUserGroupId()
 * @method $this withUserGroupId($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 */
class DeleteUserGroup extends Rpc
{
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getUserGroupId()
 * @method $this withUserGroupId($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 */
class DeleteUserGroupMember extends Rpc
{
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getUserGroupIds()
 * @method $this withUserGroupIds($value)
 */
class DeleteUserGroupMembers extends Rpc
{
}

/**
 * @method string getTagId()
 * @method $this withTagId($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 */
class DeleteUserTagMeta extends Rpc
{
}

/**
 * @method string getDsId()
 * @method $this withDsId($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 */
class GetDataSourceConnectionInfo extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getMailId()
 * @method $this withMailId($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 */
class GetMailTaskStatus extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 */
class GetUserGroupInfo extends Rpc
{
}

/**
 * @method string getWsId()
 * @method $this withWsId($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 * @method string getWorksType()
 * @method $this withWorksType($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 */
class GetWorksEmbedList extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getKeyWord()
 * @method $this withKeyWord($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getWorkspaceId()
 * @method $this withWorkspaceId($value)
 */
class ListApiDatasource extends Rpc
{
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getUserGroupIds()
 * @method $this withUserGroupIds($value)
 */
class ListByUserGroupId extends Rpc
{
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class ListCollections extends Rpc
{
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getCubeId()
 * @method $this withCubeId($value)
 * @method string getRuleType()
 * @method $this withRuleType($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 */
class ListCubeDataLevelPermissionConfig extends Rpc
{
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getCubeId()
 * @method $this withCubeId($value)
 * @method string getRuleType()
 * @method $this withRuleType($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 */
class ListDataLevelPermissionWhiteList extends Rpc
{
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getDsType()
 * @method $this withDsType($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getWorkspaceId()
 * @method $this withWorkspaceId($value)
 */
class ListDataSource extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getTreeType()
 * @method $this withTreeType($value)
 */
class ListFavoriteReports extends Rpc
{
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 */
class ListOrganizationRoles extends Rpc
{
}

/**
 * @method string getRoleId()
 * @method $this withRoleId($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 */
class ListOrganizationRoleUsers extends Rpc
{
}

/**
 * @method string getDataPortalId()
 * @method $this withDataPortalId($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 */
class ListPortalMenuAuthorization extends Rpc
{
}

/**
 * @method string getDataPortalId()
 * @method $this withDataPortalId($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 */
class ListPortalMenus extends Rpc
{
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getOffsetDay()
 * @method $this withOffsetDay($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getQueryMode()
 * @method $this withQueryMode($value)
 * @method string getTreeType()
 * @method $this withTreeType($value)
 */
class ListRecentViewReports extends Rpc
{
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getTreeType()
 * @method $this withTreeType($value)
 */
class ListSharedReports extends Rpc
{
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class ListUserGroupsByUserId extends Rpc
{
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getWorkspaceId()
 * @method $this withWorkspaceId($value)
 */
class ListWorkspaceRoles extends Rpc
{
}

/**
 * @method string getRoleId()
 * @method $this withRoleId($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getWorkspaceId()
 * @method $this withWorkspaceId($value)
 */
class ListWorkspaceRoleUsers extends Rpc
{
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class ListWorkspaceUserRolesByUserId extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getMailId()
 * @method $this withMailId($value)
 */
class ManualRunMailTask extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getParameters()
 * @method $this withParameters($value)
 * @method string getApiId()
 * @method $this withApiId($value)
 * @method string getWorkspaceId()
 * @method $this withWorkspaceId($value)
 */
class ModifyApiDatasourceParameters extends Rpc
{
}

/**
 * @method string getCopilotId()
 * @method $this withCopilotId($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getDataRange()
 * @method $this withDataRange($value)
 * @method string getModuleName()
 * @method $this withModuleName($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getAgentName()
 * @method $this withAgentName($value)
 */
class ModifyCopilotEmbedConfig extends Rpc
{
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getPage()
 * @method $this withPage($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class QueryApprovalInfo extends Rpc
{
}

/**
 * @method string getAccessSourceFlag()
 * @method $this withAccessSourceFlag($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getStartDate()
 * @method $this withStartDate($value)
 * @method string getLogType()
 * @method $this withLogType($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getOperatorTypes()
 * @method $this withOperatorTypes($value)
 * @method string getEndDate()
 * @method $this withEndDate($value)
 * @method string getOperatorId()
 * @method $this withOperatorId($value)
 * @method string getWorkspaceId()
 * @method $this withWorkspaceId($value)
 * @method string getUserAccessDevice()
 * @method $this withUserAccessDevice($value)
 */
class QueryAuditLog extends Rpc
{
}

/**
 * @method string getReportId()
 * @method $this withReportId($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCostTimeAvgMin()
 * @method $this withCostTimeAvgMin($value)
 * @method string getQueryType()
 * @method $this withQueryType($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getWorkspaceId()
 * @method $this withWorkspaceId($value)
 */
class QueryComponentPerformance extends Rpc
{
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 */
class QueryCopilotEmbedConfig extends Rpc
{
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getWorkspaceId()
 * @method $this withWorkspaceId($value)
 */
class QueryCubeOptimization extends Rpc
{
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCostTimeAvgMin()
 * @method $this withCostTimeAvgMin($value)
 * @method string getQueryType()
 * @method $this withQueryType($value)
 * @method string getCubeId()
 * @method $this withCubeId($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getWorkspaceId()
 * @method $this withWorkspaceId($value)
 */
class QueryCubePerformance extends Rpc
{
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getWorkspaceId()
 * @method $this withWorkspaceId($value)
 */
class QueryDashboardNl2sql extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getReturnFields()
 * @method $this withReturnFields($value)
 * @method string getConditions()
 * @method $this withConditions($value)
 * @method string getApiId()
 * @method $this withApiId($value)
 */
class QueryData extends Rpc
{
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 */
class QueryDataRange extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getReturnFields()
 * @method $this withReturnFields($value)
 * @method string getConditions()
 * @method $this withConditions($value)
 * @method string getApiId()
 * @method $this withApiId($value)
 */
class QueryDataService extends Rpc
{
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getName()
 * @method $this withName($value)
 */
class QueryDataServiceList extends Rpc
{
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getDatasetId()
 * @method $this withDatasetId($value)
 */
class QueryDatasetDetailInfo extends Rpc
{
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getDatasetId()
 * @method $this withDatasetId($value)
 */
class QueryDatasetInfo extends Rpc
{
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDirectoryId()
 * @method $this withDirectoryId($value)
 * @method string getWithChildren()
 * @method $this withWithChildren($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getWorkspaceId()
 * @method $this withWorkspaceId($value)
 */
class QueryDatasetList extends Rpc
{
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getCubeId()
 * @method $this withCubeId($value)
 */
class QueryDatasetSmartqStatus extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getCubeId()
 * @method $this withCubeId($value)
 */
class QueryDatasetSwitchInfo extends Rpc
{
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 */
class QueryEmbeddedInfo extends Rpc
{
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getWorksId()
 * @method $this withWorksId($value)
 */
class QueryEmbeddedStatus extends Rpc
{
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getCubeId()
 * @method $this withCubeId($value)
 */
class QueryLastAccelerationEngineJob extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class QueryLlmCubeWithThemeListByUserId extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getRoleId()
 * @method $this withRoleId($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 */
class QueryOrganizationRoleConfig extends Rpc
{
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 */
class QueryOrganizationWorkspaceList extends Rpc
{
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class QueryReadableResourcesListByUserId extends Rpc
{
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getWorkType()
 * @method $this withWorkType($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getWorkspaceId()
 * @method $this withWorkspaceId($value)
 */
class QueryReadableResourcesListByUserIdV2 extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getReportId()
 * @method $this withReportId($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCostTimeAvgMin()
 * @method $this withCostTimeAvgMin($value)
 * @method string getQueryType()
 * @method $this withQueryType($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getWorkspaceId()
 * @method $this withWorkspaceId($value)
 */
class QueryReportPerformance extends Rpc
{
}

/**
 * @method string getReportId()
 * @method $this withReportId($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 */
class QueryShareList extends Rpc
{
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class QuerySharesToUserList extends Rpc
{
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getCubeId()
 * @method $this withCubeId($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 */
class QuerySmartqPermissionByCubeId extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getTicket()
 * @method $this withTicket($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 */
class QueryTicketInfo extends Rpc
{
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getParentUserGroupId()
 * @method $this withParentUserGroupId($value)
 */
class QueryUserGroupListByParentId extends Rpc
{
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 * @method string getUserGroupId()
 * @method $this withUserGroupId($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 */
class QueryUserGroupMember extends Rpc
{
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getAccountType()
 * @method $this withAccountType($value)
 * @method string getParentAccountName()
 * @method $this withParentAccountName($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getAccount()
 * @method $this withAccount($value)
 */
class QueryUserInfoByAccount extends Rpc
{
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class QueryUserInfoByUserId extends Rpc
{
}

/**
 * @method string getAccountType()
 * @method $this withAccountType($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 */
class QueryUserList extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getWorkspaceId()
 * @method $this withWorkspaceId($value)
 */
class QueryUserRoleInfoInWorkspace extends Rpc
{
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 */
class QueryUserTagMetaList extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class QueryUserTagValueList extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getApiLevel()
 * @method $this withApiLevel($value)
 * @method string getWorksId()
 * @method $this withWorksId($value)
 */
class QueryWorks extends Rpc
{
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getApiLevel()
 * @method $this withApiLevel($value)
 * @method string getWorksId()
 * @method $this withWorksId($value)
 */
class QueryWorksBloodRelationship extends Rpc
{
}

/**
 * @method string getThirdPartAuthFlag()
 * @method $this withThirdPartAuthFlag($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getWorksType()
 * @method $this withWorksType($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class QueryWorksByOrganization extends Rpc
{
}

/**
 * @method string getThirdPartAuthFlag()
 * @method $this withThirdPartAuthFlag($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getWorksType()
 * @method $this withWorksType($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getWorkspaceId()
 * @method $this withWorkspaceId($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class QueryWorksByWorkspace extends Rpc
{
}

/**
 * @method string getRoleId()
 * @method $this withRoleId($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 */
class QueryWorkspaceRoleConfig extends Rpc
{
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getWorkspaceId()
 * @method $this withWorkspaceId($value)
 */
class QueryWorkspaceUserList extends Rpc
{
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getHandleReason()
 * @method $this withHandleReason($value)
 * @method string getApplicationId()
 * @method $this withApplicationId($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ResultCallback extends Rpc
{
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getWorksType()
 * @method $this withWorksType($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getWorksId()
 * @method $this withWorksId($value)
 */
class SaveFavorites extends Rpc
{
}

/**
 * @method string getMissHitPolicy()
 * @method $this withMissHitPolicy($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getCubeId()
 * @method $this withCubeId($value)
 * @method string getRuleType()
 * @method $this withRuleType($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 */
class SetDataLevelPermissionExtraConfig extends Rpc
{
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getRuleModel()
 * @method $this withRuleModel($value)
 */
class SetDataLevelPermissionRuleConfig extends Rpc
{
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getWhiteListModel()
 * @method $this withWhiteListModel($value)
 */
class SetDataLevelPermissionWhiteList extends Rpc
{
}

/**
 * @method string getLlmCubeThemes()
 * @method $this withLlmCubeThemes($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getLlmCubes()
 * @method $this withLlmCubes($value)
 * @method string getCubeIds()
 * @method $this withCubeIds($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getOperationType()
 * @method $this withOperationType($value)
 * @method string getExpireDay()
 * @method $this withExpireDay($value)
 * @method string getUserIds()
 * @method $this withUserIds($value)
 */
class SmartqAuthorize extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getTargetUserIds()
 * @method $this withTargetUserIds($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getOriginUserId()
 * @method $this withOriginUserId($value)
 */
class SmartqAuthTransfer extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getUserQuestion()
 * @method $this withUserQuestion($value)
 * @method string getCubeId()
 * @method $this withCubeId($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 */
class SmartqQueryAbility extends Rpc
{
}

/**
 * @method string getDsId()
 * @method $this withDsId($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getCubeId()
 * @method $this withCubeId($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getCustomSql()
 * @method $this withCustomSql($value)
 * @method string getWorkspaceId()
 * @method $this withWorkspaceId($value)
 */
class UpdateCubeBySql extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getIsOpen()
 * @method $this withIsOpen($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getCubeId()
 * @method $this withCubeId($value)
 * @method string getRuleType()
 * @method $this withRuleType($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 */
class UpdateDataLevelPermissionStatus extends Rpc
{
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getUpdateModel()
 * @method $this withUpdateModel($value)
 */
class UpdateDataSource extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getThirdPartAuthFlag()
 * @method $this withThirdPartAuthFlag($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getWorksId()
 * @method $this withWorksId($value)
 */
class UpdateEmbeddedStatus extends Rpc
{
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getTicket()
 * @method $this withTicket($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getTicketNum()
 * @method $this withTicketNum($value)
 */
class UpdateTicketNum extends Rpc
{
}

/**
 * @method string getAdminUser()
 * @method $this withAdminUser($value)
 * @method string getAccountType()
 * @method $this withAccountType($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getIsDeleted()
 * @method $this withIsDeleted($value)
 * @method string getRoleIds()
 * @method $this withRoleIds($value)
 * @method string getNickName()
 * @method $this withNickName($value)
 * @method string getAuthAdminUser()
 * @method $this withAuthAdminUser($value)
 * @method string getEmail()
 * @method $this withEmail($value)
 * @method string getUserType()
 * @method $this withUserType($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getPhone()
 * @method $this withPhone($value)
 */
class UpdateUser extends Rpc
{
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getUserGroupName()
 * @method $this withUserGroupName($value)
 * @method string getUserGroupId()
 * @method $this withUserGroupId($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getUserGroupDescription()
 * @method $this withUserGroupDescription($value)
 */
class UpdateUserGroup extends Rpc
{
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getTagName()
 * @method $this withTagName($value)
 * @method string getTagId()
 * @method $this withTagId($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getTagDescription()
 * @method $this withTagDescription($value)
 */
class UpdateUserTagMeta extends Rpc
{
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getTagValue()
 * @method $this withTagValue($value)
 * @method string getTagId()
 * @method $this withTagId($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 */
class UpdateUserTagValue extends Rpc
{
}

/**
 * @method string getRoleId()
 * @method $this withRoleId($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getRoleIds()
 * @method $this withRoleIds($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getWorkspaceId()
 * @method $this withWorkspaceId($value)
 */
class UpdateWorkspaceUserRole extends Rpc
{
}

/**
 * @method string getRoleId()
 * @method $this withRoleId($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getUserIds()
 * @method $this withUserIds($value)
 * @method string getWorkspaceId()
 * @method $this withWorkspaceId($value)
 */
class UpdateWorkspaceUsersRole extends Rpc
{
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class WithdrawAllUserGroups extends Rpc
{
}
