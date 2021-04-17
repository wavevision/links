<?php declare(strict_types = 1);

namespace Wavevision\Links;

use Wavevision\Utils\ImmutableObject;

trait AbsoluteLinkProperty
{

	use ImmutableObject;

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
		return $this->withMutation('absoluteLink', $absoluteLink);
	}

}
