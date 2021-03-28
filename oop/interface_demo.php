<?php

// Include Person Interface
include __DIR__ . '/interfaces/Person.php';

/**
 * User Class
 */
class Admin implements Person
{
    // Class attributes
    public $nickName;

    // Class constructor method
    public function __construct($nickName)
    {
        $this->nickName = $nickName;
    }

    public function getNickname()
    {
        return $this->nickName;
    }
}

// Instantiate the User class
$admin = new Admin('Macagua');
echo "Nickname: " . $admin->getNickname() . "\n";

