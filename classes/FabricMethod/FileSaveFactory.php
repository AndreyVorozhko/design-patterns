<?php

namespace FabricMethod;
use FabricMethod\ISaveFactory;

// Фабрика объектов для сохранения в файл
class FileSaveFactory implements ISaveFactory
{
    private $filePath;

    public function __construct(string $filePath)
    {
        $this->filePath = $filePath;
    }

    public function createSaver(): ISave
    {
        return new FileSave($this->filePath);
    }
}