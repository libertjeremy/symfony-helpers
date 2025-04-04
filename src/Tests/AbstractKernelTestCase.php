<?php

declare(strict_types=1);

namespace LibertJeremy\Symfony\Helpers\Tests;

use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class AbstractKernelTestCase extends KernelTestCase
{
    protected function setUp(): void
    {
        self::bootKernel([
            'debug' => 1,
        ]);

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
}
