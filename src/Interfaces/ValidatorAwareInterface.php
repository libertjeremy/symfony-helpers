<?php

namespace LibertJeremy\Symfony\Helpers\Interfaces;

use LibertJeremy\Symfony\Helpers\Traits\ValidatorAwareTrait;
use Symfony\Component\Validator\Validator\ValidatorInterface;

/**
 * @see ValidatorAwareTrait
 */
interface ValidatorAwareInterface
{
    public function setValidator(ValidatorInterface $validator): void;
}
