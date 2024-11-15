<?php

declare(strict_types=1);

namespace LibertJeremy\Symfony\Helpers\Traits;

use LibertJeremy\Symfony\Helpers\Interfaces\UrlGeneratorAwareInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Contracts\Service\Attribute\Required;

/**
 * @see UrlGeneratorAwareInterface
 */
trait UrlGeneratorAwareTrait
{
    protected ?UrlGeneratorInterface $urlGenerator = null;

    #[Required]
    public function setUrlGenerator(UrlGeneratorInterface $urlGenerator): void
    {
        $this->urlGenerator = $urlGenerator;
    }
}
