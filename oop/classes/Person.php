<?php

/**
 * Abstract class
 * Person Class
 */
class Person
{
    // Class attributes
    protected $name;
    protected $age;

    // Getter method for the Person full name
    public function getName()
    {
        return $this->name;
    }

    // Setter method for the Person full name
    public function setName($name)
    {
        $this->name = $name;
    }

    private function callToPrivateNameAndAge()
    {
        return "{$this->name} is {$this->age} years old.";
    }

    protected function callToProtectedNameAndAge()
    {
        return "{$this->name} is {$this->age} years old.";
    }

    // Basic function for Greeting user
    public function greet()
    {
        return "Hola $this->name";
    }
}

