<?php

namespace MyApp\Decorator;
use MyApp\Decorator\PartyInterface;

class SnackDecorator implements PartyInterface
{

    protected $food;

    /**
     * @param $food
     */
    public function __construct(PartyInterface $food)
    {
        $this->food = $food;
    }

    public function addFood()
    {
        return "buy snack for party" . $this->food->addFood();
    }
}
