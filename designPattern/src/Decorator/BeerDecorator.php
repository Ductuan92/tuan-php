<?php

namespace MyApp\Decorator;

class BeerDecorator implements PartyInterface
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
        return "buy beer for party" . $this->food->addFood();
    }
}
