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

final class ShouldNotHappen extends \LogicException implements ExceptionInterface
{
    public static function create(): self
    {
        return new self('This should not happen.');
    }
}
