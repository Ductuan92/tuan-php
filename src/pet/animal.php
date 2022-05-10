<?php
namespace myApp\pet;

abstract class animal
{
    private $name;
    private $age;
    private $owner;

    function __construct($name, $age, $owner)
    {
        $this->name = $name;
        $this->age = $age;
        $this->owner = $owner;
    }

    public function getName()
    {
        echo $this->name;
    }
}
