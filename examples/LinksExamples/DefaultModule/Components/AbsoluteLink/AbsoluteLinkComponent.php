<?php declare (strict_types = 1);

namespace Wavevision\LinksExamples\DefaultModule\Components\AbsoluteLink;

trait AbsoluteLinkComponent
{

	private ControlFactory $absoluteLinkControlFactory;

	public function injectAbsoluteLinkControlFactory(ControlFactory $controlFactory): void
	{
		$this->absoluteLinkControlFactory = $controlFactory;
	}

	public function getAbsoluteLinkComponent(): Control
	{
		return $this['absoluteLink'];
	}

	protected function createComponentAbsoluteLink(): Control
	{
		return $this->absoluteLinkControlFactory->create();
	}

	protected function attachComponentAbsoluteLink(Control $component): void
	{
		$this->addComponent($component, 'absoluteLink');
	}

}
