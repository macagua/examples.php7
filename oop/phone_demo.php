<?php

// Include Phone Class
include __DIR__ . '/classes/Phone.php';

// Instantiate the Phone class
$nokia = new Phone('Nokia', 'White', 'Movistar');
// Show show the attributes values
echo "Model: " . $nokia->model . ".\n";
echo "Color: " . $nokia->color . ".\n";
echo "Company: " . $nokia->company . ".\n";
// Get the status call
echo "Call Status: " . $nokia->getCall() . ".\n";
// Get the sms call
echo "SMS Status: " . $nokia->getSms() . ".\n\n";

// Instantiate the Phone class
$xiaomi = new Phone('Xiaomi', 'Red', 'Telcel');
// Show show the attributes values
echo "Model: " . $xiaomi->model . ".\n";
echo "Color: " . $xiaomi->color . ".\n";
echo "Company: " . $xiaomi->company . ".\n";
// Get the status call
echo "Call Status: " . $xiaomi->getCall() . ".\n";
// Get the sms call
echo "SMS Status: " . $xiaomi->getSms() . ".\n";

