<?php

use MyApp\pet\Dog;

require_once realpath("vendor/autoload.php");

$po = new Dog("pollett", 2, "thom");
$po->getName();
