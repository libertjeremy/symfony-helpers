<?php

namespace LibertJeremy\Symfony\Helpers\Controller\Traits;

use LibertJeremy\Symfony\Helpers\Controller\Interfaces\ControllerWithFormFactoryInterface;
use LibertJeremy\Symfony\Helpers\Traits\FormFactoryAwareTrait;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormInterface;

/**
 * @see ControllerWithFormFactoryInterface
 */
trait FormTrait
{
    use FormFactoryAwareTrait;

    protected function createForm(string $type, mixed $data = null, array $options = []): FormInterface
    {
        return $this->formFactory->create($type, $data, $options);
    }

    protected function createFormBuilder(mixed $data = null, array $options = []): FormBuilderInterface
    {
        return $this->formFactory->createBuilder(FormType::class, $data, $options);
    }
}
