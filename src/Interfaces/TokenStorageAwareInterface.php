<?php

namespace LibertJeremy\Symfony\Helpers\Interfaces;

use LibertJeremy\Symfony\Helpers\Traits\TokenStorageAwareTrait;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

/**
 * @see TokenStorageAwareTrait
 */
interface TokenStorageAwareInterface
{
    public function setTokenStorage(TokenStorageInterface $tokenStorage): void;
}
