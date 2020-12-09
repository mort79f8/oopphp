<?php

class Person
{
    // Properties (think fields, getter and setter use a function as seen below, getName())
    private $name;
    private $eyeColor;
    private $age;

    public static $drinkingAge = 21;


    // constructor
    public function __construct($name, $eyeColor, $age)
    {
        $this->name = $name;
        $this->eyeColor = $eyeColor;
        $this->age = $age;
    }

    // destructor
    // used to cleanup, example to close dbconnections
    // runs at the end of a object (eg. when you are creating a object, this will run as the last function)
    public function __destruct()
    {
    }

    // methods
    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getDA()
    {
        return self::$drinkingAge;
    }

    public static function setDrinkingAge($newDA)
    {
        self::$drinkingAge = $newDA;
    }
}
