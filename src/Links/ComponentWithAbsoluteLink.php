<?php declare (strict_types = 1);

namespace Wavevision\Links;

use Nette\Application\UI\Presenter;
use Wavevision\PropsControl\PropsControlTemplate;
use Wavevision\PropsControl\ValidProps;

/**
 * @property-read Presenter $presenter
 * @property-read PropsControlTemplate $template
 */
trait ComponentWithAbsoluteLink
{

	use InjectLinkGenerator;

	protected function beforeRender(ValidProps $props): void
	{
		parent::beforeRender($props);
		$this->mapAbsoluteLinkToTemplate($props);
	}

	protected function mapAbsoluteLinkToTemplate(ValidProps $props): void
	{
		$this->template->setParameters([Link::PROP => $this->getLink($props->getNullable(Link::PROP))]);
	}

	private function getLink(?AbsoluteLink $absoluteLink): ?GeneratedLink
	{
		if (!$absoluteLink) {
			return null;
		}
		return $this->linkGenerator->component($this->presenter)->fromAbsoluteLink($absoluteLink);
	}

}
