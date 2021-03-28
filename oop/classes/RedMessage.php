<?php

// Include Message Class
include __DIR__ . '/Message.php';

/**
 * Child class from the Parent class
 * Red Message Class
 */
class RedMessage extends Message
{
    public static function formatMessage($message)
    {
        return printf("\e[31m" . $message . "\e[0m\n");
    }
}

