<?php

namespace LibertJeremy\Symfony\Helpers\Traits;

use LibertJeremy\Symfony\Helpers\Interfaces\HttpClientAwareInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Contracts\Service\Attribute\Required;

/**
 * @see HttpClientAwareInterface
 */
trait HttpClientAwareTrait
{
    protected ?HttpClientInterface $httpClient;

    #[Required]
    public function setHttpClient(?HttpClientInterface $httpClient): void
    {
        $this->httpClient = $httpClient;
    }
}
