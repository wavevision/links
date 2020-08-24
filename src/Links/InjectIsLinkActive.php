<?php declare (strict_types = 1);

namespace Wavevision\Links;

trait InjectIsLinkActive
{

	protected IsLinkActive $isLinkActive;

	public function injectIsLinkActive(IsLinkActive $isLinkActive): void
	{
		$this->isLinkActive = $isLinkActive;
	}

}
