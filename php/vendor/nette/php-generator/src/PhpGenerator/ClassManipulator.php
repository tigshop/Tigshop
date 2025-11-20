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
		if ($this->class->hasProperty($name)) {
			return $returnIfExists
				? $this->class->getProperty($name)
				: throw new Nette\InvalidStateException("Cannot inherit property '$name', because it already exists.");
		}

		$parents = [...(array) $this->class->getExtends(), ...$this->class->getImplements()]
			?: throw new Nette\InvalidStateException("Class '{$this->class->getName()}' has neither setExtends() nor setImplements() set.");

		foreach ($parents as $parent) {
			try {
				$rp = new \ReflectionProperty($parent, $name);
			} catch (\ReflectionException) {
				continue;
			}
			return $this->implementProperty($rp);
		}

		throw new Nette\InvalidStateException("Property '$name' has not been found in any ancestor: " . implode(', ', $parents));
	}


	/**
	 * Inherits method from parent class or interface.
	 */
	public function inheritMethod(string $name, bool $returnIfExists = false): Method
	{
		if ($this->class->hasMethod($name)) {
			return $returnIfExists
				? $this->class->getMethod($name)
				: throw new Nette\InvalidStateException("Cannot inherit method '$name', because it already exists.");
		}

		$parents = [...(array) $this->class->getExtends(), ...$this->class->getImplements()]
			?: throw new Nette\InvalidStateException("Class '{$this->class->getName()}' has neither setExtends() nor setImplements() set.");

		foreach ($parents as $parent) {
			try {
				$rm = new \ReflectionMethod($parent, $name);
			} catch (\ReflectionException) {
				continue;
			}
			return $this->implementMethod($rm);
		}

		throw new Nette\InvalidStateException("Method '$name' has not been found in any ancestor: " . implode(', ', $parents));
	}


	/**
	 * Implements all methods from the given interface or abstract class.
	 */
	public function implement(string $name): void
	{
		$definition = new \ReflectionClass($name);
		if ($definition->isInterface()) {
			$this->class->addImplement($name);
		} elseif ($definition->isAbstract()) {
			$this->class->setExtends($name);
		} else {
			throw new Nette\InvalidArgumentException("'$name' is not an interface or abstract class.");
		}

		foreach ($definition->getMethods() as $method) {
			if (!$this->class->hasMethod($method->getName()) && $method->isAbstract()) {
				$this->implementMethod($method);
			}
		}

		if (PHP_VERSION_ID >= 80400) {
			foreach ($definition->getProperties() as $property) {
				if (!$this->class->hasProperty($property->getName()) && $property->isAbstract()) {
					$this->implementProperty($property);
				}
			}
		}
	}


	private function implementMethod(\ReflectionMethod $rm): Method
	{
		$method = (new Factory)->fromMethodReflection($rm);
		$method->setAbstract(false);
		$this->class->addMember($method);
		return $method;
	}


	private function implementProperty(\ReflectionProperty $rp): Property
	{
		$property = (new Factory)->fromPropertyReflection($rp);
		$property->setHooks([])->setAbstract(false);
		$this->class->addMember($property);
		return $property;
	}


	/** @deprecated use implement() */
	public function implementInterface(string $interfaceName): void
	{
		trigger_error(__METHOD__ . '() is deprecated, use implement()', E_USER_DEPRECATED);
		$this->implement($interfaceName);
	}
}
