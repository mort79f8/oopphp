<?php

// we have added a namespace.
namespace Person;

class Person
{
    // Properties (think fields, getter and setter use a function as seen below, getName())
    public $name;
    public $age;

    // constructor
    public function __construct(string $name, int $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    // methods
    public function getPerson()
    {
        $person = $this->name . " is " . $this->age . " years old!";
        return $person;
    }
}
