<?php

namespace LibertJeremy\Symfony\Helpers\Interfaces;

use LibertJeremy\Symfony\Helpers\Traits\EventDispatcherAwareTrait;
use Symfony\Contracts\EventDispatcher\EventDispatcherInterface;

/**
 * @see EventDispatcherAwareTrait
 */
interface EventDispatcherAwareInterface
{
    public function setEventDispatcher(EventDispatcherInterface $eventDispatcher): void;
}
