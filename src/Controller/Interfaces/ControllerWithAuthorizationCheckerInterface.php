<?php

namespace LibertJeremy\Symfony\Helpers\Controller\Interfaces;

use LibertJeremy\Symfony\Helpers\Controller\Traits\AuthorizationTrait;
use LibertJeremy\Symfony\Helpers\Interfaces\AuthorizationCheckerAwareInterface;

/**
 * @see AuthorizationTrait
 */
interface ControllerWithAuthorizationCheckerInterface extends AuthorizationCheckerAwareInterface
{
}
