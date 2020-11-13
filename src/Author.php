<?php 

namespace App;

class Author extends User
{
    public $amount_of_posts = 0;

    public function addAmountOfPost()
    {
        $this->amount_of_posts = $this->getAmountOfPost() + 1;
    }

    public function getAmountOfPost()
    {
        return $this->amount_of_posts;
    }
}