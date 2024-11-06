<?php

declare(strict_types=1);

namespace LibertJeremy\Symfony\Helpers\Traits;

use LibertJeremy\Symfony\Helpers\Interfaces\TwigAwareInterface;
use Symfony\Contracts\Service\Attribute\Required;
use Twig\Environment;

/**
 * @see TwigAwareInterface
 */
trait TwigAwareTrait
{
    protected ?Environment $twig = null;

    #[Required]
    public function setTwig(?Environment $twig): void
    {
        $this->twig = $twig;
    }
}
