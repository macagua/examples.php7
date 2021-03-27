<?php

/**
 * Abstract class
 * Person Class
 */
class Person
{
    // Basic function for Greeting user
    public function greet()
    {
        return "Hola $this->name";
    }
}

/**
 * User Class
 */
class User
{
    // Class attributes
    public $type;
}


/**
 * Object inheritance class
 * Admin Class
 */
class Admin extends Person
{
    // Class attributes
    public $name = "Administrador";
}

// Instantiate the Abstract class
$user = new User;
// Instantiate Object inheritance class
$user->type = new Admin;
// Invoke the Person "greet" method to get the greeting
echo $user->type->greet() . "\n";

