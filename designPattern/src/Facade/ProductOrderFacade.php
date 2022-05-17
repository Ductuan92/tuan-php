<?php

namespace MyApp\Facade;
use MyApp\Facade\ProductFacade;

class ProductOrderFacade
{
    private $product;
    private static $order;

    /**
     * @param $product
     */
    public function __construct(ProductFacade $product)
    {
        $this->product = $product;
    }

    public function addToCart()
    {
        return "Product is added -> ";
    }

    public function applyDiscount()
    {
        return "Discount is applied -> ";
    }
    public function billPayment()
    {
        return "pill has been paid with price ". $this->product->getPrice();
    }

    public function generateOrder()
    {
        $order = "";
        $order .= $this->addToCart();
        $order .= $this->applyDiscount();
        $order .= $this->billPayment();
        return $order;
    }
}
