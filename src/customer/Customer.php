<?php

namespace MyApp\customer;

use MyApp\pet\Pet;

class Customer
{
    private $name;
    private $age;
    private $address;
    private $pets;
    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @param Pet $pets
     */
    public function ownPets(Pet $pets)  // This will use mock, I will write unit test later
    {
        $this->pets[] = $pets;
    }

    /**
     * @return mixed
     */
    public function getPets()
    {
        return $this->pets;
    }

}
