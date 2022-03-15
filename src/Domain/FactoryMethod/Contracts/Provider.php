<?php

namespace Patterns\Domain\FactoryMethod\Contracts;

use Patterns\Domain\FactoryMethod\DTO\ResultDTO;

interface Provider
{
    public function search(string $search): ResultDTO;
}
