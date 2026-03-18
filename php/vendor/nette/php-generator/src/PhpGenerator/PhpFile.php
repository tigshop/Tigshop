<?php

/**
 * This file is part of the Nette Framework (https://nette.org)
 * Copyright (c) 2004 David Grudl (https://davidgrudl.com)
 */

declare(strict_types=1);

namespace Nette\PhpGenerator;


/**
 * Instance of PHP file.
 *
 * Generates:
 * - opening tag (<?php)
 * - doc comments
 * - one or more namespaces
 */
final class PhpFile
{
	use Traits\CommentAware;

	/** @var PhpNamespace[] */
	private array $namespaces = [];
	private bool $strictTypes = false;


	public static function fromCode(string $code): self
	{
		return (new Factory)->fromCode($code);
	}


	/**
	 * Adds a class to the file. If it already exists, throws an exception.
	 * As a parameter, pass the full name with namespace.
	 */
	public function addClass(string $name): ClassType
	{
		return $this
			->addNamespace(Helpers::extractNamespace($name))
			->addClass(Helpers::extractShortName($name));
	}


	/**
	 * Adds an interface to the file. If it already exists, throws an exception.
	 * As a parameter, pass the full name with namespace.
	 */
	public function addInterface(string $name): InterfaceType
	{
		return $this
			->addNamespace(Helpers::extractNamespace($name))
			->addInterface(Helpers::extractShortName($name));
	}


	/**
	 * Adds a trait to the file. If it already exists, throws an exception.
	 * As a parameter, pass the full name with namespace.
	 */
	public function addTrait(string $name): TraitType
	{
		return $this
			->addNamespace(Helpers::extractNamespace($name))
			->addTrait(Helpers::extractShortName($name));
	}


	/**
	 * Adds an enum to the file. If it already exists, throws an exception.
	 * As a parameter, pass the full name with namespace.
	 */
	public function addEnum(string $name): EnumType
	{
		return $this
			->addNamespace(Helpers::extractNamespace($name))
			->addEnum(Helpers::extractShortName($name));
	}


	/**
	 * Adds a function to the file. If it already exists, throws an exception.
	 * As a parameter, pass the full name with namespace.
	 */
	public function addFunction(string $name): GlobalFunction
	{
		return $this
			->addNamespace(Helpers::extractNamespace($name))
			->addFunction(Helpers::extractShortName($name));
	}


	/**
	 * Adds a namespace to the file. If it already exists, it returns the existing one.
	 */
	public function addNamespace(string|PhpNamespace $namespace): PhpNamespace
	{
		$res = $namespace instanceof PhpNamespace
			? ($this->namespaces[$namespace->getName()] = $namespace)
			: ($this->namespaces[$namespace] ??= new PhpNamespace($namespace));

		foreach ($this->namespaces as $namespace) {
			$namespace->setBracketedSyntax(count($this->namespaces) > 1 && isset($this->namespaces['']));
		}

		return $res;
	}


	/**
	 * Removes the namespace from the file.
	 */
	public function removeNamespace(string|PhpNamespace $namespace): static
	{
		$name = $namespace instanceof PhpNamespace ? $namespace->getName() : $namespace;
		unset($this->namespaces[$name]);
		return $this;
	}


	/** @return PhpNamespace[] */
	public function getNamespaces(): array
	{
		return $this->namespaces;
	}


	/** @return (ClassType|InterfaceType|TraitType|EnumType)[] */
	public function getClasses(): array
	{
		$classes = [];
		foreach ($this->namespaces as $n => $namespace) {
			$n .= $n ? '\\' : '';
			foreach ($namespace->getClasses() as $c => $class) {
				$classes[$n . $c] = $class;
			}
		}

		return $classes;
	}


	/** @return GlobalFunction[] */
	public function getFunctions(): array
	{
		$functions = [];
		foreach ($this->namespaces as $n => $namespace) {
			$n .= $n ? '\\' : '';
			foreach ($namespace->getFunctions() as $f => $function) {
				$functions[$n . $f] = $function;
			}
		}

		return $functions;
	}


	/**
	 * Adds a use statement to the file, to the global namespace.
	 */
	public function addUse(string $name, ?string $alias = null, string $of = PhpNamespace::NameNormal): static
	{
		$this->addNamespace('')->addUse($name, $alias, $of);
		return $this;
	}


	/**
	 * Adds declare(strict_types=1) to output.
	 */
	public function setStrictTypes(bool $state = true): static
	{
		$this->strictTypes = $state;
		return $this;
	}


	public function hasStrictTypes(): bool
	{
		return $this->strictTypes;
	}


	public function __toString(): string
	{
		return (new Printer)->printFile($this);
	}
}
