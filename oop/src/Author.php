<?php

namespace App;

use App\Post;
use App\User;

/**
 * Author Class
 */
class Author extends User
{
    // Class attributes
    private $posts = [];

    // Setter method for the Author post
    public function setPost(Post $post)
    {
        $this->posts[] = $post;
    }

    // Getter method for the Author post
    public function getPost()
    {
        return $this->posts;
    }

    // Setter method for associate a post entry to Author
    public function addPost($post)
    {
        array_push($this->posts, $post);
    }

    // Getter method for count the Author posts
    public function countPosts()
    {
        return count($this->posts);
    }
}

