<?php

namespace MyApp\DependencyInjection;

class WheelDependencyInjection
{
    private $size;

    public function __construct($size)
    {
        $this->size = $size;
    }


    /**
     * @return mixed
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @param mixed $size
     */
    public function setSize($size)
    {
        $this->size = $size;
    }
}
