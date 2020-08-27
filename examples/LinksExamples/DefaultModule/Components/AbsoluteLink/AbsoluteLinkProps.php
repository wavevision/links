<?php declare(strict_types = 1);

namespace Wavevision\LinksExamples\DefaultModule\Components\AbsoluteLink;

use Nette\Schema\Expect;
use Nette\Schema\Schema;
use Wavevision\Links\AbsoluteLink;
use Wavevision\Links\Link;
use Wavevision\PropsControl\Props;

class AbsoluteLinkProps extends Props
{

	/**
	 * @return Schema[]
	 */
	protected function define(): array
	{
		return [
			Link::PROP => Expect::type(AbsoluteLink::class)->nullable(),
		];
	}

}
