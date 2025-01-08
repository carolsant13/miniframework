<?php
    
    namespace app\models;

    use MF\models\model;

    class info extends model{

    public function getInfo(){
        $query= 'select titulo, descricao from tb_info';
        return $this->db->query($query)-> fetchAll();
    }

}
?>