<?php

// Include Employee Class
include_once 'classes/Employee.php';

// Instantiate Object inheritance class
$employee = new Employee();

// Set the Employee attributes values
$employee->setName('Leonardo Caballero');
$employee->setAge(40);
$employee->setDesignation('Software Engineer');
$employee->setSalary('30K');

// Get the Employee attributes values
echo $employee->getName() . "\n"; // prints 'Leonardo Caballero'
echo $employee->getAge() . "\n"; // prints '40'
echo $employee->getDesignation() . "\n"; // prints 'Software Engineer'
echo $employee->getSalary() . "\n"; // prints '30K'
echo $employee->getNameAndAge() . "\n"; // prints 'Leonardo Caballero is 40 years old.'
//echo $employee->callToPrivateNameAndAge(); // produces 'Fatal Error'

