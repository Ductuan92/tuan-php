<?php

namespace MyApp\Decorator;
use MyApp\Decorator\PartyInterface;

class MainFoodDecorator implements PartyInterface
{

    public function addFood()
    {
        return " main food";
    }
}
