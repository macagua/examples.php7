<?php

// Include Example Class
include __DIR__ . '/Example.php';

/**
 * Child class from the Parent class
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

