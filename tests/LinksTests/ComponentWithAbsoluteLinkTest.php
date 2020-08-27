<?php declare(strict_types = 1);

namespace Wavevision\LinksTests;

use Wavevision\LinksExamples\DefaultModule\Presenters\DefaultPresenter;
use Wavevision\NetteTests\Runners\PresenterRequest;

class ComponentWithAbsoluteLinkTest extends PresenterTestCase
{

	public function testDefault(): void
	{
		$this->assertStringContainsString('<br>', $this->response());
	}

	public function testAbsoluteLink(): void
	{
		$this->assertStringContainsString('/absolute-link', $this->response('absoluteLink'));
	}

	private function response(string $action = DefaultPresenter::DEFAULT_ACTION): string
	{
		return $this->extractTextResponseContent(
			$this->runPresenter(new PresenterRequest(DefaultPresenter::class, $action))
		);
	}

}
