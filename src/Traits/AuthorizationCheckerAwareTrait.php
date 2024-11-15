<?php

declare(strict_types=1);

namespace LibertJeremy\Symfony\Helpers\Traits;

use LibertJeremy\Symfony\Helpers\Interfaces\AuthorizationCheckerAwareInterface;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;
use Symfony\Contracts\Service\Attribute\Required;

/**
 * @see AuthorizationCheckerAwareInterface
 */
trait AuthorizationCheckerAwareTrait
{
    protected ?AuthorizationCheckerInterface $authorizationChecker = null;

    #[Required]
    public function setAuthorizationChecker(AuthorizationCheckerInterface $authorizationChecker): void
    {
        $this->authorizationChecker = $authorizationChecker;
    }
}
