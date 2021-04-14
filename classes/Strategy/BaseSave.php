<?php

namespace Strategy;

abstract class BaseSave implements IFileSave
{
    protected $filePath;

    public function __construct(string $filePath){
        $this->filePath = $filePath;
    }

    public function save(){

    }
}