<?php

namespace LibertJeremy\Symfony\Helpers\Traits;

use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Contracts\Service\Attribute\Required;

/**
 * @see SerializerAwareInterface
 */
trait SerializerAwareTrait
{
    protected ?SerializerInterface $serializer;

    #[Required]
    public function setSerializer(?SerializerInterface $serializer): void
    {
        $this->serializer = $serializer;
    }
}

