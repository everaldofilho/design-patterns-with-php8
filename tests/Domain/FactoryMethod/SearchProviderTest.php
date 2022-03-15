<?php declare(strict_types=1);

use Patterns\Domain\FactoryMethod\Enums\ProviderEnum;
use Patterns\Domain\FactoryMethod\SearchProvider;
use PHPUnit\Framework\TestCase;

class SearchProviderTest extends TestCase
{
    public function testShouldSearchedMultipleProvider()
    {
        $result1 = (new SearchProvider(ProviderEnum::Google))->search("AAA");
        self::assertCount(3, $result1->data);
        self::assertEquals('AAA', $result1->filter);

        $result2 = (new SearchProvider(ProviderEnum::Bing))->search("BBB");
        self::assertCount(2, $result2->data);
        self::assertEquals('BBB', $result2->filter);
    }
}
