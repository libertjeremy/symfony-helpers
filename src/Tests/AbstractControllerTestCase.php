<?php

namespace LibertJeremy\Symfony\Helpers\Tests;

use LibertJeremy\Symfony\Helpers\Traits\RouterAwareTrait;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\BrowserKit\AbstractBrowser;
use Symfony\Component\Routing\RouterInterface;

class AbstractControllerTestCase extends WebTestCase
{
    use RouterAwareTrait;

    protected ?AbstractBrowser $client = null;

    protected function setUp(): void
    {
        self::ensureKernelShutdown();

        $this->initializeClient();

        $this->router = ($container = self::getContainer())->get(RouterInterface::class);

        if (method_exists($this, 'initialize')) {
            $this->initialize($container);
        }
    }

    protected function initializeClient(): void
    {
        $client = self::createClient();
        $client->disableReboot();
        $client->followRedirects();

        $this->client = $client;
    }
}
