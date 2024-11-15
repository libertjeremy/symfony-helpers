<?php

declare(strict_types=1);

namespace LibertJeremy\Symfony\Helpers\Traits;

use LibertJeremy\Symfony\Helpers\Interfaces\RouterAwareInterface;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Contracts\Service\Attribute\Required;

/**
 * @see RouterAwareInterface
 */
trait RouterAwareTrait
{
    /**
     * @see UrlGeneratorAwareTrait for better performance.
     */
    protected ?RouterInterface $router = null;

    #[Required]
    public function setRouter(RouterInterface $router): void
    {
        $this->router = $router;
    }
}
