<?php

namespace StaticFabric;

class StaticFactory {
    // Это класс-посредник, он должен по зхапросу создать и вернуть
    // объект определенного требуемого класса

    public static function create(string $type) : IFactory{
        return new $type;
        //$obj = StaticFactory::create('\StaticFabric\FactoryClass');
    }
}
