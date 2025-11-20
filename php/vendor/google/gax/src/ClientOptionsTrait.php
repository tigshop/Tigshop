<?php
/*
 * Copyright 2024 Google LLC
 * All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without
 * modification, are permitted provided that the following conditions are
 * met:
 *
 *     * Redistributions of source code must retain the above copyright
 * notice, this list of conditions and the following disclaimer.
 *     * Redistributions in binary form must reproduce the above
 * copyright notice, this list of conditions and the following disclaimer
 * in the documentation and/or other materials provided with the
 * distribution.
 *     * Neither the name of Google Inc. nor the names of its
 * contributors may be used to endorse or promote products derived from
 * this software without specific prior written permission.
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
 * A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
 * OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
 * SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
 * LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
 * DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
 * THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 */

namespace Google\ApiCore;

use Google\Auth\CredentialsLoader;
use Google\Auth\FetchAuthTokenInterface;
use Google\Auth\GetUniverseDomainInterface;
use Grpc\Gcp\ApiConfig;
use Grpc\Gcp\Config;

/**
 * Common functions used to work with various clients.
 *
 * @internal
 */
trait ClientOptionsTrait
{
    use ArrayTrait;

    private static $gapicVersionFromFile;

    private static function getGapicVersion(array $options)
    {
        if (isset($options['libVersion'])) {
            return $options['libVersion'];
        }
        if (!isset(self::$gapicVersionFromFile)) {
            self::$gapicVersionFromFile = AgentHeader::readGapicVersionFromFile(__CLASS__);
        }
        return self::$gapicVersionFromFile;
    }

    private static function initGrpcGcpConfig(string $hostName, string $confPath)
    {
        $apiConfig = new ApiConfig();
        $apiConfig->mergeFromJsonString(file_get_contents($confPath));
        $config = new Config($hostName, $apiConfig);
        return $config;
    }

    /**
     * Get default options. This function should be "overridden" by clients using late static
     * binding to provide default options to the client.
     *
     * @return array
     * @access private
     */
    private static function getClientDefaults()
    {
        return [];
    }

    private function buildClientOptions(array $options)
    {
        // Build $defaultOptions starting from top level
        // variables, then going into deeper nesting, so that
        // we will not encounter missing keys
        $defaultOptions = self::getClientDefaults();
        $defaultOptions += [
            'disableRetries' => false,
            'credentials' => null,
            'credentialsConfig' => [],
            'transport' => null,
            'transportConfig' => [],
            'gapicVersion' => self::getGapicVersion($options),
            'libName' => null,
            'libVersion' => null,
            'apiEndpoint' => null,
            'clientCertSource' => null,
            'universeDomain' => null,
        ];

        $supportedTransports = $this->supportedTransports();
        foreach ($supportedTransports as $transportName) {
            if (!array_key_exists($transportName, $defaultOptions['transportConfig'])) {
                $defaultOptions['transportConfig'][$transportName] = [];
            }
        }
        if (in_array('grpc', $supportedTransports)) {
            $defaultOptions['transportConfig']['grpc'] = [
                'stubOpts' => ['grpc.service_config_disable_resolution' => 1]
            ];
        }

        // Keep track of the API Endpoint
        $apiEndpoint = $options['apiEndpoint'] ?? null;

        // Merge defaults into $options starting from top level
        // variables, then going into deeper nesting, so that
        // we will not encounter missing keys
        $options += $defaultOptions;
        $options['credentialsConfig'] += $defaultOptions['credentialsConfig'];
        $options['transportConfig'] += $defaultOptions['transportConfig'];  // @phpstan-ignore-line
        if (isset($options['transportConfig']['grpc'])) {
            $options['transportConfig']['grpc'] += $defaultOptions['transportConfig']['grpc'];
            $options['transportConfig']['grpc']['stubOpts'] += $defaultOptions['transportConfig']['grpc']['stubOpts'];
        }
        if (isset($options['transportConfig']['rest'])) {
            $options['transportConfig']['rest'] += $defaultOptions['transportConfig']['rest'];
        }

        // These calls do not apply to "New Surface" clients.
        if ($this->isBackwardsCompatibilityMode()) {
            $preModifiedOptions = $options;
            $this->modifyClientOptions($options);
            // NOTE: this is required to ensure backwards compatiblity with $options['apiEndpoint']
            if ($options['apiEndpoint'] !== $preModifiedOptions['apiEndpoint']) {
                $apiEndpoint = $options['apiEndpoint'];
            }

            // serviceAddress is now deprecated and acts as an alias for apiEndpoint
            if (isset($options['serviceAddress'])) {
                $apiEndpoint = $this->pluck('serviceAddress', $options, false);
            }
        } else {
            // Ads is using this method in their new surface clients, so we need to call it.
            // However, this method is not used anywhere else for the new surface clients
            // @TODO: Remove this in GAX V2
            $this->modifyClientOptions($options);
        }
        // If an API endpoint is different form the default, ensure the "audience" does not conflict
        // with the custom endpoint by setting "user defined" scopes.
        if ($apiEndpoint
            && $apiEndpoint != $defaultOptions['apiEndpoint']
            && empty($options['credentialsConfig']['scopes'])
            && !empty($options['credentialsConfig']['defaultScopes'])
        ) {
            $options['credentialsConfig']['scopes'] = $options['credentialsConfig']['defaultScopes'];
        }

        // mTLS: detect and load the default clientCertSource if the environment variable
        // "GOOGLE_API_USE_CLIENT_CERTIFICATE" is true, and the cert source is available
        if (empty($options['clientCertSource']) && CredentialsLoader::shouldLoadClientCertSource()) {
            if ($defaultCertSource = CredentialsLoader::getDefaultClientCertSource()) {
                $options['clientCertSource'] = function () use ($defaultCertSource) {
                    $cert = call_user_func($defaultCertSource);

                    // the key and the cert are returned in one string
                    return [$cert, $cert];
                };
            }
        }

        // mTLS: If no apiEndpoint has been supplied by the user, and either
        // GOOGLE_API_USE_MTLS_ENDPOINT tells us to, or mTLS is available, use the mTLS endpoint.
        if (is_null($apiEndpoint) && $this->shouldUseMtlsEndpoint($options)) {
            $apiEndpoint = self::determineMtlsEndpoint($options['apiEndpoint']);
        }

        // If the user has not supplied a universe domain, use the environment variable if set.
        // Otherwise, use the default ("googleapis.com").
        $options['universeDomain'] ??= getenv('GOOGLE_CLOUD_UNIVERSE_DOMAIN')
            ?: GetUniverseDomainInterface::DEFAULT_UNIVERSE_DOMAIN;

        // mTLS: It is not valid to configure mTLS outside of "googleapis.com" (yet)
        if (isset($options['clientCertSource'])
            && $options['universeDomain'] !== GetUniverseDomainInterface::DEFAULT_UNIVERSE_DOMAIN
        ) {
            throw new ValidationException(
                'mTLS is not supported outside the "googleapis.com" universe'
            );
        }

        if (is_null($apiEndpoint)) {
            if (defined('self::SERVICE_ADDRESS_TEMPLATE')) {
                // Derive the endpoint from the service address template and the universe domain
                $apiEndpoint = str_replace(
                    'UNIVERSE_DOMAIN',
                    $options['universeDomain'],
                    self::SERVICE_ADDRESS_TEMPLATE
                );
            } else {
                // For older clients, the service address template does not exist. Use the default
                // endpoint instead.
                $apiEndpoint = $defaultOptions['apiEndpoint'];
            }
        }

        if (extension_loaded('sysvshm')
            && isset($options['gcpApiConfigPath'])
            && file_exists($options['gcpApiConfigPath'])
            && !empty($apiEndpoint)
        ) {
            $grpcGcpConfig = self::initGrpcGcpConfig(
                $apiEndpoint,
                $options['gcpApiConfigPath']
            );

            if (!array_key_exists('stubOpts', $options['transportConfig']['grpc'])) {
                $options['transportConfig']['grpc']['stubOpts'] = [];
            }

            $options['transportConfig']['grpc']['stubOpts'] += [
                'grpc_call_invoker' => $grpcGcpConfig->callInvoker()
            ];
        }

        $options['apiEndpoint'] = $apiEndpoint;

        return $options;
    }

    private function shouldUseMtlsEndpoint(array $options)
    {
        $mtlsEndpointEnvVar = getenv('GOOGLE_API_USE_MTLS_ENDPOINT');
        if ('always' === $mtlsEndpointEnvVar) {
            return true;
        }
        if ('never' === $mtlsEndpointEnvVar) {
            return false;
        }
        // For all other cases, assume "auto" and return true if clientCertSource exists
        return !empty($options['clientCertSource']);
    }

    private static function determineMtlsEndpoint(string $apiEndpoint)
    {
        $parts = explode('.', $apiEndpoint);
        if (count($parts) < 3) {
            return $apiEndpoint; // invalid endpoint!
        }
        return sprintf('%s.mtls.%s', array_shift($parts), implode('.', $parts));
    }

    /**
     * @param mixed $credentials
     * @param array $credentialsConfig
     * @return CredentialsWrapper
     * @throws ValidationException
     */
    private function createCredentialsWrapper($credentials, array $credentialsConfig, string $universeDomain)
    {
        if (is_null($credentials)) {
            // If the user has explicitly set the apiKey option, use Api Key credentials
            return CredentialsWrapper::build($credentialsConfig, $universeDomain);
        }

        if (is_string($credentials) || is_array($credentials)) {
            return CredentialsWrapper::build(['keyFile' => $credentials] + $credentialsConfig, $universeDomain);
        }

        if ($credentials instanceof FetchAuthTokenInterface) {
            $authHttpHandler = $credentialsConfig['authHttpHandler'] ?? null;
            return new CredentialsWrapper($credentials, $authHttpHandler, $universeDomain);
        }

        if ($credentials instanceof CredentialsWrapper) {
            return $credentials;
        }

        throw new ValidationException(sprintf(
            'Unexpected value in $auth option, got: %s',
            print_r($credentials, true)
        ));
    }

    /**
     * This defaults to all three transports, which One-Platform supports.
     * Discovery clients should define this function and only return ['rest'].
     */
    private static function supportedTransports()
    {
        return ['grpc', 'grpc-fallback', 'rest'];
    }

    // Gapic Client Extension Points
    // The methods below provide extension points that can be used to customize client
    // functionality. These extension points are currently considered
    // private and may change at any time.

    /**
     * Modify options passed to the client before calling setClientOptions.
     *
     * @param array $options
     * @access private
     * @internal
     */
    protected function modifyClientOptions(array &$options)
    {
        // Do nothing - this method exists to allow option modification by partial veneers.
    }

    /**
     * @internal
     */
    private function isBackwardsCompatibilityMode(): bool
    {
        return false;
    }
}
