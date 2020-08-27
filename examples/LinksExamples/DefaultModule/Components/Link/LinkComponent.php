<?php declare (strict_types = 1);

namespace Wavevision\LinksExamples\DefaultModule\Components\Link;

trait LinkComponent
{

	private ControlFactory $linkControlFactory;

	public function injectLinkControlFactory(ControlFactory $controlFactory): void
	{
		$this->linkControlFactory = $controlFactory;
	}

	public function getLinkComponent(): Control
	{
		return $this['link'];
	}

	protected function createComponentLink(): Control
	{
		return $this->linkControlFactory->create();
	}

	protected function attachComponentLink(Control $component): void
	{
		$this->addComponent($component, 'link');
	}

}
