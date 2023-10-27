<?php

namespace LibertJeremy\Symfony\Helpers\Controller\Interfaces;

use LibertJeremy\Symfony\Helpers\Controller\Traits\TokenStorageTrait;
use LibertJeremy\Symfony\Helpers\Interfaces\TokenStorageAwareInterface;

/**
 * @see TokenStorageTrait;
 */
interface ControllerWithTokenStorageInterface extends TokenStorageAwareInterface
{
}
