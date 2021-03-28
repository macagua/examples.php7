<?php

use PHPUnit\Framework\TestCase;
use App\Author;
use App\Category;
//use App\Comment;
use App\Post;

class PostTest extends TestCase
{
/*
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
*/
    public function test_posting()
    {
        // Instantiate the Author class
        $author = new Author();
        // Instantiate the Category class
        $category = new Category("Python");
        // Instantiate the Post class
        $post = new Post("Python", "Python es mejor que PHP", $category);
        // Invoke the addPost method to define post to author
        $author->addPost($post);

        // Test if the Author count posts Equals 1
        // Aserción o afirmación para comprobar que tenemos 1 post agregado
        $this->assertEquals(1, $author->countPosts());
        // Aserción o afirmación para comprobar que la categoría es una instancia de la clase Category
        $this->assertInstanceOf(Category::class, $post->getCategory()[0]);

    }
}
