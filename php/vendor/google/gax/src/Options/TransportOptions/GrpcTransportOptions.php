<?php
/*
 * Copyright 2023 Google LLC
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

namespace Google\ApiCore\Options\TransportOptions;

use ArrayAccess;
use Closure;
use Google\ApiCore\Options\OptionsTrait;
use Google\ApiCore\Transport\Grpc\UnaryInterceptorInterface;
use Grpc\Channel;
use Grpc\Interceptor;

/**
 * The GrpcTransportOptions class provides typing to the associative array of options used to
 * configure {@see \Google\ApiCore\Transport\GrpcTransport}.
 */
class GrpcTransportOptions implements ArrayAccess
{
    use OptionsTrait;

    private array $stubOpts;

    private ?Channel $channel;

    /**
     * @var Interceptor[]|UnaryInterceptorInterface[]
     */
    private array $interceptors;

    private ?Closure $clientCertSource;

    /**
     * @param array $options {
     *    Config options used to construct the gRPC transport.
     *
     *    @type array $stubOpts Options used to construct the gRPC stub (see
     *          {@link https://grpc.github.io/grpc/core/group__grpc__arg__keys.html}).
     *    @type Channel $channel Grpc channel to be used.
     *    @type Interceptor[]|UnaryInterceptorInterface[] $interceptors *EXPERIMENTAL*
     *          Interceptors used to intercept RPC invocations before a call starts.
     *          Please note that implementations of
     *          {@see \Google\ApiCore\Transport\Grpc\UnaryInterceptorInterface} are
     *          considered deprecated and support will be removed in a future
     *          release. To prepare for this, please take the time to convert
     *          `UnaryInterceptorInterface` implementations over to a class which
     *          extends {@see Grpc\Interceptor}.
     *    @type callable $clientCertSource A callable which returns the client cert as a string.
     * }
     */
    public function __construct(array $options)
    {
        $this->fromArray($options);
    }

    /**
     * Sets the array of options as class properites.
     *
     * @param array $arr See the constructor for the list of supported options.
     */
    private function fromArray(array $arr): void
    {
        $this->setStubOpts($arr['stubOpts'] ?? []);
        $this->setChannel($arr['channel'] ?? null);
        $this->setInterceptors($arr['interceptors'] ?? []);
        $this->setClientCertSource($arr['clientCertSource'] ?? null);
    }

    /**
     * @param array $stubOpts
     */
    public function setStubOpts(array $stubOpts)
    {
        $this->stubOpts = $stubOpts;
    }

    /**
     * @param ?Channel $channel
     */
    public function setChannel(?Channel $channel)
    {
        $this->channel = $channel;
    }

    /**
     * @param Interceptor[]|UnaryInterceptorInterface[] $interceptors
     */
    public function setInterceptors(array $interceptors)
    {
        $this->interceptors = $interceptors;
    }

    /**
     * @param ?callable $clientCertSource
     */
    public function setClientCertSource(?callable $clientCertSource)
    {
        if (!is_null($clientCertSource)) {
            $clientCertSource = Closure::fromCallable($clientCertSource);
        }
        $this->clientCertSource = $clientCertSource;
    }
}
