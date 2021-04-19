<?php declare (strict_types = 1);

namespace Wavevision\Links;

use Nette\SmartObject;

final class GeneratedLink
{

	use SmartObject;

	public const ACTIVE = 'active';

	private bool $active;

	private string $href;

	public function __construct(string $href, bool $active = false)
	{
		$this->active = $active;
		$this->href = $href;
	}

	public function getActive(): bool
	{
		return $this->active;
	}

	public function getActiveProp(): ?string
	{
		return $this->getActive() ? self::ACTIVE : null;
	}

	public function getHref(): string
	{
		return $this->href;
	}

	public function __toString(): string
	{
		return $this->getHref();
	}

}
