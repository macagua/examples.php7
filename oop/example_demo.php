<?php

// Include Example2 Class
include __DIR__ . '/classes/Example2.php';

// Instantiate the Abstract class
echo "Instantiate the class\n";
$obj = new Example();

// Invoke the showName method
$obj->showName('Leonardo Caballero');

// Invoke the setAttribute method to define attribute
$obj->setAttribute(40);
echo "The Attribute value is " . $obj->attribute . "\n";

// Invoke the getLove method to get attribute
echo "Access to Love attribute value via a get method and return his value: " . $obj->getLove() . "\n";

// Instantiate Object inheritance class
echo "\nInstantiate class for object inheritance\n";
$obj2 = new Example2();

// Invoke the showName method
$obj2->showName('Ana Poleo');

// Invoke the setAttribute method to define attribute
$obj2->setAttribute(33);
echo "The value of the attribute is " . $obj2->attribute . "\n";
// Invoke the getAttribute method to get attribute
echo "Access to Attribute value via a get method and return his value: " . $obj2->getAttribute() . "\n";
?>

