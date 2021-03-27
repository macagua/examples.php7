<?php

// Include PHP Class
include_once 'classes/Person.php';

/**
 * Object inheritance class
 * Employee Class
 */
class Employee extends Person
{
    // Class attributes
    private $designation;
    private $salary;

    // Getter method for the Employee designation
    public function getDesignation()
    {
        return $this->designation;
    }

    // Setter method for the Employee designation
    public function setDesignation($designation)
    {
        $this->designation = $designation;
    }

    // Getter method for the Employee salary
    public function getSalary()
    {
        return $this->salary;
    }

    // Setter method for the Employee salary
    public function setSalary($salary)
    {
        $this->salary = $salary;
    }

    // Getter method for the Employee name and age
    public function getNicknameAndAge()
    {
        return $this->callToProtectedNicknameAndAge();
    }
}

