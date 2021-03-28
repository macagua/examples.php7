<?php

use PHPUnit\Framework\TestCase;
use App\User;

/**
 * UserTest Class
 */
class UserTest extends TestCase
{
    // Class attributes
    protected $user;

    public function setUp() : void
    {
        // Instantiate the User class
        $this->user = new User();
    }

    /*
    public function test_get_fullname_user()
    {
        // Test if Author Full Name is Empty
        $this->assertEmpty($this->user->getFullName());
    }
    */

    public function test_setget_name_user()
    {
        // Invoke the setPassword method to define name to author
        $this->user->setName('Leonardo Caballero');

        // Test if User name is Equals "Leonardo Caballero"
        $this->assertEquals($this->user->getName(), 'Leonardo Caballero');
    }

    public function test_setget_email_user()
    {
        // Invoke the setPassword method to define email to author
        $this->user->setEmail('leonardocaballero@gmail.com');

        // Test if User Email is Equals "leonardocaballero@gmail.com"
        $this->assertEquals($this->user->getEmail(), 'leonardocaballero@gmail.com');
    }

    public function test_setget_password_user()
    {
        // Invoke the setPassword method to define password to author
        $this->user->setPassword("PHPIsDead!");

        // Test if User Password is Equals "PHPIsDead!"
        $this->assertEquals($this->user->getPassword(), 'PHPIsDead!');
    }
}

