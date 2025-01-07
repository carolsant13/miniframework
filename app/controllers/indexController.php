<?php
    namespace app\controllers;

    class indexController{

        private $view;
        public function __construct()
        {
            $this->view = new \stdClass();
        }

        public function index(){

            $this->view-> dados= array('sofa', 'cadeira', 'cama');
            $this->render('index');
        }

        public function sobreNos(){

            $this->view-> dados= array('notebook', 'smartphone');
            $this->render('sobreNos');
        }

        public function render($view){
            $classAtual =get_class($this);

            $classAtual =str_replace('app\\controllers\\', '', $classAtual);

            $classAtual =strtolower( str_replace('Controller', '', $classAtual));

            require_once '../app/views/'.$classAtual.'/'.$view.'.php';
    }
    }
?>