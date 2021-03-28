<?php

// Include Message Class
include_once __DIR__ . '/Message.php';

/**
 * Child class from the Parent class
 * Merry Christmas Message Class
 */
class ChristmasMessage extends Message
{
    public static function formatMessage($message)
    {
        return printf("\e[0;31;42m" . $message . "\e[0m\n");
    }
}

