<?php

declare(strict_types=1);

namespace LibertJeremy\Symfony\Helpers\Traits;

use LibertJeremy\Symfony\Helpers\Interfaces\HttpKernelAwareInterface;
use Symfony\Component\HttpKernel\HttpKernelInterface;
use Symfony\Contracts\Service\Attribute\Required;

/**
 * @see HttpKernelAwareInterface
 */
trait HttpKernelAwareTrait
{
    protected ?HttpKernelInterface $httpKernel = null;

    #[Required]
    public function setHttpKernel(HttpKernelInterface $httpKernel): void
    {
        $this->httpKernel = $httpKernel;
    }
}
