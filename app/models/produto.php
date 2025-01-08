<?php
    
    namespace app\models;

    use MF\models\model;

    class produto extends model{

    public function getProdutos(){
        $query= 'select id, descricao, preco from tb_produtos';
        return $this->db->query($query)-> fetchAll();
    }

}
?>