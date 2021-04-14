<?php

use Singletone\FileSave;

require "index.php";

$file = FileSave::getInstance();
$file->save(__DIR__);

$file = FileSave::getInstance();
$file->save(__DIR__);

$file = FileSave::getInstance();
$file->save(__DIR__);

$file = FileSave::getInstance();
$file->save(__DIR__); 