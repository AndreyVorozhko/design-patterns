<?php

use Iterator\Blog;
use Iterator\Post;

require "index.php";

$blog = new Blog;

for ($i = 1; $i <= 10; $i++){
    $blog->addPost(new Post("title_$i", "text_$i", "Author_$i"));
}

foreach($blog as $post){
    var_dump($post);
}