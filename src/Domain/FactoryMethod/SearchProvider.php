<?php

namespace Patterns\Domain\FactoryMethod;

use Patterns\Domain\FactoryMethod\Contracts\Provider;
use Patterns\Domain\FactoryMethod\DTO\ResultDTO;
use Patterns\Domain\FactoryMethod\Enums\ProviderEnum;
use Patterns\Domain\FactoryMethod\Factories\ProviderFactory;

class SearchProvider
{
    private Provider $provider;

    public function __construct(ProviderEnum $provider)
    {
        $this->provider = ProviderFactory::create($provider);
    }

    public function search(string $search): ResultDTO
    {
        return $this->provider->search($search);
    }
}
