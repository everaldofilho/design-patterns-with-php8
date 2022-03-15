<?php

namespace Patterns\Domain\Singleton;

trait Singleton
{
    protected static $instance;

    public static function getInstance(): static
    {
        if (!static::$instance) {
            static::$instance = new static;
        }
        return static::$instance;
    }
}