<?php

namespace Prototype;

class Post implements IPost{

    private $title, $text;

    private $user;
    private $comments = [];
    private $createdAt;

    public function __construct($user, $title, $text){
        $this->user = $user;
        $this->title = $title;
        $this->text = $text;
        $this->createdAt = new \DateTime();

        $this->user->addPost($this);
    }

    public function addComment($comments){
        $this->comments = $comments;
    }

    public function __clone(){
        $this->title = $this->title . ' (Copy)';
        $this->user->addPost($this);
        $this->comments = [];
        $this->createdAt = new \DateTime();
    }
}