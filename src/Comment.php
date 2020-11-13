<?php

namespace App;

class Comment
{
    protected $likes;
    protected $comment;

    public function __construct($comment)
    {
        $this->comment = $comment;
        $this->likes = 0;
    }
}
