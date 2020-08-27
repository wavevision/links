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

	public static function create(AbsoluteLink $absoluteLink): self
	{
		return new self($absoluteLink);
	}

}
