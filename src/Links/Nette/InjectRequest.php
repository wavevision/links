<?php declare(strict_types = 1);

namespace Wavevision\Links\Nette;

use Nette\Http\IRequest;

trait InjectRequest
{

	protected IRequest $request;

	public function injectRequest(IRequest $request): void
	{
		$this->request = $request;
	}

}
