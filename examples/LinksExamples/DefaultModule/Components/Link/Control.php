<?php declare(strict_types = 1);

namespace Wavevision\LinksExamples\DefaultModule\Components\Link;

use Wavevision\DIServiceAnnotation\DIService;
use Wavevision\Links\ComponentWithLink;
use Wavevision\PropsControl\PropsControl;

/**
 * @DIService(generateComponent=true)
 */
class Control extends PropsControl
{

	use ComponentWithLink;

	protected function getPropsClass(): string
	{
		return LinkProps::class;
	}

}
