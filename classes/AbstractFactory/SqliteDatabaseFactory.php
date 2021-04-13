<?php

namespace AbstractFactory;

// Фабрика для подключения к sqlite

class SqliteDatabaseFactory implements DatabaseFactory
{
    private $filename;

    public function __construct(string $filename){
        $this->filepath = $filename;
    }

    public function connect() : DatabaseConnect{
        return new SqliteDatabaseConnect($this->filepath);
    }

    public function query() : DatabaseQuery{
        return new SqliteDatabaseQuery($this->connect());
    }
}