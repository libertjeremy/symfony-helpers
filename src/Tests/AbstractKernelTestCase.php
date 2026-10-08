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

        // unset() et non `= null` : la propriété peut être typée non nullable (EntityManagerAwareTrait).
        if (isset($this->entityManager)) {
            $this->entityManager->close();
            unset($this->entityManager);
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
