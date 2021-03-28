<?php

/**
 * Base Class
 */
abstract class Base
{

    // Force class extension to define the store method
    abstract protected function store();

    // Common method
    public function get()
    {
        // ...
        print $this->store() . "\n";
    }
}

