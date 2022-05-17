<?php

namespace MyApp\DependencyInjection;
use MyApp\DependencyInjection\WheelDependencyInjection;

class CarDependencyInjection
{
    private $wheel;

    /**
     * @param string $size
     * @return void
     */
    public function setWheelSize(string $size)
    {
        $this->wheel = new WheelDependencyInjection($size);
    }

    /**
     * @return mixed
     */
    public function getWheelSize()
    {
        return $this->wheel;
    }
}
