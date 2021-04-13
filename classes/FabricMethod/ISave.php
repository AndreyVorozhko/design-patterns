<?php

namespace FabricMethod;

// Этот интерфейс задает метод save() в котором определяется
// как будет сохраняться информация в базу и в файл
interface ISave
{
    public function save(string $message);
}