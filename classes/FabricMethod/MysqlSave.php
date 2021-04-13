<?php

namespace FabricMethod;

class MysqlSave implements ISave
{
    private $mysqli;

    public function __construct($host, $user, $pass, $dbname){
        $this->mysqli = new \mysqli($host, $user, $pass, $dbname);
        if($this->mysqli->connect_error){
            exit('Ошибка подключения (' . $this->mysqli->connect_errno . ') '
            . $this->mysqli->connect_error);
        }
    }

    public function save($message){
        $this->mysqli->query("INSERT INTO `messages`(`text`) VALUES ('" . $message . "')");
    }
}