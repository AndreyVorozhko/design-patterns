<?php

namespace Multitone;

class FileSave {
    private $filePath;

    private static $_instances = [];

    private function __construct($str)
    {
        $this->filePath = $str . '-' . md5(microtime()) . '.txt';
    }

    public static function getInstance($str): FileSave {
        if(!isset(self::$_instances[$str])){
            self::$_instances[$str] = new Static($str);
        }
        return self::$_instances[$str];
    }

    public function save($dir){
        $content = "text " . rand(0,100) . PHP_EOL;
        if(file_exists($dir . '/' . $this->filePath)){
            $content = file_get_contents($dir . '/' . $this->filePath) . $content;
        }
        file_put_contents($dir . '/' . $this->filePath, $content);
    }

    public static function removeInstance($instanceName){
        if(array_key_exists($instanceName, static::$_instances)){
            unset(static::$_instances[$instanceName]);
        }
    }

    private function __clone(){

    }

    private function __wakeup(){
        
    }
}