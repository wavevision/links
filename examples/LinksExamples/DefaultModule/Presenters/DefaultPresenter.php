<?php declare(strict_types = 1);

namespace Wavevision\LinksExamples\DefaultModule\Presenters;

use Wavevision\Links\AbsoluteLink;
use Wavevision\Links\InjectLinkGenerator;
use Wavevision\Links\Link;
use Wavevision\LinksExamples\DefaultModule\Components\AbsoluteLink\AbsoluteLinkComponent;
use Wavevision\LinksExamples\DefaultModule\Components\AbsoluteLink\AbsoluteLinkProps;
use Wavevision\LinksExamples\DefaultModule\Components\Link\LinkComponent;
use Wavevision\LinksExamples\DefaultModule\Components\Link\LinkProps;
use Wavevision\LinksExamples\Presenters\BasePresenter;

final class DefaultPresenter extends BasePresenter
{

	use AbsoluteLinkComponent;
	use InjectLinkGenerator;
	use LinkComponent;

	public function actionDefault(): void
	{
		$this
			->template
			->setParameters(
				[
					'absoluteLink' => new AbsoluteLinkProps(),
					'link' => new LinkProps(),
				]
			);
	}

	public function actionAbsoluteLink(): void
	{
		$this->template->setParameters(
			[
				Link::PROP => new AbsoluteLinkProps(
					[
						Link::PROP => AbsoluteLink::create(new Link('Default:absoluteLink'))
							->withModule('Default'),
					]
				),
				'module' => new AbsoluteLinkProps([Link::PROP => new AbsoluteLink(new Link('default'))]),
			]
		);
	}

	public function actionGenerated(): void
	{
		$this->template->setParameters(
			[Link::PROP => $this->linkGenerator->fromArgs('Default:Default:', ['id' => 1])]
		);
	}

	public function actionLink(): void
	{
		$this->template->setParameters(
			[
				Link::PROP => new LinkProps(
					[
						Link::PROP => new Link('link'),
					]
				),
			]
		);
	}

}
