<?php

namespace LibertJeremy\Symfony\Helpers\Controller\Traits;

use LibertJeremy\Symfony\Helpers\Controller\Interfaces\ControllerWithHttpKernelInterface;
use LibertJeremy\Symfony\Helpers\Controller\Interfaces\ControllerWithRequestStackInterface;
use LibertJeremy\Symfony\Helpers\Traits\HttpKernelAwareTrait;
use LibertJeremy\Symfony\Helpers\Traits\RequestStackAwareTrait;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\HttpKernelInterface;

/**
 * @see ControllerWithHttpKernelInterface
 * @see ControllerWithRequestStackInterface
 */
trait ForwardTrait
{
    use HttpKernelAwareTrait;
    use RequestStackAwareTrait;

    protected function forward(string $controller, array $path = [], array $query = []): Response
    {
        $request = $this->requestStack->getCurrentRequest();
        $path['_controller'] = $controller;
        $subRequest = $request->duplicate($query, null, $path);

        return $this->httpKernel->handle($subRequest, HttpKernelInterface::SUB_REQUEST);
    }
}
