<?php

require "functions.php";
spl_autoload_register('project_autoload');

if (sizeof(get_included_files()) == 2){
    foreach (new DirectoryIterator('.') as $fileInfo) {
        if($fileInfo->getExtension() != 'php' || $fileInfo->getFilename() == 'index.php' || $fileInfo->getFilename() == 'functions.php'){
            continue;
        }
        echo "<a href=\"{$fileInfo->getFilename()}\">{$fileInfo->getFilename()}</a><br>\n";
    }
}else{
    echo "<a href=\"{$_SERVER['HTTP_REFERER']}\"><-- Go back</a><hr>";
}