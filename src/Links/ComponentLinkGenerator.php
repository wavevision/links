<?php declare (strict_types = 1);

namespace Wavevision\Links;

use Nette\Application\UI\Component;

class ComponentLinkGenerator extends Generator
{

	private Component $component;

	public function __construct(Component $component)
	{
		$this->component = $component;
	}

	/**
	 * @param mixed[] $params
	 */
	public function generate(string $destination, array $params = []): string
	{
		return $this->component->link($destination, $params);
	}

	/**
	 * @inheritDoc
	 */
	protected function isActive($link): bool
	{
		return $this->isLinkActive->process($this->component, $link);
	}

}
