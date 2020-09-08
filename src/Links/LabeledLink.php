<?php declare(strict_types = 1);

namespace Wavevision\Links;

trait LabeledLink
{

	use LinkProperty;
	use LabelProperty;

	public function __construct(Link $link, string $label)
	{
		$this->link = $link;
		$this->label = $label;
	}

	public static function create(Link $link, string $label): self
	{
		return new self($link, $label);
	}

}
