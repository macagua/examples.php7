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

    public function setPost(Post $post)
    {
        $this->posts[] = $post;
    }

    public function getPost()
    {
        return $this->posts;
    }

    public function addPost($post)
    {
        array_push($this->posts, $post);
    }

    public function countPosts()
    {
        return count($this->posts);
    }
}

