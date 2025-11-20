<?php
/*
 * Copyright 2018 Google LLC
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

use Google\ApiCore\LongRunning\OperationsClient;
use Google\ApiCore\Middleware\CredentialsWrapperMiddleware;
use Google\ApiCore\Middleware\FixedHeaderMiddleware;
use Google\ApiCore\Middleware\OperationsMiddleware;
use Google\ApiCore\Middleware\OptionsFilterMiddleware;
use Google\ApiCore\Middleware\PagedMiddleware;
use Google\ApiCore\Middleware\RequestAutoPopulationMiddleware;
use Google\ApiCore\Middleware\RetryMiddleware;
use Google\ApiCore\Options\CallOptions;
use Google\ApiCore\Options\ClientOptions;
use Google\ApiCore\Options\TransportOptions;
use Google\ApiCore\Transport\GrpcFallbackTransport;
use Google\ApiCore\Transport\GrpcTransport;
use Google\ApiCore\Transport\RestTransport;
use Google\ApiCore\Transport\TransportInterface;
use Google\Auth\FetchAuthTokenInterface;
use Google\LongRunning\Operation;
use Google\Protobuf\Internal\Message;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * Common functions used to work with various clients.
 *
 * @internal
 */
trait GapicClientTrait
{
    use ClientOptionsTrait;
    use ValidationTrait {
        ValidationTrait::validate as traitValidate;
    }
    use GrpcSupportTrait;

    private ?TransportInterface $transport = null;
    private ?HeaderCredentialsInterface $credentialsWrapper = null;
    /** @var RetrySettings[] $retrySettings */
    private array $retrySettings = [];
    private string $serviceName = '';
    private array $agentHeader = [];
    private array $descriptors = [];
    /** @var array<callable> $middlewareCallables */
    private array $middlewareCallables = [];
    private array $transportCallMethods = [
        Call::UNARY_CALL => 'startUnaryCall',
        Call::BIDI_STREAMING_CALL => 'startBidiStreamingCall',
        Call::CLIENT_STREAMING_CALL => 'startClientStreamingCall',
        Call::SERVER_STREAMING_CALL => 'startServerStreamingCall',
    ];
    private bool $backwardsCompatibilityMode;

    /**
     * Add a middleware to the call stack by providing a callable which will be
     * invoked at the start of each call, and will return an instance of
     * {@see MiddlewareInterface} when invoked.
     *
     * The callable must have the following method signature:
     *
     *     callable(MiddlewareInterface): MiddlewareInterface
     *
     * An implementation may look something like this:
     * ```
     * $client->addMiddleware(function (MiddlewareInterface $handler) {
     *     return new class ($handler) implements MiddlewareInterface {
     *         public function __construct(private MiddlewareInterface $handler) {
     *         }
     *
     *         public function __invoke(Call $call, array $options) {
     *             // modify call and options (pre-request)
     *             $response = ($this->handler)($call, $options);
     *             // modify the response (post-request)
     *             return $response;
     *         }
     *     };
     * });
     * ```
     *
     * @param callable $middlewareCallable A callable which returns an instance
     *                 of {@see MiddlewareInterface} when invoked with a
     *                 MiddlewareInterface instance as its first argument.
     * @return void
     */
    public function addMiddleware(callable $middlewareCallable): void
    {
        $this->middlewareCallables[] = $middlewareCallable;
    }

    /**
     * Initiates an orderly shutdown in which preexisting calls continue but new
     * calls are immediately cancelled.
     *
     * @experimental
     */
    public function close()
    {
        $this->transport->close();
    }

    /**
     * Get the transport for the client. This method is protected to support
     * use by customized clients.
     *
     * @access private
     * @return TransportInterface
     */
    protected function getTransport()
    {
        return $this->transport;
    }

    /**
     * Get the credentials for the client. This method is protected to support
     * use by customized clients.
     *
     * @access private
     * @return CredentialsWrapper
     */
    protected function getCredentialsWrapper()
    {
        return $this->credentialsWrapper;
    }

    /**
     * Configures the GAPIC client based on an array of options.
     *
     * @param array $options {
     *     An array of required and optional arguments.
     *
     *     @type string $apiEndpoint
     *           The address of the API remote host, for example "example.googleapis.com. May also
     *           include the port, for example "example.googleapis.com:443"
     *     @type bool $disableRetries
     *           Determines whether or not retries defined by the client configuration should be
     *           disabled. Defaults to `false`.
     *     @type string|array $clientConfig
     *           Client method configuration, including retry settings. This option can be either a
     *           path to a JSON file, or a PHP array containing the decoded JSON data.
     *           By default this settings points to the default client config file, which is provided
     *           in the resources folder.
     *     @type string|array|FetchAuthTokenInterface|CredentialsWrapper $credentials
     *           The credentials to be used by the client to authorize API calls. This option
     *           accepts either a path to a credentials file, or a decoded credentials file as a
     *           PHP array.
     *           *Advanced usage*: In addition, this option can also accept a pre-constructed
     *           \Google\Auth\FetchAuthTokenInterface object or \Google\ApiCore\CredentialsWrapper
     *           object. Note that when one of these objects are provided, any settings in
     *           $authConfig will be ignored.
     *     @type array $credentialsConfig
     *           Options used to configure credentials, including auth token caching, for the client.
     *           For a full list of supporting configuration options, see
     *           \Google\ApiCore\CredentialsWrapper::build.
     *     @type string|TransportInterface $transport
     *           The transport used for executing network requests. May be either the string `rest`,
     *           `grpc`, or 'grpc-fallback'. Defaults to `grpc` if gRPC support is detected on the system.
     *           *Advanced usage*: Additionally, it is possible to pass in an already instantiated
     *           TransportInterface object. Note that when this objects is provided, any settings in
     *           $transportConfig, and any `$apiEndpoint` setting, will be ignored.
     *     @type array $transportConfig
     *           Configuration options that will be used to construct the transport. Options for
     *           each supported transport type should be passed in a key for that transport. For
     *           example:
     *           $transportConfig = [
     *               'grpc' => [...],
     *               'rest' => [...],
     *               'grpc-fallback' => [...],
     *           ];
     *           See the GrpcTransport::build and RestTransport::build
     *           methods for the supported options.
     *     @type string $versionFile
     *           The path to a file which contains the current version of the client.
     *     @type string $descriptorsConfigPath
     *           The path to a descriptor configuration file.
     *     @type string $serviceName
     *           The name of the service.
     *     @type string $libName
     *           The name of the client application.
     *     @type string $libVersion
     *           The version of the client application.
     *     @type string $gapicVersion
     *           The code generator version of the GAPIC library.
     *     @type callable $clientCertSource
     *           A callable which returns the client cert as a string.
     * }
     * @throws ValidationException
     */
    private function setClientOptions(array $options)
    {
        // serviceAddress is now deprecated and acts as an alias for apiEndpoint
        if (isset($options['serviceAddress'])) {
            $options['apiEndpoint'] = $this->pluck('serviceAddress', $options, false);
        }
        $this->validateNotNull($options, [
            'apiEndpoint',
            'serviceName',
            'descriptorsConfigPath',
            'clientConfig',
            'disableRetries',
            'credentialsConfig',
            'transportConfig',
        ]);
        $this->traitValidate($options, [
            'credentials',
            'transport',
            'gapicVersion',
            'libName',
            'libVersion',
        ]);

        // "hasEmulator" is not a supported Client Option, but is used
        // internally to determine if the client is running in emulator mode.
        // Therefore, we need to remove it from the $options array before
        // creating the ClientOptions.
        $hasEmulator = $this->pluck('hasEmulator', $options, false) ?? false;
        if ($this->isBackwardsCompatibilityMode()) {
            if (is_string($options['clientConfig'])) {
                // perform validation for V1 surfaces which is done in the
                // ClientOptions class for v2 surfaces.
                $options['clientConfig'] = json_decode(
                    file_get_contents($options['clientConfig']),
                    true
                );
                self::validateFileExists($options['descriptorsConfigPath']);
            }
        } else {
            // cast to ClientOptions for new surfaces only
            $options = new ClientOptions($options);
        }
        $this->serviceName = $options['serviceName'];
        $this->retrySettings = RetrySettings::load(
            $this->serviceName,
            $options['clientConfig'],
            $options['disableRetries']
        );

        $headerInfo = [
            'libName' => $options['libName'],
            'libVersion' => $options['libVersion'],
            'gapicVersion' => $options['gapicVersion'],
        ];
        // Edge case: If the client has the gRPC extension installed, but is
        // a REST-only library, then the grpcVersion header should not be set.
        if ($this->transport instanceof GrpcTransport) {
            $headerInfo['grpcVersion'] = phpversion('grpc');
        } elseif ($this->transport instanceof RestTransport
            || $this->transport instanceof GrpcFallbackTransport) {
            $headerInfo['restVersion'] = Version::getApiCoreVersion();
        }
        $this->agentHeader = AgentHeader::buildAgentHeader($headerInfo);

        // Set "client_library_name" depending on client library surface being used
        $userAgentHeader = sprintf(
            'gcloud-php-%s/%s',
            $this->isBackwardsCompatibilityMode() ? 'legacy' : 'new',
            $options['gapicVersion']
        );
        $this->agentHeader['User-Agent'] = [$userAgentHeader];

        self::validateFileExists($options['descriptorsConfigPath']);

        $descriptors = require($options['descriptorsConfigPath']);
        $this->descriptors = $descriptors['interfaces'][$this->serviceName];

        if (isset($options['apiKey'], $options['credentials'])) {
            throw new ValidationException(
                'API Keys and Credentials are mutually exclusive authentication methods and cannot be used together.'
            );
        }
        // Set the credentialsWrapper
        if (isset($options['apiKey'])) {
            $this->credentialsWrapper = new ApiKeyHeaderCredentials(
                $options['apiKey'],
                $options['credentialsConfig']['quotaProject'] ?? null
            );
        } else {
            $this->credentialsWrapper = $this->createCredentialsWrapper(
                $options['credentials'],
                $options['credentialsConfig'],
                $options['universeDomain']
            );
        }

        $transport = $options['transport'] ?: self::defaultTransport();
        $this->transport = $transport instanceof TransportInterface
            ? $transport
            : $this->createTransport(
                $options['apiEndpoint'],
                $transport,
                $options['transportConfig'],
                $options['clientCertSource'],
                $hasEmulator
            );
    }

    /**
     * @param string $apiEndpoint
     * @param string $transport
     * @param TransportOptions|array $transportConfig
     * @param callable $clientCertSource
     * @param bool $hasEmulator
     * @return TransportInterface
     * @throws ValidationException
     */
    private function createTransport(
        string $apiEndpoint,
        $transport,
        $transportConfig,
        ?callable $clientCertSource = null,
        bool $hasEmulator = false
    ) {
        if (!is_string($transport)) {
            throw new ValidationException(
                "'transport' must be a string, instead got:" .
                print_r($transport, true)
            );
        }
        $supportedTransports = self::supportedTransports();
        if (!in_array($transport, $supportedTransports)) {
            throw new ValidationException(sprintf(
                'Unexpected transport option "%s". Supported transports: %s',
                $transport,
                implode(', ', $supportedTransports)
            ));
        }
        $configForSpecifiedTransport = $transportConfig[$transport] ?? [];
        if (is_array($configForSpecifiedTransport)) {
            $configForSpecifiedTransport['clientCertSource'] = $clientCertSource;
        } else {
            $configForSpecifiedTransport->setClientCertSource($clientCertSource);
            $configForSpecifiedTransport = $configForSpecifiedTransport->toArray();
        }
        switch ($transport) {
            case 'grpc':
                // Setting the user agent for gRPC requires special handling
                if (isset($this->agentHeader['User-Agent'])) {
                    if ($configForSpecifiedTransport['stubOpts']['grpc.primary_user_agent'] ??= '') {
                        $configForSpecifiedTransport['stubOpts']['grpc.primary_user_agent'] .= ' ';
                    }
                    $configForSpecifiedTransport['stubOpts']['grpc.primary_user_agent'] .=
                        $this->agentHeader['User-Agent'][0];
                }
                return GrpcTransport::build($apiEndpoint, $configForSpecifiedTransport);
            case 'grpc-fallback':
                return GrpcFallbackTransport::build($apiEndpoint, $configForSpecifiedTransport);
            case 'rest':
                if (!isset($configForSpecifiedTransport['restClientConfigPath'])) {
                    throw new ValidationException(
                        "The 'restClientConfigPath' config is required for 'rest' transport."
                    );
                }
                $restConfigPath = $configForSpecifiedTransport['restClientConfigPath'];
                $configForSpecifiedTransport['hasEmulator'] = $hasEmulator;

                return RestTransport::build($apiEndpoint, $restConfigPath, $configForSpecifiedTransport);
            default:
                throw new ValidationException(
                    "Unexpected 'transport' option: $transport. " .
                    "Supported values: ['grpc', 'rest', 'grpc-fallback']"
                );
        }
    }

    /**
     * @param array $options
     * @return OperationsClient
     */
    private function createOperationsClient(array $options)
    {
        $this->pluckArray([
            'serviceName',
            'clientConfig',
            'descriptorsConfigPath',
        ], $options);

        // User-supplied operations client
        if ($operationsClient = $this->pluck('operationsClient', $options, false)) {
            return $operationsClient;
        }

        // operationsClientClass option
        $operationsClientClass = $this->pluck('operationsClientClass', $options, false)
            ?: OperationsCLient::class;
        return new $operationsClientClass($options);
    }

    /**
     * @return string
     */
    private static function defaultTransport()
    {
        return self::getGrpcDependencyStatus()
            ? 'grpc'
            : 'rest';
    }

    private function validateCallConfig(string $methodName)
    {
        // Ensure a method descriptor exists for the target method.
        if (!isset($this->descriptors[$methodName])) {
            throw new ValidationException("Requested method '$methodName' does not exist in descriptor configuration.");
        }
        $methodDescriptors = $this->descriptors[$methodName];

        // Ensure required descriptor configuration exists.
        if (!isset($methodDescriptors['callType'])) {
            throw new ValidationException("Requested method '$methodName' does not have a callType " .
                'in descriptor configuration.');
        }
        $callType = $methodDescriptors['callType'];

        // Validate various callType specific configurations.
        if ($callType == Call::LONGRUNNING_CALL) {
            if (!isset($methodDescriptors['longRunning'])) {
                throw new ValidationException("Requested method '$methodName' does not have a longRunning config " .
                    'in descriptor configuration.');
            }
            // @TODO: check if the client implements `OperationsClientInterface` instead
            if (!method_exists($this, 'getOperationsClient')) {
                throw new ValidationException('Client missing required getOperationsClient ' .
                    "for longrunning call '$methodName'");
            }
        } elseif ($callType == Call::PAGINATED_CALL) {
            if (!isset($methodDescriptors['pageStreaming'])) {
                throw new ValidationException("Requested method '$methodName' with callType PAGINATED_CALL does not " .
                    'have a pageStreaming in descriptor configuration.');
            }
        }

        // LRO are either Standard LRO response type or custom, which are handled by
        // startOperationCall, so no need to validate responseType for those callType.
        if ($callType != Call::LONGRUNNING_CALL) {
            if (!isset($methodDescriptors['responseType'])) {
                throw new ValidationException("Requested method '$methodName' does not have a responseType " .
                    'in descriptor configuration.');
            }
        }

        return $methodDescriptors;
    }

    /**
     * @param string $methodName
     * @param Message $request
     * @param array $optionalArgs {
     *     Call Options
     *
     *     @type array $headers                     [optional] key-value array containing headers
     *     @type int $timeoutMillis                 [optional] the timeout in milliseconds for the call
     *     @type array $transportOptions            [optional] transport-specific call options
     *     @type RetrySettings|array $retrySettings [optional] A retry settings override for the call.
     * }
     *
     * @experimental
     *
     * @return PromiseInterface
     */
    private function startAsyncCall(
        string $methodName,
        Message $request,
        array $optionalArgs = []
    ) {
        // Convert method name to the UpperCamelCase of RPC names from lowerCamelCase of GAPIC method names
        // in order to find the method in the descriptor config.
        $methodName = ucfirst($methodName);
        $methodDescriptors = $this->validateCallConfig($methodName);

        $callType = $methodDescriptors['callType'];

        switch ($callType) {
            case Call::PAGINATED_CALL:
                return $this->getPagedListResponseAsync(
                    $methodName,
                    $optionalArgs,
                    $methodDescriptors['responseType'],
                    $request,
                    $methodDescriptors['interfaceOverride'] ?? $this->serviceName
                );
            case Call::SERVER_STREAMING_CALL:
            case Call::CLIENT_STREAMING_CALL:
            case Call::BIDI_STREAMING_CALL:
                throw new ValidationException("Call type '$callType' of requested method " .
                    "'$methodName' is not supported for async execution.");
        }

        return $this->startApiCall($methodName, $request, $optionalArgs);
    }

    /**
     * @param string $methodName
     * @param Message $request
     * @param array $optionalArgs {
     *     Call Options
     *
     *     @type array $headers [optional] key-value array containing headers
     *     @type int $timeoutMillis [optional] the timeout in milliseconds for the call
     *     @type array $transportOptions [optional] transport-specific call options
     *     @type RetrySettings|array $retrySettings [optional] A retry settings
     *           override for the call.
     * }
     *
     * @experimental
     *
     * @return PromiseInterface|PagedListResponse|BidiStream|ClientStream|ServerStream
     */
    private function startApiCall(
        string $methodName,
        ?Message $request = null,
        array $optionalArgs = []
    ) {
        $methodDescriptors = $this->validateCallConfig($methodName);
        $callType = $methodDescriptors['callType'];

        // Prepare request-based headers, merge with user-provided headers,
        // which take precedence.
        $headerParams = $methodDescriptors['headerParams'] ?? [];
        $requestHeaders = $this->buildRequestParamsHeader($headerParams, $request);
        $optionalArgs['headers'] = array_merge($requestHeaders, $optionalArgs['headers'] ?? []);

        // Default the interface name, if not set, to the client's protobuf service name.
        $interfaceName = $methodDescriptors['interfaceOverride'] ?? $this->serviceName;

        // Handle call based on call type configured in the method descriptor config.
        if ($callType == Call::LONGRUNNING_CALL) {
            return $this->startOperationsCall(
                $methodName,
                $optionalArgs,
                $request,
                $this->getOperationsClient(),
                $interfaceName,
                // Custom operations will define their own operation response type, whereas standard
                // LRO defaults to the same type.
                $methodDescriptors['responseType'] ?? null
            );
        }

        // Fully-qualified name of the response message PHP class.
        $decodeType = $methodDescriptors['responseType'];

        if ($callType == Call::PAGINATED_CALL) {
            return $this->getPagedListResponse($methodName, $optionalArgs, $decodeType, $request, $interfaceName);
        }

        // Unary, and all Streaming types handled by startCall.
        return $this->startCall($methodName, $decodeType, $optionalArgs, $request, $callType, $interfaceName);
    }

    /**
     * @param string $methodName
     * @param string $decodeType
     * @param array $optionalArgs {
     *     Call Options
     *
     *     @type array $headers [optional] key-value array containing headers
     *     @type int $timeoutMillis [optional] the timeout in milliseconds for the call
     *     @type array $transportOptions [optional] transport-specific call options
     *     @type RetrySettings|array $retrySettings [optional] A retry settings
     *           override for the call.
     * }
     * @param Message $request
     * @param int $callType
     * @param string $interfaceName
     *
     * @return PromiseInterface|BidiStream|ClientStream|ServerStream
     */
    private function startCall(
        string $methodName,
        string $decodeType,
        array $optionalArgs = [],
        ?Message $request = null,
        int $callType = Call::UNARY_CALL,
        ?string $interfaceName = null
    ) {
        $optionalArgs = $this->configureCallOptions($optionalArgs);
        $callStack = $this->createCallStack(
            $this->configureCallConstructionOptions($methodName, $optionalArgs)
        );

        $descriptor = $this->descriptors[$methodName]['grpcStreaming'] ?? null;

        $call = new Call(
            $this->buildMethod($interfaceName, $methodName),
            $decodeType,
            $request,
            $descriptor,
            $callType
        );
        switch ($callType) {
            case Call::UNARY_CALL:
                $this->modifyUnaryCallable($callStack);
                break;
            case Call::BIDI_STREAMING_CALL:
            case Call::CLIENT_STREAMING_CALL:
            case Call::SERVER_STREAMING_CALL:
                $this->modifyStreamingCallable($callStack);
                break;
        }

        return $callStack($call, $optionalArgs + array_filter([
            'audience' => self::getDefaultAudience()
        ]));
    }

    /**
     * @param array $callConstructionOptions {
     *     Call Construction Options
     *
     *     @type RetrySettings $retrySettings [optional] A retry settings override
     *           For the call.
     *     @type array<string, string> $autoPopulationSettings Settings for
     *           auto population of particular request fields if unset.
     * }
     *
     * @return callable
     */
    private function createCallStack(array $callConstructionOptions)
    {
        $fixedHeaders = $this->agentHeader;
        if ($quotaProject = $this->credentialsWrapper->getQuotaProject()) {
            $fixedHeaders += [
                'X-Goog-User-Project' => [$quotaProject]
            ];
        }

        if (isset($this->apiVersion)) {
            $fixedHeaders += [
                'X-Goog-Api-Version' => [$this->apiVersion]
            ];
        }

        $callStack = function (Call $call, array $options) {
            $startCallMethod = $this->transportCallMethods[$call->getCallType()];
            return $this->transport->$startCallMethod($call, $options);
        };
        $callStack = new CredentialsWrapperMiddleware($callStack, $this->credentialsWrapper);
        $callStack = new FixedHeaderMiddleware($callStack, $fixedHeaders, true);
        $callStack = new RetryMiddleware($callStack, $callConstructionOptions['retrySettings']);
        $callStack = new RequestAutoPopulationMiddleware(
            $callStack,
            $callConstructionOptions['autoPopulationSettings'],
        );
        $callStack = new OptionsFilterMiddleware($callStack, [
            'headers',
            'timeoutMillis',
            'transportOptions',
            'metadataCallback',
            'audience',
            'metadataReturnType'
        ]);

        foreach (\array_reverse($this->middlewareCallables) as $fn) {
            /** @var MiddlewareInterface $callStack */
            $callStack = $fn($callStack);
        }

        return $callStack;
    }

    /**
     * @param string $methodName
     * @param array $optionalArgs {
     *     Optional arguments
     *
     *     @type RetrySettings|array $retrySettings [optional] A retry settings
     *           override for the call.
     * }
     *
     * @return array
     */
    private function configureCallConstructionOptions(string $methodName, array $optionalArgs)
    {
        $retrySettings = $this->retrySettings[$methodName];
        $autoPopulatedFields = $this->descriptors[$methodName]['autoPopulatedFields'] ?? [];
        // Allow for retry settings to be changed at call time
        if (isset($optionalArgs['retrySettings'])) {
            if ($optionalArgs['retrySettings'] instanceof RetrySettings) {
                $retrySettings = $optionalArgs['retrySettings'];
            } else {
                $retrySettings = $retrySettings->with(
                    $optionalArgs['retrySettings']
                );
            }
        }
        return [
            'retrySettings' => $retrySettings,
            'autoPopulationSettings' => $autoPopulatedFields,
        ];
    }

    /**
     * @return array
     */
    private function configureCallOptions(array $optionalArgs): array
    {
        if ($this->isBackwardsCompatibilityMode()) {
            return $optionalArgs;
        }
        // cast to CallOptions for new surfaces only
        return (new CallOptions($optionalArgs))->toArray();
    }

    /**
     * @param string $methodName
     * @param array $optionalArgs {
     *     Call Options
     *
     *     @type array $headers [optional] key-value array containing headers
     *     @type int $timeoutMillis [optional] the timeout in milliseconds for the call
     *     @type array $transportOptions [optional] transport-specific call options
     * }
     * @param Message $request
     * @param OperationsClient|object $client
     * @param string $interfaceName
     * @param string $operationClass If provided, will be used instead of the default
     *                               operation response class of {@see \Google\LongRunning\Operation}.
     *
     * @return PromiseInterface
     */
    private function startOperationsCall(
        string $methodName,
        array $optionalArgs,
        Message $request,
        $client,
        ?string $interfaceName = null,
        ?string $operationClass = null
    ) {
        $optionalArgs = $this->configureCallOptions($optionalArgs);
        $callStack = $this->createCallStack(
            $this->configureCallConstructionOptions($methodName, $optionalArgs)
        );
        $descriptor = $this->descriptors[$methodName]['longRunning'];
        $metadataReturnType = null;

        // Call the methods supplied in "additionalArgumentMethods" on the request Message object
        // to build the "additionalOperationArguments" option for the operation response.
        if (isset($descriptor['additionalArgumentMethods'])) {
            $additionalArgs = [];
            foreach ($descriptor['additionalArgumentMethods'] as $additionalArgsMethodName) {
                $additionalArgs[] = $request->$additionalArgsMethodName();
            }
            $descriptor['additionalOperationArguments'] = $additionalArgs;
            unset($descriptor['additionalArgumentMethods']);
        }

        if (isset($descriptor['metadataReturnType'])) {
            $metadataReturnType = $descriptor['metadataReturnType'];
        }

        $callStack = new OperationsMiddleware($callStack, $client, $descriptor);

        $call = new Call(
            $this->buildMethod($interfaceName, $methodName),
            $operationClass ?: Operation::class,
            $request,
            [],
            Call::UNARY_CALL
        );

        $this->modifyUnaryCallable($callStack);
        return $callStack($call, $optionalArgs + array_filter([
            'metadataReturnType' => $metadataReturnType,
            'audience' => self::getDefaultAudience()
        ]));
    }

    /**
     * @param string $methodName
     * @param array $optionalArgs
     * @param string $decodeType
     * @param Message $request
     * @param string $interfaceName
     *
     * @return PagedListResponse
     */
    private function getPagedListResponse(
        string $methodName,
        array $optionalArgs,
        string $decodeType,
        Message $request,
        ?string $interfaceName = null
    ) {
        return $this->getPagedListResponseAsync(
            $methodName,
            $optionalArgs,
            $decodeType,
            $request,
            $interfaceName
        )->wait();
    }

    /**
     * @param string $methodName
     * @param array $optionalArgs
     * @param string $decodeType
     * @param Message $request
     * @param string $interfaceName
     *
     * @return PromiseInterface
     */
    private function getPagedListResponseAsync(
        string $methodName,
        array $optionalArgs,
        string $decodeType,
        Message $request,
        ?string $interfaceName = null
    ) {
        $optionalArgs = $this->configureCallOptions($optionalArgs);
        $callStack = $this->createCallStack(
            $this->configureCallConstructionOptions($methodName, $optionalArgs)
        );
        $descriptor = new PageStreamingDescriptor(
            $this->descriptors[$methodName]['pageStreaming']
        );
        $callStack = new PagedMiddleware($callStack, $descriptor);

        $call = new Call(
            $this->buildMethod($interfaceName, $methodName),
            $decodeType,
            $request,
            [],
            Call::UNARY_CALL
        );

        $this->modifyUnaryCallable($callStack);
        return $callStack($call, $optionalArgs + array_filter([
            'audience' => self::getDefaultAudience()
        ]));
    }

    /**
     * @param string $interfaceName
     * @param string $methodName
     *
     * @return string
     */
    private function buildMethod(?string $interfaceName = null, ?string $methodName = null)
    {
        return sprintf(
            '%s/%s',
            $interfaceName ?: $this->serviceName,
            $methodName
        );
    }

    /**
     * @param array $headerParams
     * @param Message|null $request
     *
     * @return array
     */
    private function buildRequestParamsHeader(array $headerParams, ?Message $request = null)
    {
        $headers = [];

        // No request message means no request-based headers.
        if (!$request) {
            return $headers;
        }

        foreach ($headerParams as $headerParam) {
            $msg = $request;
            $value = null;
            foreach ($headerParam['fieldAccessors'] as $accessor) {
                $value = $msg->$accessor();

                // In case the field in question is nested in another message,
                // skip the header param when the nested message field is unset.
                $msg = $value;
                if (is_null($msg)) {
                    break;
                }
            }

            $keyName = $headerParam['keyName'];

            // If there are value pattern matchers configured and the target
            // field was set, evaluate the matchers in the order that they were
            // annotated in with last one matching wins.
            $original = $value;
            $matchers = isset($headerParam['matchers']) && !is_null($value) ?
                $headerParam['matchers'] :
                [];
            foreach ($matchers as $matcher) {
                $matches = [];
                if (preg_match($matcher, $original, $matches)) {
                    $value = $matches[$keyName];
                }
            }

            // If there are no matches or the target field was unset, skip this
            // header param.
            if (!$value) {
                continue;
            }

            $headers[$keyName] = $value;
        }

        $requestParams = new RequestParamsHeaderDescriptor($headers);

        return $requestParams->getHeader();
    }

    /**
     * The SERVICE_ADDRESS constant is set by GAPIC clients
     */
    private static function getDefaultAudience()
    {
        if (!defined('self::SERVICE_ADDRESS')) {
            return null;
        }
        return 'https://' . self::SERVICE_ADDRESS . '/'; // @phpstan-ignore-line
    }

    /**
     * Modify the unary callable.
     *
     * @param callable $callable
     * @access private
     */
    protected function modifyUnaryCallable(callable &$callable)
    {
        // Do nothing - this method exists to allow callable modification by partial veneers.
    }

    /**
     * Modify the streaming callable.
     *
     * @param callable $callable
     * @access private
     */
    protected function modifyStreamingCallable(callable &$callable)
    {
        // Do nothing - this method exists to allow callable modification by partial veneers.
    }

    /**
     * @internal
     */
    private function isBackwardsCompatibilityMode(): bool
    {
        return $this->backwardsCompatibilityMode
            ?? $this->backwardsCompatibilityMode = substr(__CLASS__, -11) === 'GapicClient';
    }
}
