<?php

/**
 * Car Class
 */
class Car
{
    // Class attributes
    var $brand;
    var $model;
    var $color;
    var $doors;

    // Class constructor method
    function __construct($brand, $model, $color, $doors)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->color = $color;
        $this->doors = $doors;
    }

    function carHorn()
    {
        return "Honking the car horn...";
    }

    function carSpeedUp()
    {
        return "Speeding the car...";
    }

    // Getter technical detail of car.
    function technicalDetail()
    {
        return "Model " . $this->model . ", Color " . $this->color . ", Doors " . $this->doors . " and Brand " . $this->brand;
    }
}

