<?php

use PHPUnit\Framework\TestCase;
use App\Post;
use App\Comment;

class PostTest extends TestCase
{
    public function test_add_comment_to_post()
    {
        // Instantiate the Post class
        $post = new Post();
        // Instantiate the Comment class
        $comment = new Comment();
        // Invoke the Post addComment method to define comment value
        $post->addComment($comment);

        // Test if the Post count comments Equals 1
        $this->assertEquals(1, $post->countComments());
        // Test if get all Comments
        $this->assertInstanceOf(Comment::class, $post->getComments()[0]);
    }
}
