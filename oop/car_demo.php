<?php

// Include Car Class
include __DIR__ . '/classes/Car.php';

$tesla = new Car('Tesla', 'S', 'Black', 4);
// Show show the attributes values
echo "Brand: " . $tesla->brand . ".\n";
echo "Model: " . $tesla->model . ".\n";
echo "Color: " . $tesla->color . ".\n";
echo "Doors: " . $tesla->doors . ".\n";
// Get the status Horn
echo "Car Horn Status: " . $tesla->carHorn() . ".\n";
// Get the status Speed Up
echo "Car Speed Up Status: " . $tesla->carSpeedUp() . ".\n";
// Get the Car full detail
echo "Full Detail: " . $tesla->technicalDetail() . ".\n\n";

$lamborghini = new Car('Lamborghini', 'Aventador', 'Yellow', 3);
// Show show the attributes values
echo "Brand: " . $lamborghini->brand . ".\n";
echo "Model: " . $lamborghini->model . ".\n";
echo "Color: " . $lamborghini->color . ".\n";
echo "Doors: " . $lamborghini->doors . ".\n";
// Get the status call
echo "Call Status: " . $lamborghini->carHorn() . ".\n";
// Get the sms call
echo "SMS Status: " . $lamborghini->carSpeedUp() . ".\n";
// Get the Car full detail
echo "Full Detail: " . $lamborghini->technicalDetail() . ".\n\n";

