<?php

namespace Patterns\Domain\Singleton;

class Connection
{
    use Singleton;

    public string $conn;

    public function __construct()
    {
        $this->conn = uniqid();
    }
}