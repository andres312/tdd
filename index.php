<?php
include './vendor/autoload.php';
use App\Post;
use App\Comment;

$post = new Post();
$comment = new Comment();
$post->addComment($comment);