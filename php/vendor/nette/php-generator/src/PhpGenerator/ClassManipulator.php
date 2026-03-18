<?php

/**
 * This file is part of the Nette Framework (https://nette.org)
 * Copyright (c) 2004 David Grudl (https://davidgrudl.com)
 */

declare(strict_types=1);

namespace Nette\PhpGenerator;

use Nette;


final class ClassManipulator
{
	public function __construct(
		private ClassType $class,
	) {
	}


	/**
	 * Inherits property from parent class.
	 */
	public function inheritProperty(string $name, bool $returnIfExists = false): Property
	{
		$extends = $this->class->getExtends();
		if ($this->class->hasProperty($name)) {
			return $returnIfExists
				? $this->class->getProperty($name)
				: throw new Nette\InvalidStateException("Cannot inherit property '$name', because it already exists.");

		} elseif (!$extends) {
			throw new Nette\InvalidStateException("Class '{$this->class->getName()}' has not setExtends() set.");
		}

		try {
			$rp = new \ReflectionProperty($extends, $name);
		} catch (\ReflectionException) {
			throw new Nette\InvalidStateException("Property '$name' has not been found in ancestor {$extends}");
		}

		$property = (new Factory)->fromPropertyReflection($rp);
		$this->class->addMember($property);
		return $property;
	}


	/**
	 * Inherits method from parent class or interface.
	 */
	public function inheritMethod(string $name, bool $returnIfExists = false): Method
	{
		$parents = [...(array) $this->class->getExtends(), ...$this->class->getImplements()];
		if ($this->class->hasMethod($name)) {
			return $returnIfExists
				? $this->class->getMethod($name)
				: throw new Nette\InvalidStateException("Cannot inherit method '$name', because it already exists.");

		} elseif (!$parents) {
			throw new Nette\InvalidStateException("Class '{$this->class->getName()}' has neither setExtends() nor setImplements() set.");
		}

		foreach ($parents as $parent) {
			try {
				$rm = new \ReflectionMethod($parent, $name);
			} catch (\ReflectionException) {
				continue;
			}
			$method = (new Factory)->fromMethodReflection($rm);
			$this->class->addMember($method);
			return $method;
		}

		throw new Nette\InvalidStateException("Method '$name' has not been found in any ancestor: " . implode(', ', $parents));
	}


	/**
	 * Implements all methods from the given interface.
	 */
	public function implementInterface(string $interfaceName): void
	{
		$interface = new \ReflectionClass($interfaceName);
		if (!$interface->isInterface()) {
			throw new Nette\InvalidArgumentException("Class '$interfaceName' is not an interface.");
		}

		$this->class->addImplement($interfaceName);
		foreach ($interface->getMethods() as $method) {
			$this->inheritMethod($method->getName(), returnIfExists: true);
		}
	}
}
