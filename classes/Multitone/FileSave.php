<?php

namespace Multitone;

class FileSave {
    private $filePath;

    private static $_instance = [];

    private function __construct($str)
    {
        $this->filePath = $str . '-' . md5(microtime()) . '.txt';
    }

    public static function getInstance($str): FileSave {
        if(!isset(self::$_instance[$str])){
            self::$_instance[$str] = new Static($str);
        }
        return self::$_instance[$str];
    }

    public function save($dir){
        $content = "text " . rand(0,100) . PHP_EOL;
        if(file_exists($dir . '/' . $this->filePath)){
            $content = file_get_contents($dir . '/' . $this->filePath) . $content;
        }
        file_put_contents($dir . '/' . $this->filePath, $content);
    }

    private function __clone(){

    }

    private function __wakeup(){
        
    }
}