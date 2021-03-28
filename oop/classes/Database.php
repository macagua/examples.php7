<?php

// Include Store Interface
include __DIR__ . '/../interfaces/Store.php';

/**
 * Database Class
 */
class Database implements Store
{
    // Implements get method
    public function get()
    {
        return "Implements get method";
    }
}

