<?php

namespace Iterator;

//class Blog implements \Iterator
class Blog implements \IteratorAggregate
{
    private $posts = [];
    //Counter
    private $position = 0;

    public function addPost(Post $post){
        array_push($this->posts, $post);
    }

    public function getPosts(){
        return $this->posts;
    }

    /*
    // Current enement of the collecion
    public function current(){

        echo __METHOD__ . '<br>';
        return $this->posts[$this->position];
    }

    // Reset counter
    public function rewind(){
        echo __METHOD__ . '<br>';
        $this->position = 0;
    }

    // Go to the next element
    public function next(){
        echo __METHOD__ . '<br>';
        ++$this->position;
    }

    // Key of the current element
    public function key(){
        echo __METHOD__ . '<br>';
        return $this->position;
    }

    // Can we go to the next element or this is the end
    public function valid(){
        echo __METHOD__ . '<br>';
        return isset($this->posts[$this->position]);
    }
    */

    // We need this method if we implements IteratorAggregate
    public function getIterator(){

        // Build-in iterator for arrays
        return new \ArrayIterator($this->posts);
    }
}