<?php

namespace LibertJeremy\Symfony\Helpers\Controller\Interfaces;

use LibertJeremy\Symfony\Helpers\Controller\Traits\ForwardTrait;
use LibertJeremy\Symfony\Helpers\Interfaces\HttpKernelAwareInterface;

/**
 * @see ForwardTrait
 */
interface ControllerWithHttpKernelInterface extends HttpKernelAwareInterface
{
}
