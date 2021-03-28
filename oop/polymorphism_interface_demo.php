<?php

// Include Search Interface
include __DIR__ . '/interfaces/Search.php';

/**
 * User Class
 */
class User implements Search
{
    public function all()
    {
        return "Getting all Users.";
    }
}

/**
 * Post Class
 */
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

// Instantiate the Post class
$post = new Post();
echo $post->all() . "\n";

