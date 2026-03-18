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

namespace Ergebnis\Classy\Exception;

use Ergebnis\Classy\Construct;

final class MultipleDefinitionsFound extends \RuntimeException implements ExceptionInterface
{
    /**
     * @var array<int, Construct>
     */
    private array $constructs = [];

    /**
     * Returns a new exception from constructs.
     *
     * @param array<int, Construct> $constructs
     */
    public static function fromConstructs(array $constructs): self
    {
        $exception = new self(\sprintf(
            "Multiple definitions have been found for the following constructs:\n\n%s",
            \implode("\n", \array_map(static function (Construct $construct): string {
                return \sprintf(
                    ' - "%s" defined in "%s"',
                    $construct->name(),
                    \implode('", "', $construct->fileNames()),
                );
            }, $constructs)),
        ));

        $exception->constructs = $constructs;

        return $exception;
    }

    /**
     * Returns an array of constructs.
     *
     * @return array<int, Construct>
     */
    public function constructs(): array
    {
        return $this->constructs;
    }
}
