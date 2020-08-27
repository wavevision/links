<?php declare(strict_types = 1);

namespace Wavevision\LinksExamples\DefaultModule\Components\Link;

use Nette\Schema\Expect;
use Nette\Schema\Schema;
use Wavevision\Links\Link;
use Wavevision\PropsControl\Props;

class LinkProps extends Props
{

	/**
	 * @return Schema[]
	 */
	protected function define(): array
	{
		return [
			Link::PROP => Expect::type(Link::class)->nullable(),
		];
	}

}
