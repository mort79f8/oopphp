<?php

class House
{
    // Properties (think fields, getter and setter use a function as seen below, getName())
    public $streetName;
    public $streetNumber;

    // constructor
    public function __construct($streetName, $streetNumber)
    {
        $this->streetName = $streetName;
        $this->streetNumber = $streetNumber;
    }

    // methods
    public function getAddress()
    {
        $address = $this->streetName . " " . $this->streetNumber;
        return $address;
    }
}
