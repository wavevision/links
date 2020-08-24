<?php declare (strict_types = 1);

namespace Wavevision\Links;

trait DecoratedAbsoluteLink
{

	use AbsoluteLinkProperty;
	use Decoration;

	public function __construct(AbsoluteLink $absoluteLink)
	{
		$this->absoluteLink = $absoluteLink;
	}

	/**
	 * @return static
	 */
	public static function create(AbsoluteLink $absoluteLink)
	{
		return new self($absoluteLink);
	}

}
