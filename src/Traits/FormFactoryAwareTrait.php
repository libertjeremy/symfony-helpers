<?php

declare(strict_types=1);

namespace LibertJeremy\Symfony\Helpers\Traits;

use LibertJeremy\Symfony\Helpers\Interfaces\FormFactoryAwareInterface;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Contracts\Service\Attribute\Required;

/**
 * @see FormFactoryAwareInterface
 */
trait FormFactoryAwareTrait
{
    protected ?FormFactoryInterface $formFactory = null;

    #[Required]
    public function setFormFactory(FormFactoryInterface $formFactory): void
    {
        $this->formFactory = $formFactory;
    }
}
