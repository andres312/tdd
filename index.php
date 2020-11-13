<?php

require __DIR__ . '/vendor/autoload.php';

use App\Author;
use App\Category;
use App\Comment;
use App\Post;

$author = new Author("Andres");
$category = new Category("PHP");
$post = new Post();
$comment = new Comment("Que buen post");

$post->addComment($comment);
$post->addAuthor($author);
$post->addCategoty($category);
$post->addTittle("Introducción a PHP");
$post->addContent("PHP es un lenguaje de programación Orientado a Objetos");
$post->addView();
$post->addTag("Programación");
$post->addTag("Backend");

echo '<pre>';
echo var_dump($post);
echo '</pre>';