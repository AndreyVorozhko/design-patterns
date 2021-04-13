<?php

namespace AbstractFactory;

class SqliteDatabaseConnect implements DatabaseConnect
{   
    private $sqlite;

    public function __construct($filename){
        // You need to enable SQLite3 in php.ini by uncomment this string extension=sqlite3
        $this->sqlite = new \SQLite3($filename);
    }
    public function connection(){
        return $this->sqlite;
    }
}