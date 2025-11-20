<?php

/**
 * This file is part of the Nette Framework (https://nette.org)
 * Copyright (c) 2004 David Grudl (https://davidgrudl.com)
 */

declare(strict_types=1);

namespace Nette\PhpGenerator\Traits;

use Nette\PhpGenerator\PropertyAccessMode;
use Nette\PhpGenerator\PropertyHook;
use Nette\PhpGenerator\PropertyHookType;
use Nette\PhpGenerator\Visibility;


/**
 * @internal
 */
trait PropertyLike
{
	/** @var array{'set' => ?string, 'get' => ?string} */
	private array $visibility = [PropertyAccessMode::Set => null, PropertyAccessMode::Get => null];
	private bool $readOnly = false;

	/** @var array<string, ?PropertyHook> */
	private array $hooks = [PropertyHookType::Set => null, PropertyHookType::Get => null];


	/**
	 * @param  'public'|'protected'|'private'|null  $get
	 * @param  'public'|'protected'|'private'|null  $set
	 */
	public function setVisibility(?string $get, ?string $set = null): static
	{
		$this->visibility = [
			PropertyAccessMode::Set => $set === null ? $set : Visibility::from($set),
			PropertyAccessMode::Get => $get === null ? $get : Visibility::from($get),
		];
		return $this;
	}


	/** @param  'set'|'get'  $mode */
	public function getVisibility(string $mode = PropertyAccessMode::Get): ?string
	{
		return $this->visibility[PropertyAccessMode::from($mode)];
	}


	/** @param  'set'|'get'  $mode */
	public function setPublic(string $mode = PropertyAccessMode::Get): static
	{
		$this->visibility[PropertyAccessMode::from($mode)] = Visibility::Public;
		return $this;
	}


	/** @param  'set'|'get'  $mode */
	public function isPublic(string $mode = PropertyAccessMode::Get): bool
	{
		return in_array($this->visibility[PropertyAccessMode::from($mode)], [Visibility::Public, null], true);
	}


	/** @param  'set'|'get'  $mode */
	public function setProtected(string $mode = PropertyAccessMode::Get): static
	{
		$this->visibility[PropertyAccessMode::from($mode)] = Visibility::Protected;
		return $this;
	}


	/** @param  'set'|'get'  $mode */
	public function isProtected(string $mode = PropertyAccessMode::Get): bool
	{
		return $this->visibility[PropertyAccessMode::from($mode)] === Visibility::Protected;
	}


	/** @param  'set'|'get'  $mode */
	public function setPrivate(string $mode = PropertyAccessMode::Get): static
	{
		$this->visibility[PropertyAccessMode::from($mode)] = Visibility::Private;
		return $this;
	}


	/** @param  'set'|'get'  $mode */
	public function isPrivate(string $mode = PropertyAccessMode::Get): bool
	{
		return $this->visibility[PropertyAccessMode::from($mode)] === Visibility::Private;
	}


	public function setReadOnly(bool $state = true): static
	{
		$this->readOnly = $state;
		return $this;
	}


	public function isReadOnly(): bool
	{
		return $this->readOnly;
	}


	/**
	 * Replaces all hooks.
	 * @param  PropertyHook[]  $hooks
	 */
	public function setHooks(array $hooks): static
	{
		(function (PropertyHook ...$hooks) {})(...$hooks);
		$this->hooks = $hooks;
		return $this;
	}


	/** @return array<string, PropertyHook> */
	public function getHooks(): array
	{
		return array_filter($this->hooks);
	}


	/** @param  'set'|'get'  $type */
	public function addHook(string $type, string $shortBody = ''): PropertyHook
	{
		return $this->hooks[PropertyHookType::from($type)] = (new PropertyHook)
			->setBody($shortBody, short: true);
	}


	/** @param  'set'|'get'  $type */
	public function getHook(string $type): ?PropertyHook
	{
		return $this->hooks[PropertyHookType::from($type)] ?? null;
	}


	/** @param  'set'|'get'  $type */
	public function hasHook(string $type): bool
	{
		return isset($this->hooks[PropertyHookType::from($type)]);
	}
}
