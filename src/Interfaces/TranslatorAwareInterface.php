<?php

namespace LibertJeremy\Symfony\Helpers\Interfaces;

use LibertJeremy\Symfony\Helpers\Traits\TranslatorAwareTrait;
use Symfony\Contracts\Translation\TranslatorInterface;

/**
 * @see TranslatorAwareTrait
 */
interface TranslatorAwareInterface
{
    public function setTranslator(TranslatorInterface $translator): void;
}
