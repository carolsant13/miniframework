<?php
namespace MF\models;

abstract class model {
    
    protected $db;

    public function __construct(\PDO $db){
        $this->db = $db;
    }
}

?>