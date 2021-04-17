<?php declare(strict_types = 1);

namespace Wavevision\Links;

use Wavevision\Utils\ImmutableObject;

trait LinkProperty
{

	use ImmutableObject;

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
		return $this->withMutation('link', $link);
	}

}
