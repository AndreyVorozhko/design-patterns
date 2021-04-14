<?php

use Multitone\FileSave;

require "index.php";

$file = FileSave::getInstance('user-log');
$file->save(__DIR__);

$file = FileSave::getInstance('system-log');
$file->save(__DIR__);

$file = FileSave::getInstance('user-log');
$file->save(__DIR__);

$file = FileSave::getInstance('system-log');
$file->save(__DIR__);