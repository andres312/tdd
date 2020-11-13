<?php

use PHPUnit\Framework\TestCase;
use App\Post;
use App\Comment;
use App\Author;
use App\Category;

class PostTest extends TestCase
{
    public function test_add_comment_to_post() 
    {
        $author = new Author('Andres');
        $category = new Category('PHP');
        $comment = new Comment('Comentario');
        $post = new Post();
        $post->addComment($comment);
        $post->getComments();
        $post->author = $author;
        $post->category = $category;        
        
        $this->assertInstanceOf(Author::class, $author);
        $this->assertInstanceOf(Category::class, $category);
        $this->assertInstanceOf(Comment::class, $comment);
        $this->assertInstanceOf(Post::class, $post);
        $this->assertClassHasAttribute('author', Post::class);
        $this->assertClassHasAttribute('category', Post::class);
        $this->assertInstanceOf(Author::class, $post->author);
        $this->assertInstanceOf(Category::class, $post->category);
    }
}