<?php declare(strict_types = 1);

namespace Wavevision\LinksTests;

use Wavevision\Links\AbsoluteLink;
use Wavevision\Links\Link;

class AbsoluteLinkTest extends UnitTestCase
{

	public function testWithLink(): void
	{
		$link = new Link('');
		$this->assertSame(
			$link,
			AbsoluteLink::create(Link::create(''))
				->withLink($link)
				->getLink()
		);
	}

}
