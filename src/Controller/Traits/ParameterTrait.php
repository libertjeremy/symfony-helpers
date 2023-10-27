<?php

namespace LibertJeremy\Symfony\Helpers\Controller\Traits;

use LibertJeremy\Symfony\Helpers\Controller\Interfaces\ControllerWithParameterInterface;
use LibertJeremy\Symfony\Helpers\Traits\ParameterBagAwareTrait;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @see ControllerWithParameterInterface
 */
trait ParameterTrait
{
    use ParameterBagAwareTrait;

    protected function getParameter(string $name): mixed
    {
        return $this->parameterBag->get($name);
    }
}
