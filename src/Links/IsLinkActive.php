<?php declare (strict_types = 1);

namespace Wavevision\Links;

use Nette\Application\UI\Component;
use Nette\SmartObject;
use Wavevision\DIServiceAnnotation\DIService;
use Wavevision\Links\Nette\InjectRequest;
use function is_string;

/**
 * @DIService(generateInject=true)
 */
class IsLinkActive
{

	use InjectRequest;
	use SmartObject;

	/**
	 * @param string|AbsoluteLink|Link $link
	 */
	public function process(Component $component, $link): bool
	{
		if ($link instanceof AbsoluteLink) {
			if ($module = $link->getModule()) {
				return Helpers::isActiveModule($component, $module);
			}
			return Helpers::isActiveLink($component, $link->getLink());
		}
		if ($link instanceof Link) {
			return Helpers::isActiveLink($component, $link);
		}
		return $this->url($link);
	}

	/**
	 * @param string|AbsoluteLink|Link $link
	 */
	public function url($link): bool
	{
		if (is_string($link)) {
			$url = $this->request->getUrl();
			return $link === $url->getAbsoluteUrl() || $link === $url->getRelativeUrl();
		}
		return false;
	}

}
