<?php

/**
 * This file is part of the Nette Framework (https://nette.org)
 * Copyright (c) 2004 David Grudl (https://davidgrudl.com)
 */

declare(strict_types=1);

namespace Nette\PhpGenerator;

use Nette;


/**
 * Class/Interface/Trait/Enum description.
 */
abstract class ClassLike
{
	use Traits\CommentAware;
	use Traits\AttributeAware;

	public const
		VisibilityPublic = 'public',
		VisibilityProtected = 'protected',
		VisibilityPrivate = 'private';

	/** @deprecated use ClassLike::VisibilityPublic */
	public const VISIBILITY_PUBLIC = self::VisibilityPublic;

	/** @deprecated use ClassLike::VisibilityProtected */
	public const VISIBILITY_PROTECTED = self::VisibilityProtected;

	/** @deprecated use ClassLike::VisibilityPrivate */
	public const VISIBILITY_PRIVATE = self::VisibilityPrivate;

	private ?PhpNamespace $namespace;
	private ?string $name;


	public static function from(string|object $class, bool $withBodies = false): self
	{
		$instance = (new Factory)
			->fromClassReflection(new \ReflectionClass($class), $withBodies);

		if (!$instance instanceof static) {
			$class = is_object($class) ? $class::class : $class;
			trigger_error("$class cannot be represented with " . static::class . '. Call ' . $instance::class . '::' . __FUNCTION__ . '() or ' . __METHOD__ . '() instead.', E_USER_WARNING);
		}

		return $instance;
	}


	public static function fromCode(string $code): self
	{
		$instance = (new Factory)
			->fromClassCode($code);

		if (!$instance instanceof static) {
			trigger_error('Provided code cannot be represented with ' . static::class . '. Call ' . $instance::class . '::' . __FUNCTION__ . '() or ' . __METHOD__ . '() instead.', E_USER_WARNING);
		}

		return $instance;
	}


	public function __construct(string $name, ?PhpNamespace $namespace = null)
	{
		$this->setName($name);
		$this->namespace = $namespace;
	}


	public function __toString(): string
	{
		return (new Printer)->printClass($this, $this->namespace);
	}


	/** @deprecated  an object can be in multiple namespaces */
	public function getNamespace(): ?PhpNamespace
	{
		return $this->namespace;
	}


	public function setName(?string $name): static
	{
		if ($name !== null && (!Helpers::isIdentifier($name) || isset(Helpers::Keywords[strtolower($name)]))) {
			throw new Nette\InvalidArgumentException("Value '$name' is not valid class name.");
		}

		$this->name = $name;
		return $this;
	}


	public function getName(): ?string
	{
		return $this->name;
	}


	public function isClass(): bool
	{
		return $this instanceof ClassType;
	}


	public function isInterface(): bool
	{
		return $this instanceof InterfaceType;
	}


	public function isTrait(): bool
	{
		return $this instanceof TraitType;
	}


	public function isEnum(): bool
	{
		return $this instanceof EnumType;
	}


	/** @param  string[]  $names */
	protected function validateNames(array $names): void
	{
		foreach ($names as $name) {
			if (!Helpers::isNamespaceIdentifier($name, allowLeadingSlash: true)) {
				throw new Nette\InvalidArgumentException("Value '$name' is not valid class name.");
			}
		}
	}


	public function validate(): void
	{
	}


	public function __clone(): void
	{
		$this->attributes = array_map(fn($attr) => clone $attr, $this->attributes);
	}
}
