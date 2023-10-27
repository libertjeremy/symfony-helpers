<?php

namespace LibertJeremy\Symfony\Helpers\Interfaces;

use LibertJeremy\Symfony\Helpers\Traits\RequestStackAwareTrait;
use Symfony\Component\HttpFoundation\RequestStack;

/**
 * @see RequestStackAwareTrait
 */
interface RequestStackAwareInterface
{
    public function setRequestStack(?RequestStack $requestStack): void;
}
