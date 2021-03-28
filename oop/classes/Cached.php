<?php

// Include Base Class
include_once __DIR__ . '/../abstract/Base.php';

/**
 * Cached Class
 */
class Cached extends Base
{
    // Implements store abstract method
    public function store()
    {
        return "Implements store abstract method";
    }
}

