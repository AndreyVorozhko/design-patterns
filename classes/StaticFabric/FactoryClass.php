<?php

namespace StaticFabric;
use StaticFabric\IFactory;

class FactoryClass implements IFactory {
    // объект этого класса мы будем создавать
    // какая тут реализация сейчас не важно
    public function save(){
        echo 'Save data';
    }
}