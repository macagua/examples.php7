<?php

namespace App;

/**
 * Post Class
 */
class Post
{
    // Class attributes
    private $title;
    private $content;
    private $category = [];
    //protected $comments = [];

    public function __construct ($title, $content, Category $category)
    {
        $this->title        = $title;
        $this->content      = $content;
        $this->setCategory($category);
    }

    /*
    public function addComment(Comment $comment)
    {
        $this->comments[] = $comment;
    }

    public function countComments()
    {
        return count($this->comments);
    }

    public function getComments()
    {
        return $this->comments;
    }
    */

    // Setter method for the Post title
    public function setTitle($title)
    {
        $this->title = $title;
    }

    // Getter method for the Post title
    public function getTitle()
    {
        return $this->title;
    }

    // Setter method for the Post content
    public function setContent($content)
    {
        $this->content = $content;
    }

    // Getter method for the Post content
    public function getContent()
    {
        return $this->content;
    }

    // Setter method for the Post category
    public function setCategory(Category $category)
    {
        array_push($this->category, $category);
    }

    // Getter method for the Post category
    public function getCategory()
    {
        return $this->category;
    }

    // Getter method for the Post detail
    public function getPost() : string
    {
        return "Title: {$this->title}.\n Content:: {$this->content}.\n Category: {$this->category->getName()}.\n";
    }

}

