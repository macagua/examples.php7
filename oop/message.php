<?php

/**
 * Abstract class
 * Message Class
 */
class Message
{
    public static function formatMessage($message)
    {
        return printf("\e[39m" . $message ."\e[0m\n");
    }
}

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

/**
 * Object inheritance class
 * Merry Christmas Message Class
 */
class ChristmasMessage extends Message
{
    public static function formatMessage($message)
    {
        return printf("\e[0;31;42m" . $message ."\e[0m\n");
    }
}

// Instantiate the Abstract class
$message = new Message();
// Invoke the formatMessage method to get a formated message
$message->formatMessage('Hello World');

// Instantiate Object inheritance class
$redMsg = new RedMessage();
// Invoke the formatMessage method to get a formated message
$redMsg->formatMessage('Hello PHP');

// Instantiate Object inheritance class
$mcMsg = new ChristmasMessage();
// Invoke the formatMessage method to get a formated message
$mcMsg->formatMessage('Merry Christmas!');

