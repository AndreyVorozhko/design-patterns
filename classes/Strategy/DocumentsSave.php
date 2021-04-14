<?php

namespace Strategy;

class DocumentsSave extends BaseSave{

    public function save(){

        if(file_exists("tmp/{$this->filePath}")){
            copy("tmp/{$this->filePath}", "documents/{$this->filePath}");
        }
    }
}