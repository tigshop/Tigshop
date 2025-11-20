<?php

/**
 * This file is part of the Nette Framework (https://nette.org)
 * Copyright (c) 2004 David Grudl (https://davidgrudl.com)
 */

declare(strict_types=1);

namespace Nette\PhpGenerator;

use Nette;
use Nette\Utils\Type;


/**
 * Definition of a class property.
 */
final class Property
{
	use Traits\NameAware;
	use Traits\PropertyLike;
	use Traits\CommentAware;
	use Traits\AttributeAware;

	private mixed $value = null;
	private bool $static = false;
	private ?string $type = null;
	private bool $nullable = false;
	private bool $initialized = false;
	private bool $final = false;
	private bool $abstract = false;


	public function setValue(mixed $val): static
	{
		$this->value = $val;
		$this->initialized = true;
		return $this;
	}


	public function &getValue(): mixed
	{
		return $this->value;
	}


	public function setStatic(bool $state = true): static
	{
		$this->static = $state;
		return $this;
	}


	public function isStatic(): bool
	{
		return $this->static;
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
		return $this->nullable || ($this->initialized && $this->value === null);
	}


	public function setInitialized(bool $state = true): static
	{
		$this->initialized = $state;
		return $this;
	}


	public function isInitialized(): bool
	{
		return $this->initialized || $this->value !== null;
	}


	public function setFinal(bool $state = true): static
	{
		$this->final = $state;
		return $this;
	}


	public function isFinal(): bool
	{
		return $this->final;
	}


	public function setAbstract(bool $state = true): static
	{
		$this->abstract = $state;
		return $this;
	}


	public function isAbstract(): bool
	{
		return $this->abstract;
	}


	/** @throws Nette\InvalidStateException */
	public function validate(): void
	{
		if ($this->readOnly && !$this->type) {
			throw new Nette\InvalidStateException("Property \$$this->name: Read-only properties are only supported on typed property.");

		} elseif ($this->abstract && $this->final) {
			throw new Nette\InvalidStateException("Property \$$this->name cannot be abstract and final at the same time.");

		} elseif (
			$this->abstract
			&& !Nette\Utils\Arrays::some($this->getHooks(), fn($hook) => $hook->isAbstract())
		) {
			throw new Nette\InvalidStateException("Property \$$this->name: Abstract property must have at least one abstract hook.");
		}
	}


	public function __clone(): void
	{
		$this->hooks = array_map(fn($item) => $item ? clone $item : $item, $this->hooks);
	}
}
