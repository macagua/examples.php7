<?php

// Include PHP Classes
include __DIR__ . '/classes/Admin.php';
include __DIR__ . '/classes/User.php';

// Instantiate the Abstract class
$user = new User;
// Instantiate Object inheritance class
$user->type = new Admin;
// Invoke the Person "greet" method to get the greeting
echo $user->type->greet() . "\n";

