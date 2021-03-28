<?php

namespace App;

/**
 * User Class
 */
class User
{
    // Class attributes
    private $name;
    private $email;
    private $password;

    // Setter method for the User name
    public function setName($name)
    {
        $this->name = $name;
    }

    // Getter method for the User name
    public function getName()
    {
        return $this->name;
    }

    // Setter method for the User email
    public function setEmail($email)
    {
        $this->email = trim($email);
    }

    // Getter method for the User email
    public function getEmail()
    {
        return $this->email;
    }

    // Setter method for the User password
    public function setPassword($password)
    {
        $this->password = trim($password);
    }

    // Getter method for the User password
    public function getPassword()
    {
        return $this->password;
    }
}

