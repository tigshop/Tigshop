<?php

/**
 * This file is part of the Nette Framework (https://nette.org)
 * Copyright (c) 2004 David Grudl (https://davidgrudl.com)
 */

declare(strict_types=1);

namespace Nette\PhpGenerator;

use Nette;
use Nette\InvalidStateException;


/**
 * Definition of a PHP namespace.
 *
 * Generates:
 * - namespace statement
 * - variable amount of use statements
 * - one or more class declarations
 */
final class PhpNamespace
{
	public const
		NameNormal = 'n',
		NameFunction = 'f',
		NameConstant = 'c';

	/** @deprecated use PhpNamespace::NameNormal */
	public const NAME_NORMAL = self::NameNormal;

	/** @deprecated use PhpNamespace::NameFunction */
	public const NAME_FUNCTION = self::NameFunction;

	/** @deprecated use PhpNamespace::NameConstant */
	public const NAME_CONSTANT = self::NameConstant;

	private string $name;

	private bool $bracketedSyntax = false;

	/** @var string[][] */
	private array $aliases = [
		self::NameNormal => [],
		self::NameFunction => [],
		self::NameConstant => [],
	];

	/** @var (ClassType|InterfaceType|TraitType|EnumType)[] */
	private array $classes = [];

	/** @var GlobalFunction[] */
	private array $functions = [];


	public function __construct(string $name)
	{
		if ($name !== '' && !Helpers::isNamespaceIdentifier($name)) {
			throw new Nette\InvalidArgumentException("Value '$name' is not valid name.");
		}

		$this->name = $name;
	}


	public function getName(): string
	{
		return $this->name;
	}


	/**
	 * @internal
	 */
	public function setBracketedSyntax(bool $state = true): static
	{
		$this->bracketedSyntax = $state;
		return $this;
	}


	public function hasBracketedSyntax(): bool
	{
		return $this->bracketedSyntax;
	}


	/**
	 * Adds a use statement to the namespace for class, function or constant.
	 * @throws InvalidStateException
	 */
	public function addUse(string $name, ?string $alias = null, string $of = self::NameNormal): static
	{
		if (
			!Helpers::isNamespaceIdentifier($name, allowLeadingSlash: true)
			|| (Helpers::isIdentifier($name) && isset(Helpers::Keywords[strtolower($name)]))
		) {
			throw new Nette\InvalidArgumentException("Value '$name' is not valid class/function/constant name.");

		} elseif ($alias && (!Helpers::isIdentifier($alias) || isset(Helpers::Keywords[strtolower($alias)]))) {
			throw new Nette\InvalidArgumentException("Value '$alias' is not valid alias.");
		}

		$name = ltrim($name, '\\');
		$aliases = array_change_key_case($this->aliases[$of]);
		$used = [self::NameNormal => $this->classes, self::NameFunction => $this->functions, self::NameConstant => []][$of];

		if ($alias === null) {
			$base = Helpers::extractShortName($name);
			$counter = null;
			do {
				$alias = $base . $counter;
				$lower = strtolower($alias);
				$counter++;
			} while ((isset($aliases[$lower]) && strcasecmp($aliases[$lower], $name) !== 0) || isset($used[$lower]));
		} else {
			$lower = strtolower($alias);
			if (isset($aliases[$lower]) && strcasecmp($aliases[$lower], $name) !== 0) {
				throw new InvalidStateException(
					"Alias '$alias' used already for '{$aliases[$lower]}', cannot use for '$name'.",
				);
			} elseif (isset($used[$lower])) {
				throw new Nette\InvalidStateException("Name '$alias' used already for '$this->name\\{$used[$lower]->getName()}'.");
			}
		}

		$this->aliases[$of][$alias] = $name;
		return $this;
	}


	public function removeUse(string $name, string $of = self::NameNormal): void
	{
		foreach ($this->aliases[$of] as $alias => $item) {
			if (strcasecmp($item, $name) === 0) {
				unset($this->aliases[$of][$alias]);
			}
		}
	}


	/**
	 * Adds a use statement to the namespace for function.
	 */
	public function addUseFunction(string $name, ?string $alias = null): static
	{
		return $this->addUse($name, $alias, self::NameFunction);
	}


	/**
	 * Adds a use statement to the namespace for constant.
	 */
	public function addUseConstant(string $name, ?string $alias = null): static
	{
		return $this->addUse($name, $alias, self::NameConstant);
	}


	/** @return string[] */
	public function getUses(string $of = self::NameNormal): array
	{
		uasort($this->aliases[$of], fn(string $a, string $b): int => strtr($a, '\\', ' ') <=> strtr($b, '\\', ' '));
		return array_filter(
			$this->aliases[$of],
			fn($name, $alias) => strcasecmp(($this->name ? $this->name . '\\' : '') . $alias, $name),
			ARRAY_FILTER_USE_BOTH,
		);
	}


	/**
	 * Resolves relative name to full name.
	 */
	public function resolveName(string $name, string $of = self::NameNormal): string
	{
		if (isset(Helpers::Keywords[strtolower($name)]) || $name === '') {
			return $name;
		} elseif ($name[0] === '\\') {
			return substr($name, 1);
		}

		$aliases = array_change_key_case($this->aliases[$of]);
		if ($of !== self::NameNormal) {
			return $aliases[strtolower($name)]
				?? $this->resolveName(Helpers::extractNamespace($name) . '\\') . Helpers::extractShortName($name);
		}

		$parts = explode('\\', $name, 2);
		return ($res = $aliases[strtolower($parts[0])] ?? null)
			? $res . (isset($parts[1]) ? '\\' . $parts[1] : '')
			: $this->name . ($this->name ? '\\' : '') . $name;
	}


	/**
	 * Simplifies type hint with relative names.
	 */
	public function simplifyType(string $type, string $of = self::NameNormal): string
	{
		return preg_replace_callback('~[\w\x7f-\xff\\\\]+~', fn($m) => $this->simplifyName($m[0], $of), $type);
	}


	/**
	 * Simplifies the full name of a class, function, or constant to a relative name.
	 */
	public function simplifyName(string $name, string $of = self::NameNormal): string
	{
		if (isset(Helpers::Keywords[strtolower($name)]) || $name === '') {
			return $name;
		}

		$name = ltrim($name, '\\');

		if ($of !== self::NameNormal) {
			foreach ($this->aliases[$of] as $alias => $original) {
				if (strcasecmp($original, $name) === 0) {
					return $alias;
				}
			}

			return $this->simplifyName(Helpers::extractNamespace($name) . '\\') . Helpers::extractShortName($name);
		}

		$shortest = null;
		$relative = self::startsWith($name, $this->name . '\\')
			? substr($name, strlen($this->name) + 1)
			: null;

		foreach ($this->aliases[$of] as $alias => $original) {
			if ($relative && self::startsWith($relative . '\\', $alias . '\\')) {
				$relative = null;
			}

			if (self::startsWith($name . '\\', $original . '\\')) {
				$short = $alias . substr($name, strlen($original));
				if (!isset($shortest) || strlen($shortest) > strlen($short)) {
					$shortest = $short;
				}
			}
		}

		if (isset($shortest, $relative) && strlen($shortest) < strlen($relative)) {
			return $shortest;
		}

		return $relative ?? $shortest ?? ($this->name ? '\\' : '') . $name;
	}


	/**
	 * Adds a class-like type to the namespace. If it already exists, throws an exception.
	 */
	public function add(ClassType|InterfaceType|TraitType|EnumType $class): static
	{
		$name = $class->getName();
		if ($name === null) {
			throw new Nette\InvalidArgumentException('Class does not have a name.');
		}

		$lower = strtolower($name);
		if (isset($this->classes[$lower]) && $this->classes[$lower] !== $class) {
			throw new Nette\InvalidStateException("Cannot add '$name', because it already exists.");
		} elseif ($orig = array_change_key_case($this->aliases[self::NameNormal])[$lower] ?? null) {
			throw new Nette\InvalidStateException("Name '$name' used already as alias for $orig.");
		}

		$this->classes[$lower] = $class;
		return $this;
	}


	/**
	 * Adds a class to the namespace. If it already exists, throws an exception.
	 */
	public function addClass(string $name): ClassType
	{
		$this->add($class = new ClassType($name, $this));
		return $class;
	}


	/**
	 * Adds an interface to the namespace. If it already exists, throws an exception.
	 */
	public function addInterface(string $name): InterfaceType
	{
		$this->add($iface = new InterfaceType($name, $this));
		return $iface;
	}


	/**
	 * Adds a trait to the namespace. If it already exists, throws an exception.
	 */
	public function addTrait(string $name): TraitType
	{
		$this->add($trait = new TraitType($name, $this));
		return $trait;
	}


	/**
	 * Adds an enum to the namespace. If it already exists, throws an exception.
	 */
	public function addEnum(string $name): EnumType
	{
		$this->add($enum = new EnumType($name, $this));
		return $enum;
	}


	/**
	 * Returns a class-like type from the namespace.
	 */
	public function getClass(string $name): ClassType|InterfaceType|TraitType|EnumType
	{
		return $this->classes[strtolower($name)] ?? throw new Nette\InvalidArgumentException("Class '$name' not found.");
	}


	/**
	 * Returns all class-like types in the namespace.
	 * @return (ClassType|InterfaceType|TraitType|EnumType)[]
	 */
	public function getClasses(): array
	{
		$res = [];
		foreach ($this->classes as $class) {
			$res[$class->getName()] = $class;
		}

		return $res;
	}


	/**
	 * Removes a class-like type from namespace.
	 */
	public function removeClass(string $name): static
	{
		unset($this->classes[strtolower($name)]);
		return $this;
	}


	/**
	 * Adds a function to the namespace. If it already exists, throws an exception.
	 */
	public function addFunction(string $name): GlobalFunction
	{
		$lower = strtolower($name);
		if (isset($this->functions[$lower])) {
			throw new Nette\InvalidStateException("Cannot add '$name', because it already exists.");
		} elseif ($orig = array_change_key_case($this->aliases[self::NameFunction])[$lower] ?? null) {
			throw new Nette\InvalidStateException("Name '$name' used already as alias for $orig.");
		}

		return $this->functions[$lower] = new GlobalFunction($name);
	}


	/**
	 * Returns a function from the namespace.
	 */
	public function getFunction(string $name): GlobalFunction
	{
		return $this->functions[strtolower($name)] ?? throw new Nette\InvalidArgumentException("Function '$name' not found.");
	}


	/**
	 * Returns all functions in the namespace.
	 * @return GlobalFunction[]
	 */
	public function getFunctions(): array
	{
		$res = [];
		foreach ($this->functions as $fn) {
			$res[$fn->getName()] = $fn;
		}

		return $res;
	}


	/**
	 * Removes a function type from namespace.
	 */
	public function removeFunction(string $name): static
	{
		unset($this->functions[strtolower($name)]);
		return $this;
	}


	private static function startsWith(string $a, string $b): bool
	{
		return strncasecmp($a, $b, strlen($b)) === 0;
	}


	public function __toString(): string
	{
		return (new Printer)->printNamespace($this);
	}
}
