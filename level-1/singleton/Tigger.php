<?php


class Tigger
{

    private static $instance;
    private static int $totalRoars = 0;

    private function __construct()
    {
        echo "Building character..." . PHP_EOL;
    }

    public static function getInstance(): Tigger
    {
        if (!self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function roar()
    {
        self::$totalRoars++;
        echo "Grrr!" . PHP_EOL;
    }

    public static function getCounter()
    {
        return self::$totalRoars;
    }

    private function __clone() {}

    private function __wakeup() {}
}
