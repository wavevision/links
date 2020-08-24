<?php declare(strict_types = 1);

namespace Wavevision\Links;

trait LabelProperty
{

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
		$item = clone $this;
		$item->label = $label;
		return $item;
	}

}
