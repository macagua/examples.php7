<?php
/**
 * Abstract class
 * Person Class
 */
class Person
{
    protected $name;
    protected $age;

    public function getName()
    {
        return $this->name;
    }

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
    private $designation;
    private $salary;

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function getDesignation()
    {
        return $this->designation;
    }

    public function setDesignation($designation)
    {
        $this->designation = $designation;
    }

    public function getSalary()
    {
        return $this->salary;
    }
 
    public function setSalary($salary)
    {
        $this->salary = $salary;
    }

    public function getNameAndAge()
    {
        return $this->callToProtectedNameAndAge();
    }
}

$employee = new Employee();

$employee->setName('Bob Smith');
$employee->setAge(30);
$employee->setDesignation('Software Engineer');
$employee->setSalary('30K');

echo $employee->getName() . "\n"; // prints 'Bob Smith'
echo $employee->getAge() . "\n"; // prints '30'
echo $employee->getDesignation() . "\n"; // prints 'Software Engineer'
echo $employee->getSalary() . "\n"; // prints '30K'
echo $employee->getNameAndAge() . "\n"; // prints 'Bob Smith is 30 years old.'
//echo $employee->callToPrivateNameAndAge(); // produces 'Fatal Error'

