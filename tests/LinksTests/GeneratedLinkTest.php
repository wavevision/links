<?php declare(strict_types = 1);

namespace Wavevision\LinksTests;

use Wavevision\Links\GeneratedLink;

class GeneratedLinkTest extends UnitTestCase
{

	public function testGetActive(): void
	{
		$this->assertFalse((new GeneratedLink(''))->getActive());
	}

	public function testGetActiveProp(): void
	{
		$this->assertNull((new GeneratedLink(''))->getActiveProp());
		$this->assertIsString((new GeneratedLink('', true))->getActiveProp());
	}

}
