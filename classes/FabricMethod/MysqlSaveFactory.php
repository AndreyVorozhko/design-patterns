<?php

namespace FabricMethod;
use FabricMethod\ISaveFactory;

// Фабрика объектов для сохранения в бд
class MysqlSaveFactory implements ISaveFactory
{

    private $host, $user, $pass, $dbname;

    public function __construct($host, $user, $pass, $dbname){
        $this->host = $host;
        $this->user = $user;
        $this->pass = $pass;
        $this->dbname = $dbname;
    }

    public function createSaver() : ISave{
        return new MysqlSave($this->host, $this->user, $this->pass, $this->dbname);
    }
}