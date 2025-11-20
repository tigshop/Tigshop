<?php

/**
 * This file is part of the Nette Framework (https://nette.org)
 * Copyright (c) 2004 David Grudl (https://davidgrudl.com)
 */

declare(strict_types=1);

namespace Nette\PhpGenerator;

use Nette;


/**
 * Definition of an interface with properties, methods and constants.
 */
final class InterfaceType extends ClassLike
{
	use Traits\ConstantsAware;
	use Traits\MethodsAware;
	use Traits\PropertiesAware;

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
	public function addMember(Method|Constant|Property $member, bool $overwrite = false): static
	{
		$name = $member->getName();
		[$type, $n] = match (true) {
			$member instanceof Constant => ['consts', $name],
			$member instanceof Method => ['methods', strtolower($name)],
			$member instanceof Property => ['properties', $name],
		};
		if (!$overwrite && isset($this->$type[$n])) {
			throw new Nette\InvalidStateException("Cannot add member '$name', because it already exists.");
		}
		$this->$type[$n] = $member;
		return $this;
	}


	/** @throws Nette\InvalidStateException */
	public function validate(): void
	{
		foreach ($this->getProperties() as $property) {
			if ($property->isInitialized()) {
				throw new Nette\InvalidStateException("Property {$this->getName()}::\${$property->getName()}: Interface cannot have initialized properties.");
			} elseif (!$property->getHooks()) {
				throw new Nette\InvalidStateException("Property {$this->getName()}::\${$property->getName()}: Interface cannot have properties without hooks.");
			}
		}
	}


	public function __clone(): void
	{
		parent::__clone();
		$clone = fn($item) => clone $item;
		$this->consts = array_map($clone, $this->consts);
		$this->methods = array_map($clone, $this->methods);
		$this->properties = array_map($clone, $this->properties);
	}
}
