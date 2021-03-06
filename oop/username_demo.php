<?php

// Include Username Abstract Class
include __DIR__ . '/abstract/Username.php';

/**
 * Admin Class
 */
class Admin extends Username {
    public function __construct($name) {
        $this->name = $name;
    }
}

/**
 * User Class
 */
class User extends Username {
    public function __construct($name) {
        $this->name = $name;
    }
}

/**
 * Guest Class
 */
class Guest extends Username {
    protected $name = 'Guest';
}

// Instantiate the Guest class
$guest = new Guest();
echo $guest->login() . "\n";

// Instantiate the Admin class
$admin = new Admin('Ana');
echo $admin->login() . "\n";

// Instantiate the User class
$user = new User('Macagua');
echo $user->login() . "\n";

