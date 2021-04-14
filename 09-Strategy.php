<?php

use Strategy\DocumentsSave;
use Strategy\imagesSave;
use Strategy\BaseLogic;
use Strategy\IFileSave;

require "functions.php";
spl_autoload_register('project_autoload');

// Using abstract class BaseLogic

//$obj = new BaseLogic(new DocumentsSave('Sample_doc.docx'));
/*
$obj = new BaseLogic(new ImagesSave('manuscript_6.jpg'));
$obj->execute();
*/

function strategySave($strategyCollection){

    foreach($strategyCollection as $item){
        if($item instanceof IFileSave){
            $item->save();
        }
    }

    return true;
}

strategySave(
    [new DocumentsSave('Sample_doc.docx'),
    new ImagesSave('manuscript_6.jpg')]
);