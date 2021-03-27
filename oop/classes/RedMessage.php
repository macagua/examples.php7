<?php

// Include Message Class
include 'classes/Message.php';

/**
 * Object inheritance class
 * Red Message Class
 */
class RedMessage extends Message
{
    public static function formatMessage($message)
    {
        return printf("\e[31m" . $message ."\e[0m\n");
    }
}

