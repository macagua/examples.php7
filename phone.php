<?php
/**
 * Phone Class
 */

class Phone
{
    // Class attributes
    var $model;
    var $color;
    var $company;

    // Class constructor method
    function __construct($model, $color, $company)
    {
        $this->model   = $model;
        $this->color   = $color;
        $this->company = $company;
    }

    function getCall()
    {
        return "Calling to other phone...";
    }

    function getSms()
    {
        return "Sending a sms text...";
    }
}

$nokia = new Phone('Nokia', 'White', 'Movistar');
// Show show the attributes values
echo "Model: " . $nokia->model . ".\n";
echo "Color: " . $nokia->color . ".\n";
echo "Company: " . $nokia->company . ".\n";
// Get the status call
echo "Call Status: " . $nokia->getCall() . ".\n";
// Get the sms call
echo "SMS Status: " . $nokia->getSms() . ".\n\n";

$xiaomi = new Phone('Xiaomi', 'Red', 'Telcel');
// Show show the attributes values
echo "Model: " . $xiaomi->model . ".\n";
echo "Color: " . $xiaomi->color . ".\n";
echo "Company: " . $xiaomi->company . ".\n";
// Get the status call
echo "Call Status: " . $xiaomi->getCall() . ".\n";
// Get the sms call
echo "SMS Status: " . $xiaomi->getSms() . ".\n";

