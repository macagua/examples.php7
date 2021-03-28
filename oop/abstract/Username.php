<?php

/**
 * Username Class
 */
abstract class Username {

    // Class attributes
    protected $name;

    // Getter method for the ClassName
    private function getClassName()
    {
        return get_called_class();
    }

    // ...
    public function login()
    {
        return "My name is {$this->name} from the {$this->getClassName()} class.";
    }
}

