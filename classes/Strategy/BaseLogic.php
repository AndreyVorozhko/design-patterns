<?php

namespace Strategy;

class BaseLogic
{
    private $saver;

    public function __construct(IFileSave $saver){
        $this->saver = $saver;
    }

    public function execute(){
        $this->saver->save();
        return true;
    }
}