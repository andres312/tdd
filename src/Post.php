<?php

namespace App;

class Post
{
    protected $comments = [];
    public $author;
    public $category;
    protected $title;
    protected $content;
    protected $views = 0;
    protected $tags = [];

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

    public function addAuthor(Author $author)
    {
        $this->author = $author;
        $author->addAmountOfPost();
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function addCategoty(Category $category)
    {
        $this->category = $category;
    }

    public function getCategory()
    {
        return $this->category;
    }

    public function addTittle($title)
    {
        $this->title = $title;
    }

    public function addContent($content)
    {
        $this->content = $content;
    }

    public function getViews()
    {
        return $this->views;
    }

    public function addView()
    {
        $this->views = $this->getViews() + 1;
    }

    public function addTag($tag)
    {
        $this->tags[] = $tag;
    }

    public function countTags()
    {
        return count($this->tags);
    }

    public function getTags()
    {
        return $this->tags;
    }
}