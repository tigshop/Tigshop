<?php

/**
 * This file is part of the Nette Framework (https://nette.org)
 * Copyright (c) 2004 David Grudl (https://davidgrudl.com)
 */

declare(strict_types=1);

namespace Nette\PhpGenerator;

use Nette;


/**
 * Member visibility.
 */
/*enum*/ final class Visibility
{
	use Nette\StaticClass;

	public const Public = 'public';
	public const Protected = 'protected';
	public const Private = 'private';


	/** @internal */
	public static function from(string $value): string
	{
		return $value === self::Public || $value === self::Protected || $value === self::Private
			? $value
			: throw new \ValueError("'$value' is not a valid value of visibility");
	}
}
