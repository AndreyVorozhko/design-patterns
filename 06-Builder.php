<?php

use Builder\SQLQueryBuilder;
use Builder\MysqlQueryBuilder;

require "functions.php";
spl_autoload_register('project_autoload');

function queryExecute(SQLQueryBuilder $builder){
    $query = $builder->
             select(['id', 'text'])->
             from('messages')->
             where('id', 2)->
             getQuery();

    echo $query;
}

queryExecute(new MysqlQueryBuilder());