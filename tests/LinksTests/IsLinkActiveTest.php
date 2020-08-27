<?php declare(strict_types = 1);

namespace Wavevision\LinksTests;

use Nette\Http\Request;
use Nette\Http\UrlScript;
use Wavevision\Links\IsLinkActive;
use Wavevision\Links\Link;
use Wavevision\LinksExamples\DefaultModule\Components\Link\Control;

;

class IsLinkActiveTest extends UnitTestCase
{

	public function testUrl(): void
	{
		$service = new IsLinkActive();
		$service->injectRequest($this->createConfiguredMock(Request::class, ['getUrl' => new UrlScript('/')]));
		$this->assertTrue($service->process(new Control(), '/'));
		$this->assertFalse($service->url(new Link('')));
	}

}
