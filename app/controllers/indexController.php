<?php
    namespace app\controllers;

    use MF\controller\action;
    use app\connection;
    use app\models\produto;

    class indexController extends action{

        public function index(){

            //$this->view-> dados= array('sofa', 'cadeira', 'cama');

            $conn= connection::getDb();

            $produto = new produto($conn);

            $produtos= $produto->getProdutos();

            $this->view->dados = $produtos;

            $this->render('index' ,'layout1');
        }

        public function sobreNos(){

            //$this->view-> dados= array('notebook', 'smartphone');
            $this->render('sobreNos', 'layout2');
        }

    }
?>