<?php

namespace AbstractFactory;

// Фабрика для подключения к mysql

class MysqlDatabaseFactory implements DatabaseFactory
{
    private $host, $user, $pass, $dbname;

    public function __construct(string $host, string $user, string $pass, string $dbname){
        $this->host = $host;
        $this->user = $user;
        $this->pass = $pass;
        $this->dbname = $dbname;
    }

    public function connect() : DatabaseConnect{
        return new MysqlDatabaseConnect($this->host, $this->user, $this->pass, $this->dbname);
    }

    public function query() : DatabaseQuery{
        return new MysqlDatabaseQuery($this->connect());
    }
}