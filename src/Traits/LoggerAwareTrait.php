<?php

declare(strict_types=1);

namespace LibertJeremy\Symfony\Helpers\Traits;

use LibertJeremy\Symfony\Helpers\Interfaces\LoggerAwareInterface;
use Psr\Log\LoggerInterface;
use Symfony\Contracts\Service\Attribute\Required;

/**
 * @see LoggerAwareInterface
 */
trait LoggerAwareTrait
{
    protected LoggerInterface $logger;

    #[Required]
    public function setLogger(LoggerInterface $logger): void
    {
        $this->logger = $logger;
    }
}
