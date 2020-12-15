<?php

// Scope Resolution Operator (::)

// First class example
class Firstclass
{
    // Properties
    const EXAMPLE = "You can't change this!";

    // Methods
    public static function test()
    {
        $testing = "This is a test!";
        return $testing;
    }
}

$a = Firstclass::test();
// $a = Firstclass::EXAMPLE;
echo $a;



// Second class example
class SecondClass extends Firstclass
{
    // Properties
    public static $staticProperty = "A static property!";

    // Methods
    public static function anotherTest()
    {
        echo parent::EXAMPLE;
        echo self::$staticProperty;
    }
}

$b = SecondClass::anotherTest();
echo $b;
