<?php

namespace MF\controller;

abstract class action{

    protected $view;

    public function __construct()
    {
        $this->view = new \stdClass();
    }

    protected function render($view, $layout){
        $this->view->page =$view;

        if(file_exists('../app/views/'.$layout.'.php')){
            require_once '../app/views/'.$layout.'.php';
        }else{
            $this->content();
        }
}

    protected function content(){
        $classAtual =get_class($this);

        $classAtual =str_replace('app\\controllers\\', '', $classAtual);

        $classAtual =strtolower( str_replace('Controller', '', $classAtual));

        $view = $this->view->page;
        require_once "../app/views/$classAtual/$view.php";
    }
}
?>