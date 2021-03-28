<?php

/**
 * Message Class
 */
class Message
{
    public static function formatMessage($message)
    {
        return printf("\e[39m" . $message . "\e[0m\n");
    }
}

