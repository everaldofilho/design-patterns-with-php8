<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Patterns\Domain\Singleton\Foo;

class FooTest extends TestCase
{
    public function testShoudReturnUniqueInstance()
    {
        $instance = Foo::getInstance();

        self::assertTrue($instance === Foo::getInstance());
    }
}