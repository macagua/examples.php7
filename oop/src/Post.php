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

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setContent($content)
    {
        $this->content = $content;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function setCategory(Category $category)
    {
        array_push($this->category, $category);
    }

    public function getCategory()
    {
        return $this->category;
    }

    public function getPost() : string {
        return "Title: {$this->title}.\n Content:: {$this->content}.\n Category: {$this->category->getName()}.\n";
    }

}

