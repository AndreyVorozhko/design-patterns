<?php

use Multitone\FileSave;

require "functions.php";
spl_autoload_register('project_autoload');

$file = FileSave::getInstance('user-log');
$file->save(__DIR__);

$file = FileSave::getInstance('system-log');
$file->save(__DIR__);

$file = FileSave::getInstance('user-log');
$file->save(__DIR__);

$file = FileSave::getInstance('system-log');
$file->save(__DIR__);