<?php

namespace MyApp\Factory;

class SquareFactory implements ShapeInterface
{

    public function draw()
    {
        return "draw a square";
    }
}
