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
namespace Google\ApiCore\Middleware;

use Google\Api\FieldInfo\Format;
use Google\ApiCore\Call;
use GuzzleHttp\Promise\PromiseInterface;
use Ramsey\Uuid\Uuid;

/**
 * Middleware that adds autopopulation functionality. This middlware is
 * added iff auto population settings are present in the resource
 * descriptor config for the rpc method in context.
 *
 * @internal
 */
class RequestAutoPopulationMiddleware implements MiddlewareInterface
{
    /** @var callable */
    private $nextHandler;

    /** @var array<string, string> */
    private $autoPopulationSettings;

    public function __construct(
        callable $nextHandler,
        array $autoPopulationSettings
    ) {
        $this->nextHandler = $nextHandler;
        $this->autoPopulationSettings = $autoPopulationSettings;
    }

    /**
     * @param Call $call
     * @param array $options
     *
     * @return PromiseInterface
     */
    public function __invoke(Call $call, array $options)
    {
        $next = $this->nextHandler;

        if (empty($this->autoPopulationSettings)) {
            return $next($call, $options);
        }

        $request = $call->getMessage();
        foreach ($this->autoPopulationSettings as $fieldName => $valueType) {
            $getFieldName = 'get' . ucwords($fieldName);
            // We use a getter instead of a hazzer here because there's no need to
            // differentiate between isset and an empty default value. Even if a
            // field is explicitly set to an empty string, we want to autopopulate it.
            if (empty($request->$getFieldName())) {
                $setFieldName = 'set' . ucwords($fieldName);
                switch ($valueType) {
                    case Format::UUID4:
                        $request->$setFieldName(Uuid::uuid4()->toString());
                        break;
                    default:
                        throw new \UnexpectedValueException(sprintf(
                            'Value type %s::%s not supported for auto population of the field %s',
                            Format::class,
                            Format::name($valueType),
                            $fieldName
                        ));
                }
            }
        }
        $call = $call->withMessage($request);
        return $next(
            $call,
            $options
        );
    }
}
