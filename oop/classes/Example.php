<?php

/**
 * Phone Class
 */
class Example
{
    // Class attributes
    public $attribute;
    private $love;

    // Class constructor method
    function Example()
    {
        $this->love = 'Hidden';
    }

    // Simple method with params
    function showName($name)
    {
        echo "The name is " . $name . "\n";
    }

    // Setter method for the Person attribute
    function setAttribute($value)
    {
        $this->attribute = $value;
    }

    // Getter method for the Person Love attribute
    function getLove()
    {
        return $this->love;
    }
}

