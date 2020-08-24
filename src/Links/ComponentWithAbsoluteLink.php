<?php declare (strict_types = 1);

namespace Wavevision\Links;

use Nette\Application\UI\Presenter;
use Nette\Bridges\ApplicationLatte\Template;
use Wavevision\PropsControl\ValidProps;

/**
 * @property-read Presenter $presenter
 * @property-read Template $template
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
