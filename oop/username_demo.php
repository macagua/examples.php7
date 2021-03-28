<?php

// Include PHP Classes
include __DIR__ . '/abstract/Username.php';

class Admin extends Username {
    public function __construct($name) {
        $this->name = $name;
    }
}

class User extends Username {
    public function __construct($name) {
        $this->name = $name;
    }
}

class Guest extends Username {
    protected $name = 'Guest';
}

// Instantiate the Guest class
$guest = new Guest();
echo $guest->login() . "\n";

// Instantiate the Guest class
$admin = new Admin('Ana');
echo $admin->login() . "\n";

// Instantiate the Guest class
$user = new User('Macagua');
echo $user->login() . "\n";

