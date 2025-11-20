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

namespace Google\ApiCore\Middleware;

use Google\ApiCore\BidiStream;
use Google\ApiCore\Call;
use Google\ApiCore\ClientStream;
use Google\ApiCore\ServerStream;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * Middlewares must take a MiddlewareInterface as their first constructor
 * argument {@see Google\ApiCore\Middleware\ResponseMetadataMiddleware}, which
 * represents the next middleware in the chain. This next middleware MUST be
 * invoked by this MiddlewareInterface, and the result must be returned as part
 * of the `__invoke` method implementation.
 *
 * To create your own middleware, first implement the interface, as well as pass the handler
 * in through the constructor:
 *
 * ```
 * use Google\ApiCore\Call;
 * use Google\ApiCore\Middleware\MiddlewareInterface;
 *
 * class MyTestMiddleware implements MiddlewareInterface
 * {
 *     public function __construct(MiddlewareInterface $handler)
 *      {
 *.         $this->handler = $handler;
 *      }
 *      public function __invoke(Call $call, array $options)
 *      {
 *          echo "Logging info about the call: " . $call->getMethod();
 *          return ($this->handler)($call, $options);
 *      }
 * }
 * ```
 *
 * Next, add the middleware to any class implementing `GapicClientTrait` by passing in a
 * callable which returns the new middleware:
 *
 * ```
 * $client = new ExampleGoogleApiServiceClient();
 * $client->addMiddleware(function (MiddlewareInterface $handler) {
 *     return new MyTestMiddleware($handler);
 * });
 * ```
 */
interface MiddlewareInterface
{
    /**
     * Modify or observe the API call request and response.
     * The returned value must include the result of the next MiddlewareInterface invocation in the
     * chain.
     *
     * @param Call $call
     * @param array $options
     * @return PromiseInterface|ClientStream|ServerStream|BidiStream
     */
    public function __invoke(Call $call, array $options);
}
