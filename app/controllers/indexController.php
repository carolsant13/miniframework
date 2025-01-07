<?php
    namespace app\controllers;

    use MF\controller\action;

    class indexController extends action{

        public function index(){

            $this->view-> dados= array('sofa', 'cadeira', 'cama');
            $this->render('index' ,'layout1');
        }

        public function sobreNos(){

            $this->view-> dados= array('notebook', 'smartphone');
            $this->render('sobreNos', 'layout2');
        }

    }
?>