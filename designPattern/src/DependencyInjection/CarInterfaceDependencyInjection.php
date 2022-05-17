<?php

namespace MyApp\DependencyInjection;
use MyApp\DependencyInjection\WheelDependencyInjection;
use MyApp\DependencyInjection\VehicleInterface;

class CarInterfaceDependencyInjection implements VehicleInterface
{
    private $wheel;

    /**
     * @param WheelDependencyInjection $wheel
     * @return void
     */
    public function setWheel(WheelDependencyInjection $wheel)
    {
        $this->wheel = $wheel;
    }

    /**
     * @return mixed
     */
    public function getWheel()
    {
        return $this->wheel;
    }
}
