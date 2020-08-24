<?php declare(strict_types = 1);

namespace Wavevision\Links;

trait AbsoluteLinkProperty
{

	private AbsoluteLink $absoluteLink;

	public function getAbsoluteLink(): AbsoluteLink
	{
		return $this->absoluteLink;
	}

	/**
	 * @return static
	 */
	public function withAbsoluteLink(AbsoluteLink $absoluteLink)
	{
		$item = clone $this;
		$item->absoluteLink = $absoluteLink;
		return $item;
	}

}
