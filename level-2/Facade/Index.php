<?php

require_once('src/DishwasherFacade.php');

$Dishwasher = new DishwasherFacade(new Dishwasher());
$Dishwasher->turnOn();
$Dishwasher->washDishes();
$Dishwasher->turnOff();
