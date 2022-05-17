<?php

interface FactoryCustomer{
    const Clothes = 1;
    const Noodles = 2;
    const Beverage = 3;
    public function deliverProduct();
}
