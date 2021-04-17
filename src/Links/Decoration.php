<?php declare (strict_types = 1);

namespace Wavevision\Links;

use Wavevision\Utils\ImmutableObject;

trait Decoration
{

	use ImmutableObject;

	private ?string $label = null;

	private ?string $icon = null;

	public function getLabel(): ?string
	{
		return $this->label;
	}

	public function getIcon(): ?string
	{
		return $this->icon;
	}

	/**
	 * @return static
	 */
	public function withIcon(?string $icon)
	{
		return $this->withMutation('icon', $icon);
	}

	/**
	 * @return static
	 */
	public function withLabel(?string $label)
	{
		return $this->withMutation('label', $label);
	}

}
