<?php declare (strict_types = 1);

namespace Wavevision\Links;

trait InjectLinkGenerator
{

	protected LinkGenerator $linkGenerator;

	public function injectLinkGenerator(LinkGenerator $linkGenerator): void
	{
		$this->linkGenerator = $linkGenerator;
	}

}
