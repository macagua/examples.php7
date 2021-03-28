<?php

/**
 * Person Class
 */
class Person
{
    // Class attributes
    // public, protected <-> private
    public $firstName;
    public $lastName;
    private $dateOfBirth;
    protected $nickName;

    /*
    // Class constructor method
    public function __construct($firstName, $lastName, $dateOfBirth, $nickName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->dateOfBirth = $dateOfBirth;
        $this->nickName = $nickName;
    }
    */

    // Setter method for the Person first name
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    // Getter method for the Person first name
    public function getFirstName()
    {
        return $this->firstName;
    }

    // Setter method for the Person last name
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    // Getter method for the Person last name
    public function getLastName()
    {
        return $this->lastName;
    }

    // Setter method for the Person nickname
    public function setNickname($nickName)
    {
        $this->nickName = $nickName;
    }

    // Getter method for the Person nickname
    public function getNickname()
    {
        return $this->nickName;
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

    // Getter method for the Person full name
    public function getFullName()
    {
        return $this->firstName . ' ' . $this->lastName;
    }

    // Getter method for calculate the Person age based on the dateOfBirth attribute
    public function getAge()
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

    private function callToPrivateNicknameAndAge()
    {
        return "{$this->nickName} is {$this->getAge()} years old.";
    }

    protected function callToProtectedNicknameAndAge()
    {
        return "{$this->nickName} is {$this->getAge()} years old.";
    }

    // Basic function for Greeting user
    public function greet()
    {
        return "Hello, $this->nickName!!!";
    }
}

