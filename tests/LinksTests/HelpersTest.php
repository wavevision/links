<?php declare(strict_types = 1);

namespace Wavevision\LinksTests;

use Wavevision\Links\Exceptions\InvalidLink;
use Wavevision\Links\Helpers;

class HelpersTest extends UnitTestCase
{

	public function testAssertAbsoluteLink(): void
	{
		Helpers::assertAbsoluteLink(':Module:Presenter:');
		$this->expectExceptionObject(new InvalidLink("Link destination '' must be absolute."));
		Helpers::assertAbsoluteLink('');
	}

	public function testFormatResource(): void
	{
		$this->assertEquals(':Module:Presenter:', Helpers::formatResource('Module:Presenter'));
	}

}
