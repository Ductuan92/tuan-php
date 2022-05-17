<?php

use MyApp\Facade\ProductOrderFacade;
use MyApp\Facade\ProductFacade;
use MyApp\Decorator\SnackDecorator;
use MyApp\Decorator\BeerDecorator;
use MyApp\Decorator\MainFoodDecorator;

require_once realpath("vendor/autoload.php");


//code to test facade
$dress = new ProductFacade("111","red_dress","20usd");
$dressOrder = new ProductOrderFacade($dress);
echo $dressOrder->generateOrder();

$food =  new MainFoodDecorator();
$beer =  new BeerDecorator($food);
echo $beer->addFood();
