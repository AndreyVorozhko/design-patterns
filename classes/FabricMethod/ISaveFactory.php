<?php

namespace FabricMethod;

// Интерфейс фабрики, который задает общий метод createSaver()
interface ISaveFactory
{
    public function createSaver() : ISave;
}