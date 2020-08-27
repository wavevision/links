<?php declare(strict_types = 1);

namespace Wavevision\LinksTests;

use Wavevision\LinksExamples\DefaultModule\Presenters\DefaultPresenter;
use Wavevision\NetteTests\Runners\PresenterRequest;

class LinkGeneratorTest extends PresenterTestCase
{

	public function testGenerate(): void
	{
		$this->assertStringContainsString(
			'/1',
			$this->extractTextResponseContent(
				$this->runPresenter(new PresenterRequest(DefaultPresenter::class, 'generated'))
			)
		);
	}

}
