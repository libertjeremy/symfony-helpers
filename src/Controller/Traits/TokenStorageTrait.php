<?php

namespace LibertJeremy\Symfony\Helpers\Controller\Traits;

use LibertJeremy\Symfony\Helpers\Controller\Interfaces\ControllerWithTokenStorageInterface;
use LibertJeremy\Symfony\Helpers\Traits\TokenStorageAwareTrait;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @see ControllerWithTokenStorageInterface
 */
trait TokenStorageTrait
{
    use TokenStorageAwareTrait;

    protected function getUser(): ?UserInterface
    {
        if (null === $token = $this->tokenStorage->getToken()) {
            return null;
        }

        return $token->getUser();
    }
}
