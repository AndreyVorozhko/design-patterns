<?php

use AbstractFactory\DatabaseFactory;
use AbstractFactory\MysqlDatabaseFactory;
use AbstractFactory\SqliteDatabaseFactory;

require "index.php";

function queryExecute(Databasefactory $factory){
    $obj = $factory->query();
    $obj->execute("INSERT INTO `messages`(`text`) VALUES ('test')");
}

queryExecute(new MysqlDatabaseFactory('127.0.0.1:3307', 'root', '', 'patterns'));
queryExecute(new SqliteDatabaseFactory('test.db'));