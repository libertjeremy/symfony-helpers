<?php

namespace LibertJeremy\Symfony\Helpers\Interfaces;

use LibertJeremy\Symfony\Helpers\Traits\UrlGeneratorAwareTrait;
use Symfony\Component\Routing\UrlGeneratorInterface;

/**
 * @see UrlGeneratorAwareTrait
 */
interface UrlGeneratorAwareInterface
{
    public function setUrlGenerator(UrlGeneratorInterface $urlGenerator): void;
}
