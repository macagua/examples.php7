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

