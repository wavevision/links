<?php declare(strict_types = 1);

namespace Wavevision\LinksTests;

use Nette\Configurator;
use Nette\StaticClass;
use Wavevision\LinksExamples;

final class Bootstrap
{

	use StaticClass;

	public static function boot(): Configurator
	{
		$configurator = LinksExamples\Bootstrap::createConfigurator();
		$configurator->addParameters(
			[
				'wwwDir' => LinksExamples\Bootstrap::rootDir()->string('examples', 'www'),
			]
		);
		return $configurator;
	}

}
