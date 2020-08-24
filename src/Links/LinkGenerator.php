<?php declare (strict_types = 1);

namespace Wavevision\Links;

use Nette\Application\UI\Component;
use Wavevision\DIServiceAnnotation\DIService;
use function get_class;

/**
 * @DIService(generateInject=true)
 */
class LinkGenerator extends Generator
{

	/**
	 * @var ComponentLinkGenerator[]
	 */
	private array $components = [];

	public function component(Component $component): ComponentLinkGenerator
	{
		$name = get_class($component);
		if (!isset($this->components[$name])) {
			$generator = new ComponentLinkGenerator($component);
			$generator->injectIsLinkActive($this->isLinkActive);
			$this->components[$name] = $generator;
		}
		return $this->components[$name];
	}

	/**
	 * @param mixed[] $params
	 */
	public function generate(string $destination, array $params = []): string
	{
		return $this->linkGenerator->link($destination, $params);
	}

	/**
	 * @inheritDoc
	 */
	protected function isActive($link): bool
	{
		return $this->isLinkActive->url($link);
	}

}
