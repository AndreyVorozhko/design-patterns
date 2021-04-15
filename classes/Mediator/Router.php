<?php

namespace Mediator;

class Router extends App
{
    public function request(){
        $this->page_helper->getRequest();
    }

    public function output(string $content){
        echo $content;
    }
}