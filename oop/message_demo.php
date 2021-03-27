<?php

// Include PHP Classes
include 'classes/RedMessage.php';
include 'classes/ChristmasMessage.php';

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

