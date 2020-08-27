<?php declare(strict_types = 1);

namespace Wavevision\LinksTests;

use Wavevision\Links\AbsoluteLink;
use Wavevision\Links\Link;
use Wavevision\LinksExamples\Links\DecoratedAbsoluteLink;

class DecoratedAbsoluteLinkTest extends UnitTestCase
{

	public function testCreate(): void
	{
		$link = DecoratedAbsoluteLink::create(new AbsoluteLink(new Link('')));
		$this->assertEquals('label', $link->withLabel('label')->getLabel());
		$this->assertEquals('icon', $link->withIcon('icon')->getIcon());
		$absoluteLink = new AbsoluteLink(new Link(''));
		$this->assertSame($absoluteLink, $link->withAbsoluteLink($absoluteLink)->getAbsoluteLink());
	}

}
