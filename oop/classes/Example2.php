<?php

// Include PHP Class
include 'classes/Example.php';

/**
 * Object inheritance class
 * Example2 Class
 */
class Example2 extends Example
{
    // Constructor class method
    function Example2()
    {
        // Do nothing
    }

    // Getter method for the Person attribute
    function getAttribute()
    {
        return $this->attribute;
    }
}

