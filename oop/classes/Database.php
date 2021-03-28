<?php

// Include Store Classes
include __DIR__ . '/../interfaces/Store.php';

/**
 * Database Class
 */
class Database implements Store
{
    // Implements Get function
    public function get()
    {
        return "Implements Get function";
    }
}

