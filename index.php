<?php

foreach (new DirectoryIterator('.') as $fileInfo) {
    if($fileInfo->getExtension() != 'php' || $fileInfo->getFilename() == 'index.php' || $fileInfo->getFilename() == 'functions.php'){
        continue;
    }
    echo "<a href=\"{$fileInfo->getFilename()}\">{$fileInfo->getFilename()}</a><br>\n";
}