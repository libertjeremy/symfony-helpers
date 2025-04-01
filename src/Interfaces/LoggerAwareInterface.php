<?php

namespace LibertJeremy\Symfony\Helpers\Interfaces;

use LibertJeremy\Symfony\Helpers\Traits\LoggerAwareTrait;
use Psr\Log\LoggerInterface;

/**
 * @see LoggerAwareTrait
 */
interface LoggerAwareInterface
{
    public function setLogger(LoggerInterface $logger): void;
}
