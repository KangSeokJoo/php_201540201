<?php

//싱글턴 패턴

class Test
{
    private function __construct()
    {
        echo "테스트 객체";
    }

    public static $instance;
    public static function make()
    {
        self::$instance = new self();
        return self::$instance;
    }
}
