<?php

namespace LibertJeremy\Symfony\Helpers\Interfaces;

use LibertJeremy\Symfony\Helpers\Traits\TwigAwareTrait;
use Twig\Environment;

/**
 * @see TwigAwareTrait
 */
interface TwigAwareInterface
{
    public function setTwig(?Environment $twig): void;
}
