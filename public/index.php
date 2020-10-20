<?php 
require __DIR__ . '/../vendor/autoload.php';

use App\Wcs\Hello;

$newHello = new Hello();

$anotherHello = new HelloWorld\SayHello();

echo $newHello->talk()."<br/>";
echo $anotherHello->world();