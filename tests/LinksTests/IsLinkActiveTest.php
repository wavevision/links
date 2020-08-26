<?php declare(strict_types = 1);

namespace Wavevision\LinksTests;

use Nette\Http\Request;
use Nette\Http\UrlScript;
use Wavevision\Links\AbsoluteLink;
use Wavevision\Links\IsLinkActive;
use Wavevision\Links\Link;
use Wavevision\LinksTests\Mocks\Component;
use Wavevision\LinksTests\Mocks\Presenter;

class IsLinkActiveTest extends UnitTestCase
{

	public function testProcessAbsoluteLink(): void
	{
		$presenter = new Presenter();
		$presenter->setParent(null, 'Module:Presenter');
		$component = new Component();
		$component->setParent($presenter);
		$service = new IsLinkActive();
		$this->assertTrue($service->process($component, new AbsoluteLink(new Link('Presenter:'), 'Module')));
	}

	public function testProcessLink(): void
	{
		$component = new Component();
		$component->setParent($this->createConfiguredMock(Presenter::class, ['isLinkCurrent' => false]));
		$service = new IsLinkActive();
		$this->assertFalse($service->process($component, new Link('Presenter:')));
		$this->assertFalse($service->process($component, new AbsoluteLink(new Link('Presenter:'))));
	}

	public function testUrl(): void
	{
		$service = new IsLinkActive();
		$service->injectRequest($this->createConfiguredMock(Request::class, ['getUrl' => new UrlScript('/')]));
		$this->assertTrue($service->process(new Component(), '/'));
		$this->assertFalse($service->url(new Link('')));
	}

}
