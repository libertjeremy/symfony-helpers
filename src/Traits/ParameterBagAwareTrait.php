<?php

namespace LibertJeremy\Symfony\Helpers\Traits;

use LibertJeremy\Symfony\Helpers\Interfaces\ParameterBagAwareInterface;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Contracts\Service\Attribute\Required;

/**
 * @see ParameterBagAwareInterface
 */
trait ParameterBagAwareTrait
{
    protected ?ParameterBagInterface $parameterBag;

    #[Required]
    public function setParameterBag(?ParameterBagInterface $parameterBag): void
    {
        $this->parameterBag = $parameterBag;
    }
}
