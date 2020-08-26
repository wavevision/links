<?php declare(strict_types = 1);

namespace Wavevision\LinksTests;

use Wavevision\Links\AbsoluteLinkBuilder;

class AbsoluteLinkBuilderTest extends UnitTestCase
{

	public function testBuild(): void
	{
		$absoluteLink = AbsoluteLinkBuilder::create('Module')->build('Presenter:');
		$this->assertNull($absoluteLink->getModule());
		$this->assertEquals(':Module:Presenter:', $absoluteLink->getLink()->getDestination());
	}

	public function testBuildWithModule(): void
	{
		$this->assertEquals(
			'Module',
			AbsoluteLinkBuilder::create('Module')
				->buildWithModule('')
				->getModule()
		);
	}

}
