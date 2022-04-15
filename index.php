<?php

include 'Car.php';
include 'Aircraft.php';

$car = new Car\Car();
$car->move();
$air = new Aircraft\Aircraft();
$air->fly();