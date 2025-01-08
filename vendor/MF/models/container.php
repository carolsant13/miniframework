<?php
namespace MF\models;

use app\connection;

class container{
    public static function getModel($model){
        $class = '\\app\models\\'.ucfirst($model);
        $conn= connection::getDb();

        return new $class($conn);

    }
}
?>