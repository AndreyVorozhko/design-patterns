<?php

namespace TemplateMethod;

abstract class Page
{
    protected $header, $content, $footer;
    protected $page;

    abstract public function setContent();

    protected function setHeader(){
        $this->header = $this->render('header', []);
    }

    protected function setFooter(){
        $this->footer = $this->render('footer', []);
    }

    public function output(){

        $this->setHeader();
        $this->setContent();
        $this->setFooter();
        $this->page = $this->render('main', [
            'header' => $this->header,
            'content' => $this->content,
            'footer' => $this->footer,
        ]);

        return $this->getPage();
    }

    /*
    [
        'param' => 'value'
    ]
    */
    protected function render($path, $param = []){
        extract($param);

        ob_start();
        if(!file_exists("theme/$path.php")){
            throw new \Exception('No template file!');
        }
        include "theme/$path.php";

        return ob_get_clean();
    }

    public function getPage(){
        echo $this->page;
    }
}