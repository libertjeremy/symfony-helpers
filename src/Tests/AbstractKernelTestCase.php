<?php

declare(strict_types=1);

namespace LibertJeremy\Symfony\Helpers\Tests;

use Psr\Container\ContainerInterface;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class AbstractKernelTestCase extends KernelTestCase
{
    protected function setUp(): void
    {
        if (true === $this->skipSetUpBeforeBoot()) {
            self::markTestSkipped();

            return;
        }

        self::bootKernel([
            'debug' => 1,
        ]);

        if (true === $this->skipSetUpAfterBoot(self::getContainer())) {
            self::markTestSkipped();

            return;
        }

        parent::setUp();

        if (method_exists($this, 'initialize')) {
            $this->initialize(self::getContainer());
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

    protected function skipSetUpBeforeBoot(): bool
    {
        return false;
    }

    protected function skipSetUpAfterBoot(ContainerInterface $container): bool
    {
        return false;
    }
}
