<?php

class Person
{
    // Properties (think fields, getter and setter use a function as seen below, getName())
    private $name;
    private $eyeColor;
    private $age;


    // constructor
    public function __construct($name, $eyeColor, $age)
    {
        $this->name = $name;
        $this->eyeColor = $eyeColor;
        $this->age = $age;
    }

    // destructor
    // used to cleanup, example to close dbconnections
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
}
