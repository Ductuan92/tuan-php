<?php

use MyApp\pet\Pet;
use MyApp\customer\Customer;

require_once realpath("vendor/autoload.php");

$po = new Pet("pollett", 2);
$po->getName();
$mike = new Customer();
$mike->ownPets($po);
$pets =$mike->getPets();
foreach($pets as $pet)
    echo $pet->getName();
