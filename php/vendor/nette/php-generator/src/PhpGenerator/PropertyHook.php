<?php

declare(strict_types=1);

namespace Nette\PhpGenerator;

use JetBrains\PhpStorm\Language;


/**
 * Definition of a property hook.
 */
final class PropertyHook
{
	use Traits\AttributeAware;
	use Traits\CommentAware;

	private string $body = '';
	private bool $short = false;
	private bool $final = false;
	private bool $abstract = false;

	/** @var Parameter[] */
	private array $parameters = [];
	private bool $returnReference = false;


	/** @param  ?mixed[]  $args */
	public function setBody(
		#[Language('PHP')]
		string $code,
		?array $args = null,
		bool $short = false,
	): static
	{
		$this->body = $args === null
			? $code
			: (new Dumper)->format($code, ...$args);
		$this->short = $short;
		return $this;
	}


	public function getBody(): string
	{
		return $this->body;
	}


	public function isShort(): bool
	{
		return $this->short && trim($this->body) !== '';
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


	/** @internal */
	public function setParameters(array $val): static
	{
		(function (Parameter ...$val) {})(...$val);
		$this->parameters = [];
		foreach ($val as $v) {
			$this->parameters[$v->getName()] = $v;
		}

		return $this;
	}


	/** @internal */
	public function getParameters(): array
	{
		return $this->parameters;
	}


	/**
	 * Adds a parameter. If it already exists, it overwrites it.
	 * @param  string  $name without $
	 */
	public function addParameter(string $name): Parameter
	{
		return $this->parameters[$name] = new Parameter($name);
	}


	public function setReturnReference(bool $state = true): static
	{
		$this->returnReference = $state;
		return $this;
	}


	public function getReturnReference(): bool
	{
		return $this->returnReference;
	}
}
