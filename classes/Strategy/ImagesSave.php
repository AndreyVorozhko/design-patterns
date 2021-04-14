<?php

namespace Strategy;

class ImagesSave extends BaseSave{

    public function save(){

        if(file_exists("tmp/{$this->filePath}")){
            copy("tmp/{$this->filePath}", "images/{$this->filePath}");
        }
    }
}