<?php declare(strict_types=1);

use Patterns\Domain\Singleton\Connection;
use PHPUnit\Framework\TestCase;

class ConnectionTest extends TestCase
{
    public function testShoudReturnUniqueInstance()
    {
        $instance = Connection::getInstance();

        self::assertTrue($instance === Connection::getInstance());
        self::assertEquals($instance->conn, Connection::getInstance()->conn);
    }
}