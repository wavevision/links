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

	/**
	 * @return static
	 */
	public static function create(Link $link)
	{
		return new static($link);
	}

}
