<?php

namespace AlibabaCloud\Credentials\Providers;

abstract class SessionCredentialsProvider implements CredentialsProvider
{
    /**
     * @var array
     */
    protected static $credentialsCache = [];

    /**
     * Expiration time slot for temporary security credentials.
     *
     * @var int
     */
    protected $expirationSlot = 180;

    /**
     * @var string
     */
    protected $error = 'Result contains no credentials';

    /**
     * Get the credentials from the cache in the validity period.
     *
     * @return array|null
     */
    protected function getCredentialsInCache()
    {
        if (isset(self::$credentialsCache[$this->key()])) {
            $result = self::$credentialsCache[$this->key()];
            if (\strtotime($result['Expiration']) - \time() >= $this->expirationSlot) {
                return $result;
            }
        }

        return null;
    }

    /**
     * Cache credentials.
     *
     * @param array $credential
     */
    protected function cache(array $credential)
    {
        self::$credentialsCache[$this->key()] = $credential;
    }

    /**
     * Get credential.
     *
     * @return Credentials
     */
    public function getCredentials()
    {
        $credentials = $this->getCredentialsInCache();

        if ($credentials === null) {
            $credentials = $this->refreshCredentials();
            $this->cache($credentials);
        }

        return new Credentials([
            'accessKeyId' => $credentials['AccessKeyId'],
            'accessKeySecret' => $credentials['AccessKeySecret'],
            'securityToken' => $credentials['SecurityToken'],
            'expiration' => \strtotime($credentials['Expiration']),
            'providerName' => $this->getProviderName(),
        ]);
    }


    /**
     * @return array
     */
    abstract function refreshCredentials();

    /**
     * Get the toString of the credentials provider as the key.
     *
     * @return string
     */
    abstract function key();
}
