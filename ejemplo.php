<?php
class Example
{
    // Attribute
    var $attribute;

    // Constructor
    function Example()
    {
        // Do nothing
    }

    // Method
    function showName($name)
    {
        echo "The name is " . $name . "\n";
    }

    // Method to define attribute value
    function setAttributeValue($value)
    {
        $this->attribute = $value;
    }

    function setAttribute($value)
    {
        $attribute = $value;
    }

}

// Instantiate the class
echo "Instantiate the class\n";
$obj = new Example(0);

// Invoke the method
$obj->showName('Leonardo Caballero');

// Invoke the method to define attribute
$obj->setAttributeValue(4);
echo "The value of the attribute is " . $obj->attribute . "\n";
?>

