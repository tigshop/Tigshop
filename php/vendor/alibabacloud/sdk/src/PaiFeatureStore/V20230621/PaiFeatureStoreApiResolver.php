<?php

namespace AlibabaCloud\PaiFeatureStore\V20230621;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method CheckInstanceDatasource checkInstanceDatasource(array $options = [])
 * @method CheckModelFeatureFGFeature checkModelFeatureFGFeature(array $options = [])
 * @method CreateDatasource createDatasource(array $options = [])
 * @method CreateFeatureEntity createFeatureEntity(array $options = [])
 * @method CreateFeatureView createFeatureView(array $options = [])
 * @method CreateInstance createInstance(array $options = [])
 * @method CreateLabelTable createLabelTable(array $options = [])
 * @method CreateLLMConfig createLLMConfig(array $options = [])
 * @method CreateModelFeature createModelFeature(array $options = [])
 * @method CreateProject createProject(array $options = [])
 * @method CreateServiceIdentityRole createServiceIdentityRole(array $options = [])
 * @method DeleteDatasource deleteDatasource(array $options = [])
 * @method DeleteFeatureEntity deleteFeatureEntity(array $options = [])
 * @method DeleteFeatureView deleteFeatureView(array $options = [])
 * @method DeleteLabelTable deleteLabelTable(array $options = [])
 * @method DeleteLLMConfig deleteLLMConfig(array $options = [])
 * @method DeleteModelFeature deleteModelFeature(array $options = [])
 * @method DeleteProject deleteProject(array $options = [])
 * @method ExportModelFeatureTrainingSetTable exportModelFeatureTrainingSetTable(array $options = [])
 * @method GetDatasource getDatasource(array $options = [])
 * @method GetDatasourceTable getDatasourceTable(array $options = [])
 * @method GetFeatureEntity getFeatureEntity(array $options = [])
 * @method GetFeatureView getFeatureView(array $options = [])
 * @method GetInstance getInstance(array $options = [])
 * @method GetLabelTable getLabelTable(array $options = [])
 * @method GetLLMConfig getLLMConfig(array $options = [])
 * @method GetModelFeature getModelFeature(array $options = [])
 * @method GetModelFeatureFGFeature getModelFeatureFGFeature(array $options = [])
 * @method GetModelFeatureFGInfo getModelFeatureFGInfo(array $options = [])
 * @method GetProject getProject(array $options = [])
 * @method GetProjectFeatureEntity getProjectFeatureEntity(array $options = [])
 * @method GetServiceIdentityRole getServiceIdentityRole(array $options = [])
 * @method GetTask getTask(array $options = [])
 * @method ListDatasourceFeatureViews listDatasourceFeatureViews(array $options = [])
 * @method ListDatasources listDatasources(array $options = [])
 * @method ListDatasourceTables listDatasourceTables(array $options = [])
 * @method ListFeatureEntities listFeatureEntities(array $options = [])
 * @method ListFeatureViewFieldRelationships listFeatureViewFieldRelationships(array $options = [])
 * @method ListFeatureViewOnlineFeatures listFeatureViewOnlineFeatures(array $options = [])
 * @method ListFeatureViewRelationships listFeatureViewRelationships(array $options = [])
 * @method ListFeatureViews listFeatureViews(array $options = [])
 * @method ListInstances listInstances(array $options = [])
 * @method ListLabelTables listLabelTables(array $options = [])
 * @method ListLLMConfigs listLLMConfigs(array $options = [])
 * @method ListModelFeatureAvailableFeatures listModelFeatureAvailableFeatures(array $options = [])
 * @method ListModelFeatures listModelFeatures(array $options = [])
 * @method ListProjectFeatures listProjectFeatures(array $options = [])
 * @method ListProjectFeatureViews listProjectFeatureViews(array $options = [])
 * @method ListProjects listProjects(array $options = [])
 * @method ListTaskLogs listTaskLogs(array $options = [])
 * @method ListTasks listTasks(array $options = [])
 * @method PublishFeatureViewTable publishFeatureViewTable(array $options = [])
 * @method StopTask stopTask(array $options = [])
 * @method UpdateDatasource updateDatasource(array $options = [])
 * @method UpdateLabelTable updateLabelTable(array $options = [])
 * @method UpdateLLMConfig updateLLMConfig(array $options = [])
 * @method UpdateModelFeature updateModelFeature(array $options = [])
 * @method UpdateModelFeatureFGFeature updateModelFeatureFGFeature(array $options = [])
 * @method UpdateProject updateProject(array $options = [])
 * @method WriteFeatureViewTable writeFeatureViewTable(array $options = [])
 */
class PaiFeatureStoreApiResolver extends ApiResolver
{
}

class Roa extends \AlibabaCloud\Client\Resolver\Roa
{
    /** @var string */
    public $product = 'PaiFeatureStore';

    /** @var string */
    public $version = '2023-06-21';
}

/**
 * @method string getBody()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class CheckInstanceDatasource extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v1/instances/[InstanceId]/action/checkdatasource';

    /** @var string */
    public $method = 'POST';

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
 * @method string getModelFeatureId()
 * @method $this withModelFeatureId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class CheckModelFeatureFGFeature extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v1/instances/[InstanceId]/modelfeatures/[ModelFeatureId]/action/checkfgfeature';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getBody()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class CreateDatasource extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v1/instances/[InstanceId]/datasources';

    /** @var string */
    public $method = 'POST';

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
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class CreateFeatureEntity extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v1/instances/[InstanceId]/featureentities';

    /** @var string */
    public $method = 'POST';

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
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class CreateFeatureView extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v1/instances/[InstanceId]/featureviews';

    /** @var string */
    public $method = 'POST';

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
class CreateInstance extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v1/instances';

    /** @var string */
    public $method = 'POST';

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
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class CreateLabelTable extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v1/instances/[InstanceId]/labeltables';

    /** @var string */
    public $method = 'POST';

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
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class CreateLLMConfig extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v1/instances/[InstanceId]/llmconfigs';

    /** @var string */
    public $scheme = 'https';

    /** @var string */
    public $method = 'POST';

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
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class CreateModelFeature extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v1/instances/[InstanceId]/modelfeatures';

    /** @var string */
    public $method = 'POST';

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
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class CreateProject extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v1/instances/[InstanceId]/projects';

    /** @var string */
    public $method = 'POST';

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
class CreateServiceIdentityRole extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v1/serviceidentityroles';

    /** @var string */
    public $method = 'POST';

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
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getDatasourceId()
 * @method $this withDatasourceId($value)
 */
class DeleteDatasource extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v1/instances/[InstanceId]/datasources/[DatasourceId]';

    /** @var string */
    public $method = 'DELETE';
}

/**
 * @method string getFeatureEntityId()
 * @method $this withFeatureEntityId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DeleteFeatureEntity extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v1/instances/[InstanceId]/featureentities/[FeatureEntityId]';

    /** @var string */
    public $method = 'DELETE';
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getFeatureViewId()
 * @method $this withFeatureViewId($value)
 */
class DeleteFeatureView extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v1/instances/[InstanceId]/featureviews/[FeatureViewId]';

    /** @var string */
    public $method = 'DELETE';
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getLabelTableId()
 * @method $this withLabelTableId($value)
 */
class DeleteLabelTable extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v1/instances/[InstanceId]/labeltables/[LabelTableId]';

    /** @var string */
    public $method = 'DELETE';
}

/**
 * @method string getLLMConfigId()
 * @method $this withLLMConfigId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DeleteLLMConfig extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v1/instances/[InstanceId]/llmconfigs/[LLMConfigId]';

    /** @var string */
    public $scheme = 'https';

    /** @var string */
    public $method = 'DELETE';
}

/**
 * @method string getModelFeatureId()
 * @method $this withModelFeatureId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DeleteModelFeature extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v1/instances/[InstanceId]/modelfeatures/[ModelFeatureId]';

    /** @var string */
    public $method = 'DELETE';
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class DeleteProject extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v1/instances/[InstanceId]/projects/[ProjectId]';

    /** @var string */
    public $method = 'DELETE';
}

/**
 * @method string getModelFeatureId()
 * @method $this withModelFeatureId($value)
 * @method string getBody()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class ExportModelFeatureTrainingSetTable extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v1/instances/[InstanceId]/modelfeatures/[ModelFeatureId]/action/exporttrainingsettable';

    /** @var string */
    public $method = 'POST';

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
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getDatasourceId()
 * @method $this withDatasourceId($value)
 */
class GetDatasource extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v1/instances/[InstanceId]/datasources/[DatasourceId]';
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getDatasourceId()
 * @method $this withDatasourceId($value)
 * @method string getTableName()
 * @method $this withTableName($value)
 */
class GetDatasourceTable extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v1/instances/[InstanceId]/datasources/[DatasourceId]/tables/[TableName]';
}

/**
 * @method string getFeatureEntityId()
 * @method $this withFeatureEntityId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class GetFeatureEntity extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v1/instances/[InstanceId]/featureentities/[FeatureEntityId]';
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getFeatureViewId()
 * @method $this withFeatureViewId($value)
 */
class GetFeatureView extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v1/instances/[InstanceId]/featureviews/[FeatureViewId]';
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class GetInstance extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v1/instances/[InstanceId]';
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getLabelTableId()
 * @method $this withLabelTableId($value)
 */
class GetLabelTable extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v1/instances/[InstanceId]/labeltables/[LabelTableId]';
}

/**
 * @method string getLLMConfigId()
 * @method $this withLLMConfigId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class GetLLMConfig extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v1/instances/[InstanceId]/llmconfigs/[LLMConfigId]';

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getModelFeatureId()
 * @method $this withModelFeatureId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class GetModelFeature extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v1/instances/[InstanceId]/modelfeatures/[ModelFeatureId]';
}

/**
 * @method string getModelFeatureId()
 * @method $this withModelFeatureId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class GetModelFeatureFGFeature extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v1/instances/[InstanceId]/modelfeatures/[ModelFeatureId]/fgfeature';
}

/**
 * @method string getModelFeatureId()
 * @method $this withModelFeatureId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class GetModelFeatureFGInfo extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v1/instances/[InstanceId]/modelfeatures/[ModelFeatureId]/fginfo';
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class GetProject extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v1/instances/[InstanceId]/projects/[ProjectId]';
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getFeatureEntityName()
 * @method $this withFeatureEntityName($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class GetProjectFeatureEntity extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v1/instances/[InstanceId]/projects/[ProjectId]/featureentities/[FeatureEntityName]';
}

/**
 * @method string getRoleName()
 * @method $this withRoleName($value)
 */
class GetServiceIdentityRole extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v1/serviceidentityroles/[RoleName]';
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class GetTask extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v1/instances/[InstanceId]/tasks/[TaskId]';
}

/**
 * @method string getType()
 * @method string getStartDate()
 * @method string getPageNumber()
 * @method string getPageSize()
 * @method string getProjectId()
 * @method string getOrder()
 * @method string getAll()
 * @method string getProjectName()
 * @method string getShowStorageUsage()
 * @method string getVerbose()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getEndDate()
 * @method string getDatasourceId()
 * @method $this withDatasourceId($value)
 * @method string getName()
 * @method string getSortBy()
 */
class ListDatasourceFeatureViews extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v1/instances/[InstanceId]/datasources/[DatasourceId]/featureviews';

    /** @var string */
    public $scheme = 'https';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withType($value)
    {
        $this->data['Type'] = $value;
        $this->options['query']['Type'] = $value;

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
        $this->options['query']['StartDate'] = $value;

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
        $this->options['query']['PageNumber'] = $value;

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
        $this->options['query']['PageSize'] = $value;

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
        $this->options['query']['ProjectId'] = $value;

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
        $this->options['query']['Order'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAll($value)
    {
        $this->data['All'] = $value;
        $this->options['query']['All'] = $value;

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
        $this->options['query']['ProjectName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withShowStorageUsage($value)
    {
        $this->data['ShowStorageUsage'] = $value;
        $this->options['query']['ShowStorageUsage'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVerbose($value)
    {
        $this->data['Verbose'] = $value;
        $this->options['query']['Verbose'] = $value;

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
        $this->options['query']['EndDate'] = $value;

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
        $this->options['query']['Name'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSortBy($value)
    {
        $this->data['SortBy'] = $value;
        $this->options['query']['SortBy'] = $value;

        return $this;
    }
}

/**
 * @method string getType()
 * @method string getPageNumber()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getName()
 * @method string getPageSize()
 * @method string getSortBy()
 * @method string getWorkspaceId()
 * @method string getOrder()
 */
class ListDatasources extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v1/instances/[InstanceId]/datasources';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withType($value)
    {
        $this->data['Type'] = $value;
        $this->options['query']['Type'] = $value;

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
        $this->options['query']['PageNumber'] = $value;

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
        $this->options['query']['Name'] = $value;

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
        $this->options['query']['PageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSortBy($value)
    {
        $this->data['SortBy'] = $value;
        $this->options['query']['SortBy'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWorkspaceId($value)
    {
        $this->data['WorkspaceId'] = $value;
        $this->options['query']['WorkspaceId'] = $value;

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
        $this->options['query']['Order'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getDatasourceId()
 * @method $this withDatasourceId($value)
 * @method string getTableName()
 */
class ListDatasourceTables extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v1/instances/[InstanceId]/datasources/[DatasourceId]/tables';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTableName($value)
    {
        $this->data['TableName'] = $value;
        $this->options['query']['TableName'] = $value;

        return $this;
    }
}

/**
 * @method string getOwner()
 * @method string getPageNumber()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getName()
 * @method string getPageSize()
 * @method string getSortBy()
 * @method string getProjectId()
 * @method string getOrder()
 */
class ListFeatureEntities extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v1/instances/[InstanceId]/featureentities';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOwner($value)
    {
        $this->data['Owner'] = $value;
        $this->options['query']['Owner'] = $value;

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
        $this->options['query']['PageNumber'] = $value;

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
        $this->options['query']['Name'] = $value;

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
        $this->options['query']['PageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSortBy($value)
    {
        $this->data['SortBy'] = $value;
        $this->options['query']['SortBy'] = $value;

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
        $this->options['query']['ProjectId'] = $value;

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
        $this->options['query']['Order'] = $value;

        return $this;
    }
}

/**
 * @method string getFieldName()
 * @method $this withFieldName($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getFeatureViewId()
 * @method $this withFeatureViewId($value)
 */
class ListFeatureViewFieldRelationships extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v1/instances/[InstanceId]/featureviews/[FeatureViewId]/fields/[FieldName]/relationships';
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getJoinIds()
 * @method string getFeatureViewId()
 * @method $this withFeatureViewId($value)
 */
class ListFeatureViewOnlineFeatures extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v1/instances/[InstanceId]/featureviews/[FeatureViewId]/onlinefeatures';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJoinIds($value)
    {
        $this->data['JoinIds'] = $value;
        $this->options['query']['JoinIds'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getFeatureViewId()
 * @method $this withFeatureViewId($value)
 */
class ListFeatureViewRelationships extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v1/instances/[InstanceId]/featureviews/[FeatureViewId]/relationships';
}

/**
 * @method string getType()
 * @method string getPageNumber()
 * @method string getFeatureName()
 * @method string getPageSize()
 * @method string getTag()
 * @method string getProjectId()
 * @method string getOrder()
 * @method string getOwner()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getName()
 * @method string getSortBy()
 */
class ListFeatureViews extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v1/instances/[InstanceId]/featureviews';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withType($value)
    {
        $this->data['Type'] = $value;
        $this->options['query']['Type'] = $value;

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
        $this->options['query']['PageNumber'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFeatureName($value)
    {
        $this->data['FeatureName'] = $value;
        $this->options['query']['FeatureName'] = $value;

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
        $this->options['query']['PageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag($value)
    {
        $this->data['Tag'] = $value;
        $this->options['query']['Tag'] = $value;

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
        $this->options['query']['ProjectId'] = $value;

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
        $this->options['query']['Order'] = $value;

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
        $this->options['query']['Owner'] = $value;

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
        $this->options['query']['Name'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSortBy($value)
    {
        $this->data['SortBy'] = $value;
        $this->options['query']['SortBy'] = $value;

        return $this;
    }
}

/**
 * @method string getPageNumber()
 * @method string getPageSize()
 * @method string getSortBy()
 * @method string getStatus()
 * @method string getOrder()
 */
class ListInstances extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v1/instances';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNumber($value)
    {
        $this->data['PageNumber'] = $value;
        $this->options['query']['PageNumber'] = $value;

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
        $this->options['query']['PageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSortBy($value)
    {
        $this->data['SortBy'] = $value;
        $this->options['query']['SortBy'] = $value;

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
        $this->options['query']['Status'] = $value;

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
        $this->options['query']['Order'] = $value;

        return $this;
    }
}

/**
 * @method string getOwner()
 * @method string getPageNumber()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPageSize()
 * @method string getName()
 * @method string getSortBy()
 * @method string getProjectId()
 * @method string getOrder()
 */
class ListLabelTables extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v1/instances/[InstanceId]/labeltables';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOwner($value)
    {
        $this->data['Owner'] = $value;
        $this->options['query']['Owner'] = $value;

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
        $this->options['query']['PageNumber'] = $value;

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
        $this->options['query']['PageSize'] = $value;

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
        $this->options['query']['Name'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSortBy($value)
    {
        $this->data['SortBy'] = $value;
        $this->options['query']['SortBy'] = $value;

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
        $this->options['query']['ProjectId'] = $value;

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
        $this->options['query']['Order'] = $value;

        return $this;
    }
}

/**
 * @method string getPageNumber()
 * @method string getNextToken()
 * @method string getPageSize()
 * @method string getOrder()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getName()
 * @method string getMaxResults()
 * @method string getSortBy()
 * @method string getWorkspaceId()
 */
class ListLLMConfigs extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v1/instances/[InstanceId]/llmconfigs';

    /** @var string */
    public $scheme = 'https';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNumber($value)
    {
        $this->data['PageNumber'] = $value;
        $this->options['query']['PageNumber'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNextToken($value)
    {
        $this->data['NextToken'] = $value;
        $this->options['query']['NextToken'] = $value;

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
        $this->options['query']['PageSize'] = $value;

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
        $this->options['query']['Order'] = $value;

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
        $this->options['query']['Name'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMaxResults($value)
    {
        $this->data['MaxResults'] = $value;
        $this->options['query']['MaxResults'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSortBy($value)
    {
        $this->data['SortBy'] = $value;
        $this->options['query']['SortBy'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWorkspaceId($value)
    {
        $this->data['WorkspaceId'] = $value;
        $this->options['query']['WorkspaceId'] = $value;

        return $this;
    }
}

/**
 * @method string getModelFeatureId()
 * @method $this withModelFeatureId($value)
 * @method string getFeatureName()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class ListModelFeatureAvailableFeatures extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v1/instances/[InstanceId]/modelfeatures/[ModelFeatureId]/availablefeatures';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFeatureName($value)
    {
        $this->data['FeatureName'] = $value;
        $this->options['query']['FeatureName'] = $value;

        return $this;
    }
}

/**
 * @method string getOwner()
 * @method string getPageNumber()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPageSize()
 * @method string getName()
 * @method string getSortBy()
 * @method string getProjectId()
 * @method string getOrder()
 */
class ListModelFeatures extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v1/instances/[InstanceId]/modelfeatures';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOwner($value)
    {
        $this->data['Owner'] = $value;
        $this->options['query']['Owner'] = $value;

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
        $this->options['query']['PageNumber'] = $value;

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
        $this->options['query']['PageSize'] = $value;

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
        $this->options['query']['Name'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSortBy($value)
    {
        $this->data['SortBy'] = $value;
        $this->options['query']['SortBy'] = $value;

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
        $this->options['query']['ProjectId'] = $value;

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
        $this->options['query']['Order'] = $value;

        return $this;
    }
}

/**
 * @method string getPageNumber()
 * @method string getPageSize()
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getOrder()
 * @method string getFilter()
 * @method string getAliasName()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getName()
 * @method string getSortBy()
 */
class ListProjectFeatures extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v1/instances/[InstanceId]/projects/[ProjectId]/features';

    /** @var string */
    public $scheme = 'https';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNumber($value)
    {
        $this->data['PageNumber'] = $value;
        $this->options['query']['PageNumber'] = $value;

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
        $this->options['query']['PageSize'] = $value;

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
        $this->options['query']['Order'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFilter($value)
    {
        $this->data['Filter'] = $value;
        $this->options['query']['Filter'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAliasName($value)
    {
        $this->data['AliasName'] = $value;
        $this->options['query']['AliasName'] = $value;

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
        $this->options['query']['Name'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSortBy($value)
    {
        $this->data['SortBy'] = $value;
        $this->options['query']['SortBy'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class ListProjectFeatureViews extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v1/instances/[InstanceId]/projects/[ProjectId]/featureviews';
}

/**
 * @method string getOwner()
 * @method string getPageNumber()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getName()
 * @method string getPageSize()
 * @method string getSortBy()
 * @method string getWorkspaceId()
 * @method string getOrder()
 */
class ListProjects extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v1/instances/[InstanceId]/projects';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOwner($value)
    {
        $this->data['Owner'] = $value;
        $this->options['query']['Owner'] = $value;

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
        $this->options['query']['PageNumber'] = $value;

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
        $this->options['query']['Name'] = $value;

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
        $this->options['query']['PageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSortBy($value)
    {
        $this->data['SortBy'] = $value;
        $this->options['query']['SortBy'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWorkspaceId($value)
    {
        $this->data['WorkspaceId'] = $value;
        $this->options['query']['WorkspaceId'] = $value;

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
        $this->options['query']['Order'] = $value;

        return $this;
    }
}

/**
 * @method string getPageNumber()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPageSize()
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class ListTaskLogs extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v1/instances/[InstanceId]/tasks/[TaskId]/logs';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNumber($value)
    {
        $this->data['PageNumber'] = $value;
        $this->options['query']['PageNumber'] = $value;

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
        $this->options['query']['PageSize'] = $value;

        return $this;
    }
}

/**
 * @method string getType()
 * @method string getPageNumber()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPageSize()
 * @method string getObjectType()
 * @method string getProjectId()
 * @method string getObjectId()
 * @method string getStatus()
 */
class ListTasks extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v1/instances/[InstanceId]/tasks';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withType($value)
    {
        $this->data['Type'] = $value;
        $this->options['query']['Type'] = $value;

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
        $this->options['query']['PageNumber'] = $value;

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
        $this->options['query']['PageSize'] = $value;

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
        $this->options['query']['ObjectType'] = $value;

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
        $this->options['query']['ProjectId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withObjectId($value)
    {
        $this->data['ObjectId'] = $value;
        $this->options['query']['ObjectId'] = $value;

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
        $this->options['query']['Status'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getFeatureViewId()
 * @method $this withFeatureViewId($value)
 */
class PublishFeatureViewTable extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v1/instances/[InstanceId]/featureviews/[FeatureViewId]/action/publishtable';

    /** @var string */
    public $method = 'POST';

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
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class StopTask extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v1/instances/[InstanceId]/tasks/[TaskId]/action/stop';

    /** @var string */
    public $scheme = 'https';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getBody()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getDatasourceId()
 * @method $this withDatasourceId($value)
 */
class UpdateDatasource extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v1/instances/[InstanceId]/datasources/[DatasourceId]';

    /** @var string */
    public $method = 'PUT';

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
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getLabelTableId()
 * @method $this withLabelTableId($value)
 */
class UpdateLabelTable extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v1/instances/[InstanceId]/labeltables/[LabelTableId]';

    /** @var string */
    public $method = 'PUT';

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
 * @method string getLLMConfigId()
 * @method $this withLLMConfigId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class UpdateLLMConfig extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v1/instances/[InstanceId]/llmconfigs/[LLMConfigId]';

    /** @var string */
    public $scheme = 'https';

    /** @var string */
    public $method = 'PUT';

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
 * @method string getModelFeatureId()
 * @method $this withModelFeatureId($value)
 * @method string getBody()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class UpdateModelFeature extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v1/instances/[InstanceId]/modelfeatures/[ModelFeatureId]';

    /** @var string */
    public $method = 'PUT';

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
 * @method string getModelFeatureId()
 * @method $this withModelFeatureId($value)
 * @method string getBody()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class UpdateModelFeatureFGFeature extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v1/instances/[InstanceId]/modelfeatures/[ModelFeatureId]/fgfeature';

    /** @var string */
    public $method = 'PUT';

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
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class UpdateProject extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v1/instances/[InstanceId]/projects/[ProjectId]';

    /** @var string */
    public $method = 'PUT';

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
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getFeatureViewId()
 * @method $this withFeatureViewId($value)
 */
class WriteFeatureViewTable extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v1/instances/[InstanceId]/featureviews/[FeatureViewId]/action/writetable';

    /** @var string */
    public $method = 'POST';

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
