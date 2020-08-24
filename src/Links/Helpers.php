<?php declare (strict_types = 1);

namespace Wavevision\Links;

use Nette\Application\Helpers as NetteHelpers;
use Nette\Application\UI\Component;
use Nette\StaticClass;
use Wavevision\Links\Exceptions\InvalidLink;
use Wavevision\Utils\Strings;

class Helpers
{

	use StaticClass;

	public const MODULE_DELIMITER = ':';

	public static function assertAbsoluteLink(string $destination): void
	{
		$formatted = Strings::startsWith($destination, self::MODULE_DELIMITER);
		[$module, , $delimiter] = NetteHelpers::splitName($destination);
		if (!$formatted || $module === '' || $delimiter !== self::MODULE_DELIMITER) {
			throw new InvalidLink("Link destination '$destination' must be absolute.");
		}
	}

	public static function formatResource(string $resource): string
	{
		if (!Strings::startsWith($resource, self::MODULE_DELIMITER)) {
			$resource = self::MODULE_DELIMITER . $resource;
		}
		if (!Strings::endsWith($resource, self::MODULE_DELIMITER)) {
			$resource = $resource . self::MODULE_DELIMITER;
		}
		return $resource;
	}

	public static function isActiveModule(Component $component, string $module): bool
	{
		return Strings::startsWith($component->presenter->name, $module);
	}

	public static function isActiveLink(Component $component, Link $link): bool
	{
		return $component->presenter->isLinkCurrent($link->getDestination(), $link->getParams());
	}

	public static function trimResource(string $resource): string
	{
		return Strings::trim($resource, self::MODULE_DELIMITER);
	}

}
