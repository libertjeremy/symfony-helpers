<?php

namespace LibertJeremy\Symfony\Helpers\Interfaces;

use LibertJeremy\Symfony\Helpers\Traits\RouterAwareTrait;
use Symfony\Component\Routing\RouterInterface;

/**
 * @see RouterAwareTrait
 */
interface RouterAwareInterface
{
    public function setRouter(RouterInterface $router): void;
}
