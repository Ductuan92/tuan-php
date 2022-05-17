<?php
namespace MyApp\DependencyInjection;
use MyApp\DependencyInjection\WheelDependencyInjection;

interface VehicleInterface
{
    /**
     * @param WheelDependencyInjection $wheel
     * @return mixed
     */
    public function setWheel(WheelDependencyInjection $wheel);
}
