<?php

use PHPUnit\Framework\TestCase;
use App\Author;

/**
 * AuthorTest Class
 */
class AuthorTest extends TestCase
{
    // Class attributes
    protected $author;

    public function setUp() : void
    {
        // Instantiate the Author class
        $this->author = new Author();
    }

    public function test_setget_name_author()
    {
        // Invoke the setPassword method to define name to author
        $this->author->setName('Leonardo Caballero');

        // Test if User name is Equals "Leonardo Caballero"
        $this->assertEquals($this->author->getName(), 'Leonardo Caballero');
    }

    public function test_setget_email_author()
    {
        // Invoke the setPassword method to define email to author
        $this->author->setEmail('leonardoc@plone.org');

        // Test if User Email is Equals "leonardoc@plone.org"
        $this->assertEquals($this->author->getEmail(), 'leonardoc@plone.org');
    }

    public function test_setget_password_author()
    {
        // Invoke the setPassword method to define password to author
        $this->author->setPassword("PHPIsDead!");

        // Test if User Password is Equals "PHPIsDead!"
        $this->assertEquals($this->author->getPassword(), 'PHPIsDead!');
    }

    public function test_name_lastname_email_without_spaces()
    {
        // Instantiate the Author class
        $this->author->setEmail('	leonardoc@plone.org');
        $this->author->setPassword(" PHPIsDead!	");

        // Test if Author Email is Equals "leonardoc@plone.org"
        $this->assertEquals($this->author->getEmail(), 'leonardoc@plone.org');
        // Test if Author Password is Equals "PHPIsDead!"
        $this->assertEquals($this->author->getPassword(), 'PHPIsDead!');
    }
}

