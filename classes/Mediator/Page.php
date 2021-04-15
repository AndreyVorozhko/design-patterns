<?php

namespace Mediator;

class Page extends App
{
    public function render(){
        $data = $this->page_helper->getData();
        $this->page_helper->sendResponse("Render page with data: $data");
    }
}