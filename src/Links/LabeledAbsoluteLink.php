<?php declare(strict_types = 1);

namespace Wavevision\Links;

trait LabeledAbsoluteLink
{

	use AbsoluteLinkProperty;
	use LabelProperty;

	public function __construct(AbsoluteLink $absoluteLink, string $label)
	{
		$this->absoluteLink = $absoluteLink;
		$this->label = $label;
	}

	public static function create(AbsoluteLink $absoluteLink, string $label): self
	{
		return new self($absoluteLink, $label);
	}

}
