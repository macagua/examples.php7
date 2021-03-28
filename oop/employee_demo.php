<?php

// Include Employee Class
include_once __DIR__ . '/classes/Employee.php';

// Instantiate Object inheritance class
$employee = new Employee();

// Set the Employee attributes values
$employee->setFirstName('Manuel Edgardo');
$employee->setLastName('Matos Pérez');
$employee->setNickname('Osafun');
$employee->setDateOfBirth('1965-06-07');
$employee->setDesignation('Systems Engineer');
$employee->setSalary('60K');

// Get the Employee attributes values
echo $employee->getFirstName() . "\n"; // prints 'Manuel Edgardo'
echo $employee->getLastName() . "\n"; // prints 'Matos Pérez'
echo $employee->getNickname() . "\n"; // prints 'Osafun'
echo $employee->getAge() . "\n"; // prints '55'
echo $employee->getDesignation() . "\n"; // prints 'Systems Engineer'
echo $employee->getSalary() . "\n"; // prints '60K'
echo $employee->getNicknameAndAge() . "\n"; // prints 'Osafun is 55 years old.'
//echo $employee->callToPrivateNicknameAndAge(); // produces 'Fatal Error'

