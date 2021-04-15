<?php

namespace Mediator;

class PageHelper implements IHelper
{

    public $data, $page, $router;

    public function __construct($data, $page, $router){
        $this->data = $data;
        $this->page = $page;
        $this->route = $router;

        $this->data->setPageHelper($this);
        $this->page->setPageHelper($this);
        $this->route->setPageHelper($this);
    }

    public function sendResponse($content){
        $this->route->output($content);
    }

    public function getRequest(){
        $this->page->render();
    }

    public function getData(){
        return $this->data->getData();
    }
}