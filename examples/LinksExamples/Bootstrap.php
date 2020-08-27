<?php declare(strict_types = 1);

namespace Wavevision\LinksExamples;

use Nette\Configurator;
use Nette\StaticClass;
use Wavevision\Utils\Path;

final class Bootstrap
{

	use StaticClass;

	public static function boot(): Configurator
	{
		$configurator = self::createConfigurator();
		$configurator->enableTracy(self::rootDir()->string('log'));
		return $configurator;
	}

	public static function createConfigurator(): Configurator
	{
		$configurator = new Configurator();
		$rootDir = self::rootDir();
		$configurator
			->setTimeZone('Europe/Prague')
			->setTempDirectory($rootDir->string('temp'))
			->addConfig($rootDir->string('examples', 'config', 'common.neon'));
		return $configurator;
	}

	public static function rootDir(): Path
	{
		return Path::create(__DIR__, '..', '..');
	}

}
