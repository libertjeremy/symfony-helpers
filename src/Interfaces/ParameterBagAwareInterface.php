<?php

namespace LibertJeremy\Symfony\Helpers\Interfaces;

use LibertJeremy\Symfony\Helpers\Traits\ParameterBagAwareTrait;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

/**
 * @see ParameterBagAwareTrait
 */
interface ParameterBagAwareInterface
{
    public function setParameterBag(?ParameterBagInterface $parameterBag): void;
}
