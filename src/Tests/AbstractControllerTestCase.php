<?php

declare(strict_types=1);

namespace LibertJeremy\Symfony\Helpers\Tests;

use LibertJeremy\Symfony\Helpers\Traits\UrlGeneratorAwareTrait;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\BrowserKit\AbstractBrowser;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class AbstractControllerTestCase extends WebTestCase
{
    use UrlGeneratorAwareTrait;

    protected ?AbstractBrowser $client = null;

    protected function setUp(): void
    {
        self::ensureKernelShutdown();

        $this->initializeClient();
        $this->initializeContainer();

        if (method_exists($this, 'initialize')) {
            $this->initialize(self::getContainer());
        }
    }

    protected function initializeClient(): AbstractBrowser
    {
        $client = self::createClient();
        $client->disableReboot();
        $client->followRedirects(true);

        $this->client = $client;

        return $client;
    }

    protected function initializeContainer(): void
    {
        $this->initContainer(self::getContainer());

        if (!$this->urlGenerator instanceof UrlGeneratorInterface) {
            $this->initDependencyInjectionIfNotExists(UrlGeneratorInterface::class, $this->urlGenerator, $this->container);
        }
    }

    protected function tearDown(): void
    {
        parent::tearDown();

        if (
            isset($this->entityManager)
            && null !== $this->entityManager
        ) {
            $this->entityManager->close();
            $this->entityManager = null;
        }
    }
}
