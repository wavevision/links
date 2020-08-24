<?php declare (strict_types = 1);

namespace Wavevision\Links;

use Nette\SmartObject;
use Wavevision\Links\Nette\InjectLinkGenerator;

abstract class Generator
{

	use InjectIsLinkActive;
	use InjectLinkGenerator;
	use SmartObject;

	/**
	 * @param mixed[] $params
	 */
	abstract public function generate(string $destination, array $params = []): string;

	public function fromAbsoluteLink(AbsoluteLink $absoluteLink): GeneratedLink
	{
		$link = $absoluteLink->getLink();
		return new GeneratedLink(
			$this->generate($link->getDestination(), $link->getParams()),
			$this->isActive($absoluteLink)
		);
	}

	/**
	 * @param mixed[] $params
	 */
	public function fromArgs(string $destination, array $params = []): GeneratedLink
	{
		$href = $this->generate($destination, $params);
		return new GeneratedLink($href, $this->isActive($href));
	}

	public function fromLink(Link $link): GeneratedLink
	{
		return new GeneratedLink(
			$this->generate($link->getDestination(), $link->getParams()),
			$this->isActive($link)
		);
	}

	/**
	 * @param string|AbsoluteLink|Link $link
	 */
	abstract protected function isActive($link): bool;

}
