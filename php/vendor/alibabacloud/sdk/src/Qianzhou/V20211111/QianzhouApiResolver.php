<?php

namespace AlibabaCloud\Qianzhou\V20211111;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AICreateSessionMessage aICreateSessionMessage(array $options = [])
 * @method CreateDiagnosis createDiagnosis(array $options = [])
 * @method GetCluster getCluster(array $options = [])
 * @method GetClusterWarning getClusterWarning(array $options = [])
 * @method GetDiagnosisResult getDiagnosisResult(array $options = [])
 * @method GetUserClusterWarning getUserClusterWarning(array $options = [])
 * @method GetWebshellToken getWebshellToken(array $options = [])
 * @method Hello hello(array $options = [])
 * @method ListClusterDeprecatedAPI listClusterDeprecatedAPI(array $options = [])
 * @method ListClusterImages listClusterImages(array $options = [])
 * @method ListUserClusters listUserClusters(array $options = [])
 * @method QueryByInstanceInfo queryByInstanceInfo(array $options = [])
 * @method QueryNodeInfo queryNodeInfo(array $options = [])
 */
class QianzhouApiResolver extends ApiResolver
{
}

class Roa extends \AlibabaCloud\Client\Resolver\Roa
{
    /** @var string */
    public $product = 'qianzhou';

    /** @var string */
    public $version = '2021-11-11';
}

/**
 * @method string getEmployeeId()
 * @method string getBody()
 */
class AICreateSessionMessage extends Roa
{
    /** @var string */
    public $pathPattern = '/popapi/AICreateSessionMessage';

    /** @var string */
    public $scheme = 'https';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEmployeeId($value)
    {
        $this->data['EmployeeId'] = $value;
        $this->options['query']['employee_id'] = $value;

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
 * @method string getDiagnosisType()
 * @method string getClusterID()
 * @method string getBody()
 */
class CreateDiagnosis extends Roa
{
    /** @var string */
    public $pathPattern = '/popapi/createDiagnosis';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDiagnosisType($value)
    {
        $this->data['DiagnosisType'] = $value;
        $this->options['query']['diagnosisType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClusterID($value)
    {
        $this->data['ClusterID'] = $value;
        $this->options['query']['clusterID'] = $value;

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
 * @method string getClusterID()
 */
class GetCluster extends Roa
{
    /** @var string */
    public $pathPattern = '/popapi/getCluster';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClusterID($value)
    {
        $this->data['ClusterID'] = $value;
        $this->options['query']['clusterID'] = $value;

        return $this;
    }
}

/**
 * @method string getClusterID()
 */
class GetClusterWarning extends Roa
{
    /** @var string */
    public $pathPattern = '/popapi/getKeyClusterWarningList';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClusterID($value)
    {
        $this->data['ClusterID'] = $value;
        $this->options['query']['clusterID'] = $value;

        return $this;
    }
}

/**
 * @method string getDiagnosisId()
 * @method string getOwnerUid()
 */
class GetDiagnosisResult extends Roa
{
    /** @var string */
    public $pathPattern = '/popapi/GetDiagnosisResult';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDiagnosisId($value)
    {
        $this->data['DiagnosisId'] = $value;
        $this->options['query']['diagnosisId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOwnerUid($value)
    {
        $this->data['OwnerUid'] = $value;
        $this->options['query']['ownerUid'] = $value;

        return $this;
    }
}

/**
 * @method string getUserID()
 */
class GetUserClusterWarning extends Roa
{
    /** @var string */
    public $pathPattern = '/popapi/listUserKeyClusters';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserID($value)
    {
        $this->data['UserID'] = $value;
        $this->options['query']['userID'] = $value;

        return $this;
    }
}

class GetWebshellToken extends Roa
{
    /** @var string */
    public $pathPattern = '/popapi/getChorusToken';
}

/**
 * @method string getUser()
 */
class Hello extends Roa
{
    /** @var string */
    public $pathPattern = '/popapi/hello';

    /** @var string */
    public $scheme = 'https';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUser($value)
    {
        $this->data['User'] = $value;
        $this->options['query']['user'] = $value;

        return $this;
    }
}

/**
 * @method string getClusterId()
 * @method string getPageNo()
 * @method string getTargetVersion()
 * @method string getPageSize()
 */
class ListClusterDeprecatedAPI extends Roa
{
    /** @var string */
    public $pathPattern = '/popapi/listDeprecatedK8sAPI';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClusterId($value)
    {
        $this->data['ClusterId'] = $value;
        $this->options['query']['cluster_id'] = $value;

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
        $this->options['query']['page_no'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTargetVersion($value)
    {
        $this->data['TargetVersion'] = $value;
        $this->options['query']['target_version'] = $value;

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
        $this->options['query']['page_size'] = $value;

        return $this;
    }
}

/**
 * @method string getImageName()
 * @method string getUid()
 * @method string getClusterId()
 * @method string getImageHash()
 * @method string getPageNo()
 * @method string getPageSize()
 */
class ListClusterImages extends Roa
{
    /** @var string */
    public $pathPattern = '/popapi/listClusterPodImages';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageName($value)
    {
        $this->data['ImageName'] = $value;
        $this->options['query']['image_name'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUid($value)
    {
        $this->data['Uid'] = $value;
        $this->options['query']['uid'] = $value;

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
        $this->options['query']['cluster_id'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageHash($value)
    {
        $this->data['ImageHash'] = $value;
        $this->options['query']['image_hash'] = $value;

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
        $this->options['query']['page_no'] = $value;

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
        $this->options['query']['page_size'] = $value;

        return $this;
    }
}

/**
 * @method string getCurrent()
 * @method string getPageSize()
 * @method string getUserID()
 */
class ListUserClusters extends Roa
{
    /** @var string */
    public $pathPattern = '/popapi/listUserClusters';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCurrent($value)
    {
        $this->data['Current'] = $value;
        $this->options['query']['current'] = $value;

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
        $this->options['query']['pageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserID($value)
    {
        $this->data['UserID'] = $value;
        $this->options['query']['userID'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class QueryByInstanceInfo extends Roa
{
    /** @var string */
    public $pathPattern = '/popapi/queryByInstanceInfo';

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
 */
class QueryNodeInfo extends Roa
{
    /** @var string */
    public $pathPattern = '/popapi/queryByInstanceId';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['query']['instanceId'] = $value;

        return $this;
    }
}
