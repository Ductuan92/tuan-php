<?php

namespace MyApp\Factory;

class ShapeFactory
{
    public function getShape($figure)
    {
        switch ($figure)
        {
            case "Circle":
                return new CircleFactory();
                break;
            case "Retangle":
                return new RectangleFactory();
                break;
            case "Square":
                return new ShapeFactory();
                break;
            default:
                return null;
                break;
        }
    }
}
