<?php

namespace LibertJeremy\Symfony\Helpers\Interfaces;

use LibertJeremy\Symfony\Helpers\Traits\AuthorizationCheckerAwareTrait;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;

/**
 * @see AuthorizationCheckerAwareTrait
 */
interface AuthorizationCheckerAwareInterface
{
    public function setAuthorizationChecker(?AuthorizationCheckerInterface $authorizationChecker): void;
}
