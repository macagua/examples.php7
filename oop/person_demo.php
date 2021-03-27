<?php

// Include Person Class
include_once 'classes/Person.php';

// Instantiate the Abstract class
$ana = new Person();
// Set the Person First Name attribute value
$ana->firstName = 'Ana';
// Set the Person Last Name attribute value
$ana->lastName = 'Poleo';
// Invoke the Person setDateOfBirth method to define date of birth value
$ana->setDateOfBirth('1982-04-18');
// Show show the attributes values
echo "Name: " . $ana->firstName . ".\n";
echo "Lastname: " . $ana->lastName . ".\n";
// Get the Person full name
echo "Fullname: " . $ana->getFullName() . ".\n";
// Get the Person date of birth
echo "Date of birth: " . $ana->getDateOfBirth() . ".\n";
// Get the Person age
echo "Age: " . $ana->getAge() . ".\n\n";

// Instantiate the Abstract class
$leo = new Person();
// Set the Person First Name attribute value
$leo->firstName = 'Leonardo';
// Set the Person Last Name attribute value
$leo->lastName = 'Caballero';
// Invoke the Person setDateOfBirth method to define date of birth value
$leo->setDateOfBirth('1980-12-03');
// Show show the attributes values
echo "Name: " . $leo->firstName . ".\n";
echo "Lastname: " . $leo->lastName . ".\n";
// Get the Person full name
echo "Fullname: " . $leo->getFullName() . ".\n";
// Get the Person date of birth
echo "Date of birth: " . $leo->getDateOfBirth() . ".\n";
// Get the Person age
echo "Age: " . $leo->getAge() . ".\n\n";

// Set the Person First Name attribute value
$leo->firstName = 'José Nicanor De Las Mercedes';
// Set the Person Last Name attribute value
$leo->lastName = 'Ochoa Pinto Morillo';
// Invoke the Person setDateOfBirth method to define date of birth value
$leo->setDateOfBirth('1868-02-19');
// Show show the attributes values
echo "Name: " . $leo->firstName . ".\n";
echo "Lastname: " . $leo->lastName . ".\n";
// Get the Person full name
echo "Fullname: " . $leo->getFullName() . ".\n";
// Get the Person date of birth
echo "Date of birth: " . $leo->getDateOfBirth() . ".\n";
// Get the Person age
echo "Age: " . $leo->getAge() . ".\n";

