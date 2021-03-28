<?php

// Include PHP Classes
include __DIR__ . '/classes/Auth.php';
include __DIR__ . '/classes/Cached.php';
include __DIR__ . '/classes/Database.php';

// Instantiate the Abstract class
$database = new Database();
echo $database->get() . "\n";

// Instantiate the Auth class
$auth = new Auth();
echo $auth->login() . "\n";

/**/
// Instantiate the Cached class
$cached = new Cached();
echo $cached->store() . "\n";

