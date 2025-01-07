<?php

namespace MF\controller;

abstract class action{

    protected $view;

    public function __construct()
    {
        $this->view = new \stdClass();
    }

    protected function render($view){
        $classAtual =get_class($this);

        $classAtual =str_replace('app\\controllers\\', '', $classAtual);

        $classAtual =strtolower( str_replace('Controller', '', $classAtual));

        require_once '../app/views/'.$classAtual.'/'.$view.'.php';
}
}
?>