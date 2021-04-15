<?php

namespace Facade;

use mysqli;

class Db
{
    private $mysqli;
    private $host;
    private $user;
    private $pass;
    private $dbname;

    public function __construct($host, $user, $pass, $dbname){
        $this->host = $host;
        $this->user = $user;
        $this->pass = $pass;
        $this->dbname = $dbname;
        $this->mysqli = null;
    }

    public function connect(){
        $this->mysqli = new \mysqli($this->host, $this->user, $this->pass,  $this->dbname);

        if ($this->mysqli->connect_error) {
            die('Ошибка подключения (' . $this->mysqli->connect_errno . ') '
                    . $this->mysqli->connect_error);
        }
    }

    public function saveDocument($message){
        $q = "INSERT INTO `patterns`.`messages` (`text`) VALUES ('$message')";
        $this->mysqli->query($q);
    }
}