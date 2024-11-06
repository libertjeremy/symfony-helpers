<?php

declare(strict_types=1);

namespace LibertJeremy\Symfony\Helpers\Traits;

use LibertJeremy\Symfony\Helpers\Interfaces\SerializerAwareInterface;
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

