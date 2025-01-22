<?php

declare(strict_types=1);

trait SingletonTrait {

    private static ?self $instance = null;

    private function __construct()
    {
        // private constructor.
    }

    private function __clone()
    {
        // prevent cloning.
    }

    public function __wakeup()
    {
        // prevent deserialization.
        throw new \Exception("Cannot unserialize a singleton.");
    }

    public static function getInstance() : static {
        if(self::$instance === null) {
            self::$instance = new static;
        }
        return self::$instance;
    }
}
?>