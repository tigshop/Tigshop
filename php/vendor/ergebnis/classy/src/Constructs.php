<?php

declare(strict_types=1);

/**
 * Copyright (c) 2017-2023 Andreas Möller
 *
 * For the full copyright and license information, please view
 * the LICENSE.md file that was distributed with this source code.
 *
 * @see https://github.com/ergebnis/classy
 */

namespace Ergebnis\Classy;

final class Constructs
{
    /**
     * Returns an array of names of classy constructs (classes, interfaces, traits) found in source.
     *
     * @throws Exception\ParseError
     *
     * @return array<int, Construct>
     */
    public static function fromSource(string $source): array
    {
        $constructs = [];

        try {
            $sequence = \token_get_all(
                $source,
                \TOKEN_PARSE,
            );
        } catch (\ParseError $exception) {
            throw Exception\ParseError::fromParseError($exception);
        }

        $count = \count($sequence);
        $namespacePrefix = '';

        $namespaceSegmentOrNamespaceTokens = [
            \T_STRING,
            \T_NAME_QUALIFIED,
        ];

        $classyTokens = [
            \T_CLASS,
            \T_ENUM,
            \T_INTERFACE,
            \T_TRAIT,
        ];

        for ($index = 0; $index < $count; ++$index) {
            $token = $sequence[$index];

            // collect namespace name
            if (\is_array($token) && \T_NAMESPACE === $token[0]) {
                $namespaceSegments = [];

                // collect namespace segments
                for ($index = self::significantAfter($index, $sequence, $count); $index < $count; ++$index) {
                    $token = $sequence[$index];

                    if (\is_array($token) && !\in_array($token[0], $namespaceSegmentOrNamespaceTokens, true)) {
                        continue;
                    }

                    $content = self::content($token);

                    if (\in_array($content, ['{', ';'], true)) {
                        break;
                    }

                    $namespaceSegments[] = $content;
                }

                $namespace = \implode('\\', $namespaceSegments);
                $namespacePrefix = $namespace . '\\';
            }

            // skip non-classy tokens
            if (!\is_array($token) || !\in_array($token[0], $classyTokens, true)) {
                continue;
            }

            // skip anonymous classes
            if (\T_CLASS === $token[0]) {
                $current = self::significantBefore($index, $sequence);
                $token = $sequence[$current];

                // if significant token before T_CLASS is T_NEW, it's an instantiation of an anonymous class
                if (\is_array($token) && \T_NEW === $token[0]) {
                    continue;
                }
            }

            $index = self::significantAfter($index, $sequence, $count);
            $token = $sequence[$index];

            $constructs[] = Construct::fromName($namespacePrefix . self::content($token));
        }

        \usort($constructs, static function (Construct $a, Construct $b): int {
            return \strcmp(
                $a->name(),
                $b->name(),
            );
        });

        return $constructs;
    }

    /**
     * Returns an array of constructs defined in a directory.
     *
     * @throws Exception\DirectoryDoesNotExist
     * @throws Exception\MultipleDefinitionsFound
     *
     * @return array<int, Construct>
     */
    public static function fromDirectory(string $directory): array
    {
        if (!\is_dir($directory)) {
            throw Exception\DirectoryDoesNotExist::fromDirectory($directory);
        }

        $iterator = new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator(
            $directory,
            \RecursiveDirectoryIterator::FOLLOW_SYMLINKS,
        ));

        $constructs = [];

        foreach ($iterator as $fileInfo) {
            /** @var \SplFileInfo $fileInfo */
            if (!$fileInfo->isFile()) {
                continue;
            }

            if ($fileInfo->getBasename('.php') === $fileInfo->getBasename()) {
                continue;
            }

            /** @var string $fileName */
            $fileName = $fileInfo->getRealPath();

            /** @var string $source */
            $source = \file_get_contents($fileName);

            try {
                $constructsFromFile = self::fromSource($source);
            } catch (Exception\ParseError $exception) {
                throw Exception\ParseError::fromFileNameAndParseError(
                    $fileName,
                    $exception,
                );
            }

            if (0 === \count($constructsFromFile)) {
                continue;
            }

            foreach ($constructsFromFile as $construct) {
                $name = $construct->name();

                if (\array_key_exists($name, $constructs)) {
                    $construct = $constructs[$name];
                }

                $constructs[$name] = $construct->definedIn($fileName);
            }
        }

        \usort($constructs, static function (Construct $a, Construct $b): int {
            return \strcmp(
                $a->name(),
                $b->name(),
            );
        });

        $constructsWithMultipleDefinitions = \array_filter($constructs, static function (Construct $construct): bool {
            return 1 < \count($construct->fileNames());
        });

        if (0 < \count($constructsWithMultipleDefinitions)) {
            throw Exception\MultipleDefinitionsFound::fromConstructs($constructsWithMultipleDefinitions);
        }

        return \array_values($constructs);
    }

    /**
     * Returns the index of the significant token after the index.
     *
     * @param array<int, array{0: int, 1: string, 2: int}|string> $sequence
     */
    private static function significantAfter(
        int $index,
        array $sequence,
        int $count,
    ): int {
        for ($current = $index + 1; $current < $count; ++$current) {
            $token = $sequence[$current];

            if (\is_array($token) && \in_array($token[0], [\T_COMMENT, \T_DOC_COMMENT, \T_WHITESPACE], true)) {
                continue;
            }

            return $current;
        }

        throw Exception\ShouldNotHappen::create();
    }

    /**
     * Returns the index of the significant token after the index.
     *
     * @param array<int, array{0: int, 1: string, 2: int}|string> $sequence
     */
    private static function significantBefore(
        int $index,
        array $sequence,
    ): int {
        for ($current = $index - 1; -1 < $current; --$current) {
            $token = $sequence[$current];

            if (\is_array($token) && \in_array($token[0], [\T_COMMENT, \T_DOC_COMMENT, \T_WHITESPACE], true)) {
                continue;
            }

            return $current;
        }

        throw Exception\ShouldNotHappen::create();
    }

    /**
     * Returns the string content of a token.
     *
     * @param array{0: int, 1: string, 2: int}|string $token
     */
    private static function content($token): string
    {
        if (\is_array($token)) {
            return $token[1];
        }

        return $token;
    }
}
