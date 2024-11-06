<?php

declare(strict_types=1);

namespace LibertJeremy\Symfony\Helpers\Traits;

use LibertJeremy\Symfony\Helpers\Interfaces\EventDispatcherAwareInterface;
use Symfony\Contracts\EventDispatcher\EventDispatcherInterface;
use Symfony\Contracts\Service\Attribute\Required;

/**
 * @see EventDispatcherAwareInterface
 */
trait EventDispatcherAwareTrait
{
    protected ?EventDispatcherInterface $eventDispatcher = null;

    #[Required]
    public function setEventDispatcher(?EventDispatcherInterface $eventDispatcher): void
    {
        $this->eventDispatcher = $eventDispatcher;
    }
}
