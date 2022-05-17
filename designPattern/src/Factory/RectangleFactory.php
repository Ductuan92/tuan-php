<?php

namespace MyApp\Factory;

class RectangleFactory implements ShapeInterface
{

    public function draw()
    {
        return "draw a rectangle";
    }
}
