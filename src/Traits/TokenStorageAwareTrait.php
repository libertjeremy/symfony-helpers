<?php

namespace LibertJeremy\Symfony\Helpers\Traits;

use LibertJeremy\Symfony\Helpers\Interfaces\TokenStorageAwareInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Contracts\Service\Attribute\Required;

/**
 * @see TokenStorageAwareInterface::class
 */
trait TokenStorageAwareTrait
{
    protected ?TokenStorageInterface $tokenStorage = null;

    #[Required]
    public function setTokenStorage(?TokenStorageInterface $tokenStorage): void
    {
        $this->tokenStorage = $tokenStorage;
    }
}
