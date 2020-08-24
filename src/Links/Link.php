<?php declare (strict_types = 1);

namespace Wavevision\Links;

use Nette\SmartObject;

final class Link
{

	use SmartObject;

	public const PROP = 'link';

	private string $destination;

	/**
	 * @var mixed[]
	 */
	private array $params;

	/**
	 * @param mixed[] $params
	 */
	public function __construct(string $destination, array $params = [])
	{
		$this->destination = $destination;
		$this->params = $params;
	}

	/**
	 * @param mixed[] $params
	 */
	public static function create(string $destination, array $params = []): self
	{
		return new self($destination, $params);
	}

	public function getDestination(): string
	{
		return $this->destination;
	}

	/**
	 * @return mixed[]
	 */
	public function getParams(): array
	{
		return $this->params;
	}

}
