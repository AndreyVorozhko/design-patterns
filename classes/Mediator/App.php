<?php

namespace Mediator;

abstract class App
{
    protected $page_helper;

    public function setPageHelper(IHelper $pageHelper){
        $this->page_helper = $pageHelper;
    }
}