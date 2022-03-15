<?php

namespace Patterns\Domain\FactoryMethod\Factories;

use Patterns\Domain\FactoryMethod\Contracts\Provider;
use Patterns\Domain\FactoryMethod\Enums\ProviderEnum;
use Patterns\Domain\FactoryMethod\Providers\BingProvider;
use Patterns\Domain\FactoryMethod\Providers\GoogleProvider;

class ProviderFactory
{
    public static function create(ProviderEnum $provider): Provider
    {
        return match ($provider) {
            ProviderEnum::Google => new GoogleProvider,
            ProviderEnum::Bing => new BingProvider
        };
    }
}
