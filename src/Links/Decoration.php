<?php declare (strict_types = 1);

namespace Wavevision\Links;

trait Decoration
{

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
		$item = clone $this;
		$item->icon = $icon;
		return $item;
	}

	/**
	 * @return static
	 */
	public function withLabel(?string $label)
	{
		$item = clone $this;
		$item->label = $label;
		return $item;
	}

}
