<?php

namespace LibertJeremy\Symfony\Helpers\Controller\Interfaces;

use LibertJeremy\Symfony\Helpers\Controller\Traits\GenerateUrlTrait;
use LibertJeremy\Symfony\Helpers\Interfaces\RouterAwareInterface;

/**
 * @see GenerateUrlTrait
 */
interface ControllerWithRouterInterface extends RouterAwareInterface
{
}
