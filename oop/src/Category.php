<?php

namespace App;

/**
 * Category Class
 */
class Category
{
    // Class attributes
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName() : string {
        return $this->name;
    }
}

