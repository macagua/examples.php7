<?php

use PHPUnit\Framework\TestCase;
use App\Category;

/**
 * CategoryTest Class
 */
class CategoryTest extends TestCase
{
    public function test_create_category()
    {
        // Instantiate the Category class
        $categoryPlone  = new Category("Plone");

        // Test if Category name is Equals "Plone"
        $this->assertEquals($categoryPlone->getName(), 'Plone');
    }
}
