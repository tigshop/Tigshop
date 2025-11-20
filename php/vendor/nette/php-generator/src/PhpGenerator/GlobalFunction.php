<?php

/**
 * This file is part of the Nette Framework (https://nette.org)
 * Copyright (c) 2004 David Grudl (https://davidgrudl.com)
 */

declare(strict_types=1);

namespace Nette\PhpGenerator;

use Nette;


/**
 * Definition of a global function.
 */
final class GlobalFunction
{
	use Traits\FunctionLike;
	use Traits\NameAware;
	use Traits\CommentAware;
	use Traits\AttributeAware;

	public static function from(string|\Closure $function, bool $withBody = false): self
	{
		return (new Factory)->fromFunctionReflection(Nette\Utils\Callback::toReflection($function), $withBody);
	}


	public function __toString(): string
	{
		return (new Printer)->printFunction($this);
	}


	public function __clone(): void
	{
		$this->parameters = array_map(fn($param) => clone $param, $this->parameters);
	}
}
