<?php declare(strict_types = 1);

namespace Wavevision\LinksTests;

use Wavevision\Links\Link;
use Wavevision\LinksExamples\Links\DecoratedLink;

class DecoratedLinkTest extends UnitTestCase
{

	public function testCreate(): void
	{
		$link = new Link('');
		$this->assertSame($link, DecoratedLink::create(new Link(''))->withLink($link)->getLink());
	}

}
