<?php

/**
 * This file is part of the Nette Framework (https://nette.org)
 * Copyright (c) 2004 David Grudl (https://davidgrudl.com)
 */

declare(strict_types=1);

namespace Nette\PhpGenerator;

use Nette;


/**
 * Property hook type.
 */
/*enum*/ final class PropertyHookType
{
	use Nette\StaticClass;

	public const Set = 'set';
	public const Get = 'get';


	/** @internal */
	public static function from(string $value): string
	{
		return $value === self::Set || $value === self::Get
			? $value
			: throw new \ValueError("'$value' is not a valid value of hook type");
	}
}
