<?php
/**
 * Abstract class
 * Person Class
 */
class Person
{
    // Class attributes
    protected $name;
    protected $age;

    // Getter method for the Person full name
    public function getName()
    {
        return $this->name;
    }

    // Setter method for the Person full name
    public function setName($name)
    {
        $this->name = $name;
    }

    private function callToPrivateNameAndAge()
    {
        return "{$this->name} is {$this->age} years old.";
    }

    protected function callToProtectedNameAndAge()
    {
        return "{$this->name} is {$this->age} years old.";
    }
}

/**
 * Object inheritance class
 * Employee Class
 */
class Employee extends Person
{
    // Class attributes
    private $designation;
    private $salary;

    // Getter method for the Employee age
    public function getAge()
    {
        return $this->age;
    }

    // Setter method for the Employee age
    public function setAge($age)
    {
        $this->age = $age;
    }

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
    public function getNameAndAge()
    {
        return $this->callToProtectedNameAndAge();
    }
}

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

