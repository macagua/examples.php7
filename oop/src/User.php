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

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setEmail($email)
    {
        $this->email = trim($email);
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setPassword($password)
    {
        $this->password = trim($password);
    }

    public function getPassword()
    {
        return $this->password;
    }
}

