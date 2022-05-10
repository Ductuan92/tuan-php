<?php

class customer
{
    private $name;
    private $age;
    private $address;

    use \myApp\pet\swimming;

    public function __construct($name, $age, $address)
    {
        $this->name = $name;
        $this->age = $age;
        $this->address = $address;
    }
}
