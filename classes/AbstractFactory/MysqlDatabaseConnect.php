<?php

namespace AbstractFactory;

class MysqlDatabaseConnect implements DatabaseConnect
{
    private $mysqli;

    public function __construct($host, $user, $pass, $dbname){
        $this->mysqli = new \mysqli($host, $user, $pass, $dbname);
        if($this->mysqli->connect_error){
            exit('Ошибка подключения (' . $this->mysqli->connect_errno . ') '
            . $this->mysqli->connect_error);
        }
    }
    public function connection(){
        return $this->mysqli;
    }
}