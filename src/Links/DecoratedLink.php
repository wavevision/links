<?php declare (strict_types = 1);

namespace Wavevision\Links;

trait DecoratedLink
{

	use Decoration;
	use LinkProperty;

	public function __construct(Link $link)
	{
		$this->link = $link;
	}

	public static function create(Link $link): self
	{
		return new self($link);
	}

}
