<?php

/**
 * This file is part of the Nette Framework (https://nette.org)
 * Copyright (c) 2004 David Grudl (https://davidgrudl.com)
 */

declare(strict_types=1);

namespace Nette\PhpGenerator;

use Nette;


/**
 * Definition of a promoted constructor parameter.
 */
final class PromotedParameter extends Parameter
{
	use Traits\PropertyLike;

	/** @throws Nette\InvalidStateException */
	public function validate(): void
	{
		if ($this->readOnly && !$this->getType()) {
			throw new Nette\InvalidStateException("Property \${$this->getName()}: Read-only properties are only supported on typed property.");
		}
	}


	public function __clone(): void
	{
		$this->hooks = array_map(fn($item) => $item ? clone $item : $item, $this->hooks);
	}
}
