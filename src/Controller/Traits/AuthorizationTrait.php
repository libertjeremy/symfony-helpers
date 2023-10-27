<?php

namespace LibertJeremy\Symfony\Helpers\Controller\Traits;

use LibertJeremy\Symfony\Helpers\Controller\Interfaces\ControllerWithAuthorizationCheckerInterface;
use LibertJeremy\Symfony\Helpers\Traits\AuthorizationCheckerAwareTrait;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

/**
 * @see ControllerWithAuthorizationCheckerInterface
 */
trait AuthorizationTrait
{
    use AuthorizationCheckerAwareTrait;

    /**
     * Checks if the attribute is granted against the current authentication token and optionally supplied subject.
     *
     * @throws \LogicException
     */
    protected function isGranted(mixed $attribute, mixed $subject = null): bool
    {
        if (!$this->authorizationChecker instanceof AuthorizationCheckerInterface) {
            throw new \LogicException('The SecurityBundle is not registered in your application. Try running "composer require symfony/security-bundle".');
        }

        return $this->authorizationChecker->isGranted($attribute, $subject);
    }


    /**
     * Throws an exception unless the attribute is granted against the current authentication token and optionally
     * supplied subject.
     *
     * @throws AccessDeniedException
     */
    protected function denyAccessUnlessGranted(mixed $attribute, mixed $subject = null, string $message = 'Access Denied.'): void
    {
        if (!method_exists($this, 'createAccessDeniedException')) {
            throw new \LogicException('Implements '.ExceptionTrait::class.' on Controller to deny access.');
        }

        if (!$this->isGranted($attribute, $subject)) {
            $exception = $this->createAccessDeniedException($message);
            $exception->setAttributes([$attribute]);
            $exception->setSubject($subject);

            throw $exception;
        }
    }
}
