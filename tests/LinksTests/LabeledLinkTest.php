<?php declare(strict_types = 1);

namespace Wavevision\LinksTests;

use Wavevision\Links\Link;
use Wavevision\LinksExamples\Links\LabeledLink;

class LabeledLinkTest extends UnitTestCase
{

	public function testCreate(): void
	{
		$this->assertSame(
			'label',
			LabeledLink::create((new Link('')), '')
				->withLabel('label')
				->getLabel()
		);
	}

}
