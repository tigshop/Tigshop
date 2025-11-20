<?php
/*
 * Copyright 2022 Google LLC
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

/**
 * Provides functionality for loading a resource name template map from a descriptor config,
 * retrieving a PathTemplate, and parsing values using registered templates.
 *
 * @internal
 */
trait ResourceHelperTrait
{
    /** @var array|null */
    private static $templateMap;

    /**
     * placeholder for this function like we have in GapicClientTrait
     */
    private static function getClientDefaults()
    {
        return [];
    }

    private static function registerPathTemplates()
    {
        $templateConfigPath = self::getClientDefaults()['descriptorsConfigPath'];
        // self::SERVICE_NAME is a constant set per-client.
        self::loadPathTemplates($templateConfigPath, self::SERVICE_NAME);
    }

    private static function loadPathTemplates(string $configPath, string $serviceName)
    {
        // TODO: Add void return type hint.
        if (!is_null(self::$templateMap)) {
            return;
        }

        $descriptors = require($configPath);
        $templates = $descriptors['interfaces'][$serviceName]['templateMap'] ?? [];
        self::$templateMap = [];
        foreach ($templates as $name => $template) {
            self::$templateMap[$name] = new PathTemplate($template);
        }
    }

    private static function getPathTemplate(string $key)
    {
        // TODO: Add nullable return type reference once PHP 7.1 is minimum.
        if (is_null(self::$templateMap)) {
            self::registerPathTemplates();
        }
        return self::$templateMap[$key] ?? null;
    }

    private static function parseFormattedName(string $formattedName, ?string $template = null): array
    {
        if (is_null(self::$templateMap)) {
            self::registerPathTemplates();
        }
        if ($template) {
            if (!isset(self::$templateMap[$template])) {
                throw new ValidationException("Template name $template does not exist");
            }

            return self::$templateMap[$template]->match($formattedName);
        }

        foreach (self::$templateMap as $templateName => $pathTemplate) {
            try {
                return $pathTemplate->match($formattedName);
            } catch (ValidationException $ex) {
                // Swallow the exception to continue trying other path templates
            }
        }

        throw new ValidationException("Input did not match any known format. Input: $formattedName");
    }
}
