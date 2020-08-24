<?php declare(strict_types = 1);

namespace Wavevision\Links;

trait LinkProperty
{

	private Link $link;

	public function getLink(): Link
	{
		return $this->link;
	}

	/**
	 * @return static
	 */
	public function withLink(Link $link)
	{
		$item = clone $this;
		$item->link = $link;
		return $item;
	}

}
