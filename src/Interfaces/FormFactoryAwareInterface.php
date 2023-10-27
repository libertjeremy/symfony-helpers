<?php

namespace LibertJeremy\Symfony\Helpers\Interfaces;

use LibertJeremy\Symfony\Helpers\Traits\FormFactoryAwareTrait;
use Symfony\Component\Form\FormFactoryInterface;

/**
 * @see FormFactoryAwareTrait
 */
interface FormFactoryAwareInterface
{
    public function setFormFactory(?FormFactoryInterface $formFactory): void;
}
