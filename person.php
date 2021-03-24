<?php
/**
 * Person Class
 */

// Abstract class
class Person
{
    // Class attributes
    // public, protected <-> private
    public $firstName;
    public $lastName;
    private $dateOfBirth;

    // Class constructor method
    public function __construct($firstName, $lastName, $dateOfBirth)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->dateOfBirth = $dateOfBirth;
    }

    // Getter method for the Person full name
    public function getFullName()
    {
        return $this->firstName . ' ' . $this->lastName;
    }

    // Setter method for the Person date of birth
    public function setDateOfBirth($date)
    {
        $this->dateOfBirth = $date;
    }

    // Getter method for the Person date of birth
    public function getDateOfBirth()
    {
        return $this->dateOfBirth;
    }

    // Getter method for calculate the Person age based on the dateOfBirth attribute
    function getAge()
    {
        // Date in yyyy/mm/dd format; or it can be in other formats as well
        // Explode the date to get year, month and day
        $dob = explode("-", $this->dateOfBirth);
        // Get age from date or birthdate
        $age = (date("md", date("U", mktime(0, 0, 0, $dob[0], $dob[1], $dob[2]))) > date("md")
        ? ((date("Y") - $dob[0]) - 1) 
        : (date("Y") - $dob[0]));
        return $age;
    }
}

// Instantiate the Abstract class
$ana = new Person("Ana", "Poleo", "1982-04-18");
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
$leo = new Person("Leonardo", "Caballero", "1980-12-03");
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
echo "Age: " . $leo->getAge() . ".\n\n";

