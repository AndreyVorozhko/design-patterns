<?php

namespace Builder;

interface SQLQueryBuilder
{
    // SELECT * FROM table WHERE id = 1
    public function select(array $fields) : SQLQueryBuilder;
    public function from(string $table) : SQLQueryBuilder;
    public function where(string $field, string $operator = '', string $value = '') : SQLQueryBuilder;
    public function limit(int $start, int $offset = 0) : SQLQueryBuilder;

    // For testing and debug
    public function getQuery() : string;
}