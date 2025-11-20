<?php

/**
 * This file is part of the Nette Framework (https://nette.org)
 * Copyright (c) 2004 David Grudl (https://davidgrudl.com)
 */

declare(strict_types=1);

namespace Nette\PhpGenerator\Traits;

use Nette\PhpGenerator\Visibility;


/**
 * @internal
 */
trait VisibilityAware
{
	/** public|protected|private */
	private ?string $visibility = null;


	/** @param  'public'|'protected'|'private'|null  $value */
	public function setVisibility(?string $value): static
	{
		$this->visibility = $value === null ? $value : Visibility::from($value);
		return $this;
	}


	public function getVisibility(): ?string
	{
		return $this->visibility;
	}


	public function setPublic(): static
	{
		$this->visibility = Visibility::Public;
		return $this;
	}


	public function isPublic(): bool
	{
		return $this->visibility === Visibility::Public || $this->visibility === null;
	}


	public function setProtected(): static
	{
		$this->visibility = Visibility::Protected;
		return $this;
	}


	public function isProtected(): bool
	{
		return $this->visibility === Visibility::Protected;
	}


	public function setPrivate(): static
	{
		$this->visibility = Visibility::Private;
		return $this;
	}


	public function isPrivate(): bool
	{
		return $this->visibility === Visibility::Private;
	}
}
