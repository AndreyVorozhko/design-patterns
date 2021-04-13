<?php

namespace AbstractFactory;

// Этот интерфейс - ядро абстрактной фабрики

interface DatabaseFactory
{
    public function connect() : DatabaseConnect;

    public function query() : DatabaseQuery;
}