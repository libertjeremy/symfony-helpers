<?php

namespace LibertJeremy\Symfony\Helpers\Interfaces;

use LibertJeremy\Symfony\Helpers\Traits\HttpKernelAwareTrait;
use Symfony\Component\HttpKernel\HttpKernelInterface;

/**
 * @see HttpKernelAwareTrait
 */
interface HttpKernelAwareInterface
{
    public function setHttpKernel(HttpKernelInterface $httpKernel): void;
}
