<?php

namespace LibertJeremy\Symfony\Helpers\Interfaces;

use LibertJeremy\Symfony\Helpers\Traits\SerializerAwareTrait;
use Symfony\Component\Serializer\SerializerInterface;

/**
 * @see SerializerAwareTrait
 */
interface SerializerAwareInterface
{
    public function setSerializer(?SerializerInterface $serializer): void;
}
