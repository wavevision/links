<?php declare (strict_types = 1);

namespace Wavevision\Links;

use Nette\SmartObject;
use Wavevision\Utils\Strings;
use function implode;
use function ltrim;

final class AbsoluteLinkBuilder
{

	use SmartObject;

	private string $module;

	public function __construct(string $module)
	{
		$this->module = Helpers::trimResource($module);
	}

	public static function create(string $module): self
	{
		return new static($module);
	}

	/**
	 * @param mixed[] $params
	 */
	public function build(string $destination, array $params = []): AbsoluteLink
	{
		if (!Strings::contains($destination, $this->module)) {
			$destination = implode(
				Helpers::MODULE_DELIMITER,
				['', Helpers::trimResource($this->module), ltrim($destination, Helpers::MODULE_DELIMITER)]
			);
		}
		return new AbsoluteLink(new Link($destination, $params));
	}

	/**
	 * @param mixed[] $params
	 */
	public function buildWithModule(string $destination, array $params = []): AbsoluteLink
	{
		return $this->build($destination, $params)->withModule($this->module);
	}

}
