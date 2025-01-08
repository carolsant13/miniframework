<?php
    namespace app\controllers;


    use MF\controller\action;
    use MF\models\container;
    use app\models\produto;
    use app\models\info;
    

    class indexController extends action{

        public function index(){
            $produto = container::getModel('Produto');

            $produtos= $produto->getProdutos();

            $this->view->dados = $produtos;

            $this->render('index' ,'layout1');
        }

        public function sobreNos(){

            $info = container::getModel('Info');

            $infos= $info->getInfo();

            $this->view->dados = $infos;

            $this->render('sobreNos' ,'layout2');
        }
        }

?>