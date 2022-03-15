<?php

namespace Patterns\Domain\FactoryMethod\Providers;

use Patterns\Domain\FactoryMethod\Contracts\Provider;
use Patterns\Domain\FactoryMethod\DTO\ResultDTO;

class GoogleProvider implements Provider
{
    public function search(string $search): ResultDTO
    {
        return new ResultDTO(
            filter: $search,
            data: ['result1', 'result2', 'result3']
        );
    }
}
