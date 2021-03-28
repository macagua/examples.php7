<?php

namespace App;

/**
 * Category Class
 */
class Category
{
    // Class attributes
    private $name;

    // Class constructor method
    public function __construct($name)
    {
        $this->name = $name;
    }

    // Getter method for the Category name
    public function getName() : string {
        return $this->name;
    }
}

