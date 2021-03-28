<?php

// Include PHP Classes
include __DIR__ . '/interfaces/Search.php';

class User implements Search
{
    public function all()
    {
        return "Getting all Users.";
    }
}

class Post implements Search
{
    public function all()
    {
        return "Getting all Posts.";
    }
}

// Instantiate the User class
$user = new User();
echo $user->all() . "\n";

// Instantiate the User class
$post = new Post();
echo $post->all() . "\n";

