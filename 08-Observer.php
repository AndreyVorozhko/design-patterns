<?php

use Observer\Blog;
use Observer\SendMailPlugin;
use Observer\ChangeTextPlugin;
use Observer\ChangeTitlePlugin;

require "index.php";

// Create our blog
$blog = new Blog();
$blog->title = ' Hello, World';
$blog->text = 'Some text';

// Attach observers
$blog->attach(new SendMailPlugin(), 'all');
$blog->attach(new ChangeTextPlugin(), 'blog:create');
$blog->attach(new ChangeTitlePlugin(), 'blog:update');

// The Event happened
$blog->create();
echo '<br>';
$blog->update();

echo "{$blog->title}<br>";
echo "{$blog->text}<br>";