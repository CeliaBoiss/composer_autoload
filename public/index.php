<?php 
require __DIR__ . '/../vendor/autoload.php';

use App\Wcs\Hello;

$newHello = new Hello();

echo $newHello->talk();