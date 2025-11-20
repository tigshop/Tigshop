<?php

/**
 * This file is part of the Nette Framework (https://nette.org)
 * Copyright (c) 2004 David Grudl (https://davidgrudl.com)
 */

declare(strict_types=1);

namespace Nette\PhpGenerator;

use Nette\Utils\Type;


/**
 * Definition of a function/method parameter.
 */
class Parameter
{
	use Traits\NameAware;
	use Traits\AttributeAware;
	use Traits\CommentAware;

	private bool $reference = false;
	private ?string $type = null;
	private bool $nullable = false;
	private bool $hasDefaultValue = false;
	private mixed $defaultValue = null;


	public function setReference(bool $state = true): static
	{
		$this->reference = $state;
		return $this;
	}


	public function isReference(): bool
	{
		return $this->reference;
	}


	public function setType(?string $type): static
	{
		$this->type = Helpers::validateType($type, $this->nullable);
		return $this;
	}


	/** @return ($asObject is true ? ?Type : ?string) */
	public function getType(bool $asObject = false): Type|string|null
	{
		return $asObject && $this->type
			? Type::fromString($this->type)
			: $this->type;
	}


	public function setNullable(bool $state = true): static
	{
		$this->nullable = $state;
		return $this;
	}


	public function isNullable(): bool
	{
		return $this->nullable || ($this->hasDefaultValue && $this->defaultValue === null);
	}


	public function setDefaultValue(mixed $val): static
	{
		$this->defaultValue = $val;
		$this->hasDefaultValue = true;
		return $this;
	}


	public function getDefaultValue(): mixed
	{
		return $this->defaultValue;
	}


	public function hasDefaultValue(): bool
	{
		return $this->hasDefaultValue;
	}


	public function validate(): void
	{
	}
}
