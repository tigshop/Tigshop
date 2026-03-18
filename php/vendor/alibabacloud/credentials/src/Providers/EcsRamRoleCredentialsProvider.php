<?php

namespace AlibabaCloud\Credentials\Providers;

use AlibabaCloud\Credentials\Utils\Helper;
use AlibabaCloud\Credentials\Utils\Filter;
use AlibabaCloud\Credentials\Request\Request;
use GuzzleHttp\Exception\GuzzleException;
use InvalidArgumentException;
use RuntimeException;

/**
 * @internal This class is intended for internal use within the package. 
 * Class EcsRamRoleCredentialsProvider
 *
 * @package AlibabaCloud\Credentials\Providers
 */
class EcsRamRoleCredentialsProvider extends SessionCredentialsProvider
{

    /**
     * @var string
     */
    private $metadataHost = 'http://100.100.100.200';

    /**
     * @var string
     */
    private $ecsUri = '/latest/meta-data/ram/security-credentials/';

    /**
     * @var string
     */
    private $metadataTokenUri = '/latest/api/token';

    /**
     * @var string
     */
    private $roleName;

    /**
     * @var boolean
     */
    private $disableIMDSv1 = false;

    /**
     * @var int
     */
    private $metadataTokenDuration = 21600;

    /**
     * @var int
     */
    private $connectTimeout = 5;

    /**
     * @var int
     */
    private $readTimeout = 5;


    /**
     * EcsRamRoleCredentialsProvider constructor.
     *
     * @param array $params
     * @param array $options
     */
    public function __construct(array $params = [], array $options = [])
    {
        $this->filterOptions($options);
        $this->filterRoleName($params);
        $this->filterDisableECSIMDSv1($params);
        Filter::roleName($this->roleName);
        Filter::disableIMDSv1($this->disableIMDSv1);
    }

    private function filterOptions(array $options)
    {
        if (isset($options['connectTimeout'])) {
            $this->connectTimeout = $options['connectTimeout'];
        }

        if (isset($options['readTimeout'])) {
            $this->readTimeout = $options['readTimeout'];
        }

        Filter::timeout($this->connectTimeout, $this->readTimeout);
    }

    private function filterRoleName(array $params)
    {
        if (Helper::envNotEmpty('ALIBABA_CLOUD_ECS_METADATA')) {
            $this->roleName = Helper::env('ALIBABA_CLOUD_ECS_METADATA');
        }

        if (isset($params['roleName'])) {
            $this->roleName = $params['roleName'];
        }

        if (is_null($this->roleName) || $this->roleName === '') {
            $this->roleName = $this->getRoleNameFromMeta();
        }
    }

    private function filterDisableECSIMDSv1($params)
    {
        if (Helper::envNotEmpty('ALIBABA_CLOUD_IMDSV1_DISABLED')) {
            $this->disableIMDSv1 = Helper::env('ALIBABA_CLOUD_IMDSV1_DISABLED') === true ? true : false;
        }

        if (isset($params['disableIMDSv1'])) {
            $this->disableIMDSv1 = $params['disableIMDSv1'];
        }
    }

    /**
     * Get credentials by request.
     *
     * @return array
     * @throws InvalidArgumentException
     * @throws RuntimeException
     * @throws GuzzleException
     */
    public function refreshCredentials()
    {
        $url = $this->metadataHost . $this->ecsUri . $this->roleName;
        $options = Request::commonOptions();
        $options['read_timeout'] = $this->readTimeout;
        $options['connect_timeout'] = $this->connectTimeout;

        $metadataToken = $this->getMetadataToken();
        if (!is_null($metadataToken)) {
            $options['headers']['X-aliyun-ecs-metadata-token'] = $metadataToken;
        }

        $result = Request::createClient()->request('GET', $url, $options);

        if ($result->getStatusCode() === 404) {
            throw new InvalidArgumentException('The role was not found in the instance' . (string) $result);
        }

        if ($result->getStatusCode() !== 200) {
            throw new RuntimeException('Error refreshing credentials from IMDS, statusCode: ' . $result->getStatusCode() . ', result: ' . (string) $result);
        }

        $credentials = $result->toArray();

        if (!isset($credentials['AccessKeyId']) || !isset($credentials['AccessKeySecret']) || !isset($credentials['SecurityToken'])) {
            throw new RuntimeException('Error retrieving credentials from IMDS result:' . $result->toJson());
        }

        if (!isset($credentials['Code']) || $credentials['Code'] !== 'Success') {
            throw new RuntimeException('Error retrieving credentials from IMDS result, Code is not Success:' . $result->toJson());
        }

        return $credentials;
    }

    /**
     * @return string
     * @throws InvalidArgumentException
     * @throws RuntimeException
     * @throws GuzzleException
     */
    private function getRoleNameFromMeta()
    {
        $options = Request::commonOptions();
        $options['read_timeout'] = $this->readTimeout;
        $options['connect_timeout'] = $this->connectTimeout;

        $metadataToken = $this->getMetadataToken();
        if (!is_null($metadataToken)) {
            $options['headers']['X-aliyun-ecs-metadata-token'] = $metadataToken;
        }

        $result = Request::createClient()->request(
            'GET',
            'http://100.100.100.200/latest/meta-data/ram/security-credentials/',
            $options
        );

        if ($result->getStatusCode() === 404) {
            throw new InvalidArgumentException('The role name was not found in the instance' . (string) $result);
        }

        if ($result->getStatusCode() !== 200) {
            throw new RuntimeException('Error retrieving role name from result: ' . (string) $result);
        }

        $role_name = (string) $result;
        if (!$role_name) {
            throw new RuntimeException('Error retrieving role name from result is empty');
        }

        return $role_name;
    }

    /**
     * Get metadata token by request.
     *
     * @return string
     * @throws RuntimeException
     * @throws GuzzleException
     */
    private function getMetadataToken()
    {
        $url = $this->metadataHost . $this->metadataTokenUri;
        $options = Request::commonOptions();
        $options['read_timeout'] = $this->readTimeout;
        $options['connect_timeout'] = $this->connectTimeout;
        $options['headers']['X-aliyun-ecs-metadata-token-ttl-seconds'] = $this->metadataTokenDuration;

        $result = Request::createClient()->request('PUT', $url, $options);

        if ($result->getStatusCode() != 200) {
            if ($this->disableIMDSv1) {
                throw new RuntimeException('Failed to get token from ECS Metadata Service. HttpCode= ' . $result->getStatusCode());
            }
            return null;
        }
        return (string) $result;
    }


    /**
     * @return string
     */
    public function key()
    {
        return 'ecs_ram_role#roleName#' . $this->roleName;
    }

    /**
     * @return string
     */
    public function getProviderName()
    {
        return 'ecs_ram_role';
    }

    /**
     * @return string
     */
    public function getRoleName()
    {
        return $this->roleName;
    }

    /**
     * @return bool
     */
    public function isDisableIMDSv1()
    {
        return $this->disableIMDSv1;
    }
}
