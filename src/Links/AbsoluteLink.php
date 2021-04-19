<?php declare (strict_types = 1);

namespace Wavevision\Links;

use Wavevision\Utils\ImmutableObject;

final class AbsoluteLink
{

	use ImmutableObject;

	private Link $link;

	private ?string $module;

	public function __construct(Link $link, ?string $module = null)
	{
		$this->link = $link;
		$this->module = $module ? Helpers::trimResource($module) : null;
	}

	public static function create(Link $link, ?string $module = null): self
	{
		return new self($link, $module);
	}

	public function getLink(): Link
	{
		return $this->link;
	}

	public function getModule(): ?string
	{
		return $this->module;
	}

	public function withLink(Link $link): self
	{
		return $this->withMutation('link', $link);
	}

	public function withModule(string $module): self
	{
		return $this->withMutation('module', $module);
	}

}
