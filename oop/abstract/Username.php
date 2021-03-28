<?php

/**
 * Username Class
 */
abstract class Username {
    protected $name;

    private function getClassName() {
        return get_called_class();
    }

    public function login() {
        return "My name is $this->name from the {$this->getClassName()} class.";
    }
}

