<?php

namespace MyApp\Decorator;

class PizzaDecorator implements PartyInterface
{
    protected $food;

    /**
     * @param $food
     */
    public function __construct(PartyInterface $food)
    {
        $this->food = $food;
    }

    /**
     * @return string
     */
    public function addFood()
    {
        return "buy Pizza for party " . $this->food->addFood();
    }
}
