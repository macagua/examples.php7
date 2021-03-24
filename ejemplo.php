<?php
// Abstract class
class Example
{
    // Attribute
    public $attribute;

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
    function setAttribute($value)
    {
        $this->attribute = $value;
    }

}

// Object inheritance class
class Example2 extends Example
{
    function Example2()
    {
        // Do nothing
    }

    function getAttribute()
    {
        return $this->attribute;
    }
}

// Instantiate the Abstract class
echo "Instantiate the class\n";
$obj = new Example();

// Invoke the showName method
$obj->showName('Leonardo Caballero');

// Invoke the setAttribute method to define attribute
$obj->setAttribute(40);
echo "The attribute value is " . $obj->attribute . "\n";

// Instantiate Object inheritance class
echo "\nInstantiate class for object inheritance\n";
$obj2 = new Example2();

// Invoke the showName method
$obj2->showName('Ana Poleo');

// Invoke the setAttribute method to define attribute
$obj2->setAttribute(33);
echo "The value of the attribute is " . $obj2->attribute . "\n";
echo "Access to attribute value via a get method and return his value: " . $obj2->getAttribute() . "\n";
?>

