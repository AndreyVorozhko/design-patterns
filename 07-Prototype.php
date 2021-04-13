<?php

use Prototype\Post;
use Prototype\User;

require "functions.php";
spl_autoload_register('project_autoload');

$user = new User('User');
$post = new Post($user, 'First post', 'Hello, World!');
$post->addComment('Hi!');

$post2 = clone $post;

$post2->addComment('Good Bye!');

var_dump($post);
var_dump($post2);