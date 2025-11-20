<?php

namespace AlibabaCloud\Itag\V20210517;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AbandonItem abandonItem(array $options = [])
 * @method AbandonItemByAdmin abandonItemByAdmin(array $options = [])
 * @method AcceptSamplingTask acceptSamplingTask(array $options = [])
 * @method AddMemberOrGroupTask addMemberOrGroupTask(array $options = [])
 * @method AddUser addUser(array $options = [])
 * @method AddUserToGroup addUserToGroup(array $options = [])
 * @method AddUserToTnt addUserToTnt(array $options = [])
 * @method AppendDataToDataset appendDataToDataset(array $options = [])
 * @method AsyncDownloadMarkResult asyncDownloadMarkResult(array $options = [])
 * @method BatchRejectTask batchRejectTask(array $options = [])
 * @method CanCommit canCommit(array $options = [])
 * @method CheckModel checkModel(array $options = [])
 * @method CommitSubTask commitSubTask(array $options = [])
 * @method CreateDataset createDataset(array $options = [])
 * @method CreateModel createModel(array $options = [])
 * @method CreateOptionTemplate createOptionTemplate(array $options = [])
 * @method CreateOrUpdateTntConfig createOrUpdateTntConfig(array $options = [])
 * @method CreateTask createTask(array $options = [])
 * @method CreateUserGroup createUserGroup(array $options = [])
 * @method DeleteFeedback deleteFeedback(array $options = [])
 * @method DeleteModel deleteModel(array $options = [])
 * @method DeleteOptionTemplate deleteOptionTemplate(array $options = [])
 * @method DeleteTask deleteTask(array $options = [])
 * @method DeleteUserGroup deleteUserGroup(array $options = [])
 * @method DiscardSubTask discardSubTask(array $options = [])
 * @method DownloadIntPersonSummary downloadIntPersonSummary(array $options = [])
 * @method ExportOptionTemplate exportOptionTemplate(array $options = [])
 * @method ExtendUserAuthInTask extendUserAuthInTask(array $options = [])
 * @method FetchVideoMarkResult fetchVideoMarkResult(array $options = [])
 * @method FlowInstanceCallback flowInstanceCallback(array $options = [])
 * @method GetAssignedCheckTaskSummary getAssignedCheckTaskSummary(array $options = [])
 * @method GetBizPersonSummary getBizPersonSummary(array $options = [])
 * @method GetBizSummary getBizSummary(array $options = [])
 * @method GetCheckUserDetail getCheckUserDetail(array $options = [])
 * @method GetCheckUserEfficiency getCheckUserEfficiency(array $options = [])
 * @method GetCheckUserSummary getCheckUserSummary(array $options = [])
 * @method GetCommitSummary getCommitSummary(array $options = [])
 * @method GetDatasetProxy getDatasetProxy(array $options = [])
 * @method GetFlowJob getFlowJob(array $options = [])
 * @method GetGroupHandlingSummary getGroupHandlingSummary(array $options = [])
 * @method GetGroupTaskDetail getGroupTaskDetail(array $options = [])
 * @method GetGroupTaskPersonDetail getGroupTaskPersonDetail(array $options = [])
 * @method GetHistoryMarkResult getHistoryMarkResult(array $options = [])
 * @method GetIntWholeSummary getIntWholeSummary(array $options = [])
 * @method GetMarkPersonDetail getMarkPersonDetail(array $options = [])
 * @method GetMarkPersonHandlingSummary getMarkPersonHandlingSummary(array $options = [])
 * @method GetMarkQuantity getMarkQuantity(array $options = [])
 * @method GetMarkResult getMarkResult(array $options = [])
 * @method GetMarkUserDetail getMarkUserDetail(array $options = [])
 * @method GetMarkUserEfficiency getMarkUserEfficiency(array $options = [])
 * @method GetMarkUserSummary getMarkUserSummary(array $options = [])
 * @method GetModelById getModelById(array $options = [])
 * @method GetOptionTemplate getOptionTemplate(array $options = [])
 * @method GetOrCreateTntInstByBizNo getOrCreateTntInstByBizNo(array $options = [])
 * @method GetPersonSummary getPersonSummary(array $options = [])
 * @method GetSamplingSummary getSamplingSummary(array $options = [])
 * @method GetSubTaskDownloadSystemResult getSubTaskDownloadSystemResult(array $options = [])
 * @method GetSubTaskDownloadUserResult getSubTaskDownloadUserResult(array $options = [])
 * @method GetSubTaskSummary getSubTaskSummary(array $options = [])
 * @method GetTask getTask(array $options = [])
 * @method GetTaskPersonSummary getTaskPersonSummary(array $options = [])
 * @method GetTaskProcessInfo getTaskProcessInfo(array $options = [])
 * @method GetTaskStatTypes getTaskStatTypes(array $options = [])
 * @method GetTaskSummary getTaskSummary(array $options = [])
 * @method GetTntConfListValue getTntConfListValue(array $options = [])
 * @method GetTntUserRole getTntUserRole(array $options = [])
 * @method GetUpdateTime getUpdateTime(array $options = [])
 * @method GetUser getUser(array $options = [])
 * @method GetUserMarkItemInfo getUserMarkItemInfo(array $options = [])
 * @method ImportOptionTemplate importOptionTemplate(array $options = [])
 * @method InitSamplingUserSubTask initSamplingUserSubTask(array $options = [])
 * @method ListAssignedSubUserTask listAssignedSubUserTask(array $options = [])
 * @method ListCheckTask listCheckTask(array $options = [])
 * @method ListDatasetFields listDatasetFields(array $options = [])
 * @method ListFinishedSubUserTask listFinishedSubUserTask(array $options = [])
 * @method ListMarkableTask listMarkableTask(array $options = [])
 * @method ListSamplingHandlerUser listSamplingHandlerUser(array $options = [])
 * @method ListSamplingResultMeta listSamplingResultMeta(array $options = [])
 * @method ListSamplingUsers listSamplingUsers(array $options = [])
 * @method ListTntConfig listTntConfig(array $options = [])
 * @method ListWorkNodeUsers listWorkNodeUsers(array $options = [])
 * @method ManualCalReport manualCalReport(array $options = [])
 * @method MngReleaseUserSubTask mngReleaseUserSubTask(array $options = [])
 * @method OfflineTask offlineTask(array $options = [])
 * @method OnlineTask onlineTask(array $options = [])
 * @method PageViewDataMeta pageViewDataMeta(array $options = [])
 * @method PageViewDatasetProxy pageViewDatasetProxy(array $options = [])
 * @method PageViewFlowJob pageViewFlowJob(array $options = [])
 * @method PageViewModel pageViewModel(array $options = [])
 * @method PageViewMyTnt pageViewMyTnt(array $options = [])
 * @method PageViewOptionTemplate pageViewOptionTemplate(array $options = [])
 * @method PageviewSubTask pageviewSubTask(array $options = [])
 * @method PageViewSubTaskItem pageViewSubTaskItem(array $options = [])
 * @method PageViewTask pageViewTask(array $options = [])
 * @method PageViewTntUser pageViewTntUser(array $options = [])
 * @method PageViewUser pageViewUser(array $options = [])
 * @method PageViewUserGroup pageViewUserGroup(array $options = [])
 * @method PollingSampleMarkItems pollingSampleMarkItems(array $options = [])
 * @method PreviewTaskTemplate previewTaskTemplate(array $options = [])
 * @method ProxyRobotService proxyRobotService(array $options = [])
 * @method QueryMarkableSubTask queryMarkableSubTask(array $options = [])
 * @method QuerySampleMarkItems querySampleMarkItems(array $options = [])
 * @method QuerySamplingPoolSize querySamplingPoolSize(array $options = [])
 * @method QuerySkipUserSubTask querySkipUserSubTask(array $options = [])
 * @method RejectSamplingTask rejectSamplingTask(array $options = [])
 * @method RejectSubTask rejectSubTask(array $options = [])
 * @method ReleaseUserSubTask releaseUserSubTask(array $options = [])
 * @method RemoveMemberOrGroupTask removeMemberOrGroupTask(array $options = [])
 * @method RemoveUserInGroup removeUserInGroup(array $options = [])
 * @method RemoveUserInTnt removeUserInTnt(array $options = [])
 * @method SamplingSubUserTaskList samplingSubUserTaskList(array $options = [])
 * @method SkipFinished skipFinished(array $options = [])
 * @method SkipUserSubTask skipUserSubTask(array $options = [])
 * @method TaskStageStat taskStageStat(array $options = [])
 * @method TestRequest testRequest(array $options = [])
 * @method TransferUserSubTask transferUserSubTask(array $options = [])
 * @method UnpassFeedback unpassFeedback(array $options = [])
 * @method UpdateDatasetStateMsg updateDatasetStateMsg(array $options = [])
 * @method UpdateMarkResult updateMarkResult(array $options = [])
 * @method UpdateMarkResultByAdmin updateMarkResultByAdmin(array $options = [])
 * @method UpdateModel updateModel(array $options = [])
 * @method UpdateTask updateTask(array $options = [])
 * @method UpdateTaskData updateTaskData(array $options = [])
 * @method UpdateTaskTemplate updateTaskTemplate(array $options = [])
 * @method UpdateTemplate updateTemplate(array $options = [])
 * @method UpdateUserName updateUserName(array $options = [])
 * @method UpdateUserRoleInTnt updateUserRoleInTnt(array $options = [])
 * @method UserSubTaskTimer userSubTaskTimer(array $options = [])
 */
class ItagApiResolver extends ApiResolver
{
}

class Roa extends \AlibabaCloud\Client\Resolver\Roa
{
    /** @var string */
    public $product = 'Itag';

    /** @var string */
    public $version = '2021-05-17';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getBody()
 */
class AbandonItem extends Roa
{
    /** @var string */
    public $pathPattern = '/work/api/v1/markitem/abandonItem';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class AbandonItemByAdmin extends Roa
{
    /** @var string */
    public $pathPattern = '/work/api/v1/markitem/abandonItemByAdmin';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class AcceptSamplingTask extends Roa
{
    /** @var string */
    public $pathPattern = '/work/api/v1/sampling/accept';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class AddMemberOrGroupTask extends Roa
{
    /** @var string */
    public $pathPattern = '/mng/api/v1/task/addMemberOrGroup2Task';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class AddUser extends Roa
{
    /** @var string */
    public $pathPattern = '/mng/api/v1/user/addUser';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class AddUserToGroup extends Roa
{
    /** @var string */
    public $pathPattern = '/mng/api/v1/usergroup/addUserToGroup';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class AddUserToTnt extends Roa
{
    /** @var string */
    public $pathPattern = '/mng/api/v1/tnt/addUserToTnt';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class AppendDataToDataset extends Roa
{
    /** @var string */
    public $pathPattern = '/mng/api/v1/dataproxy/appendData2Dataset';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class AsyncDownloadMarkResult extends Roa
{
    /** @var string */
    public $pathPattern = '/mng/api/v1/markresult/asyncDownloadMarkResult';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class BatchRejectTask extends Roa
{
    /** @var string */
    public $pathPattern = '/work/api/v1/usersubtask/batchRejectTask';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class CanCommit extends Roa
{
    /** @var string */
    public $pathPattern = '/work/api/v1/usersubtask/canCommit';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class CheckModel extends Roa
{
    /** @var string */
    public $pathPattern = '/mng/api/v1/model/check';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class CommitSubTask extends Roa
{
    /** @var string */
    public $pathPattern = '/work/api/v1/usersubtask/commit';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

class CreateDataset extends Roa
{
    /** @var string */
    public $pathPattern = '/mng/api/v1/datasets/createDataset';
}

/**
 * @method string getBody()
 */
class CreateModel extends Roa
{
    /** @var string */
    public $pathPattern = '/mng/api/v1/model/create';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getClientToken()
 * @method string getBody()
 */
class CreateOptionTemplate extends Roa
{
    /** @var string */
    public $pathPattern = '/mng/api/v1/template/createTemplate';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['query']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class CreateOrUpdateTntConfig extends Roa
{
    /** @var string */
    public $pathPattern = '/mng/api/v1/tnt/createOrUpdateTntConfig';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

class CreateTask extends Roa
{
    /** @var string */
    public $pathPattern = '/mng/api/v1/task/createTask';
}

/**
 * @method string getBody()
 */
class CreateUserGroup extends Roa
{
    /** @var string */
    public $pathPattern = '/mng/api/v1/usergroup/createUserGroup';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class DeleteFeedback extends Roa
{
    /** @var string */
    public $pathPattern = '/work/api/v1/markitem/deleteFeedback';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class DeleteModel extends Roa
{
    /** @var string */
    public $pathPattern = '/mng/api/v1/model/delete';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getClientToken()
 * @method string getBody()
 */
class DeleteOptionTemplate extends Roa
{
    /** @var string */
    public $pathPattern = '/mng/api/v1/template/deleteTemplate';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['query']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class DeleteTask extends Roa
{
    /** @var string */
    public $pathPattern = '/mng/api/v1/task/delete';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class DeleteUserGroup extends Roa
{
    /** @var string */
    public $pathPattern = '/mng/api/v1/usergroup/deleteUserGroup';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class DiscardSubTask extends Roa
{
    /** @var string */
    public $pathPattern = '/mng/api/v1/usersubtask/discardSubTask';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class DownloadIntPersonSummary extends Roa
{
    /** @var string */
    public $pathPattern = '/mng/api/v1/report/downloadIntPersonSummary';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class ExportOptionTemplate extends Roa
{
    /** @var string */
    public $pathPattern = '/mng/api/v1/template/exportTemplate';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

class ExtendUserAuthInTask extends Roa
{
    /** @var string */
    public $pathPattern = '/mng/api/v1/task/extendUserAuthInTask';
}

/**
 * @method string getBody()
 */
class FetchVideoMarkResult extends Roa
{
    /** @var string */
    public $pathPattern = '/work/api/v1/markresult/fetchMarkResult';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class FlowInstanceCallback extends Roa
{
    /** @var string */
    public $pathPattern = '/inner/api/v1/flow/instance/callback';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class GetAssignedCheckTaskSummary extends Roa
{
    /** @var string */
    public $pathPattern = '/work/api/v1/usersubtask/getAssignedCheckTaskSummary';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class GetBizPersonSummary extends Roa
{
    /** @var string */
    public $pathPattern = '/mng/api/v1/report/getBizPersonSummary';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class GetBizSummary extends Roa
{
    /** @var string */
    public $pathPattern = '/mng/api/v1/report/getBizSummary';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class GetCheckUserDetail extends Roa
{
    /** @var string */
    public $pathPattern = '/mng/api/v1/report/getCheckUserDetail';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class GetCheckUserEfficiency extends Roa
{
    /** @var string */
    public $pathPattern = '/mng/api/v1/report/getCheckUserEfficiency';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class GetCheckUserSummary extends Roa
{
    /** @var string */
    public $pathPattern = '/mng/api/v1/report/getCheckUserSummary';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class GetCommitSummary extends Roa
{
    /** @var string */
    public $pathPattern = '/work/api/v1/sampling/getCommitSummary';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class GetDatasetProxy extends Roa
{
    /** @var string */
    public $pathPattern = '/mng/api/v1/dataproxy/getDatasetProxy';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class GetFlowJob extends Roa
{
    /** @var string */
    public $pathPattern = '/mng/api/v1/flowjob/getFlowJob';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class GetGroupHandlingSummary extends Roa
{
    /** @var string */
    public $pathPattern = '/mng/api/v1/report/getGroupHandlingSummary';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class GetGroupTaskDetail extends Roa
{
    /** @var string */
    public $pathPattern = '/mng/api/v1/report/getGroupTaskDetail';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class GetGroupTaskPersonDetail extends Roa
{
    /** @var string */
    public $pathPattern = '/mng/api/v1/report/getGroupTaskPersonDetail';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class GetHistoryMarkResult extends Roa
{
    /** @var string */
    public $pathPattern = '/work/api/v1/markitem/getHistoryMarkResult';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class GetIntWholeSummary extends Roa
{
    /** @var string */
    public $pathPattern = '/mng/api/v1/report/getIntWholeSummary';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class GetMarkPersonDetail extends Roa
{
    /** @var string */
    public $pathPattern = '/work/api/v1/report/getMarkPersonDetail';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class GetMarkPersonHandlingSummary extends Roa
{
    /** @var string */
    public $pathPattern = '/work/api/v1/report/getMarkPersonHandlingSummary';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class GetMarkQuantity extends Roa
{
    /** @var string */
    public $pathPattern = '/mng/api/v1/report/getMarkQuantity';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class GetMarkResult extends Roa
{
    /** @var string */
    public $pathPattern = '/mng/api/v1/report/getMarkResult';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class GetMarkUserDetail extends Roa
{
    /** @var string */
    public $pathPattern = '/mng/api/v1/report/getMarkUserDetail';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class GetMarkUserEfficiency extends Roa
{
    /** @var string */
    public $pathPattern = '/mng/api/v1/report/getMarkUserEfficiency';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class GetMarkUserSummary extends Roa
{
    /** @var string */
    public $pathPattern = '/mng/api/v1/report/getMarkUserSummary';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class GetModelById extends Roa
{
    /** @var string */
    public $pathPattern = '/mng/api/v1/model/queryById';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class GetOptionTemplate extends Roa
{
    /** @var string */
    public $pathPattern = '/mng/api/v1/template/getTemplate';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class GetOrCreateTntInstByBizNo extends Roa
{
    /** @var string */
    public $pathPattern = '/mng/api/v1/tnt/getOrCreateTntInstByBizNo';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class GetPersonSummary extends Roa
{
    /** @var string */
    public $pathPattern = '/mng/api/v1/report/getPersonSummary';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class GetSamplingSummary extends Roa
{
    /** @var string */
    public $pathPattern = '/work/api/v1/sampling/getSamplingSummary';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class GetSubTaskDownloadSystemResult extends Roa
{
    /** @var string */
    public $pathPattern = '/mng/api/v1/markresult/getSubTaskDownloadSystemResult';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class GetSubTaskDownloadUserResult extends Roa
{
    /** @var string */
    public $pathPattern = '/mng/api/v1/markresult/getSubTaskDownloadUserResult';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class GetSubTaskSummary extends Roa
{
    /** @var string */
    public $pathPattern = '/work/api/v1/usersubtask/getSubTaskSummary';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class GetTask extends Roa
{
    /** @var string */
    public $pathPattern = '/mng/api/v1/task/getTask';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class GetTaskPersonSummary extends Roa
{
    /** @var string */
    public $pathPattern = '/mng/api/v1/report/getTaskPersonSummary';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class GetTaskProcessInfo extends Roa
{
    /** @var string */
    public $pathPattern = '/mng/api/v1/task/getTaskProcessInfo';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class GetTaskStatTypes extends Roa
{
    /** @var string */
    public $pathPattern = '/mng/api/v1/report/getTaskStatTypes';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class GetTaskSummary extends Roa
{
    /** @var string */
    public $pathPattern = '/mng/api/v1/report/getTaskSummary';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class GetTntConfListValue extends Roa
{
    /** @var string */
    public $pathPattern = '/mng/api/v1/tnt/getTntConfListValue';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class GetTntUserRole extends Roa
{
    /** @var string */
    public $pathPattern = '/mng/api/v1/tnt/getTntUserRole';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class GetUpdateTime extends Roa
{
    /** @var string */
    public $pathPattern = '/mng/api/v1/report/getUpdateTime';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class GetUser extends Roa
{
    /** @var string */
    public $pathPattern = '/mng/api/v1/user/getUser';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class GetUserMarkItemInfo extends Roa
{
    /** @var string */
    public $pathPattern = '/work/api/v1/markitem/getUserMarkItemInfo';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class ImportOptionTemplate extends Roa
{
    /** @var string */
    public $pathPattern = '/mng/api/v1/template/importTemplate';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class InitSamplingUserSubTask extends Roa
{
    /** @var string */
    public $pathPattern = '/work/api/v1/sampling/initUserSubTask';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class ListAssignedSubUserTask extends Roa
{
    /** @var string */
    public $pathPattern = '/work/api/v1/task/listAssignedSubUserTask';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class ListCheckTask extends Roa
{
    /** @var string */
    public $pathPattern = '/work/api/v1/usersubtask/listCheckTask';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class ListDatasetFields extends Roa
{
    /** @var string */
    public $pathPattern = '/mng/api/v1/dataproxy/listDatasetFields';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class ListFinishedSubUserTask extends Roa
{
    /** @var string */
    public $pathPattern = '/work/api/v1/task/listFinishedSubUserTask';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class ListMarkableTask extends Roa
{
    /** @var string */
    public $pathPattern = '/work/api/v1/task/listMarkableTask';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class ListSamplingHandlerUser extends Roa
{
    /** @var string */
    public $pathPattern = '/work/api/v1/sampling/listHandlerUsers';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class ListSamplingResultMeta extends Roa
{
    /** @var string */
    public $pathPattern = '/work/api/v1/sampling/listResultMeta';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class ListSamplingUsers extends Roa
{
    /** @var string */
    public $pathPattern = '/work/api/v1/task/listSamplingUsers';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class ListTntConfig extends Roa
{
    /** @var string */
    public $pathPattern = '/mng/api/v1/tnt/listTntConfig';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class ListWorkNodeUsers extends Roa
{
    /** @var string */
    public $pathPattern = '/mng/api/v1/task/listWorkNodeUsers';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class ManualCalReport extends Roa
{
    /** @var string */
    public $pathPattern = '/inner/api/v1/dataSync/manualCalReport';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class MngReleaseUserSubTask extends Roa
{
    /** @var string */
    public $pathPattern = '/mng/api/v1/usersubtask/mngReleaseUserSubTask';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class OfflineTask extends Roa
{
    /** @var string */
    public $pathPattern = '/mng/api/v1/task/offline';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class OnlineTask extends Roa
{
    /** @var string */
    public $pathPattern = '/mng/api/v1/task/online';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class PageViewDataMeta extends Roa
{
    /** @var string */
    public $pathPattern = '/mng/api/v1/dataproxy/pageViewDataMeta';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class PageViewDatasetProxy extends Roa
{
    /** @var string */
    public $pathPattern = '/mng/api/v1/dataproxy/pageViewDatasetProxy';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class PageViewFlowJob extends Roa
{
    /** @var string */
    public $pathPattern = '/mng/api/v1/flowjob/pageViewFlowJob';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class PageViewModel extends Roa
{
    /** @var string */
    public $pathPattern = '/mng/api/v1/model/pageViewModelList';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class PageViewMyTnt extends Roa
{
    /** @var string */
    public $pathPattern = '/mng/api/v1/tnt/pageViewMyTnt';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class PageViewOptionTemplate extends Roa
{
    /** @var string */
    public $pathPattern = '/mng/api/v1/template/pageViewTemplate';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class PageviewSubTask extends Roa
{
    /** @var string */
    public $pathPattern = '/mng/api/v1/subtask/pageviewSubTask';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class PageViewSubTaskItem extends Roa
{
    /** @var string */
    public $pathPattern = '/mng/api/v1/subtask/pageViewSubTaskItem';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class PageViewTask extends Roa
{
    /** @var string */
    public $pathPattern = '/mng/api/v1/task/pageViewTask';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class PageViewTntUser extends Roa
{
    /** @var string */
    public $pathPattern = '/mng/api/v1/tnt/pageViewTntUser';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class PageViewUser extends Roa
{
    /** @var string */
    public $pathPattern = '/mng/api/v1/user/pageViewUser';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class PageViewUserGroup extends Roa
{
    /** @var string */
    public $pathPattern = '/mng/api/v1/usergroup/pageViewUserGroup';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class PollingSampleMarkItems extends Roa
{
    /** @var string */
    public $pathPattern = '/work/api/v1/sampling/pollingSampleMarkItems';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class PreviewTaskTemplate extends Roa
{
    /** @var string */
    public $pathPattern = '/mng/api/v1/task/previewTask';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class ProxyRobotService extends Roa
{
    /** @var string */
    public $pathPattern = '/work/api/v1/robot/proxy';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class QueryMarkableSubTask extends Roa
{
    /** @var string */
    public $pathPattern = '/work/api/v1/task/queryMarkableSubTask';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class QuerySampleMarkItems extends Roa
{
    /** @var string */
    public $pathPattern = '/work/api/v1/sampling/querySampleMarkItems';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class QuerySamplingPoolSize extends Roa
{
    /** @var string */
    public $pathPattern = '/work/api/v1/sampling/querySamplingPoolSize';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class QuerySkipUserSubTask extends Roa
{
    /** @var string */
    public $pathPattern = '/work/api/v1/usersubtask/querySkipUserSubTask';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class RejectSamplingTask extends Roa
{
    /** @var string */
    public $pathPattern = '/work/api/v1/sampling/reject';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class RejectSubTask extends Roa
{
    /** @var string */
    public $pathPattern = '/work/api/v1/usersubtask/reject';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class ReleaseUserSubTask extends Roa
{
    /** @var string */
    public $pathPattern = '/work/api/v1/usersubtask/releaseUserSubTask';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class RemoveMemberOrGroupTask extends Roa
{
    /** @var string */
    public $pathPattern = '/mng/api/v1/task/removeMemberOrGroupInTask';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class RemoveUserInGroup extends Roa
{
    /** @var string */
    public $pathPattern = '/mng/api/v1/usergroup/removeUserInGroup';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class RemoveUserInTnt extends Roa
{
    /** @var string */
    public $pathPattern = '/mng/api/v1/tnt/removeUserInTnt';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class SamplingSubUserTaskList extends Roa
{
    /** @var string */
    public $pathPattern = '/work/api/v1/sampling/samplingSubUserTaskList';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class SkipFinished extends Roa
{
    /** @var string */
    public $pathPattern = '/mng/api/v1/subtask/skipFinished';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class SkipUserSubTask extends Roa
{
    /** @var string */
    public $pathPattern = '/work/api/v1/usersubtask/skipUserSubTask';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class TaskStageStat extends Roa
{
    /** @var string */
    public $pathPattern = '/mng/api/v1/task/taskStageStat';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class TestRequest extends Roa
{
    /** @var string */
    public $pathPattern = '/mng/api/v1/model/testRequest';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class TransferUserSubTask extends Roa
{
    /** @var string */
    public $pathPattern = '/mng/api/v1/usersubtask/transferUserSubTask';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class UnpassFeedback extends Roa
{
    /** @var string */
    public $pathPattern = '/work/api/v1/markitem/unpassFeedback';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class UpdateDatasetStateMsg extends Roa
{
    /** @var string */
    public $pathPattern = '/mng/api/v1/dataproxy/updateDatasetStateMsg';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class UpdateMarkResult extends Roa
{
    /** @var string */
    public $pathPattern = '/work/api/v1/markresult/updateMarkResult';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class UpdateMarkResultByAdmin extends Roa
{
    /** @var string */
    public $pathPattern = '/work/api/v1/markresult/updateMarkResultByAdmin';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class UpdateModel extends Roa
{
    /** @var string */
    public $pathPattern = '/mng/api/v1/model/update';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class UpdateTask extends Roa
{
    /** @var string */
    public $pathPattern = '/mng/api/v1/task/updateTask';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class UpdateTaskData extends Roa
{
    /** @var string */
    public $pathPattern = '/mng/api/v1/report/updateTaskData';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class UpdateTaskTemplate extends Roa
{
    /** @var string */
    public $pathPattern = '/mng/api/v1/task/updateTaskTemplate';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class UpdateTemplate extends Roa
{
    /** @var string */
    public $pathPattern = '/mng/api/v1/template/updateTemplate';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class UpdateUserName extends Roa
{
    /** @var string */
    public $pathPattern = '/work/api/v1/user/updateName';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class UpdateUserRoleInTnt extends Roa
{
    /** @var string */
    public $pathPattern = '/mng/api/v1/tnt/updateUserRoleInTnt';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class UserSubTaskTimer extends Roa
{
    /** @var string */
    public $pathPattern = '/work/api/v1/usersubtask/timer';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}
