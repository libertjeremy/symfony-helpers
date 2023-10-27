<?php

namespace LibertJeremy\Symfony\Helpers\Controller\Interfaces;

use LibertJeremy\Symfony\Helpers\Controller\Traits\ForwardTrait;
use LibertJeremy\Symfony\Helpers\Interfaces\RequestStackAwareInterface;

/**
 * @see ForwardTrait
 */
interface ControllerWithRequestStackInterface extends RequestStackAwareInterface
{
}
