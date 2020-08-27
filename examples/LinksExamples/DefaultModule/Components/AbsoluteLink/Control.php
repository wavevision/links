<?php declare(strict_types = 1);

namespace Wavevision\LinksExamples\DefaultModule\Components\AbsoluteLink;

use Wavevision\DIServiceAnnotation\DIService;
use Wavevision\Links\ComponentWithAbsoluteLink;
use Wavevision\PropsControl\PropsControl;

/**
 * @DIService(generateComponent=true)
 */
class Control extends PropsControl
{

	use ComponentWithAbsoluteLink;

	protected function getPropsClass(): string
	{
		return AbsoluteLinkProps::class;
	}

}
