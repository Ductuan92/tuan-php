<?php

namespace MyApp\DependencyInjection;
use MyApp\DependencyInjection\WheelDependencyInjection;

class CarConstructorDependencyInjection
{
    private $wheel;

    /**
     * @param $wheel
     */
    public function __construct(WheelDependencyInjection $wheel)
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
