<?php

namespace AlibabaCloud\SchedulerX3\V20240624;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method CreateApp createApp(array $options = [])
 * @method CreateCluster createCluster(array $options = [])
 * @method CreateJob createJob(array $options = [])
 * @method DeleteApp deleteApp(array $options = [])
 * @method DeleteCluster deleteCluster(array $options = [])
 * @method DeleteJobs deleteJobs(array $options = [])
 * @method ExportJobs exportJobs(array $options = [])
 * @method GetCluster getCluster(array $options = [])
 * @method GetDesigateInfo getDesigateInfo(array $options = [])
 * @method GetJobExecutionProgress getJobExecutionProgress(array $options = [])
 * @method GetLog getLog(array $options = [])
 * @method ImportCalendar importCalendar(array $options = [])
 * @method ImportJobs importJobs(array $options = [])
 * @method ListAlarmEvent listAlarmEvent(array $options = [])
 * @method ListAppNames listAppNames(array $options = [])
 * @method ListApps listApps(array $options = [])
 * @method ListCalendarNames listCalendarNames(array $options = [])
 * @method ListClusters listClusters(array $options = [])
 * @method ListExecutors listExecutors(array $options = [])
 * @method ListJobExecutions listJobExecutions(array $options = [])
 * @method ListJobs listJobs(array $options = [])
 * @method ListLables listLables(array $options = [])
 * @method ListRegions listRegions(array $options = [])
 * @method ListRegionZone listRegionZone(array $options = [])
 * @method ListScheduleEvent listScheduleEvent(array $options = [])
 * @method ListScheduleTimes listScheduleTimes(array $options = [])
 * @method OperateDesignateExecutors operateDesignateExecutors(array $options = [])
 * @method OperateDisableJobs operateDisableJobs(array $options = [])
 * @method OperateEnableJobs operateEnableJobs(array $options = [])
 * @method OperateExecuteJob operateExecuteJob(array $options = [])
 * @method OperateRerunJob operateRerunJob(array $options = [])
 * @method OperateRetryJobExecution operateRetryJobExecution(array $options = [])
 * @method OperateStopJobExecution operateStopJobExecution(array $options = [])
 * @method UpdateApp updateApp(array $options = [])
 * @method UpdateCluster updateCluster(array $options = [])
 * @method UpdateJob updateJob(array $options = [])
 */
class SchedulerX3ApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'SchedulerX3';

    /** @var string */
    public $version = '2024-06-24';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    protected $scheme = 'https';
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getAccessToken()
 * @method string getTitle()
 * @method string getAppName()
 * @method string getNoticeContacts()
 * @method string getNoticeConfig()
 * @method string getMaxJobs()
 * @method string getCalender()
 * @method string getClusterId()
 * @method string getEnableLog()
 * @method string getMaxConcurrency()
 */
class CreateApp extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessToken($value)
    {
        $this->data['AccessToken'] = $value;
        $this->options['form_params']['AccessToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTitle($value)
    {
        $this->data['Title'] = $value;
        $this->options['form_params']['Title'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppName($value)
    {
        $this->data['AppName'] = $value;
        $this->options['form_params']['AppName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNoticeContacts($value)
    {
        $this->data['NoticeContacts'] = $value;
        $this->options['form_params']['NoticeContacts'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNoticeConfig($value)
    {
        $this->data['NoticeConfig'] = $value;
        $this->options['form_params']['NoticeConfig'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMaxJobs($value)
    {
        $this->data['MaxJobs'] = $value;
        $this->options['form_params']['MaxJobs'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCalender($value)
    {
        $this->data['Calender'] = $value;
        $this->options['form_params']['Calender'] = $value;

        return $this;
    }

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
    public function withEnableLog($value)
    {
        $this->data['EnableLog'] = $value;
        $this->options['form_params']['EnableLog'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMaxConcurrency($value)
    {
        $this->data['MaxConcurrency'] = $value;
        $this->options['form_params']['MaxConcurrency'] = $value;

        return $this;
    }
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getClusterName()
 * @method string getProductType()
 * @method string getEngineType()
 * @method string getVSwitches()
 * @method string getClusterSpec()
 * @method string getVpcId()
 */
class CreateCluster extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClusterName($value)
    {
        $this->data['ClusterName'] = $value;
        $this->options['form_params']['ClusterName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProductType($value)
    {
        $this->data['ProductType'] = $value;
        $this->options['form_params']['ProductType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEngineType($value)
    {
        $this->data['EngineType'] = $value;
        $this->options['form_params']['EngineType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVSwitches($value)
    {
        $this->data['VSwitches'] = $value;
        $this->options['form_params']['VSwitches'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClusterSpec($value)
    {
        $this->data['ClusterSpec'] = $value;
        $this->options['form_params']['ClusterSpec'] = $value;

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
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getExecutorBlockStrategy()
 * @method string getTimezone()
 * @method string getRouteStrategy()
 * @method string getDescription()
 * @method string getAttemptInterval()
 * @method string getStartTime()
 * @method string getAppName()
 * @method string getNoticeContacts()
 * @method string getNoticeConfig()
 * @method string getCalendar()
 * @method string getDataOffset()
 * @method string getMaxAttempt()
 * @method string getClusterId()
 * @method string getPriority()
 * @method string getJobType()
 * @method string getTimeExpression()
 * @method string getName()
 * @method string getXAttrs()
 * @method string getMaxConcurrency()
 * @method string getTimeType()
 * @method string getParameters()
 * @method string getJobHandler()
 * @method string getCleanMode()
 * @method string getStatus()
 */
class CreateJob extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExecutorBlockStrategy($value)
    {
        $this->data['ExecutorBlockStrategy'] = $value;
        $this->options['form_params']['ExecutorBlockStrategy'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTimezone($value)
    {
        $this->data['Timezone'] = $value;
        $this->options['form_params']['Timezone'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRouteStrategy($value)
    {
        $this->data['RouteStrategy'] = $value;
        $this->options['form_params']['RouteStrategy'] = $value;

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
    public function withAttemptInterval($value)
    {
        $this->data['AttemptInterval'] = $value;
        $this->options['form_params']['AttemptInterval'] = $value;

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
    public function withAppName($value)
    {
        $this->data['AppName'] = $value;
        $this->options['form_params']['AppName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNoticeContacts($value)
    {
        $this->data['NoticeContacts'] = $value;
        $this->options['form_params']['NoticeContacts'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNoticeConfig($value)
    {
        $this->data['NoticeConfig'] = $value;
        $this->options['form_params']['NoticeConfig'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCalendar($value)
    {
        $this->data['Calendar'] = $value;
        $this->options['form_params']['Calendar'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDataOffset($value)
    {
        $this->data['DataOffset'] = $value;
        $this->options['form_params']['DataOffset'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMaxAttempt($value)
    {
        $this->data['MaxAttempt'] = $value;
        $this->options['form_params']['MaxAttempt'] = $value;

        return $this;
    }

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
    public function withJobType($value)
    {
        $this->data['JobType'] = $value;
        $this->options['form_params']['JobType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTimeExpression($value)
    {
        $this->data['TimeExpression'] = $value;
        $this->options['form_params']['TimeExpression'] = $value;

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
    public function withXAttrs($value)
    {
        $this->data['XAttrs'] = $value;
        $this->options['form_params']['XAttrs'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMaxConcurrency($value)
    {
        $this->data['MaxConcurrency'] = $value;
        $this->options['form_params']['MaxConcurrency'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTimeType($value)
    {
        $this->data['TimeType'] = $value;
        $this->options['form_params']['TimeType'] = $value;

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

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJobHandler($value)
    {
        $this->data['JobHandler'] = $value;
        $this->options['form_params']['JobHandler'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCleanMode($value)
    {
        $this->data['CleanMode'] = $value;
        $this->options['form_params']['CleanMode'] = $value;

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
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getClusterId()
 * @method string getAppName()
 */
class DeleteApp extends Rpc
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
    public function withAppName($value)
    {
        $this->data['AppName'] = $value;
        $this->options['form_params']['AppName'] = $value;

        return $this;
    }
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DeleteCluster extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getClusterId()
 * @method string getAppName()
 * @method string getJobIds()
 */
class DeleteJobs extends Rpc
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
    public function withAppName($value)
    {
        $this->data['AppName'] = $value;
        $this->options['form_params']['AppName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJobIds($value)
    {
        $this->data['JobIds'] = $value;
        $this->options['form_params']['JobIds'] = $value;

        return $this;
    }
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getAppName()
 * @method string getClusterId()
 * @method string getJobIds()
 * @method string getExportJobType()
 */
class ExportJobs extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppName($value)
    {
        $this->data['AppName'] = $value;
        $this->options['form_params']['AppName'] = $value;

        return $this;
    }

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
    public function withJobIds($value)
    {
        $this->data['JobIds'] = $value;
        $this->options['form_params']['JobIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExportJobType($value)
    {
        $this->data['ExportJobType'] = $value;
        $this->options['form_params']['ExportJobType'] = $value;

        return $this;
    }
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class GetCluster extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 */
class GetDesigateInfo extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getJobExecutionId()
 * @method $this withJobExecutionId($value)
 */
class GetJobExecutionProgress extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getLineNum()
 * @method $this withLineNum($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 * @method string getJobExecutionId()
 * @method $this withJobExecutionId($value)
 * @method string getOffset()
 * @method $this withOffset($value)
 * @method string getLevel()
 * @method $this withLevel($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getReverse()
 * @method $this withReverse($value)
 * @method string getLogId()
 * @method $this withLogId($value)
 */
class GetLog extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getYear()
 * @method string getMonths()
 * @method string getClusterId()
 * @method string getName()
 */
class ImportCalendar extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withYear($value)
    {
        $this->data['Year'] = $value;
        $this->options['form_params']['Year'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMonths($value)
    {
        $this->data['Months'] = $value;
        $this->options['form_params']['Months'] = $value;

        return $this;
    }

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
    public function withName($value)
    {
        $this->data['Name'] = $value;
        $this->options['form_params']['Name'] = $value;

        return $this;
    }
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getContent()
 * @method string getOverwrite()
 * @method string getClusterId()
 * @method string getAutoCreateApp()
 */
class ImportJobs extends Rpc
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

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOverwrite($value)
    {
        $this->data['Overwrite'] = $value;
        $this->options['form_params']['Overwrite'] = $value;

        return $this;
    }

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
    public function withAutoCreateApp($value)
    {
        $this->data['AutoCreateApp'] = $value;
        $this->options['form_params']['AutoCreateApp'] = $value;

        return $this;
    }
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getAlarmChannel()
 * @method $this withAlarmChannel($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getJobName()
 * @method $this withJobName($value)
 * @method string getAlarmType()
 * @method $this withAlarmType($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getReverse()
 * @method $this withReverse($value)
 * @method string getAlarmStatus()
 * @method $this withAlarmStatus($value)
 */
class ListAlarmEvent extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 */
class ListAppNames extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getTitle()
 * @method $this withTitle($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class ListApps extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class ListCalendarNames extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getClusterName()
 * @method $this withClusterName($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class ListClusters extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getLabel()
 * @method $this withLabel($value)
 */
class ListExecutors extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getJobName()
 * @method $this withJobName($value)
 * @method string getJobExecutionId()
 * @method $this withJobExecutionId($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ListJobExecutions extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getJobName()
 * @method $this withJobName($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getJobHandler()
 * @method $this withJobHandler($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ListJobs extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 */
class ListLables extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 */
class ListRegions extends Rpc
{

    /** @var string */
    public $scheme = 'http';

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 */
class ListRegionZone extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEvent()
 * @method $this withEvent($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 * @method string getJobName()
 * @method $this withJobName($value)
 * @method string getJobExecutionId()
 * @method $this withJobExecutionId($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getReverse()
 * @method $this withReverse($value)
 */
class ListScheduleEvent extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getTimeZone()
 * @method $this withTimeZone($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getCalendar()
 * @method $this withCalendar($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getTimeExpression()
 * @method $this withTimeExpression($value)
 * @method string getTimeType()
 * @method $this withTimeType($value)
 */
class ListScheduleTimes extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getTransferable()
 * @method string getDesignateType()
 * @method string getJobId()
 * @method string getAppName()
 * @method string getAddressList()
 * @method string getClusterId()
 */
class OperateDesignateExecutors extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTransferable($value)
    {
        $this->data['Transferable'] = $value;
        $this->options['form_params']['Transferable'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDesignateType($value)
    {
        $this->data['DesignateType'] = $value;
        $this->options['form_params']['DesignateType'] = $value;

        return $this;
    }

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
    public function withAppName($value)
    {
        $this->data['AppName'] = $value;
        $this->options['form_params']['AppName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAddressList($value)
    {
        $this->data['AddressList'] = $value;
        $this->options['form_params']['AddressList'] = $value;

        return $this;
    }

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
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getClusterId()
 * @method string getAppName()
 * @method string getJobIds()
 */
class OperateDisableJobs extends Rpc
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
    public function withAppName($value)
    {
        $this->data['AppName'] = $value;
        $this->options['form_params']['AppName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJobIds($value)
    {
        $this->data['JobIds'] = $value;
        $this->options['form_params']['JobIds'] = $value;

        return $this;
    }
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getClusterId()
 * @method string getAppName()
 * @method string getJobIds()
 */
class OperateEnableJobs extends Rpc
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
    public function withAppName($value)
    {
        $this->data['AppName'] = $value;
        $this->options['form_params']['AppName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJobIds($value)
    {
        $this->data['JobIds'] = $value;
        $this->options['form_params']['JobIds'] = $value;

        return $this;
    }
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getJobId()
 * @method string getAppName()
 * @method string getWorker()
 * @method string getInstanceParameters()
 * @method string getClusterId()
 * @method string getLabel()
 */
class OperateExecuteJob extends Rpc
{

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
    public function withAppName($value)
    {
        $this->data['AppName'] = $value;
        $this->options['form_params']['AppName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWorker($value)
    {
        $this->data['Worker'] = $value;
        $this->options['form_params']['Worker'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceParameters($value)
    {
        $this->data['InstanceParameters'] = $value;
        $this->options['form_params']['InstanceParameters'] = $value;

        return $this;
    }

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
    public function withLabel($value)
    {
        $this->data['Label'] = $value;
        $this->options['form_params']['Label'] = $value;

        return $this;
    }
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getDataTime()
 * @method $this withDataTime($value)
 * @method string getStartDate()
 * @method $this withStartDate($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getEndDate()
 * @method $this withEndDate($value)
 */
class OperateRerunJob extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getJobExecutionId()
 * @method $this withJobExecutionId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getTaskList()
 * @method $this withTaskList($value)
 */
class OperateRetryJobExecution extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getJobExecutionId()
 * @method $this withJobExecutionId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getTaskList()
 * @method $this withTaskList($value)
 */
class OperateStopJobExecution extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getAccessToken()
 * @method string getTitle()
 * @method string getAppName()
 * @method string getNoticeContacts()
 * @method string getNoticeConfig()
 * @method string getMaxJobs()
 * @method string getCalendar()
 * @method string getClusterId()
 * @method string getEnableLog()
 * @method string getMaxConcurrency()
 */
class UpdateApp extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessToken($value)
    {
        $this->data['AccessToken'] = $value;
        $this->options['form_params']['AccessToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTitle($value)
    {
        $this->data['Title'] = $value;
        $this->options['form_params']['Title'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppName($value)
    {
        $this->data['AppName'] = $value;
        $this->options['form_params']['AppName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNoticeContacts($value)
    {
        $this->data['NoticeContacts'] = $value;
        $this->options['form_params']['NoticeContacts'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNoticeConfig($value)
    {
        $this->data['NoticeConfig'] = $value;
        $this->options['form_params']['NoticeConfig'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMaxJobs($value)
    {
        $this->data['MaxJobs'] = $value;
        $this->options['form_params']['MaxJobs'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCalendar($value)
    {
        $this->data['Calendar'] = $value;
        $this->options['form_params']['Calendar'] = $value;

        return $this;
    }

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
    public function withEnableLog($value)
    {
        $this->data['EnableLog'] = $value;
        $this->options['form_params']['EnableLog'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMaxConcurrency($value)
    {
        $this->data['MaxConcurrency'] = $value;
        $this->options['form_params']['MaxConcurrency'] = $value;

        return $this;
    }
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getClusterName()
 * @method $this withClusterName($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class UpdateCluster extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getExecutorBlockStrategy()
 * @method string getTimezone()
 * @method string getRouteStrategy()
 * @method string getDescription()
 * @method string getAttemptInterval()
 * @method string getStartTime()
 * @method string getJobId()
 * @method string getAppName()
 * @method string getNoticeContacts()
 * @method string getNoticeConfig()
 * @method string getCalendar()
 * @method string getDataOffset()
 * @method string getMaxAttempt()
 * @method string getClusterId()
 * @method string getPriority()
 * @method string getTimeExpression()
 * @method string getName()
 * @method string getXAttrs()
 * @method string getMaxConcurrency()
 * @method string getTimeType()
 * @method string getParameters()
 * @method string getJobHandler()
 * @method string getCleanMode()
 */
class UpdateJob extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExecutorBlockStrategy($value)
    {
        $this->data['ExecutorBlockStrategy'] = $value;
        $this->options['form_params']['ExecutorBlockStrategy'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTimezone($value)
    {
        $this->data['Timezone'] = $value;
        $this->options['form_params']['Timezone'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRouteStrategy($value)
    {
        $this->data['RouteStrategy'] = $value;
        $this->options['form_params']['RouteStrategy'] = $value;

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
    public function withAttemptInterval($value)
    {
        $this->data['AttemptInterval'] = $value;
        $this->options['form_params']['AttemptInterval'] = $value;

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
    public function withAppName($value)
    {
        $this->data['AppName'] = $value;
        $this->options['form_params']['AppName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNoticeContacts($value)
    {
        $this->data['NoticeContacts'] = $value;
        $this->options['form_params']['NoticeContacts'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNoticeConfig($value)
    {
        $this->data['NoticeConfig'] = $value;
        $this->options['form_params']['NoticeConfig'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCalendar($value)
    {
        $this->data['Calendar'] = $value;
        $this->options['form_params']['Calendar'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDataOffset($value)
    {
        $this->data['DataOffset'] = $value;
        $this->options['form_params']['DataOffset'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMaxAttempt($value)
    {
        $this->data['MaxAttempt'] = $value;
        $this->options['form_params']['MaxAttempt'] = $value;

        return $this;
    }

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
    public function withTimeExpression($value)
    {
        $this->data['TimeExpression'] = $value;
        $this->options['form_params']['TimeExpression'] = $value;

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
    public function withXAttrs($value)
    {
        $this->data['XAttrs'] = $value;
        $this->options['form_params']['XAttrs'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMaxConcurrency($value)
    {
        $this->data['MaxConcurrency'] = $value;
        $this->options['form_params']['MaxConcurrency'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTimeType($value)
    {
        $this->data['TimeType'] = $value;
        $this->options['form_params']['TimeType'] = $value;

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

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJobHandler($value)
    {
        $this->data['JobHandler'] = $value;
        $this->options['form_params']['JobHandler'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCleanMode($value)
    {
        $this->data['CleanMode'] = $value;
        $this->options['form_params']['CleanMode'] = $value;

        return $this;
    }
}
