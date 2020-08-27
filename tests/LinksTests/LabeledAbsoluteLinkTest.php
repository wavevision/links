<?php declare(strict_types = 1);

namespace Wavevision\LinksTests;

use Wavevision\Links\AbsoluteLink;
use Wavevision\Links\Link;
use Wavevision\LinksExamples\Links\LabeledAbsoluteLink;

class LabeledAbsoluteLinkTest extends UnitTestCase
{

	public function testCreate(): void
	{
		$this->assertSame(
			'label',
			LabeledAbsoluteLink::create(new AbsoluteLink(new Link('')), '')
				->withLabel('label')
				->getLabel()
		);
	}

}
