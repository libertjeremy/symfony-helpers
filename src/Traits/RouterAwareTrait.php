<?php

namespace LibertJeremy\Symfony\Helpers\Traits;

use LibertJeremy\Symfony\Helpers\Interfaces\RouterAwareInterface;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Contracts\Service\Attribute\Required;

/**
 * @see RouterAwareInterface
 */
trait RouterAwareTrait
{
    protected ?RouterInterface $router;

    #[Required]
    public function setRouter(?RouterInterface $router): void
    {
        $this->router = $router;
    }
}
