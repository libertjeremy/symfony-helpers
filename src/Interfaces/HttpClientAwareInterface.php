<?php

namespace LibertJeremy\Symfony\Helpers\Interfaces;

use LibertJeremy\Symfony\Helpers\Traits\HttpClientAwareTrait;
use Symfony\Contracts\HttpClient\HttpClientInterface;

/**
 * @see HttpClientAwareTrait
 */
interface HttpClientAwareInterface
{
    public function setHttpClient(?HttpClientInterface $httpClient): void;
}
