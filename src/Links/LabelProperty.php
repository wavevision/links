<?php declare(strict_types = 1);

namespace Wavevision\Links;

use Wavevision\Utils\ImmutableObject;

trait LabelProperty
{

	use ImmutableObject;

	private string $label;

	public function getLabel(): string
	{
		return $this->label;
	}

	/**
	 * @return static
	 */
	public function withLabel(string $label)
	{
		return $this->withMutation('label', $label);
	}

}
