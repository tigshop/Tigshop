<?php

/**
 * This file is part of the Nette Framework (https://nette.org)
 * Copyright (c) 2004 David Grudl (https://davidgrudl.com)
 */

declare(strict_types=1);

namespace Nette\PhpGenerator;

use Nette;


/**
 * Interface description.
 */
final class InterfaceType extends ClassLike
{
	use Traits\ConstantsAware;
	use Traits\MethodsAware;

	/** @var string[] */
	private array $extends = [];


	/**
	 * @param  string|string[]  $names
	 */
	public function setExtends(string|array $names): static
	{
		$names = (array) $names;
		$this->validateNames($names);
		$this->extends = $names;
		return $this;
	}


	/** @return string[] */
	public function getExtends(): array
	{
		return $this->extends;
	}


	public function addExtend(string $name): static
	{
		$this->validateNames([$name]);
		$this->extends[] = $name;
		return $this;
	}


	/**
	 * Adds a member. If it already exists, throws an exception or overwrites it if $overwrite is true.
	 */
	public function addMember(Method|Constant $member, bool $overwrite = false): static
	{
		$name = $member->getName();
		[$type, $n] = match (true) {
			$member instanceof Constant => ['consts', $name],
			$member instanceof Method => ['methods', strtolower($name)],
		};
		if (!$overwrite && isset($this->$type[$n])) {
			throw new Nette\InvalidStateException("Cannot add member '$name', because it already exists.");
		}
		$this->$type[$n] = $member;
		return $this;
	}


	public function __clone(): void
	{
		parent::__clone();
		$clone = fn($item) => clone $item;
		$this->consts = array_map($clone, $this->consts);
		$this->methods = array_map($clone, $this->methods);
	}
}
